<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - PGPKeyManager Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_PGPKeyManager {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_pgpkeymanager_open(SECUREBLACKBOX_OEMKEY_515);
    secureblackbox_pgpkeymanager_register_callback($this->handle, 1, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_pgpkeymanager_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_pgpkeymanager_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_pgpkeymanager_get_last_error_code($this->handle);
  }

 /**
  * Adds a new subkey to the Key.
  *
  * @access   public
  * @param    int    bits
  * @param    string    algorithm
  * @param    int    expires
  */
  public function doAddSubkey($bits, $algorithm, $expires) {
    $ret = secureblackbox_pgpkeymanager_do_addsubkey($this->handle, $bits, $algorithm, $expires);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Binds a new UserID to the Key.
  *
  * @access   public
  * @param    string    username
  */
  public function doBindUser($username) {
    $ret = secureblackbox_pgpkeymanager_do_binduser($this->handle, $username);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Changes the password of the secret key.
  *
  * @access   public
  * @param    string    oldpassphrase
  * @param    string    newpassphrase
  */
  public function doChangePassphrase($oldpassphrase, $newpassphrase) {
    $ret = secureblackbox_pgpkeymanager_do_changepassphrase($this->handle, $oldpassphrase, $newpassphrase);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Changes the protection level of the secret key.
  *
  * @access   public
  * @param    string    oldpassphrase
  * @param    string    newpassphrase
  * @param    int    prottype
  * @param    string    encalgorithm
  * @param    string    hashalgorithm
  */
  public function doChangeProtection($oldpassphrase, $newpassphrase, $prottype, $encalgorithm, $hashalgorithm) {
    $ret = secureblackbox_pgpkeymanager_do_changeprotection($this->handle, $oldpassphrase, $newpassphrase, $prottype, $encalgorithm, $hashalgorithm);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Checks if the password matches the secret key.
  *
  * @access   public
  * @param    string    passphrase
  */
  public function doCheckPassphrase($passphrase) {
    $ret = secureblackbox_pgpkeymanager_do_checkpassphrase($this->handle, $passphrase);
		$err = 0;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
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
    $ret = secureblackbox_pgpkeymanager_do_config($this->handle, $configurationstring);
		$err = secureblackbox_pgpkeymanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Serializes the key to a byte array.
  *
  * @access   public
  */
  public function doExportKey() {
    $ret = secureblackbox_pgpkeymanager_do_exportkey($this->handle);
		$err = secureblackbox_pgpkeymanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Exports the public key to a byte array.
  *
  * @access   public
  */
  public function doExportPublicKey() {
    $ret = secureblackbox_pgpkeymanager_do_exportpublickey($this->handle);
		$err = secureblackbox_pgpkeymanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Exports the public key to a file.
  *
  * @access   public
  * @param    string    filename
  */
  public function doExportPublicToFile($filename) {
    $ret = secureblackbox_pgpkeymanager_do_exportpublictofile($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Exports the key to a file.
  *
  * @access   public
  * @param    string    filename
  */
  public function doExportToFile($filename) {
    $ret = secureblackbox_pgpkeymanager_do_exporttofile($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates a new key pair.
  *
  * @access   public
  */
  public function doGenerate() {
    $ret = secureblackbox_pgpkeymanager_do_generate($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates new key in the old format.
  *
  * @access   public
  * @param    string    username
  * @param    int    bits
  * @param    string    password
  * @param    int    expires
  */
  public function doGenerateLegacy($username, $bits, $password, $expires) {
    $ret = secureblackbox_pgpkeymanager_do_generatelegacy($this->handle, $username, $bits, $password, $expires);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Generates new keypair.
  *
  * @access   public
  * @param    string    username
  * @param    string    keyalgorithm
  * @param    int    keybits
  * @param    string    subkeyalgorithm
  * @param    int    subkeybits
  * @param    string    password
  * @param    int    expires
  */
  public function doGeneratePair($username, $keyalgorithm, $keybits, $subkeyalgorithm, $subkeybits, $password, $expires) {
    $ret = secureblackbox_pgpkeymanager_do_generatepair($this->handle, $username, $keyalgorithm, $keybits, $subkeyalgorithm, $subkeybits, $password, $expires);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads a key from a file.
  *
  * @access   public
  * @param    string    filename
  */
  public function doImportFromFile($filename) {
    $ret = secureblackbox_pgpkeymanager_do_importfromfile($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads a key from a byte array.
  *
  * @access   public
  * @param    string    data
  */
  public function doImportKey($data) {
    $ret = secureblackbox_pgpkeymanager_do_importkey($this->handle, $data);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes the specified subkey from the key.
  *
  * @access   public
  * @param    int    index
  */
  public function doRemoveSubkey($index) {
    $ret = secureblackbox_pgpkeymanager_do_removesubkey($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Unbinds the specified user from the key.
  *
  * @access   public
  * @param    int    index
  */
  public function doRemoveUser($index) {
    $ret = secureblackbox_pgpkeymanager_do_removeuser($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Revokes the key.
  *
  * @access   public
  */
  public function doRevokeKey() {
    $ret = secureblackbox_pgpkeymanager_do_revokekey($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Revokes the key's subkey.
  *
  * @access   public
  * @param    int    index
  */
  public function doRevokeSubkey($index) {
    $ret = secureblackbox_pgpkeymanager_do_revokesubkey($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Revokes the key's subkey.
  *
  * @access   public
  * @param    string    keyid
  */
  public function doRevokeSubkeybyID($keyid) {
    $ret = secureblackbox_pgpkeymanager_do_revokesubkeybyid($this->handle, $keyid);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Revokes a user certification.
  *
  * @access   public
  * @param    int    index
  */
  public function doRevokeUser($index) {
    $ret = secureblackbox_pgpkeymanager_do_revokeuser($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Revokes a user certification.
  *
  * @access   public
  * @param    string    username
  */
  public function doRevokeUserByName($username) {
    $ret = secureblackbox_pgpkeymanager_do_revokeuserbyname($this->handle, $username);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Validates the key.
  *
  * @access   public
  */
  public function doValidate() {
    $ret = secureblackbox_pgpkeymanager_do_validate($this->handle);
		$err = secureblackbox_pgpkeymanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_pgpkeymanager_get($this->handle, 0);
  }
 /**
  * Indicates the key length in bits.
  *
  * @access   public
  */
  public function getKeyBitsInKey() {
    return secureblackbox_pgpkeymanager_get($this->handle, 1 );
  }
 /**
  * Indicates the key length in bits.
  *
  * @access   public
  * @param    int   value
  */
  public function setKeyBitsInKey($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the elliptic curve associated with a EC key.
  *
  * @access   public
  */
  public function getKeyCurve() {
    return secureblackbox_pgpkeymanager_get($this->handle, 2 );
  }
 /**
  * Indicates the elliptic curve associated with a EC key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyCurve($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the symmetric algorithm used to encrypt the secret key.
  *
  * @access   public
  */
  public function getKeyEncryptionAlgorithm() {
    return secureblackbox_pgpkeymanager_get($this->handle, 3 );
  }
 /**
  * Indicates the symmetric algorithm used to encrypt the secret key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyEncryptionAlgorithm($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates key expiration time in whole days from its generation moment.
  *
  * @access   public
  */
  public function getKeyExpires() {
    return secureblackbox_pgpkeymanager_get($this->handle, 4 );
  }
 /**
  * Indicates key expiration time in whole days from its generation moment.
  *
  * @access   public
  * @param    int   value
  */
  public function setKeyExpires($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKeyHandle() {
    return secureblackbox_pgpkeymanager_get($this->handle, 5 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKeyHandle($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm associated with the key.
  *
  * @access   public
  */
  public function getKeyHashAlgorithm() {
    return secureblackbox_pgpkeymanager_get($this->handle, 6 );
  }
 /**
  * Specifies the hash algorithm associated with the key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyHashAlgorithm($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether legacy (PGP 2.
  *
  * @access   public
  */
  public function getKeyOldPacketFormat() {
    return secureblackbox_pgpkeymanager_get($this->handle, 7 );
  }
 /**
  * Indicates whether legacy (PGP 2.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setKeyOldPacketFormat($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The key protection password.
  *
  * @access   public
  */
  public function getKeyPassphrase() {
    return secureblackbox_pgpkeymanager_get($this->handle, 8 );
  }
 /**
  * The key protection password.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyPassphrase($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 8, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the level of protection applied to the secret key.
  *
  * @access   public
  */
  public function getKeyProtection() {
    return secureblackbox_pgpkeymanager_get($this->handle, 9 );
  }
 /**
  * Specifies the level of protection applied to the secret key.
  *
  * @access   public
  * @param    int   value
  */
  public function setKeyProtection($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asymmetric algorithm of the key.
  *
  * @access   public
  */
  public function getKeyPublicKeyAlgorithm() {
    return secureblackbox_pgpkeymanager_get($this->handle, 10 );
  }
 /**
  * Specifies the asymmetric algorithm of the key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyPublicKeyAlgorithm($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The length of the DSA Q (legitimate range: 160-512).
  *
  * @access   public
  */
  public function getKeyQBits() {
    return secureblackbox_pgpkeymanager_get($this->handle, 11 );
  }
 /**
  * The length of the DSA Q (legitimate range: 160-512).
  *
  * @access   public
  * @param    int   value
  */
  public function setKeyQBits($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  */
  public function getKeyUsername() {
    return secureblackbox_pgpkeymanager_get($this->handle, 12 );
  }
 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  * @param    string   value
  */
  public function setKeyUsername($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_pgpkeymanager_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_pgpkeymanager_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeymanager_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Information about errors during PGP key management.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }


}

?>
