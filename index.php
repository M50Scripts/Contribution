<?php
/***************************************************************
* Script Name: wikiGenerator
* Type: PHP & HTML
* Written by: iM50i Instinct
* Copyright: (C) M50 Brothers
* Website: "coming soon" with the release of wikiGenerator 2.0
* Release-type: Non-distribution, Common License, 3.0
* Latest Version: 1.0
* Author: M50
* Developer: iM50i Instinct
* Distributor: M50 Distribution Cooperation
*
* NOTE:
* DO NOT REMOVE THE COPYRIGHT FOOTER AS THIS WILL BE A
* ILLEGAL SCRIPT RUNNING ON YOUR SERVER, PLEASE PURCHASE
* A LICENSE FROM M50BROTHERS.CO.UK/WIKI/DOWNLOAD WEBSITE
* FAILING TO PURCHASE A LICENSE COULD SERIOUSLY VIOLATE
* OUR TERMS OF USE & CONDITIONS, IT WILL BE REPORTED TO
* THE FEDERAL LAW OF DISTRICT ENFORCEMENTS COOPERATIONS.
* M50 HAS THE PLEASURE TO REPORT ANY PUPILS WHO FAILS TO
* FOLLOW THE CONDITIONS OF ANY M50 PHP SCRIPTS, A VALID
* LICENSE NEEDS TO BE PURCHASED BEFORE REMOVING THE FOOTER
* LINE AND REPLACING YOUR OWN. OPEN UP THE "LICENSE.txt" FILE
* (LOCATED IN /FILES/) TO READ THE LICENSE & CONDITIONS
* THAT APPLIES TO THIS PHP PROJECT OF wikiGenerator 1.0
***************************************************************/

// attaching the security files and complete configurations
// it is important that you do not remove those files or renaming
// any of them at all.

// require footer once
require_once('inc/footer.php');

// require config once
require_once('inc/config.php');

// require fields once
require_once('inc/form_inc.php');

echo'<!doctype html>
<html lang="'.$settings['DOCUMENT_LANGUAGE'].'">
<head>
<meta charset="'.$settings['DOCUMENT_CHARSET'].'">
<meta name="generator" content="wikiGenerator 1.0">
<meta name="robots" content="'.$settings['MR_ROBOTS'].'"><meta name="google" content="notranslate">
<meta name="keywords" content="'.$settings['keywords'].'">
<meta name="description" content="'.$settings['description'].'">
<title>'.$settings['SCRIPT_TITLE_NAME'].'</title>
<script type="text/javascript" src="'.$settings['GENERATOR_SCRIPT_JS'].'"></script>
<link rel="stylesheet" href="'.$settings['stylsheet'].'">
<link rel="shortcut icon" href="'.$settings['FAVICON'].'">
</head>';
?>
<?php
echo'
<body>
<div class="wikiGenerator_title">
	'.$wikiGenerator['MAIN_TITLE_NAME'].'
</div>';
?><br><?php
/*
* the menu buttons has been classified to meet the appropriate match and preferences for the stylesheet
* take the time to edit this buttons in the config.php file (section === "MENU BUTTONS AREA")
* you can also edit this stylesheet for the "menu_buttons_area" in the "buttons.css" file located in the "/FILES/" folder
*/
?>

<div id="menuBarzz">
	<div class="menuBarz">
		<?php
			echo''.$wikiGenerator['SPITTING_BARZZ'].'';
		?>
    	<div class="extras">
			<?php
            	echo''.$wikiGenerator['EXTRA_BARZZ_FLOATRIGHT'].''
			;?>
    	</div>
    </div>
</div>
<br><br>

<div class="bodyContainer">

	<div class="wikiInfo">
    
    	<?php echo''.$wikiGenerator['GREETINGS'].'';?>
        
    </div>

</div>

