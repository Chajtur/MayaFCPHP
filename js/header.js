$('body').on('click', 'li a', function() {
    $('li a').removeClass('bg-red-900 text-white p-2 rounded');
    $(this).addClass('bg-red-900 text-white p-2 rounded');
    $('content').load('../views/' + $(this).data("id") + '.php');
});

$(document).ready(function() {
    $('content').load('../views/home.php');
});