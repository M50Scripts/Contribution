<?php
/***************************************************************
* Script Name: wikiGenerator
* Type: PHP & HTML
* Written by: iM50i Instinct
* Copyright: (C) M50 Brothers
* Website: http://www.m50brothers.co.uk/
* Release-type: Non-distribution, Common License, 3.0
* Latest Version: 1.0
* Version Website: m50brothers.co.uk/wiki/download
* Author: M50
* Developer: iM50i Instinct
* Distributor: M50 Distribution Cooperation
***************************************************************/


/**************************************************************************************/

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
<meta charset="'.$settings['DOCUMENT_CHARSET'].'">';
// dont't index these MR BOTS for this generator file
// consider this as a WARNING
echo'
<meta name="robots" content="'.$settings['no_index'].'"><meta name="google" content="notranslate">
<title>'.$settings['SUCCESS'].'</title>
<script type="text/javascript" src="'.$settings['GENERATOR_SCRIPT_JS'].'"></script>
<link rel="stylesheet" href="files/styles.css">';
?>
<script type="text/javascript">
var GeneratorType = generator();
(function(generator){window.generator(m50_gen),document.clear();Date},document.anchors.generators);
(function(m50){var generator = true});window.m50generator(50);var genpreload = genpreload || {};
doc.generator((true)), give_nickname_priority = 1
document.close(generator);document.clear(generator);document.characterSet(utf-8);document.bgColor(FFFFFF);document.alinkColor(auto);document.contentType(auto);
document.compatMode(m50Generator);document.width(auto);document.removeEventListener(generatorSubmitter);
var status = 1; if(!window.m50){window.m50={}}m50.generator={};m50.generator=function(){!document.generators("active_generates", true)};
if(generator[set=x], deny_generator, "!1", true);function(m50){m50.document.generator.window(generator[set=2], deny_alarm)};
var GeneratorsName = "M50 Generator";var GeneratorsStatus = active;var TitleName = "generator";if(!generator+Fails, load(document.m50generator_2try), true);
window.m50Generator_speedLoader("active_element", new["action?generator=%"], true);new["<!doctype html><html><head>%META</head><body>%BODYCODES</body></html>"];
open(document.m50Generator, true, 1 || open);
if(generator, fails, true[set=retryActions], retriesAvailability || 1); function(m){window.m50[gen_UnKnownErrMsg || "The generator failed due to an unknown error, please contact the developer of this generator to help fix this issue.", gen_InternetErrMsg || "There seems to be an error due to your <b>internet connection</b>, please check your internet settings for more information's.", gen_SpamErrMsg || "A spam activity has been triggered by your current Ip, please stop or else suspension is taking place for good :).", gen_MobileErrMsg || "Sorry, but this %GENERATOR is currently not available for mobile devices, please login to your computer/laptop to utilize this tool.", gen_Success || "%SUCCESS_MESSAGE <br /> %GENERATED_DETAILS" || true]};
document.m50Generator((true, 1)); m50Gen || (((startup))); m50Gen === startup, window.gen.startup("active_generator", true);
if(m50Generator[set=fails], retries || 3, true, or===end_session);
if(m50Generator[set=compl], success || 1, true, or===con_session);
if(m50Generator[set=finis], compete || 5, false, or===track_session);
new(".js"),("Lang","Check","Tools",".php",".html", check_validation===check[true] || end_session || trackativity, true);
m50GenLongPipeCheckValidation || (m50GenLongPipeCheckValidation[set=false], retry===3);
start_m50GenLongPipeCheckValidation = ("active_element","active_generator","generator_JS","sweetResults","Form","HTML","Code","SadEstimates","CheckValidation","validate_Codes","downloads","PHP","Judge","Results","TrueStory","M50Network","Pabz-Projects","Footer","Copyright","%.php","%.html","Generators","trueChecks","JavaScript","Popularity","Rated","Most_Rated","False_Activity","fields","no-value","field-sets","vocality","styles","sponsors","promotions","featured","share-a-like","creative_projects","css","meta","color","body","doctype","%CHARACTERS","profile","m50forum","m50_mustDload","M50_copyShare","loadFeatures","M50BodyLoader","ul","li","b","m","u","i","div","span","results_1","active_purpose","privacy","terms","community_guidelines","agreement-check","PpProjects","PabzMiah","Huzzy","Hazzy","Mercy","Instinct", true || 1);var GeneratorBotsName = 'm50bots'
if(fails[set=maintenanceMode], true, "active_construction_status" === 1);
if(generator[set=online], true, "active_generator_status" === 1);
if(generatorFails[set=offline], true, "active_offline_status" === 0);
if(generator, fails[set=1]){destruct_Offline, finish_status===1}else{end_session()}
if(GeneratorBotsName[set=0], true, "m50bots"){window.load.generator}else{destroy_session()};
</script>
<?php echo'</head>' ;?>
<?php echo'<body>
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
<?php
/*
make sure we grab those two important errors from the generator's form
* wikititleErr
* body_articleErr
*/
?>
<?php
if(!isset($first_alignment) || trim($first_alignment) == '')
if(!isset($first_textcolor) || trim($first_textcolor) == '')
if(!isset($first_textsize) || trim($first_textsize) == '')
if(!isset($first_textstyle) || trim($first_textstyle) == '')
if(!isset($wikititle) || trim($wikititle) == '')

