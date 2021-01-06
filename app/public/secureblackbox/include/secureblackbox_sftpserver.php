<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - SFTPServer Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_SFTPServer {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_sftpserver_open(SECUREBLACKBOX_OEMKEY_800);
    secureblackbox_sftpserver_register_callback($this->handle, 1, array($this, 'fireAccept'));
    secureblackbox_sftpserver_register_callback($this->handle, 2, array($this, 'fireAfterCreateDirectory'));
    secureblackbox_sftpserver_register_callback($this->handle, 3, array($this, 'fireAfterRemove'));
    secureblackbox_sftpserver_register_callback($this->handle, 4, array($this, 'fireAfterRenameFile'));
    secureblackbox_sftpserver_register_callback($this->handle, 5, array($this, 'fireAfterRequestAttributes'));
    secureblackbox_sftpserver_register_callback($this->handle, 6, array($this, 'fireAfterSetAttributes'));
    secureblackbox_sftpserver_register_callback($this->handle, 7, array($this, 'fireAuthAttempt'));
    secureblackbox_sftpserver_register_callback($this->handle, 8, array($this, 'fireAuthFailed'));
    secureblackbox_sftpserver_register_callback($this->handle, 9, array($this, 'fireAuthPassword'));
    secureblackbox_sftpserver_register_callback($this->handle, 10, array($this, 'fireAuthPublicKey'));
    secureblackbox_sftpserver_register_callback($this->handle, 11, array($this, 'fireAuthSucceeded'));
    secureblackbox_sftpserver_register_callback($this->handle, 12, array($this, 'fireBeforeCreateDirectory'));
    secureblackbox_sftpserver_register_callback($this->handle, 13, array($this, 'fireBeforeDownloadFile'));
    secureblackbox_sftpserver_register_callback($this->handle, 14, array($this, 'fireBeforeFind'));
    secureblackbox_sftpserver_register_callback($this->handle, 15, array($this, 'fireBeforeRemove'));
    secureblackbox_sftpserver_register_callback($this->handle, 16, array($this, 'fireBeforeRenameFile'));
    secureblackbox_sftpserver_register_callback($this->handle, 17, array($this, 'fireBeforeRequestAttributes'));
    secureblackbox_sftpserver_register_callback($this->handle, 18, array($this, 'fireBeforeSetAttributes'));
    secureblackbox_sftpserver_register_callback($this->handle, 19, array($this, 'fireBeforeUploadFile'));
    secureblackbox_sftpserver_register_callback($this->handle, 20, array($this, 'fireCloseFile'));
    secureblackbox_sftpserver_register_callback($this->handle, 21, array($this, 'fireConnect'));
    secureblackbox_sftpserver_register_callback($this->handle, 22, array($this, 'fireCreateDirectory'));
    secureblackbox_sftpserver_register_callback($this->handle, 23, array($this, 'fireDisconnect'));
    secureblackbox_sftpserver_register_callback($this->handle, 24, array($this, 'fireError'));
    secureblackbox_sftpserver_register_callback($this->handle, 25, array($this, 'fireExternalSign'));
    secureblackbox_sftpserver_register_callback($this->handle, 26, array($this, 'fireFindClose'));
    secureblackbox_sftpserver_register_callback($this->handle, 27, array($this, 'fireFindFirst'));
    secureblackbox_sftpserver_register_callback($this->handle, 28, array($this, 'fireFindNext'));
    secureblackbox_sftpserver_register_callback($this->handle, 29, array($this, 'fireOpenFile'));
    secureblackbox_sftpserver_register_callback($this->handle, 30, array($this, 'fireReadFile'));
    secureblackbox_sftpserver_register_callback($this->handle, 31, array($this, 'fireRemove'));
    secureblackbox_sftpserver_register_callback($this->handle, 32, array($this, 'fireRenameFile'));
    secureblackbox_sftpserver_register_callback($this->handle, 33, array($this, 'fireRequestAttributes'));
    secureblackbox_sftpserver_register_callback($this->handle, 34, array($this, 'fireSessionClosed'));
    secureblackbox_sftpserver_register_callback($this->handle, 35, array($this, 'fireSessionEstablished'));
    secureblackbox_sftpserver_register_callback($this->handle, 36, array($this, 'fireSetAttributes'));
    secureblackbox_sftpserver_register_callback($this->handle, 37, array($this, 'fireWriteFile'));
  }
  
  public function __destruct() {
    secureblackbox_sftpserver_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_sftpserver_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_sftpserver_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_sftpserver_do_config($this->handle, $configurationstring);
		$err = secureblackbox_sftpserver_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Terminates a client connection.
  *
  * @access   public
  * @param    int    connectionid
  * @param    boolean    forced
  */
  public function doDropClient($connectionid, $forced) {
    $ret = secureblackbox_sftpserver_do_dropclient($this->handle, $connectionid, $forced);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Acquires a piece of operation data.
  *
  * @access   public
  * @param    int64    connectionid
  * @param    string    handle
  */
  public function doGetClientBuffer($connectionid, $handle) {
    $ret = secureblackbox_sftpserver_do_getclientbuffer($this->handle, $connectionid, $handle);
		$err = secureblackbox_sftpserver_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Acquires file entry details from the class.
  *
  * @access   public
  * @param    int64    connectionid
  * @param    string    handle
  */
  public function doGetClientFileEntry($connectionid, $handle) {
    $ret = secureblackbox_sftpserver_do_getclientfileentry($this->handle, $connectionid, $handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enumerates the connected clients.
  *
  * @access   public
  */
  public function doListClients() {
    $ret = secureblackbox_sftpserver_do_listclients($this->handle);
		$err = secureblackbox_sftpserver_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Takes a snapshot of the connection's properties.
  *
  * @access   public
  * @param    int    connectionid
  */
  public function doPinClient($connectionid) {
    $ret = secureblackbox_sftpserver_do_pinclient($this->handle, $connectionid);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Commits a data buffer to the server class.
  *
  * @access   public
  * @param    int64    connectionid
  * @param    string    handle
  * @param    string    value
  */
  public function doSetClientBuffer($connectionid, $handle, $value) {
    $ret = secureblackbox_sftpserver_do_setclientbuffer($this->handle, $connectionid, $handle, $value);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Commits the file entry details to the class.
  *
  * @access   public
  * @param    int64    connectionid
  * @param    string    handle
  */
  public function doSetClientFileEntry($connectionid, $handle) {
    $ret = secureblackbox_sftpserver_do_setclientfileentry($this->handle, $connectionid, $handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Starts SFTP server operation.
  *
  * @access   public
  */
  public function doStart() {
    $ret = secureblackbox_sftpserver_do_start($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Stops SFTP server.
  *
  * @access   public
  */
  public function doStop() {
    $ret = secureblackbox_sftpserver_do_stop($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_sftpserver_get($this->handle, 0);
  }
 /**
  * Specifies whether the SFTP tunnel has been created and data could be sent/received.
  *
  * @access   public
  */
  public function getActive() {
    return secureblackbox_sftpserver_get($this->handle, 1 );
  }


 /**
  * Defines allowed authentication types.
  *
  * @access   public
  */
  public function getAuthTypes() {
    return secureblackbox_sftpserver_get($this->handle, 2 );
  }
 /**
  * Defines allowed authentication types.
  *
  * @access   public
  * @param    int   value
  */
  public function setAuthTypes($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the server's base (root) directory.
  *
  * @access   public
  */
  public function getBaseDir() {
    return secureblackbox_sftpserver_get($this->handle, 3 );
  }
 /**
  * Specifies the server's base (root) directory.
  *
  * @access   public
  * @param    string   value
  */
  public function setBaseDir($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the last access time for this file, in UTC.
  *
  * @access   public
  */
  public function getClientFileEntryATime() {
    return secureblackbox_sftpserver_get($this->handle, 4 );
  }
 /**
  * Contains the last access time for this file, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setClientFileEntryATime($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains this file's creation time, in UTC.
  *
  * @access   public
  */
  public function getClientFileEntryCTime() {
    return secureblackbox_sftpserver_get($this->handle, 5 );
  }
 /**
  * Contains this file's creation time, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setClientFileEntryCTime($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether this entry is a directory.
  *
  * @access   public
  */
  public function getClientFileEntryDirectory() {
    return secureblackbox_sftpserver_get($this->handle, 6 );
  }
 /**
  * Specifies whether this entry is a directory.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setClientFileEntryDirectory($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the type of this entry, one of the following: cftFile 0 cftDirectory 1 cftSymblink 2 cftSpecial 3 cftUnknown 4 cftSocket 5 cftCharDevice 6 cftBlockDevice 7 cftFIFO 8 .
  *
  * @access   public
  */
  public function getClientFileEntryFileType() {
    return secureblackbox_sftpserver_get($this->handle, 7 );
  }
 /**
  * Specifies the type of this entry, one of the following: cftFile 0 cftDirectory 1 cftSymblink 2 cftSpecial 3 cftUnknown 4 cftSocket 5 cftCharDevice 6 cftBlockDevice 7 cftFIFO 8 .
  *
  * @access   public
  * @param    int   value
  */
  public function setClientFileEntryFileType($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Controls file execution permission for the group users.
  *
  * @access   public
  */
  public function getClientFileEntryGroupExecute() {
    return secureblackbox_sftpserver_get($this->handle, 8 );
  }
 /**
  * Controls file execution permission for the group users.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setClientFileEntryGroupExecute($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 8, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Controls file read permission for the group users.
  *
  * @access   public
  */
  public function getClientFileEntryGroupRead() {
    return secureblackbox_sftpserver_get($this->handle, 9 );
  }
 /**
  * Controls file read permission for the group users.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setClientFileEntryGroupRead($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Controls file write permission for the group users.
  *
  * @access   public
  */
  public function getClientFileEntryGroupWrite() {
    return secureblackbox_sftpserver_get($this->handle, 10 );
  }
 /**
  * Controls file write permission for the group users.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setClientFileEntryGroupWrite($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getClientFileEntryHandle() {
    return secureblackbox_sftpserver_get($this->handle, 11 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setClientFileEntryHandle($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the long name of the file (human-readable, ftp-like).
  *
  * @access   public
  */
  public function getClientFileEntryLongName() {
    return secureblackbox_sftpserver_get($this->handle, 12 );
  }
 /**
  * Contains the long name of the file (human-readable, ftp-like).
  *
  * @access   public
  * @param    string   value
  */
  public function setClientFileEntryLongName($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the last modification time, in UTC.
  *
  * @access   public
  */
  public function getClientFileEntryMTime() {
    return secureblackbox_sftpserver_get($this->handle, 13 );
  }
 /**
  * Specifies the last modification time, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setClientFileEntryMTime($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the file name.
  *
  * @access   public
  */
  public function getClientFileEntryName() {
    return secureblackbox_sftpserver_get($this->handle, 14 );
  }
 /**
  * Specifies the file name.
  *
  * @access   public
  * @param    string   value
  */
  public function setClientFileEntryName($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Controls file execution permission for other users  (users that are neither owners, nor belong to the same group).
  *
  * @access   public
  */
  public function getClientFileEntryOtherExecute() {
    return secureblackbox_sftpserver_get($this->handle, 15 );
  }
 /**
  * Controls file execution permission for other users  (users that are neither owners, nor belong to the same group).
  *
  * @access   public
  * @param    boolean   value
  */
  public function setClientFileEntryOtherExecute($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Controls file read permission for other users  (users that are neither owners, nor belong to the same group).
  *
  * @access   public
  */
  public function getClientFileEntryOtherRead() {
    return secureblackbox_sftpserver_get($this->handle, 16 );
  }
 /**
  * Controls file read permission for other users  (users that are neither owners, nor belong to the same group).
  *
  * @access   public
  * @param    boolean   value
  */
  public function setClientFileEntryOtherRead($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Controls file write permission for other users  (users that are neither owners, nor belong to the same group).
  *
  * @access   public
  */
  public function getClientFileEntryOtherWrite() {
    return secureblackbox_sftpserver_get($this->handle, 17 );
  }
 /**
  * Controls file write permission for other users  (users that are neither owners, nor belong to the same group).
  *
  * @access   public
  * @param    boolean   value
  */
  public function setClientFileEntryOtherWrite($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the owner of the file/directory.
  *
  * @access   public
  */
  public function getClientFileEntryOwner() {
    return secureblackbox_sftpserver_get($this->handle, 18 );
  }
 /**
  * Specifies the owner of the file/directory.
  *
  * @access   public
  * @param    string   value
  */
  public function setClientFileEntryOwner($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the full path to the file.
  *
  * @access   public
  */
  public function getClientFileEntryPath() {
    return secureblackbox_sftpserver_get($this->handle, 19 );
  }
 /**
  * Contains the full path to the file.
  *
  * @access   public
  * @param    string   value
  */
  public function setClientFileEntryPath($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 19, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The size of the file in bytes.
  *
  * @access   public
  */
  public function getClientFileEntrySize() {
    return secureblackbox_sftpserver_get($this->handle, 20 );
  }
 /**
  * The size of the file in bytes.
  *
  * @access   public
  * @param    int64   value
  */
  public function setClientFileEntrySize($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 20, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Controls file execution permission for the file owner.
  *
  * @access   public
  */
  public function getClientFileEntryUserExecute() {
    return secureblackbox_sftpserver_get($this->handle, 21 );
  }
 /**
  * Controls file execution permission for the file owner.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setClientFileEntryUserExecute($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Controls file read permission for the file owner.
  *
  * @access   public
  */
  public function getClientFileEntryUserRead() {
    return secureblackbox_sftpserver_get($this->handle, 22 );
  }
 /**
  * Controls file read permission for the file owner.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setClientFileEntryUserRead($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 22, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Controls file write permission for the file owner.
  *
  * @access   public
  */
  public function getClientFileEntryUserWrite() {
    return secureblackbox_sftpserver_get($this->handle, 23 );
  }
 /**
  * Controls file write permission for the file owner.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setClientFileEntryUserWrite($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 23, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the preferable compression level.
  *
  * @access   public
  */
  public function getCompressionLevel() {
    return secureblackbox_sftpserver_get($this->handle, 24 );
  }
 /**
  * Specifies the preferable compression level.
  *
  * @access   public
  * @param    int   value
  */
  public function setCompressionLevel($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 24, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_sftpserver_get($this->handle, 25 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 25, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_sftpserver_get($this->handle, 26 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_sftpserver_get($this->handle, 27 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 27, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_sftpserver_get($this->handle, 28 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 28, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_sftpserver_get($this->handle, 29 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 29, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_sftpserver_get($this->handle, 30 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 30, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_sftpserver_get($this->handle, 31 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 31, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_sftpserver_get($this->handle, 32 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_sftpserver_get($this->handle, 33 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * This property specifies whether server explicitly requires data compression.
  *
  * @access   public
  */
  public function getForceCompression() {
    return secureblackbox_sftpserver_get($this->handle, 34 );
  }
 /**
  * This property specifies whether server explicitly requires data compression.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setForceCompression($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies server's host name.
  *
  * @access   public
  */
  public function getHost() {
    return secureblackbox_sftpserver_get($this->handle, 35 );
  }
 /**
  * Specifies server's host name.
  *
  * @access   public
  * @param    string   value
  */
  public function setHost($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 35, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the SHA-1 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getKeyFingerprintSHA1() {
    return secureblackbox_sftpserver_get($this->handle, 36 );
  }


 /**
  * Contains the SHA-256 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getKeyFingerprintSHA256() {
    return secureblackbox_sftpserver_get($this->handle, 37 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKeyHandle() {
    return secureblackbox_sftpserver_get($this->handle, 38 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKeyHandle($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 38, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Maximum SFTP version supported.
  *
  * @access   public
  */
  public function getMaxSFTPVersion() {
    return secureblackbox_sftpserver_get($this->handle, 39 );
  }
 /**
  * Maximum SFTP version supported.
  *
  * @access   public
  * @param    int   value
  */
  public function setMaxSFTPVersion($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 39, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Minimum SFTP version supported.
  *
  * @access   public
  */
  public function getMinSFTPVersion() {
    return secureblackbox_sftpserver_get($this->handle, 40 );
  }
 /**
  * Minimum SFTP version supported.
  *
  * @access   public
  * @param    int   value
  */
  public function setMinSFTPVersion($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The client's IP address.
  *
  * @access   public
  */
  public function getPinnedClientAddress() {
    return secureblackbox_sftpserver_get($this->handle, 41 );
  }


 /**
  * Specifies the client's key algorithm.
  *
  * @access   public
  */
  public function getPinnedClientClientKeyAlgorithm() {
    return secureblackbox_sftpserver_get($this->handle, 42 );
  }


 /**
  * Specifies the length of the client's key.
  *
  * @access   public
  */
  public function getPinnedClientClientKeyBits() {
    return secureblackbox_sftpserver_get($this->handle, 43 );
  }


 /**
  * The fingerprint (hash value) of the client's public key.
  *
  * @access   public
  */
  public function getPinnedClientClientKeyFingerprint() {
    return secureblackbox_sftpserver_get($this->handle, 44 );
  }


 /**
  * Returns the name of the SSH software running on the client side.
  *
  * @access   public
  */
  public function getPinnedClientClientSoftwareName() {
    return secureblackbox_sftpserver_get($this->handle, 45 );
  }


 /**
  * Contains the line sent by the client just before closing the connection.
  *
  * @access   public
  */
  public function getPinnedClientCloseReason() {
    return secureblackbox_sftpserver_get($this->handle, 46 );
  }


 /**
  * Compression algorithm for the incoming traffic.
  *
  * @access   public
  */
  public function getPinnedClientCompressionAlgorithmInbound() {
    return secureblackbox_sftpserver_get($this->handle, 47 );
  }


 /**
  * Compression algorithm for the outgoing traffic.
  *
  * @access   public
  */
  public function getPinnedClientCompressionAlgorithmOutbound() {
    return secureblackbox_sftpserver_get($this->handle, 48 );
  }


 /**
  * Encryption algorithm for the incoming traffic.
  *
  * @access   public
  */
  public function getPinnedClientEncryptionAlgorithmInbound() {
    return secureblackbox_sftpserver_get($this->handle, 49 );
  }


 /**
  * Encryption algorithm for the outgoing traffic.
  *
  * @access   public
  */
  public function getPinnedClientEncryptionAlgorithmOutbound() {
    return secureblackbox_sftpserver_get($this->handle, 50 );
  }


 /**
  * The client connection's unique identifier.
  *
  * @access   public
  */
  public function getPinnedClientID() {
    return secureblackbox_sftpserver_get($this->handle, 51 );
  }


 /**
  * Specifies the length of the key used to encrypt the incoming traffic.
  *
  * @access   public
  */
  public function getPinnedClientInboundEncryptionKeyBits() {
    return secureblackbox_sftpserver_get($this->handle, 52 );
  }


 /**
  * The key exchange algorithm used during the SSH handshake.
  *
  * @access   public
  */
  public function getPinnedClientKexAlgorithm() {
    return secureblackbox_sftpserver_get($this->handle, 53 );
  }


 /**
  * The number of bits used by the key exchange algorithm.
  *
  * @access   public
  */
  public function getPinnedClientKexBits() {
    return secureblackbox_sftpserver_get($this->handle, 54 );
  }


 /**
  * The contents of the received KexInit packet.
  *
  * @access   public
  */
  public function getPinnedClientKexLines() {
    return secureblackbox_sftpserver_get($this->handle, 55 );
  }


 /**
  * MAC algorithm used for the incoming connection.
  *
  * @access   public
  */
  public function getPinnedClientMacAlgorithmInbound() {
    return secureblackbox_sftpserver_get($this->handle, 56 );
  }


 /**
  * MAC algorithm used for outbound connection.
  *
  * @access   public
  */
  public function getPinnedClientMacAlgorithmOutbound() {
    return secureblackbox_sftpserver_get($this->handle, 57 );
  }


 /**
  * Specifies the length of the key used to encrypt the outgoing traffic.
  *
  * @access   public
  */
  public function getPinnedClientOutboundEncryptionKeyBits() {
    return secureblackbox_sftpserver_get($this->handle, 58 );
  }


 /**
  * The remote port of the client connection.
  *
  * @access   public
  */
  public function getPinnedClientPort() {
    return secureblackbox_sftpserver_get($this->handle, 59 );
  }


 /**
  * Specifies the public key algorithm which was used during the SSH handshake.
  *
  * @access   public
  */
  public function getPinnedClientPublicKeyAlgorithm() {
    return secureblackbox_sftpserver_get($this->handle, 60 );
  }


 /**
  * Specifies the number of bits in the server's key.
  *
  * @access   public
  */
  public function getPinnedClientServerKeyBits() {
    return secureblackbox_sftpserver_get($this->handle, 61 );
  }


 /**
  * The fingerprint (hash value) of the server's public key.
  *
  * @access   public
  */
  public function getPinnedClientServerKeyFingerprint() {
    return secureblackbox_sftpserver_get($this->handle, 62 );
  }


 /**
  * Returns the total number of bytes received over this connection.
  *
  * @access   public
  */
  public function getPinnedClientTotalBytesReceived() {
    return secureblackbox_sftpserver_get($this->handle, 63 );
  }


 /**
  * Returns the total number of bytes sent over this connection.
  *
  * @access   public
  */
  public function getPinnedClientTotalBytesSent() {
    return secureblackbox_sftpserver_get($this->handle, 64 );
  }


 /**
  * Specifies SSH protocol version.
  *
  * @access   public
  */
  public function getPinnedClientVersion() {
    return secureblackbox_sftpserver_get($this->handle, 65 );
  }


 /**
  * Specifies the listening port number.
  *
  * @access   public
  */
  public function getPort() {
    return secureblackbox_sftpserver_get($this->handle, 66 );
  }
 /**
  * Specifies the listening port number.
  *
  * @access   public
  * @param    int   value
  */
  public function setPort($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 66, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether files on the server are read-only.
  *
  * @access   public
  */
  public function getReadOnly() {
    return secureblackbox_sftpserver_get($this->handle, 67 );
  }
 /**
  * Specifies whether files on the server are read-only.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReadOnly($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ServerKey arrays.
  *
  * @access   public
  */
  public function getServerKeyCount() {
    return secureblackbox_sftpserver_get($this->handle, 68 );
  }
 /**
  * The number of records in the ServerKey arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setServerKeyCount($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 68, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the key algorithm.
  *
  * @access   public
  */
  public function getServerKeyAlgorithm($serverkeyindex) {
    return secureblackbox_sftpserver_get($this->handle, 69 , $serverkeyindex);
  }


 /**
  * The number of bits in the key: the more the better, 2048 or 4096 are typical values.
  *
  * @access   public
  */
  public function getServerKeyBits($serverkeyindex) {
    return secureblackbox_sftpserver_get($this->handle, 70 , $serverkeyindex);
  }


 /**
  * Contains the MD5 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getServerKeyFingerprintMD5($serverkeyindex) {
    return secureblackbox_sftpserver_get($this->handle, 71 , $serverkeyindex);
  }


 /**
  * Contains the SHA-1 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getServerKeyFingerprintSHA1($serverkeyindex) {
    return secureblackbox_sftpserver_get($this->handle, 72 , $serverkeyindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getServerKeyHandle($serverkeyindex) {
    return secureblackbox_sftpserver_get($this->handle, 73 , $serverkeyindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setServerKeyHandle($serverkeyindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 73, $value , $serverkeyindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_sftpserver_get($this->handle, 74 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_sftpserver_get($this->handle, 75 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 75, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_sftpserver_get($this->handle, 76 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 76, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_sftpserver_get($this->handle, 77 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 77, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_sftpserver_get($this->handle, 78 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_sftpserver_get($this->handle, 79 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 79, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the User arrays.
  *
  * @access   public
  */
  public function getUserCount() {
    return secureblackbox_sftpserver_get($this->handle, 80 );
  }
 /**
  * The number of records in the User arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserCount($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 80, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's Associated Data when SSH AEAD (Authenticated Encryption with Associated Data) algorithm is used.
  *
  * @access   public
  */
  public function getUserAssociatedData($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 81 , $userindex);
  }
 /**
  * Contains the user's Associated Data when SSH AEAD (Authenticated Encryption with Associated Data) algorithm is used.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserAssociatedData($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 81, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Base path for this user in the server's file system.
  *
  * @access   public
  */
  public function getUserBasePath($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 82 , $userindex);
  }
 /**
  * Base path for this user in the server's file system.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserBasePath($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 82, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's certificate.
  *
  * @access   public
  */
  public function getUserCert($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 83 , $userindex);
  }
 /**
  * Contains the user's certificate.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserCert($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 83, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains uninterpreted user-defined data that should be associated with the user account, such as comments or custom settings.
  *
  * @access   public
  */
  public function getUserData($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 84 , $userindex);
  }
 /**
  * Contains uninterpreted user-defined data that should be associated with the user account, such as comments or custom settings.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserData($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 84, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getUserHandle($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 85 , $userindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setUserHandle($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 85, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm used to generate TOTP (Time-based One-Time Passwords) passwords for this user.
  *
  * @access   public
  */
  public function getUserHashAlgorithm($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 86 , $userindex);
  }
 /**
  * Specifies the hash algorithm used to generate TOTP (Time-based One-Time Passwords) passwords for this user.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserHashAlgorithm($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 86, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the incoming speed limit for this user.
  *
  * @access   public
  */
  public function getUserIncomingSpeedLimit($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 87 , $userindex);
  }
 /**
  * Specifies the incoming speed limit for this user.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserIncomingSpeedLimit($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 87, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The algorithm used to generate one-time passwords (OTP) for this user, either HOTP (Hash-based OTP) or TOTP (Time-based OTP).
  *
  * @access   public
  */
  public function getUserOtpAlgorithm($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 88 , $userindex);
  }
 /**
  * The algorithm used to generate one-time passwords (OTP) for this user, either HOTP (Hash-based OTP) or TOTP (Time-based OTP).
  *
  * @access   public
  * @param    int   value
  */
  public function setUserOtpAlgorithm($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 88, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The user's time interval (TOTP) or Counter (HOTP).
  *
  * @access   public
  */
  public function getUserOtpValue($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 89 , $userindex);
  }
 /**
  * The user's time interval (TOTP) or Counter (HOTP).
  *
  * @access   public
  * @param    int   value
  */
  public function setUserOtpValue($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 89, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the outgoing speed limit for this user.
  *
  * @access   public
  */
  public function getUserOutgoingSpeedLimit($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 90 , $userindex);
  }
 /**
  * Specifies the outgoing speed limit for this user.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserOutgoingSpeedLimit($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 90, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The user's authentication password.
  *
  * @access   public
  */
  public function getUserPassword($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 91 , $userindex);
  }
 /**
  * The user's authentication password.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserPassword($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 91, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the length of the user's OTP password.
  *
  * @access   public
  */
  public function getUserPasswordLen($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 92 , $userindex);
  }
 /**
  * Specifies the length of the user's OTP password.
  *
  * @access   public
  * @param    int   value
  */
  public function setUserPasswordLen($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 92, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's secret key, which is essentially a shared secret between the client and server.
  *
  * @access   public
  */
  public function getUserSharedSecret($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 93 , $userindex);
  }
 /**
  * Contains the user's secret key, which is essentially a shared secret between the client and server.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserSharedSecret($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 93, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the user's SSH key.
  *
  * @access   public
  */
  public function getUserSSHKey($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 94 , $userindex);
  }
 /**
  * Contains the user's SSH key.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserSSHKey($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 94, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The registered name (login) of the user.
  *
  * @access   public
  */
  public function getUserUsername($userindex) {
    return secureblackbox_sftpserver_get($this->handle, 95 , $userindex);
  }
 /**
  * The registered name (login) of the user.
  *
  * @access   public
  * @param    string   value
  */
  public function setUserUsername($userindex, $value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 95, $value , $userindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether UTF8 conversion is to be used when parsing file names.
  *
  * @access   public
  */
  public function getUseUTF8() {
    return secureblackbox_sftpserver_get($this->handle, 96 );
  }
 /**
  * Specifies whether UTF8 conversion is to be used when parsing file names.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setUseUTF8($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 96, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_sftpserver_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_sftpserver_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpserver_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * This event is fired when new incoming connection is accepted.
  *
  * @access   public
  * @param    array   Array of event parameters: remoteaddress, remoteport, accept    
  */
  public function fireAccept($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to create a directory.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, operationstatus    
  */
  public function fireAfterCreateDirectory($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to delete a file or directory.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, operationstatus    
  */
  public function fireAfterRemove($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to rename a file.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, oldpath, newpath, operationstatus    
  */
  public function fireAfterRenameFile($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to get file attributes.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, operationstatus    
  */
  public function fireAfterRequestAttributes($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to set file attributes.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, operationstatus    
  */
  public function fireAfterSetAttributes($param) {
    return $param;
  }

 /**
  * Reports a user authentication attempt.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, username, authtype, accept    
  */
  public function fireAuthAttempt($param) {
    return $param;
  }

 /**
  * Reports user authentication failure.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, username, authtype    
  */
  public function fireAuthFailed($param) {
    return $param;
  }

 /**
  * This event is fired on password authentication attempt from a client.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, username, password, accept, forcechangepassword    
  */
  public function fireAuthPassword($param) {
    return $param;
  }

 /**
  * This event is fired on public key authentication attempt from a client.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, username, accept    
  */
  public function fireAuthPublicKey($param) {
    return $param;
  }

 /**
  * Reports a successful user authentication.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, username, authtype    
  */
  public function fireAuthSucceeded($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to create a directory.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, action    
  */
  public function fireBeforeCreateDirectory($param) {
    return $param;
  }

 /**
  * This event is fired when a download file request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, action    
  */
  public function fireBeforeDownloadFile($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to find files and folders in Path.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, action    
  */
  public function fireBeforeFind($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to delete a file or directory.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, action    
  */
  public function fireBeforeRemove($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to rename a file.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, oldpath, newpath, action    
  */
  public function fireBeforeRenameFile($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to get file attributes.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, action    
  */
  public function fireBeforeRequestAttributes($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to set file attributes.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, action    
  */
  public function fireBeforeSetAttributes($param) {
    return $param;
  }

 /**
  * This event is fired when an upload file request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, action    
  */
  public function fireBeforeUploadFile($param) {
    return $param;
  }

 /**
  * This event is fired when an upload file request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, handle, operationstatus    
  */
  public function fireCloseFile($param) {
    return $param;
  }

 /**
  * This event is fired when a remote connection has been established.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, remoteaddress, remoteport    
  */
  public function fireConnect($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to create a directory.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, operationstatus    
  */
  public function fireCreateDirectory($param) {
    return $param;
  }

 /**
  * This event is fired when a client has disconnected.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid    
  */
  public function fireDisconnect($param) {
    return $param;
  }

 /**
  * Information about errors during data delivery.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }

 /**
  * Handles remote or external signing initiated by the server protocol.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, operationid, hashalgorithm, pars, data, signeddata    
  */
  public function fireExternalSign($param) {
    return $param;
  }

 /**
  * This event is fired when a search files request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, handle, operationstatus    
  */
  public function fireFindClose($param) {
    return $param;
  }

 /**
  * This event is fired when a search files request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, operationstatus, handle    
  */
  public function fireFindFirst($param) {
    return $param;
  }

 /**
  * This event is fired when a search files request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, handle, operationstatus    
  */
  public function fireFindNext($param) {
    return $param;
  }

 /**
  * This event is fired when an upload file request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, modes, access, operationstatus, handle    
  */
  public function fireOpenFile($param) {
    return $param;
  }

 /**
  * This event is fired when a file read request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, handle, offset, size, operationstatus    
  */
  public function fireReadFile($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to delete a file or directory.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, operationstatus    
  */
  public function fireRemove($param) {
    return $param;
  }

 /**
  * This event is fired when a client requests to rename a file.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, oldpath, newpath, operationstatus    
  */
  public function fireRenameFile($param) {
    return $param;
  }

 /**
  * This event is fired when a get file attributes request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, handle, operationstatus    
  */
  public function fireRequestAttributes($param) {
    return $param;
  }

 /**
  * Reports session closure.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid    
  */
  public function fireSessionClosed($param) {
    return $param;
  }

 /**
  * This event is fired when a new session is established.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid    
  */
  public function fireSessionEstablished($param) {
    return $param;
  }

 /**
  * This event is fired when an set file attributes request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, path, handle, operationstatus    
  */
  public function fireSetAttributes($param) {
    return $param;
  }

 /**
  * This event is fired when an upload file request is received.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, handle, offset, operationstatus    
  */
  public function fireWriteFile($param) {
    return $param;
  }


}

?>
