<?php
function Desactivar(){
    global $wpdb;
    $table = $wpdb->prefix . "usuario";
    $sql = "DROP TABLE $table";
    $wpdb->query($sql);

}