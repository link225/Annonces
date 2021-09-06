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

                <a class="navbar-item">
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
</header>