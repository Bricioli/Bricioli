<?php
    $num = 1;
    $count = 0;
    print "Numero: ".$num. " = ";
while ($num >= 1){
    $divisores = 0;
    for($j = $num; $j >= 1; $j--)
    {
        if (($num % $j) == 0) {
            $divisores++;
        }
    }
    if ($divisores == 2){
        $primo = $num;
        print $primo;
        $count++;
        break;
    }
    $num--;
}
if ($count == 0) {
    print 0;
}

?>