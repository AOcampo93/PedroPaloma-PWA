$(document).ready(function() {
    $('#nav-icon4').click(function() {
        $(this).toggleClass('open');
    });
});


//MENU DESPLEGABLE
function displayMenu() {
    var x = document.getElementById('menu');

    if (x.style.display === 'block') {
        document.getElementById("menu").style.animation = "fadeOut 1s 1";
        var z = setTimeout(close, 1000);
    } else {
        x.style.display = 'block';
        document.getElementById("menu").style.animation = "fadeIn 1s 1";
    }
    return false;
}

function close() {
    document.getElementById('menu').style.display = "none";
}