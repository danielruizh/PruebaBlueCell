<?php
function activar(){
    global $wpdb;
    $table = $wpdb->prefix . "usuario";
    $sql= "CREATE TABLE $table(
        id  INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        telefono VARCHAR(40) NOT NULL,
        mensaje VARCHAR(255) NOT NULL,
        asunto VARCHAR(255) NOT NULL,
        chek INT(1) NOT NULL,
        fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);";
    require_once(ABSPATH. 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    
}
