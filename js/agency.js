/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});


//Use the onload event so that we can make sure the DOM is at 
//least mostly loaded before trying to get elements
window.onload = function() {
   //Get the DOM element that represents the <button> element.
   //And set the onclick event
   document.getElementById("LearnMoreBtn").onclick = function(){
      //Set a variable to contain the DOM element of the overly
      var overlay = document.getElementById("overlay");
      //Set a variable to contain the DOM element of the popup
      var popup = document.getElementById("popup");

      //Changing the display css style from none to block will make it visible
      overlay.style.display = "block";
      //Same goes for the popup
      popup.style.display = "block";
   };
};
