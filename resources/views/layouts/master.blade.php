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

  @include("layouts.incl.hearder")

<main class="container">

  @yield('content')

</main>


@include("layouts.incl/footer")


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