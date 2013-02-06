<!DOCTYPE html>
<html>
<head>
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Kris<?php if (isset($title) && trim($title) != ""){ echo " - " . $title; } ?></title>

<?php
$assets = base_url() . "assets/";
$this->config->set_item('assets', $assets);

echo link_tag('assets/css/styles.css');
echo link_tag('assets/css/prettify.css');

 ?>
<meta name="viewport" content="width=device-width, height=device-height" />

<script type="text/javascript" src="<?php echo $assets;?>js/jquery-1.7.2-min.js"></script>
<script type="text/javascript" src="<?php echo $assets;?>js/prettify.js"></script>
<script type="text/javascript" src="<?php echo $assets;?>js/fx.js"></script>
<!--[if lte IE 8]>
<script type="text/javascript" src="<?php echo $assets;?>js/iealert.js"></script>	
<![endif]-->
<script type="text/javascript" src="<?php echo $assets;?>js/main.js"></script>
</head>