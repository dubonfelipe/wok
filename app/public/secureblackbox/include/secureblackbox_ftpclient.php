<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - FTPClient Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_FTPClient {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_ftpclient_open(SECUREBLACKBOX_OEMKEY_701);
    secureblackbox_ftpclient_register_callback($this->handle, 1, array($this, 'fireCertificateValidate'));
    secureblackbox_ftpclient_register_callback($this->handle, 2, array($this, 'fireControlReceive'));
    secureblackbox_ftpclient_register_callback($this->handle, 3, array($this, 'fireControlSend'));
    secureblackbox_ftpclient_register_callback($this->handle, 4, array($this, 'fireError'));
    secureblackbox_ftpclient_register_callback($this->handle, 5, array($this, 'fireExternalSign'));
    secureblackbox_ftpclient_register_callback($this->handle, 6, array($this, 'fireFileOperation'));
    secureblackbox_ftpclient_register_callback($this->handle, 7, array($this, 'fireFileOperationResult'));
    secureblackbox_ftpclient_register_callback($this->handle, 8, array($this, 'fireListEntry'));
    secureblackbox_ftpclient_register_callback($this->handle, 9, array($this, 'fireProgress'));
    secureblackbox_ftpclient_register_callback($this->handle, 10, array($this, 'fireTextDataLine'));
  }
  
  public function __destruct() {
    secureblackbox_ftpclient_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_ftpclient_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_ftpclient_get_last_error_code($this->handle);
  }

 /**
  * Aborts the previous FTP service command and any associated transfer of data.
  *
  * @access   public
  */
  public function doAbort() {
    $ret = secureblackbox_ftpclient_do_abort($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends an Account command.
  *
  * @access   public
  * @param    string    acctinfo
  */
  public function doAcct($acctinfo) {
    $ret = secureblackbox_ftpclient_do_acct($this->handle, $acctinfo);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
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
  public function doAppendFile($localfile, $remotefile) {
    $ret = secureblackbox_ftpclient_do_appendfile($this->handle, $localfile, $remotefile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Changes the current directory.
  *
  * @access   public
  * @param    string    remotedir
  */
  public function doChangeDir($remotedir) {
    $ret = secureblackbox_ftpclient_do_changedir($this->handle, $remotedir);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends CCC (Clear Command Channel) command to the server.
  *
  * @access   public
  * @param    boolean    gracefulsslclosure
  */
  public function doClearCommandChannel($gracefulsslclosure) {
    $ret = secureblackbox_ftpclient_do_clearcommandchannel($this->handle, $gracefulsslclosure);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
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
    $ret = secureblackbox_ftpclient_do_config($this->handle, $configurationstring);
		$err = secureblackbox_ftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Connects to the FTP server.
  *
  * @access   public
  * @param    string    address
  * @param    int    port
  */
  public function doConnect($address, $port) {
    $ret = secureblackbox_ftpclient_do_connect($this->handle, $address, $port);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Deletes a directory on the server.
  *
  * @access   public
  * @param    string    remotedir
  */
  public function doDeleteDir($remotedir) {
    $ret = secureblackbox_ftpclient_do_deletedir($this->handle, $remotedir);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Deletes a file on the server.
  *
  * @access   public
  * @param    string    remotefile
  */
  public function doDeleteFile($remotefile) {
    $ret = secureblackbox_ftpclient_do_deletefile($this->handle, $remotefile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Checks if a directory exists on the server.
  *
  * @access   public
  * @param    string    remotedir
  */
  public function doDirExists($remotedir) {
    $ret = secureblackbox_ftpclient_do_direxists($this->handle, $remotedir);
		$err = 0;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Disconnects from the server.
  *
  * @access   public
  */
  public function doDisconnect() {
    $ret = secureblackbox_ftpclient_do_disconnect($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Downloads a file from the server.
  *
  * @access   public
  * @param    string    remotefile
  * @param    string    localfile
  */
  public function doDownloadFile($remotefile, $localfile) {
    $ret = secureblackbox_ftpclient_do_downloadfile($this->handle, $remotefile, $localfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Downloads multiple files from the server.
  *
  * @access   public
  * @param    string    remotepath
  * @param    string    localdir
  */
  public function doDownloadFiles($remotepath, $localdir) {
    $ret = secureblackbox_ftpclient_do_downloadfiles($this->handle, $remotepath, $localdir);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Checks if a file exists on the server.
  *
  * @access   public
  * @param    string    remotefile
  */
  public function doFileExists($remotefile) {
    $ret = secureblackbox_ftpclient_do_fileexists($this->handle, $remotefile);
		$err = 0;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the server-side current directory.
  *
  * @access   public
  */
  public function doGetCurrentDir() {
    $ret = secureblackbox_ftpclient_do_getcurrentdir($this->handle);
		$err = secureblackbox_ftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the size of a remote file.
  *
  * @access   public
  * @param    string    remotefile
  */
  public function doGetFileSize($remotefile) {
    $ret = secureblackbox_ftpclient_do_getfilesize($this->handle, $remotefile);
		$err = secureblackbox_ftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Lists the contents of a remote directory.
  *
  * @access   public
  * @param    boolean    includefiles
  * @param    boolean    includedirectories
  */
  public function doListDir($includefiles, $includedirectories) {
    $ret = secureblackbox_ftpclient_do_listdir($this->handle, $includefiles, $includedirectories);
		$err = secureblackbox_ftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
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
    $ret = secureblackbox_ftpclient_do_makedir($this->handle, $remotedir);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a NOOP command to the server.
  *
  * @access   public
  */
  public function doNoop() {
    $ret = secureblackbox_ftpclient_do_noop($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
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
  public function doRename($sourcefile, $destfile) {
    $ret = secureblackbox_ftpclient_do_rename($this->handle, $sourcefile, $destfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sends a custom command to the server.
  *
  * @access   public
  * @param    string    command
  */
  public function doSendCommand($command) {
    $ret = secureblackbox_ftpclient_do_sendcommand($this->handle, $command);
		$err = secureblackbox_ftpclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
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
    $ret = secureblackbox_ftpclient_do_uploadfile($this->handle, $localfile, $remotefile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
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
    $ret = secureblackbox_ftpclient_do_uploadfiles($this->handle, $localpath, $remotedir);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_ftpclient_get($this->handle, 0);
  }
 /**
  * Enables or disables automatic adjustment of passive-mode addresses.
  *
  * @access   public
  */
  public function getAdjustPasvAddress() {
    return secureblackbox_ftpclient_get($this->handle, 1 );
  }
 /**
  * Enables or disables automatic adjustment of passive-mode addresses.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setAdjustPasvAddress($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  */
  public function getBlockedCertCount() {
    return secureblackbox_ftpclient_get($this->handle, 2 );
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setBlockedCertCount($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getBlockedCertBytes($blockedcertindex) {
    return secureblackbox_ftpclient_get($this->handle, 3 , $blockedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getBlockedCertHandle($blockedcertindex) {
    return secureblackbox_ftpclient_get($this->handle, 4 , $blockedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setBlockedCertHandle($blockedcertindex, $value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 4, $value , $blockedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ClientCert arrays.
  *
  * @access   public
  */
  public function getClientCertCount() {
    return secureblackbox_ftpclient_get($this->handle, 5 );
  }
 /**
  * The number of records in the ClientCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setClientCertCount($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getClientCertBytes($clientcertindex) {
    return secureblackbox_ftpclient_get($this->handle, 6 , $clientcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getClientCertHandle($clientcertindex) {
    return secureblackbox_ftpclient_get($this->handle, 7 , $clientcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setClientCertHandle($clientcertindex, $value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 7, $value , $clientcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether the class is connected to the server.
  *
  * @access   public
  */
  public function getConnected() {
    return secureblackbox_ftpclient_get($this->handle, 8 );
  }


 /**
  * Indicates whether the encryption algorithm used is an AEAD cipher.
  *
  * @access   public
  */
  public function getCtlConnInfoAEADCipher() {
    return secureblackbox_ftpclient_get($this->handle, 9 );
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getCtlConnInfoChainValidationDetails() {
    return secureblackbox_ftpclient_get($this->handle, 10 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getCtlConnInfoChainValidationResult() {
    return secureblackbox_ftpclient_get($this->handle, 11 );
  }


 /**
  * The cipher suite employed by this connection.
  *
  * @access   public
  */
  public function getCtlConnInfoCiphersuite() {
    return secureblackbox_ftpclient_get($this->handle, 12 );
  }


 /**
  * Specifies whether client authentication was performed during this connection.
  *
  * @access   public
  */
  public function getCtlConnInfoClientAuthenticated() {
    return secureblackbox_ftpclient_get($this->handle, 13 );
  }


 /**
  * Indicates whether the connection has been established fully.
  *
  * @access   public
  */
  public function getCtlConnInfoConnectionEstablished() {
    return secureblackbox_ftpclient_get($this->handle, 14 );
  }


 /**
  * The unique identifier assigned to this connection.
  *
  * @access   public
  */
  public function getCtlConnInfoConnectionID() {
    return secureblackbox_ftpclient_get($this->handle, 15 );
  }


 /**
  * The digest algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getCtlConnInfoDigestAlgorithm() {
    return secureblackbox_ftpclient_get($this->handle, 16 );
  }


 /**
  * The symmetric encryption algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getCtlConnInfoEncryptionAlgorithm() {
    return secureblackbox_ftpclient_get($this->handle, 17 );
  }


 /**
  * Indicates whether a TLS connection uses a reduced-strength exportable cipher.
  *
  * @access   public
  */
  public function getCtlConnInfoExportable() {
    return secureblackbox_ftpclient_get($this->handle, 18 );
  }


 /**
  * The key exchange algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getCtlConnInfoKeyExchangeAlgorithm() {
    return secureblackbox_ftpclient_get($this->handle, 19 );
  }


 /**
  * The length of the key exchange key of a TLS-enabled connection.
  *
  * @access   public
  */
  public function getCtlConnInfoKeyExchangeKeyBits() {
    return secureblackbox_ftpclient_get($this->handle, 20 );
  }


 /**
  * The elliptic curve used in this connection.
  *
  * @access   public
  */
  public function getCtlConnInfoNamedECCurve() {
    return secureblackbox_ftpclient_get($this->handle, 21 );
  }


 /**
  * Indicates whether the chosen ciphersuite provides perfect forward secrecy (PFS).
  *
  * @access   public
  */
  public function getCtlConnInfoPFSCipher() {
    return secureblackbox_ftpclient_get($this->handle, 22 );
  }


 /**
  * A hint professed by the server to help the client select the PSK identity to use.
  *
  * @access   public
  */
  public function getCtlConnInfoPreSharedIdentityHint() {
    return secureblackbox_ftpclient_get($this->handle, 23 );
  }


 /**
  * The length of the public key.
  *
  * @access   public
  */
  public function getCtlConnInfoPublicKeyBits() {
    return secureblackbox_ftpclient_get($this->handle, 24 );
  }


 /**
  * Indicates whether a TLS-enabled connection was spawned from another TLS connection.
  *
  * @access   public
  */
  public function getCtlConnInfoResumedSession() {
    return secureblackbox_ftpclient_get($this->handle, 25 );
  }


 /**
  * Indicates whether TLS or SSL is enabled for this connection.
  *
  * @access   public
  */
  public function getCtlConnInfoSecureConnection() {
    return secureblackbox_ftpclient_get($this->handle, 26 );
  }


 /**
  * Indicates whether server authentication was performed during a TLS-enabled connection.
  *
  * @access   public
  */
  public function getCtlConnInfoServerAuthenticated() {
    return secureblackbox_ftpclient_get($this->handle, 27 );
  }


 /**
  * The signature algorithm used in a TLS handshake.
  *
  * @access   public
  */
  public function getCtlConnInfoSignatureAlgorithm() {
    return secureblackbox_ftpclient_get($this->handle, 28 );
  }


 /**
  * The block size of the symmetric algorithm used.
  *
  * @access   public
  */
  public function getCtlConnInfoSymmetricBlockSize() {
    return secureblackbox_ftpclient_get($this->handle, 29 );
  }


 /**
  * The key length of the symmetric algorithm used.
  *
  * @access   public
  */
  public function getCtlConnInfoSymmetricKeyBits() {
    return secureblackbox_ftpclient_get($this->handle, 30 );
  }


 /**
  * The total number of bytes received over this connection.
  *
  * @access   public
  */
  public function getCtlConnInfoTotalBytesReceived() {
    return secureblackbox_ftpclient_get($this->handle, 31 );
  }


 /**
  * The total number of bytes sent over this connection.
  *
  * @access   public
  */
  public function getCtlConnInfoTotalBytesSent() {
    return secureblackbox_ftpclient_get($this->handle, 32 );
  }


 /**
  * Contains the server certificate's chain validation log.
  *
  * @access   public
  */
  public function getCtlConnInfoValidationLog() {
    return secureblackbox_ftpclient_get($this->handle, 33 );
  }


 /**
  * Indicates the version of SSL/TLS protocol negotiated during this connection.
  *
  * @access   public
  */
  public function getCtlConnInfoVersion() {
    return secureblackbox_ftpclient_get($this->handle, 34 );
  }


 /**
  * The file listing format: cfefUnknown 0 cfefUnix 1 cfefWindows 2 cfefMLSD 3 .
  *
  * @access   public
  */
  public function getCurrListEntryEntryFormat() {
    return secureblackbox_ftpclient_get($this->handle, 35 );
  }


 /**
  * File last modification date.
  *
  * @access   public
  */
  public function getCurrListEntryFileDate() {
    return secureblackbox_ftpclient_get($this->handle, 36 );
  }


 /**
  * The type of the entry: cfetUnknown 0 cfetDirectory 1 cfetFile 2 cfetSymlink 3 cfetSpecial 4 cfetCurrentDirectory 5 cfetParentDirectory 6 .
  *
  * @access   public
  */
  public function getCurrListEntryFileType() {
    return secureblackbox_ftpclient_get($this->handle, 37 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCurrListEntryHandle() {
    return secureblackbox_ftpclient_get($this->handle, 38 );
  }


 /**
  * The file or directory name.
  *
  * @access   public
  */
  public function getCurrListEntryName() {
    return secureblackbox_ftpclient_get($this->handle, 39 );
  }


 /**
  * The full path to the file or directory.
  *
  * @access   public
  */
  public function getCurrListEntryPath() {
    return secureblackbox_ftpclient_get($this->handle, 40 );
  }


 /**
  * The unparsed entry as returned by the server.
  *
  * @access   public
  */
  public function getCurrListEntryRawData() {
    return secureblackbox_ftpclient_get($this->handle, 41 );
  }


 /**
  * File size in bytes.
  *
  * @access   public
  */
  public function getCurrListEntrySize() {
    return secureblackbox_ftpclient_get($this->handle, 42 );
  }


 /**
  * Indicates whether the encryption algorithm used is an AEAD cipher.
  *
  * @access   public
  */
  public function getDataConnInfoAEADCipher() {
    return secureblackbox_ftpclient_get($this->handle, 43 );
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getDataConnInfoChainValidationDetails() {
    return secureblackbox_ftpclient_get($this->handle, 44 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getDataConnInfoChainValidationResult() {
    return secureblackbox_ftpclient_get($this->handle, 45 );
  }


 /**
  * The cipher suite employed by this connection.
  *
  * @access   public
  */
  public function getDataConnInfoCiphersuite() {
    return secureblackbox_ftpclient_get($this->handle, 46 );
  }


 /**
  * Specifies whether client authentication was performed during this connection.
  *
  * @access   public
  */
  public function getDataConnInfoClientAuthenticated() {
    return secureblackbox_ftpclient_get($this->handle, 47 );
  }


 /**
  * Indicates whether the connection has been established fully.
  *
  * @access   public
  */
  public function getDataConnInfoConnectionEstablished() {
    return secureblackbox_ftpclient_get($this->handle, 48 );
  }


 /**
  * The unique identifier assigned to this connection.
  *
  * @access   public
  */
  public function getDataConnInfoConnectionID() {
    return secureblackbox_ftpclient_get($this->handle, 49 );
  }


 /**
  * The digest algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getDataConnInfoDigestAlgorithm() {
    return secureblackbox_ftpclient_get($this->handle, 50 );
  }


 /**
  * The symmetric encryption algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getDataConnInfoEncryptionAlgorithm() {
    return secureblackbox_ftpclient_get($this->handle, 51 );
  }


 /**
  * Indicates whether a TLS connection uses a reduced-strength exportable cipher.
  *
  * @access   public
  */
  public function getDataConnInfoExportable() {
    return secureblackbox_ftpclient_get($this->handle, 52 );
  }


 /**
  * The key exchange algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getDataConnInfoKeyExchangeAlgorithm() {
    return secureblackbox_ftpclient_get($this->handle, 53 );
  }


 /**
  * The length of the key exchange key of a TLS-enabled connection.
  *
  * @access   public
  */
  public function getDataConnInfoKeyExchangeKeyBits() {
    return secureblackbox_ftpclient_get($this->handle, 54 );
  }


 /**
  * The elliptic curve used in this connection.
  *
  * @access   public
  */
  public function getDataConnInfoNamedECCurve() {
    return secureblackbox_ftpclient_get($this->handle, 55 );
  }


 /**
  * Indicates whether the chosen ciphersuite provides perfect forward secrecy (PFS).
  *
  * @access   public
  */
  public function getDataConnInfoPFSCipher() {
    return secureblackbox_ftpclient_get($this->handle, 56 );
  }


 /**
  * A hint professed by the server to help the client select the PSK identity to use.
  *
  * @access   public
  */
  public function getDataConnInfoPreSharedIdentityHint() {
    return secureblackbox_ftpclient_get($this->handle, 57 );
  }


 /**
  * The length of the public key.
  *
  * @access   public
  */
  public function getDataConnInfoPublicKeyBits() {
    return secureblackbox_ftpclient_get($this->handle, 58 );
  }


 /**
  * Indicates whether a TLS-enabled connection was spawned from another TLS connection.
  *
  * @access   public
  */
  public function getDataConnInfoResumedSession() {
    return secureblackbox_ftpclient_get($this->handle, 59 );
  }


 /**
  * Indicates whether TLS or SSL is enabled for this connection.
  *
  * @access   public
  */
  public function getDataConnInfoSecureConnection() {
    return secureblackbox_ftpclient_get($this->handle, 60 );
  }


 /**
  * Indicates whether server authentication was performed during a TLS-enabled connection.
  *
  * @access   public
  */
  public function getDataConnInfoServerAuthenticated() {
    return secureblackbox_ftpclient_get($this->handle, 61 );
  }


 /**
  * The signature algorithm used in a TLS handshake.
  *
  * @access   public
  */
  public function getDataConnInfoSignatureAlgorithm() {
    return secureblackbox_ftpclient_get($this->handle, 62 );
  }


 /**
  * The block size of the symmetric algorithm used.
  *
  * @access   public
  */
  public function getDataConnInfoSymmetricBlockSize() {
    return secureblackbox_ftpclient_get($this->handle, 63 );
  }


 /**
  * The key length of the symmetric algorithm used.
  *
  * @access   public
  */
  public function getDataConnInfoSymmetricKeyBits() {
    return secureblackbox_ftpclient_get($this->handle, 64 );
  }


 /**
  * The total number of bytes received over this connection.
  *
  * @access   public
  */
  public function getDataConnInfoTotalBytesReceived() {
    return secureblackbox_ftpclient_get($this->handle, 65 );
  }


 /**
  * The total number of bytes sent over this connection.
  *
  * @access   public
  */
  public function getDataConnInfoTotalBytesSent() {
    return secureblackbox_ftpclient_get($this->handle, 66 );
  }


 /**
  * Contains the server certificate's chain validation log.
  *
  * @access   public
  */
  public function getDataConnInfoValidationLog() {
    return secureblackbox_ftpclient_get($this->handle, 67 );
  }


 /**
  * Indicates the version of SSL/TLS protocol negotiated during this connection.
  *
  * @access   public
  */
  public function getDataConnInfoVersion() {
    return secureblackbox_ftpclient_get($this->handle, 68 );
  }


 /**
  * Enables or disables data channel encryption.
  *
  * @access   public
  */
  public function getEncryptDataChannel() {
    return secureblackbox_ftpclient_get($this->handle, 69 );
  }
 /**
  * Enables or disables data channel encryption.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setEncryptDataChannel($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 69, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_ftpclient_get($this->handle, 70 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 70, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_ftpclient_get($this->handle, 71 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_ftpclient_get($this->handle, 72 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_ftpclient_get($this->handle, 73 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_ftpclient_get($this->handle, 74 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_ftpclient_get($this->handle, 75 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 75, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_ftpclient_get($this->handle, 76 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 76, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_ftpclient_get($this->handle, 77 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 77, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_ftpclient_get($this->handle, 78 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  */
  public function getKnownCertCount() {
    return secureblackbox_ftpclient_get($this->handle, 79 );
  }
 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCertCount($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 79, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKnownCertBytes($knowncertindex) {
    return secureblackbox_ftpclient_get($this->handle, 80 , $knowncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCertHandle($knowncertindex) {
    return secureblackbox_ftpclient_get($this->handle, 81 , $knowncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCertHandle($knowncertindex, $value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 81, $value , $knowncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  */
  public function getKnownCRLCount() {
    return secureblackbox_ftpclient_get($this->handle, 82 );
  }
 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCRLCount($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 82, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getKnownCRLBytes($knowncrlindex) {
    return secureblackbox_ftpclient_get($this->handle, 83 , $knowncrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCRLHandle($knowncrlindex) {
    return secureblackbox_ftpclient_get($this->handle, 84 , $knowncrlindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCRLHandle($knowncrlindex, $value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 84, $value , $knowncrlindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  */
  public function getKnownOCSPCount() {
    return secureblackbox_ftpclient_get($this->handle, 85 );
  }
 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownOCSPCount($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 85, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getKnownOCSPBytes($knownocspindex) {
    return secureblackbox_ftpclient_get($this->handle, 86 , $knownocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownOCSPHandle($knownocspindex) {
    return secureblackbox_ftpclient_get($this->handle, 87 , $knownocspindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownOCSPHandle($knownocspindex, $value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 87, $value , $knownocspindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables passive transfer mode.
  *
  * @access   public
  */
  public function getPassiveMode() {
    return secureblackbox_ftpclient_get($this->handle, 88 );
  }
 /**
  * Enables or disables passive transfer mode.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setPassiveMode($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 88, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The connecting user's authentication password.
  *
  * @access   public
  */
  public function getPassword() {
    return secureblackbox_ftpclient_get($this->handle, 89 );
  }
 /**
  * The connecting user's authentication password.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassword($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 89, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_ftpclient_get($this->handle, 90 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 90, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_ftpclient_get($this->handle, 91 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 91, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_ftpclient_get($this->handle, 92 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 92, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_ftpclient_get($this->handle, 93 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 93, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_ftpclient_get($this->handle, 94 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 94, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_ftpclient_get($this->handle, 95 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 95, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_ftpclient_get($this->handle, 96 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 96, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_ftpclient_get($this->handle, 97 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 97, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_ftpclient_get($this->handle, 98 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 98, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_ftpclient_get($this->handle, 99 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 99, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_ftpclient_get($this->handle, 100 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 100, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The offset to restart the file transfer from.
  *
  * @access   public
  */
  public function getRestartAt() {
    return secureblackbox_ftpclient_get($this->handle, 101 );
  }
 /**
  * The offset to restart the file transfer from.
  *
  * @access   public
  * @param    int64   value
  */
  public function setRestartAt($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 101, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ServerCert arrays.
  *
  * @access   public
  */
  public function getServerCertCount() {
    return secureblackbox_ftpclient_get($this->handle, 102 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getServerCertBytes($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 103 , $servercertindex);
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getServerCertCAKeyID($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 104 , $servercertindex);
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getServerCertFingerprint($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 105 , $servercertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getServerCertHandle($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 106 , $servercertindex);
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getServerCertIssuer($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 107 , $servercertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getServerCertIssuerRDN($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 108 , $servercertindex);
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getServerCertKeyAlgorithm($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 109 , $servercertindex);
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getServerCertKeyBits($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 110 , $servercertindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getServerCertKeyFingerprint($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 111 , $servercertindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getServerCertKeyUsage($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 112 , $servercertindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getServerCertPublicKeyBytes($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 113 , $servercertindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getServerCertSelfSigned($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 114 , $servercertindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getServerCertSerialNumber($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 115 , $servercertindex);
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getServerCertSigAlgorithm($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 116 , $servercertindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getServerCertSubject($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 117 , $servercertindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getServerCertSubjectKeyID($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 118 , $servercertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getServerCertSubjectRDN($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 119 , $servercertindex);
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getServerCertValidFrom($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 120 , $servercertindex);
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getServerCertValidTo($servercertindex) {
    return secureblackbox_ftpclient_get($this->handle, 121 , $servercertindex);
  }


 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_ftpclient_get($this->handle, 122 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 122, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_ftpclient_get($this->handle, 123 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 123, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_ftpclient_get($this->handle, 124 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 124, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_ftpclient_get($this->handle, 125 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 125, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_ftpclient_get($this->handle, 126 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 126, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_ftpclient_get($this->handle, 127 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 127, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_ftpclient_get($this->handle, 128 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 128, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_ftpclient_get($this->handle, 129 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 129, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_ftpclient_get($this->handle, 130 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 130, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_ftpclient_get($this->handle, 131 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 131, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_ftpclient_get($this->handle, 132 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 132, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_ftpclient_get($this->handle, 133 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 133, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_ftpclient_get($this->handle, 134 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 134, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_ftpclient_get($this->handle, 135 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 135, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_ftpclient_get($this->handle, 136 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 136, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_ftpclient_get($this->handle, 137 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 137, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_ftpclient_get($this->handle, 138 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 138, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_ftpclient_get($this->handle, 139 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 139, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_ftpclient_get($this->handle, 140 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 140, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_ftpclient_get($this->handle, 141 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 141, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_ftpclient_get($this->handle, 142 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 142, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_ftpclient_get($this->handle, 143 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 143, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_ftpclient_get($this->handle, 144 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 144, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_ftpclient_get($this->handle, 145 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 145, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_ftpclient_get($this->handle, 146 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 146, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_ftpclient_get($this->handle, 147 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 147, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sets the file transfer mode.
  *
  * @access   public
  */
  public function getTransferType() {
    return secureblackbox_ftpclient_get($this->handle, 148 );
  }
 /**
  * Sets the file transfer mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setTransferType($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 148, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  */
  public function getTrustedCertCount() {
    return secureblackbox_ftpclient_get($this->handle, 149 );
  }
 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setTrustedCertCount($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 149, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTrustedCertBytes($trustedcertindex) {
    return secureblackbox_ftpclient_get($this->handle, 150 , $trustedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTrustedCertHandle($trustedcertindex) {
    return secureblackbox_ftpclient_get($this->handle, 151 , $trustedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setTrustedCertHandle($trustedcertindex, $value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 151, $value , $trustedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The connecting user's username (login name).
  *
  * @access   public
  */
  public function getUsername() {
    return secureblackbox_ftpclient_get($this->handle, 152 );
  }
 /**
  * The connecting user's username (login name).
  *
  * @access   public
  * @param    string   value
  */
  public function setUsername($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 152, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_ftpclient_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_ftpclient_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_ftpclient_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Fires when the server's TLS certificate has to be validated.
  *
  * @access   public
  * @param    array   Array of event parameters: address, accept    
  */
  public function fireCertificateValidate($param) {
    return $param;
  }

 /**
  * Fires when data is received via the control channel.
  *
  * @access   public
  * @param    array   Array of event parameters: textline    
  */
  public function fireControlReceive($param) {
    return $param;
  }

 /**
  * Fires when data is about to be set via the control channel.
  *
  * @access   public
  * @param    array   Array of event parameters: textline    
  */
  public function fireControlSend($param) {
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
  * Handles remote or external signing initiated by the SignExternal method or other source.
  *
  * @access   public
  * @param    array   Array of event parameters: operationid, hashalgorithm, pars, data, signeddata    
  */
  public function fireExternalSign($param) {
    return $param;
  }

 /**
  * Marks the start of a file transfer.
  *
  * @access   public
  * @param    array   Array of event parameters: operation, remotepath, localpath, skip, cancel    
  */
  public function fireFileOperation($param) {
    return $param;
  }

 /**
  * Reports the result of a file transfer operation.
  *
  * @access   public
  * @param    array   Array of event parameters: operation, remotepath, localpath, errorcode, comment, cancel    
  */
  public function fireFileOperationResult($param) {
    return $param;
  }

 /**
  * Reports a single entry from the requested directory listing.
  *
  * @access   public
  * @param    array   Array of event parameters: filename    
  */
  public function fireListEntry($param) {
    return $param;
  }

 /**
  * Reports the data transfer progress.
  *
  * @access   public
  * @param    array   Array of event parameters: total, current, cancel    
  */
  public function fireProgress($param) {
    return $param;
  }

 /**
  * Reports next transferred data line.
  *
  * @access   public
  * @param    array   Array of event parameters: textline    
  */
  public function fireTextDataLine($param) {
    return $param;
  }


}

?>
