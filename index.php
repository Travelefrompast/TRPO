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

MyLog::log("1,2,3");
MyLog::write();
?>