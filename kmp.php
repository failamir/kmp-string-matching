<?php  
function kmp($text, $pattern)
{
	$textlen = strlen($text);
	$pattlen = strlen($pattern);

	for ($i = 0; $i < $textlen; $i++)
	{
		$match = true;
		for ($j = 0; $j < $pattlen; $j++)
		{
			if ($text[$i + $j] != $pattern[$j])
			{
				$match = false;
				$i += $j;
				break;
			}
		}

		if ($match) return $i;
	}

	return false;
}
?>