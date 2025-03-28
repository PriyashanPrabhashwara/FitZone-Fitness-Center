let menu = document.querySelector('#menu-icon');
let navigationbar = document.querySelector('.navigationbar');

menu.onclick = () => {

    menu.classList.toggle('bx-x');
    navigationbar.classList.toggle('active');
}

window.onscroll = () => {

    menu.classList.remove('bx-x');
    navigationbar.classList.remove('active');
}

const typed = new Typed('.multiple-text', {
    strings: ['FitZone Fitness Center', 'Kurunegala','Personalized Training Sessions', 'Group Classes', 'Nutrition Counseling'],
    typeSpeed: 60,
    backSpeed:60,
    backDelay:1000,
    loop:true,                                               

  });


