function detailByStudent(usuario) {
    console.log('Mi numero de control es %o', usuario)

    Swal.fire({
        title: '<strong>Datos generales <u>Egresado</u></strong>',
        icon: 'info',
        html: `<p>No. de control: ${usuario.No_control}</p>` +
            `<p>Nombre: ${usuario.Nombre}</p>` +
            `<p>Apellidos: ${usuario.Apellido}</p>` +
            `<p>Carrera: ${usuario.Carrera}</p>` +
            `<p>Email: ${usuario.Email}</p>` +
            `<p>Telefono: ${usuario.Telefono}</p>` +
            `<p>Trabajo: ${usuario.Trabajas}</p>` +
            `<p>Empresa: ${usuario.Empresa}</p>` +
            `<p>Cargo: ${usuario.Cargo}</p>`
    });

}

function goToSeguimientoProceso(No_control) {
    window.location.href = "seguimiento_proceso.php?No_control=" + No_control
}