
<html>  
<head></head>  
  
<body>
	<div class="container">  
  	<form method="post" action="?action=calculate">
	    <table>  
	        <tbody><tr><td>Fuel(gallons)</td><td>Journey Driven(in miles)</td><td>Output</td></tr></tbody>  
	            <tr>
	            	<?php   
  
				        echo '<td><input name="fuel" type="text" value="'. $this->model->getFuel().'"></td>';  
				        echo '<td><input name="miles" type="text" value="'.$this->model->getMiles().'"></td>';
				  		echo '<td>'.$output.'</td>';
    				?>
	            </tr> 
	    </table>  
    <input type="submit" value="Calculate">
  	</form>
    </div>
</body>  
</html>  