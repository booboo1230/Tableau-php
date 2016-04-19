<!DOCTYPE html>

<html>

<head> 
	<title>Tableau php</title> 
</head>

<body>

<table>

 	<?php
		
		$xml = simplexml_load_file ("classe-simploniens.xml");
	foreach($xml as $s)
		{

			echo"<tr><td>".$s->prenom." ".$s->nom."</td><td>".$s->date_naissance."</td></td></tr>";
	
		}

	?>
</table>


</body>

</html>


