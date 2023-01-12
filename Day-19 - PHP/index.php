<?php

$myNumber = 10;

$myString = "Hello World";

$myFloat = 33.3;


$array = array(
    1, 2, 3, 4, 5
);

$array = [
    1,
    2,
    3,
    4,
    5
];

//multidimesional array

$multiDim = [
    [1, 2, 3, 4],
    [3, 3, 4, 2]
];


$colorArray = [
    'red' => '#FF0000',
    'blue' => '#0000FF',
];

// print_r($colorArray);
// print_r($myFloat);

$name = "joe";
$joe = "My name is Joe";

// echo $name;
// echo $$name;

// echo " My name is ";

$firstName = "Jane";
$lastName = "Doe";

// $fullName = $firstName . ' ' . $lastName;

$students = ['Shiv', 'Kuber', 'Ajay'];

$fullName = '{$firstName}  {$lastName}';
// $studentName = "$students[0]";
$studentName = '$students[0]';

// echo $fullName;
// sprint_f('')

$a = 10;
$b = 20;
// if ($a > $b) {
//     echo "$a is bigger than $b";
// }
// else {
//     echo "$b is bigger than $a";

// }


// if ($a == $b):
//     echo "$a is bigger than $b";

// else:
//     echo "$b is bigger than $a";

// endif;

// if ( '20' === 20.0) {
//     echo "this is true";
// }else {
//     echo "this is false";
// }

$myBool = true;
$myBool = false;

$myFloat = 10.2;
var_dump($myFloat);



$myArray = [
    'name' => "Jane",
    'age' => 21,
    'grade' => 2.1
];

$myArray = [
    "Jane",
     21,
    2.1
];

$student1 = [
    'name' => "Jane",
    'age' => 21,
    'grade' => 2.1
];


$student2 = [
    'name' => "Joe",
    'age' => 23,
    'grade' => 2.1
];

$student3 = [
    'name' => "Marie",
    'age' => 23,
    'grade' => 2.1,
    'courses' => [
        'Web Tech', 'Python', 'AI', 'Stat'
    ]
];

$allStudents = [
    $student1,
    $student2,
    $student3
];


// echo "<pre>";
// var_dump($allStudents);
// echo "</pre>";
// die;

echo "My lenght is " . count($myArray);
// for ($i = 0; $i< count($myArray); $i++ ) {

//     echo $myArray[$i];

// }

echo "<ul>";
foreach($allStudents as $index => $student) {

    echo " <li> $index => ";
    echo "name " . $student['name'];


    if (isset($student['courses']) && is_array($student['courses'])){
        foreach ($student['courses'] as $course)
        {
            echo "Course : $course";
        }
    }
  
    echo "</li>";
}
echo "</ul>";
