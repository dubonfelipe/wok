<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - PDFVerifier Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_PDFVerifier {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_pdfverifier_open(SECUREBLACKBOX_OEMKEY_792);
    secureblackbox_pdfverifier_register_callback($this->handle, 1, array($this, 'fireChainValidated'));
    secureblackbox_pdfverifier_register_callback($this->handle, 2, array($this, 'fireDecryptionInfoNeeded'));
    secureblackbox_pdfverifier_register_callback($this->handle, 3, array($this, 'fireError'));
    secureblackbox_pdfverifier_register_callback($this->handle, 4, array($this, 'fireRecipientFound'));
    secureblackbox_pdfverifier_register_callback($this->handle, 5, array($this, 'fireSignatureFound'));
    secureblackbox_pdfverifier_register_callback($this->handle, 6, array($this, 'fireSignatureValidated'));
    secureblackbox_pdfverifier_register_callback($this->handle, 7, array($this, 'fireTimestampFound'));
    secureblackbox_pdfverifier_register_callback($this->handle, 8, array($this, 'fireTimestampValidated'));
  }
  
  public function __destruct() {
    secureblackbox_pdfverifier_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_pdfverifier_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_pdfverifier_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_pdfverifier_do_config($this->handle, $configurationstring);
		$err = secureblackbox_pdfverifier_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the part of the document that is covered by the signature.
  *
  * @access   public
  * @param    int    sigindex
  * @param    string    filename
  */
  public function doGetSignedVersion($sigindex, $filename) {
    $ret = secureblackbox_pdfverifier_do_getsignedversion($this->handle, $sigindex, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Verifies a signed PDF document.
  *
  * @access   public
  */
  public function doVerify() {
    $ret = secureblackbox_pdfverifier_do_verify($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_pdfverifier_get($this->handle, 0);
  }
 /**
  * The cumulative validity of all signatures.
  *
  * @access   public
  */
  public function getAllSignaturesValid() {
    return secureblackbox_pdfverifier_get($this->handle, 1 );
  }


 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  */
  public function getBlockedCertCount() {
    return secureblackbox_pdfverifier_get($this->handle, 2 );
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setBlockedCertCount($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getBlockedCertBytes($blockedcertindex) {
    return secureblackbox_pdfverifier_get($this->handle, 3 , $blockedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getBlockedCertHandle($blockedcertindex) {
    return secureblackbox_pdfverifier_get($this->handle, 4 , $blockedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setBlockedCertHandle($blockedcertindex, $value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 4, $value , $blockedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Cert arrays.
  *
  * @access   public
  */
  public function getCertCount() {
    return secureblackbox_pdfverifier_get($this->handle, 5 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCertBytes($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 6 , $certindex);
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getCertCA($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 7 , $certindex);
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getCertCAKeyID($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 8 , $certindex);
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getCertCRLDistributionPoints($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 9 , $certindex);
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getCertCurve($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 10 , $certindex);
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getCertFingerprint($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 11 , $certindex);
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getCertFriendlyName($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 12 , $certindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCertHandle($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 13 , $certindex);
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getCertHashAlgorithm($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 14 , $certindex);
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getCertIssuer($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 15 , $certindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getCertIssuerRDN($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 16 , $certindex);
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getCertKeyAlgorithm($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 17 , $certindex);
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getCertKeyBits($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 18 , $certindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getCertKeyFingerprint($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 19 , $certindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getCertKeyUsage($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 20 , $certindex);
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getCertKeyValid($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 21 , $certindex);
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getCertOCSPLocations($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 22 , $certindex);
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getCertPolicyIDs($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 23 , $certindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getCertPublicKeyBytes($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 24 , $certindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getCertSelfSigned($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 25 , $certindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getCertSerialNumber($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 26 , $certindex);
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getCertSigAlgorithm($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 27 , $certindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getCertSubject($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 28 , $certindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getCertSubjectKeyID($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 29 , $certindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getCertSubjectRDN($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 30 , $certindex);
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getCertValidFrom($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 31 , $certindex);
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getCertValidTo($certindex) {
    return secureblackbox_pdfverifier_get($this->handle, 32 , $certindex);
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getChainValidationDetails() {
    return secureblackbox_pdfverifier_get($this->handle, 33 );
  }


 /**
  * The general outcome of a certificate chain validation routine. Use ChainValidationDetails to get information about the reasons that contributed to the validation result.
  *
  * @access   public
  */
  public function getChainValidationResult() {
    return secureblackbox_pdfverifier_get($this->handle, 34 );
  }


 /**
  * Returns a signature's claimed signing time.
  *
  * @access   public
  */
  public function getClaimedSigningTime() {
    return secureblackbox_pdfverifier_get($this->handle, 35 );
  }


 /**
  * The number of records in the CRL arrays.
  *
  * @access   public
  */
  public function getCRLCount() {
    return secureblackbox_pdfverifier_get($this->handle, 36 );
  }


 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getCRLBytes($crlindex) {
    return secureblackbox_pdfverifier_get($this->handle, 37 , $crlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCRLHandle($crlindex) {
    return secureblackbox_pdfverifier_get($this->handle, 38 , $crlindex);
  }


 /**
  * The common name of the CRL issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getCRLIssuer($crlindex) {
    return secureblackbox_pdfverifier_get($this->handle, 39 , $crlindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the CRL issuer.
  *
  * @access   public
  */
  public function getCRLIssuerRDN($crlindex) {
    return secureblackbox_pdfverifier_get($this->handle, 40 , $crlindex);
  }


 /**
  * The URL that the CRL was downloaded from.
  *
  * @access   public
  */
  public function getCRLLocation($crlindex) {
    return secureblackbox_pdfverifier_get($this->handle, 41 , $crlindex);
  }


 /**
  * The planned time and date of the next version of this CRL to be published.
  *
  * @access   public
  */
  public function getCRLNextUpdate($crlindex) {
    return secureblackbox_pdfverifier_get($this->handle, 42 , $crlindex);
  }


 /**
  * The date and time at which this version of the CRL was published.
  *
  * @access   public
  */
  public function getCRLThisUpdate($crlindex) {
    return secureblackbox_pdfverifier_get($this->handle, 43 , $crlindex);
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getDecryptionCertificateBytes() {
    return secureblackbox_pdfverifier_get($this->handle, 44 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getDecryptionCertificateHandle() {
    return secureblackbox_pdfverifier_get($this->handle, 45 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setDecryptionCertificateHandle($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 45, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the DecryptionCert arrays.
  *
  * @access   public
  */
  public function getDecryptionCertCount() {
    return secureblackbox_pdfverifier_get($this->handle, 46 );
  }
 /**
  * The number of records in the DecryptionCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setDecryptionCertCount($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getDecryptionCertBytes($decryptioncertindex) {
    return secureblackbox_pdfverifier_get($this->handle, 47 , $decryptioncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getDecryptionCertHandle($decryptioncertindex) {
    return secureblackbox_pdfverifier_get($this->handle, 48 , $decryptioncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setDecryptionCertHandle($decryptioncertindex, $value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 48, $value , $decryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the PDF document is encrypted.
  *
  * @access   public
  */
  public function getEncrypted() {
    return secureblackbox_pdfverifier_get($this->handle, 49 );
  }


 /**
  * The symmetric algorithm used to encrypt the document.
  *
  * @access   public
  */
  public function getEncryptionAlgorithm() {
    return secureblackbox_pdfverifier_get($this->handle, 50 );
  }


 /**
  * The document encryption type.
  *
  * @access   public
  */
  public function getEncryptionType() {
    return secureblackbox_pdfverifier_get($this->handle, 51 );
  }


 /**
  * Makes the class tolerant to chain validation errors.
  *
  * @access   public
  */
  public function getIgnoreChainValidationErrors() {
    return secureblackbox_pdfverifier_get($this->handle, 52 );
  }
 /**
  * Makes the class tolerant to chain validation errors.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setIgnoreChainValidationErrors($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A path to the signed PDF file.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_pdfverifier_get($this->handle, 53 );
  }
 /**
  * A path to the signed PDF file.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  */
  public function getKnownCertCount() {
    return secureblackbox_pdfverifier_get($this->handle, 54 );
  }
 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCertCount($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKnownCertBytes($knowncertindex) {
    return secureblackbox_pdfverifier_get($this->handle, 55 , $knowncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCertHandle($knowncertindex) {
    return secureblackbox_pdfverifier_get($this->handle, 56 , $knowncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCertHandle($knowncertindex, $value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 56, $value , $knowncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  */
  public function getKnownCRLCount() {
    return secureblackbox_pdfverifier_get($this->handle, 57 );
  }
 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCRLCount($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 57, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getKnownCRLBytes($knowncrlindex) {
    return secureblackbox_pdfverifier_get($this->handle, 58 , $knowncrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCRLHandle($knowncrlindex) {
    return secureblackbox_pdfverifier_get($this->handle, 59 , $knowncrlindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCRLHandle($knowncrlindex, $value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 59, $value , $knowncrlindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  */
  public function getKnownOCSPCount() {
    return secureblackbox_pdfverifier_get($this->handle, 60 );
  }
 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownOCSPCount($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 60, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getKnownOCSPBytes($knownocspindex) {
    return secureblackbox_pdfverifier_get($this->handle, 61 , $knownocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownOCSPHandle($knownocspindex) {
    return secureblackbox_pdfverifier_get($this->handle, 62 , $knownocspindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownOCSPHandle($knownocspindex, $value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 62, $value , $knownocspindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the document metadata is encrypted.
  *
  * @access   public
  */
  public function getMetadataEncrypted() {
    return secureblackbox_pdfverifier_get($this->handle, 63 );
  }


 /**
  * The number of records in the OCSP arrays.
  *
  * @access   public
  */
  public function getOCSPCount() {
    return secureblackbox_pdfverifier_get($this->handle, 64 );
  }


 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getOCSPBytes($ocspindex) {
    return secureblackbox_pdfverifier_get($this->handle, 65 , $ocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getOCSPHandle($ocspindex) {
    return secureblackbox_pdfverifier_get($this->handle, 66 , $ocspindex);
  }


 /**
  * Indicates the issuer of this response (a CA or its authorized representative).
  *
  * @access   public
  */
  public function getOCSPIssuer($ocspindex) {
    return secureblackbox_pdfverifier_get($this->handle, 67 , $ocspindex);
  }


 /**
  * Indicates the RDN of the issuer of this response (a CA or its authorized representative).
  *
  * @access   public
  */
  public function getOCSPIssuerRDN($ocspindex) {
    return secureblackbox_pdfverifier_get($this->handle, 68 , $ocspindex);
  }


 /**
  * Location of the OCSP responder.
  *
  * @access   public
  */
  public function getOCSPLocation($ocspindex) {
    return secureblackbox_pdfverifier_get($this->handle, 69 , $ocspindex);
  }


 /**
  * Specifies the time when the response was produced, in UTC.
  *
  * @access   public
  */
  public function getOCSPProducedAt($ocspindex) {
    return secureblackbox_pdfverifier_get($this->handle, 70 , $ocspindex);
  }


 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  */
  public function getOfflineMode() {
    return secureblackbox_pdfverifier_get($this->handle, 71 );
  }
 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setOfflineMode($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The decryption password.
  *
  * @access   public
  */
  public function getPassword() {
    return secureblackbox_pdfverifier_get($this->handle, 72 );
  }
 /**
  * The decryption password.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassword($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether the viewer may add annotations to the document.
  *
  * @access   public
  */
  public function getPermsAnnotations() {
    return secureblackbox_pdfverifier_get($this->handle, 73 );
  }


 /**
  * Indicates if the viewer may assemble a new document on the basis of the encrypted one.
  *
  * @access   public
  */
  public function getPermsAssemble() {
    return secureblackbox_pdfverifier_get($this->handle, 74 );
  }


 /**
  * Indicates if the user may extract (copy) pictures and text from the encrypted document.
  *
  * @access   public
  */
  public function getPermsExtract() {
    return secureblackbox_pdfverifier_get($this->handle, 75 );
  }


 /**
  * Indicates if the user may extract pictures/text from the document for accessibility purposes.
  *
  * @access   public
  */
  public function getPermsExtractAcc() {
    return secureblackbox_pdfverifier_get($this->handle, 76 );
  }


 /**
  * Indicates if the user may fill in forms in the document.
  *
  * @access   public
  */
  public function getPermsFillInForms() {
    return secureblackbox_pdfverifier_get($this->handle, 77 );
  }


 /**
  * Indicates if the document may be printed in high quality.
  *
  * @access   public
  */
  public function getPermsHighQualityPrint() {
    return secureblackbox_pdfverifier_get($this->handle, 78 );
  }


 /**
  * Indicates if the document may be printed in low quality.
  *
  * @access   public
  */
  public function getPermsLowQualityPrint() {
    return secureblackbox_pdfverifier_get($this->handle, 79 );
  }


 /**
  * Indicates if the document may be modified.
  *
  * @access   public
  */
  public function getPermsModify() {
    return secureblackbox_pdfverifier_get($this->handle, 80 );
  }


 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_pdfverifier_get($this->handle, 81 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 81, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_pdfverifier_get($this->handle, 82 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 82, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_pdfverifier_get($this->handle, 83 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 83, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_pdfverifier_get($this->handle, 84 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 84, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_pdfverifier_get($this->handle, 85 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 85, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_pdfverifier_get($this->handle, 86 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 86, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_pdfverifier_get($this->handle, 87 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 87, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_pdfverifier_get($this->handle, 88 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 88, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_pdfverifier_get($this->handle, 89 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 89, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_pdfverifier_get($this->handle, 90 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 90, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_pdfverifier_get($this->handle, 91 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 91, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates a qualified electronic signature.
  *
  * @access   public
  */
  public function getQualified() {
    return secureblackbox_pdfverifier_get($this->handle, 92 );
  }


 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getRevocationCheck() {
    return secureblackbox_pdfverifier_get($this->handle, 93 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setRevocationCheck($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 93, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The changes to the document are allowed by the signature.
  *
  * @access   public
  */
  public function getSigAllowedChanges() {
    return secureblackbox_pdfverifier_get($this->handle, 94 );
  }


 /**
  * A human-readable signer name.
  *
  * @access   public
  */
  public function getSigAuthorName() {
    return secureblackbox_pdfverifier_get($this->handle, 95 );
  }


 /**
  * Specifies whether this is a Certification (MDP) signature.
  *
  * @access   public
  */
  public function getSigCertification() {
    return secureblackbox_pdfverifier_get($this->handle, 96 );
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getSigChainValidationDetails() {
    return secureblackbox_pdfverifier_get($this->handle, 97 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getSigChainValidationResult() {
    return secureblackbox_pdfverifier_get($this->handle, 98 );
  }


 /**
  * Returns or sets signature's creation time.
  *
  * @access   public
  */
  public function getSigClaimedSigningTime() {
    return secureblackbox_pdfverifier_get($this->handle, 99 );
  }


 /**
  * Contains signer's contact information.
  *
  * @access   public
  */
  public function getSigContactInfo() {
    return secureblackbox_pdfverifier_get($this->handle, 100 );
  }


 /**
  * Indicates the offset in the PDF file where signature coverage ends.
  *
  * @access   public
  */
  public function getSigCoverageEndsAt() {
    return secureblackbox_pdfverifier_get($this->handle, 101 );
  }


 /**
  * A uninterpreted custom data to save with the signature.
  *
  * @access   public
  */
  public function getSigCustomData() {
    return secureblackbox_pdfverifier_get($this->handle, 102 );
  }


 /**
  * Indicates whether or not the signature created/read is an empty property (a signature placeholder).
  *
  * @access   public
  */
  public function getSigEmptyField() {
    return secureblackbox_pdfverifier_get($this->handle, 103 );
  }


 /**
  * The signature filter name.
  *
  * @access   public
  */
  public function getSigFilterName() {
    return secureblackbox_pdfverifier_get($this->handle, 104 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigHandle() {
    return secureblackbox_pdfverifier_get($this->handle, 105 );
  }


 /**
  * Specifies the hash algorithm to be used for signing.
  *
  * @access   public
  */
  public function getSigHashAlgorithm() {
    return secureblackbox_pdfverifier_get($this->handle, 106 );
  }


 /**
  * Specifies the height of the signature widget.
  *
  * @access   public
  */
  public function getSigHeight() {
    return secureblackbox_pdfverifier_get($this->handle, 107 );
  }


 /**
  * Controls whether the signature widget is visible on the page.
  *
  * @access   public
  */
  public function getSigInvisible() {
    return secureblackbox_pdfverifier_get($this->handle, 108 );
  }


 /**
  * Specifies the signature kind and level.
  *
  * @access   public
  */
  public function getSigLevel() {
    return secureblackbox_pdfverifier_get($this->handle, 109 );
  }


 /**
  * Specifies the host name or the physical location of the signing entity.
  *
  * @access   public
  */
  public function getSigLocation() {
    return secureblackbox_pdfverifier_get($this->handle, 110 );
  }


 /**
  * Specifies whether the signature widget can be moved by the user.
  *
  * @access   public
  */
  public function getSigLocked() {
    return secureblackbox_pdfverifier_get($this->handle, 111 );
  }


 /**
  * Specifies the signature widget offset from the left-hand page border  when AutoPos is False.
  *
  * @access   public
  */
  public function getSigOffsetX() {
    return secureblackbox_pdfverifier_get($this->handle, 112 );
  }


 /**
  * Specifies the signature widget offset from the bottom page border  when AutoPos is False.
  *
  * @access   public
  */
  public function getSigOffsetY() {
    return secureblackbox_pdfverifier_get($this->handle, 113 );
  }


 /**
  * The index of the page on which to place the signature.
  *
  * @access   public
  */
  public function getSigPage() {
    return secureblackbox_pdfverifier_get($this->handle, 114 );
  }


 /**
  * The algorithm that was used to calculate the signature policy hash.
  *
  * @access   public
  */
  public function getSigPolicyHashAlgorithm() {
    return secureblackbox_pdfverifier_get($this->handle, 115 );
  }


 /**
  * Whether the signature shall appear in printed documents.
  *
  * @access   public
  */
  public function getSigPrint() {
    return secureblackbox_pdfverifier_get($this->handle, 116 );
  }


 /**
  * Indicates a qualified electronic signature.
  *
  * @access   public
  */
  public function getSigQualified() {
    return secureblackbox_pdfverifier_get($this->handle, 117 );
  }


 /**
  * Controls the ReadOnly flag of the widget.
  *
  * @access   public
  */
  public function getSigReadOnly() {
    return secureblackbox_pdfverifier_get($this->handle, 118 );
  }


 /**
  * Specifies the reason for signing.
  *
  * @access   public
  */
  public function getSigReason() {
    return secureblackbox_pdfverifier_get($this->handle, 119 );
  }


 /**
  * Specifies the unique signature identifier to use.
  *
  * @access   public
  */
  public function getSigSignatureName() {
    return secureblackbox_pdfverifier_get($this->handle, 120 );
  }


 /**
  * The outcome of the cryptographic signature validation.
  *
  * @access   public
  */
  public function getSigSignatureValidationResult() {
    return secureblackbox_pdfverifier_get($this->handle, 121 );
  }


 /**
  * Provides custom signer information to put on the signature widget.
  *
  * @access   public
  */
  public function getSigSignerInfo() {
    return secureblackbox_pdfverifier_get($this->handle, 122 );
  }


 /**
  * Contains the RDN of the owner of the signing certificate.
  *
  * @access   public
  */
  public function getSigSubjectRDN() {
    return secureblackbox_pdfverifier_get($this->handle, 123 );
  }


 /**
  * Indicates if the signature is timestamped.
  *
  * @access   public
  */
  public function getSigTimestamped() {
    return secureblackbox_pdfverifier_get($this->handle, 124 );
  }


 /**
  * When True, the signature widget will be displayed only when the user is moving a mouse over it.
  *
  * @access   public
  */
  public function getSigToggleNoView() {
    return secureblackbox_pdfverifier_get($this->handle, 125 );
  }


 /**
  * Contains the certified signing time.
  *
  * @access   public
  */
  public function getSigValidatedSigningTime() {
    return secureblackbox_pdfverifier_get($this->handle, 126 );
  }


 /**
  * Contains the signing certificate's chain validation log.
  *
  * @access   public
  */
  public function getSigValidationLog() {
    return secureblackbox_pdfverifier_get($this->handle, 127 );
  }


 /**
  * Specifies the width of the signature widget.
  *
  * @access   public
  */
  public function getSigWidth() {
    return secureblackbox_pdfverifier_get($this->handle, 128 );
  }


 /**
  * The number of records in the Signature arrays.
  *
  * @access   public
  */
  public function getSignatureCount() {
    return secureblackbox_pdfverifier_get($this->handle, 129 );
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getSignatureChainValidationDetails($signatureindex) {
    return secureblackbox_pdfverifier_get($this->handle, 130 , $signatureindex);
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getSignatureChainValidationResult($signatureindex) {
    return secureblackbox_pdfverifier_get($this->handle, 131 , $signatureindex);
  }


 /**
  * Returns or sets signature's creation time.
  *
  * @access   public
  */
  public function getSignatureClaimedSigningTime($signatureindex) {
    return secureblackbox_pdfverifier_get($this->handle, 132 , $signatureindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSignatureHandle($signatureindex) {
    return secureblackbox_pdfverifier_get($this->handle, 133 , $signatureindex);
  }


 /**
  * Specifies the signature kind and level.
  *
  * @access   public
  */
  public function getSignatureLevel($signatureindex) {
    return secureblackbox_pdfverifier_get($this->handle, 134 , $signatureindex);
  }


 /**
  * The outcome of the cryptographic signature validation.
  *
  * @access   public
  */
  public function getSignatureSignatureValidationResult($signatureindex) {
    return secureblackbox_pdfverifier_get($this->handle, 135 , $signatureindex);
  }


 /**
  * Contains the RDN of the owner of the signing certificate.
  *
  * @access   public
  */
  public function getSignatureSubjectRDN($signatureindex) {
    return secureblackbox_pdfverifier_get($this->handle, 136 , $signatureindex);
  }


 /**
  * Indicates if the signature is timestamped.
  *
  * @access   public
  */
  public function getSignatureTimestamped($signatureindex) {
    return secureblackbox_pdfverifier_get($this->handle, 137 , $signatureindex);
  }


 /**
  * Contains the certified signing time.
  *
  * @access   public
  */
  public function getSignatureValidatedSigningTime($signatureindex) {
    return secureblackbox_pdfverifier_get($this->handle, 138 , $signatureindex);
  }


 /**
  * Contains the signing certificate's chain validation log.
  *
  * @access   public
  */
  public function getSignatureValidationLog($signatureindex) {
    return secureblackbox_pdfverifier_get($this->handle, 139 , $signatureindex);
  }


 /**
  * The signature validation result.
  *
  * @access   public
  */
  public function getSignatureValidationResult() {
    return secureblackbox_pdfverifier_get($this->handle, 140 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningCertBytes() {
    return secureblackbox_pdfverifier_get($this->handle, 141 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getSigningCertCA() {
    return secureblackbox_pdfverifier_get($this->handle, 142 );
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getSigningCertCAKeyID() {
    return secureblackbox_pdfverifier_get($this->handle, 143 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getSigningCertCRLDistributionPoints() {
    return secureblackbox_pdfverifier_get($this->handle, 144 );
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getSigningCertCurve() {
    return secureblackbox_pdfverifier_get($this->handle, 145 );
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getSigningCertFingerprint() {
    return secureblackbox_pdfverifier_get($this->handle, 146 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getSigningCertFriendlyName() {
    return secureblackbox_pdfverifier_get($this->handle, 147 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningCertHandle() {
    return secureblackbox_pdfverifier_get($this->handle, 148 );
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getSigningCertHashAlgorithm() {
    return secureblackbox_pdfverifier_get($this->handle, 149 );
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getSigningCertIssuer() {
    return secureblackbox_pdfverifier_get($this->handle, 150 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getSigningCertIssuerRDN() {
    return secureblackbox_pdfverifier_get($this->handle, 151 );
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getSigningCertKeyAlgorithm() {
    return secureblackbox_pdfverifier_get($this->handle, 152 );
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getSigningCertKeyBits() {
    return secureblackbox_pdfverifier_get($this->handle, 153 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getSigningCertKeyFingerprint() {
    return secureblackbox_pdfverifier_get($this->handle, 154 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getSigningCertKeyUsage() {
    return secureblackbox_pdfverifier_get($this->handle, 155 );
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getSigningCertKeyValid() {
    return secureblackbox_pdfverifier_get($this->handle, 156 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getSigningCertOCSPLocations() {
    return secureblackbox_pdfverifier_get($this->handle, 157 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getSigningCertPolicyIDs() {
    return secureblackbox_pdfverifier_get($this->handle, 158 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getSigningCertPublicKeyBytes() {
    return secureblackbox_pdfverifier_get($this->handle, 159 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getSigningCertSelfSigned() {
    return secureblackbox_pdfverifier_get($this->handle, 160 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getSigningCertSerialNumber() {
    return secureblackbox_pdfverifier_get($this->handle, 161 );
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getSigningCertSigAlgorithm() {
    return secureblackbox_pdfverifier_get($this->handle, 162 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getSigningCertSubject() {
    return secureblackbox_pdfverifier_get($this->handle, 163 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getSigningCertSubjectKeyID() {
    return secureblackbox_pdfverifier_get($this->handle, 164 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getSigningCertSubjectRDN() {
    return secureblackbox_pdfverifier_get($this->handle, 165 );
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getSigningCertValidFrom() {
    return secureblackbox_pdfverifier_get($this->handle, 166 );
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getSigningCertValidTo() {
    return secureblackbox_pdfverifier_get($this->handle, 167 );
  }


 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_pdfverifier_get($this->handle, 168 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 168, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_pdfverifier_get($this->handle, 169 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 169, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_pdfverifier_get($this->handle, 170 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 170, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_pdfverifier_get($this->handle, 171 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 171, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_pdfverifier_get($this->handle, 172 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 172, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_pdfverifier_get($this->handle, 173 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 173, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_pdfverifier_get($this->handle, 174 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 174, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_pdfverifier_get($this->handle, 175 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 175, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_pdfverifier_get($this->handle, 176 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 176, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_pdfverifier_get($this->handle, 177 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 177, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_pdfverifier_get($this->handle, 178 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 178, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * This property indicates the accuracy of the included time mark, in microseconds.
  *
  * @access   public
  */
  public function getTimestampAccuracy() {
    return secureblackbox_pdfverifier_get($this->handle, 179 );
  }


 /**
  * Returns raw timestamp data in DER format.
  *
  * @access   public
  */
  public function getTimestampBytes() {
    return secureblackbox_pdfverifier_get($this->handle, 180 );
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getTimestampChainValidationDetails() {
    return secureblackbox_pdfverifier_get($this->handle, 181 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getTimestampChainValidationResult() {
    return secureblackbox_pdfverifier_get($this->handle, 182 );
  }


 /**
  * Returns the timestamp's hash algorithm SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getTimestampHashAlgorithm() {
    return secureblackbox_pdfverifier_get($this->handle, 183 );
  }


 /**
  * Returns the timestamp's serial number.
  *
  * @access   public
  */
  public function getTimestampSerialNumber() {
    return secureblackbox_pdfverifier_get($this->handle, 184 );
  }


 /**
  * The time point incorporated into the timestamp.
  *
  * @access   public
  */
  public function getTimestampTime() {
    return secureblackbox_pdfverifier_get($this->handle, 185 );
  }


 /**
  * Returns the timestamp type.
  *
  * @access   public
  */
  public function getTimestampTimestampType() {
    return secureblackbox_pdfverifier_get($this->handle, 186 );
  }


 /**
  * This value uniquely identifies the Timestamp Authority (TSA).
  *
  * @access   public
  */
  public function getTimestampTSAName() {
    return secureblackbox_pdfverifier_get($this->handle, 187 );
  }


 /**
  * Contains the TSA certificate chain validation log.
  *
  * @access   public
  */
  public function getTimestampValidationLog() {
    return secureblackbox_pdfverifier_get($this->handle, 188 );
  }


 /**
  * Contains timestamp validation outcome.
  *
  * @access   public
  */
  public function getTimestampValidationResult() {
    return secureblackbox_pdfverifier_get($this->handle, 189 );
  }


 /**
  * Indicates whether or not the signature is timestamped.
  *
  * @access   public
  */
  public function getTimestamped() {
    return secureblackbox_pdfverifier_get($this->handle, 190 );
  }


 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_pdfverifier_get($this->handle, 191 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 191, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_pdfverifier_get($this->handle, 192 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 192, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_pdfverifier_get($this->handle, 193 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 193, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_pdfverifier_get($this->handle, 194 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 194, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_pdfverifier_get($this->handle, 195 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 195, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_pdfverifier_get($this->handle, 196 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 196, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_pdfverifier_get($this->handle, 197 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 197, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_pdfverifier_get($this->handle, 198 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 198, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_pdfverifier_get($this->handle, 199 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 199, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_pdfverifier_get($this->handle, 200 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 200, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_pdfverifier_get($this->handle, 201 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 201, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_pdfverifier_get($this->handle, 202 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 202, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_pdfverifier_get($this->handle, 203 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 203, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_pdfverifier_get($this->handle, 204 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 204, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_pdfverifier_get($this->handle, 205 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 205, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  */
  public function getTrustedCertCount() {
    return secureblackbox_pdfverifier_get($this->handle, 206 );
  }
 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setTrustedCertCount($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 206, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTrustedCertBytes($trustedcertindex) {
    return secureblackbox_pdfverifier_get($this->handle, 207 , $trustedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTrustedCertHandle($trustedcertindex) {
    return secureblackbox_pdfverifier_get($this->handle, 208 , $trustedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setTrustedCertHandle($trustedcertindex, $value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 208, $value , $trustedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTSACertBytes() {
    return secureblackbox_pdfverifier_get($this->handle, 209 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getTSACertCA() {
    return secureblackbox_pdfverifier_get($this->handle, 210 );
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getTSACertCAKeyID() {
    return secureblackbox_pdfverifier_get($this->handle, 211 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getTSACertCRLDistributionPoints() {
    return secureblackbox_pdfverifier_get($this->handle, 212 );
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getTSACertCurve() {
    return secureblackbox_pdfverifier_get($this->handle, 213 );
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getTSACertFingerprint() {
    return secureblackbox_pdfverifier_get($this->handle, 214 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getTSACertFriendlyName() {
    return secureblackbox_pdfverifier_get($this->handle, 215 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTSACertHandle() {
    return secureblackbox_pdfverifier_get($this->handle, 216 );
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getTSACertHashAlgorithm() {
    return secureblackbox_pdfverifier_get($this->handle, 217 );
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getTSACertIssuer() {
    return secureblackbox_pdfverifier_get($this->handle, 218 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getTSACertIssuerRDN() {
    return secureblackbox_pdfverifier_get($this->handle, 219 );
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getTSACertKeyAlgorithm() {
    return secureblackbox_pdfverifier_get($this->handle, 220 );
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getTSACertKeyBits() {
    return secureblackbox_pdfverifier_get($this->handle, 221 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getTSACertKeyFingerprint() {
    return secureblackbox_pdfverifier_get($this->handle, 222 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getTSACertKeyUsage() {
    return secureblackbox_pdfverifier_get($this->handle, 223 );
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getTSACertKeyValid() {
    return secureblackbox_pdfverifier_get($this->handle, 224 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getTSACertOCSPLocations() {
    return secureblackbox_pdfverifier_get($this->handle, 225 );
  }


 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getTSACertOrigin() {
    return secureblackbox_pdfverifier_get($this->handle, 226 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getTSACertPolicyIDs() {
    return secureblackbox_pdfverifier_get($this->handle, 227 );
  }


 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getTSACertPrivateKeyBytes() {
    return secureblackbox_pdfverifier_get($this->handle, 228 );
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getTSACertPrivateKeyExists() {
    return secureblackbox_pdfverifier_get($this->handle, 229 );
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getTSACertPrivateKeyExtractable() {
    return secureblackbox_pdfverifier_get($this->handle, 230 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getTSACertPublicKeyBytes() {
    return secureblackbox_pdfverifier_get($this->handle, 231 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getTSACertSelfSigned() {
    return secureblackbox_pdfverifier_get($this->handle, 232 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getTSACertSerialNumber() {
    return secureblackbox_pdfverifier_get($this->handle, 233 );
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getTSACertSigAlgorithm() {
    return secureblackbox_pdfverifier_get($this->handle, 234 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getTSACertSubject() {
    return secureblackbox_pdfverifier_get($this->handle, 235 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getTSACertSubjectKeyID() {
    return secureblackbox_pdfverifier_get($this->handle, 236 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getTSACertSubjectRDN() {
    return secureblackbox_pdfverifier_get($this->handle, 237 );
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getTSACertValidFrom() {
    return secureblackbox_pdfverifier_get($this->handle, 238 );
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getTSACertValidTo() {
    return secureblackbox_pdfverifier_get($this->handle, 239 );
  }


 /**
  * Contains the certified signing time.
  *
  * @access   public
  */
  public function getValidatedSigningTime() {
    return secureblackbox_pdfverifier_get($this->handle, 240 );
  }


 /**
  * Contains the complete log of the certificate validation routine.
  *
  * @access   public
  */
  public function getValidationLog() {
    return secureblackbox_pdfverifier_get($this->handle, 241 );
  }


 /**
  * The time point at which signature validity is to be established.
  *
  * @access   public
  */
  public function getValidationMoment() {
    return secureblackbox_pdfverifier_get($this->handle, 242 );
  }
 /**
  * The time point at which signature validity is to be established.
  *
  * @access   public
  * @param    string   value
  */
  public function setValidationMoment($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 242, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_pdfverifier_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_pdfverifier_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfverifier_get_last_error($this->handle));
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
  * Provides recipient certificate details to the application.
  *
  * @access   public
  * @param    array   Array of event parameters: issuerrdn, serialnumber, subjectkeyid, certfound    
  */
  public function fireRecipientFound($param) {
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
