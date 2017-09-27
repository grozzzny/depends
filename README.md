Depends for Yii2 
==============================

## Installation guide

```bash
$ php composer.phar require grozzzny/depends "dev-master"
```
or
```bash
$ composer require grozzzny/depends "dev-master"
```
or composer.json:
```json
"require": {
  "grozzzny/depends": "dev-master"
}
```

## File AppAsset.php
```php
class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'css/styles.less',
    ];
    public $js = [
        'js/scripts.js',
    ];
    public $depends = [
        'grozzzny\depends\bxslider\BxsliderAsset',
        'grozzzny\depends\flexslider\FlexsliderAsset',
        'grozzzny\depends\font_awesome\FontAwesomeAsset',
        'grozzzny\depends\jquery_migrate\JqueryMigrateAsset',
        'grozzzny\depends\masonry\MasonryAsset',
        'grozzzny\depends\modernizr\ModernizrAsset',
        'grozzzny\depends\nested\NestedAsset',
        'grozzzny\depends\notify\NotifyAsset',
        'grozzzny\depends\stellar\StellarAsset',
        'grozzzny\depends\owl_carousel\OwlAsset',
        'grozzzny\depends\parallax\ParallaxAsset',
        'grozzzny\depends\scrollreveal\ScrollRevalAsset',
        'grozzzny\depends\smoothscroll\SmoothscrollAsset',
        'grozzzny\depends\waypoints\WaypointsAsset',
        'grozzzny\depends\wow_animations\WowAnimationsAsset',
        'grozzzny\depends\gmap\GmapAsset',
        'grozzzny\depends\swiper\SwiperAsset',
        'grozzzny\depends\fancybox\FancyboxAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}
```
---
### bxSlider
The Responsive jQuery Content Slider [bxSlider](http://bxslider.com/) 
```
grozzzny\depends\bxslider\BxsliderAsset
```
---

### FlexSlider
An awesome, fully responsive jQuery slider toolkit [FlexSlider](https://woocommerce.com/flexslider/) 
```
grozzzny\depends\flexslider\FlexsliderAsset
```
---

### Font Awesome
Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS [Font Awesome](http://fontawesome.io/) 
```
grozzzny\depends\font_awesome\FontAwesomeAsset
```
---

### Jquery migrate 3.x 
Upgrade the version of jQuery on the page to the latest 3.0 version (currently 3.0.0) and add the uncompressed [Jquery migrate 3.x](http://jquery.com/upgrade-guide/3.0/) 
```
grozzzny\depends\jquery_migrate\JqueryMigrateAsset
```
---

### Masonry
Cascading grid layout library [Masonry](https://masonry.desandro.com/) 
```
grozzzny\depends\masonry\MasonryAsset
```
---

### Modernizr
Modernizr is a JavaScript library that detects HTML5 and CSS3 features in the user’s browser. [Modernizr](https://github.com/Modernizr/Modernizr) 
```
grozzzny\depends\modernizr\ModernizrAsset
```
---

### jQuery Nested
For a complete gap free, multi column grid layout experience. [jQuery Nested](http://suprb.com/apps/nested/) 
```
grozzzny\depends\nested\NestedAsset
```
---

### Notify
Message on the screen
```
grozzzny\depends\notify\NotifyAsset
```
```js
notify.success('message');
```
or
```js
notify.error('message');
```
---

### Stellar
Parallax has never been easier. [Stellar](http://markdalgleish.com/projects/stellar.js/) 
```
grozzzny\depends\stellar\StellarAsset
```
---

### Owl Carousel 2
Touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider. [Owl Carousel 2](https://owlcarousel2.github.io/OwlCarousel2/) 
```
grozzzny\depends\owl_carousel\OwlAsset
```
---

### Parallax
Parallax.js is a dirt simple parallax scrolling effect inspired by Spotify.com and implemented as a jQuery plugin. [Parallax](http://pixelcog.github.io/parallax.js/) 
```
grozzzny\depends\parallax\ParallaxAsset
```
---

### ScrollReveal
Easy scroll animations for web and mobile browsers. [ScrollReveal](https://scrollrevealjs.org/) 
```
grozzzny\depends\scrollreveal\ScrollRevalAsset
```
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
---

### Smoothscroll
A teeny tiny, standard compliant, smooth scroll script with ease-in-out effect and no dependancy. [Smoothscroll](https://www.npmjs.com/package/smoothscroll) 
```
grozzzny\depends\smoothscroll\SmoothscrollAsset
```
---

### Waypoints
Waypoints is a library that makes it easy to execute a function whenever you scroll to an element. [Waypoints](https://github.com/imakewebthings/waypoints) 
```
grozzzny\depends\waypoints\WaypointsAsset
```
```css
.stuck {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
}
```
```html
<div class="js-sticky">

</div>
```
```js
// Fixed header
//-----------------------------------------------
if ($('.js-sticky').length) {
    var sticky = new Waypoint.Sticky({
        element: $('.js-sticky'),
        //wrapper: '<div class="sticky-wrapper waypoint" />',
        //stuckClass: 'object-visible',
        //handler: function(direction) {
        //    $('body').toggleClass('fixed-header-on');
        //},
        //offset: -1
    });
}
```
---

### Wow animations and animate.css
Reveal CSS animation as you scroll down a page. By default, you can use it to trigger animate.css animations. But you can easily change the settings to your favorite animation library. [Wow animations](https://github.com/matthieua/WOW) 
Library animations. [animate.css](https://daneden.github.io/animate.css/) 
```
grozzzny\depends\wow_animations\WowAnimationsAsset
```
```js
$(document).on('ready', function(){
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
---

### Gmap
Lightweight jQuery plugin that helps you embed Google Maps, using the API V3, into your website. Original at [Gmap](http://github.com/marioestrada/jQuery-gMap)
```
grozzzny\depends\gmap\GmapAsset
```
```php
$config = [
    'components' => [
        ...
        'assetManager' => [
            ...
            'bundles' => [
                'grozzzny\depends\gmap\GmapAsset' => [
                    'key' => 'AIzaSyCtX2Fg1fOnnX1Pu1n1lXvmb303Q_1234',
                ],
            ]
        ]
    ]
];
```
---

### Swiper
Most Modern Mobile Touch Slider [Swiper](http://idangero.us/swiper/)
```
grozzzny\depends\swiper\SwiperAsset
```
```html
 <div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="#">
                <img alt="" src="image_1.jpg" />
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img alt="" src="image_2.jpg" />
            </a>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
   
</div>
```
```js
var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 4000,
        autoplayDisableOnInteraction: false
    });
```
---

### Fancybox
FancyBox is a tool for displaying images, html content and multi-media in a Mac-style "lightbox" that floats overtop of web page.  [Fancybox](http://fancybox.net/)
```
grozzzny\depends\fancybox\FancyboxAsset
```
```html
<a href="image_1.jpg" data-fancybox="group" data-caption="">
    <img src="image_1_preview.jpg" alt="" />
</a>
```
```js
$('.fancybox').fancybox();
//OR
$("a[href$='.jpg'],a[href$='.png'],a[href$='.gif']").attr('rel', 'gallery').fancybox({
    loop : true,
    closeClick : false,
    nextEffect : 'none',
    prevEffect : 'none',
    openEffect : 'elastic',
    closeEffect : 'elastic',
    openEasing : 'swing',
    closeEasing : 'swing'
 });
```
---
