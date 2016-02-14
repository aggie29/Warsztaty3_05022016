/**
 * Created by Agnieszka on 2016-02-05.
 */


$(function () {
    $('.pobieranieCzasu').on('click', function () {

        var toCalc=parseInt($('#timestamp').html()); //pobierz integera
        var dataToSend={}; //stworz pusyu obiekt
        dataToSend.timestamp = toCalc;

        $.ajax({
            url: 'api2.php',
            type: 'POST',
            data: dataToSend,
            dataType: 'json',
            success: function (result) {
                $('#aktualnyCzas').html(result.data);
           //     $('#timestamp').html(result.czasTimetamp);
           //     $('#data').html(result.losowaLiczba);
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