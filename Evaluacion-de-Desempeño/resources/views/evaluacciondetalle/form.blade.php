<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="evaluacion_id" class="form-label">{{ __('Evaluación') }}</label>
            <select name="evaluacion_id" class="form-control @error('evaluacion_id') is-invalid @enderror" id="evaluacion_id">
                <option value="">Seleccione una evaluación</option>
                @foreach($evaluaciones as $evaluacion)
                    <option value="{{ $evaluacion->id }}" {{ old('evaluacion_id', $evaluacciondetalle?->evaluacion_id) == $evaluacion->id ? 'selected' : '' }}>
                        {{ $evaluacion->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('evaluacion_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="metrica_id" class="form-label">{{ __('Métrica') }}</label>
            <select name="metrica_id" class="form-control @error('metrica_id') is-invalid @enderror" id="metrica_id">
                <option value="">Seleccione una métrica</option>
                @foreach($metricas as $metrica)
                    <option value="{{ $metrica->id }}" {{ old('metrica_id', $evaluacciondetalle?->metrica_id) == $metrica->id ? 'selected' : '' }}>
                        {{ $metrica->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('metrica_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="valor_obtenido" class="form-label">{{ __('Valor Obtenido') }}</label>
            <input type="number" step="0.1" min="0" max="1" name="valor_obtenido" class="form-control @error('valor_obtenido') is-invalid @enderror" value="{{ old('valor_obtenido', $evaluacciondetalle?->valor_obtenido) }}" id="valor_obtenido">
            {!! $errors->first('valor_obtenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
