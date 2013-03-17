<?php

/**
 * FANCYBOX
 *
 * @author gilbert.seilheimer[at]contic[dot]de Gilbert Seilheimer
 * @author <a href="http://www.contic.de">www.contic.de</a>
 *
 * @package redaxo4
 * @version svn:$Id$
 */
/**
 * fancybox Lib
 * @link https://github.com/calvinlough/sqlbuddy
 * @version 1.3.4
 */

// AddOn-FANCYBOX

    //////////////////////////////////////////////////////////////////////////////////
    // CONFIG
    //////////////////////////////////////////////////////////////////////////////////

    // VARs
    #$page = "gs_fancybox";

    // GET PARAMS
    ////////////////////////////////////////////////////////////////////////////////
    $page 	    = rex_request('page', 'string');
    $subpage 	= rex_request('subpage', 'string');
    $func    	= rex_request('func', 'string');
    #$oid     	= rex_request('oid', 'int');

    //////////////////////////////////////////////////////////////////////////////////
    // SUBPAGES
    //////////////////////////////////////////////////////////////////////////////////

?>

    <div class="rex-addon-output">
        <h2 class="rex-hl2"><?php echo $I18N->msg('addon_subpage_modul_image_txt_01'); ?></h2>

        <div class="rex-addon-content">
            <p class="rex-code">
            <code><span style="color: #000000">
            <?php
                echo $I18N->msg('addon_subpage_modul_image_txt_01_01') . "<br />";
                echo $I18N->msg('addon_subpage_modul_image_txt_01_02') . "<br />";
            ?>
            </span></code>
            </p>
        </div>
    </div>