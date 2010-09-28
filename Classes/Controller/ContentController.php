<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010 Bernie Maier <maier@tum.de>
 *  (c) 2010 Dimitri Koenig <dk@cabag.ch>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Gets some content with curl from a specific URL
 *
 * @package Curlcontent
 * @version $Id:
 */
class Tx_Curlcontent_Controller_ContentController extends Tx_Extbase_MVC_Controller_ActionController {
	protected $curlHandle = NULL;

	public function indexAction() {
		$this->initCurl();
		$this->setCurlTarget();
		$this->setCurlTimeout();

		return $this->getCurlContent();
	}

	protected function getExternalURLBase() {
		$_EXTKEY = 'curlcontent';
		$this->extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
		return $this->extConf['externalURLbase'];
	}

	protected function getExternalURLPath() {
		return $this->settings['externalURLpath'];
	}

	protected function initCurl() {
		$this->curlHandle = curl_init();
		curl_setopt($this->curlHandle, CURLOPT_RETURNTRANSFER, 1); //return the transfer as a string
		curl_setopt($this->curlHandle, CURLOPT_SSL_VERIFYPEER, FALSE); // ignore httpS
	}

	protected function setCurlTarget() {
		$targetURL = $this->getExternalURLBase() . $this->getExternalURLPath();
		curl_setopt($this->curlHandle, CURLOPT_URL, $targetURL);
	}

	protected function getCurlContent() {
		$htmlContent = curl_exec($this->curlHandle);
		curl_close($this->curlHandle);

		return $htmlContent;
	}

	protected function setCurlTimeout() {
		$timeout = intval($this->settings['timeout']);
		if ($timeout > 0) {
			curl_setopt($this->curlHandle, CURLOPT_TIMEOUT, $timeout);
		}
	}
}

?>