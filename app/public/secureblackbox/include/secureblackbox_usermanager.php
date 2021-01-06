<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - UserManager Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_UserManager {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_usermanager_open(SECUREBLACKBOX_OEMKEY_606);
    secureblackbox_usermanager_register_callback($this->handle, 1, array($this, 'fireError'));
  }
  
  public function __destruct() {
    secureblackbox_usermanager_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_usermanager_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_usermanager_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_usermanager_do_config($this->handle, $configurationstring);
		$err = secureblackbox_usermanager_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads a user database from a file.
  *
  * @access   public
  * @param    string    filename
  * @param    string    password
  */
  public function doLoad($filename, $password) {
    $ret = secureblackbox_usermanager_do_load($this->handle, $filename, $password);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Imports the settings of the current user from a file.
  *
  * @access   public
  * @param    int    index
  * @param    string    path
  */
  public function doLoadUser($index, $path) {
    $ret = secureblackbox_usermanager_do_loaduser($this->handle, $index, $path);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Saves the user database to a file.
  *
  * @access   public
  * @param    string    filename
  * @param    string    password
  */
  public function doSave($filename, $password) {
    $ret = secureblackbox_usermanager_do_save($this->handle, $filename, $password);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Saves the settings of the current user to a file.
  *
  * @access   public
  * @param    int    index
  * @param    string    path
  */
  public function doSaveUser($index, $path) {
    $ret = secureblackbox_usermanager_do_saveuser($this->handle, $index, $path);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_usermanager_get($this->handle, 0);
  }
 /**
  * The number of records in the User arrays.
  *
  * @access   public
  */
  public function getUserCount() {
    return secureblackbox_usermanager_get($this->handle, 1 );
  }
 /**
  * The number of records in the User arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserCount($value) {
    $ret = secureblackbox_usermanager_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's Associated Data when SSH AEAD (Authenticated Encryption with Associated Data) algorithm is used.
  *
  * @access   public
  */
  public function getUserAssociatedData($userindex) {
    return secureblackbox_usermanager_get($this->handle, 2 , $userindex);
  }
 /**
  * Contains the user's Associated Data when SSH AEAD (Authenticated Encryption with Associated Data) algorithm is used.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserAssociatedData($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 2, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Base path for this user in the server's file system.
  *
  * @access   public
  */
  public function getUserBasePath($userindex) {
    return secureblackbox_usermanager_get($this->handle, 3 , $userindex);
  }
 /**
  * Base path for this user in the server's file system.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserBasePath($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 3, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's certificate.
  *
  * @access   public
  */
  public function getUserCert($userindex) {
    return secureblackbox_usermanager_get($this->handle, 4 , $userindex);
  }
 /**
  * Contains the user's certificate.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserCert($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 4, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains uninterpreted user-defined data that should be associated with the user account, such as comments or custom settings.
  *
  * @access   public
  */
  public function getUserData($userindex) {
    return secureblackbox_usermanager_get($this->handle, 5 , $userindex);
  }
 /**
  * Contains uninterpreted user-defined data that should be associated with the user account, such as comments or custom settings.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserData($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 5, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getUserHandle($userindex) {
    return secureblackbox_usermanager_get($this->handle, 6 , $userindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setUserHandle($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 6, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm used to generate TOTP (Time-based One-Time Passwords) passwords for this user.
  *
  * @access   public
  */
  public function getUserHashAlgorithm($userindex) {
    return secureblackbox_usermanager_get($this->handle, 7 , $userindex);
  }
 /**
  * Specifies the hash algorithm used to generate TOTP (Time-based One-Time Passwords) passwords for this user.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserHashAlgorithm($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 7, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the incoming speed limit for this user.
  *
  * @access   public
  */
  public function getUserIncomingSpeedLimit($userindex) {
    return secureblackbox_usermanager_get($this->handle, 8 , $userindex);
  }
 /**
  * Specifies the incoming speed limit for this user.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserIncomingSpeedLimit($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 8, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The algorithm used to generate one-time passwords (OTP) for this user, either HOTP (Hash-based OTP) or TOTP (Time-based OTP).
  *
  * @access   public
  */
  public function getUserOtpAlgorithm($userindex) {
    return secureblackbox_usermanager_get($this->handle, 9 , $userindex);
  }
 /**
  * The algorithm used to generate one-time passwords (OTP) for this user, either HOTP (Hash-based OTP) or TOTP (Time-based OTP).
  *
  * @access   public
  * @param    int   value
  */
  public function setUserOtpAlgorithm($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 9, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The user's time interval (TOTP) or Counter (HOTP).
  *
  * @access   public
  */
  public function getUserOtpValue($userindex) {
    return secureblackbox_usermanager_get($this->handle, 10 , $userindex);
  }
 /**
  * The user's time interval (TOTP) or Counter (HOTP).
  *
  * @access   public
  * @param    int   value
  */
  public function setUserOtpValue($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 10, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the outgoing speed limit for this user.
  *
  * @access   public
  */
  public function getUserOutgoingSpeedLimit($userindex) {
    return secureblackbox_usermanager_get($this->handle, 11 , $userindex);
  }
 /**
  * Specifies the outgoing speed limit for this user.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserOutgoingSpeedLimit($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 11, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The user's authentication password.
  *
  * @access   public
  */
  public function getUserPassword($userindex) {
    return secureblackbox_usermanager_get($this->handle, 12 , $userindex);
  }
 /**
  * The user's authentication password.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserPassword($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 12, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the length of the user's OTP password.
  *
  * @access   public
  */
  public function getUserPasswordLen($userindex) {
    return secureblackbox_usermanager_get($this->handle, 13 , $userindex);
  }
 /**
  * Specifies the length of the user's OTP password.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserPasswordLen($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 13, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's secret key, which is essentially a shared secret between the client and server.
  *
  * @access   public
  */
  public function getUserSharedSecret($userindex) {
    return secureblackbox_usermanager_get($this->handle, 14 , $userindex);
  }
 /**
  * Contains the user's secret key, which is essentially a shared secret between the client and server.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserSharedSecret($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 14, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's SSH key.
  *
  * @access   public
  */
  public function getUserSSHKey($userindex) {
    return secureblackbox_usermanager_get($this->handle, 15 , $userindex);
  }
 /**
  * Contains the user's SSH key.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserSSHKey($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 15, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The registered name (login) of the user.
  *
  * @access   public
  */
  public function getUserUsername($userindex) {
    return secureblackbox_usermanager_get($this->handle, 16 , $userindex);
  }
 /**
  * The registered name (login) of the user.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserUsername($userindex, $value) {
    $ret = secureblackbox_usermanager_set($this->handle, 16, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_usermanager_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_usermanager_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_usermanager_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Reports error information during its work.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }


}

?>
