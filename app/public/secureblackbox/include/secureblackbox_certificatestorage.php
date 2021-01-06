<?php

require_once('secureblackbox_keys.php');

/**
 * SecureBlackbox 2020 PHP Edition - CertificateStorage Component
 *
 * Copyright (c) 2020 /n software inc. - All rights reserved.
 *
 * For more information, please visit http://www.nsoftware.com/.
 *
 */

class SecureBlackbox_CertificateStorage {
  
  var $handle;

  public function __construct() {
    $this->handle = secureblackbox_certificatestorage_open(SECUREBLACKBOX_OEMKEY_262);
    secureblackbox_certificatestorage_register_callback($this->handle, 1, array($this, 'fireError'));
    secureblackbox_certificatestorage_register_callback($this->handle, 2, array($this, 'firePasswordNeeded'));
  }
  
  public function __destruct() {
    secureblackbox_certificatestorage_close($this->handle);
  }

 /**
  * Returns the last error code.
  *
  * @access   public
  */
  public function lastError() {
    return secureblackbox_certificatestorage_get_last_error($this->handle);
  }
  
 /**
  * Returns the last error message.
  *
  * @access   public
  */
  public function lastErrorCode() {
    return secureblackbox_certificatestorage_get_last_error_code($this->handle);
  }

