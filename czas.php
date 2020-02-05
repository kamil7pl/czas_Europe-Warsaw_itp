<?php
	class czas{
		
		function teraz($miejsce="Europe/Warsaw"){//Zwraca aktualny czas.
		if($miejsce!=date_default_timezone_get())
		date_default_timezone_set($miejsce);
		return date("H:i:s d M Y",time());
		}
	}
?>
