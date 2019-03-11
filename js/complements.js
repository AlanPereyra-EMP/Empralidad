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