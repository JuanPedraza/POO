<?php

require_once("car.php");
require_once("uberX.php");
require_once("account.php");
require_once("uberPool.php");

$uberX = new uberX("CVB123", new Account("Marcus Fenix", "AND123"), "Ford", "Mustang");

$uberX->printDataCar();

$uberPool = new uberPool("CVB456", new Account("JD Fenix", "AND456"), "Ford", "Fiesta");

$uberPoolX->printDataCar();


?>