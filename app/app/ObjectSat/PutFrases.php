<?php

namespace App\ObjectSat;

use Session;
use App\Log;
class PutFrases
{   
    private $e_bill;
    private $frase;
    private $escenarios;
    

    public function __construct(&$e_bill, $escenarios, $frase)
    {
        //dd(asset('xml').'/frase.xml');
        if(!$e_bill instanceof \DOMDocument)
        {
            Session::flash('message','Se debio proveer un DOMDocument object.');
            $log = [
                'desc'=>'Error en frases Se debio proveer un DOMDocument object.',
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
        }
        $this->e_bill = $e_bill;
        $this->frase = $frase;
        $this->escenarios = $escenarios;
    }

    public function aggFrases(){
        $node_frases = $this->e_bill->getElementsByTagName('Frases')->item(0);
        $nodo_frase = new \DOMDocument( "1.0", "ISO-8859-15" );
        $item_frase = $this->e_bill->createElement( "dte:Frase", "" );
        $item_frase->setAttribute("CodigoEscenario", "1" );
        $item_frase->setAttribute("TipoFrase","1");
        $node_frases->appendChild($item_frase);
    }
}