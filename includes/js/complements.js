// Scroll button show
var navbarBg = document.getElementById('navbar-background');
var scrollToTopButton = document.getElementById('scrollToTopButton');

if(scrollToTopButton){
  window.onscroll = function(){
    if(window.scrollY === 0){
      navbarBg.classList.remove('navbar-scroll');
      scrollToTopButton.classList.remove('img-btn-fixed-show');
    } else {
      navbarBg.classList.add('navbar-scroll');
      scrollToTopButton.classList.add('img-btn-fixed-show');
    }
  }
  window.scrollTo(0, 0);

  // Scroll up animation
  scrollToTopButton.onclick = function() {
    window.scrollTo(0, 0);
  };
}


// Navigation buttons
var menu = document.getElementById('navbarContentMenu');
var cart = document.getElementById('searchform-woocommerce');
var searchform = document.getElementById('searchform-mobile');
var bgSearchform = document.getElementById('bg-searchform-mobile');

function openMobileMenu() {
  var bgMenu = document.getElementById('bg-menu-mobile');
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
    bgMenu.classList.remove('bg-menu-open');
    menu.style.visibility = 'hidden';
  } else {
    icon.classList.remove('fa-bars');
    icon.classList.add('fa-times');
    bgMenu.classList.add('bg-menu-open');
    setTimeout(()=>{
      menu.style.visibility = 'visible';
    }, 250)
  }
}

function showSearchBackground() {
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
    bgSearchform.style.padding = '0vh 0 0 0';
    searchform.style.display = 'none';
  }else{
    icon.classList.remove('fa-search');
    icon.classList.add('fa-times');
    close.classList.remove('fa-search');
    close.classList.add('fa-times');
    text.classList.remove('d-block');
    text.classList.add('d-none');
    bgSearchform.style.padding = '200vh 0 0 0';
    setTimeout(()=>{
      searchform.style.display = 'block';
    }, 250)
  }
}

function showWoocommerceCart() {
  var icon = document.getElementById('btn-woocommerce-cart');
  var text = document.getElementById('span-woocommerce-cart');
  var counter = document.getElementById('span-woocommerce-counter');
  var navbar =  document.querySelector("nav.navbar");

  if(searchform.style.display != 'none'){
    showSearchBackground();
  }
  if(menu.style.visibility === 'visible'){
    openMobileMenu();
  }
  if(cart.style.display != 'none'){
    icon.classList.add('fa-shopping-cart');
    icon.classList.remove('fa-times');
    text.classList.add('d-block');
    text.classList.remove('d-none');
    if(counter){
      counter.classList.add('visible');
      counter.classList.remove('invisible');
    }
    bgSearchform.style.padding = '0vh 0 0 0';
    cart.style.display = 'none';
  }else{
    icon.classList.remove('fa-shopping-cart');
    icon.classList.add('fa-times');
    text.classList.remove('d-block');
    text.classList.add('d-none');
    if(counter){
      counter.classList.remove('visible');
      counter.classList.add('invisible');
    }
    bgSearchform.style.padding = '200vh 0 0 0';
    setTimeout(()=>{
      cart.style.display = 'block';
    }, 250)
  }
}

// woocomerce columns
window.onload = function() {
  var wooFeaturedProducts = document.querySelector('#woo_featured_products ul');
  if(wooFeaturedProducts){
    wooFeaturedProducts.classList.remove('columns-3');
  }
  var columns4 = document.querySelector('.products .columns-4');
  if(columns4){
    columns4.classList.add('columns-x');
  }
}

// Carousel fade
var item = [];
item[1] = document.getElementById('carousel-item-1');
item[2] = document.getElementById('carousel-item-2');
item[3] = document.getElementById('carousel-item-3');
bodyBG = document.getElementById('emp-background-image');
var itemNumber = 1;

