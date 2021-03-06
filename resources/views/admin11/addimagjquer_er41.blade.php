<!DOCTYPE html>
<html>
<head>
	<title>Spartan Multi Image Picker</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<br>
		<br>
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
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="spartan_multi_image/dist/js/spartan-multi-image-picker.js"></script>

	<script type="text/javascript">
		$(function(){

			$("#coba").spartanMultiImagePicker({
				fieldName:        'fileUpload[]',
				maxCount:         5,
				rowHeight:        '130px',
				groupClassName:   'col-md-2 col-sm-3 col-xs-6',
				maxFileSize:      '',
				placeholderImage: {
				    image: 'placeholder.png',
                	width : '100%'
				},
				dropFileLabel : "Drop Here",
				onAddRow:       function(index){
					console.log(index);
					console.log('add new row');
				},
				onRenderedPreview : function(index){
					console.log(index);
					console.log('preview rendered');
				},
				onRemoveRow : function(index){
					console.log(index);
				},
				onExtensionErr : function(index, file){
					console.log(index, file,  'extension err');
					alert('Please only input png or jpg type file')
				},
				onSizeErr : function(index, file){
					console.log(index, file,  'file size too big');
					alert('File size too big');
				}
			});
		});
	</script>
</body>
</html>
