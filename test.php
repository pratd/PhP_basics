<!Doctype html>
<html lang=en>
    <head>
        <title>test</title>
    </head>
    <body>
        <h1><?php echo "Hello world"?></h1>
        <ul>
        <?php $array=array("volvo","bmw","mercedes"); 
              foreach ($array as $item) {
                 echo "<li>" .$item. "</li>";
              }
        ?>
        </ul>
        <?php function printName($firstName, $lastName){
            echo "Hello " .$firstName. " " .$lastName ;
        }; ?>
        <div><?php printName("prattya", "Datta")?></div>
        <div><?php if (date("d")%2 == 0){
            echo "<font color='red'> Today is " .date("D");}
            else{
                echo "<font color='blue'> Today is " .date("D");
            }
            ?>
            </div>
        <div><?php if(date("m")>=6 && date("m")<=8){echo "<img src='summer.jfif'"; 
            }elseif(date("m")>=3 && date("m")<=5){echo "<img src='spring.jpg'";}
            elseif(date("m")>=9 && date("m")<=11){echo "<img src='autumn.jpg'";}
            else{echo "<img src='winter.jpg'";$weather="winter";}?>
        </div>
    </body>
</html>