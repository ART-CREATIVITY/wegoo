<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
  </head>
  <body>


    <header class="position-relative h-100">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="{{asset('assets/images/logo-h.png')}}" alt="WeGoo Logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Mes favoris</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Nous contacter</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Catégories
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Hotêl</a></li>
                      <li><a class="dropdown-item" href="#">Get house</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Pack d'attraction</a></li>
                    </ul>
                  </li>
                </ul>
                <div class="d-flex" role="search">
                    <button type="button" class="btn btn-outline-secondary me-2">Connexion</button>
                    <button type="button" class="btn btn-secondary">S'inscrire</button>
                </div>
              </div>
            </div>
          </nav>

          <div class="splash-header ">
            <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column justify-content-center text-center">
                    <h1>weGoo</h1>
                    <p>Voyager partout dans le monde <br> pour d'inégites aventure</p>
                    <div><button type="button" class="btn btn-lg btn-primary">Commencer</button></div>

                </div>

            </div>
          </div>
    </header>

    <main>

        <section class="py-5" >
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Tendance</h2>

                </div>

                <x-widgets.travel-card :image="$flight->image"
                    :name="$flight->name" :country="$flight->country->name" :continent="$flight->country->continent" :mode="'large'"
                ></x-widgets.travel-card>
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Destination</h2>
                    <button class="btn btn-light">VOIR +</button>
                </div>

                <div class="row">
                    @foreach ($flights as $item)
                        <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <x-widgets.travel-card :image="$item->image"
                                :name="$item->name" :country="$item->country->name" :continent="$item->country->continent" :mode="'large'"
                            ></x-widgets.travel-card>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>

    <footer>

    </footer>

    <script src="{{asset('assets/js/app.js')}}"></script>
  </body>
</html>
