$(document).ready(function () {
  $('.parallax').parallax();
});

/* Accordion toogle */
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.collapsible');
  var instances = M.Collapsible.init(elems, {
    accordion: false
  });
});

/* Sidenav init */
M.AutoInit();
// initializing the .sidenav element
var elem = document.querySelector('.sidenav');
var instance = M.Sidenav.init(elem);

// initializing the .sidenav element and modifying its options
var elem = document.querySelector('.sidenav');
var instance = M.Sidenav.init(elem, {
  inDuration: 350,
  outDuration: 350,
  edge: 'left' //or right
});