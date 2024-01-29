$('body').on('click', 'li a', function() {
    showModal();
    $('li a').removeClass('bg-red-900 text-white p-2 rounded');
    $(this).addClass('bg-red-900 text-white p-2 rounded');
    $('content').load('../views/' + $(this).data("id") + '.php', function() {
        hideModal();
    });
});


// Function to show the modal
function showModal() {
    $('#spinner').removeClass('hidden');
}

// Function to hide the modal
function hideModal() {
    $('#spinner').addClass('hidden');
}

function showInfoModal() {
    $('#infoModal').modal('show');
}

function hideInfoModal() {
    $('#infoModal').modal('hide');
}

$(document).ready(function() {
    showModal();
    $('content').load('../views/home.php', function() {
        hideModal();
    });
});