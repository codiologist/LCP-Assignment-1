<?php
/*********************** 
        PROBLEM - 1
************************/

function findMinimumAbsoluteValue($input) {
    $numbers = explode(' ', $input);
    $minAbsValue = PHP_INT_MAX;

    foreach ($numbers as $number) {
        $absValue = abs((int)$number);
        if ($absValue < $minAbsValue) {
            $minAbsValue = $absValue;
        }
    }    
    return $minAbsValue;
}

echo "<h3>Problem 1</h3>";

// Sample input 1
$input1 = "10 12 15 189 22 2 34";
echo "Sample input 1: " . findMinimumAbsoluteValue($input1) . "<br/><br/>"; // Output: 2

// Sample input 2
$input2 = "10 -12 34 12 -3 123";
echo "Sample input 2: " . findMinimumAbsoluteValue($input2); // Output: 3

echo "<br/><br/><hr/>";

/*********************** 
        PROBLEM - 2
************************/
$file_path = './text_file.txt';
$file_content = file_get_contents($file_path);

if ($file_content === false) {
    echo "Error: Unable to read the file.";
    exit;
}

$word_count = str_word_count($file_content);

// Output the total word count
echo "<h3>Problem 2</h3>";
echo "Total word count:  $word_count" ;

echo "<br/><br/><hr/>";



/*********************** 
        PROBLEM - 3
************************/
function reverseWordsInSentence($sentence) {
    $words = explode(' ', $sentence);

    foreach ($words as &$word) {
        $word = strrev($word);
    }
    $reversedSentence = implode(' ', $words);
    return $reversedSentence;
}

echo "<h3>Problem 3</h3>";
echo "Reversed Sentense = " . reverseWordsInSentence("I love programming");  // Output: I evol gnimmargorp

echo "<br/><br/><hr/>";




/*********************** 
        PROBLEM - 4
************************/

function printPattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            echo "  ";
        }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n";
    }
}

echo "<h3>Problem 4</h3>";
// Sample input
$n = 5;
printPattern($n);


echo "<br/><br/><hr/>";



/*********************** 
        PROBLEM - 5
************************/
function sumOfDigits($n) {
    $sum = 0;
    while ($n != 0) {
        $sum += $n % 10;
        $n = intval($n / 10);
    }
    return $sum;
}


echo "<h3>Problem 5</h3>";
// Sample input 1
$n1 = 62343;
echo "Sample input 1: $n1 <br/>";
echo "Sample output 1:- " . sumOfDigits($n1) . "<br/>";

echo "<br/><br/>";


// Sample input 2
$n2 = 1000;
echo "Sample input 2: $n2 <br/>";
echo "Sample output 2: " . sumOfDigits($n2) . "<br/>";
?>
