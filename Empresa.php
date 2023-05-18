<?php
class Empresa{
    private $identificacion;
    private $nombre;
    private $colViajes;


    public function __construct($identificacion, $nombre, $colViajes){
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->colViajes = $colViajes;
    }
    public function getIdentificacion(){
        return $this->identificacion;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getColViajes(){
        return $this->colViajes;
    }

    //Metodos de escritura 
  
    public function setIdentificacion($identificacion){
        $this->identificacion = $identificacion;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setColViajes($colViajes){
        $this->colViajes = $colViajes;
    }

    //-------- toString--------
    public function __toString(){
        $cadena = "";
        $cadena = 
        "Identificacion: ".$this->getIdentificacion().
        "\nNombre: ".$this->getNombre().
        "\nViajes: ".$this->verColeccion($this->getColViajes())."\n";
        return $cadena;
    }

    /**
    * Ver la coleccion en el toString
    */
    public function verColeccion($coleccion){
        $cadena = "";
        if ($coleccion != null){
            for ($i = 0; $i < count($coleccion); $i++){
                $cadena .= $coleccion[$i];
            }
        }    
        return $cadena; 
        }

    /**
     * Busca un objeto viaje en la coleccion de viajes de la empresa
     * retorna el objeto viaje
     * @param int $codigo
     * @return Viaje
    */    
    public function buscarViaje($codigo){
        $objViaje = null;
        $coleccion = $this->getColViajes();
        $i = 0;
        while ($objViaje == null && $i < count($coleccion)){
            if ($coleccion[$i]->getNumero() == $codigo){
                $objViaje = $coleccion[$i];
            }
            $i++;
        }
        return $objViaje;
    }

    /**
     * Dado un codigo de viaje de la coleccion de viajes
     * retorna el importe del costo del viaje
     * @param int $codigo
     * @return int
     */
    public function darCostoViaje($codigo){
        $importe = 0;
        $objViaje = $this->buscarviaje($codigo);

        return $importe;
    }


}