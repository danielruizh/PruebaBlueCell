<?php

if(! function_exists('verUsuario')){
    function verUsuario(){
        add_menu_page(
            'Ver Usuarios',
            'Ver Usuarios',
            'manage_options',
            'res_ver_usuarios',
            'res_option_ver_usuarios',
            'dashicons-admin-users',
            3

        );
    }
    add_action('admin_menu', 'verUsuario');
}

if(!function_exists('res_option_ver_usuarios')){
    function res_option_ver_usuarios(){
        global $wpdb;
        $table = $wpdb->prefix. 'usuario';
        $usuarios = $wpdb->get_results("SELECT * FROM $table", OBJECT);
        ?>
        <h1>Usuarios</h1>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>telefono</th>
                <th>Mensaje</th>
                <th>Asunto</th>
                <th>terminos</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario):?>
            <tr style="text-align: center ;">
                <td><?php echo $usuario->nombre ?></td>
                <td><?php echo $usuario->email ?></td>
                <td><?php echo $usuario->telefono ?></td>
                <td><?php echo $usuario->mensaje ?></td>
                <td><?php echo $usuario->asunto ?></td>
                <td><?php echo $usuario->chek?></td>
            </tr>    
            <?php endforeach; ?>
        </tbody>
        <?php
    }

}