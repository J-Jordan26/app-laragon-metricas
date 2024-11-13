<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
</div>

<div class="form-group">
    <label for="descripcion">Descripción:</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Descripción" required>
</div>

<div class="form-group">
    <label for="categoria_id">Categoría:</label>
    <select name="categoria_id" id="categoria_id" class="form-control" required>
        <option value="" disabled selected>Selecciona una categoría</option>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="tipo">Tipo:</label>
    <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo" required>
</div>

<div class="form-group">
    <label for="valor_minimo">Valor Mínimo:</label>
    <input type="number" name="valor_minimo" id="valor_minimo" class="form-control" placeholder="Valor Mínimo" required>
</div>

<div class="form-group">
    <label for="valor_maximo">Valor Máximo:</label>
    <input type="number" name="valor_maximo" id="valor_maximo" class="form-control" placeholder="Valor Máximo" required>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
