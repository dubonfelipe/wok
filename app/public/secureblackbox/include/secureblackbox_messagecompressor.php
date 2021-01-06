<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - MessageCompressor Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_MessageCompressor {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_messagecompressor_open(SECUREBLACKBOX_OEMKEY_275);
    secureblackbox_messagecompressor_register_callback($this->handle, 1, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_messagecompressor_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_messagecompressor_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_messagecompressor_get_last_error_code($this->handle);
  }

 /**
  * Compresses input data into a PKCS7 message.
  *
  * @access   public
  */
  public function doCompress() {
    $ret = secureblackbox_messagecompressor_do_compress($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagecompressor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_messagecompressor_do_config($this->handle, $configurationstring);
		$err = secureblackbox_messagecompressor_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagecompressor_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_messagecompressor_get($this->handle, 0);
  }
 /**
  * Compression level to apply (1-9).
  *
  * @access   public
  */
  public function getCompressionLevel() {
    return secureblackbox_messagecompressor_get($this->handle, 1 );
  }
 /**
  * Compression level to apply (1-9).
  *
  * @access   public
  * @param    int   value
  */
  public function setCompressionLevel($value) {
    $ret = secureblackbox_messagecompressor_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagecompressor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Path to the source (uncompressed) file.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_messagecompressor_get($this->handle, 2 );
  }
 /**
  * Path to the source (uncompressed) file.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_messagecompressor_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagecompressor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Path to the destination (compressed) file.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_messagecompressor_get($this->handle, 3 );
  }
 /**
  * Path to the destination (compressed) file.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_messagecompressor_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagecompressor_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_messagecompressor_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_messagecompressor_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagecompressor_get_last_error($this->handle));
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
