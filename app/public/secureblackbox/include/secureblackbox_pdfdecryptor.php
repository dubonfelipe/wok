<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - PDFDecryptor Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_PDFDecryptor {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_pdfdecryptor_open(SECUREBLACKBOX_OEMKEY_794);
    secureblackbox_pdfdecryptor_register_callback($this->handle, 1, array($this, 'fireDecryptionInfoNeeded'));
    secureblackbox_pdfdecryptor_register_callback($this->handle, 2, array($this, 'fireError'));
    secureblackbox_pdfdecryptor_register_callback($this->handle, 3, array($this, 'fireExternalDecrypt'));
    secureblackbox_pdfdecryptor_register_callback($this->handle, 4, array($this, 'fireRecipientFound'));
  }
  
  public function __destruct() {
    secureblackbox_pdfdecryptor_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_pdfdecryptor_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_pdfdecryptor_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_pdfdecryptor_do_config($this->handle, $configurationstring);
		$err = secureblackbox_pdfdecryptor_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Decrypts a PDF document.
  *
  * @access   public
  */
  public function doDecrypt() {
    $ret = secureblackbox_pdfdecryptor_do_decrypt($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_pdfdecryptor_get($this->handle, 0);
  }
 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getDecryptionCertificateBytes() {
    return secureblackbox_pdfdecryptor_get($this->handle, 1 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getDecryptionCertificateHandle() {
    return secureblackbox_pdfdecryptor_get($this->handle, 2 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setDecryptionCertificateHandle($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the DecryptionCert arrays.
  *
  * @access   public
  */
  public function getDecryptionCertCount() {
    return secureblackbox_pdfdecryptor_get($this->handle, 3 );
  }
 /**
  * The number of records in the DecryptionCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setDecryptionCertCount($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getDecryptionCertBytes($decryptioncertindex) {
    return secureblackbox_pdfdecryptor_get($this->handle, 4 , $decryptioncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getDecryptionCertHandle($decryptioncertindex) {
    return secureblackbox_pdfdecryptor_get($this->handle, 5 , $decryptioncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setDecryptionCertHandle($decryptioncertindex, $value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 5, $value , $decryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the PDF document is encrypted.
  *
  * @access   public
  */
  public function getEncrypted() {
    return secureblackbox_pdfdecryptor_get($this->handle, 6 );
  }


 /**
  * The symmetric algorithm used to encrypt the document.
  *
  * @access   public
  */
  public function getEncryptionAlgorithm() {
    return secureblackbox_pdfdecryptor_get($this->handle, 7 );
  }


 /**
  * The document encryption type.
  *
  * @access   public
  */
  public function getEncryptionType() {
    return secureblackbox_pdfdecryptor_get($this->handle, 8 );
  }


 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_pdfdecryptor_get($this->handle, 9 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_pdfdecryptor_get($this->handle, 10 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_pdfdecryptor_get($this->handle, 11 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_pdfdecryptor_get($this->handle, 12 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_pdfdecryptor_get($this->handle, 13 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_pdfdecryptor_get($this->handle, 14 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_pdfdecryptor_get($this->handle, 15 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_pdfdecryptor_get($this->handle, 16 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_pdfdecryptor_get($this->handle, 17 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The PDF file to be decrypted.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_pdfdecryptor_get($this->handle, 18 );
  }
 /**
  * The PDF file to be decrypted.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the document metadata is encrypted.
  *
  * @access   public
  */
  public function getMetadataEncrypted() {
    return secureblackbox_pdfdecryptor_get($this->handle, 19 );
  }


 /**
  * The file to save the decrypted document to.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_pdfdecryptor_get($this->handle, 20 );
  }
 /**
  * The file to save the decrypted document to.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 20, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The decryption password.
  *
  * @access   public
  */
  public function getPassword() {
    return secureblackbox_pdfdecryptor_get($this->handle, 21 );
  }
 /**
  * The decryption password.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassword($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether the viewer may add annotations to the document.
  *
  * @access   public
  */
  public function getPermsAnnotations() {
    return secureblackbox_pdfdecryptor_get($this->handle, 22 );
  }


 /**
  * Indicates if the viewer may assemble a new document on the basis of the encrypted one.
  *
  * @access   public
  */
  public function getPermsAssemble() {
    return secureblackbox_pdfdecryptor_get($this->handle, 23 );
  }


 /**
  * Indicates if the user may extract (copy) pictures and text from the encrypted document.
  *
  * @access   public
  */
  public function getPermsExtract() {
    return secureblackbox_pdfdecryptor_get($this->handle, 24 );
  }


 /**
  * Indicates if the user may extract pictures/text from the document for accessibility purposes.
  *
  * @access   public
  */
  public function getPermsExtractAcc() {
    return secureblackbox_pdfdecryptor_get($this->handle, 25 );
  }


 /**
  * Indicates if the user may fill in forms in the document.
  *
  * @access   public
  */
  public function getPermsFillInForms() {
    return secureblackbox_pdfdecryptor_get($this->handle, 26 );
  }


 /**
  * Indicates if the document may be printed in high quality.
  *
  * @access   public
  */
  public function getPermsHighQualityPrint() {
    return secureblackbox_pdfdecryptor_get($this->handle, 27 );
  }


 /**
  * Indicates if the document may be printed in low quality.
  *
  * @access   public
  */
  public function getPermsLowQualityPrint() {
    return secureblackbox_pdfdecryptor_get($this->handle, 28 );
  }


 /**
  * Indicates if the document may be modified.
  *
  * @access   public
  */
  public function getPermsModify() {
    return secureblackbox_pdfdecryptor_get($this->handle, 29 );
  }




  public function getRuntimeLicense() {
    return secureblackbox_pdfdecryptor_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_pdfdecryptor_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfdecryptor_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Requests decryption information during decryption, signing, or validation.
  *
  * @access   public
  * @param    array   Array of event parameters: canceldecryption    
  */
  public function fireDecryptionInfoNeeded($param) {
    return $param;
  }

 /**
  * Information about errors during signing/validation.
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
  * Provides recipient certificate details to the application.
  *
  * @access   public
  * @param    array   Array of event parameters: issuerrdn, serialnumber, subjectkeyid, certfound    
  */
  public function fireRecipientFound($param) {
    return $param;
  }


}

?>
