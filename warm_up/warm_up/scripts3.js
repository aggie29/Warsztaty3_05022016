$(function () {
    $('.pobieranieCzasu').on('click', function () {
        $.ajax({
            url: 'api.php',
            type: 'GET',
            dataType: 'json',
            success: function (result) {
                $('#aktualnyCzas').html(result.czas);
                $('#timestamp').html(result.czasTimetamp);
                $('#data').html(result.losowaLiczba);
            },
            error: function () {
                console.log('wystapil blad');
            },
            complete: function () {
                console.log('zakonczono');
            }
        });
    });
});