<?php
function test($kalimat)
{
    # membuat string menjadi lowercase
    $lower = strtolower($kalimat);
    # memisahkan string menjadi beberapa array
    $arr[1] = substr($lower, 0, 4);
    $arr[2] = substr($lower, 4, 5);
    $arr[3] = substr($lower, 9, 6);
    $arr[4] = substr($lower, 15, 5);
    $arr[5] = substr($lower, 20, 5);
    # menjumlahkan berapa jumlah array
    $dat = count($arr);
    print_r($dat);
    print_r($arr);
}
# input kalimat
$kalimat = "mamaMakanPepayaWaktuBuka";
# run function
test($kalimat);