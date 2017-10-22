<?php
$db = mysqli_connect("localhost", "root", "", "charts");
mysqli_set_charset($db, "utf-8");

function getDataString(){
    global $db;
    $query = "SELECT country_name, population FROM countries";
    $res = mysqli_query($db, $query);
    $data = '{"cols": [';
    $data .= '{"id":"","label":"Страна","type":"string"},';
    $data .= '{"id":"","label":"Население","type":"number"}';
    $data .= '],"rows": [';

    while ($row = mysqli_fetch_assoc($res)) {
      $data .= '{"c":[{"v":"' . $row['country_name'] . '"},{"v":' . $row['population'] . '}]},';
    }
    $data = rtrim($data, ',');
    $data .= ']}';
    return $data;
}
echo getDataString();

?>
