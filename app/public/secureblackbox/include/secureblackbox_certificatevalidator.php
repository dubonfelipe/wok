<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - CertificateValidator Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_CertificateValidator {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_certificatevalidator_open(SECUREBLACKBOX_OEMKEY_265);
    secureblackbox_certificatevalidator_register_callback($this->handle, 1, array($this, 'fireAfterCertificateProcessing'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 2, array($this, 'fireAfterCertificateValidation'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 3, array($this, 'fireBeforeCACertificateDownload'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 4, array($this, 'fireBeforeCertificateProcessing'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 5, array($this, 'fireBeforeCertificateValidation'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 6, array($this, 'fireBeforeCRLDownload'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 7, array($this, 'fireBeforeOCSPDownload'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 8, array($this, 'fireCACertificateDownloaded'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 9, array($this, 'fireCACertificateNeeded'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 10, array($this, 'fireCRLDownloaded'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 11, array($this, 'fireCRLNeeded'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 12, array($this, 'fireError'));
    secureblackbox_certificatevalidator_register_callback($this->handle, 13, array($this, 'fireOCSPDownloaded'));
  }
  
  public function __destruct() {
    secureblackbox_certificatevalidator_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_certificatevalidator_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_certificatevalidator_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_certificatevalidator_do_config($this->handle, $configurationstring);
		$err = secureblackbox_certificatevalidator_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Refreshes the certificate cache.
  *
  * @access   public
  */
  public function doRefreshCache() {
    $ret = secureblackbox_certificatevalidator_do_refreshcache($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Clears all data contained in the validation cache.
  *
  * @access   public
  */
  public function doResetCache() {
    $ret = secureblackbox_certificatevalidator_do_resetcache($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Terminates the validation process.
  *
  * @access   public
  */
  public function doTerminate() {
    $ret = secureblackbox_certificatevalidator_do_terminate($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Validates the certificate chain.
  *
  * @access   public
  */
  public function doValidate() {
    $ret = secureblackbox_certificatevalidator_do_validate($this->handle);
		$err = secureblackbox_certificatevalidator_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Validates an e-mail signing certificate.
  *
  * @access   public
  * @param    string    emailaddress
  */
  public function doValidateForSMIME($emailaddress) {
    $ret = secureblackbox_certificatevalidator_do_validateforsmime($this->handle, $emailaddress);
		$err = secureblackbox_certificatevalidator_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Validates a server-side SSL/TLS certificate.
  *
  * @access   public
  * @param    string    url
  * @param    string    ipaddress
  */
  public function doValidateForSSL($url, $ipaddress) {
    $ret = secureblackbox_certificatevalidator_do_validateforssl($this->handle, $url, $ipaddress);
		$err = secureblackbox_certificatevalidator_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_certificatevalidator_get($this->handle, 0);
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  */
  public function getBlockedCertCount() {
    return secureblackbox_certificatevalidator_get($this->handle, 1 );
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setBlockedCertCount($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getBlockedCertBytes($blockedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 2 , $blockedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getBlockedCertHandle($blockedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 3 , $blockedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setBlockedCertHandle($blockedcertindex, $value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 3, $value , $blockedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables validation result caching.
  *
  * @access   public
  */
  public function getCacheValidationResults() {
    return secureblackbox_certificatevalidator_get($this->handle, 4 );
  }
 /**
  * Enables or disables validation result caching.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setCacheValidationResults($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCertBytes() {
    return secureblackbox_certificatevalidator_get($this->handle, 5 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCertHandle() {
    return secureblackbox_certificatevalidator_get($this->handle, 6 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setCertHandle($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getChainValidationDetails() {
    return secureblackbox_certificatevalidator_get($this->handle, 7 );
  }


 /**
  * The general outcome of a certificate chain validation routine. Use ChainValidationDetails to get information about the reasons that contributed to the validation result.
  *
  * @access   public
  */
  public function getChainValidationResult() {
    return secureblackbox_certificatevalidator_get($this->handle, 8 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCurrentCACertBytes() {
    return secureblackbox_certificatevalidator_get($this->handle, 9 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getCurrentCACertCA() {
    return secureblackbox_certificatevalidator_get($this->handle, 10 );
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getCurrentCACertCAKeyID() {
    return secureblackbox_certificatevalidator_get($this->handle, 11 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getCurrentCACertCRLDistributionPoints() {
    return secureblackbox_certificatevalidator_get($this->handle, 12 );
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getCurrentCACertCurve() {
    return secureblackbox_certificatevalidator_get($this->handle, 13 );
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getCurrentCACertFingerprint() {
    return secureblackbox_certificatevalidator_get($this->handle, 14 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getCurrentCACertFriendlyName() {
    return secureblackbox_certificatevalidator_get($this->handle, 15 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCurrentCACertHandle() {
    return secureblackbox_certificatevalidator_get($this->handle, 16 );
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getCurrentCACertHashAlgorithm() {
    return secureblackbox_certificatevalidator_get($this->handle, 17 );
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getCurrentCACertIssuer() {
    return secureblackbox_certificatevalidator_get($this->handle, 18 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getCurrentCACertIssuerRDN() {
    return secureblackbox_certificatevalidator_get($this->handle, 19 );
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getCurrentCACertKeyAlgorithm() {
    return secureblackbox_certificatevalidator_get($this->handle, 20 );
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getCurrentCACertKeyBits() {
    return secureblackbox_certificatevalidator_get($this->handle, 21 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getCurrentCACertKeyFingerprint() {
    return secureblackbox_certificatevalidator_get($this->handle, 22 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getCurrentCACertKeyUsage() {
    return secureblackbox_certificatevalidator_get($this->handle, 23 );
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getCurrentCACertKeyValid() {
    return secureblackbox_certificatevalidator_get($this->handle, 24 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getCurrentCACertOCSPLocations() {
    return secureblackbox_certificatevalidator_get($this->handle, 25 );
  }


 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getCurrentCACertOrigin() {
    return secureblackbox_certificatevalidator_get($this->handle, 26 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getCurrentCACertPolicyIDs() {
    return secureblackbox_certificatevalidator_get($this->handle, 27 );
  }


 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getCurrentCACertPrivateKeyBytes() {
    return secureblackbox_certificatevalidator_get($this->handle, 28 );
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getCurrentCACertPrivateKeyExists() {
    return secureblackbox_certificatevalidator_get($this->handle, 29 );
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getCurrentCACertPrivateKeyExtractable() {
    return secureblackbox_certificatevalidator_get($this->handle, 30 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getCurrentCACertPublicKeyBytes() {
    return secureblackbox_certificatevalidator_get($this->handle, 31 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getCurrentCACertSelfSigned() {
    return secureblackbox_certificatevalidator_get($this->handle, 32 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getCurrentCACertSerialNumber() {
    return secureblackbox_certificatevalidator_get($this->handle, 33 );
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getCurrentCACertSigAlgorithm() {
    return secureblackbox_certificatevalidator_get($this->handle, 34 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getCurrentCACertSubject() {
    return secureblackbox_certificatevalidator_get($this->handle, 35 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getCurrentCACertSubjectKeyID() {
    return secureblackbox_certificatevalidator_get($this->handle, 36 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getCurrentCACertSubjectRDN() {
    return secureblackbox_certificatevalidator_get($this->handle, 37 );
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getCurrentCACertValidFrom() {
    return secureblackbox_certificatevalidator_get($this->handle, 38 );
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getCurrentCACertValidTo() {
    return secureblackbox_certificatevalidator_get($this->handle, 39 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCurrentCertBytes() {
    return secureblackbox_certificatevalidator_get($this->handle, 40 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getCurrentCertCA() {
    return secureblackbox_certificatevalidator_get($this->handle, 41 );
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getCurrentCertCAKeyID() {
    return secureblackbox_certificatevalidator_get($this->handle, 42 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getCurrentCertCRLDistributionPoints() {
    return secureblackbox_certificatevalidator_get($this->handle, 43 );
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getCurrentCertCurve() {
    return secureblackbox_certificatevalidator_get($this->handle, 44 );
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getCurrentCertFingerprint() {
    return secureblackbox_certificatevalidator_get($this->handle, 45 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getCurrentCertFriendlyName() {
    return secureblackbox_certificatevalidator_get($this->handle, 46 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCurrentCertHandle() {
    return secureblackbox_certificatevalidator_get($this->handle, 47 );
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getCurrentCertHashAlgorithm() {
    return secureblackbox_certificatevalidator_get($this->handle, 48 );
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getCurrentCertIssuer() {
    return secureblackbox_certificatevalidator_get($this->handle, 49 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getCurrentCertIssuerRDN() {
    return secureblackbox_certificatevalidator_get($this->handle, 50 );
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getCurrentCertKeyAlgorithm() {
    return secureblackbox_certificatevalidator_get($this->handle, 51 );
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getCurrentCertKeyBits() {
    return secureblackbox_certificatevalidator_get($this->handle, 52 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getCurrentCertKeyFingerprint() {
    return secureblackbox_certificatevalidator_get($this->handle, 53 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getCurrentCertKeyUsage() {
    return secureblackbox_certificatevalidator_get($this->handle, 54 );
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getCurrentCertKeyValid() {
    return secureblackbox_certificatevalidator_get($this->handle, 55 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getCurrentCertOCSPLocations() {
    return secureblackbox_certificatevalidator_get($this->handle, 56 );
  }


 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getCurrentCertOrigin() {
    return secureblackbox_certificatevalidator_get($this->handle, 57 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getCurrentCertPolicyIDs() {
    return secureblackbox_certificatevalidator_get($this->handle, 58 );
  }


 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getCurrentCertPrivateKeyBytes() {
    return secureblackbox_certificatevalidator_get($this->handle, 59 );
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getCurrentCertPrivateKeyExists() {
    return secureblackbox_certificatevalidator_get($this->handle, 60 );
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getCurrentCertPrivateKeyExtractable() {
    return secureblackbox_certificatevalidator_get($this->handle, 61 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getCurrentCertPublicKeyBytes() {
    return secureblackbox_certificatevalidator_get($this->handle, 62 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getCurrentCertSelfSigned() {
    return secureblackbox_certificatevalidator_get($this->handle, 63 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getCurrentCertSerialNumber() {
    return secureblackbox_certificatevalidator_get($this->handle, 64 );
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getCurrentCertSigAlgorithm() {
    return secureblackbox_certificatevalidator_get($this->handle, 65 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getCurrentCertSubject() {
    return secureblackbox_certificatevalidator_get($this->handle, 66 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getCurrentCertSubjectKeyID() {
    return secureblackbox_certificatevalidator_get($this->handle, 67 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getCurrentCertSubjectRDN() {
    return secureblackbox_certificatevalidator_get($this->handle, 68 );
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getCurrentCertValidFrom() {
    return secureblackbox_certificatevalidator_get($this->handle, 69 );
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getCurrentCertValidTo() {
    return secureblackbox_certificatevalidator_get($this->handle, 70 );
  }


 /**
  * Specifies a grace period to apply during certificate validation.
  *
  * @access   public
  */
  public function getGracePeriod() {
    return secureblackbox_certificatevalidator_get($this->handle, 71 );
  }
 /**
  * Specifies a grace period to apply during certificate validation.
  *
  * @access   public
  * @param    int   value
  */
  public function setGracePeriod($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the validation details of the moment.
  *
  * @access   public
  */
  public function getInterimValidationDetails() {
    return secureblackbox_certificatevalidator_get($this->handle, 72 );
  }
 /**
  * Contains the validation details of the moment.
  *
  * @access   public
  * @param    int   value
  */
  public function setInterimValidationDetails($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the validation status of the moment.
  *
  * @access   public
  */
  public function getInterimValidationResult() {
    return secureblackbox_certificatevalidator_get($this->handle, 73 );
  }
 /**
  * Contains the validation status of the moment.
  *
  * @access   public
  * @param    int   value
  */
  public function setInterimValidationResult($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  */
  public function getKnownCertCount() {
    return secureblackbox_certificatevalidator_get($this->handle, 74 );
  }
 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCertCount($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKnownCertBytes($knowncertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 75 , $knowncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCertHandle($knowncertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 76 , $knowncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCertHandle($knowncertindex, $value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 76, $value , $knowncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  */
  public function getKnownCRLCount() {
    return secureblackbox_certificatevalidator_get($this->handle, 77 );
  }
 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCRLCount($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 77, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getKnownCRLBytes($knowncrlindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 78 , $knowncrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCRLHandle($knowncrlindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 79 , $knowncrlindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCRLHandle($knowncrlindex, $value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 79, $value , $knowncrlindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  */
  public function getKnownOCSPCount() {
    return secureblackbox_certificatevalidator_get($this->handle, 80 );
  }
 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownOCSPCount($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 80, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getKnownOCSPBytes($knownocspindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 81 , $knownocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownOCSPHandle($knownocspindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 82 , $knownocspindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownOCSPHandle($knownocspindex, $value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 82, $value , $knownocspindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the maximum time the validation process may take.
  *
  * @access   public
  */
  public function getMaxValidationTime() {
    return secureblackbox_certificatevalidator_get($this->handle, 83 );
  }
 /**
  * Specifies the maximum time the validation process may take.
  *
  * @access   public
  * @param    int   value
  */
  public function setMaxValidationTime($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 83, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  */
  public function getOfflineMode() {
    return secureblackbox_certificatevalidator_get($this->handle, 84 );
  }
 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setOfflineMode($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 84, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_certificatevalidator_get($this->handle, 85 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 85, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_certificatevalidator_get($this->handle, 86 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 86, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_certificatevalidator_get($this->handle, 87 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 87, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_certificatevalidator_get($this->handle, 88 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 88, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_certificatevalidator_get($this->handle, 89 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 89, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_certificatevalidator_get($this->handle, 90 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 90, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_certificatevalidator_get($this->handle, 91 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 91, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_certificatevalidator_get($this->handle, 92 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 92, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_certificatevalidator_get($this->handle, 93 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 93, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_certificatevalidator_get($this->handle, 94 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 94, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_certificatevalidator_get($this->handle, 95 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 95, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates a qualified electronic certificate.
  *
  * @access   public
  */
  public function getQualified() {
    return secureblackbox_certificatevalidator_get($this->handle, 96 );
  }


 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getRevocationCheck() {
    return secureblackbox_certificatevalidator_get($this->handle, 97 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setRevocationCheck($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 97, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_certificatevalidator_get($this->handle, 98 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 98, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_certificatevalidator_get($this->handle, 99 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 99, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_certificatevalidator_get($this->handle, 100 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 100, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_certificatevalidator_get($this->handle, 101 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 101, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_certificatevalidator_get($this->handle, 102 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 102, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_certificatevalidator_get($this->handle, 103 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 103, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_certificatevalidator_get($this->handle, 104 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 104, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_certificatevalidator_get($this->handle, 105 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 105, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_certificatevalidator_get($this->handle, 106 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 106, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_certificatevalidator_get($this->handle, 107 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 107, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_certificatevalidator_get($this->handle, 108 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 108, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_certificatevalidator_get($this->handle, 109 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 109, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_certificatevalidator_get($this->handle, 110 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 110, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_certificatevalidator_get($this->handle, 111 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 111, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_certificatevalidator_get($this->handle, 112 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 112, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_certificatevalidator_get($this->handle, 113 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 113, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_certificatevalidator_get($this->handle, 114 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 114, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_certificatevalidator_get($this->handle, 115 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 115, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_certificatevalidator_get($this->handle, 116 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 116, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_certificatevalidator_get($this->handle, 117 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 117, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_certificatevalidator_get($this->handle, 118 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 118, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_certificatevalidator_get($this->handle, 119 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 119, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_certificatevalidator_get($this->handle, 120 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 120, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_certificatevalidator_get($this->handle, 121 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 121, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_certificatevalidator_get($this->handle, 122 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 122, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_certificatevalidator_get($this->handle, 123 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 123, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  */
  public function getTrustedCertCount() {
    return secureblackbox_certificatevalidator_get($this->handle, 124 );
  }
 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setTrustedCertCount($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 124, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTrustedCertBytes($trustedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 125 , $trustedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTrustedCertHandle($trustedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 126 , $trustedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setTrustedCertHandle($trustedcertindex, $value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 126, $value , $trustedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the UsedCert arrays.
  *
  * @access   public
  */
  public function getUsedCertCount() {
    return secureblackbox_certificatevalidator_get($this->handle, 127 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getUsedCertBytes($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 128 , $usedcertindex);
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getUsedCertCA($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 129 , $usedcertindex);
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getUsedCertCAKeyID($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 130 , $usedcertindex);
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getUsedCertCRLDistributionPoints($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 131 , $usedcertindex);
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getUsedCertCurve($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 132 , $usedcertindex);
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getUsedCertFingerprint($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 133 , $usedcertindex);
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getUsedCertFriendlyName($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 134 , $usedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getUsedCertHandle($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 135 , $usedcertindex);
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getUsedCertHashAlgorithm($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 136 , $usedcertindex);
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getUsedCertIssuer($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 137 , $usedcertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getUsedCertIssuerRDN($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 138 , $usedcertindex);
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getUsedCertKeyAlgorithm($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 139 , $usedcertindex);
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getUsedCertKeyBits($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 140 , $usedcertindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getUsedCertKeyFingerprint($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 141 , $usedcertindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getUsedCertKeyUsage($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 142 , $usedcertindex);
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getUsedCertKeyValid($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 143 , $usedcertindex);
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getUsedCertOCSPLocations($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 144 , $usedcertindex);
  }


 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getUsedCertOrigin($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 145 , $usedcertindex);
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getUsedCertPolicyIDs($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 146 , $usedcertindex);
  }


 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getUsedCertPrivateKeyBytes($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 147 , $usedcertindex);
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getUsedCertPrivateKeyExists($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 148 , $usedcertindex);
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getUsedCertPrivateKeyExtractable($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 149 , $usedcertindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getUsedCertPublicKeyBytes($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 150 , $usedcertindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getUsedCertSelfSigned($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 151 , $usedcertindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getUsedCertSerialNumber($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 152 , $usedcertindex);
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getUsedCertSigAlgorithm($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 153 , $usedcertindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getUsedCertSubject($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 154 , $usedcertindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getUsedCertSubjectKeyID($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 155 , $usedcertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getUsedCertSubjectRDN($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 156 , $usedcertindex);
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getUsedCertValidFrom($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 157 , $usedcertindex);
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getUsedCertValidTo($usedcertindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 158 , $usedcertindex);
  }


 /**
  * The number of records in the UsedCRL arrays.
  *
  * @access   public
  */
  public function getUsedCRLCount() {
    return secureblackbox_certificatevalidator_get($this->handle, 159 );
  }


 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getUsedCRLBytes($usedcrlindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 160 , $usedcrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getUsedCRLHandle($usedcrlindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 161 , $usedcrlindex);
  }


 /**
  * The common name of the CRL issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getUsedCRLIssuer($usedcrlindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 162 , $usedcrlindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the CRL issuer.
  *
  * @access   public
  */
  public function getUsedCRLIssuerRDN($usedcrlindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 163 , $usedcrlindex);
  }


 /**
  * The URL that the CRL was downloaded from.
  *
  * @access   public
  */
  public function getUsedCRLLocation($usedcrlindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 164 , $usedcrlindex);
  }


 /**
  * The planned time and date of the next version of this CRL to be published.
  *
  * @access   public
  */
  public function getUsedCRLNextUpdate($usedcrlindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 165 , $usedcrlindex);
  }


 /**
  * The date and time at which this version of the CRL was published.
  *
  * @access   public
  */
  public function getUsedCRLThisUpdate($usedcrlindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 166 , $usedcrlindex);
  }


 /**
  * Enables or disables the use of the default TSLs.
  *
  * @access   public
  */
  public function getUseDefaultTSLs() {
    return secureblackbox_certificatevalidator_get($this->handle, 167 );
  }
 /**
  * Enables or disables the use of the default TSLs.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setUseDefaultTSLs($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 167, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the UsedOCSP arrays.
  *
  * @access   public
  */
  public function getUsedOCSPCount() {
    return secureblackbox_certificatevalidator_get($this->handle, 168 );
  }


 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getUsedOCSPBytes($usedocspindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 169 , $usedocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getUsedOCSPHandle($usedocspindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 170 , $usedocspindex);
  }


 /**
  * Indicates the issuer of this response (a CA or its authorized representative).
  *
  * @access   public
  */
  public function getUsedOCSPIssuer($usedocspindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 171 , $usedocspindex);
  }


 /**
  * Indicates the RDN of the issuer of this response (a CA or its authorized representative).
  *
  * @access   public
  */
  public function getUsedOCSPIssuerRDN($usedocspindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 172 , $usedocspindex);
  }


 /**
  * Location of the OCSP responder.
  *
  * @access   public
  */
  public function getUsedOCSPLocation($usedocspindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 173 , $usedocspindex);
  }


 /**
  * Specifies the time when the response was produced, in UTC.
  *
  * @access   public
  */
  public function getUsedOCSPProducedAt($usedocspindex) {
    return secureblackbox_certificatevalidator_get($this->handle, 174 , $usedocspindex);
  }


 /**
  * Enables or disables the use of the system certificates.
  *
  * @access   public
  */
  public function getUseSystemCertificates() {
    return secureblackbox_certificatevalidator_get($this->handle, 175 );
  }
 /**
  * Enables or disables the use of the system certificates.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setUseSystemCertificates($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 175, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the complete log of the certificate validation routine.
  *
  * @access   public
  */
  public function getValidationLog() {
    return secureblackbox_certificatevalidator_get($this->handle, 176 );
  }


 /**
  * The time point at which chain validity is to be established.
  *
  * @access   public
  */
  public function getValidationMoment() {
    return secureblackbox_certificatevalidator_get($this->handle, 177 );
  }
 /**
  * The time point at which chain validity is to be established.
  *
  * @access   public
  * @param    string   value
  */
  public function setValidationMoment($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 177, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_certificatevalidator_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_certificatevalidator_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatevalidator_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Marks the end of a single certificate processing step.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, validity, validationdetails    
  */
  public function fireAfterCertificateProcessing($param) {
    return $param;
  }

 /**
  * Marks the end of a single certificate validation step.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, cacert, validity, validationdetails    
  */
  public function fireAfterCertificateValidation($param) {
    return $param;
  }

 /**
  * Fires when a CA certificate is about to be downloaded.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, location    
  */
  public function fireBeforeCACertificateDownload($param) {
    return $param;
  }

 /**
  * Reports the start of certificate processing.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, validity, validationdetails    
  */
  public function fireBeforeCertificateProcessing($param) {
    return $param;
  }

 /**
  * Reports the start of certificate validation.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, cacert    
  */
  public function fireBeforeCertificateValidation($param) {
    return $param;
  }

 /**
  * Fires when a CRL is about to be downloaded.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, cacert, location    
  */
  public function fireBeforeCRLDownload($param) {
    return $param;
  }

 /**
  * Fires when a certificate's OCSP status is about to be requested.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, cacert, location    
  */
  public function fireBeforeOCSPDownload($param) {
    return $param;
  }

 /**
  * Marks the success of a certificate download.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, location    
  */
  public function fireCACertificateDownloaded($param) {
    return $param;
  }

 /**
  * Requests a missing certificate from the user.
  *
  * @access   public
  * @param    array   Array of event parameters: cert    
  */
  public function fireCACertificateNeeded($param) {
    return $param;
  }

 /**
  * Marks the success of a CRL download.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, cacert, location    
  */
  public function fireCRLDownloaded($param) {
    return $param;
  }

 /**
  * Requests a missing CRL from the user.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, cacert    
  */
  public function fireCRLNeeded($param) {
    return $param;
  }

 /**
  * Information about errors during certificate validation.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }

 /**
  * Marks the success of an OCSP request.
  *
  * @access   public
  * @param    array   Array of event parameters: cert, cacert, location    
  */
  public function fireOCSPDownloaded($param) {
    return $param;
  }


}

?>
