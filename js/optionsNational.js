function servicesNationals() {
    $.get('./templates/modules/servicesNationals.php', function(mensaje, estado){
        document.getElementById('contentCardsBlogs').style = 'display:none';
        document.getElementById('contentButtonTracking').style = 'display:none';
        document.getElementById('contentTemplates').innerHTML=mensaje;
        // document.getElementById('ApiRastreo').style="display: none";
    })
}

function formEEB() {

     $.get('./templates/forms/destiny.php', function(mensaje, estado){
        document.getElementById('contentTemplates').innerHTML=mensaje;
        document.getElementById('servicePostal').innerHTML="EEB";
    })

}

function nextForm() {
    var a = $('#ST').val();
    var b = $('#OPT').val();
    var servicePostal = document.getElementById('servicePostal');
    var c = servicePostal.textContent;
    var d = $('#STorigen').val();
    var e = $('#OPTorigen').val();

    const select = document.getElementById('OPT');
    const selectedOption = select.options[select.selectedIndex];
    const texto = selectedOption.text;

    if (a == "" || a == null || b == "" || b == null || c == "" || c == null || d == "" || d == null || e == "" || e == null) {
        swal({
            title: 'Alerta!',
            text: "Debe ingresar todos los campos.",
            type: 'warning',
            showCancelButton: false,
            confirmButtonText: 'OK',
            closeOnConfirm: false
        });
    }else {
        $.get('./templates/forms/weightUnit.php', function(mensaje, estado){
            document.getElementById('contentTemplates').innerHTML=mensaje;
            document.getElementById('stHidden').innerHTML=a;
            document.getElementById('optHidden').innerHTML=b;
            document.getElementById('textOpt').innerHTML=texto;
            document.getElementById('stOrigenHidden').innerHTML=d;
            document.getElementById('optOrigenHidden').innerHTML=e;
            document.getElementById('servicePostalHidden').innerHTML=c;
        })
    }

}

