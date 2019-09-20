<?php


$number = $_POST['number_entered'];

$submitButton = $_POST['submit'];

$randomNumber = rand(1, 10);


?>

<form action="" method="POST" >
Guess the number beween 1 and 10, or you die
<input type="text" name="number_entered">
I'm not playing games, i've got your wife
<br>

<?php


if($submitButton){
    if(($number > 0) && ($number < 11)) {
        if($number!=$randomNumber){
            echo "You've done goofed, because number was $randomNumber ";
        }

        
        else 
        {
            echo "you shall live";
        }
    }
}

?>

<br>

<input type="submit" name="submit" value="Guess">



</form>