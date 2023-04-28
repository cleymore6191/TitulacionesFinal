const visualizarBtn = document.querySelector('#visualizar-btn');

visualizarBtn.addEventListener('click', function() {
    window.open('documento.pdf', '_blank', 'toolbar=0,location=0,menubar=0');
});