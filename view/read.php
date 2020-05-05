<?php
$query = 'MATCH (m: book {title: "El principito"}) return m';
	$result = $connection->sendCypherQuery($query)->getResult();
	$bk = $result->get('m');

	echo '<h1>Titulo</h1>';
	foreach ($bk as $book) {
		echo $book->getProperty('title') . '<br/>';
    
		foreach ($book->getInboundRelationships() as $rel) {
			echo $rel->getStartNode()->getProperty('title') . ", " ;
		}
		echo '<br/>';
	}
?>