 /**
  * Adds a certificate to the storage.
  *
  * @access   public
  * @param    string    data
  */
  public function doAdd($data) {
    $ret = secureblackbox_certificatestorage_do_add($this->handle, $data);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Adds a certificate to the storage.
  *
  * @access   public
  * @param    string    filename
  */
  public function doAddFromFile($filename) {
    $ret = secureblackbox_certificatestorage_do_addfromfile($this->handle, $filename);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Adds the pinned certificate to the storage.
  *
  * @access   public
  */
  public function doAddPinned() {
    $ret = secureblackbox_certificatestorage_do_addpinned($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes all certificates from the storage.
  *
  * @access   public
  */
  public function doClear() {
    $ret = secureblackbox_certificatestorage_do_clear($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Closes the logical storage.
  *
  * @access   public
  * @param    boolean    save
  */
  public function doClose($save) {
    $ret = secureblackbox_certificatestorage_do_close($this->handle, $save);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
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
    $ret = secureblackbox_certificatestorage_do_config($this->handle, $configurationstring);
		$err = secureblackbox_certificatestorage_get_last_error_code($this->handle);
    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Creates a new storage.
  *
  * @access   public
  * @param    string    storagelocation
  * @param    string    storageid
  */
  public function doCreateNew($storagelocation, $storageid) {
    $ret = secureblackbox_certificatestorage_do_createnew($this->handle, $storagelocation, $storageid);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Opens existing storage or creates one in memory.
  *
  * @access   public
  * @param    string    storageid
  */
  public function doOpen($storageid) {
    $ret = secureblackbox_certificatestorage_do_open($this->handle, $storageid);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Refreshes all storage keychains.
  *
  * @access   public
  */
  public function doRefresh() {
    $ret = secureblackbox_certificatestorage_do_refresh($this->handle);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Removes a certificate from the storage.
  *
  * @access   public
  * @param    int    index
  */
  public function doRemove($index) {
    $ret = secureblackbox_certificatestorage_do_remove($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Allows the selection of certificates from the system store.
  *
  * @access   public
  * @param    string    filter
  * @param    boolean    privatekeyneeded
  * @param    int    maxcount
  */
  public function doSelect($filter, $privatekeyneeded, $maxcount) {
    $ret = secureblackbox_certificatestorage_do_select($this->handle, $filter, $privatekeyneeded, $maxcount);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * Selects a chain of certificates given its index.
  *
  * @access   public
  * @param    int    index
  */
  public function doSelectChain($index) {
    $ret = secureblackbox_certificatestorage_do_selectchain($this->handle, $index);
		$err = $ret;

    if ($err != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

   

public function VERSION() {
    return secureblackbox_certificatestorage_get($this->handle, 0);
  }
 /**
  * The number of records in the Cert arrays.
  *
  * @access   public
  */
  public function getCertCount() {
    return secureblackbox_certificatestorage_get($this->handle, 1 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getCertBytes($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 2 , $certindex);
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getCertCA($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 3 , $certindex);
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getCertCAKeyID($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 4 , $certindex);
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getCertCRLDistributionPoints($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 5 , $certindex);
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getCertCurve($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 6 , $certindex);
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getCertFingerprint($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 7 , $certindex);
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getCertFriendlyName($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 8 , $certindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getCertHandle($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 9 , $certindex);
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getCertHashAlgorithm($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 10 , $certindex);
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getCertIssuer($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 11 , $certindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getCertIssuerRDN($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 12 , $certindex);
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getCertKeyAlgorithm($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 13 , $certindex);
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getCertKeyBits($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 14 , $certindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getCertKeyFingerprint($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 15 , $certindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getCertKeyUsage($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 16 , $certindex);
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getCertKeyValid($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 17 , $certindex);
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getCertOCSPLocations($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 18 , $certindex);
  }


 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getCertOrigin($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 19 , $certindex);
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getCertPolicyIDs($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 20 , $certindex);
  }


 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getCertPrivateKeyBytes($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 21 , $certindex);
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getCertPrivateKeyExists($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 22 , $certindex);
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getCertPrivateKeyExtractable($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 23 , $certindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getCertPublicKeyBytes($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 24 , $certindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getCertSelfSigned($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 25 , $certindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getCertSerialNumber($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 26 , $certindex);
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getCertSigAlgorithm($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 27 , $certindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getCertSubject($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 28 , $certindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getCertSubjectKeyID($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 29 , $certindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getCertSubjectRDN($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 30 , $certindex);
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getCertValidFrom($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 31 , $certindex);
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getCertValidTo($certindex) {
    return secureblackbox_certificatestorage_get($this->handle, 32 , $certindex);
  }


 /**
  * Indicates whether the storage is in the open state.
  *
  * @access   public
  */
  public function getOpened() {
    return secureblackbox_certificatestorage_get($this->handle, 33 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getPinnedCertBytes() {
    return secureblackbox_certificatestorage_get($this->handle, 34 );
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getPinnedCertHandle() {
    return secureblackbox_certificatestorage_get($this->handle, 35 );
  }
 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  * @param    int64   value
  */
  public function setPinnedCertHandle($value) {
    $ret = secureblackbox_certificatestorage_set($this->handle, 35, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }

 /**
  * The number of records in the SelectedCert arrays.
  *
  * @access   public
  */
  public function getSelectedCertCount() {
    return secureblackbox_certificatestorage_get($this->handle, 36 );
  }


 /**
  * Returns raw certificate data in DER format.
  *
  * @access   public
  */
  public function getSelectedCertBytes($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 37 , $selectedcertindex);
  }


 /**
  * Indicates whether the certificate has a CA capability (a setting in BasicConstraints extension).
  *
  * @access   public
  */
  public function getSelectedCertCA($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 38 , $selectedcertindex);
  }


 /**
  * A unique identifier (fingerprint) of the CA certificate's private key.
  *
  * @access   public
  */
  public function getSelectedCertCAKeyID($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 39 , $selectedcertindex);
  }


 /**
  * Locations of the CRL (Certificate Revocation List) distribution points used to check this certificate's validity.
  *
  * @access   public
  */
  public function getSelectedCertCRLDistributionPoints($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 40 , $selectedcertindex);
  }


 /**
  * Specifies the elliptic curve of the EC public key.
  *
  * @access   public
  */
  public function getSelectedCertCurve($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 41 , $selectedcertindex);
  }


 /**
  * Contains the fingerprint (a hash imprint) of this certificate.
  *
  * @access   public
  */
  public function getSelectedCertFingerprint($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 42 , $selectedcertindex);
  }


 /**
  * Contains an associated alias (friendly name) of the certificate.
  *
  * @access   public
  */
  public function getSelectedCertFriendlyName($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 43 , $selectedcertindex);
  }


 /**
  * Allows to get or set a 'handle', a unique identifier of the underlying property object.
  *
  * @access   public
  */
  public function getSelectedCertHandle($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 44 , $selectedcertindex);
  }


 /**
  * Specifies the hash algorithm to be used in the operations on the certificate (such as key signing) SB_HASH_ALGORITHM_SHA1 SHA1 SB_HASH_ALGORITHM_SHA224 SHA224 SB_HASH_ALGORITHM_SHA256 SHA256 SB_HASH_ALGORITHM_SHA384 SHA384 SB_HASH_ALGORITHM_SHA512 SHA512 SB_HASH_ALGORITHM_MD2 MD2 SB_HASH_ALGORITHM_MD4 MD4 SB_HASH_ALGORITHM_MD5 MD5 SB_HASH_ALGORITHM_RIPEMD160 RIPEMD160 SB_HASH_ALGORITHM_CRC32 CRC32 SB_HASH_ALGORITHM_SSL3 SSL3 SB_HASH_ALGORITHM_GOST_R3411_1994 GOST1994 SB_HASH_ALGORITHM_WHIRLPOOL WHIRLPOOL SB_HASH_ALGORITHM_POLY1305 POLY1305 SB_HASH_ALGORITHM_SHA3_224 SHA3_224 SB_HASH_ALGORITHM_SHA3_256 SHA3_256 SB_HASH_ALGORITHM_SHA3_384 SHA3_384 SB_HASH_ALGORITHM_SHA3_512 SHA3_512 SB_HASH_ALGORITHM_BLAKE2S_128 BLAKE2S_128 SB_HASH_ALGORITHM_BLAKE2S_160 BLAKE2S_160 SB_HASH_ALGORITHM_BLAKE2S_224 BLAKE2S_224 SB_HASH_ALGORITHM_BLAKE2S_256 BLAKE2S_256 SB_HASH_ALGORITHM_BLAKE2B_160 BLAKE2B_160 SB_HASH_ALGORITHM_BLAKE2B_256 BLAKE2B_256 SB_HASH_ALGORITHM_BLAKE2B_384 BLAKE2B_384 SB_HASH_ALGORITHM_BLAKE2B_512 BLAKE2B_512 SB_HASH_ALGORITHM_SHAKE_128 SHAKE_128 SB_HASH_ALGORITHM_SHAKE_256 SHAKE_256 SB_HASH_ALGORITHM_SHAKE_128_LEN SHAKE_128_LEN SB_HASH_ALGORITHM_SHAKE_256_LEN SHAKE_256_LEN .
  *
  * @access   public
  */
  public function getSelectedCertHashAlgorithm($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 45 , $selectedcertindex);
  }


 /**
  * The common name of the certificate issuer (CA), typically a company name.
  *
  * @access   public
  */
  public function getSelectedCertIssuer($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 46 , $selectedcertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate issuer.
  *
  * @access   public
  */
  public function getSelectedCertIssuerRDN($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 47 , $selectedcertindex);
  }


 /**
  * Specifies the public key algorithm of this certificate.
  *
  * @access   public
  */
  public function getSelectedCertKeyAlgorithm($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 48 , $selectedcertindex);
  }


 /**
  * Returns the length of the public key.
  *
  * @access   public
  */
  public function getSelectedCertKeyBits($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 49 , $selectedcertindex);
  }


 /**
  * Returns a fingerprint of the public key contained in the certificate.
  *
  * @access   public
  */
  public function getSelectedCertKeyFingerprint($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 50 , $selectedcertindex);
  }


 /**
  * Indicates the purposes of the key contained in the certificate, in the form of an OR'ed flag set.
  *
  * @access   public
  */
  public function getSelectedCertKeyUsage($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 51 , $selectedcertindex);
  }


 /**
  * Returns True if the certificate's key is cryptographically valid, and False otherwise.
  *
  * @access   public
  */
  public function getSelectedCertKeyValid($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 52 , $selectedcertindex);
  }


 /**
  * Locations of OCSP (Online Certificate Status Protocol) services that can be used to check this certificate's validity, as recorded by the CA.
  *
  * @access   public
  */
  public function getSelectedCertOCSPLocations($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 53 , $selectedcertindex);
  }


 /**
  * Returns the origin of this certificate.
  *
  * @access   public
  */
  public function getSelectedCertOrigin($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 54 , $selectedcertindex);
  }


 /**
  * Contains identifiers (OIDs) of the applicable certificate policies.
  *
  * @access   public
  */
  public function getSelectedCertPolicyIDs($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 55 , $selectedcertindex);
  }


 /**
  * Contains the certificate's private key.
  *
  * @access   public
  */
  public function getSelectedCertPrivateKeyBytes($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 56 , $selectedcertindex);
  }


 /**
  * Indicates whether the certificate has an associated private key.
  *
  * @access   public
  */
  public function getSelectedCertPrivateKeyExists($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 57 , $selectedcertindex);
  }


 /**
  * Indicates whether the private key is extractable.
  *
  * @access   public
  */
  public function getSelectedCertPrivateKeyExtractable($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 58 , $selectedcertindex);
  }


 /**
  * Contains the certificate's public key in DER format.
  *
  * @access   public
  */
  public function getSelectedCertPublicKeyBytes($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 59 , $selectedcertindex);
  }


 /**
  * Indicates whether the certificate is self-signed (root) or signed by an external CA.
  *
  * @access   public
  */
  public function getSelectedCertSelfSigned($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 60 , $selectedcertindex);
  }


 /**
  * Returns the certificate's serial number.
  *
  * @access   public
  */
  public function getSelectedCertSerialNumber($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 61 , $selectedcertindex);
  }


 /**
  * Indicates the algorithm that was used by the CA to sign this certificate.
  *
  * @access   public
  */
  public function getSelectedCertSigAlgorithm($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 62 , $selectedcertindex);
  }


 /**
  * The common name of the certificate holder, typically an individual's name, a URL, an e-mail address, or a company name.
  *
  * @access   public
  */
  public function getSelectedCertSubject($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 63 , $selectedcertindex);
  }


 /**
  * Contains a unique identifier (fingerprint) of the certificate's private key.
  *
  * @access   public
  */
  public function getSelectedCertSubjectKeyID($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 64 , $selectedcertindex);
  }


 /**
  * A collection of information, in the form of [OID, Value] pairs, uniquely identifying the certificate holder (subject).
  *
  * @access   public
  */
  public function getSelectedCertSubjectRDN($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 65 , $selectedcertindex);
  }


 /**
  * The time point at which the certificate becomes valid, in UTC.
  *
  * @access   public
  */
  public function getSelectedCertValidFrom($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 66 , $selectedcertindex);
  }


 /**
  * The time point at which the certificate expires, in UTC.
  *
  * @access   public
  */
  public function getSelectedCertValidTo($selectedcertindex) {
    return secureblackbox_certificatestorage_get($this->handle, 67 , $selectedcertindex);
  }


 /**
  * A unique identifier of this storage.
  *
  * @access   public
  */
  public function getStorageID() {
    return secureblackbox_certificatestorage_get($this->handle, 68 );
  }


 /**
  * Specifies the location of the currently opened storage.
  *
  * @access   public
  */
  public function getStorageLocation() {
    return secureblackbox_certificatestorage_get($this->handle, 69 );
  }




  public function getRuntimeLicense() {
    return secureblackbox_certificatestorage_get($this->handle, 2011 );
  }

  public function setRuntimeLicense($value) {
    $ret = secureblackbox_certificatestorage_set($this->handle, 2011, $value );
    if ($ret != 0) {
      throw new Exception($ret . ": " . secureblackbox_certificatestorage_get_last_error($this->handle));
    }
    return $ret;
  }
  
 /**
  * Information about errors during certificate loading or saving.
  *
  * @access   public
  * @param    array   Array of event parameters: errorcode, description    
  */
  public function fireError($param) {
    return $param;
  }

 /**
  * This event is fired when a decryption password is needed.
  *
  * @access   public
  * @param    array   Array of event parameters: neededfor, password, cancel    
  */
  public function firePasswordNeeded($param) {
    return $param;
  }


}

?>
