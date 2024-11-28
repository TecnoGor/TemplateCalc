function servicesInternationals() {
    $.get('./templates/modules/servicesInternationals.php',function(mensaje, estado){
        document.getElementById('servicesPostals').innerHTML=mensaje;
        document.getElementById('ApiRastreo').style="display: none";
        document.getElementById('servicesForm').style="display:none";
    })
}

function formEMSC() {

    $.get('./templates/formsInternational/destiny.php', function(mensaje, estado){
       document.getElementById('servicesForm').style="display:flex";
       document.getElementById('servicesForm').innerHTML=mensaje;
       document.getElementById('servicePostal').innerHTML="EMSC";
       document.getElementById('menuNational').style = 'display:none';
   })

}

function formPPI() {

    $.get('./templates/formsInternational/destiny.php', function(mensaje, estado){
       document.getElementById('servicesForm').style="display:flex";
       document.getElementById('servicesForm').innerHTML=mensaje;
       document.getElementById('servicePostal').innerHTML="PPI";
       document.getElementById('menuNational').style = 'display:none';
   })

}

function formCP() {

    $.get('./templates/formsInternational/destiny.php', function(mensaje, estado){
       document.getElementById('servicesForm').style="display:flex";
       document.getElementById('servicesForm').innerHTML=mensaje;
       document.getElementById('servicePostal').innerHTML="CP";
       document.getElementById('menuNational').style = 'display:none';
   })

}

function formMI() {

    $.get('./templates/formsInternational/destiny.php', function(mensaje, estado){
       document.getElementById('servicesForm').style="display:flex";
       document.getElementById('servicesForm').innerHTML=mensaje;
       document.getElementById('servicePostal').innerHTML="MI";
       document.getElementById('menuNational').style = 'display:none';
   })

}

function formLCI() {

    $.get('./templates/formsInternational/destiny.php', function(mensaje, estado){
       document.getElementById('servicesForm').style="display:flex";
       document.getElementById('servicesForm').innerHTML=mensaje;
       document.getElementById('servicePostal').innerHTML="LCI";
       document.getElementById('menuNational').style = 'display:none';
   })

}

function nextFormInternational(){
    $.get('./templates/formsInternational/weight.php', function(mensaje, estado){
        var servicePostal = document.getElementById('servicePostal');
        var a = servicePostal.textContent;
        var continente = document.getElementById('pais');
        var b = continente.value;
        var c = continente.options[continente.selectedIndex];
        var textoPais = c.text;
        document.getElementById('servicesForm').innerHTML=mensaje;
        document.getElementById('servicePostalHidden').innerHTML=a;
        document.getElementById('continenteHidden').innerHTML=b;
        document.getElementById('paisHidden').innerHTML=textoPais;
    })
}

