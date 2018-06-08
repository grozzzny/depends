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
        'grozzzny\depends\bootstrap4\Bootstrap4Asset',
        'grozzzny\depends\bootstrap4\Bootstrap4PluginAsset',
        'grozzzny\depends\mdbootstrap\MDBootstrapAsset',
        'grozzzny\depends\mdbootstrap\MDBootstrapPluginAsset',
        'grozzzny\depends\fontawesome5\FontAwesome5Asset',
        'grozzzny\depends\popper\PopperAsset',
        'grozzzny\depends\tether\TetherAsset',
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
        'grozzzny\depends\sticky\StickyAsset',
        'grozzzny\depends\cookie\CookieAsset',
        'grozzzny\depends\toastr\ToastrAsset',
        'grozzzny\depends\sweetalert\SweetalertAsset',
        'grozzzny\depends\eonasdan\EonasdanBootstrapDatetimepickerAsset',
        'grozzzny\depends\threejs\ThreejsAsset',
        'grozzzny\depends\wagerfield_parallax\WagerfieldParallaxAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}
```
---

### three.js
The goal of this section is to give a brief introduction to three.js. [three.js](https://threejs.org) 
```
grozzzny\depends\threejs\ThreejsAsset
```
---

### Material Design for Bootstrap 4
World's most popular framework for building responsive, mobile-first websites and apps. [https://mdbootstrap.com](https://mdbootstrap.com) 
```
grozzzny\depends\mdbootstrap\MDBootstrapAsset
grozzzny\depends\mdbootstrap\MDBootstrapPluginAsset
```
---

### EonasdanBootstrapDatetimepickerAsset
Bootstrap 3 Datepicker v4 Docs [Datepicker](http://eonasdan.github.io/bootstrap-datetimepicker/) 
```
grozzzny\depends\eonasdan\EonasdanBootstrapDatetimepickerAsset
```

```html
 <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>
```
---

### Sweetalert
A beautiful replacement for success messages, error messages [Sweetalert](https://sweetalert.js.org/guides/) 
```
grozzzny\depends\sweetalert\SweetalertAsset
```

```js
 swal({
	title: "Удалить данный блок?",
	text: "You will not be able to recover this imaginary file!",
	type: "warning",
	showCancelButton: true,
	confirmButtonColor: "#DD6B55",
	confirmButtonText: "Да, удалить!",
	closeOnConfirm: false
}, function () {
	swal("Deleted!", "Your imaginary file has been deleted.", "success");
});
```
---

### Toastr
toastr is a Javascript library for non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended. [Toastr](https://github.com/CodeSeven/toastr) 
```
grozzzny\depends\toastr\ToastrAsset
```

```js
// Display a warning toast, with no title
toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')

// Display a success toast, with a title
toastr.success('Have fun storming the castle!', 'Miracle Max Says')

// Display an error toast, with a title
toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')

// Immediately remove current toasts without using animation
toastr.remove()

// Remove current toasts using animation
toastr.clear()

// Override global options
toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 5000})
```
---

### Bootstrap v4
Bootstrap is the most popular HTML, CSS, and JS framework in the world for building responsive, mobile-first projects on the web. [bootstrap v4](https://getbootstrap.com/) 
```
grozzzny\depends\bootstrap4\Bootstrap4Asset
grozzzny\depends\bootstrap4\Bootstrap4PluginAsset
```
---

### POPPER.JS
A kickass library used to manage poppers in web applications [POPPER.JS](https://popper.js.org/) 
```
grozzzny\depends\popper\PopperAsset
```
---

### Font Awesome 5
Get vector icons and social logos on your website with Font Awesome, the web’s most popular icon set and toolkit. [Font Awesome 5](https://fontawesome.com/) 
```
grozzzny\depends\fontawesome5\FontAwesome5Asset
```
---

### Tether
A positioning engine to make overlays, tooltips and dropdowns better #hubspot-open-source [tether](https://github.com/HubSpot/tether) 
```
grozzzny\depends\tether\TetherAsset
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

### Wagerfield Parallax
Parallax Engine that reacts to the orientation of a smart device. [Parallax](https://github.com/wagerfield/parallax) 
```
grozzzny\depends\wagerfield_parallax\WagerfieldParallaxAsset
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

### Sticky
Sticky is a jQuery plugin that gives you the ability to make any element on your page always stay visible.  [Sticky](https://github.com/garand/sticky)
```
grozzzny\depends\sticky\StickyAsset
```
```js
$(document).ready(function(){
    $("#sticker").sticky({topSpacing:0});
  });
```
---

### jQuery Cookie Plugin
A simple, lightweight jQuery plugin for reading, writing and deleting cookies.  [jQuery Cookie Plugin](https://github.com/carhartl/jquery-cookie)
```
'grozzzny\depends\cookie\CookieAsset'
```
```js
//Create session cookie:
$.cookie('name', 'value');

//Create expiring cookie, 7 days from then:
$.cookie('name', 'value', { expires: 7 });

//Create expiring cookie, valid across entire site:
$.cookie('name', 'value', { expires: 7, path: '/' });

//Read cookie:
$.cookie('name'); // => "value"

// Returns true when cookie was successfully deleted, otherwise false
$.removeCookie('name'); // => true
```
---
