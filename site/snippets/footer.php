<footer><div class="wrapper">

  <?php snippet('menu') ?>

  <a href="#more"><i class="icon-plus"></i></a>

  <div class="more">
  	<?php echo $site->copyright()->kirbytext() ?>
  </div>

</div></footer>

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='assets/js/libs/jquery-1.11.0.min.js'>\x3C/script>")</script>

<!-- this is where we put our custom functions -->
<!-- don't forget to concatenate and minify if needed -->
<script src="assets/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
-->
    
</body>
</html>