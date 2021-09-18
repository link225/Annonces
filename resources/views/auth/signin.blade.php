<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- Bulma CSS -->
    <link href="{{ asset('css/bulma.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <title>Annonces || Login</title>
    <style>
        footer.footer{
            background-color: transparent;
        }
    </style>
</head>
<body>
  <header>
    @include('layouts.incl.hearder')
  </header>
    <main class="container my-6">
        <section class="columns">
            <div class="column is-offset-4  is-9-mobile is-offset-1-mobile">
                <p class="title is-3">
                    Connexion
                </p>
                <form class="box column is-4">
                  @csrf
                    <div class="field">
                      <label class="label">Email</label>
                      <div class="control ">
                        <input class="input" type="email" placeholder="e.g. alex@example.com">
                      </div>
                    </div>
                  
                    <div class="field">
                      <label class="label">Mot de passe</label>
                      <div class="control">
                        <input class="input" type="password" placeholder="********">
                      </div>
                    </div>

                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox">
                            Remember me
                        </label>
                    </div>
                    <div class="field">
                      <a href="{{ route('signup') }}" class="is-link">sign up</a>
                  </div>
                  
                    <button class="button is-black is-outlined ">Sign in</button>
                </form>
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