<br /><br /><br />
<div class="wikiContainer">
<?php
	echo'
	<form action="'.$form['GENERATE_WIKI'].'" method="'.$form['METHOD_POST'].'" name="'.$form['FORM_NAME'].'" id="'.$form['FORM_ID'].'">
	<script type="text/javascript" src="jscolor.js"></script>
	<div class="title_settings">
	YOUR TITLE SETTINGS
	</div>
	<br />
	<label>Name your Title:</label><br />
	<input type="text" name="wikititle" autocomplete="off" onPaste="return false;" '.$form['REQUIRED'].'>
	<br /><br />
	<label>Select a Text Style Decoration:</label><br />
	<select name="first_textstyle" '.$form['REQUIRED'].'><option value="" selected="SELECTED"></option><option value="Verdana, Geneva, sans-serif" style="font-family: Verdana, Geneva, sans-serif;">Verdana, Geneva, sans-serif</option><option value="Georgia, Times New Roman, Times, serif" style="font-family: Georgia, Times New Roman, Times, serif;">Georgia, Times New Roman, Times, serif</option><option value="Courier New, Courier, monospace" style="font-family: Courier New, Courier, monospace;">Courier New, Courier, monospace</option><option value="Arial, Helvetica, sans-serif" style="font-family: Arial, Helvetica, sans-serif;">Arial, Helvetica, sans-serif</option><option value="Tahoma, Geneva, sans-serif" style="font-family: Tahoma, Geneva, sans-serif;">Tahoma, Geneva, sans-serif</option><option value="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;">Trebuchet MS, Arial, Helvetica, sans-serif</option><option value="Arial Black, Gadget, sans-serif" style="font-family: Arial Black, Gadget, sans-serif;">Arial Black, Gadget, sans-serif</option><option value="Times New Roman, Times, serif" style="font-family: Times New Roman, Times, serif;">Times New Roman, Times, serif</option><option value="Palatino Linotype, Book Antiqua, Palatino, serif" style="font-family: Palatino Linotype, Book Antiqua, Palatino, serif;">Palatino Linotype, Book Antiqua, Palatino, serif</option><option value="Lucida Sans Unicode, Lucida Grande, sans-serif" style="font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;">Lucida Sans Unicode, Lucida Grande, sans-serif</option><option value="MS Serif, New York, serif" style="font-family: MS Serif, New York, serif;">MS Serif, New York, serif</option><option value="Lucida Console, Monaco, monospace" style="font-family: Lucida Console, Monaco, monospace;">Lucida Console, Monaco, monospace</option><option value="Comic Sans MS, cursive" style="font-family: Comic Sans MS, cursive;">Comic Sans MS, cursive</option><option value="Levenim MT" style="font-family: Levenim MT;">Levenim MT</option><option value="Miriam Fixed" style="font-family: Miriam Fixed;">Miriam Fixed</option><option value="Aparajita" style="font-family: Aparajita;">Aparajita</option><option value="Arabic Typesetting" style="font-family: Arabic Typesetting;">Arabic Typesetting</option><option value="Arial Narrow" style="font-family: Arial Narrow;">Arial Narrow</option><option value="Arial Rounded MT Bold" style="font-family: Arial Rounded MT Bold;">Arial Rounded MT Bold</option><option value="Batang" style="font-family: Batang;">Batang</option><option value="Gungsuh" style="font-family: Gungsuh;">Gungsuh</option><option value="GungsuhChe" style="font-family: GungsuhChe;">GungsuhChe</option><option value="Haettenschweiler" style="font-family: Haettenschweiler;">Haettenschweiler</option><option value="Impact" style="font-family: Impact;">Impact</option><option value="Showcard Gothic" style="font-family: Showcard Gothic;">Showcard Gothic</option><option value="Snap ITC" style="font-family: Snap ITC;">Snap ITC</option><option value="High Tower Text" style="font-family: High Tower Text;">High Tower Text</option></select>';
	echo'
	<br /><br />
	<label>Select a Text Size:</label><br />
	<select name="first_textsize" '.$form['REQUIRED'].'><option value="" selected="SELECTED"></option><option value="10" style="font-size: 10px;">10</option><option value="11" style="font-size: 11px;">11</option><option value="12" style="font-size: 12px;">12</option><option value="13" style="font-size: 13px;">13</option><option value="14" style="font-size: 14px;">14</option><option value="15" style="font-size: 15px;">15</option><option value="16" style="font-size: 16px;">16</option><option value="17" style="font-size: 17px;">17</option><option value="18" style="font-size: 18px;">18</option><option value="19" style="font-size: 19px;">19</option><option value="20" style="font-size: 20px;">20</option><option value="21" style="font-size: 21px;">21</option><option value="22" style="font-size: 22px;">22</option><option value="23" style="font-size: 23px;">23</option><option value="24" style="font-size: 24px;">24</option><option value="25" style="font-size: 25px;">25</option><option value="26" style="font-size: 26px;">26</option><option value="27" style="font-size: 27px;">27</option><option value="28" style="font-size: 28px;">28</option></select>
	<br /><br />';
	// dayum this is good!
	echo'
	<label>Select a Text Color:</label><br />
	<input class="color" name="first_textcolor" value="FFFFFF" '.$form['REQUIRED'].'>
	<br /><br />
	<label>Choose a Alignment for your Title:</label><br />
	<select name="first_alignment" '.$form['REQUIRED'].'><option value="" selected="SELECTED"></option><option value="justify" style="text-align: justify;">Justify</option><option value="center" style="text-align: center;">Center</option><option value="left" style="text-align: left;">Left</option><option value="right" style="text-align: right;">Right</option></select>
	<br /><br /><hr /><br />
	<div class="body_settings">
	YOUR BODY SETTINGS
	</div>
	<br />
	<label>Your Article Information&#39;s:</label><br />
	You can place HTML codes here, if you like :) If you need help on generating a HTML code, please visit: <a href="http://www.m50brothers.co.uk/html" target="_blank">M50&#39;s HTML Code Generator</a><br /><br />
	<textarea name="bodyarticle" '.$form['REQUIRED'].'></textarea>
	<br /><br />
	Now you can customize the above texts, use the same functions below (like the one in the "TITLE SETTINGS" above):<br /><br />
	<label>Text Style Decoration:</label><br />
	<select name="bodytextstyle" '.$form['REQUIRED'].'><option value="" selected="SELECTED"></option><option value="Verdana, Geneva, sans-serif" style="font-family: Verdana, Geneva, sans-serif;">Verdana, Geneva, sans-serif</option><option value="Georgia, Times New Roman, Times, serif" style="font-family: Georgia, Times New Roman, Times, serif;">Georgia, Times New Roman, Times, serif</option><option value="Courier New, Courier, monospace" style="font-family: Courier New, Courier, monospace;">Courier New, Courier, monospace</option><option value="Arial, Helvetica, sans-serif" style="font-family: Arial, Helvetica, sans-serif;">Arial, Helvetica, sans-serif</option><option value="Tahoma, Geneva, sans-serif" style="font-family: Tahoma, Geneva, sans-serif;">Tahoma, Geneva, sans-serif</option><option value="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;">Trebuchet MS, Arial, Helvetica, sans-serif</option><option value="Arial Black, Gadget, sans-serif" style="font-family: Arial Black, Gadget, sans-serif;">Arial Black, Gadget, sans-serif</option><option value="Times New Roman, Times, serif" style="font-family: Times New Roman, Times, serif;">Times New Roman, Times, serif</option><option value="Palatino Linotype, Book Antiqua, Palatino, serif" style="font-family: Palatino Linotype, Book Antiqua, Palatino, serif;">Palatino Linotype, Book Antiqua, Palatino, serif</option><option value="Lucida Sans Unicode, Lucida Grande, sans-serif" style="font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;">Lucida Sans Unicode, Lucida Grande, sans-serif</option><option value="MS Serif, New York, serif" style="font-family: MS Serif, New York, serif;">MS Serif, New York, serif</option><option value="Lucida Console, Monaco, monospace" style="font-family: Lucida Console, Monaco, monospace;">Lucida Console, Monaco, monospace</option><option value="Comic Sans MS, cursive" style="font-family: Comic Sans MS, cursive;">Comic Sans MS, cursive</option><option value="Levenim MT" style="font-family: Levenim MT;">Levenim MT</option><option value="Miriam Fixed" style="font-family: Miriam Fixed;">Miriam Fixed</option><option value="Aparajita" style="font-family: Aparajita;">Aparajita</option><option value="Arabic Typesetting" style="font-family: Arabic Typesetting;">Arabic Typesetting</option><option value="Arial Narrow" style="font-family: Arial Narrow;">Arial Narrow</option><option value="Arial Rounded MT Bold" style="font-family: Arial Rounded MT Bold;">Arial Rounded MT Bold</option><option value="Batang" style="font-family: Batang;">Batang</option><option value="Gungsuh" style="font-family: Gungsuh;">Gungsuh</option><option value="GungsuhChe" style="font-family: GungsuhChe;">GungsuhChe</option><option value="Haettenschweiler" style="font-family: Haettenschweiler;">Haettenschweiler</option><option value="Impact" style="font-family: Impact;">Impact</option><option value="Showcard Gothic" style="font-family: Showcard Gothic;">Showcard Gothic</option><option value="Snap ITC" style="font-family: Snap ITC;">Snap ITC</option><option value="High Tower Text" style="font-family: High Tower Text;">High Tower Text</option></select>';
