document.getElementById('hitung-total').addEventListener('click', function() {
    let tipeKamar = document.getElementById('tipe_kamar').value;
    let durasiMenginap = parseInt(document.getElementById('durasi_menginap').value);
    let termasukBreakfast = document.getElementById('termasuk_breakfast').checked;

    let hargaKamar = 0;
    switch (tipeKamar) {
        case "Standar":
            hargaKamar = 500000;
            break;
        case "Deluxe":
            hargaKamar = 800000;
            break;
        case "Executive":
            hargaKamar = 1200000;
            break;
    }

    let totalBayar = hargaKamar * durasiMenginap;
    if (durasiMenginap > 3) {
        totalBayar *= 0.9; 
    }
    if (termasukBreakfast) {
        totalBayar += 80000; 
    }

    document.getElementById('total_bayar').value = totalBayar;
});