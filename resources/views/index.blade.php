<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('assets_main/css/styles.css') }}" />

    <!-- =====BOX ICONS===== -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

    <title>Web PPDB SMK Wikrama</title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">SMK Wikrama Bogor</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">Jurusan</a>
                    </li>
                    <li class="nav__item">
                        <a href="#Prestasi" class="nav__link">Prestasi</a>
                    </li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-menu"></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">
                    <span class="home__title-color">SMK Wikrama Bogor</span> <br>
                    Merupakan Sekolah Menengah Kerjuruan Yang Berada Di Kota Bogor
                </h1>

                <a href="{{ route('peserta.create') }}" class="button">Registrasi</a>
            </div>

            <div class="home__social">
                <a href="https://www.instagram.com/smkwikrama/" target="_blank" class="home__social-icon"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCyhEUzlXbXet57qFnDfdWuw" target="_blank"
                    class="home__social-icon"><i class="bx bxl-youtube"></i></a>
            </div>

            <div class="home__img">
                <!-- <img src="assets/img/prof1.jpeg" alt="" /> -->
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section" id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <iframe width="500" height="300" src="https://www.youtube.com/embed/Wag6WcgKO6o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div>
                    <p class="about__text">
                        VISI, MISI, KEBIJAKAN MUTU,SASARAN MUTU, MOTO, KARAKTER UTAMA INSAN WIKRAMA
                        dan AFIRMASI SISWA Visi. Menjadi sekolah kejuruan teladan nasional yang berbudaya lingkungan,
                        berkarakter kebangsaan, berbasis teknologi informasi dan mampu memenuhi kebutuhan dunia kerja.
                    </p>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Jurusan</h2>

            <div class="skills__container bd-grid">
                <div class="">
                    <h2 class="skills__subtitle">Jurusan SMK Wikrama Bogor</h2>
                    <p class="skills__text">
                        Terdiri dari dari 7 jurusan yaitu :
                    </p>
                    <div class="skills_flex">

                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="bx skills__icon"></i>
                                <span class="skills__name">Rekayasa Perangkat Lunak</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="bx skills__icon"></i>
                                <span class="skills__name">Multi Media</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="bx skills__icon"></i>
                                <span class="skills__name">Teknik Komputer dan jaringan</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="bx skills__icon"></i>
                                <span class="skills__name">Bisnis Daring Pemasaran</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="bx skills__icon"></i>
                                <span class="skills__name">Tata Boga</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="bx skills__icon"></i>
                                <span class="skills__name">Perhotelan</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="bx skills__icon"></i>
                                <span class="skills__name">Perkantoran</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="Prestasi">
            <h2 class="section-title">Prestasi</h2>

            <div class="work__container bd-grid">
                <div class="work__img">
                    <img src="{{ asset('assets_main/img/prestasi 1 .png') }}" title="Wikrama Go green school" />
                </div>

                <div class="work__img">
                    <img src="{{ asset('assets_main/img/prestasi 2.jpg') }}" title="Juara 1" />
                </div>

                <div class="work__img">
                    <img src="{{ asset('assets_main/img/prestasi 3.jpg') }}" title="Prestasi Jurusan OTKP" />
                </div>
                <div class="work__img">
                    <img src="{{ asset('assets_main/img/prestasi 4.jpg') }}" title="Prestasi Jurusan RPL" />
                </div>

            </div>
        </section>

    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">Azriel Fauzi Hermansyah</p>
        <div class="footer__social">
            <a href="https://www.instagram.com/azriel_fauzi.h/" class="footer__icon"><i
                    class="bx bxl-instagram"></i></a>
            <a href="https://twitter.com/AzrielFauzi5" class="footer__icon"><i class="bx bxl-twitter"></i></a>
        </div>
        <p>&#169; 2022 copyright all right reserved</p>
    </footer>

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--===== MAIN JS =====-->
    <script src="{{ asset('assets_main/js/main.js') }}"></script>

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
</body>

</html>
