<?php

require_once __DIR__ . "/env.php";
require_once __DIR__ . "/common/function.php";

//models 
require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";

//controllers 
require_once __DIR__ . "/controllers/HomeControllers.php";

$ctl = $_GET['ctl'] ?? '';

match ($ctl) {
    ''          => (new HomeController)->index(),
};