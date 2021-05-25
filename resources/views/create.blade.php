

<html lang="en">
    <head>
      <title>Laravel 7 Multiple File Upload Example | Codechief </title>
      <!--<script src="jquery/1.9.1/jquery.js"></script>
      <link rel="stylesheet" href="3.3.6/css/bootstrap.min.css"> -->
      <meta name="viewport" content="width=device-width, initial=scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

        <style>
         

        </style>
      
    </head>
    <body>
    
    
    <div class="container lst">
    
        <h3 class="well">Laravel 7 Multiple File Upload | Codechief </h3>
        <form role="form" method="post" action="{{URL::to('addimage_submit')}}" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group" style="padding-bottom: 15px">                            
                <label class="col-lg-3">Upload</label>
                <input multiple class="btn btn-primary" id="image1"  type="file" name="files[]">  <br/>
                <span id="result1"></span><br/>
                <img src="" width="200" style="display:none;"/> 

                <input type="submit" class="btn btn-success" style="margin-top:10px">
                <span id="result1"></span>
            </div>
        </form>
         
  </div>
        
    
    
  <script type="text/javascript">
  $(document).ready(function() {

        $(document).on('change','#image1', function(event){
          var prod_id = $(this).val();
          console.log(prod_id);
          //$("img").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
          $("img").fadeIn("fast").attr("src":URL.createObjectURL(event.target.files[0]), "width":50);
          
          $('#image1').empty();
          $('#image1').css('display', 'block');

          $(this).load(function(){
                  $('#result1').text('Image is loaded!');
              })
              .error(function(){
                  $('#result1').text('Image is not loaded!');
              });
              
        

        /*$.ajax({
            type:'get',
            url:'{!!URL::to("findmarqmodel")!!}', 
            data:{'id':sous_cat_id},
            success:function(data){
                
                $('#image1').empty();
                $('.Marques').append('<option value="0">Marque</option>');
                $.each(data, function (index,subcategory){
                    $('.Marques').append('<option value="'+subcategory.id+'">'+subcategory.nom_marque+'</option>');
                    //console.log(data[i].nom_sous_categorie);
                })

            },
            error:function(){
            }
    });*/

});


          


        });
    </script> 
    
    
    </body>
    </html> 