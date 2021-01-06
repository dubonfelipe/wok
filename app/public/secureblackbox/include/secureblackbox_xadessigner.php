<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - XAdESSigner Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_XAdESSigner {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_xadessigner_open(SECUREBLACKBOX_OEMKEY_782);
    secureblackbox_xadessigner_register_callback($this->handle, 1, array($this, 'fireError'));
    secureblackbox_xadessigner_register_callback($this->handle, 2, array($this, 'fireExternalSign'));
    secureblackbox_xadessigner_register_callback($this->handle, 3, array($this, 'fireFormatElement'));
    secureblackbox_xadessigner_register_callback($this->handle, 4, array($this, 'fireFormatText'));
    secureblackbox_xadessigner_register_callback($this->handle, 5, array($this, 'fireResolveReference'));
    secureblackbox_xadessigner_register_callback($this->handle, 6, array($this, 'fireStoreCertificate'));
    secureblackbox_xadessigner_register_callback($this->handle, 7, array($this, 'fireStoreCRL'));
    secureblackbox_xadessigner_register_callback($this->handle, 8, array($this, 'fireStoreOCSPResponse'));
  }
  
  public function __destruct() {
    secureblackbox_xadessigner_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_xadessigner_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_xadessigner_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_xadessigner_do_config($this->handle, $configurationstring);
		$err = secureblackbox_xadessigner_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
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
    $ret = secureblackbox_xadessigner_do_extractasyncdata($this->handle, $asyncreply);
		$err = secureblackbox_xadessigner_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs an XML document.
  *
  * @access   public
  */
  public function doSign() {
    $ret = secureblackbox_xadessigner_do_sign($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Initiates the asynchronous signing operation.
  *
  * @access   public
  */
  public function doSignAsyncBegin() {
    $ret = secureblackbox_xadessigner_do_signasyncbegin($this->handle);
		$err = secureblackbox_xadessigner_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
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
    $ret = secureblackbox_xadessigner_do_signasyncend($this->handle, $asyncreply);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs the document using an external signing facility.
  *
  * @access   public
  */
  public function doSignExternal() {
    $ret = secureblackbox_xadessigner_do_signexternal($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this method to add timestamp.
  *
  * @access   public
  * @param    int    timestamptype
  */
  public function doTimestamp($timestamptype) {
    $ret = secureblackbox_xadessigner_do_timestamp($this->handle, $timestamptype);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Upgrades existing XAdES signature to a new form.
  *
  * @access   public
  * @param    int    toform
  */
  public function doUpgrade($toform) {
    $ret = secureblackbox_xadessigner_do_upgrade($this->handle, $toform);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_xadessigner_get($this->handle, 0);
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  */
  public function getBlockedCertCount() {
    return secureblackbox_xadessigner_get($this->handle, 1 );
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setBlockedCertCount($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getBlockedCertBytes($blockedcertindex) {
    return secureblackbox_xadessigner_get($this->handle, 2 , $blockedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getBlockedCertHandle($blockedcertindex) {
    return secureblackbox_xadessigner_get($this->handle, 3 , $blockedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setBlockedCertHandle($blockedcertindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 3, $value , $blockedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies XML canonicalization method to use.
  *
  * @access   public
  */
  public function getCanonicalizationMethod() {
    return secureblackbox_xadessigner_get($this->handle, 4 );
  }
 /**
  * Specifies XML canonicalization method to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setCanonicalizationMethod($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getChainValidationDetails() {
    return secureblackbox_xadessigner_get($this->handle, 5 );
  }


 /**
  * The general outcome of a certificate chain validation routine. Use ChainValidationDetails to get information about the reasons that contributed to the validation result.
  *
  * @access   public
  */
  public function getChainValidationResult() {
    return secureblackbox_xadessigner_get($this->handle, 6 );
  }


 /**
  * The signing time from the signer's computer.
  *
  * @access   public
  */
  public function getClaimedSigningTime() {
    return secureblackbox_xadessigner_get($this->handle, 7 );
  }
 /**
  * The signing time from the signer's computer.
  *
  * @access   public
  * @param    string   value
  */
  public function setClaimedSigningTime($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies if an advanced signature (XAdES) will be produced.
  *
  * @access   public
  */
  public function getEnableXAdES() {
    return secureblackbox_xadessigner_get($this->handle, 8 );
  }
 /**
  * Specifies if an advanced signature (XAdES) will be produced.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setEnableXAdES($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 8, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies XML encoding.
  *
  * @access   public
  */
  public function getEncoding() {
    return secureblackbox_xadessigner_get($this->handle, 9 );
  }
 /**
  * Specifies XML encoding.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncoding($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_xadessigner_get($this->handle, 10 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_xadessigner_get($this->handle, 11 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_xadessigner_get($this->handle, 12 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_xadessigner_get($this->handle, 13 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_xadessigner_get($this->handle, 14 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_xadessigner_get($this->handle, 15 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_xadessigner_get($this->handle, 16 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_xadessigner_get($this->handle, 17 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_xadessigner_get($this->handle, 18 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used.
  *
  * @access   public
  */
  public function getHashAlgorithm() {
    return secureblackbox_xadessigner_get($this->handle, 19 );
  }
 /**
  * Specifies the hash algorithm to be used.
  *
  * @access   public
  * @param    string   value
  */
  public function setHashAlgorithm($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 19, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Makes the class tolerant to chain validation errors.
  *
  * @access   public
  */
  public function getIgnoreChainValidationErrors() {
    return secureblackbox_xadessigner_get($this->handle, 20 );
  }
 /**
  * Makes the class tolerant to chain validation errors.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setIgnoreChainValidationErrors($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 20, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The XML document to sign.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_xadessigner_get($this->handle, 21 );
  }
 /**
  * The XML document to sign.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  */
  public function getKnownCertCount() {
    return secureblackbox_xadessigner_get($this->handle, 22 );
  }
 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCertCount($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 22, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKnownCertBytes($knowncertindex) {
    return secureblackbox_xadessigner_get($this->handle, 23 , $knowncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCertHandle($knowncertindex) {
    return secureblackbox_xadessigner_get($this->handle, 24 , $knowncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCertHandle($knowncertindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 24, $value , $knowncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  */
  public function getKnownCRLCount() {
    return secureblackbox_xadessigner_get($this->handle, 25 );
  }
 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCRLCount($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 25, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getKnownCRLBytes($knowncrlindex) {
    return secureblackbox_xadessigner_get($this->handle, 26 , $knowncrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCRLHandle($knowncrlindex) {
    return secureblackbox_xadessigner_get($this->handle, 27 , $knowncrlindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCRLHandle($knowncrlindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 27, $value , $knowncrlindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  */
  public function getKnownOCSPCount() {
    return secureblackbox_xadessigner_get($this->handle, 28 );
  }
 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownOCSPCount($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 28, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getKnownOCSPBytes($knownocspindex) {
    return secureblackbox_xadessigner_get($this->handle, 29 , $knownocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownOCSPHandle($knownocspindex) {
    return secureblackbox_xadessigner_get($this->handle, 30 , $knownocspindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownOCSPHandle($knownocspindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 30, $value , $knownocspindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  */
  public function getOfflineMode() {
    return secureblackbox_xadessigner_get($this->handle, 31 );
  }
 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setOfflineMode($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 31, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the file where the signed document will be saved.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_xadessigner_get($this->handle, 32 );
  }
 /**
  * Specifies the file where the signed document will be saved.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_xadessigner_get($this->handle, 33 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_xadessigner_get($this->handle, 34 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_xadessigner_get($this->handle, 35 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 35, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_xadessigner_get($this->handle, 36 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_xadessigner_get($this->handle, 37 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 37, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_xadessigner_get($this->handle, 38 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 38, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_xadessigner_get($this->handle, 39 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 39, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_xadessigner_get($this->handle, 40 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_xadessigner_get($this->handle, 41 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_xadessigner_get($this->handle, 42 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 42, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_xadessigner_get($this->handle, 43 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 43, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Reference arrays.
  *
  * @access   public
  */
  public function getReferenceCount() {
    return secureblackbox_xadessigner_get($this->handle, 44 );
  }
 /**
  * The number of records in the Reference arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setReferenceCount($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 44, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the identifier (ID) attribute for a referenced (target) element should be auto-generated during signing.
  *
  * @access   public
  */
  public function getReferenceAutoGenerateElementId($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 45 , $referenceindex);
  }
 /**
  * Specifies whether the identifier (ID) attribute for a referenced (target) element should be auto-generated during signing.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReferenceAutoGenerateElementId($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 45, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify the canonicalization method for the transform of the reference.
  *
  * @access   public
  */
  public function getReferenceCanonicalizationMethod($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 46 , $referenceindex);
  }
 /**
  * Use this property to specify the canonicalization method for the transform of the reference.
  *
  * @access   public
  * @param    int   value
  */
  public function setReferenceCanonicalizationMethod($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 46, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies a custom identifier (ID) attribute for a referenced (target) element that will be set on signing.
  *
  * @access   public
  */
  public function getReferenceCustomElementId($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 47 , $referenceindex);
  }
 /**
  * Specifies a custom identifier (ID) attribute for a referenced (target) element that will be set on signing.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceCustomElementId($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 47, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to get or set the value of the digest calculated  over the referenced data.
  *
  * @access   public
  */
  public function getReferenceDigestValue($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 48 , $referenceindex);
  }
 /**
  * Use this property to get or set the value of the digest calculated  over the referenced data.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceDigestValue($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 48, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getReferenceHandle($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 49 , $referenceindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setReferenceHandle($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 49, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used.
  *
  * @access   public
  */
  public function getReferenceHashAlgorithm($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 50 , $referenceindex);
  }
 /**
  * Specifies the hash algorithm to be used.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceHashAlgorithm($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 50, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the URI is set (even when it is empty).
  *
  * @access   public
  */
  public function getReferenceHasURI($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 51 , $referenceindex);
  }
 /**
  * Specifies whether the URI is set (even when it is empty).
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReferenceHasURI($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 51, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A user-defined identifier (ID) attribute of this Reference element.
  *
  * @access   public
  */
  public function getReferenceID($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 52 , $referenceindex);
  }
 /**
  * A user-defined identifier (ID) attribute of this Reference element.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceID($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 52, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify InclusiveNamespaces PrefixList for exclusive canonicalization transform of the reference.
  *
  * @access   public
  */
  public function getReferenceInclusiveNamespacesPrefixList($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 53 , $referenceindex);
  }
 /**
  * Use this property to specify InclusiveNamespaces PrefixList for exclusive canonicalization transform of the reference.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceInclusiveNamespacesPrefixList($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 53, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The Reference's type attribute as defined in XMLDSIG specification.
  *
  * @access   public
  */
  public function getReferenceReferenceType($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 54 , $referenceindex);
  }
 /**
  * The Reference's type attribute as defined in XMLDSIG specification.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceReferenceType($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 54, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the referenced external data when the digest value is not explicitly specified.
  *
  * @access   public
  */
  public function getReferenceTargetData($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 55 , $referenceindex);
  }
 /**
  * Contains the referenced external data when the digest value is not explicitly specified.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceTargetData($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 55, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * This property specifies the referenced XML element.
  *
  * @access   public
  */
  public function getReferenceTargetXMLElement($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 56 , $referenceindex);
  }
 /**
  * This property specifies the referenced XML element.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceTargetXMLElement($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 56, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to get or set the URL which references the data.
  *
  * @access   public
  */
  public function getReferenceURI($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 57 , $referenceindex);
  }
 /**
  * Use this property to get or set the URL which references the data.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceURI($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 57, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether Base64 transform is included in transform chain.
  *
  * @access   public
  */
  public function getReferenceUseBase64Transform($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 58 , $referenceindex);
  }
 /**
  * Specifies whether Base64 transform is included in transform chain.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReferenceUseBase64Transform($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 58, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether enveloped signature transform is included in transform chain.
  *
  * @access   public
  */
  public function getReferenceUseEnvelopedSignatureTransform($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 59 , $referenceindex);
  }
 /**
  * Specifies whether enveloped signature transform is included in transform chain.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReferenceUseEnvelopedSignatureTransform($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 59, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether XPath transform is included in transform chain.
  *
  * @access   public
  */
  public function getReferenceUseXPathTransform($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 60 , $referenceindex);
  }
 /**
  * Specifies whether XPath transform is included in transform chain.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReferenceUseXPathTransform($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 60, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify XPath expression for XPath transform of the reference.
  *
  * @access   public
  */
  public function getReferenceXPathExpression($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 61 , $referenceindex);
  }
 /**
  * Use this property to specify XPath expression for XPath transform of the reference.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceXPathExpression($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 61, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify a prefix list for XPath transform of the reference.
  *
  * @access   public
  */
  public function getReferenceXPathPrefixList($referenceindex) {
    return secureblackbox_xadessigner_get($this->handle, 62 , $referenceindex);
  }
 /**
  * Use this property to specify a prefix list for XPath transform of the reference.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceXPathPrefixList($referenceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 62, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getRevocationCheck() {
    return secureblackbox_xadessigner_get($this->handle, 63 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setRevocationCheck($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 63, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The signature type to employ when signing the document.
  *
  * @access   public
  */
  public function getSignatureType() {
    return secureblackbox_xadessigner_get($this->handle, 64 );
  }
 /**
  * The signature type to employ when signing the document.
  *
  * @access   public
  * @param    int   value
  */
  public function setSignatureType($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 64, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningCertBytes() {
    return secureblackbox_xadessigner_get($this->handle, 65 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningCertHandle() {
    return secureblackbox_xadessigner_get($this->handle, 66 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningCertHandle($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 66, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  */
  public function getSigningChainCount() {
    return secureblackbox_xadessigner_get($this->handle, 67 );
  }
 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigningChainCount($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningChainBytes($signingchainindex) {
    return secureblackbox_xadessigner_get($this->handle, 68 , $signingchainindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningChainHandle($signingchainindex) {
    return secureblackbox_xadessigner_get($this->handle, 69 , $signingchainindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningChainHandle($signingchainindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 69, $value , $signingchainindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_xadessigner_get($this->handle, 70 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 70, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_xadessigner_get($this->handle, 71 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_xadessigner_get($this->handle, 72 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_xadessigner_get($this->handle, 73 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_xadessigner_get($this->handle, 74 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_xadessigner_get($this->handle, 75 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 75, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_xadessigner_get($this->handle, 76 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 76, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_xadessigner_get($this->handle, 77 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 77, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_xadessigner_get($this->handle, 78 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_xadessigner_get($this->handle, 79 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 79, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_xadessigner_get($this->handle, 80 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 80, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The address of the timestamping server.
  *
  * @access   public
  */
  public function getTimestampServer() {
    return secureblackbox_xadessigner_get($this->handle, 81 );
  }
 /**
  * The address of the timestamping server.
  *
  * @access   public
  * @param    string   value
  */
  public function setTimestampServer($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 81, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_xadessigner_get($this->handle, 82 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 82, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_xadessigner_get($this->handle, 83 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 83, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_xadessigner_get($this->handle, 84 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 84, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_xadessigner_get($this->handle, 85 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 85, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_xadessigner_get($this->handle, 86 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 86, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_xadessigner_get($this->handle, 87 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 87, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_xadessigner_get($this->handle, 88 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 88, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_xadessigner_get($this->handle, 89 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 89, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_xadessigner_get($this->handle, 90 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 90, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_xadessigner_get($this->handle, 91 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 91, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_xadessigner_get($this->handle, 92 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 92, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_xadessigner_get($this->handle, 93 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 93, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_xadessigner_get($this->handle, 94 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 94, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_xadessigner_get($this->handle, 95 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 95, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_xadessigner_get($this->handle, 96 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 96, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  */
  public function getTrustedCertCount() {
    return secureblackbox_xadessigner_get($this->handle, 97 );
  }
 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setTrustedCertCount($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 97, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTrustedCertBytes($trustedcertindex) {
    return secureblackbox_xadessigner_get($this->handle, 98 , $trustedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTrustedCertHandle($trustedcertindex) {
    return secureblackbox_xadessigner_get($this->handle, 99 , $trustedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setTrustedCertHandle($trustedcertindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 99, $value , $trustedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the complete log of the certificate validation routine.
  *
  * @access   public
  */
  public function getValidationLog() {
    return secureblackbox_xadessigner_get($this->handle, 100 );
  }


 /**
  * Specifies which form of XAdES should be produced.
  *
  * @access   public
  */
  public function getXAdESForm() {
    return secureblackbox_xadessigner_get($this->handle, 101 );
  }
 /**
  * Specifies which form of XAdES should be produced.
  *
  * @access   public
  * @param    int   value
  */
  public function setXAdESForm($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 101, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies XAdES version.
  *
  * @access   public
  */
  public function getXAdESVersion() {
    return secureblackbox_xadessigner_get($this->handle, 102 );
  }
 /**
  * Specifies XAdES version.
  *
  * @access   public
  * @param    int   value
  */
  public function setXAdESVersion($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 102, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the XML element where to save the signature data.
  *
  * @access   public
  */
  public function getXMLElement() {
    return secureblackbox_xadessigner_get($this->handle, 103 );
  }
 /**
  * Specifies the XML element where to save the signature data.
  *
  * @access   public
  * @param    string   value
  */
  public function setXMLElement($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 103, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Namespace arrays.
  *
  * @access   public
  */
  public function getNamespaceCount() {
    return secureblackbox_xadessigner_get($this->handle, 104 );
  }
 /**
  * The number of records in the Namespace arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setNamespaceCount($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 104, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A user-defined prefix value of a namespace.
  *
  * @access   public
  */
  public function getNamespacePrefix($namespaceindex) {
    return secureblackbox_xadessigner_get($this->handle, 105 , $namespaceindex);
  }
 /**
  * A user-defined prefix value of a namespace.
  *
  * @access   public
  * @param    string   value
  */
  public function setNamespacePrefix($namespaceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 105, $value , $namespaceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A user-defined URI value of a namespace.
  *
  * @access   public
  */
  public function getNamespaceURI($namespaceindex) {
    return secureblackbox_xadessigner_get($this->handle, 106 , $namespaceindex);
  }
 /**
  * A user-defined URI value of a namespace.
  *
  * @access   public
  * @param    string   value
  */
  public function setNamespaceURI($namespaceindex, $value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 106, $value , $namespaceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_xadessigner_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_xadessigner_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xadessigner_get_last_error($this->handle));
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
  * Handles remote or external signing initiated by the SignExternal method or other source.
  *
  * @access   public
  * @param    array   Array of event parameters: operationid, hashalgorithm, pars, data, signeddata    
  */
  public function fireExternalSign($param) {
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

 /**
  * Asks the application to resolve a reference.
  *
  * @access   public
  * @param    array   Array of event parameters: uri, referenceindex    
  */
  public function fireResolveReference($param) {
    return $param;
  }

 /**
  * This event is fired when a certificate should be stored along with a signature.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, uri    
  */
  public function fireStoreCertificate($param) {
    return $param;
  }

 /**
  * This event is fired when a CRL should be stored along with a signature.
  *
  * @access   public
  * @param    array   Array of event parameters: crl, uri    
  */
  public function fireStoreCRL($param) {
    return $param;
  }

 /**
  * This event is fired when a OCSP Response should be stored along with a signature.
  *
  * @access   public
  * @param    array   Array of event parameters: ocspresponse, uri    
  */
  public function fireStoreOCSPResponse($param) {
    return $param;
  }


}

?>
