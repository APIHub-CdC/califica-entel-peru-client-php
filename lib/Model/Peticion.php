<?php

namespace calificaentel\pe\Client\Model;

use \ArrayAccess;
use \calificaentel\pe\Client\ObjectSerializer;

class Peticion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'Peticion';
    
    protected static $RCCPMTypes = [
        'folio' => 'string',
        'tipo_documento' => 'string',
        'numero_documento' => 'string',
        'id_usuario' => 'string',
        'id_tipo_operacion' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'folio' => null,
        'tipo_documento' => null,
        'numero_documento' => null,
        'id_usuario' => null,
        'id_tipo_operacion' => null
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
        'folio' => 'folio',
        'tipo_documento' => 'tipoDocumento',
        'numero_documento' => 'numeroDocumento',
        'id_usuario' => 'idUsuario',
        'id_tipo_operacion' => 'idTipoOperacion'
    ];
    
    protected static $setters = [
        'folio' => 'setFolio',
        'tipo_documento' => 'setTipoDocumento',
        'numero_documento' => 'setNumeroDocumento',
        'id_usuario' => 'setIdUsuario',
        'id_tipo_operacion' => 'setIdTipoOperacion'
    ];
    
    protected static $getters = [
        'folio' => 'getFolio',
        'tipo_documento' => 'getTipoDocumento',
        'numero_documento' => 'getNumeroDocumento',
        'id_usuario' => 'getIdUsuario',
        'id_tipo_operacion' => 'getIdTipoOperacion'
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
        $this->container['folio'] = isset($data['folio']) ? $data['folio'] : null;
        $this->container['tipo_documento'] = isset($data['tipo_documento']) ? $data['tipo_documento'] : null;
        $this->container['numero_documento'] = isset($data['numero_documento']) ? $data['numero_documento'] : null;
        $this->container['id_usuario'] = isset($data['id_usuario']) ? $data['id_usuario'] : null;
        $this->container['id_tipo_operacion'] = isset($data['id_tipo_operacion']) ? $data['id_tipo_operacion'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tipo_documento'] === null) {
            $invalidProperties[] = "'tipo_documento' can't be null";
        }
        if ((mb_strlen($this->container['tipo_documento']) > 2)) {
            $invalidProperties[] = "invalid value for 'tipo_documento', the character length must be smaller than or equal to 2.";
        }
        if ($this->container['numero_documento'] === null) {
            $invalidProperties[] = "'numero_documento' can't be null";
        }
        if ((mb_strlen($this->container['numero_documento']) > 12)) {
            $invalidProperties[] = "invalid value for 'numero_documento', the character length must be smaller than or equal to 12.";
        }
        if ($this->container['id_usuario'] === null) {
            $invalidProperties[] = "'id_usuario' can't be null";
        }
        if ((mb_strlen($this->container['id_usuario']) > 10)) {
            $invalidProperties[] = "invalid value for 'id_usuario', the character length must be smaller than or equal to 10.";
        }
        if ($this->container['id_tipo_operacion'] === null) {
            $invalidProperties[] = "'id_tipo_operacion' can't be null";
        }
        if ((mb_strlen($this->container['id_tipo_operacion']) > 3)) {
            $invalidProperties[] = "invalid value for 'id_tipo_operacion', the character length must be smaller than or equal to 3.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolio()
    {
        return $this->container['folio'];
    }
    
    public function setFolio($folio)
    {
        $this->container['folio'] = $folio;
        return $this;
    }
    
    public function getTipoDocumento()
    {
        return $this->container['tipo_documento'];
    }
    
    public function setTipoDocumento($tipo_documento)
    {
        if ((mb_strlen($tipo_documento) > 2)) {
            throw new \InvalidArgumentException('invalid length for $tipo_documento when calling Peticion., must be smaller than or equal to 2.');
        }
        $this->container['tipo_documento'] = $tipo_documento;
        return $this;
    }
    
    public function getNumeroDocumento()
    {
        return $this->container['numero_documento'];
    }
    
    public function setNumeroDocumento($numero_documento)
    {
        if ((mb_strlen($numero_documento) > 12)) {
            throw new \InvalidArgumentException('invalid length for $numero_documento when calling Peticion., must be smaller than or equal to 12.');
        }
        $this->container['numero_documento'] = $numero_documento;
        return $this;
    }
    
    public function getIdUsuario()
    {
        return $this->container['id_usuario'];
    }
    
    public function setIdUsuario($id_usuario)
    {
        if ((mb_strlen($id_usuario) > 10)) {
            throw new \InvalidArgumentException('invalid length for $id_usuario when calling Peticion., must be smaller than or equal to 10.');
        }
        $this->container['id_usuario'] = $id_usuario;
        return $this;
    }
    
    public function getIdTipoOperacion()
    {
        return $this->container['id_tipo_operacion'];
    }
    
    public function setIdTipoOperacion($id_tipo_operacion)
    {
        if ((mb_strlen($id_tipo_operacion) > 3)) {
            throw new \InvalidArgumentException('invalid length for $id_tipo_operacion when calling Peticion., must be smaller than or equal to 3.');
        }
        $this->container['id_tipo_operacion'] = $id_tipo_operacion;
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
