function detailByStudent(usuario) {
    console.log('Mi numero de control es %o', usuario)

    Swal.fire({
        title: '<strong>Datos generales <u>Egresado</u></strong>',
        icon: 'info',
        html: `<p>No. de control: ${usuario.No_control}</p>` +
            `<p>Nombre: ${usuario.Nombre}</p>` +
            `<p>Apellidos: ${usuario.Apellidos}</p>` +
            `<p>Carrera: ${usuario.Carrera}</p>` +
            `<p>Email: ${usuario.Email}</p>` +
            `<p>Telefono: ${usuario.Telefono}</p>` +
            `<p>Trabajo: ${usuario.Trabajo}</p>` +
            `<p>Empresa: ${usuario.Empresa}</p>` +
            `<p>Cargo: ${usuario.Cargo}</p>`
    });

}

function goToSeguimientoProceso(numControl) {
    window.location.href = "seguimiento_proceso.php?noControl=" + numControl
}