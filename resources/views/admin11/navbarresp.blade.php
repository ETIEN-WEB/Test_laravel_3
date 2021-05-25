

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--<script src="jquery/1.9.1/jquery.js"></script>
      <link rel="stylesheet" href="3.3.6/css/bootstrap.min.css"> -->
      <meta name="viewport" content="width=device-width, initial=scale=1">
      <link rel="stylesheet" href="{{asset('images/style.css')}}">
      <title>Laravel 7 Multiple File Upload Example | Codechief </title>
      {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        --}}
      
    </head>
    <body>
        <div id="wrap">
            <nav>
                <div class="logo">
                    MINZ <strong> CODE</strong>
                </div>
                <button type="button" class="btn-hamburger" data-action="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="nav-menu">  
                    <li class="nav-item"> <a href="#">Home</a> </li>
                    <li class="nav-item"> <a href="#">About</a> </li>
                    <li class="nav-item"> <a href="#">Work</a> </li>
                    <li class="nav-item dropdown">
                        <a href="#" data-action="dropdown-toggle">Projects</a> 
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Project 1</a>
                            <a class="dropdown-item" href="#">Project 2</a>
                            <a class="dropdown-item" href="#">Project 3</a>
                        </div>
                    </li> 
                </ul>  
            </nav>
            <div class="container">
                <p>
                    Mes tâches principales à Webconcept incluent la création de cahier de 
                    charge, le développement front et back d’applications et
                     sites Web. Personnellement, j’ai également réalisé des applications
                      web et des sites web.
                    Ces expériences m’ont permis d’acquérir la maîtrise des outils de 
                    développement nécessaires et m’ont fourni une connaissance 
                    approfondie de la conception d’une application ou d’un site
                     Web convivial. Je crois que mes compétences bénéficieront 
                     à votre entreprise.
                </p>
                <p>
                    Mes tâches principales à Webconcept incluent la création de cahier de 
                    charge, le développement front et back d’applications et
                     sites Web. Personnellement, j’ai également réalisé des applications
                      web et des sites web.
                    Ces expériences m’ont permis d’acquérir la maîtrise des outils de 
                    développement nécessaires et m’ont fourni une connaissance 
                    approfondie de la conception d’une application ou d’un site
                     Web convivial. Je crois que mes compétences bénéficieront 
                     à votre entreprise.
                </p>
            </div>
        </div>

        <script>
            let nav = document.querySelector('nav');
            let dropdown = nav.querySelector('.dropdown');
            let dropdownToggle = nav.querySelector("[data-action='dropdown-toggle']");
            let navToggle = nav.querySelector("[data-action='nav-toggle']");

            dropdownToggle.addEventListener('click', () =>{
                if(dropdown.classList.contains('show')) {
                    dropdown.classList.remove('show');
                }else {
                    dropdown.classList.add('show');
                }
            })

            navToggle.addEventListener('click', () =>{
                if(nav.classList.contains('opened')) {
                    nav.classList.remove('opened');
                }else {
                    nav.classList.add('opened');
                }
            })

        </script>
         
      
    
    </body>
    </html> 

