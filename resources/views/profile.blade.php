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
    <nav id="navbar-example2" class="navbar sticky-top navbar-expand-lg bg-body-tertiary navbar-dark">
        <div class="nav container-fluid">
            {{-- Logo --}}
            <a class="profileLogo" href="#home">
                <img src="profile/assets/logo.png" alt="" width="110px";>
            </a>

            {{--Hamburger Button  --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          {{-- Isiny Hamburger --}}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto fw-light">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#aboutMe">ABOUT ME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#education">EDUCATION</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#portfolio" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PORTFOLIO
                    </a>
                    {{-- ISINYA DROPDOWN --}}
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">PHOTOGRAPHY</a></li>
                        <li><a class="dropdown-item" href="#">DESIGN</a></li>
                        <li><a class="dropdown-item" href="#">DRAWING</a></li>
                    </ul>
                 </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary rounded-2" tabindex="0">
        {{-- =============HOME============= --}}
        <section id="home" class="home">
            <div class="home-container d-flex flex-column justify-content-center align-items-center">
                <p class="title-home text-center fs-1 fw-light">WHO AM I..?</p>
            </div>
        </section>

        {{-- =============ABOUT ME============= --}}
        <section id="aboutMe" class="aboutMe">
            <div class="aboutMe-container container-fluid ">

                <h1 class="title-am text-center fs-1">ABOUT ME</h1>

                <div class="am row align-self-start">
                    <div class="pic1 col-lg-6">
                        <img src="profile/assets/pic1-am.jpg" class="img-fluid" alt="" width="100%">
                    </div>

                    <div class="bio col-lg-4 pt-4 pt-lg-0">
                        <div class="bio1">
                            <p class="fs-1">JESSE ORLANDA</p>
                            <div class="text-light bg-dark bg-gradient bg-gradient-horizontal p-2">
                                "JESSE"
                            </div>
                        </div>

                        <div class="bio2 row">
                            <div class="question col-lg-4">
                                <ul>
                                    <li>Stage Name</li>
                                    <li>Age</li>
                                    <li>Domain</li>
                                    <li>Date of Birt</li>
                                    <li>Nationality</li>
                                    <li>Height</li>
                                    <li>Weight</li>
                                    <li>Blood Type</li>
                                    <li>Zodiak</li>
                                    <li>MBTI</li>
                                </ul>
                            </div>
                            <div class="answer col-lg-8">
                                <ul>
                                    <li>: JayZ</li>
                                    <li>: 20</li>
                                    <li>: Kebumen</li>
                                    <li>: November 24th 2002</li>
                                    <li>: Indonesian</li>
                                    <li>: 165 cm</li>
                                    <li>: 60 kg</li>
                                    <li>: A</li>
                                    <li>: Sagitarius</li>
                                    <li>: ISFJ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- =============EDUCATION============= --}}
        <section id="education" class="education">
            <div class="education-container container-fluid ">

                <h1 class="title-e text-center fs-1">EDUCATION</h1>

                <div class="timeline">
                    <ul>
                        {{-- ELEMENTARY SCHOOL --}}
                        <li>
                            <div class="content">
                                <h2>SD BPK Penabur Kebumen</h2>
                                <h5>2009 - 2015</h5>
                                <p>- Juara 3 FLS2N Membatik Tingkat Kabupaten</p>
                                <p>- Anggota Dokter Kecil</p>
                                <p>- Peserta OSN Matematika Tingkat Kabupaten</p>
                                <p>- Peserta Lomba Cerdas Cermat Tingkat Kabupaten</p>
                            </div>

                            <div class="time">
                                Elementary School
                            </div>
                        </li>

                        {{-- JUNIOR HIGH SCHOOL --}}
                        <li>
                            <div class="content">
                                <h2>SMP Negeri 1 Kebumen</h2>
                                <h5>2015 - 2018</h5>
                                <p>- Ketua Pameran VIIC</p>
                                <p>- Wakil Ketua Pagelaran VIIIF</p>
                                <p>- Juara 1 Pagelaran SMP Negeri 1 Kebumen</p>
                                <p>- Ketua Teater IXF</p>
                            </div>

                            <div class="time">
                                Junior High School
                            </div>
                        </li>

                        {{-- SENIOR HIGH SCHOOL --}}
                        <li>
                            <div class="content">
                                <h2>SMA Sedes Sapientiae</h2>
                                <h5>2018 - 2021</h5>
                                <p>- Peserta OSN Matematika</p>
                                <p>- Peserta Lomba Matematika</p>
                                <p>- Peserta Lomba Matematika</p>
                                <p>- Harapan 3 Lomba Matematika</p>
                            </div>

                            <div class="time">
                                Senior High School
                            </div>
                        </li>

                        {{-- UNIVERSITY --}}
                        <li>
                            <div class="content">
                                <h2>BCA X Binus University</h2>
                                <h5>2021 - 2025</h5>
                                <p>- Wakil Ketua Ekstrakurikuler Dance PM</p>
                                <p>- Pubdok Ekstrakurikuler
                                <p>- Pubdok Anniversary PPTI '21</p>
                                <p>- Koor Pubdok Cawu 4</p>
                                <p>- Koor Pubdok Cawu 5</p>
                                <p>- Koor Pubdok Induksi PPTI 12</p>
                                <p>- Koor Pubdok Retreat PPTI/PPBP 2023</p>
                                <p>- TOP 10 YNFEST 2023</p>
                            </div>

                            <div class="time">
                                University
                            </div>
                        </li>
                        <div style="clear: both;"></div>
                    </ul>
               </div>

            </div>
        </section>

        {{-- =============PORTOFOLIO============= --}}
        <section id="portfolio" class="education">
            <div container>
                <h1>PORTFOLIO</h1>

            </div>
        </section>

        {{-- =============CONTACT============= --}}
        <section id="contact" class="education">
            <div container>
                <h1>CONTACT</h1>
            </div>
        </section>


    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
