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
            <a class="navbar-item active">
                <span class="icon-text">
                    <span class="icon">
                        <i class="fas fa-home"></i>
                    </span>
                    <span>
                        Acceuil
                    </span>
                </span>
            </a>
        
            <a class="navbar-item">
                <span class="icon-text">
                    <span class="icon">
                        <i class="fas fa-list"></i>
                    </span>
                    <span>
                        Categories
                    </span>
                </span>
            </a>
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

    <section class="hero box mx-1">
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
      <div class="columns is-two-thirds-desktop is-full-mobile is-full-tablet">
        <div class="column">
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
            Date : <strong>12/08/21</strong>
          </p>
          <div class="columns mt-2">
              <div class="column is-2-desktop is-2-mobile">
                <a href="#">
                  <spam class="icon"><i class="fab fa-telegram fa-2x" aria-hidden="true"></i></spam>
                </a>
              </div>
              <div class="column is-2-desktop is-2-mobile">
                <a href="#">
                  <spam class="icon"><i class="fab fa-telegram fa-2x" aria-hidden="true"></i></spam>
                </a>
              </div>
              <div class="column is-2-desktop is-2-mobile">
                <a href="#">
                  <spam class="icon"><i class="fab fa-telegram fa-2x" aria-hidden="true"></i></spam>
                </a>
              </div>
          </div>
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

    {{-- section right --}}
    <section class="hero box is-info">
      <div class="hero-body">
        <p class="title">
          Contactez-nous
        </p>
        <p class="subtitle">

        </p>
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