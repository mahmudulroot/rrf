<?php	
	$result = $_POST['number'];
	if($result>=0 && $result <= 32){
		echo "You fail";
	}elseif($result>=33 && $result <= 39){
	
		echo "	your results D ";
	}
	elseif($result>=40 && $result <= 49){
	
		echo "	your results C  ";
	}
	elseif($result>=50 && $result <= 59){
	
		echo "	your results B ";
	}elseif($result>=60 && $result <= 69){
	
		echo "	your results A- ";
	}elseif($result>=70 && $result <= 79){
	
		echo "	your results A  ";
	}elseif($result>=80 && $result <= 100){
	
		echo "	your results A+ ";
	}
	else{
		echo "Apner Exam Er Khatra Amader Kache Nai ";
	}
	echo "</br>";
	
	
?>


<form action="" method="POST">

	<input type="text" name="number" id="" />
	<input type="submit" value="Submit" />
</form>
<hr>


