<?php

// show all error
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'layout/header.php';

include 'layout/menu.php';


// if get page and include file defaul home.php and if notfound show error.php
if (isset($_GET['page']) && file_exists($_GET['page'] . '.php')) {
    include $_GET['page'] . '.php';
} elseif (isset($_GET['page']) && !file_exists($_GET['page'] . '.php')) {
    include 'layout/error.php';
} else {
    include 'home.php';
}


include 'layout/footer.php';

// For test chart
include 'js-chart.php';