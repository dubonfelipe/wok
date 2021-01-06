<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - XMLDecryptor Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_XMLDecryptor {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_xmldecryptor_open(SECUREBLACKBOX_OEMKEY_786);
    secureblackbox_xmldecryptor_register_callback($this->handle, 1, array($this, 'fireDecryptionInfoNeeded'));
    secureblackbox_xmldecryptor_register_callback($this->handle, 2, array($this, 'fireError'));
    secureblackbox_xmldecryptor_register_callback($this->handle, 3, array($this, 'fireExternalDecrypt'));
    secureblackbox_xmldecryptor_register_callback($this->handle, 4, array($this, 'fireSaveExternalData'));
  }
  
  public function __destruct() {
    secureblackbox_xmldecryptor_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_xmldecryptor_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_xmldecryptor_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_xmldecryptor_do_config($this->handle, $configurationstring);
		$err = secureblackbox_xmldecryptor_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Decrypts an XML document.
  *
  * @access   public
  */
  public function doDecrypt() {
    $ret = secureblackbox_xmldecryptor_do_decrypt($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_xmldecryptor_get($this->handle, 0);
  }
 /**
  * The symmetric (session) key used to encrypt the data.
  *
  * @access   public
  */
  public function getDecryptionKey() {
    return secureblackbox_xmldecryptor_get($this->handle, 1 );
  }
 /**
  * The symmetric (session) key used to encrypt the data.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionKey($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies XML encoding.
  *
  * @access   public
  */
  public function getEncoding() {
    return secureblackbox_xmldecryptor_get($this->handle, 2 );
  }
 /**
  * Specifies XML encoding.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncoding($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the type of data being encrypted.
  *
  * @access   public
  */
  public function getEncryptedDataType() {
    return secureblackbox_xmldecryptor_get($this->handle, 3 );
  }


 /**
  * The encryption method used to encrypt the document.
  *
  * @access   public
  */
  public function getEncryptionMethod() {
    return secureblackbox_xmldecryptor_get($this->handle, 4 );
  }


 /**
  * Specifies if the encryption key is encrypted.
  *
  * @access   public
  */
  public function getEncryptKey() {
    return secureblackbox_xmldecryptor_get($this->handle, 5 );
  }


 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_xmldecryptor_get($this->handle, 6 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_xmldecryptor_get($this->handle, 7 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_xmldecryptor_get($this->handle, 8 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 8, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_xmldecryptor_get($this->handle, 9 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_xmldecryptor_get($this->handle, 10 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_xmldecryptor_get($this->handle, 11 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_xmldecryptor_get($this->handle, 12 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_xmldecryptor_get($this->handle, 13 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_xmldecryptor_get($this->handle, 14 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The data that should be encrypted.
  *
  * @access   public
  */
  public function getExternalData() {
    return secureblackbox_xmldecryptor_get($this->handle, 15 );
  }
 /**
  * The data that should be encrypted.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalData($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The XML file to be decrypted.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_xmldecryptor_get($this->handle, 16 );
  }
 /**
  * The XML file to be decrypted.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKeyDecryptionCertBytes() {
    return secureblackbox_xmldecryptor_get($this->handle, 17 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKeyDecryptionCertHandle() {
    return secureblackbox_xmldecryptor_get($this->handle, 18 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKeyDecryptionCertHandle($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The symmetric key used to decrypt a session key.
  *
  * @access   public
  */
  public function getKeyDecryptionKey() {
    return secureblackbox_xmldecryptor_get($this->handle, 19 );
  }
 /**
  * The symmetric key used to decrypt a session key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyDecryptionKey($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 19, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines how the session key is encrypted.
  *
  * @access   public
  */
  public function getKeyEncryptionType() {
    return secureblackbox_xmldecryptor_get($this->handle, 20 );
  }


 /**
  * The number of records in the KeyInfoItem arrays.
  *
  * @access   public
  */
  public function getKeyInfoItemCount() {
    return secureblackbox_xmldecryptor_get($this->handle, 21 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getKeyInfoItemIssuerRDN($keyinfoitemindex) {
    return secureblackbox_xmldecryptor_get($this->handle, 22 , $keyinfoitemindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getKeyInfoItemSerialNumber($keyinfoitemindex) {
    return secureblackbox_xmldecryptor_get($this->handle, 23 , $keyinfoitemindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getKeyInfoItemSubjectKeyID($keyinfoitemindex) {
    return secureblackbox_xmldecryptor_get($this->handle, 24 , $keyinfoitemindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getKeyInfoItemSubjectRDN($keyinfoitemindex) {
    return secureblackbox_xmldecryptor_get($this->handle, 25 , $keyinfoitemindex);
  }


 /**
  * The number of records in the KeyInfoCertificate arrays.
  *
  * @access   public
  */
  public function getKeyInfoCertificateCount() {
    return secureblackbox_xmldecryptor_get($this->handle, 26 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKeyInfoCertificateBytes($keyinfocertificateindex) {
    return secureblackbox_xmldecryptor_get($this->handle, 27 , $keyinfocertificateindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKeyInfoCertificateHandle($keyinfocertificateindex) {
    return secureblackbox_xmldecryptor_get($this->handle, 28 , $keyinfocertificateindex);
  }


 /**
  * Defines how the session key is encrypted.
  *
  * @access   public
  */
  public function getKeyTransportMethod() {
    return secureblackbox_xmldecryptor_get($this->handle, 29 );
  }


 /**
  * The key wrap method used to encrypt the session key.
  *
  * @access   public
  */
  public function getKeyWrapMethod() {
    return secureblackbox_xmldecryptor_get($this->handle, 30 );
  }


 /**
  * Defines where to save the decrypted XML document.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_xmldecryptor_get($this->handle, 31 );
  }
 /**
  * Defines where to save the decrypted XML document.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 31, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if GCM mode was enabled.
  *
  * @access   public
  */
  public function getUseGCM() {
    return secureblackbox_xmldecryptor_get($this->handle, 32 );
  }


 /**
  * Defines the XML element to decrypt.
  *
  * @access   public
  */
  public function getXMLElement() {
    return secureblackbox_xmldecryptor_get($this->handle, 33 );
  }
 /**
  * Defines the XML element to decrypt.
  *
  * @access   public
  * @param    string   value
  */
  public function setXMLElement($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Namespace arrays.
  *
  * @access   public
  */
  public function getNamespaceCount() {
    return secureblackbox_xmldecryptor_get($this->handle, 34 );
  }
 /**
  * The number of records in the Namespace arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setNamespaceCount($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A user-defined prefix value of a namespace.
  *
  * @access   public
  */
  public function getNamespacePrefix($namespaceindex) {
    return secureblackbox_xmldecryptor_get($this->handle, 35 , $namespaceindex);
  }
 /**
  * A user-defined prefix value of a namespace.
  *
  * @access   public
  * @param    string   value
  */
  public function setNamespacePrefix($namespaceindex, $value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 35, $value , $namespaceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A user-defined URI value of a namespace.
  *
  * @access   public
  */
  public function getNamespaceURI($namespaceindex) {
    return secureblackbox_xmldecryptor_get($this->handle, 36 , $namespaceindex);
  }
 /**
  * A user-defined URI value of a namespace.
  *
  * @access   public
  * @param    string   value
  */
  public function setNamespaceURI($namespaceindex, $value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 36, $value , $namespaceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_xmldecryptor_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_xmldecryptor_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmldecryptor_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Requests decryption information from the application.
  *
  * @access   public
  * @param    array   Array of event parameters: canceldecryption    
  */
  public function fireDecryptionInfoNeeded($param) {
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

 /**
  * Handles remote or external decryption.
  *
  * @access   public
  * @param    array   Array of event parameters: operationid, algorithm, pars, encrypteddata, data    
  */
  public function fireExternalDecrypt($param) {
    return $param;
  }

 /**
  * Request to save decrypted external data.
  *
  * @access   public
  * @param    array   Array of event parameters: externaldata    
  */
  public function fireSaveExternalData($param) {
    return $param;
  }


}

?>
