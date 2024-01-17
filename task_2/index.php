<!-- start file index.php -->
<?php

$count = 10;
if ($count >= 9) {
    echo "Дождь, нужно надеть куртку";
} else if ($count >= 10) {
    echo "Солнце, нужно надеть солнечные очки";
}
else if ($count >= 11) {
    echo "Ветер, нужно надеть перчатки";
}
else {
        echo "Я не знаю какая погода";
}
