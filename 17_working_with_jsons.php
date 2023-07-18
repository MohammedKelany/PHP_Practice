<?php
error_reporting(0);
// $content = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/todos"));
// foreach ($content as $todo) {
//     echo $todo->userId . ' ' . $todo->id . ' ' . $todo->title . ' ' . $todo->completed . '<br>';
// }
$city = "lebanonf";
$request = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=2f71019b7732ec44c7834e5e8f6b84a2");
if ($request) {
  $weather = json_decode($request);
  $tempre = $weather->main->temp - 273.15;
  echo "<pre>";
  echo ("The celicios : " . $tempre . "<br>");
  echo ("The fehrenhite : " . $weather->main->temp);
  echo "</pre>";
} else {
  echo "choose a valid country please";
}
