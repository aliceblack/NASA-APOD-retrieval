<?php
echo "Stampa immagine apod nasa";
$website="https://api.nasa.gov/planetary/apod";
$update=file_get_contents("php://input");
$update=json_decode($update, TRUE);
$title=$update["title"];
$explanation=$update["explanation"];
$url=$update["url"];

echo $title;
echo $explanation;
header('Content-type: image/jpeg');
readfile($url);

?>
