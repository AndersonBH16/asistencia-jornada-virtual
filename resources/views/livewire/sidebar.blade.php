<!-- Sidebar -->
<aside id="sidebar" class="w-64 bg-gray-800 text-gray-100 flex-shrink-0 transition-all duration-300">
    <div class="h-full px-3 py-4 overflow-y-auto">       
        <a href="{{ route('dashboard') }}" class="flex items-center ps-2.5 mb-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Universidad_Nacional_de_Trujillo_-_Per%C3%BA_vector_logo.png" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
            <span id="sidebar-title" class="self-center text-xs font-semibold whitespace-nowrap dark:text-white">CONTROL DE ASISTENCIA</span>
        </a>
        <ul class="space-y-2 font-medium">
           {{-- <li>
                <a href="#" class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-gray-900 dark:group-hover:text-gray-900">Dashboard</span>
                </a>
            </li>--}}           

            @if(is_iterable($modulos))                
                @foreach ($modulos as $mod) 
                        <li>  
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="{{$mod['icono']}}"/>                                                  
                                </svg>                         
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap"> {{$mod['nombre']}}</span>
                            </button>                                                           
                            
                            @if(is_iterable($permisos))
                                <ul>
                                    @foreach ($permisos as $permiso)
                                        @if($permiso['modulo_id'] == $mod['id'])
                                            <li>                                                 
                                                <a href="#" class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">                                                   
                                                    <span class="flex-1 ms-3 whitespace-nowrap">{{$permiso['nombre']}}</span>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>     
                            @endif
                                
                        </li>        
                    @endforeach   
                 
            @endif
             


        {{--    <li>
                <a href="/asistencia" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 22 21">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Asistencia</span>
                </a>
            </li>
            <li> --}}
        </ul>
    </div>
</aside>
