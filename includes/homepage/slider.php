  <!-- meta slider -->
<div style="max-width: 1000px;" class="metaslider metaslider-flex metaslider-45 ml-slider">
    
    <div id="metaslider_container_45">
        <div id="metaslider_45">
            <ul class="slides">
                <li style="display: block; width: 100%;" class="slide-243 ms-image"><img src="wp-content/uploads/2017/07/pic-e1502341474643-1000x400.jpg" alt="" class="slider-45 slide-243" /></li>
                <li style="display: none; width: 100%;" class="slide-250 ms-image"><img src="wp-content/uploads/2017/08/02-700x280.jpg" alt="" class="slider-45 slide-250" /></li>
                <li style="display: none; width: 100%;" class="slide-248 ms-image"><img src="wp-content/uploads/2017/08/01-900x360.jpg" alt="" class="slider-45 slide-248" /></li>
                <li style="display: none; width: 100%;" class="slide-246 ms-image"><img src="wp-content/uploads/2017/08/RW-960x384.jpg" alt="" class="slider-45 slide-246" /></li>
            </ul>
        </div>
        
    </div>
    <script type="text/javascript">
        var metaslider_45 = function($) {
            $('#metaslider_45').addClass('flexslider'); // theme/plugin conflict avoidance
            $('#metaslider_45').flexslider({ 
                slideshowSpeed:3000,
                animation:"fade",
                controlNav:true,
                directionNav:true,
                pauseOnHover:true,
                direction:"horizontal",
                reverse:false,
                animationSpeed:600,
                prevText:"&lt;",
                nextText:"&gt;",
                slideshow:true
            });
        };
        var timer_metaslider_45 = function() {
            var slider = !window.jQuery ? window.setTimeout(timer_metaslider_45, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_45, 1) : metaslider_45(window.jQuery);
        };
        timer_metaslider_45();
    </script>
</div>
<!--// meta slider-->	