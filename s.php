<?php
require_once('function.php');
$f = fopen( 'php://stdin', 'r' );
echo "Press 1 and enter to start".PHP_EOL;
while( $line = fgets( $f ) ) {
	switch ($line) 
	{
		case 1:
			echo 'Server Selected'.PHP_EOL;
			$shell = server(400);
			if(!$shell['status'])
			{
				exit(PHP_EOL.'All Process Close'.PHP_EOL);
			}
			echo PHP_EOL.'Server Process Completed'.PHP_EOL;
			echo PHP_EOL.'TO continue Press 1 or 7 to exit'.PHP_EOL;
			echo PHP_EOL.'----LOG Start-----'.PHP_EOL;
			echo PHP_EOL.json_encode( $shell ).PHP_EOL;
			echo PHP_EOL.'----LOG End-----'.PHP_EOL;
			while ($shell['status']) 
			{
				echo 'Server Selected'.PHP_EOL;
				$shell = server(400);
				if(!$shell['status'])
				{
					exit(PHP_EOL.'All Process Close'.PHP_EOL);
				}
				echo PHP_EOL.'Server Process Completed'.PHP_EOL;
				echo PHP_EOL.'Press ctrl+c to exit..'.PHP_EOL;
				echo PHP_EOL.'----LOG Start-----'.PHP_EOL;
				echo PHP_EOL.json_encode( $shell ).PHP_EOL;
				echo PHP_EOL.'----LOG End-----'.PHP_EOL;
			}
		break;
		case 7:
			exit('exit server');
		break;
		default:
			echo 'No Option Available For '.$line;
		break;
	}
}
fclose( $f );
?>