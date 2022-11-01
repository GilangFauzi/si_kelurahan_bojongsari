$(document).ready(function () {

    if ($('#tombol-cari').val('')) {

    }
    //hilangkan tombol cari
    $('#tombol-cari').hide();

    //event ketika keyword ditulis
    $('#keyword').on('keyup', function () {

        //memuunculkan icon loading
        $('.loader').show();

        //ajax menggunakan load(digunakan ketika ga memakain icon load)
        // $('#container').load('ajax/pegawai.php?keyword=' + $('#keyword').val());

        // $.get()
        //script dibawah digunakan ketika ingin menggunakan icon loader, jika kga tinggal apus aja dan pake yang atas
        $.get('ajax/pegawai.php?keyword=' + $('#keyword').val(), function (data) {
            $('#container').html(data);
            $('.loader').hide();
        });
    });
});