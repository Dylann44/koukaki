document.addEventListener('DOMContentLoaded', function () {
    // Fonction pour gérer l'effet de fondu
    function fadeInOnScroll(elements, offset) {
        for (let i = 0; i < elements.length; i++) {
            let elem = elements[i];
            let distanceFromTop = elem.getBoundingClientRect().top - window.innerHeight + offset;
            if (distanceFromTop < 0) {
                elem.classList.add('in-view');
            } else {
                elem.classList.remove('in-view');
            }
        }
    }

    let fadeInSections = document.querySelectorAll('.fade-in-section');
    window.addEventListener('scroll', () => fadeInOnScroll(fadeInSections, 100));

    let fadeInTitles = document.querySelectorAll('.fade-in-title');
    window.addEventListener('scroll', () => fadeInOnScroll(fadeInTitles, -100));

    fadeInOnScroll(fadeInSections, 100);
    fadeInOnScroll(fadeInTitles, -100);

    var mySwiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        loop: true,
        autoplay: {
            delay: 2500,
        },
        mousewheel: true,
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const littleCloud = document.querySelector('.little-cloud');
    const bigCloud = document.querySelector('.big-cloud');
    const articlePlace = document.querySelector('#place');

    if (!littleCloud || !bigCloud) {
        console.log("Éléments de nuage manquants.");
        return;
    }

    const littleCloudInitialPos = 1200;
    const bigCloudInitialPos = 1200;

    function moveCloudToLeft(cloud, scrollY, maxMove, ratio, initialPos) {
        const moveAmount = Math.max(-maxMove, -scrollY * ratio) + initialPos - 400;
        cloud.style.transform = `translateX(${moveAmount}px)`;
    }

    function handleScroll() {
        const scrollY = window.scrollY;
        requestAnimationFrame(() => {
            moveCloudToLeft(littleCloud, scrollY, 900, 0.2, littleCloudInitialPos);
            moveCloudToLeft(bigCloud, scrollY, 900, 0.3, bigCloudInitialPos);
        });
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && entry.intersectionRatio >= 0.8) {
                window.addEventListener('scroll', handleScroll);
                obs.disconnect();
            }
        });
    }, { threshold: [0.8] });

    observer.observe(articlePlace);
});



document.addEventListener('DOMContentLoaded', function () {
    // Menu
    function closeMenu() {
        const menuToggle = document.querySelector('.menu-toggle');
        if (menuToggle.getAttribute('aria-expanded') === 'true') {
            menuToggle.click();
        }
    }

    const menuItems = document.querySelectorAll('#menu ul li a');
    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener('click', function () {
            closeMenu();
        });
    });
});



// animation titre
function animateOnScroll(selector, animationClass) {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const titre = entry.target.querySelector('span');
            if (entry.isIntersecting) {
                titre.classList.add(animationClass);
            } else {
                titre.classList.remove(animationClass);
            }
        });
    });

    const elements = document.querySelectorAll(selector);
    elements.forEach(element => {
        observer.observe(element);
    });
}
animateOnScroll('.story, #studio', 'animation-title');
animateOnScroll('#place, .main-character', 'animation-title');
animateOnScroll('#studio', 'animation-title2');

