<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-05-22
 * Time: 13:37
 */

function get_foto($id){
    $pdo = dbConnect();
    $sql = "SELECT name FROM fotos WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    $stmt->execute(['id' => $id]);
    $foto = $stmt->fetchColumn();
    return $foto;
}
