<?php
print "digite o tamanho da área a ser pintada M²: ";
$areaparapintar = fgets(STDIN);
$folga = $areaparapintar+(($areaparapintar*10)/100);
$qlata = ceil($folga/108);
$precodalata = $qlata*80;
print "precisará de $qlata latas de 18L. \n";
print "Comprar as latas custará um total de $precodalata \n";
print "ou \n";
$Qgalao = ceil($folga/21.6);
$Precogalao = $Qgalao*25;
print "precisará de $Qgalao galãos de 3,6L. \n";
print "Comprar os galões custará um total de $Precogalao. \n";
print "ou \n";
$Qgalao2 = $Qgalao;
$Qlata2 = 0;
if ($Qgalao2 >= 5) {
$Qlata2 = ceil($Qgalao2/5);
$Qgalao2 = ceil($Qgalao2%5);
}
$totalapagar = ($Qgalao2*25)+($Qlata2*80);
print "você precisará de $Qgalao2 galãos e $Qlata2 latas de tinta. \n";
print "O total a pagar será de $totalapagar";