echo'<br /><br />
	<label>Text Size:</label><br />
	<select name="bodytextsize" '.$form['REQUIRED'].'><option value="" selected="SELECTED"></option><option value="10" style="font-size: 10px;">10</option><option value="11" style="font-size: 11px;">11</option><option value="12" style="font-size: 12px;">12</option><option value="13" style="font-size: 13px;">13</option><option value="14" style="font-size: 14px;">14</option><option value="15" style="font-size: 15px;">15</option><option value="16" style="font-size: 16px;">16</option><option value="17" style="font-size: 17px;">17</option><option value="18" style="font-size: 18px;">18</option><option value="19" style="font-size: 19px;">19</option><option value="20" style="font-size: 20px;">20</option><option value="21" style="font-size: 21px;">21</option><option value="22" style="font-size: 22px;">22</option><option value="23" style="font-size: 23px;">23</option><option value="24" style="font-size: 24px;">24</option><option value="25" style="font-size: 25px;">25</option><option value="26" style="font-size: 26px;">26</option><option value="27" style="font-size: 27px;">27</option><option value="28" style="font-size: 28px;">28</option></select>';
echo'<br /><br />
	<label>Colour:</label><br />
	<input class="color" name="bodycolor" value="FFFFFF" '.$form['REQUIRED'].'>';
