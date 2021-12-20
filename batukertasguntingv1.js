tanya = true;
while (tanya) {

    //menangkap pilihan player
    var p = prompt('pilih : batu, kertas, gunting')
    //menangkap pilihan komputer
    //membangkitkan bilangan random
    var komp = Math.random();
    if(komp < 0.34) {
        komp = 'batu';
    } else if(komp >= 0.34 && komp < 0.67) {
        komp = 'kertas';
    } else {
        komp = 'gunting';
    }

    var hasil = '';
    //membuat rules
    if(p == komp) {
        hasil = 'IMBANG !!';
    } else if( p == 'batu') {
        hasil = (komp == 'gunting') ? 'MENANG !!' : 'KALAH !!';
    } else if (p == 'gunting') {
        hasil = (komp == 'batu') ? 'KALAH!!' : 'MENANG!!';
    } else if(p == 'kertas') {
        hasil = (komp == 'gunting') ? 'KALAH!!' : 'MENANG!!';
    } else {
        hasil = 'memilih pilhan yang salah, coba ulang !!!';
    }

    //tampilkan hasilnya
    alert('Kamu memilih: ' + p + ' dan Komputer memilih: '+komp+'\nMaka hasilnya: Kamu '+ hasil);
    tanya = confirm ('Bermain Lagi ?');
    if(tanya==false){
        alert('Terimakasih Sudah Bermain');
        window.location.href="index.php";
    }
}

