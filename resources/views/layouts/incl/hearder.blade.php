<header>
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
                <a href="{{ url('/') }}" class="navbar-item is-active">
                    <span class="icon-text">
                        <span class="icon">
                            <i class="fas fa-home"></i>
                        </span>
                        <span>
                            Acceuil
                        </span>
                    </span>
                </a>

                <a href="{{ url('/articles') }}" class="navbar-item">
                    <span class="icon-text">
                        <span class="icon">
                            <i class="fas fa-pager"></i>
                        </span>
                        <span>
                            Articles
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
                  </div>
                </div>

                @if (1)
                {{ dd(Route::has('signin')) }}
                <a href="#contact" class="navbar-item">
                    <span class="icon-text">
                        <span class="icon">
                            <i class="fas fa-address-card"></i>
                        </span>
                        <span>
                            contact
                        </span>
                    </span>
                </a>
                @endif
            </div>
        
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                    <a href="{{ route('signin') }}" class="button ">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                    </a>
                    <a href="{{ route('signup') }}" class="button is-success">
                        <span class="icon">
                            <i class="fas fa-user-plus"></i>
                        </span>  
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>    
</header>