<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - KMIPClient Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_KMIPClient {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_kmipclient_open(SECUREBLACKBOX_OEMKEY_211);
    secureblackbox_kmipclient_register_callback($this->handle, 1, array($this, 'fireError'));
    secureblackbox_kmipclient_register_callback($this->handle, 2, array($this, 'fireExternalSign'));
  }
  
  public function __destruct() {
    secureblackbox_kmipclient_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_kmipclient_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_kmipclient_get_last_error_code($this->handle);
  }

 /**
  * Imports a certificate to the KMIP server.
  *
  * @access   public
  * @param    string    certpassword
  * @param    boolean    addprivatekey
  * @param    string    id
  */
  public function doAddCertificate($certpassword, $addprivatekey, $id) {
    $ret = secureblackbox_kmipclient_do_addcertificate($this->handle, $certpassword, $addprivatekey, $id);
		$err = secureblackbox_kmipclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Imports a key to the KMIP server.
  *
  * @access   public
  * @param    string    id
  */
  public function doAddKey($id) {
    $ret = secureblackbox_kmipclient_do_addkey($this->handle, $id);
		$err = secureblackbox_kmipclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Imports a certificate to the KMIP server.
  *
  * @access   public
  * @param    boolean    addprivatekey
  * @param    string    id
  */
  public function doAddPinned($addprivatekey, $id) {
    $ret = secureblackbox_kmipclient_do_addpinned($this->handle, $addprivatekey, $id);
		$err = secureblackbox_kmipclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
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
    $ret = secureblackbox_kmipclient_do_config($this->handle, $configurationstring);
		$err = secureblackbox_kmipclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Decrypts the provided data using a key stored on the KMIP server.
  *
  * @access   public
  * @param    string    uniqueidentifier
  */
  public function doDecrypt($uniqueidentifier) {
    $ret = secureblackbox_kmipclient_do_decrypt($this->handle, $uniqueidentifier);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts the provided data using a key stored on the KMIP server.
  *
  * @access   public
  * @param    string    uniqueidentifier
  */
  public function doEncrypt($uniqueidentifier) {
    $ret = secureblackbox_kmipclient_do_encrypt($this->handle, $uniqueidentifier);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates a new certificate on the KMIP server.
  *
  * @access   public
  * @param    string    publickeyuniqueidentifier
  * @param    string    keyalgorithm
  * @param    string    hashalgorithm
  * @param    int    keylength
  * @param    string    subjectrdn
  * @param    string    id
  */
  public function doGenerateCert($publickeyuniqueidentifier, $keyalgorithm, $hashalgorithm, $keylength, $subjectrdn, $id) {
    $ret = secureblackbox_kmipclient_do_generatecert($this->handle, $publickeyuniqueidentifier, $keyalgorithm, $hashalgorithm, $keylength, $subjectrdn, $id);
		$err = secureblackbox_kmipclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates a new certificate on the KMIP server from the pinned certificate.
  *
  * @access   public
  * @param    string    publickeyuniqueidentifier
  * @param    string    id
  */
  public function doGenerateCertFromPinned($publickeyuniqueidentifier, $id) {
    $ret = secureblackbox_kmipclient_do_generatecertfrompinned($this->handle, $publickeyuniqueidentifier, $id);
		$err = secureblackbox_kmipclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates a new certificate on the KMIP server from the certificate request.
  *
  * @access   public
  * @param    string    id
  */
  public function doGenerateCertFromRequest($id) {
    $ret = secureblackbox_kmipclient_do_generatecertfromrequest($this->handle, $id);
		$err = secureblackbox_kmipclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates a symmetric key or an asymmetric key pair on the KMIP server.
  *
  * @access   public
  * @param    string    keyalgorithm
  * @param    int    keylength
  * @param    string    id
  */
  public function doGenerateKey($keyalgorithm, $keylength, $id) {
    $ret = secureblackbox_kmipclient_do_generatekey($this->handle, $keyalgorithm, $keylength, $id);
		$err = secureblackbox_kmipclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Retrieves the list of objects of a given type.
  *
  * @access   public
  * @param    int    objecttypes
  */
  public function doGetList($objecttypes) {
    $ret = secureblackbox_kmipclient_do_getlist($this->handle, $objecttypes);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes the specified object from the server.
  *
  * @access   public
  * @param    string    uniqueidentifier
  */
  public function doRemove($uniqueidentifier) {
    $ret = secureblackbox_kmipclient_do_remove($this->handle, $uniqueidentifier);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs the data using a key on the KMIP server.
  *
  * @access   public
  * @param    string    uniqueidentifier
  */
  public function doSign($uniqueidentifier) {
    $ret = secureblackbox_kmipclient_do_sign($this->handle, $uniqueidentifier);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Verifies digitally signed data.
  *
  * @access   public
  * @param    string    uniqueidentifier
  */
  public function doVerify($uniqueidentifier) {
    $ret = secureblackbox_kmipclient_do_verify($this->handle, $uniqueidentifier);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_kmipclient_get($this->handle, 0);
  }
 /**
  * A path to the file containing the unsigned data.
  *
  * @access   public
  */
  public function getDataFile() {
    return secureblackbox_kmipclient_get($this->handle, 1 );
  }
 /**
  * A path to the file containing the unsigned data.
  *
  * @access   public
  * @param    string   value
  */
  public function setDataFile($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the KMIP encoder type.
  *
  * @access   public
  */
  public function getEncoderType() {
    return secureblackbox_kmipclient_get($this->handle, 2 );
  }
 /**
  * Specifies the KMIP encoder type.
  *
  * @access   public
  * @param    int   value
  */
  public function setEncoderType($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_kmipclient_get($this->handle, 3 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_kmipclient_get($this->handle, 4 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_kmipclient_get($this->handle, 5 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_kmipclient_get($this->handle, 6 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_kmipclient_get($this->handle, 7 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_kmipclient_get($this->handle, 8 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 8, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_kmipclient_get($this->handle, 9 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_kmipclient_get($this->handle, 10 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_kmipclient_get($this->handle, 11 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the host name of the KMIP server.
  *
  * @access   public
  */
  public function getHost() {
    return secureblackbox_kmipclient_get($this->handle, 12 );
  }
 /**
  * Specifies the host name of the KMIP server.
  *
  * @access   public
  * @param    string   value
  */
  public function setHost($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Path to the file containing data to be signed, verified, encrypted or decrypted.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_kmipclient_get($this->handle, 13 );
  }
 /**
  * Path to the file containing data to be signed, verified, encrypted or decrypted.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Object arrays.
  *
  * @access   public
  */
  public function getObjectCount() {
    return secureblackbox_kmipclient_get($this->handle, 14 );
  }


 /**
  * Contains the value currently stored in the ID Placeholder.
  *
  * @access   public
  */
  public function getObjectID($objectindex) {
    return secureblackbox_kmipclient_get($this->handle, 15 , $objectindex);
  }


 /**
  * The cryptographic algorithm for this object.
  *
  * @access   public
  */
  public function getObjectKeyAlgorithm($objectindex) {
    return secureblackbox_kmipclient_get($this->handle, 16 , $objectindex);
  }


 /**
  * The length of the cryptographic key.
  *
  * @access   public
  */
  public function getObjectKeyLength($objectindex) {
    return secureblackbox_kmipclient_get($this->handle, 17 , $objectindex);
  }


 /**
  * The type of this object.
  *
  * @access   public
  */
  public function getObjectObjectType($objectindex) {
    return secureblackbox_kmipclient_get($this->handle, 18 , $objectindex);
  }


 /**
  * Digital signature algorithm for this object (only for certificates).
  *
  * @access   public
  */
  public function getObjectSigAlgorithm($objectindex) {
    return secureblackbox_kmipclient_get($this->handle, 19 , $objectindex);
  }


 /**
  * The unique identifier of the object generated by the key management system.
  *
  * @access   public
  */
  public function getObjectUniqueIdentifier($objectindex) {
    return secureblackbox_kmipclient_get($this->handle, 20 , $objectindex);
  }


 /**
  * Specifies the file where the signed, encrypted, or decrypted data should be saved.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_kmipclient_get($this->handle, 21 );
  }
 /**
  * Specifies the file where the signed, encrypted, or decrypted data should be saved.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies a password to authenticate to the KMIP server.
  *
  * @access   public
  */
  public function getPassword() {
    return secureblackbox_kmipclient_get($this->handle, 22 );
  }
 /**
  * Specifies a password to authenticate to the KMIP server.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassword($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 22, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getPinnedCertBytes() {
    return secureblackbox_kmipclient_get($this->handle, 23 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getPinnedCertHandle() {
    return secureblackbox_kmipclient_get($this->handle, 24 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setPinnedCertHandle($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 24, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provides access to raw certificate request data in DER format.
  *
  * @access   public
  */
  public function getPinnedCertRequestBytes() {
    return secureblackbox_kmipclient_get($this->handle, 25 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getPinnedCertRequestHandle() {
    return secureblackbox_kmipclient_get($this->handle, 26 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setPinnedCertRequestHandle($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port on the KMIP server to connect to.
  *
  * @access   public
  */
  public function getPort() {
    return secureblackbox_kmipclient_get($this->handle, 27 );
  }
 /**
  * Specifies the port on the KMIP server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setPort($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 27, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_kmipclient_get($this->handle, 28 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 28, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_kmipclient_get($this->handle, 29 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 29, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_kmipclient_get($this->handle, 30 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 30, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_kmipclient_get($this->handle, 31 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 31, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_kmipclient_get($this->handle, 32 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_kmipclient_get($this->handle, 33 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_kmipclient_get($this->handle, 34 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_kmipclient_get($this->handle, 35 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 35, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_kmipclient_get($this->handle, 36 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_kmipclient_get($this->handle, 37 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 37, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_kmipclient_get($this->handle, 38 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 38, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The signature validation result.
  *
  * @access   public
  */
  public function getSignatureValidationResult() {
    return secureblackbox_kmipclient_get($this->handle, 39 );
  }


 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_kmipclient_get($this->handle, 40 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_kmipclient_get($this->handle, 41 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_kmipclient_get($this->handle, 42 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 42, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_kmipclient_get($this->handle, 43 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 43, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_kmipclient_get($this->handle, 44 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 44, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_kmipclient_get($this->handle, 45 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 45, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_kmipclient_get($this->handle, 46 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_kmipclient_get($this->handle, 47 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_kmipclient_get($this->handle, 48 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 48, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_kmipclient_get($this->handle, 49 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 49, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_kmipclient_get($this->handle, 50 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_kmipclient_get($this->handle, 51 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 51, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_kmipclient_get($this->handle, 52 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_kmipclient_get($this->handle, 53 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_kmipclient_get($this->handle, 54 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_kmipclient_get($this->handle, 55 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_kmipclient_get($this->handle, 56 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_kmipclient_get($this->handle, 57 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 57, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_kmipclient_get($this->handle, 58 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 58, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_kmipclient_get($this->handle, 59 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 59, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_kmipclient_get($this->handle, 60 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 60, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_kmipclient_get($this->handle, 61 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 61, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_kmipclient_get($this->handle, 62 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 62, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_kmipclient_get($this->handle, 63 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 63, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_kmipclient_get($this->handle, 64 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 64, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_kmipclient_get($this->handle, 65 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 65, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The username to authenticate to the KMIP server.
  *
  * @access   public
  */
  public function getUsername() {
    return secureblackbox_kmipclient_get($this->handle, 66 );
  }
 /**
  * The username to authenticate to the KMIP server.
  *
  * @access   public
  * @param    string   value
  */
  public function setUsername($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 66, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_kmipclient_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_kmipclient_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipclient_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Provides information about errors during KMIP operations.
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
