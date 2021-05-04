<?php

namespace CalificaEntelPeruClientPhp\Client\Model;

use \ArrayAccess;
use \CalificaEntelPeruClientPhp\Client\ObjectSerializer;

class Respuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'Respuesta';
    
    protected static $RCCPMTypes = [
        'folio' => 'string',
        'num_consulta' => 'float',
        'resultado' => 'string',
        'clave_resultado' => 'string',
        'tope_equipos' => 'string',
        'ced_cargo_fijo' => 'string',
        'ce_vep' => 'string',
        'oferta' => 'string',
        'plazo_maximo' => 'string',
        'cuota_inicial_minima' => 'string',
        'cargo_recibo_maximo' => 'string',
        'porcentaje' => 'string',
        'mensaje_otros' => 'string',
        'decil' => 'string',
        'promocion_vigente' => 'string',
        'motivos' => '\CalificaEntelPeruClientPhp\Client\Model\Motivos[]'
    ];
    
    protected static $RCCPMFormats = [
        'folio' => null,
        'num_consulta' => null,
        'resultado' => null,
        'clave_resultado' => null,
        'tope_equipos' => null,
        'ced_cargo_fijo' => null,
        'ce_vep' => null,
        'oferta' => null,
        'plazo_maximo' => null,
        'cuota_inicial_minima' => null,
        'cargo_recibo_maximo' => null,
        'porcentaje' => null,
        'mensaje_otros' => null,
        'decil' => null,
        'promocion_vigente' => null,
        'motivos' => null
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
        'num_consulta' => 'numConsulta',
        'resultado' => 'resultado',
        'clave_resultado' => 'claveResultado',
        'tope_equipos' => 'topeEquipos',
        'ced_cargo_fijo' => 'cedCargoFijo',
        'ce_vep' => 'ceVep',
        'oferta' => 'oferta',
        'plazo_maximo' => 'plazoMaximo',
        'cuota_inicial_minima' => 'cuotaInicialMinima',
        'cargo_recibo_maximo' => 'cargoReciboMaximo',
        'porcentaje' => 'porcentaje',
        'mensaje_otros' => 'mensajeOtros',
        'decil' => 'decil',
        'promocion_vigente' => 'promocionVigente',
        'motivos' => 'motivos'
    ];
    
    protected static $setters = [
        'folio' => 'setFolio',
        'num_consulta' => 'setNumConsulta',
        'resultado' => 'setResultado',
        'clave_resultado' => 'setClaveResultado',
        'tope_equipos' => 'setTopeEquipos',
        'ced_cargo_fijo' => 'setCedCargoFijo',
        'ce_vep' => 'setCeVep',
        'oferta' => 'setOferta',
        'plazo_maximo' => 'setPlazoMaximo',
        'cuota_inicial_minima' => 'setCuotaInicialMinima',
        'cargo_recibo_maximo' => 'setCargoReciboMaximo',
        'porcentaje' => 'setPorcentaje',
        'mensaje_otros' => 'setMensajeOtros',
        'decil' => 'setDecil',
        'promocion_vigente' => 'setPromocionVigente',
        'motivos' => 'setMotivos'
    ];
    
    protected static $getters = [
        'folio' => 'getFolio',
        'num_consulta' => 'getNumConsulta',
        'resultado' => 'getResultado',
        'clave_resultado' => 'getClaveResultado',
        'tope_equipos' => 'getTopeEquipos',
        'ced_cargo_fijo' => 'getCedCargoFijo',
        'ce_vep' => 'getCeVep',
        'oferta' => 'getOferta',
        'plazo_maximo' => 'getPlazoMaximo',
        'cuota_inicial_minima' => 'getCuotaInicialMinima',
        'cargo_recibo_maximo' => 'getCargoReciboMaximo',
        'porcentaje' => 'getPorcentaje',
        'mensaje_otros' => 'getMensajeOtros',
        'decil' => 'getDecil',
        'promocion_vigente' => 'getPromocionVigente',
        'motivos' => 'getMotivos'
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
        $this->container['num_consulta'] = isset($data['num_consulta']) ? $data['num_consulta'] : null;
        $this->container['resultado'] = isset($data['resultado']) ? $data['resultado'] : null;
        $this->container['clave_resultado'] = isset($data['clave_resultado']) ? $data['clave_resultado'] : null;
        $this->container['tope_equipos'] = isset($data['tope_equipos']) ? $data['tope_equipos'] : null;
        $this->container['ced_cargo_fijo'] = isset($data['ced_cargo_fijo']) ? $data['ced_cargo_fijo'] : null;
        $this->container['ce_vep'] = isset($data['ce_vep']) ? $data['ce_vep'] : null;
        $this->container['oferta'] = isset($data['oferta']) ? $data['oferta'] : null;
        $this->container['plazo_maximo'] = isset($data['plazo_maximo']) ? $data['plazo_maximo'] : null;
        $this->container['cuota_inicial_minima'] = isset($data['cuota_inicial_minima']) ? $data['cuota_inicial_minima'] : null;
        $this->container['cargo_recibo_maximo'] = isset($data['cargo_recibo_maximo']) ? $data['cargo_recibo_maximo'] : null;
        $this->container['porcentaje'] = isset($data['porcentaje']) ? $data['porcentaje'] : null;
        $this->container['mensaje_otros'] = isset($data['mensaje_otros']) ? $data['mensaje_otros'] : null;
        $this->container['decil'] = isset($data['decil']) ? $data['decil'] : null;
        $this->container['promocion_vigente'] = isset($data['promocion_vigente']) ? $data['promocion_vigente'] : null;
        $this->container['motivos'] = isset($data['motivos']) ? $data['motivos'] : null;
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
    
    public function getFolio()
    {
        return $this->container['folio'];
    }
    
    public function setFolio($folio)
    {
        $this->container['folio'] = $folio;
        return $this;
    }
    
    public function getNumConsulta()
    {
        return $this->container['num_consulta'];
    }
    
    public function setNumConsulta($num_consulta)
    {
        $this->container['num_consulta'] = $num_consulta;
        return $this;
    }
    
    public function getResultado()
    {
        return $this->container['resultado'];
    }
    
    public function setResultado($resultado)
    {
        $this->container['resultado'] = $resultado;
        return $this;
    }
    
    public function getClaveResultado()
    {
        return $this->container['clave_resultado'];
    }
    
    public function setClaveResultado($clave_resultado)
    {
        $this->container['clave_resultado'] = $clave_resultado;
        return $this;
    }
    
    public function getTopeEquipos()
    {
        return $this->container['tope_equipos'];
    }
    
    public function setTopeEquipos($tope_equipos)
    {
        $this->container['tope_equipos'] = $tope_equipos;
        return $this;
    }
    
    public function getCedCargoFijo()
    {
        return $this->container['ced_cargo_fijo'];
    }
    
    public function setCedCargoFijo($ced_cargo_fijo)
    {
        $this->container['ced_cargo_fijo'] = $ced_cargo_fijo;
        return $this;
    }
    
    public function getCeVep()
    {
        return $this->container['ce_vep'];
    }
    
    public function setCeVep($ce_vep)
    {
        $this->container['ce_vep'] = $ce_vep;
        return $this;
    }
    
    public function getOferta()
    {
        return $this->container['oferta'];
    }
    
    public function setOferta($oferta)
    {
        $this->container['oferta'] = $oferta;
        return $this;
    }
    
    public function getPlazoMaximo()
    {
        return $this->container['plazo_maximo'];
    }
    
    public function setPlazoMaximo($plazo_maximo)
    {
        $this->container['plazo_maximo'] = $plazo_maximo;
        return $this;
    }
    
    public function getCuotaInicialMinima()
    {
        return $this->container['cuota_inicial_minima'];
    }
    
    public function setCuotaInicialMinima($cuota_inicial_minima)
    {
        $this->container['cuota_inicial_minima'] = $cuota_inicial_minima;
        return $this;
    }
    
    public function getCargoReciboMaximo()
    {
        return $this->container['cargo_recibo_maximo'];
    }
    
    public function setCargoReciboMaximo($cargo_recibo_maximo)
    {
        $this->container['cargo_recibo_maximo'] = $cargo_recibo_maximo;
        return $this;
    }
    
    public function getPorcentaje()
    {
        return $this->container['porcentaje'];
    }
    
    public function setPorcentaje($porcentaje)
    {
        $this->container['porcentaje'] = $porcentaje;
        return $this;
    }
    
    public function getMensajeOtros()
    {
        return $this->container['mensaje_otros'];
    }
    
    public function setMensajeOtros($mensaje_otros)
    {
        $this->container['mensaje_otros'] = $mensaje_otros;
        return $this;
    }
    
    public function getDecil()
    {
        return $this->container['decil'];
    }
    
    public function setDecil($decil)
    {
        $this->container['decil'] = $decil;
        return $this;
    }
    
    public function getPromocionVigente()
    {
        return $this->container['promocion_vigente'];
    }
    
    public function setPromocionVigente($promocion_vigente)
    {
        $this->container['promocion_vigente'] = $promocion_vigente;
        return $this;
    }
    
    public function getMotivos()
    {
        return $this->container['motivos'];
    }
    
    public function setMotivos($motivos)
    {
        $this->container['motivos'] = $motivos;
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
