// Scroll.js
$(window).on('scroll', function(){
  if($(window).scrollTop()){
    $('#navbar-background').addClass('navbar-scroll');
  } else {
    $('#navbar-background').removeClass('navbar-scroll');
  }
  if($(window).scrollTop()){
    $('#scrollToTopButton').addClass('img-btn-fixed-show');
  } else {
    $('#scrollToTopButton').removeClass('img-btn-fixed-show');
  }
})
$(window).ready(function() {
  if($(window).scrollTop()){
    $('#navbar-background').addClass('navbar-scroll');
  } else {
    $('#navbar-background').removeClass('navbar-scroll');
  }
  if($(window).scrollTop()){
    $('i.img-btn-fixed').addClass('img-btn-fixed-show');
  } else {
    $('i.img-btn-fixed').removeClass('img-btn-fixed-show');
  }
});


// Scroll down animation
 $(function() {
  var already_clicked = 0;
    $('.button-down-home').click (function() {
      if (already_clicked === 0){
        already_clicked += 1;
        $('html, body').animate({scrollTop: $('#first-content-home').offset().top }, 1000);
        setTimeout(()=>{
          already_clicked = 0;
        }, 1000);
      }
      return false;
    });
  });

 // Scroll down single animation
 $(function() {
  var already_clicked = 0;
    $('.button-down-single').click (function() {
      if (already_clicked === 0){
        already_clicked += 1;
        $('html, body').animate({scrollTop: $('#first-content-single').offset().top }, 1000);
        setTimeout(()=>{
          already_clicked = 0;
        }, 1000);
      }
      return false;
    });
  });

// Scroll up animation
 $(function() {
  var already_clicked = 0;
    $('.img-btn-fixed').click (function() {
      if (already_clicked === 0){
        already_clicked += 1;
        $('html, body').animate({scrollTop: $('#top_content').offset().top }, 1000);
        setTimeout(()=>{
          already_clicked = 0;
        }, 1000);
      }
      return false;
    });
  });

// Menu dropdown
var menu = document.getElementById('navbarContentMenu');
var cart = document.getElementById('searchform-woocommerce');
var searchform = document.getElementById('searchform-mobile');
function openMobileMenu() {
  var bgMenu = document.getElementById('bg-menu-mobile');
  var after = document.querySelector("a.dropdown-toggle::after");
  var icon = document.getElementById('btn-menu-nav');

  if(searchform.style.display != 'none'){
    showSearchBackground();
  }
  if(cart){
    if(cart.style.display != 'none'){
      showWoocommerceCart();
    }
  }

  if (menu.style.visibility === 'visible') {
    icon.classList.add('fa-bars');
    icon.classList.remove('fa-times');
    menu.style.visibility = 'hidden';
    bgMenu.style.height = '0px';
  } else {
    icon.classList.remove('fa-bars');
    icon.classList.add('fa-times');
    bgMenu.style.height = '100vh';
    setTimeout(()=>{
      menu.style.visibility = 'visible';
    }, 250)
  }
}

// Searchform mobile
function showSearchBackground() {
  var backgroundSearchform = document.getElementById('bg-searchform-mobile');
  var close = document.getElementById('searchform-close');
  var  icon = document.getElementById('btn-searchform');
  var  text = document.getElementById('span-searchform');

  if(menu.style.visibility === 'visible'){
    openMobileMenu();
  }
  if(cart){
    if(cart.style.display != 'none'){
      showWoocommerceCart();
    }
  }

  if(searchform.style.display != 'none'){
    icon.classList.add('fa-search');
    icon.classList.remove('fa-times');
    close.classList.add('fa-search');
    close.classList.remove('fa-times');
    text.classList.add('d-block');
    text.classList.remove('d-none');
    backgroundSearchform.style.padding = '0vh 0 0 0';
    searchform.style.display = 'none';
  }else{
    icon.classList.remove('fa-search');
    icon.classList.add('fa-times');
    close.classList.remove('fa-search');
    close.classList.add('fa-times');
    text.classList.remove('d-block');
    text.classList.add('d-none');
    backgroundSearchform.style.padding = '100vh 0 0 0';
    setTimeout(()=>{
      searchform.style.display = 'block';
    }, 250)
  }
}

// Woocommerce cart mobile

