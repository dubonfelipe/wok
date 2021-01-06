<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - KMIPServer Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_KMIPServer {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_kmipserver_open(SECUREBLACKBOX_OEMKEY_212);
    secureblackbox_kmipserver_register_callback($this->handle, 1, array($this, 'fireAfterGenerateCert'));
    secureblackbox_kmipserver_register_callback($this->handle, 2, array($this, 'fireAfterGenerateKey'));
    secureblackbox_kmipserver_register_callback($this->handle, 3, array($this, 'fireAuthAttempt'));
    secureblackbox_kmipserver_register_callback($this->handle, 4, array($this, 'fireBeforeGenerateCert'));
    secureblackbox_kmipserver_register_callback($this->handle, 5, array($this, 'fireBeforeGenerateKey'));
    secureblackbox_kmipserver_register_callback($this->handle, 6, array($this, 'fireDestroyAction'));
    secureblackbox_kmipserver_register_callback($this->handle, 7, array($this, 'fireError'));
    secureblackbox_kmipserver_register_callback($this->handle, 8, array($this, 'fireExternalSign'));
    secureblackbox_kmipserver_register_callback($this->handle, 9, array($this, 'fireRequest'));
  }
  
  public function __destruct() {
    secureblackbox_kmipserver_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_kmipserver_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_kmipserver_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_kmipserver_do_config($this->handle, $configurationstring);
		$err = secureblackbox_kmipserver_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Populates the per-connection certificate object.
  *
  * @access   public
  * @param    int64    connectionid
  */
  public function doGetClientCert($connectionid) {
    $ret = secureblackbox_kmipserver_do_getclientcert($this->handle, $connectionid);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Populates the per-connection certificate request object.
  *
  * @access   public
  * @param    int64    connectionid
  */
  public function doGetClientCertRequest($connectionid) {
    $ret = secureblackbox_kmipserver_do_getclientcertrequest($this->handle, $connectionid);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Commits the per-connection certificate object to the connection context.
  *
  * @access   public
  * @param    int64    connectionid
  */
  public function doSetClientCert($connectionid) {
    $ret = secureblackbox_kmipserver_do_setclientcert($this->handle, $connectionid);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Start the KMIP server.
  *
  * @access   public
  */
  public function doStart() {
    $ret = secureblackbox_kmipserver_do_start($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Stops the KMIP server.
  *
  * @access   public
  */
  public function doStop() {
    $ret = secureblackbox_kmipserver_do_stop($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_kmipserver_get($this->handle, 0);
  }
 /**
  * Indicates if the KMIP server is active and listening to incoming connections.
  *
  * @access   public
  */
  public function getActive() {
    return secureblackbox_kmipserver_get($this->handle, 1 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCACertBytes() {
    return secureblackbox_kmipserver_get($this->handle, 2 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCACertHandle() {
    return secureblackbox_kmipserver_get($this->handle, 3 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setCACertHandle($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provides access to raw certificate request data in DER format.
  *
  * @access   public
  */
  public function getCertRequestBytes() {
    return secureblackbox_kmipserver_get($this->handle, 4 );
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getCertRequestCurve() {
    return secureblackbox_kmipserver_get($this->handle, 5 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCertRequestHandle() {
    return secureblackbox_kmipserver_get($this->handle, 6 );
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate request (such as signing).
  *
  * @access   public
  */
  public function getCertRequestHashAlgorithm() {
    return secureblackbox_kmipserver_get($this->handle, 7 );
  }


 /**
  * Specifies the public key algorithm of this certificate request.
  *
  * @access   public
  */
  public function getCertRequestKeyAlgorithm() {
    return secureblackbox_kmipserver_get($this->handle, 8 );
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getCertRequestKeyBits() {
    return secureblackbox_kmipserver_get($this->handle, 9 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate request, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getCertRequestKeyUsage() {
    return secureblackbox_kmipserver_get($this->handle, 10 );
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getCertRequestKeyValid() {
    return secureblackbox_kmipserver_get($this->handle, 11 );
  }


 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getCertRequestPrivateKeyBytes() {
    return secureblackbox_kmipserver_get($this->handle, 12 );
  }


 /**
  * Contains the public key incorporated in the request, in DER format.
  *
  * @access   public
  */
  public function getCertRequestPublicKeyBytes() {
    return secureblackbox_kmipserver_get($this->handle, 13 );
  }


 /**
  * Indicates the algorithm that was used by the requestor to sign this certificate request.
  *
  * @access   public
  */
  public function getCertRequestSigAlgorithm() {
    return secureblackbox_kmipserver_get($this->handle, 14 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getCertRequestSubject() {
    return secureblackbox_kmipserver_get($this->handle, 15 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getCertRequestSubjectRDN() {
    return secureblackbox_kmipserver_get($this->handle, 16 );
  }


 /**
  * Indicates whether or not the signature on the request is valid and matches the public key contained in the request.
  *
  * @access   public
  */
  public function getCertRequestValid() {
    return secureblackbox_kmipserver_get($this->handle, 17 );
  }


 /**
  * The number of records in the CertStorage arrays.
  *
  * @access   public
  */
  public function getCertStorageCount() {
    return secureblackbox_kmipserver_get($this->handle, 18 );
  }
 /**
  * The number of records in the CertStorage arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setCertStorageCount($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCertStorageBytes($certstorageindex) {
    return secureblackbox_kmipserver_get($this->handle, 19 , $certstorageindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCertStorageHandle($certstorageindex) {
    return secureblackbox_kmipserver_get($this->handle, 20 , $certstorageindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setCertStorageHandle($certstorageindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 20, $value , $certstorageindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the KMIP encoder type.
  *
  * @access   public
  */
  public function getEncoderType() {
    return secureblackbox_kmipserver_get($this->handle, 21 );
  }
 /**
  * Specifies the KMIP encoder type.
  *
  * @access   public
  * @param    int   value
  */
  public function setEncoderType($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_kmipserver_get($this->handle, 22 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 22, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_kmipserver_get($this->handle, 23 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 23, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_kmipserver_get($this->handle, 24 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 24, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_kmipserver_get($this->handle, 25 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 25, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_kmipserver_get($this->handle, 26 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_kmipserver_get($this->handle, 27 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 27, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_kmipserver_get($this->handle, 28 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 28, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_kmipserver_get($this->handle, 29 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 29, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_kmipserver_get($this->handle, 30 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 30, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getGeneratedCertBytes() {
    return secureblackbox_kmipserver_get($this->handle, 31 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getGeneratedCertHandle() {
    return secureblackbox_kmipserver_get($this->handle, 32 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setGeneratedCertHandle($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A port to listen for connections on.
  *
  * @access   public
  */
  public function getPort() {
    return secureblackbox_kmipserver_get($this->handle, 33 );
  }
 /**
  * A port to listen for connections on.
  *
  * @access   public
  * @param    int   value
  */
  public function setPort($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_kmipserver_get($this->handle, 34 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_kmipserver_get($this->handle, 35 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 35, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_kmipserver_get($this->handle, 36 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_kmipserver_get($this->handle, 37 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 37, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_kmipserver_get($this->handle, 38 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 38, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_kmipserver_get($this->handle, 39 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 39, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A path to the KMIP object database.
  *
  * @access   public
  */
  public function getStorageFileName() {
    return secureblackbox_kmipserver_get($this->handle, 40 );
  }
 /**
  * A path to the KMIP object database.
  *
  * @access   public
  * @param    string   value
  */
  public function setStorageFileName($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_kmipserver_get($this->handle, 41 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_kmipserver_get($this->handle, 42 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 42, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_kmipserver_get($this->handle, 43 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 43, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_kmipserver_get($this->handle, 44 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 44, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_kmipserver_get($this->handle, 45 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 45, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_kmipserver_get($this->handle, 46 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_kmipserver_get($this->handle, 47 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_kmipserver_get($this->handle, 48 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 48, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_kmipserver_get($this->handle, 49 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 49, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_kmipserver_get($this->handle, 50 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_kmipserver_get($this->handle, 51 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 51, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_kmipserver_get($this->handle, 52 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_kmipserver_get($this->handle, 53 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_kmipserver_get($this->handle, 54 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_kmipserver_get($this->handle, 55 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the User arrays.
  *
  * @access   public
  */
  public function getUserCount() {
    return secureblackbox_kmipserver_get($this->handle, 56 );
  }
 /**
  * The number of records in the User arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserCount($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's Associated Data when SSH AEAD (Authenticated Encryption with Associated Data) algorithm is used.
  *
  * @access   public
  */
  public function getUserAssociatedData($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 57 , $userindex);
  }
 /**
  * Contains the user's Associated Data when SSH AEAD (Authenticated Encryption with Associated Data) algorithm is used.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserAssociatedData($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 57, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Base path for this user in the server's file system.
  *
  * @access   public
  */
  public function getUserBasePath($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 58 , $userindex);
  }
 /**
  * Base path for this user in the server's file system.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserBasePath($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 58, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's certificate.
  *
  * @access   public
  */
  public function getUserCert($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 59 , $userindex);
  }
 /**
  * Contains the user's certificate.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserCert($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 59, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains uninterpreted user-defined data that should be associated with the user account, such as comments or custom settings.
  *
  * @access   public
  */
  public function getUserData($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 60 , $userindex);
  }
 /**
  * Contains uninterpreted user-defined data that should be associated with the user account, such as comments or custom settings.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserData($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 60, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getUserHandle($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 61 , $userindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setUserHandle($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 61, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm used to generate TOTP (Time-based One-Time Passwords) passwords for this user.
  *
  * @access   public
  */
  public function getUserHashAlgorithm($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 62 , $userindex);
  }
 /**
  * Specifies the hash algorithm used to generate TOTP (Time-based One-Time Passwords) passwords for this user.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserHashAlgorithm($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 62, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the incoming speed limit for this user.
  *
  * @access   public
  */
  public function getUserIncomingSpeedLimit($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 63 , $userindex);
  }
 /**
  * Specifies the incoming speed limit for this user.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserIncomingSpeedLimit($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 63, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The algorithm used to generate one-time passwords (OTP) for this user, either HOTP (Hash-based OTP) or TOTP (Time-based OTP).
  *
  * @access   public
  */
  public function getUserOtpAlgorithm($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 64 , $userindex);
  }
 /**
  * The algorithm used to generate one-time passwords (OTP) for this user, either HOTP (Hash-based OTP) or TOTP (Time-based OTP).
  *
  * @access   public
  * @param    int   value
  */
  public function setUserOtpAlgorithm($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 64, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The user's time interval (TOTP) or Counter (HOTP).
  *
  * @access   public
  */
  public function getUserOtpValue($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 65 , $userindex);
  }
 /**
  * The user's time interval (TOTP) or Counter (HOTP).
  *
  * @access   public
  * @param    int   value
  */
  public function setUserOtpValue($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 65, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the outgoing speed limit for this user.
  *
  * @access   public
  */
  public function getUserOutgoingSpeedLimit($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 66 , $userindex);
  }
 /**
  * Specifies the outgoing speed limit for this user.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserOutgoingSpeedLimit($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 66, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The user's authentication password.
  *
  * @access   public
  */
  public function getUserPassword($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 67 , $userindex);
  }
 /**
  * The user's authentication password.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserPassword($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 67, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the length of the user's OTP password.
  *
  * @access   public
  */
  public function getUserPasswordLen($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 68 , $userindex);
  }
 /**
  * Specifies the length of the user's OTP password.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserPasswordLen($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 68, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's secret key, which is essentially a shared secret between the client and server.
  *
  * @access   public
  */
  public function getUserSharedSecret($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 69 , $userindex);
  }
 /**
  * Contains the user's secret key, which is essentially a shared secret between the client and server.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserSharedSecret($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 69, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's SSH key.
  *
  * @access   public
  */
  public function getUserSSHKey($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 70 , $userindex);
  }
 /**
  * Contains the user's SSH key.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserSSHKey($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 70, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The registered name (login) of the user.
  *
  * @access   public
  */
  public function getUserUsername($userindex) {
    return secureblackbox_kmipserver_get($this->handle, 71 , $userindex);
  }
 /**
  * The registered name (login) of the user.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserUsername($userindex, $value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 71, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_kmipserver_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_kmipserver_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_kmipserver_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Signifies completion of certificate generation.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, uniqueidentifier    
  */
  public function fireAfterGenerateCert($param) {
    return $param;
  }

 /**
  * Signifies completion of key generation.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, uniqueidentifier    
  */
  public function fireAfterGenerateKey($param) {
    return $param;
  }

 /**
  * Fires when a connected client makes an authentication attempt.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, username, password, allow    
  */
  public function fireAuthAttempt($param) {
    return $param;
  }

 /**
  * Fires when a certificate generation request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid    
  */
  public function fireBeforeGenerateCert($param) {
    return $param;
  }

 /**
  * Fires when a key generation request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, keyalgorithm, keylength, defaulteccurve    
  */
  public function fireBeforeGenerateKey($param) {
    return $param;
  }

 /**
  * Fires when an object destruction request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, uniqueidentifier, objecttype, objectstate, remove    
  */
  public function fireDestroyAction($param) {
    return $param;
  }

 /**
  * Information about any errors that occur during KMIP operations.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }

 /**
  * Handles remote or external signing initiated by the server protocol.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, operationid, hashalgorithm, pars, data, signeddata    
  */
  public function fireExternalSign($param) {
    return $param;
  }

 /**
  * Fires when a request is received from the client.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, operation, username, reject    
  */
  public function fireRequest($param) {
    return $param;
  }


}

?>
