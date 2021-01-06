<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - SAMLSPServer Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_SAMLSPServer {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_samlspserver_open(SECUREBLACKBOX_OEMKEY_802);
    secureblackbox_samlspserver_register_callback($this->handle, 1, array($this, 'fireAccept'));
    secureblackbox_samlspserver_register_callback($this->handle, 2, array($this, 'fireConnect'));
    secureblackbox_samlspserver_register_callback($this->handle, 3, array($this, 'fireDisconnect'));
    secureblackbox_samlspserver_register_callback($this->handle, 4, array($this, 'fireError'));
    secureblackbox_samlspserver_register_callback($this->handle, 5, array($this, 'fireExternalSign'));
    secureblackbox_samlspserver_register_callback($this->handle, 6, array($this, 'fireSessionClosed'));
    secureblackbox_samlspserver_register_callback($this->handle, 7, array($this, 'fireSessionEstablished'));
  }
  
  public function __destruct() {
    secureblackbox_samlspserver_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_samlspserver_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_samlspserver_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_samlspserver_do_config($this->handle, $configurationstring);
		$err = secureblackbox_samlspserver_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads the metadata required for information exchange  with the identity provider.
  *
  * @access   public
  * @param    string    filename
  */
  public function doLoadIDPMetadata($filename) {
    $ret = secureblackbox_samlspserver_do_loadidpmetadata($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Saves the SP configuration to a metadata file.
  *
  * @access   public
  * @param    string    filename
  */
  public function doSaveMetadata($filename) {
    $ret = secureblackbox_samlspserver_do_savemetadata($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Starts the SP server.
  *
  * @access   public
  */
  public function doStart() {
    $ret = secureblackbox_samlspserver_do_start($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Stops the IdP server.
  *
  * @access   public
  */
  public function doStop() {
    $ret = secureblackbox_samlspserver_do_stop($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_samlspserver_get($this->handle, 0);
  }
 /**
  * Tells whether the server is active and ready to process requests.
  *
  * @access   public
  */
  public function getActive() {
    return secureblackbox_samlspserver_get($this->handle, 1 );
  }


 /**
  * The location of the artifact resolution service.
  *
  * @access   public
  */
  public function getArtifactResolutionService() {
    return secureblackbox_samlspserver_get($this->handle, 2 );
  }
 /**
  * The location of the artifact resolution service.
  *
  * @access   public
  * @param    string   value
  */
  public function setArtifactResolutionService($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The location of the Assertion Consumer Service.
  *
  * @access   public
  */
  public function getAssertionConsumerService() {
    return secureblackbox_samlspserver_get($this->handle, 3 );
  }
 /**
  * The location of the Assertion Consumer Service.
  *
  * @access   public
  * @param    string   value
  */
  public function setAssertionConsumerService($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Bindings supported by the Assertion Consumer Service.
  *
  * @access   public
  */
  public function getAssertionConsumerServiceBindings() {
    return secureblackbox_samlspserver_get($this->handle, 4 );
  }
 /**
  * Bindings supported by the Assertion Consumer Service.
  *
  * @access   public
  * @param    string   value
  */
  public function setAssertionConsumerServiceBindings($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Base directory on the server.
  *
  * @access   public
  */
  public function getBaseDir() {
    return secureblackbox_samlspserver_get($this->handle, 5 );
  }
 /**
  * Base directory on the server.
  *
  * @access   public
  * @param    string   value
  */
  public function setBaseDir($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getEncryptionCertBytes() {
    return secureblackbox_samlspserver_get($this->handle, 6 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getEncryptionCertHandle() {
    return secureblackbox_samlspserver_get($this->handle, 7 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setEncryptionCertHandle($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the endpoint where the error originates from.
  *
  * @access   public
  */
  public function getErrorOrigin() {
    return secureblackbox_samlspserver_get($this->handle, 8 );
  }
 /**
  * Indicates the endpoint where the error originates from.
  *
  * @access   public
  * @param    int   value
  */
  public function setErrorOrigin($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 8, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The severity of the error that happened.
  *
  * @access   public
  */
  public function getErrorSeverity() {
    return secureblackbox_samlspserver_get($this->handle, 9 );
  }
 /**
  * The severity of the error that happened.
  *
  * @access   public
  * @param    int   value
  */
  public function setErrorSeverity($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_samlspserver_get($this->handle, 10 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_samlspserver_get($this->handle, 11 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_samlspserver_get($this->handle, 12 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_samlspserver_get($this->handle, 13 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_samlspserver_get($this->handle, 14 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_samlspserver_get($this->handle, 15 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_samlspserver_get($this->handle, 16 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_samlspserver_get($this->handle, 17 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_samlspserver_get($this->handle, 18 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 18, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the host address of the SP server.
  *
  * @access   public
  */
  public function getHost() {
    return secureblackbox_samlspserver_get($this->handle, 19 );
  }
 /**
  * Specifies the host address of the SP server.
  *
  * @access   public
  * @param    string   value
  */
  public function setHost($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 19, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Name identifier of the issuer of the SP's requests.
  *
  * @access   public
  */
  public function getIssuer() {
    return secureblackbox_samlspserver_get($this->handle, 20 );
  }
 /**
  * Name identifier of the issuer of the SP's requests.
  *
  * @access   public
  * @param    string   value
  */
  public function setIssuer($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 20, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the location of the logout page.
  *
  * @access   public
  */
  public function getLogoutPage() {
    return secureblackbox_samlspserver_get($this->handle, 21 );
  }
 /**
  * Specifies the location of the logout page.
  *
  * @access   public
  * @param    string   value
  */
  public function setLogoutPage($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The SP's metadata location.
  *
  * @access   public
  */
  public function getMetadataURL() {
    return secureblackbox_samlspserver_get($this->handle, 22 );
  }
 /**
  * The SP's metadata location.
  *
  * @access   public
  * @param    string   value
  */
  public function setMetadataURL($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 22, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getMetaSigningCertBytes() {
    return secureblackbox_samlspserver_get($this->handle, 23 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getMetaSigningCertHandle() {
    return secureblackbox_samlspserver_get($this->handle, 24 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setMetaSigningCertHandle($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 24, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the listening port number.
  *
  * @access   public
  */
  public function getPort() {
    return secureblackbox_samlspserver_get($this->handle, 25 );
  }
 /**
  * Specifies the listening port number.
  *
  * @access   public
  * @param    int   value
  */
  public function setPort($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 25, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the preferred IdP to SP binding.
  *
  * @access   public
  */
  public function getPreferredIDPToSPBinding() {
    return secureblackbox_samlspserver_get($this->handle, 26 );
  }
 /**
  * Specifies the preferred IdP to SP binding.
  *
  * @access   public
  * @param    int   value
  */
  public function setPreferredIDPToSPBinding($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the list of protected resources.
  *
  * @access   public
  */
  public function getProtectedResources() {
    return secureblackbox_samlspserver_get($this->handle, 27 );
  }
 /**
  * Specifies the list of protected resources.
  *
  * @access   public
  * @param    string   value
  */
  public function setProtectedResources($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 27, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the location to redirect the user on logout.
  *
  * @access   public
  */
  public function getRedirectOnLogoutPage() {
    return secureblackbox_samlspserver_get($this->handle, 28 );
  }
 /**
  * Specifies the location to redirect the user on logout.
  *
  * @access   public
  * @param    string   value
  */
  public function setRedirectOnLogoutPage($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 28, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ServerCert arrays.
  *
  * @access   public
  */
  public function getServerCertCount() {
    return secureblackbox_samlspserver_get($this->handle, 29 );
  }
 /**
  * The number of records in the ServerCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setServerCertCount($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 29, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getServerCertBytes($servercertindex) {
    return secureblackbox_samlspserver_get($this->handle, 30 , $servercertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getServerCertHandle($servercertindex) {
    return secureblackbox_samlspserver_get($this->handle, 31 , $servercertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setServerCertHandle($servercertindex, $value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 31, $value , $servercertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether to sign artifact resolution requests.
  *
  * @access   public
  */
  public function getSignArtifactResolveRequests() {
    return secureblackbox_samlspserver_get($this->handle, 32 );
  }
 /**
  * Specifies whether to sign artifact resolution requests.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSignArtifactResolveRequests($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether to sign Authn requests.
  *
  * @access   public
  */
  public function getSignAuthnRequests() {
    return secureblackbox_samlspserver_get($this->handle, 33 );
  }
 /**
  * Specifies whether to sign Authn requests.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSignAuthnRequests($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningCertBytes() {
    return secureblackbox_samlspserver_get($this->handle, 34 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningCertHandle() {
    return secureblackbox_samlspserver_get($this->handle, 35 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningCertHandle($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 35, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  */
  public function getSigningChainCount() {
    return secureblackbox_samlspserver_get($this->handle, 36 );
  }
 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigningChainCount($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningChainBytes($signingchainindex) {
    return secureblackbox_samlspserver_get($this->handle, 37 , $signingchainindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningChainHandle($signingchainindex) {
    return secureblackbox_samlspserver_get($this->handle, 38 , $signingchainindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningChainHandle($signingchainindex, $value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 38, $value , $signingchainindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether to sign Logout requests.
  *
  * @access   public
  */
  public function getSignLogoutRequests() {
    return secureblackbox_samlspserver_get($this->handle, 39 );
  }
 /**
  * Specifies whether to sign Logout requests.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSignLogoutRequests($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 39, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether to sign the metadata.
  *
  * @access   public
  */
  public function getSignMetadata() {
    return secureblackbox_samlspserver_get($this->handle, 40 );
  }
 /**
  * Specifies whether to sign the metadata.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSignMetadata($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The URL of the single logout service.
  *
  * @access   public
  */
  public function getSingleLogoutService() {
    return secureblackbox_samlspserver_get($this->handle, 41 );
  }
 /**
  * The URL of the single logout service.
  *
  * @access   public
  * @param    string   value
  */
  public function setSingleLogoutService($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines single logout service bindings.
  *
  * @access   public
  */
  public function getSingleLogoutServiceBindings() {
    return secureblackbox_samlspserver_get($this->handle, 42 );
  }
 /**
  * Defines single logout service bindings.
  *
  * @access   public
  * @param    string   value
  */
  public function setSingleLogoutServiceBindings($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 42, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_samlspserver_get($this->handle, 43 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 43, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_samlspserver_get($this->handle, 44 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 44, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_samlspserver_get($this->handle, 45 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 45, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_samlspserver_get($this->handle, 46 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_samlspserver_get($this->handle, 47 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_samlspserver_get($this->handle, 48 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 48, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the IdP to SP binding to use.
  *
  * @access   public
  */
  public function getSPToIDPBinding() {
    return secureblackbox_samlspserver_get($this->handle, 49 );
  }
 /**
  * Specifies the IdP to SP binding to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setSPToIDPBinding($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 49, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_samlspserver_get($this->handle, 50 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_samlspserver_get($this->handle, 51 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 51, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_samlspserver_get($this->handle, 52 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_samlspserver_get($this->handle, 53 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_samlspserver_get($this->handle, 54 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_samlspserver_get($this->handle, 55 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_samlspserver_get($this->handle, 56 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_samlspserver_get($this->handle, 57 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 57, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_samlspserver_get($this->handle, 58 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 58, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_samlspserver_get($this->handle, 59 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 59, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_samlspserver_get($this->handle, 60 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 60, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_samlspserver_get($this->handle, 61 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 61, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_samlspserver_get($this->handle, 62 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 62, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_samlspserver_get($this->handle, 63 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 63, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_samlspserver_get($this->handle, 64 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 64, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the base URL of this SP server.
  *
  * @access   public
  */
  public function getURL() {
    return secureblackbox_samlspserver_get($this->handle, 65 );
  }
 /**
  * Specifies the base URL of this SP server.
  *
  * @access   public
  * @param    string   value
  */
  public function setURL($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 65, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables the secure connection requirement.
  *
  * @access   public
  */
  public function getUseTLS() {
    return secureblackbox_samlspserver_get($this->handle, 66 );
  }
 /**
  * Enables or disables the secure connection requirement.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setUseTLS($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 66, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_samlspserver_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_samlspserver_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_samlspserver_get_last_error($this->handle));
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
  * This event is fired when the SP server has closed a session.
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
