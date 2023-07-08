<?php 
requare "config_global.php";

koneksi(hostname, username, pasword, database);

function ($host, $user, $password, $db)
{
    $koneksi = new mysqli($host, $user, $password, $db);
    return $koneksi;
}