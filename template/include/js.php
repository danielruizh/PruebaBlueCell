<?php
function agregar(){
    if(is_single()){
        wp_enqueue_style('styrleForm',plugins_url('template/css/app.css', __FILE__));
    }
    ?>
     <?php
}
