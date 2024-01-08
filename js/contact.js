$(document).ready(function() {
});

$('body').on('click', '#btnSaveContact', function() {
    $.post('../controllers/contact.php', {
        action: 'contact',
        name: $('#name').val(),
        email: $('#email').val(),
        message: $('#message').val(),
        phone: $('#phone').val()
    }, function(data) {
        alert(data);
    });
});