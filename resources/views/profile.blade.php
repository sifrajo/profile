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

                <li class="nav-item">
                    <a class="nav-link" href="#skills">SKILLS</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#portfolio" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <a class="nav-link" href="#contact">CONTACT</a>
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
                                <p>- Juara Harapan 3 FLS2N Membatik Tingkat Kabupaten</p>
                                <p>- Anggota Dokter Kecil</p>
                                <p>- Juara 3 Lomba Matematika Tingkat Kabupaten</p>
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

        {{-- =============SKILLS============= --}}
        <section id="skills" class="skills">
            <div class="skills-container container-fluid">
                <h1 class="text-center fs-1 mb-5">SKILLS</h1>
                <div class="progress-s row p-lg-3 text-dark">
                    <div class="progress-col col-lg-6">
                        <h4 class="text-light">Laravel</h4>
                        <div class="progress text-center fw-bold" role="progressbar" aria-label="Laravel" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar1" style="width: 15%">15%</div>
                        </div>
                        <br>

                        <h4 class="text-light">Bootstrap</h4>
                        <div class="progress text-center fw-bold" role="progressbar" aria-label="Bootstrap" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar2" style="width: 50%">50%</div>
                        </div>
                    </div>

                    <div class="progress-col col-lg-6">
                        <h4 class="text-light">HTML/CSS</h4>
                        <div class="progress text-center fw-bold" role="progressbar" aria-label="Warning example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar3" style="width: 50%">75%</div>
                          </div>
                          <br><br>

                          <h4 class="text-light">Python</h4>
                          <div class="progress text-center fw-bold" role="progressbar" aria-label="Danger example" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar4" style="width: 30%">30%</div>
                          </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- =============PORTOFOLIO============= --}}
        <section id="portfolio" class="portofolio">
            <div class="portfolio-container container-fluid">
                <h1 class="title-p text-center fs-1 m-5">PORTFOLIO</h1>

                <div class="portfolio-row row p-5 btn-light">
                    <div class="category col">
                        <a href="#photography" class="btn btn-lg p-4 ms-5 border border-3 border-dark">
                            <img src="profile/assets/photography.png" alt="#portfolio" width= "200px"/>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#designing" class="btn btn-lg p-4 ms-5 border border-3 border-dark">
                            <img src="profile/assets/design.png" alt="#portfolio" width= "200px"/>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#drawing" class="btn btn-lg p-4 ms-5 border border-3 border-dark">
                            <img src="profile/assets/drawing.png" alt="#portfolio" width= "200px"/>
                        </a>
                    </div>
                </div>
            </div>

            <section id="photography" class="photography">
                <div class="photography-container container-fluid p-5 m-5">
                    <h2>
                        <u class="text-decoration-none" style="border-bottom: 4px solid #ff5fa2">Photography</u>
                    </h2>

                    <div class="photo-container container">
                        <img src="profile/assets/photo1.jpg" alt="" width="400px" class="m-3">
                        <img src="profile/assets/photo2.jpg" alt="" width="400px" class="m-3">
                        <img src="profile/assets/photo3.jpg" alt="" width="400px" class="m-3">
                    </div>
                </div>
            </section>

            <section id="designing" class="designing">
                <div class="designing-container container-fluid p-5 m-5">
                    <h2>
                        <u class="text-decoration-none" style="border-bottom: 4px solid #ff5fa2">Design</u>
                    </h2>

                    <div class="design-container container">
                        <img src="profile/assets/design1.png" alt="" width="400px" class="m-3">
                        <img src="profile/assets/design2.png" alt="" width="400px" class="m-3">
                        <img src="profile/assets/design3.png" alt="" width="400px" class="m-3">
                    </div>
                </div>
            </section>

            <section id="drawing" class="drawing">
                <div class="drawing-container container-fluid p-5 m-5">
                    <h2>
                        <u class="text-decoration-none" style="border-bottom: 4px solid #ff5fa2">Drawing</u>
                    </h2>

                    <div class="draw-container container">
                        <img src="profile/assets/draw1.jpg" alt="" width="400px" class="m-3">
                        <img src="profile/assets/draw2.jpg" alt="" width="400px" class="m-3">
                        <img src="profile/assets/draw3.jpg" alt="" width="400px" class="m-3">
                    </div>
                </div>
            </section>

        </section>

        {{-- =============CONTACT============= --}}
        <section id="contact" class="contact">
            <div class="contact-container container-fluid">
                <h1 class="text-center fs-1 mb-5">CONTACT</h1>

                <div class="row">
                    <div class="email col text-black p-3">
                        <img src="profile/assets/email.png" alt="" width="60px" class="float-start me-3">
                        <div class="align-text-end d-inline-block">
                            <h3>Email</h3>
                            <p class="mb-2">jesseorlanda241102@gmail.com</p>
                        </div>
                    </div>
                    <br>

                    <div class="phone col text-black p-3">
                        <img src="profile/assets/phone.png" alt="" width="60px" class="float-start me-3">
                        <div class="align-text-end d-inline-block">
                            <h3>Phone</h3>
                            <p class="mb-2">081228602233</p>
                        </div>
                    </div>
                    <br>

                    <div class="instagram col text-black p-3">
                        <img src="profile/assets/instagram.png" alt="" width="60px" class="float-start me-3">
                        <div class="align-text-end d-inline-block">
                            <h3>Instagram</h3>
                            <p class="mb-3">@joo_sfr</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
