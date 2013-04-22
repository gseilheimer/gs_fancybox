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
 * @link http://fancybox.net/
 * @version 1.3.4
 */

// AddOn-FANCYBOX

	//////////////////////////////////////////////////////////////////////////////////
	// CONFIG
	//////////////////////////////////////////////////////////////////////////////////

   // VARs
   $page = "gs_fancybox";
   $page_root = $REX['INCLUDE_PATH'].'/addons/'.$page.'/';

   // VARs - ADDON
   $REX['ADDON']['name'][$page]          = 'Fancybox';
   $REX['ADDON']['rxid'][$page]          = '620';                                                       $REX['ADDON']['page'][$page]          = $page;
   $REX['ADDON']['version'][$page]       = '1.0.5';
   $REX['ADDON']['author'][$page]        = 'Gilbert Seilheimer';
   $REX['ADDON']['supportpage'][$page]   = 'forum.redaxo.org';
   $REX['ADDON']['perm'][$page]          = $page.'[]';
   $REX['PERM'][]                        = $page.'[]';


   if( $REX['REDAXO'] && $REX['USER'] )
   {
      //////////////////////////////////////////////////////////////////////////////////
      // SUBPAGES
      //////////////////////////////////////////////////////////////////////////////////

      // Sprachdateien anhaengen
      $I18N->appendFile($REX['INCLUDE_PATH'].'/addons/'.$page.'/lang/');

      $REX['ADDON'][$page]['SUBPAGES'] =
         //        subpage,         label,                                       perm,   params, attributes
         array(
            array('',               $I18N->msg($page.'_subpage_index'),           '',     '',     ''),
            array('readme',         $I18N->msg($page.'_subpage_readme'),          '',     '',     ''),
            array('modul_image',    $I18N->msg($page.'_subpage_modul_image'),     '',     '',     ''),
            array('modul_galery',   $I18N->msg($page.'_subpage_modul_galery'),    '',     '',     ''),
         );

      //////////////////////////////////////////////////////////////////////////////////
      // INCLUDES
      //////////////////////////////////////////////////////////////////////////////////
      #require_once $addon_root.'.....inc.php';

   }
   else
   {

      //////////////////////////////////////////////////////////////////////////////////
      // FUNCTIONS
      //////////////////////////////////////////////////////////////////////////////////

      // sool
      /*
      function gs_fancybox_header( $params )
      {
         global $REX;

         if( FALSE == $REX["REDAXO"] )
         {
            $params['subject'] .= "\n  ".'<!-- GS:JQUERY-START -->';
            $params['subject'] .= "\n  ".'<script type="text/javascript" src="./files/addons/gs_fancybox/jquery-1.9.1.min.js"></script>';
            $params['subject'] .= "\n  ".'<!-- GS:JQUERY-ENDE -->';
            $params['subject'] .= "\n  ".'<!-- GS:FANCYBOX-START -->';
            $params['subject'] .= "\n  ".'<link rel="stylesheet" type="text/css" href="./files/addons/gs_fancybox/jquery.fancybox-1.3.4.css" media="screen, projection, print" />';
            $params['subject'] .= "\n  ".'<!--[if IE 6]><link rel="stylesheet" type="text/css" href="../files/addons/gs_fancybox/jquery.fancybox-1.3.4_ie6.css" media="screen" /><![endif]-->';
            $params['subject'] .= "\n  ".'<!--[if lte IE 8]><link href="./files/addons/gs_fancybox/jquery.fancybox-1.3.4_ie6_ie7_ie8.css" media="screen" rel="stylesheet" type="text/css" /><![endif]-->';
            $params['subject'] .= "\n  ".'<script type="text/javascript" src="./files/addons/gs_fancybox/jquery.fancybox-1.3.4.js"></script>';
            $params['subject'] .= "\n  ".'<script type="text/javascript" src="./files/addons/gs_fancybox/jquery.fancybox-1.3.4.pack.js"></script>';
            $params['subject'] .= "\n  ".'<script type="text/javascript" src="./files/addons/gs_fancybox/jquery.easing-1.3.pack.js"></script>';
            $params['subject'] .= "\n  ".'<script type="text/javascript" src="./files/addons/gs_fancybox/jquery.mousewheel-3.0.4.pack.js"></script>';
            $params['subject'] .= "\n  ".'<script type="text/javascript" src="./files/addons/gs_fancybox/jquery.easyslider-1.7.7.js"></script>';
            $params['subject'] .= "\n  ".'<!-- GS:FANCYBOX-ENDE -->';
         }
         return str_replace('<!-- GS:FANCYBOX-JS-TEMP-START -->', '<!-- GS:FANCYBOX-JS-TEMP-START -->' . $params['subject'], $params['subject']);
      }
      rex_register_extension('OUTPUT_FILTER', 'gs_fancybox_header');
      */
   }

?>