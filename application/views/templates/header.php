
<?php 

function isCurrent($page, $link){
	if (!isset($page)){
		return "";
	}
	if ($page == $link){
		return 'class="active"';
	}
	return "";
}
$status = $this->config->item('status');
if (!isset($page))
$page = "";

$this -> load -> view('templates/head');
// $this -> load -> view('templates/facebook');

?>
<body>
<div id="header" class="unselectable" unselectable="on">
	<div class="head-outer">
	<a class="blog-title" href="<?=base_url()?>"><span id="w1" class="unselectable" unselectable="on">Kris</span>
	<span id="w2" class="unselectable" unselectable="on">Mitchell</span></a>
	<div id="description"><p id="description-p"><?php echo $status;?></p></div>
	</div>
	<ul id="menu">
	<li id="about" <?php echo isCurrent($page, 'about')?> ><a href="<?php echo base_url()?>about.php"><span class="unselectable" unselectable="on">about</span></a></li>
	<li id="blog" <?php echo isCurrent($page, 'blog')?> > <a href="<?php echo base_url()?>blog.php"><span class="unselectable" unselectable="on">blog</span></a></li>
	<li id="projects" <?php echo isCurrent($page, 'projects')?> > <a href="<?php echo base_url()?>projects.php"><span class="unselectable" unselectable="on">projects</span></a></li>
	</ul>
</div>
<div id="main">
