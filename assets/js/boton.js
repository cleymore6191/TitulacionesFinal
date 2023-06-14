function moverFila(boton) {

    var fila = boton.parentNode.parentNode;

    var No_control = fila.cells[0].innerText;
    var Nombre = fila.cells[1].innerText;
    var Apellido = fila.cells[2].innerText;
    var Carrera = fila.cells[3].innerText;
    var Asesor = fila.cells[4].innerText;

    $.ajax({
        url: 'php/datos_concluidos.php',
        method: 'POST',
        data: {
            No_control: No_control,
            Nombre: Nombre,
            Apellido: Apellido,
            Carrera: Carrera,
            Asesor: Asesor
        },
        success: function(response) {

            fila.remove();

            alert('La fila se ha movido a la tabla de concluidos.');
        },
        error: function() {
            alert('Ha ocurrido un error al mover la fila. ');
        }
    });
}