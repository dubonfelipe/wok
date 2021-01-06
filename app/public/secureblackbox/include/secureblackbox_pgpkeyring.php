<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - PGPKeyring Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_PGPKeyring {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_pgpkeyring_open(SECUREBLACKBOX_OEMKEY_514);
    secureblackbox_pgpkeyring_register_callback($this->handle, 1, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_pgpkeyring_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_pgpkeyring_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_pgpkeyring_get_last_error_code($this->handle);
  }

 /**
  * Adds an existing key to the keyring.
  *
  * @access   public
  * @param    string    filename
  */
  public function doAddFromFile($filename) {
    $ret = secureblackbox_pgpkeyring_do_addfromfile($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Adds a collection of keys to the keyring.
  *
  * @access   public
  * @param    string    publickeyringfile
  * @param    string    secretkeyringfile
  */
  public function doAddFromFiles($publickeyringfile, $secretkeyringfile) {
    $ret = secureblackbox_pgpkeyring_do_addfromfiles($this->handle, $publickeyringfile, $secretkeyringfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Adds a pinned secret key to the keyring.
  *
  * @access   public
  */
  public function doAddPinned() {
    $ret = secureblackbox_pgpkeyring_do_addpinned($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes all the keys from the keyring.
  *
  * @access   public
  */
  public function doClear() {
    $ret = secureblackbox_pgpkeyring_do_clear($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Closes the keyring.
  *
  * @access   public
  */
  public function doClose() {
    $ret = secureblackbox_pgpkeyring_do_close($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
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
    $ret = secureblackbox_pgpkeyring_do_config($this->handle, $configurationstring);
		$err = secureblackbox_pgpkeyring_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Creates a new empty keyring.
  *
  * @access   public
  */
  public function doCreateNew() {
    $ret = secureblackbox_pgpkeyring_do_createnew($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads a keyring from disk.
  *
  * @access   public
  * @param    string    publickeyringfile
  * @param    string    secretkeyringfile
  */
  public function doLoad($publickeyringfile, $secretkeyringfile) {
    $ret = secureblackbox_pgpkeyring_do_load($this->handle, $publickeyringfile, $secretkeyringfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes key by its ID.
  *
  * @access   public
  * @param    string    keyid
  */
  public function doRemoveByID($keyid) {
    $ret = secureblackbox_pgpkeyring_do_removebyid($this->handle, $keyid);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes the specified public key from the keyring.
  *
  * @access   public
  * @param    int    index
  */
  public function doRemovePublic($index) {
    $ret = secureblackbox_pgpkeyring_do_removepublic($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes the specified secret key from the keyring.
  *
  * @access   public
  * @param    int    index
  */
  public function doRemoveSecret($index) {
    $ret = secureblackbox_pgpkeyring_do_removesecret($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Saves the keyring to disk.
  *
  * @access   public
  * @param    string    publickeyringfile
  * @param    string    secretkeyringfile
  */
  public function doSave($publickeyringfile, $secretkeyringfile) {
    $ret = secureblackbox_pgpkeyring_do_save($this->handle, $publickeyringfile, $secretkeyringfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Filters a selection of keys from the keyring using a template.
  *
  * @access   public
  * @param    string    filter
  * @param    boolean    secretonly
  * @param    int    maxcount
  */
  public function doSelect($filter, $secretonly, $maxcount) {
    $ret = secureblackbox_pgpkeyring_do_select($this->handle, $filter, $secretonly, $maxcount);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_pgpkeyring_get($this->handle, 0);
  }
 /**
  * Indicates if the keyring is in an opened state.
  *
  * @access   public
  */
  public function getOpened() {
    return secureblackbox_pgpkeyring_get($this->handle, 1 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getPinnedKeyHandle() {
    return secureblackbox_pgpkeyring_get($this->handle, 2 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setPinnedKeyHandle($value) {
    $ret = secureblackbox_pgpkeyring_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the PublicKey arrays.
  *
  * @access   public
  */
  public function getPublicKeyCount() {
    return secureblackbox_pgpkeyring_get($this->handle, 3 );
  }


 /**
  * Indicates the key length in bits.
  *
  * @access   public
  */
  public function getPublicKeyBitsInKey($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 4 , $publickeyindex);
  }


 /**
  * Returns True if this key can be used for encryption.
  *
  * @access   public
  */
  public function getPublicKeyCanEncrypt($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 5 , $publickeyindex);
  }


 /**
  * Returns True if this key can be used for signing.
  *
  * @access   public
  */
  public function getPublicKeyCanSign($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 6 , $publickeyindex);
  }


 /**
  * Indicates the elliptic curve associated with a EC key.
  *
  * @access   public
  */
  public function getPublicKeyCurve($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 7 , $publickeyindex);
  }


 /**
  * Enables or disables this key for use in encryption or signing operation.
  *
  * @access   public
  */
  public function getPublicKeyEnabled($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 8 , $publickeyindex);
  }


 /**
  * Indicates the symmetric algorithm used to encrypt the secret key.
  *
  * @access   public
  */
  public function getPublicKeyEncryptionAlgorithm($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 9 , $publickeyindex);
  }


 /**
  * Indicates key expiration time in whole days from its generation moment.
  *
  * @access   public
  */
  public function getPublicKeyExpires($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 10 , $publickeyindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getPublicKeyHandle($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 11 , $publickeyindex);
  }


 /**
  * Specifies the hash algorithm associated with the key.
  *
  * @access   public
  */
  public function getPublicKeyHashAlgorithm($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 12 , $publickeyindex);
  }


 /**
  * Returns True if this key is a public key, and False otherwise.
  *
  * @access   public
  */
  public function getPublicKeyIsPublic($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 13 , $publickeyindex);
  }


 /**
  * Returns True if this key is a secret key, and False otherwise.
  *
  * @access   public
  */
  public function getPublicKeyIsSecret($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 14 , $publickeyindex);
  }


 /**
  * Returns True if this key is a subkey of another key, and False otherwise.
  *
  * @access   public
  */
  public function getPublicKeyIsSubkey($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 15 , $publickeyindex);
  }


 /**
  * The 20-byte fingerprint (hash value) of this key.
  *
  * @access   public
  */
  public function getPublicKeyKeyFP($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 16 , $publickeyindex);
  }


 /**
  * Specifies the hash algorithm used with DSA keys to calculate signatures.
  *
  * @access   public
  */
  public function getPublicKeyKeyHashAlgorithm($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 17 , $publickeyindex);
  }


 /**
  * Contains a 8-byte key identifier.
  *
  * @access   public
  */
  public function getPublicKeyKeyID($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 18 , $publickeyindex);
  }


 /**
  * Indicates whether legacy (PGP 2.
  *
  * @access   public
  */
  public function getPublicKeyOldPacketFormat($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 19 , $publickeyindex);
  }


 /**
  * The key protection password.
  *
  * @access   public
  */
  public function getPublicKeyPassphrase($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 20 , $publickeyindex);
  }


 /**
  * Use this property to check whether the specified Passphrase is valid and can be used to unlock the secret key.
  *
  * @access   public
  */
  public function getPublicKeyPassphraseValid($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 21 , $publickeyindex);
  }


 /**
  * If this key is a subkey ( IsSubkey returns True), this property contains the identifier of the subkey's primary key.
  *
  * @access   public
  */
  public function getPublicKeyPrimaryKeyID($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 22 , $publickeyindex);
  }


 /**
  * Specifies the level of protection applied to the secret key.
  *
  * @access   public
  */
  public function getPublicKeyProtection($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 23 , $publickeyindex);
  }


 /**
  * Specifies the asymmetric algorithm of the key.
  *
  * @access   public
  */
  public function getPublicKeyPublicKeyAlgorithm($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 24 , $publickeyindex);
  }


 /**
  * The length of the DSA Q (legitimate range: 160-512).
  *
  * @access   public
  */
  public function getPublicKeyQBits($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 25 , $publickeyindex);
  }


 /**
  * Returns True if the key has been revoked, and False otherwise.
  *
  * @access   public
  */
  public function getPublicKeyRevoked($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 26 , $publickeyindex);
  }


 /**
  * The 20-byte fingerprint (hash value) of this key's subkey.
  *
  * @access   public
  */
  public function getPublicKeySubkeyFP($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 27 , $publickeyindex);
  }


 /**
  * Contains a 8-byte subkey identifier.
  *
  * @access   public
  */
  public function getPublicKeySubkeyID($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 28 , $publickeyindex);
  }


 /**
  * Use this property to check the time the key was generated.
  *
  * @access   public
  */
  public function getPublicKeyTimestamp($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 29 , $publickeyindex);
  }


 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  */
  public function getPublicKeyUsername($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 30 , $publickeyindex);
  }


 /**
  * Indicates the validity status of the key.
  *
  * @access   public
  */
  public function getPublicKeyValid($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 31 , $publickeyindex);
  }


 /**
  * Indicates the key version.
  *
  * @access   public
  */
  public function getPublicKeyVersion($publickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 32 , $publickeyindex);
  }


 /**
  * The number of records in the SecretKey arrays.
  *
  * @access   public
  */
  public function getSecretKeyCount() {
    return secureblackbox_pgpkeyring_get($this->handle, 33 );
  }


 /**
  * Indicates the key length in bits.
  *
  * @access   public
  */
  public function getSecretKeyBitsInKey($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 34 , $secretkeyindex);
  }


 /**
  * Returns True if this key can be used for encryption.
  *
  * @access   public
  */
  public function getSecretKeyCanEncrypt($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 35 , $secretkeyindex);
  }


 /**
  * Returns True if this key can be used for signing.
  *
  * @access   public
  */
  public function getSecretKeyCanSign($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 36 , $secretkeyindex);
  }


 /**
  * Indicates the elliptic curve associated with a EC key.
  *
  * @access   public
  */
  public function getSecretKeyCurve($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 37 , $secretkeyindex);
  }


 /**
  * Enables or disables this key for use in encryption or signing operation.
  *
  * @access   public
  */
  public function getSecretKeyEnabled($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 38 , $secretkeyindex);
  }


 /**
  * Indicates the symmetric algorithm used to encrypt the secret key.
  *
  * @access   public
  */
  public function getSecretKeyEncryptionAlgorithm($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 39 , $secretkeyindex);
  }


 /**
  * Indicates key expiration time in whole days from its generation moment.
  *
  * @access   public
  */
  public function getSecretKeyExpires($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 40 , $secretkeyindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSecretKeyHandle($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 41 , $secretkeyindex);
  }


 /**
  * Specifies the hash algorithm associated with the key.
  *
  * @access   public
  */
  public function getSecretKeyHashAlgorithm($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 42 , $secretkeyindex);
  }


 /**
  * Returns True if this key is a public key, and False otherwise.
  *
  * @access   public
  */
  public function getSecretKeyIsPublic($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 43 , $secretkeyindex);
  }


 /**
  * Returns True if this key is a secret key, and False otherwise.
  *
  * @access   public
  */
  public function getSecretKeyIsSecret($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 44 , $secretkeyindex);
  }


 /**
  * Returns True if this key is a subkey of another key, and False otherwise.
  *
  * @access   public
  */
  public function getSecretKeyIsSubkey($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 45 , $secretkeyindex);
  }


 /**
  * The 20-byte fingerprint (hash value) of this key.
  *
  * @access   public
  */
  public function getSecretKeyKeyFP($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 46 , $secretkeyindex);
  }


 /**
  * Specifies the hash algorithm used with DSA keys to calculate signatures.
  *
  * @access   public
  */
  public function getSecretKeyKeyHashAlgorithm($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 47 , $secretkeyindex);
  }


 /**
  * Contains a 8-byte key identifier.
  *
  * @access   public
  */
  public function getSecretKeyKeyID($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 48 , $secretkeyindex);
  }


 /**
  * Indicates whether legacy (PGP 2.
  *
  * @access   public
  */
  public function getSecretKeyOldPacketFormat($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 49 , $secretkeyindex);
  }


 /**
  * The key protection password.
  *
  * @access   public
  */
  public function getSecretKeyPassphrase($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 50 , $secretkeyindex);
  }


 /**
  * Use this property to check whether the specified Passphrase is valid and can be used to unlock the secret key.
  *
  * @access   public
  */
  public function getSecretKeyPassphraseValid($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 51 , $secretkeyindex);
  }


 /**
  * If this key is a subkey ( IsSubkey returns True), this property contains the identifier of the subkey's primary key.
  *
  * @access   public
  */
  public function getSecretKeyPrimaryKeyID($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 52 , $secretkeyindex);
  }


 /**
  * Specifies the level of protection applied to the secret key.
  *
  * @access   public
  */
  public function getSecretKeyProtection($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 53 , $secretkeyindex);
  }


 /**
  * Specifies the asymmetric algorithm of the key.
  *
  * @access   public
  */
  public function getSecretKeyPublicKeyAlgorithm($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 54 , $secretkeyindex);
  }


 /**
  * The length of the DSA Q (legitimate range: 160-512).
  *
  * @access   public
  */
  public function getSecretKeyQBits($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 55 , $secretkeyindex);
  }


 /**
  * Returns True if the key has been revoked, and False otherwise.
  *
  * @access   public
  */
  public function getSecretKeyRevoked($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 56 , $secretkeyindex);
  }


 /**
  * The 20-byte fingerprint (hash value) of this key's subkey.
  *
  * @access   public
  */
  public function getSecretKeySubkeyFP($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 57 , $secretkeyindex);
  }


 /**
  * Contains a 8-byte subkey identifier.
  *
  * @access   public
  */
  public function getSecretKeySubkeyID($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 58 , $secretkeyindex);
  }


 /**
  * Use this property to check the time the key was generated.
  *
  * @access   public
  */
  public function getSecretKeyTimestamp($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 59 , $secretkeyindex);
  }


 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  */
  public function getSecretKeyUsername($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 60 , $secretkeyindex);
  }


 /**
  * Indicates the validity status of the key.
  *
  * @access   public
  */
  public function getSecretKeyValid($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 61 , $secretkeyindex);
  }


 /**
  * Indicates the key version.
  *
  * @access   public
  */
  public function getSecretKeyVersion($secretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 62 , $secretkeyindex);
  }


 /**
  * The number of records in the SelectedPublicKey arrays.
  *
  * @access   public
  */
  public function getSelectedPublicKeyCount() {
    return secureblackbox_pgpkeyring_get($this->handle, 63 );
  }


 /**
  * Indicates the key length in bits.
  *
  * @access   public
  */
  public function getSelectedPublicKeyBitsInKey($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 64 , $selectedpublickeyindex);
  }


 /**
  * Returns True if this key can be used for encryption.
  *
  * @access   public
  */
  public function getSelectedPublicKeyCanEncrypt($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 65 , $selectedpublickeyindex);
  }


 /**
  * Returns True if this key can be used for signing.
  *
  * @access   public
  */
  public function getSelectedPublicKeyCanSign($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 66 , $selectedpublickeyindex);
  }


 /**
  * Indicates the elliptic curve associated with a EC key.
  *
  * @access   public
  */
  public function getSelectedPublicKeyCurve($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 67 , $selectedpublickeyindex);
  }


 /**
  * Enables or disables this key for use in encryption or signing operation.
  *
  * @access   public
  */
  public function getSelectedPublicKeyEnabled($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 68 , $selectedpublickeyindex);
  }


 /**
  * Indicates the symmetric algorithm used to encrypt the secret key.
  *
  * @access   public
  */
  public function getSelectedPublicKeyEncryptionAlgorithm($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 69 , $selectedpublickeyindex);
  }


 /**
  * Indicates key expiration time in whole days from its generation moment.
  *
  * @access   public
  */
  public function getSelectedPublicKeyExpires($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 70 , $selectedpublickeyindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSelectedPublicKeyHandle($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 71 , $selectedpublickeyindex);
  }


 /**
  * Specifies the hash algorithm associated with the key.
  *
  * @access   public
  */
  public function getSelectedPublicKeyHashAlgorithm($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 72 , $selectedpublickeyindex);
  }


 /**
  * Returns True if this key is a public key, and False otherwise.
  *
  * @access   public
  */
  public function getSelectedPublicKeyIsPublic($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 73 , $selectedpublickeyindex);
  }


 /**
  * Returns True if this key is a secret key, and False otherwise.
  *
  * @access   public
  */
  public function getSelectedPublicKeyIsSecret($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 74 , $selectedpublickeyindex);
  }


 /**
  * Returns True if this key is a subkey of another key, and False otherwise.
  *
  * @access   public
  */
  public function getSelectedPublicKeyIsSubkey($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 75 , $selectedpublickeyindex);
  }


 /**
  * The 20-byte fingerprint (hash value) of this key.
  *
  * @access   public
  */
  public function getSelectedPublicKeyKeyFP($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 76 , $selectedpublickeyindex);
  }


 /**
  * Specifies the hash algorithm used with DSA keys to calculate signatures.
  *
  * @access   public
  */
  public function getSelectedPublicKeyKeyHashAlgorithm($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 77 , $selectedpublickeyindex);
  }


 /**
  * Contains a 8-byte key identifier.
  *
  * @access   public
  */
  public function getSelectedPublicKeyKeyID($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 78 , $selectedpublickeyindex);
  }


 /**
  * Indicates whether legacy (PGP 2.
  *
  * @access   public
  */
  public function getSelectedPublicKeyOldPacketFormat($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 79 , $selectedpublickeyindex);
  }


 /**
  * The key protection password.
  *
  * @access   public
  */
  public function getSelectedPublicKeyPassphrase($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 80 , $selectedpublickeyindex);
  }


 /**
  * Use this property to check whether the specified Passphrase is valid and can be used to unlock the secret key.
  *
  * @access   public
  */
  public function getSelectedPublicKeyPassphraseValid($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 81 , $selectedpublickeyindex);
  }


 /**
  * If this key is a subkey ( IsSubkey returns True), this property contains the identifier of the subkey's primary key.
  *
  * @access   public
  */
  public function getSelectedPublicKeyPrimaryKeyID($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 82 , $selectedpublickeyindex);
  }


 /**
  * Specifies the level of protection applied to the secret key.
  *
  * @access   public
  */
  public function getSelectedPublicKeyProtection($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 83 , $selectedpublickeyindex);
  }


 /**
  * Specifies the asymmetric algorithm of the key.
  *
  * @access   public
  */
  public function getSelectedPublicKeyPublicKeyAlgorithm($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 84 , $selectedpublickeyindex);
  }


 /**
  * The length of the DSA Q (legitimate range: 160-512).
  *
  * @access   public
  */
  public function getSelectedPublicKeyQBits($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 85 , $selectedpublickeyindex);
  }


 /**
  * Returns True if the key has been revoked, and False otherwise.
  *
  * @access   public
  */
  public function getSelectedPublicKeyRevoked($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 86 , $selectedpublickeyindex);
  }


 /**
  * The 20-byte fingerprint (hash value) of this key's subkey.
  *
  * @access   public
  */
  public function getSelectedPublicKeySubkeyFP($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 87 , $selectedpublickeyindex);
  }


 /**
  * Contains a 8-byte subkey identifier.
  *
  * @access   public
  */
  public function getSelectedPublicKeySubkeyID($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 88 , $selectedpublickeyindex);
  }


 /**
  * Use this property to check the time the key was generated.
  *
  * @access   public
  */
  public function getSelectedPublicKeyTimestamp($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 89 , $selectedpublickeyindex);
  }


 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  */
  public function getSelectedPublicKeyUsername($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 90 , $selectedpublickeyindex);
  }


 /**
  * Indicates the validity status of the key.
  *
  * @access   public
  */
  public function getSelectedPublicKeyValid($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 91 , $selectedpublickeyindex);
  }


 /**
  * Indicates the key version.
  *
  * @access   public
  */
  public function getSelectedPublicKeyVersion($selectedpublickeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 92 , $selectedpublickeyindex);
  }


 /**
  * The number of records in the SelectedSecretKey arrays.
  *
  * @access   public
  */
  public function getSelectedSecretKeyCount() {
    return secureblackbox_pgpkeyring_get($this->handle, 93 );
  }


 /**
  * Indicates the key length in bits.
  *
  * @access   public
  */
  public function getSelectedSecretKeyBitsInKey($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 94 , $selectedsecretkeyindex);
  }


 /**
  * Returns True if this key can be used for encryption.
  *
  * @access   public
  */
  public function getSelectedSecretKeyCanEncrypt($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 95 , $selectedsecretkeyindex);
  }


 /**
  * Returns True if this key can be used for signing.
  *
  * @access   public
  */
  public function getSelectedSecretKeyCanSign($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 96 , $selectedsecretkeyindex);
  }


 /**
  * Indicates the elliptic curve associated with a EC key.
  *
  * @access   public
  */
  public function getSelectedSecretKeyCurve($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 97 , $selectedsecretkeyindex);
  }


 /**
  * Enables or disables this key for use in encryption or signing operation.
  *
  * @access   public
  */
  public function getSelectedSecretKeyEnabled($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 98 , $selectedsecretkeyindex);
  }


 /**
  * Indicates the symmetric algorithm used to encrypt the secret key.
  *
  * @access   public
  */
  public function getSelectedSecretKeyEncryptionAlgorithm($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 99 , $selectedsecretkeyindex);
  }


 /**
  * Indicates key expiration time in whole days from its generation moment.
  *
  * @access   public
  */
  public function getSelectedSecretKeyExpires($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 100 , $selectedsecretkeyindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSelectedSecretKeyHandle($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 101 , $selectedsecretkeyindex);
  }


 /**
  * Specifies the hash algorithm associated with the key.
  *
  * @access   public
  */
  public function getSelectedSecretKeyHashAlgorithm($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 102 , $selectedsecretkeyindex);
  }


 /**
  * Returns True if this key is a public key, and False otherwise.
  *
  * @access   public
  */
  public function getSelectedSecretKeyIsPublic($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 103 , $selectedsecretkeyindex);
  }


 /**
  * Returns True if this key is a secret key, and False otherwise.
  *
  * @access   public
  */
  public function getSelectedSecretKeyIsSecret($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 104 , $selectedsecretkeyindex);
  }


 /**
  * Returns True if this key is a subkey of another key, and False otherwise.
  *
  * @access   public
  */
  public function getSelectedSecretKeyIsSubkey($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 105 , $selectedsecretkeyindex);
  }


 /**
  * The 20-byte fingerprint (hash value) of this key.
  *
  * @access   public
  */
  public function getSelectedSecretKeyKeyFP($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 106 , $selectedsecretkeyindex);
  }


 /**
  * Specifies the hash algorithm used with DSA keys to calculate signatures.
  *
  * @access   public
  */
  public function getSelectedSecretKeyKeyHashAlgorithm($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 107 , $selectedsecretkeyindex);
  }


 /**
  * Contains a 8-byte key identifier.
  *
  * @access   public
  */
  public function getSelectedSecretKeyKeyID($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 108 , $selectedsecretkeyindex);
  }


 /**
  * Indicates whether legacy (PGP 2.
  *
  * @access   public
  */
  public function getSelectedSecretKeyOldPacketFormat($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 109 , $selectedsecretkeyindex);
  }


 /**
  * The key protection password.
  *
  * @access   public
  */
  public function getSelectedSecretKeyPassphrase($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 110 , $selectedsecretkeyindex);
  }


 /**
  * Use this property to check whether the specified Passphrase is valid and can be used to unlock the secret key.
  *
  * @access   public
  */
  public function getSelectedSecretKeyPassphraseValid($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 111 , $selectedsecretkeyindex);
  }


 /**
  * If this key is a subkey ( IsSubkey returns True), this property contains the identifier of the subkey's primary key.
  *
  * @access   public
  */
  public function getSelectedSecretKeyPrimaryKeyID($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 112 , $selectedsecretkeyindex);
  }


 /**
  * Specifies the level of protection applied to the secret key.
  *
  * @access   public
  */
  public function getSelectedSecretKeyProtection($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 113 , $selectedsecretkeyindex);
  }


 /**
  * Specifies the asymmetric algorithm of the key.
  *
  * @access   public
  */
  public function getSelectedSecretKeyPublicKeyAlgorithm($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 114 , $selectedsecretkeyindex);
  }


 /**
  * The length of the DSA Q (legitimate range: 160-512).
  *
  * @access   public
  */
  public function getSelectedSecretKeyQBits($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 115 , $selectedsecretkeyindex);
  }


 /**
  * Returns True if the key has been revoked, and False otherwise.
  *
  * @access   public
  */
  public function getSelectedSecretKeyRevoked($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 116 , $selectedsecretkeyindex);
  }


 /**
  * The 20-byte fingerprint (hash value) of this key's subkey.
  *
  * @access   public
  */
  public function getSelectedSecretKeySubkeyFP($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 117 , $selectedsecretkeyindex);
  }


 /**
  * Contains a 8-byte subkey identifier.
  *
  * @access   public
  */
  public function getSelectedSecretKeySubkeyID($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 118 , $selectedsecretkeyindex);
  }


 /**
  * Use this property to check the time the key was generated.
  *
  * @access   public
  */
  public function getSelectedSecretKeyTimestamp($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 119 , $selectedsecretkeyindex);
  }


 /**
  * Specifies the name of the user bound to this key.
  *
  * @access   public
  */
  public function getSelectedSecretKeyUsername($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 120 , $selectedsecretkeyindex);
  }


 /**
  * Indicates the validity status of the key.
  *
  * @access   public
  */
  public function getSelectedSecretKeyValid($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 121 , $selectedsecretkeyindex);
  }


 /**
  * Indicates the key version.
  *
  * @access   public
  */
  public function getSelectedSecretKeyVersion($selectedsecretkeyindex) {
    return secureblackbox_pgpkeyring_get($this->handle, 122 , $selectedsecretkeyindex);
  }




  public function getRuntimeLicense() {
    return secureblackbox_pgpkeyring_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_pgpkeyring_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_pgpkeyring_get_last_error($this->handle));
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
