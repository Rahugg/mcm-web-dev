<?php
if (
	!isset($_REQUEST["name"]) || trim($_REQUEST["name"]) == "" ||
	!isset($_REQUEST["section"]) || trim($_REQUEST["section"]) == "" ||
	!isset($_REQUEST["credit-card"]) || trim($_REQUEST["credit-card"]) == "" ||
	!isset($_REQUEST["credit-card-type"]) || trim($_REQUEST["credit-card-type"]) == ""
) {
	echo '
    <!DOCTYPE html>
    <html>
        <head>
            <title>Error</title>
        </head>
        <body>
            <h2>Sorry</h2>
            <p>You didn\'t fill out the form completely. <a href="index.html">Try again?</a></p>
        </body>
    </html>
    ';
	exit;
}
$creditCardPattern = '/^(4[0-9]{3}-?[0-9]{4}-?[0-9]{4}-?[0-9]{4}|5[0-9]{3}-?[0-9]{4}-?[0-9]{4}-?[0-9]{4})$/';
if (!preg_match($creditCardPattern, $creditCard)) {
	showError("You didn't provide a valid card number. Try again?");
}
if (!isValidLuhn($creditCard)) {
	showError("You didn't provide a valid card number. Try again?");
}
function showError($message)
{
	echo '
    <!DOCTYPE html>
    <html>
        <head>
            <title>Error</title>
        </head>
        <body>
            <h2>Sorry</h2>
            <p>' . $message . ' <a href="index.html">Try again?</a></p>
        </body>
    </html>
    ';
	exit;
}
function isValidLuhn($number)
{
	$number = str_replace("-", "", $number); // Remove hyphens
	$sum = 0;
	$alt = false;
	for ($i = strlen($number) - 1; $i >= 0; $i--) {
		if ($alt) {
			$number[$i] *= 2;
			if ($number[$i] > 9) {
				$number[$i] -= 9;
			}
		}
		$sum += $number[$i];
		$alt = !$alt;
	}
	return $sum % 10 == 0;
}

$name = $_POST['name'];
$section = $_POST['section'];
$creditCard = $_POST['credit-card'];
$creditCardType = $_POST['credit-card-type'];

$dataString = "{$name};{$section};{$creditCard};{$creditCardType}\n";

file_put_contents('suckers.txt', $dataString, FILE_APPEND);

$suckersData = file_get_contents('suckers.txt');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab6</title>
</head>

<body>
	<h1>Thanks, sucker!</h1>

	<p>Your information has been recorded.</p>

	<dl>
		<dt>Name</dt>
		<dd>
			<?php echo htmlspecialchars($_POST['name']); ?>
		</dd>

		<dt>Section</dt>
		<dd>
			<?php echo htmlspecialchars($_POST['section']); ?>
		</dd>

		<dt>Credit Card</dt>
		<dd>
			<?php echo htmlspecialchars($_POST['credit-card']) . ' (' . htmlspecialchars($_POST['credit-card-type']) . ')'; ?>
		</dd>
	</dl>
	<p>Here are all the suckers who have submitted here:</p>
	<pre><?php echo htmlspecialchars($suckersData); ?></pre>
</body>

</html>