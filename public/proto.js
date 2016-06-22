var Proto = function(){

	this.table = function(config){
		var datos = {};
		var columns = [];
		config.id_tabla=(config.id_tabla==undefined)?Math.floor((Math.random() * 7000)+4000):config.id_tabla;
		config.id_body=(config.id_body==undefined)?Math.floor((Math.random() * 7000)+4000):config.id_body;

		var sort = function(arr){
			var a = [];
			for(var i=0; i<arr.length; i++){
				if(arr[i]!="id"){
					a.push(arr[i]);
				}
			} 
			return a;
		}

		this.getHeaders = function(obj){
			var cab="";

			if(config.headers.length>0 && config.headers.length != undefined){
				var d = [];
				for(var i=0; i<config.headers.length; i++){
					d = sort(Object.keys(obj));
					cab+="<th data-column='"+d[i]+"'>"+config.headers[i]+"</th>";
				}
				columns=d;
			}
			else{

				for(var key in obj){
					if(key=="id")continue;
					cab+="<th data-column='"+key+"'>"+key+"</th>";
				}
				columns = sort(Object.keys(obj));
			}
			cab+="<th>Acciones</th>"
			return cab;
		}

		var andFilter = function(){

		}

		var orFilter = function(){

		}
		
		this.initialize = function(){
		$.ajax({
				url:config.url_leer,
				async:false,
				type:'get',
				data:{},
				success:function(r){
					r = JSON.parse(r);
					datos=r;
				}
		});
		var cabeceras = this.getHeaders(datos[0]);			
		var table="<table class='table table-bordered table-stripped' border='2' id='"+config.id_tabla+"' style='border-collapse:collapse;'>"+
					"<thead id='"+config.id_tabla+"_head'>"+
					cabeceras+
					"</thead>"+
					"<tbody id='"+config.id_body+"'>"+
					"</tbody>"+
					"</table>";
		config.contenedor.append(table);
		for(var i=0; i<datos.length; i++){
			var obj = datos[i];
			var row="";
			for(var key in obj){
				if(key=="id")continue;
				row+="<td>"+obj[key]+"</td>";
			}
			row+="<td><button class='btn btn-default btn-create'><i class='fa fa-plus-circle' aria-hidden='true'></i></button> ";
			row+="<button class='btn btn-default btn-delete'><i class='fa fa-trash' aria-hidden='true'></i></button> ";
			row+="<button class='btn btn-default btn-update'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button> </td> ";
			$("#"+config.id_body).append("<tr id='"+datos[i]['id']+"'>"+row+"</tr>");
		}

		if(config.filters){
			$("#"+config.id_tabla+"_head").append("<tr class='tr-filters'></tr>");
			for(var j=0; j<=columns.length; j++){
				var input="<input class='form-control' type='text' name='"+columns[j]+"'/>";
				if(j==columns.length)input = "";
				$("#"+config.id_tabla+"_head tr.tr-filters").append("<th>"+input+"</th>")
			}
		}
	} 

	var borrar = function(id){
		$.ajax({
			url:config.url_eliminar,
			type:"get",
			data:{id:id},
			success:function(r){
				alert(r);
			}
		});
	}

	var update = function(id){

	}

	var insert = function(){
		
	}

	this.setButtonEvents = function(){
		$("#"+config.id_body).delegate("button","click",function(){
			
				if($(this).hasClass('btn-delete')){
					var id = $(this).parent().parent().attr("id");
					if(confirm("¿Desea borrar este registro?")){
						borrar(id);
					}
				}
				if($(this).hasClass('btn-update')){
					var id = $(this).parent().parent().attr("id");
					alert(id);
				}
				
		});
	}


		this.initialize();
		this.setButtonEvents();
	}

} 