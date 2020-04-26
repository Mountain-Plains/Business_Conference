<div class="container">
<h1 class="title">Sponsors</h1>
<?php
$sponsorCount = count($sponsorData);
$sponsorsDisplayed = 0;
$rowCount = 0;
?>
@foreach($sponsorData as $sponsor)
<?php
$sponsorsLeft = $sponsorCount - $sponsorsDisplayed;
if ($rowCount == 0) {
	if ($sponsorsLeft >= 4) {
		$imgClass = "col-md-3 col-md-3 col-sm-3 col-xs-12";
		$rowCount = 3;
	}
	else if ($sponsorsLeft == 3) {
		$imgClass = "col-md-4 col-md-4 col-sm-4 col-xs-12";
		$rowCount = 2;
	}	
	else if ($sponsorsLeft == 2) {
		$imgClass = "col-md-6 col-md-6 col-sm-6 col-xs-12";
		$rowCount = 1;
	}
	else if ($sponsorsLeft == 1) {
		$imgClass = "col-md-12 col-md-12 col-sm-12 col-xs-12";
		$rowCount = 0;
	}
}
else {
	$rowCount -= 1;
}
?>
<?php 
if ($sponsorsDisplayed == 0) {
	echo "<div class=\"row d-flex\">";
}
else if ($sponsorsDisplayed % 4 == 0 && $sponsorsDisplayed != $sponsorCount) {
	echo "</div>";
	echo "<div class=\"row d-flex\">";
}
$sponsorsDisplayed += 1;
?>
	<div class="{{$imgClass}}">
		<div class="text-center">
			<img src="{{url('Uploads/sponosr',$sponsor->Image)}}" style="max-width:290px; max-height:300px;" alt="">
		</div>
	</div>
@endforeach
</div>
</div>