<html>
	<head>
		@yield("metas")
		<script src="{{asset('jquery.min.js')}}"></script>
		<script src="{{asset('angular.js')}}"></script>
		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
		<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('proto.js?')}}?{{uniqid()}}"></script>
		<script src="https://use.fontawesome.com/77bbea11ef.js"></script>
		<style> 
		ul{
			list-style: none;
		}
			#menu li{
				
			}
			a{
				text-decoration: none;
				padding:3px;
				border-radius:1px;
				font-weight: bold;
			}
			a:hover{
				background-color:purple;
				color:white;
			}
			.sidebar{
				border-right:solid 2px purple;
			}
			.toolbar{
				height:70px;
				width:100%;
				background-color: purple;
			}
			.main-container{
				height:100%;
			}
			.sidebar, .workarea{
				height:100%;
			}
		</style>
		@yield('scripts')
	</head>
	<body>
		<div class="col-xs-12 toolbar">
			 
		</div>
		<div class="row-fluid main-container">
			<div class="col-xs-2 sidebar">
				<ul id="menu" style="display:inline; margin-right:10px;">
					<li><a href="">Nosotros</a></li>
					<li><a href="">Contacto</a></li>
					<li><a href="{{url('clientes')}}">Clientes</a></li>
					<li><a href="">Productos</a></li>
					<li><a href="">Equipo</a></li>
					@yield('left-section')
				</ul> 
			</div>
			<div class="col-xs-10 workarea" >
								@yield('workarea')

				<div class="col-xs-12" id="workarea">
					
				</div>
				<div class="col-xs-12" id="tabla2">
					
				</div>
			</div>
		
		</div>
		<div class="row-fluid footer">
			<div class="col-xs-12">
				@yield('footer')
			</div>
		</div>
	</body>
@yield('propios')
</html>