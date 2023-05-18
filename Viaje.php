<?php
class Viaje{
    private $destino;
    private $horaPartida;
    private $horaLlegada;
    private $numero;
    private $montoBase;
    private $fecha;
    private $cantAsientosTot;
    private $cantAsientosDisp;
    private $responsable;

    public function __construct(
        $destino, $horaPartida, $horaLlegada, $numero, $montoBase, $fecha,
        $cantAsientosTot, $cantAsientosDisp, $responsable){
        $this->destino = $destino;
        $this->horaPartida = $horaPartida;
        $this->horaLlegada = $horaLlegada;
        $this->numero = $numero;
        $this->montoBase = $montoBase;
        $this->fecha = $fecha;
        $this->cantAsientosTot = $cantAsientosTot;
        $this->cantAsientosDisp = $cantAsientosDisp;
        $this->responsable = $responsable;    
    }
    public function getDestino(){
        return $this->destino;
    }
    public function getHoraPartida(){
        return $this->horaPartida;
    }
    public function getHoraLlegada(){
        return $this->horaLlegada;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getMontoBase(){
        return $this->montoBase;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getCantAsientosTot(){
        return $this->cantAsientosTot;
    }
    public function getCantAsientosDisp(){
        return $this->cantAsientosDisp;
    }
    public function getResponsable(){
        return $this->responsable;
    }
    //Metodos de escritura 
  
    public function setDestino($destino){
        $this->destino = $destino;
    }
    public function setHoraPartida($horaPartida){
        $this->horaPartida = $horaPartida;
    }
    public function setHoraLlegada($horaLlegada){
        $this->horaLlegada = $horaLlegada;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setMontoBase($montoBase){
        $this->montoBase =$montoBase;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setCantAsientosTot($cantAsientosTot){
        $this->cantAsientosTot = $cantAsientosTot;
    }
    public function setCantAsientosDisp($cantAsientosDisp){
        $this->cantAsientosDisp =$cantAsientosDisp;
    }
    public function setResponsable($responsable){
        $this->responsable =$responsable;
    }
    //-------- toString--------
    public function __toString(){
        $cadena = "";
        $cadena = 
        "Destino: ".$this->getDestino().
        "\nFecha: ".$this->getResponsable().
        "\nHoraPartida: ".$this->getHoraPartida().
        "\nHoraLlegada: ".$this->getHoraLlegada().
        "\nNumero: ".$this->getNumero().
        "\nMontoBase: ".$this->getMontoBase().
        "\nFecha: ".$this->getFecha().
        "\nAsientos Disponibles: ".$this->getCantAsientosDisp().
        " de ".$this->getCantAsientosTot()." Asientos Totales\n";
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
        $importe += ($base * $asientosV / $this->getCantAsientosTot());
        return $importe;
    }
}