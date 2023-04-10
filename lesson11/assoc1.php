<?php
$days = ['日' => 'Sunday', '月' => 'Monday', '火' => 'Tuesday', '水' => 'Wednesday', 
         '木' => 'Thursday', '金' => 'Friday', '土' => 'Saturday'];
if (isset($_GET['ja'])) {
    echo $days[$_GET['ja']] . '<br>';
}
?>
<form method="get" action="">
    <label for="ja">日本語の曜日: </label>
    <input type="text" name="ja" id="ja">
    <input type="submit" value="英語の曜日">
</form>
