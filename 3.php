<?php
function pattern($rows)
{
    for ($i = 1; $i <= $rows; $i++) {

        for ($j = 1; $j <= $rows - $i; $j++)
            echo " ";
        # cetak bintang setelah spasi
        for ($j = 1; $j <= $rows; $j++)
            echo "*";

        # Berpindah ke line baru
        echo "\n";
    }
}
# inputan 
$rows = 5;
# run function pattern
pattern($rows);