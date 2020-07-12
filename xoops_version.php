<?php
$modversion['name'] = "gmap";
$modversion['version'] = "2.1a";
$modversion['description'] = "googleAPIによる地図表示モジュールです。";
$modversion['credits'] = "The XOOPS CUBE Project!<BR />nobunobu (http://www.kowa.org/)! <br />TOM_G3X(http://www.kasugai-komaki.jp/)!";
$modversion['author'] = "t_miyabi (http://apap.co4.jp/)";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "logo.gif";
$modversion['dirname'] = "gmap";

// Menu
$modversion['hasMain'] = 1;

// DB Table (作業中)
//$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
// Tables created by sql file (without prefix!)
//$modversion['tables'][0] = "gmap_list";
//$modversion['tables'][1] = "gmap_cat";

// Templates
$modversion['templates'][1]['file'] = 'gmap_index.html';
$modversion['templates'][1]['description'] = '';

$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";
$modversion['hasconfig'] = 1;
$modversion['config'][1] = array(
	'name'			=> 'gmap_api' ,
	'title'			=> '_MI_GMAP_API_MSG' ,
	'description'	=> '_MI_GMAP_API_DESC' ,
	'formtype'		=> 'textbox' ,
	'valuetype'		=> 'text' ,
	'default'		=> '' ,
);

$modversion['config'][2] = array(
	'name'			=> 'gmap_n' ,
	'title'			=> '_MI_GMAP_N_MSG' ,
	'description'	=> '_MI_GMAP_N_DESC' ,
	'formtype'		=> 'textbox' ,
	'valuetype'		=> 'text' ,
	'default'		=> '34.4038999984083' ,
);

$modversion['config'][3] = array(
	'name'			=> 'gmap_e' ,
	'title'			=> '_MI_GMAP_E_MSG' ,
	'description'	=> '_MI_GMAP_E_DESC' ,
	'formtype'		=> 'textbox' ,
	'valuetype'		=> 'text' ,
	'default'		=> '133.20066690444946' ,
);

$modversion['config'][4] = array(
	'name'			=> 'gmap_z' ,
	'title'			=> '_MI_GMAP_Z_MSG' ,
	'description'	=> '_MI_GMAP_Z_DESC' ,
	'formtype'		=> 'select' ,
	'valuetype'		=> 'int' ,
	'default'		=> 4 ,
	'options' => array(
                    '_MI_GMAP_Z_OPT0'=>0 ,
                    '_MI_GMAP_Z_OPT1'=>1 ,
                    '_MI_GMAP_Z_OPT2'=>2 ,
                    '_MI_GMAP_Z_OPT3'=>3 ,
                    '_MI_GMAP_Z_OPT4'=>4 ,
                    '_MI_GMAP_Z_OPT5'=>5 ,
                    '_MI_GMAP_Z_OPT6'=>6 ,
                    '_MI_GMAP_Z_OPT7'=>7 ,
                    '_MI_GMAP_Z_OPT8'=>8 ,
                    '_MI_GMAP_Z_OPT9'=>9 ,
                    '_MI_GMAP_Z_OPT10'=>10 ,
                    '_MI_GMAP_Z_OPT11'=>11 ,
                    '_MI_GMAP_Z_OPT12'=>12 ,
                    '_MI_GMAP_Z_OPT13'=>13 ,
                    '_MI_GMAP_Z_OPT14'=>14 ,
                    '_MI_GMAP_Z_OPT15'=>15 ,
                    '_MI_GMAP_Z_OPT16'=>16 ,
                    '_MI_GMAP_Z_OPT17'=>17 ,
     ),
);

$modversion['config'][5] = array(
	'name'			=> 'gmap_fuki' ,
	'title'			=> '_MI_GMAP_FUKI_MSG' ,
	'description'	=> '_MI_GMAP_FUKI_DESC' ,
	'formtype'		=> 'yesno' ,
	'valuetype'		=> 'int' ,
	'default'		=> 0 ,
);
$modversion['config'][6] = array(
	'name'			=> 'gmap_link' ,
	'title'			=> '_MI_GMAP_LINK_MSG' ,
	'description'	=> '_MI_GMAP_LINK_DESC' ,
	'formtype'		=> 'yesno' ,
	'valuetype'		=> 'int' ,
	'default'		=> 1 ,
);
$modversion['config'][7] = array(
	'name'			=> 'gmap_wiki' ,
	'title'			=> '_MI_GMAP_WIKI_MSG' ,
	'description'	=> '_MI_GMAP_WIKI_DESC' ,
	'formtype'		=> 'yesno' ,
	'valuetype'		=> 'int' ,
	'default'		=> 0 ,
);
$modversion['config'][8] = array(
	'name'			=> 'gmap_blog' ,
	'title'			=> '_MI_GMAP_BLOG_MSG' ,
	'description'	=> '_MI_GMAP_BLOG_DESC' ,
	'formtype'		=> 'yesno' ,
	'valuetype'		=> 'int' ,
	'default'		=> 0 ,
);
$modversion['config'][9] = array(
	'name'			=> 'gmap_width' ,
	'title'			=> '_MI_GMAP_WIDTH_MSG' ,
	'description'	=> '_MI_GMAP_WIDTH_DESC' ,
	'formtype'		=> 'textbox' ,
	'valuetype'		=> 'int' ,
	'default'		=> 540 ,
);
$modversion['config'][10] = array(
	'name'			=> 'gmap_height' ,
	'title'			=> '_MI_GMAP_HEIGHT_MSG' ,
	'description'	=> '_MI_GMAP_HEIGHT_DESC' ,
	'formtype'		=> 'textbox' ,
	'valuetype'		=> 'int' ,
	'default'		=> 460 ,
);
$modversion['config'][11] = array(
	'name'			=> 'gmap_text1' ,
	'title'			=> '_MI_GMAP_TEXT1_MSG' ,
	'description'	=> '_MI_GMAP_TEXT1_DESC' ,
	'formtype'		=> 'textarea' ,
	'valuetype'		=> 'text' ,
	'default'		=> _MI_GMAP_TEXT1_DEFAULT ,
);
$modversion['config'][12] = array(
	'name'			=> 'gmap_text2' ,
	'title'			=> '_MI_GMAP_TEXT2_MSG' ,
	'description'	=> '_MI_GMAP_TEXT2_DESC' ,
	'formtype'		=> 'textarea' ,
	'valuetype'		=> 'text' ,
	'default'		=> _MI_GMAP_TEXT2_DEFAULT ,
);
$modversion['config'][13] = array(
	'name'			=> 'gmap_setdef_show' ,
	'title'			=> '_MI_GMAP_SETDEF_SHOW_MSG' ,
	'description'	=> '_MI_GMAP_SETDEF_SHOW_DESC' ,
	'formtype'		=> 'yesno' ,
	'valuetype'		=> 'int' ,
	'default'		=> 1 ,
);

?>