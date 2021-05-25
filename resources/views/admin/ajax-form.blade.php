<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>laravel 6 Ajax Form Submission Example - Tutsmake.com</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

{{--validation js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.js"></script>


{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
.error{ color:red; }   
</style>
</head>
<body>
<div class="container">
<h2 style="margin-top: 10px;">laravel 6 Ajax Form Submission Example - <a href="https://www.tutsmake.com" target="_blank">TutsMake</a></h2>
<br>
<br>

<form name="contact_us" id="contact_us" method="post" action="javascript:void(0)">
   
    <div class="form-group">
      <label for="exampleInputEmail1">name</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div> 
    <div class="form-group">
        <label for="exampleInputEmail1">mobile number </label>
        <input type="text" class="form-control" name="mobile_number" id="mobile_number">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>  
<script>
    if ($("#contact_us").length > 0) {
        $("#contact_us").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                    
                    
                },   
                mobile_number: {
                    required: true,
                }
                },

            messages: {
            name: {
                required: "Please enter name",
            },
            email: {
                required: "Please enter valid email",
                email: "entrer un mail valable",
                unique: "le mail existe déja",
            },
            mobile_number: {
                required: "Please enter contact number",
                
            }
            },

           submitHandler: function(form) {
                $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });

                $('#send_form').html('Sending..');
                $.ajax({
                url: "http://127.0.0.1:8000/save",
                type: "POST",
                data: $('#contact_us').serialize(),
                success: function(res) {
                    alert('form has been saved')
                    document.getElementById('contact_us').reset();
                },
                error: function(res){
                alert('Something goes to wrong')
                },
                });
            }
        })
    }
</script>
</body>
</html>