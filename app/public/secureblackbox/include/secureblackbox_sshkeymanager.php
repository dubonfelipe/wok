<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - SSHKeyManager Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_SSHKeyManager {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_sshkeymanager_open(SECUREBLACKBOX_OEMKEY_603);
    secureblackbox_sshkeymanager_register_callback($this->handle, 1, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_sshkeymanager_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_sshkeymanager_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_sshkeymanager_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_sshkeymanager_do_config($this->handle, $configurationstring);
		$err = secureblackbox_sshkeymanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sshkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Writes the key to a memory buffer.
  *
  * @access   public
  * @param    int    keytype
  * @param    string    password
  */
  public function doExportToBuffer($keytype, $password) {
    $ret = secureblackbox_sshkeymanager_do_exporttobuffer($this->handle, $keytype, $password);
		$err = secureblackbox_sshkeymanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sshkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Writes key to file.
  *
  * @access   public
  * @param    int    keytype
  * @param    string    path
  * @param    string    password
  */
  public function doExportToFile($keytype, $path, $password) {
    $ret = secureblackbox_sshkeymanager_do_exporttofile($this->handle, $keytype, $path, $password);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sshkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads key from buffer.
  *
  * @access   public
  * @param    string    bytes
  * @param    int    startindex
  * @param    int    count
  * @param    string    password
  */
  public function doImportFromBuffer($bytes, $startindex, $count, $password) {
    $ret = secureblackbox_sshkeymanager_do_importfrombuffer($this->handle, $bytes, $startindex, $count, $password);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sshkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads key from file.
  *
  * @access   public
  * @param    string    path
  * @param    string    password
  */
  public function doImportFromFile($path, $password) {
    $ret = secureblackbox_sshkeymanager_do_importfromfile($this->handle, $path, $password);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sshkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_sshkeymanager_get($this->handle, 0);
  }
 /**
  * Specifies the key algorithm.
  *
  * @access   public
  */
  public function getKeyAlgorithm() {
    return secureblackbox_sshkeymanager_get($this->handle, 1 );
  }


 /**
  * The number of bits in the key: the more the better, 2048 or 4096 are typical values.
  *
  * @access   public
  */
  public function getKeyBits() {
    return secureblackbox_sshkeymanager_get($this->handle, 2 );
  }


 /**
  * The comment for the public key.
  *
  * @access   public
  */
  public function getKeyComment() {
    return secureblackbox_sshkeymanager_get($this->handle, 3 );
  }
 /**
  * The comment for the public key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyComment($value) {
    $ret = secureblackbox_sshkeymanager_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sshkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the elliptical curve when EC cryptography is used.
  *
  * @access   public
  */
  public function getKeyCurve() {
    return secureblackbox_sshkeymanager_get($this->handle, 4 );
  }


 /**
  * The G (Generator) parameter of the DSS signature key.
  *
  * @access   public
  */
  public function getKeyDSSG() {
    return secureblackbox_sshkeymanager_get($this->handle, 5 );
  }


 /**
  * The P (Prime) parameter of the DSS signature key.
  *
  * @access   public
  */
  public function getKeyDSSP() {
    return secureblackbox_sshkeymanager_get($this->handle, 6 );
  }


 /**
  * The Q (Prime Factor) parameter of the DSS signature key.
  *
  * @access   public
  */
  public function getKeyDSSQ() {
    return secureblackbox_sshkeymanager_get($this->handle, 7 );
  }


 /**
  * The X (Private key) parameter of the DSS signature key.
  *
  * @access   public
  */
  public function getKeyDSSX() {
    return secureblackbox_sshkeymanager_get($this->handle, 8 );
  }


 /**
  * The Y (Public key) parameter of the DSS signature key.
  *
  * @access   public
  */
  public function getKeyDSSY() {
    return secureblackbox_sshkeymanager_get($this->handle, 9 );
  }


 /**
  * The value of the secret key (the order of the public key, D) if elliptic curve (EC) cryptography is used.
  *
  * @access   public
  */
  public function getKeyECCD() {
    return secureblackbox_sshkeymanager_get($this->handle, 10 );
  }


 /**
  * The value of the X coordinate of the public key if elliptic curve (EC) cryptography is used.
  *
  * @access   public
  */
  public function getKeyECCQX() {
    return secureblackbox_sshkeymanager_get($this->handle, 11 );
  }


 /**
  * The value of the Y coordinate of the public key if elliptic curve (EC) cryptography is used.
  *
  * @access   public
  */
  public function getKeyECCQY() {
    return secureblackbox_sshkeymanager_get($this->handle, 12 );
  }


 /**
  * The value of the private key if EdDSA (Edwards-curve Digital Signature Algorithm) algorithm is used.
  *
  * @access   public
  */
  public function getKeyEdPrivate() {
    return secureblackbox_sshkeymanager_get($this->handle, 13 );
  }


 /**
  * The value of the public key if EdDSA (Edwards-curve Digital Signature Algorithm) algorithm is used.
  *
  * @access   public
  */
  public function getKeyEdPublic() {
    return secureblackbox_sshkeymanager_get($this->handle, 14 );
  }


 /**
  * Contains the MD5 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getKeyFingerprintMD5() {
    return secureblackbox_sshkeymanager_get($this->handle, 15 );
  }


 /**
  * Contains the SHA-1 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getKeyFingerprintSHA1() {
    return secureblackbox_sshkeymanager_get($this->handle, 16 );
  }


 /**
  * Contains the SHA-256 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getKeyFingerprintSHA256() {
    return secureblackbox_sshkeymanager_get($this->handle, 17 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKeyHandle() {
    return secureblackbox_sshkeymanager_get($this->handle, 18 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKeyHandle($value) {
    $ret = secureblackbox_sshkeymanager_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sshkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether the key is extractable (e.
  *
  * @access   public
  */
  public function getKeyIsExtractable() {
    return secureblackbox_sshkeymanager_get($this->handle, 19 );
  }


 /**
  * Whether this key is a private key or not.
  *
  * @access   public
  */
  public function getKeyIsPrivate() {
    return secureblackbox_sshkeymanager_get($this->handle, 20 );
  }


 /**
  * Whether this key is a public key or not.
  *
  * @access   public
  */
  public function getKeyIsPublic() {
    return secureblackbox_sshkeymanager_get($this->handle, 21 );
  }


 /**
  * Returns the number of iterations of the Key Derivation Function (KDF) used to generate this key.
  *
  * @access   public
  */
  public function getKeyKDFRounds() {
    return secureblackbox_sshkeymanager_get($this->handle, 22 );
  }


 /**
  * The salt value used by the Key Derivation Function (KDF) to generate this key.
  *
  * @access   public
  */
  public function getKeyKDFSalt() {
    return secureblackbox_sshkeymanager_get($this->handle, 23 );
  }


 /**
  * Specifies the format in which the key is stored.
  *
  * @access   public
  */
  public function getKeyKeyFormat() {
    return secureblackbox_sshkeymanager_get($this->handle, 24 );
  }


 /**
  * Specifies the key protection algorithm.
  *
  * @access   public
  */
  public function getKeyKeyProtectionAlgorithm() {
    return secureblackbox_sshkeymanager_get($this->handle, 25 );
  }


 /**
  * Returns the e parameter (public exponent) of the RSA key.
  *
  * @access   public
  */
  public function getKeyRSAExponent() {
    return secureblackbox_sshkeymanager_get($this->handle, 26 );
  }


 /**
  * Returns the iqmp parameter of the RSA key.
  *
  * @access   public
  */
  public function getKeyRSAIQMP() {
    return secureblackbox_sshkeymanager_get($this->handle, 27 );
  }


 /**
  * Returns the m parameter (public modulus) of the RSA key.
  *
  * @access   public
  */
  public function getKeyRSAModulus() {
    return secureblackbox_sshkeymanager_get($this->handle, 28 );
  }


 /**
  * Returns the p parameter (first factor of the common modulus n) of the RSA key.
  *
  * @access   public
  */
  public function getKeyRSAP() {
    return secureblackbox_sshkeymanager_get($this->handle, 29 );
  }


 /**
  * Returns the d parameter (private exponent) of the RSA key.
  *
  * @access   public
  */
  public function getKeyRSAPrivateExponent() {
    return secureblackbox_sshkeymanager_get($this->handle, 30 );
  }


 /**
  * Returns the q parameter (second factor of the common modulus n) of the RSA key.
  *
  * @access   public
  */
  public function getKeyRSAQ() {
    return secureblackbox_sshkeymanager_get($this->handle, 31 );
  }


 /**
  * Specifies the public key owner (subject).
  *
  * @access   public
  */
  public function getKeySubject() {
    return secureblackbox_sshkeymanager_get($this->handle, 32 );
  }
 /**
  * Specifies the public key owner (subject).
  *
  * @access   public
  * @param    string   value
  */
  public function setKeySubject($value) {
    $ret = secureblackbox_sshkeymanager_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sshkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_sshkeymanager_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_sshkeymanager_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sshkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Information about errors during SSH key management.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }


}

?>
