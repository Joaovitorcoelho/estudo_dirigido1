<?php

print "digite quantos dias:";
 $dias=(int)fgets(STDIN);
print "digite quantas horas:";
 $horas=(int)fgets(STDIN);
print "digite quantos minutos:";
 $minutos=(int)fgets(STDIN);
print "digite quantos segundos:";
 $segundos=(int)fgets(STDIN);
$horass= ($dias*24)+$horas;
$minutoss= ($horass*60)+$minutos;
$segundoss= ($minutoss*60)+$segundos;
print "São $segundoss segundos";
