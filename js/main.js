$(document).ready(function () {
    $(function () {
        $('.author-img-container').on('click', function () {
            $(this).toggleClass('opened');
        });
        $('.closePic').on('click', function () {
            $('.author-img-container opened').removeClass('opened');
        });
    });

    function cookieInfo() {
        const cookieContainer = document.createElement('div'),
            cookieText = document.createElement('p'),
            closeCookieBtn = document.createElement('button'),
            linkToCookie = document.createElement('a');

        cookieText.classList.add('cookies-text');
        cookieContainer.classList.add('cookies-info');
        closeCookieBtn.classList.add('closeCookie');
        linkToCookie.classList.add('link');

        linkToCookie.setAttribute('href', "http://jakwylaczyccookie.pl/jak-wylaczyc-pliki-cookies/");
        linkToCookie.setAttribute('target', "_blank");

        linkToCookie.innerHTML = "Zobacz jak możesz wyłączyć ciasteczka.";

        let text = "Niniejsza witryna Internetowa używa plików cookies (tzw. ciasteczka) w celach statystycznych, reklamowych oraz funkcjonalnych. Dzięki nim możemy indywidualnie dostosować stronę do twoich potrzeb. Każdy może zaakceptować pliki cookies albo ma możliwość wyłączenia ich w przeglądarce, dzięki czemu nie będą zbierane żadne informacje. Klikając przycisk akceptujesz wykorzystywanie plików cookies. ";

        cookieText.innerHTML = text;

        cookieText.appendChild(linkToCookie);

        closeCookieBtn.innerHTML = "&times;";

        cookieContainer.appendChild(cookieText);
        cookieContainer.appendChild(closeCookieBtn);

        document.querySelector('body').appendChild(cookieContainer);
    }

    if (document.cookie.indexOf("cookiesAccepted=") >= 0) {
        //
    } else {
        cookieInfo();
        closeCookie();
    }

    function closeCookie() {
        var closeCookiesBtn = document.querySelector('.closeCookie');
        closeCookiesBtn.addEventListener('click', function (e) {
            e.preventDefault();
            let cookiesContainer = document.querySelector('.cookies-info');
            cookiesContainer.parentNode.removeChild(cookiesContainer);

            setCookie('cookiesAccepted', 'true', 1000);
        });
    }

    function setCookie(name, val, dayss, path, domain, secure) {
        if (navigator.cookieEnabled) {
            const cookieName = encodeURIComponent(name);
            const cookieVal = encodeURIComponent(val);
            let cookieTekst = cookieName + "=" + cookieVal;

            if (typeof dayss === "number") {
                const data = new Date();
                const dataTime = data.getTime();
                const cookieExp = dataTime + (dayss * 86400000);
                data.setTime(cookieExp);
                cookieTekst += "; expires=" + data.toGMTString();
            }

            if (path) {
                cookieTekst += "; path" + path;
            }

            if (domain) {
                cookieTekst += "; domain" + domain;
            }

            if (secure) {
                cookieTekst += "; secure";
            }

            document.cookie = cookieTekst;
        }
    }
});

var ageBox = document.querySelector('.age-box'),
    span = document.createElement('span');

var minAge = function () {
    span.classList.add('age');
    ageBox.appendChild(span);
}
var fullAge = function () {

    ageBox.removeAttribute('data-title');

    document.querySelector('.age').classList.remove('age');
    ageBox.removeChild(span);

    span.classList.add('fullAge');
    ageBox.appendChild(span);
}

// minAge();

