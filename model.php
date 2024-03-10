<?php

function kelulusan($hasil_penilaian_akhir)
{
    if ($hasil_penilaian_akhir >= 56) {
        return 'LULUS';
    } elseif ($hasil_penilaian_akhir >= 0 && $hasil_penilaian_akhir < 56) {
        return 'TIDAK LULUS';
    } else {
        return 'TIDAK VALID';
    }
}

function grade($hasil_penilaian_akhir)
{
    if ($hasil_penilaian_akhir >= 0 && $hasil_penilaian_akhir <= 35) {
        return 'E';
    } elseif ($hasil_penilaian_akhir <= 55) {
        return 'D';
    } elseif ($hasil_penilaian_akhir <= 69) {
        return 'C';
    } elseif ($hasil_penilaian_akhir <= 84) {
        return 'B';
    } elseif ($hasil_penilaian_akhir <= 100) {
        return 'A';
    } else {
        return 'TIDAK VALID';
    }
}

?>
