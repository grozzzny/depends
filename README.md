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
        ...
        'grozzzny\depends\jquery_migrate\JqueryMigrateAsset',
        'grozzzny\depends\masonry\MasonryAsset',
        'grozzzny\depends\waypoints\WaypointsAsset',
        'grozzzny\depends\switcher\SwitcherAsset',
        ...
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}
```

### bxSlider
The Responsive jQuery Content Slider [bxSlider](http://bxslider.com/) 
```php
grozzzny\depends\bxslider\BxsliderAsset
```

### FlexSlider
An awesome, fully responsive jQuery slider toolkit [FlexSlider](https://woocommerce.com/flexslider/) 
```php
grozzzny\depends\flexslider\FlexsliderAsset
```

### Font Awesome
Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS [Font Awesome](http://fontawesome.io/) 
```php
grozzzny\depends\font_awesome\FontAwesomeAsset
```

### Jquery migrate 3.x 
Upgrade the version of jQuery on the page to the latest 3.0 version (currently 3.0.0) and add the uncompressed [Jquery migrate 3.x](http://jquery.com/upgrade-guide/3.0/) 
```php
grozzzny\depends\jquery_migrate\JqueryMigrateAsset
```

### Masonry
Cascading grid layout library [Masonry](https://masonry.desandro.com/) 
```php
grozzzny\depends\bxslider\BxsliderAsset
```

### Modernizr
Modernizr is a JavaScript library that detects HTML5 and CSS3 features in the user’s browser. [Modernizr](https://github.com/Modernizr/Modernizr) 
```php
grozzzny\depends\masonry\MasonryAsset
```

### jQuery Nested
For a complete gap free, multi column grid layout experience. [jQuery Nested](http://suprb.com/apps/nested/) 
```php
grozzzny\depends\nested\NestedAsset
```

### Notify
Message on the screen
```php
grozzzny\depends\notify\NotifyAsset
```
```js
notify.success('message');
```
or
```js
notify.error('message');
```

### Stellar
Parallax has never been easier. [Stellar](http://markdalgleish.com/projects/stellar.js/) 
```php
grozzzny\depends\stellar\StellarAsset
```

### Owl Carousel 2
Touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider. [Owl Carousel 2](https://owlcarousel2.github.io/OwlCarousel2/) 
```php
grozzzny\depends\owl_carousel\OwlAsset
```

### Parallax
Parallax.js is a dirt simple parallax scrolling effect inspired by Spotify.com and implemented as a jQuery plugin. [Parallax](http://pixelcog.github.io/parallax.js/) 
```php
grozzzny\depends\parallax\ParallaxAsset
```

### ScrollReveal
Easy scroll animations for web and mobile browsers. [ScrollReveal](https://scrollrevealjs.org/) 
```php
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

### Smoothscroll
A teeny tiny, standard compliant, smooth scroll script with ease-in-out effect and no dependancy. [Smoothscroll](https://www.npmjs.com/package/smoothscroll) 
```php
grozzzny\depends\smoothscroll\SmoothscrollAsset
```

### Waypoints
Waypoints is a library that makes it easy to execute a function whenever you scroll to an element. [Waypoints](https://github.com/imakewebthings/waypoints) 
```php
grozzzny\depends\waypoints\WaypointsAsset
```

### Wow animations and animate.css
Reveal CSS animation as you scroll down a page. By default, you can use it to trigger animate.css animations. But you can easily change the settings to your favorite animation library. [Wow animations](https://github.com/matthieua/WOW) 
Library animations. [animate.css](https://daneden.github.io/animate.css/) 
```php
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
