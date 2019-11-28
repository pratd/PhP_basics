<?php

if(date("D")=="Monday"){
    echo "We are on Monday";
}
if(date("M")=="October"){
    echo "We are in October";
}else{
    echo "We are not in October";
}
//

if(date("i")<="10"){
    echo"if the current minute is less than 10" ;
}elseif(date("i") >=15){
    echo "if the current minute is more than 15";
}else{
    echo "if the current minute is less than 10";
}
?>