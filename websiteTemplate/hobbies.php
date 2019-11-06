<?php

    if(isset($_POST["submit"])){
        $interestarr=$_POST["Interest"];
        $newvalues=  implode(",", $interestarr);
        include_once '../createAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase($newvalues);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> Save Checkbox to Database</title>
</head>

<body>
<div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="checkbox" id="Interest" name="Interest[]" value="GYM">Gym<br/>
            <input type="checkbox" id="Interest" name="Interest[]" value="Intramural Sports">Intramural Sports<br/>
            <input type="checkbox" id="Interest" name="Interest[]" value="Dance">Dance<br/>
            <input type="checkbox" id="Interest" name="Interest[]" value="Paint">Paint<br/>
            <input type="checkbox" id="Interest" name="Interest[]" value="Video Games">Video Games<br/>
            
            <br/><br/>
            <input type="submit" id="submit" name="submit" value="Submit Values" class="btn btn-primary">
        </form>
    </div> <!-- /container -->
</body>

</html>