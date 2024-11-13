<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="evaluaciones_id" class="form-label">{{ __('Evaluaciones Id') }}</label>
            <input type="text" name="evaluaciones_id" class="form-control @error('evaluaciones_id') is-invalid @enderror" value="{{ old('evaluaciones_id', $evaluacione?->evaluaciones_id) }}" id="evaluaciones_id" placeholder="Evaluaciones Id">
            {!! $errors->first('evaluaciones_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="empleado_id" class="form-label">{{ __('Empleado Id') }}</label>
            <input type="text" name="empleado_id" class="form-control @error('empleado_id') is-invalid @enderror" value="{{ old('empleado_id', $evaluacione?->empleado_id) }}" id="empleado_id" placeholder="Empleado Id">
            {!! $errors->first('empleado_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_evaluacion" class="form-label">{{ __('Fecha Evaluacion') }}</label>
            <input type="text" name="fecha_evaluacion" class="form-control @error('fecha_evaluacion') is-invalid @enderror" value="{{ old('fecha_evaluacion', $evaluacione?->fecha_evaluacion) }}" id="fecha_evaluacion" placeholder="Fecha Evaluacion">
            {!! $errors->first('fecha_evaluacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="puntaje" class="form-label">{{ __('Puntaje') }}</label>
            <input type="text" name="puntaje" class="form-control @error('puntaje') is-invalid @enderror" value="{{ old('puntaje', $evaluacione?->puntaje) }}" id="puntaje" placeholder="Puntaje">
            {!! $errors->first('puntaje', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $evaluacione?->observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>