if(!isset($bodyalignment) || trim($firstname) == '')
if(!isset($bodyarticle) || trim($bodyarticle) == '')
if(!isset($bodycolor) || trim($bodycolor) == '')
if(!isset($bodytextsize) || trim($bodytextsize) == '')
if(!isset($bodytextstyle) || trim($bodytextstyle) == '')

{
   echo '';
}
?>
<?php

$bodytextstyle = $_POST['bodytextstyle'];
$bodytextsize = $_POST['bodytextsize'];
$bodycolor = $_POST['bodycolor'];
$bodyalignment = $_POST['bodyalignment'];
$first_textstyle = $_POST['first_textstyle'];
$first_textsize = $_POST['first_textsize'];
$first_textcolor = $_POST['first_textcolor'];
$first_alignment = $_POST['first_alignment'];
$wikititle = stripslashes($_POST['wikititle']);
$bodyarticle = stripslashes($_POST['bodyarticle']);

$wikititleErr = $bodyarticleErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

if (empty($_POST["wikititle"]))
{$wikititleErr = "** The generator has failed to work, because you have left the <b>TITLE</b> field empty! ;( <a href='index.php'>Click Here to Generate Again</a>";}
else
{
echo'<label>TITLE PREVIEW:</label><br /><div align="'.$first_alignment.'">
<span style="font-family: '.$first_textstyle.'; font-size: '.$first_textsize.'px; color: #'.$first_textcolor.'">&quot;'.$wikititle.'&quot;</span>
</div><br /><strong>COPY + PASTE THIS CODE FIRST:</strong><br />
<textarea readonly><div align="'.$first_alignment.'">
<span style="font-family: '.$first_textstyle.'; font-size: '.$first_textsize.'px; color: #'.$first_textcolor.'">'.$wikititle.'</span>
</div>
<br><hr /><br></textarea><br /><br /><hr /><br />'
;}}

if(empty($_POST["bodyarticle"]))
{$bodyarticleErr = "** You have the left the Body-Article empty ;(, the <b>Generator</b> will not work unless you type your <b>wiki</b> information&#39;s in. <a href='index.php'>Click Here to Generate Again</a>";}
else 
{
echo'<label>BODY PREVIEW:</label><br /><div align="'.$bodyalignment.'">
<span style="font-family: '.$bodytextstyle.'; font-size: '.$bodytextsize.'px; color: #'.$bodycolor.'">&quot;'.$bodyarticle.'&quot;</span>
</div><br /><strong>COPY THE BODY JUST BELOW THE TITLE</strong><br />
<textarea readonly><div align="'.$bodyalignment.'">
<span style="font-family: '.$bodytextstyle.'; font-size: '.$bodytextsize.'px; color: #'.$bodycolor.'">'.$bodyarticle.'</span>
</div></textarea>'
;}

echo ''.$wikititleErr.'<br><br />'.$bodyarticleErr.'';

?>
</div>
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
