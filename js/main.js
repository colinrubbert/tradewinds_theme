$(function() {
  mobileNav();
  goHome();
});

//Function to open and close navigation on mobile devices
function mobileNav() {
  $('.mobile-nav-toggle').on('click', function(){
    var status = $(this).hasClass('is-open');
    if(status){
      $('.mobile-nav-toggle, .mobile-menu').removeClass('is-open');
    } else {
      $('.mobile-nav-toggle, .mobile-menu').addClass('is-open');
    }
  });
}


// Go to home

function goHome() {
  $('.tradewinds-logo').on('click', function() {
    location.href = "/";
  });
}
