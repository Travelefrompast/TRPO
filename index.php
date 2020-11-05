<?php

use Burkauskas\BurkauskasException;
use Burkauskas\MyLog;

include "Core/EquationInterface.php";
include "Core/LogInterface.php";
include "Core/LogAbstract.php";
include "Burkauskas/Equation.php";
include "Burkauskas/QuEquation.php";
include "Burkauskas/MyLog.php";
include "Burkauskas/BurkauskasException.php";

ini_set("display_errors", 1);
error_reporting(-1);

try {
    $values = array();
    for($i = 1; $i < 4; $i++){
        echo "Ввод " . $i . " Аргумента ";
        $values[] = readline();
    }
    $a = $values[0];
    $b = $values[1];
    $c = $values[2];
    MyLog::log("Переменные: (". $a .",". $b .",". $c .")");
    $v = new\Burkauskas\B();
    $x = $v->solve($a,$b,$c);
    $str = implode(",", $x);
    \Burkauskas\MyLog::log("Корни уровнения:".$str);
}catch (BurkauskasException $e){
    \Burkauskas\MyLog::log($e->getMessage());
}
MyLog::write();
?>