<?php
function SumofVar($var1, $var2){
    echo $var1 + $var2 ."\n";
}
SumofVar(1,2);
function MultofVar($var1, $var2){
    echo $var1 * $var2 ."\n";
}
MultofVaR(2,3);
function DivofVar($var1, $var2){
    echo $var1 / $var2 ."\n";
}
DivofVaR(2,3);
function OprofVar($var1, $var2, $opr){
    if($opr=="add"){
        SumofVar($var1, $var2);
    }elseif($opr=="multiply"){
        MultofVar($var1,$var2);
    }else{
        DivofVar($var1,$var2);
    }
}
OprofVar(3,4,'division');
?>