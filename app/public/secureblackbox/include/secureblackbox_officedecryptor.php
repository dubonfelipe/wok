<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - OfficeDecryptor Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_OfficeDecryptor {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_officedecryptor_open(SECUREBLACKBOX_OEMKEY_816);
    secureblackbox_officedecryptor_register_callback($this->handle, 1, array($this, 'fireDecryptionPasswordNeeded'));
    secureblackbox_officedecryptor_register_callback($this->handle, 2, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_officedecryptor_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_officedecryptor_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_officedecryptor_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_officedecryptor_do_config($this->handle, $configurationstring);
		$err = secureblackbox_officedecryptor_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_officedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Decrypts the whole document.
  *
  * @access   public
  */
  public function doDecrypt() {
    $ret = secureblackbox_officedecryptor_do_decrypt($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_officedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_officedecryptor_get($this->handle, 0);
  }
 /**
  * Defines the format of the Office document.
  *
  * @access   public
  */
  public function getDocumentFormat() {
    return secureblackbox_officedecryptor_get($this->handle, 1 );
  }


 /**
  * The encryption algorithm used to encrypt the document.
  *
  * @access   public
  */
  public function getEncryptionAlgorithm() {
    return secureblackbox_officedecryptor_get($this->handle, 2 );
  }


 /**
  * The encryption type used to encrypt the document.
  *
  * @access   public
  */
  public function getEncryptionType() {
    return secureblackbox_officedecryptor_get($this->handle, 3 );
  }


 /**
  * The Office file to be decrypted.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_officedecryptor_get($this->handle, 4 );
  }
 /**
  * The Office file to be decrypted.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_officedecryptor_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines where to save the decrypted document.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_officedecryptor_get($this->handle, 5 );
  }
 /**
  * Defines where to save the decrypted document.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_officedecryptor_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password used for decryption.
  *
  * @access   public
  */
  public function getPassword() {
    return secureblackbox_officedecryptor_get($this->handle, 6 );
  }
 /**
  * The password used for decryption.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassword($value) {
    $ret = secureblackbox_officedecryptor_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_officedecryptor_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_officedecryptor_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Request to provide decryption password during decryption.
  *
  * @access   public
  * @param    array   Array of event parameters: canceldecryption    
  */
  public function fireDecryptionPasswordNeeded($param) {
    return $param;
  }

 /**
  * Information about errors during signing.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }


}

?>
