
<!-- Types of Variable Scope :
    1. local scope
    2. global scope
    3. static scope -->

<?php
    $a = 30;
    function scope(){
        $lang = "PHP";
        echo "{$lang} is Web development language !";
    }
    scope();

    echo "{$a}";
?>