const buttons = document.querySelectorAll('.button_style');
buttons.forEach((div) => {
  let target = div.querySelector('.target');
  function handleMove(e) {
    const x = -50 + (e.pageX - div.offsetLeft - 2800 / 2) / 3;
    const y = -10 + (e.pageY - div.offsetTop - 100 / 2) / 3;

    target.style.setProperty('--x', `${ x }px`)
    target.style.setProperty('--y', `${ y }px`)
  }
  div.addEventListener('mousemove', (e) => {
    handleMove(e);
  });
  div.addEventListener('touchmove', (e) => {
    handleMove(e.changedTouches[0]);
  });
});

function containSearch() {
  $.get('./templates/modules/searchContainer.php', function(mensaje, estado){
    document.getElementById('contentCardsBlogs').style = 'display:none';
    document.getElementById('contentButtonTracking').style = 'display:none';
    document.getElementById('contentTemplates').innerHTML=mensaje;
  })

}

function searchEnv() {
  var a = document.getElementById('searchInput').value;

  if (a == null || a == "") {
    swal({
      title: 'Error!',
        text: "Debe ingresar el codigo de envio.",
      type: 'error',
      showCancelButton: false,
      confirmButtonText: 'OK',
      closeOnConfirm: false
    });
  } else {
    $.ajax({
      url: './includes/TRACK_IPS.php',
      method: 'POST',
      data: {
        buscar: a
      },
      success: function(data){
        var data = JSON.parse(data);
  
        if (data.status) {
          swal({
            title: 'Encontrado!',
              text: "El envio fue rastreado con exito!.",
            type: 'success',
            showCancelButton: false,
            confirmButtonText: 'OK',
            closeOnConfirm: false
          });
          document.getElementById('codEnv').textContent = data.data.MAILITM_FID;
          document.getElementById('paisOrig').textContent = data.data.ORIG_COUNTRY_CD;
          document.getElementById('paisDest').textContent = data.data.DEST_COUNTRY_CD;
          document.getElementById('weightEnv').textContent = data.data.MAILITM_WEIGHT + " G";
        } else {
          swal({
            title: 'Error!',
              text: "El codigo de envio no se encuentra.",
            type: 'error',
            showCancelButton: false,
            confirmButtonText: 'OK',
            closeOnConfirm: false
          });
        }
      }
    })
  }
  
}

function modalEventQuery(){
  $('#modalEventos').modal('show');
}