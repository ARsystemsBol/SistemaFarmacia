<aside class="w-64 bg-teal-800 text-white flex flex-col mt-20">

	<ul class="p-4" id="accordionSidebar">		
		<div class="text-gray-300 font-semibold text-sm uppercase tracking-wide pb-1 pl-2">
			GESTIÓN VENTAS
		</div>
		<hr class="border-gray-300 pb-4">
		<!-- Nav Item - Reportes Collapse Menu -->
		<li class="nav-item mb-4">
			<a class="nav-link flex items-center  text-gray-300 pl-4 " href="#" data-toggle="collapse" data-target="#collapseReport" aria-expanded="true" aria-controls="collapseReport">
				<i class="fas fa-book text-sky-300 text-xl mr-8"></i>
				<span class="hover:text-gray-200">Reportes</span>
				<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>		
			</a>
			{{-- <div id="collapseReport" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 rounded-md">
					<a class="collapse-item flex items-center text-gray-700 hover:text-gray-900" href="#">
						<i class="fas fa-user mr-2 text-blue-500"></i>Usuarios
					</a>
					<a class="collapse-item flex items-center text-gray-700 hover:text-gray-900" href="documentos/grListProv.php" target="_blank">
						<i class="fas fa-building mr-2 text-orange-500"></i>Proveedores
					</a>
					<a class="collapse-item flex items-center text-gray-700 hover:text-gray-900" href="documentos/grKarMedGeneral.php" target="_blank">
						<i class="fas fa-file mr-2 text-green-500"></i>Kardex General
					</a>
					<a class="collapse-item flex items-center text-gray-700 hover:text-gray-900" href="documentos/grListMed.php" target="_blank">
						<i class="fas fa-tablets mr-2 text-red-500"></i>Med. General
					</a>
					<a class="collapse-item flex items-center text-gray-700 hover:text-gray-900" href="report_medicamentos.php">
						<i class="fas fa-capsules mr-2 ml-4 text-green-500"></i>Med. Filtro
					</a>
				</div>
			</div> --}}
		</li>
		<!-- Nav Item - Cajas Collapse Menu -->
		<li class="nav-item mb-4">
			<a class="nav-link flex items-center  text-gray-300 pl-4" href="#" data-toggle="collapse" data-target="#collapseReport" aria-expanded="true" aria-controls="collapseReport">
				<i class="fas fa-cash-register text-yellow-500 text-xl mr-8"></i>
				<span class=" hover:text-gray-200">Cajas</span>
				<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>		
			</a>			
			{{-- <div id="collapseCajas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 rounded-md">
					<a class="collapse-item flex items-center text-gray-700 hover:text-gray-900" href="a_caja.php">
						<i class="fas fa-key mr-2 text-green-500"></i>Apertura/Cierre
					</a>
					<a class="collapse-item flex items-center text-gray-700 hover:text-gray-900" href="registro_comprasm.php">
						<i class="fas fa-coins mr-2 text-yellow-500"></i>Compras menores
					</a>
				</div>
			</div> --}}
		</li>
		<!-- Nav Item - Ventas Collapse Menu -->
		<li class="nav-item mb-4">
			<a class="nav-link flex items-center text-gray-300 pl-4" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-comment-dollar text-orange-500 text-xl mr-8"></i>
				<span>Ventas</span>
				<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
			</a>
			{{-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">	
					<a class="collapse-item" href="registro_ventas.php"><i class="fas fa-credit-card mr-2 text-verde"></i>Ventas Med</a>			
					<a class="collapse-item" href="ventas.php"><i class="fas fa-chart-pie mr-2 text-azul"></i>Ventas</a>				
				</div>
			</div> --}}
		</li>
		<div class="text-gray-300 font-semibold text-sm uppercase tracking-wide pb-1 pl-2">
			GESTIÓN FARMACOS
		</div>
		<hr class="border-gray-300 pb-4">
		<!-- Nav Item - Lotes Collapse Menu -->
		<li class="nav-item mb-4">
			<a class="nav-link flex items-center text-gray-300 pl-4" href="#" data-toggle="collapse" data-target="#collapseLotes" aria-expanded="true" aria-controls="collapseLotes">
				<i class="fas fa-boxes text-yellow-800 text-xl mr-8 "></i>
				<span>Lotes</span>
				<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
			</a>
			{{-- <div id="collapseLotes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="registro_lote.php"><i class="fa fa-box mr-2 text-cafe"></i>Ingreso Lote</a>
					<a class="collapse-item" href="lista_lote.php"><i class="fas fa-list mr-2 text-rojo"></i>Detalle Lotes</a>				
				</div>
			</div> --}}
		</li>

		<!-- Nav Item - Stock Collapse Menu -->
		<li class="nav-item mb-4">
			<a class="nav-link flex items-center text-gray-300 pl-4" href="#" data-toggle="collapse" data-target="#collapseStock" aria-expanded="true" aria-controls="collapseStock">
				<i class="fas fa-clipboard-list text-blue-500 text-xl mr-8"></i>
				<span>Stock</span>
				<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
			</a>
			{{-- <div id="collapseStock" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="stock.php"><i class="fas fa-list mr-2 text-rojo"></i>Stock General</a>
				</div>
			</div> --}}
		</li>

		<!-- Nav Item - Traspasos Collapse Menu -->
		<li class="nav-item mb-4">
			<a class="nav-link flex items-center text-gray-300 pl-4" href="#" data-toggle="collapse" data-target="#collapseTransferencias" aria-expanded="true" aria-controls="collapseTransferencias">
				<i class="fas fa-sync-alt text-sky-300 text-xl mr-8"></i>
				<span>Traspasos</span>
				<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
			</a>
			{{-- <div id="collapseTransferencias" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="registro_traspaso.php"><i class="fas fa-upload mr-2 text-verde text-xl"></i>Traspaso/Devolucion</a>				
					<a class="collapse-item" href="lista_traspasos.php"><i class="fas fa-list mr-2 text-rojo"></i>Traspasos</a>
					<a class="collapse-item" href="lista_devoluciones.php"><i class="fas fa-list mr-2 text-azul"></i>Devoluciones</a>
				</div>
			</div> --}}
		</li>
		<!-- Nav Item - Medicamentos Collapse Menu -->
		<li class="nav-item mb-4">
			<a class="nav-link flex items-center text-gray-300 pl-4" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-capsules text-yellow-500 text-xl mr-8" style="font-size: 1.2rem;"></i>				
				<span>Medicamentos</span>
				<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
			</a>
			{{-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="lista_medicamentos.php"><i class="fas fa-notes-medical mr-2 text-rojo"></i>Lista Medicamentos</a>
					<a class="collapse-item" href="registro_medicamento.php"><i class="fas fa-pills mr-2 text-azul"></i>Reg. Medicamento</a>
					<a class="collapse-item" href="registro_pactivo.php"><i class="fas fa-vial mr-2 text-verde"></i>P. Activo</a>				
					<a class="collapse-item" href="registro_formafarmaceutica.php"><i class="fas fa-capsules mr-2 text-orange"></i>Forma Farmaceutica</a>
					<a class="collapse-item" href="registro_accionterapeutica.php"><i class="fas fa-stethoscope mr-2 text-info"></i>Accion Terapeutica</a>		
					<a class="collapse-item" href="registro_unidades.php"><i class="fas fa-vials mr-2 text-azul"></i>Unidades</a>				
				</div>
			</div> --}}
		</li>
		<div class="text-gray-300 font-semibold text-sm uppercase tracking-wide pb-1 pl-2">
			GESTIÓN REGISTROS
		</div>
		<hr class="border-gray-300 pb-4">
		<!-- Nav Item - Clientes Collapse Menu -->
		<li class="nav-item mb-4">
			<a class="nav-link flex items-center text-gray-300 pl-4" href="#" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-users text-orange-500 mr-8"></i>
				<span>Clientes</span>
				<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
			</a>
			{{-- <div id="collapseClientes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="registro_cliente.php"><i class="fas fa-user mr-2 text-azul"></i>Nuevo Clientes</a>
					<a class="collapse-item" href="lista_cliente.php"><i class="fas fa-list mr-2 text-rojo"></i>Clientes</a>
				</div>
			</div> --}}
		</li>

		<!-- Nav Item - Proveedores Collapse Menu -->
		
			<li class="nav-item mb-4">
				<a class="nav-link flex items-center text-gray-300 pl-4" href="#" data-toggle="collapse" data-target="#collapseProveedor" aria-expanded="true" aria-controls="collapseUtilities">
					<i class="fas fa-building text-sky-300 mr-8"></i>
					<span>Proveedor</span>
					<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
				</a>
				{{-- <div id="collapseProveedor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="registro_proveedor.php"><i class="fas fa-vial mr-2 text-verde"></i>Nuevo Proveedor</a>
						<a class="collapse-item" href="lista_proveedor.php"><i class="fas fa-list mr-2 text-rojo"></i>Proveedores</a>
					</div>
				</div> --}}
			</li>
		

		<!-- Nav Item - Sucursales/Almacenes Collapse Menu -->
		
			<li class="nav-item mb-4">
				<a class="nav-link flex items-center text-gray-300 pl-4" href="#" data-toggle="collapse" data-target="#collapseSucursal" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-store text-emerald-400 mr-8"></i>
				<span>Sucursales</span>
				<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
			</a>
			{{-- <div id="collapseSucursal" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="registro_sucursal.php"><i class="fa fa-store mr-2 text-rojo"></i>Nueva Sucursal</a>
					<a class="collapse-item" href="lista_sucursales.php"><i class="fas fa-list mr-2 text-azul"></i>Sucursales</a>
				</div>
			</div>		 --}}
			</li>
		

			<!-- Nav Item - Asignacion de Cajas Collapse Menu -->
		
				<!-- Nav Item - Soporte Menu -->
				<li class="nav-item mb-4">
					<a class="nav-link flex items-center text-gray-300 pl-4" href="registro_caja.php">
					<i class="fas fa-cash-register text-yellow-300 mr-8"></i>
					<span>Asignacion Cajas</span>
					<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
				</a>		
			</li>

		<!-- Nav Item - Usuarios Collapse Menu -->
		
			<!-- Nav Item - Usuarios Collapse Menu -->
			<li class="nav-item mb-4">
				<a class="nav-link flex items-center text-gray-300 pl-4" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="true" aria-controls="collapseUtilities">
					<i class="fas fa-user-nurse text-red-400 mr-8 "></i>
					<span>Usuarios</span>
					<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
				</a>
				{{-- <div id="collapseUsuarios" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="registro_usuario.php"><i class="fa fa-hospital-user mr-2 text-azul"></i>Nuevo Usuario</a>
						<a class="collapse-item" href="lista_usuarios.php"><i class="fas fa-list mr-2 text-rojo"></i>Usuarios</a>
					</div>
				</div> --}}
			</li>
			<div class="text-gray-300 font-semibold text-sm uppercase tracking-wide pb-1 pl-2">
				AJUSTES
			</div>
			<hr class="border-gray-300 pb-4">
			
			<li class="nav-item mb-4">
				
				<a class="nav-link flex items-center text-gray-300 pl-4"  href="#"data-toggle="collapse" data-target="#collapseUtilitarios" aria-expanded="true" aria-controls="collapseUtilitarios">
					<i class="fas fa-exclamation-circle text-yellow-300 mr-8" ></i>
					<span>Utilitarios</span>
					<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
				</a>
			
				{{-- <div id="collapseUtilitarios" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">				
					<a class="collapse-item" href="#"><i class="fa fa-upload mr-2 text-verde" ></i>Exportar</a>
						<a class="collapse-item" href="#"><i class="fa fa-download mr-2 text-rojo" ></i>Importar</a>
					</div>
				</div> --}}
			</li> 
		
			<!-- Nav Item - Configuraciones Collapse Menu -->
		
				<li class="nav-item mb-4">
					<a class="nav-link flex items-center text-gray-300 pl-4" href="configuracion.php">
						<i class="fas fa-cog  text-gray-400 mr-8"></i>
						<span>Configuraciones</span>
						<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
					</a>		
				</li>
				<!-- Nav Item - Soporte Menu -->
				<li class="nav-item mb-4">
					<a class="nav-link flex items-center text-gray-300 pl-4" href="soporte.php">
						<i class="fas fa-exclamation-circle text-red-500 mr-8"></i>
						<span>Help</span>
						<i class="fas fa-chevron-right hover:text-gray-200 ml-auto"></i>
					</a>		
				</li>
	</ul>
	
</aside>
