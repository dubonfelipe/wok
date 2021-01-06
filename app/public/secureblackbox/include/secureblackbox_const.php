<?php

/*
 * Product Constants
 */

// Invalid parameter value
define('SB_ERROR_INVALID_PARAMETER', 0x100001);
// Component is configured incorrectly
define('SB_ERROR_INVALID_SETUP', 0x100002);
// Operation cannot be executed in the current state
define('SB_ERROR_INVALID_STATE', 0x100003);
// Attempt to set an invalid value to a property
define('SB_ERROR_INVALID_VALUE', 0x100004);
// Certificate does not have its private key loaded
define('SB_ERROR_NO_PRIVATE_KEY', 0x100005);
// Cancelled by the user
define('SB_ERROR_CANCELLED_BY_USER', 0x100006);
// Unsupported level
define('SB_ERROR_ASIC_UNSUPPORTED_LEVEL', 0x01000001);
// Unsupported signature form
define('SB_ERROR_ASIC_UNSUPPORTED_SIGNATURE_FORM', 0x01000002);
// Unsupported signature type
define('SB_ERROR_ASIC_UNSUPPORTED_SIGNATURE_TYPE', 0x01000003);
// Unsupported extraction mode
define('SB_ERROR_ASIC_UNSUPPORTED_EXTRACTION_MODE', 0x01000004);
// Input file does not exist
define('SB_ERROR_ASIC_INPUTFILE_NOT_EXISTS', 0x01000005);
// Output file already exists
define('SB_ERROR_ASIC_OUTPUTFILE_ALREADY_EXISTS', 0x01000006);
// Unsupported file operation
define('SB_ERROR_FTP_UNSUPPORTED_FILEOPERATION', 0x01200001);
// Unsupported keep-alive policy
define('SB_ERROR_HTTP_UNSUPPORTED_KEEPALIVEPOLICY', 0x01300001);
// Request failed
define('SB_ERROR_KMIP_REQUEST_FAILED', 0x01400001);
// Input file does not exist
define('SB_ERROR_KMIP_INPUTFILE_NOT_EXISTS', 0x01400002);
// Unsupported key algorithm
define('SB_ERROR_KMIP_UNSUPPORTED_KEY_ALGORITHM', 0x01400003);
// Unsupported extraction mode
define('SB_ERROR_KMIP_INVALID_KEY', 0x01400004);
// Failed to assemble a mail message
define('SB_ERROR_MAIL_ASSEMBLY_FAILED', 0x01500001);
// Failed to parse a mail message
define('SB_ERROR_MAIL_PARSING_FAILED', 0x01500002);
// Failed to decrypt a message because there is no decryption certificate provided
define('SB_ERROR_MAIL_NO_DECRYPTION_CERTIFICATE', 0x01500003);
// Input file does not exist
define('SB_ERROR_OFFICE_INPUTFILE_NOT_EXISTS', 0x01700001);
// Unsupported document format
define('SB_ERROR_OFFICE_UNSUPPORTED_DOCUMENT_FORMAT', 0x01700002);
// Document cannot be signed
define('SB_ERROR_OFFICE_DOCUMENT_NOT_SIGNABLE', 0x01700003);
// Document is not signed
define('SB_ERROR_OFFICE_DOCUMENT_NOT_SIGNED', 0x01700004);
// Document is encrypted
define('SB_ERROR_OFFICE_DOCUMENT_ENCRYPTED', 0x01700005);
// Document cannot be encrypted
define('SB_ERROR_OFFICE_DOCUMENT_NOT_ENCRYPTABLE', 0x01700006);
// Document is not encrypted
define('SB_ERROR_OFFICE_DOCUMENT_NOT_ENCRYPTED', 0x01700007);
// Unknown encryption algorithm
define('SB_ERROR_OFFICE_DOCUMENT_UNKNOWN_ENCRYPTION', 0x01700008);
// Invalid password
define('SB_ERROR_OFFICE_INVALID_PASSWORD', 0x01700009);
// Signature not found
define('SB_ERROR_OFFICE_SIGNATURE_NOT_FOUND', 0x0170000A);
// User not found
define('SB_ERROR_OTP_USER_NOT_FOUND', 0x01800001);
// Input file does not exist
define('SB_ERROR_PDF_INPUTFILE_NOT_EXISTS', 0x01900001);
// Document is encrypted
define('SB_ERROR_PDF_ENCRYPTED', 0x01900002);
// Document not encrypted
define('SB_ERROR_PDF_NOT_ENCRYPTED', 0x01900003);
// Unknown certificate type
define('SB_ERROR_PDF_UNKNOWN_ENCRYPTION_TYPE', 0x01900004);
// Invalid password
define('SB_ERROR_PDF_INVALID_PASSWORD', 0x01900005);
// Decryption failed
define('SB_ERROR_PDF_DECRYPTION_FAILED', 0x01900006);
// Document is signed
define('SB_ERROR_PDF_SIGNED', 0x01900007);
// Document is not signed
define('SB_ERROR_PDF_NOT_SIGNED', 0x01900008);
// Inappropriate signature
define('SB_ERROR_PDF_INAPPROPRIATE_SIGNATURE', 0x01900009);
// Not supported
define('SB_ERROR_PDF_NOT_SUPPORTED', 0x0190000A);
// File does not exist
define('SB_ERROR_PGP_FILE_NOT_EXISTS', 0x01A00001);
// Invalid key
define('SB_ERROR_PGP_INVALID_KEY', 0x01A00002);
// No public key
define('SB_ERROR_PGP_NO_PUBLIC_KEY', 0x01A00003);
// No secret key
define('SB_ERROR_PGP_NO_SECRET_KEY', 0x01A00004);
// Not found
define('SB_ERROR_PGP_NOT_FOUND', 0x01A00005);
// Operation cannot be performed on a subkey
define('SB_ERROR_PGP_OPERATION_ON_SUBKEY', 0x01A00006);
// Invalid binging name
define('SB_ERROR_SAML_INVALID_BINDING_NAME', 0x01D00001);
// Invalid binding type
define('SB_ERROR_SAML_INVALID_BINDING_TYPE', 0x01D00002);
// Base directory not set
define('SB_ERROR_SAML_SP_BASE_DIRECTORY_NOT_SET', 0x01D00003);
// Unsupported file operation
define('SB_ERROR_SFTP_UNSUPPORTED_FILEOPERATION', 0x01E00001);
// Input file does not exist
define('SB_ERROR_SOAP_INPUTFILE_NOT_EXISTS', 0x02000001);
// Invalid key type
define('SB_ERROR_SOAP_INVALID_KEY_TYPE', 0x02000002);
// Signature not found
define('SB_ERROR_SOAP_SIGNATURE_NOT_FOUND', 0x02000003);
// Unsupported signature type
define('SB_ERROR_SOAP_UNSUPPORTED_SIGNATURE_TYPE', 0x02000004);
// Invalid key
define('SB_ERROR_SSH_INVALID_KEY', 0x02100001);
// Input file does not exist
define('SB_ERROR_XML_INPUTFILE_NOT_EXISTS', 0x02600001);
// Data file does not exist
define('SB_ERROR_XML_DATAFILE_NOT_EXISTS', 0x02600002);
// Unsupported signature method type
define('SB_ERROR_XML_UNSUPPORTED_SIGNATURE_METHOD_TYPE', 0x02600003);
// Unsupported has algorithm
define('SB_ERROR_XML_UNSUPPORTED_HASH_ALGORITHM', 0x02600004);
// Unsupported key type
define('SB_ERROR_XML_UNSUPPORTED_KEY_TYPE', 0x02600005);
// Invalid key type
define('SB_ERROR_XML_INVALID_KEY_TYPE', 0x02600006);
// Invalid encryption method
define('SB_ERROR_XML_INVALID_ENCRYPTION_METHOD', 0x02600007);
// Not found
define('SB_ERROR_XML_NOT_FOUND', 0x02600008);
// No element ID
define('SB_ERROR_XML_NO_ELEMENT_ID', 0x02600009);
// 
define('cerrUnknown', 0x00001);
// 
define('cerrNoMessageDigest', 0x00002);
// 
define('cerrNoContentType', 0x00004);
// 
define('cerrNoSigningCertificate', 0x00008);
// 
define('cerrNoSignaturePolicy', 0x00010);
// 
define('cerrNoSignatureTimestamp', 0x00020);
// 
define('cerrNoCertificateReferences', 0x00040);
// 
define('cerrNoRevocationReferences', 0x00080);
// 
define('cerrNoCertificateValues', 0x00100);
// 
define('cerrNoRevocationValues', 0x00200);
// 
define('cerrNoTimestampedValidationData', 0x00400);
// 
define('cerrNoArchivalTimestamp', 0x00800);
// 
define('cerrUnexpectedValidationElements', 0x01000);
// 
define('cerrMissingValidationElements', 0x02000);
// 
define('cerrInvalidATSHashIndex', 0x04000);
// 
define('cerrNoSigningTime', 0x08000);
// 
define('cerrMisplacedSigPolicyStore', 0x10000);
// 
define('cslUnknown', 0);
// 
define('cslBES', 1);
// 
define('cslEPES', 2);
// 
define('cslT', 3);
// 
define('cslC', 4);
// 
define('cslXType1', 5);
// 
define('cslXType2', 6);
// 
define('cslXLType1', 7);
// 
define('cslXLType2', 8);
// 
define('cslBaselineB', 9);
// 
define('cslBaselineT', 10);
// 
define('cslBaselineLT', 11);
// 
define('cslBaselineLTA', 12);
// 
define('cslExtendedBES', 13);
// 
define('cslExtendedEPES', 14);
// 
define('cslExtendedT', 15);
// 
define('cslExtendedC', 16);
// 
define('cslExtendedXType1', 17);
// 
define('cslExtendedXType2', 18);
// 
define('cslExtendedXLType1', 19);
// 
define('cslExtendedXLType2', 20);
// 
define('cslExtendedA', 21);
// 
define('cttUnknown', 0);
// 
define('cttGeneric', 1);
// 
define('cttESC', 2);
// 
define('cttCertsAndCRLs', 3);
// 
define('cttArchive', 4);
// 
define('cttArchive2', 5);
// 
define('cttArchive3', 6);
// 
define('cttContent', 7);
// 
define('cfmUnknown', 0);
// DER file format. Applicable to certificates, certificate requests, private keys. Encryption not supported
define('cfmDER', 1);
// PEM file format. Applicable to certificates, certificate requests, private keys. Encryption supported
define('cfmPEM', 2);
// PFX/PKCS#12 file format. Applicable to certificates. Encryption supported.
define('cfmPFX', 3);
// SPC file format. Applicable to certificates. Encryption not supported.
define('cfmSPC', 4);
// PVK file format. Applicable to private keys. Encryption not supported.
define('cfmPVK', 5);
// PKCS#8 file format. Applicable to private keys. Encryption supported.
define('cfmPKCS8', 6);
// NET file format. Applicable to private keys. Encryption not supported.
define('cfmNET', 7);
// 
define('ckuUnknown', 0x00000);
// 
define('ckuDigitalSignature', 0x00001);
// 
define('ckuNonRepudiation', 0x00002);
// 
define('ckuKeyEncipherment', 0x00004);
// 
define('ckuDataEncipherment', 0x00008);
// 
define('ckuKeyAgreement', 0x00010);
// 
define('ckuKeyCertSign', 0x00020);
// 
define('ckuCRLSign', 0x00040);
// 
define('ckuEncipherOnly', 0x00080);
// 
define('ckuDecipherOnly', 0x00100);
// 
define('ckuServerAuthentication', 0x00200);
// 
define('ckuClientAuthentication', 0x00400);
// 
define('ckuCodeSigning', 0x00800);
// 
define('ckuEmailProtection', 0x01000);
// 
define('ckuTimeStamping', 0x02000);
// 
define('ckuOCSPSigning', 0x04000);
// 
define('ckuSmartCardLogon', 0x08000);
// 
define('ckuKeyPurposeClientAuth', 0x10000);
// 
define('ckuKeyPurposeKDC', 0x20000);
// 
define('SB_CERT_ALGORITHM_ID_RSA_ENCRYPTION', "rsaEncryption");
// 
define('SB_CERT_ALGORITHM_MD2_RSA_ENCRYPTION', "md2withRSAEncryption");
// 
define('SB_CERT_ALGORITHM_MD5_RSA_ENCRYPTION', "md5withRSAEncryption");
// 
define('SB_CERT_ALGORITHM_SHA1_RSA_ENCRYPTION', "sha1withRSAEncryption");
// 
define('SB_CERT_ALGORITHM_ID_DSA', "id-dsa");
// 
define('SB_CERT_ALGORITHM_ID_DSA_SHA1', "id-dsa-with-sha1");
// 
define('SB_CERT_ALGORITHM_DH_PUBLIC', "dhpublicnumber");
// 
define('SB_CERT_ALGORITHM_SHA224_RSA_ENCRYPTION', "sha224WithRSAEncryption");
// 
define('SB_CERT_ALGORITHM_SHA256_RSA_ENCRYPTION', "sha256WithRSAEncryption");
// 
define('SB_CERT_ALGORITHM_SHA384_RSA_ENCRYPTION', "sha384WithRSAEncryption");
// 
define('SB_CERT_ALGORITHM_SHA512_RSA_ENCRYPTION', "sha512WithRSAEncryption");
// 
define('SB_CERT_ALGORITHM_ID_RSAPSS', "id-RSASSA-PSS");
// 
define('SB_CERT_ALGORITHM_ID_RSAOAEP', "id-RSAES-OAEP");
// 
define('SB_CERT_ALGORITHM_RSASIGNATURE_RIPEMD160', "ripemd160withRSA");
// 
define('SB_CERT_ALGORITHM_ID_ELGAMAL', "elGamal");
// 
define('SB_CERT_ALGORITHM_SHA1_ECDSA', "ecdsa-with-SHA1");
// 
define('SB_CERT_ALGORITHM_RECOMMENDED_ECDSA', "ecdsa-recommended");
// 
define('SB_CERT_ALGORITHM_SHA224_ECDSA', "ecdsa-with-SHA224");
// 
define('SB_CERT_ALGORITHM_SHA256_ECDSA', "ecdsa-with-SHA256");
// 
define('SB_CERT_ALGORITHM_SHA384_ECDSA', "ecdsa-with-SHA384");
// 
define('SB_CERT_ALGORITHM_SHA512_ECDSA', "ecdsa-with-SHA512");
// 
define('SB_CERT_ALGORITHM_EC', "id-ecPublicKey");
// 
define('SB_CERT_ALGORITHM_SPECIFIED_ECDSA', "ecdsa-specified");
// 
define('SB_CERT_ALGORITHM_GOST_R3410_1994', "id-GostR3410-94");
// 
define('SB_CERT_ALGORITHM_GOST_R3410_2001', "id-GostR3410-2001");
// 
define('SB_CERT_ALGORITHM_GOST_R3411_WITH_R3410_1994', "id-GostR3411-94-with-GostR3410-94");
// 
define('SB_CERT_ALGORITHM_GOST_R3411_WITH_R3410_2001', "id-GostR3411-94-with-GostR3410-2001");
// 
define('SB_CERT_ALGORITHM_SHA1_ECDSA_PLAIN', "ecdsa-plain-SHA1");
// 
define('SB_CERT_ALGORITHM_SHA224_ECDSA_PLAIN', "ecdsa-plain-SHA224");
// 
define('SB_CERT_ALGORITHM_SHA256_ECDSA_PLAIN', "ecdsa-plain-SHA256");
// 
define('SB_CERT_ALGORITHM_SHA384_ECDSA_PLAIN', "ecdsa-plain-SHA384");
// 
define('SB_CERT_ALGORITHM_SHA512_ECDSA_PLAIN', "ecdsa-plain-SHA512");
// 
define('SB_CERT_ALGORITHM_RIPEMD160_ECDSA_PLAIN', "ecdsa-plain-RIPEMD160");
// 
define('SB_CERT_ALGORITHM_WHIRLPOOL_RSA_ENCRYPTION', "whirlpoolWithRSAEncryption");
// 
define('SB_CERT_ALGORITHM_ID_DSA_SHA224', "id-dsa-with-sha224");
// 
define('SB_CERT_ALGORITHM_ID_DSA_SHA256', "id-dsa-with-sha256");
// 
define('SB_CERT_ALGORITHM_SHA3_224_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-sha3-224");
// 
define('SB_CERT_ALGORITHM_SHA3_256_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-sha3-256");
// 
define('SB_CERT_ALGORITHM_SHA3_384_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-sha3-384");
// 
define('SB_CERT_ALGORITHM_SHA3_512_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-sha3-512");
// 
define('SB_CERT_ALGORITHM_SHA3_224_ECDSA', "id-ecdsa-with-sha3-224");
// 
define('SB_CERT_ALGORITHM_SHA3_256_ECDSA', "id-ecdsa-with-sha3-256");
// 
define('SB_CERT_ALGORITHM_SHA3_384_ECDSA', "id-ecdsa-with-sha3-384");
// 
define('SB_CERT_ALGORITHM_SHA3_512_ECDSA', "id-ecdsa-with-sha3-512");
// 
define('SB_CERT_ALGORITHM_SHA3_224_ECDSA_PLAIN', "id-ecdsa-plain-with-sha3-224");
// 
define('SB_CERT_ALGORITHM_SHA3_256_ECDSA_PLAIN', "id-ecdsa-plain-with-sha3-256");
// 
define('SB_CERT_ALGORITHM_SHA3_384_ECDSA_PLAIN', "id-ecdsa-plain-with-sha3-384");
// 
define('SB_CERT_ALGORITHM_SHA3_512_ECDSA_PLAIN', "id-ecdsa-plain-with-sha3-512");
// 
define('SB_CERT_ALGORITHM_ID_DSA_SHA3_224', "id-dsa-with-sha3-224");
// 
define('SB_CERT_ALGORITHM_ID_DSA_SHA3_256', "id-dsa-with-sha3-256");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_128_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-blake2s128");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_160_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-blake2s160");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_224_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-blake2s224");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_256_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-blake2s256");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_160_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-blake2b160");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_256_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-blake2b256");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_384_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-blake2b384");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_512_RSA_ENCRYPTION', "id-rsassa-pkcs1-v1_5-with-blake2b512");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_128_ECDSA', "id-ecdsa-with-blake2s128");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_160_ECDSA', "id-ecdsa-with-blake2s160");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_224_ECDSA', "id-ecdsa-with-blake2s224");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_256_ECDSA', "id-ecdsa-with-blake2s256");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_160_ECDSA', "id-ecdsa-with-blake2b160");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_256_ECDSA', "id-ecdsa-with-blake2b256");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_384_ECDSA', "id-ecdsa-with-blake2b384");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_512_ECDSA', "id-ecdsa-with-blake2b512");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_128_ECDSA_PLAIN', "id-ecdsa-plain-with-blake2s128");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_160_ECDSA_PLAIN', "id-ecdsa-plain-with-blake2s160");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_224_ECDSA_PLAIN', "id-ecdsa-plain-with-blake2s224");
// 
define('SB_CERT_ALGORITHM_BLAKE2S_256_ECDSA_PLAIN', "id-ecdsa-plain-with-blake2s256");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_160_ECDSA_PLAIN', "id-ecdsa-plain-with-blake2b160");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_256_ECDSA_PLAIN', "id-ecdsa-plain-with-blake2b256");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_384_ECDSA_PLAIN', "id-ecdsa-plain-with-blake2b384");
// 
define('SB_CERT_ALGORITHM_BLAKE2B_512_ECDSA_PLAIN', "id-ecdsa-plain-with-blake2b512");
// 
define('SB_CERT_ALGORITHM_ID_DSA_BLAKE2S_224', "id-dsa-with-blake2s224");
// 
define('SB_CERT_ALGORITHM_ID_DSA_BLAKE2S_256', "id-dsa-with-blake2s256");
// 
define('SB_CERT_ALGORITHM_EDDSA_ED25519', "id-Ed25519");
// 
define('SB_CERT_ALGORITHM_EDDSA_ED448', "id-Ed448");
// 
define('SB_CERT_ALGORITHM_EDDSA_ED25519_PH', "id-Ed25519ph");
// 
define('SB_CERT_ALGORITHM_EDDSA_ED448_PH', "id-Ed448ph");
// 
define('SB_CERT_ALGORITHM_EDDSA', "id-EdDSA");
// 
define('SB_CERT_ALGORITHM_EDDSA_SIGNATURE', "id-EdDSA-sig");
// 
define('cslUnspecified', "unspecified");
// in-memory storage
define('cslMemory', "memory");
// file storage
define('cslFile', "file");
// OS-specific certificate storage (e.g. CryptoAPI)
define('cslSystem', "system");
// PKCS#11 compatible device
define('cslPKCS11', "pkcs11");
// 
define('cslKMIP', "kmip");
// 
define('cvtValid', 0);
// 
define('cvtValidButUntrusted', 1);
// 
define('cvtInvalid', 2);
// 
define('cvtCantBeEstablished', 3);
// 
define('cvrBadData', 0x0001);
// 
define('cvrRevoked', 0x0002);
// 
define('cvrNotYetValid', 0x0004);
// 
define('cvrExpired', 0x0008);
// 
define('cvrInvalidSignature', 0x0010);
// 
define('cvrUnknownCA', 0x0020);
// 
define('cvrCAUnauthorized', 0x0040);
// 
define('cvrCRLNotVerified', 0x0080);
// 
define('cvrOCSPNotVerified', 0x0100);
// 
define('cvrIdentityMismatch', 0x0200);
// 
define('cvrNoKeyUsage', 0x0400);
// 
define('cvrBlocked', 0x0800);
// 
define('cvrFailure', 0x1000);
// 
define('cvrChainLoop', 0x2000);
// 
define('cvrWeakAlgorithm', 0x4000);
// 
define('cvrUserEnforced', 0x8000);
// 
define('SB_EC_SECP112R1', "SECP112R1");
// 
define('SB_EC_SECP112R2', "SECP112R2");
// 
define('SB_EC_SECP128R1', "SECP128R1");
// 
define('SB_EC_SECP128R2', "SECP128R2");
// 
define('SB_EC_SECP160K1', "SECP160K1");
// 
define('SB_EC_SECP160R1', "SECP160R1");
// 
define('SB_EC_SECP160R2', "SECP160R2");
// 
define('SB_EC_SECP192K1', "SECP192K1");
// 
define('SB_EC_SECP192R1', "SECP192R1");
// 
define('SB_EC_SECP224K1', "SECP224K1");
// 
define('SB_EC_SECP224R1', "SECP224R1");
// 
define('SB_EC_SECP256K1', "SECP256K1");
// 
define('SB_EC_SECP256R1', "SECP256R1");
// 
define('SB_EC_SECP384R1', "SECP384R1");
// 
define('SB_EC_SECP521R1', "SECP521R1");
// 
define('SB_EC_SECT113R1', "SECT113R1");
// 
define('SB_EC_SECT113R2', "SECT113R2");
// 
define('SB_EC_SECT131R1', "SECT131R1");
// 
define('SB_EC_SECT131R2', "SECT131R2");
// 
define('SB_EC_SECT163K1', "SECT163K1");
// 
define('SB_EC_SECT163R1', "SECT163R1");
// 
define('SB_EC_SECT163R2', "SECT163R2");
// 
define('SB_EC_SECT193R1', "SECT193R1");
// 
define('SB_EC_SECT193R2', "SECT193R2");
// 
define('SB_EC_SECT233K1', "SECT233K1");
// 
define('SB_EC_SECT233R1', "SECT233R1");
// 
define('SB_EC_SECT239K1', "SECT239K1");
// 
define('SB_EC_SECT283K1', "SECT283K1");
// 
define('SB_EC_SECT283R1', "SECT283R1");
// 
define('SB_EC_SECT409K1', "SECT409K1");
// 
define('SB_EC_SECT409R1', "SECT409R1");
// 
define('SB_EC_SECT571K1', "SECT571K1");
// 
define('SB_EC_SECT571R1', "SECT571R1");
// 
define('SB_EC_PRIME192V1', "PRIME192V1");
// 
define('SB_EC_PRIME192V2', "PRIME192V2");
// 
define('SB_EC_PRIME192V3', "PRIME192V3");
// 
define('SB_EC_PRIME239V1', "PRIME239V1");
// 
define('SB_EC_PRIME239V2', "PRIME239V2");
// 
define('SB_EC_PRIME239V3', "PRIME239V3");
// 
define('SB_EC_PRIME256V1', "PRIME256V1");
// 
define('SB_EC_C2PNB163V1', "C2PNB163V1");
// 
define('SB_EC_C2PNB163V2', "C2PNB163V2");
// 
define('SB_EC_C2PNB163V3', "C2PNB163V3");
// 
define('SB_EC_C2PNB176W1', "C2PNB176W1");
// 
define('SB_EC_C2TNB191V1', "C2TNB191V1");
// 
define('SB_EC_C2TNB191V2', "C2TNB191V2");
// 
define('SB_EC_C2TNB191V3', "C2TNB191V3");
// 
define('SB_EC_C2ONB191V4', "C2ONB191V4");
// 
define('SB_EC_C2ONB191V5', "C2ONB191V5");
// 
define('SB_EC_C2PNB208W1', "C2PNB208W1");
// 
define('SB_EC_C2TNB239V1', "C2TNB239V1");
// 
define('SB_EC_C2TNB239V2', "C2TNB239V2");
// 
define('SB_EC_C2TNB239V3', "C2TNB239V3");
// 
define('SB_EC_C2ONB239V4', "C2ONB239V4");
// 
define('SB_EC_C2ONB239V5', "C2ONB239V5");
// 
define('SB_EC_C2PNB272W1', "C2PNB272W1");
// 
define('SB_EC_C2PNB304W1', "C2PNB304W1");
// 
define('SB_EC_C2TNB359V1', "C2TNB359V1");
// 
define('SB_EC_C2PNB368W1', "C2PNB368W1");
// 
define('SB_EC_C2TNB431R1', "C2TNB431R1");
// 
define('SB_EC_NISTP192', "NISTP192");
// 
define('SB_EC_NISTP224', "NISTP224");
// 
define('SB_EC_NISTP256', "NISTP256");
// 
define('SB_EC_NISTP384', "NISTP384");
// 
define('SB_EC_NISTP521', "NISTP521");
// 
define('SB_EC_NISTB163', "NISTB163");
// 
define('SB_EC_NISTB233', "NISTB233");
// 
define('SB_EC_NISTB283', "NISTB283");
// 
define('SB_EC_NISTB409', "NISTB409");
// 
define('SB_EC_NISTB571', "NISTB571");
// 
define('SB_EC_NISTK163', "NISTK163");
// 
define('SB_EC_NISTK233', "NISTK233");
// 
define('SB_EC_NISTK283', "NISTK283");
// 
define('SB_EC_NISTK409', "NISTK409");
// 
define('SB_EC_NISTK571', "NISTK571");
// 
define('SB_EC_GOSTCPTEST', "GOSTCPTEST");
// 
define('SB_EC_GOSTCPA', "GOSTCPA");
// 
define('SB_EC_GOSTCPB', "GOSTCPB");
// 
define('SB_EC_GOSTCPC', "GOSTCPC");
// 
define('SB_EC_GOSTCPXCHA', "GOSTCPXCHA");
// 
define('SB_EC_GOSTCPXCHB', "GOSTCPXCHB");
// 
define('SB_EC_BRAINPOOLP160R1', "BRAINPOOLP160R1");
// 
define('SB_EC_BRAINPOOLP160T1', "BRAINPOOLP160T1");
// 
define('SB_EC_BRAINPOOLP192R1', "BRAINPOOLP192R1");
// 
define('SB_EC_BRAINPOOLP192T1', "BRAINPOOLP192T1");
// 
define('SB_EC_BRAINPOOLP224R1', "BRAINPOOLP224R1");
// 
define('SB_EC_BRAINPOOLP224T1', "BRAINPOOLP224T1");
// 
define('SB_EC_BRAINPOOLP256R1', "BRAINPOOLP256R1");
// 
define('SB_EC_BRAINPOOLP256T1', "BRAINPOOLP256T1");
// 
define('SB_EC_BRAINPOOLP320R1', "BRAINPOOLP320R1");
// 
define('SB_EC_BRAINPOOLP320T1', "BRAINPOOLP320T1");
// 
define('SB_EC_BRAINPOOLP384R1', "BRAINPOOLP384R1");
// 
define('SB_EC_BRAINPOOLP384T1', "BRAINPOOLP384T1");
// 
define('SB_EC_BRAINPOOLP512R1', "BRAINPOOLP512R1");
// 
define('SB_EC_BRAINPOOLP512T1', "BRAINPOOLP512T1");
// 
define('SB_EC_CURVE25519', "CURVE25519");
// 
define('SB_EC_CURVE448', "CURVE448");
// 
define('ostOk', 1);
// 
define('ostNoSuchFile', 2);
// 
define('ostAccessDenied', 3);
// 
define('ostWriteProtect', 4);
// 
define('ostUnsupported', 6);
// 
define('ostInvalidParameter', 6);
// 
define('ostEOF', 7);
// 
define('fraAuto', 1);
// 
define('fraCustom', 2);
// 
define('fraAbort', 3);
// 
define('cffoDownloadFile', 0);
// 
define('cffoUploadFile', 1);
// 
define('cffoDeleteFile', 2);
// 
define('cffoMakeDir', 3);
// 
define('SB_HASH_ALGORITHM_SHA1', "SHA1");
// 
define('SB_HASH_ALGORITHM_SHA224', "SHA224");
// 
define('SB_HASH_ALGORITHM_SHA256', "SHA256");
// 
define('SB_HASH_ALGORITHM_SHA384', "SHA384");
// 
define('SB_HASH_ALGORITHM_SHA512', "SHA512");
// 
define('SB_HASH_ALGORITHM_MD2', "MD2");
// 
define('SB_HASH_ALGORITHM_MD4', "MD4");
// 
define('SB_HASH_ALGORITHM_MD5', "MD5");
// 
define('SB_HASH_ALGORITHM_RIPEMD160', "RIPEMD160");
// 
define('SB_HASH_ALGORITHM_CRC32', "CRC32");
// 
define('SB_HASH_ALGORITHM_SSL3', "SSL3");
// 
define('SB_HASH_ALGORITHM_GOST_R3411_1994', "GOST1994");
// 
define('SB_HASH_ALGORITHM_WHIRLPOOL', "WHIRLPOOL");
// 
define('SB_HASH_ALGORITHM_POLY1305', "POLY1305");
// 
define('SB_HASH_ALGORITHM_SHA3_224', "SHA3_224");
// 
define('SB_HASH_ALGORITHM_SHA3_256', "SHA3_256");
// 
define('SB_HASH_ALGORITHM_SHA3_384', "SHA3_384");
// 
define('SB_HASH_ALGORITHM_SHA3_512', "SHA3_512");
// 
define('SB_HASH_ALGORITHM_BLAKE2S_128', "BLAKE2S_128");
// 
define('SB_HASH_ALGORITHM_BLAKE2S_160', "BLAKE2S_160");
// 
define('SB_HASH_ALGORITHM_BLAKE2S_224', "BLAKE2S_224");
// 
define('SB_HASH_ALGORITHM_BLAKE2S_256', "BLAKE2S_256");
// 
define('SB_HASH_ALGORITHM_BLAKE2B_160', "BLAKE2B_160");
// 
define('SB_HASH_ALGORITHM_BLAKE2B_256', "BLAKE2B_256");
// 
define('SB_HASH_ALGORITHM_BLAKE2B_384', "BLAKE2B_384");
// 
define('SB_HASH_ALGORITHM_BLAKE2B_512', "BLAKE2B_512");
// 
define('SB_HASH_ALGORITHM_SHAKE_128', "SHAKE_128");
// 
define('SB_HASH_ALGORITHM_SHAKE_256', "SHAKE_256");
// 
define('SB_HASH_ALGORITHM_SHAKE_128_LEN', "SHAKE_128_LEN");
// 
define('SB_HASH_ALGORITHM_SHAKE_256_LEN', "SHAKE_256_LEN");
// 
define('otUnknown', 0x00);
// 
define('otCertificate', 0x01);
// 
define('otSymmetricKey', 0x02);
// 
define('otPublicKey', 0x04);
// 
define('otPrivateKey', 0x08);
// 
define('SB_MAC_ALGORITHM_HMAC_SHA1', "SHA1");
// 
define('SB_MAC_ALGORITHM_HMAC_SHA256', "SHA256");
// 
define('SB_MAC_ALGORITHM_HMAC_SHA512', "SHA512");
// 
define('SB_PGP_COMPRESSION_ALGORITHM_NONE', "Uncompressed");
// 
define('SB_PGP_COMPRESSION_ALGORITHM_ZIP', "ZIP");
// 
define('SB_PGP_COMPRESSION_ALGORITHM_ZLIB', "Zlib");
// 
define('SB_PGP_COMPRESSION_ALGORITHM_BZIP2', "Bzip2");
// 
define('SB_PGP_CURVE_P256', "P256");
// 
define('SB_PGP_CURVE_P384', "P384");
// 
define('SB_PGP_CURVE_P521', "P521");
// 
define('pkvStrictlyValid', 0);
// 
define('pkvValid', 1);
// 
define('pkvInvalid', 2);
// 
define('pkvFailure', 3);
// 
define('pkvUnknown', 4);
// 
define('SB_PGP_PUBLIC_KEY_ALGORITHM_RSA', "RSA");
// 
define('SB_PGP_PUBLIC_KEY_ALGORITHM_RSA_ENCRYPT', "RSA-encrypt");
// 
define('SB_PGP_PUBLIC_KEY_ALGORITHM_RSA_SIGN', "RSA-sign");
// 
define('SB_PGP_PUBLIC_KEY_ALGORITHM_DSA', "DSA");
// 
define('SB_PGP_PUBLIC_KEY_ALGORITHM_ECDSA', "ECDSA");
// 
define('SB_PGP_PUBLIC_KEY_ALGORITHM_ECDH', "ECDH");
// 
define('SB_PGP_PUBLIC_KEY_ALGORITHM_ELGAMAL_ENCRYPT', "Elgamal-encrypt");
// 
define('SB_PGP_PUBLIC_KEY_ALGORITHM_ELGAMAL', "Elgamal");
// A usual signature, compatible with PGP2.6.x
define('pstNormal', 0);
// A newer one-pass signature
define('pstOnePass', 1);
// A detached signature, i.e., a signature contained in a separate file from the data it covers
define('pstDetached', 2);
// A signature over clear text data
define('pstCleartext', 3);
// 
define('SB_PGP_SYMMETRIC_ALGORITHM_PLAINTEXT', "Plaintext");
// 
define('SB_PGP_SYMMETRIC_ALGORITHM_IDEA', "Idea");
// 
define('SB_PGP_SYMMETRIC_ALGORITHM_3DES', "3DES");
// 
define('SB_PGP_SYMMETRIC_ALGORITHM_CAST5', "CAST5");
// 
define('SB_PGP_SYMMETRIC_ALGORITHM_BLOWFISH', "Blowfish");
// 
define('SB_PGP_SYMMETRIC_ALGORITHM_AES128', "AES128");
// 
define('SB_PGP_SYMMETRIC_ALGORITHM_AES192', "AES192");
// 
define('SB_PGP_SYMMETRIC_ALGORITHM_AES256', "AES256");
// 
define('SB_PGP_SYMMETRIC_ALGORITHM_TWOFISH256', "Twofish256");
// 
define('pfiBadAlg', 0);
// 
define('pfiBadMessageCheck', 1);
// 
define('pfiBadRequest', 2);
// 
define('pfiBadTime', 3);
// 
define('pfiBadCertId', 4);
// 
define('pfiBadDataFormat', 5);
// 
define('pfiWrongAuthority', 6);
// 
define('pfiIncorrectData', 7);
// 
define('pfiMissingTimestamp', 8);
// 
define('pfiBadPOP', 9);
// 
define('psGranted', 0);
// 
define('psGrantedWithMods', 1);
// 
define('psRejection', 2);
// 
define('psWaiting', 3);
// 
define('psRevocationWarning', 4);
// 
define('psRevocationNotification', 5);
// 
define('psKeyUpdateWarning', 6);
// 
define('sqsUnknown', 0);
// 
define('sqsNone', 1);
// 
define('sqsGranted', 2);
// 
define('sqsWithdrawn', 3);
// 
define('sqsSetByNationalLaw', 4);
// 
define('sqsRecognizedAtNationalLevel', 5);
// 
define('sqsDeprecatedAtNationalLevel', 6);
// 
define('sqsUnderSupervision', 7);
// 
define('sqsSupervisionIncessation', 8);
// 
define('sqsSupervisionCeased', 9);
// 
define('sqsSupervisionRevoked', 10);
// 
define('sqsAccredited', 11);
// 
define('sqsAccreditionCeased', 12);
// 
define('sqsAccreditionRevoked', 13);
// 
define('rrUnknown', 0x0000);
// 
define('rrUnspecified', 0x0001);
// 
define('rrKeyCompromise', 0x0002);
// 
define('rrCACompromise', 0x0004);
// 
define('rrAffiliationChanged', 0x0008);
// 
define('rrSuperseded', 0x0010);
// 
define('rrCessationOfOperation', 0x0020);
// 
define('rrCertificateHold', 0x0040);
// 
define('rrRemoveFromCRL', 0x0080);
// 
define('rrPrivilegeWithdrawn', 0x0100);
// 
define('rrAACompromise', 0x0200);
// 
define('csfoDownloadFile', 0);
// 
define('csfoUploadFile', 1);
// 
define('csfoDeleteFile', 2);
// 
define('csfoMakeDir', 3);
// 
define('svtValid', 0);
// 
define('svtUnknown', 1);
// 
define('svtCorrupted', 2);
// 
define('svtSignerNotFound', 3);
// 
define('svtFailure', 4);
// 
define('atRhosts', 0x01);
// 
define('atPublicKey', 0x02);
// 
define('atPassword', 0x04);
// 
define('atHostbased', 0x08);
// 
define('atKeyboard', 0x10);
// 
define('atGssWithMic', 0x20);
// 
define('atGssKeyex', 0x40);
// 
define('atPublicKeyAgent', 0x80);
// 
define('cktPrivate', 0);
// 
define('cktPublic', 1);
// 
define('cssloExpectShutdownMessage', 0x001);
// 
define('cssloOpenSSLDTLSWorkaround', 0x002);
// 
define('cssloDisableKexLengthAlignment', 0x004);
// 
define('cssloForceUseOfClientCertHashAlg', 0x008);
// 
define('cssloAutoAddServerNameExtension', 0x010);
// 
define('cssloAcceptTrustedSRPPrimesOnly', 0x020);
// 
define('cssloDisableSignatureAlgorithmsExtension', 0x040);
// 
define('cssloIntolerateHigherProtocolVersions', 0x080);
// 
define('cssloStickToPrefCertHashAlg', 0x100);
// SSL 2
define('csbSSL2', 0x01);
// SSL 3
define('csbSSL3', 0x02);
// TLS 1.0
define('csbTLS1', 0x04);
// TLS 1.1
define('csbTLS11', 0x08);
// TLS 1.2
define('csbTLS12', 0x10);
// TLS 1.3
define('csbTLS13', 0x20);
// 
define('SB_SYMMETRIC_ALGORITHM_RC4', "RC4");
// 
define('SB_SYMMETRIC_ALGORITHM_DES', "DES");
// 
define('SB_SYMMETRIC_ALGORITHM_3DES', "3DES");
// 
define('SB_SYMMETRIC_ALGORITHM_RC2', "RC2");
// 
define('SB_SYMMETRIC_ALGORITHM_AES128', "AES128");
// 
define('SB_SYMMETRIC_ALGORITHM_AES192', "AES192");
// 
define('SB_SYMMETRIC_ALGORITHM_AES256', "AES256");
// 
define('SB_SYMMETRIC_ALGORITHM_IDENTITY', "Identity");
// 
define('SB_SYMMETRIC_ALGORITHM_BLOWFISH', "Blowfish");
// 
define('SB_SYMMETRIC_ALGORITHM_CAST128', "CAST128");
// 
define('SB_SYMMETRIC_ALGORITHM_IDEA', "IDEA");
// 
define('SB_SYMMETRIC_ALGORITHM_TWOFISH', "Twofish");
// 
define('SB_SYMMETRIC_ALGORITHM_TWOFISH128', "Twofish128");
// 
define('SB_SYMMETRIC_ALGORITHM_TWOFISH192', "Twofish192");
// 
define('SB_SYMMETRIC_ALGORITHM_TWOFISH256', "Twofish256");
// 
define('SB_SYMMETRIC_ALGORITHM_CAMELLIA', "Camellia");
// 
define('SB_SYMMETRIC_ALGORITHM_CAMELLIA128', "Camellia128");
// 
define('SB_SYMMETRIC_ALGORITHM_CAMELLIA192', "Camellia192");
// 
define('SB_SYMMETRIC_ALGORITHM_CAMELLIA256', "Camellia256");
// 
define('SB_SYMMETRIC_ALGORITHM_SERPENT', "Serpent");
// 
define('SB_SYMMETRIC_ALGORITHM_SERPENT128', "Serpent128");
// 
define('SB_SYMMETRIC_ALGORITHM_SERPENT192', "Serpent192");
// 
define('SB_SYMMETRIC_ALGORITHM_SERPENT256', "Serpent256");
// 
define('SB_SYMMETRIC_ALGORITHM_SEED', "SEED");
// 
define('SB_SYMMETRIC_ALGORITHM_RABBIT', "Rabbit");
// 
define('SB_SYMMETRIC_ALGORITHM_SYMMETRIC', "Generic");
// 
define('SB_SYMMETRIC_ALGORITHM_GOST_28147_1989', "GOST-28147-1989");
// 
define('SB_SYMMETRIC_ALGORITHM_CHACHA20', "ChaCha20");
// 
define('tstUnknown', 0);
// Supported by: AuthenticodeVerifier
define('tstLegacy', 1);
// Supported by: AuthenticodeVerifier
define('tstTrusted', 2);
// Supported by: CAdESVerifier
define('tstGeneric', 3);
// Supported by: CAdESVerifier
define('tstESC', 4);
// Supported by: CAdESVerifier
define('tstContent', 5);
// Supported by: CAdESVerifier
define('tstCertsAndCRLs', 6);
// Archive timestamp. Supported by: CAdESVerifier, OfficeVerifier, SOAPVerifier, XAdESVerifier
define('tstArchive', 7);
// Archive v2 timestamp. Supported by: CAdESVerifier
define('tstArchive2', 8);
// Archive v3 timestamp. Supported by: CAdESVerifier
define('tstArchive3', 9);
// Supported by: OfficeVerifier, SOAPVerifier, XAdESVerifier
define('tstIndividualDataObjects', 10);
// Supported by: OfficeVerifier, SOAPVerifier, XAdESVerifier
define('tstAllDataObjects', 11);
// Signature timestamp. Supported by: OfficeVerifier, SOAPVerifier, XAdESVerifier
define('tstSignature', 12);
// RefsOnly timestamp. Supported by: OfficeVerifier, SOAPVerifier, XAdESVerifier
define('tstRefsOnly', 13);
// SigAndRefs timestamp. Supported by: OfficeVerifier, SOAPVerifier, XAdESVerifier
define('tstSigAndRefs', 14);
// 
define('SB_XML_ENCRYPTION_ALGORITHM_RC4', "RC4");
// 
define('SB_XML_ENCRYPTION_ALGORITHM_DES', "DES");
// 
define('SB_XML_ENCRYPTION_ALGORITHM_3DES', "3DEST");
// 
define('SB_XML_ENCRYPTION_ALGORITHM_AES128', "AES128");
// 
define('SB_XML_ENCRYPTION_ALGORITHM_AES192', "AES192");
// 
define('SB_XML_ENCRYPTION_ALGORITHM_AES256', "AES256");
// 
define('SB_XML_ENCRYPTION_ALGORITHM_CAMELLIA128', "Camellia128");
// 
define('SB_XML_ENCRYPTION_ALGORITHM_CAMELLIA192', "Camellia192");
// 
define('SB_XML_ENCRYPTION_ALGORITHM_CAMELLIA256', "Camellia256");
// 
define('SB_XML_ENCRYPTION_ALGORITHM_SEED', "SEED");
// 
define('xsvValid', 0);
// 
define('xsvUnknown', 1);
// 
define('xsvCorrupted', 2);
// 
define('xsvSignerNotFound', 3);
// 
define('xsvFailure', 4);
// 
define('xsvReferenceCorrupted', 5);


/*
 * ASiCSigner Properties
 */

define('ASICSIGNER_BLOCKEDCERTCOUNT_PID', 1);
define('ASICSIGNER_BLOCKEDCERTBYTES_PID', 2);
define('ASICSIGNER_BLOCKEDCERTHANDLE_PID', 3);
define('ASICSIGNER_CHAINVALIDATIONDETAILS_PID', 4);
define('ASICSIGNER_CHAINVALIDATIONRESULT_PID', 5);
define('ASICSIGNER_CLAIMEDSIGNINGTIME_PID', 6);
define('ASICSIGNER_EXTENDED_PID', 7);
define('ASICSIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 8);
define('ASICSIGNER_EXTERNALCRYPTODATA_PID', 9);
define('ASICSIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 10);
define('ASICSIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 11);
define('ASICSIGNER_EXTERNALCRYPTOKEYID_PID', 12);
define('ASICSIGNER_EXTERNALCRYPTOKEYSECRET_PID', 13);
define('ASICSIGNER_EXTERNALCRYPTOMETHOD_PID', 14);
define('ASICSIGNER_EXTERNALCRYPTOMODE_PID', 15);
define('ASICSIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 16);
define('ASICSIGNER_HASHALGORITHM_PID', 17);
define('ASICSIGNER_IGNORECHAINVALIDATIONERRORS_PID', 18);
define('ASICSIGNER_INPUTFILE_PID', 19);
define('ASICSIGNER_KNOWNCERTCOUNT_PID', 20);
define('ASICSIGNER_KNOWNCERTBYTES_PID', 21);
define('ASICSIGNER_KNOWNCERTHANDLE_PID', 22);
define('ASICSIGNER_KNOWNCRLCOUNT_PID', 23);
define('ASICSIGNER_KNOWNCRLBYTES_PID', 24);
define('ASICSIGNER_KNOWNCRLHANDLE_PID', 25);
define('ASICSIGNER_KNOWNOCSPCOUNT_PID', 26);
define('ASICSIGNER_KNOWNOCSPBYTES_PID', 27);
define('ASICSIGNER_KNOWNOCSPHANDLE_PID', 28);
define('ASICSIGNER_LEVEL_PID', 29);
define('ASICSIGNER_OFFLINEMODE_PID', 30);
define('ASICSIGNER_OUTPUTFILE_PID', 31);
define('ASICSIGNER_POLICYHASH_PID', 32);
define('ASICSIGNER_POLICYHASHALGORITHM_PID', 33);
define('ASICSIGNER_POLICYID_PID', 34);
define('ASICSIGNER_POLICYURI_PID', 35);
define('ASICSIGNER_PROXYADDRESS_PID', 36);
define('ASICSIGNER_PROXYAUTHENTICATION_PID', 37);
define('ASICSIGNER_PROXYPASSWORD_PID', 38);
define('ASICSIGNER_PROXYPORT_PID', 39);
define('ASICSIGNER_PROXYPROXYTYPE_PID', 40);
define('ASICSIGNER_PROXYREQUESTHEADERS_PID', 41);
define('ASICSIGNER_PROXYRESPONSEBODY_PID', 42);
define('ASICSIGNER_PROXYRESPONSEHEADERS_PID', 43);
define('ASICSIGNER_PROXYUSEIPV6_PID', 44);
define('ASICSIGNER_PROXYUSEPROXY_PID', 45);
define('ASICSIGNER_PROXYUSERNAME_PID', 46);
define('ASICSIGNER_REVOCATIONCHECK_PID', 47);
define('ASICSIGNER_SIGNATUREINDEX_PID', 48);
define('ASICSIGNER_SIGNATURETYPE_PID', 49);
define('ASICSIGNER_SIGNINGCERTBYTES_PID', 50);
define('ASICSIGNER_SIGNINGCERTHANDLE_PID', 51);
define('ASICSIGNER_SIGNINGCHAINCOUNT_PID', 52);
define('ASICSIGNER_SIGNINGCHAINBYTES_PID', 53);
define('ASICSIGNER_SIGNINGCHAINHANDLE_PID', 54);
define('ASICSIGNER_SOCKETDNSMODE_PID', 55);
define('ASICSIGNER_SOCKETDNSPORT_PID', 56);
define('ASICSIGNER_SOCKETDNSQUERYTIMEOUT_PID', 57);
define('ASICSIGNER_SOCKETDNSSERVERS_PID', 58);
define('ASICSIGNER_SOCKETDNSTOTALTIMEOUT_PID', 59);
define('ASICSIGNER_SOCKETINCOMINGSPEEDLIMIT_PID', 60);
define('ASICSIGNER_SOCKETLOCALADDRESS_PID', 61);
define('ASICSIGNER_SOCKETLOCALPORT_PID', 62);
define('ASICSIGNER_SOCKETOUTGOINGSPEEDLIMIT_PID', 63);
define('ASICSIGNER_SOCKETTIMEOUT_PID', 64);
define('ASICSIGNER_SOCKETUSEIPV6_PID', 65);
define('ASICSIGNER_SOURCEFILES_PID', 66);
define('ASICSIGNER_TIMESTAMPSERVER_PID', 67);
define('ASICSIGNER_TLSAUTOVALIDATECERTIFICATES_PID', 68);
define('ASICSIGNER_TLSBASECONFIGURATION_PID', 69);
define('ASICSIGNER_TLSCIPHERSUITES_PID', 70);
define('ASICSIGNER_TLSECCURVES_PID', 71);
define('ASICSIGNER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 72);
define('ASICSIGNER_TLSPRESHAREDIDENTITY_PID', 73);
define('ASICSIGNER_TLSPRESHAREDKEY_PID', 74);
define('ASICSIGNER_TLSPRESHAREDKEYCIPHERSUITE_PID', 75);
define('ASICSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 76);
define('ASICSIGNER_TLSREVOCATIONCHECK_PID', 77);
define('ASICSIGNER_TLSSSLOPTIONS_PID', 78);
define('ASICSIGNER_TLSTLSMODE_PID', 79);
define('ASICSIGNER_TLSUSEEXTENDEDMASTERSECRET_PID', 80);
define('ASICSIGNER_TLSUSESESSIONRESUMPTION_PID', 81);
define('ASICSIGNER_TLSVERSIONS_PID', 82);
define('ASICSIGNER_TRUSTEDCERTCOUNT_PID', 83);
define('ASICSIGNER_TRUSTEDCERTBYTES_PID', 84);
define('ASICSIGNER_TRUSTEDCERTHANDLE_PID', 85);
define('ASICSIGNER_VALIDATIONLOG_PID', 86);


/*
 * ASiCSigner Enums
 */

define('ASICSIGNER_CHAINVALIDATIONRESULT_VALID', 0);
define('ASICSIGNER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('ASICSIGNER_CHAINVALIDATIONRESULT_INVALID', 2);
define('ASICSIGNER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('ASICSIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('ASICSIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('ASICSIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('ASICSIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('ASICSIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('ASICSIGNER_LEVEL_UNKNOWN', 0);
define('ASICSIGNER_LEVEL_BES', 1);
define('ASICSIGNER_LEVEL_EPES', 2);
define('ASICSIGNER_LEVEL_T', 3);
define('ASICSIGNER_LEVEL_C', 4);
define('ASICSIGNER_LEVEL_XTYPE_1', 5);
define('ASICSIGNER_LEVEL_XTYPE_2', 6);
define('ASICSIGNER_LEVEL_XLTYPE_1', 7);
define('ASICSIGNER_LEVEL_XLTYPE_2', 8);
define('ASICSIGNER_LEVEL_BASELINE_B', 9);
define('ASICSIGNER_LEVEL_BASELINE_T', 10);
define('ASICSIGNER_LEVEL_BASELINE_LT', 11);
define('ASICSIGNER_LEVEL_BASELINE_LTA', 12);
define('ASICSIGNER_LEVEL_EXTENDED_BES', 13);
define('ASICSIGNER_LEVEL_EXTENDED_EPES', 14);
define('ASICSIGNER_LEVEL_EXTENDED_T', 15);
define('ASICSIGNER_LEVEL_EXTENDED_C', 16);
define('ASICSIGNER_LEVEL_EXTENDED_XTYPE_1', 17);
define('ASICSIGNER_LEVEL_EXTENDED_XTYPE_2', 18);
define('ASICSIGNER_LEVEL_EXTENDED_XLTYPE_1', 19);
define('ASICSIGNER_LEVEL_EXTENDED_XLTYPE_2', 20);
define('ASICSIGNER_LEVEL_EXTENDED_A', 21);
define('ASICSIGNER_LEVEL_A', 22);

define('ASICSIGNER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('ASICSIGNER_PROXYAUTHENTICATION_BASIC', 1);
define('ASICSIGNER_PROXYAUTHENTICATION_DIGEST', 2);
define('ASICSIGNER_PROXYAUTHENTICATION_NTLM', 3);

define('ASICSIGNER_PROXYPROXYTYPE_NONE', 0);
define('ASICSIGNER_PROXYPROXYTYPE_SOCKS_4', 1);
define('ASICSIGNER_PROXYPROXYTYPE_SOCKS_5', 2);
define('ASICSIGNER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('ASICSIGNER_PROXYPROXYTYPE_HTTP', 4);

define('ASICSIGNER_REVOCATIONCHECK_NONE', 0);
define('ASICSIGNER_REVOCATIONCHECK_AUTO', 1);
define('ASICSIGNER_REVOCATIONCHECK_ALL_CRL', 2);
define('ASICSIGNER_REVOCATIONCHECK_ALL_OCSP', 3);
define('ASICSIGNER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('ASICSIGNER_REVOCATIONCHECK_ANY_CRL', 5);
define('ASICSIGNER_REVOCATIONCHECK_ANY_OCSP', 6);
define('ASICSIGNER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('ASICSIGNER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('ASICSIGNER_SIGNATURETYPE_UNKNOWN', 0);
define('ASICSIGNER_SIGNATURETYPE_CAD_ES', 1);
define('ASICSIGNER_SIGNATURETYPE_XAD_ES', 2);
define('ASICSIGNER_SIGNATURETYPE_TIMESTAMP', 3);

define('ASICSIGNER_SOCKETDNSMODE_AUTO', 0);
define('ASICSIGNER_SOCKETDNSMODE_PLATFORM', 1);
define('ASICSIGNER_SOCKETDNSMODE_OWN', 2);
define('ASICSIGNER_SOCKETDNSMODE_OWN_SECURE', 3);

define('ASICSIGNER_TLSBASECONFIGURATION_DEFAULT', 0);
define('ASICSIGNER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('ASICSIGNER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('ASICSIGNER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('ASICSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('ASICSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('ASICSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('ASICSIGNER_TLSREVOCATIONCHECK_NONE', 0);
define('ASICSIGNER_TLSREVOCATIONCHECK_AUTO', 1);
define('ASICSIGNER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('ASICSIGNER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('ASICSIGNER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('ASICSIGNER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('ASICSIGNER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('ASICSIGNER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('ASICSIGNER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('ASICSIGNER_TLSTLSMODE_DEFAULT', 0);
define('ASICSIGNER_TLSTLSMODE_NO_TLS', 1);
define('ASICSIGNER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('ASICSIGNER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * ASiCSigner Methods
 */

define('ASICSIGNER_CONFIG_MID', 2);
define('ASICSIGNER_EXTRACTASYNCDATA_MID', 3);
define('ASICSIGNER_SIGN_MID', 4);
define('ASICSIGNER_SIGNASYNCBEGIN_MID', 5);
define('ASICSIGNER_SIGNASYNCEND_MID', 6);
define('ASICSIGNER_SIGNEXTERNAL_MID', 7);
define('ASICSIGNER_TIMESTAMP_MID', 8);
define('ASICSIGNER_UPGRADE_MID', 9);


/*
 * ASiCSigner Events
 */
  
define('ASICSIGNER_ERROR_EID', 1);
define('ASICSIGNER_EXTERNALSIGN_EID', 2);
define('ASICSIGNER_STORECERTIFICATE_EID', 3);
define('ASICSIGNER_STORECRL_EID', 4);
define('ASICSIGNER_STOREOCSPRESPONSE_EID', 5);

/*
 * ASiCVerifier Properties
 */

define('ASICVERIFIER_ALLSIGNATURESVALID_PID', 1);
define('ASICVERIFIER_BLOCKEDCERTCOUNT_PID', 2);
define('ASICVERIFIER_BLOCKEDCERTBYTES_PID', 3);
define('ASICVERIFIER_BLOCKEDCERTHANDLE_PID', 4);
define('ASICVERIFIER_CERTCOUNT_PID', 5);
define('ASICVERIFIER_CERTBYTES_PID', 6);
define('ASICVERIFIER_CERTCA_PID', 7);
define('ASICVERIFIER_CERTCAKEYID_PID', 8);
define('ASICVERIFIER_CERTCRLDISTRIBUTIONPOINTS_PID', 9);
define('ASICVERIFIER_CERTCURVE_PID', 10);
define('ASICVERIFIER_CERTFINGERPRINT_PID', 11);
define('ASICVERIFIER_CERTFRIENDLYNAME_PID', 12);
define('ASICVERIFIER_CERTHANDLE_PID', 13);
define('ASICVERIFIER_CERTHASHALGORITHM_PID', 14);
define('ASICVERIFIER_CERTISSUER_PID', 15);
define('ASICVERIFIER_CERTISSUERRDN_PID', 16);
define('ASICVERIFIER_CERTKEYALGORITHM_PID', 17);
define('ASICVERIFIER_CERTKEYBITS_PID', 18);
define('ASICVERIFIER_CERTKEYFINGERPRINT_PID', 19);
define('ASICVERIFIER_CERTKEYUSAGE_PID', 20);
define('ASICVERIFIER_CERTKEYVALID_PID', 21);
define('ASICVERIFIER_CERTOCSPLOCATIONS_PID', 22);
define('ASICVERIFIER_CERTPOLICYIDS_PID', 23);
define('ASICVERIFIER_CERTPUBLICKEYBYTES_PID', 24);
define('ASICVERIFIER_CERTSELFSIGNED_PID', 25);
define('ASICVERIFIER_CERTSERIALNUMBER_PID', 26);
define('ASICVERIFIER_CERTSIGALGORITHM_PID', 27);
define('ASICVERIFIER_CERTSUBJECT_PID', 28);
define('ASICVERIFIER_CERTSUBJECTKEYID_PID', 29);
define('ASICVERIFIER_CERTSUBJECTRDN_PID', 30);
define('ASICVERIFIER_CERTVALIDFROM_PID', 31);
define('ASICVERIFIER_CERTVALIDTO_PID', 32);
define('ASICVERIFIER_CHAINVALIDATIONDETAILS_PID', 33);
define('ASICVERIFIER_CHAINVALIDATIONRESULT_PID', 34);
define('ASICVERIFIER_CLAIMEDSIGNINGTIME_PID', 35);
define('ASICVERIFIER_CONTENTTYPE_PID', 36);
define('ASICVERIFIER_CRLCOUNT_PID', 37);
define('ASICVERIFIER_CRLBYTES_PID', 38);
define('ASICVERIFIER_CRLHANDLE_PID', 39);
define('ASICVERIFIER_CRLISSUER_PID', 40);
define('ASICVERIFIER_CRLISSUERRDN_PID', 41);
define('ASICVERIFIER_CRLLOCATION_PID', 42);
define('ASICVERIFIER_CRLNEXTUPDATE_PID', 43);
define('ASICVERIFIER_CRLTHISUPDATE_PID', 44);
define('ASICVERIFIER_EXTRACTIONMODE_PID', 45);
define('ASICVERIFIER_HASHALGORITHM_PID', 46);
define('ASICVERIFIER_IGNORECHAINVALIDATIONERRORS_PID', 47);
define('ASICVERIFIER_INPUTFILE_PID', 48);
define('ASICVERIFIER_KNOWNCERTCOUNT_PID', 49);
define('ASICVERIFIER_KNOWNCERTBYTES_PID', 50);
define('ASICVERIFIER_KNOWNCERTHANDLE_PID', 51);
define('ASICVERIFIER_KNOWNCRLCOUNT_PID', 52);
define('ASICVERIFIER_KNOWNCRLBYTES_PID', 53);
define('ASICVERIFIER_KNOWNCRLHANDLE_PID', 54);
define('ASICVERIFIER_KNOWNOCSPCOUNT_PID', 55);
define('ASICVERIFIER_KNOWNOCSPBYTES_PID', 56);
define('ASICVERIFIER_KNOWNOCSPHANDLE_PID', 57);
define('ASICVERIFIER_LEVEL_PID', 58);
define('ASICVERIFIER_OCSPCOUNT_PID', 59);
define('ASICVERIFIER_OCSPBYTES_PID', 60);
define('ASICVERIFIER_OCSPHANDLE_PID', 61);
define('ASICVERIFIER_OCSPISSUER_PID', 62);
define('ASICVERIFIER_OCSPISSUERRDN_PID', 63);
define('ASICVERIFIER_OCSPLOCATION_PID', 64);
define('ASICVERIFIER_OCSPPRODUCEDAT_PID', 65);
define('ASICVERIFIER_OFFLINEMODE_PID', 66);
define('ASICVERIFIER_OUTPUTPATH_PID', 67);
define('ASICVERIFIER_POLICYHASH_PID', 68);
define('ASICVERIFIER_POLICYHASHALGORITHM_PID', 69);
define('ASICVERIFIER_POLICYID_PID', 70);
define('ASICVERIFIER_POLICYURI_PID', 71);
define('ASICVERIFIER_QUALIFIED_PID', 72);
define('ASICVERIFIER_REVOCATIONCHECK_PID', 73);
define('ASICVERIFIER_SIGCHAINVALIDATIONDETAILS_PID', 74);
define('ASICVERIFIER_SIGCHAINVALIDATIONRESULT_PID', 75);
define('ASICVERIFIER_SIGCONTENTS_PID', 76);
define('ASICVERIFIER_SIGFILENAME_PID', 77);
define('ASICVERIFIER_SIGHANDLE_PID', 78);
define('ASICVERIFIER_SIGISSUERRDN_PID', 79);
define('ASICVERIFIER_SIGQUALIFIED_PID', 80);
define('ASICVERIFIER_SIGSERIALNUMBER_PID', 81);
define('ASICVERIFIER_SIGSIGNATURETYPE_PID', 82);
define('ASICVERIFIER_SIGSIGNATUREVALIDATIONRESULT_PID', 83);
define('ASICVERIFIER_SIGSIGNEDFILES_PID', 84);
define('ASICVERIFIER_SIGSUBJECTKEYID_PID', 85);
define('ASICVERIFIER_SIGTIME_PID', 86);
define('ASICVERIFIER_SIGVALIDATIONLOG_PID', 87);
define('ASICVERIFIER_SIGNATURECOUNT_PID', 88);
define('ASICVERIFIER_SIGNATURECHAINVALIDATIONDETAILS_PID', 89);
define('ASICVERIFIER_SIGNATURECHAINVALIDATIONRESULT_PID', 90);
define('ASICVERIFIER_SIGNATURECONTENTS_PID', 91);
define('ASICVERIFIER_SIGNATUREFILENAME_PID', 92);
define('ASICVERIFIER_SIGNATUREHANDLE_PID', 93);
define('ASICVERIFIER_SIGNATUREISSUERRDN_PID', 94);
define('ASICVERIFIER_SIGNATUREQUALIFIED_PID', 95);
define('ASICVERIFIER_SIGNATURESERIALNUMBER_PID', 96);
define('ASICVERIFIER_SIGNATURESIGNATURETYPE_PID', 97);
define('ASICVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_PID', 98);
define('ASICVERIFIER_SIGNATURESIGNEDFILES_PID', 99);
define('ASICVERIFIER_SIGNATURESUBJECTKEYID_PID', 100);
define('ASICVERIFIER_SIGNATURETIME_PID', 101);
define('ASICVERIFIER_SIGNATUREVALIDATIONLOG_PID', 102);
define('ASICVERIFIER_SIGNATUREVALIDATIONRESULT_PID', 103);
define('ASICVERIFIER_SIGNINGCERTBYTES_PID', 104);
define('ASICVERIFIER_SIGNINGCERTCA_PID', 105);
define('ASICVERIFIER_SIGNINGCERTCAKEYID_PID', 106);
define('ASICVERIFIER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 107);
define('ASICVERIFIER_SIGNINGCERTCURVE_PID', 108);
define('ASICVERIFIER_SIGNINGCERTFINGERPRINT_PID', 109);
define('ASICVERIFIER_SIGNINGCERTFRIENDLYNAME_PID', 110);
define('ASICVERIFIER_SIGNINGCERTHANDLE_PID', 111);
define('ASICVERIFIER_SIGNINGCERTHASHALGORITHM_PID', 112);
define('ASICVERIFIER_SIGNINGCERTISSUER_PID', 113);
define('ASICVERIFIER_SIGNINGCERTISSUERRDN_PID', 114);
define('ASICVERIFIER_SIGNINGCERTKEYALGORITHM_PID', 115);
define('ASICVERIFIER_SIGNINGCERTKEYBITS_PID', 116);
define('ASICVERIFIER_SIGNINGCERTKEYFINGERPRINT_PID', 117);
define('ASICVERIFIER_SIGNINGCERTKEYUSAGE_PID', 118);
define('ASICVERIFIER_SIGNINGCERTKEYVALID_PID', 119);
define('ASICVERIFIER_SIGNINGCERTOCSPLOCATIONS_PID', 120);
define('ASICVERIFIER_SIGNINGCERTPOLICYIDS_PID', 121);
define('ASICVERIFIER_SIGNINGCERTPUBLICKEYBYTES_PID', 122);
define('ASICVERIFIER_SIGNINGCERTSELFSIGNED_PID', 123);
define('ASICVERIFIER_SIGNINGCERTSERIALNUMBER_PID', 124);
define('ASICVERIFIER_SIGNINGCERTSIGALGORITHM_PID', 125);
define('ASICVERIFIER_SIGNINGCERTSUBJECT_PID', 126);
define('ASICVERIFIER_SIGNINGCERTSUBJECTKEYID_PID', 127);
define('ASICVERIFIER_SIGNINGCERTSUBJECTRDN_PID', 128);
define('ASICVERIFIER_SIGNINGCERTVALIDFROM_PID', 129);
define('ASICVERIFIER_SIGNINGCERTVALIDTO_PID', 130);
define('ASICVERIFIER_SOCKETDNSMODE_PID', 131);
define('ASICVERIFIER_SOCKETDNSPORT_PID', 132);
define('ASICVERIFIER_SOCKETDNSQUERYTIMEOUT_PID', 133);
define('ASICVERIFIER_SOCKETDNSSERVERS_PID', 134);
define('ASICVERIFIER_SOCKETDNSTOTALTIMEOUT_PID', 135);
define('ASICVERIFIER_SOCKETINCOMINGSPEEDLIMIT_PID', 136);
define('ASICVERIFIER_SOCKETLOCALADDRESS_PID', 137);
define('ASICVERIFIER_SOCKETLOCALPORT_PID', 138);
define('ASICVERIFIER_SOCKETOUTGOINGSPEEDLIMIT_PID', 139);
define('ASICVERIFIER_SOCKETTIMEOUT_PID', 140);
define('ASICVERIFIER_SOCKETUSEIPV6_PID', 141);
define('ASICVERIFIER_TIMESTAMPACCURACY_PID', 142);
define('ASICVERIFIER_TIMESTAMPBYTES_PID', 143);
define('ASICVERIFIER_TIMESTAMPCHAINVALIDATIONDETAILS_PID', 144);
define('ASICVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_PID', 145);
define('ASICVERIFIER_TIMESTAMPHASHALGORITHM_PID', 146);
define('ASICVERIFIER_TIMESTAMPSERIALNUMBER_PID', 147);
define('ASICVERIFIER_TIMESTAMPTIME_PID', 148);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_PID', 149);
define('ASICVERIFIER_TIMESTAMPTSANAME_PID', 150);
define('ASICVERIFIER_TIMESTAMPVALIDATIONLOG_PID', 151);
define('ASICVERIFIER_TIMESTAMPVALIDATIONRESULT_PID', 152);
define('ASICVERIFIER_TIMESTAMPED_PID', 153);
define('ASICVERIFIER_TLSAUTOVALIDATECERTIFICATES_PID', 154);
define('ASICVERIFIER_TLSBASECONFIGURATION_PID', 155);
define('ASICVERIFIER_TLSCIPHERSUITES_PID', 156);
define('ASICVERIFIER_TLSECCURVES_PID', 157);
define('ASICVERIFIER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 158);
define('ASICVERIFIER_TLSPRESHAREDIDENTITY_PID', 159);
define('ASICVERIFIER_TLSPRESHAREDKEY_PID', 160);
define('ASICVERIFIER_TLSPRESHAREDKEYCIPHERSUITE_PID', 161);
define('ASICVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 162);
define('ASICVERIFIER_TLSREVOCATIONCHECK_PID', 163);
define('ASICVERIFIER_TLSSSLOPTIONS_PID', 164);
define('ASICVERIFIER_TLSTLSMODE_PID', 165);
define('ASICVERIFIER_TLSUSEEXTENDEDMASTERSECRET_PID', 166);
define('ASICVERIFIER_TLSUSESESSIONRESUMPTION_PID', 167);
define('ASICVERIFIER_TLSVERSIONS_PID', 168);
define('ASICVERIFIER_TRUSTEDCERTCOUNT_PID', 169);
define('ASICVERIFIER_TRUSTEDCERTBYTES_PID', 170);
define('ASICVERIFIER_TRUSTEDCERTHANDLE_PID', 171);
define('ASICVERIFIER_TSACERTBYTES_PID', 172);
define('ASICVERIFIER_TSACERTCA_PID', 173);
define('ASICVERIFIER_TSACERTCAKEYID_PID', 174);
define('ASICVERIFIER_TSACERTCRLDISTRIBUTIONPOINTS_PID', 175);
define('ASICVERIFIER_TSACERTCURVE_PID', 176);
define('ASICVERIFIER_TSACERTFINGERPRINT_PID', 177);
define('ASICVERIFIER_TSACERTFRIENDLYNAME_PID', 178);
define('ASICVERIFIER_TSACERTHANDLE_PID', 179);
define('ASICVERIFIER_TSACERTHASHALGORITHM_PID', 180);
define('ASICVERIFIER_TSACERTISSUER_PID', 181);
define('ASICVERIFIER_TSACERTISSUERRDN_PID', 182);
define('ASICVERIFIER_TSACERTKEYALGORITHM_PID', 183);
define('ASICVERIFIER_TSACERTKEYBITS_PID', 184);
define('ASICVERIFIER_TSACERTKEYFINGERPRINT_PID', 185);
define('ASICVERIFIER_TSACERTKEYUSAGE_PID', 186);
define('ASICVERIFIER_TSACERTKEYVALID_PID', 187);
define('ASICVERIFIER_TSACERTOCSPLOCATIONS_PID', 188);
define('ASICVERIFIER_TSACERTPOLICYIDS_PID', 189);
define('ASICVERIFIER_TSACERTPUBLICKEYBYTES_PID', 190);
define('ASICVERIFIER_TSACERTSELFSIGNED_PID', 191);
define('ASICVERIFIER_TSACERTSERIALNUMBER_PID', 192);
define('ASICVERIFIER_TSACERTSIGALGORITHM_PID', 193);
define('ASICVERIFIER_TSACERTSUBJECT_PID', 194);
define('ASICVERIFIER_TSACERTSUBJECTKEYID_PID', 195);
define('ASICVERIFIER_TSACERTSUBJECTRDN_PID', 196);
define('ASICVERIFIER_TSACERTVALIDFROM_PID', 197);
define('ASICVERIFIER_TSACERTVALIDTO_PID', 198);
define('ASICVERIFIER_VALIDATEDSIGNINGTIME_PID', 199);
define('ASICVERIFIER_VALIDATIONLOG_PID', 200);
define('ASICVERIFIER_VALIDATIONMOMENT_PID', 201);


/*
 * ASiCVerifier Enums
 */

define('ASICVERIFIER_CHAINVALIDATIONRESULT_VALID', 0);
define('ASICVERIFIER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('ASICVERIFIER_CHAINVALIDATIONRESULT_INVALID', 2);
define('ASICVERIFIER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('ASICVERIFIER_EXTRACTIONMODE_NONE', 0);
define('ASICVERIFIER_EXTRACTIONMODE_ALL', 1);
define('ASICVERIFIER_EXTRACTIONMODE_SIGNED', 2);
define('ASICVERIFIER_EXTRACTIONMODE_SIGNED_AND_VALID', 3);

define('ASICVERIFIER_LEVEL_UNKNOWN', 0);
define('ASICVERIFIER_LEVEL_BES', 1);
define('ASICVERIFIER_LEVEL_EPES', 2);
define('ASICVERIFIER_LEVEL_T', 3);
define('ASICVERIFIER_LEVEL_C', 4);
define('ASICVERIFIER_LEVEL_XTYPE_1', 5);
define('ASICVERIFIER_LEVEL_XTYPE_2', 6);
define('ASICVERIFIER_LEVEL_XLTYPE_1', 7);
define('ASICVERIFIER_LEVEL_XLTYPE_2', 8);
define('ASICVERIFIER_LEVEL_BASELINE_B', 9);
define('ASICVERIFIER_LEVEL_BASELINE_T', 10);
define('ASICVERIFIER_LEVEL_BASELINE_LT', 11);
define('ASICVERIFIER_LEVEL_BASELINE_LTA', 12);
define('ASICVERIFIER_LEVEL_EXTENDED_BES', 13);
define('ASICVERIFIER_LEVEL_EXTENDED_EPES', 14);
define('ASICVERIFIER_LEVEL_EXTENDED_T', 15);
define('ASICVERIFIER_LEVEL_EXTENDED_C', 16);
define('ASICVERIFIER_LEVEL_EXTENDED_XTYPE_1', 17);
define('ASICVERIFIER_LEVEL_EXTENDED_XTYPE_2', 18);
define('ASICVERIFIER_LEVEL_EXTENDED_XLTYPE_1', 19);
define('ASICVERIFIER_LEVEL_EXTENDED_XLTYPE_2', 20);
define('ASICVERIFIER_LEVEL_EXTENDED_A', 21);
define('ASICVERIFIER_LEVEL_A', 22);

define('ASICVERIFIER_QUALIFIED_UNKNOWN', 0);
define('ASICVERIFIER_QUALIFIED_NONE', 1);
define('ASICVERIFIER_QUALIFIED_GRANTED', 2);
define('ASICVERIFIER_QUALIFIED_WITHDRAWN', 3);
define('ASICVERIFIER_QUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('ASICVERIFIER_QUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('ASICVERIFIER_QUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('ASICVERIFIER_QUALIFIED_UNDER_SUPERVISION', 7);
define('ASICVERIFIER_QUALIFIED_SUPERVISION_INCESSATION', 8);
define('ASICVERIFIER_QUALIFIED_SUPERVISION_CEASED', 9);
define('ASICVERIFIER_QUALIFIED_SUPERVISION_REVOKED', 10);
define('ASICVERIFIER_QUALIFIED_ACCREDITED', 11);
define('ASICVERIFIER_QUALIFIED_ACCREDITION_CEASED', 12);
define('ASICVERIFIER_QUALIFIED_ACCREDITION_REVOKED', 13);

define('ASICVERIFIER_REVOCATIONCHECK_NONE', 0);
define('ASICVERIFIER_REVOCATIONCHECK_AUTO', 1);
define('ASICVERIFIER_REVOCATIONCHECK_ALL_CRL', 2);
define('ASICVERIFIER_REVOCATIONCHECK_ALL_OCSP', 3);
define('ASICVERIFIER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('ASICVERIFIER_REVOCATIONCHECK_ANY_CRL', 5);
define('ASICVERIFIER_REVOCATIONCHECK_ANY_OCSP', 6);
define('ASICVERIFIER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('ASICVERIFIER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('ASICVERIFIER_SIGCHAINVALIDATIONRESULT_VALID', 0);
define('ASICVERIFIER_SIGCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('ASICVERIFIER_SIGCHAINVALIDATIONRESULT_INVALID', 2);
define('ASICVERIFIER_SIGCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('ASICVERIFIER_SIGQUALIFIED_UNKNOWN', 0);
define('ASICVERIFIER_SIGQUALIFIED_NONE', 1);
define('ASICVERIFIER_SIGQUALIFIED_GRANTED', 2);
define('ASICVERIFIER_SIGQUALIFIED_WITHDRAWN', 3);
define('ASICVERIFIER_SIGQUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('ASICVERIFIER_SIGQUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('ASICVERIFIER_SIGQUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('ASICVERIFIER_SIGQUALIFIED_UNDER_SUPERVISION', 7);
define('ASICVERIFIER_SIGQUALIFIED_SUPERVISION_INCESSATION', 8);
define('ASICVERIFIER_SIGQUALIFIED_SUPERVISION_CEASED', 9);
define('ASICVERIFIER_SIGQUALIFIED_SUPERVISION_REVOKED', 10);
define('ASICVERIFIER_SIGQUALIFIED_ACCREDITED', 11);
define('ASICVERIFIER_SIGQUALIFIED_ACCREDITION_CEASED', 12);
define('ASICVERIFIER_SIGQUALIFIED_ACCREDITION_REVOKED', 13);

define('ASICVERIFIER_SIGSIGNATURETYPE_UNKNOWN', 0);
define('ASICVERIFIER_SIGSIGNATURETYPE_CAD_ES', 1);
define('ASICVERIFIER_SIGSIGNATURETYPE_XAD_ES', 2);
define('ASICVERIFIER_SIGSIGNATURETYPE_TIMESTAMP', 3);

define('ASICVERIFIER_SIGSIGNATUREVALIDATIONRESULT_VALID', 0);
define('ASICVERIFIER_SIGSIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('ASICVERIFIER_SIGSIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('ASICVERIFIER_SIGSIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('ASICVERIFIER_SIGSIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('ASICVERIFIER_SIGNATURECHAINVALIDATIONRESULT_VALID', 0);
define('ASICVERIFIER_SIGNATURECHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('ASICVERIFIER_SIGNATURECHAINVALIDATIONRESULT_INVALID', 2);
define('ASICVERIFIER_SIGNATURECHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('ASICVERIFIER_SIGNATUREQUALIFIED_UNKNOWN', 0);
define('ASICVERIFIER_SIGNATUREQUALIFIED_NONE', 1);
define('ASICVERIFIER_SIGNATUREQUALIFIED_GRANTED', 2);
define('ASICVERIFIER_SIGNATUREQUALIFIED_WITHDRAWN', 3);
define('ASICVERIFIER_SIGNATUREQUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('ASICVERIFIER_SIGNATUREQUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('ASICVERIFIER_SIGNATUREQUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('ASICVERIFIER_SIGNATUREQUALIFIED_UNDER_SUPERVISION', 7);
define('ASICVERIFIER_SIGNATUREQUALIFIED_SUPERVISION_INCESSATION', 8);
define('ASICVERIFIER_SIGNATUREQUALIFIED_SUPERVISION_CEASED', 9);
define('ASICVERIFIER_SIGNATUREQUALIFIED_SUPERVISION_REVOKED', 10);
define('ASICVERIFIER_SIGNATUREQUALIFIED_ACCREDITED', 11);
define('ASICVERIFIER_SIGNATUREQUALIFIED_ACCREDITION_CEASED', 12);
define('ASICVERIFIER_SIGNATUREQUALIFIED_ACCREDITION_REVOKED', 13);

define('ASICVERIFIER_SIGNATURESIGNATURETYPE_UNKNOWN', 0);
define('ASICVERIFIER_SIGNATURESIGNATURETYPE_CAD_ES', 1);
define('ASICVERIFIER_SIGNATURESIGNATURETYPE_XAD_ES', 2);
define('ASICVERIFIER_SIGNATURESIGNATURETYPE_TIMESTAMP', 3);

define('ASICVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_VALID', 0);
define('ASICVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('ASICVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('ASICVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('ASICVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('ASICVERIFIER_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('ASICVERIFIER_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('ASICVERIFIER_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('ASICVERIFIER_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('ASICVERIFIER_SIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('ASICVERIFIER_SOCKETDNSMODE_AUTO', 0);
define('ASICVERIFIER_SOCKETDNSMODE_PLATFORM', 1);
define('ASICVERIFIER_SOCKETDNSMODE_OWN', 2);
define('ASICVERIFIER_SOCKETDNSMODE_OWN_SECURE', 3);

define('ASICVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID', 0);
define('ASICVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('ASICVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_INVALID', 2);
define('ASICVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_UNKNOWN', 0);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_LEGACY', 1);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_TRUSTED', 2);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_GENERIC', 3);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_ESC', 4);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_CONTENT', 5);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_CERTS_AND_CRLS', 6);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE', 7);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_2', 8);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_3', 9);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_INDIVIDUAL_DATA_OBJECTS', 10);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_ALL_DATA_OBJECTS', 11);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIGNATURE', 12);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_REFS_ONLY', 13);
define('ASICVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIG_AND_REFS', 14);

define('ASICVERIFIER_TIMESTAMPVALIDATIONRESULT_VALID', 0);
define('ASICVERIFIER_TIMESTAMPVALIDATIONRESULT_UNKNOWN', 1);
define('ASICVERIFIER_TIMESTAMPVALIDATIONRESULT_CORRUPTED', 2);
define('ASICVERIFIER_TIMESTAMPVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('ASICVERIFIER_TIMESTAMPVALIDATIONRESULT_FAILURE', 4);

define('ASICVERIFIER_TLSBASECONFIGURATION_DEFAULT', 0);
define('ASICVERIFIER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('ASICVERIFIER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('ASICVERIFIER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('ASICVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('ASICVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('ASICVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('ASICVERIFIER_TLSREVOCATIONCHECK_NONE', 0);
define('ASICVERIFIER_TLSREVOCATIONCHECK_AUTO', 1);
define('ASICVERIFIER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('ASICVERIFIER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('ASICVERIFIER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('ASICVERIFIER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('ASICVERIFIER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('ASICVERIFIER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('ASICVERIFIER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('ASICVERIFIER_TLSTLSMODE_DEFAULT', 0);
define('ASICVERIFIER_TLSTLSMODE_NO_TLS', 1);
define('ASICVERIFIER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('ASICVERIFIER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * ASiCVerifier Methods
 */

define('ASICVERIFIER_CONFIG_MID', 2);
define('ASICVERIFIER_VERIFY_MID', 3);


/*
 * ASiCVerifier Events
 */
  
define('ASICVERIFIER_CHAINVALIDATED_EID', 1);
define('ASICVERIFIER_ERROR_EID', 2);
define('ASICVERIFIER_FILEEXTRACTIONSTART_EID', 3);
define('ASICVERIFIER_RETRIEVECERTIFICATE_EID', 4);
define('ASICVERIFIER_RETRIEVECRL_EID', 5);
define('ASICVERIFIER_RETRIEVEOCSPRESPONSE_EID', 6);
define('ASICVERIFIER_SIGNATUREFOUND_EID', 7);
define('ASICVERIFIER_SIGNATUREVALIDATED_EID', 8);
define('ASICVERIFIER_STORECERTIFICATE_EID', 9);
define('ASICVERIFIER_STORECRL_EID', 10);
define('ASICVERIFIER_STOREOCSPRESPONSE_EID', 11);
define('ASICVERIFIER_TIMESTAMPFOUND_EID', 12);
define('ASICVERIFIER_TIMESTAMPVALIDATED_EID', 13);

/*
 * AuthenticodeSigner Properties
 */

define('AUTHENTICODESIGNER_BLOCKEDCERTCOUNT_PID', 1);
define('AUTHENTICODESIGNER_BLOCKEDCERTBYTES_PID', 2);
define('AUTHENTICODESIGNER_BLOCKEDCERTHANDLE_PID', 3);
define('AUTHENTICODESIGNER_CLAIMEDSIGNINGTIME_PID', 4);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 5);
define('AUTHENTICODESIGNER_EXTERNALCRYPTODATA_PID', 6);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 7);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 8);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOKEYID_PID', 9);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOKEYSECRET_PID', 10);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOMETHOD_PID', 11);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOMODE_PID', 12);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 13);
define('AUTHENTICODESIGNER_HASHALGORITHM_PID', 14);
define('AUTHENTICODESIGNER_IGNORECHAINVALIDATIONERRORS_PID', 15);
define('AUTHENTICODESIGNER_INPUTFILE_PID', 16);
define('AUTHENTICODESIGNER_KNOWNCERTCOUNT_PID', 17);
define('AUTHENTICODESIGNER_KNOWNCERTBYTES_PID', 18);
define('AUTHENTICODESIGNER_KNOWNCERTHANDLE_PID', 19);
define('AUTHENTICODESIGNER_KNOWNCRLCOUNT_PID', 20);
define('AUTHENTICODESIGNER_KNOWNCRLBYTES_PID', 21);
define('AUTHENTICODESIGNER_KNOWNCRLHANDLE_PID', 22);
define('AUTHENTICODESIGNER_KNOWNOCSPCOUNT_PID', 23);
define('AUTHENTICODESIGNER_KNOWNOCSPBYTES_PID', 24);
define('AUTHENTICODESIGNER_KNOWNOCSPHANDLE_PID', 25);
define('AUTHENTICODESIGNER_OFFLINEMODE_PID', 26);
define('AUTHENTICODESIGNER_OUTPUTFILE_PID', 27);
define('AUTHENTICODESIGNER_PROXYADDRESS_PID', 28);
define('AUTHENTICODESIGNER_PROXYAUTHENTICATION_PID', 29);
define('AUTHENTICODESIGNER_PROXYPASSWORD_PID', 30);
define('AUTHENTICODESIGNER_PROXYPORT_PID', 31);
define('AUTHENTICODESIGNER_PROXYPROXYTYPE_PID', 32);
define('AUTHENTICODESIGNER_PROXYREQUESTHEADERS_PID', 33);
define('AUTHENTICODESIGNER_PROXYRESPONSEBODY_PID', 34);
define('AUTHENTICODESIGNER_PROXYRESPONSEHEADERS_PID', 35);
define('AUTHENTICODESIGNER_PROXYUSEIPV6_PID', 36);
define('AUTHENTICODESIGNER_PROXYUSEPROXY_PID', 37);
define('AUTHENTICODESIGNER_PROXYUSERNAME_PID', 38);
define('AUTHENTICODESIGNER_REMOVEEXISTINGSIGNATURES_PID', 39);
define('AUTHENTICODESIGNER_REVOCATIONCHECK_PID', 40);
define('AUTHENTICODESIGNER_SIGNATUREDESCRIPTION_PID', 41);
define('AUTHENTICODESIGNER_SIGNATUREURL_PID', 42);
define('AUTHENTICODESIGNER_SIGNINGCERTBYTES_PID', 43);
define('AUTHENTICODESIGNER_SIGNINGCERTHANDLE_PID', 44);
define('AUTHENTICODESIGNER_SIGNINGCHAINCOUNT_PID', 45);
define('AUTHENTICODESIGNER_SIGNINGCHAINBYTES_PID', 46);
define('AUTHENTICODESIGNER_SIGNINGCHAINHANDLE_PID', 47);
define('AUTHENTICODESIGNER_SOCKETDNSMODE_PID', 48);
define('AUTHENTICODESIGNER_SOCKETDNSPORT_PID', 49);
define('AUTHENTICODESIGNER_SOCKETDNSQUERYTIMEOUT_PID', 50);
define('AUTHENTICODESIGNER_SOCKETDNSSERVERS_PID', 51);
define('AUTHENTICODESIGNER_SOCKETDNSTOTALTIMEOUT_PID', 52);
define('AUTHENTICODESIGNER_SOCKETINCOMINGSPEEDLIMIT_PID', 53);
define('AUTHENTICODESIGNER_SOCKETLOCALADDRESS_PID', 54);
define('AUTHENTICODESIGNER_SOCKETLOCALPORT_PID', 55);
define('AUTHENTICODESIGNER_SOCKETOUTGOINGSPEEDLIMIT_PID', 56);
define('AUTHENTICODESIGNER_SOCKETTIMEOUT_PID', 57);
define('AUTHENTICODESIGNER_SOCKETUSEIPV6_PID', 58);
define('AUTHENTICODESIGNER_STATEMENTTYPE_PID', 59);
define('AUTHENTICODESIGNER_TIMESTAMPSERVER_PID', 60);
define('AUTHENTICODESIGNER_TIMESTAMPTYPE_PID', 61);
define('AUTHENTICODESIGNER_TLSAUTOVALIDATECERTIFICATES_PID', 62);
define('AUTHENTICODESIGNER_TLSBASECONFIGURATION_PID', 63);
define('AUTHENTICODESIGNER_TLSCIPHERSUITES_PID', 64);
define('AUTHENTICODESIGNER_TLSECCURVES_PID', 65);
define('AUTHENTICODESIGNER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 66);
define('AUTHENTICODESIGNER_TLSPRESHAREDIDENTITY_PID', 67);
define('AUTHENTICODESIGNER_TLSPRESHAREDKEY_PID', 68);
define('AUTHENTICODESIGNER_TLSPRESHAREDKEYCIPHERSUITE_PID', 69);
define('AUTHENTICODESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 70);
define('AUTHENTICODESIGNER_TLSREVOCATIONCHECK_PID', 71);
define('AUTHENTICODESIGNER_TLSSSLOPTIONS_PID', 72);
define('AUTHENTICODESIGNER_TLSTLSMODE_PID', 73);
define('AUTHENTICODESIGNER_TLSUSEEXTENDEDMASTERSECRET_PID', 74);
define('AUTHENTICODESIGNER_TLSUSESESSIONRESUMPTION_PID', 75);
define('AUTHENTICODESIGNER_TLSVERSIONS_PID', 76);
define('AUTHENTICODESIGNER_TRUSTEDCERTCOUNT_PID', 77);
define('AUTHENTICODESIGNER_TRUSTEDCERTBYTES_PID', 78);
define('AUTHENTICODESIGNER_TRUSTEDCERTHANDLE_PID', 79);
define('AUTHENTICODESIGNER_VALIDATIONLOG_PID', 80);


/*
 * AuthenticodeSigner Enums
 */

define('AUTHENTICODESIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('AUTHENTICODESIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('AUTHENTICODESIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('AUTHENTICODESIGNER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('AUTHENTICODESIGNER_PROXYAUTHENTICATION_BASIC', 1);
define('AUTHENTICODESIGNER_PROXYAUTHENTICATION_DIGEST', 2);
define('AUTHENTICODESIGNER_PROXYAUTHENTICATION_NTLM', 3);

define('AUTHENTICODESIGNER_PROXYPROXYTYPE_NONE', 0);
define('AUTHENTICODESIGNER_PROXYPROXYTYPE_SOCKS_4', 1);
define('AUTHENTICODESIGNER_PROXYPROXYTYPE_SOCKS_5', 2);
define('AUTHENTICODESIGNER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('AUTHENTICODESIGNER_PROXYPROXYTYPE_HTTP', 4);

define('AUTHENTICODESIGNER_REVOCATIONCHECK_NONE', 0);
define('AUTHENTICODESIGNER_REVOCATIONCHECK_AUTO', 1);
define('AUTHENTICODESIGNER_REVOCATIONCHECK_ALL_CRL', 2);
define('AUTHENTICODESIGNER_REVOCATIONCHECK_ALL_OCSP', 3);
define('AUTHENTICODESIGNER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('AUTHENTICODESIGNER_REVOCATIONCHECK_ANY_CRL', 5);
define('AUTHENTICODESIGNER_REVOCATIONCHECK_ANY_OCSP', 6);
define('AUTHENTICODESIGNER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('AUTHENTICODESIGNER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('AUTHENTICODESIGNER_SOCKETDNSMODE_AUTO', 0);
define('AUTHENTICODESIGNER_SOCKETDNSMODE_PLATFORM', 1);
define('AUTHENTICODESIGNER_SOCKETDNSMODE_OWN', 2);
define('AUTHENTICODESIGNER_SOCKETDNSMODE_OWN_SECURE', 3);

define('AUTHENTICODESIGNER_STATEMENTTYPE_UNKNOWN', 0);
define('AUTHENTICODESIGNER_STATEMENTTYPE_INDIVIDUAL', 1);
define('AUTHENTICODESIGNER_STATEMENTTYPE_COMMERCIAL', 2);

define('AUTHENTICODESIGNER_TIMESTAMPTYPE_UNKNOWN', 0);
define('AUTHENTICODESIGNER_TIMESTAMPTYPE_LEGACY', 1);
define('AUTHENTICODESIGNER_TIMESTAMPTYPE_TRUSTED', 2);

define('AUTHENTICODESIGNER_TLSBASECONFIGURATION_DEFAULT', 0);
define('AUTHENTICODESIGNER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('AUTHENTICODESIGNER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('AUTHENTICODESIGNER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('AUTHENTICODESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('AUTHENTICODESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('AUTHENTICODESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('AUTHENTICODESIGNER_TLSREVOCATIONCHECK_NONE', 0);
define('AUTHENTICODESIGNER_TLSREVOCATIONCHECK_AUTO', 1);
define('AUTHENTICODESIGNER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('AUTHENTICODESIGNER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('AUTHENTICODESIGNER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('AUTHENTICODESIGNER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('AUTHENTICODESIGNER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('AUTHENTICODESIGNER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('AUTHENTICODESIGNER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('AUTHENTICODESIGNER_TLSTLSMODE_DEFAULT', 0);
define('AUTHENTICODESIGNER_TLSTLSMODE_NO_TLS', 1);
define('AUTHENTICODESIGNER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('AUTHENTICODESIGNER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * AuthenticodeSigner Methods
 */

define('AUTHENTICODESIGNER_CONFIG_MID', 2);
define('AUTHENTICODESIGNER_EXTRACTASYNCDATA_MID', 3);
define('AUTHENTICODESIGNER_SIGN_MID', 4);
define('AUTHENTICODESIGNER_SIGNASYNCBEGIN_MID', 5);
define('AUTHENTICODESIGNER_SIGNASYNCEND_MID', 6);
define('AUTHENTICODESIGNER_SIGNEXTERNAL_MID', 7);


/*
 * AuthenticodeSigner Events
 */
  
define('AUTHENTICODESIGNER_ERROR_EID', 1);
define('AUTHENTICODESIGNER_EXTERNALSIGN_EID', 2);
define('AUTHENTICODESIGNER_START_EID', 3);

/*
 * AuthenticodeVerifier Properties
 */

define('AUTHENTICODEVERIFIER_ACTUALCHECKSUM_PID', 1);
define('AUTHENTICODEVERIFIER_ALLSIGNATURESVALID_PID', 2);
define('AUTHENTICODEVERIFIER_BLOCKEDCERTCOUNT_PID', 3);
define('AUTHENTICODEVERIFIER_BLOCKEDCERTBYTES_PID', 4);
define('AUTHENTICODEVERIFIER_BLOCKEDCERTHANDLE_PID', 5);
define('AUTHENTICODEVERIFIER_CERTCOUNT_PID', 6);
define('AUTHENTICODEVERIFIER_CERTBYTES_PID', 7);
define('AUTHENTICODEVERIFIER_CERTCA_PID', 8);
define('AUTHENTICODEVERIFIER_CERTCAKEYID_PID', 9);
define('AUTHENTICODEVERIFIER_CERTCRLDISTRIBUTIONPOINTS_PID', 10);
define('AUTHENTICODEVERIFIER_CERTCURVE_PID', 11);
define('AUTHENTICODEVERIFIER_CERTFINGERPRINT_PID', 12);
define('AUTHENTICODEVERIFIER_CERTFRIENDLYNAME_PID', 13);
define('AUTHENTICODEVERIFIER_CERTHANDLE_PID', 14);
define('AUTHENTICODEVERIFIER_CERTHASHALGORITHM_PID', 15);
define('AUTHENTICODEVERIFIER_CERTISSUER_PID', 16);
define('AUTHENTICODEVERIFIER_CERTISSUERRDN_PID', 17);
define('AUTHENTICODEVERIFIER_CERTKEYALGORITHM_PID', 18);
define('AUTHENTICODEVERIFIER_CERTKEYBITS_PID', 19);
define('AUTHENTICODEVERIFIER_CERTKEYFINGERPRINT_PID', 20);
define('AUTHENTICODEVERIFIER_CERTKEYUSAGE_PID', 21);
define('AUTHENTICODEVERIFIER_CERTKEYVALID_PID', 22);
define('AUTHENTICODEVERIFIER_CERTOCSPLOCATIONS_PID', 23);
define('AUTHENTICODEVERIFIER_CERTPOLICYIDS_PID', 24);
define('AUTHENTICODEVERIFIER_CERTPUBLICKEYBYTES_PID', 25);
define('AUTHENTICODEVERIFIER_CERTSELFSIGNED_PID', 26);
define('AUTHENTICODEVERIFIER_CERTSERIALNUMBER_PID', 27);
define('AUTHENTICODEVERIFIER_CERTSIGALGORITHM_PID', 28);
define('AUTHENTICODEVERIFIER_CERTSUBJECT_PID', 29);
define('AUTHENTICODEVERIFIER_CERTSUBJECTKEYID_PID', 30);
define('AUTHENTICODEVERIFIER_CERTSUBJECTRDN_PID', 31);
define('AUTHENTICODEVERIFIER_CERTVALIDFROM_PID', 32);
define('AUTHENTICODEVERIFIER_CERTVALIDTO_PID', 33);
define('AUTHENTICODEVERIFIER_CHAINVALIDATIONDETAILS_PID', 34);
define('AUTHENTICODEVERIFIER_CHAINVALIDATIONRESULT_PID', 35);
define('AUTHENTICODEVERIFIER_CLAIMEDSIGNINGTIME_PID', 36);
define('AUTHENTICODEVERIFIER_CRLCOUNT_PID', 37);
define('AUTHENTICODEVERIFIER_CRLBYTES_PID', 38);
define('AUTHENTICODEVERIFIER_CRLHANDLE_PID', 39);
define('AUTHENTICODEVERIFIER_CRLISSUER_PID', 40);
define('AUTHENTICODEVERIFIER_CRLISSUERRDN_PID', 41);
define('AUTHENTICODEVERIFIER_CRLLOCATION_PID', 42);
define('AUTHENTICODEVERIFIER_CRLNEXTUPDATE_PID', 43);
define('AUTHENTICODEVERIFIER_CRLTHISUPDATE_PID', 44);
define('AUTHENTICODEVERIFIER_IGNORECHAINVALIDATIONERRORS_PID', 45);
define('AUTHENTICODEVERIFIER_INPUTFILE_PID', 46);
define('AUTHENTICODEVERIFIER_KNOWNCERTCOUNT_PID', 47);
define('AUTHENTICODEVERIFIER_KNOWNCERTBYTES_PID', 48);
define('AUTHENTICODEVERIFIER_KNOWNCERTHANDLE_PID', 49);
define('AUTHENTICODEVERIFIER_KNOWNCRLCOUNT_PID', 50);
define('AUTHENTICODEVERIFIER_KNOWNCRLBYTES_PID', 51);
define('AUTHENTICODEVERIFIER_KNOWNCRLHANDLE_PID', 52);
define('AUTHENTICODEVERIFIER_KNOWNOCSPCOUNT_PID', 53);
define('AUTHENTICODEVERIFIER_KNOWNOCSPBYTES_PID', 54);
define('AUTHENTICODEVERIFIER_KNOWNOCSPHANDLE_PID', 55);
define('AUTHENTICODEVERIFIER_OCSPCOUNT_PID', 56);
define('AUTHENTICODEVERIFIER_OCSPBYTES_PID', 57);
define('AUTHENTICODEVERIFIER_OCSPHANDLE_PID', 58);
define('AUTHENTICODEVERIFIER_OCSPISSUER_PID', 59);
define('AUTHENTICODEVERIFIER_OCSPISSUERRDN_PID', 60);
define('AUTHENTICODEVERIFIER_OCSPLOCATION_PID', 61);
define('AUTHENTICODEVERIFIER_OCSPPRODUCEDAT_PID', 62);
define('AUTHENTICODEVERIFIER_OFFLINEMODE_PID', 63);
define('AUTHENTICODEVERIFIER_PROXYADDRESS_PID', 64);
define('AUTHENTICODEVERIFIER_PROXYAUTHENTICATION_PID', 65);
define('AUTHENTICODEVERIFIER_PROXYPASSWORD_PID', 66);
define('AUTHENTICODEVERIFIER_PROXYPORT_PID', 67);
define('AUTHENTICODEVERIFIER_PROXYPROXYTYPE_PID', 68);
define('AUTHENTICODEVERIFIER_PROXYREQUESTHEADERS_PID', 69);
define('AUTHENTICODEVERIFIER_PROXYRESPONSEBODY_PID', 70);
define('AUTHENTICODEVERIFIER_PROXYRESPONSEHEADERS_PID', 71);
define('AUTHENTICODEVERIFIER_PROXYUSEIPV6_PID', 72);
define('AUTHENTICODEVERIFIER_PROXYUSEPROXY_PID', 73);
define('AUTHENTICODEVERIFIER_PROXYUSERNAME_PID', 74);
define('AUTHENTICODEVERIFIER_REVOCATIONCHECK_PID', 75);
define('AUTHENTICODEVERIFIER_SIGCHAINVALIDATIONDETAILS_PID', 76);
define('AUTHENTICODEVERIFIER_SIGCHAINVALIDATIONRESULT_PID', 77);
define('AUTHENTICODEVERIFIER_SIGCLAIMEDSIGNINGTIME_PID', 78);
define('AUTHENTICODEVERIFIER_SIGDESCRIPTION_PID', 79);
define('AUTHENTICODEVERIFIER_SIGERRORCODE_PID', 80);
define('AUTHENTICODEVERIFIER_SIGERRORMESSAGE_PID', 81);
define('AUTHENTICODEVERIFIER_SIGFILEHASHALGORITHM_PID', 82);
define('AUTHENTICODEVERIFIER_SIGHASHALGORITHM_PID', 83);
define('AUTHENTICODEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_PID', 84);
define('AUTHENTICODEVERIFIER_SIGSTATEMENTTYPE_PID', 85);
define('AUTHENTICODEVERIFIER_SIGURL_PID', 86);
define('AUTHENTICODEVERIFIER_SIGVALIDATEDSIGNINGTIME_PID', 87);
define('AUTHENTICODEVERIFIER_SIGVALIDATIONLOG_PID', 88);
define('AUTHENTICODEVERIFIER_SIGNATURECOUNT_PID', 89);
define('AUTHENTICODEVERIFIER_SIGNATURECHAINVALIDATIONDETAILS_PID', 90);
define('AUTHENTICODEVERIFIER_SIGNATURECHAINVALIDATIONRESULT_PID', 91);
define('AUTHENTICODEVERIFIER_SIGNATURECLAIMEDSIGNINGTIME_PID', 92);
define('AUTHENTICODEVERIFIER_SIGNATUREDESCRIPTION_PID', 93);
define('AUTHENTICODEVERIFIER_SIGNATUREERRORCODE_PID', 94);
define('AUTHENTICODEVERIFIER_SIGNATUREERRORMESSAGE_PID', 95);
define('AUTHENTICODEVERIFIER_SIGNATUREFILEHASHALGORITHM_PID', 96);
define('AUTHENTICODEVERIFIER_SIGNATUREHASHALGORITHM_PID', 97);
define('AUTHENTICODEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_PID', 98);
define('AUTHENTICODEVERIFIER_SIGNATURESTATEMENTTYPE_PID', 99);
define('AUTHENTICODEVERIFIER_SIGNATUREURL_PID', 100);
define('AUTHENTICODEVERIFIER_SIGNATUREVALIDATEDSIGNINGTIME_PID', 101);
define('AUTHENTICODEVERIFIER_SIGNATUREVALIDATIONLOG_PID', 102);
define('AUTHENTICODEVERIFIER_SIGNATUREVALIDATIONRESULT_PID', 103);
define('AUTHENTICODEVERIFIER_SIGNED_PID', 104);
define('AUTHENTICODEVERIFIER_SIGNINGCERTBYTES_PID', 105);
define('AUTHENTICODEVERIFIER_SIGNINGCERTCA_PID', 106);
define('AUTHENTICODEVERIFIER_SIGNINGCERTCAKEYID_PID', 107);
define('AUTHENTICODEVERIFIER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 108);
define('AUTHENTICODEVERIFIER_SIGNINGCERTCURVE_PID', 109);
define('AUTHENTICODEVERIFIER_SIGNINGCERTFINGERPRINT_PID', 110);
define('AUTHENTICODEVERIFIER_SIGNINGCERTFRIENDLYNAME_PID', 111);
define('AUTHENTICODEVERIFIER_SIGNINGCERTHANDLE_PID', 112);
define('AUTHENTICODEVERIFIER_SIGNINGCERTHASHALGORITHM_PID', 113);
define('AUTHENTICODEVERIFIER_SIGNINGCERTISSUER_PID', 114);
define('AUTHENTICODEVERIFIER_SIGNINGCERTISSUERRDN_PID', 115);
define('AUTHENTICODEVERIFIER_SIGNINGCERTKEYALGORITHM_PID', 116);
define('AUTHENTICODEVERIFIER_SIGNINGCERTKEYBITS_PID', 117);
define('AUTHENTICODEVERIFIER_SIGNINGCERTKEYFINGERPRINT_PID', 118);
define('AUTHENTICODEVERIFIER_SIGNINGCERTKEYUSAGE_PID', 119);
define('AUTHENTICODEVERIFIER_SIGNINGCERTKEYVALID_PID', 120);
define('AUTHENTICODEVERIFIER_SIGNINGCERTOCSPLOCATIONS_PID', 121);
define('AUTHENTICODEVERIFIER_SIGNINGCERTPOLICYIDS_PID', 122);
define('AUTHENTICODEVERIFIER_SIGNINGCERTPUBLICKEYBYTES_PID', 123);
define('AUTHENTICODEVERIFIER_SIGNINGCERTSELFSIGNED_PID', 124);
define('AUTHENTICODEVERIFIER_SIGNINGCERTSERIALNUMBER_PID', 125);
define('AUTHENTICODEVERIFIER_SIGNINGCERTSIGALGORITHM_PID', 126);
define('AUTHENTICODEVERIFIER_SIGNINGCERTSUBJECT_PID', 127);
define('AUTHENTICODEVERIFIER_SIGNINGCERTSUBJECTKEYID_PID', 128);
define('AUTHENTICODEVERIFIER_SIGNINGCERTSUBJECTRDN_PID', 129);
define('AUTHENTICODEVERIFIER_SIGNINGCERTVALIDFROM_PID', 130);
define('AUTHENTICODEVERIFIER_SIGNINGCERTVALIDTO_PID', 131);
define('AUTHENTICODEVERIFIER_SOCKETDNSMODE_PID', 132);
define('AUTHENTICODEVERIFIER_SOCKETDNSPORT_PID', 133);
define('AUTHENTICODEVERIFIER_SOCKETDNSQUERYTIMEOUT_PID', 134);
define('AUTHENTICODEVERIFIER_SOCKETDNSSERVERS_PID', 135);
define('AUTHENTICODEVERIFIER_SOCKETDNSTOTALTIMEOUT_PID', 136);
define('AUTHENTICODEVERIFIER_SOCKETINCOMINGSPEEDLIMIT_PID', 137);
define('AUTHENTICODEVERIFIER_SOCKETLOCALADDRESS_PID', 138);
define('AUTHENTICODEVERIFIER_SOCKETLOCALPORT_PID', 139);
define('AUTHENTICODEVERIFIER_SOCKETOUTGOINGSPEEDLIMIT_PID', 140);
define('AUTHENTICODEVERIFIER_SOCKETTIMEOUT_PID', 141);
define('AUTHENTICODEVERIFIER_SOCKETUSEIPV6_PID', 142);
define('AUTHENTICODEVERIFIER_SPECIFIEDCHECKSUM_PID', 143);
define('AUTHENTICODEVERIFIER_TIMESTAMPACCURACY_PID', 144);
define('AUTHENTICODEVERIFIER_TIMESTAMPBYTES_PID', 145);
define('AUTHENTICODEVERIFIER_TIMESTAMPCHAINVALIDATIONDETAILS_PID', 146);
define('AUTHENTICODEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_PID', 147);
define('AUTHENTICODEVERIFIER_TIMESTAMPHASHALGORITHM_PID', 148);
define('AUTHENTICODEVERIFIER_TIMESTAMPSERIALNUMBER_PID', 149);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIME_PID', 150);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_PID', 151);
define('AUTHENTICODEVERIFIER_TIMESTAMPTSANAME_PID', 152);
define('AUTHENTICODEVERIFIER_TIMESTAMPVALIDATIONLOG_PID', 153);
define('AUTHENTICODEVERIFIER_TIMESTAMPVALIDATIONRESULT_PID', 154);
define('AUTHENTICODEVERIFIER_TIMESTAMPED_PID', 155);
define('AUTHENTICODEVERIFIER_TLSAUTOVALIDATECERTIFICATES_PID', 156);
define('AUTHENTICODEVERIFIER_TLSBASECONFIGURATION_PID', 157);
define('AUTHENTICODEVERIFIER_TLSCIPHERSUITES_PID', 158);
define('AUTHENTICODEVERIFIER_TLSECCURVES_PID', 159);
define('AUTHENTICODEVERIFIER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 160);
define('AUTHENTICODEVERIFIER_TLSPRESHAREDIDENTITY_PID', 161);
define('AUTHENTICODEVERIFIER_TLSPRESHAREDKEY_PID', 162);
define('AUTHENTICODEVERIFIER_TLSPRESHAREDKEYCIPHERSUITE_PID', 163);
define('AUTHENTICODEVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 164);
define('AUTHENTICODEVERIFIER_TLSREVOCATIONCHECK_PID', 165);
define('AUTHENTICODEVERIFIER_TLSSSLOPTIONS_PID', 166);
define('AUTHENTICODEVERIFIER_TLSTLSMODE_PID', 167);
define('AUTHENTICODEVERIFIER_TLSUSEEXTENDEDMASTERSECRET_PID', 168);
define('AUTHENTICODEVERIFIER_TLSUSESESSIONRESUMPTION_PID', 169);
define('AUTHENTICODEVERIFIER_TLSVERSIONS_PID', 170);
define('AUTHENTICODEVERIFIER_TRUSTEDCERTCOUNT_PID', 171);
define('AUTHENTICODEVERIFIER_TRUSTEDCERTBYTES_PID', 172);
define('AUTHENTICODEVERIFIER_TRUSTEDCERTHANDLE_PID', 173);
define('AUTHENTICODEVERIFIER_TSACERTBYTES_PID', 174);
define('AUTHENTICODEVERIFIER_TSACERTCA_PID', 175);
define('AUTHENTICODEVERIFIER_TSACERTCAKEYID_PID', 176);
define('AUTHENTICODEVERIFIER_TSACERTCRLDISTRIBUTIONPOINTS_PID', 177);
define('AUTHENTICODEVERIFIER_TSACERTCURVE_PID', 178);
define('AUTHENTICODEVERIFIER_TSACERTFINGERPRINT_PID', 179);
define('AUTHENTICODEVERIFIER_TSACERTFRIENDLYNAME_PID', 180);
define('AUTHENTICODEVERIFIER_TSACERTHANDLE_PID', 181);
define('AUTHENTICODEVERIFIER_TSACERTHASHALGORITHM_PID', 182);
define('AUTHENTICODEVERIFIER_TSACERTISSUER_PID', 183);
define('AUTHENTICODEVERIFIER_TSACERTISSUERRDN_PID', 184);
define('AUTHENTICODEVERIFIER_TSACERTKEYALGORITHM_PID', 185);
define('AUTHENTICODEVERIFIER_TSACERTKEYBITS_PID', 186);
define('AUTHENTICODEVERIFIER_TSACERTKEYFINGERPRINT_PID', 187);
define('AUTHENTICODEVERIFIER_TSACERTKEYUSAGE_PID', 188);
define('AUTHENTICODEVERIFIER_TSACERTKEYVALID_PID', 189);
define('AUTHENTICODEVERIFIER_TSACERTOCSPLOCATIONS_PID', 190);
define('AUTHENTICODEVERIFIER_TSACERTPOLICYIDS_PID', 191);
define('AUTHENTICODEVERIFIER_TSACERTPUBLICKEYBYTES_PID', 192);
define('AUTHENTICODEVERIFIER_TSACERTSELFSIGNED_PID', 193);
define('AUTHENTICODEVERIFIER_TSACERTSERIALNUMBER_PID', 194);
define('AUTHENTICODEVERIFIER_TSACERTSIGALGORITHM_PID', 195);
define('AUTHENTICODEVERIFIER_TSACERTSUBJECT_PID', 196);
define('AUTHENTICODEVERIFIER_TSACERTSUBJECTKEYID_PID', 197);
define('AUTHENTICODEVERIFIER_TSACERTSUBJECTRDN_PID', 198);
define('AUTHENTICODEVERIFIER_TSACERTVALIDFROM_PID', 199);
define('AUTHENTICODEVERIFIER_TSACERTVALIDTO_PID', 200);
define('AUTHENTICODEVERIFIER_VALIDATEDSIGNINGTIME_PID', 201);
define('AUTHENTICODEVERIFIER_VALIDATIONLOG_PID', 202);
define('AUTHENTICODEVERIFIER_VALIDATIONMOMENT_PID', 203);


/*
 * AuthenticodeVerifier Enums
 */

define('AUTHENTICODEVERIFIER_CHAINVALIDATIONRESULT_VALID', 0);
define('AUTHENTICODEVERIFIER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('AUTHENTICODEVERIFIER_CHAINVALIDATIONRESULT_INVALID', 2);
define('AUTHENTICODEVERIFIER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('AUTHENTICODEVERIFIER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('AUTHENTICODEVERIFIER_PROXYAUTHENTICATION_BASIC', 1);
define('AUTHENTICODEVERIFIER_PROXYAUTHENTICATION_DIGEST', 2);
define('AUTHENTICODEVERIFIER_PROXYAUTHENTICATION_NTLM', 3);

define('AUTHENTICODEVERIFIER_PROXYPROXYTYPE_NONE', 0);
define('AUTHENTICODEVERIFIER_PROXYPROXYTYPE_SOCKS_4', 1);
define('AUTHENTICODEVERIFIER_PROXYPROXYTYPE_SOCKS_5', 2);
define('AUTHENTICODEVERIFIER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('AUTHENTICODEVERIFIER_PROXYPROXYTYPE_HTTP', 4);

define('AUTHENTICODEVERIFIER_REVOCATIONCHECK_NONE', 0);
define('AUTHENTICODEVERIFIER_REVOCATIONCHECK_AUTO', 1);
define('AUTHENTICODEVERIFIER_REVOCATIONCHECK_ALL_CRL', 2);
define('AUTHENTICODEVERIFIER_REVOCATIONCHECK_ALL_OCSP', 3);
define('AUTHENTICODEVERIFIER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('AUTHENTICODEVERIFIER_REVOCATIONCHECK_ANY_CRL', 5);
define('AUTHENTICODEVERIFIER_REVOCATIONCHECK_ANY_OCSP', 6);
define('AUTHENTICODEVERIFIER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('AUTHENTICODEVERIFIER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('AUTHENTICODEVERIFIER_SIGCHAINVALIDATIONRESULT_VALID', 0);
define('AUTHENTICODEVERIFIER_SIGCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('AUTHENTICODEVERIFIER_SIGCHAINVALIDATIONRESULT_INVALID', 2);
define('AUTHENTICODEVERIFIER_SIGCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('AUTHENTICODEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_VALID', 0);
define('AUTHENTICODEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('AUTHENTICODEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('AUTHENTICODEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('AUTHENTICODEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('AUTHENTICODEVERIFIER_SIGSTATEMENTTYPE_UNKNOWN', 0);
define('AUTHENTICODEVERIFIER_SIGSTATEMENTTYPE_INDIVIDUAL', 1);
define('AUTHENTICODEVERIFIER_SIGSTATEMENTTYPE_COMMERCIAL', 2);

define('AUTHENTICODEVERIFIER_SIGNATURECHAINVALIDATIONRESULT_VALID', 0);
define('AUTHENTICODEVERIFIER_SIGNATURECHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('AUTHENTICODEVERIFIER_SIGNATURECHAINVALIDATIONRESULT_INVALID', 2);
define('AUTHENTICODEVERIFIER_SIGNATURECHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('AUTHENTICODEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_VALID', 0);
define('AUTHENTICODEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('AUTHENTICODEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('AUTHENTICODEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('AUTHENTICODEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('AUTHENTICODEVERIFIER_SIGNATURESTATEMENTTYPE_UNKNOWN', 0);
define('AUTHENTICODEVERIFIER_SIGNATURESTATEMENTTYPE_INDIVIDUAL', 1);
define('AUTHENTICODEVERIFIER_SIGNATURESTATEMENTTYPE_COMMERCIAL', 2);

define('AUTHENTICODEVERIFIER_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('AUTHENTICODEVERIFIER_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('AUTHENTICODEVERIFIER_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('AUTHENTICODEVERIFIER_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('AUTHENTICODEVERIFIER_SIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('AUTHENTICODEVERIFIER_SOCKETDNSMODE_AUTO', 0);
define('AUTHENTICODEVERIFIER_SOCKETDNSMODE_PLATFORM', 1);
define('AUTHENTICODEVERIFIER_SOCKETDNSMODE_OWN', 2);
define('AUTHENTICODEVERIFIER_SOCKETDNSMODE_OWN_SECURE', 3);

define('AUTHENTICODEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID', 0);
define('AUTHENTICODEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('AUTHENTICODEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_INVALID', 2);
define('AUTHENTICODEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_UNKNOWN', 0);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_LEGACY', 1);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_TRUSTED', 2);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_GENERIC', 3);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ESC', 4);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_CONTENT', 5);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_CERTS_AND_CRLS', 6);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE', 7);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_2', 8);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_3', 9);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_INDIVIDUAL_DATA_OBJECTS', 10);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ALL_DATA_OBJECTS', 11);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIGNATURE', 12);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_REFS_ONLY', 13);
define('AUTHENTICODEVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIG_AND_REFS', 14);

define('AUTHENTICODEVERIFIER_TIMESTAMPVALIDATIONRESULT_VALID', 0);
define('AUTHENTICODEVERIFIER_TIMESTAMPVALIDATIONRESULT_UNKNOWN', 1);
define('AUTHENTICODEVERIFIER_TIMESTAMPVALIDATIONRESULT_CORRUPTED', 2);
define('AUTHENTICODEVERIFIER_TIMESTAMPVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('AUTHENTICODEVERIFIER_TIMESTAMPVALIDATIONRESULT_FAILURE', 4);

define('AUTHENTICODEVERIFIER_TLSBASECONFIGURATION_DEFAULT', 0);
define('AUTHENTICODEVERIFIER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('AUTHENTICODEVERIFIER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('AUTHENTICODEVERIFIER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('AUTHENTICODEVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('AUTHENTICODEVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('AUTHENTICODEVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('AUTHENTICODEVERIFIER_TLSREVOCATIONCHECK_NONE', 0);
define('AUTHENTICODEVERIFIER_TLSREVOCATIONCHECK_AUTO', 1);
define('AUTHENTICODEVERIFIER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('AUTHENTICODEVERIFIER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('AUTHENTICODEVERIFIER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('AUTHENTICODEVERIFIER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('AUTHENTICODEVERIFIER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('AUTHENTICODEVERIFIER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('AUTHENTICODEVERIFIER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('AUTHENTICODEVERIFIER_TLSTLSMODE_DEFAULT', 0);
define('AUTHENTICODEVERIFIER_TLSTLSMODE_NO_TLS', 1);
define('AUTHENTICODEVERIFIER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('AUTHENTICODEVERIFIER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * AuthenticodeVerifier Methods
 */

define('AUTHENTICODEVERIFIER_CONFIG_MID', 2);
define('AUTHENTICODEVERIFIER_VERIFY_MID', 3);


/*
 * AuthenticodeVerifier Events
 */
  
define('AUTHENTICODEVERIFIER_CHAINVALIDATED_EID', 1);
define('AUTHENTICODEVERIFIER_ERROR_EID', 2);
define('AUTHENTICODEVERIFIER_SIGNATUREFOUND_EID', 3);
define('AUTHENTICODEVERIFIER_SIGNATUREVALIDATED_EID', 4);
define('AUTHENTICODEVERIFIER_TIMESTAMPFOUND_EID', 5);
define('AUTHENTICODEVERIFIER_TIMESTAMPVALIDATED_EID', 6);

/*
 * CAdESSigner Properties
 */

define('CADESSIGNER_BLOCKEDCERTCOUNT_PID', 1);
define('CADESSIGNER_BLOCKEDCERTBYTES_PID', 2);
define('CADESSIGNER_BLOCKEDCERTHANDLE_PID', 3);
define('CADESSIGNER_CHAINVALIDATIONDETAILS_PID', 4);
define('CADESSIGNER_CHAINVALIDATIONRESULT_PID', 5);
define('CADESSIGNER_CLAIMEDSIGNINGTIME_PID', 6);
define('CADESSIGNER_DATAFILE_PID', 7);
define('CADESSIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 8);
define('CADESSIGNER_EXTERNALCRYPTODATA_PID', 9);
define('CADESSIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 10);
define('CADESSIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 11);
define('CADESSIGNER_EXTERNALCRYPTOKEYID_PID', 12);
define('CADESSIGNER_EXTERNALCRYPTOKEYSECRET_PID', 13);
define('CADESSIGNER_EXTERNALCRYPTOMETHOD_PID', 14);
define('CADESSIGNER_EXTERNALCRYPTOMODE_PID', 15);
define('CADESSIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 16);
define('CADESSIGNER_HASHALGORITHM_PID', 17);
define('CADESSIGNER_IGNORECHAINVALIDATIONERRORS_PID', 18);
define('CADESSIGNER_INPUTFILE_PID', 19);
define('CADESSIGNER_KNOWNCERTCOUNT_PID', 20);
define('CADESSIGNER_KNOWNCERTBYTES_PID', 21);
define('CADESSIGNER_KNOWNCERTHANDLE_PID', 22);
define('CADESSIGNER_KNOWNCRLCOUNT_PID', 23);
define('CADESSIGNER_KNOWNCRLBYTES_PID', 24);
define('CADESSIGNER_KNOWNCRLHANDLE_PID', 25);
define('CADESSIGNER_KNOWNOCSPCOUNT_PID', 26);
define('CADESSIGNER_KNOWNOCSPBYTES_PID', 27);
define('CADESSIGNER_KNOWNOCSPHANDLE_PID', 28);
define('CADESSIGNER_OFFLINEMODE_PID', 29);
define('CADESSIGNER_OUTPUTFILE_PID', 30);
define('CADESSIGNER_POLICYHASH_PID', 31);
define('CADESSIGNER_POLICYHASHALGORITHM_PID', 32);
define('CADESSIGNER_POLICYID_PID', 33);
define('CADESSIGNER_POLICYURI_PID', 34);
define('CADESSIGNER_PROXYADDRESS_PID', 35);
define('CADESSIGNER_PROXYAUTHENTICATION_PID', 36);
define('CADESSIGNER_PROXYPASSWORD_PID', 37);
define('CADESSIGNER_PROXYPORT_PID', 38);
define('CADESSIGNER_PROXYPROXYTYPE_PID', 39);
define('CADESSIGNER_PROXYREQUESTHEADERS_PID', 40);
define('CADESSIGNER_PROXYRESPONSEBODY_PID', 41);
define('CADESSIGNER_PROXYRESPONSEHEADERS_PID', 42);
define('CADESSIGNER_PROXYUSEIPV6_PID', 43);
define('CADESSIGNER_PROXYUSEPROXY_PID', 44);
define('CADESSIGNER_PROXYUSERNAME_PID', 45);
define('CADESSIGNER_REVOCATIONCHECK_PID', 46);
define('CADESSIGNER_SIGNATUREINDEX_PID', 47);
define('CADESSIGNER_SIGNEDATTRIBUTECOUNT_PID', 48);
define('CADESSIGNER_SIGNEDATTRIBUTEOID_PID', 49);
define('CADESSIGNER_SIGNEDATTRIBUTEVALUE_PID', 50);
define('CADESSIGNER_SIGNINGCERTBYTES_PID', 51);
define('CADESSIGNER_SIGNINGCERTHANDLE_PID', 52);
define('CADESSIGNER_SIGNINGCHAINCOUNT_PID', 53);
define('CADESSIGNER_SIGNINGCHAINBYTES_PID', 54);
define('CADESSIGNER_SIGNINGCHAINHANDLE_PID', 55);
define('CADESSIGNER_SOCKETDNSMODE_PID', 56);
define('CADESSIGNER_SOCKETDNSPORT_PID', 57);
define('CADESSIGNER_SOCKETDNSQUERYTIMEOUT_PID', 58);
define('CADESSIGNER_SOCKETDNSSERVERS_PID', 59);
define('CADESSIGNER_SOCKETDNSTOTALTIMEOUT_PID', 60);
define('CADESSIGNER_SOCKETINCOMINGSPEEDLIMIT_PID', 61);
define('CADESSIGNER_SOCKETLOCALADDRESS_PID', 62);
define('CADESSIGNER_SOCKETLOCALPORT_PID', 63);
define('CADESSIGNER_SOCKETOUTGOINGSPEEDLIMIT_PID', 64);
define('CADESSIGNER_SOCKETTIMEOUT_PID', 65);
define('CADESSIGNER_SOCKETUSEIPV6_PID', 66);
define('CADESSIGNER_TIMESTAMPSERVER_PID', 67);
define('CADESSIGNER_TLSAUTOVALIDATECERTIFICATES_PID', 68);
define('CADESSIGNER_TLSBASECONFIGURATION_PID', 69);
define('CADESSIGNER_TLSCIPHERSUITES_PID', 70);
define('CADESSIGNER_TLSECCURVES_PID', 71);
define('CADESSIGNER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 72);
define('CADESSIGNER_TLSPRESHAREDIDENTITY_PID', 73);
define('CADESSIGNER_TLSPRESHAREDKEY_PID', 74);
define('CADESSIGNER_TLSPRESHAREDKEYCIPHERSUITE_PID', 75);
define('CADESSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 76);
define('CADESSIGNER_TLSREVOCATIONCHECK_PID', 77);
define('CADESSIGNER_TLSSSLOPTIONS_PID', 78);
define('CADESSIGNER_TLSTLSMODE_PID', 79);
define('CADESSIGNER_TLSUSEEXTENDEDMASTERSECRET_PID', 80);
define('CADESSIGNER_TLSUSESESSIONRESUMPTION_PID', 81);
define('CADESSIGNER_TLSVERSIONS_PID', 82);
define('CADESSIGNER_TRUSTEDCERTCOUNT_PID', 83);
define('CADESSIGNER_TRUSTEDCERTBYTES_PID', 84);
define('CADESSIGNER_TRUSTEDCERTHANDLE_PID', 85);
define('CADESSIGNER_UNSIGNEDATTRIBUTECOUNT_PID', 86);
define('CADESSIGNER_UNSIGNEDATTRIBUTEOID_PID', 87);
define('CADESSIGNER_UNSIGNEDATTRIBUTEVALUE_PID', 88);
define('CADESSIGNER_VALIDATIONLOG_PID', 89);


/*
 * CAdESSigner Enums
 */

define('CADESSIGNER_CHAINVALIDATIONRESULT_VALID', 0);
define('CADESSIGNER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('CADESSIGNER_CHAINVALIDATIONRESULT_INVALID', 2);
define('CADESSIGNER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('CADESSIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('CADESSIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('CADESSIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('CADESSIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('CADESSIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('CADESSIGNER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('CADESSIGNER_PROXYAUTHENTICATION_BASIC', 1);
define('CADESSIGNER_PROXYAUTHENTICATION_DIGEST', 2);
define('CADESSIGNER_PROXYAUTHENTICATION_NTLM', 3);

define('CADESSIGNER_PROXYPROXYTYPE_NONE', 0);
define('CADESSIGNER_PROXYPROXYTYPE_SOCKS_4', 1);
define('CADESSIGNER_PROXYPROXYTYPE_SOCKS_5', 2);
define('CADESSIGNER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('CADESSIGNER_PROXYPROXYTYPE_HTTP', 4);

define('CADESSIGNER_REVOCATIONCHECK_NONE', 0);
define('CADESSIGNER_REVOCATIONCHECK_AUTO', 1);
define('CADESSIGNER_REVOCATIONCHECK_ALL_CRL', 2);
define('CADESSIGNER_REVOCATIONCHECK_ALL_OCSP', 3);
define('CADESSIGNER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('CADESSIGNER_REVOCATIONCHECK_ANY_CRL', 5);
define('CADESSIGNER_REVOCATIONCHECK_ANY_OCSP', 6);
define('CADESSIGNER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('CADESSIGNER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('CADESSIGNER_SOCKETDNSMODE_AUTO', 0);
define('CADESSIGNER_SOCKETDNSMODE_PLATFORM', 1);
define('CADESSIGNER_SOCKETDNSMODE_OWN', 2);
define('CADESSIGNER_SOCKETDNSMODE_OWN_SECURE', 3);

define('CADESSIGNER_TLSBASECONFIGURATION_DEFAULT', 0);
define('CADESSIGNER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('CADESSIGNER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('CADESSIGNER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('CADESSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('CADESSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('CADESSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('CADESSIGNER_TLSREVOCATIONCHECK_NONE', 0);
define('CADESSIGNER_TLSREVOCATIONCHECK_AUTO', 1);
define('CADESSIGNER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('CADESSIGNER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('CADESSIGNER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('CADESSIGNER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('CADESSIGNER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('CADESSIGNER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('CADESSIGNER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('CADESSIGNER_TLSTLSMODE_DEFAULT', 0);
define('CADESSIGNER_TLSTLSMODE_NO_TLS', 1);
define('CADESSIGNER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('CADESSIGNER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * CAdESSigner Methods
 */

define('CADESSIGNER_ARCHIVE_MID', 2);
define('CADESSIGNER_CONFIG_MID', 3);
define('CADESSIGNER_COUNTERSIGN_MID', 4);
define('CADESSIGNER_COUNTERSIGNEXTERNAL_MID', 5);
define('CADESSIGNER_EXTRACTASYNCDATA_MID', 6);
define('CADESSIGNER_SIGN_MID', 7);
define('CADESSIGNER_SIGNASYNCBEGIN_MID', 8);
define('CADESSIGNER_SIGNASYNCEND_MID', 9);
define('CADESSIGNER_SIGNEXTERNAL_MID', 10);
define('CADESSIGNER_TIMESTAMP_MID', 11);
define('CADESSIGNER_UPGRADE_MID', 12);


/*
 * CAdESSigner Events
 */
  
define('CADESSIGNER_ERROR_EID', 1);
define('CADESSIGNER_EXTERNALSIGN_EID', 2);

/*
 * CAdESVerifier Properties
 */

define('CADESVERIFIER_ALLSIGNATURESVALID_PID', 1);
define('CADESVERIFIER_BLOCKEDCERTCOUNT_PID', 2);
define('CADESVERIFIER_BLOCKEDCERTBYTES_PID', 3);
define('CADESVERIFIER_BLOCKEDCERTHANDLE_PID', 4);
define('CADESVERIFIER_CERTCOUNT_PID', 5);
define('CADESVERIFIER_CERTBYTES_PID', 6);
define('CADESVERIFIER_CERTCA_PID', 7);
define('CADESVERIFIER_CERTCAKEYID_PID', 8);
define('CADESVERIFIER_CERTCRLDISTRIBUTIONPOINTS_PID', 9);
define('CADESVERIFIER_CERTCURVE_PID', 10);
define('CADESVERIFIER_CERTFINGERPRINT_PID', 11);
define('CADESVERIFIER_CERTFRIENDLYNAME_PID', 12);
define('CADESVERIFIER_CERTHANDLE_PID', 13);
define('CADESVERIFIER_CERTHASHALGORITHM_PID', 14);
define('CADESVERIFIER_CERTISSUER_PID', 15);
define('CADESVERIFIER_CERTISSUERRDN_PID', 16);
define('CADESVERIFIER_CERTKEYALGORITHM_PID', 17);
define('CADESVERIFIER_CERTKEYBITS_PID', 18);
define('CADESVERIFIER_CERTKEYFINGERPRINT_PID', 19);
define('CADESVERIFIER_CERTKEYUSAGE_PID', 20);
define('CADESVERIFIER_CERTKEYVALID_PID', 21);
define('CADESVERIFIER_CERTOCSPLOCATIONS_PID', 22);
define('CADESVERIFIER_CERTPOLICYIDS_PID', 23);
define('CADESVERIFIER_CERTPUBLICKEYBYTES_PID', 24);
define('CADESVERIFIER_CERTSELFSIGNED_PID', 25);
define('CADESVERIFIER_CERTSERIALNUMBER_PID', 26);
define('CADESVERIFIER_CERTSIGALGORITHM_PID', 27);
define('CADESVERIFIER_CERTSUBJECT_PID', 28);
define('CADESVERIFIER_CERTSUBJECTKEYID_PID', 29);
define('CADESVERIFIER_CERTSUBJECTRDN_PID', 30);
define('CADESVERIFIER_CERTVALIDFROM_PID', 31);
define('CADESVERIFIER_CERTVALIDTO_PID', 32);
define('CADESVERIFIER_CHAINVALIDATIONDETAILS_PID', 33);
define('CADESVERIFIER_CHAINVALIDATIONRESULT_PID', 34);
define('CADESVERIFIER_CLAIMEDSIGNINGTIME_PID', 35);
define('CADESVERIFIER_COMPATIBILITYERRORS_PID', 36);
define('CADESVERIFIER_CONTENTTYPE_PID', 37);
define('CADESVERIFIER_COUNTERSIGNED_PID', 38);
define('CADESVERIFIER_COUNTERSIGNINGCERTBYTES_PID', 39);
define('CADESVERIFIER_COUNTERSIGNINGCERTCA_PID', 40);
define('CADESVERIFIER_COUNTERSIGNINGCERTCAKEYID_PID', 41);
define('CADESVERIFIER_COUNTERSIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 42);
define('CADESVERIFIER_COUNTERSIGNINGCERTCURVE_PID', 43);
define('CADESVERIFIER_COUNTERSIGNINGCERTFINGERPRINT_PID', 44);
define('CADESVERIFIER_COUNTERSIGNINGCERTFRIENDLYNAME_PID', 45);
define('CADESVERIFIER_COUNTERSIGNINGCERTHANDLE_PID', 46);
define('CADESVERIFIER_COUNTERSIGNINGCERTHASHALGORITHM_PID', 47);
define('CADESVERIFIER_COUNTERSIGNINGCERTISSUER_PID', 48);
define('CADESVERIFIER_COUNTERSIGNINGCERTISSUERRDN_PID', 49);
define('CADESVERIFIER_COUNTERSIGNINGCERTKEYALGORITHM_PID', 50);
define('CADESVERIFIER_COUNTERSIGNINGCERTKEYBITS_PID', 51);
define('CADESVERIFIER_COUNTERSIGNINGCERTKEYFINGERPRINT_PID', 52);
define('CADESVERIFIER_COUNTERSIGNINGCERTKEYUSAGE_PID', 53);
define('CADESVERIFIER_COUNTERSIGNINGCERTKEYVALID_PID', 54);
define('CADESVERIFIER_COUNTERSIGNINGCERTOCSPLOCATIONS_PID', 55);
define('CADESVERIFIER_COUNTERSIGNINGCERTORIGIN_PID', 56);
define('CADESVERIFIER_COUNTERSIGNINGCERTPOLICYIDS_PID', 57);
define('CADESVERIFIER_COUNTERSIGNINGCERTPRIVATEKEYBYTES_PID', 58);
define('CADESVERIFIER_COUNTERSIGNINGCERTPRIVATEKEYEXISTS_PID', 59);
define('CADESVERIFIER_COUNTERSIGNINGCERTPRIVATEKEYEXTRACTABLE_PID', 60);
define('CADESVERIFIER_COUNTERSIGNINGCERTPUBLICKEYBYTES_PID', 61);
define('CADESVERIFIER_COUNTERSIGNINGCERTSELFSIGNED_PID', 62);
define('CADESVERIFIER_COUNTERSIGNINGCERTSERIALNUMBER_PID', 63);
define('CADESVERIFIER_COUNTERSIGNINGCERTSIGALGORITHM_PID', 64);
define('CADESVERIFIER_COUNTERSIGNINGCERTSUBJECT_PID', 65);
define('CADESVERIFIER_COUNTERSIGNINGCERTSUBJECTKEYID_PID', 66);
define('CADESVERIFIER_COUNTERSIGNINGCERTSUBJECTRDN_PID', 67);
define('CADESVERIFIER_COUNTERSIGNINGCERTVALIDFROM_PID', 68);
define('CADESVERIFIER_COUNTERSIGNINGCERTVALIDTO_PID', 69);
define('CADESVERIFIER_CRLCOUNT_PID', 70);
define('CADESVERIFIER_CRLBYTES_PID', 71);
define('CADESVERIFIER_CRLHANDLE_PID', 72);
define('CADESVERIFIER_CRLISSUER_PID', 73);
define('CADESVERIFIER_CRLISSUERRDN_PID', 74);
define('CADESVERIFIER_CRLLOCATION_PID', 75);
define('CADESVERIFIER_CRLNEXTUPDATE_PID', 76);
define('CADESVERIFIER_CRLTHISUPDATE_PID', 77);
define('CADESVERIFIER_DATAFILE_PID', 78);
define('CADESVERIFIER_HASHALGORITHM_PID', 79);
define('CADESVERIFIER_IGNORECHAINVALIDATIONERRORS_PID', 80);
define('CADESVERIFIER_INPUTFILE_PID', 81);
define('CADESVERIFIER_KNOWNCERTCOUNT_PID', 82);
define('CADESVERIFIER_KNOWNCERTBYTES_PID', 83);
define('CADESVERIFIER_KNOWNCERTHANDLE_PID', 84);
define('CADESVERIFIER_KNOWNCRLCOUNT_PID', 85);
define('CADESVERIFIER_KNOWNCRLBYTES_PID', 86);
define('CADESVERIFIER_KNOWNCRLHANDLE_PID', 87);
define('CADESVERIFIER_KNOWNOCSPCOUNT_PID', 88);
define('CADESVERIFIER_KNOWNOCSPBYTES_PID', 89);
define('CADESVERIFIER_KNOWNOCSPHANDLE_PID', 90);
define('CADESVERIFIER_LASTARCHIVALTIME_PID', 91);
define('CADESVERIFIER_LEVEL_PID', 92);
define('CADESVERIFIER_MESSAGEDIGEST_PID', 93);
define('CADESVERIFIER_OCSPCOUNT_PID', 94);
define('CADESVERIFIER_OCSPBYTES_PID', 95);
define('CADESVERIFIER_OCSPHANDLE_PID', 96);
define('CADESVERIFIER_OCSPISSUER_PID', 97);
define('CADESVERIFIER_OCSPISSUERRDN_PID', 98);
define('CADESVERIFIER_OCSPLOCATION_PID', 99);
define('CADESVERIFIER_OCSPPRODUCEDAT_PID', 100);
define('CADESVERIFIER_OFFLINEMODE_PID', 101);
define('CADESVERIFIER_OUTPUTFILE_PID', 102);
define('CADESVERIFIER_POLICYHASH_PID', 103);
define('CADESVERIFIER_POLICYID_PID', 104);
define('CADESVERIFIER_POLICYURI_PID', 105);
define('CADESVERIFIER_PROXYADDRESS_PID', 106);
define('CADESVERIFIER_PROXYAUTHENTICATION_PID', 107);
define('CADESVERIFIER_PROXYPASSWORD_PID', 108);
define('CADESVERIFIER_PROXYPORT_PID', 109);
define('CADESVERIFIER_PROXYPROXYTYPE_PID', 110);
define('CADESVERIFIER_PROXYREQUESTHEADERS_PID', 111);
define('CADESVERIFIER_PROXYRESPONSEBODY_PID', 112);
define('CADESVERIFIER_PROXYRESPONSEHEADERS_PID', 113);
define('CADESVERIFIER_PROXYUSEIPV6_PID', 114);
define('CADESVERIFIER_PROXYUSEPROXY_PID', 115);
define('CADESVERIFIER_PROXYUSERNAME_PID', 116);
define('CADESVERIFIER_PUBLICKEYALGORITHM_PID', 117);
define('CADESVERIFIER_QUALIFIED_PID', 118);
define('CADESVERIFIER_REVOCATIONCHECK_PID', 119);
define('CADESVERIFIER_SIGNATUREVALIDATIONRESULT_PID', 120);
define('CADESVERIFIER_SIGNEDATTRIBUTECOUNT_PID', 121);
define('CADESVERIFIER_SIGNEDATTRIBUTEOID_PID', 122);
define('CADESVERIFIER_SIGNEDATTRIBUTEVALUE_PID', 123);
define('CADESVERIFIER_SIGNINGCERTBYTES_PID', 124);
define('CADESVERIFIER_SIGNINGCERTCA_PID', 125);
define('CADESVERIFIER_SIGNINGCERTCAKEYID_PID', 126);
define('CADESVERIFIER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 127);
define('CADESVERIFIER_SIGNINGCERTCURVE_PID', 128);
define('CADESVERIFIER_SIGNINGCERTFINGERPRINT_PID', 129);
define('CADESVERIFIER_SIGNINGCERTFRIENDLYNAME_PID', 130);
define('CADESVERIFIER_SIGNINGCERTHANDLE_PID', 131);
define('CADESVERIFIER_SIGNINGCERTHASHALGORITHM_PID', 132);
define('CADESVERIFIER_SIGNINGCERTISSUER_PID', 133);
define('CADESVERIFIER_SIGNINGCERTISSUERRDN_PID', 134);
define('CADESVERIFIER_SIGNINGCERTKEYALGORITHM_PID', 135);
define('CADESVERIFIER_SIGNINGCERTKEYBITS_PID', 136);
define('CADESVERIFIER_SIGNINGCERTKEYFINGERPRINT_PID', 137);
define('CADESVERIFIER_SIGNINGCERTKEYUSAGE_PID', 138);
define('CADESVERIFIER_SIGNINGCERTKEYVALID_PID', 139);
define('CADESVERIFIER_SIGNINGCERTOCSPLOCATIONS_PID', 140);
define('CADESVERIFIER_SIGNINGCERTORIGIN_PID', 141);
define('CADESVERIFIER_SIGNINGCERTPOLICYIDS_PID', 142);
define('CADESVERIFIER_SIGNINGCERTPRIVATEKEYBYTES_PID', 143);
define('CADESVERIFIER_SIGNINGCERTPRIVATEKEYEXISTS_PID', 144);
define('CADESVERIFIER_SIGNINGCERTPRIVATEKEYEXTRACTABLE_PID', 145);
define('CADESVERIFIER_SIGNINGCERTPUBLICKEYBYTES_PID', 146);
define('CADESVERIFIER_SIGNINGCERTSELFSIGNED_PID', 147);
define('CADESVERIFIER_SIGNINGCERTSERIALNUMBER_PID', 148);
define('CADESVERIFIER_SIGNINGCERTSIGALGORITHM_PID', 149);
define('CADESVERIFIER_SIGNINGCERTSUBJECT_PID', 150);
define('CADESVERIFIER_SIGNINGCERTSUBJECTKEYID_PID', 151);
define('CADESVERIFIER_SIGNINGCERTSUBJECTRDN_PID', 152);
define('CADESVERIFIER_SIGNINGCERTVALIDFROM_PID', 153);
define('CADESVERIFIER_SIGNINGCERTVALIDTO_PID', 154);
define('CADESVERIFIER_SOCKETDNSMODE_PID', 155);
define('CADESVERIFIER_SOCKETDNSPORT_PID', 156);
define('CADESVERIFIER_SOCKETDNSQUERYTIMEOUT_PID', 157);
define('CADESVERIFIER_SOCKETDNSSERVERS_PID', 158);
define('CADESVERIFIER_SOCKETDNSTOTALTIMEOUT_PID', 159);
define('CADESVERIFIER_SOCKETINCOMINGSPEEDLIMIT_PID', 160);
define('CADESVERIFIER_SOCKETLOCALADDRESS_PID', 161);
define('CADESVERIFIER_SOCKETLOCALPORT_PID', 162);
define('CADESVERIFIER_SOCKETOUTGOINGSPEEDLIMIT_PID', 163);
define('CADESVERIFIER_SOCKETTIMEOUT_PID', 164);
define('CADESVERIFIER_SOCKETUSEIPV6_PID', 165);
define('CADESVERIFIER_TIMESTAMPACCURACY_PID', 166);
define('CADESVERIFIER_TIMESTAMPBYTES_PID', 167);
define('CADESVERIFIER_TIMESTAMPCHAINVALIDATIONDETAILS_PID', 168);
define('CADESVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_PID', 169);
define('CADESVERIFIER_TIMESTAMPHASHALGORITHM_PID', 170);
define('CADESVERIFIER_TIMESTAMPSERIALNUMBER_PID', 171);
define('CADESVERIFIER_TIMESTAMPTIME_PID', 172);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_PID', 173);
define('CADESVERIFIER_TIMESTAMPTSANAME_PID', 174);
define('CADESVERIFIER_TIMESTAMPVALIDATIONLOG_PID', 175);
define('CADESVERIFIER_TIMESTAMPVALIDATIONRESULT_PID', 176);
define('CADESVERIFIER_TIMESTAMPED_PID', 177);
define('CADESVERIFIER_TLSAUTOVALIDATECERTIFICATES_PID', 178);
define('CADESVERIFIER_TLSBASECONFIGURATION_PID', 179);
define('CADESVERIFIER_TLSCIPHERSUITES_PID', 180);
define('CADESVERIFIER_TLSECCURVES_PID', 181);
define('CADESVERIFIER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 182);
define('CADESVERIFIER_TLSPRESHAREDIDENTITY_PID', 183);
define('CADESVERIFIER_TLSPRESHAREDKEY_PID', 184);
define('CADESVERIFIER_TLSPRESHAREDKEYCIPHERSUITE_PID', 185);
define('CADESVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 186);
define('CADESVERIFIER_TLSREVOCATIONCHECK_PID', 187);
define('CADESVERIFIER_TLSSSLOPTIONS_PID', 188);
define('CADESVERIFIER_TLSTLSMODE_PID', 189);
define('CADESVERIFIER_TLSUSEEXTENDEDMASTERSECRET_PID', 190);
define('CADESVERIFIER_TLSUSESESSIONRESUMPTION_PID', 191);
define('CADESVERIFIER_TLSVERSIONS_PID', 192);
define('CADESVERIFIER_TRUSTEDCERTCOUNT_PID', 193);
define('CADESVERIFIER_TRUSTEDCERTBYTES_PID', 194);
define('CADESVERIFIER_TRUSTEDCERTHANDLE_PID', 195);
define('CADESVERIFIER_TSACERTBYTES_PID', 196);
define('CADESVERIFIER_TSACERTCA_PID', 197);
define('CADESVERIFIER_TSACERTCAKEYID_PID', 198);
define('CADESVERIFIER_TSACERTCRLDISTRIBUTIONPOINTS_PID', 199);
define('CADESVERIFIER_TSACERTCURVE_PID', 200);
define('CADESVERIFIER_TSACERTFINGERPRINT_PID', 201);
define('CADESVERIFIER_TSACERTFRIENDLYNAME_PID', 202);
define('CADESVERIFIER_TSACERTHANDLE_PID', 203);
define('CADESVERIFIER_TSACERTHASHALGORITHM_PID', 204);
define('CADESVERIFIER_TSACERTISSUER_PID', 205);
define('CADESVERIFIER_TSACERTISSUERRDN_PID', 206);
define('CADESVERIFIER_TSACERTKEYALGORITHM_PID', 207);
define('CADESVERIFIER_TSACERTKEYBITS_PID', 208);
define('CADESVERIFIER_TSACERTKEYFINGERPRINT_PID', 209);
define('CADESVERIFIER_TSACERTKEYUSAGE_PID', 210);
define('CADESVERIFIER_TSACERTKEYVALID_PID', 211);
define('CADESVERIFIER_TSACERTOCSPLOCATIONS_PID', 212);
define('CADESVERIFIER_TSACERTPOLICYIDS_PID', 213);
define('CADESVERIFIER_TSACERTPUBLICKEYBYTES_PID', 214);
define('CADESVERIFIER_TSACERTSELFSIGNED_PID', 215);
define('CADESVERIFIER_TSACERTSERIALNUMBER_PID', 216);
define('CADESVERIFIER_TSACERTSIGALGORITHM_PID', 217);
define('CADESVERIFIER_TSACERTSUBJECT_PID', 218);
define('CADESVERIFIER_TSACERTSUBJECTKEYID_PID', 219);
define('CADESVERIFIER_TSACERTSUBJECTRDN_PID', 220);
define('CADESVERIFIER_TSACERTVALIDFROM_PID', 221);
define('CADESVERIFIER_TSACERTVALIDTO_PID', 222);
define('CADESVERIFIER_UNSIGNEDATTRIBUTECOUNT_PID', 223);
define('CADESVERIFIER_UNSIGNEDATTRIBUTEOID_PID', 224);
define('CADESVERIFIER_UNSIGNEDATTRIBUTEVALUE_PID', 225);
define('CADESVERIFIER_VALIDATEDSIGNINGTIME_PID', 226);
define('CADESVERIFIER_VALIDATIONLOG_PID', 227);
define('CADESVERIFIER_VALIDATIONMOMENT_PID', 228);


/*
 * CAdESVerifier Enums
 */

define('CADESVERIFIER_CHAINVALIDATIONRESULT_VALID', 0);
define('CADESVERIFIER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('CADESVERIFIER_CHAINVALIDATIONRESULT_INVALID', 2);
define('CADESVERIFIER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('CADESVERIFIER_LEVEL_UNKNOWN', 0);
define('CADESVERIFIER_LEVEL_BES', 1);
define('CADESVERIFIER_LEVEL_EPES', 2);
define('CADESVERIFIER_LEVEL_T', 3);
define('CADESVERIFIER_LEVEL_C', 4);
define('CADESVERIFIER_LEVEL_XTYPE_1', 5);
define('CADESVERIFIER_LEVEL_XTYPE_2', 6);
define('CADESVERIFIER_LEVEL_XLTYPE_1', 7);
define('CADESVERIFIER_LEVEL_XLTYPE_2', 8);
define('CADESVERIFIER_LEVEL_BASELINE_B', 9);
define('CADESVERIFIER_LEVEL_BASELINE_T', 10);
define('CADESVERIFIER_LEVEL_BASELINE_LT', 11);
define('CADESVERIFIER_LEVEL_BASELINE_LTA', 12);
define('CADESVERIFIER_LEVEL_EXTENDED_BES', 13);
define('CADESVERIFIER_LEVEL_EXTENDED_EPES', 14);
define('CADESVERIFIER_LEVEL_EXTENDED_T', 15);
define('CADESVERIFIER_LEVEL_EXTENDED_C', 16);
define('CADESVERIFIER_LEVEL_EXTENDED_XTYPE_1', 17);
define('CADESVERIFIER_LEVEL_EXTENDED_XTYPE_2', 18);
define('CADESVERIFIER_LEVEL_EXTENDED_XLTYPE_1', 19);
define('CADESVERIFIER_LEVEL_EXTENDED_XLTYPE_2', 20);
define('CADESVERIFIER_LEVEL_EXTENDED_A', 21);

define('CADESVERIFIER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('CADESVERIFIER_PROXYAUTHENTICATION_BASIC', 1);
define('CADESVERIFIER_PROXYAUTHENTICATION_DIGEST', 2);
define('CADESVERIFIER_PROXYAUTHENTICATION_NTLM', 3);

define('CADESVERIFIER_PROXYPROXYTYPE_NONE', 0);
define('CADESVERIFIER_PROXYPROXYTYPE_SOCKS_4', 1);
define('CADESVERIFIER_PROXYPROXYTYPE_SOCKS_5', 2);
define('CADESVERIFIER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('CADESVERIFIER_PROXYPROXYTYPE_HTTP', 4);

define('CADESVERIFIER_QUALIFIED_UNKNOWN', 0);
define('CADESVERIFIER_QUALIFIED_NONE', 1);
define('CADESVERIFIER_QUALIFIED_GRANTED', 2);
define('CADESVERIFIER_QUALIFIED_WITHDRAWN', 3);
define('CADESVERIFIER_QUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('CADESVERIFIER_QUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('CADESVERIFIER_QUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('CADESVERIFIER_QUALIFIED_UNDER_SUPERVISION', 7);
define('CADESVERIFIER_QUALIFIED_SUPERVISION_INCESSATION', 8);
define('CADESVERIFIER_QUALIFIED_SUPERVISION_CEASED', 9);
define('CADESVERIFIER_QUALIFIED_SUPERVISION_REVOKED', 10);
define('CADESVERIFIER_QUALIFIED_ACCREDITED', 11);
define('CADESVERIFIER_QUALIFIED_ACCREDITION_CEASED', 12);
define('CADESVERIFIER_QUALIFIED_ACCREDITION_REVOKED', 13);

define('CADESVERIFIER_REVOCATIONCHECK_NONE', 0);
define('CADESVERIFIER_REVOCATIONCHECK_AUTO', 1);
define('CADESVERIFIER_REVOCATIONCHECK_ALL_CRL', 2);
define('CADESVERIFIER_REVOCATIONCHECK_ALL_OCSP', 3);
define('CADESVERIFIER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('CADESVERIFIER_REVOCATIONCHECK_ANY_CRL', 5);
define('CADESVERIFIER_REVOCATIONCHECK_ANY_OCSP', 6);
define('CADESVERIFIER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('CADESVERIFIER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('CADESVERIFIER_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('CADESVERIFIER_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('CADESVERIFIER_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('CADESVERIFIER_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('CADESVERIFIER_SIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('CADESVERIFIER_SOCKETDNSMODE_AUTO', 0);
define('CADESVERIFIER_SOCKETDNSMODE_PLATFORM', 1);
define('CADESVERIFIER_SOCKETDNSMODE_OWN', 2);
define('CADESVERIFIER_SOCKETDNSMODE_OWN_SECURE', 3);

define('CADESVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID', 0);
define('CADESVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('CADESVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_INVALID', 2);
define('CADESVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_UNKNOWN', 0);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_LEGACY', 1);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_TRUSTED', 2);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_GENERIC', 3);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_ESC', 4);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_CONTENT', 5);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_CERTS_AND_CRLS', 6);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE', 7);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_2', 8);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_3', 9);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_INDIVIDUAL_DATA_OBJECTS', 10);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_ALL_DATA_OBJECTS', 11);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIGNATURE', 12);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_REFS_ONLY', 13);
define('CADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIG_AND_REFS', 14);

define('CADESVERIFIER_TIMESTAMPVALIDATIONRESULT_VALID', 0);
define('CADESVERIFIER_TIMESTAMPVALIDATIONRESULT_UNKNOWN', 1);
define('CADESVERIFIER_TIMESTAMPVALIDATIONRESULT_CORRUPTED', 2);
define('CADESVERIFIER_TIMESTAMPVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('CADESVERIFIER_TIMESTAMPVALIDATIONRESULT_FAILURE', 4);

define('CADESVERIFIER_TLSBASECONFIGURATION_DEFAULT', 0);
define('CADESVERIFIER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('CADESVERIFIER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('CADESVERIFIER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('CADESVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('CADESVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('CADESVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('CADESVERIFIER_TLSREVOCATIONCHECK_NONE', 0);
define('CADESVERIFIER_TLSREVOCATIONCHECK_AUTO', 1);
define('CADESVERIFIER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('CADESVERIFIER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('CADESVERIFIER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('CADESVERIFIER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('CADESVERIFIER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('CADESVERIFIER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('CADESVERIFIER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('CADESVERIFIER_TLSTLSMODE_DEFAULT', 0);
define('CADESVERIFIER_TLSTLSMODE_NO_TLS', 1);
define('CADESVERIFIER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('CADESVERIFIER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * CAdESVerifier Methods
 */

define('CADESVERIFIER_CONFIG_MID', 2);
define('CADESVERIFIER_VERIFY_MID', 3);
define('CADESVERIFIER_VERIFYDETACHED_MID', 4);


/*
 * CAdESVerifier Events
 */
  
define('CADESVERIFIER_CHAINVALIDATED_EID', 1);
define('CADESVERIFIER_COUNTERSIGNATUREFOUND_EID', 2);
define('CADESVERIFIER_COUNTERSIGNATUREVALIDATED_EID', 3);
define('CADESVERIFIER_ERROR_EID', 4);
define('CADESVERIFIER_SIGNATUREFOUND_EID', 5);
define('CADESVERIFIER_SIGNATUREVALIDATED_EID', 6);
define('CADESVERIFIER_TIMESTAMPFOUND_EID', 7);
define('CADESVERIFIER_TIMESTAMPVALIDATED_EID', 8);

/*
 * CertificateManager Properties
 */

define('CERTIFICATEMANAGER_CACERTBYTES_PID', 1);
define('CERTIFICATEMANAGER_CACERTHANDLE_PID', 2);
define('CERTIFICATEMANAGER_CERTBYTES_PID', 3);
define('CERTIFICATEMANAGER_CERTCA_PID', 4);
define('CERTIFICATEMANAGER_CERTCAKEYID_PID', 5);
define('CERTIFICATEMANAGER_CERTCRLDISTRIBUTIONPOINTS_PID', 6);
define('CERTIFICATEMANAGER_CERTCURVE_PID', 7);
define('CERTIFICATEMANAGER_CERTFINGERPRINT_PID', 8);
define('CERTIFICATEMANAGER_CERTFRIENDLYNAME_PID', 9);
define('CERTIFICATEMANAGER_CERTHANDLE_PID', 10);
define('CERTIFICATEMANAGER_CERTHASHALGORITHM_PID', 11);
define('CERTIFICATEMANAGER_CERTISSUER_PID', 12);
define('CERTIFICATEMANAGER_CERTISSUERRDN_PID', 13);
define('CERTIFICATEMANAGER_CERTKEYALGORITHM_PID', 14);
define('CERTIFICATEMANAGER_CERTKEYBITS_PID', 15);
define('CERTIFICATEMANAGER_CERTKEYFINGERPRINT_PID', 16);
define('CERTIFICATEMANAGER_CERTKEYUSAGE_PID', 17);
define('CERTIFICATEMANAGER_CERTKEYVALID_PID', 18);
define('CERTIFICATEMANAGER_CERTOCSPLOCATIONS_PID', 19);
define('CERTIFICATEMANAGER_CERTORIGIN_PID', 20);
define('CERTIFICATEMANAGER_CERTPOLICYIDS_PID', 21);
define('CERTIFICATEMANAGER_CERTPRIVATEKEYBYTES_PID', 22);
define('CERTIFICATEMANAGER_CERTPRIVATEKEYEXISTS_PID', 23);
define('CERTIFICATEMANAGER_CERTPRIVATEKEYEXTRACTABLE_PID', 24);
define('CERTIFICATEMANAGER_CERTPUBLICKEYBYTES_PID', 25);
define('CERTIFICATEMANAGER_CERTSELFSIGNED_PID', 26);
define('CERTIFICATEMANAGER_CERTSERIALNUMBER_PID', 27);
define('CERTIFICATEMANAGER_CERTSIGALGORITHM_PID', 28);
define('CERTIFICATEMANAGER_CERTSUBJECT_PID', 29);
define('CERTIFICATEMANAGER_CERTSUBJECTKEYID_PID', 30);
define('CERTIFICATEMANAGER_CERTSUBJECTRDN_PID', 31);
define('CERTIFICATEMANAGER_CERTVALIDFROM_PID', 32);
define('CERTIFICATEMANAGER_CERTVALIDTO_PID', 33);
define('CERTIFICATEMANAGER_CERTREQUESTBYTES_PID', 34);
define('CERTIFICATEMANAGER_CERTREQUESTCURVE_PID', 35);
define('CERTIFICATEMANAGER_CERTREQUESTHANDLE_PID', 36);
define('CERTIFICATEMANAGER_CERTREQUESTHASHALGORITHM_PID', 37);
define('CERTIFICATEMANAGER_CERTREQUESTKEYALGORITHM_PID', 38);
define('CERTIFICATEMANAGER_CERTREQUESTKEYBITS_PID', 39);
define('CERTIFICATEMANAGER_CERTREQUESTKEYUSAGE_PID', 40);
define('CERTIFICATEMANAGER_CERTREQUESTKEYVALID_PID', 41);
define('CERTIFICATEMANAGER_CERTREQUESTPRIVATEKEYBYTES_PID', 42);
define('CERTIFICATEMANAGER_CERTREQUESTPUBLICKEYBYTES_PID', 43);
define('CERTIFICATEMANAGER_CERTREQUESTSIGALGORITHM_PID', 44);
define('CERTIFICATEMANAGER_CERTREQUESTSUBJECT_PID', 45);
define('CERTIFICATEMANAGER_CERTREQUESTSUBJECTRDN_PID', 46);
define('CERTIFICATEMANAGER_CERTREQUESTVALID_PID', 47);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 48);
define('CERTIFICATEMANAGER_EXTERNALCRYPTODATA_PID', 49);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 50);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOHASHALGORITHM_PID', 51);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOKEYID_PID', 52);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOKEYSECRET_PID', 53);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOMETHOD_PID', 54);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOMODE_PID', 55);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 56);


/*
 * CertificateManager Enums
 */

define('CERTIFICATEMANAGER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('CERTIFICATEMANAGER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('CERTIFICATEMANAGER_EXTERNALCRYPTOMODE_GENERIC', 2);



/*
 * CertificateManager Methods
 */

define('CERTIFICATEMANAGER_CONFIG_MID', 2);
define('CERTIFICATEMANAGER_DOWNLOAD_MID', 3);
define('CERTIFICATEMANAGER_EXPORTCERT_MID', 4);
define('CERTIFICATEMANAGER_EXPORTCSR_MID', 5);
define('CERTIFICATEMANAGER_EXPORTKEY_MID', 6);
define('CERTIFICATEMANAGER_EXPORTKEYTOFILE_MID', 7);
define('CERTIFICATEMANAGER_EXPORTTOFILE_MID', 9);
define('CERTIFICATEMANAGER_GENERATE_MID', 11);
define('CERTIFICATEMANAGER_GENERATEASYNCBEGIN_MID', 12);
define('CERTIFICATEMANAGER_GENERATEASYNCEND_MID', 13);
define('CERTIFICATEMANAGER_GENERATECSR_MID', 14);
define('CERTIFICATEMANAGER_GENERATEEXTERNAL_MID', 15);
define('CERTIFICATEMANAGER_GETSAMPLECERT_MID', 16);
define('CERTIFICATEMANAGER_IMPORTFROMFILE_MID', 17);
define('CERTIFICATEMANAGER_IMPORTKEY_MID', 19);
define('CERTIFICATEMANAGER_IMPORTKEYFROMFILE_MID', 20);
define('CERTIFICATEMANAGER_UPDATE_MID', 22);
define('CERTIFICATEMANAGER_VALIDATE_MID', 23);


/*
 * CertificateManager Events
 */
  
define('CERTIFICATEMANAGER_ERROR_EID', 1);
define('CERTIFICATEMANAGER_EXTERNALSIGN_EID', 2);
define('CERTIFICATEMANAGER_PASSWORDNEEDED_EID', 3);

/*
 * CertificateStorage Properties
 */

define('CERTIFICATESTORAGE_CERTCOUNT_PID', 1);
define('CERTIFICATESTORAGE_CERTBYTES_PID', 2);
define('CERTIFICATESTORAGE_CERTCA_PID', 3);
define('CERTIFICATESTORAGE_CERTCAKEYID_PID', 4);
define('CERTIFICATESTORAGE_CERTCRLDISTRIBUTIONPOINTS_PID', 5);
define('CERTIFICATESTORAGE_CERTCURVE_PID', 6);
define('CERTIFICATESTORAGE_CERTFINGERPRINT_PID', 7);
define('CERTIFICATESTORAGE_CERTFRIENDLYNAME_PID', 8);
define('CERTIFICATESTORAGE_CERTHANDLE_PID', 9);
define('CERTIFICATESTORAGE_CERTHASHALGORITHM_PID', 10);
define('CERTIFICATESTORAGE_CERTISSUER_PID', 11);
define('CERTIFICATESTORAGE_CERTISSUERRDN_PID', 12);
define('CERTIFICATESTORAGE_CERTKEYALGORITHM_PID', 13);
define('CERTIFICATESTORAGE_CERTKEYBITS_PID', 14);
define('CERTIFICATESTORAGE_CERTKEYFINGERPRINT_PID', 15);
define('CERTIFICATESTORAGE_CERTKEYUSAGE_PID', 16);
define('CERTIFICATESTORAGE_CERTKEYVALID_PID', 17);
define('CERTIFICATESTORAGE_CERTOCSPLOCATIONS_PID', 18);
define('CERTIFICATESTORAGE_CERTORIGIN_PID', 19);
define('CERTIFICATESTORAGE_CERTPOLICYIDS_PID', 20);
define('CERTIFICATESTORAGE_CERTPRIVATEKEYBYTES_PID', 21);
define('CERTIFICATESTORAGE_CERTPRIVATEKEYEXISTS_PID', 22);
define('CERTIFICATESTORAGE_CERTPRIVATEKEYEXTRACTABLE_PID', 23);
define('CERTIFICATESTORAGE_CERTPUBLICKEYBYTES_PID', 24);
define('CERTIFICATESTORAGE_CERTSELFSIGNED_PID', 25);
define('CERTIFICATESTORAGE_CERTSERIALNUMBER_PID', 26);
define('CERTIFICATESTORAGE_CERTSIGALGORITHM_PID', 27);
define('CERTIFICATESTORAGE_CERTSUBJECT_PID', 28);
define('CERTIFICATESTORAGE_CERTSUBJECTKEYID_PID', 29);
define('CERTIFICATESTORAGE_CERTSUBJECTRDN_PID', 30);
define('CERTIFICATESTORAGE_CERTVALIDFROM_PID', 31);
define('CERTIFICATESTORAGE_CERTVALIDTO_PID', 32);
define('CERTIFICATESTORAGE_OPENED_PID', 33);
define('CERTIFICATESTORAGE_PINNEDCERTBYTES_PID', 34);
define('CERTIFICATESTORAGE_PINNEDCERTHANDLE_PID', 35);
define('CERTIFICATESTORAGE_SELECTEDCERTCOUNT_PID', 36);
define('CERTIFICATESTORAGE_SELECTEDCERTBYTES_PID', 37);
define('CERTIFICATESTORAGE_SELECTEDCERTCA_PID', 38);
define('CERTIFICATESTORAGE_SELECTEDCERTCAKEYID_PID', 39);
define('CERTIFICATESTORAGE_SELECTEDCERTCRLDISTRIBUTIONPOINTS_PID', 40);
define('CERTIFICATESTORAGE_SELECTEDCERTCURVE_PID', 41);
define('CERTIFICATESTORAGE_SELECTEDCERTFINGERPRINT_PID', 42);
define('CERTIFICATESTORAGE_SELECTEDCERTFRIENDLYNAME_PID', 43);
define('CERTIFICATESTORAGE_SELECTEDCERTHANDLE_PID', 44);
define('CERTIFICATESTORAGE_SELECTEDCERTHASHALGORITHM_PID', 45);
define('CERTIFICATESTORAGE_SELECTEDCERTISSUER_PID', 46);
define('CERTIFICATESTORAGE_SELECTEDCERTISSUERRDN_PID', 47);
define('CERTIFICATESTORAGE_SELECTEDCERTKEYALGORITHM_PID', 48);
define('CERTIFICATESTORAGE_SELECTEDCERTKEYBITS_PID', 49);
define('CERTIFICATESTORAGE_SELECTEDCERTKEYFINGERPRINT_PID', 50);
define('CERTIFICATESTORAGE_SELECTEDCERTKEYUSAGE_PID', 51);
define('CERTIFICATESTORAGE_SELECTEDCERTKEYVALID_PID', 52);
define('CERTIFICATESTORAGE_SELECTEDCERTOCSPLOCATIONS_PID', 53);
define('CERTIFICATESTORAGE_SELECTEDCERTORIGIN_PID', 54);
define('CERTIFICATESTORAGE_SELECTEDCERTPOLICYIDS_PID', 55);
define('CERTIFICATESTORAGE_SELECTEDCERTPRIVATEKEYBYTES_PID', 56);
define('CERTIFICATESTORAGE_SELECTEDCERTPRIVATEKEYEXISTS_PID', 57);
define('CERTIFICATESTORAGE_SELECTEDCERTPRIVATEKEYEXTRACTABLE_PID', 58);
define('CERTIFICATESTORAGE_SELECTEDCERTPUBLICKEYBYTES_PID', 59);
define('CERTIFICATESTORAGE_SELECTEDCERTSELFSIGNED_PID', 60);
define('CERTIFICATESTORAGE_SELECTEDCERTSERIALNUMBER_PID', 61);
define('CERTIFICATESTORAGE_SELECTEDCERTSIGALGORITHM_PID', 62);
define('CERTIFICATESTORAGE_SELECTEDCERTSUBJECT_PID', 63);
define('CERTIFICATESTORAGE_SELECTEDCERTSUBJECTKEYID_PID', 64);
define('CERTIFICATESTORAGE_SELECTEDCERTSUBJECTRDN_PID', 65);
define('CERTIFICATESTORAGE_SELECTEDCERTVALIDFROM_PID', 66);
define('CERTIFICATESTORAGE_SELECTEDCERTVALIDTO_PID', 67);
define('CERTIFICATESTORAGE_STORAGEID_PID', 68);
define('CERTIFICATESTORAGE_STORAGELOCATION_PID', 69);


/*
 * CertificateStorage Enums
 */



/*
 * CertificateStorage Methods
 */

define('CERTIFICATESTORAGE_ADD_MID', 2);
define('CERTIFICATESTORAGE_ADDFROMFILE_MID', 3);
define('CERTIFICATESTORAGE_ADDPINNED_MID', 5);
define('CERTIFICATESTORAGE_CLEAR_MID', 6);
define('CERTIFICATESTORAGE_CLOSE_MID', 7);
define('CERTIFICATESTORAGE_CONFIG_MID', 8);
define('CERTIFICATESTORAGE_CREATENEW_MID', 9);
define('CERTIFICATESTORAGE_OPEN_MID', 10);
define('CERTIFICATESTORAGE_REFRESH_MID', 11);
define('CERTIFICATESTORAGE_REMOVE_MID', 12);
define('CERTIFICATESTORAGE_SELECT_MID', 13);
define('CERTIFICATESTORAGE_SELECTCHAIN_MID', 14);


/*
 * CertificateStorage Events
 */
  
define('CERTIFICATESTORAGE_ERROR_EID', 1);
define('CERTIFICATESTORAGE_PASSWORDNEEDED_EID', 2);

/*
 * CertificateValidator Properties
 */

define('CERTIFICATEVALIDATOR_BLOCKEDCERTCOUNT_PID', 1);
define('CERTIFICATEVALIDATOR_BLOCKEDCERTBYTES_PID', 2);
define('CERTIFICATEVALIDATOR_BLOCKEDCERTHANDLE_PID', 3);
define('CERTIFICATEVALIDATOR_CACHEVALIDATIONRESULTS_PID', 4);
define('CERTIFICATEVALIDATOR_CERTBYTES_PID', 5);
define('CERTIFICATEVALIDATOR_CERTHANDLE_PID', 6);
define('CERTIFICATEVALIDATOR_CHAINVALIDATIONDETAILS_PID', 7);
define('CERTIFICATEVALIDATOR_CHAINVALIDATIONRESULT_PID', 8);
define('CERTIFICATEVALIDATOR_CURRENTCACERTBYTES_PID', 9);
define('CERTIFICATEVALIDATOR_CURRENTCACERTCA_PID', 10);
define('CERTIFICATEVALIDATOR_CURRENTCACERTCAKEYID_PID', 11);
define('CERTIFICATEVALIDATOR_CURRENTCACERTCRLDISTRIBUTIONPOINTS_PID', 12);
define('CERTIFICATEVALIDATOR_CURRENTCACERTCURVE_PID', 13);
define('CERTIFICATEVALIDATOR_CURRENTCACERTFINGERPRINT_PID', 14);
define('CERTIFICATEVALIDATOR_CURRENTCACERTFRIENDLYNAME_PID', 15);
define('CERTIFICATEVALIDATOR_CURRENTCACERTHANDLE_PID', 16);
define('CERTIFICATEVALIDATOR_CURRENTCACERTHASHALGORITHM_PID', 17);
define('CERTIFICATEVALIDATOR_CURRENTCACERTISSUER_PID', 18);
define('CERTIFICATEVALIDATOR_CURRENTCACERTISSUERRDN_PID', 19);
define('CERTIFICATEVALIDATOR_CURRENTCACERTKEYALGORITHM_PID', 20);
define('CERTIFICATEVALIDATOR_CURRENTCACERTKEYBITS_PID', 21);
define('CERTIFICATEVALIDATOR_CURRENTCACERTKEYFINGERPRINT_PID', 22);
define('CERTIFICATEVALIDATOR_CURRENTCACERTKEYUSAGE_PID', 23);
define('CERTIFICATEVALIDATOR_CURRENTCACERTKEYVALID_PID', 24);
define('CERTIFICATEVALIDATOR_CURRENTCACERTOCSPLOCATIONS_PID', 25);
define('CERTIFICATEVALIDATOR_CURRENTCACERTORIGIN_PID', 26);
define('CERTIFICATEVALIDATOR_CURRENTCACERTPOLICYIDS_PID', 27);
define('CERTIFICATEVALIDATOR_CURRENTCACERTPRIVATEKEYBYTES_PID', 28);
define('CERTIFICATEVALIDATOR_CURRENTCACERTPRIVATEKEYEXISTS_PID', 29);
define('CERTIFICATEVALIDATOR_CURRENTCACERTPRIVATEKEYEXTRACTABLE_PID', 30);
define('CERTIFICATEVALIDATOR_CURRENTCACERTPUBLICKEYBYTES_PID', 31);
define('CERTIFICATEVALIDATOR_CURRENTCACERTSELFSIGNED_PID', 32);
define('CERTIFICATEVALIDATOR_CURRENTCACERTSERIALNUMBER_PID', 33);
define('CERTIFICATEVALIDATOR_CURRENTCACERTSIGALGORITHM_PID', 34);
define('CERTIFICATEVALIDATOR_CURRENTCACERTSUBJECT_PID', 35);
define('CERTIFICATEVALIDATOR_CURRENTCACERTSUBJECTKEYID_PID', 36);
define('CERTIFICATEVALIDATOR_CURRENTCACERTSUBJECTRDN_PID', 37);
define('CERTIFICATEVALIDATOR_CURRENTCACERTVALIDFROM_PID', 38);
define('CERTIFICATEVALIDATOR_CURRENTCACERTVALIDTO_PID', 39);
define('CERTIFICATEVALIDATOR_CURRENTCERTBYTES_PID', 40);
define('CERTIFICATEVALIDATOR_CURRENTCERTCA_PID', 41);
define('CERTIFICATEVALIDATOR_CURRENTCERTCAKEYID_PID', 42);
define('CERTIFICATEVALIDATOR_CURRENTCERTCRLDISTRIBUTIONPOINTS_PID', 43);
define('CERTIFICATEVALIDATOR_CURRENTCERTCURVE_PID', 44);
define('CERTIFICATEVALIDATOR_CURRENTCERTFINGERPRINT_PID', 45);
define('CERTIFICATEVALIDATOR_CURRENTCERTFRIENDLYNAME_PID', 46);
define('CERTIFICATEVALIDATOR_CURRENTCERTHANDLE_PID', 47);
define('CERTIFICATEVALIDATOR_CURRENTCERTHASHALGORITHM_PID', 48);
define('CERTIFICATEVALIDATOR_CURRENTCERTISSUER_PID', 49);
define('CERTIFICATEVALIDATOR_CURRENTCERTISSUERRDN_PID', 50);
define('CERTIFICATEVALIDATOR_CURRENTCERTKEYALGORITHM_PID', 51);
define('CERTIFICATEVALIDATOR_CURRENTCERTKEYBITS_PID', 52);
define('CERTIFICATEVALIDATOR_CURRENTCERTKEYFINGERPRINT_PID', 53);
define('CERTIFICATEVALIDATOR_CURRENTCERTKEYUSAGE_PID', 54);
define('CERTIFICATEVALIDATOR_CURRENTCERTKEYVALID_PID', 55);
define('CERTIFICATEVALIDATOR_CURRENTCERTOCSPLOCATIONS_PID', 56);
define('CERTIFICATEVALIDATOR_CURRENTCERTORIGIN_PID', 57);
define('CERTIFICATEVALIDATOR_CURRENTCERTPOLICYIDS_PID', 58);
define('CERTIFICATEVALIDATOR_CURRENTCERTPRIVATEKEYBYTES_PID', 59);
define('CERTIFICATEVALIDATOR_CURRENTCERTPRIVATEKEYEXISTS_PID', 60);
define('CERTIFICATEVALIDATOR_CURRENTCERTPRIVATEKEYEXTRACTABLE_PID', 61);
define('CERTIFICATEVALIDATOR_CURRENTCERTPUBLICKEYBYTES_PID', 62);
define('CERTIFICATEVALIDATOR_CURRENTCERTSELFSIGNED_PID', 63);
define('CERTIFICATEVALIDATOR_CURRENTCERTSERIALNUMBER_PID', 64);
define('CERTIFICATEVALIDATOR_CURRENTCERTSIGALGORITHM_PID', 65);
define('CERTIFICATEVALIDATOR_CURRENTCERTSUBJECT_PID', 66);
define('CERTIFICATEVALIDATOR_CURRENTCERTSUBJECTKEYID_PID', 67);
define('CERTIFICATEVALIDATOR_CURRENTCERTSUBJECTRDN_PID', 68);
define('CERTIFICATEVALIDATOR_CURRENTCERTVALIDFROM_PID', 69);
define('CERTIFICATEVALIDATOR_CURRENTCERTVALIDTO_PID', 70);
define('CERTIFICATEVALIDATOR_GRACEPERIOD_PID', 71);
define('CERTIFICATEVALIDATOR_INTERIMVALIDATIONDETAILS_PID', 72);
define('CERTIFICATEVALIDATOR_INTERIMVALIDATIONRESULT_PID', 73);
define('CERTIFICATEVALIDATOR_KNOWNCERTCOUNT_PID', 74);
define('CERTIFICATEVALIDATOR_KNOWNCERTBYTES_PID', 75);
define('CERTIFICATEVALIDATOR_KNOWNCERTHANDLE_PID', 76);
define('CERTIFICATEVALIDATOR_KNOWNCRLCOUNT_PID', 77);
define('CERTIFICATEVALIDATOR_KNOWNCRLBYTES_PID', 78);
define('CERTIFICATEVALIDATOR_KNOWNCRLHANDLE_PID', 79);
define('CERTIFICATEVALIDATOR_KNOWNOCSPCOUNT_PID', 80);
define('CERTIFICATEVALIDATOR_KNOWNOCSPBYTES_PID', 81);
define('CERTIFICATEVALIDATOR_KNOWNOCSPHANDLE_PID', 82);
define('CERTIFICATEVALIDATOR_MAXVALIDATIONTIME_PID', 83);
define('CERTIFICATEVALIDATOR_OFFLINEMODE_PID', 84);
define('CERTIFICATEVALIDATOR_PROXYADDRESS_PID', 85);
define('CERTIFICATEVALIDATOR_PROXYAUTHENTICATION_PID', 86);
define('CERTIFICATEVALIDATOR_PROXYPASSWORD_PID', 87);
define('CERTIFICATEVALIDATOR_PROXYPORT_PID', 88);
define('CERTIFICATEVALIDATOR_PROXYPROXYTYPE_PID', 89);
define('CERTIFICATEVALIDATOR_PROXYREQUESTHEADERS_PID', 90);
define('CERTIFICATEVALIDATOR_PROXYRESPONSEBODY_PID', 91);
define('CERTIFICATEVALIDATOR_PROXYRESPONSEHEADERS_PID', 92);
define('CERTIFICATEVALIDATOR_PROXYUSEIPV6_PID', 93);
define('CERTIFICATEVALIDATOR_PROXYUSEPROXY_PID', 94);
define('CERTIFICATEVALIDATOR_PROXYUSERNAME_PID', 95);
define('CERTIFICATEVALIDATOR_QUALIFIED_PID', 96);
define('CERTIFICATEVALIDATOR_REVOCATIONCHECK_PID', 97);
define('CERTIFICATEVALIDATOR_SOCKETDNSMODE_PID', 98);
define('CERTIFICATEVALIDATOR_SOCKETDNSPORT_PID', 99);
define('CERTIFICATEVALIDATOR_SOCKETDNSQUERYTIMEOUT_PID', 100);
define('CERTIFICATEVALIDATOR_SOCKETDNSSERVERS_PID', 101);
define('CERTIFICATEVALIDATOR_SOCKETDNSTOTALTIMEOUT_PID', 102);
define('CERTIFICATEVALIDATOR_SOCKETINCOMINGSPEEDLIMIT_PID', 103);
define('CERTIFICATEVALIDATOR_SOCKETLOCALADDRESS_PID', 104);
define('CERTIFICATEVALIDATOR_SOCKETLOCALPORT_PID', 105);
define('CERTIFICATEVALIDATOR_SOCKETOUTGOINGSPEEDLIMIT_PID', 106);
define('CERTIFICATEVALIDATOR_SOCKETTIMEOUT_PID', 107);
define('CERTIFICATEVALIDATOR_SOCKETUSEIPV6_PID', 108);
define('CERTIFICATEVALIDATOR_TLSAUTOVALIDATECERTIFICATES_PID', 109);
define('CERTIFICATEVALIDATOR_TLSBASECONFIGURATION_PID', 110);
define('CERTIFICATEVALIDATOR_TLSCIPHERSUITES_PID', 111);
define('CERTIFICATEVALIDATOR_TLSECCURVES_PID', 112);
define('CERTIFICATEVALIDATOR_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 113);
define('CERTIFICATEVALIDATOR_TLSPRESHAREDIDENTITY_PID', 114);
define('CERTIFICATEVALIDATOR_TLSPRESHAREDKEY_PID', 115);
define('CERTIFICATEVALIDATOR_TLSPRESHAREDKEYCIPHERSUITE_PID', 116);
define('CERTIFICATEVALIDATOR_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 117);
define('CERTIFICATEVALIDATOR_TLSREVOCATIONCHECK_PID', 118);
define('CERTIFICATEVALIDATOR_TLSSSLOPTIONS_PID', 119);
define('CERTIFICATEVALIDATOR_TLSTLSMODE_PID', 120);
define('CERTIFICATEVALIDATOR_TLSUSEEXTENDEDMASTERSECRET_PID', 121);
define('CERTIFICATEVALIDATOR_TLSUSESESSIONRESUMPTION_PID', 122);
define('CERTIFICATEVALIDATOR_TLSVERSIONS_PID', 123);
define('CERTIFICATEVALIDATOR_TRUSTEDCERTCOUNT_PID', 124);
define('CERTIFICATEVALIDATOR_TRUSTEDCERTBYTES_PID', 125);
define('CERTIFICATEVALIDATOR_TRUSTEDCERTHANDLE_PID', 126);
define('CERTIFICATEVALIDATOR_USEDCERTCOUNT_PID', 127);
define('CERTIFICATEVALIDATOR_USEDCERTBYTES_PID', 128);
define('CERTIFICATEVALIDATOR_USEDCERTCA_PID', 129);
define('CERTIFICATEVALIDATOR_USEDCERTCAKEYID_PID', 130);
define('CERTIFICATEVALIDATOR_USEDCERTCRLDISTRIBUTIONPOINTS_PID', 131);
define('CERTIFICATEVALIDATOR_USEDCERTCURVE_PID', 132);
define('CERTIFICATEVALIDATOR_USEDCERTFINGERPRINT_PID', 133);
define('CERTIFICATEVALIDATOR_USEDCERTFRIENDLYNAME_PID', 134);
define('CERTIFICATEVALIDATOR_USEDCERTHANDLE_PID', 135);
define('CERTIFICATEVALIDATOR_USEDCERTHASHALGORITHM_PID', 136);
define('CERTIFICATEVALIDATOR_USEDCERTISSUER_PID', 137);
define('CERTIFICATEVALIDATOR_USEDCERTISSUERRDN_PID', 138);
define('CERTIFICATEVALIDATOR_USEDCERTKEYALGORITHM_PID', 139);
define('CERTIFICATEVALIDATOR_USEDCERTKEYBITS_PID', 140);
define('CERTIFICATEVALIDATOR_USEDCERTKEYFINGERPRINT_PID', 141);
define('CERTIFICATEVALIDATOR_USEDCERTKEYUSAGE_PID', 142);
define('CERTIFICATEVALIDATOR_USEDCERTKEYVALID_PID', 143);
define('CERTIFICATEVALIDATOR_USEDCERTOCSPLOCATIONS_PID', 144);
define('CERTIFICATEVALIDATOR_USEDCERTORIGIN_PID', 145);
define('CERTIFICATEVALIDATOR_USEDCERTPOLICYIDS_PID', 146);
define('CERTIFICATEVALIDATOR_USEDCERTPRIVATEKEYBYTES_PID', 147);
define('CERTIFICATEVALIDATOR_USEDCERTPRIVATEKEYEXISTS_PID', 148);
define('CERTIFICATEVALIDATOR_USEDCERTPRIVATEKEYEXTRACTABLE_PID', 149);
define('CERTIFICATEVALIDATOR_USEDCERTPUBLICKEYBYTES_PID', 150);
define('CERTIFICATEVALIDATOR_USEDCERTSELFSIGNED_PID', 151);
define('CERTIFICATEVALIDATOR_USEDCERTSERIALNUMBER_PID', 152);
define('CERTIFICATEVALIDATOR_USEDCERTSIGALGORITHM_PID', 153);
define('CERTIFICATEVALIDATOR_USEDCERTSUBJECT_PID', 154);
define('CERTIFICATEVALIDATOR_USEDCERTSUBJECTKEYID_PID', 155);
define('CERTIFICATEVALIDATOR_USEDCERTSUBJECTRDN_PID', 156);
define('CERTIFICATEVALIDATOR_USEDCERTVALIDFROM_PID', 157);
define('CERTIFICATEVALIDATOR_USEDCERTVALIDTO_PID', 158);
define('CERTIFICATEVALIDATOR_USEDCRLCOUNT_PID', 159);
define('CERTIFICATEVALIDATOR_USEDCRLBYTES_PID', 160);
define('CERTIFICATEVALIDATOR_USEDCRLHANDLE_PID', 161);
define('CERTIFICATEVALIDATOR_USEDCRLISSUER_PID', 162);
define('CERTIFICATEVALIDATOR_USEDCRLISSUERRDN_PID', 163);
define('CERTIFICATEVALIDATOR_USEDCRLLOCATION_PID', 164);
define('CERTIFICATEVALIDATOR_USEDCRLNEXTUPDATE_PID', 165);
define('CERTIFICATEVALIDATOR_USEDCRLTHISUPDATE_PID', 166);
define('CERTIFICATEVALIDATOR_USEDEFAULTTSLS_PID', 167);
define('CERTIFICATEVALIDATOR_USEDOCSPCOUNT_PID', 168);
define('CERTIFICATEVALIDATOR_USEDOCSPBYTES_PID', 169);
define('CERTIFICATEVALIDATOR_USEDOCSPHANDLE_PID', 170);
define('CERTIFICATEVALIDATOR_USEDOCSPISSUER_PID', 171);
define('CERTIFICATEVALIDATOR_USEDOCSPISSUERRDN_PID', 172);
define('CERTIFICATEVALIDATOR_USEDOCSPLOCATION_PID', 173);
define('CERTIFICATEVALIDATOR_USEDOCSPPRODUCEDAT_PID', 174);
define('CERTIFICATEVALIDATOR_USESYSTEMCERTIFICATES_PID', 175);
define('CERTIFICATEVALIDATOR_VALIDATIONLOG_PID', 176);
define('CERTIFICATEVALIDATOR_VALIDATIONMOMENT_PID', 177);


/*
 * CertificateValidator Enums
 */

define('CERTIFICATEVALIDATOR_CHAINVALIDATIONRESULT_VALID', 0);
define('CERTIFICATEVALIDATOR_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('CERTIFICATEVALIDATOR_CHAINVALIDATIONRESULT_INVALID', 2);
define('CERTIFICATEVALIDATOR_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('CERTIFICATEVALIDATOR_INTERIMVALIDATIONRESULT_VALID', 0);
define('CERTIFICATEVALIDATOR_INTERIMVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('CERTIFICATEVALIDATOR_INTERIMVALIDATIONRESULT_INVALID', 2);
define('CERTIFICATEVALIDATOR_INTERIMVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('CERTIFICATEVALIDATOR_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('CERTIFICATEVALIDATOR_PROXYAUTHENTICATION_BASIC', 1);
define('CERTIFICATEVALIDATOR_PROXYAUTHENTICATION_DIGEST', 2);
define('CERTIFICATEVALIDATOR_PROXYAUTHENTICATION_NTLM', 3);

define('CERTIFICATEVALIDATOR_PROXYPROXYTYPE_NONE', 0);
define('CERTIFICATEVALIDATOR_PROXYPROXYTYPE_SOCKS_4', 1);
define('CERTIFICATEVALIDATOR_PROXYPROXYTYPE_SOCKS_5', 2);
define('CERTIFICATEVALIDATOR_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('CERTIFICATEVALIDATOR_PROXYPROXYTYPE_HTTP', 4);

define('CERTIFICATEVALIDATOR_QUALIFIED_UNKNOWN', 0);
define('CERTIFICATEVALIDATOR_QUALIFIED_NONE', 1);
define('CERTIFICATEVALIDATOR_QUALIFIED_GRANTED', 2);
define('CERTIFICATEVALIDATOR_QUALIFIED_WITHDRAWN', 3);
define('CERTIFICATEVALIDATOR_QUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('CERTIFICATEVALIDATOR_QUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('CERTIFICATEVALIDATOR_QUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('CERTIFICATEVALIDATOR_QUALIFIED_UNDER_SUPERVISION', 7);
define('CERTIFICATEVALIDATOR_QUALIFIED_SUPERVISION_INCESSATION', 8);
define('CERTIFICATEVALIDATOR_QUALIFIED_SUPERVISION_CEASED', 9);
define('CERTIFICATEVALIDATOR_QUALIFIED_SUPERVISION_REVOKED', 10);
define('CERTIFICATEVALIDATOR_QUALIFIED_ACCREDITED', 11);
define('CERTIFICATEVALIDATOR_QUALIFIED_ACCREDITION_CEASED', 12);
define('CERTIFICATEVALIDATOR_QUALIFIED_ACCREDITION_REVOKED', 13);

define('CERTIFICATEVALIDATOR_REVOCATIONCHECK_NONE', 0);
define('CERTIFICATEVALIDATOR_REVOCATIONCHECK_AUTO', 1);
define('CERTIFICATEVALIDATOR_REVOCATIONCHECK_ALL_CRL', 2);
define('CERTIFICATEVALIDATOR_REVOCATIONCHECK_ALL_OCSP', 3);
define('CERTIFICATEVALIDATOR_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('CERTIFICATEVALIDATOR_REVOCATIONCHECK_ANY_CRL', 5);
define('CERTIFICATEVALIDATOR_REVOCATIONCHECK_ANY_OCSP', 6);
define('CERTIFICATEVALIDATOR_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('CERTIFICATEVALIDATOR_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('CERTIFICATEVALIDATOR_SOCKETDNSMODE_AUTO', 0);
define('CERTIFICATEVALIDATOR_SOCKETDNSMODE_PLATFORM', 1);
define('CERTIFICATEVALIDATOR_SOCKETDNSMODE_OWN', 2);
define('CERTIFICATEVALIDATOR_SOCKETDNSMODE_OWN_SECURE', 3);

define('CERTIFICATEVALIDATOR_TLSBASECONFIGURATION_DEFAULT', 0);
define('CERTIFICATEVALIDATOR_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('CERTIFICATEVALIDATOR_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('CERTIFICATEVALIDATOR_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('CERTIFICATEVALIDATOR_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('CERTIFICATEVALIDATOR_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('CERTIFICATEVALIDATOR_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('CERTIFICATEVALIDATOR_TLSREVOCATIONCHECK_NONE', 0);
define('CERTIFICATEVALIDATOR_TLSREVOCATIONCHECK_AUTO', 1);
define('CERTIFICATEVALIDATOR_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('CERTIFICATEVALIDATOR_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('CERTIFICATEVALIDATOR_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('CERTIFICATEVALIDATOR_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('CERTIFICATEVALIDATOR_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('CERTIFICATEVALIDATOR_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('CERTIFICATEVALIDATOR_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('CERTIFICATEVALIDATOR_TLSTLSMODE_DEFAULT', 0);
define('CERTIFICATEVALIDATOR_TLSTLSMODE_NO_TLS', 1);
define('CERTIFICATEVALIDATOR_TLSTLSMODE_EXPLICIT_TLS', 2);
define('CERTIFICATEVALIDATOR_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * CertificateValidator Methods
 */

define('CERTIFICATEVALIDATOR_CONFIG_MID', 2);
define('CERTIFICATEVALIDATOR_REFRESHCACHE_MID', 3);
define('CERTIFICATEVALIDATOR_RESETCACHE_MID', 4);
define('CERTIFICATEVALIDATOR_TERMINATE_MID', 5);
define('CERTIFICATEVALIDATOR_VALIDATE_MID', 6);
define('CERTIFICATEVALIDATOR_VALIDATEFORSMIME_MID', 7);
define('CERTIFICATEVALIDATOR_VALIDATEFORSSL_MID', 8);


/*
 * CertificateValidator Events
 */
  
define('CERTIFICATEVALIDATOR_AFTERCERTIFICATEPROCESSING_EID', 1);
define('CERTIFICATEVALIDATOR_AFTERCERTIFICATEVALIDATION_EID', 2);
define('CERTIFICATEVALIDATOR_BEFORECACERTIFICATEDOWNLOAD_EID', 3);
define('CERTIFICATEVALIDATOR_BEFORECERTIFICATEPROCESSING_EID', 4);
define('CERTIFICATEVALIDATOR_BEFORECERTIFICATEVALIDATION_EID', 5);
define('CERTIFICATEVALIDATOR_BEFORECRLDOWNLOAD_EID', 6);
define('CERTIFICATEVALIDATOR_BEFOREOCSPDOWNLOAD_EID', 7);
define('CERTIFICATEVALIDATOR_CACERTIFICATEDOWNLOADED_EID', 8);
define('CERTIFICATEVALIDATOR_CACERTIFICATENEEDED_EID', 9);
define('CERTIFICATEVALIDATOR_CRLDOWNLOADED_EID', 10);
define('CERTIFICATEVALIDATOR_CRLNEEDED_EID', 11);
define('CERTIFICATEVALIDATOR_ERROR_EID', 12);
define('CERTIFICATEVALIDATOR_OCSPDOWNLOADED_EID', 13);

/*
 * CRLManager Properties
 */

define('CRLMANAGER_CACERTBYTES_PID', 1);
define('CRLMANAGER_CACERTHANDLE_PID', 2);
define('CRLMANAGER_CRLBYTES_PID', 3);
define('CRLMANAGER_CRLCAKEYID_PID', 4);
define('CRLMANAGER_CRLENTRYCOUNT_PID', 5);
define('CRLMANAGER_CRLHANDLE_PID', 6);
define('CRLMANAGER_CRLISSUER_PID', 7);
define('CRLMANAGER_CRLISSUERRDN_PID', 8);
define('CRLMANAGER_CRLLOCATION_PID', 9);
define('CRLMANAGER_CRLNEXTUPDATE_PID', 10);
define('CRLMANAGER_CRLSIGALGORITHM_PID', 11);
define('CRLMANAGER_CRLTBS_PID', 12);
define('CRLMANAGER_CRLTHISUPDATE_PID', 13);
define('CRLMANAGER_ENTRYCOUNT_PID', 14);
define('CRLMANAGER_CRLENTRYINFOCERTSTATUS_PID', 15);
define('CRLMANAGER_CRLENTRYINFOHANDLE_PID', 16);
define('CRLMANAGER_CRLENTRYINFOREVOCATIONDATE_PID', 17);
define('CRLMANAGER_CRLENTRYINFOREVOCATIONREASON_PID', 18);
define('CRLMANAGER_CRLENTRYINFOSERIALNUMBER_PID', 19);
define('CRLMANAGER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 20);
define('CRLMANAGER_EXTERNALCRYPTODATA_PID', 21);
define('CRLMANAGER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 22);
define('CRLMANAGER_EXTERNALCRYPTOHASHALGORITHM_PID', 23);
define('CRLMANAGER_EXTERNALCRYPTOKEYID_PID', 24);
define('CRLMANAGER_EXTERNALCRYPTOKEYSECRET_PID', 25);
define('CRLMANAGER_EXTERNALCRYPTOMETHOD_PID', 26);
define('CRLMANAGER_EXTERNALCRYPTOMODE_PID', 27);
define('CRLMANAGER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 28);


/*
 * CRLManager Enums
 */

define('CRLMANAGER_CRLENTRYINFOCERTSTATUS_UNKNOWN', 0);
define('CRLMANAGER_CRLENTRYINFOCERTSTATUS_GOOD', 1);
define('CRLMANAGER_CRLENTRYINFOCERTSTATUS_REVOKED', 2);

define('CRLMANAGER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('CRLMANAGER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('CRLMANAGER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('CRLMANAGER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('CRLMANAGER_EXTERNALCRYPTOMODE_GENERIC', 2);



/*
 * CRLManager Methods
 */

define('CRLMANAGER_ADD_MID', 2);
define('CRLMANAGER_CLEAR_MID', 3);
define('CRLMANAGER_CONFIG_MID', 4);
define('CRLMANAGER_DOWNLOAD_MID', 5);
define('CRLMANAGER_GETCERTENTRYINDEX_MID', 6);
define('CRLMANAGER_LOADFROMFILE_MID', 7);
define('CRLMANAGER_REMOVE_MID', 9);
define('CRLMANAGER_SAVETOFILE_MID', 10);
define('CRLMANAGER_SELECTENTRY_MID', 12);
define('CRLMANAGER_VALIDATE_MID', 13);


/*
 * CRLManager Events
 */
  
define('CRLMANAGER_ERROR_EID', 1);
define('CRLMANAGER_EXTERNALSIGN_EID', 2);

/*
 * DCAuth Properties
 */

define('DCAUTH_CERTPASSWORD_PID', 1);
define('DCAUTH_EXTERNALCRYPTOCUSTOMPARAMS_PID', 2);
define('DCAUTH_EXTERNALCRYPTODATA_PID', 3);
define('DCAUTH_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 4);
define('DCAUTH_EXTERNALCRYPTOHASHALGORITHM_PID', 5);
define('DCAUTH_EXTERNALCRYPTOKEYID_PID', 6);
define('DCAUTH_EXTERNALCRYPTOKEYSECRET_PID', 7);
define('DCAUTH_EXTERNALCRYPTOMETHOD_PID', 8);
define('DCAUTH_EXTERNALCRYPTOMODE_PID', 9);
define('DCAUTH_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 10);
define('DCAUTH_INPUT_PID', 11);
define('DCAUTH_INPUTENCODING_PID', 12);
define('DCAUTH_KEYID_PID', 13);
define('DCAUTH_KEYSECRET_PID', 14);
define('DCAUTH_OUTPUT_PID', 15);
define('DCAUTH_OUTPUTENCODING_PID', 16);
define('DCAUTH_SIGNINGCERTIFICATE_PID', 17);
define('DCAUTH_STORAGEID_PID', 18);


/*
 * DCAuth Enums
 */

define('DCAUTH_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('DCAUTH_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('DCAUTH_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('DCAUTH_EXTERNALCRYPTOMODE_DISABLED', 1);
define('DCAUTH_EXTERNALCRYPTOMODE_GENERIC', 2);

define('DCAUTH_INPUTENCODING_NONE', 0);
define('DCAUTH_INPUTENCODING_AUTO', 1);
define('DCAUTH_INPUTENCODING_BASE_64', 2);

define('DCAUTH_OUTPUTENCODING_NONE', 0);
define('DCAUTH_OUTPUTENCODING_AUTO', 1);
define('DCAUTH_OUTPUTENCODING_BASE_64', 2);



/*
 * DCAuth Methods
 */

define('DCAUTH_CONFIG_MID', 2);
define('DCAUTH_PROCESSREQUEST_MID', 3);


/*
 * DCAuth Events
 */
  
define('DCAUTH_CUSTOMPARAMETERSRECEIVED_EID', 1);
define('DCAUTH_ERROR_EID', 2);
define('DCAUTH_EXTERNALSIGN_EID', 3);
define('DCAUTH_KEYSECRETNEEDED_EID', 4);
define('DCAUTH_PARAMETERRECEIVED_EID', 5);
define('DCAUTH_PASSWORDNEEDED_EID', 6);
define('DCAUTH_SELECTCERT_EID', 7);
define('DCAUTH_SIGNREQUEST_EID', 8);
define('DCAUTH_SIGNREQUESTCOMPLETED_EID', 9);

/*
 * FTPClient Properties
 */

define('FTPCLIENT_ADJUSTPASVADDRESS_PID', 1);
define('FTPCLIENT_BLOCKEDCERTCOUNT_PID', 2);
define('FTPCLIENT_BLOCKEDCERTBYTES_PID', 3);
define('FTPCLIENT_BLOCKEDCERTHANDLE_PID', 4);
define('FTPCLIENT_CLIENTCERTCOUNT_PID', 5);
define('FTPCLIENT_CLIENTCERTBYTES_PID', 6);
define('FTPCLIENT_CLIENTCERTHANDLE_PID', 7);
define('FTPCLIENT_CONNECTED_PID', 8);
define('FTPCLIENT_CTLCONNINFOAEADCIPHER_PID', 9);
define('FTPCLIENT_CTLCONNINFOCHAINVALIDATIONDETAILS_PID', 10);
define('FTPCLIENT_CTLCONNINFOCHAINVALIDATIONRESULT_PID', 11);
define('FTPCLIENT_CTLCONNINFOCIPHERSUITE_PID', 12);
define('FTPCLIENT_CTLCONNINFOCLIENTAUTHENTICATED_PID', 13);
define('FTPCLIENT_CTLCONNINFOCONNECTIONESTABLISHED_PID', 14);
define('FTPCLIENT_CTLCONNINFOCONNECTIONID_PID', 15);
define('FTPCLIENT_CTLCONNINFODIGESTALGORITHM_PID', 16);
define('FTPCLIENT_CTLCONNINFOENCRYPTIONALGORITHM_PID', 17);
define('FTPCLIENT_CTLCONNINFOEXPORTABLE_PID', 18);
define('FTPCLIENT_CTLCONNINFOKEYEXCHANGEALGORITHM_PID', 19);
define('FTPCLIENT_CTLCONNINFOKEYEXCHANGEKEYBITS_PID', 20);
define('FTPCLIENT_CTLCONNINFONAMEDECCURVE_PID', 21);
define('FTPCLIENT_CTLCONNINFOPFSCIPHER_PID', 22);
define('FTPCLIENT_CTLCONNINFOPRESHAREDIDENTITYHINT_PID', 23);
define('FTPCLIENT_CTLCONNINFOPUBLICKEYBITS_PID', 24);
define('FTPCLIENT_CTLCONNINFORESUMEDSESSION_PID', 25);
define('FTPCLIENT_CTLCONNINFOSECURECONNECTION_PID', 26);
define('FTPCLIENT_CTLCONNINFOSERVERAUTHENTICATED_PID', 27);
define('FTPCLIENT_CTLCONNINFOSIGNATUREALGORITHM_PID', 28);
define('FTPCLIENT_CTLCONNINFOSYMMETRICBLOCKSIZE_PID', 29);
define('FTPCLIENT_CTLCONNINFOSYMMETRICKEYBITS_PID', 30);
define('FTPCLIENT_CTLCONNINFOTOTALBYTESRECEIVED_PID', 31);
define('FTPCLIENT_CTLCONNINFOTOTALBYTESSENT_PID', 32);
define('FTPCLIENT_CTLCONNINFOVALIDATIONLOG_PID', 33);
define('FTPCLIENT_CTLCONNINFOVERSION_PID', 34);
define('FTPCLIENT_CURRLISTENTRYENTRYFORMAT_PID', 35);
define('FTPCLIENT_CURRLISTENTRYFILEDATE_PID', 36);
define('FTPCLIENT_CURRLISTENTRYFILETYPE_PID', 37);
define('FTPCLIENT_CURRLISTENTRYHANDLE_PID', 38);
define('FTPCLIENT_CURRLISTENTRYNAME_PID', 39);
define('FTPCLIENT_CURRLISTENTRYPATH_PID', 40);
define('FTPCLIENT_CURRLISTENTRYRAWDATA_PID', 41);
define('FTPCLIENT_CURRLISTENTRYSIZE_PID', 42);
define('FTPCLIENT_DATACONNINFOAEADCIPHER_PID', 43);
define('FTPCLIENT_DATACONNINFOCHAINVALIDATIONDETAILS_PID', 44);
define('FTPCLIENT_DATACONNINFOCHAINVALIDATIONRESULT_PID', 45);
define('FTPCLIENT_DATACONNINFOCIPHERSUITE_PID', 46);
define('FTPCLIENT_DATACONNINFOCLIENTAUTHENTICATED_PID', 47);
define('FTPCLIENT_DATACONNINFOCONNECTIONESTABLISHED_PID', 48);
define('FTPCLIENT_DATACONNINFOCONNECTIONID_PID', 49);
define('FTPCLIENT_DATACONNINFODIGESTALGORITHM_PID', 50);
define('FTPCLIENT_DATACONNINFOENCRYPTIONALGORITHM_PID', 51);
define('FTPCLIENT_DATACONNINFOEXPORTABLE_PID', 52);
define('FTPCLIENT_DATACONNINFOKEYEXCHANGEALGORITHM_PID', 53);
define('FTPCLIENT_DATACONNINFOKEYEXCHANGEKEYBITS_PID', 54);
define('FTPCLIENT_DATACONNINFONAMEDECCURVE_PID', 55);
define('FTPCLIENT_DATACONNINFOPFSCIPHER_PID', 56);
define('FTPCLIENT_DATACONNINFOPRESHAREDIDENTITYHINT_PID', 57);
define('FTPCLIENT_DATACONNINFOPUBLICKEYBITS_PID', 58);
define('FTPCLIENT_DATACONNINFORESUMEDSESSION_PID', 59);
define('FTPCLIENT_DATACONNINFOSECURECONNECTION_PID', 60);
define('FTPCLIENT_DATACONNINFOSERVERAUTHENTICATED_PID', 61);
define('FTPCLIENT_DATACONNINFOSIGNATUREALGORITHM_PID', 62);
define('FTPCLIENT_DATACONNINFOSYMMETRICBLOCKSIZE_PID', 63);
define('FTPCLIENT_DATACONNINFOSYMMETRICKEYBITS_PID', 64);
define('FTPCLIENT_DATACONNINFOTOTALBYTESRECEIVED_PID', 65);
define('FTPCLIENT_DATACONNINFOTOTALBYTESSENT_PID', 66);
define('FTPCLIENT_DATACONNINFOVALIDATIONLOG_PID', 67);
define('FTPCLIENT_DATACONNINFOVERSION_PID', 68);
define('FTPCLIENT_ENCRYPTDATACHANNEL_PID', 69);
define('FTPCLIENT_EXTERNALCRYPTOCUSTOMPARAMS_PID', 70);
define('FTPCLIENT_EXTERNALCRYPTODATA_PID', 71);
define('FTPCLIENT_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 72);
define('FTPCLIENT_EXTERNALCRYPTOHASHALGORITHM_PID', 73);
define('FTPCLIENT_EXTERNALCRYPTOKEYID_PID', 74);
define('FTPCLIENT_EXTERNALCRYPTOKEYSECRET_PID', 75);
define('FTPCLIENT_EXTERNALCRYPTOMETHOD_PID', 76);
define('FTPCLIENT_EXTERNALCRYPTOMODE_PID', 77);
define('FTPCLIENT_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 78);
define('FTPCLIENT_KNOWNCERTCOUNT_PID', 79);
define('FTPCLIENT_KNOWNCERTBYTES_PID', 80);
define('FTPCLIENT_KNOWNCERTHANDLE_PID', 81);
define('FTPCLIENT_KNOWNCRLCOUNT_PID', 82);
define('FTPCLIENT_KNOWNCRLBYTES_PID', 83);
define('FTPCLIENT_KNOWNCRLHANDLE_PID', 84);
define('FTPCLIENT_KNOWNOCSPCOUNT_PID', 85);
define('FTPCLIENT_KNOWNOCSPBYTES_PID', 86);
define('FTPCLIENT_KNOWNOCSPHANDLE_PID', 87);
define('FTPCLIENT_PASSIVEMODE_PID', 88);
define('FTPCLIENT_PASSWORD_PID', 89);
define('FTPCLIENT_PROXYADDRESS_PID', 90);
define('FTPCLIENT_PROXYAUTHENTICATION_PID', 91);
define('FTPCLIENT_PROXYPASSWORD_PID', 92);
define('FTPCLIENT_PROXYPORT_PID', 93);
define('FTPCLIENT_PROXYPROXYTYPE_PID', 94);
define('FTPCLIENT_PROXYREQUESTHEADERS_PID', 95);
define('FTPCLIENT_PROXYRESPONSEBODY_PID', 96);
define('FTPCLIENT_PROXYRESPONSEHEADERS_PID', 97);
define('FTPCLIENT_PROXYUSEIPV6_PID', 98);
define('FTPCLIENT_PROXYUSEPROXY_PID', 99);
define('FTPCLIENT_PROXYUSERNAME_PID', 100);
define('FTPCLIENT_RESTARTAT_PID', 101);
define('FTPCLIENT_SERVERCERTCOUNT_PID', 102);
define('FTPCLIENT_SERVERCERTBYTES_PID', 103);
define('FTPCLIENT_SERVERCERTCAKEYID_PID', 104);
define('FTPCLIENT_SERVERCERTFINGERPRINT_PID', 105);
define('FTPCLIENT_SERVERCERTHANDLE_PID', 106);
define('FTPCLIENT_SERVERCERTISSUER_PID', 107);
define('FTPCLIENT_SERVERCERTISSUERRDN_PID', 108);
define('FTPCLIENT_SERVERCERTKEYALGORITHM_PID', 109);
define('FTPCLIENT_SERVERCERTKEYBITS_PID', 110);
define('FTPCLIENT_SERVERCERTKEYFINGERPRINT_PID', 111);
define('FTPCLIENT_SERVERCERTKEYUSAGE_PID', 112);
define('FTPCLIENT_SERVERCERTPUBLICKEYBYTES_PID', 113);
define('FTPCLIENT_SERVERCERTSELFSIGNED_PID', 114);
define('FTPCLIENT_SERVERCERTSERIALNUMBER_PID', 115);
define('FTPCLIENT_SERVERCERTSIGALGORITHM_PID', 116);
define('FTPCLIENT_SERVERCERTSUBJECT_PID', 117);
define('FTPCLIENT_SERVERCERTSUBJECTKEYID_PID', 118);
define('FTPCLIENT_SERVERCERTSUBJECTRDN_PID', 119);
define('FTPCLIENT_SERVERCERTVALIDFROM_PID', 120);
define('FTPCLIENT_SERVERCERTVALIDTO_PID', 121);
define('FTPCLIENT_SOCKETDNSMODE_PID', 122);
define('FTPCLIENT_SOCKETDNSPORT_PID', 123);
define('FTPCLIENT_SOCKETDNSQUERYTIMEOUT_PID', 124);
define('FTPCLIENT_SOCKETDNSSERVERS_PID', 125);
define('FTPCLIENT_SOCKETDNSTOTALTIMEOUT_PID', 126);
define('FTPCLIENT_SOCKETINCOMINGSPEEDLIMIT_PID', 127);
define('FTPCLIENT_SOCKETLOCALADDRESS_PID', 128);
define('FTPCLIENT_SOCKETLOCALPORT_PID', 129);
define('FTPCLIENT_SOCKETOUTGOINGSPEEDLIMIT_PID', 130);
define('FTPCLIENT_SOCKETTIMEOUT_PID', 131);
define('FTPCLIENT_SOCKETUSEIPV6_PID', 132);
define('FTPCLIENT_TLSAUTOVALIDATECERTIFICATES_PID', 133);
define('FTPCLIENT_TLSBASECONFIGURATION_PID', 134);
define('FTPCLIENT_TLSCIPHERSUITES_PID', 135);
define('FTPCLIENT_TLSECCURVES_PID', 136);
define('FTPCLIENT_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 137);
define('FTPCLIENT_TLSPRESHAREDIDENTITY_PID', 138);
define('FTPCLIENT_TLSPRESHAREDKEY_PID', 139);
define('FTPCLIENT_TLSPRESHAREDKEYCIPHERSUITE_PID', 140);
define('FTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 141);
define('FTPCLIENT_TLSREVOCATIONCHECK_PID', 142);
define('FTPCLIENT_TLSSSLOPTIONS_PID', 143);
define('FTPCLIENT_TLSTLSMODE_PID', 144);
define('FTPCLIENT_TLSUSEEXTENDEDMASTERSECRET_PID', 145);
define('FTPCLIENT_TLSUSESESSIONRESUMPTION_PID', 146);
define('FTPCLIENT_TLSVERSIONS_PID', 147);
define('FTPCLIENT_TRANSFERTYPE_PID', 148);
define('FTPCLIENT_TRUSTEDCERTCOUNT_PID', 149);
define('FTPCLIENT_TRUSTEDCERTBYTES_PID', 150);
define('FTPCLIENT_TRUSTEDCERTHANDLE_PID', 151);
define('FTPCLIENT_USERNAME_PID', 152);


/*
 * FTPClient Enums
 */

define('FTPCLIENT_CTLCONNINFOCHAINVALIDATIONRESULT_VALID', 0);
define('FTPCLIENT_CTLCONNINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('FTPCLIENT_CTLCONNINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('FTPCLIENT_CTLCONNINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('FTPCLIENT_CURRLISTENTRYENTRYFORMAT_UNKNOWN', 0);
define('FTPCLIENT_CURRLISTENTRYENTRYFORMAT_UNIX', 1);
define('FTPCLIENT_CURRLISTENTRYENTRYFORMAT_WINDOWS', 2);
define('FTPCLIENT_CURRLISTENTRYENTRYFORMAT_MLSD', 3);

define('FTPCLIENT_CURRLISTENTRYFILETYPE_UNKNOWN', 0);
define('FTPCLIENT_CURRLISTENTRYFILETYPE_DIRECTORY', 1);
define('FTPCLIENT_CURRLISTENTRYFILETYPE_FILE', 2);
define('FTPCLIENT_CURRLISTENTRYFILETYPE_SYMLINK', 3);
define('FTPCLIENT_CURRLISTENTRYFILETYPE_SPECIAL', 4);
define('FTPCLIENT_CURRLISTENTRYFILETYPE_CURRENT_DIRECTORY', 5);
define('FTPCLIENT_CURRLISTENTRYFILETYPE_PARENT_DIRECTORY', 6);

define('FTPCLIENT_DATACONNINFOCHAINVALIDATIONRESULT_VALID', 0);
define('FTPCLIENT_DATACONNINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('FTPCLIENT_DATACONNINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('FTPCLIENT_DATACONNINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('FTPCLIENT_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('FTPCLIENT_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('FTPCLIENT_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('FTPCLIENT_EXTERNALCRYPTOMODE_DISABLED', 1);
define('FTPCLIENT_EXTERNALCRYPTOMODE_GENERIC', 2);

define('FTPCLIENT_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('FTPCLIENT_PROXYAUTHENTICATION_BASIC', 1);
define('FTPCLIENT_PROXYAUTHENTICATION_DIGEST', 2);
define('FTPCLIENT_PROXYAUTHENTICATION_NTLM', 3);

define('FTPCLIENT_PROXYPROXYTYPE_NONE', 0);
define('FTPCLIENT_PROXYPROXYTYPE_SOCKS_4', 1);
define('FTPCLIENT_PROXYPROXYTYPE_SOCKS_5', 2);
define('FTPCLIENT_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('FTPCLIENT_PROXYPROXYTYPE_HTTP', 4);

define('FTPCLIENT_SOCKETDNSMODE_AUTO', 0);
define('FTPCLIENT_SOCKETDNSMODE_PLATFORM', 1);
define('FTPCLIENT_SOCKETDNSMODE_OWN', 2);
define('FTPCLIENT_SOCKETDNSMODE_OWN_SECURE', 3);

define('FTPCLIENT_TLSBASECONFIGURATION_DEFAULT', 0);
define('FTPCLIENT_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('FTPCLIENT_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('FTPCLIENT_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('FTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('FTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('FTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('FTPCLIENT_TLSREVOCATIONCHECK_NONE', 0);
define('FTPCLIENT_TLSREVOCATIONCHECK_AUTO', 1);
define('FTPCLIENT_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('FTPCLIENT_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('FTPCLIENT_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('FTPCLIENT_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('FTPCLIENT_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('FTPCLIENT_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('FTPCLIENT_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('FTPCLIENT_TLSTLSMODE_DEFAULT', 0);
define('FTPCLIENT_TLSTLSMODE_NO_TLS', 1);
define('FTPCLIENT_TLSTLSMODE_EXPLICIT_TLS', 2);
define('FTPCLIENT_TLSTLSMODE_IMPLICIT_TLS', 3);

define('FTPCLIENT_TRANSFERTYPE_TEXT', 0);
define('FTPCLIENT_TRANSFERTYPE_BINARY', 1);



/*
 * FTPClient Methods
 */

define('FTPCLIENT_ABORT_MID', 2);
define('FTPCLIENT_ACCT_MID', 3);
define('FTPCLIENT_APPENDFILE_MID', 4);
define('FTPCLIENT_CHANGEDIR_MID', 6);
define('FTPCLIENT_CLEARCOMMANDCHANNEL_MID', 7);
define('FTPCLIENT_CONFIG_MID', 8);
define('FTPCLIENT_CONNECT_MID', 9);
define('FTPCLIENT_DELETEDIR_MID', 10);
define('FTPCLIENT_DELETEFILE_MID', 11);
define('FTPCLIENT_DIREXISTS_MID', 12);
define('FTPCLIENT_DISCONNECT_MID', 13);
define('FTPCLIENT_DOWNLOADFILE_MID', 14);
define('FTPCLIENT_DOWNLOADFILES_MID', 15);
define('FTPCLIENT_FILEEXISTS_MID', 17);
define('FTPCLIENT_GETCURRENTDIR_MID', 18);
define('FTPCLIENT_GETFILESIZE_MID', 19);
define('FTPCLIENT_LISTDIR_MID', 20);
define('FTPCLIENT_MAKEDIR_MID', 21);
define('FTPCLIENT_NOOP_MID', 22);
define('FTPCLIENT_RENAME_MID', 23);
define('FTPCLIENT_SENDCOMMAND_MID', 24);
define('FTPCLIENT_UPLOADFILE_MID', 25);
define('FTPCLIENT_UPLOADFILES_MID', 26);


/*
 * FTPClient Events
 */
  
define('FTPCLIENT_CERTIFICATEVALIDATE_EID', 1);
define('FTPCLIENT_CONTROLRECEIVE_EID', 2);
define('FTPCLIENT_CONTROLSEND_EID', 3);
define('FTPCLIENT_ERROR_EID', 4);
define('FTPCLIENT_EXTERNALSIGN_EID', 5);
define('FTPCLIENT_FILEOPERATION_EID', 6);
define('FTPCLIENT_FILEOPERATIONRESULT_EID', 7);
define('FTPCLIENT_LISTENTRY_EID', 8);
define('FTPCLIENT_PROGRESS_EID', 9);
define('FTPCLIENT_TEXTDATALINE_EID', 10);

/*
 * FTPServer Properties
 */

define('FTPSERVER_ACTIVE_PID', 1);
define('FTPSERVER_ALLOWANONYMOUS_PID', 2);
define('FTPSERVER_CLIENTFILEENTRYENTRYFORMAT_PID', 3);
define('FTPSERVER_CLIENTFILEENTRYFILEDATE_PID', 4);
define('FTPSERVER_CLIENTFILEENTRYFILETYPE_PID', 5);
define('FTPSERVER_CLIENTFILEENTRYHANDLE_PID', 6);
define('FTPSERVER_CLIENTFILEENTRYNAME_PID', 7);
define('FTPSERVER_CLIENTFILEENTRYPATH_PID', 8);
define('FTPSERVER_CLIENTFILEENTRYRAWDATA_PID', 9);
define('FTPSERVER_CLIENTFILEENTRYSIZE_PID', 10);
define('FTPSERVER_DATAHOST_PID', 11);
define('FTPSERVER_DATAPORTRANGEFROM_PID', 12);
define('FTPSERVER_DATAPORTRANGETO_PID', 13);
define('FTPSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 14);
define('FTPSERVER_EXTERNALCRYPTODATA_PID', 15);
define('FTPSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 16);
define('FTPSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 17);
define('FTPSERVER_EXTERNALCRYPTOKEYID_PID', 18);
define('FTPSERVER_EXTERNALCRYPTOKEYSECRET_PID', 19);
define('FTPSERVER_EXTERNALCRYPTOMETHOD_PID', 20);
define('FTPSERVER_EXTERNALCRYPTOMODE_PID', 21);
define('FTPSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 22);
define('FTPSERVER_HANDSHAKETIMEOUT_PID', 23);
define('FTPSERVER_HOST_PID', 24);
define('FTPSERVER_IMPLICITSSL_PID', 25);
define('FTPSERVER_PASSIVEMODEHOST_PID', 26);
define('FTPSERVER_PINNEDCLIENTADDRESS_PID', 27);
define('FTPSERVER_PINNEDCLIENTCHAINVALIDATIONDETAILS_PID', 28);
define('FTPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_PID', 29);
define('FTPSERVER_PINNEDCLIENTCIPHERSUITE_PID', 30);
define('FTPSERVER_PINNEDCLIENTCLIENTAUTHENTICATED_PID', 31);
define('FTPSERVER_PINNEDCLIENTDIGESTALGORITHM_PID', 32);
define('FTPSERVER_PINNEDCLIENTENCRYPTIONALGORITHM_PID', 33);
define('FTPSERVER_PINNEDCLIENTID_PID', 34);
define('FTPSERVER_PINNEDCLIENTKEYEXCHANGEALGORITHM_PID', 35);
define('FTPSERVER_PINNEDCLIENTKEYEXCHANGEKEYBITS_PID', 36);
define('FTPSERVER_PINNEDCLIENTNAMEDECCURVE_PID', 37);
define('FTPSERVER_PINNEDCLIENTPFSCIPHER_PID', 38);
define('FTPSERVER_PINNEDCLIENTPORT_PID', 39);
define('FTPSERVER_PINNEDCLIENTPUBLICKEYBITS_PID', 40);
define('FTPSERVER_PINNEDCLIENTRESUMEDSESSION_PID', 41);
define('FTPSERVER_PINNEDCLIENTSECURECONNECTION_PID', 42);
define('FTPSERVER_PINNEDCLIENTSIGNATUREALGORITHM_PID', 43);
define('FTPSERVER_PINNEDCLIENTSYMMETRICBLOCKSIZE_PID', 44);
define('FTPSERVER_PINNEDCLIENTSYMMETRICKEYBITS_PID', 45);
define('FTPSERVER_PINNEDCLIENTTOTALBYTESRECEIVED_PID', 46);
define('FTPSERVER_PINNEDCLIENTTOTALBYTESSENT_PID', 47);
define('FTPSERVER_PINNEDCLIENTVALIDATIONLOG_PID', 48);
define('FTPSERVER_PINNEDCLIENTVERSION_PID', 49);
define('FTPSERVER_PINNEDCLIENTCERTCOUNT_PID', 50);
define('FTPSERVER_PINNEDCLIENTCERTBYTES_PID', 51);
define('FTPSERVER_PINNEDCLIENTCERTCAKEYID_PID', 52);
define('FTPSERVER_PINNEDCLIENTCERTFINGERPRINT_PID', 53);
define('FTPSERVER_PINNEDCLIENTCERTHANDLE_PID', 54);
define('FTPSERVER_PINNEDCLIENTCERTISSUER_PID', 55);
define('FTPSERVER_PINNEDCLIENTCERTISSUERRDN_PID', 56);
define('FTPSERVER_PINNEDCLIENTCERTKEYALGORITHM_PID', 57);
define('FTPSERVER_PINNEDCLIENTCERTKEYBITS_PID', 58);
define('FTPSERVER_PINNEDCLIENTCERTKEYFINGERPRINT_PID', 59);
define('FTPSERVER_PINNEDCLIENTCERTKEYUSAGE_PID', 60);
define('FTPSERVER_PINNEDCLIENTCERTPUBLICKEYBYTES_PID', 61);
define('FTPSERVER_PINNEDCLIENTCERTSELFSIGNED_PID', 62);
define('FTPSERVER_PINNEDCLIENTCERTSERIALNUMBER_PID', 63);
define('FTPSERVER_PINNEDCLIENTCERTSIGALGORITHM_PID', 64);
define('FTPSERVER_PINNEDCLIENTCERTSUBJECT_PID', 65);
define('FTPSERVER_PINNEDCLIENTCERTSUBJECTKEYID_PID', 66);
define('FTPSERVER_PINNEDCLIENTCERTSUBJECTRDN_PID', 67);
define('FTPSERVER_PINNEDCLIENTCERTVALIDFROM_PID', 68);
define('FTPSERVER_PINNEDCLIENTCERTVALIDTO_PID', 69);
define('FTPSERVER_PORT_PID', 70);
define('FTPSERVER_READONLY_PID', 71);
define('FTPSERVER_ROOTDIRECTORY_PID', 72);
define('FTPSERVER_SERVERCERTCOUNT_PID', 73);
define('FTPSERVER_SERVERCERTBYTES_PID', 74);
define('FTPSERVER_SERVERCERTHANDLE_PID', 75);
define('FTPSERVER_SESSIONTIMEOUT_PID', 76);
define('FTPSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 77);
define('FTPSERVER_SOCKETLOCALADDRESS_PID', 78);
define('FTPSERVER_SOCKETLOCALPORT_PID', 79);
define('FTPSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 80);
define('FTPSERVER_SOCKETTIMEOUT_PID', 81);
define('FTPSERVER_SOCKETUSEIPV6_PID', 82);
define('FTPSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 83);
define('FTPSERVER_TLSBASECONFIGURATION_PID', 84);
define('FTPSERVER_TLSCIPHERSUITES_PID', 85);
define('FTPSERVER_TLSECCURVES_PID', 86);
define('FTPSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 87);
define('FTPSERVER_TLSPRESHAREDIDENTITY_PID', 88);
define('FTPSERVER_TLSPRESHAREDKEY_PID', 89);
define('FTPSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 90);
define('FTPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 91);
define('FTPSERVER_TLSREVOCATIONCHECK_PID', 92);
define('FTPSERVER_TLSSSLOPTIONS_PID', 93);
define('FTPSERVER_TLSTLSMODE_PID', 94);
define('FTPSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 95);
define('FTPSERVER_TLSUSESESSIONRESUMPTION_PID', 96);
define('FTPSERVER_TLSVERSIONS_PID', 97);
define('FTPSERVER_USERCOUNT_PID', 98);
define('FTPSERVER_USERASSOCIATEDDATA_PID', 99);
define('FTPSERVER_USERBASEPATH_PID', 100);
define('FTPSERVER_USERCERT_PID', 101);
define('FTPSERVER_USERDATA_PID', 102);
define('FTPSERVER_USERHANDLE_PID', 103);
define('FTPSERVER_USERHASHALGORITHM_PID', 104);
define('FTPSERVER_USERINCOMINGSPEEDLIMIT_PID', 105);
define('FTPSERVER_USEROUTGOINGSPEEDLIMIT_PID', 106);
define('FTPSERVER_USERPASSWORD_PID', 107);
define('FTPSERVER_USERSHAREDSECRET_PID', 108);
define('FTPSERVER_USERUSERNAME_PID', 109);
define('FTPSERVER_USEUTF8_PID', 110);


/*
 * FTPServer Enums
 */

define('FTPSERVER_CLIENTFILEENTRYENTRYFORMAT_UNKNOWN', 0);
define('FTPSERVER_CLIENTFILEENTRYENTRYFORMAT_UNIX', 1);
define('FTPSERVER_CLIENTFILEENTRYENTRYFORMAT_WINDOWS', 2);
define('FTPSERVER_CLIENTFILEENTRYENTRYFORMAT_MLSD', 3);

define('FTPSERVER_CLIENTFILEENTRYFILETYPE_UNKNOWN', 0);
define('FTPSERVER_CLIENTFILEENTRYFILETYPE_DIRECTORY', 1);
define('FTPSERVER_CLIENTFILEENTRYFILETYPE_FILE', 2);
define('FTPSERVER_CLIENTFILEENTRYFILETYPE_SYMLINK', 3);
define('FTPSERVER_CLIENTFILEENTRYFILETYPE_SPECIAL', 4);
define('FTPSERVER_CLIENTFILEENTRYFILETYPE_CURRENT_DIRECTORY', 5);
define('FTPSERVER_CLIENTFILEENTRYFILETYPE_PARENT_DIRECTORY', 6);

define('FTPSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('FTPSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('FTPSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('FTPSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('FTPSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('FTPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID', 0);
define('FTPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('FTPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_INVALID', 2);
define('FTPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('FTPSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('FTPSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('FTPSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('FTPSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('FTPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('FTPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('FTPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('FTPSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('FTPSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('FTPSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('FTPSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('FTPSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('FTPSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('FTPSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('FTPSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('FTPSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('FTPSERVER_TLSTLSMODE_DEFAULT', 0);
define('FTPSERVER_TLSTLSMODE_NO_TLS', 1);
define('FTPSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('FTPSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * FTPServer Methods
 */

define('FTPSERVER_CONFIG_MID', 2);
define('FTPSERVER_DROPCLIENT_MID', 3);
define('FTPSERVER_GETCLIENTBUFFER_MID', 4);
define('FTPSERVER_LISTCLIENTS_MID', 5);
define('FTPSERVER_PINCLIENT_MID', 6);
define('FTPSERVER_SETCLIENTBUFFER_MID', 7);
define('FTPSERVER_SETCLIENTFILEENTRY_MID', 8);
define('FTPSERVER_START_MID', 9);
define('FTPSERVER_STOP_MID', 10);


/*
 * FTPServer Events
 */
  
define('FTPSERVER_ACCEPT_EID', 1);
define('FTPSERVER_AFTERCHANGEDIRECTORY_EID', 2);
define('FTPSERVER_AFTERCREATEDIRECTORY_EID', 3);
define('FTPSERVER_AFTERREMOVEDIRECTORY_EID', 4);
define('FTPSERVER_AFTERREMOVEFILE_EID', 5);
define('FTPSERVER_AFTERRENAMEFILE_EID', 6);
define('FTPSERVER_AFTERREQUESTATTRIBUTES_EID', 7);
define('FTPSERVER_AUTHATTEMPT_EID', 8);
define('FTPSERVER_BEFORECHANGEDIRECTORY_EID', 9);
define('FTPSERVER_BEFORECREATEDIRECTORY_EID', 10);
define('FTPSERVER_BEFOREDOWNLOADFILE_EID', 11);
define('FTPSERVER_BEFOREFIND_EID', 12);
define('FTPSERVER_BEFOREREMOVEDIRECTORY_EID', 13);
define('FTPSERVER_BEFOREREMOVEFILE_EID', 14);
define('FTPSERVER_BEFORERENAMEFILE_EID', 15);
define('FTPSERVER_BEFOREREQUESTATTRIBUTES_EID', 16);
define('FTPSERVER_BEFORESENDREPLY_EID', 17);
define('FTPSERVER_BEFOREUPLOADFILE_EID', 18);
define('FTPSERVER_CHANGEDIRECTORY_EID', 19);
define('FTPSERVER_COMMANDPROCESSED_EID', 20);
define('FTPSERVER_COMMANDRECEIVED_EID', 21);
define('FTPSERVER_CONNECT_EID', 22);
define('FTPSERVER_CREATEDIRECTORY_EID', 23);
define('FTPSERVER_DISCONNECT_EID', 24);
define('FTPSERVER_DOWNLOADFILE_EID', 25);
define('FTPSERVER_ERROR_EID', 26);
define('FTPSERVER_EXTERNALSIGN_EID', 27);
define('FTPSERVER_FINDCLOSE_EID', 28);
define('FTPSERVER_FINDINIT_EID', 29);
define('FTPSERVER_FINDNEXT_EID', 30);
define('FTPSERVER_READFILE_EID', 31);
define('FTPSERVER_REMOVEDIRECTORY_EID', 32);
define('FTPSERVER_REMOVEFILE_EID', 33);
define('FTPSERVER_RENAMEFILE_EID', 34);
define('FTPSERVER_REQUESTATTRIBUTES_EID', 35);
define('FTPSERVER_TRANSFERCOMPLETED_EID', 36);
define('FTPSERVER_UPLOADFILE_EID', 37);
define('FTPSERVER_WRITEFILE_EID', 38);

/*
 * HTTPClient Properties
 */

define('HTTPCLIENT_BLOCKEDCERTCOUNT_PID', 1);
define('HTTPCLIENT_BLOCKEDCERTBYTES_PID', 2);
define('HTTPCLIENT_BLOCKEDCERTHANDLE_PID', 3);
define('HTTPCLIENT_CLIENTCERTCOUNT_PID', 4);
define('HTTPCLIENT_CLIENTCERTBYTES_PID', 5);
define('HTTPCLIENT_CLIENTCERTHANDLE_PID', 6);
define('HTTPCLIENT_CONNINFOAEADCIPHER_PID', 7);
define('HTTPCLIENT_CONNINFOCHAINVALIDATIONDETAILS_PID', 8);
define('HTTPCLIENT_CONNINFOCHAINVALIDATIONRESULT_PID', 9);
define('HTTPCLIENT_CONNINFOCIPHERSUITE_PID', 10);
define('HTTPCLIENT_CONNINFOCLIENTAUTHENTICATED_PID', 11);
define('HTTPCLIENT_CONNINFOCONNECTIONESTABLISHED_PID', 12);
define('HTTPCLIENT_CONNINFOCONNECTIONID_PID', 13);
define('HTTPCLIENT_CONNINFODIGESTALGORITHM_PID', 14);
define('HTTPCLIENT_CONNINFOENCRYPTIONALGORITHM_PID', 15);
define('HTTPCLIENT_CONNINFOEXPORTABLE_PID', 16);
define('HTTPCLIENT_CONNINFOKEYEXCHANGEALGORITHM_PID', 17);
define('HTTPCLIENT_CONNINFOKEYEXCHANGEKEYBITS_PID', 18);
define('HTTPCLIENT_CONNINFONAMEDECCURVE_PID', 19);
define('HTTPCLIENT_CONNINFOPFSCIPHER_PID', 20);
define('HTTPCLIENT_CONNINFOPRESHAREDIDENTITYHINT_PID', 21);
define('HTTPCLIENT_CONNINFOPUBLICKEYBITS_PID', 22);
define('HTTPCLIENT_CONNINFORESUMEDSESSION_PID', 23);
define('HTTPCLIENT_CONNINFOSECURECONNECTION_PID', 24);
define('HTTPCLIENT_CONNINFOSERVERAUTHENTICATED_PID', 25);
define('HTTPCLIENT_CONNINFOSIGNATUREALGORITHM_PID', 26);
define('HTTPCLIENT_CONNINFOSYMMETRICBLOCKSIZE_PID', 27);
define('HTTPCLIENT_CONNINFOSYMMETRICKEYBITS_PID', 28);
define('HTTPCLIENT_CONNINFOTOTALBYTESRECEIVED_PID', 29);
define('HTTPCLIENT_CONNINFOTOTALBYTESSENT_PID', 30);
define('HTTPCLIENT_CONNINFOVALIDATIONLOG_PID', 31);
define('HTTPCLIENT_CONNINFOVERSION_PID', 32);
define('HTTPCLIENT_DYNAMICDATA_PID', 33);
define('HTTPCLIENT_EXTERNALCRYPTOCUSTOMPARAMS_PID', 34);
define('HTTPCLIENT_EXTERNALCRYPTODATA_PID', 35);
define('HTTPCLIENT_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 36);
define('HTTPCLIENT_EXTERNALCRYPTOHASHALGORITHM_PID', 37);
define('HTTPCLIENT_EXTERNALCRYPTOKEYID_PID', 38);
define('HTTPCLIENT_EXTERNALCRYPTOKEYSECRET_PID', 39);
define('HTTPCLIENT_EXTERNALCRYPTOMETHOD_PID', 40);
define('HTTPCLIENT_EXTERNALCRYPTOMODE_PID', 41);
define('HTTPCLIENT_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 42);
define('HTTPCLIENT_KEEPALIVEPOLICY_PID', 43);
define('HTTPCLIENT_KNOWNCERTCOUNT_PID', 44);
define('HTTPCLIENT_KNOWNCERTBYTES_PID', 45);
define('HTTPCLIENT_KNOWNCERTHANDLE_PID', 46);
define('HTTPCLIENT_KNOWNCRLCOUNT_PID', 47);
define('HTTPCLIENT_KNOWNCRLBYTES_PID', 48);
define('HTTPCLIENT_KNOWNCRLHANDLE_PID', 49);
define('HTTPCLIENT_KNOWNOCSPCOUNT_PID', 50);
define('HTTPCLIENT_KNOWNOCSPBYTES_PID', 51);
define('HTTPCLIENT_KNOWNOCSPHANDLE_PID', 52);
define('HTTPCLIENT_OUTPUTBYTES_PID', 53);
define('HTTPCLIENT_OUTPUTSTRING_PID', 54);
define('HTTPCLIENT_PROXYADDRESS_PID', 55);
define('HTTPCLIENT_PROXYAUTHENTICATION_PID', 56);
define('HTTPCLIENT_PROXYPASSWORD_PID', 57);
define('HTTPCLIENT_PROXYPORT_PID', 58);
define('HTTPCLIENT_PROXYPROXYTYPE_PID', 59);
define('HTTPCLIENT_PROXYREQUESTHEADERS_PID', 60);
define('HTTPCLIENT_PROXYRESPONSEBODY_PID', 61);
define('HTTPCLIENT_PROXYRESPONSEHEADERS_PID', 62);
define('HTTPCLIENT_PROXYUSEIPV6_PID', 63);
define('HTTPCLIENT_PROXYUSEPROXY_PID', 64);
define('HTTPCLIENT_PROXYUSERNAME_PID', 65);
define('HTTPCLIENT_REASONPHRASE_PID', 66);
define('HTTPCLIENT_REQHEADERCOUNT_PID', 67);
define('HTTPCLIENT_REQHEADERNAME_PID', 68);
define('HTTPCLIENT_REQHEADERVALUE_PID', 69);
define('HTTPCLIENT_REQPARAMSACCEPT_PID', 70);
define('HTTPCLIENT_REQPARAMSACCEPTCHARSET_PID', 71);
define('HTTPCLIENT_REQPARAMSACCEPTLANGUAGE_PID', 72);
define('HTTPCLIENT_REQPARAMSACCEPTRANGEEND_PID', 73);
define('HTTPCLIENT_REQPARAMSACCEPTRANGESTART_PID', 74);
define('HTTPCLIENT_REQPARAMSAUTHORIZATION_PID', 75);
define('HTTPCLIENT_REQPARAMSCONNECTION_PID', 76);
define('HTTPCLIENT_REQPARAMSCONTENTLENGTH_PID', 77);
define('HTTPCLIENT_REQPARAMSCONTENTRANGEEND_PID', 78);
define('HTTPCLIENT_REQPARAMSCONTENTRANGEFULLSIZE_PID', 79);
define('HTTPCLIENT_REQPARAMSCONTENTRANGESTART_PID', 80);
define('HTTPCLIENT_REQPARAMSCONTENTTYPE_PID', 81);
define('HTTPCLIENT_REQPARAMSCOOKIE_PID', 82);
define('HTTPCLIENT_REQPARAMSCUSTOMHEADERS_PID', 83);
define('HTTPCLIENT_REQPARAMSDATE_PID', 84);
define('HTTPCLIENT_REQPARAMSFROM_PID', 85);
define('HTTPCLIENT_REQPARAMSHOST_PID', 86);
define('HTTPCLIENT_REQPARAMSHTTPVERSION_PID', 87);
define('HTTPCLIENT_REQPARAMSIFMATCH_PID', 88);
define('HTTPCLIENT_REQPARAMSIFMODIFIEDSINCE_PID', 89);
define('HTTPCLIENT_REQPARAMSIFNONEMATCH_PID', 90);
define('HTTPCLIENT_REQPARAMSIFUNMODIFIEDSINCE_PID', 91);
define('HTTPCLIENT_REQPARAMSPASSWORD_PID', 92);
define('HTTPCLIENT_REQPARAMSREFERER_PID', 93);
define('HTTPCLIENT_REQPARAMSUSERAGENT_PID', 94);
define('HTTPCLIENT_REQPARAMSUSERNAME_PID', 95);
define('HTTPCLIENT_RESPHEADERCOUNT_PID', 96);
define('HTTPCLIENT_RESPHEADERNAME_PID', 97);
define('HTTPCLIENT_RESPHEADERVALUE_PID', 98);
define('HTTPCLIENT_RESPPARAMSCONTENTLENGTH_PID', 99);
define('HTTPCLIENT_RESPPARAMSDATE_PID', 100);
define('HTTPCLIENT_RESPPARAMSREASONPHRASE_PID', 101);
define('HTTPCLIENT_RESPPARAMSSTATUSCODE_PID', 102);
define('HTTPCLIENT_SERVERCERTCOUNT_PID', 103);
define('HTTPCLIENT_SERVERCERTBYTES_PID', 104);
define('HTTPCLIENT_SERVERCERTCAKEYID_PID', 105);
define('HTTPCLIENT_SERVERCERTFINGERPRINT_PID', 106);
define('HTTPCLIENT_SERVERCERTHANDLE_PID', 107);
define('HTTPCLIENT_SERVERCERTISSUER_PID', 108);
define('HTTPCLIENT_SERVERCERTISSUERRDN_PID', 109);
define('HTTPCLIENT_SERVERCERTKEYALGORITHM_PID', 110);
define('HTTPCLIENT_SERVERCERTKEYBITS_PID', 111);
define('HTTPCLIENT_SERVERCERTKEYFINGERPRINT_PID', 112);
define('HTTPCLIENT_SERVERCERTKEYUSAGE_PID', 113);
define('HTTPCLIENT_SERVERCERTPUBLICKEYBYTES_PID', 114);
define('HTTPCLIENT_SERVERCERTSELFSIGNED_PID', 115);
define('HTTPCLIENT_SERVERCERTSERIALNUMBER_PID', 116);
define('HTTPCLIENT_SERVERCERTSIGALGORITHM_PID', 117);
define('HTTPCLIENT_SERVERCERTSUBJECT_PID', 118);
define('HTTPCLIENT_SERVERCERTSUBJECTKEYID_PID', 119);
define('HTTPCLIENT_SERVERCERTSUBJECTRDN_PID', 120);
define('HTTPCLIENT_SERVERCERTVALIDFROM_PID', 121);
define('HTTPCLIENT_SERVERCERTVALIDTO_PID', 122);
define('HTTPCLIENT_SOCKETDNSMODE_PID', 123);
define('HTTPCLIENT_SOCKETDNSPORT_PID', 124);
define('HTTPCLIENT_SOCKETDNSQUERYTIMEOUT_PID', 125);
define('HTTPCLIENT_SOCKETDNSSERVERS_PID', 126);
define('HTTPCLIENT_SOCKETDNSTOTALTIMEOUT_PID', 127);
define('HTTPCLIENT_SOCKETINCOMINGSPEEDLIMIT_PID', 128);
define('HTTPCLIENT_SOCKETLOCALADDRESS_PID', 129);
define('HTTPCLIENT_SOCKETLOCALPORT_PID', 130);
define('HTTPCLIENT_SOCKETOUTGOINGSPEEDLIMIT_PID', 131);
define('HTTPCLIENT_SOCKETTIMEOUT_PID', 132);
define('HTTPCLIENT_SOCKETUSEIPV6_PID', 133);
define('HTTPCLIENT_STATUSCODE_PID', 134);
define('HTTPCLIENT_TLSAUTOVALIDATECERTIFICATES_PID', 135);
define('HTTPCLIENT_TLSBASECONFIGURATION_PID', 136);
define('HTTPCLIENT_TLSCIPHERSUITES_PID', 137);
define('HTTPCLIENT_TLSECCURVES_PID', 138);
define('HTTPCLIENT_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 139);
define('HTTPCLIENT_TLSPRESHAREDIDENTITY_PID', 140);
define('HTTPCLIENT_TLSPRESHAREDKEY_PID', 141);
define('HTTPCLIENT_TLSPRESHAREDKEYCIPHERSUITE_PID', 142);
define('HTTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 143);
define('HTTPCLIENT_TLSREVOCATIONCHECK_PID', 144);
define('HTTPCLIENT_TLSSSLOPTIONS_PID', 145);
define('HTTPCLIENT_TLSTLSMODE_PID', 146);
define('HTTPCLIENT_TLSUSEEXTENDEDMASTERSECRET_PID', 147);
define('HTTPCLIENT_TLSUSESESSIONRESUMPTION_PID', 148);
define('HTTPCLIENT_TLSVERSIONS_PID', 149);
define('HTTPCLIENT_TRUSTEDCERTCOUNT_PID', 150);
define('HTTPCLIENT_TRUSTEDCERTBYTES_PID', 151);
define('HTTPCLIENT_TRUSTEDCERTHANDLE_PID', 152);
define('HTTPCLIENT_USEDIGESTAUTH_PID', 153);
define('HTTPCLIENT_USENTLMAUTH_PID', 154);


/*
 * HTTPClient Enums
 */

define('HTTPCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID', 0);
define('HTTPCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('HTTPCLIENT_CONNINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('HTTPCLIENT_CONNINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('HTTPCLIENT_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('HTTPCLIENT_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('HTTPCLIENT_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('HTTPCLIENT_EXTERNALCRYPTOMODE_DISABLED', 1);
define('HTTPCLIENT_EXTERNALCRYPTOMODE_GENERIC', 2);

define('HTTPCLIENT_KEEPALIVEPOLICY_STANDARD_DEFINED', 0);
define('HTTPCLIENT_KEEPALIVEPOLICY_PREFER_KEEP_ALIVE', 1);
define('HTTPCLIENT_KEEPALIVEPOLICY_RELY_ON_SERVER', 2);
define('HTTPCLIENT_KEEPALIVEPOLICY_KEEP_ALIVES_DISABLED', 3);

define('HTTPCLIENT_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('HTTPCLIENT_PROXYAUTHENTICATION_BASIC', 1);
define('HTTPCLIENT_PROXYAUTHENTICATION_DIGEST', 2);
define('HTTPCLIENT_PROXYAUTHENTICATION_NTLM', 3);

define('HTTPCLIENT_PROXYPROXYTYPE_NONE', 0);
define('HTTPCLIENT_PROXYPROXYTYPE_SOCKS_4', 1);
define('HTTPCLIENT_PROXYPROXYTYPE_SOCKS_5', 2);
define('HTTPCLIENT_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('HTTPCLIENT_PROXYPROXYTYPE_HTTP', 4);

define('HTTPCLIENT_REQPARAMSHTTPVERSION_HTTP10', 0);
define('HTTPCLIENT_REQPARAMSHTTPVERSION_HTTP11', 1);

define('HTTPCLIENT_SOCKETDNSMODE_AUTO', 0);
define('HTTPCLIENT_SOCKETDNSMODE_PLATFORM', 1);
define('HTTPCLIENT_SOCKETDNSMODE_OWN', 2);
define('HTTPCLIENT_SOCKETDNSMODE_OWN_SECURE', 3);

define('HTTPCLIENT_TLSBASECONFIGURATION_DEFAULT', 0);
define('HTTPCLIENT_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('HTTPCLIENT_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('HTTPCLIENT_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('HTTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('HTTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('HTTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('HTTPCLIENT_TLSREVOCATIONCHECK_NONE', 0);
define('HTTPCLIENT_TLSREVOCATIONCHECK_AUTO', 1);
define('HTTPCLIENT_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('HTTPCLIENT_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('HTTPCLIENT_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('HTTPCLIENT_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('HTTPCLIENT_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('HTTPCLIENT_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('HTTPCLIENT_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('HTTPCLIENT_TLSTLSMODE_DEFAULT', 0);
define('HTTPCLIENT_TLSTLSMODE_NO_TLS', 1);
define('HTTPCLIENT_TLSTLSMODE_EXPLICIT_TLS', 2);
define('HTTPCLIENT_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * HTTPClient Methods
 */

define('HTTPCLIENT_CONFIG_MID', 2);
define('HTTPCLIENT_DELETE_MID', 3);
define('HTTPCLIENT_GET_MID', 4);
define('HTTPCLIENT_GETBYTES_MID', 5);
define('HTTPCLIENT_GETFILE_MID', 6);
define('HTTPCLIENT_HEAD_MID', 8);
define('HTTPCLIENT_OPTIONS_MID', 9);
define('HTTPCLIENT_POST_MID', 10);
define('HTTPCLIENT_POSTBYTES_MID', 11);
define('HTTPCLIENT_POSTFILE_MID', 12);
define('HTTPCLIENT_POSTWEBFORM_MID', 14);
define('HTTPCLIENT_PUT_MID', 15);
define('HTTPCLIENT_PUTBYTES_MID', 16);
define('HTTPCLIENT_PUTFILE_MID', 17);
define('HTTPCLIENT_TRACE_MID', 19);


/*
 * HTTPClient Events
 */
  
define('HTTPCLIENT_CERTIFICATEVALIDATE_EID', 1);
define('HTTPCLIENT_COOKIE_EID', 2);
define('HTTPCLIENT_DOCUMENTBEGIN_EID', 3);
define('HTTPCLIENT_DOCUMENTEND_EID', 4);
define('HTTPCLIENT_DYNAMICDATANEEDED_EID', 5);
define('HTTPCLIENT_ERROR_EID', 6);
define('HTTPCLIENT_EXTERNALSIGN_EID', 7);
define('HTTPCLIENT_HEADERSPREPARED_EID', 8);
define('HTTPCLIENT_HEADERSRECEIVED_EID', 9);
define('HTTPCLIENT_PROGRESS_EID', 10);
define('HTTPCLIENT_REDIRECTION_EID', 11);

/*
 * HTTPServer Properties
 */

define('HTTPSERVER_ACTIVE_PID', 1);
define('HTTPSERVER_ALLOWKEEPALIVE_PID', 2);
define('HTTPSERVER_AUTHBASIC_PID', 3);
define('HTTPSERVER_AUTHDIGEST_PID', 4);
define('HTTPSERVER_AUTHDIGESTEXPIRE_PID', 5);
define('HTTPSERVER_AUTHREALM_PID', 6);
define('HTTPSERVER_BOUNDPORT_PID', 7);
define('HTTPSERVER_COMPRESSIONLEVEL_PID', 8);
define('HTTPSERVER_DOCUMENTROOT_PID', 9);
define('HTTPSERVER_ERRORORIGIN_PID', 10);
define('HTTPSERVER_ERRORSEVERITY_PID', 11);
define('HTTPSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 12);
define('HTTPSERVER_EXTERNALCRYPTODATA_PID', 13);
define('HTTPSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 14);
define('HTTPSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 15);
define('HTTPSERVER_EXTERNALCRYPTOKEYID_PID', 16);
define('HTTPSERVER_EXTERNALCRYPTOKEYSECRET_PID', 17);
define('HTTPSERVER_EXTERNALCRYPTOMETHOD_PID', 18);
define('HTTPSERVER_EXTERNALCRYPTOMODE_PID', 19);
define('HTTPSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 20);
define('HTTPSERVER_HANDSHAKETIMEOUT_PID', 21);
define('HTTPSERVER_HOST_PID', 22);
define('HTTPSERVER_PINNEDCLIENTADDRESS_PID', 23);
define('HTTPSERVER_PINNEDCLIENTCHAINVALIDATIONDETAILS_PID', 24);
define('HTTPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_PID', 25);
define('HTTPSERVER_PINNEDCLIENTCIPHERSUITE_PID', 26);
define('HTTPSERVER_PINNEDCLIENTCLIENTAUTHENTICATED_PID', 27);
define('HTTPSERVER_PINNEDCLIENTDIGESTALGORITHM_PID', 28);
define('HTTPSERVER_PINNEDCLIENTENCRYPTIONALGORITHM_PID', 29);
define('HTTPSERVER_PINNEDCLIENTID_PID', 30);
define('HTTPSERVER_PINNEDCLIENTKEYEXCHANGEALGORITHM_PID', 31);
define('HTTPSERVER_PINNEDCLIENTKEYEXCHANGEKEYBITS_PID', 32);
define('HTTPSERVER_PINNEDCLIENTNAMEDECCURVE_PID', 33);
define('HTTPSERVER_PINNEDCLIENTPFSCIPHER_PID', 34);
define('HTTPSERVER_PINNEDCLIENTPORT_PID', 35);
define('HTTPSERVER_PINNEDCLIENTPUBLICKEYBITS_PID', 36);
define('HTTPSERVER_PINNEDCLIENTRESUMEDSESSION_PID', 37);
define('HTTPSERVER_PINNEDCLIENTSECURECONNECTION_PID', 38);
define('HTTPSERVER_PINNEDCLIENTSIGNATUREALGORITHM_PID', 39);
define('HTTPSERVER_PINNEDCLIENTSYMMETRICBLOCKSIZE_PID', 40);
define('HTTPSERVER_PINNEDCLIENTSYMMETRICKEYBITS_PID', 41);
define('HTTPSERVER_PINNEDCLIENTTOTALBYTESRECEIVED_PID', 42);
define('HTTPSERVER_PINNEDCLIENTTOTALBYTESSENT_PID', 43);
define('HTTPSERVER_PINNEDCLIENTVALIDATIONLOG_PID', 44);
define('HTTPSERVER_PINNEDCLIENTVERSION_PID', 45);
define('HTTPSERVER_PINNEDCLIENTCERTCOUNT_PID', 46);
define('HTTPSERVER_PINNEDCLIENTCERTBYTES_PID', 47);
define('HTTPSERVER_PINNEDCLIENTCERTCAKEYID_PID', 48);
define('HTTPSERVER_PINNEDCLIENTCERTFINGERPRINT_PID', 49);
define('HTTPSERVER_PINNEDCLIENTCERTHANDLE_PID', 50);
define('HTTPSERVER_PINNEDCLIENTCERTISSUER_PID', 51);
define('HTTPSERVER_PINNEDCLIENTCERTISSUERRDN_PID', 52);
define('HTTPSERVER_PINNEDCLIENTCERTKEYALGORITHM_PID', 53);
define('HTTPSERVER_PINNEDCLIENTCERTKEYBITS_PID', 54);
define('HTTPSERVER_PINNEDCLIENTCERTKEYFINGERPRINT_PID', 55);
define('HTTPSERVER_PINNEDCLIENTCERTKEYUSAGE_PID', 56);
define('HTTPSERVER_PINNEDCLIENTCERTPUBLICKEYBYTES_PID', 57);
define('HTTPSERVER_PINNEDCLIENTCERTSELFSIGNED_PID', 58);
define('HTTPSERVER_PINNEDCLIENTCERTSERIALNUMBER_PID', 59);
define('HTTPSERVER_PINNEDCLIENTCERTSIGALGORITHM_PID', 60);
define('HTTPSERVER_PINNEDCLIENTCERTSUBJECT_PID', 61);
define('HTTPSERVER_PINNEDCLIENTCERTSUBJECTKEYID_PID', 62);
define('HTTPSERVER_PINNEDCLIENTCERTSUBJECTRDN_PID', 63);
define('HTTPSERVER_PINNEDCLIENTCERTVALIDFROM_PID', 64);
define('HTTPSERVER_PINNEDCLIENTCERTVALIDTO_PID', 65);
define('HTTPSERVER_PORT_PID', 66);
define('HTTPSERVER_PORTRANGEFROM_PID', 67);
define('HTTPSERVER_PORTRANGETO_PID', 68);
define('HTTPSERVER_SERVERCERTCOUNT_PID', 69);
define('HTTPSERVER_SERVERCERTBYTES_PID', 70);
define('HTTPSERVER_SERVERCERTHANDLE_PID', 71);
define('HTTPSERVER_SESSIONTIMEOUT_PID', 72);
define('HTTPSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 73);
define('HTTPSERVER_SOCKETLOCALADDRESS_PID', 74);
define('HTTPSERVER_SOCKETLOCALPORT_PID', 75);
define('HTTPSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 76);
define('HTTPSERVER_SOCKETTIMEOUT_PID', 77);
define('HTTPSERVER_SOCKETUSEIPV6_PID', 78);
define('HTTPSERVER_TEMPDIR_PID', 79);
define('HTTPSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 80);
define('HTTPSERVER_TLSBASECONFIGURATION_PID', 81);
define('HTTPSERVER_TLSCIPHERSUITES_PID', 82);
define('HTTPSERVER_TLSECCURVES_PID', 83);
define('HTTPSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 84);
define('HTTPSERVER_TLSPRESHAREDIDENTITY_PID', 85);
define('HTTPSERVER_TLSPRESHAREDKEY_PID', 86);
define('HTTPSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 87);
define('HTTPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 88);
define('HTTPSERVER_TLSREVOCATIONCHECK_PID', 89);
define('HTTPSERVER_TLSSSLOPTIONS_PID', 90);
define('HTTPSERVER_TLSTLSMODE_PID', 91);
define('HTTPSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 92);
define('HTTPSERVER_TLSUSESESSIONRESUMPTION_PID', 93);
define('HTTPSERVER_TLSVERSIONS_PID', 94);
define('HTTPSERVER_USECHUNKEDTRANSFER_PID', 95);
define('HTTPSERVER_USECOMPRESSION_PID', 96);
define('HTTPSERVER_USERCOUNT_PID', 97);
define('HTTPSERVER_USERASSOCIATEDDATA_PID', 98);
define('HTTPSERVER_USERBASEPATH_PID', 99);
define('HTTPSERVER_USERCERT_PID', 100);
define('HTTPSERVER_USERDATA_PID', 101);
define('HTTPSERVER_USERHANDLE_PID', 102);
define('HTTPSERVER_USERHASHALGORITHM_PID', 103);
define('HTTPSERVER_USERINCOMINGSPEEDLIMIT_PID', 104);
define('HTTPSERVER_USEROUTGOINGSPEEDLIMIT_PID', 105);
define('HTTPSERVER_USERPASSWORD_PID', 106);
define('HTTPSERVER_USERSHAREDSECRET_PID', 107);
define('HTTPSERVER_USERUSERNAME_PID', 108);
define('HTTPSERVER_USETLS_PID', 109);
define('HTTPSERVER_WEBSITENAME_PID', 110);


/*
 * HTTPServer Enums
 */

define('HTTPSERVER_ERRORORIGIN_LOCAL', 0);
define('HTTPSERVER_ERRORORIGIN_REMOTE', 1);

define('HTTPSERVER_ERRORSEVERITY_WARNING', 1);
define('HTTPSERVER_ERRORSEVERITY_FATAL', 2);

define('HTTPSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('HTTPSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('HTTPSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('HTTPSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('HTTPSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('HTTPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID', 0);
define('HTTPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('HTTPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_INVALID', 2);
define('HTTPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('HTTPSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('HTTPSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('HTTPSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('HTTPSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('HTTPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('HTTPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('HTTPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('HTTPSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('HTTPSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('HTTPSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('HTTPSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('HTTPSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('HTTPSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('HTTPSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('HTTPSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('HTTPSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('HTTPSERVER_TLSTLSMODE_DEFAULT', 0);
define('HTTPSERVER_TLSTLSMODE_NO_TLS', 1);
define('HTTPSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('HTTPSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * HTTPServer Methods
 */

define('HTTPSERVER_CONFIG_MID', 2);
define('HTTPSERVER_DROPCLIENT_MID', 3);
define('HTTPSERVER_GETREQUESTBYTES_MID', 4);
define('HTTPSERVER_GETREQUESTHEADER_MID', 5);
define('HTTPSERVER_GETREQUESTSTRING_MID', 7);
define('HTTPSERVER_GETREQUESTUSERNAME_MID', 8);
define('HTTPSERVER_LISTCLIENTS_MID', 9);
define('HTTPSERVER_PINCLIENT_MID', 10);
define('HTTPSERVER_SETRESPONSEFILE_MID', 11);
define('HTTPSERVER_SETRESPONSEHEADER_MID', 12);
define('HTTPSERVER_SETRESPONSESTATUS_MID', 13);
define('HTTPSERVER_SETRESPONSESTRING_MID', 14);
define('HTTPSERVER_START_MID', 15);
define('HTTPSERVER_STOP_MID', 16);


/*
 * HTTPServer Events
 */
  
define('HTTPSERVER_ACCEPT_EID', 1);
define('HTTPSERVER_AUTHATTEMPT_EID', 2);
define('HTTPSERVER_CERTIFICATEVALIDATE_EID', 3);
define('HTTPSERVER_CONNECT_EID', 4);
define('HTTPSERVER_DATA_EID', 5);
define('HTTPSERVER_DELETEREQUEST_EID', 6);
define('HTTPSERVER_DISCONNECT_EID', 7);
define('HTTPSERVER_ERROR_EID', 8);
define('HTTPSERVER_EXTERNALSIGN_EID', 9);
define('HTTPSERVER_FILEERROR_EID', 10);
define('HTTPSERVER_GETREQUEST_EID', 11);
define('HTTPSERVER_HEADREQUEST_EID', 12);
define('HTTPSERVER_OPTIONSREQUEST_EID', 13);
define('HTTPSERVER_PATCHREQUEST_EID', 14);
define('HTTPSERVER_POSTREQUEST_EID', 15);
define('HTTPSERVER_PUTREQUEST_EID', 16);
define('HTTPSERVER_TLSESTABLISHED_EID', 17);
define('HTTPSERVER_TLSPSK_EID', 18);
define('HTTPSERVER_TLSSHUTDOWN_EID', 19);
define('HTTPSERVER_TRACEREQUEST_EID', 20);

/*
 * KMIPClient Properties
 */

define('KMIPCLIENT_DATAFILE_PID', 1);
define('KMIPCLIENT_ENCODERTYPE_PID', 2);
define('KMIPCLIENT_EXTERNALCRYPTOCUSTOMPARAMS_PID', 3);
define('KMIPCLIENT_EXTERNALCRYPTODATA_PID', 4);
define('KMIPCLIENT_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 5);
define('KMIPCLIENT_EXTERNALCRYPTOHASHALGORITHM_PID', 6);
define('KMIPCLIENT_EXTERNALCRYPTOKEYID_PID', 7);
define('KMIPCLIENT_EXTERNALCRYPTOKEYSECRET_PID', 8);
define('KMIPCLIENT_EXTERNALCRYPTOMETHOD_PID', 9);
define('KMIPCLIENT_EXTERNALCRYPTOMODE_PID', 10);
define('KMIPCLIENT_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 11);
define('KMIPCLIENT_HOST_PID', 12);
define('KMIPCLIENT_INPUTFILE_PID', 13);
define('KMIPCLIENT_OBJECTCOUNT_PID', 14);
define('KMIPCLIENT_OBJECTID_PID', 15);
define('KMIPCLIENT_OBJECTKEYALGORITHM_PID', 16);
define('KMIPCLIENT_OBJECTKEYLENGTH_PID', 17);
define('KMIPCLIENT_OBJECTOBJECTTYPE_PID', 18);
define('KMIPCLIENT_OBJECTSIGALGORITHM_PID', 19);
define('KMIPCLIENT_OBJECTUNIQUEIDENTIFIER_PID', 20);
define('KMIPCLIENT_OUTPUTFILE_PID', 21);
define('KMIPCLIENT_PASSWORD_PID', 22);
define('KMIPCLIENT_PINNEDCERTBYTES_PID', 23);
define('KMIPCLIENT_PINNEDCERTHANDLE_PID', 24);
define('KMIPCLIENT_PINNEDCERTREQUESTBYTES_PID', 25);
define('KMIPCLIENT_PINNEDCERTREQUESTHANDLE_PID', 26);
define('KMIPCLIENT_PORT_PID', 27);
define('KMIPCLIENT_PROXYADDRESS_PID', 28);
define('KMIPCLIENT_PROXYAUTHENTICATION_PID', 29);
define('KMIPCLIENT_PROXYPASSWORD_PID', 30);
define('KMIPCLIENT_PROXYPORT_PID', 31);
define('KMIPCLIENT_PROXYPROXYTYPE_PID', 32);
define('KMIPCLIENT_PROXYREQUESTHEADERS_PID', 33);
define('KMIPCLIENT_PROXYRESPONSEBODY_PID', 34);
define('KMIPCLIENT_PROXYRESPONSEHEADERS_PID', 35);
define('KMIPCLIENT_PROXYUSEIPV6_PID', 36);
define('KMIPCLIENT_PROXYUSEPROXY_PID', 37);
define('KMIPCLIENT_PROXYUSERNAME_PID', 38);
define('KMIPCLIENT_SIGNATUREVALIDATIONRESULT_PID', 39);
define('KMIPCLIENT_SOCKETDNSMODE_PID', 40);
define('KMIPCLIENT_SOCKETDNSPORT_PID', 41);
define('KMIPCLIENT_SOCKETDNSQUERYTIMEOUT_PID', 42);
define('KMIPCLIENT_SOCKETDNSSERVERS_PID', 43);
define('KMIPCLIENT_SOCKETDNSTOTALTIMEOUT_PID', 44);
define('KMIPCLIENT_SOCKETINCOMINGSPEEDLIMIT_PID', 45);
define('KMIPCLIENT_SOCKETLOCALADDRESS_PID', 46);
define('KMIPCLIENT_SOCKETLOCALPORT_PID', 47);
define('KMIPCLIENT_SOCKETOUTGOINGSPEEDLIMIT_PID', 48);
define('KMIPCLIENT_SOCKETTIMEOUT_PID', 49);
define('KMIPCLIENT_SOCKETUSEIPV6_PID', 50);
define('KMIPCLIENT_TLSAUTOVALIDATECERTIFICATES_PID', 51);
define('KMIPCLIENT_TLSBASECONFIGURATION_PID', 52);
define('KMIPCLIENT_TLSCIPHERSUITES_PID', 53);
define('KMIPCLIENT_TLSECCURVES_PID', 54);
define('KMIPCLIENT_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 55);
define('KMIPCLIENT_TLSPRESHAREDIDENTITY_PID', 56);
define('KMIPCLIENT_TLSPRESHAREDKEY_PID', 57);
define('KMIPCLIENT_TLSPRESHAREDKEYCIPHERSUITE_PID', 58);
define('KMIPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 59);
define('KMIPCLIENT_TLSREVOCATIONCHECK_PID', 60);
define('KMIPCLIENT_TLSSSLOPTIONS_PID', 61);
define('KMIPCLIENT_TLSTLSMODE_PID', 62);
define('KMIPCLIENT_TLSUSEEXTENDEDMASTERSECRET_PID', 63);
define('KMIPCLIENT_TLSUSESESSIONRESUMPTION_PID', 64);
define('KMIPCLIENT_TLSVERSIONS_PID', 65);
define('KMIPCLIENT_USERNAME_PID', 66);


/*
 * KMIPClient Enums
 */

define('KMIPCLIENT_ENCODERTYPE_TTLV', 0);
define('KMIPCLIENT_ENCODERTYPE_XML', 1);
define('KMIPCLIENT_ENCODERTYPE_JSON', 2);

define('KMIPCLIENT_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('KMIPCLIENT_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('KMIPCLIENT_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('KMIPCLIENT_EXTERNALCRYPTOMODE_DISABLED', 1);
define('KMIPCLIENT_EXTERNALCRYPTOMODE_GENERIC', 2);

define('KMIPCLIENT_OBJECTOBJECTTYPE_UNKNOWN', 0);
define('KMIPCLIENT_OBJECTOBJECTTYPE_CERTIFICATE', 1);
define('KMIPCLIENT_OBJECTOBJECTTYPE_SYMMETRIC_KEY', 2);
define('KMIPCLIENT_OBJECTOBJECTTYPE_PUBLIC_KEY', 4);
define('KMIPCLIENT_OBJECTOBJECTTYPE_PRIVATE_KEY', 8);

define('KMIPCLIENT_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('KMIPCLIENT_PROXYAUTHENTICATION_BASIC', 1);
define('KMIPCLIENT_PROXYAUTHENTICATION_DIGEST', 2);
define('KMIPCLIENT_PROXYAUTHENTICATION_NTLM', 3);

define('KMIPCLIENT_PROXYPROXYTYPE_NONE', 0);
define('KMIPCLIENT_PROXYPROXYTYPE_SOCKS_4', 1);
define('KMIPCLIENT_PROXYPROXYTYPE_SOCKS_5', 2);
define('KMIPCLIENT_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('KMIPCLIENT_PROXYPROXYTYPE_HTTP', 4);

define('KMIPCLIENT_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('KMIPCLIENT_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('KMIPCLIENT_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('KMIPCLIENT_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('KMIPCLIENT_SIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('KMIPCLIENT_SOCKETDNSMODE_AUTO', 0);
define('KMIPCLIENT_SOCKETDNSMODE_PLATFORM', 1);
define('KMIPCLIENT_SOCKETDNSMODE_OWN', 2);
define('KMIPCLIENT_SOCKETDNSMODE_OWN_SECURE', 3);

define('KMIPCLIENT_TLSBASECONFIGURATION_DEFAULT', 0);
define('KMIPCLIENT_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('KMIPCLIENT_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('KMIPCLIENT_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('KMIPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('KMIPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('KMIPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('KMIPCLIENT_TLSREVOCATIONCHECK_NONE', 0);
define('KMIPCLIENT_TLSREVOCATIONCHECK_AUTO', 1);
define('KMIPCLIENT_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('KMIPCLIENT_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('KMIPCLIENT_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('KMIPCLIENT_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('KMIPCLIENT_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('KMIPCLIENT_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('KMIPCLIENT_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('KMIPCLIENT_TLSTLSMODE_DEFAULT', 0);
define('KMIPCLIENT_TLSTLSMODE_NO_TLS', 1);
define('KMIPCLIENT_TLSTLSMODE_EXPLICIT_TLS', 2);
define('KMIPCLIENT_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * KMIPClient Methods
 */

define('KMIPCLIENT_ADDCERTIFICATE_MID', 2);
define('KMIPCLIENT_ADDKEY_MID', 3);
define('KMIPCLIENT_ADDPINNED_MID', 4);
define('KMIPCLIENT_CONFIG_MID', 5);
define('KMIPCLIENT_DECRYPT_MID', 6);
define('KMIPCLIENT_ENCRYPT_MID', 7);
define('KMIPCLIENT_GENERATECERT_MID', 8);
define('KMIPCLIENT_GENERATECERTFROMPINNED_MID', 9);
define('KMIPCLIENT_GENERATECERTFROMREQUEST_MID', 10);
define('KMIPCLIENT_GENERATEKEY_MID', 11);
define('KMIPCLIENT_GETLIST_MID', 12);
define('KMIPCLIENT_REMOVE_MID', 13);
define('KMIPCLIENT_SIGN_MID', 14);
define('KMIPCLIENT_VERIFY_MID', 15);


/*
 * KMIPClient Events
 */
  
define('KMIPCLIENT_ERROR_EID', 1);
define('KMIPCLIENT_EXTERNALSIGN_EID', 2);

/*
 * KMIPServer Properties
 */

define('KMIPSERVER_ACTIVE_PID', 1);
define('KMIPSERVER_CACERTBYTES_PID', 2);
define('KMIPSERVER_CACERTHANDLE_PID', 3);
define('KMIPSERVER_CERTREQUESTBYTES_PID', 4);
define('KMIPSERVER_CERTREQUESTCURVE_PID', 5);
define('KMIPSERVER_CERTREQUESTHANDLE_PID', 6);
define('KMIPSERVER_CERTREQUESTHASHALGORITHM_PID', 7);
define('KMIPSERVER_CERTREQUESTKEYALGORITHM_PID', 8);
define('KMIPSERVER_CERTREQUESTKEYBITS_PID', 9);
define('KMIPSERVER_CERTREQUESTKEYUSAGE_PID', 10);
define('KMIPSERVER_CERTREQUESTKEYVALID_PID', 11);
define('KMIPSERVER_CERTREQUESTPRIVATEKEYBYTES_PID', 12);
define('KMIPSERVER_CERTREQUESTPUBLICKEYBYTES_PID', 13);
define('KMIPSERVER_CERTREQUESTSIGALGORITHM_PID', 14);
define('KMIPSERVER_CERTREQUESTSUBJECT_PID', 15);
define('KMIPSERVER_CERTREQUESTSUBJECTRDN_PID', 16);
define('KMIPSERVER_CERTREQUESTVALID_PID', 17);
define('KMIPSERVER_CERTSTORAGECOUNT_PID', 18);
define('KMIPSERVER_CERTSTORAGEBYTES_PID', 19);
define('KMIPSERVER_CERTSTORAGEHANDLE_PID', 20);
define('KMIPSERVER_ENCODERTYPE_PID', 21);
define('KMIPSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 22);
define('KMIPSERVER_EXTERNALCRYPTODATA_PID', 23);
define('KMIPSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 24);
define('KMIPSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 25);
define('KMIPSERVER_EXTERNALCRYPTOKEYID_PID', 26);
define('KMIPSERVER_EXTERNALCRYPTOKEYSECRET_PID', 27);
define('KMIPSERVER_EXTERNALCRYPTOMETHOD_PID', 28);
define('KMIPSERVER_EXTERNALCRYPTOMODE_PID', 29);
define('KMIPSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 30);
define('KMIPSERVER_GENERATEDCERTBYTES_PID', 31);
define('KMIPSERVER_GENERATEDCERTHANDLE_PID', 32);
define('KMIPSERVER_PORT_PID', 33);
define('KMIPSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 34);
define('KMIPSERVER_SOCKETLOCALADDRESS_PID', 35);
define('KMIPSERVER_SOCKETLOCALPORT_PID', 36);
define('KMIPSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 37);
define('KMIPSERVER_SOCKETTIMEOUT_PID', 38);
define('KMIPSERVER_SOCKETUSEIPV6_PID', 39);
define('KMIPSERVER_STORAGEFILENAME_PID', 40);
define('KMIPSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 41);
define('KMIPSERVER_TLSBASECONFIGURATION_PID', 42);
define('KMIPSERVER_TLSCIPHERSUITES_PID', 43);
define('KMIPSERVER_TLSECCURVES_PID', 44);
define('KMIPSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 45);
define('KMIPSERVER_TLSPRESHAREDIDENTITY_PID', 46);
define('KMIPSERVER_TLSPRESHAREDKEY_PID', 47);
define('KMIPSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 48);
define('KMIPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 49);
define('KMIPSERVER_TLSREVOCATIONCHECK_PID', 50);
define('KMIPSERVER_TLSSSLOPTIONS_PID', 51);
define('KMIPSERVER_TLSTLSMODE_PID', 52);
define('KMIPSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 53);
define('KMIPSERVER_TLSUSESESSIONRESUMPTION_PID', 54);
define('KMIPSERVER_TLSVERSIONS_PID', 55);
define('KMIPSERVER_USERCOUNT_PID', 56);
define('KMIPSERVER_USERASSOCIATEDDATA_PID', 57);
define('KMIPSERVER_USERBASEPATH_PID', 58);
define('KMIPSERVER_USERCERT_PID', 59);
define('KMIPSERVER_USERDATA_PID', 60);
define('KMIPSERVER_USERHANDLE_PID', 61);
define('KMIPSERVER_USERHASHALGORITHM_PID', 62);
define('KMIPSERVER_USERINCOMINGSPEEDLIMIT_PID', 63);
define('KMIPSERVER_USEROTPALGORITHM_PID', 64);
define('KMIPSERVER_USEROTPVALUE_PID', 65);
define('KMIPSERVER_USEROUTGOINGSPEEDLIMIT_PID', 66);
define('KMIPSERVER_USERPASSWORD_PID', 67);
define('KMIPSERVER_USERPASSWORDLEN_PID', 68);
define('KMIPSERVER_USERSHAREDSECRET_PID', 69);
define('KMIPSERVER_USERSSHKEY_PID', 70);
define('KMIPSERVER_USERUSERNAME_PID', 71);


/*
 * KMIPServer Enums
 */

define('KMIPSERVER_ENCODERTYPE_TTLV', 0);
define('KMIPSERVER_ENCODERTYPE_XML', 1);
define('KMIPSERVER_ENCODERTYPE_JSON', 2);

define('KMIPSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('KMIPSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('KMIPSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('KMIPSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('KMIPSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('KMIPSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('KMIPSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('KMIPSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('KMIPSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('KMIPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('KMIPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('KMIPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('KMIPSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('KMIPSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('KMIPSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('KMIPSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('KMIPSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('KMIPSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('KMIPSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('KMIPSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('KMIPSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('KMIPSERVER_TLSTLSMODE_DEFAULT', 0);
define('KMIPSERVER_TLSTLSMODE_NO_TLS', 1);
define('KMIPSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('KMIPSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);

define('KMIPSERVER_USEROTPALGORITHM_HMAC', 0);
define('KMIPSERVER_USEROTPALGORITHM_TIME', 1);



/*
 * KMIPServer Methods
 */

define('KMIPSERVER_CONFIG_MID', 2);
define('KMIPSERVER_GETCLIENTCERT_MID', 3);
define('KMIPSERVER_GETCLIENTCERTREQUEST_MID', 4);
define('KMIPSERVER_SETCLIENTCERT_MID', 5);
define('KMIPSERVER_START_MID', 6);
define('KMIPSERVER_STOP_MID', 7);


/*
 * KMIPServer Events
 */
  
define('KMIPSERVER_AFTERGENERATECERT_EID', 1);
define('KMIPSERVER_AFTERGENERATEKEY_EID', 2);
define('KMIPSERVER_AUTHATTEMPT_EID', 3);
define('KMIPSERVER_BEFOREGENERATECERT_EID', 4);
define('KMIPSERVER_BEFOREGENERATEKEY_EID', 5);
define('KMIPSERVER_DESTROYACTION_EID', 6);
define('KMIPSERVER_ERROR_EID', 7);
define('KMIPSERVER_EXTERNALSIGN_EID', 8);
define('KMIPSERVER_REQUEST_EID', 9);

/*
 * MailReader Properties
 */

define('MAILREADER_ATTACHCOUNT_PID', 1);
define('MAILREADER_ATTACHCONTENTSUBTYPE_PID', 2);
define('MAILREADER_ATTACHCONTENTTYPE_PID', 3);
define('MAILREADER_ATTACHCREATIONDATE_PID', 4);
define('MAILREADER_ATTACHDATA_PID', 5);
define('MAILREADER_ATTACHDESCRIPTION_PID', 6);
define('MAILREADER_ATTACHFILENAME_PID', 7);
define('MAILREADER_ATTACHID_PID', 8);
define('MAILREADER_ATTACHMODIFICATIONDATE_PID', 9);
define('MAILREADER_ATTACHREADDATE_PID', 10);
define('MAILREADER_ATTACHSIZE_PID', 11);
define('MAILREADER_BCCADDRCOUNT_PID', 12);
define('MAILREADER_BCCADDRADDRESS_PID', 13);
define('MAILREADER_BCCADDRDISPLAYNAME_PID', 14);
define('MAILREADER_BCCADDRGROUPNAME_PID', 15);
define('MAILREADER_BLOCKEDCERTCOUNT_PID', 16);
define('MAILREADER_BLOCKEDCERTBYTES_PID', 17);
define('MAILREADER_BLOCKEDCERTHANDLE_PID', 18);
define('MAILREADER_CCADDRCOUNT_PID', 19);
define('MAILREADER_CCADDRADDRESS_PID', 20);
define('MAILREADER_CCADDRDISPLAYNAME_PID', 21);
define('MAILREADER_CCADDRGROUPNAME_PID', 22);
define('MAILREADER_DECRYPTIONCERTBYTES_PID', 23);
define('MAILREADER_DECRYPTIONCERTCA_PID', 24);
define('MAILREADER_DECRYPTIONCERTCAKEYID_PID', 25);
define('MAILREADER_DECRYPTIONCERTCRLDISTRIBUTIONPOINTS_PID', 26);
define('MAILREADER_DECRYPTIONCERTCURVE_PID', 27);
define('MAILREADER_DECRYPTIONCERTFINGERPRINT_PID', 28);
define('MAILREADER_DECRYPTIONCERTFRIENDLYNAME_PID', 29);
define('MAILREADER_DECRYPTIONCERTHANDLE_PID', 30);
define('MAILREADER_DECRYPTIONCERTHASHALGORITHM_PID', 31);
define('MAILREADER_DECRYPTIONCERTISSUER_PID', 32);
define('MAILREADER_DECRYPTIONCERTISSUERRDN_PID', 33);
define('MAILREADER_DECRYPTIONCERTKEYALGORITHM_PID', 34);
define('MAILREADER_DECRYPTIONCERTKEYBITS_PID', 35);
define('MAILREADER_DECRYPTIONCERTKEYFINGERPRINT_PID', 36);
define('MAILREADER_DECRYPTIONCERTKEYUSAGE_PID', 37);
define('MAILREADER_DECRYPTIONCERTKEYVALID_PID', 38);
define('MAILREADER_DECRYPTIONCERTOCSPLOCATIONS_PID', 39);
define('MAILREADER_DECRYPTIONCERTORIGIN_PID', 40);
define('MAILREADER_DECRYPTIONCERTPOLICYIDS_PID', 41);
define('MAILREADER_DECRYPTIONCERTPRIVATEKEYBYTES_PID', 42);
define('MAILREADER_DECRYPTIONCERTPRIVATEKEYEXISTS_PID', 43);
define('MAILREADER_DECRYPTIONCERTPRIVATEKEYEXTRACTABLE_PID', 44);
define('MAILREADER_DECRYPTIONCERTPUBLICKEYBYTES_PID', 45);
define('MAILREADER_DECRYPTIONCERTSELFSIGNED_PID', 46);
define('MAILREADER_DECRYPTIONCERTSERIALNUMBER_PID', 47);
define('MAILREADER_DECRYPTIONCERTSIGALGORITHM_PID', 48);
define('MAILREADER_DECRYPTIONCERTSUBJECT_PID', 49);
define('MAILREADER_DECRYPTIONCERTSUBJECTKEYID_PID', 50);
define('MAILREADER_DECRYPTIONCERTSUBJECTRDN_PID', 51);
define('MAILREADER_DECRYPTIONCERTVALIDFROM_PID', 52);
define('MAILREADER_DECRYPTIONCERTVALIDTO_PID', 53);
define('MAILREADER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 54);
define('MAILREADER_EXTERNALCRYPTODATA_PID', 55);
define('MAILREADER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 56);
define('MAILREADER_EXTERNALCRYPTOHASHALGORITHM_PID', 57);
define('MAILREADER_EXTERNALCRYPTOKEYID_PID', 58);
define('MAILREADER_EXTERNALCRYPTOKEYSECRET_PID', 59);
define('MAILREADER_EXTERNALCRYPTOMETHOD_PID', 60);
define('MAILREADER_EXTERNALCRYPTOMODE_PID', 61);
define('MAILREADER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 62);
define('MAILREADER_FROMADDRCOUNT_PID', 63);
define('MAILREADER_FROMADDRADDRESS_PID', 64);
define('MAILREADER_FROMADDRDISPLAYNAME_PID', 65);
define('MAILREADER_FROMADDRGROUPNAME_PID', 66);
define('MAILREADER_IGNORECHAINVALIDATIONERRORS_PID', 67);
define('MAILREADER_KNOWNCERTCOUNT_PID', 68);
define('MAILREADER_KNOWNCERTBYTES_PID', 69);
define('MAILREADER_KNOWNCERTHANDLE_PID', 70);
define('MAILREADER_KNOWNCRLCOUNT_PID', 71);
define('MAILREADER_KNOWNCRLBYTES_PID', 72);
define('MAILREADER_KNOWNCRLHANDLE_PID', 73);
define('MAILREADER_KNOWNOCSPCOUNT_PID', 74);
define('MAILREADER_KNOWNOCSPBYTES_PID', 75);
define('MAILREADER_KNOWNOCSPHANDLE_PID', 76);
define('MAILREADER_MSGATTACHMENTCOUNT_PID', 77);
define('MAILREADER_MSGBCC_PID', 78);
define('MAILREADER_MSGCC_PID', 79);
define('MAILREADER_MSGCOMMENTS_PID', 80);
define('MAILREADER_MSGDATE_PID', 81);
define('MAILREADER_MSGDELIVERYRECEIPT_PID', 82);
define('MAILREADER_MSGFROM_PID', 83);
define('MAILREADER_MSGHTMLTEXT_PID', 84);
define('MAILREADER_MSGID_PID', 85);
define('MAILREADER_MSGINREPLYTO_PID', 86);
define('MAILREADER_MSGKEYWORDS_PID', 87);
define('MAILREADER_MSGMAILER_PID', 88);
define('MAILREADER_MSGPLAINTEXT_PID', 89);
define('MAILREADER_MSGPRIORITY_PID', 90);
define('MAILREADER_MSGREADRECEIPT_PID', 91);
define('MAILREADER_MSGREFERENCES_PID', 92);
define('MAILREADER_MSGREPLYTO_PID', 93);
define('MAILREADER_MSGRETURNPATH_PID', 94);
define('MAILREADER_MSGSENDER_PID', 95);
define('MAILREADER_MSGSENDTO_PID', 96);
define('MAILREADER_MSGSUBJECT_PID', 97);
define('MAILREADER_OFFLINEMODE_PID', 98);
define('MAILREADER_HEADERFIELDCOUNT_PID', 99);
define('MAILREADER_HEADERFIELDNAME_PID', 100);
define('MAILREADER_HEADERFIELDVALUE_PID', 101);
define('MAILREADER_PROXYADDRESS_PID', 102);
define('MAILREADER_PROXYAUTHENTICATION_PID', 103);
define('MAILREADER_PROXYPASSWORD_PID', 104);
define('MAILREADER_PROXYPORT_PID', 105);
define('MAILREADER_PROXYPROXYTYPE_PID', 106);
define('MAILREADER_PROXYREQUESTHEADERS_PID', 107);
define('MAILREADER_PROXYRESPONSEBODY_PID', 108);
define('MAILREADER_PROXYRESPONSEHEADERS_PID', 109);
define('MAILREADER_PROXYUSEIPV6_PID', 110);
define('MAILREADER_PROXYUSEPROXY_PID', 111);
define('MAILREADER_PROXYUSERNAME_PID', 112);
define('MAILREADER_REPLYTOADDRCOUNT_PID', 113);
define('MAILREADER_REPLYTOADDRADDRESS_PID', 114);
define('MAILREADER_REPLYTOADDRDISPLAYNAME_PID', 115);
define('MAILREADER_REPLYTOADDRGROUPNAME_PID', 116);
define('MAILREADER_REVOCATIONCHECK_PID', 117);
define('MAILREADER_SECINFOCHAINVALIDATIONDETAILS_PID', 118);
define('MAILREADER_SECINFOCHAINVALIDATIONRESULT_PID', 119);
define('MAILREADER_SECINFOCLAIMEDSIGNINGTIME_PID', 120);
define('MAILREADER_SECINFOENCRYPTED_PID', 121);
define('MAILREADER_SECINFOENCRYPTIONALGORITHM_PID', 122);
define('MAILREADER_SECINFOHASHALGORITHM_PID', 123);
define('MAILREADER_SECINFOSIGNATUREVALIDATIONRESULT_PID', 124);
define('MAILREADER_SECINFOSIGNED_PID', 125);
define('MAILREADER_SECINFOVALIDATIONLOG_PID', 126);
define('MAILREADER_SENDERADDRADDRESS_PID', 127);
define('MAILREADER_SENDERADDRDISPLAYNAME_PID', 128);
define('MAILREADER_SENDERADDRGROUPNAME_PID', 129);
define('MAILREADER_SENDTOADDRCOUNT_PID', 130);
define('MAILREADER_SENDTOADDRADDRESS_PID', 131);
define('MAILREADER_SENDTOADDRDISPLAYNAME_PID', 132);
define('MAILREADER_SENDTOADDRGROUPNAME_PID', 133);
define('MAILREADER_SIGNINGCERTBYTES_PID', 134);
define('MAILREADER_SIGNINGCERTCA_PID', 135);
define('MAILREADER_SIGNINGCERTCAKEYID_PID', 136);
define('MAILREADER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 137);
define('MAILREADER_SIGNINGCERTCURVE_PID', 138);
define('MAILREADER_SIGNINGCERTFINGERPRINT_PID', 139);
define('MAILREADER_SIGNINGCERTFRIENDLYNAME_PID', 140);
define('MAILREADER_SIGNINGCERTHANDLE_PID', 141);
define('MAILREADER_SIGNINGCERTHASHALGORITHM_PID', 142);
define('MAILREADER_SIGNINGCERTISSUER_PID', 143);
define('MAILREADER_SIGNINGCERTISSUERRDN_PID', 144);
define('MAILREADER_SIGNINGCERTKEYALGORITHM_PID', 145);
define('MAILREADER_SIGNINGCERTKEYBITS_PID', 146);
define('MAILREADER_SIGNINGCERTKEYFINGERPRINT_PID', 147);
define('MAILREADER_SIGNINGCERTKEYUSAGE_PID', 148);
define('MAILREADER_SIGNINGCERTKEYVALID_PID', 149);
define('MAILREADER_SIGNINGCERTOCSPLOCATIONS_PID', 150);
define('MAILREADER_SIGNINGCERTPOLICYIDS_PID', 151);
define('MAILREADER_SIGNINGCERTPUBLICKEYBYTES_PID', 152);
define('MAILREADER_SIGNINGCERTSELFSIGNED_PID', 153);
define('MAILREADER_SIGNINGCERTSERIALNUMBER_PID', 154);
define('MAILREADER_SIGNINGCERTSIGALGORITHM_PID', 155);
define('MAILREADER_SIGNINGCERTSUBJECT_PID', 156);
define('MAILREADER_SIGNINGCERTSUBJECTKEYID_PID', 157);
define('MAILREADER_SIGNINGCERTSUBJECTRDN_PID', 158);
define('MAILREADER_SIGNINGCERTVALIDFROM_PID', 159);
define('MAILREADER_SIGNINGCERTVALIDTO_PID', 160);
define('MAILREADER_SOCKETDNSMODE_PID', 161);
define('MAILREADER_SOCKETDNSPORT_PID', 162);
define('MAILREADER_SOCKETDNSQUERYTIMEOUT_PID', 163);
define('MAILREADER_SOCKETDNSSERVERS_PID', 164);
define('MAILREADER_SOCKETDNSTOTALTIMEOUT_PID', 165);
define('MAILREADER_SOCKETINCOMINGSPEEDLIMIT_PID', 166);
define('MAILREADER_SOCKETLOCALADDRESS_PID', 167);
define('MAILREADER_SOCKETLOCALPORT_PID', 168);
define('MAILREADER_SOCKETOUTGOINGSPEEDLIMIT_PID', 169);
define('MAILREADER_SOCKETTIMEOUT_PID', 170);
define('MAILREADER_SOCKETUSEIPV6_PID', 171);
define('MAILREADER_TLSAUTOVALIDATECERTIFICATES_PID', 172);
define('MAILREADER_TLSBASECONFIGURATION_PID', 173);
define('MAILREADER_TLSCIPHERSUITES_PID', 174);
define('MAILREADER_TLSECCURVES_PID', 175);
define('MAILREADER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 176);
define('MAILREADER_TLSPRESHAREDIDENTITY_PID', 177);
define('MAILREADER_TLSPRESHAREDKEY_PID', 178);
define('MAILREADER_TLSPRESHAREDKEYCIPHERSUITE_PID', 179);
define('MAILREADER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 180);
define('MAILREADER_TLSREVOCATIONCHECK_PID', 181);
define('MAILREADER_TLSSSLOPTIONS_PID', 182);
define('MAILREADER_TLSTLSMODE_PID', 183);
define('MAILREADER_TLSUSEEXTENDEDMASTERSECRET_PID', 184);
define('MAILREADER_TLSUSESESSIONRESUMPTION_PID', 185);
define('MAILREADER_TLSVERSIONS_PID', 186);
define('MAILREADER_TRUSTEDCERTCOUNT_PID', 187);
define('MAILREADER_TRUSTEDCERTBYTES_PID', 188);
define('MAILREADER_TRUSTEDCERTHANDLE_PID', 189);
define('MAILREADER_USEDCERTCOUNT_PID', 190);
define('MAILREADER_USEDCERTBYTES_PID', 191);
define('MAILREADER_USEDCERTCA_PID', 192);
define('MAILREADER_USEDCERTCAKEYID_PID', 193);
define('MAILREADER_USEDCERTCRLDISTRIBUTIONPOINTS_PID', 194);
define('MAILREADER_USEDCERTCURVE_PID', 195);
define('MAILREADER_USEDCERTFINGERPRINT_PID', 196);
define('MAILREADER_USEDCERTFRIENDLYNAME_PID', 197);
define('MAILREADER_USEDCERTHANDLE_PID', 198);
define('MAILREADER_USEDCERTHASHALGORITHM_PID', 199);
define('MAILREADER_USEDCERTISSUER_PID', 200);
define('MAILREADER_USEDCERTISSUERRDN_PID', 201);
define('MAILREADER_USEDCERTKEYALGORITHM_PID', 202);
define('MAILREADER_USEDCERTKEYBITS_PID', 203);
define('MAILREADER_USEDCERTKEYFINGERPRINT_PID', 204);
define('MAILREADER_USEDCERTKEYUSAGE_PID', 205);
define('MAILREADER_USEDCERTKEYVALID_PID', 206);
define('MAILREADER_USEDCERTOCSPLOCATIONS_PID', 207);
define('MAILREADER_USEDCERTORIGIN_PID', 208);
define('MAILREADER_USEDCERTPOLICYIDS_PID', 209);
define('MAILREADER_USEDCERTPRIVATEKEYBYTES_PID', 210);
define('MAILREADER_USEDCERTPRIVATEKEYEXISTS_PID', 211);
define('MAILREADER_USEDCERTPRIVATEKEYEXTRACTABLE_PID', 212);
define('MAILREADER_USEDCERTPUBLICKEYBYTES_PID', 213);
define('MAILREADER_USEDCERTSELFSIGNED_PID', 214);
define('MAILREADER_USEDCERTSERIALNUMBER_PID', 215);
define('MAILREADER_USEDCERTSIGALGORITHM_PID', 216);
define('MAILREADER_USEDCERTSUBJECT_PID', 217);
define('MAILREADER_USEDCERTSUBJECTKEYID_PID', 218);
define('MAILREADER_USEDCERTSUBJECTRDN_PID', 219);
define('MAILREADER_USEDCERTVALIDFROM_PID', 220);
define('MAILREADER_USEDCERTVALIDTO_PID', 221);
define('MAILREADER_VALIDATIONMOMENT_PID', 222);


/*
 * MailReader Enums
 */

define('MAILREADER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('MAILREADER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('MAILREADER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('MAILREADER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('MAILREADER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('MAILREADER_MSGPRIORITY_LOWEST', 0);
define('MAILREADER_MSGPRIORITY_LOW', 1);
define('MAILREADER_MSGPRIORITY_NORMAL', 2);
define('MAILREADER_MSGPRIORITY_HIGH', 3);
define('MAILREADER_MSGPRIORITY_HIGHEST', 4);

define('MAILREADER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('MAILREADER_PROXYAUTHENTICATION_BASIC', 1);
define('MAILREADER_PROXYAUTHENTICATION_DIGEST', 2);
define('MAILREADER_PROXYAUTHENTICATION_NTLM', 3);

define('MAILREADER_PROXYPROXYTYPE_NONE', 0);
define('MAILREADER_PROXYPROXYTYPE_SOCKS_4', 1);
define('MAILREADER_PROXYPROXYTYPE_SOCKS_5', 2);
define('MAILREADER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('MAILREADER_PROXYPROXYTYPE_HTTP', 4);

define('MAILREADER_REVOCATIONCHECK_NONE', 0);
define('MAILREADER_REVOCATIONCHECK_AUTO', 1);
define('MAILREADER_REVOCATIONCHECK_ALL_CRL', 2);
define('MAILREADER_REVOCATIONCHECK_ALL_OCSP', 3);
define('MAILREADER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('MAILREADER_REVOCATIONCHECK_ANY_CRL', 5);
define('MAILREADER_REVOCATIONCHECK_ANY_OCSP', 6);
define('MAILREADER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('MAILREADER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('MAILREADER_SECINFOCHAINVALIDATIONRESULT_VALID', 0);
define('MAILREADER_SECINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('MAILREADER_SECINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('MAILREADER_SECINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('MAILREADER_SECINFOSIGNATUREVALIDATIONRESULT_VALID', 0);
define('MAILREADER_SECINFOSIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('MAILREADER_SECINFOSIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('MAILREADER_SECINFOSIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('MAILREADER_SECINFOSIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('MAILREADER_SOCKETDNSMODE_AUTO', 0);
define('MAILREADER_SOCKETDNSMODE_PLATFORM', 1);
define('MAILREADER_SOCKETDNSMODE_OWN', 2);
define('MAILREADER_SOCKETDNSMODE_OWN_SECURE', 3);

define('MAILREADER_TLSBASECONFIGURATION_DEFAULT', 0);
define('MAILREADER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('MAILREADER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('MAILREADER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('MAILREADER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('MAILREADER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('MAILREADER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('MAILREADER_TLSREVOCATIONCHECK_NONE', 0);
define('MAILREADER_TLSREVOCATIONCHECK_AUTO', 1);
define('MAILREADER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('MAILREADER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('MAILREADER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('MAILREADER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('MAILREADER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('MAILREADER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('MAILREADER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('MAILREADER_TLSTLSMODE_DEFAULT', 0);
define('MAILREADER_TLSTLSMODE_NO_TLS', 1);
define('MAILREADER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('MAILREADER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * MailReader Methods
 */

define('MAILREADER_CONFIG_MID', 2);
define('MAILREADER_FINDATTACHMENT_MID', 3);
define('MAILREADER_LOADFROMFILE_MID', 4);


/*
 * MailReader Events
 */
  
define('MAILREADER_CHAINVALIDATED_EID', 1);
define('MAILREADER_DECRYPTIONINFONEEDED_EID', 2);
define('MAILREADER_ERROR_EID', 3);
define('MAILREADER_EXTERNALDECRYPT_EID', 4);
define('MAILREADER_SIGNATUREFOUND_EID', 5);
define('MAILREADER_SIGNATUREVALIDATED_EID', 6);

/*
 * MailWriter Properties
 */

define('MAILWRITER_ATTACHENCODING_PID', 1);
define('MAILWRITER_ATTACHCOUNT_PID', 2);
define('MAILWRITER_ATTACHCONTENTSUBTYPE_PID', 3);
define('MAILWRITER_ATTACHCONTENTTYPE_PID', 4);
define('MAILWRITER_ATTACHCREATIONDATE_PID', 5);
define('MAILWRITER_ATTACHDATA_PID', 6);
define('MAILWRITER_ATTACHDESCRIPTION_PID', 7);
define('MAILWRITER_ATTACHFILENAME_PID', 8);
define('MAILWRITER_ATTACHID_PID', 9);
define('MAILWRITER_ATTACHMODIFICATIONDATE_PID', 10);
define('MAILWRITER_ATTACHREADDATE_PID', 11);
define('MAILWRITER_ATTACHSIZE_PID', 12);
define('MAILWRITER_BCCADDRCOUNT_PID', 13);
define('MAILWRITER_BCCADDRADDRESS_PID', 14);
define('MAILWRITER_BCCADDRDISPLAYNAME_PID', 15);
define('MAILWRITER_BCCADDRGROUPNAME_PID', 16);
define('MAILWRITER_CCADDRCOUNT_PID', 17);
define('MAILWRITER_CCADDRADDRESS_PID', 18);
define('MAILWRITER_CCADDRDISPLAYNAME_PID', 19);
define('MAILWRITER_CCADDRGROUPNAME_PID', 20);
define('MAILWRITER_CHARSET_PID', 21);
define('MAILWRITER_ENCRYPTIONCERTCOUNT_PID', 22);
define('MAILWRITER_ENCRYPTIONCERTBYTES_PID', 23);
define('MAILWRITER_ENCRYPTIONCERTHANDLE_PID', 24);
define('MAILWRITER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 25);
define('MAILWRITER_EXTERNALCRYPTODATA_PID', 26);
define('MAILWRITER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 27);
define('MAILWRITER_EXTERNALCRYPTOHASHALGORITHM_PID', 28);
define('MAILWRITER_EXTERNALCRYPTOKEYID_PID', 29);
define('MAILWRITER_EXTERNALCRYPTOKEYSECRET_PID', 30);
define('MAILWRITER_EXTERNALCRYPTOMETHOD_PID', 31);
define('MAILWRITER_EXTERNALCRYPTOMODE_PID', 32);
define('MAILWRITER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 33);
define('MAILWRITER_FROMADDRCOUNT_PID', 34);
define('MAILWRITER_FROMADDRADDRESS_PID', 35);
define('MAILWRITER_FROMADDRDISPLAYNAME_PID', 36);
define('MAILWRITER_FROMADDRGROUPNAME_PID', 37);
define('MAILWRITER_HEADERENCODING_PID', 38);
define('MAILWRITER_MAILER_PID', 39);
define('MAILWRITER_MSGATTACHMENTCOUNT_PID', 40);
define('MAILWRITER_MSGBCC_PID', 41);
define('MAILWRITER_MSGCC_PID', 42);
define('MAILWRITER_MSGCOMMENTS_PID', 43);
define('MAILWRITER_MSGDATE_PID', 44);
define('MAILWRITER_MSGDELIVERYRECEIPT_PID', 45);
define('MAILWRITER_MSGFROM_PID', 46);
define('MAILWRITER_MSGHTMLTEXT_PID', 47);
define('MAILWRITER_MSGID_PID', 48);
define('MAILWRITER_MSGINREPLYTO_PID', 49);
define('MAILWRITER_MSGKEYWORDS_PID', 50);
define('MAILWRITER_MSGMAILER_PID', 51);
define('MAILWRITER_MSGPLAINTEXT_PID', 52);
define('MAILWRITER_MSGPRIORITY_PID', 53);
define('MAILWRITER_MSGREADRECEIPT_PID', 54);
define('MAILWRITER_MSGREFERENCES_PID', 55);
define('MAILWRITER_MSGREPLYTO_PID', 56);
define('MAILWRITER_MSGRETURNPATH_PID', 57);
define('MAILWRITER_MSGSENDER_PID', 58);
define('MAILWRITER_MSGSENDTO_PID', 59);
define('MAILWRITER_MSGSUBJECT_PID', 60);
define('MAILWRITER_HEADERFIELDCOUNT_PID', 61);
define('MAILWRITER_HEADERFIELDNAME_PID', 62);
define('MAILWRITER_HEADERFIELDVALUE_PID', 63);
define('MAILWRITER_REPLYTOADDRCOUNT_PID', 64);
define('MAILWRITER_REPLYTOADDRADDRESS_PID', 65);
define('MAILWRITER_REPLYTOADDRDISPLAYNAME_PID', 66);
define('MAILWRITER_REPLYTOADDRGROUPNAME_PID', 67);
define('MAILWRITER_SECSETTINGSCLAIMEDSIGNINGTIME_PID', 68);
define('MAILWRITER_SECSETTINGSENCRYPT_PID', 69);
define('MAILWRITER_SECSETTINGSENCRYPTIONALGORITHM_PID', 70);
define('MAILWRITER_SECSETTINGSHASHALGORITHM_PID', 71);
define('MAILWRITER_SECSETTINGSSIGN_PID', 72);
define('MAILWRITER_SECSETTINGSSIGNATUREFORMAT_PID', 73);
define('MAILWRITER_SECSETTINGSSIGNBEFOREENCRYPT_PID', 74);
define('MAILWRITER_SECSETTINGSSIGNMESSAGEHEADER_PID', 75);
define('MAILWRITER_SENDERADDRADDRESS_PID', 76);
define('MAILWRITER_SENDERADDRDISPLAYNAME_PID', 77);
define('MAILWRITER_SENDERADDRGROUPNAME_PID', 78);
define('MAILWRITER_SENDTOADDRCOUNT_PID', 79);
define('MAILWRITER_SENDTOADDRADDRESS_PID', 80);
define('MAILWRITER_SENDTOADDRDISPLAYNAME_PID', 81);
define('MAILWRITER_SENDTOADDRGROUPNAME_PID', 82);
define('MAILWRITER_SIGNINGCERTBYTES_PID', 83);
define('MAILWRITER_SIGNINGCERTHANDLE_PID', 84);
define('MAILWRITER_SIGNINGCHAINCOUNT_PID', 85);
define('MAILWRITER_SIGNINGCHAINBYTES_PID', 86);
define('MAILWRITER_SIGNINGCHAINHANDLE_PID', 87);
define('MAILWRITER_TEXTENCODING_PID', 88);


/*
 * MailWriter Enums
 */

define('MAILWRITER_ATTACHENCODING_AUTO', 0);
define('MAILWRITER_ATTACHENCODING_8BIT', 1);
define('MAILWRITER_ATTACHENCODING_BASE_64', 2);
define('MAILWRITER_ATTACHENCODING_QUOTED_PRINTABLE', 3);

define('MAILWRITER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('MAILWRITER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('MAILWRITER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('MAILWRITER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('MAILWRITER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('MAILWRITER_HEADERENCODING_AUTO', 0);
define('MAILWRITER_HEADERENCODING_8BIT', 1);
define('MAILWRITER_HEADERENCODING_BASE_64', 2);
define('MAILWRITER_HEADERENCODING_QUOTED_PRINTABLE', 3);

define('MAILWRITER_MSGPRIORITY_LOWEST', 0);
define('MAILWRITER_MSGPRIORITY_LOW', 1);
define('MAILWRITER_MSGPRIORITY_NORMAL', 2);
define('MAILWRITER_MSGPRIORITY_HIGH', 3);
define('MAILWRITER_MSGPRIORITY_HIGHEST', 4);

define('MAILWRITER_SECSETTINGSSIGNATUREFORMAT_MULTIPART_SIGNED', 0);
define('MAILWRITER_SECSETTINGSSIGNATUREFORMAT_SIGNED_DATA', 1);

define('MAILWRITER_TEXTENCODING_AUTO', 0);
define('MAILWRITER_TEXTENCODING_8BIT', 1);
define('MAILWRITER_TEXTENCODING_BASE_64', 2);
define('MAILWRITER_TEXTENCODING_QUOTED_PRINTABLE', 3);



/*
 * MailWriter Methods
 */

define('MAILWRITER_ATTACHBYTES_MID', 2);
define('MAILWRITER_ATTACHFILE_MID', 3);
define('MAILWRITER_ATTACHIMAGE_MID', 4);
define('MAILWRITER_CONFIG_MID', 5);
define('MAILWRITER_SAVETOFILE_MID', 6);


/*
 * MailWriter Events
 */
  
define('MAILWRITER_ERROR_EID', 1);
define('MAILWRITER_EXTERNALSIGN_EID', 2);

/*
 * MessageCompressor Properties
 */

define('MESSAGECOMPRESSOR_COMPRESSIONLEVEL_PID', 1);
define('MESSAGECOMPRESSOR_INPUTFILE_PID', 2);
define('MESSAGECOMPRESSOR_OUTPUTFILE_PID', 3);


/*
 * MessageCompressor Enums
 */



/*
 * MessageCompressor Methods
 */

define('MESSAGECOMPRESSOR_COMPRESS_MID', 2);
define('MESSAGECOMPRESSOR_CONFIG_MID', 3);


/*
 * MessageCompressor Events
 */
  
define('MESSAGECOMPRESSOR_ERROR_EID', 1);

/*
 * MessageDecompressor Properties
 */

define('MESSAGEDECOMPRESSOR_INPUTFILE_PID', 1);
define('MESSAGEDECOMPRESSOR_OUTPUTFILE_PID', 2);


/*
 * MessageDecompressor Enums
 */



/*
 * MessageDecompressor Methods
 */

define('MESSAGEDECOMPRESSOR_CONFIG_MID', 2);
define('MESSAGEDECOMPRESSOR_DECOMPRESS_MID', 3);


/*
 * MessageDecompressor Events
 */
  
define('MESSAGEDECOMPRESSOR_ERROR_EID', 1);

/*
 * MessageDecryptor Properties
 */

define('MESSAGEDECRYPTOR_CERTIFICATEBYTES_PID', 1);
define('MESSAGEDECRYPTOR_CERTIFICATECA_PID', 2);
define('MESSAGEDECRYPTOR_CERTIFICATECAKEYID_PID', 3);
define('MESSAGEDECRYPTOR_CERTIFICATECRLDISTRIBUTIONPOINTS_PID', 4);
define('MESSAGEDECRYPTOR_CERTIFICATECURVE_PID', 5);
define('MESSAGEDECRYPTOR_CERTIFICATEFINGERPRINT_PID', 6);
define('MESSAGEDECRYPTOR_CERTIFICATEFRIENDLYNAME_PID', 7);
define('MESSAGEDECRYPTOR_CERTIFICATEHANDLE_PID', 8);
define('MESSAGEDECRYPTOR_CERTIFICATEHASHALGORITHM_PID', 9);
define('MESSAGEDECRYPTOR_CERTIFICATEISSUER_PID', 10);
define('MESSAGEDECRYPTOR_CERTIFICATEISSUERRDN_PID', 11);
define('MESSAGEDECRYPTOR_CERTIFICATEKEYALGORITHM_PID', 12);
define('MESSAGEDECRYPTOR_CERTIFICATEKEYBITS_PID', 13);
define('MESSAGEDECRYPTOR_CERTIFICATEKEYFINGERPRINT_PID', 14);
define('MESSAGEDECRYPTOR_CERTIFICATEKEYUSAGE_PID', 15);
define('MESSAGEDECRYPTOR_CERTIFICATEKEYVALID_PID', 16);
define('MESSAGEDECRYPTOR_CERTIFICATEOCSPLOCATIONS_PID', 17);
define('MESSAGEDECRYPTOR_CERTIFICATEORIGIN_PID', 18);
define('MESSAGEDECRYPTOR_CERTIFICATEPOLICYIDS_PID', 19);
define('MESSAGEDECRYPTOR_CERTIFICATEPRIVATEKEYBYTES_PID', 20);
define('MESSAGEDECRYPTOR_CERTIFICATEPRIVATEKEYEXISTS_PID', 21);
define('MESSAGEDECRYPTOR_CERTIFICATEPRIVATEKEYEXTRACTABLE_PID', 22);
define('MESSAGEDECRYPTOR_CERTIFICATEPUBLICKEYBYTES_PID', 23);
define('MESSAGEDECRYPTOR_CERTIFICATESELFSIGNED_PID', 24);
define('MESSAGEDECRYPTOR_CERTIFICATESERIALNUMBER_PID', 25);
define('MESSAGEDECRYPTOR_CERTIFICATESIGALGORITHM_PID', 26);
define('MESSAGEDECRYPTOR_CERTIFICATESUBJECT_PID', 27);
define('MESSAGEDECRYPTOR_CERTIFICATESUBJECTKEYID_PID', 28);
define('MESSAGEDECRYPTOR_CERTIFICATESUBJECTRDN_PID', 29);
define('MESSAGEDECRYPTOR_CERTIFICATEVALIDFROM_PID', 30);
define('MESSAGEDECRYPTOR_CERTIFICATEVALIDTO_PID', 31);
define('MESSAGEDECRYPTOR_CERTCOUNT_PID', 32);
define('MESSAGEDECRYPTOR_CERTBYTES_PID', 33);
define('MESSAGEDECRYPTOR_CERTHANDLE_PID', 34);
define('MESSAGEDECRYPTOR_ENCRYPTIONALGORITHM_PID', 35);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOCUSTOMPARAMS_PID', 36);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTODATA_PID', 37);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 38);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOHASHALGORITHM_PID', 39);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOKEYID_PID', 40);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOKEYSECRET_PID', 41);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOMETHOD_PID', 42);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOMODE_PID', 43);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 44);
define('MESSAGEDECRYPTOR_INPUTFILE_PID', 45);
define('MESSAGEDECRYPTOR_KEY_PID', 46);
define('MESSAGEDECRYPTOR_OUTPUTFILE_PID', 47);


/*
 * MessageDecryptor Enums
 */

define('MESSAGEDECRYPTOR_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('MESSAGEDECRYPTOR_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOMODE_DISABLED', 1);
define('MESSAGEDECRYPTOR_EXTERNALCRYPTOMODE_GENERIC', 2);



/*
 * MessageDecryptor Methods
 */

define('MESSAGEDECRYPTOR_CONFIG_MID', 2);
define('MESSAGEDECRYPTOR_DECRYPT_MID', 3);


/*
 * MessageDecryptor Events
 */
  
define('MESSAGEDECRYPTOR_ERROR_EID', 1);
define('MESSAGEDECRYPTOR_EXTERNALDECRYPT_EID', 2);
define('MESSAGEDECRYPTOR_RECIPIENTFOUND_EID', 3);

/*
 * MessageEncryptor Properties
 */

define('MESSAGEENCRYPTOR_BITSINKEY_PID', 1);
define('MESSAGEENCRYPTOR_ENCRYPTIONALGORITHM_PID', 2);
define('MESSAGEENCRYPTOR_ENCRYPTIONCERTBYTES_PID', 3);
define('MESSAGEENCRYPTOR_ENCRYPTIONCERTHANDLE_PID', 4);
define('MESSAGEENCRYPTOR_INPUTFILE_PID', 5);
define('MESSAGEENCRYPTOR_KEY_PID', 6);
define('MESSAGEENCRYPTOR_OUTPUTFILE_PID', 7);


/*
 * MessageEncryptor Enums
 */



/*
 * MessageEncryptor Methods
 */

define('MESSAGEENCRYPTOR_CONFIG_MID', 2);
define('MESSAGEENCRYPTOR_ENCRYPT_MID', 3);


/*
 * MessageEncryptor Events
 */
  
define('MESSAGEENCRYPTOR_ERROR_EID', 1);

/*
 * MessageSigner Properties
 */

define('MESSAGESIGNER_CLAIMEDSIGNINGTIME_PID', 1);
define('MESSAGESIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 2);
define('MESSAGESIGNER_EXTERNALCRYPTODATA_PID', 3);
define('MESSAGESIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 4);
define('MESSAGESIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 5);
define('MESSAGESIGNER_EXTERNALCRYPTOKEYID_PID', 6);
define('MESSAGESIGNER_EXTERNALCRYPTOKEYSECRET_PID', 7);
define('MESSAGESIGNER_EXTERNALCRYPTOMETHOD_PID', 8);
define('MESSAGESIGNER_EXTERNALCRYPTOMODE_PID', 9);
define('MESSAGESIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 10);
define('MESSAGESIGNER_HASHALGORITHM_PID', 11);
define('MESSAGESIGNER_INPUTFILE_PID', 12);
define('MESSAGESIGNER_OUTPUTFILE_PID', 13);
define('MESSAGESIGNER_PROXYADDRESS_PID', 14);
define('MESSAGESIGNER_PROXYAUTHENTICATION_PID', 15);
define('MESSAGESIGNER_PROXYPASSWORD_PID', 16);
define('MESSAGESIGNER_PROXYPORT_PID', 17);
define('MESSAGESIGNER_PROXYPROXYTYPE_PID', 18);
define('MESSAGESIGNER_PROXYREQUESTHEADERS_PID', 19);
define('MESSAGESIGNER_PROXYRESPONSEBODY_PID', 20);
define('MESSAGESIGNER_PROXYRESPONSEHEADERS_PID', 21);
define('MESSAGESIGNER_PROXYUSEIPV6_PID', 22);
define('MESSAGESIGNER_PROXYUSEPROXY_PID', 23);
define('MESSAGESIGNER_PROXYUSERNAME_PID', 24);
define('MESSAGESIGNER_SIGNATURETYPE_PID', 25);
define('MESSAGESIGNER_SIGNEDATTRIBUTECOUNT_PID', 26);
define('MESSAGESIGNER_SIGNEDATTRIBUTEOID_PID', 27);
define('MESSAGESIGNER_SIGNEDATTRIBUTEVALUE_PID', 28);
define('MESSAGESIGNER_SIGNINGCERTBYTES_PID', 29);
define('MESSAGESIGNER_SIGNINGCERTHANDLE_PID', 30);
define('MESSAGESIGNER_SIGNINGCHAINCOUNT_PID', 31);
define('MESSAGESIGNER_SIGNINGCHAINBYTES_PID', 32);
define('MESSAGESIGNER_SIGNINGCHAINHANDLE_PID', 33);
define('MESSAGESIGNER_SOCKETDNSMODE_PID', 34);
define('MESSAGESIGNER_SOCKETDNSPORT_PID', 35);
define('MESSAGESIGNER_SOCKETDNSQUERYTIMEOUT_PID', 36);
define('MESSAGESIGNER_SOCKETDNSSERVERS_PID', 37);
define('MESSAGESIGNER_SOCKETDNSTOTALTIMEOUT_PID', 38);
define('MESSAGESIGNER_SOCKETINCOMINGSPEEDLIMIT_PID', 39);
define('MESSAGESIGNER_SOCKETLOCALADDRESS_PID', 40);
define('MESSAGESIGNER_SOCKETLOCALPORT_PID', 41);
define('MESSAGESIGNER_SOCKETOUTGOINGSPEEDLIMIT_PID', 42);
define('MESSAGESIGNER_SOCKETTIMEOUT_PID', 43);
define('MESSAGESIGNER_SOCKETUSEIPV6_PID', 44);
define('MESSAGESIGNER_TIMESTAMPSERVER_PID', 45);
define('MESSAGESIGNER_SERVERCHAINCOUNT_PID', 46);
define('MESSAGESIGNER_SERVERCHAINBYTES_PID', 47);
define('MESSAGESIGNER_SERVERCHAINCA_PID', 48);
define('MESSAGESIGNER_SERVERCHAINCAKEYID_PID', 49);
define('MESSAGESIGNER_SERVERCHAINCRLDISTRIBUTIONPOINTS_PID', 50);
define('MESSAGESIGNER_SERVERCHAINCURVE_PID', 51);
define('MESSAGESIGNER_SERVERCHAINFINGERPRINT_PID', 52);
define('MESSAGESIGNER_SERVERCHAINFRIENDLYNAME_PID', 53);
define('MESSAGESIGNER_SERVERCHAINHANDLE_PID', 54);
define('MESSAGESIGNER_SERVERCHAINHASHALGORITHM_PID', 55);
define('MESSAGESIGNER_SERVERCHAINISSUER_PID', 56);
define('MESSAGESIGNER_SERVERCHAINISSUERRDN_PID', 57);
define('MESSAGESIGNER_SERVERCHAINKEYALGORITHM_PID', 58);
define('MESSAGESIGNER_SERVERCHAINKEYBITS_PID', 59);
define('MESSAGESIGNER_SERVERCHAINKEYFINGERPRINT_PID', 60);
define('MESSAGESIGNER_SERVERCHAINKEYUSAGE_PID', 61);
define('MESSAGESIGNER_SERVERCHAINKEYVALID_PID', 62);
define('MESSAGESIGNER_SERVERCHAINOCSPLOCATIONS_PID', 63);
define('MESSAGESIGNER_SERVERCHAINORIGIN_PID', 64);
define('MESSAGESIGNER_SERVERCHAINPOLICYIDS_PID', 65);
define('MESSAGESIGNER_SERVERCHAINPRIVATEKEYBYTES_PID', 66);
define('MESSAGESIGNER_SERVERCHAINPRIVATEKEYEXISTS_PID', 67);
define('MESSAGESIGNER_SERVERCHAINPRIVATEKEYEXTRACTABLE_PID', 68);
define('MESSAGESIGNER_SERVERCHAINPUBLICKEYBYTES_PID', 69);
define('MESSAGESIGNER_SERVERCHAINSELFSIGNED_PID', 70);
define('MESSAGESIGNER_SERVERCHAINSERIALNUMBER_PID', 71);
define('MESSAGESIGNER_SERVERCHAINSIGALGORITHM_PID', 72);
define('MESSAGESIGNER_SERVERCHAINSUBJECT_PID', 73);
define('MESSAGESIGNER_SERVERCHAINSUBJECTKEYID_PID', 74);
define('MESSAGESIGNER_SERVERCHAINSUBJECTRDN_PID', 75);
define('MESSAGESIGNER_SERVERCHAINVALIDFROM_PID', 76);
define('MESSAGESIGNER_SERVERCHAINVALIDTO_PID', 77);
define('MESSAGESIGNER_TLSAUTOVALIDATECERTIFICATES_PID', 78);
define('MESSAGESIGNER_TLSBASECONFIGURATION_PID', 79);
define('MESSAGESIGNER_TLSCIPHERSUITES_PID', 80);
define('MESSAGESIGNER_TLSECCURVES_PID', 81);
define('MESSAGESIGNER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 82);
define('MESSAGESIGNER_TLSPRESHAREDIDENTITY_PID', 83);
define('MESSAGESIGNER_TLSPRESHAREDKEY_PID', 84);
define('MESSAGESIGNER_TLSPRESHAREDKEYCIPHERSUITE_PID', 85);
define('MESSAGESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 86);
define('MESSAGESIGNER_TLSREVOCATIONCHECK_PID', 87);
define('MESSAGESIGNER_TLSSSLOPTIONS_PID', 88);
define('MESSAGESIGNER_TLSTLSMODE_PID', 89);
define('MESSAGESIGNER_TLSUSEEXTENDEDMASTERSECRET_PID', 90);
define('MESSAGESIGNER_TLSUSESESSIONRESUMPTION_PID', 91);
define('MESSAGESIGNER_TLSVERSIONS_PID', 92);
define('MESSAGESIGNER_UNSIGNEDATTRIBUTECOUNT_PID', 93);
define('MESSAGESIGNER_UNSIGNEDATTRIBUTEOID_PID', 94);
define('MESSAGESIGNER_UNSIGNEDATTRIBUTEVALUE_PID', 95);


/*
 * MessageSigner Enums
 */

define('MESSAGESIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('MESSAGESIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('MESSAGESIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('MESSAGESIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('MESSAGESIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('MESSAGESIGNER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('MESSAGESIGNER_PROXYAUTHENTICATION_BASIC', 1);
define('MESSAGESIGNER_PROXYAUTHENTICATION_DIGEST', 2);
define('MESSAGESIGNER_PROXYAUTHENTICATION_NTLM', 3);

define('MESSAGESIGNER_PROXYPROXYTYPE_NONE', 0);
define('MESSAGESIGNER_PROXYPROXYTYPE_SOCKS_4', 1);
define('MESSAGESIGNER_PROXYPROXYTYPE_SOCKS_5', 2);
define('MESSAGESIGNER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('MESSAGESIGNER_PROXYPROXYTYPE_HTTP', 4);

define('MESSAGESIGNER_SIGNATURETYPE_UNKNOWN', 0);
define('MESSAGESIGNER_SIGNATURETYPE_PKCS1DETACHED', 1);
define('MESSAGESIGNER_SIGNATURETYPE_PKCS7DETACHED', 2);
define('MESSAGESIGNER_SIGNATURETYPE_PKCS7ENVELOPING', 3);

define('MESSAGESIGNER_SOCKETDNSMODE_AUTO', 0);
define('MESSAGESIGNER_SOCKETDNSMODE_PLATFORM', 1);
define('MESSAGESIGNER_SOCKETDNSMODE_OWN', 2);
define('MESSAGESIGNER_SOCKETDNSMODE_OWN_SECURE', 3);

define('MESSAGESIGNER_TLSBASECONFIGURATION_DEFAULT', 0);
define('MESSAGESIGNER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('MESSAGESIGNER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('MESSAGESIGNER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('MESSAGESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('MESSAGESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('MESSAGESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('MESSAGESIGNER_TLSREVOCATIONCHECK_NONE', 0);
define('MESSAGESIGNER_TLSREVOCATIONCHECK_AUTO', 1);
define('MESSAGESIGNER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('MESSAGESIGNER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('MESSAGESIGNER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('MESSAGESIGNER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('MESSAGESIGNER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('MESSAGESIGNER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('MESSAGESIGNER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('MESSAGESIGNER_TLSTLSMODE_DEFAULT', 0);
define('MESSAGESIGNER_TLSTLSMODE_NO_TLS', 1);
define('MESSAGESIGNER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('MESSAGESIGNER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * MessageSigner Methods
 */

define('MESSAGESIGNER_CONFIG_MID', 2);
define('MESSAGESIGNER_COUNTERSIGN_MID', 3);
define('MESSAGESIGNER_EXTRACTASYNCDATA_MID', 4);
define('MESSAGESIGNER_SIGN_MID', 5);
define('MESSAGESIGNER_SIGNASYNCBEGIN_MID', 6);
define('MESSAGESIGNER_SIGNASYNCEND_MID', 7);
define('MESSAGESIGNER_TIMESTAMP_MID', 8);


/*
 * MessageSigner Events
 */
  
define('MESSAGESIGNER_CERTIFICATEVALIDATE_EID', 1);
define('MESSAGESIGNER_ERROR_EID', 2);
define('MESSAGESIGNER_EXTERNALSIGN_EID', 3);

/*
 * MessageTimestamper Properties
 */

define('MESSAGETIMESTAMPER_DATAFILENAME_PID', 1);
define('MESSAGETIMESTAMPER_DATAURI_PID', 2);
define('MESSAGETIMESTAMPER_DETACHED_PID', 3);
define('MESSAGETIMESTAMPER_INPUTFILE_PID', 4);
define('MESSAGETIMESTAMPER_OUTPUTFILE_PID', 5);
define('MESSAGETIMESTAMPER_TIMESTAMPSERVER_PID', 6);


/*
 * MessageTimestamper Enums
 */



/*
 * MessageTimestamper Methods
 */

define('MESSAGETIMESTAMPER_CONFIG_MID', 2);
define('MESSAGETIMESTAMPER_TIMESTAMP_MID', 3);


/*
 * MessageTimestamper Events
 */
  
define('MESSAGETIMESTAMPER_ERROR_EID', 1);

/*
 * MessageTimestampVerifier Properties
 */

define('MESSAGETIMESTAMPVERIFIER_CERTCOUNT_PID', 1);
define('MESSAGETIMESTAMPVERIFIER_CERTBYTES_PID', 2);
define('MESSAGETIMESTAMPVERIFIER_CERTCA_PID', 3);
define('MESSAGETIMESTAMPVERIFIER_CERTCAKEYID_PID', 4);
define('MESSAGETIMESTAMPVERIFIER_CERTCRLDISTRIBUTIONPOINTS_PID', 5);
define('MESSAGETIMESTAMPVERIFIER_CERTCURVE_PID', 6);
define('MESSAGETIMESTAMPVERIFIER_CERTFINGERPRINT_PID', 7);
define('MESSAGETIMESTAMPVERIFIER_CERTFRIENDLYNAME_PID', 8);
define('MESSAGETIMESTAMPVERIFIER_CERTHANDLE_PID', 9);
define('MESSAGETIMESTAMPVERIFIER_CERTHASHALGORITHM_PID', 10);
define('MESSAGETIMESTAMPVERIFIER_CERTISSUER_PID', 11);
define('MESSAGETIMESTAMPVERIFIER_CERTISSUERRDN_PID', 12);
define('MESSAGETIMESTAMPVERIFIER_CERTKEYALGORITHM_PID', 13);
define('MESSAGETIMESTAMPVERIFIER_CERTKEYBITS_PID', 14);
define('MESSAGETIMESTAMPVERIFIER_CERTKEYFINGERPRINT_PID', 15);
define('MESSAGETIMESTAMPVERIFIER_CERTKEYUSAGE_PID', 16);
define('MESSAGETIMESTAMPVERIFIER_CERTKEYVALID_PID', 17);
define('MESSAGETIMESTAMPVERIFIER_CERTOCSPLOCATIONS_PID', 18);
define('MESSAGETIMESTAMPVERIFIER_CERTPOLICYIDS_PID', 19);
define('MESSAGETIMESTAMPVERIFIER_CERTPUBLICKEYBYTES_PID', 20);
define('MESSAGETIMESTAMPVERIFIER_CERTSELFSIGNED_PID', 21);
define('MESSAGETIMESTAMPVERIFIER_CERTSERIALNUMBER_PID', 22);
define('MESSAGETIMESTAMPVERIFIER_CERTSIGALGORITHM_PID', 23);
define('MESSAGETIMESTAMPVERIFIER_CERTSUBJECT_PID', 24);
define('MESSAGETIMESTAMPVERIFIER_CERTSUBJECTKEYID_PID', 25);
define('MESSAGETIMESTAMPVERIFIER_CERTSUBJECTRDN_PID', 26);
define('MESSAGETIMESTAMPVERIFIER_CERTVALIDFROM_PID', 27);
define('MESSAGETIMESTAMPVERIFIER_CERTVALIDTO_PID', 28);
define('MESSAGETIMESTAMPVERIFIER_DATAFILE_PID', 29);
define('MESSAGETIMESTAMPVERIFIER_DATAFILENAME_PID', 30);
define('MESSAGETIMESTAMPVERIFIER_DATAURI_PID', 31);
define('MESSAGETIMESTAMPVERIFIER_INPUTFILE_PID', 32);
define('MESSAGETIMESTAMPVERIFIER_OUTPUTFILE_PID', 33);
define('MESSAGETIMESTAMPVERIFIER_SIGNATUREVALIDATIONRESULT_PID', 34);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTBYTES_PID', 35);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTCA_PID', 36);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTCAKEYID_PID', 37);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 38);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTCURVE_PID', 39);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTFINGERPRINT_PID', 40);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTFRIENDLYNAME_PID', 41);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTHANDLE_PID', 42);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTHASHALGORITHM_PID', 43);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTISSUER_PID', 44);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTISSUERRDN_PID', 45);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTKEYALGORITHM_PID', 46);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTKEYBITS_PID', 47);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTKEYFINGERPRINT_PID', 48);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTKEYUSAGE_PID', 49);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTKEYVALID_PID', 50);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTOCSPLOCATIONS_PID', 51);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTORIGIN_PID', 52);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTPOLICYIDS_PID', 53);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTPRIVATEKEYBYTES_PID', 54);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTPRIVATEKEYEXISTS_PID', 55);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTPRIVATEKEYEXTRACTABLE_PID', 56);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTPUBLICKEYBYTES_PID', 57);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTSELFSIGNED_PID', 58);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTSERIALNUMBER_PID', 59);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTSIGALGORITHM_PID', 60);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTSUBJECT_PID', 61);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTSUBJECTKEYID_PID', 62);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTSUBJECTRDN_PID', 63);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTVALIDFROM_PID', 64);
define('MESSAGETIMESTAMPVERIFIER_SIGNINGCERTVALIDTO_PID', 65);
define('MESSAGETIMESTAMPVERIFIER_VALIDATEDSIGNINGTIME_PID', 66);


/*
 * MessageTimestampVerifier Enums
 */

define('MESSAGETIMESTAMPVERIFIER_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('MESSAGETIMESTAMPVERIFIER_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('MESSAGETIMESTAMPVERIFIER_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('MESSAGETIMESTAMPVERIFIER_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('MESSAGETIMESTAMPVERIFIER_SIGNATUREVALIDATIONRESULT_FAILURE', 4);



/*
 * MessageTimestampVerifier Methods
 */

define('MESSAGETIMESTAMPVERIFIER_CONFIG_MID', 2);
define('MESSAGETIMESTAMPVERIFIER_VERIFY_MID', 3);
define('MESSAGETIMESTAMPVERIFIER_VERIFYDETACHED_MID', 4);


/*
 * MessageTimestampVerifier Events
 */
  
define('MESSAGETIMESTAMPVERIFIER_ERROR_EID', 1);

/*
 * MessageVerifier Properties
 */

define('MESSAGEVERIFIER_CERTCOUNT_PID', 1);
define('MESSAGEVERIFIER_CERTBYTES_PID', 2);
define('MESSAGEVERIFIER_CERTCA_PID', 3);
define('MESSAGEVERIFIER_CERTCAKEYID_PID', 4);
define('MESSAGEVERIFIER_CERTCRLDISTRIBUTIONPOINTS_PID', 5);
define('MESSAGEVERIFIER_CERTCURVE_PID', 6);
define('MESSAGEVERIFIER_CERTFINGERPRINT_PID', 7);
define('MESSAGEVERIFIER_CERTFRIENDLYNAME_PID', 8);
define('MESSAGEVERIFIER_CERTHANDLE_PID', 9);
define('MESSAGEVERIFIER_CERTHASHALGORITHM_PID', 10);
define('MESSAGEVERIFIER_CERTISSUER_PID', 11);
define('MESSAGEVERIFIER_CERTISSUERRDN_PID', 12);
define('MESSAGEVERIFIER_CERTKEYALGORITHM_PID', 13);
define('MESSAGEVERIFIER_CERTKEYBITS_PID', 14);
define('MESSAGEVERIFIER_CERTKEYFINGERPRINT_PID', 15);
define('MESSAGEVERIFIER_CERTKEYUSAGE_PID', 16);
define('MESSAGEVERIFIER_CERTKEYVALID_PID', 17);
define('MESSAGEVERIFIER_CERTOCSPLOCATIONS_PID', 18);
define('MESSAGEVERIFIER_CERTPOLICYIDS_PID', 19);
define('MESSAGEVERIFIER_CERTPUBLICKEYBYTES_PID', 20);
define('MESSAGEVERIFIER_CERTSELFSIGNED_PID', 21);
define('MESSAGEVERIFIER_CERTSERIALNUMBER_PID', 22);
define('MESSAGEVERIFIER_CERTSIGALGORITHM_PID', 23);
define('MESSAGEVERIFIER_CERTSUBJECT_PID', 24);
define('MESSAGEVERIFIER_CERTSUBJECTKEYID_PID', 25);
define('MESSAGEVERIFIER_CERTSUBJECTRDN_PID', 26);
define('MESSAGEVERIFIER_CERTVALIDFROM_PID', 27);
define('MESSAGEVERIFIER_CERTVALIDTO_PID', 28);
define('MESSAGEVERIFIER_CLAIMEDSIGNINGTIME_PID', 29);
define('MESSAGEVERIFIER_CONTENTTYPE_PID', 30);
define('MESSAGEVERIFIER_DATAFILE_PID', 31);
define('MESSAGEVERIFIER_HASHALGORITHM_PID', 32);
define('MESSAGEVERIFIER_INPUTFILE_PID', 33);
define('MESSAGEVERIFIER_KNOWNCERTCOUNT_PID', 34);
define('MESSAGEVERIFIER_KNOWNCERTBYTES_PID', 35);
define('MESSAGEVERIFIER_KNOWNCERTHANDLE_PID', 36);
define('MESSAGEVERIFIER_OUTPUTFILE_PID', 37);
define('MESSAGEVERIFIER_SIGNATUREVALIDATIONRESULT_PID', 38);
define('MESSAGEVERIFIER_SIGNEDATTRIBUTECOUNT_PID', 39);
define('MESSAGEVERIFIER_SIGNEDATTRIBUTEOID_PID', 40);
define('MESSAGEVERIFIER_SIGNEDATTRIBUTEVALUE_PID', 41);
define('MESSAGEVERIFIER_SIGNINGCERTBYTES_PID', 42);
define('MESSAGEVERIFIER_SIGNINGCERTCA_PID', 43);
define('MESSAGEVERIFIER_SIGNINGCERTCAKEYID_PID', 44);
define('MESSAGEVERIFIER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 45);
define('MESSAGEVERIFIER_SIGNINGCERTCURVE_PID', 46);
define('MESSAGEVERIFIER_SIGNINGCERTFINGERPRINT_PID', 47);
define('MESSAGEVERIFIER_SIGNINGCERTFRIENDLYNAME_PID', 48);
define('MESSAGEVERIFIER_SIGNINGCERTHANDLE_PID', 49);
define('MESSAGEVERIFIER_SIGNINGCERTHASHALGORITHM_PID', 50);
define('MESSAGEVERIFIER_SIGNINGCERTISSUER_PID', 51);
define('MESSAGEVERIFIER_SIGNINGCERTISSUERRDN_PID', 52);
define('MESSAGEVERIFIER_SIGNINGCERTKEYALGORITHM_PID', 53);
define('MESSAGEVERIFIER_SIGNINGCERTKEYBITS_PID', 54);
define('MESSAGEVERIFIER_SIGNINGCERTKEYFINGERPRINT_PID', 55);
define('MESSAGEVERIFIER_SIGNINGCERTKEYUSAGE_PID', 56);
define('MESSAGEVERIFIER_SIGNINGCERTKEYVALID_PID', 57);
define('MESSAGEVERIFIER_SIGNINGCERTOCSPLOCATIONS_PID', 58);
define('MESSAGEVERIFIER_SIGNINGCERTORIGIN_PID', 59);
define('MESSAGEVERIFIER_SIGNINGCERTPOLICYIDS_PID', 60);
define('MESSAGEVERIFIER_SIGNINGCERTPRIVATEKEYBYTES_PID', 61);
define('MESSAGEVERIFIER_SIGNINGCERTPRIVATEKEYEXISTS_PID', 62);
define('MESSAGEVERIFIER_SIGNINGCERTPRIVATEKEYEXTRACTABLE_PID', 63);
define('MESSAGEVERIFIER_SIGNINGCERTPUBLICKEYBYTES_PID', 64);
define('MESSAGEVERIFIER_SIGNINGCERTSELFSIGNED_PID', 65);
define('MESSAGEVERIFIER_SIGNINGCERTSERIALNUMBER_PID', 66);
define('MESSAGEVERIFIER_SIGNINGCERTSIGALGORITHM_PID', 67);
define('MESSAGEVERIFIER_SIGNINGCERTSUBJECT_PID', 68);
define('MESSAGEVERIFIER_SIGNINGCERTSUBJECTKEYID_PID', 69);
define('MESSAGEVERIFIER_SIGNINGCERTSUBJECTRDN_PID', 70);
define('MESSAGEVERIFIER_SIGNINGCERTVALIDFROM_PID', 71);
define('MESSAGEVERIFIER_SIGNINGCERTVALIDTO_PID', 72);
define('MESSAGEVERIFIER_TIMESTAMPACCURACY_PID', 73);
define('MESSAGEVERIFIER_TIMESTAMPBYTES_PID', 74);
define('MESSAGEVERIFIER_TIMESTAMPCHAINVALIDATIONDETAILS_PID', 75);
define('MESSAGEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_PID', 76);
define('MESSAGEVERIFIER_TIMESTAMPHASHALGORITHM_PID', 77);
define('MESSAGEVERIFIER_TIMESTAMPSERIALNUMBER_PID', 78);
define('MESSAGEVERIFIER_TIMESTAMPTIME_PID', 79);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_PID', 80);
define('MESSAGEVERIFIER_TIMESTAMPTSANAME_PID', 81);
define('MESSAGEVERIFIER_TIMESTAMPVALIDATIONLOG_PID', 82);
define('MESSAGEVERIFIER_TIMESTAMPVALIDATIONRESULT_PID', 83);
define('MESSAGEVERIFIER_TIMESTAMPED_PID', 84);
define('MESSAGEVERIFIER_TSACERTBYTES_PID', 85);
define('MESSAGEVERIFIER_TSACERTCA_PID', 86);
define('MESSAGEVERIFIER_TSACERTCAKEYID_PID', 87);
define('MESSAGEVERIFIER_TSACERTCRLDISTRIBUTIONPOINTS_PID', 88);
define('MESSAGEVERIFIER_TSACERTCURVE_PID', 89);
define('MESSAGEVERIFIER_TSACERTFINGERPRINT_PID', 90);
define('MESSAGEVERIFIER_TSACERTFRIENDLYNAME_PID', 91);
define('MESSAGEVERIFIER_TSACERTHANDLE_PID', 92);
define('MESSAGEVERIFIER_TSACERTHASHALGORITHM_PID', 93);
define('MESSAGEVERIFIER_TSACERTISSUER_PID', 94);
define('MESSAGEVERIFIER_TSACERTISSUERRDN_PID', 95);
define('MESSAGEVERIFIER_TSACERTKEYALGORITHM_PID', 96);
define('MESSAGEVERIFIER_TSACERTKEYBITS_PID', 97);
define('MESSAGEVERIFIER_TSACERTKEYFINGERPRINT_PID', 98);
define('MESSAGEVERIFIER_TSACERTKEYUSAGE_PID', 99);
define('MESSAGEVERIFIER_TSACERTKEYVALID_PID', 100);
define('MESSAGEVERIFIER_TSACERTOCSPLOCATIONS_PID', 101);
define('MESSAGEVERIFIER_TSACERTPOLICYIDS_PID', 102);
define('MESSAGEVERIFIER_TSACERTPUBLICKEYBYTES_PID', 103);
define('MESSAGEVERIFIER_TSACERTSELFSIGNED_PID', 104);
define('MESSAGEVERIFIER_TSACERTSERIALNUMBER_PID', 105);
define('MESSAGEVERIFIER_TSACERTSIGALGORITHM_PID', 106);
define('MESSAGEVERIFIER_TSACERTSUBJECT_PID', 107);
define('MESSAGEVERIFIER_TSACERTSUBJECTKEYID_PID', 108);
define('MESSAGEVERIFIER_TSACERTSUBJECTRDN_PID', 109);
define('MESSAGEVERIFIER_TSACERTVALIDFROM_PID', 110);
define('MESSAGEVERIFIER_TSACERTVALIDTO_PID', 111);
define('MESSAGEVERIFIER_UNSIGNEDATTRIBUTECOUNT_PID', 112);
define('MESSAGEVERIFIER_UNSIGNEDATTRIBUTEOID_PID', 113);
define('MESSAGEVERIFIER_UNSIGNEDATTRIBUTEVALUE_PID', 114);
define('MESSAGEVERIFIER_VALIDATEDSIGNINGTIME_PID', 115);


/*
 * MessageVerifier Enums
 */

define('MESSAGEVERIFIER_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('MESSAGEVERIFIER_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('MESSAGEVERIFIER_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('MESSAGEVERIFIER_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('MESSAGEVERIFIER_SIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('MESSAGEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID', 0);
define('MESSAGEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('MESSAGEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_INVALID', 2);
define('MESSAGEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_UNKNOWN', 0);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_LEGACY', 1);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_TRUSTED', 2);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_GENERIC', 3);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ESC', 4);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_CONTENT', 5);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_CERTS_AND_CRLS', 6);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE', 7);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_2', 8);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_3', 9);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_INDIVIDUAL_DATA_OBJECTS', 10);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ALL_DATA_OBJECTS', 11);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIGNATURE', 12);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_REFS_ONLY', 13);
define('MESSAGEVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIG_AND_REFS', 14);

define('MESSAGEVERIFIER_TIMESTAMPVALIDATIONRESULT_VALID', 0);
define('MESSAGEVERIFIER_TIMESTAMPVALIDATIONRESULT_UNKNOWN', 1);
define('MESSAGEVERIFIER_TIMESTAMPVALIDATIONRESULT_CORRUPTED', 2);
define('MESSAGEVERIFIER_TIMESTAMPVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('MESSAGEVERIFIER_TIMESTAMPVALIDATIONRESULT_FAILURE', 4);



/*
 * MessageVerifier Methods
 */

define('MESSAGEVERIFIER_CONFIG_MID', 2);
define('MESSAGEVERIFIER_GETSIGNATURETYPE_MID', 3);
define('MESSAGEVERIFIER_VERIFY_MID', 4);
define('MESSAGEVERIFIER_VERIFYDETACHED_MID', 5);


/*
 * MessageVerifier Events
 */
  
define('MESSAGEVERIFIER_ERROR_EID', 1);
define('MESSAGEVERIFIER_SIGNATUREFOUND_EID', 2);
define('MESSAGEVERIFIER_SIGNATUREVALIDATED_EID', 3);
define('MESSAGEVERIFIER_TIMESTAMPFOUND_EID', 4);
define('MESSAGEVERIFIER_TIMESTAMPVALIDATED_EID', 5);

/*
 * OCSPManager Properties
 */

define('OCSPMANAGER_BLOCKEDCERTCOUNT_PID', 1);
define('OCSPMANAGER_BLOCKEDCERTBYTES_PID', 2);
define('OCSPMANAGER_BLOCKEDCERTHANDLE_PID', 3);
define('OCSPMANAGER_CACERTBYTES_PID', 4);
define('OCSPMANAGER_CACERTHANDLE_PID', 5);
define('OCSPMANAGER_CERTBYTES_PID', 6);
define('OCSPMANAGER_CERTHANDLE_PID', 7);
define('OCSPMANAGER_CLIENTCERTCOUNT_PID', 8);
define('OCSPMANAGER_CLIENTCERTBYTES_PID', 9);
define('OCSPMANAGER_CLIENTCERTHANDLE_PID', 10);
define('OCSPMANAGER_CONNINFOAEADCIPHER_PID', 11);
define('OCSPMANAGER_CONNINFOCHAINVALIDATIONDETAILS_PID', 12);
define('OCSPMANAGER_CONNINFOCHAINVALIDATIONRESULT_PID', 13);
define('OCSPMANAGER_CONNINFOCIPHERSUITE_PID', 14);
define('OCSPMANAGER_CONNINFOCLIENTAUTHENTICATED_PID', 15);
define('OCSPMANAGER_CONNINFOCONNECTIONESTABLISHED_PID', 16);
define('OCSPMANAGER_CONNINFOCONNECTIONID_PID', 17);
define('OCSPMANAGER_CONNINFODIGESTALGORITHM_PID', 18);
define('OCSPMANAGER_CONNINFOENCRYPTIONALGORITHM_PID', 19);
define('OCSPMANAGER_CONNINFOEXPORTABLE_PID', 20);
define('OCSPMANAGER_CONNINFOKEYEXCHANGEALGORITHM_PID', 21);
define('OCSPMANAGER_CONNINFOKEYEXCHANGEKEYBITS_PID', 22);
define('OCSPMANAGER_CONNINFONAMEDECCURVE_PID', 23);
define('OCSPMANAGER_CONNINFOPFSCIPHER_PID', 24);
define('OCSPMANAGER_CONNINFOPRESHAREDIDENTITYHINT_PID', 25);
define('OCSPMANAGER_CONNINFOPUBLICKEYBITS_PID', 26);
define('OCSPMANAGER_CONNINFORESUMEDSESSION_PID', 27);
define('OCSPMANAGER_CONNINFOSECURECONNECTION_PID', 28);
define('OCSPMANAGER_CONNINFOSERVERAUTHENTICATED_PID', 29);
define('OCSPMANAGER_CONNINFOSIGNATUREALGORITHM_PID', 30);
define('OCSPMANAGER_CONNINFOSYMMETRICBLOCKSIZE_PID', 31);
define('OCSPMANAGER_CONNINFOSYMMETRICKEYBITS_PID', 32);
define('OCSPMANAGER_CONNINFOTOTALBYTESRECEIVED_PID', 33);
define('OCSPMANAGER_CONNINFOTOTALBYTESSENT_PID', 34);
define('OCSPMANAGER_CONNINFOVALIDATIONLOG_PID', 35);
define('OCSPMANAGER_CONNINFOVERSION_PID', 36);
define('OCSPMANAGER_ENTRYCOUNT_PID', 37);
define('OCSPMANAGER_ENTRYHANDLE_PID', 38);
define('OCSPMANAGER_KNOWNCERTCOUNT_PID', 39);
define('OCSPMANAGER_KNOWNCERTBYTES_PID', 40);
define('OCSPMANAGER_KNOWNCERTHANDLE_PID', 41);
define('OCSPMANAGER_KNOWNCRLCOUNT_PID', 42);
define('OCSPMANAGER_KNOWNCRLBYTES_PID', 43);
define('OCSPMANAGER_KNOWNCRLHANDLE_PID', 44);
define('OCSPMANAGER_KNOWNOCSPCOUNT_PID', 45);
define('OCSPMANAGER_KNOWNOCSPBYTES_PID', 46);
define('OCSPMANAGER_KNOWNOCSPHANDLE_PID', 47);
define('OCSPMANAGER_OCSPRESPONSEBYTES_PID', 48);
define('OCSPMANAGER_OCSPRESPONSEENTRYCOUNT_PID', 49);
define('OCSPMANAGER_OCSPRESPONSEHANDLE_PID', 50);
define('OCSPMANAGER_OCSPRESPONSEISSUER_PID', 51);
define('OCSPMANAGER_OCSPRESPONSEISSUERRDN_PID', 52);
define('OCSPMANAGER_OCSPRESPONSELOCATION_PID', 53);
define('OCSPMANAGER_OCSPRESPONSEPRODUCEDAT_PID', 54);
define('OCSPMANAGER_PROXYADDRESS_PID', 55);
define('OCSPMANAGER_PROXYAUTHENTICATION_PID', 56);
define('OCSPMANAGER_PROXYPASSWORD_PID', 57);
define('OCSPMANAGER_PROXYPORT_PID', 58);
define('OCSPMANAGER_PROXYPROXYTYPE_PID', 59);
define('OCSPMANAGER_PROXYREQUESTHEADERS_PID', 60);
define('OCSPMANAGER_PROXYRESPONSEBODY_PID', 61);
define('OCSPMANAGER_PROXYRESPONSEHEADERS_PID', 62);
define('OCSPMANAGER_PROXYUSEIPV6_PID', 63);
define('OCSPMANAGER_PROXYUSEPROXY_PID', 64);
define('OCSPMANAGER_PROXYUSERNAME_PID', 65);
define('OCSPMANAGER_SERVERCERTCOUNT_PID', 66);
define('OCSPMANAGER_SERVERCERTBYTES_PID', 67);
define('OCSPMANAGER_SERVERCERTCAKEYID_PID', 68);
define('OCSPMANAGER_SERVERCERTFINGERPRINT_PID', 69);
define('OCSPMANAGER_SERVERCERTHANDLE_PID', 70);
define('OCSPMANAGER_SERVERCERTISSUER_PID', 71);
define('OCSPMANAGER_SERVERCERTISSUERRDN_PID', 72);
define('OCSPMANAGER_SERVERCERTKEYALGORITHM_PID', 73);
define('OCSPMANAGER_SERVERCERTKEYBITS_PID', 74);
define('OCSPMANAGER_SERVERCERTKEYFINGERPRINT_PID', 75);
define('OCSPMANAGER_SERVERCERTKEYUSAGE_PID', 76);
define('OCSPMANAGER_SERVERCERTPUBLICKEYBYTES_PID', 77);
define('OCSPMANAGER_SERVERCERTSELFSIGNED_PID', 78);
define('OCSPMANAGER_SERVERCERTSERIALNUMBER_PID', 79);
define('OCSPMANAGER_SERVERCERTSIGALGORITHM_PID', 80);
define('OCSPMANAGER_SERVERCERTSUBJECT_PID', 81);
define('OCSPMANAGER_SERVERCERTSUBJECTKEYID_PID', 82);
define('OCSPMANAGER_SERVERCERTSUBJECTRDN_PID', 83);
define('OCSPMANAGER_SERVERCERTVALIDFROM_PID', 84);
define('OCSPMANAGER_SERVERCERTVALIDTO_PID', 85);
define('OCSPMANAGER_SOCKETDNSMODE_PID', 86);
define('OCSPMANAGER_SOCKETDNSPORT_PID', 87);
define('OCSPMANAGER_SOCKETDNSQUERYTIMEOUT_PID', 88);
define('OCSPMANAGER_SOCKETDNSSERVERS_PID', 89);
define('OCSPMANAGER_SOCKETDNSTOTALTIMEOUT_PID', 90);
define('OCSPMANAGER_SOCKETINCOMINGSPEEDLIMIT_PID', 91);
define('OCSPMANAGER_SOCKETLOCALADDRESS_PID', 92);
define('OCSPMANAGER_SOCKETLOCALPORT_PID', 93);
define('OCSPMANAGER_SOCKETOUTGOINGSPEEDLIMIT_PID', 94);
define('OCSPMANAGER_SOCKETTIMEOUT_PID', 95);
define('OCSPMANAGER_SOCKETUSEIPV6_PID', 96);
define('OCSPMANAGER_TLSAUTOVALIDATECERTIFICATES_PID', 97);
define('OCSPMANAGER_TLSBASECONFIGURATION_PID', 98);
define('OCSPMANAGER_TLSCIPHERSUITES_PID', 99);
define('OCSPMANAGER_TLSECCURVES_PID', 100);
define('OCSPMANAGER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 101);
define('OCSPMANAGER_TLSPRESHAREDIDENTITY_PID', 102);
define('OCSPMANAGER_TLSPRESHAREDKEY_PID', 103);
define('OCSPMANAGER_TLSPRESHAREDKEYCIPHERSUITE_PID', 104);
define('OCSPMANAGER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 105);
define('OCSPMANAGER_TLSREVOCATIONCHECK_PID', 106);
define('OCSPMANAGER_TLSSSLOPTIONS_PID', 107);
define('OCSPMANAGER_TLSTLSMODE_PID', 108);
define('OCSPMANAGER_TLSUSEEXTENDEDMASTERSECRET_PID', 109);
define('OCSPMANAGER_TLSUSESESSIONRESUMPTION_PID', 110);
define('OCSPMANAGER_TLSVERSIONS_PID', 111);
define('OCSPMANAGER_TRUSTEDCERTCOUNT_PID', 112);
define('OCSPMANAGER_TRUSTEDCERTBYTES_PID', 113);
define('OCSPMANAGER_TRUSTEDCERTHANDLE_PID', 114);


/*
 * OCSPManager Enums
 */

define('OCSPMANAGER_CONNINFOCHAINVALIDATIONRESULT_VALID', 0);
define('OCSPMANAGER_CONNINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('OCSPMANAGER_CONNINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('OCSPMANAGER_CONNINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('OCSPMANAGER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('OCSPMANAGER_PROXYAUTHENTICATION_BASIC', 1);
define('OCSPMANAGER_PROXYAUTHENTICATION_DIGEST', 2);
define('OCSPMANAGER_PROXYAUTHENTICATION_NTLM', 3);

define('OCSPMANAGER_PROXYPROXYTYPE_NONE', 0);
define('OCSPMANAGER_PROXYPROXYTYPE_SOCKS_4', 1);
define('OCSPMANAGER_PROXYPROXYTYPE_SOCKS_5', 2);
define('OCSPMANAGER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('OCSPMANAGER_PROXYPROXYTYPE_HTTP', 4);

define('OCSPMANAGER_SOCKETDNSMODE_AUTO', 0);
define('OCSPMANAGER_SOCKETDNSMODE_PLATFORM', 1);
define('OCSPMANAGER_SOCKETDNSMODE_OWN', 2);
define('OCSPMANAGER_SOCKETDNSMODE_OWN_SECURE', 3);

define('OCSPMANAGER_TLSBASECONFIGURATION_DEFAULT', 0);
define('OCSPMANAGER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('OCSPMANAGER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('OCSPMANAGER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('OCSPMANAGER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('OCSPMANAGER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('OCSPMANAGER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('OCSPMANAGER_TLSREVOCATIONCHECK_NONE', 0);
define('OCSPMANAGER_TLSREVOCATIONCHECK_AUTO', 1);
define('OCSPMANAGER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('OCSPMANAGER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('OCSPMANAGER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('OCSPMANAGER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('OCSPMANAGER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('OCSPMANAGER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('OCSPMANAGER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('OCSPMANAGER_TLSTLSMODE_DEFAULT', 0);
define('OCSPMANAGER_TLSTLSMODE_NO_TLS', 1);
define('OCSPMANAGER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('OCSPMANAGER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * OCSPManager Methods
 */

define('OCSPMANAGER_CONFIG_MID', 2);
define('OCSPMANAGER_GETCERTENTRYINDEX_MID', 3);
define('OCSPMANAGER_REQUEST_MID', 5);
define('OCSPMANAGER_SAVETOFILE_MID', 6);
define('OCSPMANAGER_VALIDATE_MID', 8);


/*
 * OCSPManager Events
 */
  
define('OCSPMANAGER_CERTIFICATEVALIDATE_EID', 1);
define('OCSPMANAGER_ERROR_EID', 2);

/*
 * OCSPServer Properties
 */

define('OCSPSERVER_ACTIVE_PID', 1);
define('OCSPSERVER_AUTHBASIC_PID', 2);
define('OCSPSERVER_AUTHDIGEST_PID', 3);
define('OCSPSERVER_AUTHDIGESTEXPIRE_PID', 4);
define('OCSPSERVER_AUTHREALM_PID', 5);
define('OCSPSERVER_BADENTRYCOUNT_PID', 6);
define('OCSPSERVER_BADENTRYHANDLE_PID', 7);
define('OCSPSERVER_BOUNDPORT_PID', 8);
define('OCSPSERVER_CACERTBYTES_PID', 9);
define('OCSPSERVER_CACERTHANDLE_PID', 10);
define('OCSPSERVER_ENDPOINT_PID', 11);
define('OCSPSERVER_ERRORORIGIN_PID', 12);
define('OCSPSERVER_ERRORSEVERITY_PID', 13);
define('OCSPSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 14);
define('OCSPSERVER_EXTERNALCRYPTODATA_PID', 15);
define('OCSPSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 16);
define('OCSPSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 17);
define('OCSPSERVER_EXTERNALCRYPTOKEYID_PID', 18);
define('OCSPSERVER_EXTERNALCRYPTOKEYSECRET_PID', 19);
define('OCSPSERVER_EXTERNALCRYPTOMETHOD_PID', 20);
define('OCSPSERVER_EXTERNALCRYPTOMODE_PID', 21);
define('OCSPSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 22);
define('OCSPSERVER_GOODENTRYCOUNT_PID', 23);
define('OCSPSERVER_GOODENTRYHANDLE_PID', 24);
define('OCSPSERVER_HOST_PID', 25);
define('OCSPSERVER_PINNEDCERTCOUNT_PID', 26);
define('OCSPSERVER_PINNEDCERTBYTES_PID', 27);
define('OCSPSERVER_PINNEDCERTHANDLE_PID', 28);
define('OCSPSERVER_PINNEDCLIENTADDRESS_PID', 29);
define('OCSPSERVER_PINNEDCLIENTCHAINVALIDATIONDETAILS_PID', 30);
define('OCSPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_PID', 31);
define('OCSPSERVER_PINNEDCLIENTCIPHERSUITE_PID', 32);
define('OCSPSERVER_PINNEDCLIENTCLIENTAUTHENTICATED_PID', 33);
define('OCSPSERVER_PINNEDCLIENTDIGESTALGORITHM_PID', 34);
define('OCSPSERVER_PINNEDCLIENTENCRYPTIONALGORITHM_PID', 35);
define('OCSPSERVER_PINNEDCLIENTID_PID', 36);
define('OCSPSERVER_PINNEDCLIENTKEYEXCHANGEALGORITHM_PID', 37);
define('OCSPSERVER_PINNEDCLIENTKEYEXCHANGEKEYBITS_PID', 38);
define('OCSPSERVER_PINNEDCLIENTNAMEDECCURVE_PID', 39);
define('OCSPSERVER_PINNEDCLIENTPFSCIPHER_PID', 40);
define('OCSPSERVER_PINNEDCLIENTPORT_PID', 41);
define('OCSPSERVER_PINNEDCLIENTPUBLICKEYBITS_PID', 42);
define('OCSPSERVER_PINNEDCLIENTRESUMEDSESSION_PID', 43);
define('OCSPSERVER_PINNEDCLIENTSECURECONNECTION_PID', 44);
define('OCSPSERVER_PINNEDCLIENTSIGNATUREALGORITHM_PID', 45);
define('OCSPSERVER_PINNEDCLIENTSYMMETRICBLOCKSIZE_PID', 46);
define('OCSPSERVER_PINNEDCLIENTSYMMETRICKEYBITS_PID', 47);
define('OCSPSERVER_PINNEDCLIENTTOTALBYTESRECEIVED_PID', 48);
define('OCSPSERVER_PINNEDCLIENTTOTALBYTESSENT_PID', 49);
define('OCSPSERVER_PINNEDCLIENTVALIDATIONLOG_PID', 50);
define('OCSPSERVER_PINNEDCLIENTVERSION_PID', 51);
define('OCSPSERVER_PINNEDCLIENTCERTCOUNT_PID', 52);
define('OCSPSERVER_PINNEDCLIENTCERTBYTES_PID', 53);
define('OCSPSERVER_PINNEDCLIENTCERTCAKEYID_PID', 54);
define('OCSPSERVER_PINNEDCLIENTCERTFINGERPRINT_PID', 55);
define('OCSPSERVER_PINNEDCLIENTCERTHANDLE_PID', 56);
define('OCSPSERVER_PINNEDCLIENTCERTISSUER_PID', 57);
define('OCSPSERVER_PINNEDCLIENTCERTISSUERRDN_PID', 58);
define('OCSPSERVER_PINNEDCLIENTCERTKEYALGORITHM_PID', 59);
define('OCSPSERVER_PINNEDCLIENTCERTKEYBITS_PID', 60);
define('OCSPSERVER_PINNEDCLIENTCERTKEYFINGERPRINT_PID', 61);
define('OCSPSERVER_PINNEDCLIENTCERTKEYUSAGE_PID', 62);
define('OCSPSERVER_PINNEDCLIENTCERTPUBLICKEYBYTES_PID', 63);
define('OCSPSERVER_PINNEDCLIENTCERTSELFSIGNED_PID', 64);
define('OCSPSERVER_PINNEDCLIENTCERTSERIALNUMBER_PID', 65);
define('OCSPSERVER_PINNEDCLIENTCERTSIGALGORITHM_PID', 66);
define('OCSPSERVER_PINNEDCLIENTCERTSUBJECT_PID', 67);
define('OCSPSERVER_PINNEDCLIENTCERTSUBJECTKEYID_PID', 68);
define('OCSPSERVER_PINNEDCLIENTCERTSUBJECTRDN_PID', 69);
define('OCSPSERVER_PINNEDCLIENTCERTVALIDFROM_PID', 70);
define('OCSPSERVER_PINNEDCLIENTCERTVALIDTO_PID', 71);
define('OCSPSERVER_PORT_PID', 72);
define('OCSPSERVER_PORTRANGEFROM_PID', 73);
define('OCSPSERVER_PORTRANGETO_PID', 74);
define('OCSPSERVER_SERVERCERTCOUNT_PID', 75);
define('OCSPSERVER_SERVERCERTBYTES_PID', 76);
define('OCSPSERVER_SERVERCERTHANDLE_PID', 77);
define('OCSPSERVER_SIGNINGCERTBYTES_PID', 78);
define('OCSPSERVER_SIGNINGCERTHANDLE_PID', 79);
define('OCSPSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 80);
define('OCSPSERVER_SOCKETLOCALADDRESS_PID', 81);
define('OCSPSERVER_SOCKETLOCALPORT_PID', 82);
define('OCSPSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 83);
define('OCSPSERVER_SOCKETTIMEOUT_PID', 84);
define('OCSPSERVER_SOCKETUSEIPV6_PID', 85);
define('OCSPSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 86);
define('OCSPSERVER_TLSBASECONFIGURATION_PID', 87);
define('OCSPSERVER_TLSCIPHERSUITES_PID', 88);
define('OCSPSERVER_TLSECCURVES_PID', 89);
define('OCSPSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 90);
define('OCSPSERVER_TLSPRESHAREDIDENTITY_PID', 91);
define('OCSPSERVER_TLSPRESHAREDKEY_PID', 92);
define('OCSPSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 93);
define('OCSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 94);
define('OCSPSERVER_TLSREVOCATIONCHECK_PID', 95);
define('OCSPSERVER_TLSSSLOPTIONS_PID', 96);
define('OCSPSERVER_TLSTLSMODE_PID', 97);
define('OCSPSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 98);
define('OCSPSERVER_TLSUSESESSIONRESUMPTION_PID', 99);
define('OCSPSERVER_TLSVERSIONS_PID', 100);
define('OCSPSERVER_UPDATEPERIOD_PID', 101);
define('OCSPSERVER_USERCOUNT_PID', 102);
define('OCSPSERVER_USERASSOCIATEDDATA_PID', 103);
define('OCSPSERVER_USERBASEPATH_PID', 104);
define('OCSPSERVER_USERCERT_PID', 105);
define('OCSPSERVER_USERDATA_PID', 106);
define('OCSPSERVER_USERHANDLE_PID', 107);
define('OCSPSERVER_USERHASHALGORITHM_PID', 108);
define('OCSPSERVER_USERINCOMINGSPEEDLIMIT_PID', 109);
define('OCSPSERVER_USEROUTGOINGSPEEDLIMIT_PID', 110);
define('OCSPSERVER_USERPASSWORD_PID', 111);
define('OCSPSERVER_USERSHAREDSECRET_PID', 112);
define('OCSPSERVER_USERUSERNAME_PID', 113);
define('OCSPSERVER_USETLS_PID', 114);
define('OCSPSERVER_WEBSITENAME_PID', 115);


/*
 * OCSPServer Enums
 */

define('OCSPSERVER_ERRORORIGIN_LOCAL', 0);
define('OCSPSERVER_ERRORORIGIN_REMOTE', 1);

define('OCSPSERVER_ERRORSEVERITY_WARNING', 1);
define('OCSPSERVER_ERRORSEVERITY_FATAL', 2);

define('OCSPSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('OCSPSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('OCSPSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('OCSPSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('OCSPSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('OCSPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID', 0);
define('OCSPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('OCSPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_INVALID', 2);
define('OCSPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('OCSPSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('OCSPSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('OCSPSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('OCSPSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('OCSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('OCSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('OCSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('OCSPSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('OCSPSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('OCSPSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('OCSPSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('OCSPSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('OCSPSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('OCSPSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('OCSPSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('OCSPSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('OCSPSERVER_TLSTLSMODE_DEFAULT', 0);
define('OCSPSERVER_TLSTLSMODE_NO_TLS', 1);
define('OCSPSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('OCSPSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * OCSPServer Methods
 */

define('OCSPSERVER_CONFIG_MID', 2);
define('OCSPSERVER_DROPCLIENT_MID', 3);
define('OCSPSERVER_GETREQUESTBYTES_MID', 4);
define('OCSPSERVER_GETREQUESTHEADER_MID', 5);
define('OCSPSERVER_GETREQUESTUSERNAME_MID', 6);
define('OCSPSERVER_IMPORTBADCERTIFICATES_MID', 7);
define('OCSPSERVER_IMPORTGOODCERTIFICATES_MID', 8);
define('OCSPSERVER_LISTCLIENTS_MID', 9);
define('OCSPSERVER_PINCLIENT_MID', 10);
define('OCSPSERVER_PROCESSGENERICREQUEST_MID', 11);
define('OCSPSERVER_START_MID', 12);
define('OCSPSERVER_STOP_MID', 13);


/*
 * OCSPServer Events
 */
  
define('OCSPSERVER_ACCEPT_EID', 1);
define('OCSPSERVER_AUTHATTEMPT_EID', 2);
define('OCSPSERVER_CERTIFICATEVALIDATE_EID', 3);
define('OCSPSERVER_CONNECT_EID', 4);
define('OCSPSERVER_DISCONNECT_EID', 5);
define('OCSPSERVER_ERROR_EID', 6);
define('OCSPSERVER_EXTERNALSIGN_EID', 7);
define('OCSPSERVER_STATUSREQUEST_EID', 8);
define('OCSPSERVER_TLSESTABLISHED_EID', 9);
define('OCSPSERVER_TLSPSK_EID', 10);
define('OCSPSERVER_TLSSHUTDOWN_EID', 11);

/*
 * OfficeDecryptor Properties
 */

define('OFFICEDECRYPTOR_DOCUMENTFORMAT_PID', 1);
define('OFFICEDECRYPTOR_ENCRYPTIONALGORITHM_PID', 2);
define('OFFICEDECRYPTOR_ENCRYPTIONTYPE_PID', 3);
define('OFFICEDECRYPTOR_INPUTFILE_PID', 4);
define('OFFICEDECRYPTOR_OUTPUTFILE_PID', 5);
define('OFFICEDECRYPTOR_PASSWORD_PID', 6);


/*
 * OfficeDecryptor Enums
 */

define('OFFICEDECRYPTOR_DOCUMENTFORMAT_UNKNOWN', 0);
define('OFFICEDECRYPTOR_DOCUMENTFORMAT_BINARY', 1);
define('OFFICEDECRYPTOR_DOCUMENTFORMAT_OPEN_XML', 2);
define('OFFICEDECRYPTOR_DOCUMENTFORMAT_OPEN_XPS', 3);
define('OFFICEDECRYPTOR_DOCUMENTFORMAT_OPEN_DOCUMENT', 4);

define('OFFICEDECRYPTOR_ENCRYPTIONTYPE_DEFAULT', 0);
define('OFFICEDECRYPTOR_ENCRYPTIONTYPE_BINARY_RC4', 1);
define('OFFICEDECRYPTOR_ENCRYPTIONTYPE_BINARY_RC4CRYPTO_API', 2);
define('OFFICEDECRYPTOR_ENCRYPTIONTYPE_OPEN_XMLSTANDARD', 3);
define('OFFICEDECRYPTOR_ENCRYPTIONTYPE_OPEN_XMLAGILE', 4);
define('OFFICEDECRYPTOR_ENCRYPTIONTYPE_OPEN_DOCUMENT', 5);



/*
 * OfficeDecryptor Methods
 */

define('OFFICEDECRYPTOR_CONFIG_MID', 2);
define('OFFICEDECRYPTOR_DECRYPT_MID', 3);


/*
 * OfficeDecryptor Events
 */
  
define('OFFICEDECRYPTOR_DECRYPTIONPASSWORDNEEDED_EID', 1);
define('OFFICEDECRYPTOR_ERROR_EID', 2);

/*
 * OfficeEncryptor Properties
 */

define('OFFICEENCRYPTOR_DOCUMENTFORMAT_PID', 1);
define('OFFICEENCRYPTOR_ENCRYPTIONALGORITHM_PID', 2);
define('OFFICEENCRYPTOR_ENCRYPTIONTYPE_PID', 3);
define('OFFICEENCRYPTOR_INPUTFILE_PID', 4);
define('OFFICEENCRYPTOR_OUTPUTFILE_PID', 5);
define('OFFICEENCRYPTOR_PASSWORD_PID', 6);


/*
 * OfficeEncryptor Enums
 */

define('OFFICEENCRYPTOR_DOCUMENTFORMAT_UNKNOWN', 0);
define('OFFICEENCRYPTOR_DOCUMENTFORMAT_BINARY', 1);
define('OFFICEENCRYPTOR_DOCUMENTFORMAT_OPEN_XML', 2);
define('OFFICEENCRYPTOR_DOCUMENTFORMAT_OPEN_XPS', 3);
define('OFFICEENCRYPTOR_DOCUMENTFORMAT_OPEN_DOCUMENT', 4);

define('OFFICEENCRYPTOR_ENCRYPTIONTYPE_DEFAULT', 0);
define('OFFICEENCRYPTOR_ENCRYPTIONTYPE_BINARY_RC4', 1);
define('OFFICEENCRYPTOR_ENCRYPTIONTYPE_BINARY_RC4CRYPTO_API', 2);
define('OFFICEENCRYPTOR_ENCRYPTIONTYPE_OPEN_XMLSTANDARD', 3);
define('OFFICEENCRYPTOR_ENCRYPTIONTYPE_OPEN_XMLAGILE', 4);
define('OFFICEENCRYPTOR_ENCRYPTIONTYPE_OPEN_DOCUMENT', 5);



/*
 * OfficeEncryptor Methods
 */

define('OFFICEENCRYPTOR_CONFIG_MID', 2);
define('OFFICEENCRYPTOR_ENCRYPT_MID', 3);


/*
 * OfficeEncryptor Events
 */
  
define('OFFICEENCRYPTOR_ERROR_EID', 1);

/*
 * OfficeQuickSigner Properties
 */

define('OFFICEQUICKSIGNER_DOCUMENTFORMAT_PID', 1);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 2);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTODATA_PID', 3);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 4);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 5);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOKEYID_PID', 6);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOKEYSECRET_PID', 7);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOMETHOD_PID', 8);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOMODE_PID', 9);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 10);
define('OFFICEQUICKSIGNER_HASHALGORITHM_PID', 11);
define('OFFICEQUICKSIGNER_INPUTFILE_PID', 12);
define('OFFICEQUICKSIGNER_OUTPUTFILE_PID', 13);
define('OFFICEQUICKSIGNER_SIGNATURETYPE_PID', 14);
define('OFFICEQUICKSIGNER_SIGNCOREPROPERTIES_PID', 15);
define('OFFICEQUICKSIGNER_SIGNDOCUMENT_PID', 16);
define('OFFICEQUICKSIGNER_SIGNINGCERTBYTES_PID', 17);
define('OFFICEQUICKSIGNER_SIGNINGCERTHANDLE_PID', 18);
define('OFFICEQUICKSIGNER_SIGNINGCHAINCOUNT_PID', 19);
define('OFFICEQUICKSIGNER_SIGNINGCHAINBYTES_PID', 20);
define('OFFICEQUICKSIGNER_SIGNINGCHAINHANDLE_PID', 21);
define('OFFICEQUICKSIGNER_SIGNSIGNATUREORIGIN_PID', 22);


/*
 * OfficeQuickSigner Enums
 */

define('OFFICEQUICKSIGNER_DOCUMENTFORMAT_UNKNOWN', 0);
define('OFFICEQUICKSIGNER_DOCUMENTFORMAT_BINARY', 1);
define('OFFICEQUICKSIGNER_DOCUMENTFORMAT_OPEN_XML', 2);
define('OFFICEQUICKSIGNER_DOCUMENTFORMAT_OPEN_XPS', 3);
define('OFFICEQUICKSIGNER_DOCUMENTFORMAT_OPEN_DOCUMENT', 4);

define('OFFICEQUICKSIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('OFFICEQUICKSIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('OFFICEQUICKSIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('OFFICEQUICKSIGNER_SIGNATURETYPE_DEFAULT', 0);
define('OFFICEQUICKSIGNER_SIGNATURETYPE_BINARY_CRYPTO_API', 1);
define('OFFICEQUICKSIGNER_SIGNATURETYPE_BINARY_XML', 2);
define('OFFICEQUICKSIGNER_SIGNATURETYPE_OPEN_XML', 3);
define('OFFICEQUICKSIGNER_SIGNATURETYPE_OPEN_XPS', 4);
define('OFFICEQUICKSIGNER_SIGNATURETYPE_OPEN_DOCUMENT', 5);



/*
 * OfficeQuickSigner Methods
 */

define('OFFICEQUICKSIGNER_CONFIG_MID', 2);
define('OFFICEQUICKSIGNER_EXTRACTASYNCDATA_MID', 3);
define('OFFICEQUICKSIGNER_SIGN_MID', 4);
define('OFFICEQUICKSIGNER_SIGNASYNCBEGIN_MID', 5);
define('OFFICEQUICKSIGNER_SIGNASYNCEND_MID', 6);
define('OFFICEQUICKSIGNER_SIGNEXTERNAL_MID', 7);


/*
 * OfficeQuickSigner Events
 */
  
define('OFFICEQUICKSIGNER_ERROR_EID', 1);
define('OFFICEQUICKSIGNER_EXTERNALSIGN_EID', 2);

/*
 * OfficeSigner Properties
 */

define('OFFICESIGNER_BLOCKEDCERTCOUNT_PID', 1);
define('OFFICESIGNER_BLOCKEDCERTBYTES_PID', 2);
define('OFFICESIGNER_BLOCKEDCERTHANDLE_PID', 3);
define('OFFICESIGNER_CHAINVALIDATIONDETAILS_PID', 4);
define('OFFICESIGNER_CHAINVALIDATIONRESULT_PID', 5);
define('OFFICESIGNER_CLAIMEDSIGNINGTIME_PID', 6);
define('OFFICESIGNER_DOCUMENTFORMAT_PID', 7);
define('OFFICESIGNER_ENABLEXADES_PID', 8);
define('OFFICESIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 9);
define('OFFICESIGNER_EXTERNALCRYPTODATA_PID', 10);
define('OFFICESIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 11);
define('OFFICESIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 12);
define('OFFICESIGNER_EXTERNALCRYPTOKEYID_PID', 13);
define('OFFICESIGNER_EXTERNALCRYPTOKEYSECRET_PID', 14);
define('OFFICESIGNER_EXTERNALCRYPTOMETHOD_PID', 15);
define('OFFICESIGNER_EXTERNALCRYPTOMODE_PID', 16);
define('OFFICESIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 17);
define('OFFICESIGNER_HASHALGORITHM_PID', 18);
define('OFFICESIGNER_IGNORECHAINVALIDATIONERRORS_PID', 19);
define('OFFICESIGNER_INPUTFILE_PID', 20);
define('OFFICESIGNER_KNOWNCERTCOUNT_PID', 21);
define('OFFICESIGNER_KNOWNCERTBYTES_PID', 22);
define('OFFICESIGNER_KNOWNCERTHANDLE_PID', 23);
define('OFFICESIGNER_KNOWNCRLCOUNT_PID', 24);
define('OFFICESIGNER_KNOWNCRLBYTES_PID', 25);
define('OFFICESIGNER_KNOWNCRLHANDLE_PID', 26);
define('OFFICESIGNER_KNOWNOCSPCOUNT_PID', 27);
define('OFFICESIGNER_KNOWNOCSPBYTES_PID', 28);
define('OFFICESIGNER_KNOWNOCSPHANDLE_PID', 29);
define('OFFICESIGNER_OFFLINEMODE_PID', 30);
define('OFFICESIGNER_OUTPUTFILE_PID', 31);
define('OFFICESIGNER_PROXYADDRESS_PID', 32);
define('OFFICESIGNER_PROXYAUTHENTICATION_PID', 33);
define('OFFICESIGNER_PROXYPASSWORD_PID', 34);
define('OFFICESIGNER_PROXYPORT_PID', 35);
define('OFFICESIGNER_PROXYPROXYTYPE_PID', 36);
define('OFFICESIGNER_PROXYREQUESTHEADERS_PID', 37);
define('OFFICESIGNER_PROXYRESPONSEBODY_PID', 38);
define('OFFICESIGNER_PROXYRESPONSEHEADERS_PID', 39);
define('OFFICESIGNER_PROXYUSEIPV6_PID', 40);
define('OFFICESIGNER_PROXYUSEPROXY_PID', 41);
define('OFFICESIGNER_PROXYUSERNAME_PID', 42);
define('OFFICESIGNER_REVOCATIONCHECK_PID', 43);
define('OFFICESIGNER_SIGNATUREINDEX_PID', 44);
define('OFFICESIGNER_SIGNATURETYPE_PID', 45);
define('OFFICESIGNER_SIGNCOREPROPERTIES_PID', 46);
define('OFFICESIGNER_SIGNDOCUMENT_PID', 47);
define('OFFICESIGNER_SIGNINGCERTBYTES_PID', 48);
define('OFFICESIGNER_SIGNINGCERTHANDLE_PID', 49);
define('OFFICESIGNER_SIGNINGCHAINCOUNT_PID', 50);
define('OFFICESIGNER_SIGNINGCHAINBYTES_PID', 51);
define('OFFICESIGNER_SIGNINGCHAINHANDLE_PID', 52);
define('OFFICESIGNER_SIGNSIGNATUREORIGIN_PID', 53);
define('OFFICESIGNER_SOCKETDNSMODE_PID', 54);
define('OFFICESIGNER_SOCKETDNSPORT_PID', 55);
define('OFFICESIGNER_SOCKETDNSQUERYTIMEOUT_PID', 56);
define('OFFICESIGNER_SOCKETDNSSERVERS_PID', 57);
define('OFFICESIGNER_SOCKETDNSTOTALTIMEOUT_PID', 58);
define('OFFICESIGNER_SOCKETINCOMINGSPEEDLIMIT_PID', 59);
define('OFFICESIGNER_SOCKETLOCALADDRESS_PID', 60);
define('OFFICESIGNER_SOCKETLOCALPORT_PID', 61);
define('OFFICESIGNER_SOCKETOUTGOINGSPEEDLIMIT_PID', 62);
define('OFFICESIGNER_SOCKETTIMEOUT_PID', 63);
define('OFFICESIGNER_SOCKETUSEIPV6_PID', 64);
define('OFFICESIGNER_TIMESTAMPSERVER_PID', 65);
define('OFFICESIGNER_TLSAUTOVALIDATECERTIFICATES_PID', 66);
define('OFFICESIGNER_TLSBASECONFIGURATION_PID', 67);
define('OFFICESIGNER_TLSCIPHERSUITES_PID', 68);
define('OFFICESIGNER_TLSECCURVES_PID', 69);
define('OFFICESIGNER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 70);
define('OFFICESIGNER_TLSPRESHAREDIDENTITY_PID', 71);
define('OFFICESIGNER_TLSPRESHAREDKEY_PID', 72);
define('OFFICESIGNER_TLSPRESHAREDKEYCIPHERSUITE_PID', 73);
define('OFFICESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 74);
define('OFFICESIGNER_TLSREVOCATIONCHECK_PID', 75);
define('OFFICESIGNER_TLSSSLOPTIONS_PID', 76);
define('OFFICESIGNER_TLSTLSMODE_PID', 77);
define('OFFICESIGNER_TLSUSEEXTENDEDMASTERSECRET_PID', 78);
define('OFFICESIGNER_TLSUSESESSIONRESUMPTION_PID', 79);
define('OFFICESIGNER_TLSVERSIONS_PID', 80);
define('OFFICESIGNER_TRUSTEDCERTCOUNT_PID', 81);
define('OFFICESIGNER_TRUSTEDCERTBYTES_PID', 82);
define('OFFICESIGNER_TRUSTEDCERTHANDLE_PID', 83);
define('OFFICESIGNER_VALIDATIONLOG_PID', 84);
define('OFFICESIGNER_XADESFORM_PID', 85);
define('OFFICESIGNER_XADESVERSION_PID', 86);


/*
 * OfficeSigner Enums
 */

define('OFFICESIGNER_CHAINVALIDATIONRESULT_VALID', 0);
define('OFFICESIGNER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('OFFICESIGNER_CHAINVALIDATIONRESULT_INVALID', 2);
define('OFFICESIGNER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('OFFICESIGNER_DOCUMENTFORMAT_UNKNOWN', 0);
define('OFFICESIGNER_DOCUMENTFORMAT_BINARY', 1);
define('OFFICESIGNER_DOCUMENTFORMAT_OPEN_XML', 2);
define('OFFICESIGNER_DOCUMENTFORMAT_OPEN_XPS', 3);
define('OFFICESIGNER_DOCUMENTFORMAT_OPEN_DOCUMENT', 4);

define('OFFICESIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('OFFICESIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('OFFICESIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('OFFICESIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('OFFICESIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('OFFICESIGNER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('OFFICESIGNER_PROXYAUTHENTICATION_BASIC', 1);
define('OFFICESIGNER_PROXYAUTHENTICATION_DIGEST', 2);
define('OFFICESIGNER_PROXYAUTHENTICATION_NTLM', 3);

define('OFFICESIGNER_PROXYPROXYTYPE_NONE', 0);
define('OFFICESIGNER_PROXYPROXYTYPE_SOCKS_4', 1);
define('OFFICESIGNER_PROXYPROXYTYPE_SOCKS_5', 2);
define('OFFICESIGNER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('OFFICESIGNER_PROXYPROXYTYPE_HTTP', 4);

define('OFFICESIGNER_REVOCATIONCHECK_NONE', 0);
define('OFFICESIGNER_REVOCATIONCHECK_AUTO', 1);
define('OFFICESIGNER_REVOCATIONCHECK_ALL_CRL', 2);
define('OFFICESIGNER_REVOCATIONCHECK_ALL_OCSP', 3);
define('OFFICESIGNER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('OFFICESIGNER_REVOCATIONCHECK_ANY_CRL', 5);
define('OFFICESIGNER_REVOCATIONCHECK_ANY_OCSP', 6);
define('OFFICESIGNER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('OFFICESIGNER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('OFFICESIGNER_SIGNATURETYPE_DEFAULT', 0);
define('OFFICESIGNER_SIGNATURETYPE_BINARY_CRYPTO_API', 1);
define('OFFICESIGNER_SIGNATURETYPE_BINARY_XML', 2);
define('OFFICESIGNER_SIGNATURETYPE_OPEN_XML', 3);
define('OFFICESIGNER_SIGNATURETYPE_OPEN_XPS', 4);
define('OFFICESIGNER_SIGNATURETYPE_OPEN_DOCUMENT', 5);

define('OFFICESIGNER_SOCKETDNSMODE_AUTO', 0);
define('OFFICESIGNER_SOCKETDNSMODE_PLATFORM', 1);
define('OFFICESIGNER_SOCKETDNSMODE_OWN', 2);
define('OFFICESIGNER_SOCKETDNSMODE_OWN_SECURE', 3);

define('OFFICESIGNER_TLSBASECONFIGURATION_DEFAULT', 0);
define('OFFICESIGNER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('OFFICESIGNER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('OFFICESIGNER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('OFFICESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('OFFICESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('OFFICESIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('OFFICESIGNER_TLSREVOCATIONCHECK_NONE', 0);
define('OFFICESIGNER_TLSREVOCATIONCHECK_AUTO', 1);
define('OFFICESIGNER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('OFFICESIGNER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('OFFICESIGNER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('OFFICESIGNER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('OFFICESIGNER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('OFFICESIGNER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('OFFICESIGNER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('OFFICESIGNER_TLSTLSMODE_DEFAULT', 0);
define('OFFICESIGNER_TLSTLSMODE_NO_TLS', 1);
define('OFFICESIGNER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('OFFICESIGNER_TLSTLSMODE_IMPLICIT_TLS', 3);

define('OFFICESIGNER_XADESFORM_UNKNOWN', 0);
define('OFFICESIGNER_XADESFORM_BASIC', 1);
define('OFFICESIGNER_XADESFORM_BES', 2);
define('OFFICESIGNER_XADESFORM_EPES', 3);
define('OFFICESIGNER_XADESFORM_T', 4);
define('OFFICESIGNER_XADESFORM_C', 5);
define('OFFICESIGNER_XADESFORM_X', 6);
define('OFFICESIGNER_XADESFORM_XL', 7);
define('OFFICESIGNER_XADESFORM_A', 8);
define('OFFICESIGNER_XADESFORM_EXTENDED_BES', 9);
define('OFFICESIGNER_XADESFORM_EXTENDED_EPES', 10);
define('OFFICESIGNER_XADESFORM_EXTENDED_T', 11);
define('OFFICESIGNER_XADESFORM_EXTENDED_C', 12);
define('OFFICESIGNER_XADESFORM_EXTENDED_X', 13);
define('OFFICESIGNER_XADESFORM_EXTENDED_XLONG', 14);
define('OFFICESIGNER_XADESFORM_EXTENDED_XL', 15);
define('OFFICESIGNER_XADESFORM_EXTENDED_A', 16);

define('OFFICESIGNER_XADESVERSION_UNKNOWN', 0);
define('OFFICESIGNER_XADESVERSION_111', 1);
define('OFFICESIGNER_XADESVERSION_122', 2);
define('OFFICESIGNER_XADESVERSION_132', 3);
define('OFFICESIGNER_XADESVERSION_141', 4);



/*
 * OfficeSigner Methods
 */

define('OFFICESIGNER_CONFIG_MID', 2);
define('OFFICESIGNER_EXTRACTASYNCDATA_MID', 3);
define('OFFICESIGNER_SIGN_MID', 4);
define('OFFICESIGNER_SIGNASYNCBEGIN_MID', 5);
define('OFFICESIGNER_SIGNASYNCEND_MID', 6);
define('OFFICESIGNER_SIGNEXTERNAL_MID', 7);
define('OFFICESIGNER_TIMESTAMP_MID', 8);
define('OFFICESIGNER_UPGRADE_MID', 9);


/*
 * OfficeSigner Events
 */
  
define('OFFICESIGNER_ERROR_EID', 1);
define('OFFICESIGNER_EXTERNALSIGN_EID', 2);
define('OFFICESIGNER_STORECERTIFICATE_EID', 3);
define('OFFICESIGNER_STORECRL_EID', 4);
define('OFFICESIGNER_STOREOCSPRESPONSE_EID', 5);

/*
 * OfficeVerifier Properties
 */

define('OFFICEVERIFIER_ALLSIGNATURESVALID_PID', 1);
define('OFFICEVERIFIER_BLOCKEDCERTCOUNT_PID', 2);
define('OFFICEVERIFIER_BLOCKEDCERTBYTES_PID', 3);
define('OFFICEVERIFIER_BLOCKEDCERTHANDLE_PID', 4);
define('OFFICEVERIFIER_CERTCOUNT_PID', 5);
define('OFFICEVERIFIER_CERTBYTES_PID', 6);
define('OFFICEVERIFIER_CERTCA_PID', 7);
define('OFFICEVERIFIER_CERTCAKEYID_PID', 8);
define('OFFICEVERIFIER_CERTCRLDISTRIBUTIONPOINTS_PID', 9);
define('OFFICEVERIFIER_CERTCURVE_PID', 10);
define('OFFICEVERIFIER_CERTFINGERPRINT_PID', 11);
define('OFFICEVERIFIER_CERTFRIENDLYNAME_PID', 12);
define('OFFICEVERIFIER_CERTHANDLE_PID', 13);
define('OFFICEVERIFIER_CERTHASHALGORITHM_PID', 14);
define('OFFICEVERIFIER_CERTISSUER_PID', 15);
define('OFFICEVERIFIER_CERTISSUERRDN_PID', 16);
define('OFFICEVERIFIER_CERTKEYALGORITHM_PID', 17);
define('OFFICEVERIFIER_CERTKEYBITS_PID', 18);
define('OFFICEVERIFIER_CERTKEYFINGERPRINT_PID', 19);
define('OFFICEVERIFIER_CERTKEYUSAGE_PID', 20);
define('OFFICEVERIFIER_CERTKEYVALID_PID', 21);
define('OFFICEVERIFIER_CERTOCSPLOCATIONS_PID', 22);
define('OFFICEVERIFIER_CERTPOLICYIDS_PID', 23);
define('OFFICEVERIFIER_CERTPUBLICKEYBYTES_PID', 24);
define('OFFICEVERIFIER_CERTSELFSIGNED_PID', 25);
define('OFFICEVERIFIER_CERTSERIALNUMBER_PID', 26);
define('OFFICEVERIFIER_CERTSIGALGORITHM_PID', 27);
define('OFFICEVERIFIER_CERTSUBJECT_PID', 28);
define('OFFICEVERIFIER_CERTSUBJECTKEYID_PID', 29);
define('OFFICEVERIFIER_CERTSUBJECTRDN_PID', 30);
define('OFFICEVERIFIER_CERTVALIDFROM_PID', 31);
define('OFFICEVERIFIER_CERTVALIDTO_PID', 32);
define('OFFICEVERIFIER_CHAINVALIDATIONDETAILS_PID', 33);
define('OFFICEVERIFIER_CHAINVALIDATIONRESULT_PID', 34);
define('OFFICEVERIFIER_CLAIMEDSIGNINGTIME_PID', 35);
define('OFFICEVERIFIER_CRLCOUNT_PID', 36);
define('OFFICEVERIFIER_CRLBYTES_PID', 37);
define('OFFICEVERIFIER_CRLHANDLE_PID', 38);
define('OFFICEVERIFIER_CRLISSUER_PID', 39);
define('OFFICEVERIFIER_CRLISSUERRDN_PID', 40);
define('OFFICEVERIFIER_CRLLOCATION_PID', 41);
define('OFFICEVERIFIER_CRLNEXTUPDATE_PID', 42);
define('OFFICEVERIFIER_CRLTHISUPDATE_PID', 43);
define('OFFICEVERIFIER_DOCUMENTFORMAT_PID', 44);
define('OFFICEVERIFIER_IGNORECHAINVALIDATIONERRORS_PID', 45);
define('OFFICEVERIFIER_INPUTFILE_PID', 46);
define('OFFICEVERIFIER_KNOWNCERTCOUNT_PID', 47);
define('OFFICEVERIFIER_KNOWNCERTBYTES_PID', 48);
define('OFFICEVERIFIER_KNOWNCERTHANDLE_PID', 49);
define('OFFICEVERIFIER_KNOWNCRLCOUNT_PID', 50);
define('OFFICEVERIFIER_KNOWNCRLBYTES_PID', 51);
define('OFFICEVERIFIER_KNOWNCRLHANDLE_PID', 52);
define('OFFICEVERIFIER_KNOWNOCSPCOUNT_PID', 53);
define('OFFICEVERIFIER_KNOWNOCSPBYTES_PID', 54);
define('OFFICEVERIFIER_KNOWNOCSPHANDLE_PID', 55);
define('OFFICEVERIFIER_LASTARCHIVALTIME_PID', 56);
define('OFFICEVERIFIER_OCSPCOUNT_PID', 57);
define('OFFICEVERIFIER_OCSPBYTES_PID', 58);
define('OFFICEVERIFIER_OCSPHANDLE_PID', 59);
define('OFFICEVERIFIER_OCSPISSUER_PID', 60);
define('OFFICEVERIFIER_OCSPISSUERRDN_PID', 61);
define('OFFICEVERIFIER_OCSPLOCATION_PID', 62);
define('OFFICEVERIFIER_OCSPPRODUCEDAT_PID', 63);
define('OFFICEVERIFIER_OFFLINEMODE_PID', 64);
define('OFFICEVERIFIER_OUTPUTFILE_PID', 65);
define('OFFICEVERIFIER_PROXYADDRESS_PID', 66);
define('OFFICEVERIFIER_PROXYAUTHENTICATION_PID', 67);
define('OFFICEVERIFIER_PROXYPASSWORD_PID', 68);
define('OFFICEVERIFIER_PROXYPORT_PID', 69);
define('OFFICEVERIFIER_PROXYPROXYTYPE_PID', 70);
define('OFFICEVERIFIER_PROXYREQUESTHEADERS_PID', 71);
define('OFFICEVERIFIER_PROXYRESPONSEBODY_PID', 72);
define('OFFICEVERIFIER_PROXYRESPONSEHEADERS_PID', 73);
define('OFFICEVERIFIER_PROXYUSEIPV6_PID', 74);
define('OFFICEVERIFIER_PROXYUSEPROXY_PID', 75);
define('OFFICEVERIFIER_PROXYUSERNAME_PID', 76);
define('OFFICEVERIFIER_QUALIFIED_PID', 77);
define('OFFICEVERIFIER_REVOCATIONCHECK_PID', 78);
define('OFFICEVERIFIER_SIGCHAINVALIDATIONDETAILS_PID', 79);
define('OFFICEVERIFIER_SIGCHAINVALIDATIONRESULT_PID', 80);
define('OFFICEVERIFIER_SIGCOREPROPERTIESSIGNED_PID', 81);
define('OFFICEVERIFIER_SIGDOCUMENTSIGNED_PID', 82);
define('OFFICEVERIFIER_SIGEXPIRETIME_PID', 83);
define('OFFICEVERIFIER_SIGHASHALGORITHM_PID', 84);
define('OFFICEVERIFIER_SIGQUALIFIED_PID', 85);
define('OFFICEVERIFIER_SIGSIGNATUREINFOCOMMENTS_PID', 86);
define('OFFICEVERIFIER_SIGSIGNATUREINFOINCLUDED_PID', 87);
define('OFFICEVERIFIER_SIGSIGNATUREINFOTEXT_PID', 88);
define('OFFICEVERIFIER_SIGSIGNATUREORIGINSIGNED_PID', 89);
define('OFFICEVERIFIER_SIGSIGNATURETIME_PID', 90);
define('OFFICEVERIFIER_SIGSIGNATURETYPE_PID', 91);
define('OFFICEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_PID', 92);
define('OFFICEVERIFIER_SIGSIGNTIME_PID', 93);
define('OFFICEVERIFIER_SIGSUBJECTRDN_PID', 94);
define('OFFICEVERIFIER_SIGVALIDATIONLOG_PID', 95);
define('OFFICEVERIFIER_SIGNATUREINDEX_PID', 96);
define('OFFICEVERIFIER_SIGNATURECOUNT_PID', 97);
define('OFFICEVERIFIER_SIGNATURECHAINVALIDATIONDETAILS_PID', 98);
define('OFFICEVERIFIER_SIGNATURECHAINVALIDATIONRESULT_PID', 99);
define('OFFICEVERIFIER_SIGNATURECOREPROPERTIESSIGNED_PID', 100);
define('OFFICEVERIFIER_SIGNATUREDOCUMENTSIGNED_PID', 101);
define('OFFICEVERIFIER_SIGNATUREEXPIRETIME_PID', 102);
define('OFFICEVERIFIER_SIGNATUREHASHALGORITHM_PID', 103);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_PID', 104);
define('OFFICEVERIFIER_SIGNATURESIGNATUREINFOCOMMENTS_PID', 105);
define('OFFICEVERIFIER_SIGNATURESIGNATUREINFOINCLUDED_PID', 106);
define('OFFICEVERIFIER_SIGNATURESIGNATUREINFOTEXT_PID', 107);
define('OFFICEVERIFIER_SIGNATURESIGNATUREORIGINSIGNED_PID', 108);
define('OFFICEVERIFIER_SIGNATURESIGNATURETIME_PID', 109);
define('OFFICEVERIFIER_SIGNATURESIGNATURETYPE_PID', 110);
define('OFFICEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_PID', 111);
define('OFFICEVERIFIER_SIGNATURESIGNTIME_PID', 112);
define('OFFICEVERIFIER_SIGNATURESUBJECTRDN_PID', 113);
define('OFFICEVERIFIER_SIGNATUREVALIDATIONLOG_PID', 114);
define('OFFICEVERIFIER_SIGNATUREVALIDATIONRESULT_PID', 115);
define('OFFICEVERIFIER_SIGNEDPARTCOUNT_PID', 116);
define('OFFICEVERIFIER_SIGNEDPARTCONTENTTYPE_PID', 117);
define('OFFICEVERIFIER_SIGNEDPARTDIGESTVALUE_PID', 118);
define('OFFICEVERIFIER_SIGNEDPARTHASHALGORITHM_PID', 119);
define('OFFICEVERIFIER_SIGNEDPARTISRELATIONSHIPPART_PID', 120);
define('OFFICEVERIFIER_SIGNEDPARTPATH_PID', 121);
define('OFFICEVERIFIER_SIGNEDPARTSIGNATUREVALIDATIONRESULT_PID', 122);
define('OFFICEVERIFIER_SIGNINGCERTBYTES_PID', 123);
define('OFFICEVERIFIER_SIGNINGCERTCA_PID', 124);
define('OFFICEVERIFIER_SIGNINGCERTCAKEYID_PID', 125);
define('OFFICEVERIFIER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 126);
define('OFFICEVERIFIER_SIGNINGCERTCURVE_PID', 127);
define('OFFICEVERIFIER_SIGNINGCERTFINGERPRINT_PID', 128);
define('OFFICEVERIFIER_SIGNINGCERTFRIENDLYNAME_PID', 129);
define('OFFICEVERIFIER_SIGNINGCERTHANDLE_PID', 130);
define('OFFICEVERIFIER_SIGNINGCERTHASHALGORITHM_PID', 131);
define('OFFICEVERIFIER_SIGNINGCERTISSUER_PID', 132);
define('OFFICEVERIFIER_SIGNINGCERTISSUERRDN_PID', 133);
define('OFFICEVERIFIER_SIGNINGCERTKEYALGORITHM_PID', 134);
define('OFFICEVERIFIER_SIGNINGCERTKEYBITS_PID', 135);
define('OFFICEVERIFIER_SIGNINGCERTKEYFINGERPRINT_PID', 136);
define('OFFICEVERIFIER_SIGNINGCERTKEYUSAGE_PID', 137);
define('OFFICEVERIFIER_SIGNINGCERTKEYVALID_PID', 138);
define('OFFICEVERIFIER_SIGNINGCERTOCSPLOCATIONS_PID', 139);
define('OFFICEVERIFIER_SIGNINGCERTPOLICYIDS_PID', 140);
define('OFFICEVERIFIER_SIGNINGCERTPUBLICKEYBYTES_PID', 141);
define('OFFICEVERIFIER_SIGNINGCERTSELFSIGNED_PID', 142);
define('OFFICEVERIFIER_SIGNINGCERTSERIALNUMBER_PID', 143);
define('OFFICEVERIFIER_SIGNINGCERTSIGALGORITHM_PID', 144);
define('OFFICEVERIFIER_SIGNINGCERTSUBJECT_PID', 145);
define('OFFICEVERIFIER_SIGNINGCERTSUBJECTKEYID_PID', 146);
define('OFFICEVERIFIER_SIGNINGCERTSUBJECTRDN_PID', 147);
define('OFFICEVERIFIER_SIGNINGCERTVALIDFROM_PID', 148);
define('OFFICEVERIFIER_SIGNINGCERTVALIDTO_PID', 149);
define('OFFICEVERIFIER_SOCKETDNSMODE_PID', 150);
define('OFFICEVERIFIER_SOCKETDNSPORT_PID', 151);
define('OFFICEVERIFIER_SOCKETDNSQUERYTIMEOUT_PID', 152);
define('OFFICEVERIFIER_SOCKETDNSSERVERS_PID', 153);
define('OFFICEVERIFIER_SOCKETDNSTOTALTIMEOUT_PID', 154);
define('OFFICEVERIFIER_SOCKETINCOMINGSPEEDLIMIT_PID', 155);
define('OFFICEVERIFIER_SOCKETLOCALADDRESS_PID', 156);
define('OFFICEVERIFIER_SOCKETLOCALPORT_PID', 157);
define('OFFICEVERIFIER_SOCKETOUTGOINGSPEEDLIMIT_PID', 158);
define('OFFICEVERIFIER_SOCKETTIMEOUT_PID', 159);
define('OFFICEVERIFIER_SOCKETUSEIPV6_PID', 160);
define('OFFICEVERIFIER_TIMESTAMPACCURACY_PID', 161);
define('OFFICEVERIFIER_TIMESTAMPBYTES_PID', 162);
define('OFFICEVERIFIER_TIMESTAMPCHAINVALIDATIONDETAILS_PID', 163);
define('OFFICEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_PID', 164);
define('OFFICEVERIFIER_TIMESTAMPHASHALGORITHM_PID', 165);
define('OFFICEVERIFIER_TIMESTAMPSERIALNUMBER_PID', 166);
define('OFFICEVERIFIER_TIMESTAMPTIME_PID', 167);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_PID', 168);
define('OFFICEVERIFIER_TIMESTAMPTSANAME_PID', 169);
define('OFFICEVERIFIER_TIMESTAMPVALIDATIONLOG_PID', 170);
define('OFFICEVERIFIER_TIMESTAMPVALIDATIONRESULT_PID', 171);
define('OFFICEVERIFIER_TIMESTAMPED_PID', 172);
define('OFFICEVERIFIER_TLSAUTOVALIDATECERTIFICATES_PID', 173);
define('OFFICEVERIFIER_TLSBASECONFIGURATION_PID', 174);
define('OFFICEVERIFIER_TLSCIPHERSUITES_PID', 175);
define('OFFICEVERIFIER_TLSECCURVES_PID', 176);
define('OFFICEVERIFIER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 177);
define('OFFICEVERIFIER_TLSPRESHAREDIDENTITY_PID', 178);
define('OFFICEVERIFIER_TLSPRESHAREDKEY_PID', 179);
define('OFFICEVERIFIER_TLSPRESHAREDKEYCIPHERSUITE_PID', 180);
define('OFFICEVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 181);
define('OFFICEVERIFIER_TLSREVOCATIONCHECK_PID', 182);
define('OFFICEVERIFIER_TLSSSLOPTIONS_PID', 183);
define('OFFICEVERIFIER_TLSTLSMODE_PID', 184);
define('OFFICEVERIFIER_TLSUSEEXTENDEDMASTERSECRET_PID', 185);
define('OFFICEVERIFIER_TLSUSESESSIONRESUMPTION_PID', 186);
define('OFFICEVERIFIER_TLSVERSIONS_PID', 187);
define('OFFICEVERIFIER_TRUSTEDCERTCOUNT_PID', 188);
define('OFFICEVERIFIER_TRUSTEDCERTBYTES_PID', 189);
define('OFFICEVERIFIER_TRUSTEDCERTHANDLE_PID', 190);
define('OFFICEVERIFIER_TSACERTBYTES_PID', 191);
define('OFFICEVERIFIER_TSACERTCA_PID', 192);
define('OFFICEVERIFIER_TSACERTCAKEYID_PID', 193);
define('OFFICEVERIFIER_TSACERTCRLDISTRIBUTIONPOINTS_PID', 194);
define('OFFICEVERIFIER_TSACERTCURVE_PID', 195);
define('OFFICEVERIFIER_TSACERTFINGERPRINT_PID', 196);
define('OFFICEVERIFIER_TSACERTFRIENDLYNAME_PID', 197);
define('OFFICEVERIFIER_TSACERTHANDLE_PID', 198);
define('OFFICEVERIFIER_TSACERTHASHALGORITHM_PID', 199);
define('OFFICEVERIFIER_TSACERTISSUER_PID', 200);
define('OFFICEVERIFIER_TSACERTISSUERRDN_PID', 201);
define('OFFICEVERIFIER_TSACERTKEYALGORITHM_PID', 202);
define('OFFICEVERIFIER_TSACERTKEYBITS_PID', 203);
define('OFFICEVERIFIER_TSACERTKEYFINGERPRINT_PID', 204);
define('OFFICEVERIFIER_TSACERTKEYUSAGE_PID', 205);
define('OFFICEVERIFIER_TSACERTKEYVALID_PID', 206);
define('OFFICEVERIFIER_TSACERTOCSPLOCATIONS_PID', 207);
define('OFFICEVERIFIER_TSACERTPOLICYIDS_PID', 208);
define('OFFICEVERIFIER_TSACERTPUBLICKEYBYTES_PID', 209);
define('OFFICEVERIFIER_TSACERTSELFSIGNED_PID', 210);
define('OFFICEVERIFIER_TSACERTSERIALNUMBER_PID', 211);
define('OFFICEVERIFIER_TSACERTSIGALGORITHM_PID', 212);
define('OFFICEVERIFIER_TSACERTSUBJECT_PID', 213);
define('OFFICEVERIFIER_TSACERTSUBJECTKEYID_PID', 214);
define('OFFICEVERIFIER_TSACERTSUBJECTRDN_PID', 215);
define('OFFICEVERIFIER_TSACERTVALIDFROM_PID', 216);
define('OFFICEVERIFIER_TSACERTVALIDTO_PID', 217);
define('OFFICEVERIFIER_VALIDATEDSIGNINGTIME_PID', 218);
define('OFFICEVERIFIER_VALIDATIONLOG_PID', 219);
define('OFFICEVERIFIER_VALIDATIONMOMENT_PID', 220);
define('OFFICEVERIFIER_XADESENABLED_PID', 221);
define('OFFICEVERIFIER_XADESFORM_PID', 222);
define('OFFICEVERIFIER_XADESVERSION_PID', 223);


/*
 * OfficeVerifier Enums
 */

define('OFFICEVERIFIER_CHAINVALIDATIONRESULT_VALID', 0);
define('OFFICEVERIFIER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('OFFICEVERIFIER_CHAINVALIDATIONRESULT_INVALID', 2);
define('OFFICEVERIFIER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('OFFICEVERIFIER_DOCUMENTFORMAT_UNKNOWN', 0);
define('OFFICEVERIFIER_DOCUMENTFORMAT_BINARY', 1);
define('OFFICEVERIFIER_DOCUMENTFORMAT_OPEN_XML', 2);
define('OFFICEVERIFIER_DOCUMENTFORMAT_OPEN_XPS', 3);
define('OFFICEVERIFIER_DOCUMENTFORMAT_OPEN_DOCUMENT', 4);

define('OFFICEVERIFIER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('OFFICEVERIFIER_PROXYAUTHENTICATION_BASIC', 1);
define('OFFICEVERIFIER_PROXYAUTHENTICATION_DIGEST', 2);
define('OFFICEVERIFIER_PROXYAUTHENTICATION_NTLM', 3);

define('OFFICEVERIFIER_PROXYPROXYTYPE_NONE', 0);
define('OFFICEVERIFIER_PROXYPROXYTYPE_SOCKS_4', 1);
define('OFFICEVERIFIER_PROXYPROXYTYPE_SOCKS_5', 2);
define('OFFICEVERIFIER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('OFFICEVERIFIER_PROXYPROXYTYPE_HTTP', 4);

define('OFFICEVERIFIER_QUALIFIED_UNKNOWN', 0);
define('OFFICEVERIFIER_QUALIFIED_NONE', 1);
define('OFFICEVERIFIER_QUALIFIED_GRANTED', 2);
define('OFFICEVERIFIER_QUALIFIED_WITHDRAWN', 3);
define('OFFICEVERIFIER_QUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('OFFICEVERIFIER_QUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('OFFICEVERIFIER_QUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('OFFICEVERIFIER_QUALIFIED_UNDER_SUPERVISION', 7);
define('OFFICEVERIFIER_QUALIFIED_SUPERVISION_INCESSATION', 8);
define('OFFICEVERIFIER_QUALIFIED_SUPERVISION_CEASED', 9);
define('OFFICEVERIFIER_QUALIFIED_SUPERVISION_REVOKED', 10);
define('OFFICEVERIFIER_QUALIFIED_ACCREDITED', 11);
define('OFFICEVERIFIER_QUALIFIED_ACCREDITION_CEASED', 12);
define('OFFICEVERIFIER_QUALIFIED_ACCREDITION_REVOKED', 13);

define('OFFICEVERIFIER_REVOCATIONCHECK_NONE', 0);
define('OFFICEVERIFIER_REVOCATIONCHECK_AUTO', 1);
define('OFFICEVERIFIER_REVOCATIONCHECK_ALL_CRL', 2);
define('OFFICEVERIFIER_REVOCATIONCHECK_ALL_OCSP', 3);
define('OFFICEVERIFIER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('OFFICEVERIFIER_REVOCATIONCHECK_ANY_CRL', 5);
define('OFFICEVERIFIER_REVOCATIONCHECK_ANY_OCSP', 6);
define('OFFICEVERIFIER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('OFFICEVERIFIER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('OFFICEVERIFIER_SIGCHAINVALIDATIONRESULT_VALID', 0);
define('OFFICEVERIFIER_SIGCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('OFFICEVERIFIER_SIGCHAINVALIDATIONRESULT_INVALID', 2);
define('OFFICEVERIFIER_SIGCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('OFFICEVERIFIER_SIGQUALIFIED_UNKNOWN', 0);
define('OFFICEVERIFIER_SIGQUALIFIED_NONE', 1);
define('OFFICEVERIFIER_SIGQUALIFIED_GRANTED', 2);
define('OFFICEVERIFIER_SIGQUALIFIED_WITHDRAWN', 3);
define('OFFICEVERIFIER_SIGQUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('OFFICEVERIFIER_SIGQUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('OFFICEVERIFIER_SIGQUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('OFFICEVERIFIER_SIGQUALIFIED_UNDER_SUPERVISION', 7);
define('OFFICEVERIFIER_SIGQUALIFIED_SUPERVISION_INCESSATION', 8);
define('OFFICEVERIFIER_SIGQUALIFIED_SUPERVISION_CEASED', 9);
define('OFFICEVERIFIER_SIGQUALIFIED_SUPERVISION_REVOKED', 10);
define('OFFICEVERIFIER_SIGQUALIFIED_ACCREDITED', 11);
define('OFFICEVERIFIER_SIGQUALIFIED_ACCREDITION_CEASED', 12);
define('OFFICEVERIFIER_SIGQUALIFIED_ACCREDITION_REVOKED', 13);

define('OFFICEVERIFIER_SIGSIGNATURETYPE_DEFAULT', 0);
define('OFFICEVERIFIER_SIGSIGNATURETYPE_BINARY_CRYPTO_API', 1);
define('OFFICEVERIFIER_SIGSIGNATURETYPE_BINARY_XML', 2);
define('OFFICEVERIFIER_SIGSIGNATURETYPE_OPEN_XML', 3);
define('OFFICEVERIFIER_SIGSIGNATURETYPE_OPEN_XPS', 4);
define('OFFICEVERIFIER_SIGSIGNATURETYPE_OPEN_DOCUMENT', 5);

define('OFFICEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_VALID', 0);
define('OFFICEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('OFFICEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('OFFICEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('OFFICEVERIFIER_SIGSIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('OFFICEVERIFIER_SIGNATURECHAINVALIDATIONRESULT_VALID', 0);
define('OFFICEVERIFIER_SIGNATURECHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('OFFICEVERIFIER_SIGNATURECHAINVALIDATIONRESULT_INVALID', 2);
define('OFFICEVERIFIER_SIGNATURECHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('OFFICEVERIFIER_SIGNATUREQUALIFIED_UNKNOWN', 0);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_NONE', 1);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_GRANTED', 2);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_WITHDRAWN', 3);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_UNDER_SUPERVISION', 7);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_SUPERVISION_INCESSATION', 8);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_SUPERVISION_CEASED', 9);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_SUPERVISION_REVOKED', 10);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_ACCREDITED', 11);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_ACCREDITION_CEASED', 12);
define('OFFICEVERIFIER_SIGNATUREQUALIFIED_ACCREDITION_REVOKED', 13);

define('OFFICEVERIFIER_SIGNATURESIGNATURETYPE_DEFAULT', 0);
define('OFFICEVERIFIER_SIGNATURESIGNATURETYPE_BINARY_CRYPTO_API', 1);
define('OFFICEVERIFIER_SIGNATURESIGNATURETYPE_BINARY_XML', 2);
define('OFFICEVERIFIER_SIGNATURESIGNATURETYPE_OPEN_XML', 3);
define('OFFICEVERIFIER_SIGNATURESIGNATURETYPE_OPEN_XPS', 4);
define('OFFICEVERIFIER_SIGNATURESIGNATURETYPE_OPEN_DOCUMENT', 5);

define('OFFICEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_VALID', 0);
define('OFFICEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('OFFICEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('OFFICEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('OFFICEVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('OFFICEVERIFIER_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('OFFICEVERIFIER_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('OFFICEVERIFIER_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('OFFICEVERIFIER_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('OFFICEVERIFIER_SIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('OFFICEVERIFIER_SIGNEDPARTSIGNATUREVALIDATIONRESULT_VALID', 0);
define('OFFICEVERIFIER_SIGNEDPARTSIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('OFFICEVERIFIER_SIGNEDPARTSIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('OFFICEVERIFIER_SIGNEDPARTSIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('OFFICEVERIFIER_SIGNEDPARTSIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('OFFICEVERIFIER_SOCKETDNSMODE_AUTO', 0);
define('OFFICEVERIFIER_SOCKETDNSMODE_PLATFORM', 1);
define('OFFICEVERIFIER_SOCKETDNSMODE_OWN', 2);
define('OFFICEVERIFIER_SOCKETDNSMODE_OWN_SECURE', 3);

define('OFFICEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID', 0);
define('OFFICEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('OFFICEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_INVALID', 2);
define('OFFICEVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_UNKNOWN', 0);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_LEGACY', 1);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_TRUSTED', 2);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_GENERIC', 3);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ESC', 4);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_CONTENT', 5);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_CERTS_AND_CRLS', 6);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE', 7);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_2', 8);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_3', 9);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_INDIVIDUAL_DATA_OBJECTS', 10);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_ALL_DATA_OBJECTS', 11);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIGNATURE', 12);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_REFS_ONLY', 13);
define('OFFICEVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIG_AND_REFS', 14);

define('OFFICEVERIFIER_TIMESTAMPVALIDATIONRESULT_VALID', 0);
define('OFFICEVERIFIER_TIMESTAMPVALIDATIONRESULT_UNKNOWN', 1);
define('OFFICEVERIFIER_TIMESTAMPVALIDATIONRESULT_CORRUPTED', 2);
define('OFFICEVERIFIER_TIMESTAMPVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('OFFICEVERIFIER_TIMESTAMPVALIDATIONRESULT_FAILURE', 4);

define('OFFICEVERIFIER_TLSBASECONFIGURATION_DEFAULT', 0);
define('OFFICEVERIFIER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('OFFICEVERIFIER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('OFFICEVERIFIER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('OFFICEVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('OFFICEVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('OFFICEVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('OFFICEVERIFIER_TLSREVOCATIONCHECK_NONE', 0);
define('OFFICEVERIFIER_TLSREVOCATIONCHECK_AUTO', 1);
define('OFFICEVERIFIER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('OFFICEVERIFIER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('OFFICEVERIFIER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('OFFICEVERIFIER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('OFFICEVERIFIER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('OFFICEVERIFIER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('OFFICEVERIFIER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('OFFICEVERIFIER_TLSTLSMODE_DEFAULT', 0);
define('OFFICEVERIFIER_TLSTLSMODE_NO_TLS', 1);
define('OFFICEVERIFIER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('OFFICEVERIFIER_TLSTLSMODE_IMPLICIT_TLS', 3);

define('OFFICEVERIFIER_XADESFORM_UNKNOWN', 0);
define('OFFICEVERIFIER_XADESFORM_BASIC', 1);
define('OFFICEVERIFIER_XADESFORM_BES', 2);
define('OFFICEVERIFIER_XADESFORM_EPES', 3);
define('OFFICEVERIFIER_XADESFORM_T', 4);
define('OFFICEVERIFIER_XADESFORM_C', 5);
define('OFFICEVERIFIER_XADESFORM_X', 6);
define('OFFICEVERIFIER_XADESFORM_XL', 7);
define('OFFICEVERIFIER_XADESFORM_A', 8);
define('OFFICEVERIFIER_XADESFORM_EXTENDED_BES', 9);
define('OFFICEVERIFIER_XADESFORM_EXTENDED_EPES', 10);
define('OFFICEVERIFIER_XADESFORM_EXTENDED_T', 11);
define('OFFICEVERIFIER_XADESFORM_EXTENDED_C', 12);
define('OFFICEVERIFIER_XADESFORM_EXTENDED_X', 13);
define('OFFICEVERIFIER_XADESFORM_EXTENDED_XLONG', 14);
define('OFFICEVERIFIER_XADESFORM_EXTENDED_XL', 15);
define('OFFICEVERIFIER_XADESFORM_EXTENDED_A', 16);

define('OFFICEVERIFIER_XADESVERSION_UNKNOWN', 0);
define('OFFICEVERIFIER_XADESVERSION_111', 1);
define('OFFICEVERIFIER_XADESVERSION_122', 2);
define('OFFICEVERIFIER_XADESVERSION_132', 3);
define('OFFICEVERIFIER_XADESVERSION_141', 4);



/*
 * OfficeVerifier Methods
 */

define('OFFICEVERIFIER_ADDTIMESTAMP_MID', 2);
define('OFFICEVERIFIER_ADDTIMESTAMPVALIDATIONDATA_MID', 3);
define('OFFICEVERIFIER_ADDVALIDATIONDATAREFS_MID', 4);
define('OFFICEVERIFIER_ADDVALIDATIONDATAVALUES_MID', 5);
define('OFFICEVERIFIER_CONFIG_MID', 6);
define('OFFICEVERIFIER_VERIFY_MID', 7);


/*
 * OfficeVerifier Events
 */
  
define('OFFICEVERIFIER_CHAINVALIDATED_EID', 1);
define('OFFICEVERIFIER_ERROR_EID', 2);
define('OFFICEVERIFIER_RETRIEVECERTIFICATE_EID', 3);
define('OFFICEVERIFIER_RETRIEVECRL_EID', 4);
define('OFFICEVERIFIER_RETRIEVEOCSPRESPONSE_EID', 5);
define('OFFICEVERIFIER_SIGNATUREFOUND_EID', 6);
define('OFFICEVERIFIER_SIGNATUREVALIDATED_EID', 7);
define('OFFICEVERIFIER_STORECERTIFICATE_EID', 8);
define('OFFICEVERIFIER_STORECRL_EID', 9);
define('OFFICEVERIFIER_STOREOCSPRESPONSE_EID', 10);
define('OFFICEVERIFIER_TIMESTAMPFOUND_EID', 11);
define('OFFICEVERIFIER_TIMESTAMPVALIDATED_EID', 12);

/*
 * OTPClient Properties
 */

define('OTPCLIENT_KEYSECRET_PID', 1);
define('OTPCLIENT_PASSWORDLENGTH_PID', 2);


/*
 * OTPClient Enums
 */



/*
 * OTPClient Methods
 */

define('OTPCLIENT_CONFIG_MID', 2);
define('OTPCLIENT_GENERATEHOTPPASSWORD_MID', 3);
define('OTPCLIENT_GENERATETOTPPASSWORD_MID', 4);


/*
 * OTPClient Events
 */
  
define('OTPCLIENT_ERROR_EID', 1);

/*
 * OTPServer Properties
 */

define('OTPSERVER_USERCOUNT_PID', 1);
define('OTPSERVER_USERASSOCIATEDDATA_PID', 2);
define('OTPSERVER_USERBASEPATH_PID', 3);
define('OTPSERVER_USERCERT_PID', 4);
define('OTPSERVER_USERDATA_PID', 5);
define('OTPSERVER_USERHANDLE_PID', 6);
define('OTPSERVER_USERHASHALGORITHM_PID', 7);
define('OTPSERVER_USERINCOMINGSPEEDLIMIT_PID', 8);
define('OTPSERVER_USEROTPALGORITHM_PID', 9);
define('OTPSERVER_USEROTPVALUE_PID', 10);
define('OTPSERVER_USEROUTGOINGSPEEDLIMIT_PID', 11);
define('OTPSERVER_USERPASSWORD_PID', 12);
define('OTPSERVER_USERPASSWORDLEN_PID', 13);
define('OTPSERVER_USERSHAREDSECRET_PID', 14);
define('OTPSERVER_USERSSHKEY_PID', 15);
define('OTPSERVER_USERUSERNAME_PID', 16);


/*
 * OTPServer Enums
 */

define('OTPSERVER_USEROTPALGORITHM_HMAC', 0);
define('OTPSERVER_USEROTPALGORITHM_TIME', 1);



/*
 * OTPServer Methods
 */

define('OTPSERVER_CONFIG_MID', 2);
define('OTPSERVER_ISHOTPPASSWORDVALID_MID', 3);
define('OTPSERVER_ISPASSWORDVALID_MID', 4);
define('OTPSERVER_ISTOTPPASSWORDVALID_MID', 5);


/*
 * OTPServer Events
 */
  
define('OTPSERVER_ERROR_EID', 1);

/*
 * PDFDecryptor Properties
 */

define('PDFDECRYPTOR_DECRYPTIONCERTIFICATEBYTES_PID', 1);
define('PDFDECRYPTOR_DECRYPTIONCERTIFICATEHANDLE_PID', 2);
define('PDFDECRYPTOR_DECRYPTIONCERTCOUNT_PID', 3);
define('PDFDECRYPTOR_DECRYPTIONCERTBYTES_PID', 4);
define('PDFDECRYPTOR_DECRYPTIONCERTHANDLE_PID', 5);
define('PDFDECRYPTOR_ENCRYPTED_PID', 6);
define('PDFDECRYPTOR_ENCRYPTIONALGORITHM_PID', 7);
define('PDFDECRYPTOR_ENCRYPTIONTYPE_PID', 8);
define('PDFDECRYPTOR_EXTERNALCRYPTOCUSTOMPARAMS_PID', 9);
define('PDFDECRYPTOR_EXTERNALCRYPTODATA_PID', 10);
define('PDFDECRYPTOR_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 11);
define('PDFDECRYPTOR_EXTERNALCRYPTOHASHALGORITHM_PID', 12);
define('PDFDECRYPTOR_EXTERNALCRYPTOKEYID_PID', 13);
define('PDFDECRYPTOR_EXTERNALCRYPTOKEYSECRET_PID', 14);
define('PDFDECRYPTOR_EXTERNALCRYPTOMETHOD_PID', 15);
define('PDFDECRYPTOR_EXTERNALCRYPTOMODE_PID', 16);
define('PDFDECRYPTOR_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 17);
define('PDFDECRYPTOR_INPUTFILE_PID', 18);
define('PDFDECRYPTOR_METADATAENCRYPTED_PID', 19);
define('PDFDECRYPTOR_OUTPUTFILE_PID', 20);
define('PDFDECRYPTOR_PASSWORD_PID', 21);
define('PDFDECRYPTOR_PERMSANNOTATIONS_PID', 22);
define('PDFDECRYPTOR_PERMSASSEMBLE_PID', 23);
define('PDFDECRYPTOR_PERMSEXTRACT_PID', 24);
define('PDFDECRYPTOR_PERMSEXTRACTACC_PID', 25);
define('PDFDECRYPTOR_PERMSFILLINFORMS_PID', 26);
define('PDFDECRYPTOR_PERMSHIGHQUALITYPRINT_PID', 27);
define('PDFDECRYPTOR_PERMSLOWQUALITYPRINT_PID', 28);
define('PDFDECRYPTOR_PERMSMODIFY_PID', 29);


/*
 * PDFDecryptor Enums
 */

define('PDFDECRYPTOR_ENCRYPTIONTYPE_PASSWORD', 1);
define('PDFDECRYPTOR_ENCRYPTIONTYPE_CERTIFICATE', 2);

define('PDFDECRYPTOR_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('PDFDECRYPTOR_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('PDFDECRYPTOR_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('PDFDECRYPTOR_EXTERNALCRYPTOMODE_DISABLED', 1);
define('PDFDECRYPTOR_EXTERNALCRYPTOMODE_GENERIC', 2);



/*
 * PDFDecryptor Methods
 */

define('PDFDECRYPTOR_CONFIG_MID', 2);
define('PDFDECRYPTOR_DECRYPT_MID', 3);


/*
 * PDFDecryptor Events
 */
  
define('PDFDECRYPTOR_DECRYPTIONINFONEEDED_EID', 1);
define('PDFDECRYPTOR_ERROR_EID', 2);
define('PDFDECRYPTOR_EXTERNALDECRYPT_EID', 3);
define('PDFDECRYPTOR_RECIPIENTFOUND_EID', 4);

/*
 * PDFEncryptor Properties
 */

define('PDFENCRYPTOR_ENCRYPTIONALGORITHM_PID', 1);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEBYTES_PID', 2);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATECA_PID', 3);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATECAKEYID_PID', 4);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATECRLDISTRIBUTIONPOINTS_PID', 5);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATECURVE_PID', 6);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEFINGERPRINT_PID', 7);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEFRIENDLYNAME_PID', 8);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEHANDLE_PID', 9);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEHASHALGORITHM_PID', 10);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEISSUER_PID', 11);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEISSUERRDN_PID', 12);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEKEYALGORITHM_PID', 13);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEKEYBITS_PID', 14);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEKEYFINGERPRINT_PID', 15);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEKEYUSAGE_PID', 16);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEKEYVALID_PID', 17);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEOCSPLOCATIONS_PID', 18);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEORIGIN_PID', 19);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEPOLICYIDS_PID', 20);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEPRIVATEKEYBYTES_PID', 21);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEPRIVATEKEYEXISTS_PID', 22);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEPRIVATEKEYEXTRACTABLE_PID', 23);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEPUBLICKEYBYTES_PID', 24);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATESELFSIGNED_PID', 25);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATESERIALNUMBER_PID', 26);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATESIGALGORITHM_PID', 27);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATESUBJECT_PID', 28);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATESUBJECTKEYID_PID', 29);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATESUBJECTRDN_PID', 30);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEVALIDFROM_PID', 31);
define('PDFENCRYPTOR_ENCRYPTIONCERTIFICATEVALIDTO_PID', 32);
define('PDFENCRYPTOR_ENCRYPTIONCERTCOUNT_PID', 33);
define('PDFENCRYPTOR_ENCRYPTIONCERTBYTES_PID', 34);
define('PDFENCRYPTOR_ENCRYPTIONCERTCA_PID', 35);
define('PDFENCRYPTOR_ENCRYPTIONCERTCAKEYID_PID', 36);
define('PDFENCRYPTOR_ENCRYPTIONCERTCRLDISTRIBUTIONPOINTS_PID', 37);
define('PDFENCRYPTOR_ENCRYPTIONCERTCURVE_PID', 38);
define('PDFENCRYPTOR_ENCRYPTIONCERTFINGERPRINT_PID', 39);
define('PDFENCRYPTOR_ENCRYPTIONCERTFRIENDLYNAME_PID', 40);
define('PDFENCRYPTOR_ENCRYPTIONCERTHANDLE_PID', 41);
define('PDFENCRYPTOR_ENCRYPTIONCERTHASHALGORITHM_PID', 42);
define('PDFENCRYPTOR_ENCRYPTIONCERTISSUER_PID', 43);
define('PDFENCRYPTOR_ENCRYPTIONCERTISSUERRDN_PID', 44);
define('PDFENCRYPTOR_ENCRYPTIONCERTKEYALGORITHM_PID', 45);
define('PDFENCRYPTOR_ENCRYPTIONCERTKEYBITS_PID', 46);
define('PDFENCRYPTOR_ENCRYPTIONCERTKEYFINGERPRINT_PID', 47);
define('PDFENCRYPTOR_ENCRYPTIONCERTKEYUSAGE_PID', 48);
define('PDFENCRYPTOR_ENCRYPTIONCERTKEYVALID_PID', 49);
define('PDFENCRYPTOR_ENCRYPTIONCERTOCSPLOCATIONS_PID', 50);
define('PDFENCRYPTOR_ENCRYPTIONCERTORIGIN_PID', 51);
define('PDFENCRYPTOR_ENCRYPTIONCERTPOLICYIDS_PID', 52);
define('PDFENCRYPTOR_ENCRYPTIONCERTPRIVATEKEYBYTES_PID', 53);
define('PDFENCRYPTOR_ENCRYPTIONCERTPRIVATEKEYEXISTS_PID', 54);
define('PDFENCRYPTOR_ENCRYPTIONCERTPRIVATEKEYEXTRACTABLE_PID', 55);
define('PDFENCRYPTOR_ENCRYPTIONCERTPUBLICKEYBYTES_PID', 56);
define('PDFENCRYPTOR_ENCRYPTIONCERTSELFSIGNED_PID', 57);
define('PDFENCRYPTOR_ENCRYPTIONCERTSERIALNUMBER_PID', 58);
define('PDFENCRYPTOR_ENCRYPTIONCERTSIGALGORITHM_PID', 59);
define('PDFENCRYPTOR_ENCRYPTIONCERTSUBJECT_PID', 60);
define('PDFENCRYPTOR_ENCRYPTIONCERTSUBJECTKEYID_PID', 61);
define('PDFENCRYPTOR_ENCRYPTIONCERTSUBJECTRDN_PID', 62);
define('PDFENCRYPTOR_ENCRYPTIONCERTVALIDFROM_PID', 63);
define('PDFENCRYPTOR_ENCRYPTIONCERTVALIDTO_PID', 64);
define('PDFENCRYPTOR_ENCRYPTIONTYPE_PID', 65);
define('PDFENCRYPTOR_ENCRYPTMETADATA_PID', 66);
define('PDFENCRYPTOR_INPUTFILE_PID', 67);
define('PDFENCRYPTOR_OUTPUTFILE_PID', 68);
define('PDFENCRYPTOR_OWNERPASSWORD_PID', 69);
define('PDFENCRYPTOR_PERMSANNOTATIONS_PID', 70);
define('PDFENCRYPTOR_PERMSASSEMBLE_PID', 71);
define('PDFENCRYPTOR_PERMSEXTRACT_PID', 72);
define('PDFENCRYPTOR_PERMSEXTRACTACC_PID', 73);
define('PDFENCRYPTOR_PERMSFILLINFORMS_PID', 74);
define('PDFENCRYPTOR_PERMSHIGHQUALITYPRINT_PID', 75);
define('PDFENCRYPTOR_PERMSLOWQUALITYPRINT_PID', 76);
define('PDFENCRYPTOR_PERMSMODIFY_PID', 77);
define('PDFENCRYPTOR_USERPASSWORD_PID', 78);


/*
 * PDFEncryptor Enums
 */

define('PDFENCRYPTOR_ENCRYPTIONTYPE_PASSWORD', 1);
define('PDFENCRYPTOR_ENCRYPTIONTYPE_CERTIFICATE', 2);



/*
 * PDFEncryptor Methods
 */

define('PDFENCRYPTOR_CONFIG_MID', 2);
define('PDFENCRYPTOR_ENCRYPT_MID', 3);


/*
 * PDFEncryptor Events
 */
  
define('PDFENCRYPTOR_ERROR_EID', 1);

/*
 * PDFSigner Properties
 */

define('PDFSIGNER_BLOCKEDCERTCOUNT_PID', 1);
define('PDFSIGNER_BLOCKEDCERTBYTES_PID', 2);
define('PDFSIGNER_BLOCKEDCERTHANDLE_PID', 3);
define('PDFSIGNER_CLAIMEDSIGNINGTIME_PID', 4);
define('PDFSIGNER_DECRYPTIONCERTIFICATEBYTES_PID', 5);
define('PDFSIGNER_DECRYPTIONCERTIFICATEHANDLE_PID', 6);
define('PDFSIGNER_DECRYPTIONCERTCOUNT_PID', 7);
define('PDFSIGNER_DECRYPTIONCERTBYTES_PID', 8);
define('PDFSIGNER_DECRYPTIONCERTHANDLE_PID', 9);
define('PDFSIGNER_EMPTYFIELDINDEX_PID', 10);
define('PDFSIGNER_ENCRYPTED_PID', 11);
define('PDFSIGNER_ENCRYPTIONALGORITHM_PID', 12);
define('PDFSIGNER_ENCRYPTIONTYPE_PID', 13);
define('PDFSIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 14);
define('PDFSIGNER_EXTERNALCRYPTODATA_PID', 15);
define('PDFSIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 16);
define('PDFSIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 17);
define('PDFSIGNER_EXTERNALCRYPTOKEYID_PID', 18);
define('PDFSIGNER_EXTERNALCRYPTOKEYSECRET_PID', 19);
define('PDFSIGNER_EXTERNALCRYPTOMETHOD_PID', 20);
define('PDFSIGNER_EXTERNALCRYPTOMODE_PID', 21);
define('PDFSIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 22);
define('PDFSIGNER_FIELDINDEX_PID', 23);
define('PDFSIGNER_IGNORECHAINVALIDATIONERRORS_PID', 24);
define('PDFSIGNER_INPUTFILE_PID', 25);
define('PDFSIGNER_KNOWNCERTCOUNT_PID', 26);
define('PDFSIGNER_KNOWNCERTBYTES_PID', 27);
define('PDFSIGNER_KNOWNCERTHANDLE_PID', 28);
define('PDFSIGNER_KNOWNCRLCOUNT_PID', 29);
define('PDFSIGNER_KNOWNCRLBYTES_PID', 30);
define('PDFSIGNER_KNOWNCRLHANDLE_PID', 31);
define('PDFSIGNER_KNOWNOCSPCOUNT_PID', 32);
define('PDFSIGNER_KNOWNOCSPBYTES_PID', 33);
define('PDFSIGNER_KNOWNOCSPHANDLE_PID', 34);
define('PDFSIGNER_METADATAENCRYPTED_PID', 35);
define('PDFSIGNER_OFFLINEMODE_PID', 36);
define('PDFSIGNER_OUTPUTFILE_PID', 37);
define('PDFSIGNER_PASSWORD_PID', 38);
define('PDFSIGNER_PERMSANNOTATIONS_PID', 39);
define('PDFSIGNER_PERMSASSEMBLE_PID', 40);
define('PDFSIGNER_PERMSEXTRACT_PID', 41);
define('PDFSIGNER_PERMSEXTRACTACC_PID', 42);
define('PDFSIGNER_PERMSFILLINFORMS_PID', 43);
define('PDFSIGNER_PERMSHIGHQUALITYPRINT_PID', 44);
define('PDFSIGNER_PERMSLOWQUALITYPRINT_PID', 45);
define('PDFSIGNER_PERMSMODIFY_PID', 46);
define('PDFSIGNER_PROXYADDRESS_PID', 47);
define('PDFSIGNER_PROXYAUTHENTICATION_PID', 48);
define('PDFSIGNER_PROXYPASSWORD_PID', 49);
define('PDFSIGNER_PROXYPORT_PID', 50);
define('PDFSIGNER_PROXYPROXYTYPE_PID', 51);
define('PDFSIGNER_PROXYREQUESTHEADERS_PID', 52);
define('PDFSIGNER_PROXYRESPONSEBODY_PID', 53);
define('PDFSIGNER_PROXYRESPONSEHEADERS_PID', 54);
define('PDFSIGNER_PROXYUSEIPV6_PID', 55);
define('PDFSIGNER_PROXYUSEPROXY_PID', 56);
define('PDFSIGNER_PROXYUSERNAME_PID', 57);
define('PDFSIGNER_REVOCATIONCHECK_PID', 58);
define('PDFSIGNER_SIGALGORITHMCAPTION_PID', 59);
define('PDFSIGNER_SIGALGORITHMINFO_PID', 60);
define('PDFSIGNER_SIGALLOWEDCHANGES_PID', 61);
define('PDFSIGNER_SIGAUTHORNAME_PID', 62);
define('PDFSIGNER_SIGAUTOADJUSTENCODING_PID', 63);
define('PDFSIGNER_SIGAUTOFONTSIZE_PID', 64);
define('PDFSIGNER_SIGAUTOPOS_PID', 65);
define('PDFSIGNER_SIGAUTOSIZE_PID', 66);
define('PDFSIGNER_SIGAUTOSTRETCHBACKGROUND_PID', 67);
define('PDFSIGNER_SIGAUTOTEXT_PID', 68);
define('PDFSIGNER_SIGBACKGROUNDDATA_PID', 69);
define('PDFSIGNER_SIGBACKGROUNDHEIGHT_PID', 70);
define('PDFSIGNER_SIGBACKGROUNDIMAGETYPE_PID', 71);
define('PDFSIGNER_SIGBACKGROUNDMASK_PID', 72);
define('PDFSIGNER_SIGBACKGROUNDSTYLE_PID', 73);
define('PDFSIGNER_SIGBACKGROUNDWIDTH_PID', 74);
define('PDFSIGNER_SIGCERTIFICATION_PID', 75);
define('PDFSIGNER_SIGCHAINVALIDATIONDETAILS_PID', 76);
define('PDFSIGNER_SIGCHAINVALIDATIONRESULT_PID', 77);
define('PDFSIGNER_SIGCLAIMEDSIGNINGTIME_PID', 78);
define('PDFSIGNER_SIGCOMPRESSWIDGETDATA_PID', 79);
define('PDFSIGNER_SIGCONTACTINFO_PID', 80);
define('PDFSIGNER_SIGCOVERAGEENDSAT_PID', 81);
define('PDFSIGNER_SIGCUSTOMAPPEARANCE_PID', 82);
define('PDFSIGNER_SIGCUSTOMBACKGROUNDCONTENTSTREAM_PID', 83);
define('PDFSIGNER_SIGCUSTOMDATA_PID', 84);
define('PDFSIGNER_SIGCUSTOMVISUALSTATUSMATRIX_PID', 85);
define('PDFSIGNER_SIGDATECAPTIONFORMAT_PID', 86);
define('PDFSIGNER_SIGEMPTYFIELD_PID', 87);
define('PDFSIGNER_SIGFILTERNAME_PID', 88);
define('PDFSIGNER_SIGHANDLE_PID', 89);
define('PDFSIGNER_SIGHASHALGORITHM_PID', 90);
define('PDFSIGNER_SIGHEADER_PID', 91);
define('PDFSIGNER_SIGHEIGHT_PID', 92);
define('PDFSIGNER_SIGHIDEDEFAULTTEXT_PID', 93);
define('PDFSIGNER_SIGIGNOREEXISTINGAPPEARANCE_PID', 94);
define('PDFSIGNER_SIGINVERTMASK_PID', 95);
define('PDFSIGNER_SIGINVISIBLE_PID', 96);
define('PDFSIGNER_SIGLEVEL_PID', 97);
define('PDFSIGNER_SIGLOCATION_PID', 98);
define('PDFSIGNER_SIGLOCKED_PID', 99);
define('PDFSIGNER_SIGLOCKEDCONTENTS_PID', 100);
define('PDFSIGNER_SIGNOROTATE_PID', 101);
define('PDFSIGNER_SIGNOVIEW_PID', 102);
define('PDFSIGNER_SIGNOZOOM_PID', 103);
define('PDFSIGNER_SIGOFFSETX_PID', 104);
define('PDFSIGNER_SIGOFFSETY_PID', 105);
define('PDFSIGNER_SIGPAGE_PID', 106);
define('PDFSIGNER_SIGPAGESTOPLACEON_PID', 107);
define('PDFSIGNER_SIGPOLICYHASH_PID', 108);
define('PDFSIGNER_SIGPOLICYHASHALGORITHM_PID', 109);
define('PDFSIGNER_SIGPOLICYID_PID', 110);
define('PDFSIGNER_SIGPRINT_PID', 111);
define('PDFSIGNER_SIGQUALIFIED_PID', 112);
define('PDFSIGNER_SIGREADONLY_PID', 113);
define('PDFSIGNER_SIGREASON_PID', 114);
define('PDFSIGNER_SIGROTATE_PID', 115);
define('PDFSIGNER_SIGSAVESTRINGSINUNICODEENCODING_PID', 116);
define('PDFSIGNER_SIGSECTIONTEXTFONTSIZE_PID', 117);
define('PDFSIGNER_SIGSECTIONTITLEFONTSIZE_PID', 118);
define('PDFSIGNER_SIGSHOWONALLPAGES_PID', 119);
define('PDFSIGNER_SIGSHOWTIMESTAMP_PID', 120);
define('PDFSIGNER_SIGSHOWVISUALSTATUS_PID', 121);
define('PDFSIGNER_SIGSIGNATURENAME_PID', 122);
define('PDFSIGNER_SIGSIGNATUREVALIDATIONRESULT_PID', 123);
define('PDFSIGNER_SIGSIGNERCAPTION_PID', 124);
define('PDFSIGNER_SIGSIGNERINFO_PID', 125);
define('PDFSIGNER_SIGSTRETCHX_PID', 126);
define('PDFSIGNER_SIGSTRETCHY_PID', 127);
define('PDFSIGNER_SIGSUBJECTRDN_PID', 128);
define('PDFSIGNER_SIGTIMESTAMPED_PID', 129);
define('PDFSIGNER_SIGTIMESTAMPFONTSIZE_PID', 130);
define('PDFSIGNER_SIGTITLEFONTSIZE_PID', 131);
define('PDFSIGNER_SIGTOGGLENOVIEW_PID', 132);
define('PDFSIGNER_SIGVALIDATEDSIGNINGTIME_PID', 133);
define('PDFSIGNER_SIGVALIDATIONLOG_PID', 134);
define('PDFSIGNER_SIGWIDTH_PID', 135);
define('PDFSIGNER_SIGNINGCERTBYTES_PID', 136);
define('PDFSIGNER_SIGNINGCERTHANDLE_PID', 137);
define('PDFSIGNER_SIGNINGCHAINCOUNT_PID', 138);
define('PDFSIGNER_SIGNINGCHAINBYTES_PID', 139);
define('PDFSIGNER_SIGNINGCHAINHANDLE_PID', 140);
define('PDFSIGNER_SOCKETDNSMODE_PID', 141);
define('PDFSIGNER_SOCKETDNSPORT_PID', 142);
define('PDFSIGNER_SOCKETDNSQUERYTIMEOUT_PID', 143);
define('PDFSIGNER_SOCKETDNSSERVERS_PID', 144);
define('PDFSIGNER_SOCKETDNSTOTALTIMEOUT_PID', 145);
define('PDFSIGNER_SOCKETINCOMINGSPEEDLIMIT_PID', 146);
define('PDFSIGNER_SOCKETLOCALADDRESS_PID', 147);
define('PDFSIGNER_SOCKETLOCALPORT_PID', 148);
define('PDFSIGNER_SOCKETOUTGOINGSPEEDLIMIT_PID', 149);
define('PDFSIGNER_SOCKETTIMEOUT_PID', 150);
define('PDFSIGNER_SOCKETUSEIPV6_PID', 151);
define('PDFSIGNER_TIMESTAMPSERVER_PID', 152);
define('PDFSIGNER_TLSAUTOVALIDATECERTIFICATES_PID', 153);
define('PDFSIGNER_TLSBASECONFIGURATION_PID', 154);
define('PDFSIGNER_TLSCIPHERSUITES_PID', 155);
define('PDFSIGNER_TLSECCURVES_PID', 156);
define('PDFSIGNER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 157);
define('PDFSIGNER_TLSPRESHAREDIDENTITY_PID', 158);
define('PDFSIGNER_TLSPRESHAREDKEY_PID', 159);
define('PDFSIGNER_TLSPRESHAREDKEYCIPHERSUITE_PID', 160);
define('PDFSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 161);
define('PDFSIGNER_TLSREVOCATIONCHECK_PID', 162);
define('PDFSIGNER_TLSSSLOPTIONS_PID', 163);
define('PDFSIGNER_TLSTLSMODE_PID', 164);
define('PDFSIGNER_TLSUSEEXTENDEDMASTERSECRET_PID', 165);
define('PDFSIGNER_TLSUSESESSIONRESUMPTION_PID', 166);
define('PDFSIGNER_TLSVERSIONS_PID', 167);
define('PDFSIGNER_TRUSTEDCERTCOUNT_PID', 168);
define('PDFSIGNER_TRUSTEDCERTBYTES_PID', 169);
define('PDFSIGNER_TRUSTEDCERTHANDLE_PID', 170);
define('PDFSIGNER_VALIDATIONLOG_PID', 171);


/*
 * PDFSigner Enums
 */

define('PDFSIGNER_ENCRYPTIONTYPE_PASSWORD', 1);
define('PDFSIGNER_ENCRYPTIONTYPE_CERTIFICATE', 2);

define('PDFSIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('PDFSIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('PDFSIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('PDFSIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('PDFSIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('PDFSIGNER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('PDFSIGNER_PROXYAUTHENTICATION_BASIC', 1);
define('PDFSIGNER_PROXYAUTHENTICATION_DIGEST', 2);
define('PDFSIGNER_PROXYAUTHENTICATION_NTLM', 3);

define('PDFSIGNER_PROXYPROXYTYPE_NONE', 0);
define('PDFSIGNER_PROXYPROXYTYPE_SOCKS_4', 1);
define('PDFSIGNER_PROXYPROXYTYPE_SOCKS_5', 2);
define('PDFSIGNER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('PDFSIGNER_PROXYPROXYTYPE_HTTP', 4);

define('PDFSIGNER_REVOCATIONCHECK_NONE', 0);
define('PDFSIGNER_REVOCATIONCHECK_AUTO', 1);
define('PDFSIGNER_REVOCATIONCHECK_ALL_CRL', 2);
define('PDFSIGNER_REVOCATIONCHECK_ALL_OCSP', 3);
define('PDFSIGNER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('PDFSIGNER_REVOCATIONCHECK_ANY_CRL', 5);
define('PDFSIGNER_REVOCATIONCHECK_ANY_OCSP', 6);
define('PDFSIGNER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('PDFSIGNER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('PDFSIGNER_SIGALLOWEDCHANGES_FILL_IN_FORMS', 1);
define('PDFSIGNER_SIGALLOWEDCHANGES_COMMENT', 2);

define('PDFSIGNER_SIGBACKGROUNDIMAGETYPE_JPEG2000', 0);
define('PDFSIGNER_SIGBACKGROUNDIMAGETYPE_JPEG', 1);
define('PDFSIGNER_SIGBACKGROUNDIMAGETYPE_CUSTOM', 2);

define('PDFSIGNER_SIGBACKGROUNDSTYLE_DEFAULT', 0);
define('PDFSIGNER_SIGBACKGROUNDSTYLE_NO_BACKGROUND', 1);
define('PDFSIGNER_SIGBACKGROUNDSTYLE_CUSTOM', 2);

define('PDFSIGNER_SIGCHAINVALIDATIONRESULT_VALID', 0);
define('PDFSIGNER_SIGCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('PDFSIGNER_SIGCHAINVALIDATIONRESULT_INVALID', 2);
define('PDFSIGNER_SIGCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('PDFSIGNER_SIGLEVEL_LEGACY', 0);
define('PDFSIGNER_SIGLEVEL_BES', 1);
define('PDFSIGNER_SIGLEVEL_EPES', 2);
define('PDFSIGNER_SIGLEVEL_LTV', 3);
define('PDFSIGNER_SIGLEVEL_DOCUMENT_TIMESTAMP', 4);

define('PDFSIGNER_SIGQUALIFIED_UNKNOWN', 0);
define('PDFSIGNER_SIGQUALIFIED_NONE', 1);
define('PDFSIGNER_SIGQUALIFIED_GRANTED', 2);
define('PDFSIGNER_SIGQUALIFIED_WITHDRAWN', 3);
define('PDFSIGNER_SIGQUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('PDFSIGNER_SIGQUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('PDFSIGNER_SIGQUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('PDFSIGNER_SIGQUALIFIED_UNDER_SUPERVISION', 7);
define('PDFSIGNER_SIGQUALIFIED_SUPERVISION_INCESSATION', 8);
define('PDFSIGNER_SIGQUALIFIED_SUPERVISION_CEASED', 9);
define('PDFSIGNER_SIGQUALIFIED_SUPERVISION_REVOKED', 10);
define('PDFSIGNER_SIGQUALIFIED_ACCREDITED', 11);
define('PDFSIGNER_SIGQUALIFIED_ACCREDITION_CEASED', 12);
define('PDFSIGNER_SIGQUALIFIED_ACCREDITION_REVOKED', 13);

define('PDFSIGNER_SIGSIGNATUREVALIDATIONRESULT_VALID', 0);
define('PDFSIGNER_SIGSIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('PDFSIGNER_SIGSIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('PDFSIGNER_SIGSIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('PDFSIGNER_SIGSIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('PDFSIGNER_SOCKETDNSMODE_AUTO', 0);
define('PDFSIGNER_SOCKETDNSMODE_PLATFORM', 1);
define('PDFSIGNER_SOCKETDNSMODE_OWN', 2);
define('PDFSIGNER_SOCKETDNSMODE_OWN_SECURE', 3);

define('PDFSIGNER_TLSBASECONFIGURATION_DEFAULT', 0);
define('PDFSIGNER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('PDFSIGNER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('PDFSIGNER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('PDFSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('PDFSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('PDFSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('PDFSIGNER_TLSREVOCATIONCHECK_NONE', 0);
define('PDFSIGNER_TLSREVOCATIONCHECK_AUTO', 1);
define('PDFSIGNER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('PDFSIGNER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('PDFSIGNER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('PDFSIGNER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('PDFSIGNER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('PDFSIGNER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('PDFSIGNER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('PDFSIGNER_TLSTLSMODE_DEFAULT', 0);
define('PDFSIGNER_TLSTLSMODE_NO_TLS', 1);
define('PDFSIGNER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('PDFSIGNER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * PDFSigner Methods
 */

define('PDFSIGNER_CONFIG_MID', 2);
define('PDFSIGNER_EXTRACTASYNCDATA_MID', 3);
define('PDFSIGNER_SIGN_MID', 4);
define('PDFSIGNER_SIGNASYNCBEGIN_MID', 5);
define('PDFSIGNER_SIGNASYNCEND_MID', 6);
define('PDFSIGNER_SIGNEXTERNAL_MID', 7);
define('PDFSIGNER_UPDATE_MID', 8);


/*
 * PDFSigner Events
 */
  
define('PDFSIGNER_DECRYPTIONINFONEEDED_EID', 1);
define('PDFSIGNER_ERROR_EID', 2);
define('PDFSIGNER_EXTERNALDECRYPT_EID', 3);
define('PDFSIGNER_EXTERNALSIGN_EID', 4);
define('PDFSIGNER_RECIPIENTFOUND_EID', 5);

/*
 * PDFVerifier Properties
 */

define('PDFVERIFIER_ALLSIGNATURESVALID_PID', 1);
define('PDFVERIFIER_BLOCKEDCERTCOUNT_PID', 2);
define('PDFVERIFIER_BLOCKEDCERTBYTES_PID', 3);
define('PDFVERIFIER_BLOCKEDCERTHANDLE_PID', 4);
define('PDFVERIFIER_CERTCOUNT_PID', 5);
define('PDFVERIFIER_CERTBYTES_PID', 6);
define('PDFVERIFIER_CERTCA_PID', 7);
define('PDFVERIFIER_CERTCAKEYID_PID', 8);
define('PDFVERIFIER_CERTCRLDISTRIBUTIONPOINTS_PID', 9);
define('PDFVERIFIER_CERTCURVE_PID', 10);
define('PDFVERIFIER_CERTFINGERPRINT_PID', 11);
define('PDFVERIFIER_CERTFRIENDLYNAME_PID', 12);
define('PDFVERIFIER_CERTHANDLE_PID', 13);
define('PDFVERIFIER_CERTHASHALGORITHM_PID', 14);
define('PDFVERIFIER_CERTISSUER_PID', 15);
define('PDFVERIFIER_CERTISSUERRDN_PID', 16);
define('PDFVERIFIER_CERTKEYALGORITHM_PID', 17);
define('PDFVERIFIER_CERTKEYBITS_PID', 18);
define('PDFVERIFIER_CERTKEYFINGERPRINT_PID', 19);
define('PDFVERIFIER_CERTKEYUSAGE_PID', 20);
define('PDFVERIFIER_CERTKEYVALID_PID', 21);
define('PDFVERIFIER_CERTOCSPLOCATIONS_PID', 22);
define('PDFVERIFIER_CERTPOLICYIDS_PID', 23);
define('PDFVERIFIER_CERTPUBLICKEYBYTES_PID', 24);
define('PDFVERIFIER_CERTSELFSIGNED_PID', 25);
define('PDFVERIFIER_CERTSERIALNUMBER_PID', 26);
define('PDFVERIFIER_CERTSIGALGORITHM_PID', 27);
define('PDFVERIFIER_CERTSUBJECT_PID', 28);
define('PDFVERIFIER_CERTSUBJECTKEYID_PID', 29);
define('PDFVERIFIER_CERTSUBJECTRDN_PID', 30);
define('PDFVERIFIER_CERTVALIDFROM_PID', 31);
define('PDFVERIFIER_CERTVALIDTO_PID', 32);
define('PDFVERIFIER_CHAINVALIDATIONDETAILS_PID', 33);
define('PDFVERIFIER_CHAINVALIDATIONRESULT_PID', 34);
define('PDFVERIFIER_CLAIMEDSIGNINGTIME_PID', 35);
define('PDFVERIFIER_CRLCOUNT_PID', 36);
define('PDFVERIFIER_CRLBYTES_PID', 37);
define('PDFVERIFIER_CRLHANDLE_PID', 38);
define('PDFVERIFIER_CRLISSUER_PID', 39);
define('PDFVERIFIER_CRLISSUERRDN_PID', 40);
define('PDFVERIFIER_CRLLOCATION_PID', 41);
define('PDFVERIFIER_CRLNEXTUPDATE_PID', 42);
define('PDFVERIFIER_CRLTHISUPDATE_PID', 43);
define('PDFVERIFIER_DECRYPTIONCERTIFICATEBYTES_PID', 44);
define('PDFVERIFIER_DECRYPTIONCERTIFICATEHANDLE_PID', 45);
define('PDFVERIFIER_DECRYPTIONCERTCOUNT_PID', 46);
define('PDFVERIFIER_DECRYPTIONCERTBYTES_PID', 47);
define('PDFVERIFIER_DECRYPTIONCERTHANDLE_PID', 48);
define('PDFVERIFIER_ENCRYPTED_PID', 49);
define('PDFVERIFIER_ENCRYPTIONALGORITHM_PID', 50);
define('PDFVERIFIER_ENCRYPTIONTYPE_PID', 51);
define('PDFVERIFIER_IGNORECHAINVALIDATIONERRORS_PID', 52);
define('PDFVERIFIER_INPUTFILE_PID', 53);
define('PDFVERIFIER_KNOWNCERTCOUNT_PID', 54);
define('PDFVERIFIER_KNOWNCERTBYTES_PID', 55);
define('PDFVERIFIER_KNOWNCERTHANDLE_PID', 56);
define('PDFVERIFIER_KNOWNCRLCOUNT_PID', 57);
define('PDFVERIFIER_KNOWNCRLBYTES_PID', 58);
define('PDFVERIFIER_KNOWNCRLHANDLE_PID', 59);
define('PDFVERIFIER_KNOWNOCSPCOUNT_PID', 60);
define('PDFVERIFIER_KNOWNOCSPBYTES_PID', 61);
define('PDFVERIFIER_KNOWNOCSPHANDLE_PID', 62);
define('PDFVERIFIER_METADATAENCRYPTED_PID', 63);
define('PDFVERIFIER_OCSPCOUNT_PID', 64);
define('PDFVERIFIER_OCSPBYTES_PID', 65);
define('PDFVERIFIER_OCSPHANDLE_PID', 66);
define('PDFVERIFIER_OCSPISSUER_PID', 67);
define('PDFVERIFIER_OCSPISSUERRDN_PID', 68);
define('PDFVERIFIER_OCSPLOCATION_PID', 69);
define('PDFVERIFIER_OCSPPRODUCEDAT_PID', 70);
define('PDFVERIFIER_OFFLINEMODE_PID', 71);
define('PDFVERIFIER_PASSWORD_PID', 72);
define('PDFVERIFIER_PERMSANNOTATIONS_PID', 73);
define('PDFVERIFIER_PERMSASSEMBLE_PID', 74);
define('PDFVERIFIER_PERMSEXTRACT_PID', 75);
define('PDFVERIFIER_PERMSEXTRACTACC_PID', 76);
define('PDFVERIFIER_PERMSFILLINFORMS_PID', 77);
define('PDFVERIFIER_PERMSHIGHQUALITYPRINT_PID', 78);
define('PDFVERIFIER_PERMSLOWQUALITYPRINT_PID', 79);
define('PDFVERIFIER_PERMSMODIFY_PID', 80);
define('PDFVERIFIER_PROXYADDRESS_PID', 81);
define('PDFVERIFIER_PROXYAUTHENTICATION_PID', 82);
define('PDFVERIFIER_PROXYPASSWORD_PID', 83);
define('PDFVERIFIER_PROXYPORT_PID', 84);
define('PDFVERIFIER_PROXYPROXYTYPE_PID', 85);
define('PDFVERIFIER_PROXYREQUESTHEADERS_PID', 86);
define('PDFVERIFIER_PROXYRESPONSEBODY_PID', 87);
define('PDFVERIFIER_PROXYRESPONSEHEADERS_PID', 88);
define('PDFVERIFIER_PROXYUSEIPV6_PID', 89);
define('PDFVERIFIER_PROXYUSEPROXY_PID', 90);
define('PDFVERIFIER_PROXYUSERNAME_PID', 91);
define('PDFVERIFIER_QUALIFIED_PID', 92);
define('PDFVERIFIER_REVOCATIONCHECK_PID', 93);
define('PDFVERIFIER_SIGALLOWEDCHANGES_PID', 94);
define('PDFVERIFIER_SIGAUTHORNAME_PID', 95);
define('PDFVERIFIER_SIGCERTIFICATION_PID', 96);
define('PDFVERIFIER_SIGCHAINVALIDATIONDETAILS_PID', 97);
define('PDFVERIFIER_SIGCHAINVALIDATIONRESULT_PID', 98);
define('PDFVERIFIER_SIGCLAIMEDSIGNINGTIME_PID', 99);
define('PDFVERIFIER_SIGCONTACTINFO_PID', 100);
define('PDFVERIFIER_SIGCOVERAGEENDSAT_PID', 101);
define('PDFVERIFIER_SIGCUSTOMDATA_PID', 102);
define('PDFVERIFIER_SIGEMPTYFIELD_PID', 103);
define('PDFVERIFIER_SIGFILTERNAME_PID', 104);
define('PDFVERIFIER_SIGHANDLE_PID', 105);
define('PDFVERIFIER_SIGHASHALGORITHM_PID', 106);
define('PDFVERIFIER_SIGHEIGHT_PID', 107);
define('PDFVERIFIER_SIGINVISIBLE_PID', 108);
define('PDFVERIFIER_SIGLEVEL_PID', 109);
define('PDFVERIFIER_SIGLOCATION_PID', 110);
define('PDFVERIFIER_SIGLOCKED_PID', 111);
define('PDFVERIFIER_SIGOFFSETX_PID', 112);
define('PDFVERIFIER_SIGOFFSETY_PID', 113);
define('PDFVERIFIER_SIGPAGE_PID', 114);
define('PDFVERIFIER_SIGPOLICYHASHALGORITHM_PID', 115);
define('PDFVERIFIER_SIGPRINT_PID', 116);
define('PDFVERIFIER_SIGQUALIFIED_PID', 117);
define('PDFVERIFIER_SIGREADONLY_PID', 118);
define('PDFVERIFIER_SIGREASON_PID', 119);
define('PDFVERIFIER_SIGSIGNATURENAME_PID', 120);
define('PDFVERIFIER_SIGSIGNATUREVALIDATIONRESULT_PID', 121);
define('PDFVERIFIER_SIGSIGNERINFO_PID', 122);
define('PDFVERIFIER_SIGSUBJECTRDN_PID', 123);
define('PDFVERIFIER_SIGTIMESTAMPED_PID', 124);
define('PDFVERIFIER_SIGTOGGLENOVIEW_PID', 125);
define('PDFVERIFIER_SIGVALIDATEDSIGNINGTIME_PID', 126);
define('PDFVERIFIER_SIGVALIDATIONLOG_PID', 127);
define('PDFVERIFIER_SIGWIDTH_PID', 128);
define('PDFVERIFIER_SIGNATURECOUNT_PID', 129);
define('PDFVERIFIER_SIGNATURECHAINVALIDATIONDETAILS_PID', 130);
define('PDFVERIFIER_SIGNATURECHAINVALIDATIONRESULT_PID', 131);
define('PDFVERIFIER_SIGNATURECLAIMEDSIGNINGTIME_PID', 132);
define('PDFVERIFIER_SIGNATUREHANDLE_PID', 133);
define('PDFVERIFIER_SIGNATURELEVEL_PID', 134);
define('PDFVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_PID', 135);
define('PDFVERIFIER_SIGNATURESUBJECTRDN_PID', 136);
define('PDFVERIFIER_SIGNATURETIMESTAMPED_PID', 137);
define('PDFVERIFIER_SIGNATUREVALIDATEDSIGNINGTIME_PID', 138);
define('PDFVERIFIER_SIGNATUREVALIDATIONLOG_PID', 139);
define('PDFVERIFIER_SIGNATUREVALIDATIONRESULT_PID', 140);
define('PDFVERIFIER_SIGNINGCERTBYTES_PID', 141);
define('PDFVERIFIER_SIGNINGCERTCA_PID', 142);
define('PDFVERIFIER_SIGNINGCERTCAKEYID_PID', 143);
define('PDFVERIFIER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 144);
define('PDFVERIFIER_SIGNINGCERTCURVE_PID', 145);
define('PDFVERIFIER_SIGNINGCERTFINGERPRINT_PID', 146);
define('PDFVERIFIER_SIGNINGCERTFRIENDLYNAME_PID', 147);
define('PDFVERIFIER_SIGNINGCERTHANDLE_PID', 148);
define('PDFVERIFIER_SIGNINGCERTHASHALGORITHM_PID', 149);
define('PDFVERIFIER_SIGNINGCERTISSUER_PID', 150);
define('PDFVERIFIER_SIGNINGCERTISSUERRDN_PID', 151);
define('PDFVERIFIER_SIGNINGCERTKEYALGORITHM_PID', 152);
define('PDFVERIFIER_SIGNINGCERTKEYBITS_PID', 153);
define('PDFVERIFIER_SIGNINGCERTKEYFINGERPRINT_PID', 154);
define('PDFVERIFIER_SIGNINGCERTKEYUSAGE_PID', 155);
define('PDFVERIFIER_SIGNINGCERTKEYVALID_PID', 156);
define('PDFVERIFIER_SIGNINGCERTOCSPLOCATIONS_PID', 157);
define('PDFVERIFIER_SIGNINGCERTPOLICYIDS_PID', 158);
define('PDFVERIFIER_SIGNINGCERTPUBLICKEYBYTES_PID', 159);
define('PDFVERIFIER_SIGNINGCERTSELFSIGNED_PID', 160);
define('PDFVERIFIER_SIGNINGCERTSERIALNUMBER_PID', 161);
define('PDFVERIFIER_SIGNINGCERTSIGALGORITHM_PID', 162);
define('PDFVERIFIER_SIGNINGCERTSUBJECT_PID', 163);
define('PDFVERIFIER_SIGNINGCERTSUBJECTKEYID_PID', 164);
define('PDFVERIFIER_SIGNINGCERTSUBJECTRDN_PID', 165);
define('PDFVERIFIER_SIGNINGCERTVALIDFROM_PID', 166);
define('PDFVERIFIER_SIGNINGCERTVALIDTO_PID', 167);
define('PDFVERIFIER_SOCKETDNSMODE_PID', 168);
define('PDFVERIFIER_SOCKETDNSPORT_PID', 169);
define('PDFVERIFIER_SOCKETDNSQUERYTIMEOUT_PID', 170);
define('PDFVERIFIER_SOCKETDNSSERVERS_PID', 171);
define('PDFVERIFIER_SOCKETDNSTOTALTIMEOUT_PID', 172);
define('PDFVERIFIER_SOCKETINCOMINGSPEEDLIMIT_PID', 173);
define('PDFVERIFIER_SOCKETLOCALADDRESS_PID', 174);
define('PDFVERIFIER_SOCKETLOCALPORT_PID', 175);
define('PDFVERIFIER_SOCKETOUTGOINGSPEEDLIMIT_PID', 176);
define('PDFVERIFIER_SOCKETTIMEOUT_PID', 177);
define('PDFVERIFIER_SOCKETUSEIPV6_PID', 178);
define('PDFVERIFIER_TIMESTAMPACCURACY_PID', 179);
define('PDFVERIFIER_TIMESTAMPBYTES_PID', 180);
define('PDFVERIFIER_TIMESTAMPCHAINVALIDATIONDETAILS_PID', 181);
define('PDFVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_PID', 182);
define('PDFVERIFIER_TIMESTAMPHASHALGORITHM_PID', 183);
define('PDFVERIFIER_TIMESTAMPSERIALNUMBER_PID', 184);
define('PDFVERIFIER_TIMESTAMPTIME_PID', 185);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_PID', 186);
define('PDFVERIFIER_TIMESTAMPTSANAME_PID', 187);
define('PDFVERIFIER_TIMESTAMPVALIDATIONLOG_PID', 188);
define('PDFVERIFIER_TIMESTAMPVALIDATIONRESULT_PID', 189);
define('PDFVERIFIER_TIMESTAMPED_PID', 190);
define('PDFVERIFIER_TLSAUTOVALIDATECERTIFICATES_PID', 191);
define('PDFVERIFIER_TLSBASECONFIGURATION_PID', 192);
define('PDFVERIFIER_TLSCIPHERSUITES_PID', 193);
define('PDFVERIFIER_TLSECCURVES_PID', 194);
define('PDFVERIFIER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 195);
define('PDFVERIFIER_TLSPRESHAREDIDENTITY_PID', 196);
define('PDFVERIFIER_TLSPRESHAREDKEY_PID', 197);
define('PDFVERIFIER_TLSPRESHAREDKEYCIPHERSUITE_PID', 198);
define('PDFVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 199);
define('PDFVERIFIER_TLSREVOCATIONCHECK_PID', 200);
define('PDFVERIFIER_TLSSSLOPTIONS_PID', 201);
define('PDFVERIFIER_TLSTLSMODE_PID', 202);
define('PDFVERIFIER_TLSUSEEXTENDEDMASTERSECRET_PID', 203);
define('PDFVERIFIER_TLSUSESESSIONRESUMPTION_PID', 204);
define('PDFVERIFIER_TLSVERSIONS_PID', 205);
define('PDFVERIFIER_TRUSTEDCERTCOUNT_PID', 206);
define('PDFVERIFIER_TRUSTEDCERTBYTES_PID', 207);
define('PDFVERIFIER_TRUSTEDCERTHANDLE_PID', 208);
define('PDFVERIFIER_TSACERTBYTES_PID', 209);
define('PDFVERIFIER_TSACERTCA_PID', 210);
define('PDFVERIFIER_TSACERTCAKEYID_PID', 211);
define('PDFVERIFIER_TSACERTCRLDISTRIBUTIONPOINTS_PID', 212);
define('PDFVERIFIER_TSACERTCURVE_PID', 213);
define('PDFVERIFIER_TSACERTFINGERPRINT_PID', 214);
define('PDFVERIFIER_TSACERTFRIENDLYNAME_PID', 215);
define('PDFVERIFIER_TSACERTHANDLE_PID', 216);
define('PDFVERIFIER_TSACERTHASHALGORITHM_PID', 217);
define('PDFVERIFIER_TSACERTISSUER_PID', 218);
define('PDFVERIFIER_TSACERTISSUERRDN_PID', 219);
define('PDFVERIFIER_TSACERTKEYALGORITHM_PID', 220);
define('PDFVERIFIER_TSACERTKEYBITS_PID', 221);
define('PDFVERIFIER_TSACERTKEYFINGERPRINT_PID', 222);
define('PDFVERIFIER_TSACERTKEYUSAGE_PID', 223);
define('PDFVERIFIER_TSACERTKEYVALID_PID', 224);
define('PDFVERIFIER_TSACERTOCSPLOCATIONS_PID', 225);
define('PDFVERIFIER_TSACERTORIGIN_PID', 226);
define('PDFVERIFIER_TSACERTPOLICYIDS_PID', 227);
define('PDFVERIFIER_TSACERTPRIVATEKEYBYTES_PID', 228);
define('PDFVERIFIER_TSACERTPRIVATEKEYEXISTS_PID', 229);
define('PDFVERIFIER_TSACERTPRIVATEKEYEXTRACTABLE_PID', 230);
define('PDFVERIFIER_TSACERTPUBLICKEYBYTES_PID', 231);
define('PDFVERIFIER_TSACERTSELFSIGNED_PID', 232);
define('PDFVERIFIER_TSACERTSERIALNUMBER_PID', 233);
define('PDFVERIFIER_TSACERTSIGALGORITHM_PID', 234);
define('PDFVERIFIER_TSACERTSUBJECT_PID', 235);
define('PDFVERIFIER_TSACERTSUBJECTKEYID_PID', 236);
define('PDFVERIFIER_TSACERTSUBJECTRDN_PID', 237);
define('PDFVERIFIER_TSACERTVALIDFROM_PID', 238);
define('PDFVERIFIER_TSACERTVALIDTO_PID', 239);
define('PDFVERIFIER_VALIDATEDSIGNINGTIME_PID', 240);
define('PDFVERIFIER_VALIDATIONLOG_PID', 241);
define('PDFVERIFIER_VALIDATIONMOMENT_PID', 242);


/*
 * PDFVerifier Enums
 */

define('PDFVERIFIER_CHAINVALIDATIONRESULT_VALID', 0);
define('PDFVERIFIER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('PDFVERIFIER_CHAINVALIDATIONRESULT_INVALID', 2);
define('PDFVERIFIER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('PDFVERIFIER_ENCRYPTIONTYPE_PASSWORD', 1);
define('PDFVERIFIER_ENCRYPTIONTYPE_CERTIFICATE', 2);

define('PDFVERIFIER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('PDFVERIFIER_PROXYAUTHENTICATION_BASIC', 1);
define('PDFVERIFIER_PROXYAUTHENTICATION_DIGEST', 2);
define('PDFVERIFIER_PROXYAUTHENTICATION_NTLM', 3);

define('PDFVERIFIER_PROXYPROXYTYPE_NONE', 0);
define('PDFVERIFIER_PROXYPROXYTYPE_SOCKS_4', 1);
define('PDFVERIFIER_PROXYPROXYTYPE_SOCKS_5', 2);
define('PDFVERIFIER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('PDFVERIFIER_PROXYPROXYTYPE_HTTP', 4);

define('PDFVERIFIER_QUALIFIED_UNKNOWN', 0);
define('PDFVERIFIER_QUALIFIED_NONE', 1);
define('PDFVERIFIER_QUALIFIED_GRANTED', 2);
define('PDFVERIFIER_QUALIFIED_WITHDRAWN', 3);
define('PDFVERIFIER_QUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('PDFVERIFIER_QUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('PDFVERIFIER_QUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('PDFVERIFIER_QUALIFIED_UNDER_SUPERVISION', 7);
define('PDFVERIFIER_QUALIFIED_SUPERVISION_INCESSATION', 8);
define('PDFVERIFIER_QUALIFIED_SUPERVISION_CEASED', 9);
define('PDFVERIFIER_QUALIFIED_SUPERVISION_REVOKED', 10);
define('PDFVERIFIER_QUALIFIED_ACCREDITED', 11);
define('PDFVERIFIER_QUALIFIED_ACCREDITION_CEASED', 12);
define('PDFVERIFIER_QUALIFIED_ACCREDITION_REVOKED', 13);

define('PDFVERIFIER_REVOCATIONCHECK_NONE', 0);
define('PDFVERIFIER_REVOCATIONCHECK_AUTO', 1);
define('PDFVERIFIER_REVOCATIONCHECK_ALL_CRL', 2);
define('PDFVERIFIER_REVOCATIONCHECK_ALL_OCSP', 3);
define('PDFVERIFIER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('PDFVERIFIER_REVOCATIONCHECK_ANY_CRL', 5);
define('PDFVERIFIER_REVOCATIONCHECK_ANY_OCSP', 6);
define('PDFVERIFIER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('PDFVERIFIER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('PDFVERIFIER_SIGALLOWEDCHANGES_FILL_IN_FORMS', 1);
define('PDFVERIFIER_SIGALLOWEDCHANGES_COMMENT', 2);

define('PDFVERIFIER_SIGCHAINVALIDATIONRESULT_VALID', 0);
define('PDFVERIFIER_SIGCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('PDFVERIFIER_SIGCHAINVALIDATIONRESULT_INVALID', 2);
define('PDFVERIFIER_SIGCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('PDFVERIFIER_SIGLEVEL_LEGACY', 0);
define('PDFVERIFIER_SIGLEVEL_BES', 1);
define('PDFVERIFIER_SIGLEVEL_EPES', 2);
define('PDFVERIFIER_SIGLEVEL_LTV', 3);
define('PDFVERIFIER_SIGLEVEL_DOCUMENT_TIMESTAMP', 4);

define('PDFVERIFIER_SIGQUALIFIED_UNKNOWN', 0);
define('PDFVERIFIER_SIGQUALIFIED_NONE', 1);
define('PDFVERIFIER_SIGQUALIFIED_GRANTED', 2);
define('PDFVERIFIER_SIGQUALIFIED_WITHDRAWN', 3);
define('PDFVERIFIER_SIGQUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('PDFVERIFIER_SIGQUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('PDFVERIFIER_SIGQUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('PDFVERIFIER_SIGQUALIFIED_UNDER_SUPERVISION', 7);
define('PDFVERIFIER_SIGQUALIFIED_SUPERVISION_INCESSATION', 8);
define('PDFVERIFIER_SIGQUALIFIED_SUPERVISION_CEASED', 9);
define('PDFVERIFIER_SIGQUALIFIED_SUPERVISION_REVOKED', 10);
define('PDFVERIFIER_SIGQUALIFIED_ACCREDITED', 11);
define('PDFVERIFIER_SIGQUALIFIED_ACCREDITION_CEASED', 12);
define('PDFVERIFIER_SIGQUALIFIED_ACCREDITION_REVOKED', 13);

define('PDFVERIFIER_SIGSIGNATUREVALIDATIONRESULT_VALID', 0);
define('PDFVERIFIER_SIGSIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('PDFVERIFIER_SIGSIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('PDFVERIFIER_SIGSIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('PDFVERIFIER_SIGSIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('PDFVERIFIER_SIGNATURECHAINVALIDATIONRESULT_VALID', 0);
define('PDFVERIFIER_SIGNATURECHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('PDFVERIFIER_SIGNATURECHAINVALIDATIONRESULT_INVALID', 2);
define('PDFVERIFIER_SIGNATURECHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('PDFVERIFIER_SIGNATURELEVEL_LEGACY', 0);
define('PDFVERIFIER_SIGNATURELEVEL_BES', 1);
define('PDFVERIFIER_SIGNATURELEVEL_EPES', 2);
define('PDFVERIFIER_SIGNATURELEVEL_LTV', 3);
define('PDFVERIFIER_SIGNATURELEVEL_DOCUMENT_TIMESTAMP', 4);

define('PDFVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_VALID', 0);
define('PDFVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('PDFVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('PDFVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('PDFVERIFIER_SIGNATURESIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('PDFVERIFIER_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('PDFVERIFIER_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('PDFVERIFIER_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('PDFVERIFIER_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('PDFVERIFIER_SIGNATUREVALIDATIONRESULT_FAILURE', 4);

define('PDFVERIFIER_SOCKETDNSMODE_AUTO', 0);
define('PDFVERIFIER_SOCKETDNSMODE_PLATFORM', 1);
define('PDFVERIFIER_SOCKETDNSMODE_OWN', 2);
define('PDFVERIFIER_SOCKETDNSMODE_OWN_SECURE', 3);

define('PDFVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID', 0);
define('PDFVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('PDFVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_INVALID', 2);
define('PDFVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_UNKNOWN', 0);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_LEGACY', 1);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_TRUSTED', 2);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_GENERIC', 3);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_ESC', 4);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_CONTENT', 5);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_CERTS_AND_CRLS', 6);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE', 7);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_2', 8);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_3', 9);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_INDIVIDUAL_DATA_OBJECTS', 10);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_ALL_DATA_OBJECTS', 11);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIGNATURE', 12);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_REFS_ONLY', 13);
define('PDFVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIG_AND_REFS', 14);

define('PDFVERIFIER_TIMESTAMPVALIDATIONRESULT_VALID', 0);
define('PDFVERIFIER_TIMESTAMPVALIDATIONRESULT_UNKNOWN', 1);
define('PDFVERIFIER_TIMESTAMPVALIDATIONRESULT_CORRUPTED', 2);
define('PDFVERIFIER_TIMESTAMPVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('PDFVERIFIER_TIMESTAMPVALIDATIONRESULT_FAILURE', 4);

define('PDFVERIFIER_TLSBASECONFIGURATION_DEFAULT', 0);
define('PDFVERIFIER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('PDFVERIFIER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('PDFVERIFIER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('PDFVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('PDFVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('PDFVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('PDFVERIFIER_TLSREVOCATIONCHECK_NONE', 0);
define('PDFVERIFIER_TLSREVOCATIONCHECK_AUTO', 1);
define('PDFVERIFIER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('PDFVERIFIER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('PDFVERIFIER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('PDFVERIFIER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('PDFVERIFIER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('PDFVERIFIER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('PDFVERIFIER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('PDFVERIFIER_TLSTLSMODE_DEFAULT', 0);
define('PDFVERIFIER_TLSTLSMODE_NO_TLS', 1);
define('PDFVERIFIER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('PDFVERIFIER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * PDFVerifier Methods
 */

define('PDFVERIFIER_CONFIG_MID', 2);
define('PDFVERIFIER_GETSIGNEDVERSION_MID', 3);
define('PDFVERIFIER_VERIFY_MID', 4);


/*
 * PDFVerifier Events
 */
  
define('PDFVERIFIER_CHAINVALIDATED_EID', 1);
define('PDFVERIFIER_DECRYPTIONINFONEEDED_EID', 2);
define('PDFVERIFIER_ERROR_EID', 3);
define('PDFVERIFIER_RECIPIENTFOUND_EID', 4);
define('PDFVERIFIER_SIGNATUREFOUND_EID', 5);
define('PDFVERIFIER_SIGNATUREVALIDATED_EID', 6);
define('PDFVERIFIER_TIMESTAMPFOUND_EID', 7);
define('PDFVERIFIER_TIMESTAMPVALIDATED_EID', 8);

/*
 * PGPKeyManager Properties
 */

define('PGPKEYMANAGER_KEYBITSINKEY_PID', 1);
define('PGPKEYMANAGER_KEYCURVE_PID', 2);
define('PGPKEYMANAGER_KEYENCRYPTIONALGORITHM_PID', 3);
define('PGPKEYMANAGER_KEYEXPIRES_PID', 4);
define('PGPKEYMANAGER_KEYHANDLE_PID', 5);
define('PGPKEYMANAGER_KEYHASHALGORITHM_PID', 6);
define('PGPKEYMANAGER_KEYOLDPACKETFORMAT_PID', 7);
define('PGPKEYMANAGER_KEYPASSPHRASE_PID', 8);
define('PGPKEYMANAGER_KEYPROTECTION_PID', 9);
define('PGPKEYMANAGER_KEYPUBLICKEYALGORITHM_PID', 10);
define('PGPKEYMANAGER_KEYQBITS_PID', 11);
define('PGPKEYMANAGER_KEYUSERNAME_PID', 12);


/*
 * PGPKeyManager Enums
 */

define('PGPKEYMANAGER_KEYPROTECTION_NONE', 0);
define('PGPKEYMANAGER_KEYPROTECTION_LOW', 1);
define('PGPKEYMANAGER_KEYPROTECTION_NORMAL', 2);
define('PGPKEYMANAGER_KEYPROTECTION_HIGH', 3);



/*
 * PGPKeyManager Methods
 */

define('PGPKEYMANAGER_ADDSUBKEY_MID', 2);
define('PGPKEYMANAGER_BINDUSER_MID', 3);
define('PGPKEYMANAGER_CHANGEPASSPHRASE_MID', 4);
define('PGPKEYMANAGER_CHANGEPROTECTION_MID', 5);
define('PGPKEYMANAGER_CHECKPASSPHRASE_MID', 6);
define('PGPKEYMANAGER_CONFIG_MID', 7);
define('PGPKEYMANAGER_EXPORTKEY_MID', 8);
define('PGPKEYMANAGER_EXPORTPUBLICKEY_MID', 9);
define('PGPKEYMANAGER_EXPORTPUBLICTOFILE_MID', 10);
define('PGPKEYMANAGER_EXPORTTOFILE_MID', 12);
define('PGPKEYMANAGER_GENERATE_MID', 14);
define('PGPKEYMANAGER_GENERATELEGACY_MID', 15);
define('PGPKEYMANAGER_GENERATEPAIR_MID', 16);
define('PGPKEYMANAGER_IMPORTFROMFILE_MID', 17);
define('PGPKEYMANAGER_IMPORTKEY_MID', 19);
define('PGPKEYMANAGER_REMOVESUBKEY_MID', 20);
define('PGPKEYMANAGER_REMOVEUSER_MID', 21);
define('PGPKEYMANAGER_REVOKEKEY_MID', 22);
define('PGPKEYMANAGER_REVOKESUBKEY_MID', 23);
define('PGPKEYMANAGER_REVOKESUBKEYBYID_MID', 24);
define('PGPKEYMANAGER_REVOKEUSER_MID', 25);
define('PGPKEYMANAGER_REVOKEUSERBYNAME_MID', 26);
define('PGPKEYMANAGER_VALIDATE_MID', 27);


/*
 * PGPKeyManager Events
 */
  
define('PGPKEYMANAGER_ERROR_EID', 1);

/*
 * PGPKeyring Properties
 */

define('PGPKEYRING_OPENED_PID', 1);
define('PGPKEYRING_PINNEDKEYHANDLE_PID', 2);
define('PGPKEYRING_PUBLICKEYCOUNT_PID', 3);
define('PGPKEYRING_PUBLICKEYBITSINKEY_PID', 4);
define('PGPKEYRING_PUBLICKEYCANENCRYPT_PID', 5);
define('PGPKEYRING_PUBLICKEYCANSIGN_PID', 6);
define('PGPKEYRING_PUBLICKEYCURVE_PID', 7);
define('PGPKEYRING_PUBLICKEYENABLED_PID', 8);
define('PGPKEYRING_PUBLICKEYENCRYPTIONALGORITHM_PID', 9);
define('PGPKEYRING_PUBLICKEYEXPIRES_PID', 10);
define('PGPKEYRING_PUBLICKEYHANDLE_PID', 11);
define('PGPKEYRING_PUBLICKEYHASHALGORITHM_PID', 12);
define('PGPKEYRING_PUBLICKEYISPUBLIC_PID', 13);
define('PGPKEYRING_PUBLICKEYISSECRET_PID', 14);
define('PGPKEYRING_PUBLICKEYISSUBKEY_PID', 15);
define('PGPKEYRING_PUBLICKEYKEYFP_PID', 16);
define('PGPKEYRING_PUBLICKEYKEYHASHALGORITHM_PID', 17);
define('PGPKEYRING_PUBLICKEYKEYID_PID', 18);
define('PGPKEYRING_PUBLICKEYOLDPACKETFORMAT_PID', 19);
define('PGPKEYRING_PUBLICKEYPASSPHRASE_PID', 20);
define('PGPKEYRING_PUBLICKEYPASSPHRASEVALID_PID', 21);
define('PGPKEYRING_PUBLICKEYPRIMARYKEYID_PID', 22);
define('PGPKEYRING_PUBLICKEYPROTECTION_PID', 23);
define('PGPKEYRING_PUBLICKEYPUBLICKEYALGORITHM_PID', 24);
define('PGPKEYRING_PUBLICKEYQBITS_PID', 25);
define('PGPKEYRING_PUBLICKEYREVOKED_PID', 26);
define('PGPKEYRING_PUBLICKEYSUBKEYFP_PID', 27);
define('PGPKEYRING_PUBLICKEYSUBKEYID_PID', 28);
define('PGPKEYRING_PUBLICKEYTIMESTAMP_PID', 29);
define('PGPKEYRING_PUBLICKEYUSERNAME_PID', 30);
define('PGPKEYRING_PUBLICKEYVALID_PID', 31);
define('PGPKEYRING_PUBLICKEYVERSION_PID', 32);
define('PGPKEYRING_SECRETKEYCOUNT_PID', 33);
define('PGPKEYRING_SECRETKEYBITSINKEY_PID', 34);
define('PGPKEYRING_SECRETKEYCANENCRYPT_PID', 35);
define('PGPKEYRING_SECRETKEYCANSIGN_PID', 36);
define('PGPKEYRING_SECRETKEYCURVE_PID', 37);
define('PGPKEYRING_SECRETKEYENABLED_PID', 38);
define('PGPKEYRING_SECRETKEYENCRYPTIONALGORITHM_PID', 39);
define('PGPKEYRING_SECRETKEYEXPIRES_PID', 40);
define('PGPKEYRING_SECRETKEYHANDLE_PID', 41);
define('PGPKEYRING_SECRETKEYHASHALGORITHM_PID', 42);
define('PGPKEYRING_SECRETKEYISPUBLIC_PID', 43);
define('PGPKEYRING_SECRETKEYISSECRET_PID', 44);
define('PGPKEYRING_SECRETKEYISSUBKEY_PID', 45);
define('PGPKEYRING_SECRETKEYKEYFP_PID', 46);
define('PGPKEYRING_SECRETKEYKEYHASHALGORITHM_PID', 47);
define('PGPKEYRING_SECRETKEYKEYID_PID', 48);
define('PGPKEYRING_SECRETKEYOLDPACKETFORMAT_PID', 49);
define('PGPKEYRING_SECRETKEYPASSPHRASE_PID', 50);
define('PGPKEYRING_SECRETKEYPASSPHRASEVALID_PID', 51);
define('PGPKEYRING_SECRETKEYPRIMARYKEYID_PID', 52);
define('PGPKEYRING_SECRETKEYPROTECTION_PID', 53);
define('PGPKEYRING_SECRETKEYPUBLICKEYALGORITHM_PID', 54);
define('PGPKEYRING_SECRETKEYQBITS_PID', 55);
define('PGPKEYRING_SECRETKEYREVOKED_PID', 56);
define('PGPKEYRING_SECRETKEYSUBKEYFP_PID', 57);
define('PGPKEYRING_SECRETKEYSUBKEYID_PID', 58);
define('PGPKEYRING_SECRETKEYTIMESTAMP_PID', 59);
define('PGPKEYRING_SECRETKEYUSERNAME_PID', 60);
define('PGPKEYRING_SECRETKEYVALID_PID', 61);
define('PGPKEYRING_SECRETKEYVERSION_PID', 62);
define('PGPKEYRING_SELECTEDPUBLICKEYCOUNT_PID', 63);
define('PGPKEYRING_SELECTEDPUBLICKEYBITSINKEY_PID', 64);
define('PGPKEYRING_SELECTEDPUBLICKEYCANENCRYPT_PID', 65);
define('PGPKEYRING_SELECTEDPUBLICKEYCANSIGN_PID', 66);
define('PGPKEYRING_SELECTEDPUBLICKEYCURVE_PID', 67);
define('PGPKEYRING_SELECTEDPUBLICKEYENABLED_PID', 68);
define('PGPKEYRING_SELECTEDPUBLICKEYENCRYPTIONALGORITHM_PID', 69);
define('PGPKEYRING_SELECTEDPUBLICKEYEXPIRES_PID', 70);
define('PGPKEYRING_SELECTEDPUBLICKEYHANDLE_PID', 71);
define('PGPKEYRING_SELECTEDPUBLICKEYHASHALGORITHM_PID', 72);
define('PGPKEYRING_SELECTEDPUBLICKEYISPUBLIC_PID', 73);
define('PGPKEYRING_SELECTEDPUBLICKEYISSECRET_PID', 74);
define('PGPKEYRING_SELECTEDPUBLICKEYISSUBKEY_PID', 75);
define('PGPKEYRING_SELECTEDPUBLICKEYKEYFP_PID', 76);
define('PGPKEYRING_SELECTEDPUBLICKEYKEYHASHALGORITHM_PID', 77);
define('PGPKEYRING_SELECTEDPUBLICKEYKEYID_PID', 78);
define('PGPKEYRING_SELECTEDPUBLICKEYOLDPACKETFORMAT_PID', 79);
define('PGPKEYRING_SELECTEDPUBLICKEYPASSPHRASE_PID', 80);
define('PGPKEYRING_SELECTEDPUBLICKEYPASSPHRASEVALID_PID', 81);
define('PGPKEYRING_SELECTEDPUBLICKEYPRIMARYKEYID_PID', 82);
define('PGPKEYRING_SELECTEDPUBLICKEYPROTECTION_PID', 83);
define('PGPKEYRING_SELECTEDPUBLICKEYPUBLICKEYALGORITHM_PID', 84);
define('PGPKEYRING_SELECTEDPUBLICKEYQBITS_PID', 85);
define('PGPKEYRING_SELECTEDPUBLICKEYREVOKED_PID', 86);
define('PGPKEYRING_SELECTEDPUBLICKEYSUBKEYFP_PID', 87);
define('PGPKEYRING_SELECTEDPUBLICKEYSUBKEYID_PID', 88);
define('PGPKEYRING_SELECTEDPUBLICKEYTIMESTAMP_PID', 89);
define('PGPKEYRING_SELECTEDPUBLICKEYUSERNAME_PID', 90);
define('PGPKEYRING_SELECTEDPUBLICKEYVALID_PID', 91);
define('PGPKEYRING_SELECTEDPUBLICKEYVERSION_PID', 92);
define('PGPKEYRING_SELECTEDSECRETKEYCOUNT_PID', 93);
define('PGPKEYRING_SELECTEDSECRETKEYBITSINKEY_PID', 94);
define('PGPKEYRING_SELECTEDSECRETKEYCANENCRYPT_PID', 95);
define('PGPKEYRING_SELECTEDSECRETKEYCANSIGN_PID', 96);
define('PGPKEYRING_SELECTEDSECRETKEYCURVE_PID', 97);
define('PGPKEYRING_SELECTEDSECRETKEYENABLED_PID', 98);
define('PGPKEYRING_SELECTEDSECRETKEYENCRYPTIONALGORITHM_PID', 99);
define('PGPKEYRING_SELECTEDSECRETKEYEXPIRES_PID', 100);
define('PGPKEYRING_SELECTEDSECRETKEYHANDLE_PID', 101);
define('PGPKEYRING_SELECTEDSECRETKEYHASHALGORITHM_PID', 102);
define('PGPKEYRING_SELECTEDSECRETKEYISPUBLIC_PID', 103);
define('PGPKEYRING_SELECTEDSECRETKEYISSECRET_PID', 104);
define('PGPKEYRING_SELECTEDSECRETKEYISSUBKEY_PID', 105);
define('PGPKEYRING_SELECTEDSECRETKEYKEYFP_PID', 106);
define('PGPKEYRING_SELECTEDSECRETKEYKEYHASHALGORITHM_PID', 107);
define('PGPKEYRING_SELECTEDSECRETKEYKEYID_PID', 108);
define('PGPKEYRING_SELECTEDSECRETKEYOLDPACKETFORMAT_PID', 109);
define('PGPKEYRING_SELECTEDSECRETKEYPASSPHRASE_PID', 110);
define('PGPKEYRING_SELECTEDSECRETKEYPASSPHRASEVALID_PID', 111);
define('PGPKEYRING_SELECTEDSECRETKEYPRIMARYKEYID_PID', 112);
define('PGPKEYRING_SELECTEDSECRETKEYPROTECTION_PID', 113);
define('PGPKEYRING_SELECTEDSECRETKEYPUBLICKEYALGORITHM_PID', 114);
define('PGPKEYRING_SELECTEDSECRETKEYQBITS_PID', 115);
define('PGPKEYRING_SELECTEDSECRETKEYREVOKED_PID', 116);
define('PGPKEYRING_SELECTEDSECRETKEYSUBKEYFP_PID', 117);
define('PGPKEYRING_SELECTEDSECRETKEYSUBKEYID_PID', 118);
define('PGPKEYRING_SELECTEDSECRETKEYTIMESTAMP_PID', 119);
define('PGPKEYRING_SELECTEDSECRETKEYUSERNAME_PID', 120);
define('PGPKEYRING_SELECTEDSECRETKEYVALID_PID', 121);
define('PGPKEYRING_SELECTEDSECRETKEYVERSION_PID', 122);


/*
 * PGPKeyring Enums
 */

define('PGPKEYRING_PUBLICKEYPROTECTION_NONE', 0);
define('PGPKEYRING_PUBLICKEYPROTECTION_LOW', 1);
define('PGPKEYRING_PUBLICKEYPROTECTION_NORMAL', 2);
define('PGPKEYRING_PUBLICKEYPROTECTION_HIGH', 3);

define('PGPKEYRING_PUBLICKEYVALID_STRICTLY_VALID', 0);
define('PGPKEYRING_PUBLICKEYVALID_VALID', 1);
define('PGPKEYRING_PUBLICKEYVALID_INVALID', 2);
define('PGPKEYRING_PUBLICKEYVALID_FAILURE', 3);
define('PGPKEYRING_PUBLICKEYVALID_UNKNOWN', 4);

define('PGPKEYRING_SECRETKEYPROTECTION_NONE', 0);
define('PGPKEYRING_SECRETKEYPROTECTION_LOW', 1);
define('PGPKEYRING_SECRETKEYPROTECTION_NORMAL', 2);
define('PGPKEYRING_SECRETKEYPROTECTION_HIGH', 3);

define('PGPKEYRING_SECRETKEYVALID_STRICTLY_VALID', 0);
define('PGPKEYRING_SECRETKEYVALID_VALID', 1);
define('PGPKEYRING_SECRETKEYVALID_INVALID', 2);
define('PGPKEYRING_SECRETKEYVALID_FAILURE', 3);
define('PGPKEYRING_SECRETKEYVALID_UNKNOWN', 4);

define('PGPKEYRING_SELECTEDPUBLICKEYPROTECTION_NONE', 0);
define('PGPKEYRING_SELECTEDPUBLICKEYPROTECTION_LOW', 1);
define('PGPKEYRING_SELECTEDPUBLICKEYPROTECTION_NORMAL', 2);
define('PGPKEYRING_SELECTEDPUBLICKEYPROTECTION_HIGH', 3);

define('PGPKEYRING_SELECTEDPUBLICKEYVALID_STRICTLY_VALID', 0);
define('PGPKEYRING_SELECTEDPUBLICKEYVALID_VALID', 1);
define('PGPKEYRING_SELECTEDPUBLICKEYVALID_INVALID', 2);
define('PGPKEYRING_SELECTEDPUBLICKEYVALID_FAILURE', 3);
define('PGPKEYRING_SELECTEDPUBLICKEYVALID_UNKNOWN', 4);

define('PGPKEYRING_SELECTEDSECRETKEYPROTECTION_NONE', 0);
define('PGPKEYRING_SELECTEDSECRETKEYPROTECTION_LOW', 1);
define('PGPKEYRING_SELECTEDSECRETKEYPROTECTION_NORMAL', 2);
define('PGPKEYRING_SELECTEDSECRETKEYPROTECTION_HIGH', 3);

define('PGPKEYRING_SELECTEDSECRETKEYVALID_STRICTLY_VALID', 0);
define('PGPKEYRING_SELECTEDSECRETKEYVALID_VALID', 1);
define('PGPKEYRING_SELECTEDSECRETKEYVALID_INVALID', 2);
define('PGPKEYRING_SELECTEDSECRETKEYVALID_FAILURE', 3);
define('PGPKEYRING_SELECTEDSECRETKEYVALID_UNKNOWN', 4);



/*
 * PGPKeyring Methods
 */

define('PGPKEYRING_ADDFROMFILE_MID', 2);
define('PGPKEYRING_ADDFROMFILES_MID', 3);
define('PGPKEYRING_ADDPINNED_MID', 6);
define('PGPKEYRING_CLEAR_MID', 7);
define('PGPKEYRING_CLOSE_MID', 8);
define('PGPKEYRING_CONFIG_MID', 9);
define('PGPKEYRING_CREATENEW_MID', 10);
define('PGPKEYRING_LOAD_MID', 11);
define('PGPKEYRING_REMOVEBYID_MID', 13);
define('PGPKEYRING_REMOVEPUBLIC_MID', 14);
define('PGPKEYRING_REMOVESECRET_MID', 15);
define('PGPKEYRING_SAVE_MID', 16);
define('PGPKEYRING_SELECT_MID', 18);


/*
 * PGPKeyring Events
 */
  
define('PGPKEYRING_ERROR_EID', 1);

/*
 * PGPReader Properties
 */

define('PGPREADER_ARMORED_PID', 1);
define('PGPREADER_COMPRESSED_PID', 2);
define('PGPREADER_DECRYPTINGKEYCOUNT_PID', 3);
define('PGPREADER_DECRYPTINGKEYHANDLE_PID', 4);
define('PGPREADER_DECRYPTINGKEYKEYFP_PID', 5);
define('PGPREADER_DECRYPTINGKEYKEYID_PID', 6);
define('PGPREADER_DECRYPTINGKEYPASSPHRASE_PID', 7);
define('PGPREADER_DECRYPTINGKEYPASSPHRASEVALID_PID', 8);
define('PGPREADER_DECRYPTINGKEYUSERNAME_PID', 9);
define('PGPREADER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 10);
define('PGPREADER_EXTERNALCRYPTODATA_PID', 11);
define('PGPREADER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 12);
define('PGPREADER_EXTERNALCRYPTOHASHALGORITHM_PID', 13);
define('PGPREADER_EXTERNALCRYPTOKEYID_PID', 14);
define('PGPREADER_EXTERNALCRYPTOKEYSECRET_PID', 15);
define('PGPREADER_EXTERNALCRYPTOMETHOD_PID', 16);
define('PGPREADER_EXTERNALCRYPTOMODE_PID', 17);
define('PGPREADER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 18);
define('PGPREADER_KEYPASSPHRASE_PID', 19);
define('PGPREADER_PASSPHRASE_PID', 20);
define('PGPREADER_PROCESSEDLENGTH_PID', 21);
define('PGPREADER_SIGNATURECOUNT_PID', 22);
define('PGPREADER_SIGNATURECERTIFICATIONTYPE_PID', 23);
define('PGPREADER_SIGNATURECREATIONTIME_PID', 24);
define('PGPREADER_SIGNATUREEXPIRATIONTIME_PID', 25);
define('PGPREADER_SIGNATUREEXPORTABLE_PID', 26);
define('PGPREADER_SIGNATUREHANDLE_PID', 27);
define('PGPREADER_SIGNATUREHASHALGORITHM_PID', 28);
define('PGPREADER_SIGNATUREKEYEXPIRATIONTIME_PID', 29);
define('PGPREADER_SIGNATURELEGACYFORMAT_PID', 30);
define('PGPREADER_SIGNATUREPOLICYURL_PID', 31);
define('PGPREADER_SIGNATUREPRIMARYUSERID_PID', 32);
define('PGPREADER_SIGNATUREREASONFORREVOCATION_PID', 33);
define('PGPREADER_SIGNATUREREVOCABLE_PID', 34);
define('PGPREADER_SIGNATUREREVOCATION_PID', 35);
define('PGPREADER_SIGNATURESIGNATURECLASS_PID', 36);
define('PGPREADER_SIGNATURESIGNERKEYID_PID', 37);
define('PGPREADER_SIGNATURESIGNERUSERID_PID', 38);
define('PGPREADER_SIGNATURESTRICTLYVALID_PID', 39);
define('PGPREADER_SIGNATURETEXTSIGNATURE_PID', 40);
define('PGPREADER_SIGNATURETRUSTAMOUNT_PID', 41);
define('PGPREADER_SIGNATURETRUSTLEVEL_PID', 42);
define('PGPREADER_SIGNATUREVALIDATED_PID', 43);
define('PGPREADER_SIGNATUREVALIDITY_PID', 44);
define('PGPREADER_SIGNATUREVERSION_PID', 45);
define('PGPREADER_VERIFYINGKEYCOUNT_PID', 46);
define('PGPREADER_VERIFYINGKEYHANDLE_PID', 47);
define('PGPREADER_VERIFYINGKEYKEYFP_PID', 48);
define('PGPREADER_VERIFYINGKEYKEYID_PID', 49);
define('PGPREADER_VERIFYINGKEYUSERNAME_PID', 50);


/*
 * PGPReader Enums
 */

define('PGPREADER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('PGPREADER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('PGPREADER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('PGPREADER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('PGPREADER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('PGPREADER_SIGNATURECERTIFICATIONTYPE_GENERIC', 0);
define('PGPREADER_SIGNATURECERTIFICATIONTYPE_PERSONA', 1);
define('PGPREADER_SIGNATURECERTIFICATIONTYPE_CASUAL', 2);
define('PGPREADER_SIGNATURECERTIFICATIONTYPE_POSITIVE', 3);

define('PGPREADER_SIGNATURESIGNATURECLASS_DOCUMENT', 0);
define('PGPREADER_SIGNATURESIGNATURECLASS_TEXT_DOCUMENT', 1);
define('PGPREADER_SIGNATURESIGNATURECLASS_STANDALONE', 2);
define('PGPREADER_SIGNATURESIGNATURECLASS_UIDGENERIC', 3);
define('PGPREADER_SIGNATURESIGNATURECLASS_UIDPERSONA', 4);
define('PGPREADER_SIGNATURESIGNATURECLASS_UIDCASUAL', 5);
define('PGPREADER_SIGNATURESIGNATURECLASS_UIDPOSITIVE', 6);
define('PGPREADER_SIGNATURESIGNATURECLASS_SUBKEY_BINDING', 7);
define('PGPREADER_SIGNATURESIGNATURECLASS_PUBLIC_KEY_BINDING', 8);
define('PGPREADER_SIGNATURESIGNATURECLASS_DIRECT_KEY', 9);
define('PGPREADER_SIGNATURESIGNATURECLASS_KEY_REVOCATION', 10);
define('PGPREADER_SIGNATURESIGNATURECLASS_SUBKEY_REVOCATION', 11);
define('PGPREADER_SIGNATURESIGNATURECLASS_CERT_REVOCATION', 12);
define('PGPREADER_SIGNATURESIGNATURECLASS_TIMESTAMP', 13);
define('PGPREADER_SIGNATURESIGNATURECLASS_THIRD_PARTY', 14);
define('PGPREADER_SIGNATURESIGNATURECLASS_NOT_SPECIFIED', 15);

define('PGPREADER_SIGNATUREVALIDITY_VALID', 0);
define('PGPREADER_SIGNATUREVALIDITY_CORRUPTED', 1);
define('PGPREADER_SIGNATUREVALIDITY_UNKNOWN_ALGORITHM', 2);
define('PGPREADER_SIGNATUREVALIDITY_NO_KEY', 3);
define('PGPREADER_SIGNATUREVALIDITY_UNKNOWN', 4);



/*
 * PGPReader Methods
 */

define('PGPREADER_CONFIG_MID', 2);
define('PGPREADER_DECRYPTANDVERIFY_MID', 3);
define('PGPREADER_DECRYPTANDVERIFYFILE_MID', 4);
define('PGPREADER_DECRYPTANDVERIFYSTRING_MID', 6);
define('PGPREADER_VERIFYDETACHED_MID', 7);
define('PGPREADER_VERIFYDETACHEDFILE_MID', 8);
define('PGPREADER_VERIFYDETACHEDSTRING_MID', 10);


/*
 * PGPReader Events
 */
  
define('PGPREADER_ENCRYPTIONINFO_EID', 1);
define('PGPREADER_ERROR_EID', 2);
define('PGPREADER_EXTERNALDECRYPT_EID', 3);
define('PGPREADER_FILEEXTRACTIONSTART_EID', 4);
define('PGPREADER_KEYPASSPHRASENEEDED_EID', 5);
define('PGPREADER_MULTIPLEFILESFOUND_EID', 6);
define('PGPREADER_PASSPHRASENEEDED_EID', 7);
define('PGPREADER_PROGRESS_EID', 8);
define('PGPREADER_SIGNED_EID', 9);

/*
 * PGPWriter Properties
 */

define('PGPWRITER_ARMOR_PID', 1);
define('PGPWRITER_ARMORBOUNDARY_PID', 2);
define('PGPWRITER_ARMORHEADERS_PID', 3);
define('PGPWRITER_COMPRESS_PID', 4);
define('PGPWRITER_COMPRESSIONALGORITHM_PID', 5);
define('PGPWRITER_COMPRESSIONLEVEL_PID', 6);
define('PGPWRITER_ENCRYPTINGKEYCOUNT_PID', 7);
define('PGPWRITER_ENCRYPTINGKEYHANDLE_PID', 8);
define('PGPWRITER_ENCRYPTINGKEYKEYFP_PID', 9);
define('PGPWRITER_ENCRYPTINGKEYKEYID_PID', 10);
define('PGPWRITER_ENCRYPTINGKEYUSERNAME_PID', 11);
define('PGPWRITER_ENCRYPTIONALGORITHM_PID', 12);
define('PGPWRITER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 13);
define('PGPWRITER_EXTERNALCRYPTODATA_PID', 14);
define('PGPWRITER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 15);
define('PGPWRITER_EXTERNALCRYPTOHASHALGORITHM_PID', 16);
define('PGPWRITER_EXTERNALCRYPTOKEYID_PID', 17);
define('PGPWRITER_EXTERNALCRYPTOKEYSECRET_PID', 18);
define('PGPWRITER_EXTERNALCRYPTOMETHOD_PID', 19);
define('PGPWRITER_EXTERNALCRYPTOMODE_PID', 20);
define('PGPWRITER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 21);
define('PGPWRITER_FILENAME_PID', 22);
define('PGPWRITER_HASHALGORITHM_PID', 23);
define('PGPWRITER_INPUTISTEXT_PID', 24);
define('PGPWRITER_PASSPHRASE_PID', 25);
define('PGPWRITER_PROTECTION_PID', 26);
define('PGPWRITER_SIGNINGKEYCOUNT_PID', 27);
define('PGPWRITER_SIGNINGKEYHANDLE_PID', 28);
define('PGPWRITER_SIGNINGKEYKEYFP_PID', 29);
define('PGPWRITER_SIGNINGKEYKEYID_PID', 30);
define('PGPWRITER_SIGNINGKEYPASSPHRASE_PID', 31);
define('PGPWRITER_SIGNINGKEYPASSPHRASEVALID_PID', 32);
define('PGPWRITER_SIGNINGKEYUSERNAME_PID', 33);
define('PGPWRITER_TIMESTAMP_PID', 34);


/*
 * PGPWriter Enums
 */

define('PGPWRITER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('PGPWRITER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('PGPWRITER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('PGPWRITER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('PGPWRITER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('PGPWRITER_PROTECTION_NONE', 0);
define('PGPWRITER_PROTECTION_LOW', 1);
define('PGPWRITER_PROTECTION_NORMAL', 2);
define('PGPWRITER_PROTECTION_HIGH', 3);



/*
 * PGPWriter Methods
 */

define('PGPWRITER_CLEARTEXTSIGN_MID', 2);
define('PGPWRITER_CLEARTEXTSIGNFILE_MID', 3);
define('PGPWRITER_CLEARTEXTSIGNSTRING_MID', 5);
define('PGPWRITER_CONFIG_MID', 6);
define('PGPWRITER_ENCRYPT_MID', 7);
define('PGPWRITER_ENCRYPTANDSIGN_MID', 8);
define('PGPWRITER_ENCRYPTANDSIGNFILE_MID', 9);
define('PGPWRITER_ENCRYPTANDSIGNFOLDER_MID', 10);
define('PGPWRITER_ENCRYPTANDSIGNSTRING_MID', 12);
define('PGPWRITER_ENCRYPTFILE_MID', 13);
define('PGPWRITER_ENCRYPTFOLDER_MID', 14);
define('PGPWRITER_ENCRYPTSTRING_MID', 16);
define('PGPWRITER_SIGN_MID', 17);
define('PGPWRITER_SIGNFILE_MID', 18);
define('PGPWRITER_SIGNFOLDER_MID', 19);
define('PGPWRITER_SIGNSTRING_MID', 21);


/*
 * PGPWriter Events
 */
  
define('PGPWRITER_ERROR_EID', 1);
define('PGPWRITER_EXTERNALSIGN_EID', 2);
define('PGPWRITER_KEYPASSPHRASENEEDED_EID', 3);
define('PGPWRITER_PROGRESS_EID', 4);

/*
 * POP3Client Properties
 */

define('POP3CLIENT_BLOCKEDCERTCOUNT_PID', 1);
define('POP3CLIENT_BLOCKEDCERTBYTES_PID', 2);
define('POP3CLIENT_BLOCKEDCERTHANDLE_PID', 3);
define('POP3CLIENT_CLIENTCERTCOUNT_PID', 4);
define('POP3CLIENT_CLIENTCERTBYTES_PID', 5);
define('POP3CLIENT_CLIENTCERTHANDLE_PID', 6);
define('POP3CLIENT_CONNINFOAEADCIPHER_PID', 7);
define('POP3CLIENT_CONNINFOCHAINVALIDATIONDETAILS_PID', 8);
define('POP3CLIENT_CONNINFOCHAINVALIDATIONRESULT_PID', 9);
define('POP3CLIENT_CONNINFOCIPHERSUITE_PID', 10);
define('POP3CLIENT_CONNINFOCLIENTAUTHENTICATED_PID', 11);
define('POP3CLIENT_CONNINFOCONNECTIONESTABLISHED_PID', 12);
define('POP3CLIENT_CONNINFOCONNECTIONID_PID', 13);
define('POP3CLIENT_CONNINFODIGESTALGORITHM_PID', 14);
define('POP3CLIENT_CONNINFOENCRYPTIONALGORITHM_PID', 15);
define('POP3CLIENT_CONNINFOEXPORTABLE_PID', 16);
define('POP3CLIENT_CONNINFOKEYEXCHANGEALGORITHM_PID', 17);
define('POP3CLIENT_CONNINFOKEYEXCHANGEKEYBITS_PID', 18);
define('POP3CLIENT_CONNINFONAMEDECCURVE_PID', 19);
define('POP3CLIENT_CONNINFOPFSCIPHER_PID', 20);
define('POP3CLIENT_CONNINFOPRESHAREDIDENTITYHINT_PID', 21);
define('POP3CLIENT_CONNINFOPUBLICKEYBITS_PID', 22);
define('POP3CLIENT_CONNINFORESUMEDSESSION_PID', 23);
define('POP3CLIENT_CONNINFOSECURECONNECTION_PID', 24);
define('POP3CLIENT_CONNINFOSERVERAUTHENTICATED_PID', 25);
define('POP3CLIENT_CONNINFOSIGNATUREALGORITHM_PID', 26);
define('POP3CLIENT_CONNINFOSYMMETRICBLOCKSIZE_PID', 27);
define('POP3CLIENT_CONNINFOSYMMETRICKEYBITS_PID', 28);
define('POP3CLIENT_CONNINFOTOTALBYTESRECEIVED_PID', 29);
define('POP3CLIENT_CONNINFOTOTALBYTESSENT_PID', 30);
define('POP3CLIENT_CONNINFOVALIDATIONLOG_PID', 31);
define('POP3CLIENT_CONNINFOVERSION_PID', 32);
define('POP3CLIENT_EXTERNALCRYPTOCUSTOMPARAMS_PID', 33);
define('POP3CLIENT_EXTERNALCRYPTODATA_PID', 34);
define('POP3CLIENT_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 35);
define('POP3CLIENT_EXTERNALCRYPTOHASHALGORITHM_PID', 36);
define('POP3CLIENT_EXTERNALCRYPTOKEYID_PID', 37);
define('POP3CLIENT_EXTERNALCRYPTOKEYSECRET_PID', 38);
define('POP3CLIENT_EXTERNALCRYPTOMETHOD_PID', 39);
define('POP3CLIENT_EXTERNALCRYPTOMODE_PID', 40);
define('POP3CLIENT_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 41);
define('POP3CLIENT_KNOWNCERTCOUNT_PID', 42);
define('POP3CLIENT_KNOWNCERTBYTES_PID', 43);
define('POP3CLIENT_KNOWNCERTHANDLE_PID', 44);
define('POP3CLIENT_KNOWNCRLCOUNT_PID', 45);
define('POP3CLIENT_KNOWNCRLBYTES_PID', 46);
define('POP3CLIENT_KNOWNCRLHANDLE_PID', 47);
define('POP3CLIENT_KNOWNOCSPCOUNT_PID', 48);
define('POP3CLIENT_KNOWNOCSPBYTES_PID', 49);
define('POP3CLIENT_KNOWNOCSPHANDLE_PID', 50);
define('POP3CLIENT_MSGATTACHMENTCOUNT_PID', 51);
define('POP3CLIENT_MSGBCC_PID', 52);
define('POP3CLIENT_MSGCC_PID', 53);
define('POP3CLIENT_MSGCOMMENTS_PID', 54);
define('POP3CLIENT_MSGDATE_PID', 55);
define('POP3CLIENT_MSGDELIVERYRECEIPT_PID', 56);
define('POP3CLIENT_MSGFROM_PID', 57);
define('POP3CLIENT_MSGHTMLTEXT_PID', 58);
define('POP3CLIENT_MSGID_PID', 59);
define('POP3CLIENT_MSGINREPLYTO_PID', 60);
define('POP3CLIENT_MSGKEYWORDS_PID', 61);
define('POP3CLIENT_MSGMAILER_PID', 62);
define('POP3CLIENT_MSGPLAINTEXT_PID', 63);
define('POP3CLIENT_MSGPRIORITY_PID', 64);
define('POP3CLIENT_MSGREADRECEIPT_PID', 65);
define('POP3CLIENT_MSGREFERENCES_PID', 66);
define('POP3CLIENT_MSGREPLYTO_PID', 67);
define('POP3CLIENT_MSGRETURNPATH_PID', 68);
define('POP3CLIENT_MSGSENDER_PID', 69);
define('POP3CLIENT_MSGSENDTO_PID', 70);
define('POP3CLIENT_MSGSUBJECT_PID', 71);
define('POP3CLIENT_MSGINFOCOUNT_PID', 72);
define('POP3CLIENT_MSGINFOSIZE_PID', 73);
define('POP3CLIENT_MSGINFOUID_PID', 74);
define('POP3CLIENT_PASSWORD_PID', 75);
define('POP3CLIENT_PROXYADDRESS_PID', 76);
define('POP3CLIENT_PROXYAUTHENTICATION_PID', 77);
define('POP3CLIENT_PROXYPASSWORD_PID', 78);
define('POP3CLIENT_PROXYPORT_PID', 79);
define('POP3CLIENT_PROXYPROXYTYPE_PID', 80);
define('POP3CLIENT_PROXYREQUESTHEADERS_PID', 81);
define('POP3CLIENT_PROXYRESPONSEBODY_PID', 82);
define('POP3CLIENT_PROXYRESPONSEHEADERS_PID', 83);
define('POP3CLIENT_PROXYUSEIPV6_PID', 84);
define('POP3CLIENT_PROXYUSEPROXY_PID', 85);
define('POP3CLIENT_PROXYUSERNAME_PID', 86);
define('POP3CLIENT_SERVERCERTCOUNT_PID', 87);
define('POP3CLIENT_SERVERCERTBYTES_PID', 88);
define('POP3CLIENT_SERVERCERTCAKEYID_PID', 89);
define('POP3CLIENT_SERVERCERTFINGERPRINT_PID', 90);
define('POP3CLIENT_SERVERCERTHANDLE_PID', 91);
define('POP3CLIENT_SERVERCERTISSUER_PID', 92);
define('POP3CLIENT_SERVERCERTISSUERRDN_PID', 93);
define('POP3CLIENT_SERVERCERTKEYALGORITHM_PID', 94);
define('POP3CLIENT_SERVERCERTKEYBITS_PID', 95);
define('POP3CLIENT_SERVERCERTKEYFINGERPRINT_PID', 96);
define('POP3CLIENT_SERVERCERTKEYUSAGE_PID', 97);
define('POP3CLIENT_SERVERCERTPUBLICKEYBYTES_PID', 98);
define('POP3CLIENT_SERVERCERTSELFSIGNED_PID', 99);
define('POP3CLIENT_SERVERCERTSERIALNUMBER_PID', 100);
define('POP3CLIENT_SERVERCERTSIGALGORITHM_PID', 101);
define('POP3CLIENT_SERVERCERTSUBJECT_PID', 102);
define('POP3CLIENT_SERVERCERTSUBJECTKEYID_PID', 103);
define('POP3CLIENT_SERVERCERTSUBJECTRDN_PID', 104);
define('POP3CLIENT_SERVERCERTVALIDFROM_PID', 105);
define('POP3CLIENT_SERVERCERTVALIDTO_PID', 106);
define('POP3CLIENT_SERVERINFOAPOPSUPPORTED_PID', 107);
define('POP3CLIENT_SERVERINFOAVAILABLE_PID', 108);
define('POP3CLIENT_SERVERINFOEXPIRATIONPERIOD_PID', 109);
define('POP3CLIENT_SERVERINFOEXPIRESUPPORTED_PID', 110);
define('POP3CLIENT_SERVERINFOIMPLEMENTATIONSUPPORTED_PID', 111);
define('POP3CLIENT_SERVERINFOLOGINDELAY_PID', 112);
define('POP3CLIENT_SERVERINFOLOGINDELAYSUPPORTED_PID', 113);
define('POP3CLIENT_SERVERINFORESPCODESSUPPORTED_PID', 114);
define('POP3CLIENT_SERVERINFOSASLSUPPORTED_PID', 115);
define('POP3CLIENT_SERVERINFOSERVERDETAILS_PID', 116);
define('POP3CLIENT_SERVERINFOTOPSUPPORTED_PID', 117);
define('POP3CLIENT_SERVERINFOUIDLSUPPORTED_PID', 118);
define('POP3CLIENT_SERVERINFOUSERSUPPORTED_PID', 119);
define('POP3CLIENT_SOCKETDNSMODE_PID', 120);
define('POP3CLIENT_SOCKETDNSPORT_PID', 121);
define('POP3CLIENT_SOCKETDNSQUERYTIMEOUT_PID', 122);
define('POP3CLIENT_SOCKETDNSSERVERS_PID', 123);
define('POP3CLIENT_SOCKETDNSTOTALTIMEOUT_PID', 124);
define('POP3CLIENT_SOCKETINCOMINGSPEEDLIMIT_PID', 125);
define('POP3CLIENT_SOCKETLOCALADDRESS_PID', 126);
define('POP3CLIENT_SOCKETLOCALPORT_PID', 127);
define('POP3CLIENT_SOCKETOUTGOINGSPEEDLIMIT_PID', 128);
define('POP3CLIENT_SOCKETTIMEOUT_PID', 129);
define('POP3CLIENT_SOCKETUSEIPV6_PID', 130);
define('POP3CLIENT_TLSAUTOVALIDATECERTIFICATES_PID', 131);
define('POP3CLIENT_TLSBASECONFIGURATION_PID', 132);
define('POP3CLIENT_TLSCIPHERSUITES_PID', 133);
define('POP3CLIENT_TLSECCURVES_PID', 134);
define('POP3CLIENT_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 135);
define('POP3CLIENT_TLSPRESHAREDIDENTITY_PID', 136);
define('POP3CLIENT_TLSPRESHAREDKEY_PID', 137);
define('POP3CLIENT_TLSPRESHAREDKEYCIPHERSUITE_PID', 138);
define('POP3CLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 139);
define('POP3CLIENT_TLSREVOCATIONCHECK_PID', 140);
define('POP3CLIENT_TLSSSLOPTIONS_PID', 141);
define('POP3CLIENT_TLSTLSMODE_PID', 142);
define('POP3CLIENT_TLSUSEEXTENDEDMASTERSECRET_PID', 143);
define('POP3CLIENT_TLSUSESESSIONRESUMPTION_PID', 144);
define('POP3CLIENT_TLSVERSIONS_PID', 145);
define('POP3CLIENT_TRUSTEDCERTCOUNT_PID', 146);
define('POP3CLIENT_TRUSTEDCERTBYTES_PID', 147);
define('POP3CLIENT_TRUSTEDCERTHANDLE_PID', 148);
define('POP3CLIENT_USERNAME_PID', 149);


/*
 * POP3Client Enums
 */

define('POP3CLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID', 0);
define('POP3CLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('POP3CLIENT_CONNINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('POP3CLIENT_CONNINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('POP3CLIENT_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('POP3CLIENT_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('POP3CLIENT_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('POP3CLIENT_EXTERNALCRYPTOMODE_DISABLED', 1);
define('POP3CLIENT_EXTERNALCRYPTOMODE_GENERIC', 2);

define('POP3CLIENT_MSGPRIORITY_LOWEST', 0);
define('POP3CLIENT_MSGPRIORITY_LOW', 1);
define('POP3CLIENT_MSGPRIORITY_NORMAL', 2);
define('POP3CLIENT_MSGPRIORITY_HIGH', 3);
define('POP3CLIENT_MSGPRIORITY_HIGHEST', 4);

define('POP3CLIENT_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('POP3CLIENT_PROXYAUTHENTICATION_BASIC', 1);
define('POP3CLIENT_PROXYAUTHENTICATION_DIGEST', 2);
define('POP3CLIENT_PROXYAUTHENTICATION_NTLM', 3);

define('POP3CLIENT_PROXYPROXYTYPE_NONE', 0);
define('POP3CLIENT_PROXYPROXYTYPE_SOCKS_4', 1);
define('POP3CLIENT_PROXYPROXYTYPE_SOCKS_5', 2);
define('POP3CLIENT_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('POP3CLIENT_PROXYPROXYTYPE_HTTP', 4);

define('POP3CLIENT_SOCKETDNSMODE_AUTO', 0);
define('POP3CLIENT_SOCKETDNSMODE_PLATFORM', 1);
define('POP3CLIENT_SOCKETDNSMODE_OWN', 2);
define('POP3CLIENT_SOCKETDNSMODE_OWN_SECURE', 3);

define('POP3CLIENT_TLSBASECONFIGURATION_DEFAULT', 0);
define('POP3CLIENT_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('POP3CLIENT_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('POP3CLIENT_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('POP3CLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('POP3CLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('POP3CLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('POP3CLIENT_TLSREVOCATIONCHECK_NONE', 0);
define('POP3CLIENT_TLSREVOCATIONCHECK_AUTO', 1);
define('POP3CLIENT_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('POP3CLIENT_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('POP3CLIENT_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('POP3CLIENT_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('POP3CLIENT_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('POP3CLIENT_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('POP3CLIENT_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('POP3CLIENT_TLSTLSMODE_DEFAULT', 0);
define('POP3CLIENT_TLSTLSMODE_NO_TLS', 1);
define('POP3CLIENT_TLSTLSMODE_EXPLICIT_TLS', 2);
define('POP3CLIENT_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * POP3Client Methods
 */

define('POP3CLIENT_CONFIG_MID', 2);
define('POP3CLIENT_CONNECT_MID', 3);
define('POP3CLIENT_DELETEMESSAGE_MID', 4);
define('POP3CLIENT_DISCONNECT_MID', 5);
define('POP3CLIENT_LISTMESSAGES_MID', 6);
define('POP3CLIENT_PING_MID', 7);
define('POP3CLIENT_RECEIVEFILE_MID', 8);
define('POP3CLIENT_RECEIVEMESSAGE_MID', 9);
define('POP3CLIENT_UNDELETE_MID', 11);


/*
 * POP3Client Events
 */
  
define('POP3CLIENT_BEFOREAUTH_EID', 1);
define('POP3CLIENT_CERTIFICATEVALIDATE_EID', 2);
define('POP3CLIENT_COMMAND_EID', 3);
define('POP3CLIENT_COMMANDREPLY_EID', 4);
define('POP3CLIENT_COMMANDREPLYDATA_EID', 5);
define('POP3CLIENT_ERROR_EID', 6);
define('POP3CLIENT_EXTERNALSIGN_EID', 7);
define('POP3CLIENT_PROGRESS_EID', 8);

/*
 * RESTClient Properties
 */

define('RESTCLIENT_BLOCKEDCERTCOUNT_PID', 1);
define('RESTCLIENT_BLOCKEDCERTBYTES_PID', 2);
define('RESTCLIENT_BLOCKEDCERTHANDLE_PID', 3);
define('RESTCLIENT_CLIENTCERTCOUNT_PID', 4);
define('RESTCLIENT_CLIENTCERTBYTES_PID', 5);
define('RESTCLIENT_CLIENTCERTHANDLE_PID', 6);
define('RESTCLIENT_CONNINFOAEADCIPHER_PID', 7);
define('RESTCLIENT_CONNINFOCHAINVALIDATIONDETAILS_PID', 8);
define('RESTCLIENT_CONNINFOCHAINVALIDATIONRESULT_PID', 9);
define('RESTCLIENT_CONNINFOCIPHERSUITE_PID', 10);
define('RESTCLIENT_CONNINFOCLIENTAUTHENTICATED_PID', 11);
define('RESTCLIENT_CONNINFOCONNECTIONESTABLISHED_PID', 12);
define('RESTCLIENT_CONNINFOCONNECTIONID_PID', 13);
define('RESTCLIENT_CONNINFODIGESTALGORITHM_PID', 14);
define('RESTCLIENT_CONNINFOENCRYPTIONALGORITHM_PID', 15);
define('RESTCLIENT_CONNINFOEXPORTABLE_PID', 16);
define('RESTCLIENT_CONNINFOKEYEXCHANGEALGORITHM_PID', 17);
define('RESTCLIENT_CONNINFOKEYEXCHANGEKEYBITS_PID', 18);
define('RESTCLIENT_CONNINFONAMEDECCURVE_PID', 19);
define('RESTCLIENT_CONNINFOPFSCIPHER_PID', 20);
define('RESTCLIENT_CONNINFOPRESHAREDIDENTITYHINT_PID', 21);
define('RESTCLIENT_CONNINFOPUBLICKEYBITS_PID', 22);
define('RESTCLIENT_CONNINFORESUMEDSESSION_PID', 23);
define('RESTCLIENT_CONNINFOSECURECONNECTION_PID', 24);
define('RESTCLIENT_CONNINFOSERVERAUTHENTICATED_PID', 25);
define('RESTCLIENT_CONNINFOSIGNATUREALGORITHM_PID', 26);
define('RESTCLIENT_CONNINFOSYMMETRICBLOCKSIZE_PID', 27);
define('RESTCLIENT_CONNINFOSYMMETRICKEYBITS_PID', 28);
define('RESTCLIENT_CONNINFOTOTALBYTESRECEIVED_PID', 29);
define('RESTCLIENT_CONNINFOTOTALBYTESSENT_PID', 30);
define('RESTCLIENT_CONNINFOVALIDATIONLOG_PID', 31);
define('RESTCLIENT_CONNINFOVERSION_PID', 32);
define('RESTCLIENT_DYNAMICDATA_PID', 33);
define('RESTCLIENT_EXTERNALCRYPTOCUSTOMPARAMS_PID', 34);
define('RESTCLIENT_EXTERNALCRYPTODATA_PID', 35);
define('RESTCLIENT_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 36);
define('RESTCLIENT_EXTERNALCRYPTOHASHALGORITHM_PID', 37);
define('RESTCLIENT_EXTERNALCRYPTOKEYID_PID', 38);
define('RESTCLIENT_EXTERNALCRYPTOKEYSECRET_PID', 39);
define('RESTCLIENT_EXTERNALCRYPTOMETHOD_PID', 40);
define('RESTCLIENT_EXTERNALCRYPTOMODE_PID', 41);
define('RESTCLIENT_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 42);
define('RESTCLIENT_KEEPALIVEPOLICY_PID', 43);
define('RESTCLIENT_KNOWNCERTCOUNT_PID', 44);
define('RESTCLIENT_KNOWNCERTBYTES_PID', 45);
define('RESTCLIENT_KNOWNCERTHANDLE_PID', 46);
define('RESTCLIENT_KNOWNCRLCOUNT_PID', 47);
define('RESTCLIENT_KNOWNCRLBYTES_PID', 48);
define('RESTCLIENT_KNOWNCRLHANDLE_PID', 49);
define('RESTCLIENT_KNOWNOCSPCOUNT_PID', 50);
define('RESTCLIENT_KNOWNOCSPBYTES_PID', 51);
define('RESTCLIENT_KNOWNOCSPHANDLE_PID', 52);
define('RESTCLIENT_OUTPUTBYTES_PID', 53);
define('RESTCLIENT_OUTPUTSTRING_PID', 54);
define('RESTCLIENT_PROXYADDRESS_PID', 55);
define('RESTCLIENT_PROXYAUTHENTICATION_PID', 56);
define('RESTCLIENT_PROXYPASSWORD_PID', 57);
define('RESTCLIENT_PROXYPORT_PID', 58);
define('RESTCLIENT_PROXYPROXYTYPE_PID', 59);
define('RESTCLIENT_PROXYREQUESTHEADERS_PID', 60);
define('RESTCLIENT_PROXYRESPONSEBODY_PID', 61);
define('RESTCLIENT_PROXYRESPONSEHEADERS_PID', 62);
define('RESTCLIENT_PROXYUSEIPV6_PID', 63);
define('RESTCLIENT_PROXYUSEPROXY_PID', 64);
define('RESTCLIENT_PROXYUSERNAME_PID', 65);
define('RESTCLIENT_REASONPHRASE_PID', 66);
define('RESTCLIENT_REQHEADERCOUNT_PID', 67);
define('RESTCLIENT_REQHEADERNAME_PID', 68);
define('RESTCLIENT_REQHEADERVALUE_PID', 69);
define('RESTCLIENT_REQPARAMSACCEPT_PID', 70);
define('RESTCLIENT_REQPARAMSACCEPTCHARSET_PID', 71);
define('RESTCLIENT_REQPARAMSACCEPTLANGUAGE_PID', 72);
define('RESTCLIENT_REQPARAMSACCEPTRANGEEND_PID', 73);
define('RESTCLIENT_REQPARAMSACCEPTRANGESTART_PID', 74);
define('RESTCLIENT_REQPARAMSAUTHORIZATION_PID', 75);
define('RESTCLIENT_REQPARAMSCONNECTION_PID', 76);
define('RESTCLIENT_REQPARAMSCONTENTLENGTH_PID', 77);
define('RESTCLIENT_REQPARAMSCONTENTRANGEEND_PID', 78);
define('RESTCLIENT_REQPARAMSCONTENTRANGEFULLSIZE_PID', 79);
define('RESTCLIENT_REQPARAMSCONTENTRANGESTART_PID', 80);
define('RESTCLIENT_REQPARAMSCONTENTTYPE_PID', 81);
define('RESTCLIENT_REQPARAMSCOOKIE_PID', 82);
define('RESTCLIENT_REQPARAMSCUSTOMHEADERS_PID', 83);
define('RESTCLIENT_REQPARAMSDATE_PID', 84);
define('RESTCLIENT_REQPARAMSFROM_PID', 85);
define('RESTCLIENT_REQPARAMSHOST_PID', 86);
define('RESTCLIENT_REQPARAMSHTTPVERSION_PID', 87);
define('RESTCLIENT_REQPARAMSIFMATCH_PID', 88);
define('RESTCLIENT_REQPARAMSIFMODIFIEDSINCE_PID', 89);
define('RESTCLIENT_REQPARAMSIFNONEMATCH_PID', 90);
define('RESTCLIENT_REQPARAMSIFUNMODIFIEDSINCE_PID', 91);
define('RESTCLIENT_REQPARAMSPASSWORD_PID', 92);
define('RESTCLIENT_REQPARAMSREFERER_PID', 93);
define('RESTCLIENT_REQPARAMSUSERAGENT_PID', 94);
define('RESTCLIENT_REQPARAMSUSERNAME_PID', 95);
define('RESTCLIENT_RESPHEADERCOUNT_PID', 96);
define('RESTCLIENT_RESPHEADERNAME_PID', 97);
define('RESTCLIENT_RESPHEADERVALUE_PID', 98);
define('RESTCLIENT_RESPPARAMSCONTENTLENGTH_PID', 99);
define('RESTCLIENT_RESPPARAMSDATE_PID', 100);
define('RESTCLIENT_RESPPARAMSREASONPHRASE_PID', 101);
define('RESTCLIENT_RESPPARAMSSTATUSCODE_PID', 102);
define('RESTCLIENT_SERVERCERTCOUNT_PID', 103);
define('RESTCLIENT_SERVERCERTBYTES_PID', 104);
define('RESTCLIENT_SERVERCERTCAKEYID_PID', 105);
define('RESTCLIENT_SERVERCERTFINGERPRINT_PID', 106);
define('RESTCLIENT_SERVERCERTHANDLE_PID', 107);
define('RESTCLIENT_SERVERCERTISSUER_PID', 108);
define('RESTCLIENT_SERVERCERTISSUERRDN_PID', 109);
define('RESTCLIENT_SERVERCERTKEYALGORITHM_PID', 110);
define('RESTCLIENT_SERVERCERTKEYBITS_PID', 111);
define('RESTCLIENT_SERVERCERTKEYFINGERPRINT_PID', 112);
define('RESTCLIENT_SERVERCERTKEYUSAGE_PID', 113);
define('RESTCLIENT_SERVERCERTPUBLICKEYBYTES_PID', 114);
define('RESTCLIENT_SERVERCERTSELFSIGNED_PID', 115);
define('RESTCLIENT_SERVERCERTSERIALNUMBER_PID', 116);
define('RESTCLIENT_SERVERCERTSIGALGORITHM_PID', 117);
define('RESTCLIENT_SERVERCERTSUBJECT_PID', 118);
define('RESTCLIENT_SERVERCERTSUBJECTKEYID_PID', 119);
define('RESTCLIENT_SERVERCERTSUBJECTRDN_PID', 120);
define('RESTCLIENT_SERVERCERTVALIDFROM_PID', 121);
define('RESTCLIENT_SERVERCERTVALIDTO_PID', 122);
define('RESTCLIENT_SOCKETDNSMODE_PID', 123);
define('RESTCLIENT_SOCKETDNSPORT_PID', 124);
define('RESTCLIENT_SOCKETDNSQUERYTIMEOUT_PID', 125);
define('RESTCLIENT_SOCKETDNSSERVERS_PID', 126);
define('RESTCLIENT_SOCKETDNSTOTALTIMEOUT_PID', 127);
define('RESTCLIENT_SOCKETINCOMINGSPEEDLIMIT_PID', 128);
define('RESTCLIENT_SOCKETLOCALADDRESS_PID', 129);
define('RESTCLIENT_SOCKETLOCALPORT_PID', 130);
define('RESTCLIENT_SOCKETOUTGOINGSPEEDLIMIT_PID', 131);
define('RESTCLIENT_SOCKETTIMEOUT_PID', 132);
define('RESTCLIENT_SOCKETUSEIPV6_PID', 133);
define('RESTCLIENT_STATUSCODE_PID', 134);
define('RESTCLIENT_TLSAUTOVALIDATECERTIFICATES_PID', 135);
define('RESTCLIENT_TLSBASECONFIGURATION_PID', 136);
define('RESTCLIENT_TLSCIPHERSUITES_PID', 137);
define('RESTCLIENT_TLSECCURVES_PID', 138);
define('RESTCLIENT_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 139);
define('RESTCLIENT_TLSPRESHAREDIDENTITY_PID', 140);
define('RESTCLIENT_TLSPRESHAREDKEY_PID', 141);
define('RESTCLIENT_TLSPRESHAREDKEYCIPHERSUITE_PID', 142);
define('RESTCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 143);
define('RESTCLIENT_TLSREVOCATIONCHECK_PID', 144);
define('RESTCLIENT_TLSSSLOPTIONS_PID', 145);
define('RESTCLIENT_TLSTLSMODE_PID', 146);
define('RESTCLIENT_TLSUSEEXTENDEDMASTERSECRET_PID', 147);
define('RESTCLIENT_TLSUSESESSIONRESUMPTION_PID', 148);
define('RESTCLIENT_TLSVERSIONS_PID', 149);
define('RESTCLIENT_TRUSTEDCERTCOUNT_PID', 150);
define('RESTCLIENT_TRUSTEDCERTBYTES_PID', 151);
define('RESTCLIENT_TRUSTEDCERTHANDLE_PID', 152);
define('RESTCLIENT_USEDIGESTAUTH_PID', 153);
define('RESTCLIENT_USENTLMAUTH_PID', 154);


/*
 * RESTClient Enums
 */

define('RESTCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID', 0);
define('RESTCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('RESTCLIENT_CONNINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('RESTCLIENT_CONNINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('RESTCLIENT_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('RESTCLIENT_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('RESTCLIENT_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('RESTCLIENT_EXTERNALCRYPTOMODE_DISABLED', 1);
define('RESTCLIENT_EXTERNALCRYPTOMODE_GENERIC', 2);

define('RESTCLIENT_KEEPALIVEPOLICY_STANDARD_DEFINED', 0);
define('RESTCLIENT_KEEPALIVEPOLICY_PREFER_KEEP_ALIVE', 1);
define('RESTCLIENT_KEEPALIVEPOLICY_RELY_ON_SERVER', 2);
define('RESTCLIENT_KEEPALIVEPOLICY_KEEP_ALIVES_DISABLED', 3);

define('RESTCLIENT_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('RESTCLIENT_PROXYAUTHENTICATION_BASIC', 1);
define('RESTCLIENT_PROXYAUTHENTICATION_DIGEST', 2);
define('RESTCLIENT_PROXYAUTHENTICATION_NTLM', 3);

define('RESTCLIENT_PROXYPROXYTYPE_NONE', 0);
define('RESTCLIENT_PROXYPROXYTYPE_SOCKS_4', 1);
define('RESTCLIENT_PROXYPROXYTYPE_SOCKS_5', 2);
define('RESTCLIENT_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('RESTCLIENT_PROXYPROXYTYPE_HTTP', 4);

define('RESTCLIENT_REQPARAMSHTTPVERSION_HTTP10', 0);
define('RESTCLIENT_REQPARAMSHTTPVERSION_HTTP11', 1);

define('RESTCLIENT_SOCKETDNSMODE_AUTO', 0);
define('RESTCLIENT_SOCKETDNSMODE_PLATFORM', 1);
define('RESTCLIENT_SOCKETDNSMODE_OWN', 2);
define('RESTCLIENT_SOCKETDNSMODE_OWN_SECURE', 3);

define('RESTCLIENT_TLSBASECONFIGURATION_DEFAULT', 0);
define('RESTCLIENT_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('RESTCLIENT_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('RESTCLIENT_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('RESTCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('RESTCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('RESTCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('RESTCLIENT_TLSREVOCATIONCHECK_NONE', 0);
define('RESTCLIENT_TLSREVOCATIONCHECK_AUTO', 1);
define('RESTCLIENT_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('RESTCLIENT_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('RESTCLIENT_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('RESTCLIENT_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('RESTCLIENT_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('RESTCLIENT_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('RESTCLIENT_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('RESTCLIENT_TLSTLSMODE_DEFAULT', 0);
define('RESTCLIENT_TLSTLSMODE_NO_TLS', 1);
define('RESTCLIENT_TLSTLSMODE_EXPLICIT_TLS', 2);
define('RESTCLIENT_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * RESTClient Methods
 */

define('RESTCLIENT_CONFIG_MID', 2);
define('RESTCLIENT_DELETE_MID', 3);
define('RESTCLIENT_GET_MID', 4);
define('RESTCLIENT_GETBYTES_MID', 5);
define('RESTCLIENT_GETFILE_MID', 6);
define('RESTCLIENT_HEAD_MID', 8);
define('RESTCLIENT_OPTIONS_MID', 9);
define('RESTCLIENT_POST_MID', 10);
define('RESTCLIENT_POSTBYTES_MID', 11);
define('RESTCLIENT_POSTFILE_MID', 12);
define('RESTCLIENT_POSTJSON_MID', 13);
define('RESTCLIENT_POSTWEBFORM_MID', 15);
define('RESTCLIENT_POSTXML_MID', 16);
define('RESTCLIENT_PUT_MID', 17);
define('RESTCLIENT_PUTBYTES_MID', 18);
define('RESTCLIENT_PUTFILE_MID', 19);
define('RESTCLIENT_PUTJSON_MID', 20);
define('RESTCLIENT_PUTXML_MID', 22);
define('RESTCLIENT_TRACE_MID', 23);


/*
 * RESTClient Events
 */
  
define('RESTCLIENT_CERTIFICATEVALIDATE_EID', 1);
define('RESTCLIENT_COOKIE_EID', 2);
define('RESTCLIENT_DOCUMENTBEGIN_EID', 3);
define('RESTCLIENT_DOCUMENTEND_EID', 4);
define('RESTCLIENT_DYNAMICDATANEEDED_EID', 5);
define('RESTCLIENT_ERROR_EID', 6);
define('RESTCLIENT_EXTERNALSIGN_EID', 7);
define('RESTCLIENT_HEADERSPREPARED_EID', 8);
define('RESTCLIENT_HEADERSRECEIVED_EID', 9);
define('RESTCLIENT_PROGRESS_EID', 10);
define('RESTCLIENT_REDIRECTION_EID', 11);

/*
 * RESTServer Properties
 */

define('RESTSERVER_ACTIVE_PID', 1);
define('RESTSERVER_ALLOWKEEPALIVE_PID', 2);
define('RESTSERVER_AUTHBASIC_PID', 3);
define('RESTSERVER_AUTHDIGEST_PID', 4);
define('RESTSERVER_AUTHDIGESTEXPIRE_PID', 5);
define('RESTSERVER_AUTHREALM_PID', 6);
define('RESTSERVER_BOUNDPORT_PID', 7);
define('RESTSERVER_COMPRESSIONLEVEL_PID', 8);
define('RESTSERVER_DOCUMENTROOT_PID', 9);
define('RESTSERVER_ERRORORIGIN_PID', 10);
define('RESTSERVER_ERRORSEVERITY_PID', 11);
define('RESTSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 12);
define('RESTSERVER_EXTERNALCRYPTODATA_PID', 13);
define('RESTSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 14);
define('RESTSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 15);
define('RESTSERVER_EXTERNALCRYPTOKEYID_PID', 16);
define('RESTSERVER_EXTERNALCRYPTOKEYSECRET_PID', 17);
define('RESTSERVER_EXTERNALCRYPTOMETHOD_PID', 18);
define('RESTSERVER_EXTERNALCRYPTOMODE_PID', 19);
define('RESTSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 20);
define('RESTSERVER_HANDSHAKETIMEOUT_PID', 21);
define('RESTSERVER_HOST_PID', 22);
define('RESTSERVER_PINNEDCLIENTADDRESS_PID', 23);
define('RESTSERVER_PINNEDCLIENTCHAINVALIDATIONDETAILS_PID', 24);
define('RESTSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_PID', 25);
define('RESTSERVER_PINNEDCLIENTCIPHERSUITE_PID', 26);
define('RESTSERVER_PINNEDCLIENTCLIENTAUTHENTICATED_PID', 27);
define('RESTSERVER_PINNEDCLIENTDIGESTALGORITHM_PID', 28);
define('RESTSERVER_PINNEDCLIENTENCRYPTIONALGORITHM_PID', 29);
define('RESTSERVER_PINNEDCLIENTID_PID', 30);
define('RESTSERVER_PINNEDCLIENTKEYEXCHANGEALGORITHM_PID', 31);
define('RESTSERVER_PINNEDCLIENTKEYEXCHANGEKEYBITS_PID', 32);
define('RESTSERVER_PINNEDCLIENTNAMEDECCURVE_PID', 33);
define('RESTSERVER_PINNEDCLIENTPFSCIPHER_PID', 34);
define('RESTSERVER_PINNEDCLIENTPORT_PID', 35);
define('RESTSERVER_PINNEDCLIENTPUBLICKEYBITS_PID', 36);
define('RESTSERVER_PINNEDCLIENTRESUMEDSESSION_PID', 37);
define('RESTSERVER_PINNEDCLIENTSECURECONNECTION_PID', 38);
define('RESTSERVER_PINNEDCLIENTSIGNATUREALGORITHM_PID', 39);
define('RESTSERVER_PINNEDCLIENTSYMMETRICBLOCKSIZE_PID', 40);
define('RESTSERVER_PINNEDCLIENTSYMMETRICKEYBITS_PID', 41);
define('RESTSERVER_PINNEDCLIENTTOTALBYTESRECEIVED_PID', 42);
define('RESTSERVER_PINNEDCLIENTTOTALBYTESSENT_PID', 43);
define('RESTSERVER_PINNEDCLIENTVALIDATIONLOG_PID', 44);
define('RESTSERVER_PINNEDCLIENTVERSION_PID', 45);
define('RESTSERVER_PINNEDCLIENTCERTCOUNT_PID', 46);
define('RESTSERVER_PINNEDCLIENTCERTBYTES_PID', 47);
define('RESTSERVER_PINNEDCLIENTCERTCAKEYID_PID', 48);
define('RESTSERVER_PINNEDCLIENTCERTFINGERPRINT_PID', 49);
define('RESTSERVER_PINNEDCLIENTCERTHANDLE_PID', 50);
define('RESTSERVER_PINNEDCLIENTCERTISSUER_PID', 51);
define('RESTSERVER_PINNEDCLIENTCERTISSUERRDN_PID', 52);
define('RESTSERVER_PINNEDCLIENTCERTKEYALGORITHM_PID', 53);
define('RESTSERVER_PINNEDCLIENTCERTKEYBITS_PID', 54);
define('RESTSERVER_PINNEDCLIENTCERTKEYFINGERPRINT_PID', 55);
define('RESTSERVER_PINNEDCLIENTCERTKEYUSAGE_PID', 56);
define('RESTSERVER_PINNEDCLIENTCERTPUBLICKEYBYTES_PID', 57);
define('RESTSERVER_PINNEDCLIENTCERTSELFSIGNED_PID', 58);
define('RESTSERVER_PINNEDCLIENTCERTSERIALNUMBER_PID', 59);
define('RESTSERVER_PINNEDCLIENTCERTSIGALGORITHM_PID', 60);
define('RESTSERVER_PINNEDCLIENTCERTSUBJECT_PID', 61);
define('RESTSERVER_PINNEDCLIENTCERTSUBJECTKEYID_PID', 62);
define('RESTSERVER_PINNEDCLIENTCERTSUBJECTRDN_PID', 63);
define('RESTSERVER_PINNEDCLIENTCERTVALIDFROM_PID', 64);
define('RESTSERVER_PINNEDCLIENTCERTVALIDTO_PID', 65);
define('RESTSERVER_PORT_PID', 66);
define('RESTSERVER_PORTRANGEFROM_PID', 67);
define('RESTSERVER_PORTRANGETO_PID', 68);
define('RESTSERVER_SERVERCERTCOUNT_PID', 69);
define('RESTSERVER_SERVERCERTBYTES_PID', 70);
define('RESTSERVER_SERVERCERTHANDLE_PID', 71);
define('RESTSERVER_SESSIONTIMEOUT_PID', 72);
define('RESTSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 73);
define('RESTSERVER_SOCKETLOCALADDRESS_PID', 74);
define('RESTSERVER_SOCKETLOCALPORT_PID', 75);
define('RESTSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 76);
define('RESTSERVER_SOCKETTIMEOUT_PID', 77);
define('RESTSERVER_SOCKETUSEIPV6_PID', 78);
define('RESTSERVER_TEMPDIR_PID', 79);
define('RESTSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 80);
define('RESTSERVER_TLSBASECONFIGURATION_PID', 81);
define('RESTSERVER_TLSCIPHERSUITES_PID', 82);
define('RESTSERVER_TLSECCURVES_PID', 83);
define('RESTSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 84);
define('RESTSERVER_TLSPRESHAREDIDENTITY_PID', 85);
define('RESTSERVER_TLSPRESHAREDKEY_PID', 86);
define('RESTSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 87);
define('RESTSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 88);
define('RESTSERVER_TLSREVOCATIONCHECK_PID', 89);
define('RESTSERVER_TLSSSLOPTIONS_PID', 90);
define('RESTSERVER_TLSTLSMODE_PID', 91);
define('RESTSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 92);
define('RESTSERVER_TLSUSESESSIONRESUMPTION_PID', 93);
define('RESTSERVER_TLSVERSIONS_PID', 94);
define('RESTSERVER_USECHUNKEDTRANSFER_PID', 95);
define('RESTSERVER_USECOMPRESSION_PID', 96);
define('RESTSERVER_USERCOUNT_PID', 97);
define('RESTSERVER_USERASSOCIATEDDATA_PID', 98);
define('RESTSERVER_USERBASEPATH_PID', 99);
define('RESTSERVER_USERCERT_PID', 100);
define('RESTSERVER_USERDATA_PID', 101);
define('RESTSERVER_USERHANDLE_PID', 102);
define('RESTSERVER_USERHASHALGORITHM_PID', 103);
define('RESTSERVER_USERINCOMINGSPEEDLIMIT_PID', 104);
define('RESTSERVER_USEROUTGOINGSPEEDLIMIT_PID', 105);
define('RESTSERVER_USERPASSWORD_PID', 106);
define('RESTSERVER_USERSHAREDSECRET_PID', 107);
define('RESTSERVER_USERUSERNAME_PID', 108);
define('RESTSERVER_USETLS_PID', 109);
define('RESTSERVER_WEBSITENAME_PID', 110);


/*
 * RESTServer Enums
 */

define('RESTSERVER_ERRORORIGIN_LOCAL', 0);
define('RESTSERVER_ERRORORIGIN_REMOTE', 1);

define('RESTSERVER_ERRORSEVERITY_WARNING', 1);
define('RESTSERVER_ERRORSEVERITY_FATAL', 2);

define('RESTSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('RESTSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('RESTSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('RESTSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('RESTSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('RESTSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID', 0);
define('RESTSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('RESTSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_INVALID', 2);
define('RESTSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('RESTSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('RESTSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('RESTSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('RESTSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('RESTSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('RESTSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('RESTSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('RESTSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('RESTSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('RESTSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('RESTSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('RESTSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('RESTSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('RESTSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('RESTSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('RESTSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('RESTSERVER_TLSTLSMODE_DEFAULT', 0);
define('RESTSERVER_TLSTLSMODE_NO_TLS', 1);
define('RESTSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('RESTSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * RESTServer Methods
 */

define('RESTSERVER_CONFIG_MID', 2);
define('RESTSERVER_DROPCLIENT_MID', 3);
define('RESTSERVER_GETREQUESTBYTES_MID', 4);
define('RESTSERVER_GETREQUESTHEADER_MID', 5);
define('RESTSERVER_GETREQUESTSTRING_MID', 7);
define('RESTSERVER_GETREQUESTUSERNAME_MID', 8);
define('RESTSERVER_LISTCLIENTS_MID', 9);
define('RESTSERVER_PINCLIENT_MID', 10);
define('RESTSERVER_SETRESPONSEFILE_MID', 11);
define('RESTSERVER_SETRESPONSEHEADER_MID', 12);
define('RESTSERVER_SETRESPONSEJSON_MID', 13);
define('RESTSERVER_SETRESPONSESTATUS_MID', 14);
define('RESTSERVER_SETRESPONSESTRING_MID', 15);
define('RESTSERVER_SETRESPONSEXML_MID', 16);
define('RESTSERVER_START_MID', 17);
define('RESTSERVER_STOP_MID', 18);


/*
 * RESTServer Events
 */
  
define('RESTSERVER_ACCEPT_EID', 1);
define('RESTSERVER_AUTHATTEMPT_EID', 2);
define('RESTSERVER_CERTIFICATEVALIDATE_EID', 3);
define('RESTSERVER_CONNECT_EID', 4);
define('RESTSERVER_CUSTOMREQUEST_EID', 5);
define('RESTSERVER_DATA_EID', 6);
define('RESTSERVER_DELETEREQUEST_EID', 7);
define('RESTSERVER_DISCONNECT_EID', 8);
define('RESTSERVER_ERROR_EID', 9);
define('RESTSERVER_EXTERNALSIGN_EID', 10);
define('RESTSERVER_FILEERROR_EID', 11);
define('RESTSERVER_GETREQUEST_EID', 12);
define('RESTSERVER_HEADREQUEST_EID', 13);
define('RESTSERVER_OPTIONSREQUEST_EID', 14);
define('RESTSERVER_PATCHREQUEST_EID', 15);
define('RESTSERVER_POSTREQUEST_EID', 16);
define('RESTSERVER_PUTREQUEST_EID', 17);
define('RESTSERVER_TLSESTABLISHED_EID', 18);
define('RESTSERVER_TLSPSK_EID', 19);
define('RESTSERVER_TLSSHUTDOWN_EID', 20);
define('RESTSERVER_TRACEREQUEST_EID', 21);

/*
 * SAMLIdPServer Properties
 */

define('SAMLIDPSERVER_ACTIVE_PID', 1);
define('SAMLIDPSERVER_ALLOWIDPSSO_PID', 2);
define('SAMLIDPSERVER_ARTIFACTRESOLUTIONSERVICE_PID', 3);
define('SAMLIDPSERVER_ATTRIBUTEQUERYSERVICE_PID', 4);
define('SAMLIDPSERVER_AUTHFORMTEMPLATE_PID', 5);
define('SAMLIDPSERVER_ENCRYPTASSERTIONS_PID', 6);
define('SAMLIDPSERVER_ENCRYPTIONCERTBYTES_PID', 7);
define('SAMLIDPSERVER_ENCRYPTIONCERTHANDLE_PID', 8);
define('SAMLIDPSERVER_ERRORORIGIN_PID', 9);
define('SAMLIDPSERVER_ERRORSEVERITY_PID', 10);
define('SAMLIDPSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 11);
define('SAMLIDPSERVER_EXTERNALCRYPTODATA_PID', 12);
define('SAMLIDPSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 13);
define('SAMLIDPSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 14);
define('SAMLIDPSERVER_EXTERNALCRYPTOKEYID_PID', 15);
define('SAMLIDPSERVER_EXTERNALCRYPTOKEYSECRET_PID', 16);
define('SAMLIDPSERVER_EXTERNALCRYPTOMETHOD_PID', 17);
define('SAMLIDPSERVER_EXTERNALCRYPTOMODE_PID', 18);
define('SAMLIDPSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 19);
define('SAMLIDPSERVER_HOST_PID', 20);
define('SAMLIDPSERVER_IDPSSOPAGE_PID', 21);
define('SAMLIDPSERVER_IDPSSOPAGECONTENT_PID', 22);
define('SAMLIDPSERVER_LOGINATTEMPTSLIMIT_PID', 23);
define('SAMLIDPSERVER_METADATAURL_PID', 24);
define('SAMLIDPSERVER_METASIGNINGCERTBYTES_PID', 25);
define('SAMLIDPSERVER_METASIGNINGCERTHANDLE_PID', 26);
define('SAMLIDPSERVER_PORT_PID', 27);
define('SAMLIDPSERVER_PREFERREDSINGLELOGOUTRESPONSEBINDING_PID', 28);
define('SAMLIDPSERVER_PREFERREDSINGLESIGNONRESPONSEBINDING_PID', 29);
define('SAMLIDPSERVER_SERVERCERTCOUNT_PID', 30);
define('SAMLIDPSERVER_SERVERCERTBYTES_PID', 31);
define('SAMLIDPSERVER_SERVERCERTHANDLE_PID', 32);
define('SAMLIDPSERVER_SIGNASSERTIONS_PID', 33);
define('SAMLIDPSERVER_SIGNINGCERTBYTES_PID', 34);
define('SAMLIDPSERVER_SIGNINGCERTHANDLE_PID', 35);
define('SAMLIDPSERVER_SIGNINGCHAINCOUNT_PID', 36);
define('SAMLIDPSERVER_SIGNINGCHAINBYTES_PID', 37);
define('SAMLIDPSERVER_SIGNINGCHAINHANDLE_PID', 38);
define('SAMLIDPSERVER_SIGNMETADATA_PID', 39);
define('SAMLIDPSERVER_SIGNRESPONSE_PID', 40);
define('SAMLIDPSERVER_SINGLELOGOUTSERVICE_PID', 41);
define('SAMLIDPSERVER_SINGLELOGOUTSERVICEBINDINGS_PID', 42);
define('SAMLIDPSERVER_SINGLESIGNONSERVICE_PID', 43);
define('SAMLIDPSERVER_SINGLESIGNONSERVICEBINDINGS_PID', 44);
define('SAMLIDPSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 45);
define('SAMLIDPSERVER_SOCKETLOCALADDRESS_PID', 46);
define('SAMLIDPSERVER_SOCKETLOCALPORT_PID', 47);
define('SAMLIDPSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 48);
define('SAMLIDPSERVER_SOCKETTIMEOUT_PID', 49);
define('SAMLIDPSERVER_SOCKETUSEIPV6_PID', 50);
define('SAMLIDPSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 51);
define('SAMLIDPSERVER_TLSBASECONFIGURATION_PID', 52);
define('SAMLIDPSERVER_TLSCIPHERSUITES_PID', 53);
define('SAMLIDPSERVER_TLSECCURVES_PID', 54);
define('SAMLIDPSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 55);
define('SAMLIDPSERVER_TLSPRESHAREDIDENTITY_PID', 56);
define('SAMLIDPSERVER_TLSPRESHAREDKEY_PID', 57);
define('SAMLIDPSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 58);
define('SAMLIDPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 59);
define('SAMLIDPSERVER_TLSREVOCATIONCHECK_PID', 60);
define('SAMLIDPSERVER_TLSSSLOPTIONS_PID', 61);
define('SAMLIDPSERVER_TLSTLSMODE_PID', 62);
define('SAMLIDPSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 63);
define('SAMLIDPSERVER_TLSUSESESSIONRESUMPTION_PID', 64);
define('SAMLIDPSERVER_TLSVERSIONS_PID', 65);
define('SAMLIDPSERVER_URL_PID', 66);
define('SAMLIDPSERVER_USETLS_PID', 67);


/*
 * SAMLIdPServer Enums
 */

define('SAMLIDPSERVER_ERRORORIGIN_LOCAL', 0);
define('SAMLIDPSERVER_ERRORORIGIN_REMOTE', 1);

define('SAMLIDPSERVER_ERRORSEVERITY_WARNING', 1);
define('SAMLIDPSERVER_ERRORSEVERITY_FATAL', 2);

define('SAMLIDPSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('SAMLIDPSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('SAMLIDPSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('SAMLIDPSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('SAMLIDPSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('SAMLIDPSERVER_PREFERREDSINGLELOGOUTRESPONSEBINDING_NONE', 0);
define('SAMLIDPSERVER_PREFERREDSINGLELOGOUTRESPONSEBINDING_SOAP', 1);
define('SAMLIDPSERVER_PREFERREDSINGLELOGOUTRESPONSEBINDING_PAOS', 2);
define('SAMLIDPSERVER_PREFERREDSINGLELOGOUTRESPONSEBINDING_REDIRECT', 3);
define('SAMLIDPSERVER_PREFERREDSINGLELOGOUTRESPONSEBINDING_POST', 4);
define('SAMLIDPSERVER_PREFERREDSINGLELOGOUTRESPONSEBINDING_ARTIFACT', 5);

define('SAMLIDPSERVER_PREFERREDSINGLESIGNONRESPONSEBINDING_NONE', 0);
define('SAMLIDPSERVER_PREFERREDSINGLESIGNONRESPONSEBINDING_SOAP', 1);
define('SAMLIDPSERVER_PREFERREDSINGLESIGNONRESPONSEBINDING_PAOS', 2);
define('SAMLIDPSERVER_PREFERREDSINGLESIGNONRESPONSEBINDING_REDIRECT', 3);
define('SAMLIDPSERVER_PREFERREDSINGLESIGNONRESPONSEBINDING_POST', 4);
define('SAMLIDPSERVER_PREFERREDSINGLESIGNONRESPONSEBINDING_ARTIFACT', 5);

define('SAMLIDPSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('SAMLIDPSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('SAMLIDPSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('SAMLIDPSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('SAMLIDPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('SAMLIDPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('SAMLIDPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('SAMLIDPSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('SAMLIDPSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('SAMLIDPSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('SAMLIDPSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('SAMLIDPSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('SAMLIDPSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('SAMLIDPSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('SAMLIDPSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('SAMLIDPSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('SAMLIDPSERVER_TLSTLSMODE_DEFAULT', 0);
define('SAMLIDPSERVER_TLSTLSMODE_NO_TLS', 1);
define('SAMLIDPSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('SAMLIDPSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * SAMLIdPServer Methods
 */

define('SAMLIDPSERVER_ADDIDPSSOLINK_MID', 2);
define('SAMLIDPSERVER_ADDUSER_MID', 3);
define('SAMLIDPSERVER_ADDUSERWITHEMAIL_MID', 4);
define('SAMLIDPSERVER_CLEARUSERS_MID', 5);
define('SAMLIDPSERVER_CONFIG_MID', 6);
define('SAMLIDPSERVER_LOADSPMETADATA_MID', 7);
define('SAMLIDPSERVER_REMOVEIDPSSOLINK_MID', 8);
define('SAMLIDPSERVER_REMOVESP_MID', 9);
define('SAMLIDPSERVER_REMOVEUSER_MID', 10);
define('SAMLIDPSERVER_SAVEMETADATA_MID', 11);
define('SAMLIDPSERVER_START_MID', 13);
define('SAMLIDPSERVER_STOP_MID', 14);


/*
 * SAMLIdPServer Events
 */
  
define('SAMLIDPSERVER_ACCEPT_EID', 1);
define('SAMLIDPSERVER_CONNECT_EID', 2);
define('SAMLIDPSERVER_DISCONNECT_EID', 3);
define('SAMLIDPSERVER_ERROR_EID', 4);
define('SAMLIDPSERVER_EXTERNALSIGN_EID', 5);
define('SAMLIDPSERVER_SESSIONCLOSED_EID', 6);
define('SAMLIDPSERVER_SESSIONESTABLISHED_EID', 7);

/*
 * SAMLSPServer Properties
 */

define('SAMLSPSERVER_ACTIVE_PID', 1);
define('SAMLSPSERVER_ARTIFACTRESOLUTIONSERVICE_PID', 2);
define('SAMLSPSERVER_ASSERTIONCONSUMERSERVICE_PID', 3);
define('SAMLSPSERVER_ASSERTIONCONSUMERSERVICEBINDINGS_PID', 4);
define('SAMLSPSERVER_BASEDIR_PID', 5);
define('SAMLSPSERVER_ENCRYPTIONCERTBYTES_PID', 6);
define('SAMLSPSERVER_ENCRYPTIONCERTHANDLE_PID', 7);
define('SAMLSPSERVER_ERRORORIGIN_PID', 8);
define('SAMLSPSERVER_ERRORSEVERITY_PID', 9);
define('SAMLSPSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 10);
define('SAMLSPSERVER_EXTERNALCRYPTODATA_PID', 11);
define('SAMLSPSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 12);
define('SAMLSPSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 13);
define('SAMLSPSERVER_EXTERNALCRYPTOKEYID_PID', 14);
define('SAMLSPSERVER_EXTERNALCRYPTOKEYSECRET_PID', 15);
define('SAMLSPSERVER_EXTERNALCRYPTOMETHOD_PID', 16);
define('SAMLSPSERVER_EXTERNALCRYPTOMODE_PID', 17);
define('SAMLSPSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 18);
define('SAMLSPSERVER_HOST_PID', 19);
define('SAMLSPSERVER_ISSUER_PID', 20);
define('SAMLSPSERVER_LOGOUTPAGE_PID', 21);
define('SAMLSPSERVER_METADATAURL_PID', 22);
define('SAMLSPSERVER_METASIGNINGCERTBYTES_PID', 23);
define('SAMLSPSERVER_METASIGNINGCERTHANDLE_PID', 24);
define('SAMLSPSERVER_PORT_PID', 25);
define('SAMLSPSERVER_PREFERREDIDPTOSPBINDING_PID', 26);
define('SAMLSPSERVER_PROTECTEDRESOURCES_PID', 27);
define('SAMLSPSERVER_REDIRECTONLOGOUTPAGE_PID', 28);
define('SAMLSPSERVER_SERVERCERTCOUNT_PID', 29);
define('SAMLSPSERVER_SERVERCERTBYTES_PID', 30);
define('SAMLSPSERVER_SERVERCERTHANDLE_PID', 31);
define('SAMLSPSERVER_SIGNARTIFACTRESOLVEREQUESTS_PID', 32);
define('SAMLSPSERVER_SIGNAUTHNREQUESTS_PID', 33);
define('SAMLSPSERVER_SIGNINGCERTBYTES_PID', 34);
define('SAMLSPSERVER_SIGNINGCERTHANDLE_PID', 35);
define('SAMLSPSERVER_SIGNINGCHAINCOUNT_PID', 36);
define('SAMLSPSERVER_SIGNINGCHAINBYTES_PID', 37);
define('SAMLSPSERVER_SIGNINGCHAINHANDLE_PID', 38);
define('SAMLSPSERVER_SIGNLOGOUTREQUESTS_PID', 39);
define('SAMLSPSERVER_SIGNMETADATA_PID', 40);
define('SAMLSPSERVER_SINGLELOGOUTSERVICE_PID', 41);
define('SAMLSPSERVER_SINGLELOGOUTSERVICEBINDINGS_PID', 42);
define('SAMLSPSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 43);
define('SAMLSPSERVER_SOCKETLOCALADDRESS_PID', 44);
define('SAMLSPSERVER_SOCKETLOCALPORT_PID', 45);
define('SAMLSPSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 46);
define('SAMLSPSERVER_SOCKETTIMEOUT_PID', 47);
define('SAMLSPSERVER_SOCKETUSEIPV6_PID', 48);
define('SAMLSPSERVER_SPTOIDPBINDING_PID', 49);
define('SAMLSPSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 50);
define('SAMLSPSERVER_TLSBASECONFIGURATION_PID', 51);
define('SAMLSPSERVER_TLSCIPHERSUITES_PID', 52);
define('SAMLSPSERVER_TLSECCURVES_PID', 53);
define('SAMLSPSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 54);
define('SAMLSPSERVER_TLSPRESHAREDIDENTITY_PID', 55);
define('SAMLSPSERVER_TLSPRESHAREDKEY_PID', 56);
define('SAMLSPSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 57);
define('SAMLSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 58);
define('SAMLSPSERVER_TLSREVOCATIONCHECK_PID', 59);
define('SAMLSPSERVER_TLSSSLOPTIONS_PID', 60);
define('SAMLSPSERVER_TLSTLSMODE_PID', 61);
define('SAMLSPSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 62);
define('SAMLSPSERVER_TLSUSESESSIONRESUMPTION_PID', 63);
define('SAMLSPSERVER_TLSVERSIONS_PID', 64);
define('SAMLSPSERVER_URL_PID', 65);
define('SAMLSPSERVER_USETLS_PID', 66);


/*
 * SAMLSPServer Enums
 */

define('SAMLSPSERVER_ERRORORIGIN_LOCAL', 0);
define('SAMLSPSERVER_ERRORORIGIN_REMOTE', 1);

define('SAMLSPSERVER_ERRORSEVERITY_WARNING', 1);
define('SAMLSPSERVER_ERRORSEVERITY_FATAL', 2);

define('SAMLSPSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('SAMLSPSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('SAMLSPSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('SAMLSPSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('SAMLSPSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('SAMLSPSERVER_PREFERREDIDPTOSPBINDING_NONE', 0);
define('SAMLSPSERVER_PREFERREDIDPTOSPBINDING_SOAP', 1);
define('SAMLSPSERVER_PREFERREDIDPTOSPBINDING_PAOS', 2);
define('SAMLSPSERVER_PREFERREDIDPTOSPBINDING_REDIRECT', 3);
define('SAMLSPSERVER_PREFERREDIDPTOSPBINDING_POST', 4);
define('SAMLSPSERVER_PREFERREDIDPTOSPBINDING_ARTIFACT', 5);

define('SAMLSPSERVER_SPTOIDPBINDING_NONE', 0);
define('SAMLSPSERVER_SPTOIDPBINDING_SOAP', 1);
define('SAMLSPSERVER_SPTOIDPBINDING_PAOS', 2);
define('SAMLSPSERVER_SPTOIDPBINDING_REDIRECT', 3);
define('SAMLSPSERVER_SPTOIDPBINDING_POST', 4);
define('SAMLSPSERVER_SPTOIDPBINDING_ARTIFACT', 5);

define('SAMLSPSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('SAMLSPSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('SAMLSPSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('SAMLSPSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('SAMLSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('SAMLSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('SAMLSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('SAMLSPSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('SAMLSPSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('SAMLSPSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('SAMLSPSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('SAMLSPSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('SAMLSPSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('SAMLSPSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('SAMLSPSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('SAMLSPSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('SAMLSPSERVER_TLSTLSMODE_DEFAULT', 0);
define('SAMLSPSERVER_TLSTLSMODE_NO_TLS', 1);
define('SAMLSPSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('SAMLSPSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * SAMLSPServer Methods
 */

define('SAMLSPSERVER_CONFIG_MID', 2);
define('SAMLSPSERVER_LOADIDPMETADATA_MID', 3);
define('SAMLSPSERVER_SAVEMETADATA_MID', 5);
define('SAMLSPSERVER_START_MID', 7);
define('SAMLSPSERVER_STOP_MID', 8);


/*
 * SAMLSPServer Events
 */
  
define('SAMLSPSERVER_ACCEPT_EID', 1);
define('SAMLSPSERVER_CONNECT_EID', 2);
define('SAMLSPSERVER_DISCONNECT_EID', 3);
define('SAMLSPSERVER_ERROR_EID', 4);
define('SAMLSPSERVER_EXTERNALSIGN_EID', 5);
define('SAMLSPSERVER_SESSIONCLOSED_EID', 6);
define('SAMLSPSERVER_SESSIONESTABLISHED_EID', 7);

/*
 * SFTPClient Properties
 */

define('SFTPCLIENT_AUTHATTEMPTS_PID', 1);
define('SFTPCLIENT_AUTOADJUSTTRANSFERBLOCK_PID', 2);
define('SFTPCLIENT_CONNECTED_PID', 3);
define('SFTPCLIENT_CONNINFOCLIENTKEYALGORITHM_PID', 4);
define('SFTPCLIENT_CONNINFOCLIENTKEYBITS_PID', 5);
define('SFTPCLIENT_CONNINFOCLIENTKEYFINGERPRINT_PID', 6);
define('SFTPCLIENT_CONNINFOCLOSEREASON_PID', 7);
define('SFTPCLIENT_CONNINFOCOMPRESSIONALGORITHMINBOUND_PID', 8);
define('SFTPCLIENT_CONNINFOCOMPRESSIONALGORITHMOUTBOUND_PID', 9);
define('SFTPCLIENT_CONNINFOENCRYPTIONALGORITHMINBOUND_PID', 10);
define('SFTPCLIENT_CONNINFOENCRYPTIONALGORITHMOUTBOUND_PID', 11);
define('SFTPCLIENT_CONNINFOINBOUNDENCRYPTIONKEYBITS_PID', 12);
define('SFTPCLIENT_CONNINFOKEXALGORITHM_PID', 13);
define('SFTPCLIENT_CONNINFOKEXBITS_PID', 14);
define('SFTPCLIENT_CONNINFOKEXLINES_PID', 15);
define('SFTPCLIENT_CONNINFOMACALGORITHMINBOUND_PID', 16);
define('SFTPCLIENT_CONNINFOMACALGORITHMOUTBOUND_PID', 17);
define('SFTPCLIENT_CONNINFOOUTBOUNDENCRYPTIONKEYBITS_PID', 18);
define('SFTPCLIENT_CONNINFOPUBLICKEYALGORITHM_PID', 19);
define('SFTPCLIENT_CONNINFOSERVERKEYBITS_PID', 20);
define('SFTPCLIENT_CONNINFOSERVERKEYFINGERPRINT_PID', 21);
define('SFTPCLIENT_CONNINFOSERVERSOFTWARENAME_PID', 22);
define('SFTPCLIENT_CONNINFOTOTALBYTESRECEIVED_PID', 23);
define('SFTPCLIENT_CONNINFOTOTALBYTESSENT_PID', 24);
define('SFTPCLIENT_CONNINFOVERSION_PID', 25);
define('SFTPCLIENT_CURRLISTENTRYATIME_PID', 26);
define('SFTPCLIENT_CURRLISTENTRYCTIME_PID', 27);
define('SFTPCLIENT_CURRLISTENTRYDIRECTORY_PID', 28);
define('SFTPCLIENT_CURRLISTENTRYFILETYPE_PID', 29);
define('SFTPCLIENT_CURRLISTENTRYGROUPEXECUTE_PID', 30);
define('SFTPCLIENT_CURRLISTENTRYGROUPREAD_PID', 31);
define('SFTPCLIENT_CURRLISTENTRYGROUPWRITE_PID', 32);
define('SFTPCLIENT_CURRLISTENTRYHANDLE_PID', 33);
define('SFTPCLIENT_CURRLISTENTRYLONGNAME_PID', 34);
define('SFTPCLIENT_CURRLISTENTRYMTIME_PID', 35);
define('SFTPCLIENT_CURRLISTENTRYNAME_PID', 36);
define('SFTPCLIENT_CURRLISTENTRYOTHEREXECUTE_PID', 37);
define('SFTPCLIENT_CURRLISTENTRYOTHERREAD_PID', 38);
define('SFTPCLIENT_CURRLISTENTRYOTHERWRITE_PID', 39);
define('SFTPCLIENT_CURRLISTENTRYOWNER_PID', 40);
define('SFTPCLIENT_CURRLISTENTRYPATH_PID', 41);
define('SFTPCLIENT_CURRLISTENTRYSIZE_PID', 42);
define('SFTPCLIENT_CURRLISTENTRYUSEREXECUTE_PID', 43);
define('SFTPCLIENT_CURRLISTENTRYUSERREAD_PID', 44);
define('SFTPCLIENT_CURRLISTENTRYUSERWRITE_PID', 45);
define('SFTPCLIENT_DOWNLOADBLOCKSIZE_PID', 46);
define('SFTPCLIENT_EXTERNALCRYPTOCUSTOMPARAMS_PID', 47);
define('SFTPCLIENT_EXTERNALCRYPTODATA_PID', 48);
define('SFTPCLIENT_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 49);
define('SFTPCLIENT_EXTERNALCRYPTOHASHALGORITHM_PID', 50);
define('SFTPCLIENT_EXTERNALCRYPTOKEYID_PID', 51);
define('SFTPCLIENT_EXTERNALCRYPTOKEYSECRET_PID', 52);
define('SFTPCLIENT_EXTERNALCRYPTOMETHOD_PID', 53);
define('SFTPCLIENT_EXTERNALCRYPTOMODE_PID', 54);
define('SFTPCLIENT_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 55);
define('SFTPCLIENT_FORCECOMPRESSION_PID', 56);
define('SFTPCLIENT_KEYFINGERPRINTSHA1_PID', 57);
define('SFTPCLIENT_KEYFINGERPRINTSHA256_PID', 58);
define('SFTPCLIENT_KEYHANDLE_PID', 59);
define('SFTPCLIENT_MAXSFTPVERSION_PID', 60);
define('SFTPCLIENT_MINSFTPVERSION_PID', 61);
define('SFTPCLIENT_PASSWORD_PID', 62);
define('SFTPCLIENT_PIPELINELENGTH_PID', 63);
define('SFTPCLIENT_PROXYADDRESS_PID', 64);
define('SFTPCLIENT_PROXYAUTHENTICATION_PID', 65);
define('SFTPCLIENT_PROXYPASSWORD_PID', 66);
define('SFTPCLIENT_PROXYPORT_PID', 67);
define('SFTPCLIENT_PROXYPROXYTYPE_PID', 68);
define('SFTPCLIENT_PROXYREQUESTHEADERS_PID', 69);
define('SFTPCLIENT_PROXYRESPONSEBODY_PID', 70);
define('SFTPCLIENT_PROXYRESPONSEHEADERS_PID', 71);
define('SFTPCLIENT_PROXYUSEIPV6_PID', 72);
define('SFTPCLIENT_PROXYUSEPROXY_PID', 73);
define('SFTPCLIENT_PROXYUSERNAME_PID', 74);
define('SFTPCLIENT_SERVERKEYALGORITHM_PID', 75);
define('SFTPCLIENT_SERVERKEYBITS_PID', 76);
define('SFTPCLIENT_SERVERKEYCOMMENT_PID', 77);
define('SFTPCLIENT_SERVERKEYCURVE_PID', 78);
define('SFTPCLIENT_SERVERKEYDSSG_PID', 79);
define('SFTPCLIENT_SERVERKEYDSSP_PID', 80);
define('SFTPCLIENT_SERVERKEYDSSQ_PID', 81);
define('SFTPCLIENT_SERVERKEYDSSX_PID', 82);
define('SFTPCLIENT_SERVERKEYDSSY_PID', 83);
define('SFTPCLIENT_SERVERKEYECCD_PID', 84);
define('SFTPCLIENT_SERVERKEYECCQX_PID', 85);
define('SFTPCLIENT_SERVERKEYECCQY_PID', 86);
define('SFTPCLIENT_SERVERKEYEDPRIVATE_PID', 87);
define('SFTPCLIENT_SERVERKEYEDPUBLIC_PID', 88);
define('SFTPCLIENT_SERVERKEYFINGERPRINTMD5_PID', 89);
define('SFTPCLIENT_SERVERKEYFINGERPRINTSHA1_PID', 90);
define('SFTPCLIENT_SERVERKEYFINGERPRINTSHA256_PID', 91);
define('SFTPCLIENT_SERVERKEYHANDLE_PID', 92);
define('SFTPCLIENT_SERVERKEYISEXTRACTABLE_PID', 93);
define('SFTPCLIENT_SERVERKEYISPRIVATE_PID', 94);
define('SFTPCLIENT_SERVERKEYISPUBLIC_PID', 95);
define('SFTPCLIENT_SERVERKEYKDFROUNDS_PID', 96);
define('SFTPCLIENT_SERVERKEYKDFSALT_PID', 97);
define('SFTPCLIENT_SERVERKEYKEYFORMAT_PID', 98);
define('SFTPCLIENT_SERVERKEYKEYPROTECTIONALGORITHM_PID', 99);
define('SFTPCLIENT_SERVERKEYRSAEXPONENT_PID', 100);
define('SFTPCLIENT_SERVERKEYRSAIQMP_PID', 101);
define('SFTPCLIENT_SERVERKEYRSAMODULUS_PID', 102);
define('SFTPCLIENT_SERVERKEYRSAP_PID', 103);
define('SFTPCLIENT_SERVERKEYRSAPRIVATEEXPONENT_PID', 104);
define('SFTPCLIENT_SERVERKEYRSAQ_PID', 105);
define('SFTPCLIENT_SERVERKEYSUBJECT_PID', 106);
define('SFTPCLIENT_SOCKETDNSMODE_PID', 107);
define('SFTPCLIENT_SOCKETDNSPORT_PID', 108);
define('SFTPCLIENT_SOCKETDNSQUERYTIMEOUT_PID', 109);
define('SFTPCLIENT_SOCKETDNSSERVERS_PID', 110);
define('SFTPCLIENT_SOCKETDNSTOTALTIMEOUT_PID', 111);
define('SFTPCLIENT_SOCKETINCOMINGSPEEDLIMIT_PID', 112);
define('SFTPCLIENT_SOCKETLOCALADDRESS_PID', 113);
define('SFTPCLIENT_SOCKETLOCALPORT_PID', 114);
define('SFTPCLIENT_SOCKETOUTGOINGSPEEDLIMIT_PID', 115);
define('SFTPCLIENT_SOCKETTIMEOUT_PID', 116);
define('SFTPCLIENT_SOCKETUSEIPV6_PID', 117);
define('SFTPCLIENT_SSHSETTINGSAUTOADJUSTCIPHERS_PID', 118);
define('SFTPCLIENT_SSHSETTINGSBASECONFIGURATION_PID', 119);
define('SFTPCLIENT_SSHSETTINGSCOMPRESSIONALGORITHMS_PID', 120);
define('SFTPCLIENT_SSHSETTINGSCOMPRESSIONLEVEL_PID', 121);
define('SFTPCLIENT_SSHSETTINGSDEFAULTWINDOWSIZE_PID', 122);
define('SFTPCLIENT_SSHSETTINGSENCRYPTIONALGORITHMS_PID', 123);
define('SFTPCLIENT_SSHSETTINGSFORCECOMPRESSION_PID', 124);
define('SFTPCLIENT_SSHSETTINGSGSSAUTHTYPES_PID', 125);
define('SFTPCLIENT_SSHSETTINGSGSSDELEGATECREDS_PID', 126);
define('SFTPCLIENT_SSHSETTINGSGSSHOSTNAME_PID', 127);
define('SFTPCLIENT_SSHSETTINGSGSSLIB_PID', 128);
define('SFTPCLIENT_SSHSETTINGSGSSMECHANISMS_PID', 129);
define('SFTPCLIENT_SSHSETTINGSGSSPROTOCOLS_PID', 130);
define('SFTPCLIENT_SSHSETTINGSHANDSHAKETIMEOUT_PID', 131);
define('SFTPCLIENT_SSHSETTINGSKEXALGORITHMS_PID', 132);
define('SFTPCLIENT_SSHSETTINGSMACALGORITHMS_PID', 133);
define('SFTPCLIENT_SSHSETTINGSMAXSSHPACKETSIZE_PID', 134);
define('SFTPCLIENT_SSHSETTINGSMINWINDOWSIZE_PID', 135);
define('SFTPCLIENT_SSHSETTINGSOBFUSCATEHANDSHAKE_PID', 136);
define('SFTPCLIENT_SSHSETTINGSOBFUSCATIONPASSWORD_PID', 137);
define('SFTPCLIENT_SSHSETTINGSPUBLICKEYALGORITHMS_PID', 138);
define('SFTPCLIENT_SSHSETTINGSREQUESTPASSWORDCHANGE_PID', 139);
define('SFTPCLIENT_SSHSETTINGSSOFTWARENAME_PID', 140);
define('SFTPCLIENT_SSHSETTINGSTRUSTALLKEYS_PID', 141);
define('SFTPCLIENT_SSHSETTINGSUSEAUTHAGENT_PID', 142);
define('SFTPCLIENT_SSHSETTINGSVERSIONS_PID', 143);
define('SFTPCLIENT_TRUSTEDKEYSFILE_PID', 144);
define('SFTPCLIENT_UPLOADBLOCKSIZE_PID', 145);
define('SFTPCLIENT_USERNAME_PID', 146);
define('SFTPCLIENT_USEUTF8_PID', 147);
define('SFTPCLIENT_VERSION_PID', 148);


/*
 * SFTPClient Enums
 */

define('SFTPCLIENT_CURRLISTENTRYFILETYPE_FILE', 0);
define('SFTPCLIENT_CURRLISTENTRYFILETYPE_DIRECTORY', 1);
define('SFTPCLIENT_CURRLISTENTRYFILETYPE_SYMBLINK', 2);
define('SFTPCLIENT_CURRLISTENTRYFILETYPE_SPECIAL', 3);
define('SFTPCLIENT_CURRLISTENTRYFILETYPE_UNKNOWN', 4);
define('SFTPCLIENT_CURRLISTENTRYFILETYPE_SOCKET', 5);
define('SFTPCLIENT_CURRLISTENTRYFILETYPE_CHAR_DEVICE', 6);
define('SFTPCLIENT_CURRLISTENTRYFILETYPE_BLOCK_DEVICE', 7);
define('SFTPCLIENT_CURRLISTENTRYFILETYPE_FIFO', 8);

define('SFTPCLIENT_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('SFTPCLIENT_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('SFTPCLIENT_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('SFTPCLIENT_EXTERNALCRYPTOMODE_DISABLED', 1);
define('SFTPCLIENT_EXTERNALCRYPTOMODE_GENERIC', 2);

define('SFTPCLIENT_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('SFTPCLIENT_PROXYAUTHENTICATION_BASIC', 1);
define('SFTPCLIENT_PROXYAUTHENTICATION_DIGEST', 2);
define('SFTPCLIENT_PROXYAUTHENTICATION_NTLM', 3);

define('SFTPCLIENT_PROXYPROXYTYPE_NONE', 0);
define('SFTPCLIENT_PROXYPROXYTYPE_SOCKS_4', 1);
define('SFTPCLIENT_PROXYPROXYTYPE_SOCKS_5', 2);
define('SFTPCLIENT_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('SFTPCLIENT_PROXYPROXYTYPE_HTTP', 4);

define('SFTPCLIENT_SERVERKEYKEYFORMAT_OPEN_SSH', 0);
define('SFTPCLIENT_SERVERKEYKEYFORMAT_OPEN_SSH2', 1);
define('SFTPCLIENT_SERVERKEYKEYFORMAT_IETF', 2);
define('SFTPCLIENT_SERVERKEYKEYFORMAT_PU_TTY', 3);
define('SFTPCLIENT_SERVERKEYKEYFORMAT_X509', 4);
define('SFTPCLIENT_SERVERKEYKEYFORMAT_BINARY', 5);
define('SFTPCLIENT_SERVERKEYKEYFORMAT_SSH1', 6);
define('SFTPCLIENT_SERVERKEYKEYFORMAT_PGP', 7);
define('SFTPCLIENT_SERVERKEYKEYFORMAT_PKCS8', 8);

define('SFTPCLIENT_SOCKETDNSMODE_AUTO', 0);
define('SFTPCLIENT_SOCKETDNSMODE_PLATFORM', 1);
define('SFTPCLIENT_SOCKETDNSMODE_OWN', 2);
define('SFTPCLIENT_SOCKETDNSMODE_OWN_SECURE', 3);

define('SFTPCLIENT_SSHSETTINGSBASECONFIGURATION_DEFAULT', 0);
define('SFTPCLIENT_SSHSETTINGSBASECONFIGURATION_COMPATIBLE', 1);
define('SFTPCLIENT_SSHSETTINGSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('SFTPCLIENT_SSHSETTINGSBASECONFIGURATION_HIGHLY_SECURE', 3);



/*
 * SFTPClient Methods
 */

define('SFTPCLIENT_ABSOLUTEPATH_MID', 2);
define('SFTPCLIENT_CHANGEDIR_MID', 3);
define('SFTPCLIENT_CONFIG_MID', 4);
define('SFTPCLIENT_CONNECT_MID', 5);
define('SFTPCLIENT_CREATELINK_MID', 6);
define('SFTPCLIENT_DELETEDIR_MID', 7);
define('SFTPCLIENT_DELETEFILE_MID', 8);
define('SFTPCLIENT_DELETEFILES_MID', 9);
define('SFTPCLIENT_DIREXISTS_MID', 10);
define('SFTPCLIENT_DISCONNECT_MID', 11);
define('SFTPCLIENT_DOWNLOADFILE_MID', 12);
define('SFTPCLIENT_DOWNLOADFILES_MID', 13);
define('SFTPCLIENT_EXECUTESSHCOMMAND_MID', 15);
define('SFTPCLIENT_EXTENSIONCMD_MID', 16);
define('SFTPCLIENT_FILEEXISTS_MID', 17);
define('SFTPCLIENT_GETCURRENTDIR_MID', 18);
define('SFTPCLIENT_GETFILESIZE_MID', 19);
define('SFTPCLIENT_LISTDIR_MID', 20);
define('SFTPCLIENT_MAKEDIR_MID', 21);
define('SFTPCLIENT_RENAMEFILE_MID', 22);
define('SFTPCLIENT_REQUESTATTRIBUTES_MID', 23);
define('SFTPCLIENT_SETATTRIBUTES_MID', 24);
define('SFTPCLIENT_UPLOADFILE_MID', 25);
define('SFTPCLIENT_UPLOADFILES_MID', 26);


/*
 * SFTPClient Events
 */
  
define('SFTPCLIENT_AUTHATTEMPT_EID', 1);
define('SFTPCLIENT_AUTHFAILED_EID', 2);
define('SFTPCLIENT_AUTHSUCCEEDED_EID', 3);
define('SFTPCLIENT_BANNER_EID', 4);
define('SFTPCLIENT_DISCONNECT_EID', 5);
define('SFTPCLIENT_ERROR_EID', 6);
define('SFTPCLIENT_EXTERNALSIGN_EID', 7);
define('SFTPCLIENT_FILEOPERATION_EID', 8);
define('SFTPCLIENT_FILEOPERATIONRESULT_EID', 9);
define('SFTPCLIENT_KNOWNKEYRECEIVED_EID', 10);
define('SFTPCLIENT_LISTENTRY_EID', 11);
define('SFTPCLIENT_PASSWORDCHANGEREQUEST_EID', 12);
define('SFTPCLIENT_PRIVATEKEYNEEDED_EID', 13);
define('SFTPCLIENT_PROGRESS_EID', 14);
define('SFTPCLIENT_UNKNOWNKEYRECEIVED_EID', 15);

/*
 * SFTPServer Properties
 */

define('SFTPSERVER_ACTIVE_PID', 1);
define('SFTPSERVER_AUTHTYPES_PID', 2);
define('SFTPSERVER_BASEDIR_PID', 3);
define('SFTPSERVER_CLIENTFILEENTRYATIME_PID', 4);
define('SFTPSERVER_CLIENTFILEENTRYCTIME_PID', 5);
define('SFTPSERVER_CLIENTFILEENTRYDIRECTORY_PID', 6);
define('SFTPSERVER_CLIENTFILEENTRYFILETYPE_PID', 7);
define('SFTPSERVER_CLIENTFILEENTRYGROUPEXECUTE_PID', 8);
define('SFTPSERVER_CLIENTFILEENTRYGROUPREAD_PID', 9);
define('SFTPSERVER_CLIENTFILEENTRYGROUPWRITE_PID', 10);
define('SFTPSERVER_CLIENTFILEENTRYHANDLE_PID', 11);
define('SFTPSERVER_CLIENTFILEENTRYLONGNAME_PID', 12);
define('SFTPSERVER_CLIENTFILEENTRYMTIME_PID', 13);
define('SFTPSERVER_CLIENTFILEENTRYNAME_PID', 14);
define('SFTPSERVER_CLIENTFILEENTRYOTHEREXECUTE_PID', 15);
define('SFTPSERVER_CLIENTFILEENTRYOTHERREAD_PID', 16);
define('SFTPSERVER_CLIENTFILEENTRYOTHERWRITE_PID', 17);
define('SFTPSERVER_CLIENTFILEENTRYOWNER_PID', 18);
define('SFTPSERVER_CLIENTFILEENTRYPATH_PID', 19);
define('SFTPSERVER_CLIENTFILEENTRYSIZE_PID', 20);
define('SFTPSERVER_CLIENTFILEENTRYUSEREXECUTE_PID', 21);
define('SFTPSERVER_CLIENTFILEENTRYUSERREAD_PID', 22);
define('SFTPSERVER_CLIENTFILEENTRYUSERWRITE_PID', 23);
define('SFTPSERVER_COMPRESSIONLEVEL_PID', 24);
define('SFTPSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 25);
define('SFTPSERVER_EXTERNALCRYPTODATA_PID', 26);
define('SFTPSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 27);
define('SFTPSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 28);
define('SFTPSERVER_EXTERNALCRYPTOKEYID_PID', 29);
define('SFTPSERVER_EXTERNALCRYPTOKEYSECRET_PID', 30);
define('SFTPSERVER_EXTERNALCRYPTOMETHOD_PID', 31);
define('SFTPSERVER_EXTERNALCRYPTOMODE_PID', 32);
define('SFTPSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 33);
define('SFTPSERVER_FORCECOMPRESSION_PID', 34);
define('SFTPSERVER_HOST_PID', 35);
define('SFTPSERVER_KEYFINGERPRINTSHA1_PID', 36);
define('SFTPSERVER_KEYFINGERPRINTSHA256_PID', 37);
define('SFTPSERVER_KEYHANDLE_PID', 38);
define('SFTPSERVER_MAXSFTPVERSION_PID', 39);
define('SFTPSERVER_MINSFTPVERSION_PID', 40);
define('SFTPSERVER_PINNEDCLIENTADDRESS_PID', 41);
define('SFTPSERVER_PINNEDCLIENTCLIENTKEYALGORITHM_PID', 42);
define('SFTPSERVER_PINNEDCLIENTCLIENTKEYBITS_PID', 43);
define('SFTPSERVER_PINNEDCLIENTCLIENTKEYFINGERPRINT_PID', 44);
define('SFTPSERVER_PINNEDCLIENTCLIENTSOFTWARENAME_PID', 45);
define('SFTPSERVER_PINNEDCLIENTCLOSEREASON_PID', 46);
define('SFTPSERVER_PINNEDCLIENTCOMPRESSIONALGORITHMINBOUND_PID', 47);
define('SFTPSERVER_PINNEDCLIENTCOMPRESSIONALGORITHMOUTBOUND_PID', 48);
define('SFTPSERVER_PINNEDCLIENTENCRYPTIONALGORITHMINBOUND_PID', 49);
define('SFTPSERVER_PINNEDCLIENTENCRYPTIONALGORITHMOUTBOUND_PID', 50);
define('SFTPSERVER_PINNEDCLIENTID_PID', 51);
define('SFTPSERVER_PINNEDCLIENTINBOUNDENCRYPTIONKEYBITS_PID', 52);
define('SFTPSERVER_PINNEDCLIENTKEXALGORITHM_PID', 53);
define('SFTPSERVER_PINNEDCLIENTKEXBITS_PID', 54);
define('SFTPSERVER_PINNEDCLIENTKEXLINES_PID', 55);
define('SFTPSERVER_PINNEDCLIENTMACALGORITHMINBOUND_PID', 56);
define('SFTPSERVER_PINNEDCLIENTMACALGORITHMOUTBOUND_PID', 57);
define('SFTPSERVER_PINNEDCLIENTOUTBOUNDENCRYPTIONKEYBITS_PID', 58);
define('SFTPSERVER_PINNEDCLIENTPORT_PID', 59);
define('SFTPSERVER_PINNEDCLIENTPUBLICKEYALGORITHM_PID', 60);
define('SFTPSERVER_PINNEDCLIENTSERVERKEYBITS_PID', 61);
define('SFTPSERVER_PINNEDCLIENTSERVERKEYFINGERPRINT_PID', 62);
define('SFTPSERVER_PINNEDCLIENTTOTALBYTESRECEIVED_PID', 63);
define('SFTPSERVER_PINNEDCLIENTTOTALBYTESSENT_PID', 64);
define('SFTPSERVER_PINNEDCLIENTVERSION_PID', 65);
define('SFTPSERVER_PORT_PID', 66);
define('SFTPSERVER_READONLY_PID', 67);
define('SFTPSERVER_SERVERKEYCOUNT_PID', 68);
define('SFTPSERVER_SERVERKEYALGORITHM_PID', 69);
define('SFTPSERVER_SERVERKEYBITS_PID', 70);
define('SFTPSERVER_SERVERKEYFINGERPRINTMD5_PID', 71);
define('SFTPSERVER_SERVERKEYFINGERPRINTSHA1_PID', 72);
define('SFTPSERVER_SERVERKEYHANDLE_PID', 73);
define('SFTPSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 74);
define('SFTPSERVER_SOCKETLOCALADDRESS_PID', 75);
define('SFTPSERVER_SOCKETLOCALPORT_PID', 76);
define('SFTPSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 77);
define('SFTPSERVER_SOCKETTIMEOUT_PID', 78);
define('SFTPSERVER_SOCKETUSEIPV6_PID', 79);
define('SFTPSERVER_USERCOUNT_PID', 80);
define('SFTPSERVER_USERASSOCIATEDDATA_PID', 81);
define('SFTPSERVER_USERBASEPATH_PID', 82);
define('SFTPSERVER_USERCERT_PID', 83);
define('SFTPSERVER_USERDATA_PID', 84);
define('SFTPSERVER_USERHANDLE_PID', 85);
define('SFTPSERVER_USERHASHALGORITHM_PID', 86);
define('SFTPSERVER_USERINCOMINGSPEEDLIMIT_PID', 87);
define('SFTPSERVER_USEROTPALGORITHM_PID', 88);
define('SFTPSERVER_USEROTPVALUE_PID', 89);
define('SFTPSERVER_USEROUTGOINGSPEEDLIMIT_PID', 90);
define('SFTPSERVER_USERPASSWORD_PID', 91);
define('SFTPSERVER_USERPASSWORDLEN_PID', 92);
define('SFTPSERVER_USERSHAREDSECRET_PID', 93);
define('SFTPSERVER_USERSSHKEY_PID', 94);
define('SFTPSERVER_USERUSERNAME_PID', 95);
define('SFTPSERVER_USEUTF8_PID', 96);


/*
 * SFTPServer Enums
 */

define('SFTPSERVER_CLIENTFILEENTRYFILETYPE_FILE', 0);
define('SFTPSERVER_CLIENTFILEENTRYFILETYPE_DIRECTORY', 1);
define('SFTPSERVER_CLIENTFILEENTRYFILETYPE_SYMBLINK', 2);
define('SFTPSERVER_CLIENTFILEENTRYFILETYPE_SPECIAL', 3);
define('SFTPSERVER_CLIENTFILEENTRYFILETYPE_UNKNOWN', 4);
define('SFTPSERVER_CLIENTFILEENTRYFILETYPE_SOCKET', 5);
define('SFTPSERVER_CLIENTFILEENTRYFILETYPE_CHAR_DEVICE', 6);
define('SFTPSERVER_CLIENTFILEENTRYFILETYPE_BLOCK_DEVICE', 7);
define('SFTPSERVER_CLIENTFILEENTRYFILETYPE_FIFO', 8);

define('SFTPSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('SFTPSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('SFTPSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('SFTPSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('SFTPSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('SFTPSERVER_USEROTPALGORITHM_HMAC', 0);
define('SFTPSERVER_USEROTPALGORITHM_TIME', 1);



/*
 * SFTPServer Methods
 */

define('SFTPSERVER_CONFIG_MID', 2);
define('SFTPSERVER_DROPCLIENT_MID', 3);
define('SFTPSERVER_GETCLIENTBUFFER_MID', 4);
define('SFTPSERVER_GETCLIENTFILEENTRY_MID', 5);
define('SFTPSERVER_LISTCLIENTS_MID', 6);
define('SFTPSERVER_PINCLIENT_MID', 7);
define('SFTPSERVER_SETCLIENTBUFFER_MID', 8);
define('SFTPSERVER_SETCLIENTFILEENTRY_MID', 9);
define('SFTPSERVER_START_MID', 10);
define('SFTPSERVER_STOP_MID', 11);


/*
 * SFTPServer Events
 */
  
define('SFTPSERVER_ACCEPT_EID', 1);
define('SFTPSERVER_AFTERCREATEDIRECTORY_EID', 2);
define('SFTPSERVER_AFTERREMOVE_EID', 3);
define('SFTPSERVER_AFTERRENAMEFILE_EID', 4);
define('SFTPSERVER_AFTERREQUESTATTRIBUTES_EID', 5);
define('SFTPSERVER_AFTERSETATTRIBUTES_EID', 6);
define('SFTPSERVER_AUTHATTEMPT_EID', 7);
define('SFTPSERVER_AUTHFAILED_EID', 8);
define('SFTPSERVER_AUTHPASSWORD_EID', 9);
define('SFTPSERVER_AUTHPUBLICKEY_EID', 10);
define('SFTPSERVER_AUTHSUCCEEDED_EID', 11);
define('SFTPSERVER_BEFORECREATEDIRECTORY_EID', 12);
define('SFTPSERVER_BEFOREDOWNLOADFILE_EID', 13);
define('SFTPSERVER_BEFOREFIND_EID', 14);
define('SFTPSERVER_BEFOREREMOVE_EID', 15);
define('SFTPSERVER_BEFORERENAMEFILE_EID', 16);
define('SFTPSERVER_BEFOREREQUESTATTRIBUTES_EID', 17);
define('SFTPSERVER_BEFORESETATTRIBUTES_EID', 18);
define('SFTPSERVER_BEFOREUPLOADFILE_EID', 19);
define('SFTPSERVER_CLOSEFILE_EID', 20);
define('SFTPSERVER_CONNECT_EID', 21);
define('SFTPSERVER_CREATEDIRECTORY_EID', 22);
define('SFTPSERVER_DISCONNECT_EID', 23);
define('SFTPSERVER_ERROR_EID', 24);
define('SFTPSERVER_EXTERNALSIGN_EID', 25);
define('SFTPSERVER_FINDCLOSE_EID', 26);
define('SFTPSERVER_FINDFIRST_EID', 27);
define('SFTPSERVER_FINDNEXT_EID', 28);
define('SFTPSERVER_OPENFILE_EID', 29);
define('SFTPSERVER_READFILE_EID', 30);
define('SFTPSERVER_REMOVE_EID', 31);
define('SFTPSERVER_RENAMEFILE_EID', 32);
define('SFTPSERVER_REQUESTATTRIBUTES_EID', 33);
define('SFTPSERVER_SESSIONCLOSED_EID', 34);
define('SFTPSERVER_SESSIONESTABLISHED_EID', 35);
define('SFTPSERVER_SETATTRIBUTES_EID', 36);
define('SFTPSERVER_WRITEFILE_EID', 37);

/*
 * SMTPClient Properties
 */

define('SMTPCLIENT_BLOCKEDCERTCOUNT_PID', 1);
define('SMTPCLIENT_BLOCKEDCERTBYTES_PID', 2);
define('SMTPCLIENT_BLOCKEDCERTHANDLE_PID', 3);
define('SMTPCLIENT_CLIENTCERTCOUNT_PID', 4);
define('SMTPCLIENT_CLIENTCERTBYTES_PID', 5);
define('SMTPCLIENT_CLIENTCERTHANDLE_PID', 6);
define('SMTPCLIENT_CONNINFOAEADCIPHER_PID', 7);
define('SMTPCLIENT_CONNINFOCHAINVALIDATIONDETAILS_PID', 8);
define('SMTPCLIENT_CONNINFOCHAINVALIDATIONRESULT_PID', 9);
define('SMTPCLIENT_CONNINFOCIPHERSUITE_PID', 10);
define('SMTPCLIENT_CONNINFOCLIENTAUTHENTICATED_PID', 11);
define('SMTPCLIENT_CONNINFOCONNECTIONESTABLISHED_PID', 12);
define('SMTPCLIENT_CONNINFOCONNECTIONID_PID', 13);
define('SMTPCLIENT_CONNINFODIGESTALGORITHM_PID', 14);
define('SMTPCLIENT_CONNINFOENCRYPTIONALGORITHM_PID', 15);
define('SMTPCLIENT_CONNINFOEXPORTABLE_PID', 16);
define('SMTPCLIENT_CONNINFOKEYEXCHANGEALGORITHM_PID', 17);
define('SMTPCLIENT_CONNINFOKEYEXCHANGEKEYBITS_PID', 18);
define('SMTPCLIENT_CONNINFONAMEDECCURVE_PID', 19);
define('SMTPCLIENT_CONNINFOPFSCIPHER_PID', 20);
define('SMTPCLIENT_CONNINFOPRESHAREDIDENTITYHINT_PID', 21);
define('SMTPCLIENT_CONNINFOPUBLICKEYBITS_PID', 22);
define('SMTPCLIENT_CONNINFORESUMEDSESSION_PID', 23);
define('SMTPCLIENT_CONNINFOSECURECONNECTION_PID', 24);
define('SMTPCLIENT_CONNINFOSERVERAUTHENTICATED_PID', 25);
define('SMTPCLIENT_CONNINFOSIGNATUREALGORITHM_PID', 26);
define('SMTPCLIENT_CONNINFOSYMMETRICBLOCKSIZE_PID', 27);
define('SMTPCLIENT_CONNINFOSYMMETRICKEYBITS_PID', 28);
define('SMTPCLIENT_CONNINFOTOTALBYTESRECEIVED_PID', 29);
define('SMTPCLIENT_CONNINFOTOTALBYTESSENT_PID', 30);
define('SMTPCLIENT_CONNINFOVALIDATIONLOG_PID', 31);
define('SMTPCLIENT_CONNINFOVERSION_PID', 32);
define('SMTPCLIENT_DOMAIN_PID', 33);
define('SMTPCLIENT_EXTERNALCRYPTOCUSTOMPARAMS_PID', 34);
define('SMTPCLIENT_EXTERNALCRYPTODATA_PID', 35);
define('SMTPCLIENT_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 36);
define('SMTPCLIENT_EXTERNALCRYPTOHASHALGORITHM_PID', 37);
define('SMTPCLIENT_EXTERNALCRYPTOKEYID_PID', 38);
define('SMTPCLIENT_EXTERNALCRYPTOKEYSECRET_PID', 39);
define('SMTPCLIENT_EXTERNALCRYPTOMETHOD_PID', 40);
define('SMTPCLIENT_EXTERNALCRYPTOMODE_PID', 41);
define('SMTPCLIENT_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 42);
define('SMTPCLIENT_KNOWNCERTCOUNT_PID', 43);
define('SMTPCLIENT_KNOWNCERTBYTES_PID', 44);
define('SMTPCLIENT_KNOWNCERTHANDLE_PID', 45);
define('SMTPCLIENT_KNOWNCRLCOUNT_PID', 46);
define('SMTPCLIENT_KNOWNCRLBYTES_PID', 47);
define('SMTPCLIENT_KNOWNCRLHANDLE_PID', 48);
define('SMTPCLIENT_KNOWNOCSPCOUNT_PID', 49);
define('SMTPCLIENT_KNOWNOCSPBYTES_PID', 50);
define('SMTPCLIENT_KNOWNOCSPHANDLE_PID', 51);
define('SMTPCLIENT_MSGATTACHMENTCOUNT_PID', 52);
define('SMTPCLIENT_MSGBCC_PID', 53);
define('SMTPCLIENT_MSGCC_PID', 54);
define('SMTPCLIENT_MSGCOMMENTS_PID', 55);
define('SMTPCLIENT_MSGDATE_PID', 56);
define('SMTPCLIENT_MSGDELIVERYRECEIPT_PID', 57);
define('SMTPCLIENT_MSGFROM_PID', 58);
define('SMTPCLIENT_MSGHTMLTEXT_PID', 59);
define('SMTPCLIENT_MSGID_PID', 60);
define('SMTPCLIENT_MSGINREPLYTO_PID', 61);
define('SMTPCLIENT_MSGKEYWORDS_PID', 62);
define('SMTPCLIENT_MSGMAILER_PID', 63);
define('SMTPCLIENT_MSGPLAINTEXT_PID', 64);
define('SMTPCLIENT_MSGPRIORITY_PID', 65);
define('SMTPCLIENT_MSGREADRECEIPT_PID', 66);
define('SMTPCLIENT_MSGREFERENCES_PID', 67);
define('SMTPCLIENT_MSGREPLYTO_PID', 68);
define('SMTPCLIENT_MSGRETURNPATH_PID', 69);
define('SMTPCLIENT_MSGSENDER_PID', 70);
define('SMTPCLIENT_MSGSENDTO_PID', 71);
define('SMTPCLIENT_MSGSUBJECT_PID', 72);
define('SMTPCLIENT_PASSWORD_PID', 73);
define('SMTPCLIENT_PROXYADDRESS_PID', 74);
define('SMTPCLIENT_PROXYAUTHENTICATION_PID', 75);
define('SMTPCLIENT_PROXYPASSWORD_PID', 76);
define('SMTPCLIENT_PROXYPORT_PID', 77);
define('SMTPCLIENT_PROXYPROXYTYPE_PID', 78);
define('SMTPCLIENT_PROXYREQUESTHEADERS_PID', 79);
define('SMTPCLIENT_PROXYRESPONSEBODY_PID', 80);
define('SMTPCLIENT_PROXYRESPONSEHEADERS_PID', 81);
define('SMTPCLIENT_PROXYUSEIPV6_PID', 82);
define('SMTPCLIENT_PROXYUSEPROXY_PID', 83);
define('SMTPCLIENT_PROXYUSERNAME_PID', 84);
define('SMTPCLIENT_SERVERCERTCOUNT_PID', 85);
define('SMTPCLIENT_SERVERCERTBYTES_PID', 86);
define('SMTPCLIENT_SERVERCERTCAKEYID_PID', 87);
define('SMTPCLIENT_SERVERCERTFINGERPRINT_PID', 88);
define('SMTPCLIENT_SERVERCERTHANDLE_PID', 89);
define('SMTPCLIENT_SERVERCERTISSUER_PID', 90);
define('SMTPCLIENT_SERVERCERTISSUERRDN_PID', 91);
define('SMTPCLIENT_SERVERCERTKEYALGORITHM_PID', 92);
define('SMTPCLIENT_SERVERCERTKEYBITS_PID', 93);
define('SMTPCLIENT_SERVERCERTKEYFINGERPRINT_PID', 94);
define('SMTPCLIENT_SERVERCERTKEYUSAGE_PID', 95);
define('SMTPCLIENT_SERVERCERTPUBLICKEYBYTES_PID', 96);
define('SMTPCLIENT_SERVERCERTSELFSIGNED_PID', 97);
define('SMTPCLIENT_SERVERCERTSERIALNUMBER_PID', 98);
define('SMTPCLIENT_SERVERCERTSIGALGORITHM_PID', 99);
define('SMTPCLIENT_SERVERCERTSUBJECT_PID', 100);
define('SMTPCLIENT_SERVERCERTSUBJECTKEYID_PID', 101);
define('SMTPCLIENT_SERVERCERTSUBJECTRDN_PID', 102);
define('SMTPCLIENT_SERVERCERTVALIDFROM_PID', 103);
define('SMTPCLIENT_SERVERCERTVALIDTO_PID', 104);
define('SMTPCLIENT_SERVERINFOAUTHLOGINSUPPORTED_PID', 105);
define('SMTPCLIENT_SERVERINFOAUTHPLAINSUPPORTED_PID', 106);
define('SMTPCLIENT_SERVERINFOAVAILABLE_PID', 107);
define('SMTPCLIENT_SERVERINFOBINARYSUPPORTED_PID', 108);
define('SMTPCLIENT_SERVERINFOCHUNKINGSUPPORTED_PID', 109);
define('SMTPCLIENT_SERVERINFODSNSUPPORTED_PID', 110);
define('SMTPCLIENT_SERVERINFOMAXMESSAGESIZE_PID', 111);
define('SMTPCLIENT_SERVERINFOSASLSUPPORTED_PID', 112);
define('SMTPCLIENT_SERVERINFOSIZESUPPORTED_PID', 113);
define('SMTPCLIENT_SERVERINFOSTATUSCODESSUPPORTED_PID', 114);
define('SMTPCLIENT_SOCKETDNSMODE_PID', 115);
define('SMTPCLIENT_SOCKETDNSPORT_PID', 116);
define('SMTPCLIENT_SOCKETDNSQUERYTIMEOUT_PID', 117);
define('SMTPCLIENT_SOCKETDNSSERVERS_PID', 118);
define('SMTPCLIENT_SOCKETDNSTOTALTIMEOUT_PID', 119);
define('SMTPCLIENT_SOCKETINCOMINGSPEEDLIMIT_PID', 120);
define('SMTPCLIENT_SOCKETLOCALADDRESS_PID', 121);
define('SMTPCLIENT_SOCKETLOCALPORT_PID', 122);
define('SMTPCLIENT_SOCKETOUTGOINGSPEEDLIMIT_PID', 123);
define('SMTPCLIENT_SOCKETTIMEOUT_PID', 124);
define('SMTPCLIENT_SOCKETUSEIPV6_PID', 125);
define('SMTPCLIENT_TLSAUTOVALIDATECERTIFICATES_PID', 126);
define('SMTPCLIENT_TLSBASECONFIGURATION_PID', 127);
define('SMTPCLIENT_TLSCIPHERSUITES_PID', 128);
define('SMTPCLIENT_TLSECCURVES_PID', 129);
define('SMTPCLIENT_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 130);
define('SMTPCLIENT_TLSPRESHAREDIDENTITY_PID', 131);
define('SMTPCLIENT_TLSPRESHAREDKEY_PID', 132);
define('SMTPCLIENT_TLSPRESHAREDKEYCIPHERSUITE_PID', 133);
define('SMTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 134);
define('SMTPCLIENT_TLSREVOCATIONCHECK_PID', 135);
define('SMTPCLIENT_TLSSSLOPTIONS_PID', 136);
define('SMTPCLIENT_TLSTLSMODE_PID', 137);
define('SMTPCLIENT_TLSUSEEXTENDEDMASTERSECRET_PID', 138);
define('SMTPCLIENT_TLSUSESESSIONRESUMPTION_PID', 139);
define('SMTPCLIENT_TLSVERSIONS_PID', 140);
define('SMTPCLIENT_TRUSTEDCERTCOUNT_PID', 141);
define('SMTPCLIENT_TRUSTEDCERTBYTES_PID', 142);
define('SMTPCLIENT_TRUSTEDCERTHANDLE_PID', 143);
define('SMTPCLIENT_USERNAME_PID', 144);


/*
 * SMTPClient Enums
 */

define('SMTPCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID', 0);
define('SMTPCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('SMTPCLIENT_CONNINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('SMTPCLIENT_CONNINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('SMTPCLIENT_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('SMTPCLIENT_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('SMTPCLIENT_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('SMTPCLIENT_EXTERNALCRYPTOMODE_DISABLED', 1);
define('SMTPCLIENT_EXTERNALCRYPTOMODE_GENERIC', 2);

define('SMTPCLIENT_MSGPRIORITY_LOWEST', 0);
define('SMTPCLIENT_MSGPRIORITY_LOW', 1);
define('SMTPCLIENT_MSGPRIORITY_NORMAL', 2);
define('SMTPCLIENT_MSGPRIORITY_HIGH', 3);
define('SMTPCLIENT_MSGPRIORITY_HIGHEST', 4);

define('SMTPCLIENT_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('SMTPCLIENT_PROXYAUTHENTICATION_BASIC', 1);
define('SMTPCLIENT_PROXYAUTHENTICATION_DIGEST', 2);
define('SMTPCLIENT_PROXYAUTHENTICATION_NTLM', 3);

define('SMTPCLIENT_PROXYPROXYTYPE_NONE', 0);
define('SMTPCLIENT_PROXYPROXYTYPE_SOCKS_4', 1);
define('SMTPCLIENT_PROXYPROXYTYPE_SOCKS_5', 2);
define('SMTPCLIENT_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('SMTPCLIENT_PROXYPROXYTYPE_HTTP', 4);

define('SMTPCLIENT_SOCKETDNSMODE_AUTO', 0);
define('SMTPCLIENT_SOCKETDNSMODE_PLATFORM', 1);
define('SMTPCLIENT_SOCKETDNSMODE_OWN', 2);
define('SMTPCLIENT_SOCKETDNSMODE_OWN_SECURE', 3);

define('SMTPCLIENT_TLSBASECONFIGURATION_DEFAULT', 0);
define('SMTPCLIENT_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('SMTPCLIENT_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('SMTPCLIENT_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('SMTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('SMTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('SMTPCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('SMTPCLIENT_TLSREVOCATIONCHECK_NONE', 0);
define('SMTPCLIENT_TLSREVOCATIONCHECK_AUTO', 1);
define('SMTPCLIENT_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('SMTPCLIENT_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('SMTPCLIENT_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('SMTPCLIENT_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('SMTPCLIENT_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('SMTPCLIENT_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('SMTPCLIENT_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('SMTPCLIENT_TLSTLSMODE_DEFAULT', 0);
define('SMTPCLIENT_TLSTLSMODE_NO_TLS', 1);
define('SMTPCLIENT_TLSTLSMODE_EXPLICIT_TLS', 2);
define('SMTPCLIENT_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * SMTPClient Methods
 */

define('SMTPCLIENT_CONFIG_MID', 2);
define('SMTPCLIENT_CONNECT_MID', 3);
define('SMTPCLIENT_DISCONNECT_MID', 4);
define('SMTPCLIENT_SENDFILE_MID', 5);
define('SMTPCLIENT_SENDMESSAGE_MID', 6);


/*
 * SMTPClient Events
 */
  
define('SMTPCLIENT_BEFOREAUTH_EID', 1);
define('SMTPCLIENT_CERTIFICATEVALIDATE_EID', 2);
define('SMTPCLIENT_COMMAND_EID', 3);
define('SMTPCLIENT_COMMANDDATA_EID', 4);
define('SMTPCLIENT_COMMANDREPLY_EID', 5);
define('SMTPCLIENT_ERROR_EID', 6);
define('SMTPCLIENT_EXTERNALSIGN_EID', 7);
define('SMTPCLIENT_PROGRESS_EID', 8);

/*
 * SOAPQuickSigner Properties
 */

define('SOAPQUICKSIGNER_CANONICALIZATIONMETHOD_PID', 1);
define('SOAPQUICKSIGNER_EMBEDCERTIFICATEMETHOD_PID', 2);
define('SOAPQUICKSIGNER_ENCODING_PID', 3);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 4);
define('SOAPQUICKSIGNER_EXTERNALCRYPTODATA_PID', 5);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 6);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 7);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOKEYID_PID', 8);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOKEYSECRET_PID', 9);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOMETHOD_PID', 10);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOMODE_PID', 11);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 12);
define('SOAPQUICKSIGNER_HASHALGORITHM_PID', 13);
define('SOAPQUICKSIGNER_INPUTFILE_PID', 14);
define('SOAPQUICKSIGNER_OUTPUTFILE_PID', 15);
define('SOAPQUICKSIGNER_REFERENCECOUNT_PID', 16);
define('SOAPQUICKSIGNER_REFERENCEAUTOGENERATEELEMENTID_PID', 17);
define('SOAPQUICKSIGNER_REFERENCECANONICALIZATIONMETHOD_PID', 18);
define('SOAPQUICKSIGNER_REFERENCECUSTOMELEMENTID_PID', 19);
define('SOAPQUICKSIGNER_REFERENCEDIGESTVALUE_PID', 20);
define('SOAPQUICKSIGNER_REFERENCEHANDLE_PID', 21);
define('SOAPQUICKSIGNER_REFERENCEHASHALGORITHM_PID', 22);
define('SOAPQUICKSIGNER_REFERENCEHASURI_PID', 23);
define('SOAPQUICKSIGNER_REFERENCEID_PID', 24);
define('SOAPQUICKSIGNER_REFERENCEINCLUSIVENAMESPACESPREFIXLIST_PID', 25);
define('SOAPQUICKSIGNER_REFERENCEREFERENCETYPE_PID', 26);
define('SOAPQUICKSIGNER_REFERENCETARGETDATA_PID', 27);
define('SOAPQUICKSIGNER_REFERENCETARGETXMLELEMENT_PID', 28);
define('SOAPQUICKSIGNER_REFERENCEURI_PID', 29);
define('SOAPQUICKSIGNER_REFERENCEUSEBASE64TRANSFORM_PID', 30);
define('SOAPQUICKSIGNER_REFERENCEUSEENVELOPEDSIGNATURETRANSFORM_PID', 31);
define('SOAPQUICKSIGNER_REFERENCEUSEXPATHTRANSFORM_PID', 32);
define('SOAPQUICKSIGNER_REFERENCEXPATHEXPRESSION_PID', 33);
define('SOAPQUICKSIGNER_REFERENCEXPATHPREFIXLIST_PID', 34);
define('SOAPQUICKSIGNER_SIGNATURETYPE_PID', 35);
define('SOAPQUICKSIGNER_SIGNINGCERTBYTES_PID', 36);
define('SOAPQUICKSIGNER_SIGNINGCERTHANDLE_PID', 37);
define('SOAPQUICKSIGNER_SIGNINGCHAINCOUNT_PID', 38);
define('SOAPQUICKSIGNER_SIGNINGCHAINBYTES_PID', 39);
define('SOAPQUICKSIGNER_SIGNINGCHAINHANDLE_PID', 40);
define('SOAPQUICKSIGNER_NAMESPACECOUNT_PID', 41);
define('SOAPQUICKSIGNER_NAMESPACEPREFIX_PID', 42);
define('SOAPQUICKSIGNER_NAMESPACEURI_PID', 43);


/*
 * SOAPQuickSigner Enums
 */

define('SOAPQUICKSIGNER_CANONICALIZATIONMETHOD_NONE', 0);
define('SOAPQUICKSIGNER_CANONICALIZATIONMETHOD_CANON', 1);
define('SOAPQUICKSIGNER_CANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('SOAPQUICKSIGNER_CANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('SOAPQUICKSIGNER_CANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('SOAPQUICKSIGNER_CANONICALIZATIONMETHOD_MIN_CANON', 5);
define('SOAPQUICKSIGNER_CANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('SOAPQUICKSIGNER_CANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('SOAPQUICKSIGNER_EMBEDCERTIFICATEMETHOD_IN_SIGNATURE', 0);
define('SOAPQUICKSIGNER_EMBEDCERTIFICATEMETHOD_IN_BINARY_SECURITY_TOKEN', 1);
define('SOAPQUICKSIGNER_EMBEDCERTIFICATEMETHOD_IN_SIGNED_BINARY_SECURITY_TOKEN', 2);
define('SOAPQUICKSIGNER_EMBEDCERTIFICATEMETHOD_IN_BINARY_SECURITY_TOKEN_AND_SIGNATURE', 3);
define('SOAPQUICKSIGNER_EMBEDCERTIFICATEMETHOD_NONE', 4);

define('SOAPQUICKSIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('SOAPQUICKSIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('SOAPQUICKSIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('SOAPQUICKSIGNER_REFERENCECANONICALIZATIONMETHOD_NONE', 0);
define('SOAPQUICKSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON', 1);
define('SOAPQUICKSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('SOAPQUICKSIGNER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('SOAPQUICKSIGNER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('SOAPQUICKSIGNER_REFERENCECANONICALIZATIONMETHOD_MIN_CANON', 5);
define('SOAPQUICKSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('SOAPQUICKSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('SOAPQUICKSIGNER_SIGNATURETYPE_UNKNOWN', 0);
define('SOAPQUICKSIGNER_SIGNATURETYPE_WSSSIGNATURE', 1);
define('SOAPQUICKSIGNER_SIGNATURETYPE_SOAPSIGNATURE', 2);



/*
 * SOAPQuickSigner Methods
 */

define('SOAPQUICKSIGNER_ADDBODYREFERENCE_MID', 2);
define('SOAPQUICKSIGNER_ADDDATAREFERENCE_MID', 3);
define('SOAPQUICKSIGNER_ADDREFERENCE_MID', 4);
define('SOAPQUICKSIGNER_CONFIG_MID', 5);
define('SOAPQUICKSIGNER_EXTRACTASYNCDATA_MID', 6);
define('SOAPQUICKSIGNER_SIGN_MID', 7);
define('SOAPQUICKSIGNER_SIGNASYNCBEGIN_MID', 8);
define('SOAPQUICKSIGNER_SIGNASYNCEND_MID', 9);
define('SOAPQUICKSIGNER_SIGNEXTERNAL_MID', 10);


/*
 * SOAPQuickSigner Events
 */
  
define('SOAPQUICKSIGNER_ERROR_EID', 1);
define('SOAPQUICKSIGNER_EXTERNALSIGN_EID', 2);
define('SOAPQUICKSIGNER_FORMATELEMENT_EID', 3);
define('SOAPQUICKSIGNER_FORMATTEXT_EID', 4);
define('SOAPQUICKSIGNER_RESOLVEREFERENCE_EID', 5);

/*
 * SOAPSigner Properties
 */

define('SOAPSIGNER_BLOCKEDCERTCOUNT_PID', 1);
define('SOAPSIGNER_BLOCKEDCERTBYTES_PID', 2);
define('SOAPSIGNER_BLOCKEDCERTHANDLE_PID', 3);
define('SOAPSIGNER_CANONICALIZATIONMETHOD_PID', 4);
define('SOAPSIGNER_CHAINVALIDATIONDETAILS_PID', 5);
define('SOAPSIGNER_CHAINVALIDATIONRESULT_PID', 6);
define('SOAPSIGNER_CLAIMEDSIGNINGTIME_PID', 7);
define('SOAPSIGNER_EMBEDCERTIFICATEMETHOD_PID', 8);
define('SOAPSIGNER_ENABLEXADES_PID', 9);
define('SOAPSIGNER_ENCODING_PID', 10);
define('SOAPSIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 11);
define('SOAPSIGNER_EXTERNALCRYPTODATA_PID', 12);
define('SOAPSIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 13);
define('SOAPSIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 14);
define('SOAPSIGNER_EXTERNALCRYPTOKEYID_PID', 15);
define('SOAPSIGNER_EXTERNALCRYPTOKEYSECRET_PID', 16);
define('SOAPSIGNER_EXTERNALCRYPTOMETHOD_PID', 17);
define('SOAPSIGNER_EXTERNALCRYPTOMODE_PID', 18);
define('SOAPSIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 19);
define('SOAPSIGNER_HASHALGORITHM_PID', 20);
define('SOAPSIGNER_IGNORECHAINVALIDATIONERRORS_PID', 21);
define('SOAPSIGNER_INPUTFILE_PID', 22);
define('SOAPSIGNER_KNOWNCERTCOUNT_PID', 23);
define('SOAPSIGNER_KNOWNCERTBYTES_PID', 24);
define('SOAPSIGNER_KNOWNCERTHANDLE_PID', 25);
define('SOAPSIGNER_KNOWNCRLCOUNT_PID', 26);
define('SOAPSIGNER_KNOWNCRLBYTES_PID', 27);
define('SOAPSIGNER_KNOWNCRLHANDLE_PID', 28);
define('SOAPSIGNER_KNOWNOCSPCOUNT_PID', 29);
define('SOAPSIGNER_KNOWNOCSPBYTES_PID', 30);
define('SOAPSIGNER_KNOWNOCSPHANDLE_PID', 31);
define('SOAPSIGNER_OFFLINEMODE_PID', 32);
define('SOAPSIGNER_OUTPUTFILE_PID', 33);
define('SOAPSIGNER_PROXYADDRESS_PID', 34);
define('SOAPSIGNER_PROXYAUTHENTICATION_PID', 35);
define('SOAPSIGNER_PROXYPASSWORD_PID', 36);
define('SOAPSIGNER_PROXYPORT_PID', 37);
define('SOAPSIGNER_PROXYPROXYTYPE_PID', 38);
define('SOAPSIGNER_PROXYREQUESTHEADERS_PID', 39);
define('SOAPSIGNER_PROXYRESPONSEBODY_PID', 40);
define('SOAPSIGNER_PROXYRESPONSEHEADERS_PID', 41);
define('SOAPSIGNER_PROXYUSEIPV6_PID', 42);
define('SOAPSIGNER_PROXYUSEPROXY_PID', 43);
define('SOAPSIGNER_PROXYUSERNAME_PID', 44);
define('SOAPSIGNER_REFERENCECOUNT_PID', 45);
define('SOAPSIGNER_REFERENCEAUTOGENERATEELEMENTID_PID', 46);
define('SOAPSIGNER_REFERENCECANONICALIZATIONMETHOD_PID', 47);
define('SOAPSIGNER_REFERENCECUSTOMELEMENTID_PID', 48);
define('SOAPSIGNER_REFERENCEDIGESTVALUE_PID', 49);
define('SOAPSIGNER_REFERENCEHANDLE_PID', 50);
define('SOAPSIGNER_REFERENCEHASHALGORITHM_PID', 51);
define('SOAPSIGNER_REFERENCEHASURI_PID', 52);
define('SOAPSIGNER_REFERENCEID_PID', 53);
define('SOAPSIGNER_REFERENCEINCLUSIVENAMESPACESPREFIXLIST_PID', 54);
define('SOAPSIGNER_REFERENCEREFERENCETYPE_PID', 55);
define('SOAPSIGNER_REFERENCETARGETDATA_PID', 56);
define('SOAPSIGNER_REFERENCETARGETXMLELEMENT_PID', 57);
define('SOAPSIGNER_REFERENCEURI_PID', 58);
define('SOAPSIGNER_REFERENCEUSEBASE64TRANSFORM_PID', 59);
define('SOAPSIGNER_REFERENCEUSEENVELOPEDSIGNATURETRANSFORM_PID', 60);
define('SOAPSIGNER_REFERENCEUSEXPATHTRANSFORM_PID', 61);
define('SOAPSIGNER_REFERENCEXPATHEXPRESSION_PID', 62);
define('SOAPSIGNER_REFERENCEXPATHPREFIXLIST_PID', 63);
define('SOAPSIGNER_REVOCATIONCHECK_PID', 64);
define('SOAPSIGNER_SIGNATUREINDEX_PID', 65);
define('SOAPSIGNER_SIGNATURETYPE_PID', 66);
define('SOAPSIGNER_SIGNINGCERTBYTES_PID', 67);
define('SOAPSIGNER_SIGNINGCERTHANDLE_PID', 68);
define('SOAPSIGNER_SIGNINGCHAINCOUNT_PID', 69);
define('SOAPSIGNER_SIGNINGCHAINBYTES_PID', 70);
define('SOAPSIGNER_SIGNINGCHAINHANDLE_PID', 71);
define('SOAPSIGNER_SOCKETDNSMODE_PID', 72);
define('SOAPSIGNER_SOCKETDNSPORT_PID', 73);
define('SOAPSIGNER_SOCKETDNSQUERYTIMEOUT_PID', 74);
define('SOAPSIGNER_SOCKETDNSSERVERS_PID', 75);
define('SOAPSIGNER_SOCKETDNSTOTALTIMEOUT_PID', 76);
define('SOAPSIGNER_SOCKETINCOMINGSPEEDLIMIT_PID', 77);
define('SOAPSIGNER_SOCKETLOCALADDRESS_PID', 78);
define('SOAPSIGNER_SOCKETLOCALPORT_PID', 79);
define('SOAPSIGNER_SOCKETOUTGOINGSPEEDLIMIT_PID', 80);
define('SOAPSIGNER_SOCKETTIMEOUT_PID', 81);
define('SOAPSIGNER_SOCKETUSEIPV6_PID', 82);
define('SOAPSIGNER_TIMESTAMPSERVER_PID', 83);
define('SOAPSIGNER_TLSAUTOVALIDATECERTIFICATES_PID', 84);
define('SOAPSIGNER_TLSBASECONFIGURATION_PID', 85);
define('SOAPSIGNER_TLSCIPHERSUITES_PID', 86);
define('SOAPSIGNER_TLSECCURVES_PID', 87);
define('SOAPSIGNER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 88);
define('SOAPSIGNER_TLSPRESHAREDIDENTITY_PID', 89);
define('SOAPSIGNER_TLSPRESHAREDKEY_PID', 90);
define('SOAPSIGNER_TLSPRESHAREDKEYCIPHERSUITE_PID', 91);
define('SOAPSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 92);
define('SOAPSIGNER_TLSREVOCATIONCHECK_PID', 93);
define('SOAPSIGNER_TLSSSLOPTIONS_PID', 94);
define('SOAPSIGNER_TLSTLSMODE_PID', 95);
define('SOAPSIGNER_TLSUSEEXTENDEDMASTERSECRET_PID', 96);
define('SOAPSIGNER_TLSUSESESSIONRESUMPTION_PID', 97);
define('SOAPSIGNER_TLSVERSIONS_PID', 98);
define('SOAPSIGNER_TRUSTEDCERTCOUNT_PID', 99);
define('SOAPSIGNER_TRUSTEDCERTBYTES_PID', 100);
define('SOAPSIGNER_TRUSTEDCERTHANDLE_PID', 101);
define('SOAPSIGNER_VALIDATIONLOG_PID', 102);
define('SOAPSIGNER_XADESFORM_PID', 103);
define('SOAPSIGNER_XADESVERSION_PID', 104);
define('SOAPSIGNER_NAMESPACECOUNT_PID', 105);
define('SOAPSIGNER_NAMESPACEPREFIX_PID', 106);
define('SOAPSIGNER_NAMESPACEURI_PID', 107);


/*
 * SOAPSigner Enums
 */

define('SOAPSIGNER_CANONICALIZATIONMETHOD_NONE', 0);
define('SOAPSIGNER_CANONICALIZATIONMETHOD_CANON', 1);
define('SOAPSIGNER_CANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('SOAPSIGNER_CANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('SOAPSIGNER_CANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('SOAPSIGNER_CANONICALIZATIONMETHOD_MIN_CANON', 5);
define('SOAPSIGNER_CANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('SOAPSIGNER_CANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('SOAPSIGNER_CHAINVALIDATIONRESULT_VALID', 0);
define('SOAPSIGNER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('SOAPSIGNER_CHAINVALIDATIONRESULT_INVALID', 2);
define('SOAPSIGNER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('SOAPSIGNER_EMBEDCERTIFICATEMETHOD_IN_SIGNATURE', 0);
define('SOAPSIGNER_EMBEDCERTIFICATEMETHOD_IN_BINARY_SECURITY_TOKEN', 1);
define('SOAPSIGNER_EMBEDCERTIFICATEMETHOD_IN_SIGNED_BINARY_SECURITY_TOKEN', 2);
define('SOAPSIGNER_EMBEDCERTIFICATEMETHOD_IN_BINARY_SECURITY_TOKEN_AND_SIGNATURE', 3);
define('SOAPSIGNER_EMBEDCERTIFICATEMETHOD_NONE', 4);

define('SOAPSIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('SOAPSIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('SOAPSIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('SOAPSIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('SOAPSIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('SOAPSIGNER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('SOAPSIGNER_PROXYAUTHENTICATION_BASIC', 1);
define('SOAPSIGNER_PROXYAUTHENTICATION_DIGEST', 2);
define('SOAPSIGNER_PROXYAUTHENTICATION_NTLM', 3);

define('SOAPSIGNER_PROXYPROXYTYPE_NONE', 0);
define('SOAPSIGNER_PROXYPROXYTYPE_SOCKS_4', 1);
define('SOAPSIGNER_PROXYPROXYTYPE_SOCKS_5', 2);
define('SOAPSIGNER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('SOAPSIGNER_PROXYPROXYTYPE_HTTP', 4);

define('SOAPSIGNER_REFERENCECANONICALIZATIONMETHOD_NONE', 0);
define('SOAPSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON', 1);
define('SOAPSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('SOAPSIGNER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('SOAPSIGNER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('SOAPSIGNER_REFERENCECANONICALIZATIONMETHOD_MIN_CANON', 5);
define('SOAPSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('SOAPSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('SOAPSIGNER_REVOCATIONCHECK_NONE', 0);
define('SOAPSIGNER_REVOCATIONCHECK_AUTO', 1);
define('SOAPSIGNER_REVOCATIONCHECK_ALL_CRL', 2);
define('SOAPSIGNER_REVOCATIONCHECK_ALL_OCSP', 3);
define('SOAPSIGNER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('SOAPSIGNER_REVOCATIONCHECK_ANY_CRL', 5);
define('SOAPSIGNER_REVOCATIONCHECK_ANY_OCSP', 6);
define('SOAPSIGNER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('SOAPSIGNER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('SOAPSIGNER_SIGNATURETYPE_UNKNOWN', 0);
define('SOAPSIGNER_SIGNATURETYPE_WSSSIGNATURE', 1);
define('SOAPSIGNER_SIGNATURETYPE_SOAPSIGNATURE', 2);

define('SOAPSIGNER_SOCKETDNSMODE_AUTO', 0);
define('SOAPSIGNER_SOCKETDNSMODE_PLATFORM', 1);
define('SOAPSIGNER_SOCKETDNSMODE_OWN', 2);
define('SOAPSIGNER_SOCKETDNSMODE_OWN_SECURE', 3);

define('SOAPSIGNER_TLSBASECONFIGURATION_DEFAULT', 0);
define('SOAPSIGNER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('SOAPSIGNER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('SOAPSIGNER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('SOAPSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('SOAPSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('SOAPSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('SOAPSIGNER_TLSREVOCATIONCHECK_NONE', 0);
define('SOAPSIGNER_TLSREVOCATIONCHECK_AUTO', 1);
define('SOAPSIGNER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('SOAPSIGNER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('SOAPSIGNER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('SOAPSIGNER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('SOAPSIGNER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('SOAPSIGNER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('SOAPSIGNER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('SOAPSIGNER_TLSTLSMODE_DEFAULT', 0);
define('SOAPSIGNER_TLSTLSMODE_NO_TLS', 1);
define('SOAPSIGNER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('SOAPSIGNER_TLSTLSMODE_IMPLICIT_TLS', 3);

define('SOAPSIGNER_XADESFORM_UNKNOWN', 0);
define('SOAPSIGNER_XADESFORM_BASIC', 1);
define('SOAPSIGNER_XADESFORM_BES', 2);
define('SOAPSIGNER_XADESFORM_EPES', 3);
define('SOAPSIGNER_XADESFORM_T', 4);
define('SOAPSIGNER_XADESFORM_C', 5);
define('SOAPSIGNER_XADESFORM_X', 6);
define('SOAPSIGNER_XADESFORM_XL', 7);
define('SOAPSIGNER_XADESFORM_A', 8);
define('SOAPSIGNER_XADESFORM_EXTENDED_BES', 9);
define('SOAPSIGNER_XADESFORM_EXTENDED_EPES', 10);
define('SOAPSIGNER_XADESFORM_EXTENDED_T', 11);
define('SOAPSIGNER_XADESFORM_EXTENDED_C', 12);
define('SOAPSIGNER_XADESFORM_EXTENDED_X', 13);
define('SOAPSIGNER_XADESFORM_EXTENDED_XLONG', 14);
define('SOAPSIGNER_XADESFORM_EXTENDED_XL', 15);
define('SOAPSIGNER_XADESFORM_EXTENDED_A', 16);

define('SOAPSIGNER_XADESVERSION_UNKNOWN', 0);
define('SOAPSIGNER_XADESVERSION_111', 1);
define('SOAPSIGNER_XADESVERSION_122', 2);
define('SOAPSIGNER_XADESVERSION_132', 3);
define('SOAPSIGNER_XADESVERSION_141', 4);



/*
 * SOAPSigner Methods
 */

define('SOAPSIGNER_ADDBODYREFERENCE_MID', 2);
define('SOAPSIGNER_ADDDATAREFERENCE_MID', 3);
define('SOAPSIGNER_ADDREFERENCE_MID', 4);
define('SOAPSIGNER_CONFIG_MID', 5);
define('SOAPSIGNER_EXTRACTASYNCDATA_MID', 6);
define('SOAPSIGNER_SIGN_MID', 7);
define('SOAPSIGNER_SIGNASYNCBEGIN_MID', 8);
define('SOAPSIGNER_SIGNASYNCEND_MID', 9);
define('SOAPSIGNER_SIGNEXTERNAL_MID', 10);
define('SOAPSIGNER_TIMESTAMP_MID', 11);
define('SOAPSIGNER_UPGRADE_MID', 12);


/*
 * SOAPSigner Events
 */
  
define('SOAPSIGNER_ERROR_EID', 1);
define('SOAPSIGNER_EXTERNALSIGN_EID', 2);
define('SOAPSIGNER_FORMATELEMENT_EID', 3);
define('SOAPSIGNER_FORMATTEXT_EID', 4);
define('SOAPSIGNER_RESOLVEREFERENCE_EID', 5);
define('SOAPSIGNER_STORECERTIFICATE_EID', 6);
define('SOAPSIGNER_STORECRL_EID', 7);
define('SOAPSIGNER_STOREOCSPRESPONSE_EID', 8);

/*
 * SOAPVerifier Properties
 */

define('SOAPVERIFIER_ALLSIGNATURESVALID_PID', 1);
define('SOAPVERIFIER_BLOCKEDCERTCOUNT_PID', 2);
define('SOAPVERIFIER_BLOCKEDCERTBYTES_PID', 3);
define('SOAPVERIFIER_BLOCKEDCERTHANDLE_PID', 4);
define('SOAPVERIFIER_CANONICALIZATIONMETHOD_PID', 5);
define('SOAPVERIFIER_CERTCOUNT_PID', 6);
define('SOAPVERIFIER_CERTBYTES_PID', 7);
define('SOAPVERIFIER_CERTCA_PID', 8);
define('SOAPVERIFIER_CERTCAKEYID_PID', 9);
define('SOAPVERIFIER_CERTCRLDISTRIBUTIONPOINTS_PID', 10);
define('SOAPVERIFIER_CERTCURVE_PID', 11);
define('SOAPVERIFIER_CERTFINGERPRINT_PID', 12);
define('SOAPVERIFIER_CERTFRIENDLYNAME_PID', 13);
define('SOAPVERIFIER_CERTHANDLE_PID', 14);
define('SOAPVERIFIER_CERTHASHALGORITHM_PID', 15);
define('SOAPVERIFIER_CERTISSUER_PID', 16);
define('SOAPVERIFIER_CERTISSUERRDN_PID', 17);
define('SOAPVERIFIER_CERTKEYALGORITHM_PID', 18);
define('SOAPVERIFIER_CERTKEYBITS_PID', 19);
define('SOAPVERIFIER_CERTKEYFINGERPRINT_PID', 20);
define('SOAPVERIFIER_CERTKEYUSAGE_PID', 21);
define('SOAPVERIFIER_CERTKEYVALID_PID', 22);
define('SOAPVERIFIER_CERTOCSPLOCATIONS_PID', 23);
define('SOAPVERIFIER_CERTPOLICYIDS_PID', 24);
define('SOAPVERIFIER_CERTPUBLICKEYBYTES_PID', 25);
define('SOAPVERIFIER_CERTSELFSIGNED_PID', 26);
define('SOAPVERIFIER_CERTSERIALNUMBER_PID', 27);
define('SOAPVERIFIER_CERTSIGALGORITHM_PID', 28);
define('SOAPVERIFIER_CERTSUBJECT_PID', 29);
define('SOAPVERIFIER_CERTSUBJECTKEYID_PID', 30);
define('SOAPVERIFIER_CERTSUBJECTRDN_PID', 31);
define('SOAPVERIFIER_CERTVALIDFROM_PID', 32);
define('SOAPVERIFIER_CERTVALIDTO_PID', 33);
define('SOAPVERIFIER_CHAINVALIDATIONDETAILS_PID', 34);
define('SOAPVERIFIER_CHAINVALIDATIONRESULT_PID', 35);
define('SOAPVERIFIER_CLAIMEDSIGNINGTIME_PID', 36);
define('SOAPVERIFIER_CRLCOUNT_PID', 37);
define('SOAPVERIFIER_CRLBYTES_PID', 38);
define('SOAPVERIFIER_CRLHANDLE_PID', 39);
define('SOAPVERIFIER_CRLISSUER_PID', 40);
define('SOAPVERIFIER_CRLISSUERRDN_PID', 41);
define('SOAPVERIFIER_CRLLOCATION_PID', 42);
define('SOAPVERIFIER_CRLNEXTUPDATE_PID', 43);
define('SOAPVERIFIER_CRLTHISUPDATE_PID', 44);
define('SOAPVERIFIER_ENCODING_PID', 45);
define('SOAPVERIFIER_HASHALGORITHM_PID', 46);
define('SOAPVERIFIER_IGNORECHAINVALIDATIONERRORS_PID', 47);
define('SOAPVERIFIER_INPUTFILE_PID', 48);
define('SOAPVERIFIER_KNOWNCERTCOUNT_PID', 49);
define('SOAPVERIFIER_KNOWNCERTBYTES_PID', 50);
define('SOAPVERIFIER_KNOWNCERTHANDLE_PID', 51);
define('SOAPVERIFIER_KNOWNCRLCOUNT_PID', 52);
define('SOAPVERIFIER_KNOWNCRLBYTES_PID', 53);
define('SOAPVERIFIER_KNOWNCRLHANDLE_PID', 54);
define('SOAPVERIFIER_KNOWNOCSPCOUNT_PID', 55);
define('SOAPVERIFIER_KNOWNOCSPBYTES_PID', 56);
define('SOAPVERIFIER_KNOWNOCSPHANDLE_PID', 57);
define('SOAPVERIFIER_LASTARCHIVALTIME_PID', 58);
define('SOAPVERIFIER_OCSPCOUNT_PID', 59);
define('SOAPVERIFIER_OCSPBYTES_PID', 60);
define('SOAPVERIFIER_OCSPHANDLE_PID', 61);
define('SOAPVERIFIER_OCSPISSUER_PID', 62);
define('SOAPVERIFIER_OCSPISSUERRDN_PID', 63);
define('SOAPVERIFIER_OCSPLOCATION_PID', 64);
define('SOAPVERIFIER_OCSPPRODUCEDAT_PID', 65);
define('SOAPVERIFIER_OFFLINEMODE_PID', 66);
define('SOAPVERIFIER_OUTPUTFILE_PID', 67);
define('SOAPVERIFIER_PROXYADDRESS_PID', 68);
define('SOAPVERIFIER_PROXYAUTHENTICATION_PID', 69);
define('SOAPVERIFIER_PROXYPASSWORD_PID', 70);
define('SOAPVERIFIER_PROXYPORT_PID', 71);
define('SOAPVERIFIER_PROXYPROXYTYPE_PID', 72);
define('SOAPVERIFIER_PROXYREQUESTHEADERS_PID', 73);
define('SOAPVERIFIER_PROXYRESPONSEBODY_PID', 74);
define('SOAPVERIFIER_PROXYRESPONSEHEADERS_PID', 75);
define('SOAPVERIFIER_PROXYUSEIPV6_PID', 76);
define('SOAPVERIFIER_PROXYUSEPROXY_PID', 77);
define('SOAPVERIFIER_PROXYUSERNAME_PID', 78);
define('SOAPVERIFIER_QUALIFIED_PID', 79);
define('SOAPVERIFIER_REFERENCECOUNT_PID', 80);
define('SOAPVERIFIER_REFERENCEAUTOGENERATEELEMENTID_PID', 81);
define('SOAPVERIFIER_REFERENCECANONICALIZATIONMETHOD_PID', 82);
define('SOAPVERIFIER_REFERENCECUSTOMELEMENTID_PID', 83);
define('SOAPVERIFIER_REFERENCEDIGESTVALUE_PID', 84);
define('SOAPVERIFIER_REFERENCEHANDLE_PID', 85);
define('SOAPVERIFIER_REFERENCEHASHALGORITHM_PID', 86);
define('SOAPVERIFIER_REFERENCEHASURI_PID', 87);
define('SOAPVERIFIER_REFERENCEID_PID', 88);
define('SOAPVERIFIER_REFERENCEINCLUSIVENAMESPACESPREFIXLIST_PID', 89);
define('SOAPVERIFIER_REFERENCEREFERENCETYPE_PID', 90);
define('SOAPVERIFIER_REFERENCETARGETDATA_PID', 91);
define('SOAPVERIFIER_REFERENCETARGETXMLELEMENT_PID', 92);
define('SOAPVERIFIER_REFERENCEURI_PID', 93);
define('SOAPVERIFIER_REFERENCEUSEBASE64TRANSFORM_PID', 94);
define('SOAPVERIFIER_REFERENCEUSEENVELOPEDSIGNATURETRANSFORM_PID', 95);
define('SOAPVERIFIER_REFERENCEUSEXPATHTRANSFORM_PID', 96);
define('SOAPVERIFIER_REFERENCEXPATHEXPRESSION_PID', 97);
define('SOAPVERIFIER_REFERENCEXPATHPREFIXLIST_PID', 98);
define('SOAPVERIFIER_REVOCATIONCHECK_PID', 99);
define('SOAPVERIFIER_SIGNATUREINDEX_PID', 100);
define('SOAPVERIFIER_SIGNATURETYPE_PID', 101);
define('SOAPVERIFIER_SIGNATUREVALIDATIONRESULT_PID', 102);
define('SOAPVERIFIER_SIGNINGCERTBYTES_PID', 103);
define('SOAPVERIFIER_SIGNINGCERTCA_PID', 104);
define('SOAPVERIFIER_SIGNINGCERTCAKEYID_PID', 105);
define('SOAPVERIFIER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 106);
define('SOAPVERIFIER_SIGNINGCERTCURVE_PID', 107);
define('SOAPVERIFIER_SIGNINGCERTFINGERPRINT_PID', 108);
define('SOAPVERIFIER_SIGNINGCERTFRIENDLYNAME_PID', 109);
define('SOAPVERIFIER_SIGNINGCERTHANDLE_PID', 110);
define('SOAPVERIFIER_SIGNINGCERTHASHALGORITHM_PID', 111);
define('SOAPVERIFIER_SIGNINGCERTISSUER_PID', 112);
define('SOAPVERIFIER_SIGNINGCERTISSUERRDN_PID', 113);
define('SOAPVERIFIER_SIGNINGCERTKEYALGORITHM_PID', 114);
define('SOAPVERIFIER_SIGNINGCERTKEYBITS_PID', 115);
define('SOAPVERIFIER_SIGNINGCERTKEYFINGERPRINT_PID', 116);
define('SOAPVERIFIER_SIGNINGCERTKEYUSAGE_PID', 117);
define('SOAPVERIFIER_SIGNINGCERTKEYVALID_PID', 118);
define('SOAPVERIFIER_SIGNINGCERTOCSPLOCATIONS_PID', 119);
define('SOAPVERIFIER_SIGNINGCERTPOLICYIDS_PID', 120);
define('SOAPVERIFIER_SIGNINGCERTPUBLICKEYBYTES_PID', 121);
define('SOAPVERIFIER_SIGNINGCERTSELFSIGNED_PID', 122);
define('SOAPVERIFIER_SIGNINGCERTSERIALNUMBER_PID', 123);
define('SOAPVERIFIER_SIGNINGCERTSIGALGORITHM_PID', 124);
define('SOAPVERIFIER_SIGNINGCERTSUBJECT_PID', 125);
define('SOAPVERIFIER_SIGNINGCERTSUBJECTKEYID_PID', 126);
define('SOAPVERIFIER_SIGNINGCERTSUBJECTRDN_PID', 127);
define('SOAPVERIFIER_SIGNINGCERTVALIDFROM_PID', 128);
define('SOAPVERIFIER_SIGNINGCERTVALIDTO_PID', 129);
define('SOAPVERIFIER_SOCKETDNSMODE_PID', 130);
define('SOAPVERIFIER_SOCKETDNSPORT_PID', 131);
define('SOAPVERIFIER_SOCKETDNSQUERYTIMEOUT_PID', 132);
define('SOAPVERIFIER_SOCKETDNSSERVERS_PID', 133);
define('SOAPVERIFIER_SOCKETDNSTOTALTIMEOUT_PID', 134);
define('SOAPVERIFIER_SOCKETINCOMINGSPEEDLIMIT_PID', 135);
define('SOAPVERIFIER_SOCKETLOCALADDRESS_PID', 136);
define('SOAPVERIFIER_SOCKETLOCALPORT_PID', 137);
define('SOAPVERIFIER_SOCKETOUTGOINGSPEEDLIMIT_PID', 138);
define('SOAPVERIFIER_SOCKETTIMEOUT_PID', 139);
define('SOAPVERIFIER_SOCKETUSEIPV6_PID', 140);
define('SOAPVERIFIER_TIMESTAMPACCURACY_PID', 141);
define('SOAPVERIFIER_TIMESTAMPBYTES_PID', 142);
define('SOAPVERIFIER_TIMESTAMPCHAINVALIDATIONDETAILS_PID', 143);
define('SOAPVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_PID', 144);
define('SOAPVERIFIER_TIMESTAMPHASHALGORITHM_PID', 145);
define('SOAPVERIFIER_TIMESTAMPSERIALNUMBER_PID', 146);
define('SOAPVERIFIER_TIMESTAMPTIME_PID', 147);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_PID', 148);
define('SOAPVERIFIER_TIMESTAMPTSANAME_PID', 149);
define('SOAPVERIFIER_TIMESTAMPVALIDATIONLOG_PID', 150);
define('SOAPVERIFIER_TIMESTAMPVALIDATIONRESULT_PID', 151);
define('SOAPVERIFIER_TIMESTAMPED_PID', 152);
define('SOAPVERIFIER_TLSAUTOVALIDATECERTIFICATES_PID', 153);
define('SOAPVERIFIER_TLSBASECONFIGURATION_PID', 154);
define('SOAPVERIFIER_TLSCIPHERSUITES_PID', 155);
define('SOAPVERIFIER_TLSECCURVES_PID', 156);
define('SOAPVERIFIER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 157);
define('SOAPVERIFIER_TLSPRESHAREDIDENTITY_PID', 158);
define('SOAPVERIFIER_TLSPRESHAREDKEY_PID', 159);
define('SOAPVERIFIER_TLSPRESHAREDKEYCIPHERSUITE_PID', 160);
define('SOAPVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 161);
define('SOAPVERIFIER_TLSREVOCATIONCHECK_PID', 162);
define('SOAPVERIFIER_TLSSSLOPTIONS_PID', 163);
define('SOAPVERIFIER_TLSTLSMODE_PID', 164);
define('SOAPVERIFIER_TLSUSEEXTENDEDMASTERSECRET_PID', 165);
define('SOAPVERIFIER_TLSUSESESSIONRESUMPTION_PID', 166);
define('SOAPVERIFIER_TLSVERSIONS_PID', 167);
define('SOAPVERIFIER_TRUSTEDCERTCOUNT_PID', 168);
define('SOAPVERIFIER_TRUSTEDCERTBYTES_PID', 169);
define('SOAPVERIFIER_TRUSTEDCERTHANDLE_PID', 170);
define('SOAPVERIFIER_TSACERTBYTES_PID', 171);
define('SOAPVERIFIER_TSACERTCA_PID', 172);
define('SOAPVERIFIER_TSACERTCAKEYID_PID', 173);
define('SOAPVERIFIER_TSACERTCRLDISTRIBUTIONPOINTS_PID', 174);
define('SOAPVERIFIER_TSACERTCURVE_PID', 175);
define('SOAPVERIFIER_TSACERTFINGERPRINT_PID', 176);
define('SOAPVERIFIER_TSACERTFRIENDLYNAME_PID', 177);
define('SOAPVERIFIER_TSACERTHANDLE_PID', 178);
define('SOAPVERIFIER_TSACERTHASHALGORITHM_PID', 179);
define('SOAPVERIFIER_TSACERTISSUER_PID', 180);
define('SOAPVERIFIER_TSACERTISSUERRDN_PID', 181);
define('SOAPVERIFIER_TSACERTKEYALGORITHM_PID', 182);
define('SOAPVERIFIER_TSACERTKEYBITS_PID', 183);
define('SOAPVERIFIER_TSACERTKEYFINGERPRINT_PID', 184);
define('SOAPVERIFIER_TSACERTKEYUSAGE_PID', 185);
define('SOAPVERIFIER_TSACERTKEYVALID_PID', 186);
define('SOAPVERIFIER_TSACERTOCSPLOCATIONS_PID', 187);
define('SOAPVERIFIER_TSACERTPOLICYIDS_PID', 188);
define('SOAPVERIFIER_TSACERTPUBLICKEYBYTES_PID', 189);
define('SOAPVERIFIER_TSACERTSELFSIGNED_PID', 190);
define('SOAPVERIFIER_TSACERTSERIALNUMBER_PID', 191);
define('SOAPVERIFIER_TSACERTSIGALGORITHM_PID', 192);
define('SOAPVERIFIER_TSACERTSUBJECT_PID', 193);
define('SOAPVERIFIER_TSACERTSUBJECTKEYID_PID', 194);
define('SOAPVERIFIER_TSACERTSUBJECTRDN_PID', 195);
define('SOAPVERIFIER_TSACERTVALIDFROM_PID', 196);
define('SOAPVERIFIER_TSACERTVALIDTO_PID', 197);
define('SOAPVERIFIER_VALIDATEDSIGNINGTIME_PID', 198);
define('SOAPVERIFIER_VALIDATIONLOG_PID', 199);
define('SOAPVERIFIER_VALIDATIONMOMENT_PID', 200);
define('SOAPVERIFIER_XADESENABLED_PID', 201);
define('SOAPVERIFIER_XADESFORM_PID', 202);
define('SOAPVERIFIER_XADESVERSION_PID', 203);
define('SOAPVERIFIER_NAMESPACECOUNT_PID', 204);
define('SOAPVERIFIER_NAMESPACEPREFIX_PID', 205);
define('SOAPVERIFIER_NAMESPACEURI_PID', 206);


/*
 * SOAPVerifier Enums
 */

define('SOAPVERIFIER_CANONICALIZATIONMETHOD_NONE', 0);
define('SOAPVERIFIER_CANONICALIZATIONMETHOD_CANON', 1);
define('SOAPVERIFIER_CANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('SOAPVERIFIER_CANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('SOAPVERIFIER_CANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('SOAPVERIFIER_CANONICALIZATIONMETHOD_MIN_CANON', 5);
define('SOAPVERIFIER_CANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('SOAPVERIFIER_CANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('SOAPVERIFIER_CHAINVALIDATIONRESULT_VALID', 0);
define('SOAPVERIFIER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('SOAPVERIFIER_CHAINVALIDATIONRESULT_INVALID', 2);
define('SOAPVERIFIER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('SOAPVERIFIER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('SOAPVERIFIER_PROXYAUTHENTICATION_BASIC', 1);
define('SOAPVERIFIER_PROXYAUTHENTICATION_DIGEST', 2);
define('SOAPVERIFIER_PROXYAUTHENTICATION_NTLM', 3);

define('SOAPVERIFIER_PROXYPROXYTYPE_NONE', 0);
define('SOAPVERIFIER_PROXYPROXYTYPE_SOCKS_4', 1);
define('SOAPVERIFIER_PROXYPROXYTYPE_SOCKS_5', 2);
define('SOAPVERIFIER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('SOAPVERIFIER_PROXYPROXYTYPE_HTTP', 4);

define('SOAPVERIFIER_QUALIFIED_UNKNOWN', 0);
define('SOAPVERIFIER_QUALIFIED_NONE', 1);
define('SOAPVERIFIER_QUALIFIED_GRANTED', 2);
define('SOAPVERIFIER_QUALIFIED_WITHDRAWN', 3);
define('SOAPVERIFIER_QUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('SOAPVERIFIER_QUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('SOAPVERIFIER_QUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('SOAPVERIFIER_QUALIFIED_UNDER_SUPERVISION', 7);
define('SOAPVERIFIER_QUALIFIED_SUPERVISION_INCESSATION', 8);
define('SOAPVERIFIER_QUALIFIED_SUPERVISION_CEASED', 9);
define('SOAPVERIFIER_QUALIFIED_SUPERVISION_REVOKED', 10);
define('SOAPVERIFIER_QUALIFIED_ACCREDITED', 11);
define('SOAPVERIFIER_QUALIFIED_ACCREDITION_CEASED', 12);
define('SOAPVERIFIER_QUALIFIED_ACCREDITION_REVOKED', 13);

define('SOAPVERIFIER_REFERENCECANONICALIZATIONMETHOD_NONE', 0);
define('SOAPVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON', 1);
define('SOAPVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('SOAPVERIFIER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('SOAPVERIFIER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('SOAPVERIFIER_REFERENCECANONICALIZATIONMETHOD_MIN_CANON', 5);
define('SOAPVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('SOAPVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('SOAPVERIFIER_REVOCATIONCHECK_NONE', 0);
define('SOAPVERIFIER_REVOCATIONCHECK_AUTO', 1);
define('SOAPVERIFIER_REVOCATIONCHECK_ALL_CRL', 2);
define('SOAPVERIFIER_REVOCATIONCHECK_ALL_OCSP', 3);
define('SOAPVERIFIER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('SOAPVERIFIER_REVOCATIONCHECK_ANY_CRL', 5);
define('SOAPVERIFIER_REVOCATIONCHECK_ANY_OCSP', 6);
define('SOAPVERIFIER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('SOAPVERIFIER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('SOAPVERIFIER_SIGNATURETYPE_UNKNOWN', 0);
define('SOAPVERIFIER_SIGNATURETYPE_WSSSIGNATURE', 1);
define('SOAPVERIFIER_SIGNATURETYPE_SOAPSIGNATURE', 2);

define('SOAPVERIFIER_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('SOAPVERIFIER_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('SOAPVERIFIER_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('SOAPVERIFIER_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('SOAPVERIFIER_SIGNATUREVALIDATIONRESULT_FAILURE', 4);
define('SOAPVERIFIER_SIGNATUREVALIDATIONRESULT_REFERENCE_CORRUPTED', 5);

define('SOAPVERIFIER_SOCKETDNSMODE_AUTO', 0);
define('SOAPVERIFIER_SOCKETDNSMODE_PLATFORM', 1);
define('SOAPVERIFIER_SOCKETDNSMODE_OWN', 2);
define('SOAPVERIFIER_SOCKETDNSMODE_OWN_SECURE', 3);

define('SOAPVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID', 0);
define('SOAPVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('SOAPVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_INVALID', 2);
define('SOAPVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_UNKNOWN', 0);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_LEGACY', 1);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_TRUSTED', 2);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_GENERIC', 3);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_ESC', 4);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_CONTENT', 5);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_CERTS_AND_CRLS', 6);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE', 7);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_2', 8);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_3', 9);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_INDIVIDUAL_DATA_OBJECTS', 10);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_ALL_DATA_OBJECTS', 11);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIGNATURE', 12);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_REFS_ONLY', 13);
define('SOAPVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIG_AND_REFS', 14);

define('SOAPVERIFIER_TIMESTAMPVALIDATIONRESULT_VALID', 0);
define('SOAPVERIFIER_TIMESTAMPVALIDATIONRESULT_UNKNOWN', 1);
define('SOAPVERIFIER_TIMESTAMPVALIDATIONRESULT_CORRUPTED', 2);
define('SOAPVERIFIER_TIMESTAMPVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('SOAPVERIFIER_TIMESTAMPVALIDATIONRESULT_FAILURE', 4);

define('SOAPVERIFIER_TLSBASECONFIGURATION_DEFAULT', 0);
define('SOAPVERIFIER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('SOAPVERIFIER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('SOAPVERIFIER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('SOAPVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('SOAPVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('SOAPVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('SOAPVERIFIER_TLSREVOCATIONCHECK_NONE', 0);
define('SOAPVERIFIER_TLSREVOCATIONCHECK_AUTO', 1);
define('SOAPVERIFIER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('SOAPVERIFIER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('SOAPVERIFIER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('SOAPVERIFIER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('SOAPVERIFIER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('SOAPVERIFIER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('SOAPVERIFIER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('SOAPVERIFIER_TLSTLSMODE_DEFAULT', 0);
define('SOAPVERIFIER_TLSTLSMODE_NO_TLS', 1);
define('SOAPVERIFIER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('SOAPVERIFIER_TLSTLSMODE_IMPLICIT_TLS', 3);

define('SOAPVERIFIER_XADESFORM_UNKNOWN', 0);
define('SOAPVERIFIER_XADESFORM_BASIC', 1);
define('SOAPVERIFIER_XADESFORM_BES', 2);
define('SOAPVERIFIER_XADESFORM_EPES', 3);
define('SOAPVERIFIER_XADESFORM_T', 4);
define('SOAPVERIFIER_XADESFORM_C', 5);
define('SOAPVERIFIER_XADESFORM_X', 6);
define('SOAPVERIFIER_XADESFORM_XL', 7);
define('SOAPVERIFIER_XADESFORM_A', 8);
define('SOAPVERIFIER_XADESFORM_EXTENDED_BES', 9);
define('SOAPVERIFIER_XADESFORM_EXTENDED_EPES', 10);
define('SOAPVERIFIER_XADESFORM_EXTENDED_T', 11);
define('SOAPVERIFIER_XADESFORM_EXTENDED_C', 12);
define('SOAPVERIFIER_XADESFORM_EXTENDED_X', 13);
define('SOAPVERIFIER_XADESFORM_EXTENDED_XLONG', 14);
define('SOAPVERIFIER_XADESFORM_EXTENDED_XL', 15);
define('SOAPVERIFIER_XADESFORM_EXTENDED_A', 16);

define('SOAPVERIFIER_XADESVERSION_UNKNOWN', 0);
define('SOAPVERIFIER_XADESVERSION_111', 1);
define('SOAPVERIFIER_XADESVERSION_122', 2);
define('SOAPVERIFIER_XADESVERSION_132', 3);
define('SOAPVERIFIER_XADESVERSION_141', 4);



/*
 * SOAPVerifier Methods
 */

define('SOAPVERIFIER_ADDTIMESTAMP_MID', 2);
define('SOAPVERIFIER_ADDTIMESTAMPVALIDATIONDATA_MID', 3);
define('SOAPVERIFIER_ADDVALIDATIONDATAREFS_MID', 4);
define('SOAPVERIFIER_ADDVALIDATIONDATAVALUES_MID', 5);
define('SOAPVERIFIER_CONFIG_MID', 6);
define('SOAPVERIFIER_VERIFY_MID', 7);


/*
 * SOAPVerifier Events
 */
  
define('SOAPVERIFIER_CHAINVALIDATED_EID', 1);
define('SOAPVERIFIER_ERROR_EID', 2);
define('SOAPVERIFIER_REFERENCEVALIDATED_EID', 3);
define('SOAPVERIFIER_RESOLVEREFERENCE_EID', 4);
define('SOAPVERIFIER_RETRIEVECERTIFICATE_EID', 5);
define('SOAPVERIFIER_RETRIEVECRL_EID', 6);
define('SOAPVERIFIER_RETRIEVEOCSPRESPONSE_EID', 7);
define('SOAPVERIFIER_SIGNATUREFOUND_EID', 8);
define('SOAPVERIFIER_SIGNATUREVALIDATED_EID', 9);
define('SOAPVERIFIER_STORECERTIFICATE_EID', 10);
define('SOAPVERIFIER_STORECRL_EID', 11);
define('SOAPVERIFIER_STOREOCSPRESPONSE_EID', 12);
define('SOAPVERIFIER_TIMESTAMPFOUND_EID', 13);
define('SOAPVERIFIER_TIMESTAMPVALIDATED_EID', 14);

/*
 * SSHKeyManager Properties
 */

define('SSHKEYMANAGER_KEYALGORITHM_PID', 1);
define('SSHKEYMANAGER_KEYBITS_PID', 2);
define('SSHKEYMANAGER_KEYCOMMENT_PID', 3);
define('SSHKEYMANAGER_KEYCURVE_PID', 4);
define('SSHKEYMANAGER_KEYDSSG_PID', 5);
define('SSHKEYMANAGER_KEYDSSP_PID', 6);
define('SSHKEYMANAGER_KEYDSSQ_PID', 7);
define('SSHKEYMANAGER_KEYDSSX_PID', 8);
define('SSHKEYMANAGER_KEYDSSY_PID', 9);
define('SSHKEYMANAGER_KEYECCD_PID', 10);
define('SSHKEYMANAGER_KEYECCQX_PID', 11);
define('SSHKEYMANAGER_KEYECCQY_PID', 12);
define('SSHKEYMANAGER_KEYEDPRIVATE_PID', 13);
define('SSHKEYMANAGER_KEYEDPUBLIC_PID', 14);
define('SSHKEYMANAGER_KEYFINGERPRINTMD5_PID', 15);
define('SSHKEYMANAGER_KEYFINGERPRINTSHA1_PID', 16);
define('SSHKEYMANAGER_KEYFINGERPRINTSHA256_PID', 17);
define('SSHKEYMANAGER_KEYHANDLE_PID', 18);
define('SSHKEYMANAGER_KEYISEXTRACTABLE_PID', 19);
define('SSHKEYMANAGER_KEYISPRIVATE_PID', 20);
define('SSHKEYMANAGER_KEYISPUBLIC_PID', 21);
define('SSHKEYMANAGER_KEYKDFROUNDS_PID', 22);
define('SSHKEYMANAGER_KEYKDFSALT_PID', 23);
define('SSHKEYMANAGER_KEYKEYFORMAT_PID', 24);
define('SSHKEYMANAGER_KEYKEYPROTECTIONALGORITHM_PID', 25);
define('SSHKEYMANAGER_KEYRSAEXPONENT_PID', 26);
define('SSHKEYMANAGER_KEYRSAIQMP_PID', 27);
define('SSHKEYMANAGER_KEYRSAMODULUS_PID', 28);
define('SSHKEYMANAGER_KEYRSAP_PID', 29);
define('SSHKEYMANAGER_KEYRSAPRIVATEEXPONENT_PID', 30);
define('SSHKEYMANAGER_KEYRSAQ_PID', 31);
define('SSHKEYMANAGER_KEYSUBJECT_PID', 32);


/*
 * SSHKeyManager Enums
 */

define('SSHKEYMANAGER_KEYKEYFORMAT_OPEN_SSH', 0);
define('SSHKEYMANAGER_KEYKEYFORMAT_OPEN_SSH2', 1);
define('SSHKEYMANAGER_KEYKEYFORMAT_IETF', 2);
define('SSHKEYMANAGER_KEYKEYFORMAT_PU_TTY', 3);
define('SSHKEYMANAGER_KEYKEYFORMAT_X509', 4);
define('SSHKEYMANAGER_KEYKEYFORMAT_BINARY', 5);
define('SSHKEYMANAGER_KEYKEYFORMAT_SSH1', 6);
define('SSHKEYMANAGER_KEYKEYFORMAT_PGP', 7);
define('SSHKEYMANAGER_KEYKEYFORMAT_PKCS8', 8);



/*
 * SSHKeyManager Methods
 */

define('SSHKEYMANAGER_CONFIG_MID', 2);
define('SSHKEYMANAGER_EXPORTTOBUFFER_MID', 3);
define('SSHKEYMANAGER_EXPORTTOFILE_MID', 4);
define('SSHKEYMANAGER_IMPORTFROMBUFFER_MID', 6);
define('SSHKEYMANAGER_IMPORTFROMFILE_MID', 7);


/*
 * SSHKeyManager Events
 */
  
define('SSHKEYMANAGER_ERROR_EID', 1);

/*
 * TLSClient Properties
 */

define('TLSCLIENT_BLOCKEDCERTCOUNT_PID', 1);
define('TLSCLIENT_BLOCKEDCERTBYTES_PID', 2);
define('TLSCLIENT_BLOCKEDCERTHANDLE_PID', 3);
define('TLSCLIENT_CLIENTCERTCOUNT_PID', 4);
define('TLSCLIENT_CLIENTCERTBYTES_PID', 5);
define('TLSCLIENT_CLIENTCERTHANDLE_PID', 6);
define('TLSCLIENT_CONNECTED_PID', 7);
define('TLSCLIENT_CONNINFOAEADCIPHER_PID', 8);
define('TLSCLIENT_CONNINFOCHAINVALIDATIONDETAILS_PID', 9);
define('TLSCLIENT_CONNINFOCHAINVALIDATIONRESULT_PID', 10);
define('TLSCLIENT_CONNINFOCIPHERSUITE_PID', 11);
define('TLSCLIENT_CONNINFOCLIENTAUTHENTICATED_PID', 12);
define('TLSCLIENT_CONNINFOCONNECTIONESTABLISHED_PID', 13);
define('TLSCLIENT_CONNINFOCONNECTIONID_PID', 14);
define('TLSCLIENT_CONNINFODIGESTALGORITHM_PID', 15);
define('TLSCLIENT_CONNINFOENCRYPTIONALGORITHM_PID', 16);
define('TLSCLIENT_CONNINFOEXPORTABLE_PID', 17);
define('TLSCLIENT_CONNINFOKEYEXCHANGEALGORITHM_PID', 18);
define('TLSCLIENT_CONNINFOKEYEXCHANGEKEYBITS_PID', 19);
define('TLSCLIENT_CONNINFONAMEDECCURVE_PID', 20);
define('TLSCLIENT_CONNINFOPFSCIPHER_PID', 21);
define('TLSCLIENT_CONNINFOPRESHAREDIDENTITYHINT_PID', 22);
define('TLSCLIENT_CONNINFOPUBLICKEYBITS_PID', 23);
define('TLSCLIENT_CONNINFORESUMEDSESSION_PID', 24);
define('TLSCLIENT_CONNINFOSECURECONNECTION_PID', 25);
define('TLSCLIENT_CONNINFOSERVERAUTHENTICATED_PID', 26);
define('TLSCLIENT_CONNINFOSIGNATUREALGORITHM_PID', 27);
define('TLSCLIENT_CONNINFOSYMMETRICBLOCKSIZE_PID', 28);
define('TLSCLIENT_CONNINFOSYMMETRICKEYBITS_PID', 29);
define('TLSCLIENT_CONNINFOTOTALBYTESRECEIVED_PID', 30);
define('TLSCLIENT_CONNINFOTOTALBYTESSENT_PID', 31);
define('TLSCLIENT_CONNINFOVALIDATIONLOG_PID', 32);
define('TLSCLIENT_CONNINFOVERSION_PID', 33);
define('TLSCLIENT_ERRORORIGIN_PID', 34);
define('TLSCLIENT_ERRORSEVERITY_PID', 35);
define('TLSCLIENT_EXTERNALCRYPTOCUSTOMPARAMS_PID', 36);
define('TLSCLIENT_EXTERNALCRYPTODATA_PID', 37);
define('TLSCLIENT_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 38);
define('TLSCLIENT_EXTERNALCRYPTOHASHALGORITHM_PID', 39);
define('TLSCLIENT_EXTERNALCRYPTOKEYID_PID', 40);
define('TLSCLIENT_EXTERNALCRYPTOKEYSECRET_PID', 41);
define('TLSCLIENT_EXTERNALCRYPTOMETHOD_PID', 42);
define('TLSCLIENT_EXTERNALCRYPTOMODE_PID', 43);
define('TLSCLIENT_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 44);
define('TLSCLIENT_KNOWNCERTCOUNT_PID', 45);
define('TLSCLIENT_KNOWNCERTBYTES_PID', 46);
define('TLSCLIENT_KNOWNCERTHANDLE_PID', 47);
define('TLSCLIENT_KNOWNCRLCOUNT_PID', 48);
define('TLSCLIENT_KNOWNCRLBYTES_PID', 49);
define('TLSCLIENT_KNOWNCRLHANDLE_PID', 50);
define('TLSCLIENT_KNOWNOCSPCOUNT_PID', 51);
define('TLSCLIENT_KNOWNOCSPBYTES_PID', 52);
define('TLSCLIENT_KNOWNOCSPHANDLE_PID', 53);
define('TLSCLIENT_OUTPUTBYTES_PID', 54);
define('TLSCLIENT_OUTPUTSTRING_PID', 55);
define('TLSCLIENT_PROXYADDRESS_PID', 56);
define('TLSCLIENT_PROXYAUTHENTICATION_PID', 57);
define('TLSCLIENT_PROXYPASSWORD_PID', 58);
define('TLSCLIENT_PROXYPORT_PID', 59);
define('TLSCLIENT_PROXYPROXYTYPE_PID', 60);
define('TLSCLIENT_PROXYREQUESTHEADERS_PID', 61);
define('TLSCLIENT_PROXYRESPONSEBODY_PID', 62);
define('TLSCLIENT_PROXYRESPONSEHEADERS_PID', 63);
define('TLSCLIENT_PROXYUSEIPV6_PID', 64);
define('TLSCLIENT_PROXYUSEPROXY_PID', 65);
define('TLSCLIENT_PROXYUSERNAME_PID', 66);
define('TLSCLIENT_SERVERCERTCOUNT_PID', 67);
define('TLSCLIENT_SERVERCERTBYTES_PID', 68);
define('TLSCLIENT_SERVERCERTCAKEYID_PID', 69);
define('TLSCLIENT_SERVERCERTFINGERPRINT_PID', 70);
define('TLSCLIENT_SERVERCERTHANDLE_PID', 71);
define('TLSCLIENT_SERVERCERTISSUER_PID', 72);
define('TLSCLIENT_SERVERCERTISSUERRDN_PID', 73);
define('TLSCLIENT_SERVERCERTKEYALGORITHM_PID', 74);
define('TLSCLIENT_SERVERCERTKEYBITS_PID', 75);
define('TLSCLIENT_SERVERCERTKEYFINGERPRINT_PID', 76);
define('TLSCLIENT_SERVERCERTKEYUSAGE_PID', 77);
define('TLSCLIENT_SERVERCERTPUBLICKEYBYTES_PID', 78);
define('TLSCLIENT_SERVERCERTSELFSIGNED_PID', 79);
define('TLSCLIENT_SERVERCERTSERIALNUMBER_PID', 80);
define('TLSCLIENT_SERVERCERTSIGALGORITHM_PID', 81);
define('TLSCLIENT_SERVERCERTSUBJECT_PID', 82);
define('TLSCLIENT_SERVERCERTSUBJECTKEYID_PID', 83);
define('TLSCLIENT_SERVERCERTSUBJECTRDN_PID', 84);
define('TLSCLIENT_SERVERCERTVALIDFROM_PID', 85);
define('TLSCLIENT_SERVERCERTVALIDTO_PID', 86);
define('TLSCLIENT_SOCKETDNSMODE_PID', 87);
define('TLSCLIENT_SOCKETDNSPORT_PID', 88);
define('TLSCLIENT_SOCKETDNSQUERYTIMEOUT_PID', 89);
define('TLSCLIENT_SOCKETDNSSERVERS_PID', 90);
define('TLSCLIENT_SOCKETDNSTOTALTIMEOUT_PID', 91);
define('TLSCLIENT_SOCKETINCOMINGSPEEDLIMIT_PID', 92);
define('TLSCLIENT_SOCKETLOCALADDRESS_PID', 93);
define('TLSCLIENT_SOCKETLOCALPORT_PID', 94);
define('TLSCLIENT_SOCKETOUTGOINGSPEEDLIMIT_PID', 95);
define('TLSCLIENT_SOCKETTIMEOUT_PID', 96);
define('TLSCLIENT_SOCKETUSEIPV6_PID', 97);
define('TLSCLIENT_TLSAUTOVALIDATECERTIFICATES_PID', 98);
define('TLSCLIENT_TLSBASECONFIGURATION_PID', 99);
define('TLSCLIENT_TLSCIPHERSUITES_PID', 100);
define('TLSCLIENT_TLSECCURVES_PID', 101);
define('TLSCLIENT_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 102);
define('TLSCLIENT_TLSPRESHAREDIDENTITY_PID', 103);
define('TLSCLIENT_TLSPRESHAREDKEY_PID', 104);
define('TLSCLIENT_TLSPRESHAREDKEYCIPHERSUITE_PID', 105);
define('TLSCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 106);
define('TLSCLIENT_TLSREVOCATIONCHECK_PID', 107);
define('TLSCLIENT_TLSSSLOPTIONS_PID', 108);
define('TLSCLIENT_TLSTLSMODE_PID', 109);
define('TLSCLIENT_TLSUSEEXTENDEDMASTERSECRET_PID', 110);
define('TLSCLIENT_TLSUSESESSIONRESUMPTION_PID', 111);
define('TLSCLIENT_TLSVERSIONS_PID', 112);
define('TLSCLIENT_TRUSTEDCERTCOUNT_PID', 113);
define('TLSCLIENT_TRUSTEDCERTBYTES_PID', 114);
define('TLSCLIENT_TRUSTEDCERTHANDLE_PID', 115);


/*
 * TLSClient Enums
 */

define('TLSCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID', 0);
define('TLSCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('TLSCLIENT_CONNINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('TLSCLIENT_CONNINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('TLSCLIENT_ERRORORIGIN_LOCAL', 0);
define('TLSCLIENT_ERRORORIGIN_REMOTE', 1);

define('TLSCLIENT_ERRORSEVERITY_WARNING', 1);
define('TLSCLIENT_ERRORSEVERITY_FATAL', 2);

define('TLSCLIENT_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('TLSCLIENT_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('TLSCLIENT_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('TLSCLIENT_EXTERNALCRYPTOMODE_DISABLED', 1);
define('TLSCLIENT_EXTERNALCRYPTOMODE_GENERIC', 2);

define('TLSCLIENT_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('TLSCLIENT_PROXYAUTHENTICATION_BASIC', 1);
define('TLSCLIENT_PROXYAUTHENTICATION_DIGEST', 2);
define('TLSCLIENT_PROXYAUTHENTICATION_NTLM', 3);

define('TLSCLIENT_PROXYPROXYTYPE_NONE', 0);
define('TLSCLIENT_PROXYPROXYTYPE_SOCKS_4', 1);
define('TLSCLIENT_PROXYPROXYTYPE_SOCKS_5', 2);
define('TLSCLIENT_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('TLSCLIENT_PROXYPROXYTYPE_HTTP', 4);

define('TLSCLIENT_SOCKETDNSMODE_AUTO', 0);
define('TLSCLIENT_SOCKETDNSMODE_PLATFORM', 1);
define('TLSCLIENT_SOCKETDNSMODE_OWN', 2);
define('TLSCLIENT_SOCKETDNSMODE_OWN_SECURE', 3);

define('TLSCLIENT_TLSBASECONFIGURATION_DEFAULT', 0);
define('TLSCLIENT_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('TLSCLIENT_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('TLSCLIENT_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('TLSCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('TLSCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('TLSCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('TLSCLIENT_TLSREVOCATIONCHECK_NONE', 0);
define('TLSCLIENT_TLSREVOCATIONCHECK_AUTO', 1);
define('TLSCLIENT_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('TLSCLIENT_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('TLSCLIENT_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('TLSCLIENT_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('TLSCLIENT_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('TLSCLIENT_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('TLSCLIENT_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('TLSCLIENT_TLSTLSMODE_DEFAULT', 0);
define('TLSCLIENT_TLSTLSMODE_NO_TLS', 1);
define('TLSCLIENT_TLSTLSMODE_EXPLICIT_TLS', 2);
define('TLSCLIENT_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * TLSClient Methods
 */

define('TLSCLIENT_CONFIG_MID', 2);
define('TLSCLIENT_CONNECT_MID', 3);
define('TLSCLIENT_DISCONNECT_MID', 4);
define('TLSCLIENT_RECEIVEALLDATA_MID', 5);
define('TLSCLIENT_RECEIVEDATA_MID', 6);
define('TLSCLIENT_SENDDATA_MID', 7);
define('TLSCLIENT_SENDKEEPALIVE_MID', 8);
define('TLSCLIENT_SENDTEXT_MID', 10);


/*
 * TLSClient Events
 */
  
define('TLSCLIENT_CERTIFICATEVALIDATE_EID', 1);
define('TLSCLIENT_ERROR_EID', 2);
define('TLSCLIENT_EXTERNALSIGN_EID', 3);

/*
 * TLSServer Properties
 */

define('TLSSERVER_ACTIVE_PID', 1);
define('TLSSERVER_BOUNDPORT_PID', 2);
define('TLSSERVER_ERRORORIGIN_PID', 3);
define('TLSSERVER_ERRORSEVERITY_PID', 4);
define('TLSSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 5);
define('TLSSERVER_EXTERNALCRYPTODATA_PID', 6);
define('TLSSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 7);
define('TLSSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 8);
define('TLSSERVER_EXTERNALCRYPTOKEYID_PID', 9);
define('TLSSERVER_EXTERNALCRYPTOKEYSECRET_PID', 10);
define('TLSSERVER_EXTERNALCRYPTOMETHOD_PID', 11);
define('TLSSERVER_EXTERNALCRYPTOMODE_PID', 12);
define('TLSSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 13);
define('TLSSERVER_HANDSHAKETIMEOUT_PID', 14);
define('TLSSERVER_HOST_PID', 15);
define('TLSSERVER_PINNEDCLIENTADDRESS_PID', 16);
define('TLSSERVER_PINNEDCLIENTCHAINVALIDATIONDETAILS_PID', 17);
define('TLSSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_PID', 18);
define('TLSSERVER_PINNEDCLIENTCIPHERSUITE_PID', 19);
define('TLSSERVER_PINNEDCLIENTCLIENTAUTHENTICATED_PID', 20);
define('TLSSERVER_PINNEDCLIENTDIGESTALGORITHM_PID', 21);
define('TLSSERVER_PINNEDCLIENTENCRYPTIONALGORITHM_PID', 22);
define('TLSSERVER_PINNEDCLIENTID_PID', 23);
define('TLSSERVER_PINNEDCLIENTKEYEXCHANGEALGORITHM_PID', 24);
define('TLSSERVER_PINNEDCLIENTKEYEXCHANGEKEYBITS_PID', 25);
define('TLSSERVER_PINNEDCLIENTNAMEDECCURVE_PID', 26);
define('TLSSERVER_PINNEDCLIENTPFSCIPHER_PID', 27);
define('TLSSERVER_PINNEDCLIENTPORT_PID', 28);
define('TLSSERVER_PINNEDCLIENTPUBLICKEYBITS_PID', 29);
define('TLSSERVER_PINNEDCLIENTRESUMEDSESSION_PID', 30);
define('TLSSERVER_PINNEDCLIENTSECURECONNECTION_PID', 31);
define('TLSSERVER_PINNEDCLIENTSIGNATUREALGORITHM_PID', 32);
define('TLSSERVER_PINNEDCLIENTSYMMETRICBLOCKSIZE_PID', 33);
define('TLSSERVER_PINNEDCLIENTSYMMETRICKEYBITS_PID', 34);
define('TLSSERVER_PINNEDCLIENTTOTALBYTESRECEIVED_PID', 35);
define('TLSSERVER_PINNEDCLIENTTOTALBYTESSENT_PID', 36);
define('TLSSERVER_PINNEDCLIENTVALIDATIONLOG_PID', 37);
define('TLSSERVER_PINNEDCLIENTVERSION_PID', 38);
define('TLSSERVER_PINNEDCLIENTCERTCOUNT_PID', 39);
define('TLSSERVER_PINNEDCLIENTCERTBYTES_PID', 40);
define('TLSSERVER_PINNEDCLIENTCERTCAKEYID_PID', 41);
define('TLSSERVER_PINNEDCLIENTCERTFINGERPRINT_PID', 42);
define('TLSSERVER_PINNEDCLIENTCERTHANDLE_PID', 43);
define('TLSSERVER_PINNEDCLIENTCERTISSUER_PID', 44);
define('TLSSERVER_PINNEDCLIENTCERTISSUERRDN_PID', 45);
define('TLSSERVER_PINNEDCLIENTCERTKEYALGORITHM_PID', 46);
define('TLSSERVER_PINNEDCLIENTCERTKEYBITS_PID', 47);
define('TLSSERVER_PINNEDCLIENTCERTKEYFINGERPRINT_PID', 48);
define('TLSSERVER_PINNEDCLIENTCERTKEYUSAGE_PID', 49);
define('TLSSERVER_PINNEDCLIENTCERTPUBLICKEYBYTES_PID', 50);
define('TLSSERVER_PINNEDCLIENTCERTSELFSIGNED_PID', 51);
define('TLSSERVER_PINNEDCLIENTCERTSERIALNUMBER_PID', 52);
define('TLSSERVER_PINNEDCLIENTCERTSIGALGORITHM_PID', 53);
define('TLSSERVER_PINNEDCLIENTCERTSUBJECT_PID', 54);
define('TLSSERVER_PINNEDCLIENTCERTSUBJECTKEYID_PID', 55);
define('TLSSERVER_PINNEDCLIENTCERTSUBJECTRDN_PID', 56);
define('TLSSERVER_PINNEDCLIENTCERTVALIDFROM_PID', 57);
define('TLSSERVER_PINNEDCLIENTCERTVALIDTO_PID', 58);
define('TLSSERVER_PORT_PID', 59);
define('TLSSERVER_PORTRANGEFROM_PID', 60);
define('TLSSERVER_PORTRANGETO_PID', 61);
define('TLSSERVER_SERVERCERTCOUNT_PID', 62);
define('TLSSERVER_SERVERCERTBYTES_PID', 63);
define('TLSSERVER_SERVERCERTHANDLE_PID', 64);
define('TLSSERVER_SESSIONTIMEOUT_PID', 65);
define('TLSSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 66);
define('TLSSERVER_SOCKETLOCALADDRESS_PID', 67);
define('TLSSERVER_SOCKETLOCALPORT_PID', 68);
define('TLSSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 69);
define('TLSSERVER_SOCKETTIMEOUT_PID', 70);
define('TLSSERVER_SOCKETUSEIPV6_PID', 71);
define('TLSSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 72);
define('TLSSERVER_TLSBASECONFIGURATION_PID', 73);
define('TLSSERVER_TLSCIPHERSUITES_PID', 74);
define('TLSSERVER_TLSECCURVES_PID', 75);
define('TLSSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 76);
define('TLSSERVER_TLSPRESHAREDIDENTITY_PID', 77);
define('TLSSERVER_TLSPRESHAREDKEY_PID', 78);
define('TLSSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 79);
define('TLSSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 80);
define('TLSSERVER_TLSREVOCATIONCHECK_PID', 81);
define('TLSSERVER_TLSSSLOPTIONS_PID', 82);
define('TLSSERVER_TLSTLSMODE_PID', 83);
define('TLSSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 84);
define('TLSSERVER_TLSUSESESSIONRESUMPTION_PID', 85);
define('TLSSERVER_TLSVERSIONS_PID', 86);
define('TLSSERVER_USETLS_PID', 87);
define('TLSSERVER_WEBSITENAME_PID', 88);


/*
 * TLSServer Enums
 */

define('TLSSERVER_ERRORORIGIN_LOCAL', 0);
define('TLSSERVER_ERRORORIGIN_REMOTE', 1);

define('TLSSERVER_ERRORSEVERITY_WARNING', 1);
define('TLSSERVER_ERRORSEVERITY_FATAL', 2);

define('TLSSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('TLSSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('TLSSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('TLSSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('TLSSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('TLSSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID', 0);
define('TLSSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('TLSSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_INVALID', 2);
define('TLSSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('TLSSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('TLSSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('TLSSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('TLSSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('TLSSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('TLSSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('TLSSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('TLSSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('TLSSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('TLSSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('TLSSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('TLSSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('TLSSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('TLSSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('TLSSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('TLSSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('TLSSERVER_TLSTLSMODE_DEFAULT', 0);
define('TLSSERVER_TLSTLSMODE_NO_TLS', 1);
define('TLSSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('TLSSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * TLSServer Methods
 */

define('TLSSERVER_CONFIG_MID', 2);
define('TLSSERVER_DROPCLIENT_MID', 3);
define('TLSSERVER_LISTCLIENTS_MID', 4);
define('TLSSERVER_PINCLIENT_MID', 5);
define('TLSSERVER_SENDDATA_MID', 6);
define('TLSSERVER_SENDKEEPALIVE_MID', 7);
define('TLSSERVER_SENDTEXT_MID', 8);
define('TLSSERVER_START_MID', 9);
define('TLSSERVER_STOP_MID', 10);


/*
 * TLSServer Events
 */
  
define('TLSSERVER_ACCEPT_EID', 1);
define('TLSSERVER_CERTIFICATEVALIDATE_EID', 2);
define('TLSSERVER_CONNECT_EID', 3);
define('TLSSERVER_DATA_EID', 4);
define('TLSSERVER_DISCONNECT_EID', 5);
define('TLSSERVER_ERROR_EID', 6);
define('TLSSERVER_EXTERNALSIGN_EID', 7);
define('TLSSERVER_TLSESTABLISHED_EID', 8);
define('TLSSERVER_TLSPSK_EID', 9);
define('TLSSERVER_TLSSHUTDOWN_EID', 10);

/*
 * TSPServer Properties
 */

define('TSPSERVER_ACCURACY_PID', 1);
define('TSPSERVER_ACTIVE_PID', 2);
define('TSPSERVER_AUTHBASIC_PID', 3);
define('TSPSERVER_AUTHDIGEST_PID', 4);
define('TSPSERVER_AUTHDIGESTEXPIRE_PID', 5);
define('TSPSERVER_AUTHREALM_PID', 6);
define('TSPSERVER_BOUNDPORT_PID', 7);
define('TSPSERVER_DEFAULTPOLICY_PID', 8);
define('TSPSERVER_ENDPOINT_PID', 9);
define('TSPSERVER_ERRORORIGIN_PID', 10);
define('TSPSERVER_ERRORSEVERITY_PID', 11);
define('TSPSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 12);
define('TSPSERVER_EXTERNALCRYPTODATA_PID', 13);
define('TSPSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 14);
define('TSPSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 15);
define('TSPSERVER_EXTERNALCRYPTOKEYID_PID', 16);
define('TSPSERVER_EXTERNALCRYPTOKEYSECRET_PID', 17);
define('TSPSERVER_EXTERNALCRYPTOMETHOD_PID', 18);
define('TSPSERVER_EXTERNALCRYPTOMODE_PID', 19);
define('TSPSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 20);
define('TSPSERVER_HOST_PID', 21);
define('TSPSERVER_PINNEDCLIENTADDRESS_PID', 22);
define('TSPSERVER_PINNEDCLIENTCHAINVALIDATIONDETAILS_PID', 23);
define('TSPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_PID', 24);
define('TSPSERVER_PINNEDCLIENTCIPHERSUITE_PID', 25);
define('TSPSERVER_PINNEDCLIENTCLIENTAUTHENTICATED_PID', 26);
define('TSPSERVER_PINNEDCLIENTDIGESTALGORITHM_PID', 27);
define('TSPSERVER_PINNEDCLIENTENCRYPTIONALGORITHM_PID', 28);
define('TSPSERVER_PINNEDCLIENTID_PID', 29);
define('TSPSERVER_PINNEDCLIENTKEYEXCHANGEALGORITHM_PID', 30);
define('TSPSERVER_PINNEDCLIENTKEYEXCHANGEKEYBITS_PID', 31);
define('TSPSERVER_PINNEDCLIENTNAMEDECCURVE_PID', 32);
define('TSPSERVER_PINNEDCLIENTPFSCIPHER_PID', 33);
define('TSPSERVER_PINNEDCLIENTPORT_PID', 34);
define('TSPSERVER_PINNEDCLIENTPUBLICKEYBITS_PID', 35);
define('TSPSERVER_PINNEDCLIENTRESUMEDSESSION_PID', 36);
define('TSPSERVER_PINNEDCLIENTSECURECONNECTION_PID', 37);
define('TSPSERVER_PINNEDCLIENTSIGNATUREALGORITHM_PID', 38);
define('TSPSERVER_PINNEDCLIENTSYMMETRICBLOCKSIZE_PID', 39);
define('TSPSERVER_PINNEDCLIENTSYMMETRICKEYBITS_PID', 40);
define('TSPSERVER_PINNEDCLIENTTOTALBYTESRECEIVED_PID', 41);
define('TSPSERVER_PINNEDCLIENTTOTALBYTESSENT_PID', 42);
define('TSPSERVER_PINNEDCLIENTVALIDATIONLOG_PID', 43);
define('TSPSERVER_PINNEDCLIENTVERSION_PID', 44);
define('TSPSERVER_PINNEDCLIENTCERTCOUNT_PID', 45);
define('TSPSERVER_PINNEDCLIENTCERTBYTES_PID', 46);
define('TSPSERVER_PINNEDCLIENTCERTCAKEYID_PID', 47);
define('TSPSERVER_PINNEDCLIENTCERTFINGERPRINT_PID', 48);
define('TSPSERVER_PINNEDCLIENTCERTHANDLE_PID', 49);
define('TSPSERVER_PINNEDCLIENTCERTISSUER_PID', 50);
define('TSPSERVER_PINNEDCLIENTCERTISSUERRDN_PID', 51);
define('TSPSERVER_PINNEDCLIENTCERTKEYALGORITHM_PID', 52);
define('TSPSERVER_PINNEDCLIENTCERTKEYBITS_PID', 53);
define('TSPSERVER_PINNEDCLIENTCERTKEYFINGERPRINT_PID', 54);
define('TSPSERVER_PINNEDCLIENTCERTKEYUSAGE_PID', 55);
define('TSPSERVER_PINNEDCLIENTCERTPUBLICKEYBYTES_PID', 56);
define('TSPSERVER_PINNEDCLIENTCERTSELFSIGNED_PID', 57);
define('TSPSERVER_PINNEDCLIENTCERTSERIALNUMBER_PID', 58);
define('TSPSERVER_PINNEDCLIENTCERTSIGALGORITHM_PID', 59);
define('TSPSERVER_PINNEDCLIENTCERTSUBJECT_PID', 60);
define('TSPSERVER_PINNEDCLIENTCERTSUBJECTKEYID_PID', 61);
define('TSPSERVER_PINNEDCLIENTCERTSUBJECTRDN_PID', 62);
define('TSPSERVER_PINNEDCLIENTCERTVALIDFROM_PID', 63);
define('TSPSERVER_PINNEDCLIENTCERTVALIDTO_PID', 64);
define('TSPSERVER_PORT_PID', 65);
define('TSPSERVER_PORTRANGEFROM_PID', 66);
define('TSPSERVER_PORTRANGETO_PID', 67);
define('TSPSERVER_SERVERCERTCOUNT_PID', 68);
define('TSPSERVER_SERVERCERTBYTES_PID', 69);
define('TSPSERVER_SERVERCERTHANDLE_PID', 70);
define('TSPSERVER_SESSIONTIMEOUT_PID', 71);
define('TSPSERVER_SIGNINGCERTBYTES_PID', 72);
define('TSPSERVER_SIGNINGCERTHANDLE_PID', 73);
define('TSPSERVER_SIGNINGCHAINCOUNT_PID', 74);
define('TSPSERVER_SIGNINGCHAINBYTES_PID', 75);
define('TSPSERVER_SIGNINGCHAINHANDLE_PID', 76);
define('TSPSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 77);
define('TSPSERVER_SOCKETLOCALADDRESS_PID', 78);
define('TSPSERVER_SOCKETLOCALPORT_PID', 79);
define('TSPSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 80);
define('TSPSERVER_SOCKETTIMEOUT_PID', 81);
define('TSPSERVER_SOCKETUSEIPV6_PID', 82);
define('TSPSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 83);
define('TSPSERVER_TLSBASECONFIGURATION_PID', 84);
define('TSPSERVER_TLSCIPHERSUITES_PID', 85);
define('TSPSERVER_TLSECCURVES_PID', 86);
define('TSPSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 87);
define('TSPSERVER_TLSPRESHAREDIDENTITY_PID', 88);
define('TSPSERVER_TLSPRESHAREDKEY_PID', 89);
define('TSPSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 90);
define('TSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 91);
define('TSPSERVER_TLSREVOCATIONCHECK_PID', 92);
define('TSPSERVER_TLSSSLOPTIONS_PID', 93);
define('TSPSERVER_TLSTLSMODE_PID', 94);
define('TSPSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 95);
define('TSPSERVER_TLSUSESESSIONRESUMPTION_PID', 96);
define('TSPSERVER_TLSVERSIONS_PID', 97);
define('TSPSERVER_TSANAME_PID', 98);
define('TSPSERVER_USERCOUNT_PID', 99);
define('TSPSERVER_USERASSOCIATEDDATA_PID', 100);
define('TSPSERVER_USERBASEPATH_PID', 101);
define('TSPSERVER_USERCERT_PID', 102);
define('TSPSERVER_USERDATA_PID', 103);
define('TSPSERVER_USERHANDLE_PID', 104);
define('TSPSERVER_USERHASHALGORITHM_PID', 105);
define('TSPSERVER_USERINCOMINGSPEEDLIMIT_PID', 106);
define('TSPSERVER_USEROUTGOINGSPEEDLIMIT_PID', 107);
define('TSPSERVER_USERPASSWORD_PID', 108);
define('TSPSERVER_USERSHAREDSECRET_PID', 109);
define('TSPSERVER_USERUSERNAME_PID', 110);
define('TSPSERVER_USETLS_PID', 111);
define('TSPSERVER_WEBSITENAME_PID', 112);


/*
 * TSPServer Enums
 */

define('TSPSERVER_ERRORORIGIN_LOCAL', 0);
define('TSPSERVER_ERRORORIGIN_REMOTE', 1);

define('TSPSERVER_ERRORSEVERITY_WARNING', 1);
define('TSPSERVER_ERRORSEVERITY_FATAL', 2);

define('TSPSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('TSPSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('TSPSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('TSPSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('TSPSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('TSPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID', 0);
define('TSPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('TSPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_INVALID', 2);
define('TSPSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('TSPSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('TSPSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('TSPSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('TSPSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('TSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('TSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('TSPSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('TSPSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('TSPSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('TSPSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('TSPSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('TSPSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('TSPSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('TSPSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('TSPSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('TSPSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('TSPSERVER_TLSTLSMODE_DEFAULT', 0);
define('TSPSERVER_TLSTLSMODE_NO_TLS', 1);
define('TSPSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('TSPSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * TSPServer Methods
 */

define('TSPSERVER_CONFIG_MID', 2);
define('TSPSERVER_DROPCLIENT_MID', 3);
define('TSPSERVER_GETREQUESTBYTES_MID', 4);
define('TSPSERVER_GETREQUESTHEADER_MID', 5);
define('TSPSERVER_GETREQUESTUSERNAME_MID', 6);
define('TSPSERVER_LISTCLIENTS_MID', 7);
define('TSPSERVER_PINCLIENT_MID', 8);
define('TSPSERVER_PROCESSGENERICREQUEST_MID', 9);
define('TSPSERVER_START_MID', 10);
define('TSPSERVER_STOP_MID', 11);


/*
 * TSPServer Events
 */
  
define('TSPSERVER_ACCEPT_EID', 1);
define('TSPSERVER_AUTHATTEMPT_EID', 2);
define('TSPSERVER_CERTIFICATEVALIDATE_EID', 3);
define('TSPSERVER_CONNECT_EID', 4);
define('TSPSERVER_DISCONNECT_EID', 5);
define('TSPSERVER_ERROR_EID', 6);
define('TSPSERVER_EXTERNALSIGN_EID', 7);
define('TSPSERVER_TIMESTAMPREQUEST_EID', 8);
define('TSPSERVER_TLSESTABLISHED_EID', 9);
define('TSPSERVER_TLSPSK_EID', 10);
define('TSPSERVER_TLSSHUTDOWN_EID', 11);

/*
 * UserManager Properties
 */

define('USERMANAGER_USERCOUNT_PID', 1);
define('USERMANAGER_USERASSOCIATEDDATA_PID', 2);
define('USERMANAGER_USERBASEPATH_PID', 3);
define('USERMANAGER_USERCERT_PID', 4);
define('USERMANAGER_USERDATA_PID', 5);
define('USERMANAGER_USERHANDLE_PID', 6);
define('USERMANAGER_USERHASHALGORITHM_PID', 7);
define('USERMANAGER_USERINCOMINGSPEEDLIMIT_PID', 8);
define('USERMANAGER_USEROTPALGORITHM_PID', 9);
define('USERMANAGER_USEROTPVALUE_PID', 10);
define('USERMANAGER_USEROUTGOINGSPEEDLIMIT_PID', 11);
define('USERMANAGER_USERPASSWORD_PID', 12);
define('USERMANAGER_USERPASSWORDLEN_PID', 13);
define('USERMANAGER_USERSHAREDSECRET_PID', 14);
define('USERMANAGER_USERSSHKEY_PID', 15);
define('USERMANAGER_USERUSERNAME_PID', 16);


/*
 * UserManager Enums
 */

define('USERMANAGER_USEROTPALGORITHM_HMAC', 0);
define('USERMANAGER_USEROTPALGORITHM_TIME', 1);



/*
 * UserManager Methods
 */

define('USERMANAGER_CONFIG_MID', 2);
define('USERMANAGER_LOAD_MID', 3);
define('USERMANAGER_LOADUSER_MID', 5);
define('USERMANAGER_SAVE_MID', 7);
define('USERMANAGER_SAVEUSER_MID', 9);


/*
 * UserManager Events
 */
  
define('USERMANAGER_ERROR_EID', 1);

/*
 * WebDAVClient Properties
 */

define('WEBDAVCLIENT_BASEURL_PID', 1);
define('WEBDAVCLIENT_CLIENTCERTCOUNT_PID', 2);
define('WEBDAVCLIENT_CLIENTCERTBYTES_PID', 3);
define('WEBDAVCLIENT_CLIENTCERTHANDLE_PID', 4);
define('WEBDAVCLIENT_CONNECTED_PID', 5);
define('WEBDAVCLIENT_CONNINFOAEADCIPHER_PID', 6);
define('WEBDAVCLIENT_CONNINFOCHAINVALIDATIONDETAILS_PID', 7);
define('WEBDAVCLIENT_CONNINFOCHAINVALIDATIONRESULT_PID', 8);
define('WEBDAVCLIENT_CONNINFOCIPHERSUITE_PID', 9);
define('WEBDAVCLIENT_CONNINFOCLIENTAUTHENTICATED_PID', 10);
define('WEBDAVCLIENT_CONNINFOCONNECTIONESTABLISHED_PID', 11);
define('WEBDAVCLIENT_CONNINFOCONNECTIONID_PID', 12);
define('WEBDAVCLIENT_CONNINFODIGESTALGORITHM_PID', 13);
define('WEBDAVCLIENT_CONNINFOENCRYPTIONALGORITHM_PID', 14);
define('WEBDAVCLIENT_CONNINFOEXPORTABLE_PID', 15);
define('WEBDAVCLIENT_CONNINFOKEYEXCHANGEALGORITHM_PID', 16);
define('WEBDAVCLIENT_CONNINFOKEYEXCHANGEKEYBITS_PID', 17);
define('WEBDAVCLIENT_CONNINFONAMEDECCURVE_PID', 18);
define('WEBDAVCLIENT_CONNINFOPFSCIPHER_PID', 19);
define('WEBDAVCLIENT_CONNINFOPRESHAREDIDENTITYHINT_PID', 20);
define('WEBDAVCLIENT_CONNINFOPUBLICKEYBITS_PID', 21);
define('WEBDAVCLIENT_CONNINFORESUMEDSESSION_PID', 22);
define('WEBDAVCLIENT_CONNINFOSECURECONNECTION_PID', 23);
define('WEBDAVCLIENT_CONNINFOSERVERAUTHENTICATED_PID', 24);
define('WEBDAVCLIENT_CONNINFOSIGNATUREALGORITHM_PID', 25);
define('WEBDAVCLIENT_CONNINFOSYMMETRICBLOCKSIZE_PID', 26);
define('WEBDAVCLIENT_CONNINFOSYMMETRICKEYBITS_PID', 27);
define('WEBDAVCLIENT_CONNINFOTOTALBYTESRECEIVED_PID', 28);
define('WEBDAVCLIENT_CONNINFOTOTALBYTESSENT_PID', 29);
define('WEBDAVCLIENT_CONNINFOVALIDATIONLOG_PID', 30);
define('WEBDAVCLIENT_CONNINFOVERSION_PID', 31);
define('WEBDAVCLIENT_CURRLISTENTRYATIME_PID', 32);
define('WEBDAVCLIENT_CURRLISTENTRYCONTENTTYPE_PID', 33);
define('WEBDAVCLIENT_CURRLISTENTRYCTIME_PID', 34);
define('WEBDAVCLIENT_CURRLISTENTRYDIRECTORY_PID', 35);
define('WEBDAVCLIENT_CURRLISTENTRYDISPLAYNAME_PID', 36);
define('WEBDAVCLIENT_CURRLISTENTRYETAG_PID', 37);
define('WEBDAVCLIENT_CURRLISTENTRYFULLURL_PID', 38);
define('WEBDAVCLIENT_CURRLISTENTRYMTIME_PID', 39);
define('WEBDAVCLIENT_CURRLISTENTRYPARENTURL_PID', 40);
define('WEBDAVCLIENT_CURRLISTENTRYSIZE_PID', 41);
define('WEBDAVCLIENT_CURRLISTENTRYSUPPORTSEXCLUSIVELOCK_PID', 42);
define('WEBDAVCLIENT_CURRLISTENTRYSUPPORTSSHAREDLOCK_PID', 43);
define('WEBDAVCLIENT_CURRLISTENTRYURL_PID', 44);
define('WEBDAVCLIENT_CURRENTLOCKS_PID', 45);
define('WEBDAVCLIENT_ENCODEURL_PID', 46);
define('WEBDAVCLIENT_EXTERNALCRYPTOCUSTOMPARAMS_PID', 47);
define('WEBDAVCLIENT_EXTERNALCRYPTODATA_PID', 48);
define('WEBDAVCLIENT_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 49);
define('WEBDAVCLIENT_EXTERNALCRYPTOHASHALGORITHM_PID', 50);
define('WEBDAVCLIENT_EXTERNALCRYPTOKEYID_PID', 51);
define('WEBDAVCLIENT_EXTERNALCRYPTOKEYSECRET_PID', 52);
define('WEBDAVCLIENT_EXTERNALCRYPTOMETHOD_PID', 53);
define('WEBDAVCLIENT_EXTERNALCRYPTOMODE_PID', 54);
define('WEBDAVCLIENT_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 55);
define('WEBDAVCLIENT_KNOWNCERTCOUNT_PID', 56);
define('WEBDAVCLIENT_KNOWNCERTBYTES_PID', 57);
define('WEBDAVCLIENT_KNOWNCERTHANDLE_PID', 58);
define('WEBDAVCLIENT_KNOWNCRLCOUNT_PID', 59);
define('WEBDAVCLIENT_KNOWNCRLBYTES_PID', 60);
define('WEBDAVCLIENT_KNOWNCRLHANDLE_PID', 61);
define('WEBDAVCLIENT_KNOWNOCSPCOUNT_PID', 62);
define('WEBDAVCLIENT_KNOWNOCSPBYTES_PID', 63);
define('WEBDAVCLIENT_KNOWNOCSPHANDLE_PID', 64);
define('WEBDAVCLIENT_LOCKDEPTH_PID', 65);
define('WEBDAVCLIENT_LOCKSCOPE_PID', 66);
define('WEBDAVCLIENT_LOCKTIMEOUT_PID', 67);
define('WEBDAVCLIENT_MOVETORENAME_PID', 68);
define('WEBDAVCLIENT_OVERWRITEONCOPY_PID', 69);
define('WEBDAVCLIENT_OVERWRITEONMOVE_PID', 70);
define('WEBDAVCLIENT_PASSWORD_PID', 71);
define('WEBDAVCLIENT_PROXYADDRESS_PID', 72);
define('WEBDAVCLIENT_PROXYAUTHENTICATION_PID', 73);
define('WEBDAVCLIENT_PROXYPASSWORD_PID', 74);
define('WEBDAVCLIENT_PROXYPORT_PID', 75);
define('WEBDAVCLIENT_PROXYPROXYTYPE_PID', 76);
define('WEBDAVCLIENT_PROXYREQUESTHEADERS_PID', 77);
define('WEBDAVCLIENT_PROXYRESPONSEBODY_PID', 78);
define('WEBDAVCLIENT_PROXYRESPONSEHEADERS_PID', 79);
define('WEBDAVCLIENT_PROXYUSEIPV6_PID', 80);
define('WEBDAVCLIENT_PROXYUSEPROXY_PID', 81);
define('WEBDAVCLIENT_PROXYUSERNAME_PID', 82);
define('WEBDAVCLIENT_RESOURCEOWNER_PID', 83);
define('WEBDAVCLIENT_SERVERCERTCOUNT_PID', 84);
define('WEBDAVCLIENT_SERVERCERTBYTES_PID', 85);
define('WEBDAVCLIENT_SERVERCERTCAKEYID_PID', 86);
define('WEBDAVCLIENT_SERVERCERTFINGERPRINT_PID', 87);
define('WEBDAVCLIENT_SERVERCERTHANDLE_PID', 88);
define('WEBDAVCLIENT_SERVERCERTISSUER_PID', 89);
define('WEBDAVCLIENT_SERVERCERTISSUERRDN_PID', 90);
define('WEBDAVCLIENT_SERVERCERTKEYALGORITHM_PID', 91);
define('WEBDAVCLIENT_SERVERCERTKEYBITS_PID', 92);
define('WEBDAVCLIENT_SERVERCERTKEYFINGERPRINT_PID', 93);
define('WEBDAVCLIENT_SERVERCERTKEYUSAGE_PID', 94);
define('WEBDAVCLIENT_SERVERCERTPUBLICKEYBYTES_PID', 95);
define('WEBDAVCLIENT_SERVERCERTSELFSIGNED_PID', 96);
define('WEBDAVCLIENT_SERVERCERTSERIALNUMBER_PID', 97);
define('WEBDAVCLIENT_SERVERCERTSIGALGORITHM_PID', 98);
define('WEBDAVCLIENT_SERVERCERTSUBJECT_PID', 99);
define('WEBDAVCLIENT_SERVERCERTSUBJECTKEYID_PID', 100);
define('WEBDAVCLIENT_SERVERCERTSUBJECTRDN_PID', 101);
define('WEBDAVCLIENT_SERVERCERTVALIDFROM_PID', 102);
define('WEBDAVCLIENT_SERVERCERTVALIDTO_PID', 103);
define('WEBDAVCLIENT_SOCKETDNSMODE_PID', 104);
define('WEBDAVCLIENT_SOCKETDNSPORT_PID', 105);
define('WEBDAVCLIENT_SOCKETDNSQUERYTIMEOUT_PID', 106);
define('WEBDAVCLIENT_SOCKETDNSSERVERS_PID', 107);
define('WEBDAVCLIENT_SOCKETDNSTOTALTIMEOUT_PID', 108);
define('WEBDAVCLIENT_SOCKETINCOMINGSPEEDLIMIT_PID', 109);
define('WEBDAVCLIENT_SOCKETLOCALADDRESS_PID', 110);
define('WEBDAVCLIENT_SOCKETLOCALPORT_PID', 111);
define('WEBDAVCLIENT_SOCKETOUTGOINGSPEEDLIMIT_PID', 112);
define('WEBDAVCLIENT_SOCKETTIMEOUT_PID', 113);
define('WEBDAVCLIENT_SOCKETUSEIPV6_PID', 114);
define('WEBDAVCLIENT_TLSAUTOVALIDATECERTIFICATES_PID', 115);
define('WEBDAVCLIENT_TLSBASECONFIGURATION_PID', 116);
define('WEBDAVCLIENT_TLSCIPHERSUITES_PID', 117);
define('WEBDAVCLIENT_TLSECCURVES_PID', 118);
define('WEBDAVCLIENT_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 119);
define('WEBDAVCLIENT_TLSPRESHAREDIDENTITY_PID', 120);
define('WEBDAVCLIENT_TLSPRESHAREDKEY_PID', 121);
define('WEBDAVCLIENT_TLSPRESHAREDKEYCIPHERSUITE_PID', 122);
define('WEBDAVCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 123);
define('WEBDAVCLIENT_TLSREVOCATIONCHECK_PID', 124);
define('WEBDAVCLIENT_TLSSSLOPTIONS_PID', 125);
define('WEBDAVCLIENT_TLSTLSMODE_PID', 126);
define('WEBDAVCLIENT_TLSUSEEXTENDEDMASTERSECRET_PID', 127);
define('WEBDAVCLIENT_TLSUSESESSIONRESUMPTION_PID', 128);
define('WEBDAVCLIENT_TLSVERSIONS_PID', 129);
define('WEBDAVCLIENT_TRUSTEDCERTCOUNT_PID', 130);
define('WEBDAVCLIENT_TRUSTEDCERTBYTES_PID', 131);
define('WEBDAVCLIENT_TRUSTEDCERTHANDLE_PID', 132);
define('WEBDAVCLIENT_USERNAME_PID', 133);


/*
 * WebDAVClient Enums
 */

define('WEBDAVCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID', 0);
define('WEBDAVCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('WEBDAVCLIENT_CONNINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('WEBDAVCLIENT_CONNINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('WEBDAVCLIENT_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('WEBDAVCLIENT_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('WEBDAVCLIENT_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('WEBDAVCLIENT_EXTERNALCRYPTOMODE_DISABLED', 1);
define('WEBDAVCLIENT_EXTERNALCRYPTOMODE_GENERIC', 2);

define('WEBDAVCLIENT_LOCKDEPTH_ZERO', 0);
define('WEBDAVCLIENT_LOCKDEPTH_ONE', 1);
define('WEBDAVCLIENT_LOCKDEPTH_INFINITY', 2);

define('WEBDAVCLIENT_LOCKSCOPE_EXCLUSIVE', 0);
define('WEBDAVCLIENT_LOCKSCOPE_SHARED', 1);

define('WEBDAVCLIENT_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('WEBDAVCLIENT_PROXYAUTHENTICATION_BASIC', 1);
define('WEBDAVCLIENT_PROXYAUTHENTICATION_DIGEST', 2);
define('WEBDAVCLIENT_PROXYAUTHENTICATION_NTLM', 3);

define('WEBDAVCLIENT_PROXYPROXYTYPE_NONE', 0);
define('WEBDAVCLIENT_PROXYPROXYTYPE_SOCKS_4', 1);
define('WEBDAVCLIENT_PROXYPROXYTYPE_SOCKS_5', 2);
define('WEBDAVCLIENT_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('WEBDAVCLIENT_PROXYPROXYTYPE_HTTP', 4);

define('WEBDAVCLIENT_SOCKETDNSMODE_AUTO', 0);
define('WEBDAVCLIENT_SOCKETDNSMODE_PLATFORM', 1);
define('WEBDAVCLIENT_SOCKETDNSMODE_OWN', 2);
define('WEBDAVCLIENT_SOCKETDNSMODE_OWN_SECURE', 3);

define('WEBDAVCLIENT_TLSBASECONFIGURATION_DEFAULT', 0);
define('WEBDAVCLIENT_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('WEBDAVCLIENT_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('WEBDAVCLIENT_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('WEBDAVCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('WEBDAVCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('WEBDAVCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('WEBDAVCLIENT_TLSREVOCATIONCHECK_NONE', 0);
define('WEBDAVCLIENT_TLSREVOCATIONCHECK_AUTO', 1);
define('WEBDAVCLIENT_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('WEBDAVCLIENT_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('WEBDAVCLIENT_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('WEBDAVCLIENT_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('WEBDAVCLIENT_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('WEBDAVCLIENT_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('WEBDAVCLIENT_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('WEBDAVCLIENT_TLSTLSMODE_DEFAULT', 0);
define('WEBDAVCLIENT_TLSTLSMODE_NO_TLS', 1);
define('WEBDAVCLIENT_TLSTLSMODE_EXPLICIT_TLS', 2);
define('WEBDAVCLIENT_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * WebDAVClient Methods
 */

define('WEBDAVCLIENT_CONFIG_MID', 2);
define('WEBDAVCLIENT_CONNECT_MID', 3);
define('WEBDAVCLIENT_COPY_MID', 4);
define('WEBDAVCLIENT_CUSTOMREQUEST_MID', 5);
define('WEBDAVCLIENT_DELETEDIR_MID', 6);
define('WEBDAVCLIENT_DELETEFILE_MID', 7);
define('WEBDAVCLIENT_DIREXISTS_MID', 8);
define('WEBDAVCLIENT_DISCONNECT_MID', 9);
define('WEBDAVCLIENT_DOWNLOADFILE_MID', 10);
define('WEBDAVCLIENT_FILEEXISTS_MID', 12);
define('WEBDAVCLIENT_GETFILESIZE_MID', 13);
define('WEBDAVCLIENT_LISTDIR_MID', 14);
define('WEBDAVCLIENT_LISTDIRRECURSIVE_MID', 15);
define('WEBDAVCLIENT_LOCK_MID', 16);
define('WEBDAVCLIENT_MAKEDIR_MID', 17);
define('WEBDAVCLIENT_MOVEFILE_MID', 18);
define('WEBDAVCLIENT_REFRESHLOCK_MID', 19);
define('WEBDAVCLIENT_RENAME_MID', 20);
define('WEBDAVCLIENT_UNLOCK_MID', 21);
define('WEBDAVCLIENT_UPLOADFILE_MID', 22);


/*
 * WebDAVClient Events
 */
  
define('WEBDAVCLIENT_CERTIFICATEVALIDATE_EID', 1);
define('WEBDAVCLIENT_ERROR_EID', 2);
define('WEBDAVCLIENT_EXTERNALSIGN_EID', 3);
define('WEBDAVCLIENT_LISTENTRY_EID', 4);
define('WEBDAVCLIENT_OPERATIONERROR_EID', 5);
define('WEBDAVCLIENT_PROGRESS_EID', 6);

/*
 * WebDAVServer Properties
 */

define('WEBDAVSERVER_ACTIVE_PID', 1);
define('WEBDAVSERVER_AUTHBASIC_PID', 2);
define('WEBDAVSERVER_AUTHDIGEST_PID', 3);
define('WEBDAVSERVER_AUTHDIGESTEXPIRE_PID', 4);
define('WEBDAVSERVER_AUTHREALM_PID', 5);
define('WEBDAVSERVER_BOUNDPORT_PID', 6);
define('WEBDAVSERVER_DOCUMENTROOT_PID', 7);
define('WEBDAVSERVER_ERRORORIGIN_PID', 8);
define('WEBDAVSERVER_ERRORSEVERITY_PID', 9);
define('WEBDAVSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 10);
define('WEBDAVSERVER_EXTERNALCRYPTODATA_PID', 11);
define('WEBDAVSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 12);
define('WEBDAVSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 13);
define('WEBDAVSERVER_EXTERNALCRYPTOKEYID_PID', 14);
define('WEBDAVSERVER_EXTERNALCRYPTOKEYSECRET_PID', 15);
define('WEBDAVSERVER_EXTERNALCRYPTOMETHOD_PID', 16);
define('WEBDAVSERVER_EXTERNALCRYPTOMODE_PID', 17);
define('WEBDAVSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 18);
define('WEBDAVSERVER_HOST_PID', 19);
define('WEBDAVSERVER_METADATAFLUSHTIMEOUT_PID', 20);
define('WEBDAVSERVER_METADATAROOT_PID', 21);
define('WEBDAVSERVER_PINNEDCLIENTADDRESS_PID', 22);
define('WEBDAVSERVER_PINNEDCLIENTCHAINVALIDATIONDETAILS_PID', 23);
define('WEBDAVSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_PID', 24);
define('WEBDAVSERVER_PINNEDCLIENTCIPHERSUITE_PID', 25);
define('WEBDAVSERVER_PINNEDCLIENTCLIENTAUTHENTICATED_PID', 26);
define('WEBDAVSERVER_PINNEDCLIENTDIGESTALGORITHM_PID', 27);
define('WEBDAVSERVER_PINNEDCLIENTENCRYPTIONALGORITHM_PID', 28);
define('WEBDAVSERVER_PINNEDCLIENTID_PID', 29);
define('WEBDAVSERVER_PINNEDCLIENTKEYEXCHANGEALGORITHM_PID', 30);
define('WEBDAVSERVER_PINNEDCLIENTKEYEXCHANGEKEYBITS_PID', 31);
define('WEBDAVSERVER_PINNEDCLIENTNAMEDECCURVE_PID', 32);
define('WEBDAVSERVER_PINNEDCLIENTPFSCIPHER_PID', 33);
define('WEBDAVSERVER_PINNEDCLIENTPORT_PID', 34);
define('WEBDAVSERVER_PINNEDCLIENTPUBLICKEYBITS_PID', 35);
define('WEBDAVSERVER_PINNEDCLIENTRESUMEDSESSION_PID', 36);
define('WEBDAVSERVER_PINNEDCLIENTSECURECONNECTION_PID', 37);
define('WEBDAVSERVER_PINNEDCLIENTSIGNATUREALGORITHM_PID', 38);
define('WEBDAVSERVER_PINNEDCLIENTSYMMETRICBLOCKSIZE_PID', 39);
define('WEBDAVSERVER_PINNEDCLIENTSYMMETRICKEYBITS_PID', 40);
define('WEBDAVSERVER_PINNEDCLIENTTOTALBYTESRECEIVED_PID', 41);
define('WEBDAVSERVER_PINNEDCLIENTTOTALBYTESSENT_PID', 42);
define('WEBDAVSERVER_PINNEDCLIENTVALIDATIONLOG_PID', 43);
define('WEBDAVSERVER_PINNEDCLIENTVERSION_PID', 44);
define('WEBDAVSERVER_PINNEDCLIENTCERTCOUNT_PID', 45);
define('WEBDAVSERVER_PINNEDCLIENTCERTBYTES_PID', 46);
define('WEBDAVSERVER_PINNEDCLIENTCERTCA_PID', 47);
define('WEBDAVSERVER_PINNEDCLIENTCERTCAKEYID_PID', 48);
define('WEBDAVSERVER_PINNEDCLIENTCERTCRLDISTRIBUTIONPOINTS_PID', 49);
define('WEBDAVSERVER_PINNEDCLIENTCERTCURVE_PID', 50);
define('WEBDAVSERVER_PINNEDCLIENTCERTFINGERPRINT_PID', 51);
define('WEBDAVSERVER_PINNEDCLIENTCERTFRIENDLYNAME_PID', 52);
define('WEBDAVSERVER_PINNEDCLIENTCERTHANDLE_PID', 53);
define('WEBDAVSERVER_PINNEDCLIENTCERTHASHALGORITHM_PID', 54);
define('WEBDAVSERVER_PINNEDCLIENTCERTISSUER_PID', 55);
define('WEBDAVSERVER_PINNEDCLIENTCERTISSUERRDN_PID', 56);
define('WEBDAVSERVER_PINNEDCLIENTCERTKEYALGORITHM_PID', 57);
define('WEBDAVSERVER_PINNEDCLIENTCERTKEYBITS_PID', 58);
define('WEBDAVSERVER_PINNEDCLIENTCERTKEYFINGERPRINT_PID', 59);
define('WEBDAVSERVER_PINNEDCLIENTCERTKEYUSAGE_PID', 60);
define('WEBDAVSERVER_PINNEDCLIENTCERTKEYVALID_PID', 61);
define('WEBDAVSERVER_PINNEDCLIENTCERTOCSPLOCATIONS_PID', 62);
define('WEBDAVSERVER_PINNEDCLIENTCERTORIGIN_PID', 63);
define('WEBDAVSERVER_PINNEDCLIENTCERTPOLICYIDS_PID', 64);
define('WEBDAVSERVER_PINNEDCLIENTCERTPRIVATEKEYBYTES_PID', 65);
define('WEBDAVSERVER_PINNEDCLIENTCERTPRIVATEKEYEXISTS_PID', 66);
define('WEBDAVSERVER_PINNEDCLIENTCERTPRIVATEKEYEXTRACTABLE_PID', 67);
define('WEBDAVSERVER_PINNEDCLIENTCERTPUBLICKEYBYTES_PID', 68);
define('WEBDAVSERVER_PINNEDCLIENTCERTSELFSIGNED_PID', 69);
define('WEBDAVSERVER_PINNEDCLIENTCERTSERIALNUMBER_PID', 70);
define('WEBDAVSERVER_PINNEDCLIENTCERTSIGALGORITHM_PID', 71);
define('WEBDAVSERVER_PINNEDCLIENTCERTSUBJECT_PID', 72);
define('WEBDAVSERVER_PINNEDCLIENTCERTSUBJECTKEYID_PID', 73);
define('WEBDAVSERVER_PINNEDCLIENTCERTSUBJECTRDN_PID', 74);
define('WEBDAVSERVER_PINNEDCLIENTCERTVALIDFROM_PID', 75);
define('WEBDAVSERVER_PINNEDCLIENTCERTVALIDTO_PID', 76);
define('WEBDAVSERVER_PORT_PID', 77);
define('WEBDAVSERVER_PORTRANGEFROM_PID', 78);
define('WEBDAVSERVER_PORTRANGETO_PID', 79);
define('WEBDAVSERVER_SERVERCERTCOUNT_PID', 80);
define('WEBDAVSERVER_SERVERCERTBYTES_PID', 81);
define('WEBDAVSERVER_SERVERCERTHANDLE_PID', 82);
define('WEBDAVSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 83);
define('WEBDAVSERVER_SOCKETLOCALADDRESS_PID', 84);
define('WEBDAVSERVER_SOCKETLOCALPORT_PID', 85);
define('WEBDAVSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 86);
define('WEBDAVSERVER_SOCKETTIMEOUT_PID', 87);
define('WEBDAVSERVER_SOCKETUSEIPV6_PID', 88);
define('WEBDAVSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 89);
define('WEBDAVSERVER_TLSBASECONFIGURATION_PID', 90);
define('WEBDAVSERVER_TLSCIPHERSUITES_PID', 91);
define('WEBDAVSERVER_TLSECCURVES_PID', 92);
define('WEBDAVSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 93);
define('WEBDAVSERVER_TLSPRESHAREDIDENTITY_PID', 94);
define('WEBDAVSERVER_TLSPRESHAREDKEY_PID', 95);
define('WEBDAVSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 96);
define('WEBDAVSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 97);
define('WEBDAVSERVER_TLSREVOCATIONCHECK_PID', 98);
define('WEBDAVSERVER_TLSSSLOPTIONS_PID', 99);
define('WEBDAVSERVER_TLSTLSMODE_PID', 100);
define('WEBDAVSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 101);
define('WEBDAVSERVER_TLSUSESESSIONRESUMPTION_PID', 102);
define('WEBDAVSERVER_TLSVERSIONS_PID', 103);
define('WEBDAVSERVER_USERCOUNT_PID', 104);
define('WEBDAVSERVER_USERASSOCIATEDDATA_PID', 105);
define('WEBDAVSERVER_USERBASEPATH_PID', 106);
define('WEBDAVSERVER_USERCERT_PID', 107);
define('WEBDAVSERVER_USERDATA_PID', 108);
define('WEBDAVSERVER_USERHANDLE_PID', 109);
define('WEBDAVSERVER_USERHASHALGORITHM_PID', 110);
define('WEBDAVSERVER_USERINCOMINGSPEEDLIMIT_PID', 111);
define('WEBDAVSERVER_USEROTPALGORITHM_PID', 112);
define('WEBDAVSERVER_USEROTPVALUE_PID', 113);
define('WEBDAVSERVER_USEROUTGOINGSPEEDLIMIT_PID', 114);
define('WEBDAVSERVER_USERPASSWORD_PID', 115);
define('WEBDAVSERVER_USERPASSWORDLEN_PID', 116);
define('WEBDAVSERVER_USERSHAREDSECRET_PID', 117);
define('WEBDAVSERVER_USERSSHKEY_PID', 118);
define('WEBDAVSERVER_USERUSERNAME_PID', 119);
define('WEBDAVSERVER_USETLS_PID', 120);
define('WEBDAVSERVER_WEBSITENAME_PID', 121);


/*
 * WebDAVServer Enums
 */

define('WEBDAVSERVER_ERRORORIGIN_LOCAL', 0);
define('WEBDAVSERVER_ERRORORIGIN_REMOTE', 1);

define('WEBDAVSERVER_ERRORSEVERITY_WARNING', 1);
define('WEBDAVSERVER_ERRORSEVERITY_FATAL', 2);

define('WEBDAVSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('WEBDAVSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('WEBDAVSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('WEBDAVSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('WEBDAVSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('WEBDAVSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID', 0);
define('WEBDAVSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('WEBDAVSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_INVALID', 2);
define('WEBDAVSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('WEBDAVSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('WEBDAVSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('WEBDAVSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('WEBDAVSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('WEBDAVSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('WEBDAVSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('WEBDAVSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('WEBDAVSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('WEBDAVSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('WEBDAVSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('WEBDAVSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('WEBDAVSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('WEBDAVSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('WEBDAVSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('WEBDAVSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('WEBDAVSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('WEBDAVSERVER_TLSTLSMODE_DEFAULT', 0);
define('WEBDAVSERVER_TLSTLSMODE_NO_TLS', 1);
define('WEBDAVSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('WEBDAVSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);

define('WEBDAVSERVER_USEROTPALGORITHM_HMAC', 0);
define('WEBDAVSERVER_USEROTPALGORITHM_TIME', 1);



/*
 * WebDAVServer Methods
 */

define('WEBDAVSERVER_CONFIG_MID', 2);
define('WEBDAVSERVER_DROPCLIENT_MID', 3);
define('WEBDAVSERVER_LISTCLIENTS_MID', 4);
define('WEBDAVSERVER_PINCLIENT_MID', 5);
define('WEBDAVSERVER_START_MID', 6);
define('WEBDAVSERVER_STOP_MID', 7);


/*
 * WebDAVServer Events
 */
  
define('WEBDAVSERVER_ACCEPT_EID', 1);
define('WEBDAVSERVER_AUTHATTEMPT_EID', 2);
define('WEBDAVSERVER_BEFOREREQUEST_EID', 3);
define('WEBDAVSERVER_CERTIFICATEVALIDATE_EID', 4);
define('WEBDAVSERVER_CONNECT_EID', 5);
define('WEBDAVSERVER_DATA_EID', 6);
define('WEBDAVSERVER_DISCONNECT_EID', 7);
define('WEBDAVSERVER_ERROR_EID', 8);
define('WEBDAVSERVER_EXTERNALSIGN_EID', 9);
define('WEBDAVSERVER_FILEERROR_EID', 10);
define('WEBDAVSERVER_QUERYQUOTA_EID', 11);
define('WEBDAVSERVER_TLSESTABLISHED_EID', 12);
define('WEBDAVSERVER_TLSPSK_EID', 13);
define('WEBDAVSERVER_TLSSHUTDOWN_EID', 14);

/*
 * WebSocketClient Properties
 */

define('WEBSOCKETCLIENT_BLOCKEDCERTCOUNT_PID', 1);
define('WEBSOCKETCLIENT_BLOCKEDCERTBYTES_PID', 2);
define('WEBSOCKETCLIENT_BLOCKEDCERTHANDLE_PID', 3);
define('WEBSOCKETCLIENT_CLIENTCERTCOUNT_PID', 4);
define('WEBSOCKETCLIENT_CLIENTCERTBYTES_PID', 5);
define('WEBSOCKETCLIENT_CLIENTCERTHANDLE_PID', 6);
define('WEBSOCKETCLIENT_CONNECTED_PID', 7);
define('WEBSOCKETCLIENT_CONNINFOAEADCIPHER_PID', 8);
define('WEBSOCKETCLIENT_CONNINFOCHAINVALIDATIONDETAILS_PID', 9);
define('WEBSOCKETCLIENT_CONNINFOCHAINVALIDATIONRESULT_PID', 10);
define('WEBSOCKETCLIENT_CONNINFOCIPHERSUITE_PID', 11);
define('WEBSOCKETCLIENT_CONNINFOCLIENTAUTHENTICATED_PID', 12);
define('WEBSOCKETCLIENT_CONNINFOCONNECTIONESTABLISHED_PID', 13);
define('WEBSOCKETCLIENT_CONNINFOCONNECTIONID_PID', 14);
define('WEBSOCKETCLIENT_CONNINFODIGESTALGORITHM_PID', 15);
define('WEBSOCKETCLIENT_CONNINFOENCRYPTIONALGORITHM_PID', 16);
define('WEBSOCKETCLIENT_CONNINFOEXPORTABLE_PID', 17);
define('WEBSOCKETCLIENT_CONNINFOKEYEXCHANGEALGORITHM_PID', 18);
define('WEBSOCKETCLIENT_CONNINFOKEYEXCHANGEKEYBITS_PID', 19);
define('WEBSOCKETCLIENT_CONNINFONAMEDECCURVE_PID', 20);
define('WEBSOCKETCLIENT_CONNINFOPFSCIPHER_PID', 21);
define('WEBSOCKETCLIENT_CONNINFOPRESHAREDIDENTITYHINT_PID', 22);
define('WEBSOCKETCLIENT_CONNINFOPUBLICKEYBITS_PID', 23);
define('WEBSOCKETCLIENT_CONNINFORESUMEDSESSION_PID', 24);
define('WEBSOCKETCLIENT_CONNINFOSECURECONNECTION_PID', 25);
define('WEBSOCKETCLIENT_CONNINFOSERVERAUTHENTICATED_PID', 26);
define('WEBSOCKETCLIENT_CONNINFOSIGNATUREALGORITHM_PID', 27);
define('WEBSOCKETCLIENT_CONNINFOSYMMETRICBLOCKSIZE_PID', 28);
define('WEBSOCKETCLIENT_CONNINFOSYMMETRICKEYBITS_PID', 29);
define('WEBSOCKETCLIENT_CONNINFOTOTALBYTESRECEIVED_PID', 30);
define('WEBSOCKETCLIENT_CONNINFOTOTALBYTESSENT_PID', 31);
define('WEBSOCKETCLIENT_CONNINFOVALIDATIONLOG_PID', 32);
define('WEBSOCKETCLIENT_CONNINFOVERSION_PID', 33);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOCUSTOMPARAMS_PID', 34);
define('WEBSOCKETCLIENT_EXTERNALCRYPTODATA_PID', 35);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 36);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOHASHALGORITHM_PID', 37);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOKEYID_PID', 38);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOKEYSECRET_PID', 39);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOMETHOD_PID', 40);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOMODE_PID', 41);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 42);
define('WEBSOCKETCLIENT_KNOWNCERTCOUNT_PID', 43);
define('WEBSOCKETCLIENT_KNOWNCERTBYTES_PID', 44);
define('WEBSOCKETCLIENT_KNOWNCERTHANDLE_PID', 45);
define('WEBSOCKETCLIENT_KNOWNCRLCOUNT_PID', 46);
define('WEBSOCKETCLIENT_KNOWNCRLBYTES_PID', 47);
define('WEBSOCKETCLIENT_KNOWNCRLHANDLE_PID', 48);
define('WEBSOCKETCLIENT_KNOWNOCSPCOUNT_PID', 49);
define('WEBSOCKETCLIENT_KNOWNOCSPBYTES_PID', 50);
define('WEBSOCKETCLIENT_KNOWNOCSPHANDLE_PID', 51);
define('WEBSOCKETCLIENT_PROXYADDRESS_PID', 52);
define('WEBSOCKETCLIENT_PROXYAUTHENTICATION_PID', 53);
define('WEBSOCKETCLIENT_PROXYPASSWORD_PID', 54);
define('WEBSOCKETCLIENT_PROXYPORT_PID', 55);
define('WEBSOCKETCLIENT_PROXYPROXYTYPE_PID', 56);
define('WEBSOCKETCLIENT_PROXYREQUESTHEADERS_PID', 57);
define('WEBSOCKETCLIENT_PROXYRESPONSEBODY_PID', 58);
define('WEBSOCKETCLIENT_PROXYRESPONSEHEADERS_PID', 59);
define('WEBSOCKETCLIENT_PROXYUSEIPV6_PID', 60);
define('WEBSOCKETCLIENT_PROXYUSEPROXY_PID', 61);
define('WEBSOCKETCLIENT_PROXYUSERNAME_PID', 62);
define('WEBSOCKETCLIENT_REQPARAMSACCEPT_PID', 63);
define('WEBSOCKETCLIENT_REQPARAMSACCEPTCHARSET_PID', 64);
define('WEBSOCKETCLIENT_REQPARAMSACCEPTLANGUAGE_PID', 65);
define('WEBSOCKETCLIENT_REQPARAMSACCEPTRANGEEND_PID', 66);
define('WEBSOCKETCLIENT_REQPARAMSACCEPTRANGESTART_PID', 67);
define('WEBSOCKETCLIENT_REQPARAMSAUTHORIZATION_PID', 68);
define('WEBSOCKETCLIENT_REQPARAMSCONNECTION_PID', 69);
define('WEBSOCKETCLIENT_REQPARAMSCONTENTLENGTH_PID', 70);
define('WEBSOCKETCLIENT_REQPARAMSCONTENTRANGEEND_PID', 71);
define('WEBSOCKETCLIENT_REQPARAMSCONTENTRANGEFULLSIZE_PID', 72);
define('WEBSOCKETCLIENT_REQPARAMSCONTENTRANGESTART_PID', 73);
define('WEBSOCKETCLIENT_REQPARAMSCONTENTTYPE_PID', 74);
define('WEBSOCKETCLIENT_REQPARAMSCOOKIE_PID', 75);
define('WEBSOCKETCLIENT_REQPARAMSCUSTOMHEADERS_PID', 76);
define('WEBSOCKETCLIENT_REQPARAMSDATE_PID', 77);
define('WEBSOCKETCLIENT_REQPARAMSFROM_PID', 78);
define('WEBSOCKETCLIENT_REQPARAMSHOST_PID', 79);
define('WEBSOCKETCLIENT_REQPARAMSHTTPVERSION_PID', 80);
define('WEBSOCKETCLIENT_REQPARAMSIFMATCH_PID', 81);
define('WEBSOCKETCLIENT_REQPARAMSIFMODIFIEDSINCE_PID', 82);
define('WEBSOCKETCLIENT_REQPARAMSIFNONEMATCH_PID', 83);
define('WEBSOCKETCLIENT_REQPARAMSIFUNMODIFIEDSINCE_PID', 84);
define('WEBSOCKETCLIENT_REQPARAMSPASSWORD_PID', 85);
define('WEBSOCKETCLIENT_REQPARAMSREFERER_PID', 86);
define('WEBSOCKETCLIENT_REQPARAMSUSERAGENT_PID', 87);
define('WEBSOCKETCLIENT_REQPARAMSUSERNAME_PID', 88);
define('WEBSOCKETCLIENT_SERVERCERTCOUNT_PID', 89);
define('WEBSOCKETCLIENT_SERVERCERTBYTES_PID', 90);
define('WEBSOCKETCLIENT_SERVERCERTCAKEYID_PID', 91);
define('WEBSOCKETCLIENT_SERVERCERTFINGERPRINT_PID', 92);
define('WEBSOCKETCLIENT_SERVERCERTHANDLE_PID', 93);
define('WEBSOCKETCLIENT_SERVERCERTISSUER_PID', 94);
define('WEBSOCKETCLIENT_SERVERCERTISSUERRDN_PID', 95);
define('WEBSOCKETCLIENT_SERVERCERTKEYALGORITHM_PID', 96);
define('WEBSOCKETCLIENT_SERVERCERTKEYBITS_PID', 97);
define('WEBSOCKETCLIENT_SERVERCERTKEYFINGERPRINT_PID', 98);
define('WEBSOCKETCLIENT_SERVERCERTKEYUSAGE_PID', 99);
define('WEBSOCKETCLIENT_SERVERCERTPUBLICKEYBYTES_PID', 100);
define('WEBSOCKETCLIENT_SERVERCERTSELFSIGNED_PID', 101);
define('WEBSOCKETCLIENT_SERVERCERTSERIALNUMBER_PID', 102);
define('WEBSOCKETCLIENT_SERVERCERTSIGALGORITHM_PID', 103);
define('WEBSOCKETCLIENT_SERVERCERTSUBJECT_PID', 104);
define('WEBSOCKETCLIENT_SERVERCERTSUBJECTKEYID_PID', 105);
define('WEBSOCKETCLIENT_SERVERCERTSUBJECTRDN_PID', 106);
define('WEBSOCKETCLIENT_SERVERCERTVALIDFROM_PID', 107);
define('WEBSOCKETCLIENT_SERVERCERTVALIDTO_PID', 108);
define('WEBSOCKETCLIENT_SOCKETDNSMODE_PID', 109);
define('WEBSOCKETCLIENT_SOCKETDNSPORT_PID', 110);
define('WEBSOCKETCLIENT_SOCKETDNSQUERYTIMEOUT_PID', 111);
define('WEBSOCKETCLIENT_SOCKETDNSSERVERS_PID', 112);
define('WEBSOCKETCLIENT_SOCKETDNSTOTALTIMEOUT_PID', 113);
define('WEBSOCKETCLIENT_SOCKETINCOMINGSPEEDLIMIT_PID', 114);
define('WEBSOCKETCLIENT_SOCKETLOCALADDRESS_PID', 115);
define('WEBSOCKETCLIENT_SOCKETLOCALPORT_PID', 116);
define('WEBSOCKETCLIENT_SOCKETOUTGOINGSPEEDLIMIT_PID', 117);
define('WEBSOCKETCLIENT_SOCKETTIMEOUT_PID', 118);
define('WEBSOCKETCLIENT_SOCKETUSEIPV6_PID', 119);
define('WEBSOCKETCLIENT_TLSAUTOVALIDATECERTIFICATES_PID', 120);
define('WEBSOCKETCLIENT_TLSBASECONFIGURATION_PID', 121);
define('WEBSOCKETCLIENT_TLSCIPHERSUITES_PID', 122);
define('WEBSOCKETCLIENT_TLSECCURVES_PID', 123);
define('WEBSOCKETCLIENT_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 124);
define('WEBSOCKETCLIENT_TLSPRESHAREDIDENTITY_PID', 125);
define('WEBSOCKETCLIENT_TLSPRESHAREDKEY_PID', 126);
define('WEBSOCKETCLIENT_TLSPRESHAREDKEYCIPHERSUITE_PID', 127);
define('WEBSOCKETCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 128);
define('WEBSOCKETCLIENT_TLSREVOCATIONCHECK_PID', 129);
define('WEBSOCKETCLIENT_TLSSSLOPTIONS_PID', 130);
define('WEBSOCKETCLIENT_TLSTLSMODE_PID', 131);
define('WEBSOCKETCLIENT_TLSUSEEXTENDEDMASTERSECRET_PID', 132);
define('WEBSOCKETCLIENT_TLSUSESESSIONRESUMPTION_PID', 133);
define('WEBSOCKETCLIENT_TLSVERSIONS_PID', 134);
define('WEBSOCKETCLIENT_TRUSTEDCERTCOUNT_PID', 135);
define('WEBSOCKETCLIENT_TRUSTEDCERTBYTES_PID', 136);
define('WEBSOCKETCLIENT_TRUSTEDCERTHANDLE_PID', 137);
define('WEBSOCKETCLIENT_USEDIGESTAUTH_PID', 138);
define('WEBSOCKETCLIENT_USENTLMAUTH_PID', 139);


/*
 * WebSocketClient Enums
 */

define('WEBSOCKETCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID', 0);
define('WEBSOCKETCLIENT_CONNINFOCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('WEBSOCKETCLIENT_CONNINFOCHAINVALIDATIONRESULT_INVALID', 2);
define('WEBSOCKETCLIENT_CONNINFOCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('WEBSOCKETCLIENT_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('WEBSOCKETCLIENT_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOMODE_DISABLED', 1);
define('WEBSOCKETCLIENT_EXTERNALCRYPTOMODE_GENERIC', 2);

define('WEBSOCKETCLIENT_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('WEBSOCKETCLIENT_PROXYAUTHENTICATION_BASIC', 1);
define('WEBSOCKETCLIENT_PROXYAUTHENTICATION_DIGEST', 2);
define('WEBSOCKETCLIENT_PROXYAUTHENTICATION_NTLM', 3);

define('WEBSOCKETCLIENT_PROXYPROXYTYPE_NONE', 0);
define('WEBSOCKETCLIENT_PROXYPROXYTYPE_SOCKS_4', 1);
define('WEBSOCKETCLIENT_PROXYPROXYTYPE_SOCKS_5', 2);
define('WEBSOCKETCLIENT_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('WEBSOCKETCLIENT_PROXYPROXYTYPE_HTTP', 4);

define('WEBSOCKETCLIENT_REQPARAMSHTTPVERSION_HTTP10', 0);
define('WEBSOCKETCLIENT_REQPARAMSHTTPVERSION_HTTP11', 1);

define('WEBSOCKETCLIENT_SOCKETDNSMODE_AUTO', 0);
define('WEBSOCKETCLIENT_SOCKETDNSMODE_PLATFORM', 1);
define('WEBSOCKETCLIENT_SOCKETDNSMODE_OWN', 2);
define('WEBSOCKETCLIENT_SOCKETDNSMODE_OWN_SECURE', 3);

define('WEBSOCKETCLIENT_TLSBASECONFIGURATION_DEFAULT', 0);
define('WEBSOCKETCLIENT_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('WEBSOCKETCLIENT_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('WEBSOCKETCLIENT_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('WEBSOCKETCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('WEBSOCKETCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('WEBSOCKETCLIENT_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('WEBSOCKETCLIENT_TLSREVOCATIONCHECK_NONE', 0);
define('WEBSOCKETCLIENT_TLSREVOCATIONCHECK_AUTO', 1);
define('WEBSOCKETCLIENT_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('WEBSOCKETCLIENT_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('WEBSOCKETCLIENT_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('WEBSOCKETCLIENT_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('WEBSOCKETCLIENT_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('WEBSOCKETCLIENT_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('WEBSOCKETCLIENT_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('WEBSOCKETCLIENT_TLSTLSMODE_DEFAULT', 0);
define('WEBSOCKETCLIENT_TLSTLSMODE_NO_TLS', 1);
define('WEBSOCKETCLIENT_TLSTLSMODE_EXPLICIT_TLS', 2);
define('WEBSOCKETCLIENT_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * WebSocketClient Methods
 */

define('WEBSOCKETCLIENT_CONFIG_MID', 2);
define('WEBSOCKETCLIENT_CONNECT_MID', 3);
define('WEBSOCKETCLIENT_DISCONNECT_MID', 4);
define('WEBSOCKETCLIENT_SENDDATA_MID', 5);
define('WEBSOCKETCLIENT_SENDKEEPALIVE_MID', 6);
define('WEBSOCKETCLIENT_SENDTEXT_MID', 7);


/*
 * WebSocketClient Events
 */
  
define('WEBSOCKETCLIENT_BINARYDATA_EID', 1);
define('WEBSOCKETCLIENT_CERTIFICATEVALIDATE_EID', 2);
define('WEBSOCKETCLIENT_ERROR_EID', 3);
define('WEBSOCKETCLIENT_EXTERNALSIGN_EID', 4);
define('WEBSOCKETCLIENT_KEEPALIVERESPONSE_EID', 5);
define('WEBSOCKETCLIENT_TEXTDATA_EID', 6);

/*
 * WebSocketServer Properties
 */

define('WEBSOCKETSERVER_ACTIVE_PID', 1);
define('WEBSOCKETSERVER_BOUNDPORT_PID', 2);
define('WEBSOCKETSERVER_ERRORORIGIN_PID', 3);
define('WEBSOCKETSERVER_ERRORSEVERITY_PID', 4);
define('WEBSOCKETSERVER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 5);
define('WEBSOCKETSERVER_EXTERNALCRYPTODATA_PID', 6);
define('WEBSOCKETSERVER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 7);
define('WEBSOCKETSERVER_EXTERNALCRYPTOHASHALGORITHM_PID', 8);
define('WEBSOCKETSERVER_EXTERNALCRYPTOKEYID_PID', 9);
define('WEBSOCKETSERVER_EXTERNALCRYPTOKEYSECRET_PID', 10);
define('WEBSOCKETSERVER_EXTERNALCRYPTOMETHOD_PID', 11);
define('WEBSOCKETSERVER_EXTERNALCRYPTOMODE_PID', 12);
define('WEBSOCKETSERVER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 13);
define('WEBSOCKETSERVER_HANDSHAKETIMEOUT_PID', 14);
define('WEBSOCKETSERVER_HOST_PID', 15);
define('WEBSOCKETSERVER_PINNEDCLIENTADDRESS_PID', 16);
define('WEBSOCKETSERVER_PINNEDCLIENTCHAINVALIDATIONDETAILS_PID', 17);
define('WEBSOCKETSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_PID', 18);
define('WEBSOCKETSERVER_PINNEDCLIENTCIPHERSUITE_PID', 19);
define('WEBSOCKETSERVER_PINNEDCLIENTCLIENTAUTHENTICATED_PID', 20);
define('WEBSOCKETSERVER_PINNEDCLIENTDIGESTALGORITHM_PID', 21);
define('WEBSOCKETSERVER_PINNEDCLIENTENCRYPTIONALGORITHM_PID', 22);
define('WEBSOCKETSERVER_PINNEDCLIENTID_PID', 23);
define('WEBSOCKETSERVER_PINNEDCLIENTKEYEXCHANGEALGORITHM_PID', 24);
define('WEBSOCKETSERVER_PINNEDCLIENTKEYEXCHANGEKEYBITS_PID', 25);
define('WEBSOCKETSERVER_PINNEDCLIENTNAMEDECCURVE_PID', 26);
define('WEBSOCKETSERVER_PINNEDCLIENTPFSCIPHER_PID', 27);
define('WEBSOCKETSERVER_PINNEDCLIENTPORT_PID', 28);
define('WEBSOCKETSERVER_PINNEDCLIENTPUBLICKEYBITS_PID', 29);
define('WEBSOCKETSERVER_PINNEDCLIENTRESUMEDSESSION_PID', 30);
define('WEBSOCKETSERVER_PINNEDCLIENTSECURECONNECTION_PID', 31);
define('WEBSOCKETSERVER_PINNEDCLIENTSIGNATUREALGORITHM_PID', 32);
define('WEBSOCKETSERVER_PINNEDCLIENTSYMMETRICBLOCKSIZE_PID', 33);
define('WEBSOCKETSERVER_PINNEDCLIENTSYMMETRICKEYBITS_PID', 34);
define('WEBSOCKETSERVER_PINNEDCLIENTTOTALBYTESRECEIVED_PID', 35);
define('WEBSOCKETSERVER_PINNEDCLIENTTOTALBYTESSENT_PID', 36);
define('WEBSOCKETSERVER_PINNEDCLIENTVALIDATIONLOG_PID', 37);
define('WEBSOCKETSERVER_PINNEDCLIENTVERSION_PID', 38);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTCOUNT_PID', 39);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTBYTES_PID', 40);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTCAKEYID_PID', 41);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTFINGERPRINT_PID', 42);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTHANDLE_PID', 43);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTISSUER_PID', 44);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTISSUERRDN_PID', 45);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTKEYALGORITHM_PID', 46);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTKEYBITS_PID', 47);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTKEYFINGERPRINT_PID', 48);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTKEYUSAGE_PID', 49);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTPUBLICKEYBYTES_PID', 50);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTSELFSIGNED_PID', 51);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTSERIALNUMBER_PID', 52);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTSIGALGORITHM_PID', 53);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTSUBJECT_PID', 54);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTSUBJECTKEYID_PID', 55);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTSUBJECTRDN_PID', 56);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTVALIDFROM_PID', 57);
define('WEBSOCKETSERVER_PINNEDCLIENTCERTVALIDTO_PID', 58);
define('WEBSOCKETSERVER_PORT_PID', 59);
define('WEBSOCKETSERVER_PORTRANGEFROM_PID', 60);
define('WEBSOCKETSERVER_PORTRANGETO_PID', 61);
define('WEBSOCKETSERVER_SERVERCERTCOUNT_PID', 62);
define('WEBSOCKETSERVER_SERVERCERTBYTES_PID', 63);
define('WEBSOCKETSERVER_SERVERCERTHANDLE_PID', 64);
define('WEBSOCKETSERVER_SESSIONTIMEOUT_PID', 65);
define('WEBSOCKETSERVER_SOCKETINCOMINGSPEEDLIMIT_PID', 66);
define('WEBSOCKETSERVER_SOCKETLOCALADDRESS_PID', 67);
define('WEBSOCKETSERVER_SOCKETLOCALPORT_PID', 68);
define('WEBSOCKETSERVER_SOCKETOUTGOINGSPEEDLIMIT_PID', 69);
define('WEBSOCKETSERVER_SOCKETTIMEOUT_PID', 70);
define('WEBSOCKETSERVER_SOCKETUSEIPV6_PID', 71);
define('WEBSOCKETSERVER_TLSAUTOVALIDATECERTIFICATES_PID', 72);
define('WEBSOCKETSERVER_TLSBASECONFIGURATION_PID', 73);
define('WEBSOCKETSERVER_TLSCIPHERSUITES_PID', 74);
define('WEBSOCKETSERVER_TLSECCURVES_PID', 75);
define('WEBSOCKETSERVER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 76);
define('WEBSOCKETSERVER_TLSPRESHAREDIDENTITY_PID', 77);
define('WEBSOCKETSERVER_TLSPRESHAREDKEY_PID', 78);
define('WEBSOCKETSERVER_TLSPRESHAREDKEYCIPHERSUITE_PID', 79);
define('WEBSOCKETSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 80);
define('WEBSOCKETSERVER_TLSREVOCATIONCHECK_PID', 81);
define('WEBSOCKETSERVER_TLSSSLOPTIONS_PID', 82);
define('WEBSOCKETSERVER_TLSTLSMODE_PID', 83);
define('WEBSOCKETSERVER_TLSUSEEXTENDEDMASTERSECRET_PID', 84);
define('WEBSOCKETSERVER_TLSUSESESSIONRESUMPTION_PID', 85);
define('WEBSOCKETSERVER_TLSVERSIONS_PID', 86);
define('WEBSOCKETSERVER_USERCOUNT_PID', 87);
define('WEBSOCKETSERVER_USERASSOCIATEDDATA_PID', 88);
define('WEBSOCKETSERVER_USERBASEPATH_PID', 89);
define('WEBSOCKETSERVER_USERCERT_PID', 90);
define('WEBSOCKETSERVER_USERDATA_PID', 91);
define('WEBSOCKETSERVER_USERHANDLE_PID', 92);
define('WEBSOCKETSERVER_USERHASHALGORITHM_PID', 93);
define('WEBSOCKETSERVER_USERINCOMINGSPEEDLIMIT_PID', 94);
define('WEBSOCKETSERVER_USEROUTGOINGSPEEDLIMIT_PID', 95);
define('WEBSOCKETSERVER_USERPASSWORD_PID', 96);
define('WEBSOCKETSERVER_USERSHAREDSECRET_PID', 97);
define('WEBSOCKETSERVER_USERUSERNAME_PID', 98);
define('WEBSOCKETSERVER_USETLS_PID', 99);
define('WEBSOCKETSERVER_WEBSITENAME_PID', 100);


/*
 * WebSocketServer Enums
 */

define('WEBSOCKETSERVER_ERRORORIGIN_LOCAL', 0);
define('WEBSOCKETSERVER_ERRORORIGIN_REMOTE', 1);

define('WEBSOCKETSERVER_ERRORSEVERITY_WARNING', 1);
define('WEBSOCKETSERVER_ERRORSEVERITY_FATAL', 2);

define('WEBSOCKETSERVER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('WEBSOCKETSERVER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('WEBSOCKETSERVER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('WEBSOCKETSERVER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('WEBSOCKETSERVER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('WEBSOCKETSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID', 0);
define('WEBSOCKETSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('WEBSOCKETSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_INVALID', 2);
define('WEBSOCKETSERVER_PINNEDCLIENTCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('WEBSOCKETSERVER_TLSBASECONFIGURATION_DEFAULT', 0);
define('WEBSOCKETSERVER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('WEBSOCKETSERVER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('WEBSOCKETSERVER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('WEBSOCKETSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('WEBSOCKETSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('WEBSOCKETSERVER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('WEBSOCKETSERVER_TLSREVOCATIONCHECK_NONE', 0);
define('WEBSOCKETSERVER_TLSREVOCATIONCHECK_AUTO', 1);
define('WEBSOCKETSERVER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('WEBSOCKETSERVER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('WEBSOCKETSERVER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('WEBSOCKETSERVER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('WEBSOCKETSERVER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('WEBSOCKETSERVER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('WEBSOCKETSERVER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('WEBSOCKETSERVER_TLSTLSMODE_DEFAULT', 0);
define('WEBSOCKETSERVER_TLSTLSMODE_NO_TLS', 1);
define('WEBSOCKETSERVER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('WEBSOCKETSERVER_TLSTLSMODE_IMPLICIT_TLS', 3);



/*
 * WebSocketServer Methods
 */

define('WEBSOCKETSERVER_CONFIG_MID', 2);
define('WEBSOCKETSERVER_DROPCLIENT_MID', 3);
define('WEBSOCKETSERVER_LISTCLIENTS_MID', 4);
define('WEBSOCKETSERVER_PINCLIENT_MID', 5);
define('WEBSOCKETSERVER_SENDDATA_MID', 6);
define('WEBSOCKETSERVER_SENDKEEPALIVE_MID', 7);
define('WEBSOCKETSERVER_SENDTEXT_MID', 8);
define('WEBSOCKETSERVER_SETRESPONSESTATUS_MID', 9);
define('WEBSOCKETSERVER_SETRESPONSESTRING_MID', 10);
define('WEBSOCKETSERVER_START_MID', 11);
define('WEBSOCKETSERVER_STOP_MID', 12);


/*
 * WebSocketServer Events
 */
  
define('WEBSOCKETSERVER_ACCEPT_EID', 1);
define('WEBSOCKETSERVER_AUTHATTEMPT_EID', 2);
define('WEBSOCKETSERVER_BINARYDATA_EID', 3);
define('WEBSOCKETSERVER_CERTIFICATEVALIDATE_EID', 4);
define('WEBSOCKETSERVER_CONNECT_EID', 5);
define('WEBSOCKETSERVER_DATA_EID', 6);
define('WEBSOCKETSERVER_DISCONNECT_EID', 7);
define('WEBSOCKETSERVER_ERROR_EID', 8);
define('WEBSOCKETSERVER_EXTERNALSIGN_EID', 9);
define('WEBSOCKETSERVER_GETREQUEST_EID', 10);
define('WEBSOCKETSERVER_KEEPALIVERESPONSE_EID', 11);
define('WEBSOCKETSERVER_TEXTDATA_EID', 12);
define('WEBSOCKETSERVER_TLSESTABLISHED_EID', 13);
define('WEBSOCKETSERVER_TLSPSK_EID', 14);
define('WEBSOCKETSERVER_TLSSHUTDOWN_EID', 15);

/*
 * XAdESSigner Properties
 */

define('XADESSIGNER_BLOCKEDCERTCOUNT_PID', 1);
define('XADESSIGNER_BLOCKEDCERTBYTES_PID', 2);
define('XADESSIGNER_BLOCKEDCERTHANDLE_PID', 3);
define('XADESSIGNER_CANONICALIZATIONMETHOD_PID', 4);
define('XADESSIGNER_CHAINVALIDATIONDETAILS_PID', 5);
define('XADESSIGNER_CHAINVALIDATIONRESULT_PID', 6);
define('XADESSIGNER_CLAIMEDSIGNINGTIME_PID', 7);
define('XADESSIGNER_ENABLEXADES_PID', 8);
define('XADESSIGNER_ENCODING_PID', 9);
define('XADESSIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 10);
define('XADESSIGNER_EXTERNALCRYPTODATA_PID', 11);
define('XADESSIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 12);
define('XADESSIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 13);
define('XADESSIGNER_EXTERNALCRYPTOKEYID_PID', 14);
define('XADESSIGNER_EXTERNALCRYPTOKEYSECRET_PID', 15);
define('XADESSIGNER_EXTERNALCRYPTOMETHOD_PID', 16);
define('XADESSIGNER_EXTERNALCRYPTOMODE_PID', 17);
define('XADESSIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 18);
define('XADESSIGNER_HASHALGORITHM_PID', 19);
define('XADESSIGNER_IGNORECHAINVALIDATIONERRORS_PID', 20);
define('XADESSIGNER_INPUTFILE_PID', 21);
define('XADESSIGNER_KNOWNCERTCOUNT_PID', 22);
define('XADESSIGNER_KNOWNCERTBYTES_PID', 23);
define('XADESSIGNER_KNOWNCERTHANDLE_PID', 24);
define('XADESSIGNER_KNOWNCRLCOUNT_PID', 25);
define('XADESSIGNER_KNOWNCRLBYTES_PID', 26);
define('XADESSIGNER_KNOWNCRLHANDLE_PID', 27);
define('XADESSIGNER_KNOWNOCSPCOUNT_PID', 28);
define('XADESSIGNER_KNOWNOCSPBYTES_PID', 29);
define('XADESSIGNER_KNOWNOCSPHANDLE_PID', 30);
define('XADESSIGNER_OFFLINEMODE_PID', 31);
define('XADESSIGNER_OUTPUTFILE_PID', 32);
define('XADESSIGNER_PROXYADDRESS_PID', 33);
define('XADESSIGNER_PROXYAUTHENTICATION_PID', 34);
define('XADESSIGNER_PROXYPASSWORD_PID', 35);
define('XADESSIGNER_PROXYPORT_PID', 36);
define('XADESSIGNER_PROXYPROXYTYPE_PID', 37);
define('XADESSIGNER_PROXYREQUESTHEADERS_PID', 38);
define('XADESSIGNER_PROXYRESPONSEBODY_PID', 39);
define('XADESSIGNER_PROXYRESPONSEHEADERS_PID', 40);
define('XADESSIGNER_PROXYUSEIPV6_PID', 41);
define('XADESSIGNER_PROXYUSEPROXY_PID', 42);
define('XADESSIGNER_PROXYUSERNAME_PID', 43);
define('XADESSIGNER_REFERENCECOUNT_PID', 44);
define('XADESSIGNER_REFERENCEAUTOGENERATEELEMENTID_PID', 45);
define('XADESSIGNER_REFERENCECANONICALIZATIONMETHOD_PID', 46);
define('XADESSIGNER_REFERENCECUSTOMELEMENTID_PID', 47);
define('XADESSIGNER_REFERENCEDIGESTVALUE_PID', 48);
define('XADESSIGNER_REFERENCEHANDLE_PID', 49);
define('XADESSIGNER_REFERENCEHASHALGORITHM_PID', 50);
define('XADESSIGNER_REFERENCEHASURI_PID', 51);
define('XADESSIGNER_REFERENCEID_PID', 52);
define('XADESSIGNER_REFERENCEINCLUSIVENAMESPACESPREFIXLIST_PID', 53);
define('XADESSIGNER_REFERENCEREFERENCETYPE_PID', 54);
define('XADESSIGNER_REFERENCETARGETDATA_PID', 55);
define('XADESSIGNER_REFERENCETARGETXMLELEMENT_PID', 56);
define('XADESSIGNER_REFERENCEURI_PID', 57);
define('XADESSIGNER_REFERENCEUSEBASE64TRANSFORM_PID', 58);
define('XADESSIGNER_REFERENCEUSEENVELOPEDSIGNATURETRANSFORM_PID', 59);
define('XADESSIGNER_REFERENCEUSEXPATHTRANSFORM_PID', 60);
define('XADESSIGNER_REFERENCEXPATHEXPRESSION_PID', 61);
define('XADESSIGNER_REFERENCEXPATHPREFIXLIST_PID', 62);
define('XADESSIGNER_REVOCATIONCHECK_PID', 63);
define('XADESSIGNER_SIGNATURETYPE_PID', 64);
define('XADESSIGNER_SIGNINGCERTBYTES_PID', 65);
define('XADESSIGNER_SIGNINGCERTHANDLE_PID', 66);
define('XADESSIGNER_SIGNINGCHAINCOUNT_PID', 67);
define('XADESSIGNER_SIGNINGCHAINBYTES_PID', 68);
define('XADESSIGNER_SIGNINGCHAINHANDLE_PID', 69);
define('XADESSIGNER_SOCKETDNSMODE_PID', 70);
define('XADESSIGNER_SOCKETDNSPORT_PID', 71);
define('XADESSIGNER_SOCKETDNSQUERYTIMEOUT_PID', 72);
define('XADESSIGNER_SOCKETDNSSERVERS_PID', 73);
define('XADESSIGNER_SOCKETDNSTOTALTIMEOUT_PID', 74);
define('XADESSIGNER_SOCKETINCOMINGSPEEDLIMIT_PID', 75);
define('XADESSIGNER_SOCKETLOCALADDRESS_PID', 76);
define('XADESSIGNER_SOCKETLOCALPORT_PID', 77);
define('XADESSIGNER_SOCKETOUTGOINGSPEEDLIMIT_PID', 78);
define('XADESSIGNER_SOCKETTIMEOUT_PID', 79);
define('XADESSIGNER_SOCKETUSEIPV6_PID', 80);
define('XADESSIGNER_TIMESTAMPSERVER_PID', 81);
define('XADESSIGNER_TLSAUTOVALIDATECERTIFICATES_PID', 82);
define('XADESSIGNER_TLSBASECONFIGURATION_PID', 83);
define('XADESSIGNER_TLSCIPHERSUITES_PID', 84);
define('XADESSIGNER_TLSECCURVES_PID', 85);
define('XADESSIGNER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 86);
define('XADESSIGNER_TLSPRESHAREDIDENTITY_PID', 87);
define('XADESSIGNER_TLSPRESHAREDKEY_PID', 88);
define('XADESSIGNER_TLSPRESHAREDKEYCIPHERSUITE_PID', 89);
define('XADESSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 90);
define('XADESSIGNER_TLSREVOCATIONCHECK_PID', 91);
define('XADESSIGNER_TLSSSLOPTIONS_PID', 92);
define('XADESSIGNER_TLSTLSMODE_PID', 93);
define('XADESSIGNER_TLSUSEEXTENDEDMASTERSECRET_PID', 94);
define('XADESSIGNER_TLSUSESESSIONRESUMPTION_PID', 95);
define('XADESSIGNER_TLSVERSIONS_PID', 96);
define('XADESSIGNER_TRUSTEDCERTCOUNT_PID', 97);
define('XADESSIGNER_TRUSTEDCERTBYTES_PID', 98);
define('XADESSIGNER_TRUSTEDCERTHANDLE_PID', 99);
define('XADESSIGNER_VALIDATIONLOG_PID', 100);
define('XADESSIGNER_XADESFORM_PID', 101);
define('XADESSIGNER_XADESVERSION_PID', 102);
define('XADESSIGNER_XMLELEMENT_PID', 103);
define('XADESSIGNER_NAMESPACECOUNT_PID', 104);
define('XADESSIGNER_NAMESPACEPREFIX_PID', 105);
define('XADESSIGNER_NAMESPACEURI_PID', 106);


/*
 * XAdESSigner Enums
 */

define('XADESSIGNER_CANONICALIZATIONMETHOD_NONE', 0);
define('XADESSIGNER_CANONICALIZATIONMETHOD_CANON', 1);
define('XADESSIGNER_CANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('XADESSIGNER_CANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('XADESSIGNER_CANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('XADESSIGNER_CANONICALIZATIONMETHOD_MIN_CANON', 5);
define('XADESSIGNER_CANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('XADESSIGNER_CANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('XADESSIGNER_CHAINVALIDATIONRESULT_VALID', 0);
define('XADESSIGNER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('XADESSIGNER_CHAINVALIDATIONRESULT_INVALID', 2);
define('XADESSIGNER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('XADESSIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('XADESSIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('XADESSIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('XADESSIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('XADESSIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('XADESSIGNER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('XADESSIGNER_PROXYAUTHENTICATION_BASIC', 1);
define('XADESSIGNER_PROXYAUTHENTICATION_DIGEST', 2);
define('XADESSIGNER_PROXYAUTHENTICATION_NTLM', 3);

define('XADESSIGNER_PROXYPROXYTYPE_NONE', 0);
define('XADESSIGNER_PROXYPROXYTYPE_SOCKS_4', 1);
define('XADESSIGNER_PROXYPROXYTYPE_SOCKS_5', 2);
define('XADESSIGNER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('XADESSIGNER_PROXYPROXYTYPE_HTTP', 4);

define('XADESSIGNER_REFERENCECANONICALIZATIONMETHOD_NONE', 0);
define('XADESSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON', 1);
define('XADESSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('XADESSIGNER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('XADESSIGNER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('XADESSIGNER_REFERENCECANONICALIZATIONMETHOD_MIN_CANON', 5);
define('XADESSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('XADESSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('XADESSIGNER_REVOCATIONCHECK_NONE', 0);
define('XADESSIGNER_REVOCATIONCHECK_AUTO', 1);
define('XADESSIGNER_REVOCATIONCHECK_ALL_CRL', 2);
define('XADESSIGNER_REVOCATIONCHECK_ALL_OCSP', 3);
define('XADESSIGNER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('XADESSIGNER_REVOCATIONCHECK_ANY_CRL', 5);
define('XADESSIGNER_REVOCATIONCHECK_ANY_OCSP', 6);
define('XADESSIGNER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('XADESSIGNER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('XADESSIGNER_SIGNATURETYPE_DETACHED', 1);
define('XADESSIGNER_SIGNATURETYPE_ENVELOPING', 2);
define('XADESSIGNER_SIGNATURETYPE_ENVELOPED', 4);

define('XADESSIGNER_SOCKETDNSMODE_AUTO', 0);
define('XADESSIGNER_SOCKETDNSMODE_PLATFORM', 1);
define('XADESSIGNER_SOCKETDNSMODE_OWN', 2);
define('XADESSIGNER_SOCKETDNSMODE_OWN_SECURE', 3);

define('XADESSIGNER_TLSBASECONFIGURATION_DEFAULT', 0);
define('XADESSIGNER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('XADESSIGNER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('XADESSIGNER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('XADESSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('XADESSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('XADESSIGNER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('XADESSIGNER_TLSREVOCATIONCHECK_NONE', 0);
define('XADESSIGNER_TLSREVOCATIONCHECK_AUTO', 1);
define('XADESSIGNER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('XADESSIGNER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('XADESSIGNER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('XADESSIGNER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('XADESSIGNER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('XADESSIGNER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('XADESSIGNER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('XADESSIGNER_TLSTLSMODE_DEFAULT', 0);
define('XADESSIGNER_TLSTLSMODE_NO_TLS', 1);
define('XADESSIGNER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('XADESSIGNER_TLSTLSMODE_IMPLICIT_TLS', 3);

define('XADESSIGNER_XADESFORM_UNKNOWN', 0);
define('XADESSIGNER_XADESFORM_BASIC', 1);
define('XADESSIGNER_XADESFORM_BES', 2);
define('XADESSIGNER_XADESFORM_EPES', 3);
define('XADESSIGNER_XADESFORM_T', 4);
define('XADESSIGNER_XADESFORM_C', 5);
define('XADESSIGNER_XADESFORM_X', 6);
define('XADESSIGNER_XADESFORM_XL', 7);
define('XADESSIGNER_XADESFORM_A', 8);
define('XADESSIGNER_XADESFORM_EXTENDED_BES', 9);
define('XADESSIGNER_XADESFORM_EXTENDED_EPES', 10);
define('XADESSIGNER_XADESFORM_EXTENDED_T', 11);
define('XADESSIGNER_XADESFORM_EXTENDED_C', 12);
define('XADESSIGNER_XADESFORM_EXTENDED_X', 13);
define('XADESSIGNER_XADESFORM_EXTENDED_XLONG', 14);
define('XADESSIGNER_XADESFORM_EXTENDED_XL', 15);
define('XADESSIGNER_XADESFORM_EXTENDED_A', 16);

define('XADESSIGNER_XADESVERSION_UNKNOWN', 0);
define('XADESSIGNER_XADESVERSION_111', 1);
define('XADESSIGNER_XADESVERSION_122', 2);
define('XADESSIGNER_XADESVERSION_132', 3);
define('XADESSIGNER_XADESVERSION_141', 4);



/*
 * XAdESSigner Methods
 */

define('XADESSIGNER_CONFIG_MID', 2);
define('XADESSIGNER_EXTRACTASYNCDATA_MID', 3);
define('XADESSIGNER_SIGN_MID', 4);
define('XADESSIGNER_SIGNASYNCBEGIN_MID', 5);
define('XADESSIGNER_SIGNASYNCEND_MID', 6);
define('XADESSIGNER_SIGNEXTERNAL_MID', 7);
define('XADESSIGNER_TIMESTAMP_MID', 8);
define('XADESSIGNER_UPGRADE_MID', 9);


/*
 * XAdESSigner Events
 */
  
define('XADESSIGNER_ERROR_EID', 1);
define('XADESSIGNER_EXTERNALSIGN_EID', 2);
define('XADESSIGNER_FORMATELEMENT_EID', 3);
define('XADESSIGNER_FORMATTEXT_EID', 4);
define('XADESSIGNER_RESOLVEREFERENCE_EID', 5);
define('XADESSIGNER_STORECERTIFICATE_EID', 6);
define('XADESSIGNER_STORECRL_EID', 7);
define('XADESSIGNER_STOREOCSPRESPONSE_EID', 8);

/*
 * XAdESVerifier Properties
 */

define('XADESVERIFIER_ALLSIGNATURESVALID_PID', 1);
define('XADESVERIFIER_BLOCKEDCERTCOUNT_PID', 2);
define('XADESVERIFIER_BLOCKEDCERTBYTES_PID', 3);
define('XADESVERIFIER_BLOCKEDCERTHANDLE_PID', 4);
define('XADESVERIFIER_CANONICALIZATIONMETHOD_PID', 5);
define('XADESVERIFIER_CERTCOUNT_PID', 6);
define('XADESVERIFIER_CERTBYTES_PID', 7);
define('XADESVERIFIER_CERTCA_PID', 8);
define('XADESVERIFIER_CERTCAKEYID_PID', 9);
define('XADESVERIFIER_CERTCRLDISTRIBUTIONPOINTS_PID', 10);
define('XADESVERIFIER_CERTCURVE_PID', 11);
define('XADESVERIFIER_CERTFINGERPRINT_PID', 12);
define('XADESVERIFIER_CERTFRIENDLYNAME_PID', 13);
define('XADESVERIFIER_CERTHANDLE_PID', 14);
define('XADESVERIFIER_CERTHASHALGORITHM_PID', 15);
define('XADESVERIFIER_CERTISSUER_PID', 16);
define('XADESVERIFIER_CERTISSUERRDN_PID', 17);
define('XADESVERIFIER_CERTKEYALGORITHM_PID', 18);
define('XADESVERIFIER_CERTKEYBITS_PID', 19);
define('XADESVERIFIER_CERTKEYFINGERPRINT_PID', 20);
define('XADESVERIFIER_CERTKEYUSAGE_PID', 21);
define('XADESVERIFIER_CERTKEYVALID_PID', 22);
define('XADESVERIFIER_CERTOCSPLOCATIONS_PID', 23);
define('XADESVERIFIER_CERTPOLICYIDS_PID', 24);
define('XADESVERIFIER_CERTPUBLICKEYBYTES_PID', 25);
define('XADESVERIFIER_CERTSELFSIGNED_PID', 26);
define('XADESVERIFIER_CERTSERIALNUMBER_PID', 27);
define('XADESVERIFIER_CERTSIGALGORITHM_PID', 28);
define('XADESVERIFIER_CERTSUBJECT_PID', 29);
define('XADESVERIFIER_CERTSUBJECTKEYID_PID', 30);
define('XADESVERIFIER_CERTSUBJECTRDN_PID', 31);
define('XADESVERIFIER_CERTVALIDFROM_PID', 32);
define('XADESVERIFIER_CERTVALIDTO_PID', 33);
define('XADESVERIFIER_CHAINVALIDATIONDETAILS_PID', 34);
define('XADESVERIFIER_CHAINVALIDATIONRESULT_PID', 35);
define('XADESVERIFIER_CLAIMEDSIGNINGTIME_PID', 36);
define('XADESVERIFIER_CRLCOUNT_PID', 37);
define('XADESVERIFIER_CRLBYTES_PID', 38);
define('XADESVERIFIER_CRLHANDLE_PID', 39);
define('XADESVERIFIER_CRLISSUER_PID', 40);
define('XADESVERIFIER_CRLISSUERRDN_PID', 41);
define('XADESVERIFIER_CRLLOCATION_PID', 42);
define('XADESVERIFIER_CRLNEXTUPDATE_PID', 43);
define('XADESVERIFIER_CRLTHISUPDATE_PID', 44);
define('XADESVERIFIER_DATAFILE_PID', 45);
define('XADESVERIFIER_ENCODING_PID', 46);
define('XADESVERIFIER_HASHALGORITHM_PID', 47);
define('XADESVERIFIER_IGNORECHAINVALIDATIONERRORS_PID', 48);
define('XADESVERIFIER_INPUTFILE_PID', 49);
define('XADESVERIFIER_KNOWNCERTCOUNT_PID', 50);
define('XADESVERIFIER_KNOWNCERTBYTES_PID', 51);
define('XADESVERIFIER_KNOWNCERTHANDLE_PID', 52);
define('XADESVERIFIER_KNOWNCRLCOUNT_PID', 53);
define('XADESVERIFIER_KNOWNCRLBYTES_PID', 54);
define('XADESVERIFIER_KNOWNCRLHANDLE_PID', 55);
define('XADESVERIFIER_KNOWNOCSPCOUNT_PID', 56);
define('XADESVERIFIER_KNOWNOCSPBYTES_PID', 57);
define('XADESVERIFIER_KNOWNOCSPHANDLE_PID', 58);
define('XADESVERIFIER_LASTARCHIVALTIME_PID', 59);
define('XADESVERIFIER_OCSPCOUNT_PID', 60);
define('XADESVERIFIER_OCSPBYTES_PID', 61);
define('XADESVERIFIER_OCSPHANDLE_PID', 62);
define('XADESVERIFIER_OCSPISSUER_PID', 63);
define('XADESVERIFIER_OCSPISSUERRDN_PID', 64);
define('XADESVERIFIER_OCSPLOCATION_PID', 65);
define('XADESVERIFIER_OCSPPRODUCEDAT_PID', 66);
define('XADESVERIFIER_OFFLINEMODE_PID', 67);
define('XADESVERIFIER_OUTPUTFILE_PID', 68);
define('XADESVERIFIER_PROXYADDRESS_PID', 69);
define('XADESVERIFIER_PROXYAUTHENTICATION_PID', 70);
define('XADESVERIFIER_PROXYPASSWORD_PID', 71);
define('XADESVERIFIER_PROXYPORT_PID', 72);
define('XADESVERIFIER_PROXYPROXYTYPE_PID', 73);
define('XADESVERIFIER_PROXYREQUESTHEADERS_PID', 74);
define('XADESVERIFIER_PROXYRESPONSEBODY_PID', 75);
define('XADESVERIFIER_PROXYRESPONSEHEADERS_PID', 76);
define('XADESVERIFIER_PROXYUSEIPV6_PID', 77);
define('XADESVERIFIER_PROXYUSEPROXY_PID', 78);
define('XADESVERIFIER_PROXYUSERNAME_PID', 79);
define('XADESVERIFIER_QUALIFIED_PID', 80);
define('XADESVERIFIER_REFERENCECOUNT_PID', 81);
define('XADESVERIFIER_REFERENCEAUTOGENERATEELEMENTID_PID', 82);
define('XADESVERIFIER_REFERENCECANONICALIZATIONMETHOD_PID', 83);
define('XADESVERIFIER_REFERENCECUSTOMELEMENTID_PID', 84);
define('XADESVERIFIER_REFERENCEDIGESTVALUE_PID', 85);
define('XADESVERIFIER_REFERENCEHANDLE_PID', 86);
define('XADESVERIFIER_REFERENCEHASHALGORITHM_PID', 87);
define('XADESVERIFIER_REFERENCEHASURI_PID', 88);
define('XADESVERIFIER_REFERENCEID_PID', 89);
define('XADESVERIFIER_REFERENCEINCLUSIVENAMESPACESPREFIXLIST_PID', 90);
define('XADESVERIFIER_REFERENCEREFERENCETYPE_PID', 91);
define('XADESVERIFIER_REFERENCETARGETDATA_PID', 92);
define('XADESVERIFIER_REFERENCETARGETXMLELEMENT_PID', 93);
define('XADESVERIFIER_REFERENCEURI_PID', 94);
define('XADESVERIFIER_REFERENCEUSEBASE64TRANSFORM_PID', 95);
define('XADESVERIFIER_REFERENCEUSEENVELOPEDSIGNATURETRANSFORM_PID', 96);
define('XADESVERIFIER_REFERENCEUSEXPATHTRANSFORM_PID', 97);
define('XADESVERIFIER_REFERENCEXPATHEXPRESSION_PID', 98);
define('XADESVERIFIER_REFERENCEXPATHPREFIXLIST_PID', 99);
define('XADESVERIFIER_REVOCATIONCHECK_PID', 100);
define('XADESVERIFIER_SIGNATUREVALIDATIONRESULT_PID', 101);
define('XADESVERIFIER_SIGNINGCERTBYTES_PID', 102);
define('XADESVERIFIER_SIGNINGCERTCA_PID', 103);
define('XADESVERIFIER_SIGNINGCERTCAKEYID_PID', 104);
define('XADESVERIFIER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 105);
define('XADESVERIFIER_SIGNINGCERTCURVE_PID', 106);
define('XADESVERIFIER_SIGNINGCERTFINGERPRINT_PID', 107);
define('XADESVERIFIER_SIGNINGCERTFRIENDLYNAME_PID', 108);
define('XADESVERIFIER_SIGNINGCERTHANDLE_PID', 109);
define('XADESVERIFIER_SIGNINGCERTHASHALGORITHM_PID', 110);
define('XADESVERIFIER_SIGNINGCERTISSUER_PID', 111);
define('XADESVERIFIER_SIGNINGCERTISSUERRDN_PID', 112);
define('XADESVERIFIER_SIGNINGCERTKEYALGORITHM_PID', 113);
define('XADESVERIFIER_SIGNINGCERTKEYBITS_PID', 114);
define('XADESVERIFIER_SIGNINGCERTKEYFINGERPRINT_PID', 115);
define('XADESVERIFIER_SIGNINGCERTKEYUSAGE_PID', 116);
define('XADESVERIFIER_SIGNINGCERTKEYVALID_PID', 117);
define('XADESVERIFIER_SIGNINGCERTOCSPLOCATIONS_PID', 118);
define('XADESVERIFIER_SIGNINGCERTPOLICYIDS_PID', 119);
define('XADESVERIFIER_SIGNINGCERTPUBLICKEYBYTES_PID', 120);
define('XADESVERIFIER_SIGNINGCERTSELFSIGNED_PID', 121);
define('XADESVERIFIER_SIGNINGCERTSERIALNUMBER_PID', 122);
define('XADESVERIFIER_SIGNINGCERTSIGALGORITHM_PID', 123);
define('XADESVERIFIER_SIGNINGCERTSUBJECT_PID', 124);
define('XADESVERIFIER_SIGNINGCERTSUBJECTKEYID_PID', 125);
define('XADESVERIFIER_SIGNINGCERTSUBJECTRDN_PID', 126);
define('XADESVERIFIER_SIGNINGCERTVALIDFROM_PID', 127);
define('XADESVERIFIER_SIGNINGCERTVALIDTO_PID', 128);
define('XADESVERIFIER_SOCKETDNSMODE_PID', 129);
define('XADESVERIFIER_SOCKETDNSPORT_PID', 130);
define('XADESVERIFIER_SOCKETDNSQUERYTIMEOUT_PID', 131);
define('XADESVERIFIER_SOCKETDNSSERVERS_PID', 132);
define('XADESVERIFIER_SOCKETDNSTOTALTIMEOUT_PID', 133);
define('XADESVERIFIER_SOCKETINCOMINGSPEEDLIMIT_PID', 134);
define('XADESVERIFIER_SOCKETLOCALADDRESS_PID', 135);
define('XADESVERIFIER_SOCKETLOCALPORT_PID', 136);
define('XADESVERIFIER_SOCKETOUTGOINGSPEEDLIMIT_PID', 137);
define('XADESVERIFIER_SOCKETTIMEOUT_PID', 138);
define('XADESVERIFIER_SOCKETUSEIPV6_PID', 139);
define('XADESVERIFIER_TIMESTAMPACCURACY_PID', 140);
define('XADESVERIFIER_TIMESTAMPBYTES_PID', 141);
define('XADESVERIFIER_TIMESTAMPCHAINVALIDATIONDETAILS_PID', 142);
define('XADESVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_PID', 143);
define('XADESVERIFIER_TIMESTAMPHASHALGORITHM_PID', 144);
define('XADESVERIFIER_TIMESTAMPSERIALNUMBER_PID', 145);
define('XADESVERIFIER_TIMESTAMPTIME_PID', 146);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_PID', 147);
define('XADESVERIFIER_TIMESTAMPTSANAME_PID', 148);
define('XADESVERIFIER_TIMESTAMPVALIDATIONLOG_PID', 149);
define('XADESVERIFIER_TIMESTAMPVALIDATIONRESULT_PID', 150);
define('XADESVERIFIER_TIMESTAMPED_PID', 151);
define('XADESVERIFIER_TLSAUTOVALIDATECERTIFICATES_PID', 152);
define('XADESVERIFIER_TLSBASECONFIGURATION_PID', 153);
define('XADESVERIFIER_TLSCIPHERSUITES_PID', 154);
define('XADESVERIFIER_TLSECCURVES_PID', 155);
define('XADESVERIFIER_TLSFORCERESUMEIFDESTINATIONCHANGES_PID', 156);
define('XADESVERIFIER_TLSPRESHAREDIDENTITY_PID', 157);
define('XADESVERIFIER_TLSPRESHAREDKEY_PID', 158);
define('XADESVERIFIER_TLSPRESHAREDKEYCIPHERSUITE_PID', 159);
define('XADESVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_PID', 160);
define('XADESVERIFIER_TLSREVOCATIONCHECK_PID', 161);
define('XADESVERIFIER_TLSSSLOPTIONS_PID', 162);
define('XADESVERIFIER_TLSTLSMODE_PID', 163);
define('XADESVERIFIER_TLSUSEEXTENDEDMASTERSECRET_PID', 164);
define('XADESVERIFIER_TLSUSESESSIONRESUMPTION_PID', 165);
define('XADESVERIFIER_TLSVERSIONS_PID', 166);
define('XADESVERIFIER_TRUSTEDCERTCOUNT_PID', 167);
define('XADESVERIFIER_TRUSTEDCERTBYTES_PID', 168);
define('XADESVERIFIER_TRUSTEDCERTHANDLE_PID', 169);
define('XADESVERIFIER_TSACERTBYTES_PID', 170);
define('XADESVERIFIER_TSACERTCA_PID', 171);
define('XADESVERIFIER_TSACERTCAKEYID_PID', 172);
define('XADESVERIFIER_TSACERTCRLDISTRIBUTIONPOINTS_PID', 173);
define('XADESVERIFIER_TSACERTCURVE_PID', 174);
define('XADESVERIFIER_TSACERTFINGERPRINT_PID', 175);
define('XADESVERIFIER_TSACERTFRIENDLYNAME_PID', 176);
define('XADESVERIFIER_TSACERTHANDLE_PID', 177);
define('XADESVERIFIER_TSACERTHASHALGORITHM_PID', 178);
define('XADESVERIFIER_TSACERTISSUER_PID', 179);
define('XADESVERIFIER_TSACERTISSUERRDN_PID', 180);
define('XADESVERIFIER_TSACERTKEYALGORITHM_PID', 181);
define('XADESVERIFIER_TSACERTKEYBITS_PID', 182);
define('XADESVERIFIER_TSACERTKEYFINGERPRINT_PID', 183);
define('XADESVERIFIER_TSACERTKEYUSAGE_PID', 184);
define('XADESVERIFIER_TSACERTKEYVALID_PID', 185);
define('XADESVERIFIER_TSACERTOCSPLOCATIONS_PID', 186);
define('XADESVERIFIER_TSACERTPOLICYIDS_PID', 187);
define('XADESVERIFIER_TSACERTPUBLICKEYBYTES_PID', 188);
define('XADESVERIFIER_TSACERTSELFSIGNED_PID', 189);
define('XADESVERIFIER_TSACERTSERIALNUMBER_PID', 190);
define('XADESVERIFIER_TSACERTSIGALGORITHM_PID', 191);
define('XADESVERIFIER_TSACERTSUBJECT_PID', 192);
define('XADESVERIFIER_TSACERTSUBJECTKEYID_PID', 193);
define('XADESVERIFIER_TSACERTSUBJECTRDN_PID', 194);
define('XADESVERIFIER_TSACERTVALIDFROM_PID', 195);
define('XADESVERIFIER_TSACERTVALIDTO_PID', 196);
define('XADESVERIFIER_VALIDATEDSIGNINGTIME_PID', 197);
define('XADESVERIFIER_VALIDATIONLOG_PID', 198);
define('XADESVERIFIER_VALIDATIONMOMENT_PID', 199);
define('XADESVERIFIER_XADESENABLED_PID', 200);
define('XADESVERIFIER_XADESFORM_PID', 201);
define('XADESVERIFIER_XADESVERSION_PID', 202);
define('XADESVERIFIER_XMLELEMENT_PID', 203);
define('XADESVERIFIER_NAMESPACECOUNT_PID', 204);
define('XADESVERIFIER_NAMESPACEPREFIX_PID', 205);
define('XADESVERIFIER_NAMESPACEURI_PID', 206);


/*
 * XAdESVerifier Enums
 */

define('XADESVERIFIER_CANONICALIZATIONMETHOD_NONE', 0);
define('XADESVERIFIER_CANONICALIZATIONMETHOD_CANON', 1);
define('XADESVERIFIER_CANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('XADESVERIFIER_CANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('XADESVERIFIER_CANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('XADESVERIFIER_CANONICALIZATIONMETHOD_MIN_CANON', 5);
define('XADESVERIFIER_CANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('XADESVERIFIER_CANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('XADESVERIFIER_CHAINVALIDATIONRESULT_VALID', 0);
define('XADESVERIFIER_CHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('XADESVERIFIER_CHAINVALIDATIONRESULT_INVALID', 2);
define('XADESVERIFIER_CHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('XADESVERIFIER_PROXYAUTHENTICATION_NO_AUTHENTICATION', 0);
define('XADESVERIFIER_PROXYAUTHENTICATION_BASIC', 1);
define('XADESVERIFIER_PROXYAUTHENTICATION_DIGEST', 2);
define('XADESVERIFIER_PROXYAUTHENTICATION_NTLM', 3);

define('XADESVERIFIER_PROXYPROXYTYPE_NONE', 0);
define('XADESVERIFIER_PROXYPROXYTYPE_SOCKS_4', 1);
define('XADESVERIFIER_PROXYPROXYTYPE_SOCKS_5', 2);
define('XADESVERIFIER_PROXYPROXYTYPE_WEB_TUNNEL', 3);
define('XADESVERIFIER_PROXYPROXYTYPE_HTTP', 4);

define('XADESVERIFIER_QUALIFIED_UNKNOWN', 0);
define('XADESVERIFIER_QUALIFIED_NONE', 1);
define('XADESVERIFIER_QUALIFIED_GRANTED', 2);
define('XADESVERIFIER_QUALIFIED_WITHDRAWN', 3);
define('XADESVERIFIER_QUALIFIED_SET_BY_NATIONAL_LAW', 4);
define('XADESVERIFIER_QUALIFIED_RECOGNIZED_AT_NATIONAL_LEVEL', 5);
define('XADESVERIFIER_QUALIFIED_DEPRECATED_AT_NATIONAL_LEVEL', 6);
define('XADESVERIFIER_QUALIFIED_UNDER_SUPERVISION', 7);
define('XADESVERIFIER_QUALIFIED_SUPERVISION_INCESSATION', 8);
define('XADESVERIFIER_QUALIFIED_SUPERVISION_CEASED', 9);
define('XADESVERIFIER_QUALIFIED_SUPERVISION_REVOKED', 10);
define('XADESVERIFIER_QUALIFIED_ACCREDITED', 11);
define('XADESVERIFIER_QUALIFIED_ACCREDITION_CEASED', 12);
define('XADESVERIFIER_QUALIFIED_ACCREDITION_REVOKED', 13);

define('XADESVERIFIER_REFERENCECANONICALIZATIONMETHOD_NONE', 0);
define('XADESVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON', 1);
define('XADESVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('XADESVERIFIER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('XADESVERIFIER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('XADESVERIFIER_REFERENCECANONICALIZATIONMETHOD_MIN_CANON', 5);
define('XADESVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('XADESVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('XADESVERIFIER_REVOCATIONCHECK_NONE', 0);
define('XADESVERIFIER_REVOCATIONCHECK_AUTO', 1);
define('XADESVERIFIER_REVOCATIONCHECK_ALL_CRL', 2);
define('XADESVERIFIER_REVOCATIONCHECK_ALL_OCSP', 3);
define('XADESVERIFIER_REVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('XADESVERIFIER_REVOCATIONCHECK_ANY_CRL', 5);
define('XADESVERIFIER_REVOCATIONCHECK_ANY_OCSP', 6);
define('XADESVERIFIER_REVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('XADESVERIFIER_REVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('XADESVERIFIER_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('XADESVERIFIER_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('XADESVERIFIER_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('XADESVERIFIER_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('XADESVERIFIER_SIGNATUREVALIDATIONRESULT_FAILURE', 4);
define('XADESVERIFIER_SIGNATUREVALIDATIONRESULT_REFERENCE_CORRUPTED', 5);

define('XADESVERIFIER_SOCKETDNSMODE_AUTO', 0);
define('XADESVERIFIER_SOCKETDNSMODE_PLATFORM', 1);
define('XADESVERIFIER_SOCKETDNSMODE_OWN', 2);
define('XADESVERIFIER_SOCKETDNSMODE_OWN_SECURE', 3);

define('XADESVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID', 0);
define('XADESVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_VALID_BUT_UNTRUSTED', 1);
define('XADESVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_INVALID', 2);
define('XADESVERIFIER_TIMESTAMPCHAINVALIDATIONRESULT_CANT_BE_ESTABLISHED', 3);

define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_UNKNOWN', 0);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_LEGACY', 1);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_TRUSTED', 2);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_GENERIC', 3);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_ESC', 4);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_CONTENT', 5);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_CERTS_AND_CRLS', 6);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE', 7);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_2', 8);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_ARCHIVE_3', 9);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_INDIVIDUAL_DATA_OBJECTS', 10);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_ALL_DATA_OBJECTS', 11);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIGNATURE', 12);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_REFS_ONLY', 13);
define('XADESVERIFIER_TIMESTAMPTIMESTAMPTYPE_SIG_AND_REFS', 14);

define('XADESVERIFIER_TIMESTAMPVALIDATIONRESULT_VALID', 0);
define('XADESVERIFIER_TIMESTAMPVALIDATIONRESULT_UNKNOWN', 1);
define('XADESVERIFIER_TIMESTAMPVALIDATIONRESULT_CORRUPTED', 2);
define('XADESVERIFIER_TIMESTAMPVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('XADESVERIFIER_TIMESTAMPVALIDATIONRESULT_FAILURE', 4);

define('XADESVERIFIER_TLSBASECONFIGURATION_DEFAULT', 0);
define('XADESVERIFIER_TLSBASECONFIGURATION_COMPATIBLE', 1);
define('XADESVERIFIER_TLSBASECONFIGURATION_COMPREHENSIVE_INSECURE', 2);
define('XADESVERIFIER_TLSBASECONFIGURATION_HIGHLY_SECURE', 3);

define('XADESVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_COMPATIBLE', 0);
define('XADESVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_STRICT', 1);
define('XADESVERIFIER_TLSRENEGOTIATIONATTACKPREVENTIONMODE_AUTO', 2);

define('XADESVERIFIER_TLSREVOCATIONCHECK_NONE', 0);
define('XADESVERIFIER_TLSREVOCATIONCHECK_AUTO', 1);
define('XADESVERIFIER_TLSREVOCATIONCHECK_ALL_CRL', 2);
define('XADESVERIFIER_TLSREVOCATIONCHECK_ALL_OCSP', 3);
define('XADESVERIFIER_TLSREVOCATIONCHECK_ALL_CRLAND_OCSP', 4);
define('XADESVERIFIER_TLSREVOCATIONCHECK_ANY_CRL', 5);
define('XADESVERIFIER_TLSREVOCATIONCHECK_ANY_OCSP', 6);
define('XADESVERIFIER_TLSREVOCATIONCHECK_ANY_CRLOR_OCSP', 7);
define('XADESVERIFIER_TLSREVOCATIONCHECK_ANY_OCSPOR_CRL', 8);

define('XADESVERIFIER_TLSTLSMODE_DEFAULT', 0);
define('XADESVERIFIER_TLSTLSMODE_NO_TLS', 1);
define('XADESVERIFIER_TLSTLSMODE_EXPLICIT_TLS', 2);
define('XADESVERIFIER_TLSTLSMODE_IMPLICIT_TLS', 3);

define('XADESVERIFIER_XADESFORM_UNKNOWN', 0);
define('XADESVERIFIER_XADESFORM_BASIC', 1);
define('XADESVERIFIER_XADESFORM_BES', 2);
define('XADESVERIFIER_XADESFORM_EPES', 3);
define('XADESVERIFIER_XADESFORM_T', 4);
define('XADESVERIFIER_XADESFORM_C', 5);
define('XADESVERIFIER_XADESFORM_X', 6);
define('XADESVERIFIER_XADESFORM_XL', 7);
define('XADESVERIFIER_XADESFORM_A', 8);
define('XADESVERIFIER_XADESFORM_EXTENDED_BES', 9);
define('XADESVERIFIER_XADESFORM_EXTENDED_EPES', 10);
define('XADESVERIFIER_XADESFORM_EXTENDED_T', 11);
define('XADESVERIFIER_XADESFORM_EXTENDED_C', 12);
define('XADESVERIFIER_XADESFORM_EXTENDED_X', 13);
define('XADESVERIFIER_XADESFORM_EXTENDED_XLONG', 14);
define('XADESVERIFIER_XADESFORM_EXTENDED_XL', 15);
define('XADESVERIFIER_XADESFORM_EXTENDED_A', 16);

define('XADESVERIFIER_XADESVERSION_UNKNOWN', 0);
define('XADESVERIFIER_XADESVERSION_111', 1);
define('XADESVERIFIER_XADESVERSION_122', 2);
define('XADESVERIFIER_XADESVERSION_132', 3);
define('XADESVERIFIER_XADESVERSION_141', 4);



/*
 * XAdESVerifier Methods
 */

define('XADESVERIFIER_ADDTIMESTAMP_MID', 2);
define('XADESVERIFIER_ADDTIMESTAMPVALIDATIONDATA_MID', 3);
define('XADESVERIFIER_ADDVALIDATIONDATAREFS_MID', 4);
define('XADESVERIFIER_ADDVALIDATIONDATAVALUES_MID', 5);
define('XADESVERIFIER_CONFIG_MID', 6);
define('XADESVERIFIER_VERIFY_MID', 7);
define('XADESVERIFIER_VERIFYDETACHED_MID', 8);


/*
 * XAdESVerifier Events
 */
  
define('XADESVERIFIER_CHAINVALIDATED_EID', 1);
define('XADESVERIFIER_ERROR_EID', 2);
define('XADESVERIFIER_REFERENCEVALIDATED_EID', 3);
define('XADESVERIFIER_RESOLVEREFERENCE_EID', 4);
define('XADESVERIFIER_RETRIEVECERTIFICATE_EID', 5);
define('XADESVERIFIER_RETRIEVECRL_EID', 6);
define('XADESVERIFIER_RETRIEVEOCSPRESPONSE_EID', 7);
define('XADESVERIFIER_SIGNATUREFOUND_EID', 8);
define('XADESVERIFIER_SIGNATUREVALIDATED_EID', 9);
define('XADESVERIFIER_STORECERTIFICATE_EID', 10);
define('XADESVERIFIER_STORECRL_EID', 11);
define('XADESVERIFIER_STOREOCSPRESPONSE_EID', 12);
define('XADESVERIFIER_TIMESTAMPFOUND_EID', 13);
define('XADESVERIFIER_TIMESTAMPVALIDATED_EID', 14);

/*
 * XMLDecryptor Properties
 */

define('XMLDECRYPTOR_DECRYPTIONKEY_PID', 1);
define('XMLDECRYPTOR_ENCODING_PID', 2);
define('XMLDECRYPTOR_ENCRYPTEDDATATYPE_PID', 3);
define('XMLDECRYPTOR_ENCRYPTIONMETHOD_PID', 4);
define('XMLDECRYPTOR_ENCRYPTKEY_PID', 5);
define('XMLDECRYPTOR_EXTERNALCRYPTOCUSTOMPARAMS_PID', 6);
define('XMLDECRYPTOR_EXTERNALCRYPTODATA_PID', 7);
define('XMLDECRYPTOR_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 8);
define('XMLDECRYPTOR_EXTERNALCRYPTOHASHALGORITHM_PID', 9);
define('XMLDECRYPTOR_EXTERNALCRYPTOKEYID_PID', 10);
define('XMLDECRYPTOR_EXTERNALCRYPTOKEYSECRET_PID', 11);
define('XMLDECRYPTOR_EXTERNALCRYPTOMETHOD_PID', 12);
define('XMLDECRYPTOR_EXTERNALCRYPTOMODE_PID', 13);
define('XMLDECRYPTOR_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 14);
define('XMLDECRYPTOR_EXTERNALDATA_PID', 15);
define('XMLDECRYPTOR_INPUTFILE_PID', 16);
define('XMLDECRYPTOR_KEYDECRYPTIONCERTBYTES_PID', 17);
define('XMLDECRYPTOR_KEYDECRYPTIONCERTHANDLE_PID', 18);
define('XMLDECRYPTOR_KEYDECRYPTIONKEY_PID', 19);
define('XMLDECRYPTOR_KEYENCRYPTIONTYPE_PID', 20);
define('XMLDECRYPTOR_KEYINFOITEMCOUNT_PID', 21);
define('XMLDECRYPTOR_KEYINFOITEMISSUERRDN_PID', 22);
define('XMLDECRYPTOR_KEYINFOITEMSERIALNUMBER_PID', 23);
define('XMLDECRYPTOR_KEYINFOITEMSUBJECTKEYID_PID', 24);
define('XMLDECRYPTOR_KEYINFOITEMSUBJECTRDN_PID', 25);
define('XMLDECRYPTOR_KEYINFOCERTIFICATECOUNT_PID', 26);
define('XMLDECRYPTOR_KEYINFOCERTIFICATEBYTES_PID', 27);
define('XMLDECRYPTOR_KEYINFOCERTIFICATEHANDLE_PID', 28);
define('XMLDECRYPTOR_KEYTRANSPORTMETHOD_PID', 29);
define('XMLDECRYPTOR_KEYWRAPMETHOD_PID', 30);
define('XMLDECRYPTOR_OUTPUTFILE_PID', 31);
define('XMLDECRYPTOR_USEGCM_PID', 32);
define('XMLDECRYPTOR_XMLELEMENT_PID', 33);
define('XMLDECRYPTOR_NAMESPACECOUNT_PID', 34);
define('XMLDECRYPTOR_NAMESPACEPREFIX_PID', 35);
define('XMLDECRYPTOR_NAMESPACEURI_PID', 36);


/*
 * XMLDecryptor Enums
 */

define('XMLDECRYPTOR_ENCRYPTEDDATATYPE_ELEMENT', 0);
define('XMLDECRYPTOR_ENCRYPTEDDATATYPE_CONTENT', 1);
define('XMLDECRYPTOR_ENCRYPTEDDATATYPE_EXTERNAL', 2);

define('XMLDECRYPTOR_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('XMLDECRYPTOR_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('XMLDECRYPTOR_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('XMLDECRYPTOR_EXTERNALCRYPTOMODE_DISABLED', 1);
define('XMLDECRYPTOR_EXTERNALCRYPTOMODE_GENERIC', 2);

define('XMLDECRYPTOR_KEYENCRYPTIONTYPE_KEY_TRANSPORT', 0);
define('XMLDECRYPTOR_KEYENCRYPTIONTYPE_KEY_WRAP', 1);

define('XMLDECRYPTOR_KEYTRANSPORTMETHOD_RSA15', 0);
define('XMLDECRYPTOR_KEYTRANSPORTMETHOD_RSAOAEP', 1);



/*
 * XMLDecryptor Methods
 */

define('XMLDECRYPTOR_CONFIG_MID', 2);
define('XMLDECRYPTOR_DECRYPT_MID', 3);


/*
 * XMLDecryptor Events
 */
  
define('XMLDECRYPTOR_DECRYPTIONINFONEEDED_EID', 1);
define('XMLDECRYPTOR_ERROR_EID', 2);
define('XMLDECRYPTOR_EXTERNALDECRYPT_EID', 3);
define('XMLDECRYPTOR_SAVEEXTERNALDATA_EID', 4);

/*
 * XMLEncryptor Properties
 */

define('XMLENCRYPTOR_ENCODING_PID', 1);
define('XMLENCRYPTOR_ENCRYPTEDDATATYPE_PID', 2);
define('XMLENCRYPTOR_ENCRYPTIONKEY_PID', 3);
define('XMLENCRYPTOR_ENCRYPTIONMETHOD_PID', 4);
define('XMLENCRYPTOR_ENCRYPTKEY_PID', 5);
define('XMLENCRYPTOR_EXTERNALDATA_PID', 6);
define('XMLENCRYPTOR_INPUTFILE_PID', 7);
define('XMLENCRYPTOR_KEYENCRYPTIONCERTBYTES_PID', 8);
define('XMLENCRYPTOR_KEYENCRYPTIONCERTHANDLE_PID', 9);
define('XMLENCRYPTOR_KEYENCRYPTIONKEY_PID', 10);
define('XMLENCRYPTOR_KEYENCRYPTIONTYPE_PID', 11);
define('XMLENCRYPTOR_KEYTRANSPORTMETHOD_PID', 12);
define('XMLENCRYPTOR_KEYWRAPMETHOD_PID', 13);
define('XMLENCRYPTOR_OUTPUTFILE_PID', 14);
define('XMLENCRYPTOR_USEGCM_PID', 15);
define('XMLENCRYPTOR_XMLNODE_PID', 16);
define('XMLENCRYPTOR_NAMESPACECOUNT_PID', 17);
define('XMLENCRYPTOR_NAMESPACEPREFIX_PID', 18);
define('XMLENCRYPTOR_NAMESPACEURI_PID', 19);


/*
 * XMLEncryptor Enums
 */

define('XMLENCRYPTOR_ENCRYPTEDDATATYPE_ELEMENT', 0);
define('XMLENCRYPTOR_ENCRYPTEDDATATYPE_CONTENT', 1);
define('XMLENCRYPTOR_ENCRYPTEDDATATYPE_EXTERNAL', 2);

define('XMLENCRYPTOR_KEYENCRYPTIONTYPE_KEY_TRANSPORT', 0);
define('XMLENCRYPTOR_KEYENCRYPTIONTYPE_KEY_WRAP', 1);

define('XMLENCRYPTOR_KEYTRANSPORTMETHOD_RSA15', 0);
define('XMLENCRYPTOR_KEYTRANSPORTMETHOD_RSAOAEP', 1);



/*
 * XMLEncryptor Methods
 */

define('XMLENCRYPTOR_CONFIG_MID', 2);
define('XMLENCRYPTOR_ENCRYPT_MID', 3);


/*
 * XMLEncryptor Events
 */
  
define('XMLENCRYPTOR_ERROR_EID', 1);
define('XMLENCRYPTOR_FORMATELEMENT_EID', 2);
define('XMLENCRYPTOR_FORMATTEXT_EID', 3);

/*
 * XMLSigner Properties
 */

define('XMLSIGNER_CANONICALIZATIONMETHOD_PID', 1);
define('XMLSIGNER_ENCODING_PID', 2);
define('XMLSIGNER_EXTERNALCRYPTOCUSTOMPARAMS_PID', 3);
define('XMLSIGNER_EXTERNALCRYPTODATA_PID', 4);
define('XMLSIGNER_EXTERNALCRYPTOEXTERNALHASHCALCULATION_PID', 5);
define('XMLSIGNER_EXTERNALCRYPTOHASHALGORITHM_PID', 6);
define('XMLSIGNER_EXTERNALCRYPTOKEYID_PID', 7);
define('XMLSIGNER_EXTERNALCRYPTOKEYSECRET_PID', 8);
define('XMLSIGNER_EXTERNALCRYPTOMETHOD_PID', 9);
define('XMLSIGNER_EXTERNALCRYPTOMODE_PID', 10);
define('XMLSIGNER_EXTERNALCRYPTOPUBLICKEYALGORITHM_PID', 11);
define('XMLSIGNER_HASHALGORITHM_PID', 12);
define('XMLSIGNER_INPUTFILE_PID', 13);
define('XMLSIGNER_OUTPUTFILE_PID', 14);
define('XMLSIGNER_REFERENCECOUNT_PID', 15);
define('XMLSIGNER_REFERENCEAUTOGENERATEELEMENTID_PID', 16);
define('XMLSIGNER_REFERENCECANONICALIZATIONMETHOD_PID', 17);
define('XMLSIGNER_REFERENCECUSTOMELEMENTID_PID', 18);
define('XMLSIGNER_REFERENCEDIGESTVALUE_PID', 19);
define('XMLSIGNER_REFERENCEHANDLE_PID', 20);
define('XMLSIGNER_REFERENCEHASHALGORITHM_PID', 21);
define('XMLSIGNER_REFERENCEHASURI_PID', 22);
define('XMLSIGNER_REFERENCEID_PID', 23);
define('XMLSIGNER_REFERENCEINCLUSIVENAMESPACESPREFIXLIST_PID', 24);
define('XMLSIGNER_REFERENCEREFERENCETYPE_PID', 25);
define('XMLSIGNER_REFERENCETARGETDATA_PID', 26);
define('XMLSIGNER_REFERENCETARGETXMLELEMENT_PID', 27);
define('XMLSIGNER_REFERENCEURI_PID', 28);
define('XMLSIGNER_REFERENCEUSEBASE64TRANSFORM_PID', 29);
define('XMLSIGNER_REFERENCEUSEENVELOPEDSIGNATURETRANSFORM_PID', 30);
define('XMLSIGNER_REFERENCEUSEXPATHTRANSFORM_PID', 31);
define('XMLSIGNER_REFERENCEXPATHEXPRESSION_PID', 32);
define('XMLSIGNER_REFERENCEXPATHPREFIXLIST_PID', 33);
define('XMLSIGNER_SIGNATURETYPE_PID', 34);
define('XMLSIGNER_SIGNINGCERTBYTES_PID', 35);
define('XMLSIGNER_SIGNINGCERTHANDLE_PID', 36);
define('XMLSIGNER_SIGNINGCHAINCOUNT_PID', 37);
define('XMLSIGNER_SIGNINGCHAINBYTES_PID', 38);
define('XMLSIGNER_SIGNINGCHAINHANDLE_PID', 39);
define('XMLSIGNER_XMLELEMENT_PID', 40);
define('XMLSIGNER_NAMESPACECOUNT_PID', 41);
define('XMLSIGNER_NAMESPACEPREFIX_PID', 42);
define('XMLSIGNER_NAMESPACEURI_PID', 43);


/*
 * XMLSigner Enums
 */

define('XMLSIGNER_CANONICALIZATIONMETHOD_NONE', 0);
define('XMLSIGNER_CANONICALIZATIONMETHOD_CANON', 1);
define('XMLSIGNER_CANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('XMLSIGNER_CANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('XMLSIGNER_CANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('XMLSIGNER_CANONICALIZATIONMETHOD_MIN_CANON', 5);
define('XMLSIGNER_CANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('XMLSIGNER_CANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('XMLSIGNER_EXTERNALCRYPTOMETHOD_PKCS1', 0);
define('XMLSIGNER_EXTERNALCRYPTOMETHOD_PKCS7', 1);

define('XMLSIGNER_EXTERNALCRYPTOMODE_DEFAULT', 0);
define('XMLSIGNER_EXTERNALCRYPTOMODE_DISABLED', 1);
define('XMLSIGNER_EXTERNALCRYPTOMODE_GENERIC', 2);

define('XMLSIGNER_REFERENCECANONICALIZATIONMETHOD_NONE', 0);
define('XMLSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON', 1);
define('XMLSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('XMLSIGNER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('XMLSIGNER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('XMLSIGNER_REFERENCECANONICALIZATIONMETHOD_MIN_CANON', 5);
define('XMLSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('XMLSIGNER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('XMLSIGNER_SIGNATURETYPE_DETACHED', 1);
define('XMLSIGNER_SIGNATURETYPE_ENVELOPING', 2);
define('XMLSIGNER_SIGNATURETYPE_ENVELOPED', 4);



/*
 * XMLSigner Methods
 */

define('XMLSIGNER_CONFIG_MID', 2);
define('XMLSIGNER_EXTRACTASYNCDATA_MID', 3);
define('XMLSIGNER_SIGN_MID', 4);
define('XMLSIGNER_SIGNASYNCBEGIN_MID', 5);
define('XMLSIGNER_SIGNASYNCEND_MID', 6);
define('XMLSIGNER_SIGNEXTERNAL_MID', 7);


/*
 * XMLSigner Events
 */
  
define('XMLSIGNER_ERROR_EID', 1);
define('XMLSIGNER_EXTERNALSIGN_EID', 2);
define('XMLSIGNER_FORMATELEMENT_EID', 3);
define('XMLSIGNER_FORMATTEXT_EID', 4);
define('XMLSIGNER_RESOLVEREFERENCE_EID', 5);

/*
 * XMLVerifier Properties
 */

define('XMLVERIFIER_ALLSIGNATURESVALID_PID', 1);
define('XMLVERIFIER_CANONICALIZATIONMETHOD_PID', 2);
define('XMLVERIFIER_DATAFILE_PID', 3);
define('XMLVERIFIER_ENCODING_PID', 4);
define('XMLVERIFIER_HASHALGORITHM_PID', 5);
define('XMLVERIFIER_INPUTFILE_PID', 6);
define('XMLVERIFIER_KNOWNCERTCOUNT_PID', 7);
define('XMLVERIFIER_KNOWNCERTBYTES_PID', 8);
define('XMLVERIFIER_KNOWNCERTHANDLE_PID', 9);
define('XMLVERIFIER_REFERENCECOUNT_PID', 10);
define('XMLVERIFIER_REFERENCEAUTOGENERATEELEMENTID_PID', 11);
define('XMLVERIFIER_REFERENCECANONICALIZATIONMETHOD_PID', 12);
define('XMLVERIFIER_REFERENCECUSTOMELEMENTID_PID', 13);
define('XMLVERIFIER_REFERENCEDIGESTVALUE_PID', 14);
define('XMLVERIFIER_REFERENCEHANDLE_PID', 15);
define('XMLVERIFIER_REFERENCEHASHALGORITHM_PID', 16);
define('XMLVERIFIER_REFERENCEHASURI_PID', 17);
define('XMLVERIFIER_REFERENCEID_PID', 18);
define('XMLVERIFIER_REFERENCEINCLUSIVENAMESPACESPREFIXLIST_PID', 19);
define('XMLVERIFIER_REFERENCEREFERENCETYPE_PID', 20);
define('XMLVERIFIER_REFERENCETARGETDATA_PID', 21);
define('XMLVERIFIER_REFERENCETARGETXMLELEMENT_PID', 22);
define('XMLVERIFIER_REFERENCEURI_PID', 23);
define('XMLVERIFIER_REFERENCEUSEBASE64TRANSFORM_PID', 24);
define('XMLVERIFIER_REFERENCEUSEENVELOPEDSIGNATURETRANSFORM_PID', 25);
define('XMLVERIFIER_REFERENCEUSEXPATHTRANSFORM_PID', 26);
define('XMLVERIFIER_REFERENCEXPATHEXPRESSION_PID', 27);
define('XMLVERIFIER_REFERENCEXPATHPREFIXLIST_PID', 28);
define('XMLVERIFIER_SIGNATUREVALIDATIONRESULT_PID', 29);
define('XMLVERIFIER_SIGNINGCERTBYTES_PID', 30);
define('XMLVERIFIER_SIGNINGCERTCA_PID', 31);
define('XMLVERIFIER_SIGNINGCERTCAKEYID_PID', 32);
define('XMLVERIFIER_SIGNINGCERTCRLDISTRIBUTIONPOINTS_PID', 33);
define('XMLVERIFIER_SIGNINGCERTCURVE_PID', 34);
define('XMLVERIFIER_SIGNINGCERTFINGERPRINT_PID', 35);
define('XMLVERIFIER_SIGNINGCERTFRIENDLYNAME_PID', 36);
define('XMLVERIFIER_SIGNINGCERTHANDLE_PID', 37);
define('XMLVERIFIER_SIGNINGCERTHASHALGORITHM_PID', 38);
define('XMLVERIFIER_SIGNINGCERTISSUER_PID', 39);
define('XMLVERIFIER_SIGNINGCERTISSUERRDN_PID', 40);
define('XMLVERIFIER_SIGNINGCERTKEYALGORITHM_PID', 41);
define('XMLVERIFIER_SIGNINGCERTKEYBITS_PID', 42);
define('XMLVERIFIER_SIGNINGCERTKEYFINGERPRINT_PID', 43);
define('XMLVERIFIER_SIGNINGCERTKEYUSAGE_PID', 44);
define('XMLVERIFIER_SIGNINGCERTKEYVALID_PID', 45);
define('XMLVERIFIER_SIGNINGCERTOCSPLOCATIONS_PID', 46);
define('XMLVERIFIER_SIGNINGCERTPOLICYIDS_PID', 47);
define('XMLVERIFIER_SIGNINGCERTPUBLICKEYBYTES_PID', 48);
define('XMLVERIFIER_SIGNINGCERTSELFSIGNED_PID', 49);
define('XMLVERIFIER_SIGNINGCERTSERIALNUMBER_PID', 50);
define('XMLVERIFIER_SIGNINGCERTSIGALGORITHM_PID', 51);
define('XMLVERIFIER_SIGNINGCERTSUBJECT_PID', 52);
define('XMLVERIFIER_SIGNINGCERTSUBJECTKEYID_PID', 53);
define('XMLVERIFIER_SIGNINGCERTSUBJECTRDN_PID', 54);
define('XMLVERIFIER_SIGNINGCERTVALIDFROM_PID', 55);
define('XMLVERIFIER_SIGNINGCERTVALIDTO_PID', 56);
define('XMLVERIFIER_XMLELEMENT_PID', 57);
define('XMLVERIFIER_NAMESPACECOUNT_PID', 58);
define('XMLVERIFIER_NAMESPACEPREFIX_PID', 59);
define('XMLVERIFIER_NAMESPACEURI_PID', 60);


/*
 * XMLVerifier Enums
 */

define('XMLVERIFIER_CANONICALIZATIONMETHOD_NONE', 0);
define('XMLVERIFIER_CANONICALIZATIONMETHOD_CANON', 1);
define('XMLVERIFIER_CANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('XMLVERIFIER_CANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('XMLVERIFIER_CANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('XMLVERIFIER_CANONICALIZATIONMETHOD_MIN_CANON', 5);
define('XMLVERIFIER_CANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('XMLVERIFIER_CANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('XMLVERIFIER_REFERENCECANONICALIZATIONMETHOD_NONE', 0);
define('XMLVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON', 1);
define('XMLVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT', 2);
define('XMLVERIFIER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON', 3);
define('XMLVERIFIER_REFERENCECANONICALIZATIONMETHOD_EXCL_CANON_COMMENT', 4);
define('XMLVERIFIER_REFERENCECANONICALIZATIONMETHOD_MIN_CANON', 5);
define('XMLVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON_V_1_1', 6);
define('XMLVERIFIER_REFERENCECANONICALIZATIONMETHOD_CANON_COMMENT_V_1_1', 7);

define('XMLVERIFIER_SIGNATUREVALIDATIONRESULT_VALID', 0);
define('XMLVERIFIER_SIGNATUREVALIDATIONRESULT_UNKNOWN', 1);
define('XMLVERIFIER_SIGNATUREVALIDATIONRESULT_CORRUPTED', 2);
define('XMLVERIFIER_SIGNATUREVALIDATIONRESULT_SIGNER_NOT_FOUND', 3);
define('XMLVERIFIER_SIGNATUREVALIDATIONRESULT_FAILURE', 4);
define('XMLVERIFIER_SIGNATUREVALIDATIONRESULT_REFERENCE_CORRUPTED', 5);



/*
 * XMLVerifier Methods
 */

define('XMLVERIFIER_CONFIG_MID', 2);
define('XMLVERIFIER_VERIFY_MID', 3);
define('XMLVERIFIER_VERIFYDETACHED_MID', 4);


/*
 * XMLVerifier Events
 */
  
define('XMLVERIFIER_ERROR_EID', 1);
define('XMLVERIFIER_REFERENCEVALIDATED_EID', 2);
define('XMLVERIFIER_RESOLVEREFERENCE_EID', 3);
define('XMLVERIFIER_SIGNATUREFOUND_EID', 4);
define('XMLVERIFIER_SIGNATUREVALIDATED_EID', 5);



?>
