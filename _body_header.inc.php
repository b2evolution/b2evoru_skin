<?php
/**
 * This is the BODY header include template.
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
	<div id="pageHeader">
      <div class="header">
        <div class="logo"><a href="http://www.b2evolution.net/"><img src="img/b2evo.gif" alt="b2evolution" width="211" height="64" /></a></div>
        <div class="top_header">

          <?php
// ---------------------------------- "Header" CONTAINER EMBEDDED HERE ------------------------------
		// Display container and contents:
			skin_container( NT_('Header'), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start' => '<div class="$wi_class$">',
					'block_end' => '</div>',
					'block_title_start' => '<h1>',
					'block_title_end' => '</h1>',
				) );
// -------------------------------------- END OF "Header" CONTAINER ---------------------------------
			?>
        </div>
      </div>
      <div class="PageTop">
        <table class="tabs" cellspacing="0">
          <tr>
            <td class="first"></td>

            <?php
		// ------------------------------- CUSTOM TABS INCLUDED HERE -----------------------------
			skin_include( '_custom_tabs.inc.php' );
		// ----------------------------------- END OF CUSTOM TABS --------------------------------
			
// ----------------------------------- "Page Top" CONTAINER EMBEDDED HERE --------------------------
      global $app_version;
      
      if(round($app_version) < 5 || (substr($app_version, 0,3) == '5.0'))
      {
        skin_container( NT_('Page Top'), array(
          'block_start'         => '',
          'block_end'           => '',
          'block_display_title' => false,
          'list_start'          => '',
          'list_end'            => '',
          'item_start'          => '<td class="option">',
          'item_end'            => '</td>',
          'item_selected_start' => '<td class="current">',
          'item_selected_end'   => '</td>',
        ) );
      }
      else
      {
        skin_widget( array(
          // CODE for the widget:
          'widget' => 'colls_list_public',
          // Optional display params
          'block_start' => ' ',
          'block_end' => '',
          'block_display_title' => false,
          'list_start' => '',
          'list_end' => '',
          'item_start' => '<td class="option">',
          'item_end' => '</td>',
          'item_selected_start' => '<td class="current">',
          'item_selected_end' => '</td>',
          'link_selected_class' => 'swhead_item swhead_item_selected',
          'link_default_class' => 'swhead_item ',
        ) );
      }
// --------------------------------------- END OF "Page Top" CONTAINER -----------------------------
			?>

            <td class="last"></td>
          </tr>
        </table>
      </div>
      <div class="top_menu">
        <ul>

          <?php
// -------------------------------------- "Menu" CONTAINER EMBEDDED HERE ---------------------------
            // Note: this container is designed to be a single <ul> list
            skin_container( NT_('Menu'), array(
                    'block_start'         => '',
                    'block_end'           => '',
                    'block_display_title' => false,
                    'list_start'          => '',
                    'list_end'            => '',
                    'item_start'          => '<li>',
                    'item_end'            => '</li>',
                ) );
// ------------------------------------------ END OF "Menu" CONTAINER -----------------------------

		// ----------------------------- CUSTOM MENU ITEMS INCLUDED HERE --------------------------
			skin_include( '_custom_menu_items.inc.php' );
		// --------------------------------- END OF CUSTOM MENU ITEMS -----------------------------
        ?>

        </ul>
      </div>
    </div>