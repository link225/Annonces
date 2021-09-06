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
    
<header>
    @include('layouts.incl.hearder')
</header>


<main class="container">

    {{-- section left --}}
    <section class="columns mt-4 mx-2">
      <div class="column is-full  is-full-mobile is-full-tablet">
        <div class="column block">
          <p class="title is-1">Titre</p>

          <figure class="image is-5by5">
            <img src="{{ asset('img/020.jpg') }}" width="100" height="128">
          </figure>
        </div>
        <div class="column">
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
        </div>
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