<img src="./images.png" alt="">
<br>
<?php

    
    if(isset($_POST["fullname"])) {
        echo "Thank you ".$_POST["fullname"];
        echo "<br>";
    } 
    
    if(isset($_POST["club"])) { echo "We recieved your application for the ".$_POST["club"]; echo "<br>";}

    $arr=[]; 
    $checkboxes = ["checkbox1", "checkbox2", "checkbox3", "checkbox4", "checkbox5", "checkbox6", "checkbox7", "checkbox8"];
    foreach ($checkboxes as $checkbox) {
        if (isset($_POST[$checkbox])) {
            array_push($arr, $_POST[$checkbox]);
        }
    }
    if (!empty($arr)) {
        $str = implode(", ", $arr);
        $str = str_replace(", ", " and ", $str);
    
        echo "You are " . $str;
        echo "<br>";
    }

    if(isset($_POST["time"])) { echo "You will be available on ".$_POST["time"];}
            
    



?>
