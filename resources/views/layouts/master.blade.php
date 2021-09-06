<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Annonces </title>

    <!-- Bulma CSS -->
    <link href="{{ asset('css/bulma.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
   
  </head>
  <body>
    
<nav class="navbar is-info has-shadow" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
        <img src="{{ asset('img/020.jpg') }}" width="112" height="28">
        </a>
    
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>
    
    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item is-active">
                <span class="icon-text">
                    <span class="icon">
                        <i class="fas fa-home"></i>
                    </span>
                    <span>
                        Acceuil
                    </span>
                </span>
            </a>
        
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Categories
              </a>
      
              <div class="navbar-dropdown">
                <a class="navbar-item">
                  About
                </a>
                <a class="navbar-item">
                  Jobs
                </a>
                <a class="navbar-item">
                  Contact
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
        </div>
    
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                <a class="button ">
                    <span class="icon">
                        <i class="fas fa-user"></i>
                    </span>
                </a>
                <a class="button is-success">
                    <span class="icon">
                        <i class="fas fa-user-plus"></i>
                    </span>  
                </a>
                </div>
            </div>
        </div>
    </div>
</nav>



<main class="container">

    <section class="hero box is-dark mx-1">
      <div class="hero-body">
        <p class="title">
            Annonces
        </p>
        <p class="subtitle">
            <Strong>Annonces</Strong> est une petite application de publication 
          d annonce et de commentaire en laravel  
        </p>
      </div>
    </section>

    {{-- section left --}}
    <section class="columns mt-4 mx-2">
      <div class="column is-two-thirds-desktop is-full-mobile is-full-tablet">
        <div class="column block">
          <figure class="image">
            <img src="{{ asset('img/020.jpg') }}" width="100" height="128">
          </figure>
        </div>
        <div class="column">
          <p class="title">Titre</p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Placeat tenetur nihil culpa earum alias minus. Sit molestias itaque eligendi. 
            Fugiat modi blanditiis provident ex, eligendi et qui maxime voluptatibus quod!
          </p>
          <p>
            Auteur : <strong>John Doe</strong>
          </p>
          <p>
            publier : <strong>12/08/21</strong>
          </p>
          <p>
            <nav class="level is-mobile">
              <div class="level">
                <p class="level-item">
                  Auteur social:
                </p>
                <a class="level-item">
                  <span class="icon is-small"><i class="fab fa-facebook-f"></i></span>
                </a>
                <a class="level-item">
                  <span class="icon is-small"><i class="fab fa-twitter"></i></span>
                </a>
                <a class="level-item">
                  <span class="icon is-small"><i class="fab fa-linkedin-in"></i></span>
                </a>
                <a class="level-item">
                  <span class="icon is-small"><i class="fab fa-github-alt"></i></span>
                </a>
              </div>
            </nav>
          </p>
          <a href="#" class="button is-link is-outlined p-2"> Lire l article </a>
        </div>
      </div>

      
      
      {{-- section right --}}
      <div class="column is-one-third-desktop is-full-mobile is-full-tablet">
        <section class="hero mx-2">
          <p class="title">
              Liste des Articles
          </p>
          <div class="hero-body">
              <div class="box">
                  <article class="media">
                    <div class="media-left">
                      <figure class="image is-64x64">
                        <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                      </figure>
                    </div>
                    <div class="media-content">
                      <div class="content">
                        <p>
                          <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                          <br>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>
                      </div>
                      <a href="#" class="button is-outlined is-info">Lire </a>
                    </div>
                  </article>
              </div>
              <div class="box">
                <article class="media">
                  <div class="media-left">
                    <figure class="image is-64x64">
                      <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <div class="content">
                      <p>
                        <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                      </p>
                    </div>
                    <a href="#" class="button is-outlined is-info">Lire </a>
                  </div>
                </article>
              </div>    
          </div>    
        </section>            
      </div>
    </section>

    {{-- contact section  --}}
    <section class="hero box is-dark p-0">
      <div class="hero-body">
        <div class="columns">
          <div class="column">
            <p class="title">
              Contactez-nous
            </p>
          </div>
          <div class="column">
            <form action="#">
              <div class="columns">
                <div class="column is-half is-full-mobile is-full-touch">
                  <div class="field">
                    <label for="nom" class="title is-5">Name</label>
                    <div class="control">
                      <input class="input is-rounded" type="text" placeholder="Nom">
                    </div>
                  </div>
                </div>
                <div class="column is-half is-full-mobile is-full-touch">
                  <div>
                    <label for="email" class="title is-5">Email</label>
                    <input class="input is-rounded" type="email" placeholder="email">
                  </div>
                </div>
              </div>
              <div>
              <label for="message" class="title is-5">Message</label>
                <textarea name="message" id="message" class="is-rounded textarea" cols="30" rows="5"></textarea>
              </div>
              <input class="button mt-3 is-outlined is-success" type="submit" value="envoyer">
            </form>
          </div>
        </div>
      </div>
    </section>
</main>


<footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Annonces</strong> by <a href="https://jgthms.com">Ehoussou Kouassi Joel</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
      </p>
    </div>
  </footer>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>

{{-- <article class="media">
  <div class="media-left">
    <figure class="image is-128x128">
      <img src="{{ asset('img/020.jpg') }}" alt="Image">
    </figure>
  </div>
  <div class="media-content">
    <div class="content">
      <p>
        <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit

      </p>
    </div>
    <nav class="level is-mobile mt-3">
      <div class="level-left">
        <a class="level-item" aria-label="reply">
          <span class="icon is-small">
            <i class="fab fa-facebook" aria-hidden="true"></i>
          </span>
        </a>
        <a class="level-item" aria-label="retweet">
          <span class="icon is-small">
            <i class="fab fa-twitter" aria-hidden="true"></i>
          </span>
        </a>
        <a class="level-item" aria-label="like">
          <span class="icon is-small">
            <i class="fab fa-github" aria-hidden="true"></i>
          </span>
        </a>
      </div>
    </nav>
    <a href="#" class="button is-link is-outlined p-2 mt-3"> Lire l article </a>
  </div>
</article> --}}