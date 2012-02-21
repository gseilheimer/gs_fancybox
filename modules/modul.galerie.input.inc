<?php
/**
  *=======================================================
  * Modul: Galerie (fancybox)
  * Bereich: Eingabe
  * Version: 1.0.9
  * Redaxo Version: 4
  * Redaxo AddOns: Image Resize & Fancybox
  * Erstellung: Eilige-EDV, G. Seilheimer
  * www.eilige-edv.de
  * Datum: 11-2009
  *=======================================================
  */
 
	if(OOAddon::isAvailable('image_resize') && OOAddon::isAvailable('fancybox')) 
	{
?>		
		<style type="text/css">
		<!--
			/* start - table */
			table {
				width: 680px;
				border-collapse: collapse;
				margin: 10px 20px;		
			}
			tr { background: #FFF; }
			
			th, td {
				text-align: left;	
				vertical-align:top;		
				border-width: 1px;
			  	border-style: solid;
			}
			th {
				width: 210px;
				color: #555;
				background: #F0FBFF; 
				padding: .8em 1em;	
			  	border-color: #D8EBF5 #D8EBF5 #B9DBEE #D8EBF5;	
			}
			td {
				width: 210px;
				border-color: #EFEFEF;	
				padding: .7em 1em;	
			}	
			/* end - table */
		-->
		</style>

		<table title="Galerie (jquery) | by G.Seilheimer">
		    <tr>
		        <th colspan="2">
		            <select name="VALUE[16]" id="VALUE[16]">
		                <?php
		                foreach (array("h1", "h2", "h3", "h4", "h5", "h6") as $value) {
		                    echo '<option value="'.$value.'" ';
		                    
		                    if ("REX_VALUE[16]" == "$value") {
		                        echo 'selected="selected" ';
		                    }
		                    
		                    echo '>'.$value.'</option>';
		                }
		                ?>
		            </select>
		            &nbsp;|&nbsp;
		            <input type="text" name="VALUE[15]" value="REX_VALUE[15]" /></th>
		        <th>
		        	Grösse | Überschrift
		        </th>
		    </tr>
		    <tr>		    
		        <td colspan="2">
		        	REX_MEDIALIST_BUTTON[1]
		        </td>
				<td>
					Auswahl der Bilder
				</td>
			</tr>
			<tr>
				<th>
					BASICS
				</th>		    	
		        <th>
		            Auswahl/Parameter
		        </th>
				<th>
					Beschreibung/Hilfe
				</th>				
		    </tr>			
		    <tr>
		    	<td>
		    	</td>
		        <td>
		            <select name="VALUE[2]" id="VALUE[2]">
		                <?php
		                foreach (array("50", "75", "100", "150", "200", "250", "300", "450", "600") as $value) {
		                    echo '<option value="'.$value.'" ';
		                    
		                    if ("REX_VALUE[2]" == "$value") {
		                        echo 'selected="selected" ';
		                    }
		                    
		                    echo '>'.$value.'</option>';
		                }
		                ?>
		            </select>		            
		        </td>
		        <td>
					Groesse in Pixel [Preview]
		        </td>
		    </tr>
		    <tr>
		    	<td>
		    	</td>		    
		        <td>
		            <select name="VALUE[4]" id="VALUE[4]">
		                <?php
		                foreach (array("Brand-Off", "Brand-On") as $value) {
		                    echo '<option value="'.$value.'" ';
		                    
		                    if ("REX_VALUE[4]" == "$value") {
		                        echo 'selected="selected" ';
		                    }
		                    
		                    echo '>'.$value.'</option>';
		                }
		                ?>
		            </select>		            
		        </td>
		        <td>
					Branding
		        </td>
			</tr>
			<tr>
				<th>
					ALT-TITLE</th>		    	
		        <th>
		            Auswahl/Parameter
		        </th>
				<th>
					Beschreibung/Hilfe
				</th>				
		    </tr>
		    <tr>
		    	<td>
		    	</td>		    
		        <td>
		            <select name="VALUE[6]" id="VALUE[6]">
		                <?php
		                foreach (array("Alt-Title-On", "Alt-Title-Off") as $value) {
		                    echo '<option value="'.$value.'" ';
		                    
		                    if ("REX_VALUE[6]" == "$value") {
		                        echo 'selected="selected" ';
		                    }
		                    
		                    echo '>'.$value.'</option>';
		                }
		                ?>
		            </select>		        	
		        </td>
		        <td>
										Beschreibung (On/Off)
		        </td>
		    </tr>
		    <tr>
		    	<td>
		    	</td>
		    	<td>
		    		<input type="text" name="VALUE[7]" value="REX_VALUE[7]" size="30" class="inp100"/>
		    	</td>
		        <td>
		            Beschreibung (Content)
		    	</td>
		    </tr>		    
		    <tr>
		        <td>
		        </td>
		        <td>
		            <select name="VALUE[8]" id="VALUE[8]">
		                <?php
		                foreach (array("Alt-Title-Top", "Alt-Title-Bottom") as $value) {
		                    echo '<option value="'.$value.'" ';
		                    
		                    if ("REX_VALUE[8]" == "$value") {
		                        echo 'selected="selected" ';
		                    }
		                    
		                    echo '>'.$value.'</option>';
		                }
		                ?>
		            </select>		        	
		        </td>
		        <td>
					Beschreibung (Up/Down)
		        </td>
		    </tr>		  
  		    <tr>
		        <th>
		        	JQUERY + FANCYBOX
		        </th>
		        <th>
		            &nbsp;Auswahl/Parameter
		        </th>
		        <th>
					&nbsp;Beschreibung/Hilfe
				</th>
		    </tr>
		    <tr>
		    	<td>
		    	</td>
		    	<td>
		            <select name="VALUE[11]" id="VALUE[11]">
		                <?php
		                foreach (array("JS-On", "JS-Off") as $value) {
		                    echo '<option value="'.$value.'" ';
		                    
		                    if ("REX_VALUE[11]" == "$value") {
		                        echo 'selected="selected" ';
		                    }
		                    
		                    echo '>'.$value.'</option>';
		                }
		                ?>
		            </select></td>
		    	<td>
					JQuery (JS-On/JS-Off)</td>
		    </tr>
		    <tr>
		    	<td>
		    	</td>		    
		        <td>
		            <select name="VALUE[12]" id="VALUE[12]">
		                <?php
		                foreach (array("Default", "Special-1", "Special-2", "Inline-1") as $value) {
		                    echo '<option value="'.$value.'" ';
		                    
		                    if ("REX_VALUE[12]" == "$value") {
		                        echo 'selected="selected" ';
		                    }
		                    
		                    echo '>'.$value.'</option>';
		                }
		                ?>
		            </select>		            
		        </td>
		        <td>
					Style [FancyBox]
		        </td>
		    </tr>
		    <tr>
		    	<td>
		    	</td>		    
		        <td>
		            <select name="VALUE[13]" id="VALUE[13]">
		                <?php
		                foreach (array("200", "250", "300", "450", "600", "800", "950", "1024") as $value) {
		                    echo '<option value="'.$value.'" ';
		                    
		                    if ("REX_VALUE[13]" == "$value") {
		                        echo 'selected="selected" ';
		                    }
		                    
		                    echo '>'.$value.'</option>';
		                }
		                ?>
		            </select>		            
		        </td>
		        <td>
					Groesse in Pixel [FancyBox]
		        </td>
		    </tr>			    
			<tr>
				<td colspan="3"><a href="http://www.gseilheimer.de" target="_blank">by G.Seilheimer</a></td>
			</tr>
		</table>
<?php
	} 
	else 
	{
		echo rex_warning('Dieses Modul benÃ¶tigt das "image_resize" Addon & das "fancybox" Addon!');
	}
?>
