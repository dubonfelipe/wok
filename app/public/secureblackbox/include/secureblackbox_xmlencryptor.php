<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - XMLEncryptor Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_XMLEncryptor {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_xmlencryptor_open(SECUREBLACKBOX_OEMKEY_785);
    secureblackbox_xmlencryptor_register_callback($this->handle, 1, array($this, 'fireError'));
    secureblackbox_xmlencryptor_register_callback($this->handle, 2, array($this, 'fireFormatElement'));
    secureblackbox_xmlencryptor_register_callback($this->handle, 3, array($this, 'fireFormatText'));
  }
  
  public function __destruct() {
    secureblackbox_xmlencryptor_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_xmlencryptor_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_xmlencryptor_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_xmlencryptor_do_config($this->handle, $configurationstring);
		$err = secureblackbox_xmlencryptor_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts an XML document.
  *
  * @access   public
  */
  public function doEncrypt() {
    $ret = secureblackbox_xmlencryptor_do_encrypt($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_xmlencryptor_get($this->handle, 0);
  }
 /**
  * Specifies XML encoding.
  *
  * @access   public
  */
  public function getEncoding() {
    return secureblackbox_xmlencryptor_get($this->handle, 1 );
  }
 /**
  * Specifies XML encoding.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncoding($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the type of the data being encrypted.
  *
  * @access   public
  */
  public function getEncryptedDataType() {
    return secureblackbox_xmlencryptor_get($this->handle, 2 );
  }
 /**
  * Specifies the type of the data being encrypted.
  *
  * @access   public
  * @param    int   value
  */
  public function setEncryptedDataType($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The symmetric (session) key used to encrypt the data.
  *
  * @access   public
  */
  public function getEncryptionKey() {
    return secureblackbox_xmlencryptor_get($this->handle, 3 );
  }
 /**
  * The symmetric (session) key used to encrypt the data.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionKey($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The encryption method used to encrypt the document.
  *
  * @access   public
  */
  public function getEncryptionMethod() {
    return secureblackbox_xmlencryptor_get($this->handle, 4 );
  }
 /**
  * The encryption method used to encrypt the document.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionMethod($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies if the encryption key is encrypted.
  *
  * @access   public
  */
  public function getEncryptKey() {
    return secureblackbox_xmlencryptor_get($this->handle, 5 );
  }
 /**
  * Specifies if the encryption key is encrypted.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setEncryptKey($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The data that should be encrypted.
  *
  * @access   public
  */
  public function getExternalData() {
    return secureblackbox_xmlencryptor_get($this->handle, 6 );
  }
 /**
  * The data that should be encrypted.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalData($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The XML document to be encrypted.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_xmlencryptor_get($this->handle, 7 );
  }
 /**
  * The XML document to be encrypted.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKeyEncryptionCertBytes() {
    return secureblackbox_xmlencryptor_get($this->handle, 8 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKeyEncryptionCertHandle() {
    return secureblackbox_xmlencryptor_get($this->handle, 9 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKeyEncryptionCertHandle($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The symmetric key used to encrypt a session key.
  *
  * @access   public
  */
  public function getKeyEncryptionKey() {
    return secureblackbox_xmlencryptor_get($this->handle, 10 );
  }
 /**
  * The symmetric key used to encrypt a session key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyEncryptionKey($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies how the session key is encrypted.
  *
  * @access   public
  */
  public function getKeyEncryptionType() {
    return secureblackbox_xmlencryptor_get($this->handle, 11 );
  }
 /**
  * Specifies how the session key is encrypted.
  *
  * @access   public
  * @param    int   value
  */
  public function setKeyEncryptionType($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies how the session key is encrypted.
  *
  * @access   public
  */
  public function getKeyTransportMethod() {
    return secureblackbox_xmlencryptor_get($this->handle, 12 );
  }
 /**
  * Specifies how the session key is encrypted.
  *
  * @access   public
  * @param    int   value
  */
  public function setKeyTransportMethod($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The key wrap method used to encrypt the session key.
  *
  * @access   public
  */
  public function getKeyWrapMethod() {
    return secureblackbox_xmlencryptor_get($this->handle, 13 );
  }
 /**
  * The key wrap method used to encrypt the session key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyWrapMethod($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines where to save the encrypted XML document.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_xmlencryptor_get($this->handle, 14 );
  }
 /**
  * Defines where to save the encrypted XML document.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies if GCM mode is enabled.
  *
  * @access   public
  */
  public function getUseGCM() {
    return secureblackbox_xmlencryptor_get($this->handle, 15 );
  }
 /**
  * Specifies if GCM mode is enabled.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setUseGCM($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the XML element to encrypt.
  *
  * @access   public
  */
  public function getXMLNode() {
    return secureblackbox_xmlencryptor_get($this->handle, 16 );
  }
 /**
  * Defines the XML element to encrypt.
  *
  * @access   public
  * @param    string   value
  */
  public function setXMLNode($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Namespace arrays.
  *
  * @access   public
  */
  public function getNamespaceCount() {
    return secureblackbox_xmlencryptor_get($this->handle, 17 );
  }
 /**
  * The number of records in the Namespace arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setNamespaceCount($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A user-defined prefix value of a namespace.
  *
  * @access   public
  */
  public function getNamespacePrefix($namespaceindex) {
    return secureblackbox_xmlencryptor_get($this->handle, 18 , $namespaceindex);
  }
 /**
  * A user-defined prefix value of a namespace.
  *
  * @access   public
  * @param    string   value
  */
  public function setNamespacePrefix($namespaceindex, $value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 18, $value , $namespaceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A user-defined URI value of a namespace.
  *
  * @access   public
  */
  public function getNamespaceURI($namespaceindex) {
    return secureblackbox_xmlencryptor_get($this->handle, 19 , $namespaceindex);
  }
 /**
  * A user-defined URI value of a namespace.
  *
  * @access   public
  * @param    string   value
  */
  public function setNamespaceURI($namespaceindex, $value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 19, $value , $namespaceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_xmlencryptor_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_xmlencryptor_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlencryptor_get_last_error($this->handle));
    }
    return $ret;
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

 /**
  * Reports the XML element that is currently being processed.
  *
  * @access   public
  * @param    array   Array of event parameters: starttagwhitespace, endtagwhitespace, level, path, haschildelements    
  */
  public function fireFormatElement($param) {
    return $param;
  }

 /**
  * Reports XML text that is currently being processed.
  *
  * @access   public
  * @param    array   Array of event parameters: text, texttype, level, path    
  */
  public function fireFormatText($param) {
    return $param;
  }


}

?>
