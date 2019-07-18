<?php
    $to = "kontakt@piotrkawula.pl";
    $topic = "Wiadomosc - CV";
    $message = $_POST['msg-text'];

    if(isset($message)){
      if(mail($to, $topic, $message)){
        header('Location: thanks.php');
        exit();
    }}
?>
<html lang="pl">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NPH93SH');</script>
    <!-- End Google Tag Manager -->
    <title>Curriculum Vitae - Piotr Kawula</title>
    <meta name="description" content="Interaktywne Curriculum Vitae – Piotr Kawula. Poznaj moje doświadczenie, wykształcenie,  umiejętności i dowiedz się więcej o mnie. Zapraszam do kontaktu.">
    <meta property="og:title" content="Curriculum Vitae Piotr Kawula - Interaktywne CV">
    <meta property="og:description" content="Interaktywne Curriculum Vitae – Piotr Kawula. Poznaj moje doświadczenie, wykształcenie,  umiejętności i dowiedz się więcej o mnie. Zapraszam do kontaktu.">
    <meta property="og:locale" content="pl_PL">
    <meta name="keywords" content="curriculum,vitae,piotr,kawula,cv,interaktywne,programista,html5,css3,javascript,js,php,wordpress,prestashop">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width,height=device-height">
    <meta name="theme-color" content="#666666">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133183973-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-133183973-1');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>

    <script>
        jQuery(function($) {
                $.scrollTo(0);
                $('.ab').click(function() {
                    $.scrollTo($('#about'), {
                        offset: 0,
                        duration: 800
                    });
                });
                $('.exp').click(function() {
                    $.scrollTo($('#experience'), {
                        offset: 0,
                        duration: 800
                    });
                });
                $('.edu').click(function() {
                    $.scrollTo($('#education'), {
                        offset: 0,
                        duration: 800
                    });
                });
                $('.skl').click(function() {
                    $.scrollTo($('#skills'), {
                        offset: 0,
                        duration: 800
                    });
                });
                $('.int').click(function() {
                    $.scrollTo($('#interests'), {
                        offset: 0,
                        duration: 800
                    });
                });
                $('.conct').click(function() {
                    $.scrollTo($('#contact'), {
                        offset: 0,
                        duration: 800
                    });
                });
                $('.arrow-to-top').click(function() {
                    $.scrollTo($('body'), 1000);
                });
            });
            $(window).scroll(function() {
                if ($(this).scrollTop() > 400) $('.arrow-to-top').fadeIn();
                else $('.arrow-to-top').fadeOut();
            });

        </script>
</head>

