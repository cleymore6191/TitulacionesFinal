function detailByStudent(usuario) {
    console.log('Mi numero de control es %o', usuario)

    Swal.fire({
        title: '<strong>HTML <u>example</u></strong>',
        icon: 'info',
        html: `<p>Cargo: ${usuario.Cargo}</p>` +
            `<p>Nombre: ${usuario.Nombre}</p>` +
            `<p>Apellidos: ${usuario.Apellidos}</p>` +
            `<p>No. de control: ${usuario.No_control}</p>` +
            `<p>Cargo: ${usuario.Cargo}</p>`


    });

}

function goToSeguimientoProceso(numControl) {
    window.location.href = "seguimiento_proceso.php?noControl=" + numControl
}