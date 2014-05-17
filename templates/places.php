 
<div class="container">

<div class="row">
<?php 
$count = 0;
foreach ($places as $id => $details) { 
	extract($details);
	$count++;
	if(($count - 1) % 3 == 0) {
		print "</div><div class='row'>\n";
	}
	?>
	<div class="col-md-4 box box-<?php echo $count ?>"><a href="select.php?type=place&amp;element_id=<?php echo $id ?>"><?php 
		echo $name ?><span class="badge"><?php echo $locality ?></span></a></div>
<?php } ?>
</div>

</div>
