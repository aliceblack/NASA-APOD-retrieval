<?php
echo "<style>body{font-family: Arial; background: #1A1C1B; color: #FEFEFE; font-size: 24px;} img{display: block; margin: auto;} p{text-align: center;}</style>";

echo "<p>Astronomy Picture of the Day!</p>";
$website="https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY";
//$update=file_get_contents("php://input");
$update=file_get_contents("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY");
$update=json_decode($update, TRUE);
$title=$update["title"];
$explanation=$update["explanation"];
$url=$update["url"];
$date=$update["date"];

echo "<p>".$date."</pp>";
echo "<p>".$title."</pp>";
echo "<p>".$explanation."</p>";
echo '<img src="'.$url.'" alt="apod today image">';

?>
