<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="detail" content="@yield('detail')">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title> @yield('title') </title>
</head>

<body>

    <nav id="navbar-example2" class="navbar sticky-top navbar-expand-lg bg-body-tertiary navbar-dark">
        <div class="nav container-fluid">
            {{-- Logo --}}
            <a class="profileLogo" href="/">
                <img src="profile/assets/logo.png" alt="" width="110px";>
            </a>

            {{-- Navbar --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          {{-- Isiny Navbar --}}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto fw-light">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/#home">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#aboutMe">ABOUT ME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#education">EDUCATION</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#skills">SKILLS</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/#portfolio" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PORTFOLIO
                    </a>
                    {{-- ISINYA DROPDOWN --}}
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#photography">PHOTOGRAPHY</a></li>
                        <li><a class="dropdown-item" href="#designing">DESIGN</a></li>
                        <li><a class="dropdown-item" href="#drawing">DRAWING</a></li>
                    </ul>
                 </li>

                <li class="nav-item">
                    <a class="nav-link active" href="/products">PRODUCT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#contact">CONTACT</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="products">
        @yield('container')
    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</body>
</html>
