<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - PGPWriter Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_PGPWriter {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_pgpwriter_open(SECUREBLACKBOX_OEMKEY_516);
    secureblackbox_pgpwriter_register_callback($this->handle, 1, array($this, 'fireError'));
    secureblackbox_pgpwriter_register_callback($this->handle, 2, array($this, 'fireExternalSign'));
    secureblackbox_pgpwriter_register_callback($this->handle, 3, array($this, 'fireKeyPassphraseNeeded'));
    secureblackbox_pgpwriter_register_callback($this->handle, 4, array($this, 'fireProgress'));
  }
  
  public function __destruct() {
    secureblackbox_pgpwriter_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_pgpwriter_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_pgpwriter_get_last_error_code($this->handle);
  }

 /**
  * Creates a cleartext signature over the provided data.
  *
  * @access   public
  * @param    string    buffer
  * @param    int    startindex
  * @param    int    count
  */
  public function doClearTextSign($buffer, $startindex, $count) {
    $ret = secureblackbox_pgpwriter_do_cleartextsign($this->handle, $buffer, $startindex, $count);
		$err = secureblackbox_pgpwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Creates a cleartext signature over the provided data.
  *
  * @access   public
  * @param    string    sourcefile
  * @param    string    destfile
  */
  public function doClearTextSignFile($sourcefile, $destfile) {
    $ret = secureblackbox_pgpwriter_do_cleartextsignfile($this->handle, $sourcefile, $destfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Creates a cleartext signature over the provided data.
  *
  * @access   public
  * @param    string    s
  */
  public function doClearTextSignString($s) {
    $ret = secureblackbox_pgpwriter_do_cleartextsignstring($this->handle, $s);
		$err = secureblackbox_pgpwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
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
    $ret = secureblackbox_pgpwriter_do_config($this->handle, $configurationstring);
		$err = secureblackbox_pgpwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts a buffer.
  *
  * @access   public
  * @param    string    buffer
  * @param    int    startindex
  * @param    int    count
  */
  public function doEncrypt($buffer, $startindex, $count) {
    $ret = secureblackbox_pgpwriter_do_encrypt($this->handle, $buffer, $startindex, $count);
		$err = secureblackbox_pgpwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts and signs a buffer.
  *
  * @access   public
  * @param    string    buffer
  * @param    int    startindex
  * @param    int    count
  */
  public function doEncryptAndSign($buffer, $startindex, $count) {
    $ret = secureblackbox_pgpwriter_do_encryptandsign($this->handle, $buffer, $startindex, $count);
		$err = secureblackbox_pgpwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts and signs a file.
  *
  * @access   public
  * @param    string    sourcefile
  * @param    string    destfile
  */
  public function doEncryptAndSignFile($sourcefile, $destfile) {
    $ret = secureblackbox_pgpwriter_do_encryptandsignfile($this->handle, $sourcefile, $destfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts and signs a folder.
  *
  * @access   public
  * @param    string    asourcefolder
  * @param    string    adestfile
  */
  public function doEncryptAndSignFolder($asourcefolder, $adestfile) {
    $ret = secureblackbox_pgpwriter_do_encryptandsignfolder($this->handle, $asourcefolder, $adestfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts and signs a string.
  *
  * @access   public
  * @param    string    s
  */
  public function doEncryptAndSignString($s) {
    $ret = secureblackbox_pgpwriter_do_encryptandsignstring($this->handle, $s);
		$err = secureblackbox_pgpwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts a file.
  *
  * @access   public
  * @param    string    sourcefile
  * @param    string    destfile
  */
  public function doEncryptFile($sourcefile, $destfile) {
    $ret = secureblackbox_pgpwriter_do_encryptfile($this->handle, $sourcefile, $destfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts a folder.
  *
  * @access   public
  * @param    string    sourcefolder
  * @param    string    destfile
  */
  public function doEncryptFolder($sourcefolder, $destfile) {
    $ret = secureblackbox_pgpwriter_do_encryptfolder($this->handle, $sourcefolder, $destfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Encrypts a string.
  *
  * @access   public
  * @param    string    s
  */
  public function doEncryptString($s) {
    $ret = secureblackbox_pgpwriter_do_encryptstring($this->handle, $s);
		$err = secureblackbox_pgpwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs a buffer.
  *
  * @access   public
  * @param    string    buffer
  * @param    int    startindex
  * @param    int    count
  * @param    boolean    detached
  */
  public function doSign($buffer, $startindex, $count, $detached) {
    $ret = secureblackbox_pgpwriter_do_sign($this->handle, $buffer, $startindex, $count, $detached);
		$err = secureblackbox_pgpwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs a file.
  *
  * @access   public
  * @param    string    sourcefile
  * @param    string    destfile
  * @param    boolean    detached
  */
  public function doSignFile($sourcefile, $destfile, $detached) {
    $ret = secureblackbox_pgpwriter_do_signfile($this->handle, $sourcefile, $destfile, $detached);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs a folder.
  *
  * @access   public
  * @param    string    sourcefolder
  * @param    string    destfile
  */
  public function doSignFolder($sourcefolder, $destfile) {
    $ret = secureblackbox_pgpwriter_do_signfolder($this->handle, $sourcefolder, $destfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs a string.
  *
  * @access   public
  * @param    string    s
  * @param    boolean    detached
  */
  public function doSignString($s, $detached) {
    $ret = secureblackbox_pgpwriter_do_signstring($this->handle, $s, $detached);
		$err = secureblackbox_pgpwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_pgpwriter_get($this->handle, 0);
  }
 /**
  * Specifies whether the data should be armored.
  *
  * @access   public
  */
  public function getArmor() {
    return secureblackbox_pgpwriter_get($this->handle, 1 );
  }
 /**
  * Specifies whether the data should be armored.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setArmor($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A boundary to put around the base64 armor.
  *
  * @access   public
  */
  public function getArmorBoundary() {
    return secureblackbox_pgpwriter_get($this->handle, 2 );
  }
 /**
  * A boundary to put around the base64 armor.
  *
  * @access   public
  * @param    string   value
  */
  public function setArmorBoundary($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional headers to include with the armored message.
  *
  * @access   public
  */
  public function getArmorHeaders() {
    return secureblackbox_pgpwriter_get($this->handle, 3 );
  }
 /**
  * Additional headers to include with the armored message.
  *
  * @access   public
  * @param    string   value
  */
  public function setArmorHeaders($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to compress the data before encrypting it.
  *
  * @access   public
  */
  public function getCompress() {
    return secureblackbox_pgpwriter_get($this->handle, 4 );
  }
 /**
  * Whether to compress the data before encrypting it.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setCompress($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The compression algorithm to use.
  *
  * @access   public
  */
  public function getCompressionAlgorithm() {
    return secureblackbox_pgpwriter_get($this->handle, 5 );
  }
 /**
  * The compression algorithm to use.
  *
  * @access   public
  * @param    string   value
  */
  public function setCompressionAlgorithm($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The compression level to use.
  *
  * @access   public
  */
  public function getCompressionLevel() {
    return secureblackbox_pgpwriter_get($this->handle, 6 );
  }
 /**
  * The compression level to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setCompressionLevel($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the EncryptingKey arrays.
  *
  * @access   public
  */
  public function getEncryptingKeyCount() {
    return secureblackbox_pgpwriter_get($this->handle, 7 );
  }
 /**
  * The number of records in the EncryptingKey arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setEncryptingKeyCount($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getEncryptingKeyHandle($encryptingkeyindex) {
    return secureblackbox_pgpwriter_get($this->handle, 8 , $encryptingkeyindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setEncryptingKeyHandle($encryptingkeyindex, $value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 8, $value , $encryptingkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The 20-byte fingerprint (hash value) of this key.
  *
  * @access   public
  */
  public function getEncryptingKeyKeyFP($encryptingkeyindex) {
    return secureblackbox_pgpwriter_get($this->handle, 9 , $encryptingkeyindex);
  }


 /**
  * Contains a 8-byte key identifier.
  *
  * @access   public
  */
  public function getEncryptingKeyKeyID($encryptingkeyindex) {
    return secureblackbox_pgpwriter_get($this->handle, 10 , $encryptingkeyindex);
  }


 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  */
  public function getEncryptingKeyUsername($encryptingkeyindex) {
    return secureblackbox_pgpwriter_get($this->handle, 11 , $encryptingkeyindex);
  }
 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptingKeyUsername($encryptingkeyindex, $value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 11, $value , $encryptingkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A symmetric algorithm to use for data encryption.
  *
  * @access   public
  */
  public function getEncryptionAlgorithm() {
    return secureblackbox_pgpwriter_get($this->handle, 12 );
  }
 /**
  * A symmetric algorithm to use for data encryption.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncryptionAlgorithm($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_pgpwriter_get($this->handle, 13 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_pgpwriter_get($this->handle, 14 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_pgpwriter_get($this->handle, 15 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_pgpwriter_get($this->handle, 16 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_pgpwriter_get($this->handle, 17 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_pgpwriter_get($this->handle, 18 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_pgpwriter_get($this->handle, 19 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 19, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_pgpwriter_get($this->handle, 20 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 20, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_pgpwriter_get($this->handle, 21 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the name of the file being protected.
  *
  * @access   public
  */
  public function getFilename() {
    return secureblackbox_pgpwriter_get($this->handle, 22 );
  }
 /**
  * Specifies the name of the file being protected.
  *
  * @access   public
  * @param    string   value
  */
  public function setFilename($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 22, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The hash algorithm to use for signing.
  *
  * @access   public
  */
  public function getHashAlgorithm() {
    return secureblackbox_pgpwriter_get($this->handle, 23 );
  }
 /**
  * The hash algorithm to use for signing.
  *
  * @access   public
  * @param    string   value
  */
  public function setHashAlgorithm($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 23, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether the input data is text.
  *
  * @access   public
  */
  public function getInputIsText() {
    return secureblackbox_pgpwriter_get($this->handle, 24 );
  }
 /**
  * Whether the input data is text.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setInputIsText($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 24, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The encryption password.
  *
  * @access   public
  */
  public function getPassphrase() {
    return secureblackbox_pgpwriter_get($this->handle, 25 );
  }
 /**
  * The encryption password.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassphrase($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 25, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies a password protection level.
  *
  * @access   public
  */
  public function getProtection() {
    return secureblackbox_pgpwriter_get($this->handle, 26 );
  }
 /**
  * Specifies a password protection level.
  *
  * @access   public
  * @param    int   value
  */
  public function setProtection($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the SigningKey arrays.
  *
  * @access   public
  */
  public function getSigningKeyCount() {
    return secureblackbox_pgpwriter_get($this->handle, 27 );
  }
 /**
  * The number of records in the SigningKey arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigningKeyCount($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 27, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningKeyHandle($signingkeyindex) {
    return secureblackbox_pgpwriter_get($this->handle, 28 , $signingkeyindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningKeyHandle($signingkeyindex, $value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 28, $value , $signingkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The 20-byte fingerprint (hash value) of this key.
  *
  * @access   public
  */
  public function getSigningKeyKeyFP($signingkeyindex) {
    return secureblackbox_pgpwriter_get($this->handle, 29 , $signingkeyindex);
  }


 /**
  * Contains a 8-byte key identifier.
  *
  * @access   public
  */
  public function getSigningKeyKeyID($signingkeyindex) {
    return secureblackbox_pgpwriter_get($this->handle, 30 , $signingkeyindex);
  }


 /**
  * The key protection password.
  *
  * @access   public
  */
  public function getSigningKeyPassphrase($signingkeyindex) {
    return secureblackbox_pgpwriter_get($this->handle, 31 , $signingkeyindex);
  }
 /**
  * The key protection password.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigningKeyPassphrase($signingkeyindex, $value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 31, $value , $signingkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to check whether the specified Passphrase is valid and can be used to unlock the secret key.
  *
  * @access   public
  */
  public function getSigningKeyPassphraseValid($signingkeyindex) {
    return secureblackbox_pgpwriter_get($this->handle, 32 , $signingkeyindex);
  }


 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  */
  public function getSigningKeyUsername($signingkeyindex) {
    return secureblackbox_pgpwriter_get($this->handle, 33 , $signingkeyindex);
  }
 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  * @param    string   value
  */
  public function setSigningKeyUsername($signingkeyindex, $value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 33, $value , $signingkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The date and time of the last modification of the protected data file (in UTC).
  *
  * @access   public
  */
  public function getTimestamp() {
    return secureblackbox_pgpwriter_get($this->handle, 34 );
  }
 /**
  * The date and time of the last modification of the protected data file (in UTC).
  *
  * @access   public
  * @param    string   value
  */
  public function setTimestamp($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_pgpwriter_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_pgpwriter_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpwriter_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Information about errors during PGP encryption.
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
  * Requests a key protection password from the application.
  *
  * @access   public
  * @param    array   Array of event parameters: keyid, userid, mainkey, passphrase, skip    
  */
  public function fireKeyPassphraseNeeded($param) {
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


}

?>
