<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - CertificateManager Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_CertificateManager {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_certificatemanager_open(SECUREBLACKBOX_OEMKEY_260);
    secureblackbox_certificatemanager_register_callback($this->handle, 1, array($this, 'fireError'));
    secureblackbox_certificatemanager_register_callback($this->handle, 2, array($this, 'fireExternalSign'));
    secureblackbox_certificatemanager_register_callback($this->handle, 3, array($this, 'firePasswordNeeded'));
  }
  
  public function __destruct() {
    secureblackbox_certificatemanager_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_certificatemanager_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_certificatemanager_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_certificatemanager_do_config($this->handle, $configurationstring);
		$err = secureblackbox_certificatemanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Downloads a certificate from a remote location.
  *
  * @access   public
  * @param    string    url
  */
  public function doDownload($url) {
    $ret = secureblackbox_certificatemanager_do_download($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Exports the certificate in the chosen format.
  *
  * @access   public
  * @param    string    password
  * @param    int    format
  * @param    boolean    exportkey
  */
  public function doExportCert($password, $format, $exportkey) {
    $ret = secureblackbox_certificatemanager_do_exportcert($this->handle, $password, $format, $exportkey);
		$err = secureblackbox_certificatemanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Exports a Certificate Signing Request (CSR).
  *
  * @access   public
  * @param    int    format
  */
  public function doExportCSR($format) {
    $ret = secureblackbox_certificatemanager_do_exportcsr($this->handle, $format);
		$err = secureblackbox_certificatemanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Exports the certificate's private key.
  *
  * @access   public
  * @param    string    password
  * @param    int    format
  */
  public function doExportKey($password, $format) {
    $ret = secureblackbox_certificatemanager_do_exportkey($this->handle, $password, $format);
		$err = secureblackbox_certificatemanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Exports the private key to a file in the chosen format.
  *
  * @access   public
  * @param    string    keyfile
  * @param    string    password
  * @param    int    format
  */
  public function doExportKeyToFile($keyfile, $password, $format) {
    $ret = secureblackbox_certificatemanager_do_exportkeytofile($this->handle, $keyfile, $password, $format);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Exports the certificate to a file.
  *
  * @access   public
  * @param    string    certfile
  * @param    string    password
  * @param    int    format
  * @param    boolean    exportkey
  */
  public function doExportToFile($certfile, $password, $format, $exportkey) {
    $ret = secureblackbox_certificatemanager_do_exporttofile($this->handle, $certfile, $password, $format, $exportkey);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates a new certificate.
  *
  * @access   public
  * @param    int    keybits
  */
  public function doGenerate($keybits) {
    $ret = secureblackbox_certificatemanager_do_generate($this->handle, $keybits);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Initiates asynchronous (DC) certificate generation.
  *
  * @access   public
  * @param    int    keybits
  */
  public function doGenerateAsyncBegin($keybits) {
    $ret = secureblackbox_certificatemanager_do_generateasyncbegin($this->handle, $keybits);
		$err = secureblackbox_certificatemanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Completes asynchronous certificate generation.
  *
  * @access   public
  * @param    string    asyncreply
  */
  public function doGenerateAsyncEnd($asyncreply) {
    $ret = secureblackbox_certificatemanager_do_generateasyncend($this->handle, $asyncreply);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Creates a new certificate signing request (CSR).
  *
  * @access   public
  * @param    int    keybits
  */
  public function doGenerateCSR($keybits) {
    $ret = secureblackbox_certificatemanager_do_generatecsr($this->handle, $keybits);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates a new certificate with an external signing device.
  *
  * @access   public
  * @param    int    keybits
  */
  public function doGenerateExternal($keybits) {
    $ret = secureblackbox_certificatemanager_do_generateexternal($this->handle, $keybits);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates a sample certificate for the specified purpose.
  *
  * @access   public
  * @param    string    purpose
  * @param    string    subject
  */
  public function doGetSampleCert($purpose, $subject) {
    $ret = secureblackbox_certificatemanager_do_getsamplecert($this->handle, $purpose, $subject);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads a certificate from a file.
  *
  * @access   public
  * @param    string    path
  * @param    string    password
  */
  public function doImportFromFile($path, $password) {
    $ret = secureblackbox_certificatemanager_do_importfromfile($this->handle, $path, $password);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Imports a private key.
  *
  * @access   public
  * @param    string    key
  * @param    string    password
  */
  public function doImportKey($key, $password) {
    $ret = secureblackbox_certificatemanager_do_importkey($this->handle, $key, $password);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Imports a private key from a file.
  *
  * @access   public
  * @param    string    path
  * @param    string    password
  */
  public function doImportKeyFromFile($path, $password) {
    $ret = secureblackbox_certificatemanager_do_importkeyfromfile($this->handle, $path, $password);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Renews the certificate.
  *
  * @access   public
  */
  public function doUpdate() {
    $ret = secureblackbox_certificatemanager_do_update($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Validates the certificate.
  *
  * @access   public
  */
  public function doValidate() {
    $ret = secureblackbox_certificatemanager_do_validate($this->handle);
		$err = secureblackbox_certificatemanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_certificatemanager_get($this->handle, 0);
  }
 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCACertBytes() {
    return secureblackbox_certificatemanager_get($this->handle, 1 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCACertHandle() {
    return secureblackbox_certificatemanager_get($this->handle, 2 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setCACertHandle($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCertBytes() {
    return secureblackbox_certificatemanager_get($this->handle, 3 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getCertCA() {
    return secureblackbox_certificatemanager_get($this->handle, 4 );
  }
 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  * @param    boolean   value
  */
  public function setCertCA($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getCertCAKeyID() {
    return secureblackbox_certificatemanager_get($this->handle, 5 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getCertCRLDistributionPoints() {
    return secureblackbox_certificatemanager_get($this->handle, 6 );
  }
 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertCRLDistributionPoints($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getCertCurve() {
    return secureblackbox_certificatemanager_get($this->handle, 7 );
  }
 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertCurve($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getCertFingerprint() {
    return secureblackbox_certificatemanager_get($this->handle, 8 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getCertFriendlyName() {
    return secureblackbox_certificatemanager_get($this->handle, 9 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCertHandle() {
    return secureblackbox_certificatemanager_get($this->handle, 10 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setCertHandle($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getCertHashAlgorithm() {
    return secureblackbox_certificatemanager_get($this->handle, 11 );
  }
 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  * @param    string   value
  */
  public function setCertHashAlgorithm($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getCertIssuer() {
    return secureblackbox_certificatemanager_get($this->handle, 12 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getCertIssuerRDN() {
    return secureblackbox_certificatemanager_get($this->handle, 13 );
  }
 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertIssuerRDN($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getCertKeyAlgorithm() {
    return secureblackbox_certificatemanager_get($this->handle, 14 );
  }
 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertKeyAlgorithm($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getCertKeyBits() {
    return secureblackbox_certificatemanager_get($this->handle, 15 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getCertKeyFingerprint() {
    return secureblackbox_certificatemanager_get($this->handle, 16 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getCertKeyUsage() {
    return secureblackbox_certificatemanager_get($this->handle, 17 );
  }
 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  * @param    int   value
  */
  public function setCertKeyUsage($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getCertKeyValid() {
    return secureblackbox_certificatemanager_get($this->handle, 18 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getCertOCSPLocations() {
    return secureblackbox_certificatemanager_get($this->handle, 19 );
  }
 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertOCSPLocations($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 19, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getCertOrigin() {
    return secureblackbox_certificatemanager_get($this->handle, 20 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getCertPolicyIDs() {
    return secureblackbox_certificatemanager_get($this->handle, 21 );
  }
 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertPolicyIDs($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getCertPrivateKeyBytes() {
    return secureblackbox_certificatemanager_get($this->handle, 22 );
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getCertPrivateKeyExists() {
    return secureblackbox_certificatemanager_get($this->handle, 23 );
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getCertPrivateKeyExtractable() {
    return secureblackbox_certificatemanager_get($this->handle, 24 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getCertPublicKeyBytes() {
    return secureblackbox_certificatemanager_get($this->handle, 25 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getCertSelfSigned() {
    return secureblackbox_certificatemanager_get($this->handle, 26 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getCertSerialNumber() {
    return secureblackbox_certificatemanager_get($this->handle, 27 );
  }
 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertSerialNumber($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 27, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getCertSigAlgorithm() {
    return secureblackbox_certificatemanager_get($this->handle, 28 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getCertSubject() {
    return secureblackbox_certificatemanager_get($this->handle, 29 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getCertSubjectKeyID() {
    return secureblackbox_certificatemanager_get($this->handle, 30 );
  }
 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertSubjectKeyID($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 30, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getCertSubjectRDN() {
    return secureblackbox_certificatemanager_get($this->handle, 31 );
  }
 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  * @param    string   value
  */
  public function setCertSubjectRDN($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 31, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getCertValidFrom() {
    return secureblackbox_certificatemanager_get($this->handle, 32 );
  }
 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertValidFrom($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getCertValidTo() {
    return secureblackbox_certificatemanager_get($this->handle, 33 );
  }
 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertValidTo($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provides access to raw certificate request data in DER format.
  *
  * @access   public
  */
  public function getCertRequestBytes() {
    return secureblackbox_certificatemanager_get($this->handle, 34 );
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getCertRequestCurve() {
    return secureblackbox_certificatemanager_get($this->handle, 35 );
  }
 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertRequestCurve($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 35, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCertRequestHandle() {
    return secureblackbox_certificatemanager_get($this->handle, 36 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setCertRequestHandle($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used in the operations on the certificate request (such as signing).
  *
  * @access   public
  */
  public function getCertRequestHashAlgorithm() {
    return secureblackbox_certificatemanager_get($this->handle, 37 );
  }
 /**
  * Specifies the hash algorithm to be used in the operations on the certificate request (such as signing).
  *
  * @access   public
  * @param    string   value
  */
  public function setCertRequestHashAlgorithm($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 37, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the public key algorithm of this certificate request.
  *
  * @access   public
  */
  public function getCertRequestKeyAlgorithm() {
    return secureblackbox_certificatemanager_get($this->handle, 38 );
  }
 /**
  * Specifies the public key algorithm of this certificate request.
  *
  * @access   public
  * @param    string   value
  */
  public function setCertRequestKeyAlgorithm($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 38, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getCertRequestKeyBits() {
    return secureblackbox_certificatemanager_get($this->handle, 39 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate request, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getCertRequestKeyUsage() {
    return secureblackbox_certificatemanager_get($this->handle, 40 );
  }
 /**
  * Indicates the purposes of the key contained in the certificate request, in the form of an OR'ed flag set.
  *
  * @access   public
  * @param    int   value
  */
  public function setCertRequestKeyUsage($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getCertRequestKeyValid() {
    return secureblackbox_certificatemanager_get($this->handle, 41 );
  }


 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getCertRequestPrivateKeyBytes() {
    return secureblackbox_certificatemanager_get($this->handle, 42 );
  }


 /**
  * Contains the public key incorporated in the request, in DER format.
  *
  * @access   public
  */
  public function getCertRequestPublicKeyBytes() {
    return secureblackbox_certificatemanager_get($this->handle, 43 );
  }


 /**
  * Indicates the algorithm that was used by the requestor to sign this certificate request.
  *
  * @access   public
  */
  public function getCertRequestSigAlgorithm() {
    return secureblackbox_certificatemanager_get($this->handle, 44 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getCertRequestSubject() {
    return secureblackbox_certificatemanager_get($this->handle, 45 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getCertRequestSubjectRDN() {
    return secureblackbox_certificatemanager_get($this->handle, 46 );
  }
 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  * @param    string   value
  */
  public function setCertRequestSubjectRDN($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether or not the signature on the request is valid and matches the public key contained in the request.
  *
  * @access   public
  */
  public function getCertRequestValid() {
    return secureblackbox_certificatemanager_get($this->handle, 47 );
  }


 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_certificatemanager_get($this->handle, 48 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 48, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_certificatemanager_get($this->handle, 49 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 49, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_certificatemanager_get($this->handle, 50 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_certificatemanager_get($this->handle, 51 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 51, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_certificatemanager_get($this->handle, 52 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_certificatemanager_get($this->handle, 53 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_certificatemanager_get($this->handle, 54 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_certificatemanager_get($this->handle, 55 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_certificatemanager_get($this->handle, 56 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_certificatemanager_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_certificatemanager_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatemanager_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Information about errors during certificate loading, saving or validation.
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
  * This event is fired when a decryption password is needed.
  *
  * @access   public
  * @param    array   Array of event parameters: password, cancel    
  */
  public function firePasswordNeeded($param) {
    return $param;
  }


}

?>
