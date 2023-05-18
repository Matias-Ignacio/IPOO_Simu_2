<?php
class ViajeNac extends Viaje{
    private $porcentajeDescuento;

    public function __construct($destino, $horaPartida, $horaLlegada, $numero, $montoBase, $fecha,
    $cantAsientosTot, $cantAsientosDisp, $responsable)
    {
        parent::__construct($destino, $horaPartida, $horaLlegada, $numero, $montoBase, $fecha,
        $cantAsientosTot, $cantAsientosDisp, $responsable);

        $this->porcentajeDescuento = 10;
    }
    public function getPorcentajeDescuento(){
        return $this->porcentajeDescuento;
    }

    //Metodos de escritura 
  
    public function setPorcentajeDescuento($porcentajeDescuento){
        $this->porcentajeDescuento = $porcentajeDescuento;
    }

    //-------- toString--------
    public function __toString(){
        $cadena = parent::__toString();
        $cadena .= 
        "\nPorcentaje de Descuento: ".$this->getPorcentajeDescuento()."%\n";
        return $cadena;
    }
    
        /**
     * Calcula algo del viaje 
     * retorna un importe
     * @return int
     */
    public function calcularImporteViaje(){
        $importe = 0;
        $base = $this->getMontoBase();
        $asientosV = $this->getCantAsientosTot() - $this->getCantAsientosDisp();
        $importe = $base + ($base * $asientosV / $this->getCantAsientosTot());
        $importe -= ($importe * ($this->getPorcentajeDescuento()/100));
        return $importe;
    }
 
}