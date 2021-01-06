<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - PGPReader Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_PGPReader {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_pgpreader_open(SECUREBLACKBOX_OEMKEY_517);
    secureblackbox_pgpreader_register_callback($this->handle, 1, array($this, 'fireEncryptionInfo'));
    secureblackbox_pgpreader_register_callback($this->handle, 2, array($this, 'fireError'));
    secureblackbox_pgpreader_register_callback($this->handle, 3, array($this, 'fireExternalDecrypt'));
    secureblackbox_pgpreader_register_callback($this->handle, 4, array($this, 'fireFileExtractionStart'));
    secureblackbox_pgpreader_register_callback($this->handle, 5, array($this, 'fireKeyPassphraseNeeded'));
    secureblackbox_pgpreader_register_callback($this->handle, 6, array($this, 'fireMultipleFilesFound'));
    secureblackbox_pgpreader_register_callback($this->handle, 7, array($this, 'firePassphraseNeeded'));
    secureblackbox_pgpreader_register_callback($this->handle, 8, array($this, 'fireProgress'));
    secureblackbox_pgpreader_register_callback($this->handle, 9, array($this, 'fireSigned'));
  }
  
  public function __destruct() {
    secureblackbox_pgpreader_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_pgpreader_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_pgpreader_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_pgpreader_do_config($this->handle, $configurationstring);
		$err = secureblackbox_pgpreader_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Decrypts and verifies a protected message.
  *
  * @access   public
  * @param    string    sourcebytes
  * @param    int    startindex
  * @param    int    count
  */
  public function doDecryptAndVerify($sourcebytes, $startindex, $count) {
    $ret = secureblackbox_pgpreader_do_decryptandverify($this->handle, $sourcebytes, $startindex, $count);
		$err = secureblackbox_pgpreader_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Decrypts and verifies a protected message.
  *
  * @access   public
  * @param    string    sourcefile
  * @param    string    destfile
  */
  public function doDecryptAndVerifyFile($sourcefile, $destfile) {
    $ret = secureblackbox_pgpreader_do_decryptandverifyfile($this->handle, $sourcefile, $destfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Decrypts and verifies a protected message.
  *
  * @access   public
  * @param    string    source
  */
  public function doDecryptAndVerifyString($source) {
    $ret = secureblackbox_pgpreader_do_decryptandverifystring($this->handle, $source);
		$err = secureblackbox_pgpreader_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Verifies a detached signature.
  *
  * @access   public
  * @param    string    sourcebytes
  * @param    string    signaturebytes
  */
  public function doVerifyDetached($sourcebytes, $signaturebytes) {
    $ret = secureblackbox_pgpreader_do_verifydetached($this->handle, $sourcebytes, $signaturebytes);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Verifies a detached signature.
  *
  * @access   public
  * @param    string    sourcefile
  * @param    string    signaturefile
  */
  public function doVerifyDetachedFile($sourcefile, $signaturefile) {
    $ret = secureblackbox_pgpreader_do_verifydetachedfile($this->handle, $sourcefile, $signaturefile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Verifies a detached signature.
  *
  * @access   public
  * @param    string    source
  * @param    string    signature
  */
  public function doVerifyDetachedString($source, $signature) {
    $ret = secureblackbox_pgpreader_do_verifydetachedstring($this->handle, $source, $signature);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_pgpreader_get($this->handle, 0);
  }
 /**
  * Indicates if the processed message had been base64-armored.
  *
  * @access   public
  */
  public function getArmored() {
    return secureblackbox_pgpreader_get($this->handle, 1 );
  }


 /**
  * Indicates if the processed message had been compressed.
  *
  * @access   public
  */
  public function getCompressed() {
    return secureblackbox_pgpreader_get($this->handle, 2 );
  }


 /**
  * The number of records in the DecryptingKey arrays.
  *
  * @access   public
  */
  public function getDecryptingKeyCount() {
    return secureblackbox_pgpreader_get($this->handle, 3 );
  }
 /**
  * The number of records in the DecryptingKey arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setDecryptingKeyCount($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getDecryptingKeyHandle($decryptingkeyindex) {
    return secureblackbox_pgpreader_get($this->handle, 4 , $decryptingkeyindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setDecryptingKeyHandle($decryptingkeyindex, $value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 4, $value , $decryptingkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The 20-byte fingerprint (hash value) of this key.
  *
  * @access   public
  */
  public function getDecryptingKeyKeyFP($decryptingkeyindex) {
    return secureblackbox_pgpreader_get($this->handle, 5 , $decryptingkeyindex);
  }


 /**
  * Contains a 8-byte key identifier.
  *
  * @access   public
  */
  public function getDecryptingKeyKeyID($decryptingkeyindex) {
    return secureblackbox_pgpreader_get($this->handle, 6 , $decryptingkeyindex);
  }


 /**
  * The key protection password.
  *
  * @access   public
  */
  public function getDecryptingKeyPassphrase($decryptingkeyindex) {
    return secureblackbox_pgpreader_get($this->handle, 7 , $decryptingkeyindex);
  }
 /**
  * The key protection password.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptingKeyPassphrase($decryptingkeyindex, $value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 7, $value , $decryptingkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to check whether the specified Passphrase is valid and can be used to unlock the secret key.
  *
  * @access   public
  */
  public function getDecryptingKeyPassphraseValid($decryptingkeyindex) {
    return secureblackbox_pgpreader_get($this->handle, 8 , $decryptingkeyindex);
  }


 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  */
  public function getDecryptingKeyUsername($decryptingkeyindex) {
    return secureblackbox_pgpreader_get($this->handle, 9 , $decryptingkeyindex);
  }
 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptingKeyUsername($decryptingkeyindex, $value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 9, $value , $decryptingkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_pgpreader_get($this->handle, 10 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_pgpreader_get($this->handle, 11 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_pgpreader_get($this->handle, 12 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_pgpreader_get($this->handle, 13 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_pgpreader_get($this->handle, 14 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_pgpreader_get($this->handle, 15 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_pgpreader_get($this->handle, 16 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_pgpreader_get($this->handle, 17 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_pgpreader_get($this->handle, 18 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies a passphrase for the decryption key.
  *
  * @access   public
  */
  public function getKeyPassphrase() {
    return secureblackbox_pgpreader_get($this->handle, 19 );
  }
 /**
  * Specifies a passphrase for the decryption key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyPassphrase($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 19, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies a message decryption password.
  *
  * @access   public
  */
  public function getPassphrase() {
    return secureblackbox_pgpreader_get($this->handle, 20 );
  }
 /**
  * Specifies a message decryption password.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassphrase($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 20, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Reports the number of bytes processed.
  *
  * @access   public
  */
  public function getProcessedLength() {
    return secureblackbox_pgpreader_get($this->handle, 21 );
  }


 /**
  * The number of records in the Signature arrays.
  *
  * @access   public
  */
  public function getSignatureCount() {
    return secureblackbox_pgpreader_get($this->handle, 22 );
  }


 /**
  * Specifies the type of a UserID signature.
  *
  * @access   public
  */
  public function getSignatureCertificationType($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 23 , $signatureindex);
  }


 /**
  * The time when the signature was created, in Universal Coordinated Time (UTC).
  *
  * @access   public
  */
  public function getSignatureCreationTime($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 24 , $signatureindex);
  }


 /**
  * Specifies signature expiration time, in seconds since its creation time (CreationTime).
  *
  * @access   public
  */
  public function getSignatureExpirationTime($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 25 , $signatureindex);
  }


 /**
  * Specifies whether a certification signature is "exportable", meaning it can be used by entities other than the signature's issuer.
  *
  * @access   public
  */
  public function getSignatureExportable($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 26 , $signatureindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSignatureHandle($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 27 , $signatureindex);
  }


 /**
  * Specifies the hash algorithm used in the signature.
  *
  * @access   public
  */
  public function getSignatureHashAlgorithm($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 28 , $signatureindex);
  }


 /**
  * The number of seconds after which the signed key will expire.
  *
  * @access   public
  */
  public function getSignatureKeyExpirationTime($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 29 , $signatureindex);
  }


 /**
  * Indicates whether signature uses PGP 2.
  *
  * @access   public
  */
  public function getSignatureLegacyFormat($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 30 , $signatureindex);
  }


 /**
  * Contains the URL of the signature policy.
  *
  * @access   public
  */
  public function getSignaturePolicyURL($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 31 , $signatureindex);
  }


 /**
  * Indicates whether the UserID covered by the signature is the main user id for this key.
  *
  * @access   public
  */
  public function getSignaturePrimaryUserID($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 32 , $signatureindex);
  }


 /**
  * Describes the reason why the key or the certificate was revoked.
  *
  * @access   public
  */
  public function getSignatureReasonForRevocation($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 33 , $signatureindex);
  }


 /**
  * Specifies whether the signature can be revoked.
  *
  * @access   public
  */
  public function getSignatureRevocable($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 34 , $signatureindex);
  }


 /**
  * Indicates whether or not the signature is a revocation signature.
  *
  * @access   public
  */
  public function getSignatureRevocation($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 35 , $signatureindex);
  }


 /**
  * Indicates the signature class.
  *
  * @access   public
  */
  public function getSignatureSignatureClass($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 36 , $signatureindex);
  }


 /**
  * Indicates the KeyID of the signing key.
  *
  * @access   public
  */
  public function getSignatureSignerKeyID($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 37 , $signatureindex);
  }


 /**
  * Indicates the UserID associated with the signing key.
  *
  * @access   public
  */
  public function getSignatureSignerUserID($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 38 , $signatureindex);
  }


 /**
  * Returns True if this signature is valid in a strict way (no compatibility relaxations).
  *
  * @access   public
  */
  public function getSignatureStrictlyValid($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 39 , $signatureindex);
  }


 /**
  * Indicates whether or not the signature is made over a text document.
  *
  * @access   public
  */
  public function getSignatureTextSignature($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 40 , $signatureindex);
  }


 /**
  * Specifies the amount of trust assigned by this signature.
  *
  * @access   public
  */
  public function getSignatureTrustAmount($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 41 , $signatureindex);
  }


 /**
  * The trust level assigned by this signature.
  *
  * @access   public
  */
  public function getSignatureTrustLevel($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 42 , $signatureindex);
  }


 /**
  * Whether the signature has been validated.
  *
  * @access   public
  */
  public function getSignatureValidated($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 43 , $signatureindex);
  }


 /**
  * Provides the validity status of the signature if the signature has been validated.
  *
  * @access   public
  */
  public function getSignatureValidity($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 44 , $signatureindex);
  }


 /**
  * Indicates the signature version.
  *
  * @access   public
  */
  public function getSignatureVersion($signatureindex) {
    return secureblackbox_pgpreader_get($this->handle, 45 , $signatureindex);
  }


 /**
  * The number of records in the VerifyingKey arrays.
  *
  * @access   public
  */
  public function getVerifyingKeyCount() {
    return secureblackbox_pgpreader_get($this->handle, 46 );
  }
 /**
  * The number of records in the VerifyingKey arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setVerifyingKeyCount($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getVerifyingKeyHandle($verifyingkeyindex) {
    return secureblackbox_pgpreader_get($this->handle, 47 , $verifyingkeyindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setVerifyingKeyHandle($verifyingkeyindex, $value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 47, $value , $verifyingkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The 20-byte fingerprint (hash value) of this key.
  *
  * @access   public
  */
  public function getVerifyingKeyKeyFP($verifyingkeyindex) {
    return secureblackbox_pgpreader_get($this->handle, 48 , $verifyingkeyindex);
  }


 /**
  * Contains a 8-byte key identifier.
  *
  * @access   public
  */
  public function getVerifyingKeyKeyID($verifyingkeyindex) {
    return secureblackbox_pgpreader_get($this->handle, 49 , $verifyingkeyindex);
  }


 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  */
  public function getVerifyingKeyUsername($verifyingkeyindex) {
    return secureblackbox_pgpreader_get($this->handle, 50 , $verifyingkeyindex);
  }
 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  * @param    string   value
  */
  public function setVerifyingKeyUsername($verifyingkeyindex, $value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 50, $value , $verifyingkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_pgpreader_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_pgpreader_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpreader_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Reports early information on encryption parameters.
  *
  * @access   public
  * @param    array   Array of event parameters: keyids, integrityprotected, passphraseused    
  */
  public function fireEncryptionInfo($param) {
    return $param;
  }

 /**
  * Information about errors during PGP decryption/verification.
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
  * Reports the beginning of file extraction process.
  *
  * @access   public
  * @param    array   Array of event parameters: filename, timestamp    
  */
  public function fireFileExtractionStart($param) {
    return $param;
  }

 /**
  * Requests a key protection password from the application.
  *
  * @access   public
  * @param    array   Array of event parameters: keyid, userid, mainkey, passphrase, skip    
  */
  public function fireKeyPassphraseNeeded($param) {
    return $param;
  }

 /**
  * Fires if the PGP message is recognized to contain multiple files.
  *
  * @access   public
  * @param    array   Array of event parameters: tarfilename, proceed    
  */
  public function fireMultipleFilesFound($param) {
    return $param;
  }

 /**
  * Requests a data protection password from the application.
  *
  * @access   public
  * @param    array   Array of event parameters: passphrase, skip    
  */
  public function firePassphraseNeeded($param) {
    return $param;
  }

 /**
  * Reports the progress of the decryption operation.
  *
  * @access   public
  * @param    array   Array of event parameters: current, total, cancel    
  */
  public function fireProgress($param) {
    return $param;
  }

 /**
  * Notifies the application about a signed message.
  *
  * @access   public
  * @param    array   Array of event parameters: keyids, signaturetype    
  */
  public function fireSigned($param) {
    return $param;
  }


}

?>
