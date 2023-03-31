<?php
const DANSU = 100;
for ($i = 1; $i <= DANSU; $i++) {
    for ($j = 0; $j < DANSU - $i; $j++) {
        print('□');
    }
    for ($j = 0; $j < $i * 2 - 1; $j++) {
        print('■');
    }
    for ($j = 0; $j < DANSU - $i; $j++) {
        print('□');
    }
    print('<br>');
}