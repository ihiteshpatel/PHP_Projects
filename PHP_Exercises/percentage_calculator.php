<?php
	$result = '';
	$priamt = '';
	$intrate = '';
	if (isset($_POST['submit'])) {
		$priamt = $_POST['priamount'];
		$intrate = $_POST['intrate'];
		if (!empty($priamt) && !empty($intrate)) {
			$result = calc_interest($priamt, $intrate);
		}
	}
	function calc_interest($priamt, $intrate) {
		$amt = ($priamt * $intrate) / 100;
		return $amt;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Percentage Calculator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Percentage Calculator</h1>
		<form method="post">
			<div class="form-group">
				<label>Please enter amount</label>
				<input type="number" name="priamount" placeholder="Amount" class="form-control" value="<?php echo $priamt; ?>">
			</div>
			<div class="form-group">
				<label>Please enter interest rate</label>
				<input type="number" name="intrate" placeholder="Interest Rate" class="form-control" value="<?php echo $intrate; ?>">
			</div>
			<div class="form-group">
				<label>Here is result</label>
				<input type="number" name="result" placeholder="Interest Amount" class="form-control" value="<?php echo $result; ?>">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">
			</div>
		</form>
	</div>
</body>
</html>