echo'<br /><br />
	<label>Alignment:</label><br />
	<select name="bodyalignment" '.$form['REQUIRED'].'><option value="" selected="SELECTED"></option><option value="justify" style="text-align: justify;">Justify</option><option value="center" style="text-align: center;">Center</option><option value="left" style="text-align: left;">Left</option><option value="right" style="text-align: right;">Right</option></select>';
echo'<br /><br />
	<input type="submit" id="submit" value="'.$form['SUBMIT'].'" style="font-size: 40px; width: 50%; float: '.$footer['SUBMIT_BUTTON_ALIGNMENT'].';">
';
echo'</form>';
?>
</div>

<br><br><br><hr /><br>
<div id="footer">
<!--
***********************************************************************************************************************************************************
-->
<?php
	echo"".$footer['CUSTOM_FOOTER_ALIGNLEFT']." <a href='".$footer['CUSTOM_FOOTER_LINK0']."' title='".$footer['CUSTOM_FOOTER_TITLE']."'>".$footer['CUSTOM_FOOTER_TITLE']."</a> ".$footer['CUSTOM_FOOTER_LINK1']." ".$footer['CUSTOM_FOOTER_ALIGNEND'].""
;?>
<!--
***********************************************************************************************************************************************************
-->
<!--
***********************************************************************************************************************************************************
-->
<?php
	echo "".$footer['FOOTER_FLOATRIGHT']." ".$footer['POWERED_BY_DEFINED']." ".$footer['wikiGenerator_LINK']." ".$footer['wikiGenerator']." ".$footer['wikiGenerator_LINKEND']." ".$footer['VERSION_STRONG']." ".$footer['VERSION_TYPE']." ".$footer['VERSION_STRONG_END']."".$footer['FOOTER_FLOATRIGHT_END'].""
;?>
<!--
***********************************************************************************************************************************************************
-->
</div>
</body>
</html>
