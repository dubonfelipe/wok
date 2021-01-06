<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - RESTClient Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_RESTClient {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_restclient_open(SECUREBLACKBOX_OEMKEY_677);
    secureblackbox_restclient_register_callback($this->handle, 1, array($this, 'fireCertificateValidate'));
    secureblackbox_restclient_register_callback($this->handle, 2, array($this, 'fireCookie'));
    secureblackbox_restclient_register_callback($this->handle, 3, array($this, 'fireDocumentBegin'));
    secureblackbox_restclient_register_callback($this->handle, 4, array($this, 'fireDocumentEnd'));
    secureblackbox_restclient_register_callback($this->handle, 5, array($this, 'fireDynamicDataNeeded'));
    secureblackbox_restclient_register_callback($this->handle, 6, array($this, 'fireError'));
    secureblackbox_restclient_register_callback($this->handle, 7, array($this, 'fireExternalSign'));
    secureblackbox_restclient_register_callback($this->handle, 8, array($this, 'fireHeadersPrepared'));
    secureblackbox_restclient_register_callback($this->handle, 9, array($this, 'fireHeadersReceived'));
    secureblackbox_restclient_register_callback($this->handle, 10, array($this, 'fireProgress'));
    secureblackbox_restclient_register_callback($this->handle, 11, array($this, 'fireRedirection'));
  }
  
  public function __destruct() {
    secureblackbox_restclient_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_restclient_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_restclient_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_restclient_do_config($this->handle, $configurationstring);
		$err = secureblackbox_restclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a DELETE request to the server.
  *
  * @access   public
  * @param    string    url
  */
  public function doDelete($url) {
    $ret = secureblackbox_restclient_do_delete($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a GET request to the server.
  *
  * @access   public
  * @param    string    url
  */
  public function doGet($url) {
    $ret = secureblackbox_restclient_do_get($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a GET request to the server and returns the output.
  *
  * @access   public
  * @param    string    url
  */
  public function doGetBytes($url) {
    $ret = secureblackbox_restclient_do_getbytes($this->handle, $url);
		$err = secureblackbox_restclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a GET request to the server and saves the output to a file.
  *
  * @access   public
  * @param    string    url
  * @param    string    filename
  */
  public function doGetFile($url, $filename) {
    $ret = secureblackbox_restclient_do_getfile($this->handle, $url, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a HEAD request to the server.
  *
  * @access   public
  * @param    string    url
  */
  public function doHead($url) {
    $ret = secureblackbox_restclient_do_head($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends an OPTIONS request to the server.
  *
  * @access   public
  * @param    string    url
  */
  public function doOptions($url) {
    $ret = secureblackbox_restclient_do_options($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a POST request to the server.
  *
  * @access   public
  * @param    string    url
  * @param    string    content
  */
  public function doPost($url, $content) {
    $ret = secureblackbox_restclient_do_post($this->handle, $url, $content);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a POST request to the server.
  *
  * @access   public
  * @param    string    url
  * @param    string    contentbytes
  */
  public function doPostBytes($url, $contentbytes) {
    $ret = secureblackbox_restclient_do_postbytes($this->handle, $url, $contentbytes);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a file to the server using a POST request.
  *
  * @access   public
  * @param    string    url
  * @param    string    filename
  */
  public function doPostFile($url, $filename) {
    $ret = secureblackbox_restclient_do_postfile($this->handle, $url, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a JSON POST request to the server.
  *
  * @access   public
  * @param    string    url
  * @param    string    content
  */
  public function doPostJSON($url, $content) {
    $ret = secureblackbox_restclient_do_postjson($this->handle, $url, $content);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Posts a web form data to the server.
  *
  * @access   public
  * @param    string    url
  * @param    string    fields
  * @param    string    filefield
  * @param    string    filename
  * @param    string    contenttype
  */
  public function doPostWebForm($url, $fields, $filefield, $filename, $contenttype) {
    $ret = secureblackbox_restclient_do_postwebform($this->handle, $url, $fields, $filefield, $filename, $contenttype);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Posts an XML request to the server.
  *
  * @access   public
  * @param    string    url
  * @param    string    content
  */
  public function doPostXML($url, $content) {
    $ret = secureblackbox_restclient_do_postxml($this->handle, $url, $content);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a PUT request to the server.
  *
  * @access   public
  * @param    string    url
  * @param    string    content
  */
  public function doPut($url, $content) {
    $ret = secureblackbox_restclient_do_put($this->handle, $url, $content);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a PUT request to the server.
  *
  * @access   public
  * @param    string    url
  * @param    string    contentbytes
  */
  public function doPutBytes($url, $contentbytes) {
    $ret = secureblackbox_restclient_do_putbytes($this->handle, $url, $contentbytes);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a file to the server using a PUT request.
  *
  * @access   public
  * @param    string    url
  * @param    string    filename
  */
  public function doPutFile($url, $filename) {
    $ret = secureblackbox_restclient_do_putfile($this->handle, $url, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * PUTs a JSON to the server.
  *
  * @access   public
  * @param    string    url
  * @param    string    content
  */
  public function doPutJSON($url, $content) {
    $ret = secureblackbox_restclient_do_putjson($this->handle, $url, $content);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * PUTs an XML to the server.
  *
  * @access   public
  * @param    string    url
  * @param    string    content
  */
  public function doPutXML($url, $content) {
    $ret = secureblackbox_restclient_do_putxml($this->handle, $url, $content);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a TRACE request to the server.
  *
  * @access   public
  * @param    string    url
  */
  public function doTrace($url) {
    $ret = secureblackbox_restclient_do_trace($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_restclient_get($this->handle, 0);
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  */
  public function getBlockedCertCount() {
    return secureblackbox_restclient_get($this->handle, 1 );
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setBlockedCertCount($value) {
    $ret = secureblackbox_restclient_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getBlockedCertBytes($blockedcertindex) {
    return secureblackbox_restclient_get($this->handle, 2 , $blockedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getBlockedCertHandle($blockedcertindex) {
    return secureblackbox_restclient_get($this->handle, 3 , $blockedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setBlockedCertHandle($blockedcertindex, $value) {
    $ret = secureblackbox_restclient_set($this->handle, 3, $value , $blockedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ClientCert arrays.
  *
  * @access   public
  */
  public function getClientCertCount() {
    return secureblackbox_restclient_get($this->handle, 4 );
  }
 /**
  * The number of records in the ClientCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setClientCertCount($value) {
    $ret = secureblackbox_restclient_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getClientCertBytes($clientcertindex) {
    return secureblackbox_restclient_get($this->handle, 5 , $clientcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getClientCertHandle($clientcertindex) {
    return secureblackbox_restclient_get($this->handle, 6 , $clientcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setClientCertHandle($clientcertindex, $value) {
    $ret = secureblackbox_restclient_set($this->handle, 6, $value , $clientcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether the encryption algorithm used is an AEAD cipher.
  *
  * @access   public
  */
  public function getConnInfoAEADCipher() {
    return secureblackbox_restclient_get($this->handle, 7 );
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getConnInfoChainValidationDetails() {
    return secureblackbox_restclient_get($this->handle, 8 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getConnInfoChainValidationResult() {
    return secureblackbox_restclient_get($this->handle, 9 );
  }


 /**
  * The cipher suite employed by this connection.
  *
  * @access   public
  */
  public function getConnInfoCiphersuite() {
    return secureblackbox_restclient_get($this->handle, 10 );
  }


 /**
  * Specifies whether client authentication was performed during this connection.
  *
  * @access   public
  */
  public function getConnInfoClientAuthenticated() {
    return secureblackbox_restclient_get($this->handle, 11 );
  }


 /**
  * Indicates whether the connection has been established fully.
  *
  * @access   public
  */
  public function getConnInfoConnectionEstablished() {
    return secureblackbox_restclient_get($this->handle, 12 );
  }


 /**
  * The unique identifier assigned to this connection.
  *
  * @access   public
  */
  public function getConnInfoConnectionID() {
    return secureblackbox_restclient_get($this->handle, 13 );
  }


 /**
  * The digest algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoDigestAlgorithm() {
    return secureblackbox_restclient_get($this->handle, 14 );
  }


 /**
  * The symmetric encryption algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoEncryptionAlgorithm() {
    return secureblackbox_restclient_get($this->handle, 15 );
  }


 /**
  * Indicates whether a TLS connection uses a reduced-strength exportable cipher.
  *
  * @access   public
  */
  public function getConnInfoExportable() {
    return secureblackbox_restclient_get($this->handle, 16 );
  }


 /**
  * The key exchange algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoKeyExchangeAlgorithm() {
    return secureblackbox_restclient_get($this->handle, 17 );
  }


 /**
  * The length of the key exchange key of a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoKeyExchangeKeyBits() {
    return secureblackbox_restclient_get($this->handle, 18 );
  }


 /**
  * The elliptic curve used in this connection.
  *
  * @access   public
  */
  public function getConnInfoNamedECCurve() {
    return secureblackbox_restclient_get($this->handle, 19 );
  }


 /**
  * Indicates whether the chosen ciphersuite provides perfect forward secrecy (PFS).
  *
  * @access   public
  */
  public function getConnInfoPFSCipher() {
    return secureblackbox_restclient_get($this->handle, 20 );
  }


 /**
  * A hint professed by the server to help the client select the PSK identity to use.
  *
  * @access   public
  */
  public function getConnInfoPreSharedIdentityHint() {
    return secureblackbox_restclient_get($this->handle, 21 );
  }


 /**
  * The length of the public key.
  *
  * @access   public
  */
  public function getConnInfoPublicKeyBits() {
    return secureblackbox_restclient_get($this->handle, 22 );
  }


 /**
  * Indicates whether a TLS-enabled connection was spawned from another TLS connection.
  *
  * @access   public
  */
  public function getConnInfoResumedSession() {
    return secureblackbox_restclient_get($this->handle, 23 );
  }


 /**
  * Indicates whether TLS or SSL is enabled for this connection.
  *
  * @access   public
  */
  public function getConnInfoSecureConnection() {
    return secureblackbox_restclient_get($this->handle, 24 );
  }


 /**
  * Indicates whether server authentication was performed during a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoServerAuthenticated() {
    return secureblackbox_restclient_get($this->handle, 25 );
  }


 /**
  * The signature algorithm used in a TLS handshake.
  *
  * @access   public
  */
  public function getConnInfoSignatureAlgorithm() {
    return secureblackbox_restclient_get($this->handle, 26 );
  }


 /**
  * The block size of the symmetric algorithm used.
  *
  * @access   public
  */
  public function getConnInfoSymmetricBlockSize() {
    return secureblackbox_restclient_get($this->handle, 27 );
  }


 /**
  * The key length of the symmetric algorithm used.
  *
  * @access   public
  */
  public function getConnInfoSymmetricKeyBits() {
    return secureblackbox_restclient_get($this->handle, 28 );
  }


 /**
  * The total number of bytes received over this connection.
  *
  * @access   public
  */
  public function getConnInfoTotalBytesReceived() {
    return secureblackbox_restclient_get($this->handle, 29 );
  }


 /**
  * The total number of bytes sent over this connection.
  *
  * @access   public
  */
  public function getConnInfoTotalBytesSent() {
    return secureblackbox_restclient_get($this->handle, 30 );
  }


 /**
  * Contains the server certificate's chain validation log.
  *
  * @access   public
  */
  public function getConnInfoValidationLog() {
    return secureblackbox_restclient_get($this->handle, 31 );
  }


 /**
  * Indicates the version of SSL/TLS protocol negotiated during this connection.
  *
  * @access   public
  */
  public function getConnInfoVersion() {
    return secureblackbox_restclient_get($this->handle, 32 );
  }


 /**
  * Takes a piece of data to be sent to the server within a dynamic POST or PUT request.
  *
  * @access   public
  */
  public function getDynamicData() {
    return secureblackbox_restclient_get($this->handle, 33 );
  }
 /**
  * Takes a piece of data to be sent to the server within a dynamic POST or PUT request.
  *
  * @access   public
  * @param    string   value
  */
  public function setDynamicData($value) {
    $ret = secureblackbox_restclient_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_restclient_get($this->handle, 34 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_restclient_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_restclient_get($this->handle, 35 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_restclient_set($this->handle, 35, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_restclient_get($this->handle, 36 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_restclient_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_restclient_get($this->handle, 37 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_restclient_set($this->handle, 37, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_restclient_get($this->handle, 38 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_restclient_set($this->handle, 38, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_restclient_get($this->handle, 39 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_restclient_set($this->handle, 39, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_restclient_get($this->handle, 40 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_restclient_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_restclient_get($this->handle, 41 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_restclient_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_restclient_get($this->handle, 42 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_restclient_set($this->handle, 42, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the keep-alive handling policy.
  *
  * @access   public
  */
  public function getKeepAlivePolicy() {
    return secureblackbox_restclient_get($this->handle, 43 );
  }
 /**
  * Defines the keep-alive handling policy.
  *
  * @access   public
  * @param    int   value
  */
  public function setKeepAlivePolicy($value) {
    $ret = secureblackbox_restclient_set($this->handle, 43, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  */
  public function getKnownCertCount() {
    return secureblackbox_restclient_get($this->handle, 44 );
  }
 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCertCount($value) {
    $ret = secureblackbox_restclient_set($this->handle, 44, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKnownCertBytes($knowncertindex) {
    return secureblackbox_restclient_get($this->handle, 45 , $knowncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCertHandle($knowncertindex) {
    return secureblackbox_restclient_get($this->handle, 46 , $knowncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCertHandle($knowncertindex, $value) {
    $ret = secureblackbox_restclient_set($this->handle, 46, $value , $knowncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  */
  public function getKnownCRLCount() {
    return secureblackbox_restclient_get($this->handle, 47 );
  }
 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCRLCount($value) {
    $ret = secureblackbox_restclient_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getKnownCRLBytes($knowncrlindex) {
    return secureblackbox_restclient_get($this->handle, 48 , $knowncrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCRLHandle($knowncrlindex) {
    return secureblackbox_restclient_get($this->handle, 49 , $knowncrlindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCRLHandle($knowncrlindex, $value) {
    $ret = secureblackbox_restclient_set($this->handle, 49, $value , $knowncrlindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  */
  public function getKnownOCSPCount() {
    return secureblackbox_restclient_get($this->handle, 50 );
  }
 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownOCSPCount($value) {
    $ret = secureblackbox_restclient_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getKnownOCSPBytes($knownocspindex) {
    return secureblackbox_restclient_get($this->handle, 51 , $knownocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownOCSPHandle($knownocspindex) {
    return secureblackbox_restclient_get($this->handle, 52 , $knownocspindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownOCSPHandle($knownocspindex, $value) {
    $ret = secureblackbox_restclient_set($this->handle, 52, $value , $knownocspindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the response content.
  *
  * @access   public
  */
  public function getOutputBytes() {
    return secureblackbox_restclient_get($this->handle, 53 );
  }


 /**
  * Contains the response content.
  *
  * @access   public
  */
  public function getOutputString() {
    return secureblackbox_restclient_get($this->handle, 54 );
  }


 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_restclient_get($this->handle, 55 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_restclient_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_restclient_get($this->handle, 56 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_restclient_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_restclient_get($this->handle, 57 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_restclient_set($this->handle, 57, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_restclient_get($this->handle, 58 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_restclient_set($this->handle, 58, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_restclient_get($this->handle, 59 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_restclient_set($this->handle, 59, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_restclient_get($this->handle, 60 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_restclient_set($this->handle, 60, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_restclient_get($this->handle, 61 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_restclient_set($this->handle, 61, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_restclient_get($this->handle, 62 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_restclient_set($this->handle, 62, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_restclient_get($this->handle, 63 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_restclient_set($this->handle, 63, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_restclient_get($this->handle, 64 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_restclient_set($this->handle, 64, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_restclient_get($this->handle, 65 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_restclient_set($this->handle, 65, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the Reason Phrase element of the server's response.
  *
  * @access   public
  */
  public function getReasonPhrase() {
    return secureblackbox_restclient_get($this->handle, 66 );
  }


 /**
  * The number of records in the ReqHeader arrays.
  *
  * @access   public
  */
  public function getReqHeaderCount() {
    return secureblackbox_restclient_get($this->handle, 67 );
  }
 /**
  * The number of records in the ReqHeader arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setReqHeaderCount($value) {
    $ret = secureblackbox_restclient_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name element in a (name, value) pair.
  *
  * @access   public
  */
  public function getReqHeaderName($reqheaderindex) {
    return secureblackbox_restclient_get($this->handle, 68 , $reqheaderindex);
  }
 /**
  * The name element in a (name, value) pair.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqHeaderName($reqheaderindex, $value) {
    $ret = secureblackbox_restclient_set($this->handle, 68, $value , $reqheaderindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value element in a (name, value) pair.
  *
  * @access   public
  */
  public function getReqHeaderValue($reqheaderindex) {
    return secureblackbox_restclient_get($this->handle, 69 , $reqheaderindex);
  }
 /**
  * The value element in a (name, value) pair.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqHeaderValue($reqheaderindex, $value) {
    $ret = secureblackbox_restclient_set($this->handle, 69, $value , $reqheaderindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the Accept header property of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsAccept() {
    return secureblackbox_restclient_get($this->handle, 70 );
  }
 /**
  * Specifies the Accept header property of the HTTP request.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsAccept($value) {
    $ret = secureblackbox_restclient_set($this->handle, 70, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the Accept-Charset header property of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsAcceptCharset() {
    return secureblackbox_restclient_get($this->handle, 71 );
  }
 /**
  * Specifies the Accept-Charset header property of the HTTP request.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsAcceptCharset($value) {
    $ret = secureblackbox_restclient_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the Accept-Language header property of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsAcceptLanguage() {
    return secureblackbox_restclient_get($this->handle, 72 );
  }
 /**
  * Specifies the Accept-Language header property of the HTTP request.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsAcceptLanguage($value) {
    $ret = secureblackbox_restclient_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * This property, in combination with AcceptRangeStart, defines the media-range of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsAcceptRangeEnd() {
    return secureblackbox_restclient_get($this->handle, 73 );
  }
 /**
  * This property, in combination with AcceptRangeStart, defines the media-range of the HTTP request.
  *
  * @access   public
  * @param    int64   value
  */
  public function setReqParamsAcceptRangeEnd($value) {
    $ret = secureblackbox_restclient_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * This property, in combination with AcceptRangeEnd, defines the media-range of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsAcceptRangeStart() {
    return secureblackbox_restclient_get($this->handle, 74 );
  }
 /**
  * This property, in combination with AcceptRangeEnd, defines the media-range of the HTTP request.
  *
  * @access   public
  * @param    int64   value
  */
  public function setReqParamsAcceptRangeStart($value) {
    $ret = secureblackbox_restclient_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the Authorization header of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsAuthorization() {
    return secureblackbox_restclient_get($this->handle, 75 );
  }
 /**
  * Specifies the Authorization header of the HTTP request.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsAuthorization($value) {
    $ret = secureblackbox_restclient_set($this->handle, 75, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the value to pass to the Connection header property of HTTP request.
  *
  * @access   public
  */
  public function getReqParamsConnection() {
    return secureblackbox_restclient_get($this->handle, 76 );
  }
 /**
  * Specifies the value to pass to the Connection header property of HTTP request.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsConnection($value) {
    $ret = secureblackbox_restclient_set($this->handle, 76, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the size of the entity-body of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsContentLength() {
    return secureblackbox_restclient_get($this->handle, 77 );
  }
 /**
  * Specifies the size of the entity-body of the HTTP request.
  *
  * @access   public
  * @param    int64   value
  */
  public function setReqParamsContentLength($value) {
    $ret = secureblackbox_restclient_set($this->handle, 77, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the upper bound used in the Content-Range header of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsContentRangeEnd() {
    return secureblackbox_restclient_get($this->handle, 78 );
  }
 /**
  * Specifies the upper bound used in the Content-Range header of the HTTP request.
  *
  * @access   public
  * @param    int64   value
  */
  public function setReqParamsContentRangeEnd($value) {
    $ret = secureblackbox_restclient_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the total length of the full entity-body of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsContentRangeFullSize() {
    return secureblackbox_restclient_get($this->handle, 79 );
  }
 /**
  * Specifies the total length of the full entity-body of the HTTP request.
  *
  * @access   public
  * @param    int64   value
  */
  public function setReqParamsContentRangeFullSize($value) {
    $ret = secureblackbox_restclient_set($this->handle, 79, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the lower bound used in the Content-Range header of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsContentRangeStart() {
    return secureblackbox_restclient_get($this->handle, 80 );
  }
 /**
  * Specifies the lower bound used in the Content-Range header of the HTTP request.
  *
  * @access   public
  * @param    int64   value
  */
  public function setReqParamsContentRangeStart($value) {
    $ret = secureblackbox_restclient_set($this->handle, 80, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The Content-Type header property of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsContentType() {
    return secureblackbox_restclient_get($this->handle, 81 );
  }
 /**
  * The Content-Type header property of the HTTP request.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsContentType($value) {
    $ret = secureblackbox_restclient_set($this->handle, 81, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * This header is expected to be assigned with cookies previously received from the server and stored by the client.
  *
  * @access   public
  */
  public function getReqParamsCookie() {
    return secureblackbox_restclient_get($this->handle, 82 );
  }
 /**
  * This header is expected to be assigned with cookies previously received from the server and stored by the client.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsCookie($value) {
    $ret = secureblackbox_restclient_set($this->handle, 82, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Assign any custom HTTP headers to be passed to the server to this property.
  *
  * @access   public
  */
  public function getReqParamsCustomHeaders() {
    return secureblackbox_restclient_get($this->handle, 83 );
  }
 /**
  * Assign any custom HTTP headers to be passed to the server to this property.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsCustomHeaders($value) {
    $ret = secureblackbox_restclient_set($this->handle, 83, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The date and time of the request.
  *
  * @access   public
  */
  public function getReqParamsDate() {
    return secureblackbox_restclient_get($this->handle, 84 );
  }
 /**
  * The date and time of the request.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsDate($value) {
    $ret = secureblackbox_restclient_set($this->handle, 84, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the From header property of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsFrom() {
    return secureblackbox_restclient_get($this->handle, 85 );
  }
 /**
  * Contains the From header property of the HTTP request.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsFrom($value) {
    $ret = secureblackbox_restclient_set($this->handle, 85, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * This property contains the Host header property of the HTTP request.
  *
  * @access   public
  */
  public function getReqParamsHost() {
    return secureblackbox_restclient_get($this->handle, 86 );
  }
 /**
  * This property contains the Host header property of the HTTP request.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsHost($value) {
    $ret = secureblackbox_restclient_set($this->handle, 86, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the version of HTTP protocol to use: 1.
  *
  * @access   public
  */
  public function getReqParamsHTTPVersion() {
    return secureblackbox_restclient_get($this->handle, 87 );
  }
 /**
  * Specifies the version of HTTP protocol to use: 1.
  *
  * @access   public
  * @param    int   value
  */
  public function setReqParamsHTTPVersion($value) {
    $ret = secureblackbox_restclient_set($this->handle, 87, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the If-Match request header property.
  *
  * @access   public
  */
  public function getReqParamsIfMatch() {
    return secureblackbox_restclient_get($this->handle, 88 );
  }
 /**
  * Contains the If-Match request header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsIfMatch($value) {
    $ret = secureblackbox_restclient_set($this->handle, 88, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the If-Modified-Since request header property.
  *
  * @access   public
  */
  public function getReqParamsIfModifiedSince() {
    return secureblackbox_restclient_get($this->handle, 89 );
  }
 /**
  * Contains the If-Modified-Since request header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsIfModifiedSince($value) {
    $ret = secureblackbox_restclient_set($this->handle, 89, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the If-None-Match request header property.
  *
  * @access   public
  */
  public function getReqParamsIfNoneMatch() {
    return secureblackbox_restclient_get($this->handle, 90 );
  }
 /**
  * Contains the If-None-Match request header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsIfNoneMatch($value) {
    $ret = secureblackbox_restclient_set($this->handle, 90, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the If-Unmodified-Since request header property.
  *
  * @access   public
  */
  public function getReqParamsIfUnmodifiedSince() {
    return secureblackbox_restclient_get($this->handle, 91 );
  }
 /**
  * Contains the If-Unmodified-Since request header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsIfUnmodifiedSince($value) {
    $ret = secureblackbox_restclient_set($this->handle, 91, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Assign this property with the user's password.
  *
  * @access   public
  */
  public function getReqParamsPassword() {
    return secureblackbox_restclient_get($this->handle, 92 );
  }
 /**
  * Assign this property with the user's password.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsPassword($value) {
    $ret = secureblackbox_restclient_set($this->handle, 92, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The Referer property of the HTTP request header specifies the address of the  resource from which the Request-URI was obtained (the referrer).
  *
  * @access   public
  */
  public function getReqParamsReferer() {
    return secureblackbox_restclient_get($this->handle, 93 );
  }
 /**
  * The Referer property of the HTTP request header specifies the address of the  resource from which the Request-URI was obtained (the referrer).
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsReferer($value) {
    $ret = secureblackbox_restclient_set($this->handle, 93, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The User-Agent property of the HTTP request provides information about the software that initiates the request.
  *
  * @access   public
  */
  public function getReqParamsUserAgent() {
    return secureblackbox_restclient_get($this->handle, 94 );
  }
 /**
  * The User-Agent property of the HTTP request provides information about the software that initiates the request.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsUserAgent($value) {
    $ret = secureblackbox_restclient_set($this->handle, 94, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Assign this property with the user's login name.
  *
  * @access   public
  */
  public function getReqParamsUsername() {
    return secureblackbox_restclient_get($this->handle, 95 );
  }
 /**
  * Assign this property with the user's login name.
  *
  * @access   public
  * @param    string   value
  */
  public function setReqParamsUsername($value) {
    $ret = secureblackbox_restclient_set($this->handle, 95, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the RespHeader arrays.
  *
  * @access   public
  */
  public function getRespHeaderCount() {
    return secureblackbox_restclient_get($this->handle, 96 );
  }


 /**
  * The name element in a (name, value) pair.
  *
  * @access   public
  */
  public function getRespHeaderName($respheaderindex) {
    return secureblackbox_restclient_get($this->handle, 97 , $respheaderindex);
  }


 /**
  * The value element in a (name, value) pair.
  *
  * @access   public
  */
  public function getRespHeaderValue($respheaderindex) {
    return secureblackbox_restclient_get($this->handle, 98 , $respheaderindex);
  }


 /**
  * Indicates the length of the response content in bytes.
  *
  * @access   public
  */
  public function getRespParamsContentLength() {
    return secureblackbox_restclient_get($this->handle, 99 );
  }


 /**
  * The date and time at which the response was generated, in server time, in UTC.
  *
  * @access   public
  */
  public function getRespParamsDate() {
    return secureblackbox_restclient_get($this->handle, 100 );
  }


 /**
  * Contains the reason phrase (a human-readable comment) of the request processing status, which corresponds to, and complements, the staus code.
  *
  * @access   public
  */
  public function getRespParamsReasonPhrase() {
    return secureblackbox_restclient_get($this->handle, 101 );
  }


 /**
  * The server-generated status code of the request processing status.
  *
  * @access   public
  */
  public function getRespParamsStatusCode() {
    return secureblackbox_restclient_get($this->handle, 102 );
  }


 /**
  * The number of records in the ServerCert arrays.
  *
  * @access   public
  */
  public function getServerCertCount() {
    return secureblackbox_restclient_get($this->handle, 103 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getServerCertBytes($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 104 , $servercertindex);
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getServerCertCAKeyID($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 105 , $servercertindex);
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getServerCertFingerprint($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 106 , $servercertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getServerCertHandle($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 107 , $servercertindex);
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getServerCertIssuer($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 108 , $servercertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getServerCertIssuerRDN($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 109 , $servercertindex);
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getServerCertKeyAlgorithm($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 110 , $servercertindex);
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getServerCertKeyBits($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 111 , $servercertindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getServerCertKeyFingerprint($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 112 , $servercertindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getServerCertKeyUsage($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 113 , $servercertindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getServerCertPublicKeyBytes($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 114 , $servercertindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getServerCertSelfSigned($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 115 , $servercertindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getServerCertSerialNumber($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 116 , $servercertindex);
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getServerCertSigAlgorithm($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 117 , $servercertindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getServerCertSubject($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 118 , $servercertindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getServerCertSubjectKeyID($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 119 , $servercertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getServerCertSubjectRDN($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 120 , $servercertindex);
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getServerCertValidFrom($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 121 , $servercertindex);
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getServerCertValidTo($servercertindex) {
    return secureblackbox_restclient_get($this->handle, 122 , $servercertindex);
  }


 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_restclient_get($this->handle, 123 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_restclient_set($this->handle, 123, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_restclient_get($this->handle, 124 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_restclient_set($this->handle, 124, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_restclient_get($this->handle, 125 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_restclient_set($this->handle, 125, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_restclient_get($this->handle, 126 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_restclient_set($this->handle, 126, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_restclient_get($this->handle, 127 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_restclient_set($this->handle, 127, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_restclient_get($this->handle, 128 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_restclient_set($this->handle, 128, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_restclient_get($this->handle, 129 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_restclient_set($this->handle, 129, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_restclient_get($this->handle, 130 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_restclient_set($this->handle, 130, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_restclient_get($this->handle, 131 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_restclient_set($this->handle, 131, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_restclient_get($this->handle, 132 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_restclient_set($this->handle, 132, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_restclient_get($this->handle, 133 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_restclient_set($this->handle, 133, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the Status Code element of the server's response.
  *
  * @access   public
  */
  public function getStatusCode() {
    return secureblackbox_restclient_get($this->handle, 134 );
  }


 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_restclient_get($this->handle, 135 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_restclient_set($this->handle, 135, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_restclient_get($this->handle, 136 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_restclient_set($this->handle, 136, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_restclient_get($this->handle, 137 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_restclient_set($this->handle, 137, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_restclient_get($this->handle, 138 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_restclient_set($this->handle, 138, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_restclient_get($this->handle, 139 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_restclient_set($this->handle, 139, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_restclient_get($this->handle, 140 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_restclient_set($this->handle, 140, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_restclient_get($this->handle, 141 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_restclient_set($this->handle, 141, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_restclient_get($this->handle, 142 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_restclient_set($this->handle, 142, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_restclient_get($this->handle, 143 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_restclient_set($this->handle, 143, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_restclient_get($this->handle, 144 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_restclient_set($this->handle, 144, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_restclient_get($this->handle, 145 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_restclient_set($this->handle, 145, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_restclient_get($this->handle, 146 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_restclient_set($this->handle, 146, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_restclient_get($this->handle, 147 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_restclient_set($this->handle, 147, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_restclient_get($this->handle, 148 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_restclient_set($this->handle, 148, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_restclient_get($this->handle, 149 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_restclient_set($this->handle, 149, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  */
  public function getTrustedCertCount() {
    return secureblackbox_restclient_get($this->handle, 150 );
  }
 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setTrustedCertCount($value) {
    $ret = secureblackbox_restclient_set($this->handle, 150, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTrustedCertBytes($trustedcertindex) {
    return secureblackbox_restclient_get($this->handle, 151 , $trustedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTrustedCertHandle($trustedcertindex) {
    return secureblackbox_restclient_get($this->handle, 152 , $trustedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setTrustedCertHandle($trustedcertindex, $value) {
    $ret = secureblackbox_restclient_set($this->handle, 152, $value , $trustedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables the HTTP Digest authentication.
  *
  * @access   public
  */
  public function getUseDigestAuth() {
    return secureblackbox_restclient_get($this->handle, 153 );
  }
 /**
  * Enables or disables the HTTP Digest authentication.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setUseDigestAuth($value) {
    $ret = secureblackbox_restclient_set($this->handle, 153, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables NTLM authentication.
  *
  * @access   public
  */
  public function getUseNTLMAuth() {
    return secureblackbox_restclient_get($this->handle, 154 );
  }
 /**
  * Enables or disables NTLM authentication.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setUseNTLMAuth($value) {
    $ret = secureblackbox_restclient_set($this->handle, 154, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_restclient_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_restclient_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_restclient_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Fires when the server's TLS certificate has to be validated.
  *
  * @access   public
  * @param    array   Array of event parameters: address, accept    
  */
  public function fireCertificateValidate($param) {
    return $param;
  }

 /**
  * Fired to report a received cookie.
  *
  * @access   public
  * @param    array   Array of event parameters: cookietext    
  */
  public function fireCookie($param) {
    return $param;
  }

 /**
  * Marks the start of the incoming HTML document or file.
  *
  * @access   public
  * @param    array   Array of event parameters:     
  */
  public function fireDocumentBegin($param) {
    return $param;
  }

 /**
  * Marks the successful receipt of the incoming HTML document or file.
  *
  * @access   public
  * @param    array   Array of event parameters:     
  */
  public function fireDocumentEnd($param) {
    return $param;
  }

 /**
  * Requests a portion of data to be uploaded from the application.
  *
  * @access   public
  * @param    array   Array of event parameters: bytesneeded    
  */
  public function fireDynamicDataNeeded($param) {
    return $param;
  }

 /**
  * Information about errors during data delivery.
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
  * Fires when the request headers have been formed and are about to be sent to the server.
  *
  * @access   public
  * @param    array   Array of event parameters:     
  */
  public function fireHeadersPrepared($param) {
    return $param;
  }

 /**
  * Fires when the HTTP response headers have just been received from the server.
  *
  * @access   public
  * @param    array   Array of event parameters:     
  */
  public function fireHeadersReceived($param) {
    return $param;
  }

 /**
  * Fires periodically during the data transfer.
  *
  * @access   public
  * @param    array   Array of event parameters: total, current, cancel    
  */
  public function fireProgress($param) {
    return $param;
  }

 /**
  * Fires when the server suggests a redirect.
  *
  * @access   public
  * @param    array   Array of event parameters: oldurl, newurl, allowredirection    
  */
  public function fireRedirection($param) {
    return $param;
  }


}

?>
