<?php 


//define high and low variable values
$lownum = 1;
$highnum = 100;

//have comp generate a random number
$comp_pick = rand ($lownum, $highnum);

//attempts counter
$attempts = 0;

//user prompted to guess a number
fwrite(STDOUT, "Guess a number between $lownum & $highnum!");






do {
	// Get the input from user
	$guess = fgets(STDIN);
	$attempts++;

	if ($guess < $comp_pick) {
        echo "Higher\n";
        fwrite(STDOUT, 'Guess again? ');
        }
	elseif ($guess > $comp_pick) {
        echo "Lower\n";
        fwrite(STDOUT, 'Guess again? ');
        }
} while ($guess != $comp_pick);

if($attempts > 5){
	echo "Took you long enough! ($attempts attempts)\n";
}	else {
		echo "Great guess, you are correct! ($attempts attempts)\n";
	}


 ?>