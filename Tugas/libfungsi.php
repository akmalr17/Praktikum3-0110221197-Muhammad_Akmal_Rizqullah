
<?php
    //Funtion Luas Segitiga
    function stiga($a, $t){
        $luas = 1/2 * $a * $t;
        return $luas;
    }

    //Function Luas Pesegi Panjang
    function ppanjang($p, $l){
        $rumus = $p * $l;
        return $rumus;
    }

    //Function Volume Kubus
    function kbs($s){
        $volume = $s * $s * $s;
        return $volume;
    }

    //Function Volume balok
    function blk($pa, $le, $ti){
        $vlmblk = $pa * $le * $ti;
        return $vlmblk;
    }
?>

<?php
    function hasil_kelulusan($nilai_akhir){
        if ($nilai_akhir >= 55){
            return "LULUS";
        }else{
            return "TIDAK LULUS";
        }
    }
?>

<?php
    function grade($nilai_akhir){
        if($nilai_akhir >= 0 and $nilai_akhir <= 35){
            return "E";
        }elseif($nilai_akhir >= 36 and $nilai_akhir <= 55){
            return "D";
        }elseif($nilai_akhir >= 56 and $nilai_akhir <=69){
            return "C";
        }elseif($nilai_akhir >= 70 and $nilai_akhir <=84){
            return "B";
        }elseif($nilai_akhir >= 85 and $nilai_akhir <= 100){
            return "A";
        }else{
            return "I";
        }
    }
?>

<?php
    function predikat($grade){
        if($grade == "E"){
            return "Sangat Kurang";
        }elseif($grade == "D"){
            return "Kurang";
        }elseif($grade == "C"){
            return "Cukup";
        }elseif($grade == "B"){
            return "Memuaskan";
        }elseif($grade == "A"){
            return "Sangat Memuaskan";
        }else{
            return "Tidak Ada";
        }
    }
?>

