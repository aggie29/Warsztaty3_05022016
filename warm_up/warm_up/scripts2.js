$(function () {
    $('.pobieranieCzasu').on('click', function () {
        $.ajax({
            url: 'http://date.jsontest.com/',
            type: 'GET', //pobierz metoda get
            dataType: 'json',
            success: function (result) {
                //to jest wykonywane jak sie zakonczy sukcesem
                console.log(result);

                $('#aktualnyCzas').html(result.date);
                $('#timestamp').html(result.time);
                $('#data').html(result.milliseconds_since_epoch);


            },
            error: function () {
                console.log('wystapil blad'); //to jest blad
            },
            complete: function () {
                console.log('zakonczono'); //to jest wykonywane zawsze
            }
        });
    });
});