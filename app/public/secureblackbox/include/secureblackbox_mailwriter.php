<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - MailWriter Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_MailWriter {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_mailwriter_open(SECUREBLACKBOX_OEMKEY_300);
    secureblackbox_mailwriter_register_callback($this->handle, 1, array($this, 'fireError'));
    secureblackbox_mailwriter_register_callback($this->handle, 2, array($this, 'fireExternalSign'));
  }
  
  public function __destruct() {
    secureblackbox_mailwriter_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_mailwriter_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_mailwriter_get_last_error_code($this->handle);
  }

 /**
  * Creates an attachment from a memory buffer.
  *
  * @access   public
  * @param    string    data
  */
  public function doAttachBytes($data) {
    $ret = secureblackbox_mailwriter_do_attachbytes($this->handle, $data);
		$err = secureblackbox_mailwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Creates an attachment from a file.
  *
  * @access   public
  * @param    string    filename
  */
  public function doAttachFile($filename) {
    $ret = secureblackbox_mailwriter_do_attachfile($this->handle, $filename);
		$err = secureblackbox_mailwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Creates an image attachment from a memory buffer.
  *
  * @access   public
  * @param    string    id
  * @param    string    data
  */
  public function doAttachImage($id, $data) {
    $ret = secureblackbox_mailwriter_do_attachimage($this->handle, $id, $data);
		$err = secureblackbox_mailwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
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
    $ret = secureblackbox_mailwriter_do_config($this->handle, $configurationstring);
		$err = secureblackbox_mailwriter_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Serializes the message to a file.
  *
  * @access   public
  * @param    string    filename
  */
  public function doSaveToFile($filename) {
    $ret = secureblackbox_mailwriter_do_savetofile($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_mailwriter_get($this->handle, 0);
  }
 /**
  * The encoding to be applied to the attachments.
  *
  * @access   public
  */
  public function getAttachEncoding() {
    return secureblackbox_mailwriter_get($this->handle, 1 );
  }
 /**
  * The encoding to be applied to the attachments.
  *
  * @access   public
  * @param    int   value
  */
  public function setAttachEncoding($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 1, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the Attach arrays.
  *
  * @access   public
  */
  public function getAttachCount() {
    return secureblackbox_mailwriter_get($this->handle, 2 );
  }
 /**
  * The number of records in the Attach arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setAttachCount($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 2, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the content subtype of the attachment.
  *
  * @access   public
  */
  public function getAttachContentSubtype($attachindex) {
    return secureblackbox_mailwriter_get($this->handle, 3 , $attachindex);
  }
 /**
  * Contains the content subtype of the attachment.
  *
  * @access   public
  * @param    string   value
  */
  public function setAttachContentSubtype($attachindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 3, $value , $attachindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contain the content type of the attachment.
  *
  * @access   public
  */
  public function getAttachContentType($attachindex) {
    return secureblackbox_mailwriter_get($this->handle, 4 , $attachindex);
  }
 /**
  * Contain the content type of the attachment.
  *
  * @access   public
  * @param    string   value
  */
  public function setAttachContentType($attachindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 4, $value , $attachindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The creation date.
  *
  * @access   public
  */
  public function getAttachCreationDate($attachindex) {
    return secureblackbox_mailwriter_get($this->handle, 5 , $attachindex);
  }
 /**
  * The creation date.
  *
  * @access   public
  * @param    string   value
  */
  public function setAttachCreationDate($attachindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 5, $value , $attachindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The content of the attachment.
  *
  * @access   public
  */
  public function getAttachData($attachindex) {
    return secureblackbox_mailwriter_get($this->handle, 6 , $attachindex);
  }
 /**
  * The content of the attachment.
  *
  * @access   public
  * @param    string   value
  */
  public function setAttachData($attachindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 6, $value , $attachindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Textual description of the attachment.
  *
  * @access   public
  */
  public function getAttachDescription($attachindex) {
    return secureblackbox_mailwriter_get($this->handle, 7 , $attachindex);
  }
 /**
  * Textual description of the attachment.
  *
  * @access   public
  * @param    string   value
  */
  public function setAttachDescription($attachindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 7, $value , $attachindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the name of the attachment file.
  *
  * @access   public
  */
  public function getAttachFilename($attachindex) {
    return secureblackbox_mailwriter_get($this->handle, 8 , $attachindex);
  }
 /**
  * Specifies the name of the attachment file.
  *
  * @access   public
  * @param    string   value
  */
  public function setAttachFilename($attachindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 8, $value , $attachindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the attachment's unique identifier.
  *
  * @access   public
  */
  public function getAttachID($attachindex) {
    return secureblackbox_mailwriter_get($this->handle, 9 , $attachindex);
  }
 /**
  * Contains the attachment's unique identifier.
  *
  * @access   public
  * @param    string   value
  */
  public function setAttachID($attachindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 9, $value , $attachindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the date and time of the file's last modification.
  *
  * @access   public
  */
  public function getAttachModificationDate($attachindex) {
    return secureblackbox_mailwriter_get($this->handle, 10 , $attachindex);
  }
 /**
  * Specifies the date and time of the file's last modification.
  *
  * @access   public
  * @param    string   value
  */
  public function setAttachModificationDate($attachindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 10, $value , $attachindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the file's last read date.
  *
  * @access   public
  */
  public function getAttachReadDate($attachindex) {
    return secureblackbox_mailwriter_get($this->handle, 11 , $attachindex);
  }
 /**
  * Specifies the file's last read date.
  *
  * @access   public
  * @param    string   value
  */
  public function setAttachReadDate($attachindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 11, $value , $attachindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Attachment's size in bytes.
  *
  * @access   public
  */
  public function getAttachSize($attachindex) {
    return secureblackbox_mailwriter_get($this->handle, 12 , $attachindex);
  }
 /**
  * Attachment's size in bytes.
  *
  * @access   public
  * @param    int64   value
  */
  public function setAttachSize($attachindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 12, $value , $attachindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the BccAddr arrays.
  *
  * @access   public
  */
  public function getBccAddrCount() {
    return secureblackbox_mailwriter_get($this->handle, 13 );
  }
 /**
  * The number of records in the BccAddr arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setBccAddrCount($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 13, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getBccAddrAddress($bccaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 14 , $bccaddrindex);
  }
 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setBccAddrAddress($bccaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 14, $value , $bccaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getBccAddrDisplayName($bccaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 15 , $bccaddrindex);
  }
 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setBccAddrDisplayName($bccaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 15, $value , $bccaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getBccAddrGroupName($bccaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 16 , $bccaddrindex);
  }
 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  * @param    string   value
  */
  public function setBccAddrGroupName($bccaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 16, $value , $bccaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the CcAddr arrays.
  *
  * @access   public
  */
  public function getCcAddrCount() {
    return secureblackbox_mailwriter_get($this->handle, 17 );
  }
 /**
  * The number of records in the CcAddr arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setCcAddrCount($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 17, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getCcAddrAddress($ccaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 18 , $ccaddrindex);
  }
 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setCcAddrAddress($ccaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 18, $value , $ccaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getCcAddrDisplayName($ccaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 19 , $ccaddrindex);
  }
 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setCcAddrDisplayName($ccaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 19, $value , $ccaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getCcAddrGroupName($ccaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 20 , $ccaddrindex);
  }
 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  * @param    string   value
  */
  public function setCcAddrGroupName($ccaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 20, $value , $ccaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The charset to apply to Message .
  *
  * @access   public
  */
  public function getCharset() {
    return secureblackbox_mailwriter_get($this->handle, 21 );
  }
 /**
  * The charset to apply to Message .
  *
  * @access   public
  * @param    string   value
  */
  public function setCharset($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 21, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the EncryptionCert arrays.
  *
  * @access   public
  */
  public function getEncryptionCertCount() {
    return secureblackbox_mailwriter_get($this->handle, 22 );
  }
 /**
  * The number of records in the EncryptionCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setEncryptionCertCount($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 22, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getEncryptionCertBytes($encryptioncertindex) {
    return secureblackbox_mailwriter_get($this->handle, 23 , $encryptioncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getEncryptionCertHandle($encryptioncertindex) {
    return secureblackbox_mailwriter_get($this->handle, 24 , $encryptioncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setEncryptionCertHandle($encryptioncertindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 24, $value , $encryptioncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_mailwriter_get($this->handle, 25 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 25, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_mailwriter_get($this->handle, 26 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_mailwriter_get($this->handle, 27 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 27, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_mailwriter_get($this->handle, 28 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 28, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_mailwriter_get($this->handle, 29 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 29, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_mailwriter_get($this->handle, 30 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 30, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_mailwriter_get($this->handle, 31 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 31, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_mailwriter_get($this->handle, 32 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 32, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_mailwriter_get($this->handle, 33 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the FromAddr arrays.
  *
  * @access   public
  */
  public function getFromAddrCount() {
    return secureblackbox_mailwriter_get($this->handle, 34 );
  }
 /**
  * The number of records in the FromAddr arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setFromAddrCount($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getFromAddrAddress($fromaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 35 , $fromaddrindex);
  }
 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setFromAddrAddress($fromaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 35, $value , $fromaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getFromAddrDisplayName($fromaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 36 , $fromaddrindex);
  }
 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setFromAddrDisplayName($fromaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 36, $value , $fromaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getFromAddrGroupName($fromaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 37 , $fromaddrindex);
  }
 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  * @param    string   value
  */
  public function setFromAddrGroupName($fromaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 37, $value , $fromaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The encoding to be applied to the message header.
  *
  * @access   public
  */
  public function getHeaderEncoding() {
    return secureblackbox_mailwriter_get($this->handle, 38 );
  }
 /**
  * The encoding to be applied to the message header.
  *
  * @access   public
  * @param    int   value
  */
  public function setHeaderEncoding($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 38, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the software used to compose and/or send the message.
  *
  * @access   public
  */
  public function getMailer() {
    return secureblackbox_mailwriter_get($this->handle, 39 );
  }
 /**
  * The name of the software used to compose and/or send the message.
  *
  * @access   public
  * @param    string   value
  */
  public function setMailer($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 39, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the number of attachments in this message.
  *
  * @access   public
  */
  public function getMsgAttachmentCount() {
    return secureblackbox_mailwriter_get($this->handle, 40 );
  }


 /**
  * The contents of the BCC header property.
  *
  * @access   public
  */
  public function getMsgBcc() {
    return secureblackbox_mailwriter_get($this->handle, 41 );
  }
 /**
  * The contents of the BCC header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgBcc($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the CC header property.
  *
  * @access   public
  */
  public function getMsgCc() {
    return secureblackbox_mailwriter_get($this->handle, 42 );
  }
 /**
  * The value of the CC header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgCc($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 42, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains additional information about the message body.
  *
  * @access   public
  */
  public function getMsgComments() {
    return secureblackbox_mailwriter_get($this->handle, 43 );
  }
 /**
  * Contains additional information about the message body.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgComments($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 43, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The date and time when the message entered the mail delivery system.
  *
  * @access   public
  */
  public function getMsgDate() {
    return secureblackbox_mailwriter_get($this->handle, 44 );
  }
 /**
  * The date and time when the message entered the mail delivery system.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgDate($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 44, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables delivery notification.
  *
  * @access   public
  */
  public function getMsgDeliveryReceipt() {
    return secureblackbox_mailwriter_get($this->handle, 45 );
  }
 /**
  * Enables delivery notification.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setMsgDeliveryReceipt($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 45, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the value of the From header property.
  *
  * @access   public
  */
  public function getMsgFrom() {
    return secureblackbox_mailwriter_get($this->handle, 46 );
  }
 /**
  * Contains the value of the From header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgFrom($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 46, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The HTML version of the message.
  *
  * @access   public
  */
  public function getMsgHtmlText() {
    return secureblackbox_mailwriter_get($this->handle, 47 );
  }
 /**
  * The HTML version of the message.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgHtmlText($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The contents of the Message-ID: header property.
  *
  * @access   public
  */
  public function getMsgID() {
    return secureblackbox_mailwriter_get($this->handle, 48 );
  }
 /**
  * The contents of the Message-ID: header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgID($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 48, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "In-Reply-To:" header property.
  *
  * @access   public
  */
  public function getMsgInReplyTo() {
    return secureblackbox_mailwriter_get($this->handle, 49 );
  }
 /**
  * The value of the "In-Reply-To:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgInReplyTo($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 49, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "Keywords:" header property.
  *
  * @access   public
  */
  public function getMsgKeywords() {
    return secureblackbox_mailwriter_get($this->handle, 50 );
  }
 /**
  * The value of the "Keywords:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgKeywords($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the software that was used to send the message.
  *
  * @access   public
  */
  public function getMsgMailer() {
    return secureblackbox_mailwriter_get($this->handle, 51 );
  }


 /**
  * The plain text version of the message.
  *
  * @access   public
  */
  public function getMsgPlainText() {
    return secureblackbox_mailwriter_get($this->handle, 52 );
  }
 /**
  * The plain text version of the message.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgPlainText($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the message priority.
  *
  * @access   public
  */
  public function getMsgPriority() {
    return secureblackbox_mailwriter_get($this->handle, 53 );
  }
 /**
  * Specifies the message priority.
  *
  * @access   public
  * @param    int   value
  */
  public function setMsgPriority($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables a read notification.
  *
  * @access   public
  */
  public function getMsgReadReceipt() {
    return secureblackbox_mailwriter_get($this->handle, 54 );
  }
 /**
  * Enables a read notification.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setMsgReadReceipt($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "References:" header property.
  *
  * @access   public
  */
  public function getMsgReferences() {
    return secureblackbox_mailwriter_get($this->handle, 55 );
  }
 /**
  * The value of the "References:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgReferences($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the Reply-To header property.
  *
  * @access   public
  */
  public function getMsgReplyTo() {
    return secureblackbox_mailwriter_get($this->handle, 56 );
  }
 /**
  * The value of the Reply-To header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgReplyTo($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "Return-Path:" header property.
  *
  * @access   public
  */
  public function getMsgReturnPath() {
    return secureblackbox_mailwriter_get($this->handle, 57 );
  }
 /**
  * The value of the "Return-Path:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgReturnPath($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 57, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the Sender header property.
  *
  * @access   public
  */
  public function getMsgSender() {
    return secureblackbox_mailwriter_get($this->handle, 58 );
  }
 /**
  * The value of the Sender header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgSender($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 58, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the To header property.
  *
  * @access   public
  */
  public function getMsgSendTo() {
    return secureblackbox_mailwriter_get($this->handle, 59 );
  }
 /**
  * The value of the To header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgSendTo($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 59, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the subject property of this message.
  *
  * @access   public
  */
  public function getMsgSubject() {
    return secureblackbox_mailwriter_get($this->handle, 60 );
  }
 /**
  * Contains the subject property of this message.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgSubject($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 60, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the HeaderField arrays.
  *
  * @access   public
  */
  public function getHeaderFieldCount() {
    return secureblackbox_mailwriter_get($this->handle, 61 );
  }
 /**
  * The number of records in the HeaderField arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setHeaderFieldCount($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 61, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name element in a (name, value) pair.
  *
  * @access   public
  */
  public function getHeaderFieldName($headerfieldindex) {
    return secureblackbox_mailwriter_get($this->handle, 62 , $headerfieldindex);
  }
 /**
  * The name element in a (name, value) pair.
  *
  * @access   public
  * @param    string   value
  */
  public function setHeaderFieldName($headerfieldindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 62, $value , $headerfieldindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value element in a (name, value) pair.
  *
  * @access   public
  */
  public function getHeaderFieldValue($headerfieldindex) {
    return secureblackbox_mailwriter_get($this->handle, 63 , $headerfieldindex);
  }
 /**
  * The value element in a (name, value) pair.
  *
  * @access   public
  * @param    string   value
  */
  public function setHeaderFieldValue($headerfieldindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 63, $value , $headerfieldindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ReplyToAddr arrays.
  *
  * @access   public
  */
  public function getReplyToAddrCount() {
    return secureblackbox_mailwriter_get($this->handle, 64 );
  }
 /**
  * The number of records in the ReplyToAddr arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setReplyToAddrCount($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 64, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getReplyToAddrAddress($replytoaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 65 , $replytoaddrindex);
  }
 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setReplyToAddrAddress($replytoaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 65, $value , $replytoaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getReplyToAddrDisplayName($replytoaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 66 , $replytoaddrindex);
  }
 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setReplyToAddrDisplayName($replytoaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 66, $value , $replytoaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getReplyToAddrGroupName($replytoaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 67 , $replytoaddrindex);
  }
 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  * @param    string   value
  */
  public function setReplyToAddrGroupName($replytoaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 67, $value , $replytoaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the signing time from the signer's computer.
  *
  * @access   public
  */
  public function getSecSettingsClaimedSigningTime() {
    return secureblackbox_mailwriter_get($this->handle, 68 );
  }
 /**
  * Specifies the signing time from the signer's computer.
  *
  * @access   public
  * @param    string   value
  */
  public function setSecSettingsClaimedSigningTime($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 68, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to encrypt the message.
  *
  * @access   public
  */
  public function getSecSettingsEncrypt() {
    return secureblackbox_mailwriter_get($this->handle, 69 );
  }
 /**
  * Whether to encrypt the message.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSecSettingsEncrypt($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 69, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the encryption algorithm to be used.
  *
  * @access   public
  */
  public function getSecSettingsEncryptionAlgorithm() {
    return secureblackbox_mailwriter_get($this->handle, 70 );
  }
 /**
  * Specifies the encryption algorithm to be used.
  *
  * @access   public
  * @param    string   value
  */
  public function setSecSettingsEncryptionAlgorithm($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 70, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used.
  *
  * @access   public
  */
  public function getSecSettingsHashAlgorithm() {
    return secureblackbox_mailwriter_get($this->handle, 71 );
  }
 /**
  * Specifies the hash algorithm to be used.
  *
  * @access   public
  * @param    string   value
  */
  public function setSecSettingsHashAlgorithm($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to sign the message.
  *
  * @access   public
  */
  public function getSecSettingsSign() {
    return secureblackbox_mailwriter_get($this->handle, 72 );
  }
 /**
  * Whether to sign the message.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSecSettingsSign($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 72, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the signature format to use for the signed message.
  *
  * @access   public
  */
  public function getSecSettingsSignatureFormat() {
    return secureblackbox_mailwriter_get($this->handle, 73 );
  }
 /**
  * Specifies the signature format to use for the signed message.
  *
  * @access   public
  * @param    int   value
  */
  public function setSecSettingsSignatureFormat($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 73, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the order of encryption and signing operations.
  *
  * @access   public
  */
  public function getSecSettingsSignBeforeEncrypt() {
    return secureblackbox_mailwriter_get($this->handle, 74 );
  }
 /**
  * Specifies the order of encryption and signing operations.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSecSettingsSignBeforeEncrypt($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether to include the message header in the signature calculation.
  *
  * @access   public
  */
  public function getSecSettingsSignMessageHeader() {
    return secureblackbox_mailwriter_get($this->handle, 75 );
  }
 /**
  * Specifies whether to include the message header in the signature calculation.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSecSettingsSignMessageHeader($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 75, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getSenderAddrAddress() {
    return secureblackbox_mailwriter_get($this->handle, 76 );
  }
 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setSenderAddrAddress($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 76, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getSenderAddrDisplayName() {
    return secureblackbox_mailwriter_get($this->handle, 77 );
  }
 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setSenderAddrDisplayName($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 77, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getSenderAddrGroupName() {
    return secureblackbox_mailwriter_get($this->handle, 78 );
  }
 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSenderAddrGroupName($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the SendToAddr arrays.
  *
  * @access   public
  */
  public function getSendToAddrCount() {
    return secureblackbox_mailwriter_get($this->handle, 79 );
  }
 /**
  * The number of records in the SendToAddr arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setSendToAddrCount($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 79, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getSendToAddrAddress($sendtoaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 80 , $sendtoaddrindex);
  }
 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setSendToAddrAddress($sendtoaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 80, $value , $sendtoaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getSendToAddrDisplayName($sendtoaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 81 , $sendtoaddrindex);
  }
 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  * @param    string   value
  */
  public function setSendToAddrDisplayName($sendtoaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 81, $value , $sendtoaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getSendToAddrGroupName($sendtoaddrindex) {
    return secureblackbox_mailwriter_get($this->handle, 82 , $sendtoaddrindex);
  }
 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSendToAddrGroupName($sendtoaddrindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 82, $value , $sendtoaddrindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningCertBytes() {
    return secureblackbox_mailwriter_get($this->handle, 83 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningCertHandle() {
    return secureblackbox_mailwriter_get($this->handle, 84 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningCertHandle($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 84, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  */
  public function getSigningChainCount() {
    return secureblackbox_mailwriter_get($this->handle, 85 );
  }
 /**
  * The number of records in the SigningChain arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setSigningChainCount($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 85, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningChainBytes($signingchainindex) {
    return secureblackbox_mailwriter_get($this->handle, 86 , $signingchainindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningChainHandle($signingchainindex) {
    return secureblackbox_mailwriter_get($this->handle, 87 , $signingchainindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setSigningChainHandle($signingchainindex, $value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 87, $value , $signingchainindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The encoding to be applied to the message.
  *
  * @access   public
  */
  public function getTextEncoding() {
    return secureblackbox_mailwriter_get($this->handle, 88 );
  }
 /**
  * The encoding to be applied to the message.
  *
  * @access   public
  * @param    int   value
  */
  public function setTextEncoding($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 88, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_mailwriter_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_mailwriter_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailwriter_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Reports information about errors during e-mail message assembling or saving.
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


}

?>
