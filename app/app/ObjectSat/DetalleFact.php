<?php
namespace App\ObjectSat;

use Session;
use App\Log;
use App\DetailsBill;
class DetalleFact
{   
    private $e_bill;
    private $items;
    private $total;
    
    public function __construct(&$e_bill, $items, $total)
    {
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
        $this->items = $items;
        $this->total = $total;
    }

    public function aggItems(){
        $node_items = $this->e_bill->getElementsByTagName('Items')->item(0);
        $i = 1;
        $num_total_impuesto = 0;
        foreach ($this->items as $key) {
            # code...
            $item = $this->e_bill->createElement( "dte:Item", "" );
            $item->setAttribute("BienOServicio","S");
            $item->setAttribute("NumeroLinea", $i );
            $cantidad = $this->e_bill->createElement( "dte:Cantidad", $key->cantidad );
            $item->appendChild($cantidad);
            $descripcion = $this->e_bill->createElement( "dte:Descripcion", $key->descripcion );
            $item->appendChild($descripcion);
            $precioUnitario = $this->e_bill->createElement( "dte:PrecioUnitario", number_format($key->precio_unitario,6, '.', ''));
            $item->appendChild($precioUnitario);
            $precio = $this->e_bill->createElement( "dte:Precio", number_format($key->cantidad * $key->precio_unitario,6,'.',''));
            $item->appendChild($precio);
            $descuento = $this->e_bill->createElement( "dte:Descuento", 0 );
            $item->appendChild($descuento);
            $impuestos = $this->e_bill->createElement( "dte:Impuestos","");
            $impuesto = $this->e_bill->createElement( "dte:Impuesto","");
            $nombrecorto = $this->e_bill->createElement( "dte:NombreCorto","IVA");
            $impuesto->appendChild($nombrecorto);
            $codigoUnidadGravable = $this->e_bill->createElement( "dte:CodigoUnidadGravable",1);
            $impuesto->appendChild($codigoUnidadGravable);
            $totalForCantidad = $key->cantidad * $key->precio_unitario;
            $montoGravablex = $totalForCantidad - ($totalForCantidad*0.12);
            $montoGravable = $this->e_bill->createElement( "dte:MontoGravable", number_format($montoGravablex,6,'.',''));
            $impuesto->appendChild($montoGravable);
            $montoImpuesto = $this->e_bill->createElement( "dte:MontoImpuesto", number_format($totalForCantidad*0.12,6,'.',''));
            $detailsImpuesto = DetailsBill::find($key->id_details_bill);
            $detailsImpuesto->impuesto_valor_agregado = $totalForCantidad*0.12;
            $detailsImpuesto->save();
            $num_total_impuesto = $num_total_impuesto + ($totalForCantidad*0.12);
            $impuesto->appendChild($montoImpuesto);
            $impuestos->appendChild($impuesto);
            $item->appendChild($impuestos);
            $totalF = $this->e_bill->createElement( "dte:Total", number_format($totalForCantidad,6,'.',''));
            $item->appendChild($totalF);
            $node_items->appendChild($item);            
            $i++;
        }
        $node_total =$this->e_bill->getElementsByTagName('Totales')->item(0);
        $total_impuestos = $this->e_bill->createElement('dte:TotalImpuestos',"");
        $total_impuesto = $this->e_bill->createElement("dte:TotalImpuesto","");
        $total_impuesto->setAttribute("TotalMontoImpuesto",number_format($num_total_impuesto,6,'.',''));
        $total_impuesto->setAttribute("NombreCorto","IVA");
        $total_impuestos->appendChild($total_impuesto);
        $node_total->appendChild($total_impuestos);
        $granTotal = $this->e_bill->createElement( "dte:GranTotal", number_format($this->total,6,'.',''));
        $node_total->appendChild($granTotal);
    }
}