<form method="get" action="" class="container bg-white position-absolute top-50 start-50 translate-middle row g-3 p-3 border border-primary-subtle rounded">
    <div class="container">
        <h3> - Peso y Unidad</h3>
    </div>
    <hr>

    <div class="container col-md-5">
        <label for="WGHT" class="form-label">Peso:</label>
        <input type="number" required name="weight" class="form-control" id="WGHT">
        <h6 class="text-danger" id="textLimite"></h6>
    </div>

    <div class="container col-md-5">
        <label for="UNIT" class="form-label">Unidad:</label>
        <select name="UNIT" required id="UNIT" class="form-select">
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
        <button type="" onclick="nextForm2()" id="guardar" class="btn btn-primary btn-lg">Siguiente</button>
</div>

    <div id="contenedorDatos" style="display: none;">
        <input type="hidden" id="stOrigenHidden">
        <input type="hidden" id="optOrigenHidden">
        <input type="hidden" id="stHidden">
        <input type="hidden" id="optHidden">
        <input type="hidden" id="textOpt">
        <input type="hidden" id="servicePostalHidden">
    </div>