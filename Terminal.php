<?php
class Terminal{
    private $denominacion;
    private $direccion;
    private $colEmpresas;

// en minuscula             denominacion  direccion  colEmpresas 
// EMPIEZA CON MAYUSCULA    Denominacion  Direccion  ColEmpresas 

    public function __construct($denominacion, $direccion, $colEmpresas){
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->colEmpresas = $colEmpresas;
    }
    public function getDenominacion(){
        return $this->denominacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getColEmpresas(){
        return $this->colEmpresas;
    }

    //Metodos de escritura 
  
    public function setDenominacion($denominacion){
        $this->denominacion = $denominacion;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setColEmpresas($colEmpresas){
        $this->colEmpresas = $colEmpresas;
    }

    //-------- toString--------
    public function __toString(){
        $cadena = "";
        $cadena = 
        "Denominacion: ".$this->getDenominacion().
        "\nDireccion: ".$this->getDireccion().
        "\nEmpresas: ".$this->verColeccion($this->getColEmpresas())."\n";
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
         * Busca el viaje de menor valor en cada coleccion de viajes de cada empresa
         * @return array
         */
        public function darViajeMenorValor(){
            $colViajesMasEco = [];
            $colEmpresas = $this->getColEmpresas();
            for ($i = 0; $i < count($colEmpresas); $i++){
                $importeMenor = 100000;
                $colViajes = $colEmpresas[$i]->getColViajes();
                for ($j = 0; $j < count($colViajes); $j++){
                    $costo = $colViajes[$j]->calcularImporteViaje();
                    if ($importeMenor > $costo){
                        $importeMenor = $costo;
                        $colViajesMasEco[$i] = $colViajes[$j];
                    }
                }
            }
            return $colViajesMasEco;
        }
 
}