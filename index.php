<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styele.css" />
    <title>Langage de programation</title>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav id="nav">
        <ul>
          <li>Acceuil</li>
          <li>Se Connecter</li>
          <li>Registration</li>
          <li>A propos</li>
          <li>
            <input
              type="search"
              id="search"
              placeholder="Chercher Votre langage"
            />
            <button class="btn btn-primary" id="buttonRecherche">Chercher</button>
          </li>
          <li>
            <div class="dropdown">
              <button
                class="btn btn-primary dropdown-toggle"
                type="button"
                id="buttonLangue"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
               Langue
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li> 
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <section id="main">
      
      <div id="firstSection">
        <ul>
          <li>
            Html
            <ul>
              <li>Intoduction</li>
              <li>Cours</li>
              <li>Exercice</li>
            </ul>
          </li>
          <li>
            Css
            <ul>
              <li>Intoduction</li>
              <li>Cours</li>
              <li>Exercice</li>
            </ul>
          </li>
          <li>
            JavaScript
            <ul>
              <li>Intoduction</li>
              <li>Cours</li>
              <li>Exercice</li>
            </ul>
          </li>
          <li>
            Bootstarp
            <ul>
              <li>Intoduction</li>
              <li>Cours</li>
              <li>Exercice</li>
            </ul>
          </li>
          <li>
            C
            <ul>
              <li>Intoduction</li>
              <li>Cours</li>
              <li>Exercice</li>
            </ul>
          </li>
          <li>
            C++
            <ul>
              <li>Intoduction</li>
              <li>Cours</li>
              <li>Exercice</li>
            </ul>
          </li>
          <li>
            Java
            <ul>
              <li>Intoduction</li>
              <li>Cours</li>
              <li>Exercice</li>
            </ul>
          </li>
          <li>
            Python
            <ul>
              <li>Intoduction</li>
              <li>Cours</li>
              <li>Exercice</li>
            </ul>
          </li>
        </ul>
      </div>
      <div id="secondSection">
        <div>
          <h2>
            Qu'ce que une langage de programation? <br />
            A qoui sert ?
          </h2>
          <p>
            Un langage de programmation est un langage permettant de formuler
            des algorithmes et de produire des programmes informatiques qui
            appliquent ces algorithmes.
          </p>
        </div>
        <div>
          <img src="assets/pogr.jpg" alt="code source" />
        </div>
      </div>

    </section>

     <!--******footer************-->
<footer class="bg-dark text-center text-white">

  <div class="container p-4">
  
    <section class="mb-4" id="social">
    
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

     
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

   
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

     
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
  
    <section id="email">
      <form>
      
        <div class="row d-flex justify-content-center" >
        
          <div class="col-auto">
            <p class="pt-2">
              <strong>Inscrire pour les news</strong>
            </p>
          </div>
        
          <div class="col-md-5 col-12">
          
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Adresse Email</label>
            </div>
          </div>
         
          <div class="col-auto">
        
            <button type="submit" class="btn btn-outline-light mb-4">
              Inscrivez-vous
            </button>
          </div>
       
        </div>
       
      </form>
    </section>
  
    

  
    <section id="footernav1">
 
      <div id="footerNav">
        
        <div >
          <h5 class="text-uppercase"><a class="text-white" href="#nav">Acceuil</a></h5>

        </div>
        
        <div >
          <h5 class="text-uppercase"><a class="text-white" href="login.html">Se Connecter</h5>

        </div>
        
        <div>
          <h5 class="text-uppercase"><a class="text-white" href="signup.html">Registration</a></h5>
        </div>
       
        <div>
          <h5 class="text-uppercase"><a class="text-white" href="propos.html">A propos</a></h5>

        </div>
        
      </div>
     
    </section>

  </div>


 
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Developpé par Med Hedi Bra
  </div>
 
</footer>

<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
  </body>
</html>
