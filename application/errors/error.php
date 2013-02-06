<?php
import_request_variables('g','r_');
if (!isset($r_no))
	$r_no = 404;
$messages = array(400 => "Bad request. Bad. Fix it.", 401 => "Can I see your identification?", 403 => "Denied, stranger. Not around these parts.", 404 => "These aren't the droids you're looking for...", 500 => "You broke it. Are you happy?");
if (array_key_exists($r_no, $messages)) {
	$message = $messages[$r_no];
} else {
	$message = "Whatever you did... don't do it again.";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
		<title>Uhhh...</title>
		<style>
			body {
				font-family: Segoe UI Light, Tahoma, Arial, sans-serif;
				font-size: 32px;
				text-align: center;
				color: #222;
			}
			#main {
				width: 90%;
				margin: 0px auto;
			}
			h1 {
				font-size: 132px;
				color: #aaa;
			}
			a {
				margin-top: 55px;
				text-decoration: underline;
				color: #222;
			}
			a:hover {
				color: #88ACDB;
			}
			a:visited {

			}
			@media only screen and (max-width: 610px), (max-height: 400px){
				body{
					font-size: 20px;
				}
				#main{width:95%;
				}
				h1 {
					font-size: 54px;
				}
				a {
					margin-top: 20px;
				}
			}
		</style>
	</head>
	<body>
		<div id="main">
			<h1><?php echo $r_no; ?></h1>
			<p>
				<?php echo $message; ?>
			</p>
			
			<a href ="/">home</a>
			</div>
			</body>
			</html>
