<?php
if (!empty($_REQUEST['textarea'])) 
{
    $text = $_REQUEST['textarea'];
    $a = array();
    $a = str_word_count($text,  $format = 1);
    echo 'Количество слов: ', count($a), ' Количество симвовлов: ', strlen($text);
}
?>
<form action="" method="GET">
<label for = "textarea">Textarea</label>
    <textarea rows = "3" name = "textarea"></textarea>
    <input type = "submit" value = "Save">
</form>
