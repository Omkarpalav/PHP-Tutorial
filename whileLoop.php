<?php
    function fact($number){
        $result = 1;

        for($i=1; $i<=$number; $i++){
            $result *= $i;
        }

        return $result;
    }

   echo fact(6);
?>

<?php
    function reverseString($str){
        $reverse = "";
        $lenght = strlen($str);


        for($i= $lenght-1; $i>=0; $i--){
            $reverse = $str[$i];
        }

        return $reverse;


    }

   echo reverseString("omkar");

?>