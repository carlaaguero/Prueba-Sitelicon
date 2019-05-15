$('#provincias').on('click', function () {
    var provinciaID = $(this).val();
    $.ajax({
            method: 'GET',
            url: 'http://sitelicon.eu/test/ajax_localidades.php',
            data: {
                id: provinciaID
            }
        })
        .done(function (data) {
            setBoxLocalidades(data);
        });

});

function setBoxLocalidades(data) {
    $('#box_localidades').html(data);
}