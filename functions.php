<?php
error_reporting(~E_NOTICE & ~E_DEPRECATED);
session_start();

include dirname(__FILE__) . '/config.php';
include'includes/ez_sql_core.php';
include'includes/ez_sql_mysqli.php';
$db = new ezSQL_mysqli($config[username], $config[password], $config[database_name], $config[server]);
include'includes/general.php';
include'includes/paging.php';
include'includes/SimpleImage.php';

$mod = $_GET[m];
$act = $_GET[act];

function get_rooting_option($selected = ''){
    global $db;
    $rows = $db->get_results("SELECT id_rooting, nm_peminjam FROM tb_rooting ORDER BY id_rooting");
    foreach($rows as $row){
        if($row->id_rooting==$selected)
            $a.="<option value='$row->id_rooting' selected>$row->nm_peminjam</option>";
        else
            $a.="<option value='$row->id_rooting'>$row->nm_peminjam</option>";
    }
    return $a;
}

function parse_file_name($file_name){
    $x = strtolower($file_name);    
    $x = str_replace(array(' '), '-', $x);
    return $x;
}

function hapus_p_usaha($ID){
    global $db;
    $row = $db->get_row("SELECT p_usaha FROM tb_survei WHERE id_rooting='$ID'");
    if($row){
        $file1 = 'images/survei/' . $row->p_usaha;
        $file2 = 'images/survei/small_' . $row->p_usaha;
        if(is_file($file1))
            unlink($file1);
        if(is_file($file2))
            unlink($file2);    
    }
}

function hapus_galeri($ID){
    global $db;
    $row = $db->get_row("SELECT gambar FROM tb_galeri WHERE id_galeri='$ID'");
    if($row){
        $file1 = 'images/galeri/' . $row->p_usaha;
        $file2 = 'images/galeri/small_' . $row->p_usaha;
        if(is_file($file1))
            unlink($file1);
        if(is_file($file2))
            unlink($file2);    
    }
}
