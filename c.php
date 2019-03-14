<?php
require_once('function.php');
$f = fopen( 'php://stdin', 'r' );
echo "Enter your msg to start".PHP_EOL;
while( $line = fgets( $f ) ) {
	switch ($line) 
	{
		case 7:
			exit('Exiting From Control'.PHP_EOL);
		break;
		case 8:
			client($line);
			exit(PHP_EOL.'All Process Close'.PHP_EOL);
		break;
		default:
			client($line);
			echo PHP_EOL."Enter your msg : ".PHP_EOL;
		break;
	}
	
}

fclose( $f );

?>