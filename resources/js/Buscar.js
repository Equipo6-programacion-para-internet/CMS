function buscar_datos(consulta){
    $.ajax({
url: 'Esqueleto_Buscar.php',
type: 'POST',
dataType: 'html',
data: {consulta: consulta},

    })
    .done(function(respuesta){
            $('#datos').html(respuesta);
    })
    .fail(function(){

    })
   
}


$(document).on('keyup','#buscar',function(){
var valor = $(this).val();
if(valor!=""){
buscar_datos(valor);
}else{
    buscar_datos();
}
});
