
<?php
    $array = array(1,2,3,4,5,6,7,8,9,10);

    foreach($array as $arr){
        echo $arr. "<br>";
    }
?>

<?php
    $students = ["omkar","ram","sham","prachit"];

    foreach($students as $studetails){
        echo $studetails . "<br>";
    }
?>

<?php
    $employee = [
        "name" => "Omkar",
        "email" => "omkarpapalv@gamil.com",
        "Age" => 25
    ];

    foreach($employee as $key => $val){
        echo "$key : $val" . "<br>";
    }


?>

