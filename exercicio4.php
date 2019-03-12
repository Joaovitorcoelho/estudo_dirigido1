<?php

print "digite qual o preço da mercadoria:";
  $mercadoria=(float)fgets(STDIN);
print "digite quanto de desconto:";
$desconto=(float)fgets(STDIN);
$descontoo=($mercadoria*($desconto/100));
$total=$mercadoria-$descontoo;
print "O desconto foi de $descontoo reais \n";
print "O preço final é de $total reais  \n";