function showWoocommerceCart() {
  var backgroundCart = document.getElementById('bg-woocommerce-mobile');
  var  icon = document.getElementById('btn-woocommerce-cart');
  var  text = document.getElementById('span-woocommerce-cart');
  var  counter = document.getElementById('span-woocommerce-counter');
  var navbar =  document.querySelector("nav.navbar");

  if(searchform.style.display != 'none'){
    showSearchBackground();
  }
  if(menu.style.visibility === 'visible'){
    openMobileMenu();
  }

  if(cart.style.display != 'none'){
    icon.classList.add('fa-search');
    icon.classList.remove('fa-times');
    text.classList.add('d-block');
    text.classList.remove('d-none');
    if(counter){
      counter.classList.add('visible');
      counter.classList.remove('invisible');
    }
    backgroundCart.style.padding = '0vh 0 0 0';
    cart.style.display = 'none';
  }else{
    icon.classList.remove('fa-search');
    icon.classList.add('fa-times');
    text.classList.remove('d-block');
    text.classList.add('d-none');
    if(counter){
      counter.classList.remove('visible');
      counter.classList.add('invisible');
    }
    backgroundCart.style.padding = '100vh 0 0 0';
    setTimeout(()=>{
      cart.style.display = 'block';
    }, 250)
  }
}

// Countdown.js
if (document.getElementById('clock') && document.getElementById('message')){

  var time_left = document.getElementById('clock').textContent;

  var final_message = document.getElementById('message').textContent;

  const getRemainingTime = deadline => {
    let now = new Date(),
        remainTime = (new Date(deadline) - now + 1000) / 1000,
        remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
        remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
        remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
        remainDays = Math.floor(remainTime / (3600 * 24));

    return {
      remainSeconds,
      remainMinutes,
      remainHours,
      remainDays,
      remainTime
    }
  };

  const countdown = (deadline,elem,finalMessage) => {
    const el = document.getElementById(elem);

    const timerUpdate = setInterval( () => {
      let t = getRemainingTime(deadline);
      el.innerHTML = `${t.remainDays}d ${t.remainHours}h ${t.remainMinutes}m ${t.remainSeconds}s`;

      el.className = "d-inline-block";

      if(t.remainTime <= 1) {
        clearInterval(timerUpdate);
        el.innerHTML = finalMessage;
      }

    }, 1000)

  };

  countdown( time_left, 'clock', final_message);

}

// Add fade in animation onload

var win = $(window);
var winH = win.height();


$(window).ready(function() {
  $('.to-fadein-animation').each(function(){
  var imagePos = $(this).offset().top;

  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+winH) {
      $(this).removeClass("to-fade");
      $(this).addClass("fadein");
    }
  });
  // article
  $('article h1, article h2, article h3, article h4, article h5, article h6, article dl, article p, article ul, article li, article table, article pre, article address, img, a, i').each(function(){
  var imagePos = $(this).offset().top;

  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+winH) {
      $(this).addClass("faded");
    }
  });
});

//  add scroll fade in animation

$(window).scroll(function() {
  $('.to-fadein-animation').each(function(){
  var imagePos = $(this).offset().top;

  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+winH) {
      $(this).removeClass("to-fade");
      $(this).addClass("fadein");
    }
  });
  // article
  $('article h1, article h2, article h3, article h4, article h5, article h6, article dl, article p, article ul, article li, article table, article pre, article address, img, a, i').each(function(){
  var imagePos = $(this).offset().top;

  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+winH) {
      $(this).addClass("faded");
    }
  });
});

// Sound stop slider

var stopAudio1 = document.getElementById("stop-audio1");
var stopAudio2 = document.getElementById("stop-audio2");
var stopAudio3 = document.getElementById("stop-audio3");

if (stopAudio1){
  stopAudio1.onplay = function() {
    stopAudio2.pause();
    stopAudio2.currentTime = 0;
    stopAudio3.pause();
    stopAudio3.currentTime = 0;
  };
}

if (stopAudio2){
  stopAudio2.onplay = function() {
    stopAudio1.pause();
    stopAudio1.currentTime = 0;
    stopAudio3.pause();
    stopAudio3.currentTime = 0;
  };
}

if (stopAudio3){
  stopAudio3.onplay = function() {
    stopAudio2.pause();
    stopAudio2.currentTime = 0;
    stopAudio1.pause();
    stopAudio1.currentTime = 0;
  };
}


// woocomerce columns
$(window).ready(function() {
  $('#woo_featured_products ul').removeClass("columns-3");
  $('.products .columns-4').addClass('columns-2');
});


$(document).ready(function(){
  if ($('#carouselFade')){
    $("#carouselFade").carousel();
  }
});
