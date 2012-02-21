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
?>

<h3>Funktionen:</h3>
<p>
	Addon zum Ausgaben der generierten Grafiken anhand der Bildtypen des IMAGE_MANAGER.
</p>

<br />
<h3>Benutzung:</h3>
<p>
	Die Standard-Bildtypen sind bereits im Addon IMAGE_MANAGER erstellt und vorkonfiguriert.<br />
	Jeder Bildtyp kann beliebig weitere Effekte erhalten, die auf das aktuelle Bild angewendet werden koennen.<br />
	Zum einbinden des Bildes muss dazu der Bildtyp "fancyboxStyle[xyz] in der URL notiert werden...
</p>

<br />
<h3>Anwendungsbeispiel: Bild (jquery) und Galerie (jquery)</h3>
<p>
	a href="<?php echo $REX["FRONTEND_FILE"]; ?>?rex_img_type=fancybox_resize_{$rex_img_size_window}&rex_img_file={$rex_img}" rel="group-REX_ARTICLE_ID-REX_SLICE_ID" class="fancyboxStyle{$rex_img_js_style}"<br />
		&nbsp;&nbsp;&nbsp;&nbsp;img src="<?php echo $REX["FRONTEND_FILE"]; ?>?rex_img_type=fancybox_resize_{$rex_img_size}&rex_img_file={$rex_img}" title="{$rex_img_txt}" alt="{$rex_img}"<br />
	/a	
</p>