function showPrice(){
   
        var pais = document.getElementById('paisHidden');
        var a = pais.textContent;
        var continenteId = document.getElementById('continenteHidden');
        var b = continenteId.textContent;
        var textService = document.getElementById('servicePostalHidden');
        var servicio = textService.textContent;
        var unidad = document.getElementById('unidadInt').value;
        var peso = document.getElementById('pesoInt').value;

        if(servicio == "EMSC"){
            if(unidad == "G"){
                if (peso > 30000) {
                    document.getElementById('textLimite').innerHTML="Los servicios EMS tienen un limite de 30000G.";
                } else {
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                        document.getElementById('weight').innerHTML=peso+unidad;
                        document.getElementById('servicePostal').innerHTML=servicio;
                        document.getElementById('pais').innerHTML=a;
                        
                    })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
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
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                        document.getElementById('weight').innerHTML=peso+unidad;
                        document.getElementById('servicePostal').innerHTML=servicio;
                        document.getElementById('pais').innerHTML=a;
                        
                    })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
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
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                        document.getElementById('weight').innerHTML=peso+unidad;
                        document.getElementById('servicePostal').innerHTML=servicio;
                        document.getElementById('pais').innerHTML=a;
                        
                    })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
                        },
                        success: function(data) {
                            $('#price').html(data);
                        }
    
                    })
                }
            }
        }if(servicio == "PPI"){
            if(unidad == "G"){
    
                if (peso > 30000) {
                    document.getElementById('textLimite').innerHTML="Los servicios LC tienen un limite de 30.000G.";
                } else {
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                        document.getElementById('weight').innerHTML=peso+unidad;
                        document.getElementById('servicePostal').innerHTML=servicio;
                        document.getElementById('pais').innerHTML=a;
                        
                    })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
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
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                        document.getElementById('weight').innerHTML=peso+unidad;
                        document.getElementById('servicePostal').innerHTML=servicio;
                        document.getElementById('pais').innerHTML=a;
                        
                    })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
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
                  $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                    document.getElementById('servicesForm').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    document.getElementById('pais').innerHTML=a;
                    
                })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
                        },
                        success: function(data) {
                            $('#price').html(data);
                        }
                    })  
                }
    
            }
        }if(servicio == "CP"){
            if(unidad == "G"){
    
                if (peso > 30000) {
                    document.getElementById('textLimite').innerHTML="Los servicios LC tienen un limite de 30.000G.";
                } else {
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                        document.getElementById('weight').innerHTML=peso+unidad;
                        document.getElementById('servicePostal').innerHTML=servicio;
                        document.getElementById('pais').innerHTML=a;
                        
                    })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
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
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                        document.getElementById('weight').innerHTML=peso+unidad;
                        document.getElementById('servicePostal').innerHTML=servicio;
                        document.getElementById('pais').innerHTML=a;
                        
                    })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
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
                  $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                    document.getElementById('servicesForm').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    document.getElementById('pais').innerHTML=a;
                    
                })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
                        },
                        success: function(data) {
                            $('#price').html(data);
                        }
    
                    })  
                }
    
            }
        }if(servicio == "MI"){
            if(unidad == "G"){
    
                if (peso > 30000) {
                    document.getElementById('textLimite').innerHTML="Los servicios LC tienen un limite de 30.000G.";
                } else {
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                        document.getElementById('weight').innerHTML=peso+unidad;
                        document.getElementById('servicePostal').innerHTML=servicio;
                        document.getElementById('pais').innerHTML=a;
                        
                    })
                        $.ajax({
                            url: './includes/calcInt.php',
                            method: 'POST',
                            data: {
                                servicio:servicio,
                                peso:peso,
                                unidad:unidad,
                                pais:b
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
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    document.getElementById('pais').innerHTML=a;
                    
                })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
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
                  $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                    document.getElementById('servicesForm').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    document.getElementById('pais').innerHTML=a;
                    
                })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
                        },
                        success: function(data) {
                            $('#price').html(data);
                        }
    
                    })  
                }
    
            }
        }if(servicio == "LCI"){
            if(unidad == "G"){
    
                if (peso > 30000) {
                    document.getElementById('textLimite').innerHTML="Los servicios LC tienen un limite de 30.000G.";
                } else {
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                        document.getElementById('weight').innerHTML=peso+unidad;
                        document.getElementById('servicePostal').innerHTML=servicio;
                        document.getElementById('pais').innerHTML=a;
                        
                    })
                        $.ajax({
                            url: './includes/calcInt.php',
                            method: 'POST',
                            data: {
                                servicio:servicio,
                                peso:peso,
                                unidad:unidad,
                                pais:b
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
                    $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                        document.getElementById('servicesForm').innerHTML=mensaje;
                        document.getElementById('weight').innerHTML=peso+unidad;
                        document.getElementById('servicePostal').innerHTML=servicio;
                        document.getElementById('pais').innerHTML=a;
                        
                    })
                        $.ajax({
                            url: './includes/calcInt.php',
                            method: 'POST',
                            data: {
                                servicio:servicio,
                                peso:peso,
                                unidad:unidad,
                                pais:b
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
                  $.get('./templates/formsInternational/price.php', function(mensaje, estado){
    
                    document.getElementById('servicesForm').innerHTML=mensaje;
                    document.getElementById('weight').innerHTML=peso+unidad;
                    document.getElementById('servicePostal').innerHTML=servicio;
                    document.getElementById('pais').innerHTML=a;
                    
                })
                    $.ajax({
                        url: './includes/calcInt.php',
                        method: 'POST',
                        data: {
                            servicio:servicio,
                            peso:peso,
                            unidad:unidad,
                            pais:b
                        },
                        success: function(data) {
                            $('#price').html(data);
                        }
    
                    })  
                }
    
            }
        }
    
}