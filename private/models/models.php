<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-05-22
 * Time: 13:37
 */

function get_foto($id)
{
    $pdo = dbConnect();
    $sql = "SELECT 'name' FROM fotos WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    $stmt->execute(['id' => $id]);
    $foto = $stmt->fetchColumn();
    return $foto;
}

function get_info($id)
{
    $pdo = dbConnect();
    $sql = "SELECT description FROM aboutUs WHERE id = :id";
    $statement = $pdo->prepare($sql);

    $statement->execute(['id' => $id]);
    $desc = $statement->fetchColumn();
    return $desc;
}

function slideShow()
{
    $pdo = dbConnect();
    $sql = "SELECT * FROM `fotos` ORDER BY `id`";

    $slider = array();
    $stmt = $pdo->query($sql) or die ('Sorry ik kan deze Query niet opvragen');

    foreach ($stmt as $record):
        $slider[] = $record;
        echo "<div class='mySlides fade'>" .
            "<img src='images/" . $record['name'] . "'>" .
            "<div class='text'>" . $record['text'] .
            "</div>" .
            "<div class='desc'>" . $record['About'] . "<a href='#'>" . " Lees meer " . "</a>" .
            "</div>" .
            "</div>";
    endforeach;
}

function Contact()
{

    $pdo = dbConnect();
    $sql = "SELECT * FROM `about` ORDER BY `id`";

    $Info = array();
    $stmt = $pdo->query($sql) or die ('Sorry ik kan deze Query niet opvragen');

    foreach ($stmt as $record):
        $Info[] = $record;
        echo "<div class='Contact-container'>" .
            "<div class='Conctact-information'>" .
            "<p class='C-info'>" . " Name: " . $record['name'] . "<br>"
            . " E-mail: " . $record['email'] . "<br>"
            . " Phonenumber: " . $record['number'] . "<br>"
            . " Own Website: " . "<a target='_blank' href='" . $record['website'] . "'>" . $record['website'] . "</a>" . "</p>" .
            "</div>" .
            "</div>";
    endforeach;

}

function Pantheon()
{



}