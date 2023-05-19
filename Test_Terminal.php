<?php
include_once 'Responsable.php';
include_once 'Empresa.php';
include_once 'Viaje.php';
include_once 'ViajeInt.php';
include_once 'ViajeNac.php';
include_once 'Terminal.php';

//Responsables
$rey = new Responsable("juan", "Garay", 23456789, "las gaviotas", "jau@gmail.com", 2990666444);
//Empresas
$viaTang = new Empresa(101, "Transporte Via Tang", []);
$transCoco = new Empresa(102, "Viajes TransCoco", []);
$elViajero = new Empresa(103, "Transporte El Viajero", []);

//Viajes
$viajeNac1 = new ViajeNac("Mendoza", "16", "22", 1234, 3000, "23-05-2024", 30, 3, $rey);
$viajeNac2 = new ViajeNac("Cordoba", "12", "12", 1212, 4000, "12.06-2023", 20, 2, $rey);
$viajeNac3 = new ViajeNac("Mendoza", "34", "22", 1234, 7000, "23-05-2024", 30, 3, $rey);
$viajeNac4 = new ViajeNac("Cordoba", "32", "30", 1212, 6000, "12.06-2023", 20, 2, $rey);
$viajeNac5 = new ViajeNac("Mendoza", "32", "20", 1234, 5000, "23-05-2024", 30, 3, $rey);
$viajeNac6 = new ViajeNac("Cordoba", "13", "12", 1212, 4000, "12.06-2023", 20, 2, $rey);

$viajeInt1 = new ViajeInt("Turquia", "16", "22", 1234, 3000, "23-05-2024", 30, 3, $rey, true);
$viajeInt2 = new ViajeInt("Chile", "12", "12", 1212, 4000, "12.06-2023", 20, 2, $rey, false);
$viajeInt3 = new ViajeInt("Uruguay", "34", "22", 1234, 7000, "23-05-2024", 30, 3, $rey, true);
$viajeInt4 = new ViajeInt("La paz", "32", "30", 1212, 6000, "12.06-2023", 20, 2, $rey, true);
$viajeInt5 = new ViajeInt("Colombia", "32", "20", 1234, 5000, "23-05-2024", 30, 3, $rey, false);
$viajeInt6 = new ViajeInt("Temuco", "13", "12", 1212, 4000, "12.06-2023", 20, 2, $rey, false);

//Agregar viajes a las empresas

$viaTang->setColViajes([$viajeNac1, $viajeNac2, $viajeInt1, $viajeInt2, $viajeInt3]);
$transCoco->setColViajes([$viajeNac3, $viajeNac4 ,$viajeInt4, $viajeInt5, $viajeInt6]);

//Terminal
$colEmpre = [$viaTang, $transCoco, $elViajero];
$terminal1 = new Terminal("Super Terminal", "aca nomas 123", $colEmpre);

//coleccion viaje menor Valor
$colViajesEconomicos = $terminal1->darViajeMenorValor();
echo "Vealo usted mismo: \n";

for ($z = 0; $z < count($colViajesEconomicos); $z++){
     echo $colViajesEconomicos[$z] . "\n------------------------------------------------\n";
}
echo "A este Punto final de los Finales, no le siguen dos puntos suspensivos. ";