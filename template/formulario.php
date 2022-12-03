<?php
include 'include/js.php';
function formulario(){
    if(is_single()):
        wp_enqueue_style('styrleForm',plugins_url('/css/app.css', __FILE__),[],'1.0.0');
    ?>
    <div class="contenedor">
    <form action="" class="form">
          <label for="nombre">Nombre*</label>
          <input id='nombre' type="text" >      
          <label for="email">Email*</label>
          <input id='email' type="email" >      
          <label for="telefono">Telefono*</label>
          <input id="telefono" type="tel">      
          <label for="Mensaje">Mensaje*</label>
          <textarea id="mensaje" name="Mensaje" id="" cols="30" rows="10" ></textarea>      
          <label for="Asunto">Asunto*</label>
          <input id="asunto"  type="text" >      
          <label for="terminos"><input id="terminos"  name="terminos" type="checkbox" >Aceptación de politicas</label> 
          <input type="submit" id="enviar" value="Enviar">     
    </form> 

    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
     wp_enqueue_script('jqueryFrom',plugins_url('js/app.js',__FILE__), array('jquery'));
    endif;
}

add_action('wp_ajax_instertUser', 'insertUser');
add_action('wp_ajax_nopriv_instertUser', 'insertUser');
function insertUser(){
    global $wpdb;
    $usuario = array(
        'nombre'=> $_POST['nombre'],
        'email'=> $_POST['email'],
        'telefono'=> $_POST['telefono'],
        'mensaje'=> $_POST['mensaje'],
        'asunto'=> $_POST['asunto'],
        'chek'=> 1,
    );
    $table = $wpdb->prefix. 'usuario';
    $wpdb->insert($table, $usuario);

}

