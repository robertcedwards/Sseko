/**
 * jQuery stickySidebar
 *
 * Copyright (c) 2011 Ca-Phun Ung <caphun at yelotofu dot com>
 * Licensed under the MIT (MIT-LICENSE.txt) license.
 *
 * http://github.com/caphun/jquery.stickyNav/
 *
 * Plugin to handle sticky sidebars.
 *
 */

(function($){

// cached values
var namespace = '.stickyNav', 
    stickyPrevScrollTop = 'prevScrollTop'+namespace,
    stickyInitPosLeft = 'initPosLeft'+namespace,
    stickyInitPosLeftGutter = 'initPosLeftGutter'+namespace;

// define stickySidebar method
$.fn.stickyNav = function( options ) {

  return this.each(function() {

    new $.stickyNav( this, options );

  });

}

// plugin constructor
$.stickyNav = function( elem, options ) {

  // deep extend
  this.options = $.extend(true, {}, $.stickyNav.defaults, options );

  // the original element | the parent element
  this.element = $( elem );
  this.parentElem = this.element.parent();

  // run
  this.init();
}

// plugin defaults
$.stickyNav.defaults = {
  gutter: 0 // defines the space to leave above the sidebar when it's sticky - default 0
}

// plugin prototypes
$.stickyNav.prototype = {

  init: function() {

    // save initial values
    this.initValues();
    
    // define self
    var self = this;

    // here comes the magic!
    $( window ).bind('scroll'+namespace, function() {
      self.stickiness().data(stickyPrevScrollTop, $(this).scrollTop());
    });

  },

  // actually, all the logic is here!!!
  stickiness: function() {

    var scrollTop = $( window ).scrollTop(),
        elem = this.element, elemTop = elem.offset().top, elemHeight = elem.outerHeight(),
        pTop = this.parentElem.offset().top, pHeight = this.parentElem.outerHeight(),
        down = (scrollTop > elem.data(stickyPrevScrollTop));

    return elem.css(
        // if reached the element minus some gutter space we're entering sticky territory.
        scrollTop > pTop - this.options.gutter
        // if scrolling down check if reached the bottom of the parent container
        && ( (down && (pTop + pHeight > elemTop + elemHeight)) 
          // if scrolling up check if scrollTop is less than the element top position
          || (!down && scrollTop <= elemTop) )

        // sticky
        ? { 
            position: 'fixed', 
            top: 0,
            left: elem.data(stickyInitPosLeft) 
          }

        // not sticky
        : { 
            position: 'absolute', 
            top: (pTop + pHeight <= elemTop + elemHeight ? pHeight - elemHeight : 0) - this.options.gutter, 
            marginTop: this.options.gutter,
            left: elem.data(stickyInitPosLeft) - elem.data(stickyInitPosLeftGutter)
          }
        );
  },

  // save initial positions and values
  initValues: function() {
    this.element
      // cache previous scrollTop value
      .data(stickyPrevScrollTop, -1)
      .data(stickyInitPosLeft, this.element.offset().left - parseInt(this.element.css('marginLeft')))
      .data(stickyInitPosLeftGutter, this.element.offset().left - this.element.position().left)
      .css({ position: 'absolute', left: this.element.position().left });
  }

}

})(jQuery);
