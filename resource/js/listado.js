$(document).ready(function () {
});
window.onload = function () {
};
$("#listado").click(function () {
    $.ajax({
        url: '../controlador/sistema.php',
        type: 'GET',
        data: 'opc=1'
    }).done(function (result) {
        var datos = JSON.parse(result);
        var tabla = "";
        $.each(datos, function (k, v) {
            tabla += "<tr><td>" + v.id + "</td><td>" + v.nombre + "</td><td>" + v.edad + "</td></tr>";
        });
        $("#listadoTabulado").html(tabla);
    });
});
$("#crear").click(function () {
    var validar = $('#form_consulta').validationEngine('validate');
    if (validar) {
        var formData = $("#nuevo").serialize();
        formData = formData + '&opc=2';
        console.log(formData);
        $.ajax({
            url: '../controlador/sistema.php',
            type: 'GET',
            data: formData
        }).done(function (result) {
            console.log(result);
            if (result == 1) {
                bootbox.alert("Se creo correctamente");
            }
        });
    }
});