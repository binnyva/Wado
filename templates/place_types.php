 
<div class="container">

<div class="row">
<?php 
$count = 0;
foreach ($place_type as $id => $name) { 
	$count++;
	if($count % 4 == 0) {
		print "</div><div class='row'>";
	}
	?>
	<div class="col-md-4 box box-<?php echo $count ?>"><a href="places.php?place_type_id=<?php echo $id ?>"><?php echo $name ?></a></div>	
<?php } ?>
</div>

</div>
