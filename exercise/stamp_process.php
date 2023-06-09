<?php
$contract_price = $_GET['contract_price'] * 10_000;

if ($contract_price < 10_000) {
    $price = 0;
} else if ($contract_price <= 100_000) {
    $price = 200;
} else if ($contract_price <= 500_000) {
    $price = 400;
} else if ($contract_price <= 1_000_000) {
    $price = 1_000;
} else if ($contract_price <= 5_000_000) {
    $price = 2_000;
} else if ($contract_price <= 10_000_000) {
    $price = 10_000;
} else if ($contract_price <= 50_000_000) {
    $price = 20_000;
} else if ($contract_price <= 100_000_000) {
    $price = 60_000;
} else if ($contract_price <= 500_000_000) {
    $price = 100_000;
} else if ($contract_price <= 1_000_000_000) {
    $price = 200_000;
} else if ($contract_price <= 5_000_000_000) {
    $price = 400_000;
} else {
    $price = 600_000;
}
print("印紙税額は{$price}円です。<br>");