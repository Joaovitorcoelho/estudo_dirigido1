<?php
print "digite quantos cigarros você fuma por dia:";
$dias = (int)fgets(STDIN);
print "digite a quantos anos você fuma:";
$anos= (int)fgets(STDIN); 
$cigarrosfubados =($dias)*365*($anos);
$minutosqueforamperdidos= $cigarrosfubados*10;
$horasqueforamperdidas= $minutosqueforamperdidos/60;
$diasqueforamperdidos= round($horasqueforamperdidas / 24);
print "você perdeu $diasqueforamperdidos dias de vida";
