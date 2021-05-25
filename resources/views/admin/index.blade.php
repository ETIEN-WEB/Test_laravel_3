<! DOCTYPE html>
<html lang="fr">
    
    <head> 
        <meta charset="utf-8"> 
        <title> Burger code </title>
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        
          <meta name="viewport" content="width=device-width, initial=scale=1">
          <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet" type="text/css"> -->
       
        <!--<script src="js/script.js"></script>-->
    
    
    
    </head>
    
    <body> 

        <div class="container">
            <div class="row" style="margin-top: 45px">
                <div class="col-md-4 col-md-offset-4">
                    <h4> Add new student</h4>
                    <form action="{{route('student.save')}}" method="POST" id="main_form">
                       @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                             <input type="text" class="form-control" name="name" placeholder="Enter your name">
                            <span class="text-danger error-text name_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                             <input type="email" class="form-control" name="email" placeholder="Enter your email">
                             <span class="text-danger error-text email_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                             <input type="password" class="form-control" name="password" placeholder="Enter your password">
                             <span class="text-danger error-text password_error"></span>
                        </div> 
                        <br>
                        <button type="submit" class="btn btn-block btn-primary"> save </button>

                    </form>

                </div>
            </div>
        </div>


        <script src="{{asset('jquery-3.3.1.js')}}"></script>
        
        {{--<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous"></script>
        <script src="spartan_multi_image/src/js/spartan-multi-image-picker.js"></script>--}}

        
       <script src="{{asset('main.js')}}"> </script>


    </body>


</html>
