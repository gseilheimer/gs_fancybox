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
        <h2 class="rex-hl2"><?php echo $I18N->msg('addon_name'); ?></h2>

        <div class="rex-addon-content">
            <p class="rex-tx1">Hier erfolgt die Konfiguration per TEXT-EDITOR:</p>
        </div>

        <div id="rex-addon-editmode" class="rex-form">
        <form action="index.php?page=<?php echo "{$page}&subpage={$subpage}&func={$func}"; ?>" method="post">

        <fieldset class="rex-form-col-1">

            <div class="rex-form-wrapper">

                <div class="rex-form-row">
                    <p class="rex-form-col-a rex-form-text">
                        <label for="settings">Settings</label>
                        <textarea name="config" id="config" cols="30" rows="20">
                        <?php
                            echo stripslashes($config_file_js);
                        ?>
                        </textarea>
                    </p>
                </div>

                <div class="rex-form-row">
                    <p class="rex-form-col-a rex-form-submit">
                         <input class="rex-form-submit" type="submit" name="btn_save" value="<?php echo $I18N->msg('phpmailer_save'); ?>" />
                         <input class="rex-form-submit" type="reset" name="btn_reset" value="<?php echo $I18N->msg('phpmailer_reset'); ?>" onclick="return confirm('<?php echo $I18N->msg('phpmailer_reset_info'); ?>');"/>
                    </p>
                </div>

            </div>

         </fieldset>
        </form>
        </div>

    </div>