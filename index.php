<?php

echo "<H1>This is Demo of PHP XAMPP</H1>";

$var1 = "tare";
$var2 = "rate";

echo similar_text($var1,$var2,$percent);
for($i = 0; $i < strlen($var1); $i++){
    $ch = $var1[$i];
    $found = false;
    for($n = 0; $n < strlen($var2); $n++){
        if ($ch == $var2[$n]){
            $found = true;
            break;
        }
    }
    if ($found == false){
        break;
    } 
}
if ($found) {
    echo "is an anagram";
} else {
    echo "nah";
}
echo "<br>";


$var3 = "aba";
$count=0;
for($i=0;$i<strlen($var3);$i++){
    $ch1 = $var3[$i];
    for($j=0;$j<strlen($var3);$j++){
        if($ch1==$var3[$j]){
            $count++;
            //echo $ch1."/".$count."[".$j."]"."<br>";
        }
    }
    if ($count>1){
        echo $ch1;
    }
    $count=0;
 
}


?>