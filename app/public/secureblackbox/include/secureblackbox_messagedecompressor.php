<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - MessageDecompressor Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_MessageDecompressor {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_messagedecompressor_open(SECUREBLACKBOX_OEMKEY_276);
    secureblackbox_messagedecompressor_register_callback($this->handle, 1, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_messagedecompressor_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_messagedecompressor_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_messagedecompressor_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_messagedecompressor_do_config($this->handle, $configurationstring);
		$err = secureblackbox_messagedecompressor_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecompressor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Decompresses the data provided.
  *
  * @access   public
  */
  public function doDecompress() {
    $ret = secureblackbox_messagedecompressor_do_decompress($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecompressor_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_messagedecompressor_get($this->handle, 0);
  }
 /**
  * Path to the file containing the compressed data.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_messagedecompressor_get($this->handle, 1 );
  }
 /**
  * Path to the file containing the compressed data.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_messagedecompressor_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecompressor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Path to a file to write the decompressed data to.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_messagedecompressor_get($this->handle, 2 );
  }
 /**
  * Path to a file to write the decompressed data to.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_messagedecompressor_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecompressor_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_messagedecompressor_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_messagedecompressor_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecompressor_get_last_error($this->handle));
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
