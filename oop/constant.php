<?php 
define('NAMA', 'Rafi Ikhsanul H');
echo NAMA;
echo "<br>";
const UMUR = 20;
echo UMUR;
echo "<hr>";
class Coba {
    const NAMA = 'Rafi Ikhsanul  H';
}
echo Coba::NAMA;
echo "<hr>";
// Magic Constant
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FUNCTION__;
echo "<br>";
echo __CLASS__;
echo "<br>";
echo __TRAIT__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;
echo "<hr>";
function coba() {
    return __FUNCTION__;
}
echo coba();
echo "<hr>";
class Coba2 {
    public $kelas = __CLASS__;
}
$obj = new Coba2;
echo $obj->kelas;
