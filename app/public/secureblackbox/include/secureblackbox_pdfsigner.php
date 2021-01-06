<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - PDFSigner Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_PDFSigner {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_pdfsigner_open(SECUREBLACKBOX_OEMKEY_791);
    secureblackbox_pdfsigner_register_callback($this->handle, 1, array($this, 'fireDecryptionInfoNeeded'));
    secureblackbox_pdfsigner_register_callback($this->handle, 2, array($this, 'fireError'));
    secureblackbox_pdfsigner_register_callback($this->handle, 3, array($this, 'fireExternalDecrypt'));
    secureblackbox_pdfsigner_register_callback($this->handle, 4, array($this, 'fireExternalSign'));
    secureblackbox_pdfsigner_register_callback($this->handle, 5, array($this, 'fireRecipientFound'));
  }
  
  public function __destruct() {
    secureblackbox_pdfsigner_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_pdfsigner_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_pdfsigner_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_pdfsigner_do_config($this->handle, $configurationstring);
		$err = secureblackbox_pdfsigner_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Extracts user data from the DC signing service response.
  *
  * @access   public
  * @param    string    asyncreply
  */
  public function doExtractAsyncData($asyncreply) {
    $ret = secureblackbox_pdfsigner_do_extractasyncdata($this->handle, $asyncreply);
		$err = secureblackbox_pdfsigner_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs a PDF document.
  *
  * @access   public
  */
  public function doSign() {
    $ret = secureblackbox_pdfsigner_do_sign($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Initiates the asynchronous signing operation.
  *
  * @access   public
  */
  public function doSignAsyncBegin() {
    $ret = secureblackbox_pdfsigner_do_signasyncbegin($this->handle);
		$err = secureblackbox_pdfsigner_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Completes the asynchronous signing operation.
  *
  * @access   public
  * @param    string    asyncreply
  */
  public function doSignAsyncEnd($asyncreply) {
    $ret = secureblackbox_pdfsigner_do_signasyncend($this->handle, $asyncreply);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs the document using an external signing facility.
  *
  * @access   public
  */
  public function doSignExternal() {
    $ret = secureblackbox_pdfsigner_do_signexternal($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Updates a signature.
  *
  * @access   public
  */
  public function doUpdate() {
    $ret = secureblackbox_pdfsigner_do_update($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_pdfsigner_get($this->handle, 0);
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  */
  public function getBlockedCertCount() {
    return secureblackbox_pdfsigner_get($this->handle, 1 );
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setBlockedCertCount($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getBlockedCertBytes($blockedcertindex) {
    return secureblackbox_pdfsigner_get($this->handle, 2 , $blockedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getBlockedCertHandle($blockedcertindex) {
    return secureblackbox_pdfsigner_get($this->handle, 3 , $blockedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setBlockedCertHandle($blockedcertindex, $value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 3, $value , $blockedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The signing time from the signer's computer.
  *
  * @access   public
  */
  public function getClaimedSigningTime() {
    return secureblackbox_pdfsigner_get($this->handle, 4 );
  }
 /**
  * The signing time from the signer's computer.
  *
  * @access   public
  * @param    string   value
  */
  public function setClaimedSigningTime($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getDecryptionCertificateBytes() {
    return secureblackbox_pdfsigner_get($this->handle, 5 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getDecryptionCertificateHandle() {
    return secureblackbox_pdfsigner_get($this->handle, 6 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setDecryptionCertificateHandle($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the DecryptionCert arrays.
  *
  * @access   public
  */
  public function getDecryptionCertCount() {
    return secureblackbox_pdfsigner_get($this->handle, 7 );
  }
 /**
  * The number of records in the DecryptionCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setDecryptionCertCount($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getDecryptionCertBytes($decryptioncertindex) {
    return secureblackbox_pdfsigner_get($this->handle, 8 , $decryptioncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getDecryptionCertHandle($decryptioncertindex) {
    return secureblackbox_pdfsigner_get($this->handle, 9 , $decryptioncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setDecryptionCertHandle($decryptioncertindex, $value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 9, $value , $decryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the index of the empty signature field to sign.
  *
  * @access   public
  */
  public function getEmptyFieldIndex() {
    return secureblackbox_pdfsigner_get($this->handle, 10 );
  }
 /**
  * Specifies the index of the empty signature field to sign.
  *
  * @access   public
  * @param    int   value
  */
  public function setEmptyFieldIndex($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the PDF document is encrypted.
  *
  * @access   public
  */
  public function getEncrypted() {
    return secureblackbox_pdfsigner_get($this->handle, 11 );
  }


 /**
  * The symmetric algorithm used to encrypt the document.
  *
  * @access   public
  */
  public function getEncryptionAlgorithm() {
    return secureblackbox_pdfsigner_get($this->handle, 12 );
  }


 /**
  * The document encryption type.
  *
  * @access   public
  */
  public function getEncryptionType() {
    return secureblackbox_pdfsigner_get($this->handle, 13 );
  }


 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_pdfsigner_get($this->handle, 14 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_pdfsigner_get($this->handle, 15 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_pdfsigner_get($this->handle, 16 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_pdfsigner_get($this->handle, 17 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_pdfsigner_get($this->handle, 18 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_pdfsigner_get($this->handle, 19 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 19, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_pdfsigner_get($this->handle, 20 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 20, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_pdfsigner_get($this->handle, 21 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_pdfsigner_get($this->handle, 22 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 22, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the index of the signature field to update.
  *
  * @access   public
  */
  public function getFieldIndex() {
    return secureblackbox_pdfsigner_get($this->handle, 23 );
  }
 /**
  * Specifies the index of the signature field to update.
  *
  * @access   public
  * @param    int   value
  */
  public function setFieldIndex($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 23, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Makes the class tolerant to chain validation errors.
  *
  * @access   public
  */
  public function getIgnoreChainValidationErrors() {
    return secureblackbox_pdfsigner_get($this->handle, 24 );
  }
 /**
  * Makes the class tolerant to chain validation errors.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setIgnoreChainValidationErrors($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 24, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The PDF file to be signed or updated.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_pdfsigner_get($this->handle, 25 );
  }
 /**
  * The PDF file to be signed or updated.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 25, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  */
  public function getKnownCertCount() {
    return secureblackbox_pdfsigner_get($this->handle, 26 );
  }
 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCertCount($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKnownCertBytes($knowncertindex) {
    return secureblackbox_pdfsigner_get($this->handle, 27 , $knowncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCertHandle($knowncertindex) {
    return secureblackbox_pdfsigner_get($this->handle, 28 , $knowncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCertHandle($knowncertindex, $value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 28, $value , $knowncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  */
  public function getKnownCRLCount() {
    return secureblackbox_pdfsigner_get($this->handle, 29 );
  }
 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCRLCount($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 29, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getKnownCRLBytes($knowncrlindex) {
    return secureblackbox_pdfsigner_get($this->handle, 30 , $knowncrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCRLHandle($knowncrlindex) {
    return secureblackbox_pdfsigner_get($this->handle, 31 , $knowncrlindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCRLHandle($knowncrlindex, $value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 31, $value , $knowncrlindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  */
  public function getKnownOCSPCount() {
    return secureblackbox_pdfsigner_get($this->handle, 32 );
  }
 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownOCSPCount($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getKnownOCSPBytes($knownocspindex) {
    return secureblackbox_pdfsigner_get($this->handle, 33 , $knownocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownOCSPHandle($knownocspindex) {
    return secureblackbox_pdfsigner_get($this->handle, 34 , $knownocspindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownOCSPHandle($knownocspindex, $value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 34, $value , $knownocspindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the document metadata is encrypted.
  *
  * @access   public
  */
  public function getMetadataEncrypted() {
    return secureblackbox_pdfsigner_get($this->handle, 35 );
  }


 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  */
  public function getOfflineMode() {
    return secureblackbox_pdfsigner_get($this->handle, 36 );
  }
 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setOfflineMode($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The file to save the signed or updated document to.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_pdfsigner_get($this->handle, 37 );
  }
 /**
  * The file to save the signed or updated document to.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 37, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The decryption password.
  *
  * @access   public
  */
  public function getPassword() {
    return secureblackbox_pdfsigner_get($this->handle, 38 );
  }
 /**
  * The decryption password.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassword($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 38, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether the viewer may add annotations to the document.
  *
  * @access   public
  */
  public function getPermsAnnotations() {
    return secureblackbox_pdfsigner_get($this->handle, 39 );
  }


 /**
  * Indicates if the viewer may assemble a new document on the basis of the encrypted one.
  *
  * @access   public
  */
  public function getPermsAssemble() {
    return secureblackbox_pdfsigner_get($this->handle, 40 );
  }


 /**
  * Indicates if the user may extract (copy) pictures and text from the encrypted document.
  *
  * @access   public
  */
  public function getPermsExtract() {
    return secureblackbox_pdfsigner_get($this->handle, 41 );
  }


 /**
  * Indicates if the user may extract pictures/text from the document for accessibility purposes.
  *
  * @access   public
  */
  public function getPermsExtractAcc() {
    return secureblackbox_pdfsigner_get($this->handle, 42 );
  }


 /**
  * Indicates if the user may fill in forms in the document.
  *
  * @access   public
  */
  public function getPermsFillInForms() {
    return secureblackbox_pdfsigner_get($this->handle, 43 );
  }


 /**
  * Indicates if the document may be printed in high quality.
  *
  * @access   public
  */
  public function getPermsHighQualityPrint() {
    return secureblackbox_pdfsigner_get($this->handle, 44 );
  }


 /**
  * Indicates if the document may be printed in low quality.
  *
  * @access   public
  */
  public function getPermsLowQualityPrint() {
    return secureblackbox_pdfsigner_get($this->handle, 45 );
  }


 /**
  * Indicates if the document may be modified.
  *
  * @access   public
  */
  public function getPermsModify() {
    return secureblackbox_pdfsigner_get($this->handle, 46 );
  }


 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_pdfsigner_get($this->handle, 47 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_pdfsigner_get($this->handle, 48 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 48, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_pdfsigner_get($this->handle, 49 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 49, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_pdfsigner_get($this->handle, 50 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_pdfsigner_get($this->handle, 51 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 51, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_pdfsigner_get($this->handle, 52 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_pdfsigner_get($this->handle, 53 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_pdfsigner_get($this->handle, 54 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_pdfsigner_get($this->handle, 55 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_pdfsigner_get($this->handle, 56 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_pdfsigner_get($this->handle, 57 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 57, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getRevocationCheck() {
    return secureblackbox_pdfsigner_get($this->handle, 58 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setRevocationCheck($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 58, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Caption of the signature widget property with information about the signature algorithm.
  *
  * @access   public
  */
  public function getSigAlgorithmCaption() {
    return secureblackbox_pdfsigner_get($this->handle, 59 );
  }
 /**
  * Caption of the signature widget property with information about the signature algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigAlgorithmCaption($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 59, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Information about the algorithm to be shown on the signature widget.
  *
  * @access   public
  */
  public function getSigAlgorithmInfo() {
    return secureblackbox_pdfsigner_get($this->handle, 60 );
  }
 /**
  * Information about the algorithm to be shown on the signature widget.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigAlgorithmInfo($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 60, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The changes to the document are allowed by the signature.
  *
  * @access   public
  */
  public function getSigAllowedChanges() {
    return secureblackbox_pdfsigner_get($this->handle, 61 );
  }
 /**
  * The changes to the document are allowed by the signature.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigAllowedChanges($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 61, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A human-readable signer name.
  *
  * @access   public
  */
  public function getSigAuthorName() {
    return secureblackbox_pdfsigner_get($this->handle, 62 );
  }
 /**
  * A human-readable signer name.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigAuthorName($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 62, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables automated encoding selection by the class.
  *
  * @access   public
  */
  public function getSigAutoAdjustEncoding() {
    return secureblackbox_pdfsigner_get($this->handle, 63 );
  }
 /**
  * Enables or disables automated encoding selection by the class.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigAutoAdjustEncoding($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 63, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables default widget font sizes.
  *
  * @access   public
  */
  public function getSigAutoFontSize() {
    return secureblackbox_pdfsigner_get($this->handle, 64 );
  }
 /**
  * Enables default widget font sizes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigAutoFontSize($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 64, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use the default widget position on a page.
  *
  * @access   public
  */
  public function getSigAutoPos() {
    return secureblackbox_pdfsigner_get($this->handle, 65 );
  }
 /**
  * Use the default widget position on a page.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigAutoPos($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 65, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use the default widget size.
  *
  * @access   public
  */
  public function getSigAutoSize() {
    return secureblackbox_pdfsigner_get($this->handle, 66 );
  }
 /**
  * Use the default widget size.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigAutoSize($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 66, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Stretches the background picture to fit the signature widget.
  *
  * @access   public
  */
  public function getSigAutoStretchBackground() {
    return secureblackbox_pdfsigner_get($this->handle, 67 );
  }
 /**
  * Stretches the background picture to fit the signature widget.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigAutoStretchBackground($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use the default widget descriptions.
  *
  * @access   public
  */
  public function getSigAutoText() {
    return secureblackbox_pdfsigner_get($this->handle, 68 );
  }
 /**
  * Use the default widget descriptions.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigAutoText($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 68, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains/takes the data of the signature widget background bitmap.
  *
  * @access   public
  */
  public function getSigBackgroundData() {
    return secureblackbox_pdfsigner_get($this->handle, 69 );
  }
 /**
  * Contains/takes the data of the signature widget background bitmap.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigBackgroundData($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 69, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The height of the background image in pixels.
  *
  * @access   public
  */
  public function getSigBackgroundHeight() {
    return secureblackbox_pdfsigner_get($this->handle, 70 );
  }
 /**
  * The height of the background image in pixels.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigBackgroundHeight($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 70, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the image contained in BackgroundData .
  *
  * @access   public
  */
  public function getSigBackgroundImageType() {
    return secureblackbox_pdfsigner_get($this->handle, 71 );
  }
 /**
  * The type of the image contained in BackgroundData .
  *
  * @access   public
  * @param    int   value
  */
  public function setSigBackgroundImageType($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the background image mask.
  *
  * @access   public
  */
  public function getSigBackgroundMask() {
    return secureblackbox_pdfsigner_get($this->handle, 72 );
  }
 /**
  * Contains the background image mask.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigBackgroundMask($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The style of the signature widget background.
  *
  * @access   public
  */
  public function getSigBackgroundStyle() {
    return secureblackbox_pdfsigner_get($this->handle, 73 );
  }
 /**
  * The style of the signature widget background.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigBackgroundStyle($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The width of the background image in pixels.
  *
  * @access   public
  */
  public function getSigBackgroundWidth() {
    return secureblackbox_pdfsigner_get($this->handle, 74 );
  }
 /**
  * The width of the background image in pixels.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigBackgroundWidth($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether this is a Certification (MDP) signature.
  *
  * @access   public
  */
  public function getSigCertification() {
    return secureblackbox_pdfsigner_get($this->handle, 75 );
  }
 /**
  * Specifies whether this is a Certification (MDP) signature.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigCertification($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 75, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getSigChainValidationDetails() {
    return secureblackbox_pdfsigner_get($this->handle, 76 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getSigChainValidationResult() {
    return secureblackbox_pdfsigner_get($this->handle, 77 );
  }


 /**
  * Returns or sets signature's creation time.
  *
  * @access   public
  */
  public function getSigClaimedSigningTime() {
    return secureblackbox_pdfsigner_get($this->handle, 78 );
  }
 /**
  * Returns or sets signature's creation time.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigClaimedSigningTime($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether the signature widget data should be compressed before saving.
  *
  * @access   public
  */
  public function getSigCompressWidgetData() {
    return secureblackbox_pdfsigner_get($this->handle, 79 );
  }
 /**
  * Whether the signature widget data should be compressed before saving.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigCompressWidgetData($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 79, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains signer's contact information.
  *
  * @access   public
  */
  public function getSigContactInfo() {
    return secureblackbox_pdfsigner_get($this->handle, 80 );
  }
 /**
  * Contains signer's contact information.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigContactInfo($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 80, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the offset in the PDF file where signature coverage ends.
  *
  * @access   public
  */
  public function getSigCoverageEndsAt() {
    return secureblackbox_pdfsigner_get($this->handle, 81 );
  }


 /**
  * Contains custom widget description in raw PDF graphic operators format.
  *
  * @access   public
  */
  public function getSigCustomAppearance() {
    return secureblackbox_pdfsigner_get($this->handle, 82 );
  }
 /**
  * Contains custom widget description in raw PDF graphic operators format.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigCustomAppearance($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 82, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies custom custom background content stream for pwbsCustom BackgroundStyle .
  *
  * @access   public
  */
  public function getSigCustomBackgroundContentStream() {
    return secureblackbox_pdfsigner_get($this->handle, 83 );
  }
 /**
  * Specifies custom custom background content stream for pwbsCustom BackgroundStyle .
  *
  * @access   public
  * @param    string   value
  */
  public function setSigCustomBackgroundContentStream($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 83, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A uninterpreted custom data to save with the signature.
  *
  * @access   public
  */
  public function getSigCustomData() {
    return secureblackbox_pdfsigner_get($this->handle, 84 );
  }
 /**
  * A uninterpreted custom data to save with the signature.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigCustomData($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 84, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the custom visual status matrix.
  *
  * @access   public
  */
  public function getSigCustomVisualStatusMatrix() {
    return secureblackbox_pdfsigner_get($this->handle, 85 );
  }
 /**
  * Defines the custom visual status matrix.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigCustomVisualStatusMatrix($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 85, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The format string used to display the signing time in the signature widget.
  *
  * @access   public
  */
  public function getSigDateCaptionFormat() {
    return secureblackbox_pdfsigner_get($this->handle, 86 );
  }
 /**
  * The format string used to display the signing time in the signature widget.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigDateCaptionFormat($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 86, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether or not the signature created/read is an empty property (a signature placeholder).
  *
  * @access   public
  */
  public function getSigEmptyField() {
    return secureblackbox_pdfsigner_get($this->handle, 87 );
  }
 /**
  * Indicates whether or not the signature created/read is an empty property (a signature placeholder).
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigEmptyField($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 87, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The signature filter name.
  *
  * @access   public
  */
  public function getSigFilterName() {
    return secureblackbox_pdfsigner_get($this->handle, 88 );
  }
 /**
  * The signature filter name.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigFilterName($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 88, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigHandle() {
    return secureblackbox_pdfsigner_get($this->handle, 89 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigHandle($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 89, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used for signing.
  *
  * @access   public
  */
  public function getSigHashAlgorithm() {
    return secureblackbox_pdfsigner_get($this->handle, 90 );
  }
 /**
  * Specifies the hash algorithm to be used for signing.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigHashAlgorithm($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 90, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the header text to put on the signature widget.
  *
  * @access   public
  */
  public function getSigHeader() {
    return secureblackbox_pdfsigner_get($this->handle, 91 );
  }
 /**
  * Specifies the header text to put on the signature widget.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigHeader($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 91, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the height of the signature widget.
  *
  * @access   public
  */
  public function getSigHeight() {
    return secureblackbox_pdfsigner_get($this->handle, 92 );
  }
 /**
  * Specifies the height of the signature widget.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigHeight($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 92, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Switch offs generation of any headers for the signature widget.
  *
  * @access   public
  */
  public function getSigHideDefaultText() {
    return secureblackbox_pdfsigner_get($this->handle, 93 );
  }
 /**
  * Switch offs generation of any headers for the signature widget.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigHideDefaultText($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 93, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Tells the class to discard any existing widget parameters when signing empty signature properties.
  *
  * @access   public
  */
  public function getSigIgnoreExistingAppearance() {
    return secureblackbox_pdfsigner_get($this->handle, 94 );
  }
 /**
  * Tells the class to discard any existing widget parameters when signing empty signature properties.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigIgnoreExistingAppearance($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 94, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether BackgroundMask should be inverted.
  *
  * @access   public
  */
  public function getSigInvertMask() {
    return secureblackbox_pdfsigner_get($this->handle, 95 );
  }
 /**
  * Specifies whether BackgroundMask should be inverted.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigInvertMask($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 95, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Controls whether the signature widget is visible on the page.
  *
  * @access   public
  */
  public function getSigInvisible() {
    return secureblackbox_pdfsigner_get($this->handle, 96 );
  }
 /**
  * Controls whether the signature widget is visible on the page.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigInvisible($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 96, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the signature kind and level.
  *
  * @access   public
  */
  public function getSigLevel() {
    return secureblackbox_pdfsigner_get($this->handle, 97 );
  }
 /**
  * Specifies the signature kind and level.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigLevel($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 97, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the host name or the physical location of the signing entity.
  *
  * @access   public
  */
  public function getSigLocation() {
    return secureblackbox_pdfsigner_get($this->handle, 98 );
  }
 /**
  * Specifies the host name or the physical location of the signing entity.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigLocation($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 98, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the signature widget can be moved by the user.
  *
  * @access   public
  */
  public function getSigLocked() {
    return secureblackbox_pdfsigner_get($this->handle, 99 );
  }
 /**
  * Specifies whether the signature widget can be moved by the user.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigLocked($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 99, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether signature widget contents should be locked.
  *
  * @access   public
  */
  public function getSigLockedContents() {
    return secureblackbox_pdfsigner_get($this->handle, 100 );
  }
 /**
  * Specifies whether signature widget contents should be locked.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigLockedContents($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 100, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * If this value is True the signature widget will not  be rotated when the document is rotated in the viewing app.
  *
  * @access   public
  */
  public function getSigNoRotate() {
    return secureblackbox_pdfsigner_get($this->handle, 101 );
  }
 /**
  * If this value is True the signature widget will not  be rotated when the document is rotated in the viewing app.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigNoRotate($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 101, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * If this value is True the signature widget will not be displayed  when the document is viewed.
  *
  * @access   public
  */
  public function getSigNoView() {
    return secureblackbox_pdfsigner_get($this->handle, 102 );
  }
 /**
  * If this value is True the signature widget will not be displayed  when the document is viewed.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigNoView($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 102, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * If this value is True the signature widget size will not  be changed during zooming.
  *
  * @access   public
  */
  public function getSigNoZoom() {
    return secureblackbox_pdfsigner_get($this->handle, 103 );
  }
 /**
  * If this value is True the signature widget size will not  be changed during zooming.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigNoZoom($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 103, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the signature widget offset from the left-hand page border  when AutoPos is False.
  *
  * @access   public
  */
  public function getSigOffsetX() {
    return secureblackbox_pdfsigner_get($this->handle, 104 );
  }
 /**
  * Specifies the signature widget offset from the left-hand page border  when AutoPos is False.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigOffsetX($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 104, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the signature widget offset from the bottom page border  when AutoPos is False.
  *
  * @access   public
  */
  public function getSigOffsetY() {
    return secureblackbox_pdfsigner_get($this->handle, 105 );
  }
 /**
  * Specifies the signature widget offset from the bottom page border  when AutoPos is False.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigOffsetY($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 105, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The index of the page on which to place the signature.
  *
  * @access   public
  */
  public function getSigPage() {
    return secureblackbox_pdfsigner_get($this->handle, 106 );
  }
 /**
  * The index of the page on which to place the signature.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigPage($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 106, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Page numbers on which the signature is shown.
  *
  * @access   public
  */
  public function getSigPagesToPlaceOn() {
    return secureblackbox_pdfsigner_get($this->handle, 107 );
  }
 /**
  * Page numbers on which the signature is shown.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigPagesToPlaceOn($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 107, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The signature policy hash value for EPES signatures.
  *
  * @access   public
  */
  public function getSigPolicyHash() {
    return secureblackbox_pdfsigner_get($this->handle, 108 );
  }
 /**
  * The signature policy hash value for EPES signatures.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigPolicyHash($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 108, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The algorithm that was used to calculate the signature policy hash.
  *
  * @access   public
  */
  public function getSigPolicyHashAlgorithm() {
    return secureblackbox_pdfsigner_get($this->handle, 109 );
  }
 /**
  * The algorithm that was used to calculate the signature policy hash.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigPolicyHashAlgorithm($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 109, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The policy ID to be included into the signature.
  *
  * @access   public
  */
  public function getSigPolicyID() {
    return secureblackbox_pdfsigner_get($this->handle, 110 );
  }
 /**
  * The policy ID to be included into the signature.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigPolicyID($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 110, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether the signature shall appear in printed documents.
  *
  * @access   public
  */
  public function getSigPrint() {
    return secureblackbox_pdfsigner_get($this->handle, 111 );
  }
 /**
  * Whether the signature shall appear in printed documents.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigPrint($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 111, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates a qualified electronic signature.
  *
  * @access   public
  */
  public function getSigQualified() {
    return secureblackbox_pdfsigner_get($this->handle, 112 );
  }


 /**
  * Controls the ReadOnly flag of the widget.
  *
  * @access   public
  */
  public function getSigReadOnly() {
    return secureblackbox_pdfsigner_get($this->handle, 113 );
  }
 /**
  * Controls the ReadOnly flag of the widget.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigReadOnly($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 113, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the reason for signing.
  *
  * @access   public
  */
  public function getSigReason() {
    return secureblackbox_pdfsigner_get($this->handle, 114 );
  }
 /**
  * Specifies the reason for signing.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigReason($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 114, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the rotation angle of the signature widget in degrees.
  *
  * @access   public
  */
  public function getSigRotate() {
    return secureblackbox_pdfsigner_get($this->handle, 115 );
  }
 /**
  * Specifies the rotation angle of the signature widget in degrees.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigRotate($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 115, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether the text in the signature widget should be saved in  Unicode instead of ANSI.
  *
  * @access   public
  */
  public function getSigSaveStringsInUnicodeEncoding() {
    return secureblackbox_pdfsigner_get($this->handle, 116 );
  }
 /**
  * Whether the text in the signature widget should be saved in  Unicode instead of ANSI.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigSaveStringsInUnicodeEncoding($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 116, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify the font size to be used for general text on the widget.
  *
  * @access   public
  */
  public function getSigSectionTextFontSize() {
    return secureblackbox_pdfsigner_get($this->handle, 117 );
  }
 /**
  * Use this property to specify the font size to be used for general text on the widget.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigSectionTextFontSize($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 117, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify the font size to be used for section title text on the widget.
  *
  * @access   public
  */
  public function getSigSectionTitleFontSize() {
    return secureblackbox_pdfsigner_get($this->handle, 118 );
  }
 /**
  * Use this property to specify the font size to be used for section title text on the widget.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigSectionTitleFontSize($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 118, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Forces the signature widget to be displayed on all pages in the document.
  *
  * @access   public
  */
  public function getSigShowOnAllPages() {
    return secureblackbox_pdfsigner_get($this->handle, 119 );
  }
 /**
  * Forces the signature widget to be displayed on all pages in the document.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigShowOnAllPages($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 119, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to display the signing time details on the widget.
  *
  * @access   public
  */
  public function getSigShowTimestamp() {
    return secureblackbox_pdfsigner_get($this->handle, 120 );
  }
 /**
  * Whether to display the signing time details on the widget.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigShowTimestamp($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 120, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether to show the signature's status icon.
  *
  * @access   public
  */
  public function getSigShowVisualStatus() {
    return secureblackbox_pdfsigner_get($this->handle, 121 );
  }
 /**
  * Specifies whether to show the signature's status icon.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigShowVisualStatus($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 121, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the unique signature identifier to use.
  *
  * @access   public
  */
  public function getSigSignatureName() {
    return secureblackbox_pdfsigner_get($this->handle, 122 );
  }
 /**
  * Specifies the unique signature identifier to use.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigSignatureName($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 122, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The outcome of the cryptographic signature validation.
  *
  * @access   public
  */
  public function getSigSignatureValidationResult() {
    return secureblackbox_pdfsigner_get($this->handle, 123 );
  }


 /**
  * Specifies the caption for the signer section on the signature widget.
  *
  * @access   public
  */
  public function getSigSignerCaption() {
    return secureblackbox_pdfsigner_get($this->handle, 124 );
  }
 /**
  * Specifies the caption for the signer section on the signature widget.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigSignerCaption($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 124, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provides custom signer information to put on the signature widget.
  *
  * @access   public
  */
  public function getSigSignerInfo() {
    return secureblackbox_pdfsigner_get($this->handle, 125 );
  }
 /**
  * Provides custom signer information to put on the signature widget.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigSignerInfo($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 125, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to manually adjust the horizontal size of the stretched background picture.
  *
  * @access   public
  */
  public function getSigStretchX() {
    return secureblackbox_pdfsigner_get($this->handle, 126 );
  }
 /**
  * Use this property to manually adjust the horizontal size of the stretched background picture.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigStretchX($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 126, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to manually adjust the size of the stretched background  picture in the vertical direction.
  *
  * @access   public
  */
  public function getSigStretchY() {
    return secureblackbox_pdfsigner_get($this->handle, 127 );
  }
 /**
  * Use this property to manually adjust the size of the stretched background  picture in the vertical direction.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigStretchY($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 127, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the RDN of the owner of the signing certificate.
  *
  * @access   public
  */
  public function getSigSubjectRDN() {
    return secureblackbox_pdfsigner_get($this->handle, 128 );
  }


 /**
  * Indicates if the signature is timestamped.
  *
  * @access   public
  */
  public function getSigTimestamped() {
    return secureblackbox_pdfsigner_get($this->handle, 129 );
  }


 /**
  * Use this property to specify the font size to be used for timestamp text on the widget.
  *
  * @access   public
  */
  public function getSigTimestampFontSize() {
    return secureblackbox_pdfsigner_get($this->handle, 130 );
  }
 /**
  * Use this property to specify the font size to be used for timestamp text on the widget.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigTimestampFontSize($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 130, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify the font size to be used for the main title on the widget.
  *
  * @access   public
  */
  public function getSigTitleFontSize() {
    return secureblackbox_pdfsigner_get($this->handle, 131 );
  }
 /**
  * Use this property to specify the font size to be used for the main title on the widget.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigTitleFontSize($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 131, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * When True, the signature widget will be displayed only when the user is moving a mouse over it.
  *
  * @access   public
  */
  public function getSigToggleNoView() {
    return secureblackbox_pdfsigner_get($this->handle, 132 );
  }
 /**
  * When True, the signature widget will be displayed only when the user is moving a mouse over it.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSigToggleNoView($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 132, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the certified signing time.
  *
  * @access   public
  */
  public function getSigValidatedSigningTime() {
    return secureblackbox_pdfsigner_get($this->handle, 133 );
  }


 /**
  * Contains the signing certificate's chain validation log.
  *
  * @access   public
  */
  public function getSigValidationLog() {
    return secureblackbox_pdfsigner_get($this->handle, 134 );
  }


 /**
  * Specifies the width of the signature widget.
  *
  * @access   public
  */
  public function getSigWidth() {
    return secureblackbox_pdfsigner_get($this->handle, 135 );
  }
 /**
  * Specifies the width of the signature widget.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigWidth($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 135, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningCertBytes() {
    return secureblackbox_pdfsigner_get($this->handle, 136 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningCertHandle() {
    return secureblackbox_pdfsigner_get($this->handle, 137 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningCertHandle($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 137, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  */
  public function getSigningChainCount() {
    return secureblackbox_pdfsigner_get($this->handle, 138 );
  }
 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigningChainCount($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 138, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningChainBytes($signingchainindex) {
    return secureblackbox_pdfsigner_get($this->handle, 139 , $signingchainindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningChainHandle($signingchainindex) {
    return secureblackbox_pdfsigner_get($this->handle, 140 , $signingchainindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningChainHandle($signingchainindex, $value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 140, $value , $signingchainindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_pdfsigner_get($this->handle, 141 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 141, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_pdfsigner_get($this->handle, 142 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 142, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_pdfsigner_get($this->handle, 143 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 143, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_pdfsigner_get($this->handle, 144 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 144, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_pdfsigner_get($this->handle, 145 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 145, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_pdfsigner_get($this->handle, 146 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 146, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_pdfsigner_get($this->handle, 147 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 147, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_pdfsigner_get($this->handle, 148 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 148, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_pdfsigner_get($this->handle, 149 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 149, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_pdfsigner_get($this->handle, 150 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 150, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_pdfsigner_get($this->handle, 151 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 151, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The address of the timestamping server.
  *
  * @access   public
  */
  public function getTimestampServer() {
    return secureblackbox_pdfsigner_get($this->handle, 152 );
  }
 /**
  * The address of the timestamping server.
  *
  * @access   public
  * @param    string   value
  */
  public function setTimestampServer($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 152, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_pdfsigner_get($this->handle, 153 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 153, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_pdfsigner_get($this->handle, 154 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 154, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_pdfsigner_get($this->handle, 155 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 155, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_pdfsigner_get($this->handle, 156 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 156, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_pdfsigner_get($this->handle, 157 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 157, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_pdfsigner_get($this->handle, 158 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 158, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_pdfsigner_get($this->handle, 159 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 159, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_pdfsigner_get($this->handle, 160 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 160, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_pdfsigner_get($this->handle, 161 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 161, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_pdfsigner_get($this->handle, 162 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 162, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_pdfsigner_get($this->handle, 163 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 163, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_pdfsigner_get($this->handle, 164 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 164, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_pdfsigner_get($this->handle, 165 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 165, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_pdfsigner_get($this->handle, 166 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 166, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_pdfsigner_get($this->handle, 167 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 167, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  */
  public function getTrustedCertCount() {
    return secureblackbox_pdfsigner_get($this->handle, 168 );
  }
 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setTrustedCertCount($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 168, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTrustedCertBytes($trustedcertindex) {
    return secureblackbox_pdfsigner_get($this->handle, 169 , $trustedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTrustedCertHandle($trustedcertindex) {
    return secureblackbox_pdfsigner_get($this->handle, 170 , $trustedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setTrustedCertHandle($trustedcertindex, $value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 170, $value , $trustedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the complete log of the certificate validation routine.
  *
  * @access   public
  */
  public function getValidationLog() {
    return secureblackbox_pdfsigner_get($this->handle, 171 );
  }




  public function getRuntimeLicense() {
    return secureblackbox_pdfsigner_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_pdfsigner_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfsigner_get_last_error($this->handle));
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
  * Handles remote or external signing initiated by the SignExternal method or other source.
  *
  * @access   public
  * @param    array   Array of event parameters: operationid, hashalgorithm, pars, data, signeddata    
  */
  public function fireExternalSign($param) {
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
