<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - OfficeVerifier Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_OfficeVerifier {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_officeverifier_open(SECUREBLACKBOX_OEMKEY_812);
    secureblackbox_officeverifier_register_callback($this->handle, 1, array($this, 'fireChainValidated'));
    secureblackbox_officeverifier_register_callback($this->handle, 2, array($this, 'fireError'));
    secureblackbox_officeverifier_register_callback($this->handle, 3, array($this, 'fireRetrieveCertificate'));
    secureblackbox_officeverifier_register_callback($this->handle, 4, array($this, 'fireRetrieveCRL'));
    secureblackbox_officeverifier_register_callback($this->handle, 5, array($this, 'fireRetrieveOCSPResponse'));
    secureblackbox_officeverifier_register_callback($this->handle, 6, array($this, 'fireSignatureFound'));
    secureblackbox_officeverifier_register_callback($this->handle, 7, array($this, 'fireSignatureValidated'));
    secureblackbox_officeverifier_register_callback($this->handle, 8, array($this, 'fireStoreCertificate'));
    secureblackbox_officeverifier_register_callback($this->handle, 9, array($this, 'fireStoreCRL'));
    secureblackbox_officeverifier_register_callback($this->handle, 10, array($this, 'fireStoreOCSPResponse'));
    secureblackbox_officeverifier_register_callback($this->handle, 11, array($this, 'fireTimestampFound'));
    secureblackbox_officeverifier_register_callback($this->handle, 12, array($this, 'fireTimestampValidated'));
  }
  
  public function __destruct() {
    secureblackbox_officeverifier_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_officeverifier_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_officeverifier_get_last_error_code($this->handle);
  }

 /**
  * Use this method to add an timestamp.
  *
  * @access   public
  * @param    int    timestamptype
  * @param    string    timestampserver
  */
  public function doAddTimestamp($timestamptype, $timestampserver) {
    $ret = secureblackbox_officeverifier_do_addtimestamp($this->handle, $timestamptype, $timestampserver);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this method to add timestamp validation data to the signature.
  *
  * @access   public
  */
  public function doAddTimestampValidationData() {
    $ret = secureblackbox_officeverifier_do_addtimestampvalidationdata($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this method to add signature validation references to the signature.
  *
  * @access   public
  */
  public function doAddValidationDataRefs() {
    $ret = secureblackbox_officeverifier_do_addvalidationdatarefs($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this method to add signature validation values to the signature.
  *
  * @access   public
  */
  public function doAddValidationDataValues() {
    $ret = secureblackbox_officeverifier_do_addvalidationdatavalues($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
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
    $ret = secureblackbox_officeverifier_do_config($this->handle, $configurationstring);
		$err = secureblackbox_officeverifier_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Verifies the whole document.
  *
  * @access   public
  */
  public function doVerify() {
    $ret = secureblackbox_officeverifier_do_verify($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_officeverifier_get($this->handle, 0);
  }
 /**
  * The cumulative validity of all signatures.
  *
  * @access   public
  */
  public function getAllSignaturesValid() {
    return secureblackbox_officeverifier_get($this->handle, 1 );
  }


 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  */
  public function getBlockedCertCount() {
    return secureblackbox_officeverifier_get($this->handle, 2 );
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setBlockedCertCount($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getBlockedCertBytes($blockedcertindex) {
    return secureblackbox_officeverifier_get($this->handle, 3 , $blockedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getBlockedCertHandle($blockedcertindex) {
    return secureblackbox_officeverifier_get($this->handle, 4 , $blockedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setBlockedCertHandle($blockedcertindex, $value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 4, $value , $blockedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Cert arrays.
  *
  * @access   public
  */
  public function getCertCount() {
    return secureblackbox_officeverifier_get($this->handle, 5 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCertBytes($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 6 , $certindex);
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getCertCA($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 7 , $certindex);
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getCertCAKeyID($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 8 , $certindex);
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getCertCRLDistributionPoints($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 9 , $certindex);
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getCertCurve($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 10 , $certindex);
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getCertFingerprint($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 11 , $certindex);
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getCertFriendlyName($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 12 , $certindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCertHandle($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 13 , $certindex);
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getCertHashAlgorithm($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 14 , $certindex);
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getCertIssuer($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 15 , $certindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getCertIssuerRDN($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 16 , $certindex);
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getCertKeyAlgorithm($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 17 , $certindex);
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getCertKeyBits($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 18 , $certindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getCertKeyFingerprint($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 19 , $certindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getCertKeyUsage($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 20 , $certindex);
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getCertKeyValid($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 21 , $certindex);
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getCertOCSPLocations($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 22 , $certindex);
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getCertPolicyIDs($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 23 , $certindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getCertPublicKeyBytes($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 24 , $certindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getCertSelfSigned($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 25 , $certindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getCertSerialNumber($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 26 , $certindex);
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getCertSigAlgorithm($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 27 , $certindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getCertSubject($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 28 , $certindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getCertSubjectKeyID($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 29 , $certindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getCertSubjectRDN($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 30 , $certindex);
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getCertValidFrom($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 31 , $certindex);
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getCertValidTo($certindex) {
    return secureblackbox_officeverifier_get($this->handle, 32 , $certindex);
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getChainValidationDetails() {
    return secureblackbox_officeverifier_get($this->handle, 33 );
  }


 /**
  * The general outcome of a certificate chain validation routine. Use ChainValidationDetails to get information about the reasons that contributed to the validation result.
  *
  * @access   public
  */
  public function getChainValidationResult() {
    return secureblackbox_officeverifier_get($this->handle, 34 );
  }


 /**
  * Returns a signature's claimed signing time.
  *
  * @access   public
  */
  public function getClaimedSigningTime() {
    return secureblackbox_officeverifier_get($this->handle, 35 );
  }


 /**
  * The number of records in the CRL arrays.
  *
  * @access   public
  */
  public function getCRLCount() {
    return secureblackbox_officeverifier_get($this->handle, 36 );
  }


 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getCRLBytes($crlindex) {
    return secureblackbox_officeverifier_get($this->handle, 37 , $crlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCRLHandle($crlindex) {
    return secureblackbox_officeverifier_get($this->handle, 38 , $crlindex);
  }


 /**
  * The common name of the CRL issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getCRLIssuer($crlindex) {
    return secureblackbox_officeverifier_get($this->handle, 39 , $crlindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the CRL issuer.
  *
  * @access   public
  */
  public function getCRLIssuerRDN($crlindex) {
    return secureblackbox_officeverifier_get($this->handle, 40 , $crlindex);
  }


 /**
  * The URL that the CRL was downloaded from.
  *
  * @access   public
  */
  public function getCRLLocation($crlindex) {
    return secureblackbox_officeverifier_get($this->handle, 41 , $crlindex);
  }


 /**
  * The planned time and date of the next version of this CRL to be published.
  *
  * @access   public
  */
  public function getCRLNextUpdate($crlindex) {
    return secureblackbox_officeverifier_get($this->handle, 42 , $crlindex);
  }


 /**
  * The date and time at which this version of the CRL was published.
  *
  * @access   public
  */
  public function getCRLThisUpdate($crlindex) {
    return secureblackbox_officeverifier_get($this->handle, 43 , $crlindex);
  }


 /**
  * Defines the format of the Office document.
  *
  * @access   public
  */
  public function getDocumentFormat() {
    return secureblackbox_officeverifier_get($this->handle, 44 );
  }


 /**
  * Makes the class tolerant to chain validation errors.
  *
  * @access   public
  */
  public function getIgnoreChainValidationErrors() {
    return secureblackbox_officeverifier_get($this->handle, 45 );
  }
 /**
  * Makes the class tolerant to chain validation errors.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setIgnoreChainValidationErrors($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 45, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The path to the signed office document.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_officeverifier_get($this->handle, 46 );
  }
 /**
  * The path to the signed office document.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  */
  public function getKnownCertCount() {
    return secureblackbox_officeverifier_get($this->handle, 47 );
  }
 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCertCount($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKnownCertBytes($knowncertindex) {
    return secureblackbox_officeverifier_get($this->handle, 48 , $knowncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCertHandle($knowncertindex) {
    return secureblackbox_officeverifier_get($this->handle, 49 , $knowncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCertHandle($knowncertindex, $value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 49, $value , $knowncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  */
  public function getKnownCRLCount() {
    return secureblackbox_officeverifier_get($this->handle, 50 );
  }
 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCRLCount($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getKnownCRLBytes($knowncrlindex) {
    return secureblackbox_officeverifier_get($this->handle, 51 , $knowncrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCRLHandle($knowncrlindex) {
    return secureblackbox_officeverifier_get($this->handle, 52 , $knowncrlindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCRLHandle($knowncrlindex, $value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 52, $value , $knowncrlindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  */
  public function getKnownOCSPCount() {
    return secureblackbox_officeverifier_get($this->handle, 53 );
  }
 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownOCSPCount($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getKnownOCSPBytes($knownocspindex) {
    return secureblackbox_officeverifier_get($this->handle, 54 , $knownocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownOCSPHandle($knownocspindex) {
    return secureblackbox_officeverifier_get($this->handle, 55 , $knownocspindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownOCSPHandle($knownocspindex, $value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 55, $value , $knownocspindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the most recent archival time of an archived signature.
  *
  * @access   public
  */
  public function getLastArchivalTime() {
    return secureblackbox_officeverifier_get($this->handle, 56 );
  }


 /**
  * The number of records in the OCSP arrays.
  *
  * @access   public
  */
  public function getOCSPCount() {
    return secureblackbox_officeverifier_get($this->handle, 57 );
  }


 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getOCSPBytes($ocspindex) {
    return secureblackbox_officeverifier_get($this->handle, 58 , $ocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getOCSPHandle($ocspindex) {
    return secureblackbox_officeverifier_get($this->handle, 59 , $ocspindex);
  }


 /**
  * Indicates the issuer of this response (a CA or its authorized representative).
  *
  * @access   public
  */
  public function getOCSPIssuer($ocspindex) {
    return secureblackbox_officeverifier_get($this->handle, 60 , $ocspindex);
  }


 /**
  * Indicates the RDN of the issuer of this response (a CA or its authorized representative).
  *
  * @access   public
  */
  public function getOCSPIssuerRDN($ocspindex) {
    return secureblackbox_officeverifier_get($this->handle, 61 , $ocspindex);
  }


 /**
  * Location of the OCSP responder.
  *
  * @access   public
  */
  public function getOCSPLocation($ocspindex) {
    return secureblackbox_officeverifier_get($this->handle, 62 , $ocspindex);
  }


 /**
  * Specifies the time when the response was produced, in UTC.
  *
  * @access   public
  */
  public function getOCSPProducedAt($ocspindex) {
    return secureblackbox_officeverifier_get($this->handle, 63 , $ocspindex);
  }


 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  */
  public function getOfflineMode() {
    return secureblackbox_officeverifier_get($this->handle, 64 );
  }
 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setOfflineMode($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 64, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines where to save the modified signed document.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_officeverifier_get($this->handle, 65 );
  }
 /**
  * Defines where to save the modified signed document.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 65, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_officeverifier_get($this->handle, 66 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 66, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_officeverifier_get($this->handle, 67 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_officeverifier_get($this->handle, 68 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 68, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_officeverifier_get($this->handle, 69 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 69, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_officeverifier_get($this->handle, 70 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 70, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_officeverifier_get($this->handle, 71 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_officeverifier_get($this->handle, 72 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_officeverifier_get($this->handle, 73 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_officeverifier_get($this->handle, 74 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_officeverifier_get($this->handle, 75 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 75, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_officeverifier_get($this->handle, 76 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 76, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates a qualified electronic signature.
  *
  * @access   public
  */
  public function getQualified() {
    return secureblackbox_officeverifier_get($this->handle, 77 );
  }


 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getRevocationCheck() {
    return secureblackbox_officeverifier_get($this->handle, 78 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setRevocationCheck($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getSigChainValidationDetails() {
    return secureblackbox_officeverifier_get($this->handle, 79 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getSigChainValidationResult() {
    return secureblackbox_officeverifier_get($this->handle, 80 );
  }


 /**
  * Returns True if this signature covers the core properties of the document.
  *
  * @access   public
  */
  public function getSigCorePropertiesSigned() {
    return secureblackbox_officeverifier_get($this->handle, 81 );
  }


 /**
  * Returns True if the signature covers the document itself.
  *
  * @access   public
  */
  public function getSigDocumentSigned() {
    return secureblackbox_officeverifier_get($this->handle, 82 );
  }


 /**
  * Specifies the signature expiration time in UTC.
  *
  * @access   public
  */
  public function getSigExpireTime() {
    return secureblackbox_officeverifier_get($this->handle, 83 );
  }


 /**
  * The hash algorithm used for signing.
  *
  * @access   public
  */
  public function getSigHashAlgorithm() {
    return secureblackbox_officeverifier_get($this->handle, 84 );
  }


 /**
  * Indicates a qualified electronic signature.
  *
  * @access   public
  */
  public function getSigQualified() {
    return secureblackbox_officeverifier_get($this->handle, 85 );
  }


 /**
  * Contains the comments for the SignatureInfoText.
  *
  * @access   public
  */
  public function getSigSignatureInfoComments() {
    return secureblackbox_officeverifier_get($this->handle, 86 );
  }


 /**
  * Specifies whether the signature info is included.
  *
  * @access   public
  */
  public function getSigSignatureInfoIncluded() {
    return secureblackbox_officeverifier_get($this->handle, 87 );
  }


 /**
  * Contains the text of the signature info.
  *
  * @access   public
  */
  public function getSigSignatureInfoText() {
    return secureblackbox_officeverifier_get($this->handle, 88 );
  }


 /**
  * Returns True if the signature origin is signed.
  *
  * @access   public
  */
  public function getSigSignatureOriginSigned() {
    return secureblackbox_officeverifier_get($this->handle, 89 );
  }


 /**
  * Specifies the certified signing time.
  *
  * @access   public
  */
  public function getSigSignatureTime() {
    return secureblackbox_officeverifier_get($this->handle, 90 );
  }


 /**
  * Specifies the type of this signature.
  *
  * @access   public
  */
  public function getSigSignatureType() {
    return secureblackbox_officeverifier_get($this->handle, 91 );
  }


 /**
  * The outcome of the cryptographic signature validation.
  *
  * @access   public
  */
  public function getSigSignatureValidationResult() {
    return secureblackbox_officeverifier_get($this->handle, 92 );
  }


 /**
  * Specifies the time when the signature was generated.
  *
  * @access   public
  */
  public function getSigSignTime() {
    return secureblackbox_officeverifier_get($this->handle, 93 );
  }


 /**
  * Contains information about the person owning the signing certificate.
  *
  * @access   public
  */
  public function getSigSubjectRDN() {
    return secureblackbox_officeverifier_get($this->handle, 94 );
  }


 /**
  * Contains the signature validation log.
  *
  * @access   public
  */
  public function getSigValidationLog() {
    return secureblackbox_officeverifier_get($this->handle, 95 );
  }


 /**
  * The index of the signature to update.
  *
  * @access   public
  */
  public function getSignatureIndex() {
    return secureblackbox_officeverifier_get($this->handle, 96 );
  }
 /**
  * The index of the signature to update.
  *
  * @access   public
  * @param    int   value
  */
  public function setSignatureIndex($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 96, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Signature arrays.
  *
  * @access   public
  */
  public function getSignatureCount() {
    return secureblackbox_officeverifier_get($this->handle, 97 );
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getSignatureChainValidationDetails($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 98 , $signatureindex);
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getSignatureChainValidationResult($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 99 , $signatureindex);
  }


 /**
  * Returns True if this signature covers the core properties of the document.
  *
  * @access   public
  */
  public function getSignatureCorePropertiesSigned($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 100 , $signatureindex);
  }


 /**
  * Returns True if the signature covers the document itself.
  *
  * @access   public
  */
  public function getSignatureDocumentSigned($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 101 , $signatureindex);
  }


 /**
  * Specifies the signature expiration time in UTC.
  *
  * @access   public
  */
  public function getSignatureExpireTime($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 102 , $signatureindex);
  }


 /**
  * The hash algorithm used for signing.
  *
  * @access   public
  */
  public function getSignatureHashAlgorithm($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 103 , $signatureindex);
  }


 /**
  * Indicates a qualified electronic signature.
  *
  * @access   public
  */
  public function getSignatureQualified($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 104 , $signatureindex);
  }


 /**
  * Contains the comments for the SignatureInfoText.
  *
  * @access   public
  */
  public function getSignatureSignatureInfoComments($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 105 , $signatureindex);
  }


 /**
  * Specifies whether the signature info is included.
  *
  * @access   public
  */
  public function getSignatureSignatureInfoIncluded($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 106 , $signatureindex);
  }


 /**
  * Contains the text of the signature info.
  *
  * @access   public
  */
  public function getSignatureSignatureInfoText($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 107 , $signatureindex);
  }


 /**
  * Returns True if the signature origin is signed.
  *
  * @access   public
  */
  public function getSignatureSignatureOriginSigned($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 108 , $signatureindex);
  }


 /**
  * Specifies the certified signing time.
  *
  * @access   public
  */
  public function getSignatureSignatureTime($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 109 , $signatureindex);
  }


 /**
  * Specifies the type of this signature.
  *
  * @access   public
  */
  public function getSignatureSignatureType($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 110 , $signatureindex);
  }


 /**
  * The outcome of the cryptographic signature validation.
  *
  * @access   public
  */
  public function getSignatureSignatureValidationResult($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 111 , $signatureindex);
  }


 /**
  * Specifies the time when the signature was generated.
  *
  * @access   public
  */
  public function getSignatureSignTime($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 112 , $signatureindex);
  }


 /**
  * Contains information about the person owning the signing certificate.
  *
  * @access   public
  */
  public function getSignatureSubjectRDN($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 113 , $signatureindex);
  }


 /**
  * Contains the signature validation log.
  *
  * @access   public
  */
  public function getSignatureValidationLog($signatureindex) {
    return secureblackbox_officeverifier_get($this->handle, 114 , $signatureindex);
  }


 /**
  * The signature validation result.
  *
  * @access   public
  */
  public function getSignatureValidationResult() {
    return secureblackbox_officeverifier_get($this->handle, 115 );
  }


 /**
  * The number of records in the SignedPart arrays.
  *
  * @access   public
  */
  public function getSignedPartCount() {
    return secureblackbox_officeverifier_get($this->handle, 116 );
  }


 /**
  * Specifies the content type of this signed part.
  *
  * @access   public
  */
  public function getSignedPartContentType($signedpartindex) {
    return secureblackbox_officeverifier_get($this->handle, 117 , $signedpartindex);
  }


 /**
  * Contains the digest value computed over this signed part.
  *
  * @access   public
  */
  public function getSignedPartDigestValue($signedpartindex) {
    return secureblackbox_officeverifier_get($this->handle, 118 , $signedpartindex);
  }


 /**
  * The hash algorithm used for signing.
  *
  * @access   public
  */
  public function getSignedPartHashAlgorithm($signedpartindex) {
    return secureblackbox_officeverifier_get($this->handle, 119 , $signedpartindex);
  }


 /**
  * Specifies whether this signed part is a relationship part.
  *
  * @access   public
  */
  public function getSignedPartIsRelationshipPart($signedpartindex) {
    return secureblackbox_officeverifier_get($this->handle, 120 , $signedpartindex);
  }


 /**
  * The path to this signed part in the document package.
  *
  * @access   public
  */
  public function getSignedPartPath($signedpartindex) {
    return secureblackbox_officeverifier_get($this->handle, 121 , $signedpartindex);
  }


 /**
  * The outcome of the cryptographic signature validation.
  *
  * @access   public
  */
  public function getSignedPartSignatureValidationResult($signedpartindex) {
    return secureblackbox_officeverifier_get($this->handle, 122 , $signedpartindex);
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningCertBytes() {
    return secureblackbox_officeverifier_get($this->handle, 123 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getSigningCertCA() {
    return secureblackbox_officeverifier_get($this->handle, 124 );
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getSigningCertCAKeyID() {
    return secureblackbox_officeverifier_get($this->handle, 125 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getSigningCertCRLDistributionPoints() {
    return secureblackbox_officeverifier_get($this->handle, 126 );
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getSigningCertCurve() {
    return secureblackbox_officeverifier_get($this->handle, 127 );
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getSigningCertFingerprint() {
    return secureblackbox_officeverifier_get($this->handle, 128 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getSigningCertFriendlyName() {
    return secureblackbox_officeverifier_get($this->handle, 129 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningCertHandle() {
    return secureblackbox_officeverifier_get($this->handle, 130 );
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getSigningCertHashAlgorithm() {
    return secureblackbox_officeverifier_get($this->handle, 131 );
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getSigningCertIssuer() {
    return secureblackbox_officeverifier_get($this->handle, 132 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getSigningCertIssuerRDN() {
    return secureblackbox_officeverifier_get($this->handle, 133 );
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getSigningCertKeyAlgorithm() {
    return secureblackbox_officeverifier_get($this->handle, 134 );
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getSigningCertKeyBits() {
    return secureblackbox_officeverifier_get($this->handle, 135 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getSigningCertKeyFingerprint() {
    return secureblackbox_officeverifier_get($this->handle, 136 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getSigningCertKeyUsage() {
    return secureblackbox_officeverifier_get($this->handle, 137 );
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getSigningCertKeyValid() {
    return secureblackbox_officeverifier_get($this->handle, 138 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getSigningCertOCSPLocations() {
    return secureblackbox_officeverifier_get($this->handle, 139 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getSigningCertPolicyIDs() {
    return secureblackbox_officeverifier_get($this->handle, 140 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getSigningCertPublicKeyBytes() {
    return secureblackbox_officeverifier_get($this->handle, 141 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getSigningCertSelfSigned() {
    return secureblackbox_officeverifier_get($this->handle, 142 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getSigningCertSerialNumber() {
    return secureblackbox_officeverifier_get($this->handle, 143 );
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getSigningCertSigAlgorithm() {
    return secureblackbox_officeverifier_get($this->handle, 144 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getSigningCertSubject() {
    return secureblackbox_officeverifier_get($this->handle, 145 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getSigningCertSubjectKeyID() {
    return secureblackbox_officeverifier_get($this->handle, 146 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getSigningCertSubjectRDN() {
    return secureblackbox_officeverifier_get($this->handle, 147 );
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getSigningCertValidFrom() {
    return secureblackbox_officeverifier_get($this->handle, 148 );
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getSigningCertValidTo() {
    return secureblackbox_officeverifier_get($this->handle, 149 );
  }


 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_officeverifier_get($this->handle, 150 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 150, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_officeverifier_get($this->handle, 151 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 151, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_officeverifier_get($this->handle, 152 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 152, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_officeverifier_get($this->handle, 153 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 153, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_officeverifier_get($this->handle, 154 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 154, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_officeverifier_get($this->handle, 155 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 155, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_officeverifier_get($this->handle, 156 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 156, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_officeverifier_get($this->handle, 157 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 157, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_officeverifier_get($this->handle, 158 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 158, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_officeverifier_get($this->handle, 159 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 159, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_officeverifier_get($this->handle, 160 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 160, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * This property indicates the accuracy of the included time mark, in microseconds.
  *
  * @access   public
  */
  public function getTimestampAccuracy() {
    return secureblackbox_officeverifier_get($this->handle, 161 );
  }


 /**
  * Returns raw timestamp data in DER format.
  *
  * @access   public
  */
  public function getTimestampBytes() {
    return secureblackbox_officeverifier_get($this->handle, 162 );
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getTimestampChainValidationDetails() {
    return secureblackbox_officeverifier_get($this->handle, 163 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getTimestampChainValidationResult() {
    return secureblackbox_officeverifier_get($this->handle, 164 );
  }


 /**
  * Returns the timestamp's hash algorithm SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getTimestampHashAlgorithm() {
    return secureblackbox_officeverifier_get($this->handle, 165 );
  }


 /**
  * Returns the timestamp's serial number.
  *
  * @access   public
  */
  public function getTimestampSerialNumber() {
    return secureblackbox_officeverifier_get($this->handle, 166 );
  }


 /**
  * The time point incorporated into the timestamp.
  *
  * @access   public
  */
  public function getTimestampTime() {
    return secureblackbox_officeverifier_get($this->handle, 167 );
  }


 /**
  * Returns the timestamp type.
  *
  * @access   public
  */
  public function getTimestampTimestampType() {
    return secureblackbox_officeverifier_get($this->handle, 168 );
  }


 /**
  * This value uniquely identifies the Timestamp Authority (TSA).
  *
  * @access   public
  */
  public function getTimestampTSAName() {
    return secureblackbox_officeverifier_get($this->handle, 169 );
  }


 /**
  * Contains the TSA certificate chain validation log.
  *
  * @access   public
  */
  public function getTimestampValidationLog() {
    return secureblackbox_officeverifier_get($this->handle, 170 );
  }


 /**
  * Contains timestamp validation outcome.
  *
  * @access   public
  */
  public function getTimestampValidationResult() {
    return secureblackbox_officeverifier_get($this->handle, 171 );
  }


 /**
  * Indicates whether or not the signature is timestamped.
  *
  * @access   public
  */
  public function getTimestamped() {
    return secureblackbox_officeverifier_get($this->handle, 172 );
  }


 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_officeverifier_get($this->handle, 173 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 173, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_officeverifier_get($this->handle, 174 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 174, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_officeverifier_get($this->handle, 175 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 175, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_officeverifier_get($this->handle, 176 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 176, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_officeverifier_get($this->handle, 177 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 177, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_officeverifier_get($this->handle, 178 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 178, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_officeverifier_get($this->handle, 179 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 179, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_officeverifier_get($this->handle, 180 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 180, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_officeverifier_get($this->handle, 181 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 181, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_officeverifier_get($this->handle, 182 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 182, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_officeverifier_get($this->handle, 183 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 183, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_officeverifier_get($this->handle, 184 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 184, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_officeverifier_get($this->handle, 185 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 185, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_officeverifier_get($this->handle, 186 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 186, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_officeverifier_get($this->handle, 187 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 187, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  */
  public function getTrustedCertCount() {
    return secureblackbox_officeverifier_get($this->handle, 188 );
  }
 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setTrustedCertCount($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 188, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTrustedCertBytes($trustedcertindex) {
    return secureblackbox_officeverifier_get($this->handle, 189 , $trustedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTrustedCertHandle($trustedcertindex) {
    return secureblackbox_officeverifier_get($this->handle, 190 , $trustedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setTrustedCertHandle($trustedcertindex, $value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 190, $value , $trustedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTSACertBytes() {
    return secureblackbox_officeverifier_get($this->handle, 191 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getTSACertCA() {
    return secureblackbox_officeverifier_get($this->handle, 192 );
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getTSACertCAKeyID() {
    return secureblackbox_officeverifier_get($this->handle, 193 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getTSACertCRLDistributionPoints() {
    return secureblackbox_officeverifier_get($this->handle, 194 );
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getTSACertCurve() {
    return secureblackbox_officeverifier_get($this->handle, 195 );
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getTSACertFingerprint() {
    return secureblackbox_officeverifier_get($this->handle, 196 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getTSACertFriendlyName() {
    return secureblackbox_officeverifier_get($this->handle, 197 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTSACertHandle() {
    return secureblackbox_officeverifier_get($this->handle, 198 );
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getTSACertHashAlgorithm() {
    return secureblackbox_officeverifier_get($this->handle, 199 );
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getTSACertIssuer() {
    return secureblackbox_officeverifier_get($this->handle, 200 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getTSACertIssuerRDN() {
    return secureblackbox_officeverifier_get($this->handle, 201 );
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getTSACertKeyAlgorithm() {
    return secureblackbox_officeverifier_get($this->handle, 202 );
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getTSACertKeyBits() {
    return secureblackbox_officeverifier_get($this->handle, 203 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getTSACertKeyFingerprint() {
    return secureblackbox_officeverifier_get($this->handle, 204 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getTSACertKeyUsage() {
    return secureblackbox_officeverifier_get($this->handle, 205 );
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getTSACertKeyValid() {
    return secureblackbox_officeverifier_get($this->handle, 206 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getTSACertOCSPLocations() {
    return secureblackbox_officeverifier_get($this->handle, 207 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getTSACertPolicyIDs() {
    return secureblackbox_officeverifier_get($this->handle, 208 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getTSACertPublicKeyBytes() {
    return secureblackbox_officeverifier_get($this->handle, 209 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getTSACertSelfSigned() {
    return secureblackbox_officeverifier_get($this->handle, 210 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getTSACertSerialNumber() {
    return secureblackbox_officeverifier_get($this->handle, 211 );
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getTSACertSigAlgorithm() {
    return secureblackbox_officeverifier_get($this->handle, 212 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getTSACertSubject() {
    return secureblackbox_officeverifier_get($this->handle, 213 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getTSACertSubjectKeyID() {
    return secureblackbox_officeverifier_get($this->handle, 214 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getTSACertSubjectRDN() {
    return secureblackbox_officeverifier_get($this->handle, 215 );
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getTSACertValidFrom() {
    return secureblackbox_officeverifier_get($this->handle, 216 );
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getTSACertValidTo() {
    return secureblackbox_officeverifier_get($this->handle, 217 );
  }


 /**
  * Contains the certified signing time.
  *
  * @access   public
  */
  public function getValidatedSigningTime() {
    return secureblackbox_officeverifier_get($this->handle, 218 );
  }


 /**
  * Contains the complete log of the certificate validation routine.
  *
  * @access   public
  */
  public function getValidationLog() {
    return secureblackbox_officeverifier_get($this->handle, 219 );
  }


 /**
  * Specifies the validation moment.
  *
  * @access   public
  */
  public function getValidationMoment() {
    return secureblackbox_officeverifier_get($this->handle, 220 );
  }
 /**
  * Specifies the validation moment.
  *
  * @access   public
  * @param    string   value
  */
  public function setValidationMoment($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 220, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the document contains an advanced signature (XAdES).
  *
  * @access   public
  */
  public function getXAdESEnabled() {
    return secureblackbox_officeverifier_get($this->handle, 221 );
  }


 /**
  * Specifies which form of XAdES has been used.
  *
  * @access   public
  */
  public function getXAdESForm() {
    return secureblackbox_officeverifier_get($this->handle, 222 );
  }


 /**
  * Specifies XAdES version.
  *
  * @access   public
  */
  public function getXAdESVersion() {
    return secureblackbox_officeverifier_get($this->handle, 223 );
  }
 /**
  * Specifies XAdES version.
  *
  * @access   public
  * @param    int   value
  */
  public function setXAdESVersion($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 223, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_officeverifier_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_officeverifier_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_officeverifier_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Reports the completion of a certificate chain validation.
  *
  * @access   public
  * @param    array   Array of event parameters: subjectrdn, validationresult, validationdetails    
  */
  public function fireChainValidated($param) {
    return $param;
  }

 /**
  * Information about errors during the signature validation.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }

 /**
  * This event is fired when a certificate should be retrieved.
  *
  * @access   public
  * @param    array   Array of event parameters: uri    
  */
  public function fireRetrieveCertificate($param) {
    return $param;
  }

 /**
  * This event is fired when a CRL should be retrieved.
  *
  * @access   public
  * @param    array   Array of event parameters: uri    
  */
  public function fireRetrieveCRL($param) {
    return $param;
  }

 /**
  * This event is fired when a OCSP Response should be retrieved.
  *
  * @access   public
  * @param    array   Array of event parameters: uri    
  */
  public function fireRetrieveOCSPResponse($param) {
    return $param;
  }

 /**
  * Signifies the start of signature validation.
  *
  * @access   public
  * @param    array   Array of event parameters: issuerrdn, serialnumber, subjectkeyid, certfound, validatesignature, validatechain    
  */
  public function fireSignatureFound($param) {
    return $param;
  }

 /**
  * Marks the completion of the signature validation routine.
  *
  * @access   public
  * @param    array   Array of event parameters: issuerrdn, serialnumber, subjectkeyid, validationresult    
  */
  public function fireSignatureValidated($param) {
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

 /**
  * Signifies the start of a timestamp validation routine.
  *
  * @access   public
  * @param    array   Array of event parameters: issuerrdn, serialnumber, subjectkeyid, certfound, validatetimestamp, validatechain    
  */
  public function fireTimestampFound($param) {
    return $param;
  }

 /**
  * Reports the completion of the timestamp validation routine.
  *
  * @access   public
  * @param    array   Array of event parameters: issuerrdn, serialnumber, subjectkeyid, time, validationresult, chainvalidationresult, chainvalidationdetails    
  */
  public function fireTimestampValidated($param) {
    return $param;
  }


}

?>
