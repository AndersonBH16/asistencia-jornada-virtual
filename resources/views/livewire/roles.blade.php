<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <div class="mt-16">
                @foreach ($roles as $rol)        
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioRol" id="chk_{{$rol->id}}" wire:click="tareas({{$rol->id}})" />
                        <label class="form-check-label mt-6 text-xl font-semibold text-gray-900" for="chk_{{$rol->id}}">
                            {{ $rol->nombre }}
                        </label>
                    </div>      
                @endforeach
            </div>    
        </div>
    </div>      
    
</div>
