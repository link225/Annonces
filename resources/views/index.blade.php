@extends("layouts.master")

@section('content')
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
            <div class="level is-mobile">
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
          <form action="#" id="contact">
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
@endsection
