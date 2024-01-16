<?php
echo "Associative array : Ascending order sort by value";
$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($array2);
foreach($array2 as $y=>$y_value){
    echo "<br> Age of ". $y."is : ".$y_value;
}
echo "<br>";

echo "<br> Associative array : Ascending order sorting by Key ";
$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($array3);
foreach($array3 as $y=>$y_value){
    echo "<br> Age of ". $y."is : ".$y_value;
}
echo "<br>";

echo "<br> Associative array : Descending order sorting by Value ";
$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($age);
foreach($age as $y=>$y_value){
    echo "<br> Age of $y is $y_value";
}
echo "<br>";

echo "<br> Associative array : Descending order sorting by Key ";
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($array4);
foreach($array4 as $y=>$y_value){
    echo "<br> Age of $y is $y_value";
}
echo "<br>";