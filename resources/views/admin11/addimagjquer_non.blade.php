


<! DOCTYPE html>
<html>
    
    <head> 
        
        <title> Burger code </title>
        
        <meta charset="utf-8"> 
          <meta name="viewport" content="width=device-width, initial=scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet" type="text/css">
       
        <!--<script src="js/script.js"></script>-->
    
    
    
    </head>
    
    <body> 
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span>   Burger code <span class="glyphicon glyphicon-cutlery"></span> </h1> 

        <div class="container admin"> 

            <div class="form-horizontal">
                <div class="form-group">
                  <label class="control-label col-md-3">Upload Image</label>
                  <div class="col-md-8">
                    <div class="row">
                      <div id="demo"></div>*
                      <!-- <input type="file" name="fileUpload[]"> -->
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3"></label>
                  <div class="col-md-8">
                    <input type="submit" class="btn btn-primary" value="Send">
                  </div>
                </div>
              </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous"></script>
        <script src="spartan_multi_image/src/js/spartan-multi-image-picker.js"></script>

        <script src="spartan_multi_image/dist/js/spartan-multi-image-picker-min.js"></script>
        <script src="spartan_multi_image/dist/js/spartan-multi-image-picker.js"></script>


        <script>
            $("#demo").spartanMultiImagePicker({
            fieldName:  'fileUpload[]',
            
            //fieldName:  'fileUpload[]',
            maxCount : 10,
            
            rowHeight : '200px',
            groupClassName : 'col-md-4 col-sm-4 col-xs-6',
            
            placeholderImage: {
                image : ADDICON,
                width : '64px'
            },

            allowedExt:'png|jpg|jpeg|gif',
            maxFileSize:'500px',

            onAddRow:          function() {},
            onRenderedPreview: function() {},
            onRemoveRow:       function() {},
            onExtensionErr:    function() {},
            onSizeErr:         function() {},

            dropFileLabel:   'selectionner vos images',

            directUpload :  {
                loaderIcon: '<i class="fas fa-sync fa-spin"></i>',
                status:       false,
                url:          '',
                success:      function() {},
                error:        function() {}
            },


            });

        </script>
    </body>


</html>