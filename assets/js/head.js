window.addEventListener('DOMContentLoaded', function () {
    var menuItem = document.getElementsByClassName('menu-item-has-children');
    var submenu = document.getElementsByClassName('sub-menu');

    Array.from(menuItem).forEach(element => {
        element.classList.add('dropdown');

        var menuItemLink = element.querySelector('a');

        menuItemLink.classList.add('dropdown-toggle');

        menuItemLink.setAttribute('role', 'button');
        menuItemLink.setAttribute('data-bs-toggle', 'dropdown');
        menuItemLink.setAttribute('data-bs-auto-close', 'false');
        menuItemLink.setAttribute('aria-expanded', 'false');
    });

    Array.from(submenu).forEach(element => {
        element.classList.add('dropdown-menu');
        var dropdownItem = element.getElementsByClassName('menu-item');

        Array.from(dropdownItem).forEach(element => {
            element.classList.add('dropdown-item');
        })
    });
});

function createAjaxRequest(url, method, data, successCallback, errorCallback) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                successCallback(xhr.responseText);
            } else {
                errorCallback(xhr.statusText);
            }
        }
    };
    xhr.send(data);
}