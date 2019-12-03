<?php
    # Type of Arrays
    /*
        - Indexed
        - Asociative
        - Multi-Dimensional
    */

    //Indexed
    $people = array('Sarah','Chloe','Scarlett');
    $peeps = ['Kendra', 'Aletta', 'Joyce'];
    echo $people[2];
    echo $peeps[0];
    // Adding to an array:
    $peeps[0] = 'Angelina'; // this will replace the item at the position specified
    $peeps[] = 'Kendra'; // this will simply add the new value to array 
    echo $peeps[3];
    echo $peeps[0];

    print_r($peeps); //this prints out the entire array
    echo count($peeps); // theis will count the elements of the array and displays that number
    var_dump($peeps); //this will print out the entire array and provide info about each element's data type


    //Asociative arrays
    $MVP = array('Kendra' => 35,'Aletta' => 33, 'Lana' => 20); 
    echo $MVP['Aletta']; // this will display the value related to the entry's key value

    //Multi-dimensional arrays
    $cars = array(
        array('Ford', 20, 25),
        array('Mitsubishi', 35, 24),
        array('Lamborghini', 42, 18)
    );
    echo $cars[0][2]; //the value between the first set of squar brakets will index the row and the second will index the column
    echo $cars[2][0];
?>