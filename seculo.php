 <?php
    $ano = '1700';
    $seculo = ($ano/100);
    if($ano[3] != 0){
        $seculo += 1;
    }
    print "O ano ".$ano." pertence ao século ".intval($seculo);
?> 