<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - SMTPClient Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_SMTPClient {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_smtpclient_open(SECUREBLACKBOX_OEMKEY_302);
    secureblackbox_smtpclient_register_callback($this->handle, 1, array($this, 'fireBeforeAuth'));
    secureblackbox_smtpclient_register_callback($this->handle, 2, array($this, 'fireCertificateValidate'));
    secureblackbox_smtpclient_register_callback($this->handle, 3, array($this, 'fireCommand'));
    secureblackbox_smtpclient_register_callback($this->handle, 4, array($this, 'fireCommandData'));
    secureblackbox_smtpclient_register_callback($this->handle, 5, array($this, 'fireCommandReply'));
    secureblackbox_smtpclient_register_callback($this->handle, 6, array($this, 'fireError'));
    secureblackbox_smtpclient_register_callback($this->handle, 7, array($this, 'fireExternalSign'));
    secureblackbox_smtpclient_register_callback($this->handle, 8, array($this, 'fireProgress'));
  }
  
  public function __destruct() {
    secureblackbox_smtpclient_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_smtpclient_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_smtpclient_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_smtpclient_do_config($this->handle, $configurationstring);
		$err = secureblackbox_smtpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Establishes a connection to the SMTP server.
  *
  * @access   public
  * @param    string    address
  * @param    int    port
  */
  public function doConnect($address, $port) {
    $ret = secureblackbox_smtpclient_do_connect($this->handle, $address, $port);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Closes connection to the SMTP server.
  *
  * @access   public
  */
  public function doDisconnect() {
    $ret = secureblackbox_smtpclient_do_disconnect($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends an e-mail message stored in a file.
  *
  * @access   public
  * @param    string    filename
  */
  public function doSendFile($filename) {
    $ret = secureblackbox_smtpclient_do_sendfile($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a message to the SMTP server.
  *
  * @access   public
  */
  public function doSendMessage() {
    $ret = secureblackbox_smtpclient_do_sendmessage($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_smtpclient_get($this->handle, 0);
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  */
  public function getBlockedCertCount() {
    return secureblackbox_smtpclient_get($this->handle, 1 );
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setBlockedCertCount($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getBlockedCertBytes($blockedcertindex) {
    return secureblackbox_smtpclient_get($this->handle, 2 , $blockedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getBlockedCertHandle($blockedcertindex) {
    return secureblackbox_smtpclient_get($this->handle, 3 , $blockedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setBlockedCertHandle($blockedcertindex, $value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 3, $value , $blockedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ClientCert arrays.
  *
  * @access   public
  */
  public function getClientCertCount() {
    return secureblackbox_smtpclient_get($this->handle, 4 );
  }
 /**
  * The number of records in the ClientCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setClientCertCount($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getClientCertBytes($clientcertindex) {
    return secureblackbox_smtpclient_get($this->handle, 5 , $clientcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getClientCertHandle($clientcertindex) {
    return secureblackbox_smtpclient_get($this->handle, 6 , $clientcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setClientCertHandle($clientcertindex, $value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 6, $value , $clientcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether the encryption algorithm used is an AEAD cipher.
  *
  * @access   public
  */
  public function getConnInfoAEADCipher() {
    return secureblackbox_smtpclient_get($this->handle, 7 );
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getConnInfoChainValidationDetails() {
    return secureblackbox_smtpclient_get($this->handle, 8 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getConnInfoChainValidationResult() {
    return secureblackbox_smtpclient_get($this->handle, 9 );
  }


 /**
  * The cipher suite employed by this connection.
  *
  * @access   public
  */
  public function getConnInfoCiphersuite() {
    return secureblackbox_smtpclient_get($this->handle, 10 );
  }


 /**
  * Specifies whether client authentication was performed during this connection.
  *
  * @access   public
  */
  public function getConnInfoClientAuthenticated() {
    return secureblackbox_smtpclient_get($this->handle, 11 );
  }


 /**
  * Indicates whether the connection has been established fully.
  *
  * @access   public
  */
  public function getConnInfoConnectionEstablished() {
    return secureblackbox_smtpclient_get($this->handle, 12 );
  }


 /**
  * The unique identifier assigned to this connection.
  *
  * @access   public
  */
  public function getConnInfoConnectionID() {
    return secureblackbox_smtpclient_get($this->handle, 13 );
  }


 /**
  * The digest algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoDigestAlgorithm() {
    return secureblackbox_smtpclient_get($this->handle, 14 );
  }


 /**
  * The symmetric encryption algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoEncryptionAlgorithm() {
    return secureblackbox_smtpclient_get($this->handle, 15 );
  }


 /**
  * Indicates whether a TLS connection uses a reduced-strength exportable cipher.
  *
  * @access   public
  */
  public function getConnInfoExportable() {
    return secureblackbox_smtpclient_get($this->handle, 16 );
  }


 /**
  * The key exchange algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoKeyExchangeAlgorithm() {
    return secureblackbox_smtpclient_get($this->handle, 17 );
  }


 /**
  * The length of the key exchange key of a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoKeyExchangeKeyBits() {
    return secureblackbox_smtpclient_get($this->handle, 18 );
  }


 /**
  * The elliptic curve used in this connection.
  *
  * @access   public
  */
  public function getConnInfoNamedECCurve() {
    return secureblackbox_smtpclient_get($this->handle, 19 );
  }


 /**
  * Indicates whether the chosen ciphersuite provides perfect forward secrecy (PFS).
  *
  * @access   public
  */
  public function getConnInfoPFSCipher() {
    return secureblackbox_smtpclient_get($this->handle, 20 );
  }


 /**
  * A hint professed by the server to help the client select the PSK identity to use.
  *
  * @access   public
  */
  public function getConnInfoPreSharedIdentityHint() {
    return secureblackbox_smtpclient_get($this->handle, 21 );
  }


 /**
  * The length of the public key.
  *
  * @access   public
  */
  public function getConnInfoPublicKeyBits() {
    return secureblackbox_smtpclient_get($this->handle, 22 );
  }


 /**
  * Indicates whether a TLS-enabled connection was spawned from another TLS connection.
  *
  * @access   public
  */
  public function getConnInfoResumedSession() {
    return secureblackbox_smtpclient_get($this->handle, 23 );
  }


 /**
  * Indicates whether TLS or SSL is enabled for this connection.
  *
  * @access   public
  */
  public function getConnInfoSecureConnection() {
    return secureblackbox_smtpclient_get($this->handle, 24 );
  }


 /**
  * Indicates whether server authentication was performed during a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoServerAuthenticated() {
    return secureblackbox_smtpclient_get($this->handle, 25 );
  }


 /**
  * The signature algorithm used in a TLS handshake.
  *
  * @access   public
  */
  public function getConnInfoSignatureAlgorithm() {
    return secureblackbox_smtpclient_get($this->handle, 26 );
  }


 /**
  * The block size of the symmetric algorithm used.
  *
  * @access   public
  */
  public function getConnInfoSymmetricBlockSize() {
    return secureblackbox_smtpclient_get($this->handle, 27 );
  }


 /**
  * The key length of the symmetric algorithm used.
  *
  * @access   public
  */
  public function getConnInfoSymmetricKeyBits() {
    return secureblackbox_smtpclient_get($this->handle, 28 );
  }


 /**
  * The total number of bytes received over this connection.
  *
  * @access   public
  */
  public function getConnInfoTotalBytesReceived() {
    return secureblackbox_smtpclient_get($this->handle, 29 );
  }


 /**
  * The total number of bytes sent over this connection.
  *
  * @access   public
  */
  public function getConnInfoTotalBytesSent() {
    return secureblackbox_smtpclient_get($this->handle, 30 );
  }


 /**
  * Contains the server certificate's chain validation log.
  *
  * @access   public
  */
  public function getConnInfoValidationLog() {
    return secureblackbox_smtpclient_get($this->handle, 31 );
  }


 /**
  * Indicates the version of SSL/TLS protocol negotiated during this connection.
  *
  * @access   public
  */
  public function getConnInfoVersion() {
    return secureblackbox_smtpclient_get($this->handle, 32 );
  }


 /**
  * The sender host's domain name for HELO/EHLO.
  *
  * @access   public
  */
  public function getDomain() {
    return secureblackbox_smtpclient_get($this->handle, 33 );
  }
 /**
  * The sender host's domain name for HELO/EHLO.
  *
  * @access   public
  * @param    string   value
  */
  public function setDomain($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_smtpclient_get($this->handle, 34 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_smtpclient_get($this->handle, 35 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 35, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_smtpclient_get($this->handle, 36 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_smtpclient_get($this->handle, 37 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 37, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_smtpclient_get($this->handle, 38 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 38, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_smtpclient_get($this->handle, 39 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 39, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_smtpclient_get($this->handle, 40 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_smtpclient_get($this->handle, 41 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_smtpclient_get($this->handle, 42 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 42, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  */
  public function getKnownCertCount() {
    return secureblackbox_smtpclient_get($this->handle, 43 );
  }
 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCertCount($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 43, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKnownCertBytes($knowncertindex) {
    return secureblackbox_smtpclient_get($this->handle, 44 , $knowncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCertHandle($knowncertindex) {
    return secureblackbox_smtpclient_get($this->handle, 45 , $knowncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCertHandle($knowncertindex, $value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 45, $value , $knowncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  */
  public function getKnownCRLCount() {
    return secureblackbox_smtpclient_get($this->handle, 46 );
  }
 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCRLCount($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getKnownCRLBytes($knowncrlindex) {
    return secureblackbox_smtpclient_get($this->handle, 47 , $knowncrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCRLHandle($knowncrlindex) {
    return secureblackbox_smtpclient_get($this->handle, 48 , $knowncrlindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCRLHandle($knowncrlindex, $value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 48, $value , $knowncrlindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  */
  public function getKnownOCSPCount() {
    return secureblackbox_smtpclient_get($this->handle, 49 );
  }
 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownOCSPCount($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 49, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getKnownOCSPBytes($knownocspindex) {
    return secureblackbox_smtpclient_get($this->handle, 50 , $knownocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownOCSPHandle($knownocspindex) {
    return secureblackbox_smtpclient_get($this->handle, 51 , $knownocspindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownOCSPHandle($knownocspindex, $value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 51, $value , $knownocspindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the number of attachments in this message.
  *
  * @access   public
  */
  public function getMsgAttachmentCount() {
    return secureblackbox_smtpclient_get($this->handle, 52 );
  }


 /**
  * The contents of the BCC header property.
  *
  * @access   public
  */
  public function getMsgBcc() {
    return secureblackbox_smtpclient_get($this->handle, 53 );
  }
 /**
  * The contents of the BCC header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgBcc($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the CC header property.
  *
  * @access   public
  */
  public function getMsgCc() {
    return secureblackbox_smtpclient_get($this->handle, 54 );
  }
 /**
  * The value of the CC header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgCc($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains additional information about the message body.
  *
  * @access   public
  */
  public function getMsgComments() {
    return secureblackbox_smtpclient_get($this->handle, 55 );
  }
 /**
  * Contains additional information about the message body.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgComments($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The date and time when the message entered the mail delivery system.
  *
  * @access   public
  */
  public function getMsgDate() {
    return secureblackbox_smtpclient_get($this->handle, 56 );
  }
 /**
  * The date and time when the message entered the mail delivery system.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgDate($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables delivery notification.
  *
  * @access   public
  */
  public function getMsgDeliveryReceipt() {
    return secureblackbox_smtpclient_get($this->handle, 57 );
  }
 /**
  * Enables delivery notification.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setMsgDeliveryReceipt($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 57, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the value of the From header property.
  *
  * @access   public
  */
  public function getMsgFrom() {
    return secureblackbox_smtpclient_get($this->handle, 58 );
  }
 /**
  * Contains the value of the From header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgFrom($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 58, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The HTML version of the message.
  *
  * @access   public
  */
  public function getMsgHtmlText() {
    return secureblackbox_smtpclient_get($this->handle, 59 );
  }
 /**
  * The HTML version of the message.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgHtmlText($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 59, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The contents of the Message-ID: header property.
  *
  * @access   public
  */
  public function getMsgID() {
    return secureblackbox_smtpclient_get($this->handle, 60 );
  }
 /**
  * The contents of the Message-ID: header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgID($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 60, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "In-Reply-To:" header property.
  *
  * @access   public
  */
  public function getMsgInReplyTo() {
    return secureblackbox_smtpclient_get($this->handle, 61 );
  }
 /**
  * The value of the "In-Reply-To:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgInReplyTo($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 61, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "Keywords:" header property.
  *
  * @access   public
  */
  public function getMsgKeywords() {
    return secureblackbox_smtpclient_get($this->handle, 62 );
  }
 /**
  * The value of the "Keywords:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgKeywords($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 62, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the software that was used to send the message.
  *
  * @access   public
  */
  public function getMsgMailer() {
    return secureblackbox_smtpclient_get($this->handle, 63 );
  }


 /**
  * The plain text version of the message.
  *
  * @access   public
  */
  public function getMsgPlainText() {
    return secureblackbox_smtpclient_get($this->handle, 64 );
  }
 /**
  * The plain text version of the message.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgPlainText($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 64, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the message priority.
  *
  * @access   public
  */
  public function getMsgPriority() {
    return secureblackbox_smtpclient_get($this->handle, 65 );
  }
 /**
  * Specifies the message priority.
  *
  * @access   public
  * @param    int   value
  */
  public function setMsgPriority($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 65, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables a read notification.
  *
  * @access   public
  */
  public function getMsgReadReceipt() {
    return secureblackbox_smtpclient_get($this->handle, 66 );
  }
 /**
  * Enables a read notification.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setMsgReadReceipt($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 66, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "References:" header property.
  *
  * @access   public
  */
  public function getMsgReferences() {
    return secureblackbox_smtpclient_get($this->handle, 67 );
  }
 /**
  * The value of the "References:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgReferences($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the Reply-To header property.
  *
  * @access   public
  */
  public function getMsgReplyTo() {
    return secureblackbox_smtpclient_get($this->handle, 68 );
  }
 /**
  * The value of the Reply-To header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgReplyTo($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 68, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "Return-Path:" header property.
  *
  * @access   public
  */
  public function getMsgReturnPath() {
    return secureblackbox_smtpclient_get($this->handle, 69 );
  }
 /**
  * The value of the "Return-Path:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgReturnPath($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 69, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the Sender header property.
  *
  * @access   public
  */
  public function getMsgSender() {
    return secureblackbox_smtpclient_get($this->handle, 70 );
  }
 /**
  * The value of the Sender header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgSender($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 70, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the To header property.
  *
  * @access   public
  */
  public function getMsgSendTo() {
    return secureblackbox_smtpclient_get($this->handle, 71 );
  }
 /**
  * The value of the To header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgSendTo($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the subject property of this message.
  *
  * @access   public
  */
  public function getMsgSubject() {
    return secureblackbox_smtpclient_get($this->handle, 72 );
  }
 /**
  * Contains the subject property of this message.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgSubject($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication password.
  *
  * @access   public
  */
  public function getPassword() {
    return secureblackbox_smtpclient_get($this->handle, 73 );
  }
 /**
  * The authentication password.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassword($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_smtpclient_get($this->handle, 74 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_smtpclient_get($this->handle, 75 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 75, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_smtpclient_get($this->handle, 76 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 76, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_smtpclient_get($this->handle, 77 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 77, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_smtpclient_get($this->handle, 78 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_smtpclient_get($this->handle, 79 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 79, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_smtpclient_get($this->handle, 80 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 80, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_smtpclient_get($this->handle, 81 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 81, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_smtpclient_get($this->handle, 82 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 82, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_smtpclient_get($this->handle, 83 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 83, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_smtpclient_get($this->handle, 84 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 84, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ServerCert arrays.
  *
  * @access   public
  */
  public function getServerCertCount() {
    return secureblackbox_smtpclient_get($this->handle, 85 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getServerCertBytes($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 86 , $servercertindex);
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getServerCertCAKeyID($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 87 , $servercertindex);
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getServerCertFingerprint($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 88 , $servercertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getServerCertHandle($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 89 , $servercertindex);
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getServerCertIssuer($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 90 , $servercertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getServerCertIssuerRDN($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 91 , $servercertindex);
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getServerCertKeyAlgorithm($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 92 , $servercertindex);
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getServerCertKeyBits($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 93 , $servercertindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getServerCertKeyFingerprint($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 94 , $servercertindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getServerCertKeyUsage($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 95 , $servercertindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getServerCertPublicKeyBytes($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 96 , $servercertindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getServerCertSelfSigned($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 97 , $servercertindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getServerCertSerialNumber($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 98 , $servercertindex);
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getServerCertSigAlgorithm($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 99 , $servercertindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getServerCertSubject($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 100 , $servercertindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getServerCertSubjectKeyID($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 101 , $servercertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getServerCertSubjectRDN($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 102 , $servercertindex);
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getServerCertValidFrom($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 103 , $servercertindex);
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getServerCertValidTo($servercertindex) {
    return secureblackbox_smtpclient_get($this->handle, 104 , $servercertindex);
  }


 /**
  * Whether the SMTP server supports LOGIN authentication method.
  *
  * @access   public
  */
  public function getServerInfoAuthLoginSupported() {
    return secureblackbox_smtpclient_get($this->handle, 105 );
  }


 /**
  * Whether the SMTP server supports PLAIN authentication method.
  *
  * @access   public
  */
  public function getServerInfoAuthPlainSupported() {
    return secureblackbox_smtpclient_get($this->handle, 106 );
  }


 /**
  * Specifies whether server extensions are available.
  *
  * @access   public
  */
  public function getServerInfoAvailable() {
    return secureblackbox_smtpclient_get($this->handle, 107 );
  }


 /**
  * Whether binary sending mode is supported by the SMTP server.
  *
  * @access   public
  */
  public function getServerInfoBinarySupported() {
    return secureblackbox_smtpclient_get($this->handle, 108 );
  }


 /**
  * Whether message chunking is supported by the SMTP server.
  *
  * @access   public
  */
  public function getServerInfoChunkingSupported() {
    return secureblackbox_smtpclient_get($this->handle, 109 );
  }


 /**
  * Whether the SMTP server supports Delivery Status Notifications.
  *
  * @access   public
  */
  public function getServerInfoDsnSupported() {
    return secureblackbox_smtpclient_get($this->handle, 110 );
  }


 /**
  * Returns the maximum size of a message in bytes which the server can accept.
  *
  * @access   public
  */
  public function getServerInfoMaxMessageSize() {
    return secureblackbox_smtpclient_get($this->handle, 111 );
  }


 /**
  * Whether the SMTP server supports SASL authentication.
  *
  * @access   public
  */
  public function getServerInfoSaslSupported() {
    return secureblackbox_smtpclient_get($this->handle, 112 );
  }


 /**
  * Whether the SMTP server supports SIZE service extension.
  *
  * @access   public
  */
  public function getServerInfoSizeSupported() {
    return secureblackbox_smtpclient_get($this->handle, 113 );
  }


 /**
  * Whether the SMTP server supports status codes.
  *
  * @access   public
  */
  public function getServerInfoStatusCodesSupported() {
    return secureblackbox_smtpclient_get($this->handle, 114 );
  }


 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_smtpclient_get($this->handle, 115 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 115, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_smtpclient_get($this->handle, 116 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 116, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_smtpclient_get($this->handle, 117 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 117, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_smtpclient_get($this->handle, 118 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 118, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_smtpclient_get($this->handle, 119 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 119, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_smtpclient_get($this->handle, 120 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 120, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_smtpclient_get($this->handle, 121 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 121, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_smtpclient_get($this->handle, 122 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 122, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_smtpclient_get($this->handle, 123 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 123, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_smtpclient_get($this->handle, 124 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 124, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_smtpclient_get($this->handle, 125 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 125, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_smtpclient_get($this->handle, 126 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 126, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_smtpclient_get($this->handle, 127 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 127, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_smtpclient_get($this->handle, 128 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 128, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_smtpclient_get($this->handle, 129 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 129, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_smtpclient_get($this->handle, 130 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 130, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_smtpclient_get($this->handle, 131 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 131, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_smtpclient_get($this->handle, 132 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 132, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_smtpclient_get($this->handle, 133 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 133, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_smtpclient_get($this->handle, 134 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 134, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_smtpclient_get($this->handle, 135 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 135, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_smtpclient_get($this->handle, 136 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 136, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_smtpclient_get($this->handle, 137 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 137, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_smtpclient_get($this->handle, 138 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 138, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_smtpclient_get($this->handle, 139 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 139, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_smtpclient_get($this->handle, 140 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 140, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  */
  public function getTrustedCertCount() {
    return secureblackbox_smtpclient_get($this->handle, 141 );
  }
 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setTrustedCertCount($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 141, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTrustedCertBytes($trustedcertindex) {
    return secureblackbox_smtpclient_get($this->handle, 142 , $trustedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTrustedCertHandle($trustedcertindex) {
    return secureblackbox_smtpclient_get($this->handle, 143 , $trustedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setTrustedCertHandle($trustedcertindex, $value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 143, $value , $trustedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication username.
  *
  * @access   public
  */
  public function getUsername() {
    return secureblackbox_smtpclient_get($this->handle, 144 );
  }
 /**
  * The authentication username.
  *
  * @access   public
  * @param    string   value
  */
  public function setUsername($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 144, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_smtpclient_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_smtpclient_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_smtpclient_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Fires before the authentication starts.
  *
  * @access   public
  * @param    array   Array of event parameters:     
  */
  public function fireBeforeAuth($param) {
    return $param;
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
  * Reports a command sent to the server.
  *
  * @access   public
  * @param    array   Array of event parameters: cmd    
  */
  public function fireCommand($param) {
    return $param;
  }

 /**
  * Returns the data that accompanies the command.
  *
  * @access   public
  * @param    array   Array of event parameters: cmd, data    
  */
  public function fireCommandData($param) {
    return $param;
  }

 /**
  * Reports the receipt of a reply to a command.
  *
  * @access   public
  * @param    array   Array of event parameters: cmd, reply    
  */
  public function fireCommandReply($param) {
    return $param;
  }

 /**
  * Provides information about errors during SMTP operations.
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
  * Reports the progress of the data transfer operation.
  *
  * @access   public
  * @param    array   Array of event parameters: total, current, cancel    
  */
  public function fireProgress($param) {
    return $param;
  }


}

?>
