<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - SAMLIdPServer Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_SAMLIdPServer {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_samlidpserver_open(SECUREBLACKBOX_OEMKEY_803);
    secureblackbox_samlidpserver_register_callback($this->handle, 1, array($this, 'fireAccept'));
    secureblackbox_samlidpserver_register_callback($this->handle, 2, array($this, 'fireConnect'));
    secureblackbox_samlidpserver_register_callback($this->handle, 3, array($this, 'fireDisconnect'));
    secureblackbox_samlidpserver_register_callback($this->handle, 4, array($this, 'fireError'));
    secureblackbox_samlidpserver_register_callback($this->handle, 5, array($this, 'fireExternalSign'));
    secureblackbox_samlidpserver_register_callback($this->handle, 6, array($this, 'fireSessionClosed'));
    secureblackbox_samlidpserver_register_callback($this->handle, 7, array($this, 'fireSessionEstablished'));
  }
  
  public function __destruct() {
    secureblackbox_samlidpserver_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_samlidpserver_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_samlidpserver_get_last_error_code($this->handle);
  }

 /**
  * Adds an SSO URL to the list.
  *
  * @access   public
  * @param    int    spindex
  * @param    string    url
  * @param    string    relaystate
  */
  public function doAddIdPSSOLink($spindex, $url, $relaystate) {
    $ret = secureblackbox_samlidpserver_do_addidpssolink($this->handle, $spindex, $url, $relaystate);
		$err = secureblackbox_samlidpserver_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Registers known user credentials.
  *
  * @access   public
  * @param    string    login
  * @param    string    password
  */
  public function doAddUser($login, $password) {
    $ret = secureblackbox_samlidpserver_do_adduser($this->handle, $login, $password);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Registers known user credentials.
  *
  * @access   public
  * @param    string    login
  * @param    string    email
  * @param    string    password
  */
  public function doAddUserWithEmail($login, $email, $password) {
    $ret = secureblackbox_samlidpserver_do_adduserwithemail($this->handle, $login, $email, $password);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Clears the database of registered users.
  *
  * @access   public
  */
  public function doClearUsers() {
    $ret = secureblackbox_samlidpserver_do_clearusers($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
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
    $ret = secureblackbox_samlidpserver_do_config($this->handle, $configurationstring);
		$err = secureblackbox_samlidpserver_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads the metadata required for information exchange  with the service provider.
  *
  * @access   public
  * @param    string    filename
  */
  public function doLoadSPMetadata($filename) {
    $ret = secureblackbox_samlidpserver_do_loadspmetadata($this->handle, $filename);
		$err = secureblackbox_samlidpserver_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes the specified SSO link.
  *
  * @access   public
  * @param    int    index
  */
  public function doRemoveIdPSSOLink($index) {
    $ret = secureblackbox_samlidpserver_do_removeidpssolink($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes an SP from the list of trusted service providers.
  *
  * @access   public
  * @param    int    index
  */
  public function doRemoveSP($index) {
    $ret = secureblackbox_samlidpserver_do_removesp($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Unregister user credentials.
  *
  * @access   public
  * @param    string    login
  */
  public function doRemoveUser($login) {
    $ret = secureblackbox_samlidpserver_do_removeuser($this->handle, $login);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Saves the IdP configuration to a metadata file.
  *
  * @access   public
  * @param    string    filename
  */
  public function doSaveMetadata($filename) {
    $ret = secureblackbox_samlidpserver_do_savemetadata($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Starts the IdP server.
  *
  * @access   public
  */
  public function doStart() {
    $ret = secureblackbox_samlidpserver_do_start($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Stops the IdP server.
  *
  * @access   public
  */
  public function doStop() {
    $ret = secureblackbox_samlidpserver_do_stop($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_samlidpserver_get($this->handle, 0);
  }
 /**
  * Tells whether the server is active and ready to process requests.
  *
  * @access   public
  */
  public function getActive() {
    return secureblackbox_samlidpserver_get($this->handle, 1 );
  }


 /**
  * Specifies if IdP-initiated Single Sign-On (SSO) is allowed.
  *
  * @access   public
  */
  public function getAllowIDPSSO() {
    return secureblackbox_samlidpserver_get($this->handle, 2 );
  }
 /**
  * Specifies if IdP-initiated Single Sign-On (SSO) is allowed.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setAllowIDPSSO($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The location of the artifact resolution service.
  *
  * @access   public
  */
  public function getArtifactResolutionService() {
    return secureblackbox_samlidpserver_get($this->handle, 3 );
  }
 /**
  * The location of the artifact resolution service.
  *
  * @access   public
  * @param    string   value
  */
  public function setArtifactResolutionService($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The location of the AttributeQuery service.
  *
  * @access   public
  */
  public function getAttributeQueryService() {
    return secureblackbox_samlidpserver_get($this->handle, 4 );
  }
 /**
  * The location of the AttributeQuery service.
  *
  * @access   public
  * @param    string   value
  */
  public function setAttributeQueryService($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the default authentication template (login page).
  *
  * @access   public
  */
  public function getAuthFormTemplate() {
    return secureblackbox_samlidpserver_get($this->handle, 5 );
  }
 /**
  * Defines the default authentication template (login page).
  *
  * @access   public
  * @param    string   value
  */
  public function setAuthFormTemplate($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether to encrypt assertions included into the IdP response.
  *
  * @access   public
  */
  public function getEncryptAssertions() {
    return secureblackbox_samlidpserver_get($this->handle, 6 );
  }
 /**
  * Specifies whether to encrypt assertions included into the IdP response.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setEncryptAssertions($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getEncryptionCertBytes() {
    return secureblackbox_samlidpserver_get($this->handle, 7 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getEncryptionCertHandle() {
    return secureblackbox_samlidpserver_get($this->handle, 8 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setEncryptionCertHandle($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 8, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the endpoint where the error originates from.
  *
  * @access   public
  */
  public function getErrorOrigin() {
    return secureblackbox_samlidpserver_get($this->handle, 9 );
  }
 /**
  * Indicates the endpoint where the error originates from.
  *
  * @access   public
  * @param    int   value
  */
  public function setErrorOrigin($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The severity of the error that happened.
  *
  * @access   public
  */
  public function getErrorSeverity() {
    return secureblackbox_samlidpserver_get($this->handle, 10 );
  }
 /**
  * The severity of the error that happened.
  *
  * @access   public
  * @param    int   value
  */
  public function setErrorSeverity($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_samlidpserver_get($this->handle, 11 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_samlidpserver_get($this->handle, 12 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_samlidpserver_get($this->handle, 13 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_samlidpserver_get($this->handle, 14 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_samlidpserver_get($this->handle, 15 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_samlidpserver_get($this->handle, 16 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_samlidpserver_get($this->handle, 17 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_samlidpserver_get($this->handle, 18 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_samlidpserver_get($this->handle, 19 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 19, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the host address of the IdP server.
  *
  * @access   public
  */
  public function getHost() {
    return secureblackbox_samlidpserver_get($this->handle, 20 );
  }
 /**
  * Specifies the host address of the IdP server.
  *
  * @access   public
  * @param    string   value
  */
  public function setHost($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 20, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the relative URL of the IdP-initiated SSO page.
  *
  * @access   public
  */
  public function getIDPSSOPage() {
    return secureblackbox_samlidpserver_get($this->handle, 21 );
  }
 /**
  * Specifies the relative URL of the IdP-initiated SSO page.
  *
  * @access   public
  * @param    string   value
  */
  public function setIDPSSOPage($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The content of the IdP-initiated SSO page.
  *
  * @access   public
  */
  public function getIDPSSOPageContent() {
    return secureblackbox_samlidpserver_get($this->handle, 22 );
  }
 /**
  * The content of the IdP-initiated SSO page.
  *
  * @access   public
  * @param    string   value
  */
  public function setIDPSSOPageContent($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 22, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of login attempts.
  *
  * @access   public
  */
  public function getLoginAttemptsLimit() {
    return secureblackbox_samlidpserver_get($this->handle, 23 );
  }
 /**
  * The maximum number of login attempts.
  *
  * @access   public
  * @param    int   value
  */
  public function setLoginAttemptsLimit($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 23, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The IdP's metadata location.
  *
  * @access   public
  */
  public function getMetadataURL() {
    return secureblackbox_samlidpserver_get($this->handle, 24 );
  }
 /**
  * The IdP's metadata location.
  *
  * @access   public
  * @param    string   value
  */
  public function setMetadataURL($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 24, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getMetaSigningCertBytes() {
    return secureblackbox_samlidpserver_get($this->handle, 25 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getMetaSigningCertHandle() {
    return secureblackbox_samlidpserver_get($this->handle, 26 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setMetaSigningCertHandle($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The listening port number.
  *
  * @access   public
  */
  public function getPort() {
    return secureblackbox_samlidpserver_get($this->handle, 27 );
  }
 /**
  * The listening port number.
  *
  * @access   public
  * @param    int   value
  */
  public function setPort($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 27, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the preferred single logout response binding.
  *
  * @access   public
  */
  public function getPreferredSingleLogoutResponseBinding() {
    return secureblackbox_samlidpserver_get($this->handle, 28 );
  }
 /**
  * Specifies the preferred single logout response binding.
  *
  * @access   public
  * @param    int   value
  */
  public function setPreferredSingleLogoutResponseBinding($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 28, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies preferred SSO response binding.
  *
  * @access   public
  */
  public function getPreferredSingleSignOnResponseBinding() {
    return secureblackbox_samlidpserver_get($this->handle, 29 );
  }
 /**
  * Specifies preferred SSO response binding.
  *
  * @access   public
  * @param    int   value
  */
  public function setPreferredSingleSignOnResponseBinding($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 29, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ServerCert arrays.
  *
  * @access   public
  */
  public function getServerCertCount() {
    return secureblackbox_samlidpserver_get($this->handle, 30 );
  }
 /**
  * The number of records in the ServerCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setServerCertCount($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 30, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getServerCertBytes($servercertindex) {
    return secureblackbox_samlidpserver_get($this->handle, 31 , $servercertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getServerCertHandle($servercertindex) {
    return secureblackbox_samlidpserver_get($this->handle, 32 , $servercertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setServerCertHandle($servercertindex, $value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 32, $value , $servercertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the assertions included in IdP responses should be signed.
  *
  * @access   public
  */
  public function getSignAssertions() {
    return secureblackbox_samlidpserver_get($this->handle, 33 );
  }
 /**
  * Specifies whether the assertions included in IdP responses should be signed.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSignAssertions($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningCertBytes() {
    return secureblackbox_samlidpserver_get($this->handle, 34 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningCertHandle() {
    return secureblackbox_samlidpserver_get($this->handle, 35 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningCertHandle($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 35, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  */
  public function getSigningChainCount() {
    return secureblackbox_samlidpserver_get($this->handle, 36 );
  }
 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigningChainCount($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningChainBytes($signingchainindex) {
    return secureblackbox_samlidpserver_get($this->handle, 37 , $signingchainindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningChainHandle($signingchainindex) {
    return secureblackbox_samlidpserver_get($this->handle, 38 , $signingchainindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningChainHandle($signingchainindex, $value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 38, $value , $signingchainindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the IdP's metadata should be signed.
  *
  * @access   public
  */
  public function getSignMetadata() {
    return secureblackbox_samlidpserver_get($this->handle, 39 );
  }
 /**
  * Specifies whether the IdP's metadata should be signed.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSignMetadata($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 39, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the IdP responses should be signed.
  *
  * @access   public
  */
  public function getSignResponse() {
    return secureblackbox_samlidpserver_get($this->handle, 40 );
  }
 /**
  * Specifies whether the IdP responses should be signed.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSignResponse($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The URL of the single logout service.
  *
  * @access   public
  */
  public function getSingleLogoutService() {
    return secureblackbox_samlidpserver_get($this->handle, 41 );
  }
 /**
  * The URL of the single logout service.
  *
  * @access   public
  * @param    string   value
  */
  public function setSingleLogoutService($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines single logout service bindings.
  *
  * @access   public
  */
  public function getSingleLogoutServiceBindings() {
    return secureblackbox_samlidpserver_get($this->handle, 42 );
  }
 /**
  * Defines single logout service bindings.
  *
  * @access   public
  * @param    string   value
  */
  public function setSingleLogoutServiceBindings($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 42, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The URL of the single logout service.
  *
  * @access   public
  */
  public function getSingleSignOnService() {
    return secureblackbox_samlidpserver_get($this->handle, 43 );
  }
 /**
  * The URL of the single logout service.
  *
  * @access   public
  * @param    string   value
  */
  public function setSingleSignOnService($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 43, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines single sign-on service bindings.
  *
  * @access   public
  */
  public function getSingleSignOnServiceBindings() {
    return secureblackbox_samlidpserver_get($this->handle, 44 );
  }
 /**
  * Defines single sign-on service bindings.
  *
  * @access   public
  * @param    string   value
  */
  public function setSingleSignOnServiceBindings($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 44, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_samlidpserver_get($this->handle, 45 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 45, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_samlidpserver_get($this->handle, 46 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_samlidpserver_get($this->handle, 47 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_samlidpserver_get($this->handle, 48 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 48, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_samlidpserver_get($this->handle, 49 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 49, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_samlidpserver_get($this->handle, 50 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_samlidpserver_get($this->handle, 51 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 51, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_samlidpserver_get($this->handle, 52 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_samlidpserver_get($this->handle, 53 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_samlidpserver_get($this->handle, 54 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_samlidpserver_get($this->handle, 55 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_samlidpserver_get($this->handle, 56 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_samlidpserver_get($this->handle, 57 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 57, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_samlidpserver_get($this->handle, 58 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 58, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_samlidpserver_get($this->handle, 59 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 59, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_samlidpserver_get($this->handle, 60 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 60, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_samlidpserver_get($this->handle, 61 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 61, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_samlidpserver_get($this->handle, 62 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 62, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_samlidpserver_get($this->handle, 63 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 63, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_samlidpserver_get($this->handle, 64 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 64, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_samlidpserver_get($this->handle, 65 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 65, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the base URL of this IdP server.
  *
  * @access   public
  */
  public function getURL() {
    return secureblackbox_samlidpserver_get($this->handle, 66 );
  }
 /**
  * Specifies the base URL of this IdP server.
  *
  * @access   public
  * @param    string   value
  */
  public function setURL($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 66, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables the secure connection requirement.
  *
  * @access   public
  */
  public function getUseTLS() {
    return secureblackbox_samlidpserver_get($this->handle, 67 );
  }
 /**
  * Enables or disables the secure connection requirement.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setUseTLS($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_samlidpserver_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_samlidpserver_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlidpserver_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Reports an incoming connection.
  *
  * @access   public
  * @param    array   Array of event parameters: remoteaddress, remoteport, accept    
  */
  public function fireAccept($param) {
    return $param;
  }

 /**
  * Reports an accepted connection.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, remoteaddress, remoteport    
  */
  public function fireConnect($param) {
    return $param;
  }

 /**
  * Fires to report a disconnected client.
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
  * This event is fired when the IdP server has closed a session.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid    
  */
  public function fireSessionClosed($param) {
    return $param;
  }

 /**
  * This event is fired when a new session has been established.
  *
  * @access   public
  * @param    array   Array of event parameters: connectionid, username    
  */
  public function fireSessionEstablished($param) {
    return $param;
  }


}

?>
