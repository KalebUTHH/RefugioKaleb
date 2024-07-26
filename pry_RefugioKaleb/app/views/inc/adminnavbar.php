<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <img src="app/views/img/logo.png" alt="" width="60" height="70"  class="d-inline-block align-text-top">
            <a class="navbar-brand fs-1" href="<?php echo APP_URL;?>dashboard/">PETS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link btn-warning" href="<?php echo APP_URL;?>mascotas/" id="navbarDropdown">Mascotas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn-success" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Donar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo APP_URL;?>efectivo/">Efectivo</a></li>
                            <li><a class="dropdown-item" href="<?php echo APP_URL;?>viveres/">Viveres</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning  margin-right: 2px" href="<?php echo APP_URL;?>crudslider/" id="navbarDropdown">crudslider</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

