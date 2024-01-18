<?php
for ($number = 0; $number < 100; $number++) {
    if ($number < 10) {
        echo "0$number, ";
    } else {
        echo "$number, ";
    }
}