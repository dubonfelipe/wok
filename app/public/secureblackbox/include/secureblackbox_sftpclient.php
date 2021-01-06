<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - SFTPClient Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_SFTPClient {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_sftpclient_open(SECUREBLACKBOX_OEMKEY_801);
    secureblackbox_sftpclient_register_callback($this->handle, 1, array($this, 'fireAuthAttempt'));
    secureblackbox_sftpclient_register_callback($this->handle, 2, array($this, 'fireAuthFailed'));
    secureblackbox_sftpclient_register_callback($this->handle, 3, array($this, 'fireAuthSucceeded'));
    secureblackbox_sftpclient_register_callback($this->handle, 4, array($this, 'fireBanner'));
    secureblackbox_sftpclient_register_callback($this->handle, 5, array($this, 'fireDisconnect'));
    secureblackbox_sftpclient_register_callback($this->handle, 6, array($this, 'fireError'));
    secureblackbox_sftpclient_register_callback($this->handle, 7, array($this, 'fireExternalSign'));
    secureblackbox_sftpclient_register_callback($this->handle, 8, array($this, 'fireFileOperation'));
    secureblackbox_sftpclient_register_callback($this->handle, 9, array($this, 'fireFileOperationResult'));
    secureblackbox_sftpclient_register_callback($this->handle, 10, array($this, 'fireKnownKeyReceived'));
    secureblackbox_sftpclient_register_callback($this->handle, 11, array($this, 'fireListEntry'));
    secureblackbox_sftpclient_register_callback($this->handle, 12, array($this, 'firePasswordChangeRequest'));
    secureblackbox_sftpclient_register_callback($this->handle, 13, array($this, 'firePrivateKeyNeeded'));
    secureblackbox_sftpclient_register_callback($this->handle, 14, array($this, 'fireProgress'));
    secureblackbox_sftpclient_register_callback($this->handle, 15, array($this, 'fireUnknownKeyReceived'));
  }
  
  public function __destruct() {
    secureblackbox_sftpclient_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_sftpclient_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_sftpclient_get_last_error_code($this->handle);
  }

 /**
  * Requests the absolute path for a relative path.
  *
  * @access   public
  * @param    string    remotepath
  */
  public function doAbsolutePath($remotepath) {
    $ret = secureblackbox_sftpclient_do_absolutepath($this->handle, $remotepath);
		$err = secureblackbox_sftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Changes current working directory on the server.
  *
  * @access   public
  * @param    string    remotedir
  */
  public function doChangeDir($remotedir) {
    $ret = secureblackbox_sftpclient_do_changedir($this->handle, $remotedir);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
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
    $ret = secureblackbox_sftpclient_do_config($this->handle, $configurationstring);
		$err = secureblackbox_sftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Connects to an SFTP server.
  *
  * @access   public
  * @param    string    address
  * @param    int    port
  */
  public function doConnect($address, $port) {
    $ret = secureblackbox_sftpclient_do_connect($this->handle, $address, $port);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Creates a symbolic or hard link to a remote file.
  *
  * @access   public
  * @param    string    linkpath
  * @param    string    targetpath
  * @param    boolean    hardlink
  */
  public function doCreateLink($linkpath, $targetpath, $hardlink) {
    $ret = secureblackbox_sftpclient_do_createlink($this->handle, $linkpath, $targetpath, $hardlink);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes directory from the SFTP server.
  *
  * @access   public
  * @param    string    remotedir
  */
  public function doDeleteDir($remotedir) {
    $ret = secureblackbox_sftpclient_do_deletedir($this->handle, $remotedir);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Deletes a file from the SFTP server.
  *
  * @access   public
  * @param    string    remotefile
  */
  public function doDeleteFile($remotefile) {
    $ret = secureblackbox_sftpclient_do_deletefile($this->handle, $remotefile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Deletes a group of files from the SFTP server.
  *
  * @access   public
  * @param    string    remotepath
  * @param    string    mask
  * @param    boolean    casesensitive
  * @param    boolean    recursive
  */
  public function doDeleteFiles($remotepath, $mask, $casesensitive, $recursive) {
    $ret = secureblackbox_sftpclient_do_deletefiles($this->handle, $remotepath, $mask, $casesensitive, $recursive);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Checks if a directory exists on the SFTP server.
  *
  * @access   public
  * @param    string    remotedir
  */
  public function doDirExists($remotedir) {
    $ret = secureblackbox_sftpclient_do_direxists($this->handle, $remotedir);
		$err = 0;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Disconnects from the SFTP server.
  *
  * @access   public
  */
  public function doDisconnect() {
    $ret = secureblackbox_sftpclient_do_disconnect($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Downloads a file from the SFTP server.
  *
  * @access   public
  * @param    string    remotefile
  * @param    string    localfile
  */
  public function doDownloadFile($remotefile, $localfile) {
    $ret = secureblackbox_sftpclient_do_downloadfile($this->handle, $remotefile, $localfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Downloads multiple files from the SFTP server.
  *
  * @access   public
  * @param    string    remotepath
  * @param    string    localdir
  */
  public function doDownloadFiles($remotepath, $localdir) {
    $ret = secureblackbox_sftpclient_do_downloadfiles($this->handle, $remotepath, $localdir);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends an SSH command to the server in the middle of SFTP session.
  *
  * @access   public
  * @param    string    command
  */
  public function doExecuteSSHCommand($command) {
    $ret = secureblackbox_sftpclient_do_executesshcommand($this->handle, $command);
		$err = secureblackbox_sftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends an extension command to the server.
  *
  * @access   public
  * @param    string    extension
  * @param    string    databuffer
  */
  public function doExtensionCmd($extension, $databuffer) {
    $ret = secureblackbox_sftpclient_do_extensioncmd($this->handle, $extension, $databuffer);
		$err = secureblackbox_sftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Checks whether a file exists on the server.
  *
  * @access   public
  * @param    string    remotefile
  */
  public function doFileExists($remotefile) {
    $ret = secureblackbox_sftpclient_do_fileexists($this->handle, $remotefile);
		$err = 0;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the current directory on the SFTP server.
  *
  * @access   public
  */
  public function doGetCurrentDir() {
    $ret = secureblackbox_sftpclient_do_getcurrentdir($this->handle);
		$err = secureblackbox_sftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Checks the size of a remote file.
  *
  * @access   public
  * @param    string    remotefile
  */
  public function doGetFileSize($remotefile) {
    $ret = secureblackbox_sftpclient_do_getfilesize($this->handle, $remotefile);
		$err = secureblackbox_sftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Lists the content of the current remote directory.
  *
  * @access   public
  * @param    boolean    includefiles
  * @param    boolean    includedirectories
  */
  public function doListDir($includefiles, $includedirectories) {
    $ret = secureblackbox_sftpclient_do_listdir($this->handle, $includefiles, $includedirectories);
		$err = secureblackbox_sftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Creates a new directory on the server.
  *
  * @access   public
  * @param    string    remotedir
  */
  public function doMakeDir($remotedir) {
    $ret = secureblackbox_sftpclient_do_makedir($this->handle, $remotedir);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Renames a file.
  *
  * @access   public
  * @param    string    sourcefile
  * @param    string    destfile
  */
  public function doRenameFile($sourcefile, $destfile) {
    $ret = secureblackbox_sftpclient_do_renamefile($this->handle, $sourcefile, $destfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Requests attributes of the remote file.
  *
  * @access   public
  * @param    string    remotepath
  * @param    boolean    followsymlinks
  */
  public function doRequestAttributes($remotepath, $followsymlinks) {
    $ret = secureblackbox_sftpclient_do_requestattributes($this->handle, $remotepath, $followsymlinks);
		$err = secureblackbox_sftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sets the attributes upon a remote file.
  *
  * @access   public
  * @param    string    remotepath
  * @param    string    attributes
  */
  public function doSetAttributes($remotepath, $attributes) {
    $ret = secureblackbox_sftpclient_do_setattributes($this->handle, $remotepath, $attributes);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Uploads a file to the server.
  *
  * @access   public
  * @param    string    localfile
  * @param    string    remotefile
  */
  public function doUploadFile($localfile, $remotefile) {
    $ret = secureblackbox_sftpclient_do_uploadfile($this->handle, $localfile, $remotefile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Uploads multiple files to the server.
  *
  * @access   public
  * @param    string    localpath
  * @param    string    remotedir
  */
  public function doUploadFiles($localpath, $remotedir) {
    $ret = secureblackbox_sftpclient_do_uploadfiles($this->handle, $localpath, $remotedir);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_sftpclient_get($this->handle, 0);
  }
 /**
  * Specifies the number of SSH authentication attempts.
  *
  * @access   public
  */
  public function getAuthAttempts() {
    return secureblackbox_sftpclient_get($this->handle, 1 );
  }
 /**
  * Specifies the number of SSH authentication attempts.
  *
  * @access   public
  * @param    int   value
  */
  public function setAuthAttempts($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether to adjust the send and receive buffer sizes automatically.
  *
  * @access   public
  */
  public function getAutoAdjustTransferBlock() {
    return secureblackbox_sftpclient_get($this->handle, 2 );
  }
 /**
  * Specifies whether to adjust the send and receive buffer sizes automatically.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setAutoAdjustTransferBlock($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates if the client is connected to the SFTP server.
  *
  * @access   public
  */
  public function getConnected() {
    return secureblackbox_sftpclient_get($this->handle, 3 );
  }


 /**
  * Specifies the client's key algorithm.
  *
  * @access   public
  */
  public function getConnInfoClientKeyAlgorithm() {
    return secureblackbox_sftpclient_get($this->handle, 4 );
  }


 /**
  * Specifies the length of the client's key.
  *
  * @access   public
  */
  public function getConnInfoClientKeyBits() {
    return secureblackbox_sftpclient_get($this->handle, 5 );
  }


 /**
  * The fingerprint (hash value) of the client's public key.
  *
  * @access   public
  */
  public function getConnInfoClientKeyFingerprint() {
    return secureblackbox_sftpclient_get($this->handle, 6 );
  }


 /**
  * Contains the line sent by the server just before closing the connection.
  *
  * @access   public
  */
  public function getConnInfoCloseReason() {
    return secureblackbox_sftpclient_get($this->handle, 7 );
  }


 /**
  * Compression algorithm for the incoming traffic.
  *
  * @access   public
  */
  public function getConnInfoCompressionAlgorithmInbound() {
    return secureblackbox_sftpclient_get($this->handle, 8 );
  }


 /**
  * Compression algorithm for the outgoing traffic.
  *
  * @access   public
  */
  public function getConnInfoCompressionAlgorithmOutbound() {
    return secureblackbox_sftpclient_get($this->handle, 9 );
  }


 /**
  * Encryption algorithm for the incoming traffic.
  *
  * @access   public
  */
  public function getConnInfoEncryptionAlgorithmInbound() {
    return secureblackbox_sftpclient_get($this->handle, 10 );
  }


 /**
  * Encryption algorithm for the outgoing traffic.
  *
  * @access   public
  */
  public function getConnInfoEncryptionAlgorithmOutbound() {
    return secureblackbox_sftpclient_get($this->handle, 11 );
  }


 /**
  * Specifies the length of the key used to encrypt the incoming traffic.
  *
  * @access   public
  */
  public function getConnInfoInboundEncryptionKeyBits() {
    return secureblackbox_sftpclient_get($this->handle, 12 );
  }


 /**
  * The key exchange algorithm used during the SSH handshake.
  *
  * @access   public
  */
  public function getConnInfoKexAlgorithm() {
    return secureblackbox_sftpclient_get($this->handle, 13 );
  }


 /**
  * The number of bits used by the key exchange algorithm.
  *
  * @access   public
  */
  public function getConnInfoKexBits() {
    return secureblackbox_sftpclient_get($this->handle, 14 );
  }


 /**
  * The contents of the received KexInit packet.
  *
  * @access   public
  */
  public function getConnInfoKexLines() {
    return secureblackbox_sftpclient_get($this->handle, 15 );
  }


 /**
  * MAC algorithm used for the incoming connection.
  *
  * @access   public
  */
  public function getConnInfoMacAlgorithmInbound() {
    return secureblackbox_sftpclient_get($this->handle, 16 );
  }


 /**
  * MAC algorithm used for outbound connection.
  *
  * @access   public
  */
  public function getConnInfoMacAlgorithmOutbound() {
    return secureblackbox_sftpclient_get($this->handle, 17 );
  }


 /**
  * Specifies the length of the key used to encrypt the outgoing traffic.
  *
  * @access   public
  */
  public function getConnInfoOutboundEncryptionKeyBits() {
    return secureblackbox_sftpclient_get($this->handle, 18 );
  }


 /**
  * Specifies the public key algorithm which was used during the SSH handshake.
  *
  * @access   public
  */
  public function getConnInfoPublicKeyAlgorithm() {
    return secureblackbox_sftpclient_get($this->handle, 19 );
  }


 /**
  * Specifies the number of bits in the server's key.
  *
  * @access   public
  */
  public function getConnInfoServerKeyBits() {
    return secureblackbox_sftpclient_get($this->handle, 20 );
  }


 /**
  * The fingerprint (hash value) of the server's public key.
  *
  * @access   public
  */
  public function getConnInfoServerKeyFingerprint() {
    return secureblackbox_sftpclient_get($this->handle, 21 );
  }


 /**
  * Returns the name of the SSH software running on the server side.
  *
  * @access   public
  */
  public function getConnInfoServerSoftwareName() {
    return secureblackbox_sftpclient_get($this->handle, 22 );
  }


 /**
  * Returns the total number of bytes received over this connection.
  *
  * @access   public
  */
  public function getConnInfoTotalBytesReceived() {
    return secureblackbox_sftpclient_get($this->handle, 23 );
  }


 /**
  * Returns the total number of bytes sent over this connection.
  *
  * @access   public
  */
  public function getConnInfoTotalBytesSent() {
    return secureblackbox_sftpclient_get($this->handle, 24 );
  }


 /**
  * Specifies SSH protocol version.
  *
  * @access   public
  */
  public function getConnInfoVersion() {
    return secureblackbox_sftpclient_get($this->handle, 25 );
  }


 /**
  * Contains the last access time for this file, in UTC.
  *
  * @access   public
  */
  public function getCurrListEntryATime() {
    return secureblackbox_sftpclient_get($this->handle, 26 );
  }


 /**
  * Contains this file's creation time, in UTC.
  *
  * @access   public
  */
  public function getCurrListEntryCTime() {
    return secureblackbox_sftpclient_get($this->handle, 27 );
  }


 /**
  * Specifies whether this entry is a directory.
  *
  * @access   public
  */
  public function getCurrListEntryDirectory() {
    return secureblackbox_sftpclient_get($this->handle, 28 );
  }


 /**
  * Specifies the type of this entry, one of the following: cftFile 0 cftDirectory 1 cftSymblink 2 cftSpecial 3 cftUnknown 4 cftSocket 5 cftCharDevice 6 cftBlockDevice 7 cftFIFO 8 .
  *
  * @access   public
  */
  public function getCurrListEntryFileType() {
    return secureblackbox_sftpclient_get($this->handle, 29 );
  }


 /**
  * Controls file execution permission for the group users.
  *
  * @access   public
  */
  public function getCurrListEntryGroupExecute() {
    return secureblackbox_sftpclient_get($this->handle, 30 );
  }


 /**
  * Controls file read permission for the group users.
  *
  * @access   public
  */
  public function getCurrListEntryGroupRead() {
    return secureblackbox_sftpclient_get($this->handle, 31 );
  }


 /**
  * Controls file write permission for the group users.
  *
  * @access   public
  */
  public function getCurrListEntryGroupWrite() {
    return secureblackbox_sftpclient_get($this->handle, 32 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCurrListEntryHandle() {
    return secureblackbox_sftpclient_get($this->handle, 33 );
  }


 /**
  * Contains the long name of the file (human-readable, ftp-like).
  *
  * @access   public
  */
  public function getCurrListEntryLongName() {
    return secureblackbox_sftpclient_get($this->handle, 34 );
  }


 /**
  * Specifies the last modification time, in UTC.
  *
  * @access   public
  */
  public function getCurrListEntryMTime() {
    return secureblackbox_sftpclient_get($this->handle, 35 );
  }


 /**
  * Specifies the file name.
  *
  * @access   public
  */
  public function getCurrListEntryName() {
    return secureblackbox_sftpclient_get($this->handle, 36 );
  }


 /**
  * Controls file execution permission for other users  (users that are neither owners, nor belong to the same group).
  *
  * @access   public
  */
  public function getCurrListEntryOtherExecute() {
    return secureblackbox_sftpclient_get($this->handle, 37 );
  }


 /**
  * Controls file read permission for other users  (users that are neither owners, nor belong to the same group).
  *
  * @access   public
  */
  public function getCurrListEntryOtherRead() {
    return secureblackbox_sftpclient_get($this->handle, 38 );
  }


 /**
  * Controls file write permission for other users  (users that are neither owners, nor belong to the same group).
  *
  * @access   public
  */
  public function getCurrListEntryOtherWrite() {
    return secureblackbox_sftpclient_get($this->handle, 39 );
  }


 /**
  * Specifies the owner of the file/directory.
  *
  * @access   public
  */
  public function getCurrListEntryOwner() {
    return secureblackbox_sftpclient_get($this->handle, 40 );
  }


 /**
  * Contains the full path to the file.
  *
  * @access   public
  */
  public function getCurrListEntryPath() {
    return secureblackbox_sftpclient_get($this->handle, 41 );
  }


 /**
  * The size of the file in bytes.
  *
  * @access   public
  */
  public function getCurrListEntrySize() {
    return secureblackbox_sftpclient_get($this->handle, 42 );
  }


 /**
  * Controls file execution permission for the file owner.
  *
  * @access   public
  */
  public function getCurrListEntryUserExecute() {
    return secureblackbox_sftpclient_get($this->handle, 43 );
  }


 /**
  * Controls file read permission for the file owner.
  *
  * @access   public
  */
  public function getCurrListEntryUserRead() {
    return secureblackbox_sftpclient_get($this->handle, 44 );
  }


 /**
  * Controls file write permission for the file owner.
  *
  * @access   public
  */
  public function getCurrListEntryUserWrite() {
    return secureblackbox_sftpclient_get($this->handle, 45 );
  }


 /**
  * The download block size in bytes.
  *
  * @access   public
  */
  public function getDownloadBlockSize() {
    return secureblackbox_sftpclient_get($this->handle, 46 );
  }
 /**
  * The download block size in bytes.
  *
  * @access   public
  * @param    int   value
  */
  public function setDownloadBlockSize($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_sftpclient_get($this->handle, 47 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_sftpclient_get($this->handle, 48 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 48, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_sftpclient_get($this->handle, 49 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 49, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_sftpclient_get($this->handle, 50 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_sftpclient_get($this->handle, 51 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 51, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_sftpclient_get($this->handle, 52 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_sftpclient_get($this->handle, 53 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_sftpclient_get($this->handle, 54 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_sftpclient_get($this->handle, 55 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enforces compression for the SSH layer.
  *
  * @access   public
  */
  public function getForceCompression() {
    return secureblackbox_sftpclient_get($this->handle, 56 );
  }
 /**
  * Enforces compression for the SSH layer.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setForceCompression($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the SHA-1 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getKeyFingerprintSHA1() {
    return secureblackbox_sftpclient_get($this->handle, 57 );
  }


 /**
  * Contains the SHA-256 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getKeyFingerprintSHA256() {
    return secureblackbox_sftpclient_get($this->handle, 58 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKeyHandle() {
    return secureblackbox_sftpclient_get($this->handle, 59 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKeyHandle($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 59, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Higher SFTP version to support.
  *
  * @access   public
  */
  public function getMaxSFTPVersion() {
    return secureblackbox_sftpclient_get($this->handle, 60 );
  }
 /**
  * Higher SFTP version to support.
  *
  * @access   public
  * @param    int   value
  */
  public function setMaxSFTPVersion($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 60, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Lower SFTP version to support.
  *
  * @access   public
  */
  public function getMinSFTPVersion() {
    return secureblackbox_sftpclient_get($this->handle, 61 );
  }
 /**
  * Lower SFTP version to support.
  *
  * @access   public
  * @param    int   value
  */
  public function setMinSFTPVersion($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 61, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies user's authentication password.
  *
  * @access   public
  */
  public function getPassword() {
    return secureblackbox_sftpclient_get($this->handle, 62 );
  }
 /**
  * Specifies user's authentication password.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassword($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 62, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of parallelized transfer requests.
  *
  * @access   public
  */
  public function getPipelineLength() {
    return secureblackbox_sftpclient_get($this->handle, 63 );
  }
 /**
  * The number of parallelized transfer requests.
  *
  * @access   public
  * @param    int   value
  */
  public function setPipelineLength($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 63, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_sftpclient_get($this->handle, 64 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 64, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_sftpclient_get($this->handle, 65 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 65, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_sftpclient_get($this->handle, 66 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 66, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_sftpclient_get($this->handle, 67 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_sftpclient_get($this->handle, 68 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 68, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_sftpclient_get($this->handle, 69 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 69, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_sftpclient_get($this->handle, 70 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 70, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_sftpclient_get($this->handle, 71 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_sftpclient_get($this->handle, 72 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_sftpclient_get($this->handle, 73 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_sftpclient_get($this->handle, 74 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the key algorithm.
  *
  * @access   public
  */
  public function getServerKeyAlgorithm() {
    return secureblackbox_sftpclient_get($this->handle, 75 );
  }


 /**
  * The number of bits in the key: the more the better, 2048 or 4096 are typical values.
  *
  * @access   public
  */
  public function getServerKeyBits() {
    return secureblackbox_sftpclient_get($this->handle, 76 );
  }


 /**
  * The comment for the public key.
  *
  * @access   public
  */
  public function getServerKeyComment() {
    return secureblackbox_sftpclient_get($this->handle, 77 );
  }


 /**
  * Specifies the elliptical curve when EC cryptography is used.
  *
  * @access   public
  */
  public function getServerKeyCurve() {
    return secureblackbox_sftpclient_get($this->handle, 78 );
  }


 /**
  * The G (Generator) parameter of the DSS signature key.
  *
  * @access   public
  */
  public function getServerKeyDSSG() {
    return secureblackbox_sftpclient_get($this->handle, 79 );
  }


 /**
  * The P (Prime) parameter of the DSS signature key.
  *
  * @access   public
  */
  public function getServerKeyDSSP() {
    return secureblackbox_sftpclient_get($this->handle, 80 );
  }


 /**
  * The Q (Prime Factor) parameter of the DSS signature key.
  *
  * @access   public
  */
  public function getServerKeyDSSQ() {
    return secureblackbox_sftpclient_get($this->handle, 81 );
  }


 /**
  * The X (Private key) parameter of the DSS signature key.
  *
  * @access   public
  */
  public function getServerKeyDSSX() {
    return secureblackbox_sftpclient_get($this->handle, 82 );
  }


 /**
  * The Y (Public key) parameter of the DSS signature key.
  *
  * @access   public
  */
  public function getServerKeyDSSY() {
    return secureblackbox_sftpclient_get($this->handle, 83 );
  }


 /**
  * The value of the secret key (the order of the public key, D) if elliptic curve (EC) cryptography is used.
  *
  * @access   public
  */
  public function getServerKeyECCD() {
    return secureblackbox_sftpclient_get($this->handle, 84 );
  }


 /**
  * The value of the X coordinate of the public key if elliptic curve (EC) cryptography is used.
  *
  * @access   public
  */
  public function getServerKeyECCQX() {
    return secureblackbox_sftpclient_get($this->handle, 85 );
  }


 /**
  * The value of the Y coordinate of the public key if elliptic curve (EC) cryptography is used.
  *
  * @access   public
  */
  public function getServerKeyECCQY() {
    return secureblackbox_sftpclient_get($this->handle, 86 );
  }


 /**
  * The value of the private key if EdDSA (Edwards-curve Digital Signature Algorithm) algorithm is used.
  *
  * @access   public
  */
  public function getServerKeyEdPrivate() {
    return secureblackbox_sftpclient_get($this->handle, 87 );
  }


 /**
  * The value of the public key if EdDSA (Edwards-curve Digital Signature Algorithm) algorithm is used.
  *
  * @access   public
  */
  public function getServerKeyEdPublic() {
    return secureblackbox_sftpclient_get($this->handle, 88 );
  }


 /**
  * Contains the MD5 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getServerKeyFingerprintMD5() {
    return secureblackbox_sftpclient_get($this->handle, 89 );
  }


 /**
  * Contains the SHA-1 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getServerKeyFingerprintSHA1() {
    return secureblackbox_sftpclient_get($this->handle, 90 );
  }


 /**
  * Contains the SHA-256 fingerprint (hash) of the key.
  *
  * @access   public
  */
  public function getServerKeyFingerprintSHA256() {
    return secureblackbox_sftpclient_get($this->handle, 91 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getServerKeyHandle() {
    return secureblackbox_sftpclient_get($this->handle, 92 );
  }


 /**
  * Whether the key is extractable (e.
  *
  * @access   public
  */
  public function getServerKeyIsExtractable() {
    return secureblackbox_sftpclient_get($this->handle, 93 );
  }


 /**
  * Whether this key is a private key or not.
  *
  * @access   public
  */
  public function getServerKeyIsPrivate() {
    return secureblackbox_sftpclient_get($this->handle, 94 );
  }


 /**
  * Whether this key is a public key or not.
  *
  * @access   public
  */
  public function getServerKeyIsPublic() {
    return secureblackbox_sftpclient_get($this->handle, 95 );
  }


 /**
  * Returns the number of iterations of the Key Derivation Function (KDF) used to generate this key.
  *
  * @access   public
  */
  public function getServerKeyKDFRounds() {
    return secureblackbox_sftpclient_get($this->handle, 96 );
  }


 /**
  * The salt value used by the Key Derivation Function (KDF) to generate this key.
  *
  * @access   public
  */
  public function getServerKeyKDFSalt() {
    return secureblackbox_sftpclient_get($this->handle, 97 );
  }


 /**
  * Specifies the format in which the key is stored.
  *
  * @access   public
  */
  public function getServerKeyKeyFormat() {
    return secureblackbox_sftpclient_get($this->handle, 98 );
  }


 /**
  * Specifies the key protection algorithm.
  *
  * @access   public
  */
  public function getServerKeyKeyProtectionAlgorithm() {
    return secureblackbox_sftpclient_get($this->handle, 99 );
  }


 /**
  * Returns the e parameter (public exponent) of the RSA key.
  *
  * @access   public
  */
  public function getServerKeyRSAExponent() {
    return secureblackbox_sftpclient_get($this->handle, 100 );
  }


 /**
  * Returns the iqmp parameter of the RSA key.
  *
  * @access   public
  */
  public function getServerKeyRSAIQMP() {
    return secureblackbox_sftpclient_get($this->handle, 101 );
  }


 /**
  * Returns the m parameter (public modulus) of the RSA key.
  *
  * @access   public
  */
  public function getServerKeyRSAModulus() {
    return secureblackbox_sftpclient_get($this->handle, 102 );
  }


 /**
  * Returns the p parameter (first factor of the common modulus n) of the RSA key.
  *
  * @access   public
  */
  public function getServerKeyRSAP() {
    return secureblackbox_sftpclient_get($this->handle, 103 );
  }


 /**
  * Returns the d parameter (private exponent) of the RSA key.
  *
  * @access   public
  */
  public function getServerKeyRSAPrivateExponent() {
    return secureblackbox_sftpclient_get($this->handle, 104 );
  }


 /**
  * Returns the q parameter (second factor of the common modulus n) of the RSA key.
  *
  * @access   public
  */
  public function getServerKeyRSAQ() {
    return secureblackbox_sftpclient_get($this->handle, 105 );
  }


 /**
  * Specifies the public key owner (subject).
  *
  * @access   public
  */
  public function getServerKeySubject() {
    return secureblackbox_sftpclient_get($this->handle, 106 );
  }


 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_sftpclient_get($this->handle, 107 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 107, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_sftpclient_get($this->handle, 108 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 108, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_sftpclient_get($this->handle, 109 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 109, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_sftpclient_get($this->handle, 110 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 110, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_sftpclient_get($this->handle, 111 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 111, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_sftpclient_get($this->handle, 112 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 112, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_sftpclient_get($this->handle, 113 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 113, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_sftpclient_get($this->handle, 114 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 114, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_sftpclient_get($this->handle, 115 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 115, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_sftpclient_get($this->handle, 116 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 116, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_sftpclient_get($this->handle, 117 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 117, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether the SSH client should adjust its list of supported ciphers 'on-the-fly' for greater compatibility with the server it is connecting to.
  *
  * @access   public
  */
  public function getSSHSettingsAutoAdjustCiphers() {
    return secureblackbox_sftpclient_get($this->handle, 118 );
  }
 /**
  * Whether the SSH client should adjust its list of supported ciphers 'on-the-fly' for greater compatibility with the server it is connecting to.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSSHSettingsAutoAdjustCiphers($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 118, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to choose base configuration of SSH settings, tuned up for different purposes such as high security or higher compatibility.
  *
  * @access   public
  */
  public function getSSHSettingsBaseConfiguration() {
    return secureblackbox_sftpclient_get($this->handle, 119 );
  }
 /**
  * Allows to choose base configuration of SSH settings, tuned up for different purposes such as high security or higher compatibility.
  *
  * @access   public
  * @param    int   value
  */
  public function setSSHSettingsBaseConfiguration($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 119, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the algorithms which can be used  to compress data during the SSH session.
  *
  * @access   public
  */
  public function getSSHSettingsCompressionAlgorithms() {
    return secureblackbox_sftpclient_get($this->handle, 120 );
  }
 /**
  * Specifies the algorithms which can be used  to compress data during the SSH session.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsCompressionAlgorithms($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 120, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Possible values for the Compression Level range from 0 (minimum compression)  to 9 (maximum compression).
  *
  * @access   public
  */
  public function getSSHSettingsCompressionLevel() {
    return secureblackbox_sftpclient_get($this->handle, 121 );
  }
 /**
  * Possible values for the Compression Level range from 0 (minimum compression)  to 9 (maximum compression).
  *
  * @access   public
  * @param    int   value
  */
  public function setSSHSettingsCompressionLevel($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 121, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The SSH window size specifies how many bytes the client  can send to the server in the command channel.
  *
  * @access   public
  */
  public function getSSHSettingsDefaultWindowSize() {
    return secureblackbox_sftpclient_get($this->handle, 122 );
  }
 /**
  * The SSH window size specifies how many bytes the client  can send to the server in the command channel.
  *
  * @access   public
  * @param    int   value
  */
  public function setSSHSettingsDefaultWindowSize($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 122, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the encryption algorithms which can be used during SSH connection.
  *
  * @access   public
  */
  public function getSSHSettingsEncryptionAlgorithms() {
    return secureblackbox_sftpclient_get($this->handle, 123 );
  }
 /**
  * Specifies the encryption algorithms which can be used during SSH connection.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsEncryptionAlgorithms($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 123, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether the SSH client should explicitly request compression.
  *
  * @access   public
  */
  public function getSSHSettingsForceCompression() {
    return secureblackbox_sftpclient_get($this->handle, 124 );
  }
 /**
  * Whether the SSH client should explicitly request compression.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSSHSettingsForceCompression($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 124, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A comma-separated list of authentication types.
  *
  * @access   public
  */
  public function getSSHSettingsGSSAuthTypes() {
    return secureblackbox_sftpclient_get($this->handle, 125 );
  }
 /**
  * A comma-separated list of authentication types.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsGSSAuthTypes($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 125, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Switches credential delegation on or off.
  *
  * @access   public
  */
  public function getSSHSettingsGSSDelegateCreds() {
    return secureblackbox_sftpclient_get($this->handle, 126 );
  }
 /**
  * Switches credential delegation on or off.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSSHSettingsGSSDelegateCreds($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 126, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The GSS host name, in form of a FQDN (e.
  *
  * @access   public
  */
  public function getSSHSettingsGSSHostname() {
    return secureblackbox_sftpclient_get($this->handle, 127 );
  }
 /**
  * The GSS host name, in form of a FQDN (e.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsGSSHostname($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 127, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A path to the GSS-API library (DLL or SO).
  *
  * @access   public
  */
  public function getSSHSettingsGSSLib() {
    return secureblackbox_sftpclient_get($this->handle, 128 );
  }
 /**
  * A path to the GSS-API library (DLL or SO).
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsGSSLib($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 128, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A comma-separated list of GSS mechanisms to use.
  *
  * @access   public
  */
  public function getSSHSettingsGSSMechanisms() {
    return secureblackbox_sftpclient_get($this->handle, 129 );
  }
 /**
  * A comma-separated list of GSS mechanisms to use.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsGSSMechanisms($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 129, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A comma-separated list of SSPI protocols.
  *
  * @access   public
  */
  public function getSSHSettingsGSSProtocols() {
    return secureblackbox_sftpclient_get($this->handle, 130 );
  }
 /**
  * A comma-separated list of SSPI protocols.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsGSSProtocols($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 130, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the maximal time for the SSH handshake to proceed, in seconds.
  *
  * @access   public
  */
  public function getSSHSettingsHandshakeTimeout() {
    return secureblackbox_sftpclient_get($this->handle, 131 );
  }
 /**
  * Specifies the maximal time for the SSH handshake to proceed, in seconds.
  *
  * @access   public
  * @param    int   value
  */
  public function setSSHSettingsHandshakeTimeout($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 131, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the key exchange algorithms which can be used to  establish the secure session.
  *
  * @access   public
  */
  public function getSSHSettingsKexAlgorithms() {
    return secureblackbox_sftpclient_get($this->handle, 132 );
  }
 /**
  * Specifies the key exchange algorithms which can be used to  establish the secure session.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsKexAlgorithms($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 132, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the MAC (message authentication code) algorithms  which may be used through the SSH session.
  *
  * @access   public
  */
  public function getSSHSettingsMacAlgorithms() {
    return secureblackbox_sftpclient_get($this->handle, 133 );
  }
 /**
  * Specifies the MAC (message authentication code) algorithms  which may be used through the SSH session.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsMacAlgorithms($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 133, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the maximum length of one SSH packet in bytes.
  *
  * @access   public
  */
  public function getSSHSettingsMaxSSHPacketSize() {
    return secureblackbox_sftpclient_get($this->handle, 134 );
  }
 /**
  * Specifies the maximum length of one SSH packet in bytes.
  *
  * @access   public
  * @param    int   value
  */
  public function setSSHSettingsMaxSSHPacketSize($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 134, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the minimal internal window size.
  *
  * @access   public
  */
  public function getSSHSettingsMinWindowSize() {
    return secureblackbox_sftpclient_get($this->handle, 135 );
  }
 /**
  * Specifies the minimal internal window size.
  *
  * @access   public
  * @param    int   value
  */
  public function setSSHSettingsMinWindowSize($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 135, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether handshake obfuscation is used.
  *
  * @access   public
  */
  public function getSSHSettingsObfuscateHandshake() {
    return secureblackbox_sftpclient_get($this->handle, 136 );
  }
 /**
  * Specifies whether handshake obfuscation is used.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSSHSettingsObfuscateHandshake($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 136, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the password used to encrypt the handshake when ObfuscateHandshake is set.
  *
  * @access   public
  */
  public function getSSHSettingsObfuscationPassword() {
    return secureblackbox_sftpclient_get($this->handle, 137 );
  }
 /**
  * Specifies the password used to encrypt the handshake when ObfuscateHandshake is set.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsObfuscationPassword($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 137, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the public key algorithms that can be used during the SSH handshake.
  *
  * @access   public
  */
  public function getSSHSettingsPublicKeyAlgorithms() {
    return secureblackbox_sftpclient_get($this->handle, 138 );
  }
 /**
  * Specifies the public key algorithms that can be used during the SSH handshake.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsPublicKeyAlgorithms($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 138, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether the user needs to change the password.
  *
  * @access   public
  */
  public function getSSHSettingsRequestPasswordChange() {
    return secureblackbox_sftpclient_get($this->handle, 139 );
  }
 /**
  * Whether the user needs to change the password.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSSHSettingsRequestPasswordChange($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 139, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the SSH software running on this server.
  *
  * @access   public
  */
  public function getSSHSettingsSoftwareName() {
    return secureblackbox_sftpclient_get($this->handle, 140 );
  }
 /**
  * The name of the SSH software running on this server.
  *
  * @access   public
  * @param    string   value
  */
  public function setSSHSettingsSoftwareName($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 140, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables explicit trust to all server keys.
  *
  * @access   public
  */
  public function getSSHSettingsTrustAllKeys() {
    return secureblackbox_sftpclient_get($this->handle, 141 );
  }
 /**
  * Enables or disables explicit trust to all server keys.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSSHSettingsTrustAllKeys($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 141, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables the use of external key agent, such as Putty key agent.
  *
  * @access   public
  */
  public function getSSHSettingsUseAuthAgent() {
    return secureblackbox_sftpclient_get($this->handle, 142 );
  }
 /**
  * Enables or disables the use of external key agent, such as Putty key agent.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSSHSettingsUseAuthAgent($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 142, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies supported SSH protocol versions.
  *
  * @access   public
  */
  public function getSSHSettingsVersions() {
    return secureblackbox_sftpclient_get($this->handle, 143 );
  }
 /**
  * Specifies supported SSH protocol versions.
  *
  * @access   public
  * @param    int   value
  */
  public function setSSHSettingsVersions($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 143, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A file containing the keys of authorized servers.
  *
  * @access   public
  */
  public function getTrustedKeysFile() {
    return secureblackbox_sftpclient_get($this->handle, 144 );
  }
 /**
  * A file containing the keys of authorized servers.
  *
  * @access   public
  * @param    string   value
  */
  public function setTrustedKeysFile($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 144, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The upload block size in bytes.
  *
  * @access   public
  */
  public function getUploadBlockSize() {
    return secureblackbox_sftpclient_get($this->handle, 145 );
  }
 /**
  * The upload block size in bytes.
  *
  * @access   public
  * @param    int   value
  */
  public function setUploadBlockSize($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 145, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The client's username to authenticate to the server.
  *
  * @access   public
  */
  public function getUsername() {
    return secureblackbox_sftpclient_get($this->handle, 146 );
  }
 /**
  * The client's username to authenticate to the server.
  *
  * @access   public
  * @param    string   value
  */
  public function setUsername($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 146, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables UTF8 for all string content.
  *
  * @access   public
  */
  public function getUseUTF8() {
    return secureblackbox_sftpclient_get($this->handle, 147 );
  }
 /**
  * Enables UTF8 for all string content.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setUseUTF8($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 147, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The SFTP version negotiated.
  *
  * @access   public
  */
  public function getVersion() {
    return secureblackbox_sftpclient_get($this->handle, 148 );
  }




  public function getRuntimeLicense() {
    return secureblackbox_sftpclient_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_sftpclient_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_sftpclient_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Fires when an authentication attempt is performed.
  *
  * @access   public
  * @param    array   Array of event parameters: authtype    
  */
  public function fireAuthAttempt($param) {
    return $param;
  }

 /**
  * Fires if an authentication attempt fails.
  *
  * @access   public
  * @param    array   Array of event parameters: authtype    
  */
  public function fireAuthFailed($param) {
    return $param;
  }

 /**
  * Reports a successful authentication.
  *
  * @access   public
  * @param    array   Array of event parameters:     
  */
  public function fireAuthSucceeded($param) {
    return $param;
  }

 /**
  * Reports the receipt of the Welcome message from the server.
  *
  * @access   public
  * @param    array   Array of event parameters: text, language    
  */
  public function fireBanner($param) {
    return $param;
  }

 /**
  * Reports SFTP connection closure.
  *
  * @access   public
  * @param    array   Array of event parameters: closereason    
  */
  public function fireDisconnect($param) {
    return $param;
  }

 /**
  * Information about errors during SFTP connection.
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
  * Signifies the start of a file transfer operation.
  *
  * @access   public
  * @param    array   Array of event parameters: operation, remotepath, localpath, skip, cancel    
  */
  public function fireFileOperation($param) {
    return $param;
  }

 /**
  * Signifies the completion of a file transfer operation.
  *
  * @access   public
  * @param    array   Array of event parameters: operation, remotepath, localpath, errorcode, comment, cancel    
  */
  public function fireFileOperationResult($param) {
    return $param;
  }

 /**
  * Signals that the server has introduced itself with a known key.
  *
  * @access   public
  * @param    array   Array of event parameters: algorithm, bits, fingerprintsha256    
  */
  public function fireKnownKeyReceived($param) {
    return $param;
  }

 /**
  * Reports a directory listing entry to the application.
  *
  * @access   public
  * @param    array   Array of event parameters: filename    
  */
  public function fireListEntry($param) {
    return $param;
  }

 /**
  * Signals that the server requests a password change.
  *
  * @access   public
  * @param    array   Array of event parameters: prompt, newpassword, cancel    
  */
  public function firePasswordChangeRequest($param) {
    return $param;
  }

 /**
  * Asks the application for the client's private key.
  *
  * @access   public
  * @param    array   Array of event parameters: skip    
  */
  public function firePrivateKeyNeeded($param) {
    return $param;
  }

 /**
  * Fires periodically during the data transfer.
  *
  * @access   public
  * @param    array   Array of event parameters: total, current, cancel    
  */
  public function fireProgress($param) {
    return $param;
  }

 /**
  * Signals that the server has introduced itself with an unknown key.
  *
  * @access   public
  * @param    array   Array of event parameters: algorithm, bits, fingerprintsha256, action    
  */
  public function fireUnknownKeyReceived($param) {
    return $param;
  }


}

?>
