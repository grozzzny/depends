Plugins
=============

HTML Purifier is an HTML filtering solution that uses a unique combination
of robust whitelists and agressive parsing to ensure that not only are
XSS attacks thwarted, but the resulting HTML is standards compliant.


## Smooth Scroll Plugin
https://github.com/kswedberg/jquery-smooth-scroll


## Simple Parallax Scrolling
http://pixelcog.github.io/parallax.js/

## WOW animation

https://daneden.github.io/animate.css/

```js
$(document).ready(function(){
    /************************
     - WOW animation -
     ************************/
    jQuery(document).ready(function() {
        new WOW().init();
    });
});
```
```html
<div class="animated fadeIn wow" data-wow-duration="1s" data-wow-delay="2s">

</div>
```

## Scroll reveal

```js
$(document).ready(function(){
    /************************
     - Scroll reveal -
     ************************/
    window.sr = new scrollReveal({
        reset:true,
        move:"10px",
        mobile:false
    });
});
```

```html
<div data-sr="enter left and move 40px over 1s">

</div>
```