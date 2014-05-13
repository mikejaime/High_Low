<?php 

if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
	echo "You must input 2 numbers (a low & high numerical/number)\n";
	exit(1);
}

//define high and low variable values
// in this version the values are input via argv values in the terminal
// if argv[1] number is higher than argv[2], then argvs' are reverseds
if ($argv[1] > $argv[2]) {
	$lownum = $argv[2];
	$highnum = $argv[1];
}
else {
	$lownum = $argv[1];
	$highnum = $argv[2];
}




//have comp generate a random number
$comp_pick = rand ($lownum, $highnum);

//attempts counter
$attempts = 0;

//user prompted to guess a number
fwrite(STDOUT, "Guess a number between $lownum & $highnum\n");


do {
	// Get the input from user, placed before comparion to avoid repition
	$guess = fgets(STDIN);
	//increment attempts counter, placed before comparison to avoid repition
	$attempts++;

	if ($guess < $comp_pick) {
        echo "Higher\n";
        fwrite(STDOUT, 'Guess again? ');
        }
	elseif ($guess > $comp_pick) {
        echo "Lower\n";
        fwrite(STDOUT, 'Guess again? ');
        }
    elseif($attempts > 5){
	echo "Correct, took you long enough! ($attempts attempts)\n";
	}	else {
			echo "Great guess, you are correct! ($attempts attempts)\n";
		}
} while ($guess != $comp_pick);

 ?>