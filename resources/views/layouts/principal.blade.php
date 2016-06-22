<html>
	<head>
		<script src="{{asset('jquery.min.js')}}"></script>
		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
		<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
		
		<style> 
			#menu li{
				display:inline-block;
				float:right;
				margin-right:10px;
			}
			a{
				text-decoration: none;
				padding:20px;
				border-radius:3px;
				font-weight: bold;
			}
			a:hover{
				background-color:purple;
				color:white;
			}
		</style>
		@yield('scripts')
	</head>
	<body>
		<div class="col-xs-12 toolbar">
			<ul id="menu" style="display:inline; margin-right:10px;">
				<li><a href="">Inicio</a></li>
				<li><a href="">Usuarios</a></li>
				<li><a href="">Login</a></li>
			</ul>  
		</div>
		<div class="row-fluid">
			<div class="col-xs-3">
				<ul>
					<li>gfdgfdgdf<?php echo "hola"; ?></li>
					<li><a href="">Nosotros</a></li>
					<li><a href="">Productos</a></li>
					<li><a href="">Contacto</a></li>
					<li><a href="">Clientes</a></li>
					<li><a href="">Equipo</a></li>
				
				</ul>
				@yield('left-section') 
			</div>
			<div class="col-xs-9">
				@yield('workarea')
			</div>
		</div>
		<div class="row-fluid">
			<div class="col-xs-12">
				@yield('footer')
			</div>
		</div>
	</body>
</html>