
<?php 
    // Printing out stuff straight to the page
    echo 'Welcome to my PHP cheat sheet';
    print 'Welcome to my PHP cheat sheet';

    // Asigning a value to a variable and printing out the variable

    # Variable naming rules
    /*
        - Prefix $
        - Must start with a letter or an underscore
        - Can be comprised only of letter, numbers and underscores
        - Case sensitive
    */
    # Data Types
    /*
        - String
        - Integer
        - Float
        - boolean
        - Arrays
        - Objects
        - Resource
        - NULL
    */

    $output = " My first PHP Variable";
    echo $output;

    $integer1 = 20;
    $integer2 = 34;
    $sum = $integer1 + $integer2;
    echo $sum;

    # String concatenation

    $output2 = 'And my second one.';
    $concat = $output . ' ' . $output2;
    $concat2 = "$output $output2";
    echo $concat;
    echo $concat2;

    # Escaping

    $escape = 'This\'ll be awesome.';
    echo $escape;
    
    $float1 = 10.5;
    $boolean = true;

    #Constants
    /*
    Constants are variables that can not have theyr values changed,
    and have to be created using the define() class.
    The first attribute set will be the name of the constant,
    the second will be the value of the constant and the third will
    define weather the constant name will be case insensitive or not
    */
    
    define('GREETING', 'Welcome to PHP World.', true);
    echo greeting;

?>