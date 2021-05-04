<?php

namespace calificaentel\pe\Client\Model;

use \ArrayAccess;
use \calificaentel\pe\Client\ObjectSerializer;

class Motivos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'motivos';
    
    protected static $RCCPMTypes = [
        'condicion' => 'string',
        'descripcion' => 'string',
        'motivo' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'condicion' => null,
        'descripcion' => null,
        'motivo' => null
    ];
    
    public static function RCCPMTypes()
    {
        return self::$RCCPMTypes;
    }
    
    public static function RCCPMFormats()
    {
        return self::$RCCPMFormats;
    }
    
    protected static $attributeMap = [
        'condicion' => 'condicion',
        'descripcion' => 'descripcion',
        'motivo' => 'motivo'
    ];
    
    protected static $setters = [
        'condicion' => 'setCondicion',
        'descripcion' => 'setDescripcion',
        'motivo' => 'setMotivo'
    ];
    
    protected static $getters = [
        'condicion' => 'getCondicion',
        'descripcion' => 'getDescripcion',
        'motivo' => 'getMotivo'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$RCCPMModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['condicion'] = isset($data['condicion']) ? $data['condicion'] : null;
        $this->container['descripcion'] = isset($data['descripcion']) ? $data['descripcion'] : null;
        $this->container['motivo'] = isset($data['motivo']) ? $data['motivo'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getCondicion()
    {
        return $this->container['condicion'];
    }
    
    public function setCondicion($condicion)
    {
        $this->container['condicion'] = $condicion;
        return $this;
    }
    
    public function getDescripcion()
    {
        return $this->container['descripcion'];
    }
    
    public function setDescripcion($descripcion)
    {
        $this->container['descripcion'] = $descripcion;
        return $this;
    }
    
    public function getMotivo()
    {
        return $this->container['motivo'];
    }
    
    public function setMotivo($motivo)
    {
        $this->container['motivo'] = $motivo;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
