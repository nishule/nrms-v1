<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch($page){
            case "home": require 'home.php'; break;
            case "result": require 'result.php'; break;
            case "school": require 'school.php'; break;
            default: break;
        }
    }else{require 'home.php';}
?>