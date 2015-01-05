<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Fuel Calculator</title>
		<?= HTML::style('css/bootstrap.min.css'); ?>
</head>

<body>
	<div class='container'>
		<h1>Liters per 100 km calculator</h1>
		<form action='<?=URL::route('result');?>' method='GET'>
			<div class='form-group'>
				<label for='fuel'>Fuel (in liters)</label> <br/>
				<input name='fuel' type='text' class='form-control' value='<?=$model->fuel;?>'/>
				<?php if (isset($errors)) echo $errors->first('fuel');?>
			</div>

			<div class='form-group'>
				<label for='journey_driven'>Journey driven in km</label> <br/>
				<input name='journey_driven' type='text' class='form-control' value="<?=$model->journey_driven;?>" />
				<?php if (isset($errors)) echo $errors->first('journey_driven');?>
			</div>

			<div class='form-group'>
				<input type='submit' value='Calculate' class='btn btn-primary' />
			</div>
			<div class='form-group'>
				<h3>Result: <?=$model->avg_fuel;?> liters/100km</h3>
			</div>

		</form>
	</div>
</body>
</html>
