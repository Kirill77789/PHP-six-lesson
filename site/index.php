<?php

if(!empty($_GET['page'])){
    $p = $_GET['page'];
}else{
    $p='main';
};

if(!file_exists($p.'.php')){
    $p = '404';
};

include 'header.php';
include  $p.'.php';
include 'footer.php';
