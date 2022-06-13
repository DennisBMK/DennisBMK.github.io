//Hamburger menu inspired by https://dev.to/ljcdev/easy-hamburger-menu-with-js-2do0
var navbar = document.querySelector(".navbar")
var ham = document.querySelector(".ham")

var i = 0;

// toggles hamburger menu in and out when clicking on the hamburger
function toggleHamburger(){
  navbar.classList.toggle("showNav")
  ham.classList.toggle("showClose")

  //Scroll to top: https://www.geeksforgeeks.org/how-to-disable-scrolling-temporarily-using-javascript/
  if (i % 2 == 0){
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,

    // if any scroll is attempted, set this to the previous value
    window.onscroll = function() {
        window.scrollTo(scrollLeft, scrollTop);
    };
  }
  else{
    window.onscroll = function() {

    }
  }

  i=i+1
}

ham.addEventListener("click", toggleHamburger)

// toggle when clicking on links

// METHOD 1
var menuLinks = document.querySelectorAll(".menuLink")
menuLinks.forEach( 
  function(menuLink) { 
    menuLink.addEventListener("click", toggleHamburger) 
  }
)