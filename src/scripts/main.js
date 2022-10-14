// Main
//
// main entry importing dependencies

import 'jquery';

// import Formstone
import 'formstone/src/js/core';
import 'formstone/src/js/analytics';
import 'formstone/src/js/carousel';
import 'formstone/src/js/checkpoint';
import 'formstone/src/js/cookie';
import 'formstone/src/js/lightbox';
import 'formstone/src/js/swap';
import 'formstone/src/js/mediaquery';
import 'formstone/src/js/touch';
import 'formstone/src/js/transition';

// import gumshoe
import 'gumshoejs'

// import Kernl(UI) items
import './components/accordion';
import './components/carousel';
import './components/checkpoint';
import './components/gallery';
import './components/gumshoe';
import './components/icon';
import './components/loader';
import './components/masthead';
import './components/modal';
import './components/nav';
import './components/sharing';

// keyboard skippable menu items
// https://www.w3.org/WAI/tutorials/menus/flyout/

var menuItems = document.querySelectorAll('li.\\+children');

Array.prototype.forEach.call(menuItems, function(el, i){
	el.querySelector('a').addEventListener("click",  function(event){
		if (this.parentNode.className == "__item +children") {
			this.parentNode.className = "__item +children submenu-open";
			this.setAttribute('aria-expanded', "true");
		} else {
			this.parentNode.className = "__item +children";
			this.setAttribute('aria-expanded', "false");
		}
		event.preventDefault();
		return false;
	});
});
