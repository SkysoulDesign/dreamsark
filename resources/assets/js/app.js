/**
 * Dependencies
 */
global.jQuery = require("jquery");
global.$ = global.jQuery;

/** TweenMax - GSAP */
require('gsap');

var ripple = require('./effects/ripple').init('.rippable', 0.75);

/**
 * Components
 */
var slider = require('./components/slider');