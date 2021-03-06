<?php
/**
 * This is the BODY footer include template.
 *
 * For a quick explanation of b2evo 2.0 skins, please start here:
 * {@link http://manual.b2evolution.net/Skins_2.0}
 *
 * This is meant to be included in a page template.
 *
 * Russian b2evolution skin	ru.b2evo.net
 *
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );
?>

<!-- =================================== START OF FOOTER =================================== -->
<div class="copyright">

<?php

// Display a link to contact the owner of this blog (if owner accepts messages):
$Blog->contact_link( array(
		'before'      => '',
		'after'       => ' &bull; ',
		'text'   => T_('Contact'),
		'title'  => T_('Send a message to the owner of this blog...'),
	) );
	
// Display footer text (text can be edited in Blog Settings):
$Blog->footer_text( array(
		'before'      => '',
		'after'       => ' &bull; ',
	) );

?>

Powered by <a href="http://b2evolution.net/" title="b2evolution home" target="_blank">b2evolution</a>

<?php
// Display additional credits (see /conf/):
// If you can add your own credits without removing the defaults, you'll be very cool :))
// Please leave this at the bottom of the page to make sure your blog gets listed on b2evolution.net
credits( array(
		'list_start'  => ' &bull; ',
		'list_end'    => '',
		'separator'   => ' &bull; ',
		'item_start'  => ' ',
		'item_end'    => ' ',
	) );
?>

<p>Theme designed by Alex (sam2kb) <a href="http://b2evo.sonorth.com">Russian b2evolution</a></p>

</div>