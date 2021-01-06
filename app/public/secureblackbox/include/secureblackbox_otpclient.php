<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - OTPClient Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_OTPClient {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_otpclient_open(SECUREBLACKBOX_OEMKEY_201);
    secureblackbox_otpclient_register_callback($this->handle, 1, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_otpclient_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_otpclient_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_otpclient_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_otpclient_do_config($this->handle, $configurationstring);
		$err = secureblackbox_otpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_otpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates a new hash-based one-time password.
  *
  * @access   public
  * @param    int    counter
  */
  public function doGenerateHOTPPassword($counter) {
    $ret = secureblackbox_otpclient_do_generatehotppassword($this->handle, $counter);
		$err = secureblackbox_otpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_otpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates a new time-based one-time password.
  *
  * @access   public
  * @param    int    timeinterval
  * @param    string    hashalgorithm
  */
  public function doGenerateTOTPPassword($timeinterval, $hashalgorithm) {
    $ret = secureblackbox_otpclient_do_generatetotppassword($this->handle, $timeinterval, $hashalgorithm);
		$err = secureblackbox_otpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_otpclient_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_otpclient_get($this->handle, 0);
  }
 /**
  * The OTP key secret.
  *
  * @access   public
  */
  public function getKeySecret() {
    return secureblackbox_otpclient_get($this->handle, 1 );
  }
 /**
  * The OTP key secret.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeySecret($value) {
    $ret = secureblackbox_otpclient_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_otpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the length of the password to generate.
  *
  * @access   public
  */
  public function getPasswordLength() {
    return secureblackbox_otpclient_get($this->handle, 2 );
  }
 /**
  * Specifies the length of the password to generate.
  *
  * @access   public
  * @param    int   value
  */
  public function setPasswordLength($value) {
    $ret = secureblackbox_otpclient_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_otpclient_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_otpclient_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_otpclient_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_otpclient_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Reports errors during one-time password (OTP) generation.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }


}

?>
