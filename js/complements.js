// Scroll.js
$(window).on('scroll', function(){
  if($(window).scrollTop()){
    $('nav').addClass('navbar-scroll');
  } else {
    $('nav').removeClass('navbar-scroll');
  }
  if($(window).scrollTop()){
    $('img.img-btn-fixed').addClass('img-btn-fixed-show');
  } else {
    $('img.img-btn-fixed').removeClass('img-btn-fixed-show');
  }
})

// Scroll down animation
 $(function() {
  // console.log('OK');
    $('.button-down-home').click (function() {
      $('html, body').animate({scrollTop: $('#first-content-home').offset().top }, 1000);
      return false;
    });
  });

// Scroll up animation
var html, body, scrollToTopButton;
window.onload = function() {
  html = document.documentElement;
  body = document.body;
  scrollToTopButton = document.getElementById("scrollToTopButton");
};

function scrollToTop(totalTime, easingPower) {
  //console.log("OK");
  var timeInterval = 1; //in ms
  var scrollTop = Math.round(body.scrollTop || html.scrollTop);
  //var by=- scrollTop;
  var timeLeft = totalTime;
  var scrollByPixel = setInterval(function() {
    var percentSpent = (totalTime - timeLeft) / totalTime;
    if (timeLeft >= 0) {
      var newScrollTop = scrollTop * (1 - easeInOut(percentSpent, easingPower));
      body.scrollTop = newScrollTop;
      html.scrollTop = newScrollTop;
      //console.log(easeInOut(percentSpent,easingPower));
      timeLeft--;
    } else {
      clearInterval(scrollByPixel);
      //Add hash to the url after scrolling
      //window.location.hash = hash;
    }
  }, timeInterval);
}

function easeInOut(t, power) {
  if (t < 0.5) {
    return 0.5 * Math.pow(2 * t, power);
  } else {
    return 0.5 * (2 - Math.pow(2 * (1 - t), power));
  }
}

// Searchform mobile

var background = document.getElementById('bg-searchform-mobile');
var close = document.getElementById('searchform-close');
var searchform = document.getElementById('searchform-mobile');

function showBackground() {
  background.style.padding = '100vh 0 0 0';
  setTimeout(()=>{
    close.classList.add('searchform-close');
    searchform.classList.add('d-block');
  }, 1000)
}

function closeSearchform() {
  background.style.padding = '0vh 0 0 0';
  close.classList.remove('searchform-close');
  searchform.classList.remove('d-block');
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

// Preload js

const charge = document.getElementById('all_content');

const spinner = document.getElementById('charge');

setTimeout(()=>{
  console.log('Preload finish');
  charge.className = ' d-block';
  spinner.className = 'd-none'
}, 1000)