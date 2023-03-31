<?php
$fp = fopen("member.txt", "r");
flock($fp, LOCK_SH);
print('<ul>');
while ($line = fgetcsv($fp, 1024, ",")) {
    print("<li>{$line[0]}</li>");
}
print('</ul>');
flock($fp, LOCK_UN);
fclose($fp);