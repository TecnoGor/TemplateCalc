<form method="get" action="" class="container w-50 bg-black bg-gradient bg-opacity-25 position-absolute top-50 start-50 translate-middle row g-3 p-3 border border-danger-subtle rounded">
    <div class="container text-center text-light">
        <h1> - Peso y Unidad</h1>
    </div>
    <hr>

    <div class="container col-md-5">
        <label for="WGHT" class="form-label h3 text-light">Peso:</label>
        <input type="number" step="0.01" required name="weight" style="font-size: 15px" class="form-control" id="WGHT">
        <h6 class="text-danger" id="textLimite"></h6>
    </div>

    <div class="container col-md-5">
        <label for="UNIT" class="form-label h3 text-light">Unidad:</label>
        <select name="UNIT" required id="UNIT" style="font-size: 15px" class="form-select">
            <option disabled selected>Seleccione...</option>
            <option value="G">Gramo</option>
            <option value="KG">Kilogramo</option>
            <option value="LB">Libras</option>
        </select>
    </div>
    <hr>

    <div class="container d-grid gap-2 col-3">
        <button type="button" onclick="nextForm2()" id="guardar" class="btn btn-danger btn-lg">Siguiente</button>
    </div>

</form>

    <div id="contenedorDatos" style="display: none;">
        <input type="hidden" id="stOrigenHidden">
        <input type="hidden" id="optOrigenHidden">
        <input type="hidden" id="stHidden">
        <input type="hidden" id="optHidden">
        <input type="hidden" id="textOpt">
        <input type="hidden" id="servicePostalHidden">
    </div>