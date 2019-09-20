<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
</body>
</html>

<?php


$number = $_POST['number_entered'];

$submitButton = $_POST['submit'];

$randomNumber = rand(1, 10);


?>

<form class="all" action="" method="POST" >
<p class="the_text" >Guess the number beween 1 and 10, or you die </p>
<input type="text" name="number_entered">
<p class="the_text" >I'm not playing games, i've got your wife.<br> </p>
<br>
<?php


if($submitButton){
    if(($number > 0) && ($number < 11)) {
        if($number!=$randomNumber){

            echo " <p style='color:red;'> You've done goofed, because number was $randomNumber ";
        }

        else 
        {
            echo "<p style='color:red;'> You live to die another day </p>";
        }
    }
}

?>

<br>

<input type="submit" name="submit" value="Guess">



</form>