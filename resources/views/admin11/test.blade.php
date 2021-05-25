
/*-- très im^portant à ne pas éffacer --*/

            
$aray= array ($phone->nom_phone, $phone->prix_phone, $phone->tag_id);
$nb = sizeof($aray);
echo '<ul>';  
for ($i = 0; $i < $nb; $i++){
    
        if($aray[$i]!= '') {
            
            echo '<li style="margin-top: 10px;">'; 

            echo $aray[$i];
            
            echo '</li>';
            
         }
      
}
echo '</ul>'; 


/*-- très im^portant à ne pas éffacer --*/







<! DOCTYPE html>
<html>
    
    <head> 
        
        <title> Burger code </title>
        
        <meta charset="utf-8"> 
          <meta name="viewport" content="width=device-width, initial=scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet" type="text/css">
       
        <!--<script src="js/script.js"></script>-->
    
    
    
    </head>
    
    <body> 
    	<h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span>   Burger code <span class="glyphicon glyphicon-cutlery"></span> </h1>
   
    	<div class="container admin" >
    		<div class="row"> 
    			<h1> <strong> Liste des items  </strong><a href="#" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-plus"> </span> Ajouter</a></h1>

    			<table class="table table-striped table-bordered" >
    				<thead>
                        @foreach ($descrip as $descri)
                        
    					<tr>
    						 <th> Nom {{$descri->nom_description}}</th>
                        </tr>
                        @endforeach
    				</thead>

    				<tbody>
             


    				</tbody>
    			</table>

    		</div>

    	</div>

	</body>
</html>




























