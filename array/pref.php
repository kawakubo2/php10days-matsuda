<select>
    <option value="40">福岡県</option>
    <option value="41">佐賀県</option>
    <option value="42">長崎県</option>
    <option value="43">熊本県</option>
    <option value="44">大分県</option>
    <option value="45">宮崎県</option>
    <option value="46">鹿児島県</option>
    <option value="47">沖縄県</option>
</select>
<?php
$prefs = ['40' => '福岡県', '41' => '佐賀県', '42' => '長崎県',
          '43' => '熊本県', '44' => '大分県', '45' => '宮崎県',
          '46' => '鹿児島県', '47' => '沖縄県'];
?>
<select>
<?php foreach ($prefs as $code => $name) { ?>
    <option value="<?php print($code); ?>"><?php print($name); ?></option>
<?php } ?>
</select>
<select name="pref" id="pref">
<?php foreach($prefs as $code => $name) { ?>
    <option value="<?=$code ?>"><?=$name ?></option>
<?php } ?>
</select>