<?php

function pr($data){
    echo '<pre>';
    if(is_array($data)){//is_array проверяет явлются ли данные массивом
        print_r($data);
    }else{
        echo $data;
    };
    echo '</pre>';
};