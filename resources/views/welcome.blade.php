<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </head>
    <style>
      body{
        /* margin: 0;
        background-color: #85FFBD;
        background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%); */
        background-image: url("bg.jpeg");

      }
      .container-home{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        gap: 5rem;
      }
      /* .container-home > img {
        border-radius: 50%;
      } */
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
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <div class="container-home">
            <img src="foto.jpg" alt="" width="250px" height="300px">
            <div>
              <h1>Hi I'm Vinny Jovita</h1>
              <h3>Welcome to my CV ❤</h3>
            </div>
          </div>
        </body>
</html>

