<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - WebDAVClient Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_WebDAVClient {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_webdavclient_open(SECUREBLACKBOX_OEMKEY_704);
    secureblackbox_webdavclient_register_callback($this->handle, 1, array($this, 'fireCertificateValidate'));
    secureblackbox_webdavclient_register_callback($this->handle, 2, array($this, 'fireError'));
    secureblackbox_webdavclient_register_callback($this->handle, 3, array($this, 'fireExternalSign'));
    secureblackbox_webdavclient_register_callback($this->handle, 4, array($this, 'fireListEntry'));
    secureblackbox_webdavclient_register_callback($this->handle, 5, array($this, 'fireOperationError'));
    secureblackbox_webdavclient_register_callback($this->handle, 6, array($this, 'fireProgress'));
  }
  
  public function __destruct() {
    secureblackbox_webdavclient_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_webdavclient_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_webdavclient_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_webdavclient_do_config($this->handle, $configurationstring);
		$err = secureblackbox_webdavclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Establishes connection to a WebDAV server.
  *
  * @access   public
  * @param    string    url
  */
  public function doConnect($url) {
    $ret = secureblackbox_webdavclient_do_connect($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Copies a remote file.
  *
  * @access   public
  * @param    string    sourceurl
  * @param    string    desturl
  */
  public function doCopy($sourceurl, $desturl) {
    $ret = secureblackbox_webdavclient_do_copy($this->handle, $sourceurl, $desturl);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Performs custom WebDAV request.
  *
  * @access   public
  * @param    string    url
  * @param    string    method
  * @param    string    properties
  */
  public function doCustomRequest($url, $method, $properties) {
    $ret = secureblackbox_webdavclient_do_customrequest($this->handle, $url, $method, $properties);
		$err = secureblackbox_webdavclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes a remote directory.
  *
  * @access   public
  * @param    string    url
  */
  public function doDeleteDir($url) {
    $ret = secureblackbox_webdavclient_do_deletedir($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Deletes a remote file.
  *
  * @access   public
  * @param    string    url
  */
  public function doDeleteFile($url) {
    $ret = secureblackbox_webdavclient_do_deletefile($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Checks if a directory exists on the server.
  *
  * @access   public
  * @param    string    url
  */
  public function doDirExists($url) {
    $ret = secureblackbox_webdavclient_do_direxists($this->handle, $url);
		$err = 0;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Disconnects from the server.
  *
  * @access   public
  */
  public function doDisconnect() {
    $ret = secureblackbox_webdavclient_do_disconnect($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
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
    $ret = secureblackbox_webdavclient_do_downloadfile($this->handle, $remotefile, $localfile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Checks if the file exists on the server.
  *
  * @access   public
  * @param    string    url
  */
  public function doFileExists($url) {
    $ret = secureblackbox_webdavclient_do_fileexists($this->handle, $url);
		$err = 0;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Requests the size of a remote file.
  *
  * @access   public
  * @param    string    url
  */
  public function doGetFileSize($url) {
    $ret = secureblackbox_webdavclient_do_getfilesize($this->handle, $url);
		$err = secureblackbox_webdavclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Lists the remote directory contents.
  *
  * @access   public
  * @param    string    url
  * @param    boolean    includefiles
  * @param    boolean    includedirectories
  */
  public function doListDir($url, $includefiles, $includedirectories) {
    $ret = secureblackbox_webdavclient_do_listdir($this->handle, $url, $includefiles, $includedirectories);
		$err = secureblackbox_webdavclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Lists the remote directory contents, recursively.
  *
  * @access   public
  * @param    string    url
  * @param    boolean    includefiles
  * @param    boolean    includedirectories
  */
  public function doListDirRecursive($url, $includefiles, $includedirectories) {
    $ret = secureblackbox_webdavclient_do_listdirrecursive($this->handle, $url, $includefiles, $includedirectories);
		$err = secureblackbox_webdavclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Sets up a lock on a URL.
  *
  * @access   public
  * @param    string    url
  */
  public function doLock($url) {
    $ret = secureblackbox_webdavclient_do_lock($this->handle, $url);
		$err = secureblackbox_webdavclient_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Creates a directory on the server.
  *
  * @access   public
  * @param    string    url
  */
  public function doMakeDir($url) {
    $ret = secureblackbox_webdavclient_do_makedir($this->handle, $url);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Moves an object.
  *
  * @access   public
  * @param    string    sourceurl
  * @param    string    desturl
  */
  public function doMoveFile($sourceurl, $desturl) {
    $ret = secureblackbox_webdavclient_do_movefile($this->handle, $sourceurl, $desturl);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Refreshes an object lock.
  *
  * @access   public
  * @param    string    url
  * @param    string    lockstr
  */
  public function doRefreshLock($url, $lockstr) {
    $ret = secureblackbox_webdavclient_do_refreshlock($this->handle, $url, $lockstr);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Renames an object.
  *
  * @access   public
  * @param    string    sourceurl
  * @param    string    desturl
  */
  public function doRename($sourceurl, $desturl) {
    $ret = secureblackbox_webdavclient_do_rename($this->handle, $sourceurl, $desturl);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes a lock from a URL.
  *
  * @access   public
  * @param    string    url
  * @param    string    lockstr
  */
  public function doUnlock($url, $lockstr) {
    $ret = secureblackbox_webdavclient_do_unlock($this->handle, $url, $lockstr);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
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
    $ret = secureblackbox_webdavclient_do_uploadfile($this->handle, $localfile, $remotefile);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_webdavclient_get($this->handle, 0);
  }
 /**
  * The base URL.
  *
  * @access   public
  */
  public function getBaseURL() {
    return secureblackbox_webdavclient_get($this->handle, 1 );
  }


 /**
  * The number of records in the ClientCert arrays.
  *
  * @access   public
  */
  public function getClientCertCount() {
    return secureblackbox_webdavclient_get($this->handle, 2 );
  }
 /**
  * The number of records in the ClientCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setClientCertCount($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getClientCertBytes($clientcertindex) {
    return secureblackbox_webdavclient_get($this->handle, 3 , $clientcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getClientCertHandle($clientcertindex) {
    return secureblackbox_webdavclient_get($this->handle, 4 , $clientcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setClientCertHandle($clientcertindex, $value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 4, $value , $clientcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates whether the connection is active.
  *
  * @access   public
  */
  public function getConnected() {
    return secureblackbox_webdavclient_get($this->handle, 5 );
  }


 /**
  * Indicates whether the encryption algorithm used is an AEAD cipher.
  *
  * @access   public
  */
  public function getConnInfoAEADCipher() {
    return secureblackbox_webdavclient_get($this->handle, 6 );
  }


 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getConnInfoChainValidationDetails() {
    return secureblackbox_webdavclient_get($this->handle, 7 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getConnInfoChainValidationResult() {
    return secureblackbox_webdavclient_get($this->handle, 8 );
  }


 /**
  * The cipher suite employed by this connection.
  *
  * @access   public
  */
  public function getConnInfoCiphersuite() {
    return secureblackbox_webdavclient_get($this->handle, 9 );
  }


 /**
  * Specifies whether client authentication was performed during this connection.
  *
  * @access   public
  */
  public function getConnInfoClientAuthenticated() {
    return secureblackbox_webdavclient_get($this->handle, 10 );
  }


 /**
  * Indicates whether the connection has been established fully.
  *
  * @access   public
  */
  public function getConnInfoConnectionEstablished() {
    return secureblackbox_webdavclient_get($this->handle, 11 );
  }


 /**
  * The unique identifier assigned to this connection.
  *
  * @access   public
  */
  public function getConnInfoConnectionID() {
    return secureblackbox_webdavclient_get($this->handle, 12 );
  }


 /**
  * The digest algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoDigestAlgorithm() {
    return secureblackbox_webdavclient_get($this->handle, 13 );
  }


 /**
  * The symmetric encryption algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoEncryptionAlgorithm() {
    return secureblackbox_webdavclient_get($this->handle, 14 );
  }


 /**
  * Indicates whether a TLS connection uses a reduced-strength exportable cipher.
  *
  * @access   public
  */
  public function getConnInfoExportable() {
    return secureblackbox_webdavclient_get($this->handle, 15 );
  }


 /**
  * The key exchange algorithm used in a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoKeyExchangeAlgorithm() {
    return secureblackbox_webdavclient_get($this->handle, 16 );
  }


 /**
  * The length of the key exchange key of a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoKeyExchangeKeyBits() {
    return secureblackbox_webdavclient_get($this->handle, 17 );
  }


 /**
  * The elliptic curve used in this connection.
  *
  * @access   public
  */
  public function getConnInfoNamedECCurve() {
    return secureblackbox_webdavclient_get($this->handle, 18 );
  }


 /**
  * Indicates whether the chosen ciphersuite provides perfect forward secrecy (PFS).
  *
  * @access   public
  */
  public function getConnInfoPFSCipher() {
    return secureblackbox_webdavclient_get($this->handle, 19 );
  }


 /**
  * A hint professed by the server to help the client select the PSK identity to use.
  *
  * @access   public
  */
  public function getConnInfoPreSharedIdentityHint() {
    return secureblackbox_webdavclient_get($this->handle, 20 );
  }


 /**
  * The length of the public key.
  *
  * @access   public
  */
  public function getConnInfoPublicKeyBits() {
    return secureblackbox_webdavclient_get($this->handle, 21 );
  }


 /**
  * Indicates whether a TLS-enabled connection was spawned from another TLS connection.
  *
  * @access   public
  */
  public function getConnInfoResumedSession() {
    return secureblackbox_webdavclient_get($this->handle, 22 );
  }


 /**
  * Indicates whether TLS or SSL is enabled for this connection.
  *
  * @access   public
  */
  public function getConnInfoSecureConnection() {
    return secureblackbox_webdavclient_get($this->handle, 23 );
  }


 /**
  * Indicates whether server authentication was performed during a TLS-enabled connection.
  *
  * @access   public
  */
  public function getConnInfoServerAuthenticated() {
    return secureblackbox_webdavclient_get($this->handle, 24 );
  }


 /**
  * The signature algorithm used in a TLS handshake.
  *
  * @access   public
  */
  public function getConnInfoSignatureAlgorithm() {
    return secureblackbox_webdavclient_get($this->handle, 25 );
  }


 /**
  * The block size of the symmetric algorithm used.
  *
  * @access   public
  */
  public function getConnInfoSymmetricBlockSize() {
    return secureblackbox_webdavclient_get($this->handle, 26 );
  }


 /**
  * The key length of the symmetric algorithm used.
  *
  * @access   public
  */
  public function getConnInfoSymmetricKeyBits() {
    return secureblackbox_webdavclient_get($this->handle, 27 );
  }


 /**
  * The total number of bytes received over this connection.
  *
  * @access   public
  */
  public function getConnInfoTotalBytesReceived() {
    return secureblackbox_webdavclient_get($this->handle, 28 );
  }


 /**
  * The total number of bytes sent over this connection.
  *
  * @access   public
  */
  public function getConnInfoTotalBytesSent() {
    return secureblackbox_webdavclient_get($this->handle, 29 );
  }


 /**
  * Contains the server certificate's chain validation log.
  *
  * @access   public
  */
  public function getConnInfoValidationLog() {
    return secureblackbox_webdavclient_get($this->handle, 30 );
  }


 /**
  * Indicates the version of SSL/TLS protocol negotiated during this connection.
  *
  * @access   public
  */
  public function getConnInfoVersion() {
    return secureblackbox_webdavclient_get($this->handle, 31 );
  }


 /**
  * Contains the last access time for this object, in UTC.
  *
  * @access   public
  */
  public function getCurrListEntryATime() {
    return secureblackbox_webdavclient_get($this->handle, 32 );
  }


 /**
  * The object's content type.
  *
  * @access   public
  */
  public function getCurrListEntryContentType() {
    return secureblackbox_webdavclient_get($this->handle, 33 );
  }


 /**
  * Contains this object's creation time, in UTC.
  *
  * @access   public
  */
  public function getCurrListEntryCTime() {
    return secureblackbox_webdavclient_get($this->handle, 34 );
  }


 /**
  * Specifies whether this object is a directory.
  *
  * @access   public
  */
  public function getCurrListEntryDirectory() {
    return secureblackbox_webdavclient_get($this->handle, 35 );
  }


 /**
  * Contains the display name of the object.
  *
  * @access   public
  */
  public function getCurrListEntryDisplayName() {
    return secureblackbox_webdavclient_get($this->handle, 36 );
  }


 /**
  * An e-tag of the object.
  *
  * @access   public
  */
  public function getCurrListEntryETag() {
    return secureblackbox_webdavclient_get($this->handle, 37 );
  }


 /**
  * A full path to the object.
  *
  * @access   public
  */
  public function getCurrListEntryFullURL() {
    return secureblackbox_webdavclient_get($this->handle, 38 );
  }


 /**
  * The last modification time of the object, in UTC.
  *
  * @access   public
  */
  public function getCurrListEntryMTime() {
    return secureblackbox_webdavclient_get($this->handle, 39 );
  }


 /**
  * Specifies the object's parent URL.
  *
  * @access   public
  */
  public function getCurrListEntryParentURL() {
    return secureblackbox_webdavclient_get($this->handle, 40 );
  }


 /**
  * The size of the object in bytes.
  *
  * @access   public
  */
  public function getCurrListEntrySize() {
    return secureblackbox_webdavclient_get($this->handle, 41 );
  }


 /**
  * Indicates whether the entry supports exclusive locking.
  *
  * @access   public
  */
  public function getCurrListEntrySupportsExclusiveLock() {
    return secureblackbox_webdavclient_get($this->handle, 42 );
  }


 /**
  * Indicates whether the entry supports shared lock.
  *
  * @access   public
  */
  public function getCurrListEntrySupportsSharedLock() {
    return secureblackbox_webdavclient_get($this->handle, 43 );
  }


 /**
  * A URL of the object.
  *
  * @access   public
  */
  public function getCurrListEntryURL() {
    return secureblackbox_webdavclient_get($this->handle, 44 );
  }


 /**
  * The list of current object locks.
  *
  * @access   public
  */
  public function getCurrentLocks() {
    return secureblackbox_webdavclient_get($this->handle, 45 );
  }
 /**
  * The list of current object locks.
  *
  * @access   public
  * @param    string   value
  */
  public function setCurrentLocks($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 45, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables URL encoding.
  *
  * @access   public
  */
  public function getEncodeURL() {
    return secureblackbox_webdavclient_get($this->handle, 46 );
  }
 /**
  * Enables or disables URL encoding.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setEncodeURL($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_webdavclient_get($this->handle, 47 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_webdavclient_get($this->handle, 48 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 48, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_webdavclient_get($this->handle, 49 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 49, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_webdavclient_get($this->handle, 50 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_webdavclient_get($this->handle, 51 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 51, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_webdavclient_get($this->handle, 52 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_webdavclient_get($this->handle, 53 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_webdavclient_get($this->handle, 54 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_webdavclient_get($this->handle, 55 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  */
  public function getKnownCertCount() {
    return secureblackbox_webdavclient_get($this->handle, 56 );
  }
 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCertCount($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKnownCertBytes($knowncertindex) {
    return secureblackbox_webdavclient_get($this->handle, 57 , $knowncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCertHandle($knowncertindex) {
    return secureblackbox_webdavclient_get($this->handle, 58 , $knowncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCertHandle($knowncertindex, $value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 58, $value , $knowncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  */
  public function getKnownCRLCount() {
    return secureblackbox_webdavclient_get($this->handle, 59 );
  }
 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCRLCount($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 59, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getKnownCRLBytes($knowncrlindex) {
    return secureblackbox_webdavclient_get($this->handle, 60 , $knowncrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCRLHandle($knowncrlindex) {
    return secureblackbox_webdavclient_get($this->handle, 61 , $knowncrlindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCRLHandle($knowncrlindex, $value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 61, $value , $knowncrlindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  */
  public function getKnownOCSPCount() {
    return secureblackbox_webdavclient_get($this->handle, 62 );
  }
 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownOCSPCount($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 62, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getKnownOCSPBytes($knownocspindex) {
    return secureblackbox_webdavclient_get($this->handle, 63 , $knownocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownOCSPHandle($knownocspindex) {
    return secureblackbox_webdavclient_get($this->handle, 64 , $knownocspindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownOCSPHandle($knownocspindex, $value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 64, $value , $knownocspindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the depth of the current lock.
  *
  * @access   public
  */
  public function getLockDepth() {
    return secureblackbox_webdavclient_get($this->handle, 65 );
  }


 /**
  * Specifies the scope of the current lock.
  *
  * @access   public
  */
  public function getLockScope() {
    return secureblackbox_webdavclient_get($this->handle, 66 );
  }


 /**
  * Specifies the timeout of the current lock.
  *
  * @access   public
  */
  public function getLockTimeout() {
    return secureblackbox_webdavclient_get($this->handle, 67 );
  }
 /**
  * Specifies the timeout of the current lock.
  *
  * @access   public
  * @param    int   value
  */
  public function setLockTimeout($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables move-to-rename operation handling mode.
  *
  * @access   public
  */
  public function getMoveToRename() {
    return secureblackbox_webdavclient_get($this->handle, 68 );
  }
 /**
  * Enables move-to-rename operation handling mode.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setMoveToRename($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 68, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables overwriting on copy.
  *
  * @access   public
  */
  public function getOverwriteOnCopy() {
    return secureblackbox_webdavclient_get($this->handle, 69 );
  }
 /**
  * Enables overwriting on copy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setOverwriteOnCopy($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 69, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables overwriting on move.
  *
  * @access   public
  */
  public function getOverwriteOnMove() {
    return secureblackbox_webdavclient_get($this->handle, 70 );
  }
 /**
  * Enables overwriting on move.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setOverwriteOnMove($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 70, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A password to authenticate to the server.
  *
  * @access   public
  */
  public function getPassword() {
    return secureblackbox_webdavclient_get($this->handle, 71 );
  }
 /**
  * A password to authenticate to the server.
  *
  * @access   public
  * @param    string   value
  */
  public function setPassword($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_webdavclient_get($this->handle, 72 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_webdavclient_get($this->handle, 73 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_webdavclient_get($this->handle, 74 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_webdavclient_get($this->handle, 75 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 75, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_webdavclient_get($this->handle, 76 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 76, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_webdavclient_get($this->handle, 77 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 77, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_webdavclient_get($this->handle, 78 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_webdavclient_get($this->handle, 79 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 79, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_webdavclient_get($this->handle, 80 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 80, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_webdavclient_get($this->handle, 81 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 81, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_webdavclient_get($this->handle, 82 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 82, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the resource owner.
  *
  * @access   public
  */
  public function getResourceOwner() {
    return secureblackbox_webdavclient_get($this->handle, 83 );
  }
 /**
  * Indicates the resource owner.
  *
  * @access   public
  * @param    string   value
  */
  public function setResourceOwner($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 83, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ServerCert arrays.
  *
  * @access   public
  */
  public function getServerCertCount() {
    return secureblackbox_webdavclient_get($this->handle, 84 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getServerCertBytes($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 85 , $servercertindex);
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getServerCertCAKeyID($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 86 , $servercertindex);
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getServerCertFingerprint($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 87 , $servercertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getServerCertHandle($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 88 , $servercertindex);
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getServerCertIssuer($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 89 , $servercertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getServerCertIssuerRDN($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 90 , $servercertindex);
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getServerCertKeyAlgorithm($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 91 , $servercertindex);
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getServerCertKeyBits($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 92 , $servercertindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getServerCertKeyFingerprint($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 93 , $servercertindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getServerCertKeyUsage($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 94 , $servercertindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getServerCertPublicKeyBytes($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 95 , $servercertindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getServerCertSelfSigned($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 96 , $servercertindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getServerCertSerialNumber($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 97 , $servercertindex);
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getServerCertSigAlgorithm($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 98 , $servercertindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getServerCertSubject($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 99 , $servercertindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getServerCertSubjectKeyID($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 100 , $servercertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getServerCertSubjectRDN($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 101 , $servercertindex);
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getServerCertValidFrom($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 102 , $servercertindex);
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getServerCertValidTo($servercertindex) {
    return secureblackbox_webdavclient_get($this->handle, 103 , $servercertindex);
  }


 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_webdavclient_get($this->handle, 104 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 104, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_webdavclient_get($this->handle, 105 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 105, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_webdavclient_get($this->handle, 106 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 106, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_webdavclient_get($this->handle, 107 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 107, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_webdavclient_get($this->handle, 108 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 108, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_webdavclient_get($this->handle, 109 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 109, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_webdavclient_get($this->handle, 110 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 110, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_webdavclient_get($this->handle, 111 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 111, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_webdavclient_get($this->handle, 112 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 112, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_webdavclient_get($this->handle, 113 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 113, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_webdavclient_get($this->handle, 114 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 114, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_webdavclient_get($this->handle, 115 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 115, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_webdavclient_get($this->handle, 116 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 116, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_webdavclient_get($this->handle, 117 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 117, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_webdavclient_get($this->handle, 118 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 118, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_webdavclient_get($this->handle, 119 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 119, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_webdavclient_get($this->handle, 120 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 120, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_webdavclient_get($this->handle, 121 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 121, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_webdavclient_get($this->handle, 122 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 122, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_webdavclient_get($this->handle, 123 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 123, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_webdavclient_get($this->handle, 124 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 124, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_webdavclient_get($this->handle, 125 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 125, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_webdavclient_get($this->handle, 126 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 126, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_webdavclient_get($this->handle, 127 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 127, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_webdavclient_get($this->handle, 128 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 128, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_webdavclient_get($this->handle, 129 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 129, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  */
  public function getTrustedCertCount() {
    return secureblackbox_webdavclient_get($this->handle, 130 );
  }
 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setTrustedCertCount($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 130, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTrustedCertBytes($trustedcertindex) {
    return secureblackbox_webdavclient_get($this->handle, 131 , $trustedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTrustedCertHandle($trustedcertindex) {
    return secureblackbox_webdavclient_get($this->handle, 132 , $trustedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setTrustedCertHandle($trustedcertindex, $value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 132, $value , $trustedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A username to authenticate to the server.
  *
  * @access   public
  */
  public function getUsername() {
    return secureblackbox_webdavclient_get($this->handle, 133 );
  }
 /**
  * A username to authenticate to the server.
  *
  * @access   public
  * @param    string   value
  */
  public function setUsername($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 133, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_webdavclient_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_webdavclient_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_webdavclient_get_last_error($this->handle));
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
  * Passes the next directory listing entry to the application.
  *
  * @access   public
  * @param    array   Array of event parameters: filename    
  */
  public function fireListEntry($param) {
    return $param;
  }

 /**
  * Reports a protocol error.
  *
  * @access   public
  * @param    array   Array of event parameters: url, status, error, description    
  */
  public function fireOperationError($param) {
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


}

?>
