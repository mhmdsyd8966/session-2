<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<?php

//task 1 
// $first_name = "amal";
// $last_name = "ebraheem";
// Make a new variable called(full_name) that concatenate first name and last
// name
// o Put full_name in h1
// o Compare between Full_name and this variable $new_name = "amel
// ebraheem";

$first_name = "amal";
$last_name = "ebraheem";
$Full_name = $first_name ." ". $last_name;
echo  "<h1>$Full_name</h1>" ;

if($Full_name == "amel ebraheem"){
    echo "the two names is similar <br><br>";
}else {
    echo "the two names is not similar <br><br>";
}


//Task 2
// Make a calculator with these operations using if and elseif
// o Submission
// o Subtraction
// o Multiplication
// o Division 

$first_num = 5;
$second_num = 10;
$operator = "*";

if($operator == "+"){
    echo "The Submission is" . " ". $first_num + $second_num."<br><br>";
}
elseif($operator == "-"){
    echo "The Subtraction is" . " ". $first_num - $second_num."<br><br>" ;
}
elseif($operator == "*"){
    echo "The Multiplication is" ." ".  $first_num * $second_num."<br><br>" ;
}
elseif($operator == "/"){
    echo "The Division is" ." ".  $first_num / $second_num ."<br><br>";
}


//task 3
//Write a PHP program to remove duplicates from a sorted list
function remove_duplicates_list($list1) {
    $nums_unique = array_values(array_unique($list1));
    return $nums_unique ;
  }
  $nums = array(1,1,2,2,3,4,5,5);
  print_r(remove_duplicates_list($nums));

//task 4
echo "<ul>";
$colors = ["red","green","blue","black","white"];
foreach($colors as $color){
    echo "<li>";
    echo $color;
    echo "</li>";
}
echo "</ul>";
//task 4 
// Display these items in table headings (name , email , phone , salary)
$employees = [["name" , "email" , "phone" , "salary"],
["mohamed ali","mohamad@eraasoft.com","01024256993",2500],
["reham mohamad","reham@eraasoft.com","01122255448",3000],
["maged hesham","maged@eraasoft.com","01024213361",4000],
["ali mahmoud","ali@eraasoft.com","01142547485",2000],
]
?>

<table class="table">
    
        <?php
            for($i=0;$i<count($employees);$i++){
                echo "<tr>";
                for($j=0;$j<count($employees[$i]);$j++){
                    echo "<td>";
                    echo $employees[$i][$j];
                    echo "</td>"; 
                }
                echo "</tr>";
            }
        ?>
    
</table>

