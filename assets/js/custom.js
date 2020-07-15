//  Implementing a pre loader
const preloader = document.querySelector('.preloader');
const loader = document.querySelector('.loader-img');

window.addEventListener('load', () => {
    loader.classList.add('hidden');
    preloader.classList.add('hidden');
});

// Implementing dynamic Hamburger Menu
const navContainer = document.querySelector('.nav-toggle');
const navIcon1 = document.querySelector('.nav-toggle-icon:nth-child(1)')
const navIcon2 = document.querySelector('.nav-toggle-icon:nth-child(2)');
const navIcon3 = document.querySelector('.nav-toggle-icon:nth-child(3)');


const toggleNav = () => {
    if(navIcon1.classList.contains('one')) {
        navIcon1.classList.remove('one');
    }else {
        navIcon1.classList.add('one');
    }
    if(navIcon2.classList.contains('two')) {
        navIcon2.classList.remove('two');
    }else {
        navIcon2.classList.add('two');
    }
    if(navIcon3.classList.contains('three')) {
        navIcon3.classList.remove('three');
    }else {
        navIcon3.classList.add('three');
    }
    if(navContainer.classList.contains('nav-con')) {
        navContainer.classList.remove('nav-con')
    } else {
        navContainer.classList.add('nav-con');
    }
}
navContainer.addEventListener('click', toggleNav);


// TIMER

// Set the date we're counting down to
var countDownDate = new Date("June 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("timer").innerHTML = `
  <div class="time">
    <div class="number">${days}</div>
    <div class="alpha">DAYS</div>
  </div>
  <span class="column">:</span> 

  <div class="time">
    <div class="number">${hours}</div>
    <div class="alpha">HOURS</div>
  </div>
  <span class="column">:</span> 

  <div class="time">
    <div class="number">${minutes}</div>
    <div class="alpha">MINUTES</div>
  </div>
  <span class="column">:</span> 

  <div class="time">
    <div class="number">${seconds}</div>
    <div class="alpha">SECONDS</div>
  </div>
  `;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);