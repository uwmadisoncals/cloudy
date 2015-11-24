<!-- footer START here -->
<div id="footer">
  <!-- container START here -->
  <div class="container">
    <p style="float:left;"><?php echo stripslashes(get_option('cloudy_copyrights_text')); ?></p><p style="float:right;">By: <a href="http://www.bluzgraphics.com" target="_blank">Bluz*</a></p>
  </div>
  <!-- container END here -->
</div>
<!-- footer END here -->
<?php wp_footer(); ?>
<?php $analytics_code = get_option('cloudy_google_anal'); 
if ( $analytics_code != "" ) { echo stripslashes($analytics_code); } ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>