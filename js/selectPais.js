function selectPais() {
    var continente = document.getElementById("continente").value;
    var pais = document.getElementById("pais");
    pais.innerHTML = "";
    
        $.ajax({
            url: './includes/continentePais.php',
            method: 'POST',
            data: {
                idContinente: continente
            },
            success: function(data){
                $('#pais').html(data);
            }
        })

}
