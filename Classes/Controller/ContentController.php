<?php

/**
 * 2010-06-11 gi23kis 010
 */
class Tx_Curlcontent_Controller_ContentController extends
Tx_Extbase_MVC_Controller_ActionController {

	public function indexAction() {
		$_EXTKEY = 'curlcontent';
		
		// get basic-configuration-data from localconf.php
		$this->extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
		$externalURLbase = $this->extConf['externalURLbase'];

		// get data from tt_content (flexform)
		$externalURLpath = $this->settings['externalURLpath'];
		
		// 
		$targetUrl = $externalURLbase . $externalURLpath;
		
		// cURL
    $ch = curl_init();	// create curl resource
    curl_setopt($ch, CURLOPT_URL, $targetUrl);	// set url
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);	//return the transfer as a string
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);	// ignore httpS
    $htmlOUT = curl_exec($ch);	// $htmlOUT contains the output string
		curl_close($ch);	// close curl resource to free up system resources
		
		// export 
		return $htmlOUT;
	}
}

?>