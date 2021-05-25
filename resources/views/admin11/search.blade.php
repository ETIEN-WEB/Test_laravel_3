


<html lang="en">
    <head>
      <title>Laravel 7 Multiple File Upload Example | Codechief </title>
      <!--<script src="jquery/1.9.1/jquery.js"></script>
      <link rel="stylesheet" href="3.3.6/css/bootstrap.min.css"> -->
      <meta name="viewport" content="width=device-width, initial=scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

        <style>
         

        </style>
      
    </head>
    <body>
    {{-- method="post" {{csrf_field()}}  --}}
    
    <div class="container lst">
        <h3 class="well">Laravel 7 Multiple File Upload | Codechief </h3>
        <form class="d-flex mr-3"  action="{{route('products.search')}}">
            

            <div class="form-group mb-0 mr-1" style="padding-bottom: 15px">                            
                <input class="form-control"  type="text" name="q">  
            </div>  
                <input type="submit" class="btn btn-success" style="margin-top:10px" value="Rechercher">
        </form>
  </div>
      
    
    </body>
    </html> 