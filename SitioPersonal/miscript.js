
    
    // iniciando código para conexión
    console.log("conectando");
    var nombre= $("#nombre").val();
    var telefono= $("#telefono").val();
    var correo= $("#correo").val();
    var mensaje= $("#mensaje").val();

    // mostrar en la consola del navegador
    console.log(nombre);
    console.log(telefono);
    console.log(correo);
    console.log(mensaje);

    //hacer la conexion con al archivo php
    $.get('http://localhost/ejemplos/SitioPersonal/GuardarContacto.php',
    {"token":"123456789","nombre":nombre,"telefono":telefono,"correo":correo,"mensaje":mensaje},
    function(data){

    // obtener resultado de la ejecucion del archivo php
    var info= JSON.parse(data);
    console.log(info.success);

    // limpiar los datos del formulario
    $("#nombre").val("");
    $("#telefono").val("");
    $("#correo").val("");
    $("#mensaje").val("");
    });
   

