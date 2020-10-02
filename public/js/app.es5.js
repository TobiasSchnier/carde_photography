document.addEventListener('DOMContentLoaded', function () {
  // Cookie
  var cookieSeen = localStorage.getItem('cookieSeen');

  if (cookieSeen != 'shown') {
    $('.cookie-banner').delay(200).fadeIn();
    localStorage.setItem('cookieSeen', 'shown');
  }

  $('.close').click(function () {
    $('.cookie-banner').fadeOut();
  });
  
});


