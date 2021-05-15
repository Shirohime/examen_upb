<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Alumnos
    </h2>
</x-slot>


<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

          <!-- Borde Azúl -->
					<nav
						class="flex items-center justify-between flex-wrap bg-white py-4 shadow border-solid border-t-2 border-blue-700">
						<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full">

            	<!-- This example requires Tailwind CSS v2.0+ -->
							<div class="flex flex-col">
							  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
							    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
							      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

											<!-- Create Button -->
							      	<div class="text-md font-bold text-blue-700 lg:flex-grow inline ml-3">
							      		<a
													wire:click="create()"
									        type="button"
									        class="block mt-4 lg:inline-block lg:mt-0 hover:text-white px-4 py-2 rounded hover:bg-blue-700 mr-2 cursor-pointer">
			                    + Nuevo Alumno
			    						  </a>
												@if($isOpen)
						                @include('livewire.calificaciones.alumno.alumno-crud')
						            @endif
			    						</div>
											<!-- End Create Button -->

											<!-- View Table -->
											<div class="form-input rounded-md shadow-sm ml-6 inline float-right mr-6">
												<select wire:model="perPage" class="outline-none text-gray-500 text-sm border-2 border-gray-300 bg-white rounded h-10">
													<option value="2">2 por página</option>
													<option value="5">5 por página</option>
													<option value="10">10 por página</option>
													<option value="15">15 por página</option>
													<option value="20">20 por página</option>
													<option value="25">25 por página</option>
													<option value="50">50 por página</option>
													<option value="100">100 por página</option>
												</select>
											</div>
											<!-- End View Table -->

											<!-- Search Bar -->
											<div class="relative mx-auto text-gray-600 lg:block hidden inline float-right mr-1 w-2/5">
					                <input
					                    class="w-full border-2 border-gray-300 bg-white h-10 pl-2 pr-8 rounded-lg text-sm focus:outline-none"
					                    wire:model="search" type="search" name="search" placeholder="Buscar">
					                <button type="submit" class="absolute right-0 top-0 mt-3 mr-2">
					                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
					                         version="1.1" id="Capa_1" x="0px" y="0px"
					                         viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
					                         xml:space="preserve"
					                         width="512px" height="512px">
								                <path
								                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
								              </svg>
					                </button>
					            </div>
											<!-- End Search Bar -->

          <table class="min-w-full divide-y divide-gray-200 mt-10">
                      <thead class="bg-indigo-100">
                        <tr>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID
                          </th>
                          <th scope="col" class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre Completo
                          </th>
                          <th scope="col" class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                          </th>
                          <th scope="col" class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Teléfono
                          </th>
                          <th scope="col" colspan="2" class="text-center text-xs font-medium text-gray-500 uppercase tracking-wider px-1 py-3">
                            <span class="">Acciones</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">

                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">

                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-8 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">

                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-8 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">

                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-8 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">

                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-1 py-3 whitespace-nowrap text-center text-sm font-medium">

                              <a  class="text-indigo-600 hover:text-indigo-900 cursor-pointer">

                                Editar
                              </a>
                            </td>
                            <td class="px-1 py-3 whitespace-nowrap text-center text-sm font-medium">
                              <a  class="text-indigo-600 hover:text-indigo-900 cursor-pointer">

                                Eliminar
                            </a>
                            </td>
                          </tr>

                        <!-- More rows... -->
                      </tbody>
                    </table>

                    
            			              	<div class="bg-white px-4 py-3 border-t border-gray-200 text-gray-500 sm:px-6 mt-8">
            			                	No hay resultados para la búsqueda "{{ $search }}" en la página {{ $page }} al mostrar "{{ $perPage }}" por página
            			                </div>

            							      </div>
            							    </div>
            							  </div>
            							</div>


                        </div>
            						</nav>
                    </div>
</div>
