<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/* --------------------------------------------------------------------------------------------------------------------------------------- */
 function adminForm_dsgvoyoutube() {
	 

?>
<div class="wrap">
<h2><?php _e( 'DSGVO Youtube', 'dsgvo-youtube' ); ?></h2>
<p><?php _e( 'This are the instruction of how to add your youtube videos safe and according to the GDPR regulations.', 'dsgvo-youtube' ); ?></p>
<br /><br />
<h3><?php _e( 'Add your Videos directly (Not DSGVO / GDPR Correct)', 'dsgvo-youtube' ); ?></h3>
<p><?php _e( 'With this Code you can add your Videos directly into Wordpress Pages or Posts. But be aware thats not the GDPR / dsgvo correct way', 'dsgvo-youtube' ); ?></p>
<strong><?php _e( 'Use this Code:', 'dsgvo-youtube' ); ?></strong> <p  style="color:red;">[dsgvo-youtube url=&quot;https://www.youtube.com/watch?v=fKkNvDtauI0&quot;][/dsgvo-youtube]</p>	
<br /><br />
<h3><?php _e( 'The GDPR Correct Way to add your Video ( DSGVO / GDPR Correct)', 'dsgvo-youtube' ); ?></h3>
<p><?php _e( 'Use this Code and your Video is GDPR correct in your WordPress Pages or Posts', 'dsgvo-youtube' ); ?></p>
<p><?php _e( 'Create a images and add it into your wordpress library. then use the following code - but replace the url with your image url', 'dsgvo-youtube' ); ?></p>	
<strong><?php _e( 'Use this Code:', 'dsgvo-youtube' ); ?></strong> <p  style="color:red;">[dsgvo-youtube url=&quot;https://www.youtube.com/watch?v=CX11yw6YL1w&quot; images=&quot;https://www.chefblogger.me/wp-content/uploads/2015/10/I-can-do-it.jpg&quot; alt=&quot;my summer video&quot;][/dsgvo-youtube]</p>	

<h3>New</h3>
<p><?php _e( 'Now Alt Tag avaiable', 'dsgvo-youtube' ); ?></p>

<?php
  

	 
  
  
 showForm_dsgvoyoutube();
 }
/* --------------------------------------------------------------------------------------------------------------------------------------- */ 
 


/* --------------------------------------------------------------------------------------------------------------------------------------- */
function showForm_dsgvoyoutube() {
?>
  
 
  <div class="wrap">
 
  <h3><?php _e( 'Infos', 'dsgvo-youtube' ); ?></h3>
  <p><?php _e( 'This is the DSGVO Youtube WordPress Plugin - created by Eric-Oliver M&auml;chler', 'dsgvo-youtube' ); ?> <a href="http://www.chefblogger.me" target="_blank">www.chefblogger.me</a></p>
  
  
  </div>
  <?php
 }
 /* --------------------------------------------------------------------------------------------------------------------------------------- */
?>
