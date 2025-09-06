<?php
include_once("../config.php");
require("../smarty/libs/Smarty.class.php");
include_once("../Settings.class.php");

$settings = Settings::factory();

$smarty = new Smarty\Smarty();
$smarty->setTemplateDir("../templates/");
$smarty->setCompileDir("../templates_c/");
$smarty->setCacheDir("../cache/");

$smarty->assign( "settings", $settings );
$smarty->assign( "install_path", INSTALL_PATH );
$smarty->assign( "post_to", "step3.php" );
$smarty->assign( "sitetitle", "インストールステップ2" );
$smarty->assign( "message", "システム設定を行います。このページの設定が正しく行われないとepgrecは機能しません。" );

$smarty->display("systemSetting.html");
?>
