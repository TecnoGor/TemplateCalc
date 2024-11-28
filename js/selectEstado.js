function selectEstado() {
    var estado = document.getElementById("ST").value;
    var opt = document.getElementById("OPT");
    opt.innerHTML = "";
    
        $.ajax({
            url: './includes/optRegion.php',
            method: 'POST',
            data: {
                idRegion: estado
            },
            success: function(data){
                console.log("Hola");
                $('#OPT').html(data);
            }
        })

}

function selectEstadoOrigen() {
    var estado = document.getElementById("STorigen").value;
    var opt = document.getElementById("OPTorigen");
    opt.innerHTML = "";

        $.ajax({
            url: './includes/optRegion.php',
            method: 'POST',
            data: {
                idRegion: estado
            },
            success: function(data){
                $('#OPTorigen').html(data);
            }
        })

}