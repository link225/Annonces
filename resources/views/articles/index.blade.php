@extends('layouts.master')


@section('content')
    {{-- section left --}}
    <section class="columns mt-4 mx-2">
      <div class="column is-one-third  is-full-mobile is-full-tablet">
        <div class="column block">
          <p class="title is-3">Titre</p>

          <figure class="image is-5by5">
            <img src="{{ asset('img/020.jpg') }}" width="100" height="128">
          </figure>
        </div>
        <div class="column">
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat tenetur nihil culpa earum alias minus. Sit molestias itaque eligendi. 
                Fugiat modi blanditiis provident ... 
            </p>
            <p>
                Auteur : <strong>John Doe</strong>
            </p>
            <p>
                publier : <strong>12/08/21</strong>
            </p>
            <p>
                Categories : <strong>cat 1</strong>
            </p>
            <nav class="level is-mobile is-one-third-touch is-one-third-mobile">
                <div class="level level-left">
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
            <p>
                <a href="#" class="button is-info is-outlined">Lit moi</a>
            </p>
        </div>
      </div>

      <div class="column is-one-third  is-full-mobile is-full-tablet">
        <div class="column block">
          <p class="title is-3">Titre</p>

          <figure class="image is-5by5">
            <img src="{{ asset('img/020.jpg') }}" width="100" height="128">
          </figure>
        </div>
        <div class="column">
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat tenetur nihil culpa earum alias minus. Sit molestias itaque eligendi. 
                Fugiat modi blanditiis provident ... 
            </p>
            <p>
                Auteur : <strong>John Doe</strong>
            </p>
            <p>
                publier : <strong>12/08/21</strong>
            </p>
            <p>
                Categories : <strong>cat 1</strong>
            </p>
            <nav class="level is-mobile is-one-third-touch is-one-third-mobile">
                <div class="level level-left">
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
            <p>
                <a href="#" class="button is-info is-outlined">Lit moi</a>
            </p>
        </div>
      </div>

      <div class="column is-one-third  is-full-mobile is-full-tablet">
        <div class="column block">
          <p class="title is-3">Titre</p>

          <figure class="image is-5by5">
            <img src="{{ asset('img/020.jpg') }}" width="100" height="128">
          </figure>
        </div>
        <div class="column">
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat tenetur nihil culpa earum alias minus. Sit molestias itaque eligendi. 
                Fugiat modi blanditiis provident ... 
            </p>
            <p>
                Auteur : <strong>John Doe</strong>
            </p>
            <p>
                publier : <strong>12/08/21</strong>
            </p>
            <p>
                Categories : <strong>cat 1</strong>
            </p>
            <nav class="level is-mobile is-one-third-touch is-one-third-mobile">
                <div class="level level-left">
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
            <p>
                <a href="#" class="button is-info is-outlined">Lit moi</a>
            </p>
        </div>
      </div>
    </section>

    {{-- Paginate section --}}
    <section class="block">
        <nav class="pagination is-centered" role="navigation" aria-label="pagination">
            <a class="pagination-previous">Previous</a>
            <a class="pagination-next">Next page</a>
            <ul class="pagination-list">
              <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
              <li><span class="pagination-ellipsis">&hellip;</span></li>
              <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
              <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
              <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
              <li><span class="pagination-ellipsis">&hellip;</span></li>
              <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
            </ul>
          </nav>
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
                      <input class="input " type="text" placeholder="Nom">
                    </div>
                  </div>
                </div>
                <div class="column is-half is-full-mobile is-full-touch">
                  <div>
                    <label for="email" class="title is-5">Email</label>
                    <input class="input" type="email" placeholder="email">
                  </div>
                </div>
              </div>
              <div>
              <label for="message" class="title is-5">Message</label>
                <textarea name="message" id="message" class="is-rounded textarea" cols="15" rows="3"></textarea>
              </div>
              <input class="button mt-3 is-outlined is-success" type="submit" value="envoyer">
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection