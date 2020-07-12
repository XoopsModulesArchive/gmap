<?php
include("../../mainfile.php");
$xoopsOption['template_main'] = 'gmap_index.html';

	if($xoopsConfig['startpage'] == "gmap"){
		$xoopsOption['show_rblock'] =1;
		include(XOOPS_ROOT_PATH."/header.php");
		make_cblock();
		echo "<br />";
	} else {
		$xoopsOption['show_rblock'] =0;
		include(XOOPS_ROOT_PATH."/header.php");
	}

//----------------------------------------------
$myts =& MyTextSanitizer::getInstance();

$gmap_API = $GLOBALS['xoopsModuleConfig']['gmap_api'];

$gmap_n = (isset($_GET['n'])) ? floatval($_GET['n']) : $GLOBALS['xoopsModuleConfig']['gmap_n'];
$gmap_e = (isset($_GET['e'])) ? floatval($_GET['e']) : $GLOBALS['xoopsModuleConfig']['gmap_e'];
$gmap_z = (isset($_GET['z'])) ? intval($_GET['z']) : $GLOBALS['xoopsModuleConfig']['gmap_z'];
$gmap_fuki = $GLOBALS['xoopsModuleConfig']['gmap_fuki'];
$gmap_wiki = $GLOBALS['xoopsModuleConfig']['gmap_wiki'];
$gmap_blog = $GLOBALS['xoopsModuleConfig']['gmap_blog'];
$gmap_link = $GLOBALS['xoopsModuleConfig']['gmap_link'];
$gmap_text =(!empty($_GET['t'])) ? mb_convert_encoding($_GET['t'],'EUC-JP','auto') : ((isset($_GET['n'])) ? $GLOBALS['xoopsModuleConfig']['gmap_text2'] : $GLOBALS['xoopsModuleConfig']['gmap_text1']);
$gmap_text = $myts->makeTareaData4Show($gmap_text);
$gmap_text = str_replace("'","\'",$gmap_text);
$gmap_width = $GLOBALS['xoopsModuleConfig']['gmap_width'];
$gmap_height = $GLOBALS['xoopsModuleConfig']['gmap_height'];
//----------------------------------------------
$xoopsTpl->assign('gmap_API', $gmap_API);
$xoopsTpl->assign('gmap_n', $gmap_n);
$xoopsTpl->assign('gmap_e', $gmap_e);
$xoopsTpl->assign('gmap_z', $gmap_z);
$xoopsTpl->assign('gmap_fuki', $gmap_fuki);
$xoopsTpl->assign('gmap_wiki', $gmap_wiki);
$xoopsTpl->assign('gmap_blog', $gmap_blog);
$xoopsTpl->assign('gmap_link', $gmap_link);
$xoopsTpl->assign('gmap_text', $gmap_text);
$xoopsTpl->assign('gmap_width', $gmap_width);
$xoopsTpl->assign('gmap_height', $gmap_height);
$xoopsTpl->assign('xoopsUserIsAdmin', ($GLOBALS['xoopsModuleConfig']['gmap_setdef_show']&&$GLOBALS['xoopsUserIsAdmin']));

include(XOOPS_ROOT_PATH."/footer.php");
?>
