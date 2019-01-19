<?php
include "db/formhandler.php";
global $database;

?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <title> Register </title>
</head>

<body>
  	<div id="messages">
			<?php
				if (count($messages) > 0){
					foreach ($messages as $e) {
						echo "<b>".$e."</br></b>";
					}
				}
			?>
		</div><br>
  <form action="register.php" method="POST">
    <label>Username (*)</label> <input type="text" name="uname_reg" required/><br>
    <label>Password (*)</label> <input type="password" name="pswd_reg" required/><br>
    <label>Confirm password (*)</label> <input type="password" name="pswd2_reg" required/><br>
    <label>What is your skin type? </label>
      <select name="skintype">
        <option value="sensitive">Sensitive</option>
        <option value="dry">Dry</option>
        <option value="oily">Oily</option>
        <option value="combination">Combination</option>
        <option value="normal">Normal</option>
      </select><br>
    <label> Do you have any known skin disease(s)? </label><br>
      <input type="checkbox" name="skindisease" value="eczema">Eczema<br>
      <input type="checkbox" name="skindisease" value="psoriasis">Psoriasis<br>
      <input type="checkbox" name="skindisease" value="rosea">Rosea<br>
    <label> Do you have any skin concerns? </label><br>
      <input type="checkbox" name="skinconcerns" value="acne">Acne, breakouts<br>
      <input type="checkbox" name="skinconcerns" value="pores">Pores (ie, too visible)<br>
      <input type="checkbox" name="skinconcerns" value="wrinkles">Wrinkles<br>
      <input type="checkbox" name="skinconcerns" value="dark">Dark circles<br>
    <button type="submit" name="registration">Register!</button>
  </form>


</body>

</html>
