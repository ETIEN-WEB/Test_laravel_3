

<!doctype html>
<html lang="{{app()->getLocale() }}">
<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--  cdn of boostrap, fileinput- boostrap plugin--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">

    
    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title> Laravel </title>
    <!-- Scripts -->
    <!-- Fonts -->
    <!--  <link rel="dns-prefetch" href="//fonts.gstatic.com">
        At least 2 image , can upload to the server
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    Styles -->
    <style type="text/css">
        .main-section{
            margin: 0 auto;
            padding: 20px;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0px 0px 20px #clclcl;
        }


    </style>
</head>
<body class="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-11 main-section"> 
                <h1 class="text-center text-danger">Multiple Upload Images by WeShares</h1>
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <input type="file" id="file-1" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2" >

                    </div> 
                    
             
            </div>
            
        </div>
    
    </div>
{{--  cdn of fileinput js- boostrap js, Theme Js, Jquery below--}}

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/locales/fr.min.js" type="text/javascript"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/gly/theme.js" type="text/javascript"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

{{--  cdn of fileinput js- boostrap js, Theme Js, Jquery below--}}

<!-- fileinput is class from boostrap fileinput plugin(that include theme, upload URL.....)
hope all of you understand -->

<script type="text/javascript">
    $("#file-1").fileinput({
      theme:'fa',
      uploadUrl:"/image-submit",  
      uploadExtraData:function(){
          return{
            _token:$("input[name='_token']").val()
          };
      },

      allowedFileExtensions:['jpg', 'png', 'gif'],
      overwriteInitial:false,
      maxFileSize:2000,
      maxFileNum:8,
      slugCallback:function(filename){
        return filename.replace('(','_').replace(']','_');    

      }

    });


</script>

</body>
</html>
