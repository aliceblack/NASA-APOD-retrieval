<?php
echo "Stampa immagine apod nasa";
$website="https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY";
//$update=file_get_contents("php://input");
$update=file_get_contents("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY");
$update=json_decode($update, TRUE);
$title=$update["title"];
$explanation=$update["explanation"];
$url=$update["url"];

//GET "https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY";
//$titolo=$_GET["title"];
//echo $titolo;

echo "<p>".$title."</pp>";
echo "<p>".$explanation."</p>";
//header('Content-type: image/jpeg');
//readfile($url);

?>
