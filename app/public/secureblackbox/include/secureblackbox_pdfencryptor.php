<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - PDFEncryptor Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_PDFEncryptor {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_pdfencryptor_open(SECUREBLACKBOX_OEMKEY_793);
    secureblackbox_pdfencryptor_register_callback($this->handle, 1, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_pdfencryptor_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_pdfencryptor_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_pdfencryptor_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_pdfencryptor_do_config($this->handle, $configurationstring);
		$err = secureblackbox_pdfencryptor_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts the PDF document.
  *
  * @access   public
  */
  public function doEncrypt() {
    $ret = secureblackbox_pdfencryptor_do_encrypt($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_pdfencryptor_get($this->handle, 0);
  }
 /**
  * The encryption algorithm to encrypt the document with.
  *
  * @access   public
  */
  public function getEncryptionAlgorithm() {
    return secureblackbox_pdfencryptor_get($this->handle, 1 );
  }
 /**
  * The encryption algorithm to encrypt the document with.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionAlgorithm($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getEncryptionCertificateBytes() {
    return secureblackbox_pdfencryptor_get($this->handle, 2 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getEncryptionCertificateCA() {
    return secureblackbox_pdfencryptor_get($this->handle, 3 );
  }
 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  * @param    boolean   value
  */
  public function setEncryptionCertificateCA($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getEncryptionCertificateCAKeyID() {
    return secureblackbox_pdfencryptor_get($this->handle, 4 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getEncryptionCertificateCRLDistributionPoints() {
    return secureblackbox_pdfencryptor_get($this->handle, 5 );
  }
 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateCRLDistributionPoints($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getEncryptionCertificateCurve() {
    return secureblackbox_pdfencryptor_get($this->handle, 6 );
  }
 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateCurve($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getEncryptionCertificateFingerprint() {
    return secureblackbox_pdfencryptor_get($this->handle, 7 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getEncryptionCertificateFriendlyName() {
    return secureblackbox_pdfencryptor_get($this->handle, 8 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getEncryptionCertificateHandle() {
    return secureblackbox_pdfencryptor_get($this->handle, 9 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setEncryptionCertificateHandle($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getEncryptionCertificateHashAlgorithm() {
    return secureblackbox_pdfencryptor_get($this->handle, 10 );
  }
 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateHashAlgorithm($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getEncryptionCertificateIssuer() {
    return secureblackbox_pdfencryptor_get($this->handle, 11 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getEncryptionCertificateIssuerRDN() {
    return secureblackbox_pdfencryptor_get($this->handle, 12 );
  }
 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateIssuerRDN($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getEncryptionCertificateKeyAlgorithm() {
    return secureblackbox_pdfencryptor_get($this->handle, 13 );
  }
 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateKeyAlgorithm($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getEncryptionCertificateKeyBits() {
    return secureblackbox_pdfencryptor_get($this->handle, 14 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getEncryptionCertificateKeyFingerprint() {
    return secureblackbox_pdfencryptor_get($this->handle, 15 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getEncryptionCertificateKeyUsage() {
    return secureblackbox_pdfencryptor_get($this->handle, 16 );
  }
 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  * @param    int   value
  */
  public function setEncryptionCertificateKeyUsage($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getEncryptionCertificateKeyValid() {
    return secureblackbox_pdfencryptor_get($this->handle, 17 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getEncryptionCertificateOCSPLocations() {
    return secureblackbox_pdfencryptor_get($this->handle, 18 );
  }
 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateOCSPLocations($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getEncryptionCertificateOrigin() {
    return secureblackbox_pdfencryptor_get($this->handle, 19 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getEncryptionCertificatePolicyIDs() {
    return secureblackbox_pdfencryptor_get($this->handle, 20 );
  }
 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificatePolicyIDs($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 20, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getEncryptionCertificatePrivateKeyBytes() {
    return secureblackbox_pdfencryptor_get($this->handle, 21 );
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getEncryptionCertificatePrivateKeyExists() {
    return secureblackbox_pdfencryptor_get($this->handle, 22 );
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getEncryptionCertificatePrivateKeyExtractable() {
    return secureblackbox_pdfencryptor_get($this->handle, 23 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getEncryptionCertificatePublicKeyBytes() {
    return secureblackbox_pdfencryptor_get($this->handle, 24 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getEncryptionCertificateSelfSigned() {
    return secureblackbox_pdfencryptor_get($this->handle, 25 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getEncryptionCertificateSerialNumber() {
    return secureblackbox_pdfencryptor_get($this->handle, 26 );
  }
 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateSerialNumber($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getEncryptionCertificateSigAlgorithm() {
    return secureblackbox_pdfencryptor_get($this->handle, 27 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getEncryptionCertificateSubject() {
    return secureblackbox_pdfencryptor_get($this->handle, 28 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getEncryptionCertificateSubjectKeyID() {
    return secureblackbox_pdfencryptor_get($this->handle, 29 );
  }
 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateSubjectKeyID($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 29, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getEncryptionCertificateSubjectRDN() {
    return secureblackbox_pdfencryptor_get($this->handle, 30 );
  }
 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateSubjectRDN($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 30, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getEncryptionCertificateValidFrom() {
    return secureblackbox_pdfencryptor_get($this->handle, 31 );
  }
 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateValidFrom($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 31, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getEncryptionCertificateValidTo() {
    return secureblackbox_pdfencryptor_get($this->handle, 32 );
  }
 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertificateValidTo($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the EncryptionCert arrays.
  *
  * @access   public
  */
  public function getEncryptionCertCount() {
    return secureblackbox_pdfencryptor_get($this->handle, 33 );
  }
 /**
  * The number of records in the EncryptionCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setEncryptionCertCount($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getEncryptionCertBytes($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 34 , $encryptioncertindex);
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getEncryptionCertCA($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 35 , $encryptioncertindex);
  }
 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  * @param    boolean   value
  */
  public function setEncryptionCertCA($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 35, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getEncryptionCertCAKeyID($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 36 , $encryptioncertindex);
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getEncryptionCertCRLDistributionPoints($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 37 , $encryptioncertindex);
  }
 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertCRLDistributionPoints($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 37, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getEncryptionCertCurve($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 38 , $encryptioncertindex);
  }
 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertCurve($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 38, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getEncryptionCertFingerprint($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 39 , $encryptioncertindex);
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getEncryptionCertFriendlyName($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 40 , $encryptioncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getEncryptionCertHandle($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 41 , $encryptioncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setEncryptionCertHandle($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 41, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getEncryptionCertHashAlgorithm($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 42 , $encryptioncertindex);
  }
 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertHashAlgorithm($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 42, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getEncryptionCertIssuer($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 43 , $encryptioncertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getEncryptionCertIssuerRDN($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 44 , $encryptioncertindex);
  }
 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertIssuerRDN($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 44, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getEncryptionCertKeyAlgorithm($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 45 , $encryptioncertindex);
  }
 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertKeyAlgorithm($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 45, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getEncryptionCertKeyBits($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 46 , $encryptioncertindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getEncryptionCertKeyFingerprint($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 47 , $encryptioncertindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getEncryptionCertKeyUsage($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 48 , $encryptioncertindex);
  }
 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  * @param    int   value
  */
  public function setEncryptionCertKeyUsage($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 48, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getEncryptionCertKeyValid($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 49 , $encryptioncertindex);
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getEncryptionCertOCSPLocations($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 50 , $encryptioncertindex);
  }
 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertOCSPLocations($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 50, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getEncryptionCertOrigin($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 51 , $encryptioncertindex);
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getEncryptionCertPolicyIDs($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 52 , $encryptioncertindex);
  }
 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertPolicyIDs($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 52, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getEncryptionCertPrivateKeyBytes($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 53 , $encryptioncertindex);
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getEncryptionCertPrivateKeyExists($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 54 , $encryptioncertindex);
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getEncryptionCertPrivateKeyExtractable($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 55 , $encryptioncertindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getEncryptionCertPublicKeyBytes($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 56 , $encryptioncertindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getEncryptionCertSelfSigned($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 57 , $encryptioncertindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getEncryptionCertSerialNumber($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 58 , $encryptioncertindex);
  }
 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertSerialNumber($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 58, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getEncryptionCertSigAlgorithm($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 59 , $encryptioncertindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getEncryptionCertSubject($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 60 , $encryptioncertindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getEncryptionCertSubjectKeyID($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 61 , $encryptioncertindex);
  }
 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertSubjectKeyID($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 61, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getEncryptionCertSubjectRDN($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 62 , $encryptioncertindex);
  }
 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertSubjectRDN($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 62, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getEncryptionCertValidFrom($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 63 , $encryptioncertindex);
  }
 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertValidFrom($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 63, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getEncryptionCertValidTo($encryptioncertindex) {
    return secureblackbox_pdfencryptor_get($this->handle, 64 , $encryptioncertindex);
  }
 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionCertValidTo($encryptioncertindex, $value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 64, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The encryption type.
  *
  * @access   public
  */
  public function getEncryptionType() {
    return secureblackbox_pdfencryptor_get($this->handle, 65 );
  }
 /**
  * The encryption type.
  *
  * @access   public
  * @param    int   value
  */
  public function setEncryptionType($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 65, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether to encrypt the document metadata.
  *
  * @access   public
  */
  public function getEncryptMetadata() {
    return secureblackbox_pdfencryptor_get($this->handle, 66 );
  }
 /**
  * Specifies whether to encrypt the document metadata.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setEncryptMetadata($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 66, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The PDF file to be encrypted.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_pdfencryptor_get($this->handle, 67 );
  }
 /**
  * The PDF file to be encrypted.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The file to save the encrypted document to.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_pdfencryptor_get($this->handle, 68 );
  }
 /**
  * The file to save the encrypted document to.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 68, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The owner password.
  *
  * @access   public
  */
  public function getOwnerPassword() {
    return secureblackbox_pdfencryptor_get($this->handle, 69 );
  }
 /**
  * The owner password.
  *
  * @access   public
  * @param    string   value
  */
  public function setOwnerPassword($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 69, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether the viewer may add annotations to the document.
  *
  * @access   public
  */
  public function getPermsAnnotations() {
    return secureblackbox_pdfencryptor_get($this->handle, 70 );
  }
 /**
  * Indicates whether the viewer may add annotations to the document.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setPermsAnnotations($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 70, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the viewer may assemble a new document on the basis of the encrypted one.
  *
  * @access   public
  */
  public function getPermsAssemble() {
    return secureblackbox_pdfencryptor_get($this->handle, 71 );
  }
 /**
  * Indicates if the viewer may assemble a new document on the basis of the encrypted one.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setPermsAssemble($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the user may extract (copy) pictures and text from the encrypted document.
  *
  * @access   public
  */
  public function getPermsExtract() {
    return secureblackbox_pdfencryptor_get($this->handle, 72 );
  }
 /**
  * Indicates if the user may extract (copy) pictures and text from the encrypted document.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setPermsExtract($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the user may extract pictures/text from the document for accessibility purposes.
  *
  * @access   public
  */
  public function getPermsExtractAcc() {
    return secureblackbox_pdfencryptor_get($this->handle, 73 );
  }
 /**
  * Indicates if the user may extract pictures/text from the document for accessibility purposes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setPermsExtractAcc($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the user may fill in forms in the document.
  *
  * @access   public
  */
  public function getPermsFillInForms() {
    return secureblackbox_pdfencryptor_get($this->handle, 74 );
  }
 /**
  * Indicates if the user may fill in forms in the document.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setPermsFillInForms($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the document may be printed in high quality.
  *
  * @access   public
  */
  public function getPermsHighQualityPrint() {
    return secureblackbox_pdfencryptor_get($this->handle, 75 );
  }
 /**
  * Indicates if the document may be printed in high quality.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setPermsHighQualityPrint($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 75, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the document may be printed in low quality.
  *
  * @access   public
  */
  public function getPermsLowQualityPrint() {
    return secureblackbox_pdfencryptor_get($this->handle, 76 );
  }
 /**
  * Indicates if the document may be printed in low quality.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setPermsLowQualityPrint($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 76, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the document may be modified.
  *
  * @access   public
  */
  public function getPermsModify() {
    return secureblackbox_pdfencryptor_get($this->handle, 77 );
  }
 /**
  * Indicates if the document may be modified.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setPermsModify($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 77, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The user password.
  *
  * @access   public
  */
  public function getUserPassword() {
    return secureblackbox_pdfencryptor_get($this->handle, 78 );
  }
 /**
  * The user password.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserPassword($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_pdfencryptor_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_pdfencryptor_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pdfencryptor_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Information about errors during encryption.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }


}

?>
