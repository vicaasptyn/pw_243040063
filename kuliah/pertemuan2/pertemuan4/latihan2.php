<?php
//nested loof/looping bersarang
for ($i = 1; $i <= 1; $i--) {
    for ($i = 8; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i . " ";
        }
        echo "<br>";
    }
}
