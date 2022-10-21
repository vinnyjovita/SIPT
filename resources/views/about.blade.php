<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </head>

    <style>

body{
        background-image: url("bg.jpeg");
      }

      .about{
        text-align: center;
        font-size: 80px;
      }

      h1{
        text-align: center;
    }
    .container-about{
        display: flex;
        justify-content: center;
        gap: 5rem;
    }

    .container-luar > h1{
      font-size: 90px;
    }

    .container-luar{
      height: 70vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    </style>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/welcome">Vinny Jovita</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about">About</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/resume">Resume</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/krs">Lihat KRS</a>
                  </li>

                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <div class="container-luar">
            <h1>About</h1>
            <div class="container-about">
                <h3>Tgl Lahir : 14 Maret 2002</h3>
                <h3>Umur : 20 tahun</h3>
            </div>
            <div class="container-about">
                <h3>Alamat : Jln Ardut no 108</h3>
                <h3>No Telp : 4567894</h3>
            </div>
          </div>

          
          
        </body>
</html>

