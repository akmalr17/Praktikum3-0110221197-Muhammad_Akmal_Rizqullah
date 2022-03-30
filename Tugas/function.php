<?php
    function luas_ling($jari){
        $phi = 3.14;
        $luas = $phi *$jari *$jari;
        return $luas;
    }

    echo "Luas Lingkaran = " .luas_ling(4);
?>