function nextForm2() {
    var peso = $('#WGHT').val();
    var unidad = $('#UNIT').val();
    let a = document.getElementById('stHidden');
    let ST = a.textContent;
    let c = document.getElementById('optHidden');
    let OPT = c.textContent;
    let d = document.getElementById('textOpt');
    let textOpt = d.textContent;
    let e = document.getElementById('stOrigenHidden');
    let STorigen = e.textContent;
    let g = document.getElementById('optOrigenHidden');
    let OPTorigen = g.textContent;


    let i = document.getElementById('servicePostalHidden');
    let servicio = i.textContent;

    if(servicio == "LC"){
        if(unidad == "G"){
            if (peso > 2000) {
                document.getElementById('textLimite').innerHTML="Los servicios LC tienen un limite de 2000G.";
            } else {
                $.get('./templates/forms/price.php', function(mensaje, estado){

                    document.getElementById('contentTemplates').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('optDestino').innerHTML=textOpt;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    
                })
                $.ajax({
                    url: './includes/calc.php',
                    method: 'POST',
                    data: {
                        servicio:servicio,
                        peso:peso,
                        unidad:unidad,
                        STorigen:STorigen,
                        OPTorigen:OPTorigen,
                        ST:ST,
                        OPT:OPT
                    },
                    success: function(data) {
                        $('#price').html(data);
                    }

                })
            }

        } if (unidad == "KG") {
            if (unidad * 1000 == 2) {
                document.getElementById('textLimite').innerHTML="Los servicios LC tienen un limite de 2Kg.";
            } else {
                $.get('./templates/forms/price.php', function(mensaje, estado){

                    document.getElementById('contentTemplates').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('optDestino').innerHTML=textOpt;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    
                })
                $.ajax({
                    url: './includes/calc.php',
                    method: 'POST',
                    data: {
                        servicio:servicio,
                        peso:peso,
                        unidad:unidad,
                        STorigen:STorigen,
                        OPTorigen:OPTorigen,
                        ST:ST,
                        OPT:OPT
                    },
                    success: function(data) {
                        $('#price').html(data);
                    }

                })
            }
        } if (unidad == "LB") {
            if (unidad * 453,592 == 4,409245) {
                document.getElementById('textLimite').innerHTML="Los servicios LC tienen un limite de 4,409Lb.";
            } else {
                $.get('./templates/forms/price.php', function(mensaje, estado){

                    document.getElementById('contentTemplates').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('optDestino').innerHTML=textOpt;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    
                })
                $.ajax({
                    url: './includes/calc.php',
                    method: 'POST',
                    data: {
                        servicio:servicio,
                        peso:peso,
                        unidad:unidad,
                        STorigen:STorigen,
                        OPTorigen:OPTorigen,
                        ST:ST,
                        OPT:OPT
                    },
                    success: function(data) {
                        $('#price').html(data);
                    }

                })
            }
        }
    }if(servicio == "EEB"){
        if(unidad == "G"){

            if (peso > 30000) {
                document.getElementById('textLimite').innerHTML="Los servicios LC tienen un limite de 30.000G.";
            } else {
                $.get('./templates/forms/price.php', function(mensaje, estado){

                    document.getElementById('contentTemplates').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('optDestino').innerHTML=textOpt;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    
                })
                $.ajax({
                    url: './includes/calc.php',
                    method: 'POST',
                    data: {
                        servicio:servicio,
                        peso:peso,
                        unidad:unidad,
                        STorigen:STorigen,
                        OPTorigen:OPTorigen,
                        ST:ST,
                        OPT:OPT
                    },
                    success: function(data) {
                        $('#price').html(data);
                    }

                })
            }

        } if (unidad == "KG") {

            if (unidad * 1000 == 30) {
                document.getElementById('textLimite').innerHTML="Los servicios LC tienen un limite de 30Kg.";
            } else {
                $.get('./templates/forms/price.php', function(mensaje, estado){

                    document.getElementById('contentTemplates').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('optDestino').innerHTML=textOpt;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    
                })
                $.ajax({
                    url: './includes/calc.php',
                    method: 'POST',
                    data: {
                        servicio:servicio,
                        peso:peso,
                        unidad:unidad,
                        STorigen:STorigen,
                        OPTorigen:OPTorigen,
                        ST:ST,
                        OPT:OPT
                    },
                    success: function(data) {
                        $('#price').html(data);
                    }

                })
            }

        } if (unidad == "LB") {

            if (unidad * 453,592 == 66,1387) {
                document.getElementById('textLimite').innerHTML="Los servicios LC tienen un limite de 66,1387Lb.";
            } else {
              $.get('./templates/forms/price.php', function(mensaje, estado){

                    document.getElementById('contentTemplates').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('optDestino').innerHTML=textOpt;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    
                })
                $.ajax({
                    url: './includes/calc.php',
                    method: 'POST',
                    data: {
                        servicio:servicio,
                        peso:peso,
                        unidad:unidad,
                        STorigen:STorigen,
                        OPTorigen:OPTorigen,
                        ST:ST,
                        OPT:OPT
                    },
                    success: function(data) {
                        $('#price').html(data);
                    }

                })  
            }

        }
    }

    // $.get('./template/forms/price.php', function(mensaje, estado){

    //     document.getElementById('servicesForm').innerHTML=mensaje;
    //     document.getElementById('weight').innerHTML=peso+unidad;
    //     document.getElementById('optDestino').innerHTML=textOpt;
    //     document.getElementById('servicePostal').innerHTML=servicio;
        
    // })
    // $.ajax({
    //     url: './includes/calc.php',
    //     method: 'POST',
    //     data: {
    //         servicio:servicio,
    //         peso:peso,
    //         unidad:unidad,
    //         STorigen:STorigen,
    //         OPTorigen:OPTorigen,
    //         ST:ST,
    //         OPT:OPT
    //     },
    //     success: function(data) {
    //         $('#price').html(data);
    //     }

    // })
}


function formPP() {
    $.get('./templates/forms/destiny.php', function(mensaje, estado){
        document.getElementById('contentCardsBlogs').style = 'display:none';
        document.getElementById('contentButtonTracking').style = 'display:none';
        document.getElementById('contentTemplates').innerHTML=mensaje;
        document.getElementById('servicePostal').innerHTML="PP";
    })

}

function formLC() {
    $.get('./templates/forms/destiny.php', function(mensaje, estado){
        document.getElementById('contentCardsBlogs').style = 'display:none';
        document.getElementById('contentButtonTracking').style = 'display:none';
        document.getElementById('contentTemplates').innerHTML=mensaje;
        document.getElementById('servicePostal').innerHTML="LC";
    })


}