function carouselItemNext() {
  item[itemNumber].classList.remove('active');
  bodyBG.classList.remove('emp-background-image'+itemNumber);
  if(itemNumber < 3){
    itemNumber++;
  } else{
    itemNumber = 1;
  }
  if(!(item[itemNumber])){
    if(itemNumber < 3){
      itemNumber++;
    } else{
      itemNumber = 1;
    }
  }
  bodyBG.classList.add('emp-background-image'+itemNumber);
  item[itemNumber].classList.add('active');
}
function carouselItemPrev() {
  item[itemNumber].classList.remove('active');
  bodyBG.classList.remove('emp-background-image'+itemNumber);
  if(itemNumber > 1){
    itemNumber--;
  } else{
    itemNumber = 3;
  }
  if(!(item[itemNumber])){
    if(itemNumber > 1){
      itemNumber--;
    } else{
      itemNumber = 3;
    }
  }
  item[itemNumber].classList.add('active');
  bodyBG.classList.add('emp-background-image'+itemNumber);
}

// Sliders front page
function slidersFrontpage(){
  var empSliders = document.getElementById('emp-sliders');

  var sliders = document.getElementsByClassName('emp-slider');
  var sliderUl = document.querySelector('#emp-sliders ul');
  var prevBtn = document.getElementById('emp-slider-prev');
  var nextBtn = document.getElementById('emp-slider-next');
  var totalSliders = sliders.length;
  var actualSlider = 0;
  var widthSlider = [];
  var enabled = true;
  var position = 0;
  var totalWidth = 0;
  var userClicked = false;

  if(!empSliders||totalSliders==1)return;//checks if the slider is active
  prevBtn.classList.remove('disabled');
  nextBtn.classList.remove('disabled');

  for(var i = 0; i < totalSliders; i++){
    widthSlider[i] = sliders[i].width;
    totalWidth = totalWidth+widthSlider[i];
  }

  function slowPrevSlider(){
    userClicked = true;
    prevSlider();
  }
  function prevSlider(){
    if(!enabled)return;

    window.clearInterval(autoSlider);

    enabled = false;
    setTimeout(function(){
      enabled = true
    }, 500);

    actualSlider--;
    if(actualSlider<0){
      actualSlider = totalSliders-1;
      sliderUl.scroll({
        left: totalWidth,
        behavior: 'smooth'
      });
      position = totalWidth-(widthSlider[actualSlider]/2);
    }else{
      sliderUl.scroll({
        left: position-(widthSlider[actualSlider]/2),
        behavior: 'smooth'
      });
      position = position-widthSlider[actualSlider];
    }

    // Reactive automatic scroll slider
    if(userClicked){
      autoSlider = window.setInterval(setAutoSlider, 10000);
      userClicked = false;
    } else {
      autoSlider = window.setInterval(setAutoSlider, 4000);
    }
  }

  function slowNextSlider(){
    userClicked = true;
    nextSlider();
  }
  function nextSlider(){
    if(!enabled)return;

    window.clearInterval(autoSlider);

    enabled = false;
    setTimeout(function(){
      enabled = true
    }, 500);

    actualSlider++;
    if(actualSlider>totalSliders-1){
      actualSlider = 0;
      sliderUl.scroll({
        left: 0,
        behavior: 'smooth'
      });
      position = 0;
    }else{
      sliderUl.scroll({
        left: position+(widthSlider[actualSlider]/2),
        behavior: 'smooth'
      });
      position = position+widthSlider[actualSlider];
    }

    // Reactive automatic scroll slider
    if(userClicked){
      autoSlider = window.setInterval(setAutoSlider, 10000);
      userClicked = false;
    } else {
      autoSlider = window.setInterval(setAutoSlider, 4000);
    }
  }

  prevBtn.addEventListener('click', slowPrevSlider, false);
  nextBtn.addEventListener('click', slowNextSlider, false);

  // Init automatic scroll Slider
  var autoSlider = window.setInterval(setAutoSlider, 4000);

  function setAutoSlider(){
    nextSlider();
  }
}

slidersFrontpage();
