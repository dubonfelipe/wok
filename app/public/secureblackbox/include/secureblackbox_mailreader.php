<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - MailReader Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_MailReader {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_mailreader_open(SECUREBLACKBOX_OEMKEY_301);
    secureblackbox_mailreader_register_callback($this->handle, 1, array($this, 'fireChainValidated'));
    secureblackbox_mailreader_register_callback($this->handle, 2, array($this, 'fireDecryptionInfoNeeded'));
    secureblackbox_mailreader_register_callback($this->handle, 3, array($this, 'fireError'));
    secureblackbox_mailreader_register_callback($this->handle, 4, array($this, 'fireExternalDecrypt'));
    secureblackbox_mailreader_register_callback($this->handle, 5, array($this, 'fireSignatureFound'));
    secureblackbox_mailreader_register_callback($this->handle, 6, array($this, 'fireSignatureValidated'));
  }
  
  public function __destruct() {
    secureblackbox_mailreader_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_mailreader_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_mailreader_get_last_error_code($this->handle);
  }

 /**
  * Sets or retrieves a configuration setting.
  *
  * @access   public
  * @param    string    configurationstring
  */
  public function doConfig($configurationstring) {
    $ret = secureblackbox_mailreader_do_config($this->handle, $configurationstring);
		$err = secureblackbox_mailreader_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Looks up a Message's attachment by its ID.
  *
  * @access   public
  * @param    string    id
  */
  public function doFindAttachment($id) {
    $ret = secureblackbox_mailreader_do_findattachment($this->handle, $id);
		$err = secureblackbox_mailreader_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Loads an e-mail message from a file.
  *
  * @access   public
  * @param    string    filename
  */
  public function doLoadFromFile($filename) {
    $ret = secureblackbox_mailreader_do_loadfromfile($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_mailreader_get($this->handle, 0);
  }
 /**
  * The number of records in the Attach arrays.
  *
  * @access   public
  */
  public function getAttachCount() {
    return secureblackbox_mailreader_get($this->handle, 1 );
  }


 /**
  * Contains the content subtype of the attachment.
  *
  * @access   public
  */
  public function getAttachContentSubtype($attachindex) {
    return secureblackbox_mailreader_get($this->handle, 2 , $attachindex);
  }


 /**
  * Contain the content type of the attachment.
  *
  * @access   public
  */
  public function getAttachContentType($attachindex) {
    return secureblackbox_mailreader_get($this->handle, 3 , $attachindex);
  }


 /**
  * The creation date.
  *
  * @access   public
  */
  public function getAttachCreationDate($attachindex) {
    return secureblackbox_mailreader_get($this->handle, 4 , $attachindex);
  }


 /**
  * The content of the attachment.
  *
  * @access   public
  */
  public function getAttachData($attachindex) {
    return secureblackbox_mailreader_get($this->handle, 5 , $attachindex);
  }


 /**
  * Textual description of the attachment.
  *
  * @access   public
  */
  public function getAttachDescription($attachindex) {
    return secureblackbox_mailreader_get($this->handle, 6 , $attachindex);
  }


 /**
  * Specifies the name of the attachment file.
  *
  * @access   public
  */
  public function getAttachFilename($attachindex) {
    return secureblackbox_mailreader_get($this->handle, 7 , $attachindex);
  }


 /**
  * Contains the attachment's unique identifier.
  *
  * @access   public
  */
  public function getAttachID($attachindex) {
    return secureblackbox_mailreader_get($this->handle, 8 , $attachindex);
  }


 /**
  * Specifies the date and time of the file's last modification.
  *
  * @access   public
  */
  public function getAttachModificationDate($attachindex) {
    return secureblackbox_mailreader_get($this->handle, 9 , $attachindex);
  }


 /**
  * Specifies the file's last read date.
  *
  * @access   public
  */
  public function getAttachReadDate($attachindex) {
    return secureblackbox_mailreader_get($this->handle, 10 , $attachindex);
  }


 /**
  * Attachment's size in bytes.
  *
  * @access   public
  */
  public function getAttachSize($attachindex) {
    return secureblackbox_mailreader_get($this->handle, 11 , $attachindex);
  }


 /**
  * The number of records in the BccAddr arrays.
  *
  * @access   public
  */
  public function getBccAddrCount() {
    return secureblackbox_mailreader_get($this->handle, 12 );
  }


 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getBccAddrAddress($bccaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 13 , $bccaddrindex);
  }


 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getBccAddrDisplayName($bccaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 14 , $bccaddrindex);
  }


 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getBccAddrGroupName($bccaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 15 , $bccaddrindex);
  }


 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  */
  public function getBlockedCertCount() {
    return secureblackbox_mailreader_get($this->handle, 16 );
  }
 /**
  * The number of records in the BlockedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setBlockedCertCount($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 16, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getBlockedCertBytes($blockedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 17 , $blockedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getBlockedCertHandle($blockedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 18 , $blockedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setBlockedCertHandle($blockedcertindex, $value) {
    $ret = secureblackbox_mailreader_set($this->handle, 18, $value , $blockedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the CcAddr arrays.
  *
  * @access   public
  */
  public function getCcAddrCount() {
    return secureblackbox_mailreader_get($this->handle, 19 );
  }


 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getCcAddrAddress($ccaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 20 , $ccaddrindex);
  }


 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getCcAddrDisplayName($ccaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 21 , $ccaddrindex);
  }


 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getCcAddrGroupName($ccaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 22 , $ccaddrindex);
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getDecryptionCertBytes() {
    return secureblackbox_mailreader_get($this->handle, 23 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getDecryptionCertCA() {
    return secureblackbox_mailreader_get($this->handle, 24 );
  }
 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  * @param    boolean   value
  */
  public function setDecryptionCertCA($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 24, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getDecryptionCertCAKeyID() {
    return secureblackbox_mailreader_get($this->handle, 25 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getDecryptionCertCRLDistributionPoints() {
    return secureblackbox_mailreader_get($this->handle, 26 );
  }
 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertCRLDistributionPoints($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 26, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getDecryptionCertCurve() {
    return secureblackbox_mailreader_get($this->handle, 27 );
  }
 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertCurve($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 27, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getDecryptionCertFingerprint() {
    return secureblackbox_mailreader_get($this->handle, 28 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getDecryptionCertFriendlyName() {
    return secureblackbox_mailreader_get($this->handle, 29 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getDecryptionCertHandle() {
    return secureblackbox_mailreader_get($this->handle, 30 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setDecryptionCertHandle($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 30, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getDecryptionCertHashAlgorithm() {
    return secureblackbox_mailreader_get($this->handle, 31 );
  }
 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertHashAlgorithm($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 31, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getDecryptionCertIssuer() {
    return secureblackbox_mailreader_get($this->handle, 32 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getDecryptionCertIssuerRDN() {
    return secureblackbox_mailreader_get($this->handle, 33 );
  }
 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertIssuerRDN($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 33, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getDecryptionCertKeyAlgorithm() {
    return secureblackbox_mailreader_get($this->handle, 34 );
  }
 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertKeyAlgorithm($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 34, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getDecryptionCertKeyBits() {
    return secureblackbox_mailreader_get($this->handle, 35 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getDecryptionCertKeyFingerprint() {
    return secureblackbox_mailreader_get($this->handle, 36 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getDecryptionCertKeyUsage() {
    return secureblackbox_mailreader_get($this->handle, 37 );
  }
 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  * @param    int   value
  */
  public function setDecryptionCertKeyUsage($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 37, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getDecryptionCertKeyValid() {
    return secureblackbox_mailreader_get($this->handle, 38 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getDecryptionCertOCSPLocations() {
    return secureblackbox_mailreader_get($this->handle, 39 );
  }
 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertOCSPLocations($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 39, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getDecryptionCertOrigin() {
    return secureblackbox_mailreader_get($this->handle, 40 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getDecryptionCertPolicyIDs() {
    return secureblackbox_mailreader_get($this->handle, 41 );
  }
 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertPolicyIDs($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 41, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getDecryptionCertPrivateKeyBytes() {
    return secureblackbox_mailreader_get($this->handle, 42 );
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getDecryptionCertPrivateKeyExists() {
    return secureblackbox_mailreader_get($this->handle, 43 );
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getDecryptionCertPrivateKeyExtractable() {
    return secureblackbox_mailreader_get($this->handle, 44 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getDecryptionCertPublicKeyBytes() {
    return secureblackbox_mailreader_get($this->handle, 45 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getDecryptionCertSelfSigned() {
    return secureblackbox_mailreader_get($this->handle, 46 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getDecryptionCertSerialNumber() {
    return secureblackbox_mailreader_get($this->handle, 47 );
  }
 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertSerialNumber($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 47, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getDecryptionCertSigAlgorithm() {
    return secureblackbox_mailreader_get($this->handle, 48 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getDecryptionCertSubject() {
    return secureblackbox_mailreader_get($this->handle, 49 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getDecryptionCertSubjectKeyID() {
    return secureblackbox_mailreader_get($this->handle, 50 );
  }
 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertSubjectKeyID($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 50, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getDecryptionCertSubjectRDN() {
    return secureblackbox_mailreader_get($this->handle, 51 );
  }
 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertSubjectRDN($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 51, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getDecryptionCertValidFrom() {
    return secureblackbox_mailreader_get($this->handle, 52 );
  }
 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertValidFrom($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 52, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getDecryptionCertValidTo() {
    return secureblackbox_mailreader_get($this->handle, 53 );
  }
 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  * @param    string   value
  */
  public function setDecryptionCertValidTo($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 53, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  */
  public function getExternalCryptoCustomParams() {
    return secureblackbox_mailreader_get($this->handle, 54 );
  }
 /**
  * Custom parameters to be passed to the signing service (uninterpreted).
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoCustomParams($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 54, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  */
  public function getExternalCryptoData() {
    return secureblackbox_mailreader_get($this->handle, 55 );
  }
 /**
  * Additional data to be included in the async state and mirrored back by the requestor.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoData($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 55, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  */
  public function getExternalCryptoExternalHashCalculation() {
    return secureblackbox_mailreader_get($this->handle, 56 );
  }
 /**
  * Specifies whether the message hash is to be calculated at the external endpoint.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setExternalCryptoExternalHashCalculation($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 56, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  */
  public function getExternalCryptoHashAlgorithm() {
    return secureblackbox_mailreader_get($this->handle, 57 );
  }
 /**
  * Specifies the request's signature hash algorithm.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoHashAlgorithm($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 57, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeyID() {
    return secureblackbox_mailreader_get($this->handle, 58 );
  }
 /**
  * The ID of the pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeyID($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 58, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  */
  public function getExternalCryptoKeySecret() {
    return secureblackbox_mailreader_get($this->handle, 59 );
  }
 /**
  * The pre-shared key used for DC request authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoKeySecret($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 59, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  */
  public function getExternalCryptoMethod() {
    return secureblackbox_mailreader_get($this->handle, 60 );
  }
 /**
  * Specifies the asynchronous signing method.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMethod($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 60, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  */
  public function getExternalCryptoMode() {
    return secureblackbox_mailreader_get($this->handle, 61 );
  }
 /**
  * Specifies the external cryptography mode.
  *
  * @access   public
  * @param    int   value
  */
  public function setExternalCryptoMode($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 61, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  */
  public function getExternalCryptoPublicKeyAlgorithm() {
    return secureblackbox_mailreader_get($this->handle, 62 );
  }
 /**
  * Provide public key algorithm here if the certificate is not available on the pre-signing stage.
  *
  * @access   public
  * @param    string   value
  */
  public function setExternalCryptoPublicKeyAlgorithm($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 62, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the FromAddr arrays.
  *
  * @access   public
  */
  public function getFromAddrCount() {
    return secureblackbox_mailreader_get($this->handle, 63 );
  }


 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getFromAddrAddress($fromaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 64 , $fromaddrindex);
  }


 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getFromAddrDisplayName($fromaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 65 , $fromaddrindex);
  }


 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getFromAddrGroupName($fromaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 66 , $fromaddrindex);
  }


 /**
  * Makes the class tolerant to chain validation errors.
  *
  * @access   public
  */
  public function getIgnoreChainValidationErrors() {
    return secureblackbox_mailreader_get($this->handle, 67 );
  }
 /**
  * Makes the class tolerant to chain validation errors.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setIgnoreChainValidationErrors($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 67, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  */
  public function getKnownCertCount() {
    return secureblackbox_mailreader_get($this->handle, 68 );
  }
 /**
  * The number of records in the KnownCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCertCount($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 68, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getKnownCertBytes($knowncertindex) {
    return secureblackbox_mailreader_get($this->handle, 69 , $knowncertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCertHandle($knowncertindex) {
    return secureblackbox_mailreader_get($this->handle, 70 , $knowncertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCertHandle($knowncertindex, $value) {
    $ret = secureblackbox_mailreader_set($this->handle, 70, $value , $knowncertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  */
  public function getKnownCRLCount() {
    return secureblackbox_mailreader_get($this->handle, 71 );
  }
 /**
  * The number of records in the KnownCRL arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownCRLCount($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 71, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw CRL data in DER format.
  *
  * @access   public
  */
  public function getKnownCRLBytes($knowncrlindex) {
    return secureblackbox_mailreader_get($this->handle, 72 , $knowncrlindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownCRLHandle($knowncrlindex) {
    return secureblackbox_mailreader_get($this->handle, 73 , $knowncrlindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownCRLHandle($knowncrlindex, $value) {
    $ret = secureblackbox_mailreader_set($this->handle, 73, $value , $knowncrlindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  */
  public function getKnownOCSPCount() {
    return secureblackbox_mailreader_get($this->handle, 74 );
  }
 /**
  * The number of records in the KnownOCSP arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setKnownOCSPCount($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 74, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Buffer containing raw OCSP response data.
  *
  * @access   public
  */
  public function getKnownOCSPBytes($knownocspindex) {
    return secureblackbox_mailreader_get($this->handle, 75 , $knownocspindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getKnownOCSPHandle($knownocspindex) {
    return secureblackbox_mailreader_get($this->handle, 76 , $knownocspindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setKnownOCSPHandle($knownocspindex, $value) {
    $ret = secureblackbox_mailreader_set($this->handle, 76, $value , $knownocspindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns the number of attachments in this message.
  *
  * @access   public
  */
  public function getMsgAttachmentCount() {
    return secureblackbox_mailreader_get($this->handle, 77 );
  }


 /**
  * The contents of the BCC header property.
  *
  * @access   public
  */
  public function getMsgBcc() {
    return secureblackbox_mailreader_get($this->handle, 78 );
  }
 /**
  * The contents of the BCC header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgBcc($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 78, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the CC header property.
  *
  * @access   public
  */
  public function getMsgCc() {
    return secureblackbox_mailreader_get($this->handle, 79 );
  }
 /**
  * The value of the CC header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgCc($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 79, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains additional information about the message body.
  *
  * @access   public
  */
  public function getMsgComments() {
    return secureblackbox_mailreader_get($this->handle, 80 );
  }
 /**
  * Contains additional information about the message body.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgComments($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 80, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The date and time when the message entered the mail delivery system.
  *
  * @access   public
  */
  public function getMsgDate() {
    return secureblackbox_mailreader_get($this->handle, 81 );
  }
 /**
  * The date and time when the message entered the mail delivery system.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgDate($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 81, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables delivery notification.
  *
  * @access   public
  */
  public function getMsgDeliveryReceipt() {
    return secureblackbox_mailreader_get($this->handle, 82 );
  }
 /**
  * Enables delivery notification.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setMsgDeliveryReceipt($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 82, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the value of the From header property.
  *
  * @access   public
  */
  public function getMsgFrom() {
    return secureblackbox_mailreader_get($this->handle, 83 );
  }
 /**
  * Contains the value of the From header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgFrom($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 83, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The HTML version of the message.
  *
  * @access   public
  */
  public function getMsgHtmlText() {
    return secureblackbox_mailreader_get($this->handle, 84 );
  }
 /**
  * The HTML version of the message.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgHtmlText($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 84, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The contents of the Message-ID: header property.
  *
  * @access   public
  */
  public function getMsgID() {
    return secureblackbox_mailreader_get($this->handle, 85 );
  }
 /**
  * The contents of the Message-ID: header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgID($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 85, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "In-Reply-To:" header property.
  *
  * @access   public
  */
  public function getMsgInReplyTo() {
    return secureblackbox_mailreader_get($this->handle, 86 );
  }
 /**
  * The value of the "In-Reply-To:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgInReplyTo($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 86, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "Keywords:" header property.
  *
  * @access   public
  */
  public function getMsgKeywords() {
    return secureblackbox_mailreader_get($this->handle, 87 );
  }
 /**
  * The value of the "Keywords:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgKeywords($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 87, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The name of the software that was used to send the message.
  *
  * @access   public
  */
  public function getMsgMailer() {
    return secureblackbox_mailreader_get($this->handle, 88 );
  }


 /**
  * The plain text version of the message.
  *
  * @access   public
  */
  public function getMsgPlainText() {
    return secureblackbox_mailreader_get($this->handle, 89 );
  }
 /**
  * The plain text version of the message.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgPlainText($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 89, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the message priority.
  *
  * @access   public
  */
  public function getMsgPriority() {
    return secureblackbox_mailreader_get($this->handle, 90 );
  }
 /**
  * Specifies the message priority.
  *
  * @access   public
  * @param    int   value
  */
  public function setMsgPriority($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 90, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables a read notification.
  *
  * @access   public
  */
  public function getMsgReadReceipt() {
    return secureblackbox_mailreader_get($this->handle, 91 );
  }
 /**
  * Enables a read notification.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setMsgReadReceipt($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 91, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "References:" header property.
  *
  * @access   public
  */
  public function getMsgReferences() {
    return secureblackbox_mailreader_get($this->handle, 92 );
  }
 /**
  * The value of the "References:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgReferences($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 92, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the Reply-To header property.
  *
  * @access   public
  */
  public function getMsgReplyTo() {
    return secureblackbox_mailreader_get($this->handle, 93 );
  }
 /**
  * The value of the Reply-To header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgReplyTo($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 93, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the "Return-Path:" header property.
  *
  * @access   public
  */
  public function getMsgReturnPath() {
    return secureblackbox_mailreader_get($this->handle, 94 );
  }
 /**
  * The value of the "Return-Path:" header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgReturnPath($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 94, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the Sender header property.
  *
  * @access   public
  */
  public function getMsgSender() {
    return secureblackbox_mailreader_get($this->handle, 95 );
  }
 /**
  * The value of the Sender header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgSender($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 95, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The value of the To header property.
  *
  * @access   public
  */
  public function getMsgSendTo() {
    return secureblackbox_mailreader_get($this->handle, 96 );
  }
 /**
  * The value of the To header property.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgSendTo($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 96, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the subject property of this message.
  *
  * @access   public
  */
  public function getMsgSubject() {
    return secureblackbox_mailreader_get($this->handle, 97 );
  }
 /**
  * Contains the subject property of this message.
  *
  * @access   public
  * @param    string   value
  */
  public function setMsgSubject($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 97, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  */
  public function getOfflineMode() {
    return secureblackbox_mailreader_get($this->handle, 98 );
  }
 /**
  * Switches the class to the offline mode.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setOfflineMode($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 98, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the HeaderField arrays.
  *
  * @access   public
  */
  public function getHeaderFieldCount() {
    return secureblackbox_mailreader_get($this->handle, 99 );
  }


 /**
  * The name element in a (name, value) pair.
  *
  * @access   public
  */
  public function getHeaderFieldName($headerfieldindex) {
    return secureblackbox_mailreader_get($this->handle, 100 , $headerfieldindex);
  }


 /**
  * The value element in a (name, value) pair.
  *
  * @access   public
  */
  public function getHeaderFieldValue($headerfieldindex) {
    return secureblackbox_mailreader_get($this->handle, 101 , $headerfieldindex);
  }


 /**
  * The IP address of the proxy server.
  *
  * @access   public
  */
  public function getProxyAddress() {
    return secureblackbox_mailreader_get($this->handle, 102 );
  }
 /**
  * The IP address of the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyAddress($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 102, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  */
  public function getProxyAuthentication() {
    return secureblackbox_mailreader_get($this->handle, 103 );
  }
 /**
  * The authentication type used by the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyAuthentication($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 103, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  */
  public function getProxyPassword() {
    return secureblackbox_mailreader_get($this->handle, 104 );
  }
 /**
  * The password to authenticate to the proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyPassword($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 104, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  */
  public function getProxyPort() {
    return secureblackbox_mailreader_get($this->handle, 105 );
  }
 /**
  * The port on the proxy server to connect to.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyPort($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 105, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The type of the proxy server.
  *
  * @access   public
  */
  public function getProxyProxyType() {
    return secureblackbox_mailreader_get($this->handle, 106 );
  }
 /**
  * The type of the proxy server.
  *
  * @access   public
  * @param    int   value
  */
  public function setProxyProxyType($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 106, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  */
  public function getProxyRequestHeaders() {
    return secureblackbox_mailreader_get($this->handle, 107 );
  }
 /**
  * Contains HTTP request headers for WebTunnel and HTTP proxy.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyRequestHeaders($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 107, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  */
  public function getProxyResponseBody() {
    return secureblackbox_mailreader_get($this->handle, 108 );
  }
 /**
  * Contains the HTTP or HTTPS (WebTunnel) proxy response body.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseBody($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 108, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  */
  public function getProxyResponseHeaders() {
    return secureblackbox_mailreader_get($this->handle, 109 );
  }
 /**
  * Contains response headers received from an HTTP or HTTPS (WebTunnel) proxy server.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyResponseHeaders($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 109, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  */
  public function getProxyUseIPv6() {
    return secureblackbox_mailreader_get($this->handle, 110 );
  }
 /**
  * Specifies whether IPv6 should be used when connecting through the proxy.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseIPv6($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 110, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  */
  public function getProxyUseProxy() {
    return secureblackbox_mailreader_get($this->handle, 111 );
  }
 /**
  * Enables or disables proxy-driven connection.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setProxyUseProxy($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 111, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  */
  public function getProxyUsername() {
    return secureblackbox_mailreader_get($this->handle, 112 );
  }
 /**
  * Specifies the username credential for proxy authentication.
  *
  * @access   public
  * @param    string   value
  */
  public function setProxyUsername($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 112, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the ReplyToAddr arrays.
  *
  * @access   public
  */
  public function getReplyToAddrCount() {
    return secureblackbox_mailreader_get($this->handle, 113 );
  }


 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getReplyToAddrAddress($replytoaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 114 , $replytoaddrindex);
  }


 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getReplyToAddrDisplayName($replytoaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 115 , $replytoaddrindex);
  }


 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getReplyToAddrGroupName($replytoaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 116 , $replytoaddrindex);
  }


 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getRevocationCheck() {
    return secureblackbox_mailreader_get($this->handle, 117 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setRevocationCheck($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 117, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The details of a certificate chain validation outcome.
  *
  * @access   public
  */
  public function getSecInfoChainValidationDetails() {
    return secureblackbox_mailreader_get($this->handle, 118 );
  }


 /**
  * The outcome of a certificate chain validation routine.
  *
  * @access   public
  */
  public function getSecInfoChainValidationResult() {
    return secureblackbox_mailreader_get($this->handle, 119 );
  }


 /**
  * Returns the signature's claimed signing time.
  *
  * @access   public
  */
  public function getSecInfoClaimedSigningTime() {
    return secureblackbox_mailreader_get($this->handle, 120 );
  }


 /**
  * Indicates whether the message is encrypted.
  *
  * @access   public
  */
  public function getSecInfoEncrypted() {
    return secureblackbox_mailreader_get($this->handle, 121 );
  }


 /**
  * Indicates the algorithm that was used to encrypt the message.
  *
  * @access   public
  */
  public function getSecInfoEncryptionAlgorithm() {
    return secureblackbox_mailreader_get($this->handle, 122 );
  }


 /**
  * Specifies the hash algorithm that was used to calculate the signature.
  *
  * @access   public
  */
  public function getSecInfoHashAlgorithm() {
    return secureblackbox_mailreader_get($this->handle, 123 );
  }


 /**
  * The outcome of the cryptographic signature validation.
  *
  * @access   public
  */
  public function getSecInfoSignatureValidationResult() {
    return secureblackbox_mailreader_get($this->handle, 124 );
  }


 /**
  * Indicates whether the message is signed.
  *
  * @access   public
  */
  public function getSecInfoSigned() {
    return secureblackbox_mailreader_get($this->handle, 125 );
  }


 /**
  * Contains the signing certificate's chain validation log.
  *
  * @access   public
  */
  public function getSecInfoValidationLog() {
    return secureblackbox_mailreader_get($this->handle, 126 );
  }


 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getSenderAddrAddress() {
    return secureblackbox_mailreader_get($this->handle, 127 );
  }


 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getSenderAddrDisplayName() {
    return secureblackbox_mailreader_get($this->handle, 128 );
  }


 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getSenderAddrGroupName() {
    return secureblackbox_mailreader_get($this->handle, 129 );
  }


 /**
  * The number of records in the SendToAddr arrays.
  *
  * @access   public
  */
  public function getSendToAddrCount() {
    return secureblackbox_mailreader_get($this->handle, 130 );
  }


 /**
  * Contains the e-mail address in the form of john@doe.
  *
  * @access   public
  */
  public function getSendToAddrAddress($sendtoaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 131 , $sendtoaddrindex);
  }


 /**
  * Contains the friendly name of the user of this address, such as John Doe.
  *
  * @access   public
  */
  public function getSendToAddrDisplayName($sendtoaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 132 , $sendtoaddrindex);
  }


 /**
  * The name of the group this address belongs to.
  *
  * @access   public
  */
  public function getSendToAddrGroupName($sendtoaddrindex) {
    return secureblackbox_mailreader_get($this->handle, 133 , $sendtoaddrindex);
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSigningCertBytes() {
    return secureblackbox_mailreader_get($this->handle, 134 );
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getSigningCertCA() {
    return secureblackbox_mailreader_get($this->handle, 135 );
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getSigningCertCAKeyID() {
    return secureblackbox_mailreader_get($this->handle, 136 );
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getSigningCertCRLDistributionPoints() {
    return secureblackbox_mailreader_get($this->handle, 137 );
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getSigningCertCurve() {
    return secureblackbox_mailreader_get($this->handle, 138 );
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getSigningCertFingerprint() {
    return secureblackbox_mailreader_get($this->handle, 139 );
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getSigningCertFriendlyName() {
    return secureblackbox_mailreader_get($this->handle, 140 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSigningCertHandle() {
    return secureblackbox_mailreader_get($this->handle, 141 );
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getSigningCertHashAlgorithm() {
    return secureblackbox_mailreader_get($this->handle, 142 );
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getSigningCertIssuer() {
    return secureblackbox_mailreader_get($this->handle, 143 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getSigningCertIssuerRDN() {
    return secureblackbox_mailreader_get($this->handle, 144 );
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getSigningCertKeyAlgorithm() {
    return secureblackbox_mailreader_get($this->handle, 145 );
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getSigningCertKeyBits() {
    return secureblackbox_mailreader_get($this->handle, 146 );
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getSigningCertKeyFingerprint() {
    return secureblackbox_mailreader_get($this->handle, 147 );
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getSigningCertKeyUsage() {
    return secureblackbox_mailreader_get($this->handle, 148 );
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getSigningCertKeyValid() {
    return secureblackbox_mailreader_get($this->handle, 149 );
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getSigningCertOCSPLocations() {
    return secureblackbox_mailreader_get($this->handle, 150 );
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getSigningCertPolicyIDs() {
    return secureblackbox_mailreader_get($this->handle, 151 );
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getSigningCertPublicKeyBytes() {
    return secureblackbox_mailreader_get($this->handle, 152 );
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getSigningCertSelfSigned() {
    return secureblackbox_mailreader_get($this->handle, 153 );
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getSigningCertSerialNumber() {
    return secureblackbox_mailreader_get($this->handle, 154 );
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getSigningCertSigAlgorithm() {
    return secureblackbox_mailreader_get($this->handle, 155 );
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getSigningCertSubject() {
    return secureblackbox_mailreader_get($this->handle, 156 );
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getSigningCertSubjectKeyID() {
    return secureblackbox_mailreader_get($this->handle, 157 );
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getSigningCertSubjectRDN() {
    return secureblackbox_mailreader_get($this->handle, 158 );
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getSigningCertValidFrom() {
    return secureblackbox_mailreader_get($this->handle, 159 );
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getSigningCertValidTo() {
    return secureblackbox_mailreader_get($this->handle, 160 );
  }


 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  */
  public function getSocketDNSMode() {
    return secureblackbox_mailreader_get($this->handle, 161 );
  }
 /**
  * Selects the DNS resolver to use: the class's (secure) built-in one, or the one provided by the system.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSMode($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 161, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  */
  public function getSocketDNSPort() {
    return secureblackbox_mailreader_get($this->handle, 162 );
  }
 /**
  * Specifies the port number to be used for sending queries to the DNS server.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSPort($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 162, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  */
  public function getSocketDNSQueryTimeout() {
    return secureblackbox_mailreader_get($this->handle, 163 );
  }
 /**
  * The timeout (in milliseconds) for each DNS query.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSQueryTimeout($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 163, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  */
  public function getSocketDNSServers() {
    return secureblackbox_mailreader_get($this->handle, 164 );
  }
 /**
  * The addresses of DNS servers to use for address resolution, separated by commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketDNSServers($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 164, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  */
  public function getSocketDNSTotalTimeout() {
    return secureblackbox_mailreader_get($this->handle, 165 );
  }
 /**
  * The timeout (in milliseconds) for the whole resolution process.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketDNSTotalTimeout($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 165, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  */
  public function getSocketIncomingSpeedLimit() {
    return secureblackbox_mailreader_get($this->handle, 166 );
  }
 /**
  * The maximum number of bytes to read from the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketIncomingSpeedLimit($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 166, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalAddress() {
    return secureblackbox_mailreader_get($this->handle, 167 );
  }
 /**
  * The local network interface to bind the socket to.
  *
  * @access   public
  * @param    string   value
  */
  public function setSocketLocalAddress($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 167, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  */
  public function getSocketLocalPort() {
    return secureblackbox_mailreader_get($this->handle, 168 );
  }
 /**
  * The local port number to bind the socket to.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketLocalPort($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 168, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  */
  public function getSocketOutgoingSpeedLimit() {
    return secureblackbox_mailreader_get($this->handle, 169 );
  }
 /**
  * The maximum number of bytes to write to the socket, per second.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketOutgoingSpeedLimit($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 169, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  */
  public function getSocketTimeout() {
    return secureblackbox_mailreader_get($this->handle, 170 );
  }
 /**
  * The maximum period of waiting, in milliseconds, after which the socket operation is considered unsuccessful.
  *
  * @access   public
  * @param    int   value
  */
  public function setSocketTimeout($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 170, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  */
  public function getSocketUseIPv6() {
    return secureblackbox_mailreader_get($this->handle, 171 );
  }
 /**
  * Enables or disables IP protocol version 6.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setSocketUseIPv6($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 171, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  */
  public function getTLSAutoValidateCertificates() {
    return secureblackbox_mailreader_get($this->handle, 172 );
  }
 /**
  * Specifies whether server-side TLS certificates should be validated automatically using internal validation rules.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSAutoValidateCertificates($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 172, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  */
  public function getTLSBaseConfiguration() {
    return secureblackbox_mailreader_get($this->handle, 173 );
  }
 /**
  * Selects the base configuration for the TLS settings.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSBaseConfiguration($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 173, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  */
  public function getTLSCiphersuites() {
    return secureblackbox_mailreader_get($this->handle, 174 );
  }
 /**
  * A list of enabled ciphersuites separated with commas or semicolons.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSCiphersuites($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 174, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  */
  public function getTLSECCurves() {
    return secureblackbox_mailreader_get($this->handle, 175 );
  }
 /**
  * Defines the elliptic curves to enable.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSECCurves($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 175, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  */
  public function getTLSForceResumeIfDestinationChanges() {
    return secureblackbox_mailreader_get($this->handle, 176 );
  }
 /**
  * Whether to force TLS session resumption when the destination address changes.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSForceResumeIfDestinationChanges($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 176, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  */
  public function getTLSPreSharedIdentity() {
    return secureblackbox_mailreader_get($this->handle, 177 );
  }
 /**
  * Defines the identity used when the PSK (Pre-Shared Key) key-exchange mechanism is negotiated.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedIdentity($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 177, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  */
  public function getTLSPreSharedKey() {
    return secureblackbox_mailreader_get($this->handle, 178 );
  }
 /**
  * Contains the pre-shared for the PSK (Pre-Shared Key) key-exchange mechanism, encoded with base16.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKey($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 178, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  */
  public function getTLSPreSharedKeyCiphersuite() {
    return secureblackbox_mailreader_get($this->handle, 179 );
  }
 /**
  * Defines the ciphersuite used for PSK (Pre-Shared Key) negotiation.
  *
  * @access   public
  * @param    string   value
  */
  public function setTLSPreSharedKeyCiphersuite($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 179, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  */
  public function getTLSRenegotiationAttackPreventionMode() {
    return secureblackbox_mailreader_get($this->handle, 180 );
  }
 /**
  * Selects renegotiation attack prevention mechanism.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRenegotiationAttackPreventionMode($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 180, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  */
  public function getTLSRevocationCheck() {
    return secureblackbox_mailreader_get($this->handle, 181 );
  }
 /**
  * Specifies the kind(s) of revocation check to perform.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSRevocationCheck($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 181, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  */
  public function getTLSSSLOptions() {
    return secureblackbox_mailreader_get($this->handle, 182 );
  }
 /**
  * Various SSL (TLS) protocol options, set of cssloExpectShutdownMessage 0x001 cssloOpenSSLDTLSWorkaround 0x002 cssloDisableKexLengthAlignment 0x004 cssloForceUseOfClientCertHashAlg 0x008 cssloAutoAddServerNameExtension 0x010 cssloAcceptTrustedSRPPrimesOnly 0x020 cssloDisableSignatureAlgorithmsExtension 0x040 cssloIntolerateHigherProtocolVersions 0x080 cssloStickToPrefCertHashAlg 0x100 .
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSSSLOptions($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 182, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  */
  public function getTLSTLSMode() {
    return secureblackbox_mailreader_get($this->handle, 183 );
  }
 /**
  * Specifies the TLS mode to use.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSTLSMode($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 183, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  */
  public function getTLSUseExtendedMasterSecret() {
    return secureblackbox_mailreader_get($this->handle, 184 );
  }
 /**
  * Enables Extended Master Secret Extension, as defined in RFC 7627.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseExtendedMasterSecret($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 184, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  */
  public function getTLSUseSessionResumption() {
    return secureblackbox_mailreader_get($this->handle, 185 );
  }
 /**
  * Enables or disables TLS session resumption capability.
  *
  * @access   public
  * @param    boolean   value
  */
  public function setTLSUseSessionResumption($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 185, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  */
  public function getTLSVersions() {
    return secureblackbox_mailreader_get($this->handle, 186 );
  }
 /**
  * Th SSL/TLS versions to enable by default.
  *
  * @access   public
  * @param    int   value
  */
  public function setTLSVersions($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 186, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  */
  public function getTrustedCertCount() {
    return secureblackbox_mailreader_get($this->handle, 187 );
  }
 /**
  * The number of records in the TrustedCert arrays.
  *
  * @access   public
  * @param    int   value
  */
  public function setTrustedCertCount($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 187, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getTrustedCertBytes($trustedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 188 , $trustedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getTrustedCertHandle($trustedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 189 , $trustedcertindex);
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setTrustedCertHandle($trustedcertindex, $value) {
    $ret = secureblackbox_mailreader_set($this->handle, 189, $value , $trustedcertindex);
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the UsedCert arrays.
  *
  * @access   public
  */
  public function getUsedCertCount() {
    return secureblackbox_mailreader_get($this->handle, 190 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getUsedCertBytes($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 191 , $usedcertindex);
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getUsedCertCA($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 192 , $usedcertindex);
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getUsedCertCAKeyID($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 193 , $usedcertindex);
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getUsedCertCRLDistributionPoints($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 194 , $usedcertindex);
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getUsedCertCurve($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 195 , $usedcertindex);
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getUsedCertFingerprint($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 196 , $usedcertindex);
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getUsedCertFriendlyName($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 197 , $usedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getUsedCertHandle($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 198 , $usedcertindex);
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getUsedCertHashAlgorithm($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 199 , $usedcertindex);
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getUsedCertIssuer($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 200 , $usedcertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getUsedCertIssuerRDN($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 201 , $usedcertindex);
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getUsedCertKeyAlgorithm($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 202 , $usedcertindex);
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getUsedCertKeyBits($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 203 , $usedcertindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getUsedCertKeyFingerprint($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 204 , $usedcertindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getUsedCertKeyUsage($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 205 , $usedcertindex);
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getUsedCertKeyValid($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 206 , $usedcertindex);
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getUsedCertOCSPLocations($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 207 , $usedcertindex);
  }


 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getUsedCertOrigin($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 208 , $usedcertindex);
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getUsedCertPolicyIDs($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 209 , $usedcertindex);
  }


 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getUsedCertPrivateKeyBytes($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 210 , $usedcertindex);
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getUsedCertPrivateKeyExists($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 211 , $usedcertindex);
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getUsedCertPrivateKeyExtractable($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 212 , $usedcertindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getUsedCertPublicKeyBytes($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 213 , $usedcertindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getUsedCertSelfSigned($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 214 , $usedcertindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getUsedCertSerialNumber($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 215 , $usedcertindex);
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getUsedCertSigAlgorithm($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 216 , $usedcertindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getUsedCertSubject($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 217 , $usedcertindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getUsedCertSubjectKeyID($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 218 , $usedcertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getUsedCertSubjectRDN($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 219 , $usedcertindex);
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getUsedCertValidFrom($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 220 , $usedcertindex);
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getUsedCertValidTo($usedcertindex) {
    return secureblackbox_mailreader_get($this->handle, 221 , $usedcertindex);
  }


 /**
  * The time point at which signature validity is to be established.
  *
  * @access   public
  */
  public function getValidationMoment() {
    return secureblackbox_mailreader_get($this->handle, 222 );
  }
 /**
  * The time point at which signature validity is to be established.
  *
  * @access   public
  * @param    string   value
  */
  public function setValidationMoment($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 222, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }



  public function getRuntimeLicense() {
    return secureblackbox_mailreader_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_mailreader_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_mailreader_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Reports the completion of a certificate chain validation.
  *
  * @access   public
  * @param    array   Array of event parameters: subjectrdn, validationresult, validationdetails    
  */
  public function fireChainValidated($param) {
    return $param;
  }

 /**
  * Asks the application to provide a decryption certificate.
  *
  * @access   public
  * @param    array   Array of event parameters: issuerrdn, serialnumber, subjectkeyid    
  */
  public function fireDecryptionInfoNeeded($param) {
    return $param;
  }

 /**
  * Reports information about errors during e-mail message loading, parsing or saving.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }

 /**
  * Handles remote or external decryption.
  *
  * @access   public
  * @param    array   Array of event parameters: operationid, algorithm, pars, encrypteddata, data    
  */
  public function fireExternalDecrypt($param) {
    return $param;
  }

 /**
  * Signifies the start of signature validation.
  *
  * @access   public
  * @param    array   Array of event parameters: issuerrdn, serialnumber, subjectkeyid, certfound, validatesignature, validatechain    
  */
  public function fireSignatureFound($param) {
    return $param;
  }

 /**
  * Marks the completion of the signature validation routine.
  *
  * @access   public
  * @param    array   Array of event parameters: issuerrdn, serialnumber, subjectkeyid, validationresult    
  */
  public function fireSignatureValidated($param) {
    return $param;
  }


}

?>
