<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - DCAuth Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_DCAuth {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_dcauth_open(SECUREBLACKBOX_OEMKEY_999);
    secureblackbox_dcauth_register_callback($this->handle, 1, array($this, 'fireCustomParametersReceived'));
    secureblackbox_dcauth_register_callback($this->handle, 2, array($this, 'fireError'));
    secureblackbox_dcauth_register_callback($this->handle, 3, array($this, 'fireExternalSign'));
    secureblackbox_dcauth_register_callback($this->handle, 4, array($this, 'fireKeySecretNeeded'));
    secureblackbox_dcauth_register_callback($this->handle, 5, array($this, 'fireParameterReceived'));
    secureblackbox_dcauth_register_callback($this->handle, 6, array($this, 'firePasswordNeeded'));
    secureblackbox_dcauth_register_callback($this->handle, 7, array($this, 'fireSelectCert'));
    secureblackbox_dcauth_register_callback($this->handle, 8, array($this, 'fireSignRequest'));
    secureblackbox_dcauth_register_callback($this->handle, 9, array($this, 'fireSignRequestCompleted'));
  }
  
  public function __destruct() {
    secureblackbox_dcauth_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_dcauth_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_dcauth_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_dcauth_do_config($this->handle, $configurationstring);
		$err = secureblackbox_dcauth_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Processes the request.
  *
  * @access   public
  */
  public function doProcessRequest() {
    $ret = secureblackbox_dcauth_do_processrequest($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_dcauth_get($this->handle, 0);
  }
 /**
  * Specifies the signing certificate password.
  *
  * @access   public
  */
  public function getCertPassword() {
    return secureblackbox_dcauth_get($this->handle, 1 );
  }
 /**
  * Specifies the signing certificate password.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertPassword($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_dcauth_get($this->handle, 2 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_dcauth_get($this->handle, 3 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_dcauth_get($this->handle, 4 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_dcauth_get($this->handle, 5 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_dcauth_get($this->handle, 6 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_dcauth_get($this->handle, 7 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_dcauth_get($this->handle, 8 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 8, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_dcauth_get($this->handle, 9 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_dcauth_get($this->handle, 10 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the signing request to process.
  *
  * @access   public
  */
  public function getInput() {
    return secureblackbox_dcauth_get($this->handle, 11 );
  }
 /**
  * Contains the signing request to process.
  *
  * @access   public
  * @param    string   value
  */
  public function setInput($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies request encoding.
  *
  * @access   public
  */
  public function getInputEncoding() {
    return secureblackbox_dcauth_get($this->handle, 12 );
  }
 /**
  * Specifies request encoding.
  *
  * @access   public
  * @param    int   value
  */
  public function setInputEncoding($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the KeyID of the pre-shared authentication key.
  *
  * @access   public
  */
  public function getKeyId() {
    return secureblackbox_dcauth_get($this->handle, 13 );
  }
 /**
  * Specifies the KeyID of the pre-shared authentication key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyId($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared authentication key.
  *
  * @access   public
  */
  public function getKeySecret() {
    return secureblackbox_dcauth_get($this->handle, 14 );
  }
 /**
  * The pre-shared authentication key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeySecret($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the output of the request processing.
  *
  * @access   public
  */
  public function getOutput() {
    return secureblackbox_dcauth_get($this->handle, 15 );
  }


 /**
  * Specifies response encoding.
  *
  * @access   public
  */
  public function getOutputEncoding() {
    return secureblackbox_dcauth_get($this->handle, 16 );
  }
 /**
  * Specifies response encoding.
  *
  * @access   public
  * @param    int   value
  */
  public function setOutputEncoding($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the signing certificate.
  *
  * @access   public
  */
  public function getSigningCertificate() {
    return secureblackbox_dcauth_get($this->handle, 17 );
  }
 /**
  * Specifies the signing certificate.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigningCertificate($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the signing certificate residing in an alternative location.
  *
  * @access   public
  */
  public function getStorageId() {
    return secureblackbox_dcauth_get($this->handle, 18 );
  }
 /**
  * Specifies the signing certificate residing in an alternative location.
  *
  * @access   public
  * @param    string   value
  */
  public function setStorageId($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_dcauth_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_dcauth_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_dcauth_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Passes custom request parameters to the application.
  *
  * @access   public
  * @param    array   Array of event parameters: value    
  */
  public function fireCustomParametersReceived($param) {
    return $param;
  }

 /**
  * Reports information about errors during request processing or signing.
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
  * Requests the key secret from the application.
  *
  * @access   public
  * @param    array   Array of event parameters: keyid, keysecret    
  */
  public function fireKeySecretNeeded($param) {
    return $param;
  }

 /**
  * Passes a standard request parameter to the user code.
  *
  * @access   public
  * @param    array   Array of event parameters: name, value    
  */
  public function fireParameterReceived($param) {
    return $param;
  }

 /**
  * Requests a password from the application.
  *
  * @access   public
  * @param    array   Array of event parameters: neededfor, id, password, cancel    
  */
  public function firePasswordNeeded($param) {
    return $param;
  }

 /**
  * Requests certificate selection criteria from the application.
  *
  * @access   public
  * @param    array   Array of event parameters: commonname, keyid, keyusage, fingerprint    
  */
  public function fireSelectCert($param) {
    return $param;
  }

 /**
  * This event signifies the processing of an atomic signing request.
  *
  * @access   public
  * @param    array   Array of event parameters: hash, username, allow    
  */
  public function fireSignRequest($param) {
    return $param;
  }

 /**
  * This event signifies completion of the processing of an atomic signing request.
  *
  * @access   public
  * @param    array   Array of event parameters: hash, username, signature    
  */
  public function fireSignRequestCompleted($param) {
    return $param;
  }


}

?>
