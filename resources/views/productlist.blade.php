

<!doctype html>
<html lang="{{app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> 

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
<center>
    <h1> Laravel dynamic Drop Down whith ajax  </h1>
   <div>
       <div>
            <div>
                <div>
                    <span> Product Category </span>
                    <select style="width: 200px;" class="productcategory " name="category" id="prod_cat_id">
                        <option value="0" disabled="true" selected="true" > select category </option>
                            @foreach ($prod as $cat)
                            <option value="{{$cat->id}}"> {{$cat->product_cat_name}} </option>
                            @endforeach
                    </select>
                    <br>
                    <hr>
                </div>
            </div>
       </div>

       <div>
           <div>
                <span> Product Name </span>
                <select style="width: 200px;" class="productname"  name="" id="">
                    <option value="0" disabled="true" selected="true" > Product Name </option>
                </select>
                <hr>
           </div>
       </div>
    </div>

    <span> Product Price </span>
    <input type="text" class="prod_price">

    <hr>

    <div class="tableviewclss">
        
    </div>

</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
<script type="text/javascript">
    $(document).ready(function(){
        var gprodcatid;
        $(document).on('change','.productcategory', function(){
        var cat_id=$(this).val();
        var div=$(this).parent().parent().parent().parent().parent();
        //div.css('background-color', 'red');   
        var op= " ";

        $.ajax({
            type:'get',
            url:'{!!URL::to("findProductName")!!}',
            data:{'id':cat_id},/*{'id':cat_id} : ceci correspond à l'id de la productcategory */
            success:function(data){
                op+='<option value="0"  selected disabled > chose product </option>';
                for(var i=0; i<data.length; i++){
                    op+='<option value="'+data[i].id+'">'+data[i].productname+'</option>';
                    
                }

                div.find('.productname').html(" ");
                div.find('.productname').append(op);
                
            },
            error:function(){

            }
        });
    });

        
    $(document).on('change','.productname', function(){
        var prod_id=$(this).val();
        var a=$(this).parent().parent().parent().parent();
        //a.css('background-color', 'green'); 
        //console.log(prod_id);

        var op= " ";

        $.ajax({
            type:'get',
            url:'{!!URL::to('findPrice')!!}',
            data:{'id':prod_id},
            dataType:'json',
            success:function(data){
                /*console.log(price);
                console.log(data.price);
                console.log(data[0].price);*/

                a.find('.prod_price').val(data[0].price);
                //console.log(data[0].price);

                var tarea='';

                tarea+='<table>';  
                    tarea+='<thead>';
                        tarea+='<td>product catyegory</td>';
                        tarea+='<td>product name</td>';
                        tarea+='<td>product price</td>';
                    tarea+='</thead>';
                    tarea+='<tbody>';
                        tarea+='<td>'+data[0].product_cat_name+'</td>';
                        tarea+='<td>'+data[0].productname+'</td>';
                        tarea+='<td>'+data[0].price+'</td>';
                    tarea+='</tbody>';
                tarea+='</table>';
                    $('.tableviewclss').html(' ');
                    $('.tableviewclss').html(tarea);

                },
                error:function(){

                }
          
        });
    });

});
 
</script>

</body>
</html>