function startTime() {
    var d = new Date();
    var x = new Date(828422100000);
    var rok = d.getFullYear() - x.getFullYear();
    var miesiac = d.getMonth() - x.getMonth();
    var dzien = d.getDate() - x.getDate();
    var godzina = d.getHours() - x.getHours();
    var minuta = d.getMinutes() - x.getMinutes();
    var sekunda = d.getSeconds() - x.getSeconds();

    if (sekunda < 0) {
        sekunda = 60 + sekunda;
        minuta = minuta - 1;
    }
    if (minuta < 0) {
        minuta = 60 + minuta;
        godzina = godzina - 1;
    }
    if (godzina < 0) {
        godzina = 24 + godzina;
        dzien = dzien - 1;
    }

    if (dzien < 0) {
        if (miesiac == -3 || miesiac == -2 || miesiac == 0 || miesiac == 2 || miesiac == 4 || miesiac == 5 || miesiac == 7) {
            dzien = 31 + dzien;
        }
        if (miesiac === -1) {
            if (rok % 4 === 0) {
                dzien = 29 + dzien;
            } else {
                dzien = 28 + dzien;
            }
        }
        if (miesiac === 1 || miesiac === 3 || miesiac === 6 || miesiac === 8) {
            dzien = 30 + dzien;
        }
        miesiac = miesiac - 1;
    }
    if (miesiac < 0) {
        miesiac = 12 + miesiac;
        rok = rok - 1;
    }
    if (sekunda < 10) {
        sekunda = "0" + sekunda;
    }
    if (minuta < 10) {
        minuta = "0" + minuta;
    }
    if (godzina < 10) {
        godzina = "0" + godzina;
    }

    var mies;
    var days;
    if (miesiac === 0) {
        mies = " miesięcy";
    }
    if (miesiac === 1) {
        mies = " miesiąc";
    }
    if (miesiac === 2) {
        mies = " miesiące";
    }
    if (miesiac === 3) {
        mies = " miesiące";
    }
    if (miesiac === 4) {
        mies = " miesiące";
    }
    if (miesiac === 5) {
        mies = " miesięcy";
    }
    if (miesiac === 6) {
        mies = " miesięcy";
    }
    if (miesiac === 7) {
        mies = " miesięcy";
    }
    if (miesiac === 8) {
        mies = " miesięcy";
    }
    if (miesiac === 9) {
        mies = " miesięcy";
    }
    if (miesiac === 10) {
        mies = " miesięcy";
    }
    if (miesiac === 11) {
        mies = " miesięcy";
    }
    if (miesiac === 12) {
        mies = " miesięcy";
    }
    if (dzien === 1) {
        days = " dzień";
    }
    if (dzien != 1) {
        days = " dni";
    }

    var age = rok + " lat";
    let fAge = age + " " + miesiac + mies + " " + dzien + days + " oraz " + godzina + "h " + minuta + "m " + sekunda + "s";

    minAge();

    var changeAge = document.querySelector('.age');
    var fullAgeContainer = document.querySelector('.fullAge');

    // changeAge.innerHTML = age;

    // changeAge.addEventListener("click", function () {
    //     if (ageBox.hasChildNodes()) {

    //         fullAge();
    //         document.querySelector('.fullAge').innerHTML = fAge;

    //     }
    // }, false);
    changeAge.innerHTML = age;
    changeAge.addEventListener('click', () => {
        this.innerHTML = fAge;
    });

    var t = setTimeout("startTime()", 1000);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }; // add zero in front of numbers < 10
    return i;
}

var openModal = document.querySelector('.show-map');
openModal.addEventListener("click", function () {
    document.body.classList.add('modal-opened');
}, false);

var closeModal = document.querySelector('.close-map');
closeModal.addEventListener("click", function () {
    document.body.classList.remove('modal-opened');
}, false);

var showHideMenu = document.querySelector('.hamburger'),
    hideMenuByOption = document.querySelector('.menu-container');
showHideMenu.addEventListener("click", function () {
    document.querySelector(".menu-container").classList.toggle('active');
    showHideMenu.classList.toggle('focus');
    document.body.classList.toggle('do-not-scroll');
}, false);
hideMenuByOption.addEventListener("click", function () {
    document.querySelector(".menu-container").classList.remove('active');
    showHideMenu.classList.remove('focus');
    document.body.classList.remove('do-not-scroll');
}, false);

var box1 = document.querySelector('.box-0'),
    box2 = document.querySelector('.box-1'),
    box3 = document.querySelector('.box-2'),
    box4 = document.querySelector('.box-3'),
    box5 = document.querySelector('.box-4'),
    box6 = document.querySelector('.box-5');

box1.addEventListener("click", function () {
    document.querySelector('.box-0').classList.toggle('opened');
}, false);
box2.addEventListener("click", function () {
    document.querySelector('.box-1').classList.toggle('opened');
}, false);
box3.addEventListener("click", function () {
    document.querySelector('.box-2').classList.toggle('opened');
}, false);
box4.addEventListener("click", function () {
    document.querySelector('.box-3').classList.toggle('opened');
}, false);
box5.addEventListener("click", function () {
    document.querySelector('.box-4').classList.toggle('opened');
}, false);
box6.addEventListener("click", function () {
    document.querySelector('.box-5').classList.toggle('opened');
}, false);

var openThis,
    closeThis,
    openThisToo,
    closeThisToo;

openThis = function () {
    this.classList.add('active');
}
closeThis = function () {
    this.classList.remove('active');
}
openThisToo = function () {
    this.parentNode.classList.add('active');
}
closeThisToo = function () {
    this.parentNode.classList.remove('active');
}

$('.book').hover(openThis, closeThis);
$('.front-page').hover(openThisToo);

$('.q-btn').prop('disabled', true);

document.querySelector('.msg').addEventListener("keyup", function () {
    if (this.value.length <= 0) {
        $('.q-btn').prop('disabled', true);
    } else {
        $('.q-btn').prop('disabled', false);
    }
})
