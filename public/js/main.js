const header = document.querySelector('header');
const main = document.getElementById('main-page');
const logo = document.getElementById('logo');
const services = document.getElementById('header-services');
const production = document.getElementById('header-production');
const mask = document.getElementById('mask');
const search = document.getElementById('search-panel');
const menuMobile = document.getElementById('header-menu-mobile');
const headerHeight = header.offsetHeight;
const mainHeight = main.offsetHeight;
let lastScrollTop = 0;

window.addEventListener('scroll', () => {
    let scrollDistance = window.scrollY;
    if(scrollDistance > lastScrollTop){
        header.classList.remove('header-top');
        logo.style.height = "50%";
        search.classList.remove('search-panel-open');
    }else{
        header.classList.add('header-top');

    }
    if (scrollDistance === 0) {
        logo.style.height = "67%";
        header.classList.remove('header-top');

    }
    lastScrollTop = scrollDistance;
})


function serachPanel() {
    search.classList.add('search-panel-open');
}
function closeSerachPanel(){
    search.classList.remove('search-panel-open');
}

function openMobile(params) {
    menuMobile.classList.add('activateMobile');
}

function closeMobile(){
    menuMobile.classList.remove('activateMobile');
}

// services.onmouseover = function () {
//     mask.style.visibility = "visible"
// }
// services.onmouseout = function () {
//     mask.style.visibility = "hidden"
// }
// production.onmouseover = function () {
//     mask.css({'display': 'block'});
// }



new Swiper('.slider-img2',{
    navigation:{
        nextEl: '.arrow-right-img',
        prevEl:'.arrow-left-img'
    },
    pagination:{
        el: '.slider-count',
        type: 'fraction',
        renderFraction: function (currentClass, totalClass) {
            return '<span class="' + currentClass + '"></span>' + 
            '&nbsp;из&nbsp; ' + 
            '<span class="' + totalClass + '"></span>';
        }
    },
    simulateTouch: false,
    loop: true,
    slidesPerView: 1,
    // watchOverfLow: 5,

});


new Swiper('.swiper-container',{
    navigation:{
        nextEl: '.arrow-right',
        prevEl:'.arrow-left'
    },
    // loop: true,
    breakpoints:{
        1281:{
            slidesPerView: 5.5
        }
            ,
        567:{
            slidesPerView: 3.5,
        },
        1:{
            slidesPerView: 1.5,
        }
    },
    
    // watchOverfLow: 5,
    grabCursor: true,
});



// $(".modal-trigger1").mouseenter(function(e){
//     e.preventDefault();
//     dataModal = $(this).attr("data-modal");
//     $("#" + dataModal).css({"display":"block"});
//   });
  
//   $(".modal").mouseout(function(){
//     $(".modal").css({"display":"none"});
  
//   });

//   $(".modal-trigger2").mouseenter(function(e){
//     e.preventDefault();
//     dataModal = $(this).attr("data-modal");
//     $("#" + dataModal).css({"display":"block"});
//   });
  
//   $(".modal").mouseout(function(){
//     $(".modal").css({"display":"none"});
  
//   });


