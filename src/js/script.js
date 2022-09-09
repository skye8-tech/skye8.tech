'use strict'

const $openNav = document.querySelector('[data-bs-toggle="offcanvas"]');
const $closeNav = document.querySelector('[data-bs-dismiss="offcanvas"]');
const $navItems = document.querySelectorAll('.nav-item');
const $socialIcons = document.querySelector('.social-media');
const $animeTexts = document.querySelectorAll('.anime-text')





$openNav.addEventListener('click', e => {

    $navItems.forEach(($navItem, ind) => {
        setTimeout(() => {
            $navItem.classList.add('xyz-in')
            $socialIcons.classList.add('xyz-in')
            $navItem.classList.remove('invisible')
            $socialIcons.classList.remove('invisible');
        }, 300)
    });
    
    setTimeout(() => {
      /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
      particlesJS.load(
        "niggaShake",
        "src/extras/particles-config.json",
        function () {
          console.log("callback - particles.js config loaded");
        }
      );
    }, 300*6+30);
});

$closeNav.addEventListener('click', e => {
    console.log(e.target)
    $navItems.forEach(($navItem, ind) => {
        $socialIcons.classList.remove('xyz-in');
        $navItem.classList.remove('xyz-in')
        $socialIcons.classList.add('invisible');
        $navItem.classList.add('invisible')
    });
})


$animeTexts.forEach($animeText => {
    $animeText.addEventListener('mouseover', e => {document.querySelector('.hero-left > img').classList.add('move')})
    $animeText.addEventListener('mouseout', e =>  {document.querySelector('.hero-left > img').classList.remove('move')})
})