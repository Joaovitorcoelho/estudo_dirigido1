<?php
print "digite quantos graus celsius você quer transformar em graus farenheit:";
$grauscelsius=(float)fgets(STDIN);
$grausfarenheit=((9*$grauscelsius)/5)+32;
print " $grausfarenheit graus farenheit";
