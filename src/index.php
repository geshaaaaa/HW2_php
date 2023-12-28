    <?php

     echo "What is your name? " . PHP_EOL;
     $name = fgets(STDIN );
     echo "Hello, $name";

     echo "How are you? " ;
     $mood = fgets(STDIN);
     echo $mood;

     echo "Write first number: " . PHP_EOL;
     $firstNumber = fgets(STDIN);
     echo "Write second number: " . PHP_EOL;
     $secondNumber = fgets(STDIN) ;
     echo "Write third number: " . PHP_EOL;
     $thirdNumber = fgets(STDIN);
     $sum = $firstNumber + $secondNumber + $thirdNumber;
     echo "Sum of numbers = $sum " . PHP_EOL;
    $average = $sum / 3;
     echo "Average of numbers = $average " . PHP_EOL;