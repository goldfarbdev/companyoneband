<div class="container">
    <footer>
        <p>&copy; Company One Band 2016</p>
        <p>Developed by <a href="http://goldfarbdev.com" target="_blank">Goldfarb Development</a></p>
        <p>TCAN Photography by <a href="https://www.facebook.com/Lucas-ONeil-Photography-699991136747506/" target="_blank">Lucas O'Neil Photography</a></p>
    </footer>
</div>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
<script>window.jQuery || document.write('<script src=""<?php site_url(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="<?php site_url(); ?>/js/vendor/bootstrap.min.js"></script>
<script src="https://player.vimeo.com/api/player.js"></script>
<script src="<?php site_url(); ?>/js/main.js"></script>

<script>
    $('.scroll').jscroll();

    $('.carousel').carousel({
        interval: 1000 * 10
    });
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-84672015-1', 'auto');
    ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
</html>