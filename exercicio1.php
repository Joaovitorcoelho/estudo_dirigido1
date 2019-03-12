<?php
print "digite qual o tamanho em metros vai ser convertido para milimetros";
$metros = (int) fgets(STDIN);
$metross = floor($metros*1000);
print "você tem $metross milimetros";
