
<!doctype html>
<html lang="{{app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Laravel </title>

    <!-- Scripts -->
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
</head>
<body>
    <div class="container" style="margin-top: 50px; margin-left: 300px;">
        
        <div class="row">
            <div class="col-lg-6"> 
                <form action="">
                    <h4>Category </h4>
                    <select class="browser-default custum-select" name="category" id="category">
                        
                        <option selected  value=""> select category </option>
                            @foreach ($categoris as $item)
                              <option value="{{$item->id}}"> {{$item->nom_categorie}} </option>
                                
                            @endforeach
                    </select>

                    <h4>subcategory </h4>
                    <select class="browser-default custum-select" name="subcategory" id="subcategory">
                            
                    </select>


                </form>
                 
            </div>
            
        
        
        </div>

           
    
    
    
    </div>

    <script type="text/javascript">
       /*function selectD(categorie_id){
            $('#produit_id').html('');*/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            $(document).ready(function (){
               $('#category').on('change', function (e) {
                var category_id = e.target.value;

                $.ajax({
                url: "{{route('subcategory')}}",
                type: "POST",
                data: {
                    category_id: category_id
                },
                success: function (data) {
                    $('#subcategory').empty();
                    $.each(data.subcategories[0].subcategories, function (index,subcategory){
                        $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.nom+'</option>');
                    })
                }
            })

             });
        });
    </script>

</body>
</html>
