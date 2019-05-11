<?php
function cetak($banyak)
{
    for ($i = 1; $i <= $banyak; $i++) {
        $length = 32;
        $tampil = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);

        echo $tampil . "\n";
    }
}

echo cetak(2);
