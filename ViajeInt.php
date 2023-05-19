<?php
class ViajeInt extends Viaje{
    private $docAd;
    private $porcentajeImp;

    public function __construct($destino, $horaPartida, $horaLlegada, $numero, $montoBase, $fecha,
    $cantAsientosTot, $cantAsientosDisp, $responsable,$docAd)
    {
        parent::__construct($destino, $horaPartida, $horaLlegada, $numero, $montoBase, $fecha,
        $cantAsientosTot, $cantAsientosDisp, $responsable);

        $this->docAd = $docAd;
        $this->porcentajeImp = 45;
    }
    public function getDocAd(){
        return $this->docAd;
    }
    public function getPorcentajeImp(){
        return $this->porcentajeImp;
    }

    //Metodos de escritura 
  
    public function setDocAd($docAd){
        $this->docAd = $docAd;
    }
    public function setPorcentajeImp($porcentajeImp){
        $this->porcentajeImp = $porcentajeImp;
    }


    //-------- toString--------
    public function __toString(){
        $cadena = parent::__toString();
        $cadena .= 
        "Documentacion Adicional: ". ($this->getDocAd() ? " Si " : " No ").
        "\nPorcentaje incremento po Impuestos: ".$this->getPorcentajeImp()."%\n";
        return $cadena;
    }
    
    /**
     * Calcula algo del viaje 
     * retorna un importe
     * @return int
     */
    public function calcularImporteViaje(){
        $importe = 0;
        $importe = parent::calcularImporteViaje() * (($this->getPorcentajeImp()/100) + 1);
        return $importe;
    }

 
}