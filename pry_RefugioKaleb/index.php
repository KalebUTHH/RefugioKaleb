<?php
    require_once "./autoload.php";
    require_once "./config/app.php";
    require_once "./app/views/inc/session_start.php";

    if(isset($_GET['views'])){
        $url=explode("/",$_GET['views']);
    }else{
        $url=["dashboard"];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>
<body>
    
    <?php 
            use app\controllers\viewsController;
            $viewsController= new viewsController();
            $vista=$viewsController->obtenerVistasControlador($url[0]);
    
            if($vista=="login" || $vista=="404"){
                require_once "./app/views/content/".$vista."-view.php";
            }else {

                if ($vista == "./app/views/content/administrador-view.php"
                   || $vista == "./app/views/content/crudslider-view.php"
                   || $vista == "./app/views/content/crudmascotas-view.php")
                
                   require_once "./app/views/inc/adminnavbar.php";

                else

                require_once "./app/views/inc/navbar.php";
                require_once $vista;
            }
            require_once "./app/views/inc/script.php"; 
    ?>
   
</body>
</html>