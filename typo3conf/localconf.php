<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['SYS']['sitename'] = 'New TYPO3 site';

	// Default password is "joh316" :
$TYPO3_CONF_VARS['BE']['installToolPassword'] = 'bacb98acf97e0b6112b1d1b650b84971';

$TYPO3_CONF_VARS['EXT']['extList'] = 'info,perm,func,filelist,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,css_styled_content,t3skin,t3editor,reports,felogin,form';

$typo_db_extTableDef_script = 'extTables.php';

## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!

$TYPO3_CONF_VARS['EXT']['extList'] = 'extbase,css_styled_content,info,perm,func,filelist,extra_page_cm_options,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,t3skin,t3editor,reports,form,rsaauth,saltedpasswords,recycler,scheduler,fluid,realurl,extension_builder';	// Modified or inserted by TYPO3 Extension Manager. Modified or inserted by TYPO3 Core Update Manager.
// Updated by TYPO3 Core Update Manager 03-03-12 12:38:10
$TYPO3_CONF_VARS['SYS']['encryptionKey'] = 'd15ca8709060b16f18a2b43c2a037227e73e7a93c7401feafb64f1411d504d43e666aa591687504f39654ce45bebfe00';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['SYS']['compat_version'] = '4.6';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_username = 'root';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_password = 'root';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_host = 'localhost';	//  Modified or inserted by TYPO3 Install Tool.
// Updated by TYPO3 Install Tool 03-03-12 12:38:10
$TYPO3_CONF_VARS['EXT']['extConf']['saltedpasswords'] = 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}';	//  Modified or inserted by TYPO3 Core Update Manager.
$TYPO3_CONF_VARS['BE']['loginSecurityLevel']  = 'rsa';	//  Modified or inserted by TYPO3 Core Update Manager.
$TYPO3_CONF_VARS['FE']['loginSecurityLevel']  = 'rsa';	//  Modified or inserted by TYPO3 Core Update Manager.
// Updated by TYPO3 Core Update Manager 03-03-12 12:38:20
$typo_db = 'bp20';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['SYS']['displayErrors'] = '1';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['BE']['versionNumberInFilename'] = '0';	//  Modified or inserted by TYPO3 Install Tool.
// Updated by TYPO3 Install Tool 03-03-12 12:39:42
$TYPO3_CONF_VARS['EXT']['extList_FE'] = 'extbase,css_styled_content,install,rtehtmlarea,t3skin,form,rsaauth,saltedpasswords,fluid,realurl,extension_builder,gridelements';	// Modified or inserted by TYPO3 Extension Manager. 
// Updated by TYPO3 Extension Manager 03-03-12 12:39:50
$TYPO3_CONF_VARS['INSTALL']['wizardDone']['tx_coreupdates_installnewsysexts'] = '1';	//  Modified or inserted by TYPO3 Upgrade Wizard.
// Updated by TYPO3 Upgrade Wizard 03-03-12 12:39:50
$TYPO3_CONF_VARS['EXT']['extConf']['fed'] = 'a:8:{s:29:"enableBackendRecordController";s:1:"0";s:26:"enableFluidContentElements";s:1:"1";s:24:"enableFluidPageTemplates";s:1:"1";s:31:"enableFallbackFluidPageTemplate";s:1:"1";s:18:"enableSolrFeatures";s:1:"0";s:21:"enableFrontendPlugins";s:1:"0";s:30:"enableIntegratedBackendLayouts";s:1:"0";s:28:"increaseExtbaseCacheLifetime";s:1:"1";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['realurl'] = 'a:5:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['extension_builder'] = 'a:3:{s:15:"enableRoundtrip";s:1:"0";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}';	//  Modified or inserted by TYPO3 Extension Manager.
// Updated by TYPO3 Extension Manager 17-03-12 11:35:39
?>