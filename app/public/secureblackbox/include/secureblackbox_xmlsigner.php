<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - XMLSigner Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_XMLSigner {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_xmlsigner_open(SECUREBLACKBOX_OEMKEY_781);
    secureblackbox_xmlsigner_register_callback($this->handle, 1, array($this, 'fireError'));
    secureblackbox_xmlsigner_register_callback($this->handle, 2, array($this, 'fireExternalSign'));
    secureblackbox_xmlsigner_register_callback($this->handle, 3, array($this, 'fireFormatElement'));
    secureblackbox_xmlsigner_register_callback($this->handle, 4, array($this, 'fireFormatText'));
    secureblackbox_xmlsigner_register_callback($this->handle, 5, array($this, 'fireResolveReference'));
  }
  
  public function __destruct() {
    secureblackbox_xmlsigner_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_xmlsigner_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_xmlsigner_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_xmlsigner_do_config($this->handle, $configurationstring);
		$err = secureblackbox_xmlsigner_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Extracts user data from the DC signing service response.
  *
  * @access   public
  * @param    string    asyncreply
  */
  public function doExtractAsyncData($asyncreply) {
    $ret = secureblackbox_xmlsigner_do_extractasyncdata($this->handle, $asyncreply);
		$err = secureblackbox_xmlsigner_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs an XML document.
  *
  * @access   public
  */
  public function doSign() {
    $ret = secureblackbox_xmlsigner_do_sign($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Initiates the asynchronous signing operation.
  *
  * @access   public
  */
  public function doSignAsyncBegin() {
    $ret = secureblackbox_xmlsigner_do_signasyncbegin($this->handle);
		$err = secureblackbox_xmlsigner_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Completes the asynchronous signing operation.
  *
  * @access   public
  * @param    string    asyncreply
  */
  public function doSignAsyncEnd($asyncreply) {
    $ret = secureblackbox_xmlsigner_do_signasyncend($this->handle, $asyncreply);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Signs the document using an external signing facility.
  *
  * @access   public
  */
  public function doSignExternal() {
    $ret = secureblackbox_xmlsigner_do_signexternal($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_xmlsigner_get($this->handle, 0);
  }
 /**
  * Specifies XML canonicalization method to use.
  *
  * @access   public
  */
  public function getCanonicalizationMethod() {
    return secureblackbox_xmlsigner_get($this->handle, 1 );
  }
 /**
  * Specifies XML canonicalization method to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setCanonicalizationMethod($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies XML encoding.
  *
  * @access   public
  */
  public function getEncoding() {
    return secureblackbox_xmlsigner_get($this->handle, 2 );
  }
 /**
  * Specifies XML encoding.
  *
  * @access   public
  * @param    string   value
  */
  public function setEncoding($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_xmlsigner_get($this->handle, 3 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 3, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_xmlsigner_get($this->handle, 4 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 4, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_xmlsigner_get($this->handle, 5 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 5, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_xmlsigner_get($this->handle, 6 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 6, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_xmlsigner_get($this->handle, 7 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 7, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_xmlsigner_get($this->handle, 8 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 8, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_xmlsigner_get($this->handle, 9 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 9, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_xmlsigner_get($this->handle, 10 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 10, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_xmlsigner_get($this->handle, 11 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 11, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used.
  *
  * @access   public
  */
  public function getHashAlgorithm() {
    return secureblackbox_xmlsigner_get($this->handle, 12 );
  }
 /**
  * Specifies the hash algorithm to be used.
  *
  * @access   public
  * @param    string   value
  */
  public function setHashAlgorithm($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 12, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the XML document to be signed.
  *
  * @access   public
  */
  public function getInputFile() {
    return secureblackbox_xmlsigner_get($this->handle, 13 );
  }
 /**
  * Specifies the XML document to be signed.
  *
  * @access   public
  * @param    string   value
  */
  public function setInputFile($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A file where the signed document is to be saved.
  *
  * @access   public
  */
  public function getOutputFile() {
    return secureblackbox_xmlsigner_get($this->handle, 14 );
  }
 /**
  * A file where the signed document is to be saved.
  *
  * @access   public
  * @param    string   value
  */
  public function setOutputFile($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 14, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Reference arrays.
  *
  * @access   public
  */
  public function getReferenceCount() {
    return secureblackbox_xmlsigner_get($this->handle, 15 );
  }
 /**
  * The number of records in the Reference arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setReferenceCount($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 15, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the identifier (ID) attribute for a referenced (target) element should be auto-generated during signing.
  *
  * @access   public
  */
  public function getReferenceAutoGenerateElementId($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 16 , $referenceindex);
  }
 /**
  * Specifies whether the identifier (ID) attribute for a referenced (target) element should be auto-generated during signing.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReferenceAutoGenerateElementId($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 16, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify the canonicalization method for the transform of the reference.
  *
  * @access   public
  */
  public function getReferenceCanonicalizationMethod($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 17 , $referenceindex);
  }
 /**
  * Use this property to specify the canonicalization method for the transform of the reference.
  *
  * @access   public
  * @param    int   value
  */
  public function setReferenceCanonicalizationMethod($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 17, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies a custom identifier (ID) attribute for a referenced (target) element that will be set on signing.
  *
  * @access   public
  */
  public function getReferenceCustomElementId($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 18 , $referenceindex);
  }
 /**
  * Specifies a custom identifier (ID) attribute for a referenced (target) element that will be set on signing.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceCustomElementId($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 18, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to get or set the value of the digest calculated  over the referenced data.
  *
  * @access   public
  */
  public function getReferenceDigestValue($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 19 , $referenceindex);
  }
 /**
  * Use this property to get or set the value of the digest calculated  over the referenced data.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceDigestValue($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 19, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getReferenceHandle($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 20 , $referenceindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setReferenceHandle($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 20, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used.
  *
  * @access   public
  */
  public function getReferenceHashAlgorithm($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 21 , $referenceindex);
  }
 /**
  * Specifies the hash algorithm to be used.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceHashAlgorithm($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 21, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the URI is set (even when it is empty).
  *
  * @access   public
  */
  public function getReferenceHasURI($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 22 , $referenceindex);
  }
 /**
  * Specifies whether the URI is set (even when it is empty).
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReferenceHasURI($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 22, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A user-defined identifier (ID) attribute of this Reference element.
  *
  * @access   public
  */
  public function getReferenceID($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 23 , $referenceindex);
  }
 /**
  * A user-defined identifier (ID) attribute of this Reference element.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceID($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 23, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify InclusiveNamespaces PrefixList for exclusive canonicalization transform of the reference.
  *
  * @access   public
  */
  public function getReferenceInclusiveNamespacesPrefixList($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 24 , $referenceindex);
  }
 /**
  * Use this property to specify InclusiveNamespaces PrefixList for exclusive canonicalization transform of the reference.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceInclusiveNamespacesPrefixList($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 24, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The Reference's type attribute as defined in XMLDSIG specification.
  *
  * @access   public
  */
  public function getReferenceReferenceType($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 25 , $referenceindex);
  }
 /**
  * The Reference's type attribute as defined in XMLDSIG specification.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceReferenceType($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 25, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the referenced external data when the digest value is not explicitly specified.
  *
  * @access   public
  */
  public function getReferenceTargetData($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 26 , $referenceindex);
  }
 /**
  * Contains the referenced external data when the digest value is not explicitly specified.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceTargetData($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 26, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * This property specifies the referenced XML element.
  *
  * @access   public
  */
  public function getReferenceTargetXMLElement($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 27 , $referenceindex);
  }
 /**
  * This property specifies the referenced XML element.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceTargetXMLElement($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 27, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to get or set the URL which references the data.
  *
  * @access   public
  */
  public function getReferenceURI($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 28 , $referenceindex);
  }
 /**
  * Use this property to get or set the URL which references the data.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceURI($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 28, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether Base64 transform is included in transform chain.
  *
  * @access   public
  */
  public function getReferenceUseBase64Transform($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 29 , $referenceindex);
  }
 /**
  * Specifies whether Base64 transform is included in transform chain.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReferenceUseBase64Transform($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 29, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether enveloped signature transform is included in transform chain.
  *
  * @access   public
  */
  public function getReferenceUseEnvelopedSignatureTransform($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 30 , $referenceindex);
  }
 /**
  * Specifies whether enveloped signature transform is included in transform chain.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReferenceUseEnvelopedSignatureTransform($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 30, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether XPath transform is included in transform chain.
  *
  * @access   public
  */
  public function getReferenceUseXPathTransform($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 31 , $referenceindex);
  }
 /**
  * Specifies whether XPath transform is included in transform chain.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setReferenceUseXPathTransform($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 31, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify XPath expression for XPath transform of the reference.
  *
  * @access   public
  */
  public function getReferenceXPathExpression($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 32 , $referenceindex);
  }
 /**
  * Use this property to specify XPath expression for XPath transform of the reference.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceXPathExpression($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 32, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Use this property to specify a prefix list for XPath transform of the reference.
  *
  * @access   public
  */
  public function getReferenceXPathPrefixList($referenceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 33 , $referenceindex);
  }
 /**
  * Use this property to specify a prefix list for XPath transform of the reference.
  *
  * @access   public
  * @param    string   value
  */
  public function setReferenceXPathPrefixList($referenceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 33, $value , $referenceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The signature type to employ when signing the document.
  *
  * @access   public
  */
  public function getSignatureType() {
    return secureblackbox_xmlsigner_get($this->handle, 34 );
  }
 /**
  * The signature type to employ when signing the document.
  *
  * @access   public
  * @param    int   value
  */
  public function setSignatureType($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningCertBytes() {
    return secureblackbox_xmlsigner_get($this->handle, 35 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningCertHandle() {
    return secureblackbox_xmlsigner_get($this->handle, 36 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningCertHandle($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 36, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  */
  public function getSigningChainCount() {
    return secureblackbox_xmlsigner_get($this->handle, 37 );
  }
 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigningChainCount($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 37, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningChainBytes($signingchainindex) {
    return secureblackbox_xmlsigner_get($this->handle, 38 , $signingchainindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningChainHandle($signingchainindex) {
    return secureblackbox_xmlsigner_get($this->handle, 39 , $signingchainindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningChainHandle($signingchainindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 39, $value , $signingchainindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the XML element where to save the signature data.
  *
  * @access   public
  */
  public function getXMLElement() {
    return secureblackbox_xmlsigner_get($this->handle, 40 );
  }
 /**
  * Specifies the XML element where to save the signature data.
  *
  * @access   public
  * @param    string   value
  */
  public function setXMLElement($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 40, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Namespace arrays.
  *
  * @access   public
  */
  public function getNamespaceCount() {
    return secureblackbox_xmlsigner_get($this->handle, 41 );
  }
 /**
  * The number of records in the Namespace arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setNamespaceCount($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A user-defined prefix value of a namespace.
  *
  * @access   public
  */
  public function getNamespacePrefix($namespaceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 42 , $namespaceindex);
  }
 /**
  * A user-defined prefix value of a namespace.
  *
  * @access   public
  * @param    string   value
  */
  public function setNamespacePrefix($namespaceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 42, $value , $namespaceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A user-defined URI value of a namespace.
  *
  * @access   public
  */
  public function getNamespaceURI($namespaceindex) {
    return secureblackbox_xmlsigner_get($this->handle, 43 , $namespaceindex);
  }
 /**
  * A user-defined URI value of a namespace.
  *
  * @access   public
  * @param    string   value
  */
  public function setNamespaceURI($namespaceindex, $value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 43, $value , $namespaceindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_xmlsigner_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_xmlsigner_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_xmlsigner_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Reports the details of signing errors.
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
  * Reports the XML element that is currently being processed.
  *
  * @access   public
  * @param    array   Array of event parameters: starttagwhitespace, endtagwhitespace, level, path, haschildelements    
  */
  public function fireFormatElement($param) {
    return $param;
  }

 /**
  * Reports XML text that is currently being processed.
  *
  * @access   public
  * @param    array   Array of event parameters: text, texttype, level, path    
  */
  public function fireFormatText($param) {
    return $param;
  }

 /**
  * Asks the application to resolve a reference.
  *
  * @access   public
  * @param    array   Array of event parameters: uri, referenceindex    
  */
  public function fireResolveReference($param) {
    return $param;
  }


}

?>