<body id="body" onload="startTime();">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPH93SH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <span name="mail-info"></span>
    <span class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </span>
    <a href="#" class="arrow-to-top" data-title="Przewiń do góry!"></a>
    <div class="arrow"><a class="ab" href="#"></a></div>
    <div class="top">
        <div class="menu-container">
            <div class="menu-category">
                <a class="link ab" href="#">O mnie</a>
            </div>
            <div class="menu-category">
                <a href="#" class="drop-down-menu">Na skróty</a>
                <div class="dropped-menu">
                    <ul>
                        <li><a class="category link exp" href="#">Doświadczenie</a></li>
                        <li><a class="category link edu" href="#">Wykształcenie</a></li>
                        <li><a class="category link skl" href="#">Umiejętności</a></li>
                        <li><a class="category link int" href="#">Zainteresowania</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-category">
                <a class="link conct" href="#">Kontakt</a>
            </div>
            <div class="menu-category">
                <a class="link" href="files/Piotr_Kawula_curriculum_vitae.pdf" download>Pobierz PDF</a>
            </div>
        </div>
        <div class="page-title">
            <h1>Curriculum Vitae</h1>
            <h2>Piotr Kawula</h2>
            <div class="page-description">
                <p class="text">Witaj na moim wirtualnym CV!</p>
                <p class="text">Znajdziesz tu wszystkie ważne informacje na mój temat. Jeśli chcesz możesz również <a class="link" href="files/Piotr_Kawula_curriculum_vitae.pdf" download>pobrać wersję PDF</a> mojego CV.</p>
                <p class="text phone-off">To jak? Zaczynamy? Kliknij strzałkę po prawej stronie i.. poznaj mnie!</p>
            </div>
        </div>
    </div>

    <div class="wrapper">

        <div id="about" class="about">
            <div class="modal"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2499.341778086848!2d18.100919415471985!3d51.212779279587856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471076b1ae460da9%3A0x8bcc738b7b3f841c!2sAkacjowa+11B%2C+63-645+%C5%81%C4%99ka+Opatowska!5e0!3m2!1spl!2spl!4v1518808725707" frameborder="0" style="border:0" allowfullscreen></iframe><span class="close-map" data-title="Zamknij"></span></div>
            <div class="arrow"><a class="exp" href="#"></a></div>
            <h1 class="category-title">O mnie</h1>
            <h3 class="category-subtitle">Kim jestem?</h3>
            <p class="description">Nazywam się Piotr Kawula, mam <span class="text-inside age-box" data-title="kliknij aby zobaczyć wiek co do sekundy"></span>. Pochodzę z niewielkiej miejscowości z południa wielkopolski - <span class="text-inside show-map" data-title="kliknij aby zobaczyć na mapie">Łęki Opatowskiej</span> - i obecnie tam mieszkam. Na codzień pracuję <span class="text-inside" data-title="kliknij aby zobaczyć gdzie obecnie pracuję"><a class="exp link" href="#">tutaj</a></span>, a w wolnym czasie staram się doskonalić swoje umiejętności i cały czas się rozwijać. Lubię uprawiać sport, czytać książki, oglądać filmy i czytać książki. Nie wspomnę o muzyce, bo z nią mam do czynienia praktycznie cały dzień; nie wyobrażam sobie dnia w pracy bez muzyki w słuchawkach lub słuchania wszelkiego podcastów, dzięki którym mogę rozwijać swoje umiejętności techniczne czy też miękkie. Jestem również bardzo nastawiony na rozwój osobisty - ukształtowanie swojego wnętrza i wartości.
                <br>Jeśli masz więcej pytań, co do mojej osoby zapraszam do <span class="text-inside" data-title="kliknij aby się ze mną skontaktować"><a class="conct link" href="#">kontaktu</a></span>.</p>
            <span class="author-img-container">
                <img class="author" src="img/author.jpg">
                <span class="closePic"></span>
            </span>
        </div>

        <div id="experience" class="experience">
            <div class="arrow"><a class="edu" href="#"></a></div>
            <h1 class="category-title">Doświadczenie</h1>
            <p class="description mobile-off">Najedź myszką na datę, aby zobaczyć szczegóły.</p>
            <div class="timeline">
                <div class="date sec-1">
                    <input class="checkbox desktop-off" id="show-description-1" type="checkbox">
                    <label for="show-description-1">
                        <span class="job-title">2008r. - 2016r.<br>Rolnictwo</span>
                        <div class="desc-box" data-title="2008 - 2016 Rolnictwo">
                            <p class="description">Praca na maszynach (traktor z narzędziami), karmienie zwierząt, uprawianie ziemi, umiejętność posługiwania się wieloma urządzeniami.</p>
                        </div>
                    </label>
                </div>
                <div class="date sec-2">
                    <input class="checkbox desktop-off" id="show-description-2" type="checkbox">
                    <label for="show-description-2">
                        <span class="job-title">04.2015r. - obecnie<br>Osp Łęka Opatowska</span>
                        <div class="desc-box" data-title="04.2015 - obecnie Osp Łęka Opatowska">
                            <p class="description">Liczne akcje (pożary, wypadki)</p>
                        </div>
                    </label>
                </div>
                <div class="date sec-3">
                    <input class="checkbox desktop-off" id="show-description-3" type="checkbox">
                    <label for="show-description-3">
                        <span class="job-title">2016r.<br>PPHU PSTRYK</span>
                        <div class="desc-box" data-title="2016r. PPHU PSTRYK">
                            <p class="description">Dorywczo w firmie PPHU PSTRYK, Opole</p>
                            <p class="description">Pomoc przy nagrywaniu reklam czy filmów. Reklama radia opole lub film szkoleniowy dla zewnętrznej firmy.</p>
                        </div>
                    </label>
                </div>
                <div class="date sec-4">
                    <input class="checkbox desktop-off" id="show-description-4" type="checkbox">
                    <label for="show-description-4">
                        <span class="job-title">03.2016r. - 06. 2016r.<br>Vaco</span>
                        <div class="desc-box" data-title="03.2016 - 06. 2016 Vaco">
                            <p class="description">Umowa zlecenie, Vaco, Wrocław</p>
                            <p class="description">Praca w magazynie oraz przy produkcji środków na owady (przyklejanie etykiet, składowanie palet)</p>
                        </div>
                    </label>
                </div>
                <div class="date sec-5">
                    <input class="checkbox desktop-off" id="show-description-5" type="checkbox">
                    <label for="show-description-5">
                        <span class="job-title">11.2016r. - 05.2017r.<br>Calitan FF</span>
                        <div class="desc-box" data-title="11.2016 - 05.2017 Calitan FF">
                            <p class="description">Umowa o pracę, Calitan Factory Furniture, Łęka Opatowska</p>
                            <p class="description">Obsługa maszyn (frezarka, wiertarka), komputer sterujący</p>
                        </div>
                    </label>
                </div>
                <div class="date sec-6">
                    <input class="checkbox desktop-off" id="show-description-6" type="checkbox">
                    <label for="show-description-6">
                        <span class="job-title">05.2017r. - 08.2018r.<br>Mirjan24</span>
                        <div class="desc-box" data-title="05.2017 - 08.2018 Mirjan24">
                            <p class="description">Umowa o pracę, MIRJAN24 Sp. z o.o. Sp. j., Łęka Mroczeńska</p>
                            <p class="description">Praca na stanowisku: Webmaster & SEO Specialist – obsługa systemów sprzedaży, sklepów internetowych oraz podstawowa obróbka grafiki.</p>
                        </div>
                    </label>
                </div>
                <div class="date sec-7">
                    <input class="checkbox desktop-off" id="show-description-7" type="checkbox">
                    <label for="show-description-7">
                        <span class="job-title">09.2018r. - obecnie<br>Idźczak-Meble</span>
                        <div class="desc-box" data-title="09.2018 - obecnie Idźczak-Meble">
                            <p class="description">Umowa o pracę, Idźczak-Meble Sp. z. o.o., Łęka Opatowska</p>
                            <p class="description">Praca na stanowisku: Specjalista ds. Sprzedaży Internetowej – obsługa systemów sprzedaży, sklepów internetowych oraz obróbka grafiki.</p>
                        </div>
                    </label>
                </div>
            </div>
            <span class="experience-info desktop-off">Kliknij w wybrany okres, aby zobaczyć szczegóły.</span>
        </div>

        <div id="education" class="education">
            <div class="arrow"><a class="skl" href="#"></a></div>
            <h1 class="category-title">Edukacja</h1>
            <div class="book">
                <div class="front-page">
                    <span class="front-page-content">
                        <h1 class="book-title">Edukacja</h1>
                        <p>Najedź myszką na książkę, aby zobaczyć szczegóły.</p>
                    </span>
                    <span class="front-page-back">
                        <span class="container">
                            <h1>Piotr Kawula</h1>
                            <p><b>Data urodzenia:</b> 2 kwietnia 1996 roku.</p>
                            <p><b>Miejsce zamieszkania:</b> 63-645 Łęka Opatowska, ul. Akacjowa 11a.</p>
                            <p><b>Nr telefonu:</b> <a class="link" href="tel:+48511419381"> +48 511 419 381</a></p>
                            <p><b>Adres e-mail:</b> <a class="link" href="mailto:kontakt@piotrkawula.pl"> kontakt@piotrkawula.pl</a></p>
                        </span>
                    </span>
                </div>
                <div class="page-in">
                    <div class="education-details">
                        <span class="box">
                            <p class="education-date">09.2012-05.2015</p>
                            <p class="edu-desc">LO im. Mjra H. Sienkiewicza w Kępnie</p>
                            <p class="edu-desc">Klasa matematyczno-fizyczna</p>
                        </span>
                        <span class="box">
                            <p class="education-date">10.2015-02.2016</p>
                            <p class="edu-desc">Politechnika Wrocławska</p>
                            <p class="edu-desc">Kierunek automatyka i robotyka - Wydział Elektryczny</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div id="skills" class="skill">
            <div class="arrow"><a class="int" href="#"></a></div>
            <h1 class="category-title">Umiejętności</h1>
            <div class="skill-details-box">
                <div id="descripion-container" class="description-container box-0">
                    <span class="close"></span>
                    <p class="desc-title">pakiet programu Office</p>
                    <p class="description">Word, Excel, PowerPoint
                    </p>
                    <span class="show-more">Zobacz więcej</span>
                </div>
                <div id="descripion-container" class="description-container box-1">
                    <span class="close"></span>
                    <p class="desc-title">bardzo dobra umiejętność obsługi komputera</p>
                    <p class="description">Umięjętność radzenia sobie z problemami hardware'owymi jak i software'owymi.
                    </p>
                    <span class="show-more">Zobacz więcej</span>
                </div>
                <div id="descripion-container" class="description-container box-2">
                    <span class="close"></span>
                    <p class="desc-title">podstawy c++</p>
                    <p class="description">Znajomość podstawowych funkcji.
                    </p>
                    <span class="show-more">Zobacz więcej</span>
                </div>
                <div id="descripion-container" class="description-container box-3">
                    <span class="close"></span>
                    <p class="desc-title">dobra znajomość front-end: html, css, javascript, PrestaShop, Wordpress</p>
                    <p class="description">Znajomość HTMl oraz CSS - bardzo dobra. JavaScript - podstawowe funkcje oraz wykorzystanie niezbędne do dotychczasowych projektów (eventlisteners, obiekt Date(), obsługa elementów html oraz ich dynamiczne tworzenie); asynchroniczny JavaScript przy pomocy AJAX; umiejętność wykorzystania biblioteki jQuery. PrestaShop - bardzo dobra znajomość zaplecza. WordPress - umięjętność instalacji oraz poprawnego skonfigurowania.
                    </p>
                    <span class="show-more">Zobacz więcej</span>
                </div>
                <div id="descripion-container" class="description-container box-4">
                    <span class="close"></span>
                    <p class="desc-title">podstawowa znajomość back-end (php)</p>
                    <p class="description">Stworzenie skryptu obsługującego wysyłkę wiadomości (na tej stronie w stopce), skryptu walidacji logowania oraz rejestracji.
                    </p>
                    <span class="show-more">Zobacz więcej</span>
                </div>
                <div id="descripion-container" class="description-container box-5">
                    <span class="close"></span>
                    <p class="desc-title">bazy danych (MySQL)</p>
                    <p class="description">Utworzenie bazy danych oraz podstawowe zapytania.
                    </p>
                    <span class="show-more">Zobacz więcej</span>
                </div>
            </div>
        </div>

        <div id="interests" class="interests">
            <h1 class="category-title">Zainteresowania</h1>
            <h3 class="category-subtitle phone-off">Najedź na kropkę, aby zobaczyć szczegóły:</h3>
            <h3 class="category-subtitle desktop-off">Kliknij w kropkę, aby zobaczyć szczegóły</h3>
            <div class="points point-1">
                <div class="pointsIn">
                    <h4>Jeździć rowerem</h4>
                    <p>Uwielbiam jeździć rowerem - często jeżdżę na krótkie 10-15 kilometrowe przejażdżki, a rzadziej zdarza mi się spędzić za kierownicą tego jednośladu nawet 50km.</p>
                </div>
            </div>
            <div class="points point-2">
                <div class="pointsIn">
                    <h4>Grać w piłkę</h4>
                    <p>Najwięcej czasu poświęcam piłce nożnej, kiedyś grałem w okolicznej drużynie, lecz musiałem zrezygnować ze względu na problemy zdrowotne. Zdaża mi się również pograć w koszykówkę.</p>
                </div>
            </div>
            <div class="points point-3">
                <div class="pointsIn">
                    <h4>Słuchać muzyki</h4>
                    <p>Zazwyczaj słucham gatunków: rock (happysad, arctic monkeys, the neighbourhood), pop (radio), electro / techno / house (muzyka klubowa).</p>
                </div>
            </div>
            <div class="points point-4">
                <div class="pointsIn">
                    <h4>Oglądać filmy</h4>
                    <p>Najczęściej oglądanym przeze mnie gatunkiem filmów są dramaty, thrillery i horrory. Lubię oglądać filmy dające do myślenia lub swojej interpretacji, aczkolwiek zdarzy mi się "odmóżdżyć" przy jakiejś komedii.</p>
                </div>
            </div>
            <div class="points point-5">
                <div class="pointsIn">
                    <h4>Spędzać czas z dziewczyną i znajomymi</h4>
                    <p>Największą część mojego wolnego czasu poświęcam na spotkania z dziewczyną, a raz na jakiś czas zdarza mi się spotkać ze znajomymi.</p>
                </div>
            </div>
            <div class="points point-6">
                <div class="pointsIn">
                    <h4>PROGRAMOWAĆ</h4>
                    <p>Jedno z najważniejszych dla mnie zainteresowań, hobby czy zajawek. Uwielbiam siedzieć i "klepać" w klawiaturę pisząc jakiś kod. Najlepiej się bawię jeśli podczas pisania mogę się czegoś nowego nauczyć i potrafię pokonać samego siebie.</p>
                </div>
            </div>
            <div class="points point-7">
                <div class="pointsIn">
                    <h4>Rozmawiać</h4>
                    <p>Na pierwszy rzut oka może wydawać się, że jestem osobą bardzo nieśmiałą. Jeśli bardziej poznam swoich rozmówców potrafię rozmawiać godzinami. Lubię poznawać punkt widzenia innych ludzi - to pewnie ze względu na zainteresowanie psychologią.</p>
                </div>
            </div>
            <div class="points point-8">
                <div class="pointsIn">
                    <h4>Poznawać</h4>
                    <p>Poznawać nie tyle ludzi co nowe rzeczy - nowe technologie, ciekawostki - wszystko co dotyczy codziennego życia.</p>
                </div>
            </div>
            <div class="points point-9">
                <div class="pointsIn">
                    <h4>Uczyć się</h4>
                    <p>Do ukończenia liceum miałem dużą niechęć do nauki, lecz nie uważam tych lat za stracone. Teraz nauka sprawia mi o wiele większą przyjemność i dzięki temu uczę się dużo szybciej i dużo lepiej.</p>
                </div>
            </div>
            <div class="points point-10">
                <div class="pointsIn">
                    <h4>Rozwijać</h4>
                    <p>Rozwój jest właśnie tym najlepszym słowem, które zawiera w sobie poznawanie oraz uczenie się. Uwielbiam poznawać nowe rzeczy, z których mogę coś wynieść, skorzystać lub się czegoś nauczyć. Uważam, że jest to bardzo ważna kwestia w życiu każdego człowieka, bo człowiek nigdy nie będzie idealny i powinien skorzystać z danej mu możliwości rozwoju.</p>
                </div>
            </div>
            <div class="points point-11">
                <div class="pointsIn">
                    <h4>Czytać książki</h4>
                    <p>Istnieje bardzo dużo książek, które chciałbym przeczytać. Niestety czytanie jest bardzo czasochłonnym procesem, który bardzo mi przeszkada. Właśnie dlatego zazwyczaj czytam 3 lub 4 książki na raz co uczy mnie również pewnej podzielności uwagi - pamięci - gdyż wystarczą mi dosłownie 2 zdania, aby przypomnieć sobie o czym już przeczytałem.</p>
                </div>
            </div>
            <div class="points point-12">
                <div class="pointsIn">
                    <h4>Prowadzić samochód</h4>
                    <p>Jazda samochodem sprawia mi bardzo dużą frajdę - może dlatego, że bardzo szybko nauczyłem się nim jeździć (miałem wtedy 14 lat)</p>
                </div>
            </div>
        </div>
    </div>

    <div class="rights">
        <h2 class="rights-title">Zgoda na wykorzystywanie danych osobowych</h2>
        <p class="rights-text">Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych do realizacji procesu rekrutacji (zgodnie z Ustawą z dnia 29.08.1997 roku o Ochronie Danych Osobowych; tekst jednolity: Dz. U. z 2002r. Nr 101, poz. 926 ze zm.)</p>
    </div>

    <div class="footer">
        <h2 class="footer-header">Ważne informacje:</h2>
        <div class="ft-box">
            <div class="footer-wrapper">
                <ul class="list"><span class="list-title">Adres:</span>
                    <li class="list-item">Łęka Opatowska</li>
                    <li class="list-item">ul. Akacjowa 11a</li>
                    <li class="list-item">63-645 Łęka Opatowska</li>
                    <li class="list-item">powiat Kępiński</li>
                    <li class="list-item">woj. wielkopolskie</li>
                    <li class="list-item">Polska</li>
                </ul>
            </div>
            <div class="footer-wrapper">
                <ul class="list"><span class="list-title">Przydatne linki:</span>
                    <li class="list-item"><a class="link" href="files/Piotr_Kawula_curriculum_vitae.pdf" download>Pobierz PDF</a></li>
                </ul>
            </div>
            <div id="contact" class="footer-wrapper">
                <ul class="list"><span class="list-title">Kontakt:</span>
                    <li class="list-item"><a class="link" href="tel:+48511419381">tel. 511 419 381</a></li>
                    <li class="list-item"><a class="link" href="mailto:pkawula96@gmail.com">pkawula96@gmail.com</a></li>
                    <li class="list-item"><a class="link" href="mailto:kontakt@piotrkawula.pl">kontakt@piotrkawula.pl</a></li>
                </ul>
            </div>
        </div>
        <div class="question-wrapper">
            <form name="form" action="" method="post">
                <h3>Masz pytanie? Zadaj je śmiało tutaj:</h3>
                <textarea class="msg" name="msg-text" placeholder="Wpisz swoje pytanie tutaj." maxlength="210"></textarea>
                <?php
					if (isset($messageEmpty)) {
						echo '<div class="error-msg">'.$messageEmpty.'</div>';
					}
				?>
                <button class="q-btn">Wyślij</button>
            </form>
            <div class="media-container">
                <h3>Możesz mnie również znaleźć w mediach społecznościowych</h3>
                <div class="inner">
                    <a href="https://www.facebook.com/ojciecpio96"><img src="img/facebook.png">
                        <div>Facebook</div>
                    </a>
                    <a href="https://www.instagram.com/ojciecpio_xd/"><img src="img/instagram.png">
                        <div>Instagram</div>
                    </a>
                    <a href="https://twitter.com/piotr_kawula"><img src="img/twitter.png">
                        <div>Twitter</div>
                    </a>
                </div>
            </div>
        </div>
        <h3 class="footer-header-end">All Rights Reserved &copy 2018 Piotr Kawula - Wszelkie prawa zastrzeżone</h3>
    </div>

    <script type="text/javascript" src="js/main.js"></script>

    <!-- Piwik -->
    <script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//piwik.linuxpl.com/";
            _paq.push(['setTrackerUrl', u + 'piwik.php']);
            _paq.push(['setSiteId', 11265]);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'piwik.js';
            s.parentNode.insertBefore(g, s);
        })();

    </script>
    <noscript>
        <p><img src="//piwik.linuxpl.com/piwik.php?idsite=11265" style="border:0;" alt="" /></p>
    </noscript>
    <!-- End Piwik Code -->

</body>

</html>
