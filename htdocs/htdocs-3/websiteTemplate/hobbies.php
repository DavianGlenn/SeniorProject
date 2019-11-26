<?php

	if(isset($_POST["Interest"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase();
    }
	if(isset($_POST["Interest2"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase2();
    }
	if(isset($_POST["Interest3"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase3();
    }
	if(isset($_POST["Interest4"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase4();
    }
	if(isset($_POST["Interest5"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase5();
    };
	if(isset($_POST["Interest6"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase6();
    }
	if(isset($_POST["Interest7"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase7();
    }
	if(isset($_POST["Interest8"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase8();
    }
	if(isset($_POST["Interest9"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase9();
    }
	if(isset($_POST["Interest10"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase10();
    }
	;if(isset($_POST["Interest11"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase11();
    }
	if(isset($_POST["Interest12"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase12();
    }
	if(isset($_POST["Interest13"])){
        include_once '../CreateAccount2/checkboxclass.php';
        $checkBoxClass=new checkboxclass();
        echo $checkBoxClass->addtoDatabase13();
    };
	

	//header('Location: hobbies.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> Hobby Lobby</title>
</head>

<body>
<h1>What Do You Like To Do For Fun?</h1>
<h2>Please Select The Hobbies That Most Interest You</h2>
<div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="checkbox" id="Interest" name="Interest" value="Sports">Sports<br/>
            <input type="checkbox" id="Interest" name="Interest2" value="Exercise">Exercise<br/>
            <input type="checkbox" id="Interest" name="Interest3" value="Dance">Dance<br/>
            <input type="checkbox" id="Interest" name="Interest4" value="Traveling">Traveling<br/>
            <input type="checkbox" id="Interest" name="Interest5" value="Video Games">Video Games<br/>
            <input type="checkbox" id="Interest" name="Interest6" value="Volunteering">Volunteering<br/>
            <input type="checkbox" id="Interest" name="Interest7" value="Painting">Painting<br/>
            <input type="checkbox" id="Interest" name="Interest8" value="Photography">Photography<br/>
            <input type="checkbox" id="Interest" name="Interest9" value="Cooking">Cooking<br/>
            <input type="checkbox" id="Interest" name="Interest10" value="Reading">Reading<br/>
            <input type="checkbox" id="Interest" name="Interest11" value="Creative Writing">Creative Writitng<br/>
            <input type="checkbox" id="Interest" name="Interest12" value="Science and Technology">Science and Technology<br/>
            <input type="checkbox" id="Interest" name="Interest13" value="Agriculture">Agriculture<br/>
          
            
            <br/><br/>
			<button onclick="location.href='index.php'" type="button">
         Submit</button>
		<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    </div> <!-- /container -->
</body>

</html>