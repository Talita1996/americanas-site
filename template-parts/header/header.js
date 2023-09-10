//Modifica a logo
function loadNewLogo(action) {
    createAjaxRequest(
        ajax_object.ajax_url,
        'POST',
        'action=' + action,
        function (response) {
            document.querySelector('.custom-logo-link').innerHTML = response;
        },
        function (error) {
            console.error(response);
        }
    );
}

// Verificar o tamanho da tela e carregar a nova logo se necessário
function checkScreenSize() {
    $size = window.innerWidth;

    if ($size < 768) {
        loadNewLogo('logo_mobile');
    } else {
        loadNewLogo('logo_desktop');
    }
}

// Verificar o tamanho da tela quando a página for carregada
window.addEventListener('DOMContentLoaded', function () {
    checkScreenSize();
});

// Verificar o tamanho da tela quando a janela for redimensionada
window.addEventListener('resize', function () {
    checkScreenSize();
});
