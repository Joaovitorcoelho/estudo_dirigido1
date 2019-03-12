<?php

print "digite quanto é o seu salário:";
$salario=(float)fgets(STDIN);
print "digite qual a porcentagem de aumento:";
$aumento=(float)fgets(STDIN);
$maisgrana= ($salario*($aumento/100));
$aumentoo=$maisgrana+$salario;
print "Você receberá um aumento de $maisgrana \n";
print "Seu salário será de $aumentoo \n";
