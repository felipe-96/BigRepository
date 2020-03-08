@csrf 
<div class="form-group row">
    <div class="col-md-4">
        <label for="title">Rut *</label>
            <input class="form-control border-0 bg-light shadow-sm"
                type="text" name="rut" value="{{ old('rut', $academic->rut) }}">       
    
    </div>

    <div class="col-md-4">
        <label for="title">Primer Nombre *</label>
            <input class="form-control border-0 bg-light shadow-sm"
                type="text" name="nombre_1" value="{{ old('nombre_1', $academic->nombre_1) }}">       
    
    </div>

    <div class="col-md-4">
        <label for="title">Segundo Nombre</label>
            <input class="form-control border-0 bg-light shadow-sm"
                type="text" name="nombre_2" value="{{ old('nombre_2', $academic->nombre_2) }}">       
    
    </div>
</div>
<div class="form-group row">
    <div class="col-md-4">
        <label for="title">Primer Apellido *</label>
            <input class="form-control border-0 bg-light shadow-sm"
                type="text" name="apellido_1" value="{{ old('apellido_1', $academic->apellido_1) }}">       
    
    </div>

    <div class="col-md-4">
        <label for="title">Segundo Apellido</label>
            <input class="form-control border-0 bg-light shadow-sm"
                type="text" name="apellido_2" value="{{ old('apellido_2', $academic->apellido_2) }}">       
    
    </div>

    <div class="col-md-4">
        <label for="title">Título Profesional *</label>
            <input class="form-control border-0 bg-light shadow-sm"
                type="text" name="titulo" value="{{ old('titulo', $academic->titulo) }}">       
    
    </div>


</div>


<div class="form-group row">

    <div class="col-md-2">
        <label for="title">Grado académico *</label>
            <input class="form-control border-0 bg-light shadow-sm"
                type="text" name="grado" value="{{ old('grado', $academic->grado) }}">       
    
    </div>
    <div class="col-md-2">
        <label for="title">Departamento *</label>
            <input class="form-control border-0 bg-light shadow-sm"
                type="text" name="depto" value="{{ old('depto', $academic->depto) }}">       
    
    </div>


    <div class="col-md-2">
        <div class="form-group">
            <label for="categoria" >{{ __('Categoría') }}
                <select id="categoria" type="text" class="form-control " name="categoria"  required >
                    <option> Instructor </option>
                    <option> Auxiliar </option>
                    <option> Adjunto </option>
                    <option> Titular </option>
                </select>
            </label>
        </div>
    </div>

    <div class="col-md-2">
        <label for="title">Horas de contrato *</label>
            <input class="form-control border-0 bg-light shadow-sm"
                type="text" name="hrs_contrato" value="{{ old('hrs_contrato', $academic->hrs_contrato) }}">       
    
    </div>

    <div class="col-md-2">
        <label for="title">Tipo de planta *</label>
            <input class="form-control border-0 bg-light shadow-sm"
                type="text" name="planta" value="{{ old('planta', $academic->planta) }}">       
    
    </div>

    <div class="col-md-2">
        <div class="form-group ">
            <label for="estado" >{{ __('Estado') }}
                <select id="estado" type="estado" class="form-control " name="estado"  required autocomplete="estado">
                    <option> Activo </option>
                    <option> Inactivo </option>
                </select>
            </label>
        </div>
    </div>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('academics.index') }}">Cancelar</a>