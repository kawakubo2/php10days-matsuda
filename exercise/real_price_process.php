<?php
$rosen = $_GET['rosen'];
$area = $_GET['area'];

$real_price = round($rosen / 0.8 * 1.1, 2);
$area_real_price = round($area * ($rosen / 0.8 * 1.1), 2);
print("路線価:{$rosen}万円 -> 実勢価格:{$real_price}万円<br>");
print("面積が{$area}m<sup>2</sup>なら、実勢価格は{$area_real_price}万円です。<br>");