<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - MessageTimestamper Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_MessageTimestamper {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_messagetimestamper_open(SECUREBLACKBOX_OEMKEY_273);
    secureblackbox_messagetimestamper_register_callback($this->handle, 1, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_messagetimestamper_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_messagetimestamper_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_messagetimestamper_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_messagetimestamper_do_config($this->handle, $configurationstring);
		$err = secureblackbox_messagetimestamper_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagetimestamper_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Timestamps the data.
  *
  * @access   public
  */
  public function doTimestamp() {
    $ret = secureblackbox_messagetimestamper_do_timestamp($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagetimestamper_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_messagetimestamper_get($this->handle, 0);
  }
 /**
  * A file name to be saved together with the timestamped data.
  *
  * @access   public
  */
  public function getDataFileName() {
    return secureblackbox_messagetimestamper_get($this->handle, 1 );
  }
 /**
  * A file name to be saved together with the timestamped data.
  *
  * @access   public
  * @param    string   value
  */
  public function setDataFileName($value) {
    $ret = secureblackbox_messagetimestamper_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagetimestamper_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The URI to be included with the timestamped data.
  *
  * @access   public
  */
  public function getDataURI() {
    return secureblackbox_messagetimestamper_get($this->handle, 2 );
  }
 /**
  * The URI to be included with the timestamped data.
  *
  * @access   public
  * @param    string   value
  */
  public function setDataURI($value) {
    $ret = secureblackbox_messagetimestamper_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagetimestamper_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether a detached timestamp should be produced.
  *
  * @access   public
  */
  public function getDetached() {
    return secureblackbox_messagetimestamper_get($this->handle, 3 );
  }
 /**
  * Specifies whether a detached timestamp should be produced.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setDetached($value) {
    $ret = secureblackbox_messagetimestamper_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagetimestamper_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A path to the source file.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_messagetimestamper_get($this->handle, 4 );
  }
 /**
  * A path to the source file.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_messagetimestamper_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagetimestamper_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A path to the output file.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_messagetimestamper_get($this->handle, 5 );
  }
 /**
  * A path to the output file.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_messagetimestamper_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagetimestamper_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The address of the timestamping server.
  *
  * @access   public
  */
  public function getTimestampServer() {
    return secureblackbox_messagetimestamper_get($this->handle, 6 );
  }
 /**
  * The address of the timestamping server.
  *
  * @access   public
  * @param    string   value
  */
  public function setTimestampServer($value) {
    $ret = secureblackbox_messagetimestamper_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagetimestamper_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_messagetimestamper_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_messagetimestamper_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagetimestamper_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Information about errors during PKCS#7 message encryption.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }


}

?>
