


<!doctype html>
<html lang="{{app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        

    <!-- CSRF Token -->
    <!--<meta name="csrf-token" content="{{-- {{ csrf_token() }} --}}">-->

    <title> Laravel </title>

    <!-- Scripts -->
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
</head>
<body> 
    
    {{--foreach ($pizza->[$toppings] as $pizz)
       @foreach ($pizz->toppings as $piz) 
       {{dd($pizz->toppings[0])}} --}}
       {{-- $pizz->toppings : contient tout les images de chaque enresitrement (chaq tableau d'image)
       $pizz : parcours les donnée du tableau toppings (la ligne en question) --}}
    @foreach ($pizza as $pizz)
    
    
    <div class="col-md-4" style="margin-right: 0px; paddiight:40px;">
        <div> 
            <img style="border-radius: 5px; margin-rit: 10px; width: 325px; height:270px; " src="upload/{{$pizz->toppings[0]}}" class="img-flui" alt="Colorlib Template">
        </div>
        <div style="margin-le: -5px">
            <div  class="btn btn-primary" role="button" style="position: relative;
            top: -34px; font-weight:bold;"> CONTACTER </div>
        </div>
        
        
            
        
    </div>
    
    @endforeach



</body>
</html>
