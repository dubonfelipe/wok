<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - MessageDecryptor Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_MessageDecryptor {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_messagedecryptor_open(SECUREBLACKBOX_OEMKEY_280);
    secureblackbox_messagedecryptor_register_callback($this->handle, 1, array($this, 'fireError'));
    secureblackbox_messagedecryptor_register_callback($this->handle, 2, array($this, 'fireExternalDecrypt'));
    secureblackbox_messagedecryptor_register_callback($this->handle, 3, array($this, 'fireRecipientFound'));
  }
  
  public function __destruct() {
    secureblackbox_messagedecryptor_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_messagedecryptor_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_messagedecryptor_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_messagedecryptor_do_config($this->handle, $configurationstring);
		$err = secureblackbox_messagedecryptor_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Attempts to decrypt an encrypted PKCS#7 message.
  *
  * @access   public
  */
  public function doDecrypt() {
    $ret = secureblackbox_messagedecryptor_do_decrypt($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_messagedecryptor_get($this->handle, 0);
  }
 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCertificateBytes() {
    return secureblackbox_messagedecryptor_get($this->handle, 1 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getCertificateCA() {
    return secureblackbox_messagedecryptor_get($this->handle, 2 );
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getCertificateCAKeyID() {
    return secureblackbox_messagedecryptor_get($this->handle, 3 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getCertificateCRLDistributionPoints() {
    return secureblackbox_messagedecryptor_get($this->handle, 4 );
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getCertificateCurve() {
    return secureblackbox_messagedecryptor_get($this->handle, 5 );
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getCertificateFingerprint() {
    return secureblackbox_messagedecryptor_get($this->handle, 6 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getCertificateFriendlyName() {
    return secureblackbox_messagedecryptor_get($this->handle, 7 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCertificateHandle() {
    return secureblackbox_messagedecryptor_get($this->handle, 8 );
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getCertificateHashAlgorithm() {
    return secureblackbox_messagedecryptor_get($this->handle, 9 );
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getCertificateIssuer() {
    return secureblackbox_messagedecryptor_get($this->handle, 10 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getCertificateIssuerRDN() {
    return secureblackbox_messagedecryptor_get($this->handle, 11 );
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getCertificateKeyAlgorithm() {
    return secureblackbox_messagedecryptor_get($this->handle, 12 );
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getCertificateKeyBits() {
    return secureblackbox_messagedecryptor_get($this->handle, 13 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getCertificateKeyFingerprint() {
    return secureblackbox_messagedecryptor_get($this->handle, 14 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getCertificateKeyUsage() {
    return secureblackbox_messagedecryptor_get($this->handle, 15 );
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getCertificateKeyValid() {
    return secureblackbox_messagedecryptor_get($this->handle, 16 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getCertificateOCSPLocations() {
    return secureblackbox_messagedecryptor_get($this->handle, 17 );
  }


 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getCertificateOrigin() {
    return secureblackbox_messagedecryptor_get($this->handle, 18 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getCertificatePolicyIDs() {
    return secureblackbox_messagedecryptor_get($this->handle, 19 );
  }


 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getCertificatePrivateKeyBytes() {
    return secureblackbox_messagedecryptor_get($this->handle, 20 );
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getCertificatePrivateKeyExists() {
    return secureblackbox_messagedecryptor_get($this->handle, 21 );
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getCertificatePrivateKeyExtractable() {
    return secureblackbox_messagedecryptor_get($this->handle, 22 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getCertificatePublicKeyBytes() {
    return secureblackbox_messagedecryptor_get($this->handle, 23 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getCertificateSelfSigned() {
    return secureblackbox_messagedecryptor_get($this->handle, 24 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getCertificateSerialNumber() {
    return secureblackbox_messagedecryptor_get($this->handle, 25 );
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getCertificateSigAlgorithm() {
    return secureblackbox_messagedecryptor_get($this->handle, 26 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getCertificateSubject() {
    return secureblackbox_messagedecryptor_get($this->handle, 27 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getCertificateSubjectKeyID() {
    return secureblackbox_messagedecryptor_get($this->handle, 28 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getCertificateSubjectRDN() {
    return secureblackbox_messagedecryptor_get($this->handle, 29 );
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getCertificateValidFrom() {
    return secureblackbox_messagedecryptor_get($this->handle, 30 );
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getCertificateValidTo() {
    return secureblackbox_messagedecryptor_get($this->handle, 31 );
  }


 /**
  * The number of records in the Cert arrays.
  *
  * @access   public
  */
  public function getCertCount() {
    return secureblackbox_messagedecryptor_get($this->handle, 32 );
  }
 /**
  * The number of records in the Cert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setCertCount($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCertBytes($certindex) {
    return secureblackbox_messagedecryptor_get($this->handle, 33 , $certindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCertHandle($certindex) {
    return secureblackbox_messagedecryptor_get($this->handle, 34 , $certindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setCertHandle($certindex, $value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 34, $value , $certindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The symmetric cipher that was used to encrypt the data.
  *
  * @access   public
  */
  public function getEncryptionAlgorithm() {
    return secureblackbox_messagedecryptor_get($this->handle, 35 );
  }


 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_messagedecryptor_get($this->handle, 36 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_messagedecryptor_get($this->handle, 37 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 37, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_messagedecryptor_get($this->handle, 38 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 38, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_messagedecryptor_get($this->handle, 39 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 39, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_messagedecryptor_get($this->handle, 40 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_messagedecryptor_get($this->handle, 41 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_messagedecryptor_get($this->handle, 42 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 42, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_messagedecryptor_get($this->handle, 43 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 43, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_messagedecryptor_get($this->handle, 44 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 44, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Path to the file containing the encrypted message.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_messagedecryptor_get($this->handle, 45 );
  }
 /**
  * Path to the file containing the encrypted message.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 45, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The symmetric key to use for decryption.
  *
  * @access   public
  */
  public function getKey() {
    return secureblackbox_messagedecryptor_get($this->handle, 46 );
  }
 /**
  * The symmetric key to use for decryption.
  *
  * @access   public
  * @param    string   value
  */
  public function setKey($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Path to the file to save the decrypted data to.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_messagedecryptor_get($this->handle, 47 );
  }
 /**
  * Path to the file to save the decrypted data to.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_messagedecryptor_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_messagedecryptor_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_messagedecryptor_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Information about errors during PKCS#7 message decryption.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }

 /**
  * Handles remote or external decryption.
  *
  * @access   public
  * @param    array   Array of event parameters: operationid, algorithm, pars, encrypteddata, data    
  */
  public function fireExternalDecrypt($param) {
    return $param;
  }

 /**
  * Fires to report a message addressee parameters.
  *
  * @access   public
  * @param    array   Array of event parameters: issuerrdn, serialnumber, subjectkeyid, certfound    
  */
  public function fireRecipientFound($param) {
    return $param;
  }


}

?>
