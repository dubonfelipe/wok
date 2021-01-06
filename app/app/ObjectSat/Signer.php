<?php
namespace App\ObjectSat;

use Session;
use App\Log;
use Selective\XmlDSig\DigestAlgorithmType;
use Selective\XmlDSig\XmlSigner;
class Signer
{
    private $filename;
    private $fileSigned;
    private $e_fel;
    public function __construct($dir, $date, &$e_fel, $dirSigned){
        if($dir == null && $date == null){
            throw new \Exception('Error a crear path de documento temporal.');
        }
        $this->filename = $dir.$date.'.xml';
        $this->fileSigned = $dirSigned.$date.'.xml';
        if($e_fel instanceof \DOMDocument){
            try{
                $e_fel->save(base_path('dte').'\\'.$this->filename);
            }catch(Exception $e){
                throw new \Exception('En instancia DOMDocument error');
            }
        }
        $this->e_fel = $e_fel;
    }

    public function sign($issuer_key_url, $issuer_key_pass){
        if(!is_readable(base_path('dte').'/'.$this->filename))
        {
            return false;
        }

        $xmlSigner = new XmlSigner();

        $xmlSigner->loadPfxFile($issuer_key_url, $issuer_key_pass);

        $xmlSigner->signXmlFile(base_path('dte').'/'.$this->filename, base_path('dte').'/'.$this->fileSigned, DigestAlgorithmType::SHA512);
        return true;
    }
}