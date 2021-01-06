<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - CRLManager Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_CRLManager {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_crlmanager_open(SECUREBLACKBOX_OEMKEY_266);
    secureblackbox_crlmanager_register_callback($this->handle, 1, array($this, 'fireError'));
    secureblackbox_crlmanager_register_callback($this->handle, 2, array($this, 'fireExternalSign'));
  }
  
  public function __destruct() {
    secureblackbox_crlmanager_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_crlmanager_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_crlmanager_get_last_error_code($this->handle);
  }

 /**
  * Adds a new revoked certificate entry.
  *
  * @access   public
  * @param    string    serialnumber
  * @param    string    revocationdate
  * @param    int    revocationreason
  */
  public function doAdd($serialnumber, $revocationdate, $revocationreason) {
    $ret = secureblackbox_crlmanager_do_add($this->handle, $serialnumber, $revocationdate, $revocationreason);
		$err = secureblackbox_crlmanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Empties the CRL.
  *
  * @access   public
  */
  public function doClear() {
    $ret = secureblackbox_crlmanager_do_clear($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
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
    $ret = secureblackbox_crlmanager_do_config($this->handle, $configurationstring);
		$err = secureblackbox_crlmanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Downloads a CRL from the specified location.
  *
  * @access   public
  * @param    string    url
  */
  public function doDownload($url) {
    $ret = secureblackbox_crlmanager_do_download($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the index of the CRL item by the certificate's serial number.
  *
  * @access   public
  * @param    string    serialnumber
  */
  public function doGetCertEntryIndex($serialnumber) {
    $ret = secureblackbox_crlmanager_do_getcertentryindex($this->handle, $serialnumber);
		$err = secureblackbox_crlmanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads a CRL from a file.
  *
  * @access   public
  * @param    string    path
  */
  public function doLoadFromFile($path) {
    $ret = secureblackbox_crlmanager_do_loadfromfile($this->handle, $path);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes the specified entry from the CRL.
  *
  * @access   public
  * @param    int    index
  */
  public function doRemove($index) {
    $ret = secureblackbox_crlmanager_do_remove($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Saves the CRL to a file.
  *
  * @access   public
  * @param    string    path
  */
  public function doSaveToFile($path) {
    $ret = secureblackbox_crlmanager_do_savetofile($this->handle, $path);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Fetches revocation information about the selected certificate from the CRL.
  *
  * @access   public
  * @param    int    index
  */
  public function doSelectEntry($index) {
    $ret = secureblackbox_crlmanager_do_selectentry($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Validates the CRL signature.
  *
  * @access   public
  */
  public function doValidate() {
    $ret = secureblackbox_crlmanager_do_validate($this->handle);
		$err = secureblackbox_crlmanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_crlmanager_get($this->handle, 0);
  }
 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCACertBytes() {
    return secureblackbox_crlmanager_get($this->handle, 1 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCACertHandle() {
    return secureblackbox_crlmanager_get($this->handle, 2 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setCACertHandle($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getCRLBytes() {
    return secureblackbox_crlmanager_get($this->handle, 3 );
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key, if present in the CRL.
  *
  * @access   public
  */
  public function getCRLCAKeyID() {
    return secureblackbox_crlmanager_get($this->handle, 4 );
  }
 /**
  * A unique identifier (fingerprint) of the CA certificate's private key, if present in the CRL.
  *
  * @access   public
  * @param    string   value
  */
  public function setCRLCAKeyID($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the number of certificate status entries in the CRL.
  *
  * @access   public
  */
  public function getCRLEntryCount() {
    return secureblackbox_crlmanager_get($this->handle, 5 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCRLHandle() {
    return secureblackbox_crlmanager_get($this->handle, 6 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setCRLHandle($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The common name of the CRL issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getCRLIssuer() {
    return secureblackbox_crlmanager_get($this->handle, 7 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the CRL issuer.
  *
  * @access   public
  */
  public function getCRLIssuerRDN() {
    return secureblackbox_crlmanager_get($this->handle, 8 );
  }


 /**
  * The URL that the CRL was downloaded from.
  *
  * @access   public
  */
  public function getCRLLocation() {
    return secureblackbox_crlmanager_get($this->handle, 9 );
  }


 /**
  * The planned time and date of the next version of this CRL to be published.
  *
  * @access   public
  */
  public function getCRLNextUpdate() {
    return secureblackbox_crlmanager_get($this->handle, 10 );
  }


 /**
  * The public key algorithm that was used by the CA to sign this CRL.
  *
  * @access   public
  */
  public function getCRLSigAlgorithm() {
    return secureblackbox_crlmanager_get($this->handle, 11 );
  }


 /**
  * The to-be-signed part of the CRL (the CRL without the signature part).
  *
  * @access   public
  */
  public function getCRLTBS() {
    return secureblackbox_crlmanager_get($this->handle, 12 );
  }


 /**
  * The date and time at which this version of the CRL was published.
  *
  * @access   public
  */
  public function getCRLThisUpdate() {
    return secureblackbox_crlmanager_get($this->handle, 13 );
  }


 /**
  * The number of items in the CRL.
  *
  * @access   public
  */
  public function getEntryCount() {
    return secureblackbox_crlmanager_get($this->handle, 14 );
  }


 /**
  * Returns the status of the certificate.
  *
  * @access   public
  */
  public function getCRLEntryInfoCertStatus() {
    return secureblackbox_crlmanager_get($this->handle, 15 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCRLEntryInfoHandle() {
    return secureblackbox_crlmanager_get($this->handle, 16 );
  }


 /**
  * The time and date when the certificate gets revoked or cancelled.
  *
  * @access   public
  */
  public function getCRLEntryInfoRevocationDate() {
    return secureblackbox_crlmanager_get($this->handle, 17 );
  }


 /**
  * Specifies the reason for certificate revocation.
  *
  * @access   public
  */
  public function getCRLEntryInfoRevocationReason() {
    return secureblackbox_crlmanager_get($this->handle, 18 );
  }


 /**
  * The certificate serial number.
  *
  * @access   public
  */
  public function getCRLEntryInfoSerialNumber() {
    return secureblackbox_crlmanager_get($this->handle, 19 );
  }


 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_crlmanager_get($this->handle, 20 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 20, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_crlmanager_get($this->handle, 21 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_crlmanager_get($this->handle, 22 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 22, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_crlmanager_get($this->handle, 23 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 23, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_crlmanager_get($this->handle, 24 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 24, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_crlmanager_get($this->handle, 25 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 25, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_crlmanager_get($this->handle, 26 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_crlmanager_get($this->handle, 27 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 27, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_crlmanager_get($this->handle, 28 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 28, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_crlmanager_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_crlmanager_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_crlmanager_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Information about errors during CRL management.
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


}

?>
