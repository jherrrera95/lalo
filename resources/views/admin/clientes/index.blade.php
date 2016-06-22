@extends('admin.principal')
@section('workarea')
<h1>Hola</h1>
@endsection
@section('propios')
<script type="text/javascript">
var proto;
	window.onload=function(){
		proto = new Proto();
		proto.table({contenedor:$("#workarea"), headers:['nombre','imagen','comentario','emisor','status','fecha de alta'], url_leer:"{{url('getClientes')}}", url_crear: 2, url_eliminar:"{{url('deleteCustomer')}}", url_actualizar:2, filters:true,id_tabla:"tbl_1", id_body:"body_1"});
		proto.table({contenedor:$("#workarea"), headers:['nombre','imagen','comentario','emisor','status','fecha de alta'], url_leer:"{{url('getClientes')}}", url_crear: 2, url_eliminar:"{{url('deleteCustomer')}}", url_actualizar:2, id_tabla:"tbl_2", id_body:"body_2"});
	}
</script>
@endsection