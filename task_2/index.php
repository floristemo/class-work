<!-- start file index.php -->
<?php

$college = array(
  "Студенты" => array("Никита", "Гена", "Вадим", "Артем"),
  "Преподаватели" => array("Джерри", "Том", "Крокодил", "Чебурашка")
);
foreach($college as $people => $items) {
    echo "<h1>$people</h1>";
    echo "<ul>";
    foreach($items as $item => $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}