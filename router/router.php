<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "home";
}


$availablePages = ["home", "about", "services", "contact"];
$found=false;
foreach ($availablePages as $p) {
    if ($page === $p) {
        $found = true;
        break;
    }
}

if (!$found) {
    $page = "404";
}


$pageTitle = ucfirst($page) . " | NovaCraft Studio";

require_once __DIR__ . "/../controllers/$page.php";
