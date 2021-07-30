<?php
Require_once 'pdo.php';
function loai_count(){
$sql = "SELECT COUNT(id)FROM categories";
pdo_execute($sql);
}


?>