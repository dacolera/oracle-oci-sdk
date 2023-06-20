<?php

namespace Augusl\OCI\contract;

use ReflectionClass;

abstract class DataTypes
{
    public function toArray()
    {
        $data = [];
        $ref = new ReflectionClass($this);
        foreach ($ref->getProperties() as $value) {
            $value->setAccessible(true);
            if (is_null($value->getValue($this))) {
                continue;
            }
            $data[$value->getName()] = $this->convObj($value->getValue($this));
        }
        return $data;
    }

    protected function convObj($data)
    {
        if ($data instanceof DataTypes) {
            return $data->toArray();
        }
        if (is_array($data)) {
            $_data = [];
            foreach ($data as $key => $val) {
                $_data[$key] = $this->convObj($val);
            }
            return $_data;
        }
        return $data;
    }

    protected const FROM_ARRAY_TEMPLATE = [
    ];

    /**
     * @param array $data
     */
    public function fromArray(array $data)
    {

        $ref = new \ReflectionObject($this);

        foreach ($data as $key => $val) {

            if (is_array($val) && empty($val)) {
                $val = [];
            } elseif (is_array($val) && is_numeric(array_key_first($val)) && in_array($key, array_keys(static::FROM_ARRAY_TEMPLATE))) {
                $val = static::FROM_ARRAY_TEMPLATE[$key]::fromIndexArray($val);
            } elseif (!is_null($val) && in_array($key, array_keys(static::FROM_ARRAY_TEMPLATE))) {
                $className = static::FROM_ARRAY_TEMPLATE[$key];
                $obj = new $className;
                $obj->fromArray($val);
                $val = $obj;
            }

            if ($ref->hasProperty($key)) {
                $property = $ref->getProperty($key);
                $property->setAccessible(true);
                $property->setValue($this, $val);
            } else {
                $this->{$key} = $val;
            }
        }
    }

    /**
     * @param $data
     * @return array
     */
    public static function fromIndexArray($data)
    {
        $list = [];
        foreach ($data as $item) {
            $obj = new static();
            $obj->fromArray($item);
            $list[] = $obj;
        }
        return $list;
    }
}
