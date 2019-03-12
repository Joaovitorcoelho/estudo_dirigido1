<?php
print "digite qual foi a distancia percorrida";
 $percorrida=(float)fgets(STDIN);
print "digite quanto foi a velocidade:";
 $velocidade=(float)fgets(STDIN);
$tempo=$percorrida/$velocidade;
print "a viagem leveu $tempo horas";
