<?php
$card_type = '';

print('この商品は10,000円です。<br>');
if ($card_type === 'Platinum') {
    print('お客様はプラチナ会員なので30%の割引が適用されます。<br>');
} else if ($card_type === 'Gold') {
    print('お客様はゴールド会員なので20%の割引が適用されます。<br>');
} else if ($card_type === 'Silver') {
    print('お客様はシルバー会員なので10%の割引が適用されます。<br>');
} else {
    print('お客様は5%の割引が適用されます。<br>');
}