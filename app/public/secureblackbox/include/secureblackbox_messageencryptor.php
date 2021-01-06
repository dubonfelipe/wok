<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - MessageEncryptor Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_MessageEncryptor {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_messageencryptor_open(SECUREBLACKBOX_OEMKEY_279);
    secureblackbox_messageencryptor_register_callback($this->handle, 1, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_messageencryptor_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_messageencryptor_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_messageencryptor_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_messageencryptor_do_config($this->handle, $configurationstring);
		$err = secureblackbox_messageencryptor_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_messageencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts data.
  *
  * @access   public
  */
  public function doEncrypt() {
    $ret = secureblackbox_messageencryptor_do_encrypt($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_messageencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_messageencryptor_get($this->handle, 0);
  }
 /**
  * The length of the encryption key.
  *
  * @access   public
  */
  public function getBitsInKey() {
    return secureblackbox_messageencryptor_get($this->handle, 1 );
  }
 /**
  * The length of the encryption key.
  *
  * @access   public
  * @param    int   value
  */
  public function setBitsInKey($value) {
    $ret = secureblackbox_messageencryptor_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messageencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The symmetric key algorithm to use for encryption.
  *
  * @access   public
  */
  public function getEncryptionAlgorithm() {
    return secureblackbox_messageencryptor_get($this->handle, 2 );
  }
 /**
  * The symmetric key algorithm to use for encryption.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionAlgorithm($value) {
    $ret = secureblackbox_messageencryptor_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messageencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getEncryptionCertBytes() {
    return secureblackbox_messageencryptor_get($this->handle, 3 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getEncryptionCertHandle() {
    return secureblackbox_messageencryptor_get($this->handle, 4 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setEncryptionCertHandle($value) {
    $ret = secureblackbox_messageencryptor_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messageencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A path to the source file.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_messageencryptor_get($this->handle, 5 );
  }
 /**
  * A path to the source file.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_messageencryptor_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messageencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The symmetric key to use for encryption.
  *
  * @access   public
  */
  public function getKey() {
    return secureblackbox_messageencryptor_get($this->handle, 6 );
  }
 /**
  * The symmetric key to use for encryption.
  *
  * @access   public
  * @param    string   value
  */
  public function setKey($value) {
    $ret = secureblackbox_messageencryptor_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messageencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A path to the output file.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_messageencryptor_get($this->handle, 7 );
  }
 /**
  * A path to the output file.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_messageencryptor_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messageencryptor_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_messageencryptor_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_messageencryptor_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messageencryptor_get_last_error($this->handle));
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
