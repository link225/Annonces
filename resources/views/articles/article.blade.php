@extends('layouts.master')


@section('content')
    {{-- section left --}}
    <section class="columns mt-4 mx-2">
      <div class="column is-full is-full-mobile is-full-tablet">
        <div class="column block">
          <p class="title is-1">Titre</p>

          <figure class="image is-3by1">
            <img src="{{ asset('img/020.jpg') }}" alt="illustration">
          </figure>
        </div>
        <div class="column">
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Placeat tenetur nihil culpa earum alias minus. Sit molestias itaque eligendi. 
              Fugiat modi blanditiis provident ex, eligendi et qui maxime voluptatibus quod!
            </p>
          </div>
          <hr>
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
                <textarea name="message" id="message" class="is-rounded textarea" cols="30" rows="4"></textarea>
              </div>
              <input class="button mt-3 is-outlined is-success" type="submit" value="envoyer">
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection