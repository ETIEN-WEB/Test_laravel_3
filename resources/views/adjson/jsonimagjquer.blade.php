

<!DOCTYPE html>
<html>
<head>
	<title>Spartan Multi Image Picker</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 

	{{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<br>
        <br>
        <form role="form" method="post" action="{{URL::to('jsonimage_jquer')}}" enctype="multipart/form-data">
            {{csrf_field()}}
           {{-- {{csrf_field()}} 
           @csrf --}} 
		<div class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-3">Upload Image</label>
				<div class="col-md-8">
					<div class="row">
						<div id="coba"></div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3"></label>
				<div class="col-md-8">
					<div></div>
					<input type="submit" class="btn btn-primary" value="Send">
				</div>
			</div>
        </div>	
        </form>
	</div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <script type="text/javascript" src="spartan_multi_image/dist/js/spartan-multi-image-picker.js"></script>

	<!-- <script type="text/javascript" src="../dist/js/spartan-multi-image-picker.js"></script> -->

	<script type="text/javascript">
		$(function(){

			$("#coba").spartanMultiImagePicker({
                fieldName:        'fileUpload[]',
                rowHeight:        '130px',
				groupClassName:   'col-md-2 col-sm-3 col-xs-6',
				directUpload : {
					status: false,
                    loaderIcon: '<i class="fas fa-sync fa-spin"></i>',
                    //type:'post',
					//url: "{!!URL::to('addimage_jquer')!!}",
					additionalParam : {
						name : 'My Name'
					},
					success : function(data, textStatus, jqXHR){
					},
					error : function(jqXHR, textStatus, errorThrown){
					}
				}
			});
		});
	</script>

<?php
/*$t= strtotime("2018-10-17 15:30:55");
$ladate= getdate($t);
echo $t;
echo "<gr>";
echo "L'heure est : ".$ladate['hours'].":".$ladate['minutes'].":".$ladate
['seconds']; 

$today = getdate();
print_r($today);  */


?>

<?php

$datedepart = mktime (20,00,00,01,18,2021);
$dateactuelle = time();
$difdate = ($dateactuelle-$datedepart)/(60*60*24);

$jour = $difdate/(60*60*24);

echo $jour.'jours';

?>
</body>
</html>
