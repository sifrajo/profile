<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jesse</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="profile/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark">
        <div class="container">
            {{-- Logo --}}
            <a class="profileLogo" href="#">
                <img src="profile/assets/logo.png" alt="JayZ" width="110px";>
              </a>

            {{--Hamburger Button  --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          {{-- Isiny Hamburger --}}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ABOUT ME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">RESUME</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PORTOFOLIO
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">PHOTOGRAPHY</a></li>
                  <li><a class="dropdown-item" href="#">DESIGN</a></li>
                  <li><a class="dropdown-item" href="#">DRAWING</a></li>
                  <li><a class="dropdown-item" href="#">DANCE</a></li>
                  <li><a class="dropdown-item" href="#">MUSIC</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
