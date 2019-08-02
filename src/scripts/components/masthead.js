// Components
// Masthead


import $ from 'jquery';

// --
// Masthead mobile menu
$(".masthead .nav").navigation({
  type: 'overlay',
  gravity: 'left',
  maxWidth: '991px',
  theme: '',
  labels: {
    closed: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>',
    open: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>',
  },
});

// --
// Progressive menu focus

let $shuffle = $('[data-toggle="masthead_nav"][data-swap-target]')

// Initialize Formstone swap()
$shuffle.swap();

// Activate and deactivate event
$shuffle.on('activate.swap deactivate.swap', function() {
  $(this).toggleClass('-active')
});
