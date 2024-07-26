<?php
require_once "./app/views/inc/head.php";
require_once "./config/server.php";
use app\controllers\sliderController;
$sliderController = new sliderController();
$imagenesslider = $sliderController->obtenerImgSlider();
?>




<section class="middle">
            
            <div class="slider-frame">
                <ul>
                    <?php foreach ($imagenesslider as $imagen): { ?>
                        <li> <img width="380px" height="380px" src="<?php echo $imagen ['slider_url']?>"> </li>
                        <?php } endforeach; ?>

            </div>                   
</section>