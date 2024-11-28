<form method="get" action="" class="container bg-white row g-3 p-3 border border-primary-subtle rounded">
    <div class="container">
        <h3> - Peso y Unidad</h3>
    </div>
    <hr>

    <div class="container col-md-5">
        <label for="pesoInt" class="form-label">Peso:</label>
        <input type="number" required name="pesoInt" class="form-control" id="pesoInt">
        <h6 class="text-danger" id="textLimite"></h6>
    </div>

    <div class="container col-md-5">
        <label for="unidadInt" class="form-label">Unidad:</label>
        <select name="unidadInt" required id="unidadInt" class="form-select">
            <option disabled selected>Seleccione...</option>
            <option value="G">Gramo</option>
            <option value="KG">Kilogramo</option>
            <option value="LB">Libras</option>
        </select>
    </div>
    <hr>

    <div class="container d-grid gap-2 col-3">
        <button type="submit" class="btn btn-primary btn-lg">Inicio</button>
    </div>

</form>

<div class="container d-grid gap-2 col-3 p-3">
        <button type="" onclick="showPrice()" id="guardar" class="btn btn-primary btn-lg">Siguiente</button>
</div>

    <div id="contenedorDatos" style="display: none;">
        <input type="hidden" id="continenteHidden">
        <input type="hidden" id="paisHidden">
        <input type="hidden" id="servicePostalHidden">
    </div>