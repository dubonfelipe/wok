@extends('dashboard')

 @section('pad')
 
<div id="page-head">
                    
<div class="pad-all text-center">
    <h3>Bienvenido a WOK.</h3>
    <p1>Actualmente se encuentra en desarrollo.<p></p>
    @if(Session::has('message'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Advertencia</strong> {{Session::get('message')}}
</div>
@endif
</p1></div>
</div>


 @endsection

@section('pagecontent')

<div id="page-content">


</div>

@endsection