     <!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter32735360 = new Ya.Metrika({id:32735360,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/32735360" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->       	<!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
            <script src="js/lightslider.min.js"></script>
            <!-- Plugin JavaScript -->

            <script>
                $(document).ready(function() {
                    $("#content-slider").lightSlider({
                        loop: true,
                        keyPress: true
                    });
                    $('#image-gallery').lightSlider({
                        gallery: true,
                        item: 1,
                        thumbItem: 5,
                        slideMargin: 0,
                        speed: 500,
                        auto: false,
                        loop: true,
                        onSliderLoad: function() {
                            $('#image-gallery').removeClass('cS-hidden');
                        }
                    });
                });
            </script>
            <script>
                $(document).ready(function() {
                    $("#content-slider").lightSlider({
                        loop: true,
                        keyPress: true
                    });
                    $('#image-gallery2').lightSlider({
                        gallery: true,
                        item: 1,
                        thumbItem: 5,
                        slideMargin: 0,
                        speed: 500,
                        auto: true,
                        loop: true,
                        onSliderLoad: function() {
                            $('#image-gallery2').removeClass('cS-hidden');
                        }
                    });
                });
            </script>
            <script>
                $(document).ready(function() {
                    $("#content-slider").lightSlider({
                        loop: true,
                        keyPress: true
                    });
                    $('#image-gallery3').lightSlider({
                        gallery: true,
                        item: 1,
                        thumbItem: 5,
                        slideMargin: 0,
                        speed: 500,
                        auto: true,
                        loop: true,
                        onSliderLoad: function() {
                            $('#image-gallery3').removeClass('cS-hidden');
                        }
                    });
                });
            </script>            


    <!-- Plugin JavaScript -->
	    <script src="assets/smoothscroll/classList.min.js"></script>
    <script src="assets/smoothscroll/gumshoe.min.js"></script>
    <script>
        gumshoe.init();

    </script>
    <script src="assets/smoothscroll/smothscroll.min.js"></script>
    <script>
        smoothScroll.init();

    </script>
    <script src="assets/scrollReveal/scrollReveal.js"></script>
    <script>
        window.sr = new scrollReveal();

    </script>
    
    <div id="kmacb">
    <a title="Перезвонить Вам" href="#" modal="kmacb-form">
        <div class="kmacb-circle"></div>
        <div class="kmacb-circle-fill"></div>
        <div class="kmacb-img-circle"></div>
    </a>
</div>

<div id="kmacb-form" class="modal">
    <div class="modal-block">
        <div class="icon-close"></div>
        <div class="title">Понравилось это предложение?</div>
        <div class="content">
            <div class="padding">
                <p>Мы расскажем Вам все об этом товаре, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!</p>
               <form method="POST" action='http://z.samo-gon.org/success.php?a_aid=551d4a450ec00&a_bid=47eee28d&a_cid=70ab064d&vid=b5dd526981e600a5bdad4eb382c24e1e&user=3166383256&hash=2c75bcc3712d88f5c3e7c09e61df2566'>
                    <input type="text" name="name" value="" placeholder="Ваше имя" />
                    <input type="text" name="phone" value="" placeholder="Ваш номер телефона" /><br>
                    <input type="submit" value="ПЕРЕЗВОНИТЬ МНЕ" />
                    <input type="hidden" name="s1" class="price_field_s1" value="5900" />
                    <input type="hidden" name="s2" class="price_field_s2" value="0" />
                    <input type="hidden" name="s3" class="price_field_s3" value="5900" />
                </form> 
                <p class="bold">Оператор перезвонит Вам через 15-30 минут</p>
            </div>
        </div>
    </div>
</div>


   

            </body>

            </html>