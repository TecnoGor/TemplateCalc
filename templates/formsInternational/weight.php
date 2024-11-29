<form method="get" action="" class="container w-50 bg-black bg-gradient bg-opacity-25 position-absolute top-50 start-50 translate-middle row g-3 p-3 border border-danger-subtle rounded">
    <div class="container text-center text-light">
        <h1> - Peso y Unidad</h1>
    </div>
    <hr>

    <div class="container col-md-5">
        <label for="pesoInt" class="form-label h3 text-light">Peso:</label>
        <input type="number" required name="pesoInt" style="font-size: 15px" class="form-control" id="pesoInt">
        <h6 class="text-danger" id="textLimite"></h6>
    </div>

    <div class="container col-md-5">
        <label for="unidadInt" class="form-label h3 text-light">Unidad:</label>
        <select name="unidadInt" required style="font-size: 15px" id="unidadInt" class="form-select">
            <option disabled selected>Seleccione...</option>
            <option value="G">Gramo</option>
            <option value="KG">Kilogramo</option>
            <option value="LB">Libras</option>
        </select>
    </div>
    <hr>

    <div class="container d-grid gap-2 col-3">
        <button type="button" onclick="showPrice()" id="guardar" class="btn btn-danger btn-lg">Siguiente</button>
    </div>

</form>

    <div id="contenedorDatos" style="display: none;">
        <input type="hidden" id="continenteHidden">
        <input type="hidden" id="paisHidden">
        <input type="hidden" id="servicePostalHidden">
    </div>