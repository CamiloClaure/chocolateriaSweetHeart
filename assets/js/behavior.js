function cargarContenido(){
    $.ajax({
        type: 'POST',
        url: 'cargarContenido.php',
    
        success: function(data) {
            $('#producto').html(data);
           console.log("success");
        }
    });
    console.log("Al menos llama");
}