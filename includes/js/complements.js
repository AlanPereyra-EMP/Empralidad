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
    menu.classList.remove('active');
  } else {
    icon.classList.remove('fa-bars');
    icon.classList.add('fa-times');
    bgMenu.classList.add('bg-menu-open');
    setTimeout(()=>{
      menu.style.visibility = 'visible';
      menu.classList.add('active');
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
      position = totalWidth-(widthSlider[actualSlider]/1.9);
    }else{
      sliderUl.scroll({
        left: position-(widthSlider[actualSlider]*1.9),
        behavior: 'smooth'
      });
      position = position-widthSlider[actualSlider];
    }

    userIsReading();
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
        left: position+(widthSlider[actualSlider]/1.9),
        behavior: 'smooth'
      });
      position = position+widthSlider[actualSlider];
    }

    userIsReading();
  }

  // Detect if de user is reading de actual slider
  function userIsReading() {
    if(userClicked){
      autoSlider = window.setInterval(setAutoSlider, 10000);
      userClicked = false;
    } else {
      autoSlider = window.setInterval(setAutoSlider, 4000);
    }
  }

  empSliders.addEventListener('scroll', userIsReading, false);
  prevBtn.addEventListener('click', slowPrevSlider, false);
  nextBtn.addEventListener('click', slowNextSlider, false);

  // Init automatic scroll Slider
  var autoSlider = window.setInterval(setAutoSlider, 4000);

  function setAutoSlider(){
    nextSlider();
  }
}

slidersFrontpage();

// Search woocommerce products by custom filters
window.onload = function() {
  var maxPriceDesktopRangeInput = document.getElementById('emp-range-price-desktop');
  var maxPriceDesktopSmall = document.getElementById('emp-small-price-desktop');
  var deleteWooProductFiltersBtnDesktop = document.getElementById('emp-delete-woo-product-filter-desktop');

  if (maxPriceDesktopRangeInput){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);


    maxPriceDesktopRangeInput.addEventListener("input", function(e){
      maxPriceDesktopSmall.innerHTML = this.value;
      e.preventDefault();
      e.stopPropagation();
    })

    if(urlParams.get('max_price')==null){
      maxPriceDesktopRangeInput.value = 999999;
    }else{
      maxPriceDesktopRangeInput.value = urlParams.get('max_price');
      maxPriceDesktopSmall.innerHTML = urlParams.get('max_price');
    }

    if(urlParams.get('max_price')||urlParams.get('s')){
      deleteWooProductFiltersBtnDesktop.classList.add('active');
    }else{
      deleteWooProductFiltersBtnDesktop.classList.remove('active');
    }
  }


}
function empGetRangeUrl(e){
  let empUrl= window.location.href.split('?')[0];

  empUrl = empUrl.substring(empUrl.lastIndexOf("."), empUrl.lastIndexOf("page"));
  console.log(empUrl);

  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);

  if( urlParams.get('s')){
    url = window.location.href =  empUrl+'?s='+urlParams.get('s')+'&post_type=product&max_price='+e;
  }else{
    url = window.location.href =  empUrl+'?max_price='+e;
  }

  return url;
}

var empWooSearch = document.getElementById('emp-woo-search');
if(empWooSearch){
  let empUrl= window.location.href.split('?')[0];

  // empUrl = empUrl.substring(empUrl.lastIndexOf("."), empUrl.lastIndexOf("page"));
  console.log(empUrl);

  empWooSearch.addEventListener('submit', function(e) {
    e.preventDefault();

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    let textForm = document.getElementById("emp-woo-search-text").value;

    if( urlParams.get('max_price')){
      url = window.location.href =  empUrl+'?s='+textForm+'&post_type=product&max_price='+urlParams.get('max_price');
    }else{
      url = window.location.href =  empUrl+'?s='+textForm+'&post_type=product';
    }

    return url;
  });
}
function empDeleteFilters(){
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);

  url = window.location.href =  window.location.href.split('?')[0];
}

var empWooBtnFilters = document.getElementById('emp-button-woo-filters');
var empWooFilterArea = document.getElementById('emp-woo-filter-area');
var empWooBtnFilterCloseArea = document.getElementById('emp-woo-filter-area-close-btn');

if (empWooBtnFilters) {
  empWooBtnFilters.addEventListener("click", function(e){
    empWooFilterArea.classList.add('active');
    e.preventDefault();
    e.stopPropagation();
  })
  empWooBtnFilterCloseArea.addEventListener("click", function(e){
    empWooFilterArea.classList.remove('active');
    e.preventDefault();
    e.stopPropagation();
  })
}

// Add description to woocommerce-bacs-bank-details

var wooBankDetails = document.querySelector('.wc-bacs-bank-details-heading');
if (wooBankDetails) {
  let wooBankAliasDetail = document.querySelector('.wc-bacs-bank-details-account-name');
  let wooBankDetailItems = document.querySelector('.wc-bacs-bank-details.order_details.bacs_details');

  let title = 'Acreditar compra:';
  let h2 = document.createElement("h2");
  h2.classList.add('emp');
  h2.innerHTML = title;

  let text = 'Para <b>Completar la compra</b> ingresá el "Numero de cuenta" en donde diga CBU o CVU desde tu home banking o a través de mercado pago. Ingresá el monto exacto que figura más arriba. Una vez realizado el pago envianos un mensaje con el comprobante';
  let p = document.createElement("p");
  p.innerHTML = text;

  wooBankDetails.parentNode.insertBefore(h2, wooBankDetails);
  wooBankDetails.parentNode.insertBefore(p, wooBankDetails);

  wooBankAliasDetail.innerHTML = wooBankAliasDetail.innerHTML.split(':').join("");
  wooBankAliasDetail.innerHTML = 'Alias: '+wooBankAliasDetail.innerHTML;

  text = 'Para <b>Informar la compra</b> tocá el ícono de WhatsApp, mandanos un mansaje con el número del pedido y el comprobante de transferencia';
  p = document.createElement("p");
  p.innerHTML = text;
  wooBankDetailItems.parentNode.insertBefore(p, wooBankDetailItems.nextSibling);
}
