<?

echo "Привет!<br/><br/>";

$handle = fopen("data.txt", "ab");	// Ресурс
$date = date('(Y-m-d) H:m:s');		// Дата покупки
$title_buy = "Описание покупки";	// Описание покупки
$price = "250" . " р.";			// Стоимость покупки

$rec_buy = $date . " || " . $price . " - " . $title_buy;
fwrite($handle, $rec_buy);
fclose($handle)



?>











