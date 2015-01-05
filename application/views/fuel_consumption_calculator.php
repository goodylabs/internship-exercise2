<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
	<title>Fuel Consumption Calculator</title>
</head>
<body>
   <h1>Fuel Consumption Calculator</h1>
   <form name="fuel_form" method="post" action="">
      <label for="volume">Volume :</label>
      <input type="text" name="volume" id="volume" value=<?php echo '"'.$volume.'"' ?>><span> l</span>
      <br>
      <label for="">Distance :</label>
      <input type="distance" name="distance" id="distance" value= <?php echo '"'.$distance.'"' ?> ><span> km</span>
      <br>
      <input type="submit" name="submit" id="submit" value="Submit">
   </form>
   <p>Consumption: <?php echo $consumption ?> </p>
</body>