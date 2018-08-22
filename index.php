
<?

$conts = [
    'Africa' => ['Jaguar', 'Caracal caracal', 'Gorilla'],
    'Eurasia' => ['Wolf', 'Brown bear', 'Mountain hare'],
    'Australia' => ['Bos javanicus', 'Arctictis binturong', 'Ursus arctos'],
    'Antarctica' => ['Penguin', 'Blue whale', 'Killer whale'],
];

echo '<h1>Список животных через запятую</h1>';
foreach ($conts as $cont_key => $animals)
{
	echo "<h2>$cont_key</h2>";
	echo $animals[0], ', ', $animals[1], ', ', $animals[2], "<br><br>";
}
unset($animals);

echo '<hr>';
echo '<h1>Список животных из двух слов</h1>';
foreach ($conts as $cont_key => $animals)
{
	foreach ($animals as $two_animal) 
	{
		$name_animal = explode(" ", $two_animal);
			if (count($name_animal) == 2) 
			{
				$two_name[] = $two_animal;
			}
	}
		
}
foreach ($two_name as $item) 
{
	echo "$item<br>";
}	
unset($two_animal);

echo '<hr>';
echo '<h1>Случайно перемешаные имена животных</h1>';
foreach ($conts as $cont_key => $animals)
{
	foreach ($animals as $two_animal) 
	{
		$name_animal = explode(" ", $two_animal);
			if (count($name_animal) == 2) 
			{
				$one_word[] = $name_animal[0];
				$two_word[] = $name_animal[1];
			}
	}
		
}

shuffle($two_word);
foreach ($two_word as $shuffle_animals) 
{
	$cut_name = array_shift($one_word);
	echo $cut_name . ' ' . $shuffle_animals . '<br>';
}	



?>
