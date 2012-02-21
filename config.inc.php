<?php

 /** 
 * FANCYBOX
 *
 * @author gilbert.seilheimer@contic.de
 *
 * @package redaxo4
 * @version svn:$Id$
 */

// AddOn-FANCYBOX

	//////////////////////////////////////////////////////////////////////////////////
	// CONFIG
	//////////////////////////////////////////////////////////////////////////////////

	// VARs
	$addon_name = "gs_fancybox";

	// Sprachdateien anhaengen
	if(TRUE == $REX['REDAXO'])
	{
		$I18N->appendFile($REX['INCLUDE_PATH'].'/addons/'.$addon_name.'/lang/');
	}
			
	$REX['ADDON']['rxid'][$addon_name] 			= '620';
	$REX['ADDON']['page'][$addon_name] 			= "fancybox";
	
	if(TRUE == $REX['REDAXO'])
	{
		$REX['ADDON']['name'][$addon_name] 		= $I18N->msg("addon_name");
	}
	
	// Recht um das AddOn ÃƒÆ’Ã‚Â¼berhaupt einsehen zu kÃƒÆ’Ã‚Â¶nnen
	$REX['ADDON']['perm'][$addon_name] 			= 'fancybox[1]';
	
	// Credits
	$REX['ADDON']['version'][$addon_name] 		= '1.3.4';
	$REX['ADDON']['author'][$addon_name] 		= 'Gilbert Seilheimer';
	$REX['ADDON']['supportpage'][$addon_name] 	= 'forum.redaxo.org';
	
	// *************
	$REX['PERM'][] = 'fancybox[1]';
	$REX['PERM'][] = 'fancybox[2]';
	
	// FÃƒÆ’Ã‚Â¼r Benutzervewaltung
	$REX['EXTPERM'][] = 'fancybox[3]';

	//////////////////////////////////////////////////////////////////////////////////
	// SUBPAGES
	//////////////////////////////////////////////////////////////////////////////////
	
	if(TRUE == $REX['REDAXO'])
	{
		$REX['ADDON'][$addon_name]['SUBPAGES'] = 
		array(
			  array('readme', $I18N->msg('addon_subpage_readme')),
			  array('modul_image', $I18N->msg('addon_subpage_modul_image')),
			  array('modul_galery', $I18N->msg('addon_subpage_modul_galery')),
		);
	}
?>