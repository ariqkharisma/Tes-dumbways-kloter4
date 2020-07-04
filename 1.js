function generate(jumlahKode) {
    var kode = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var kodeAcak = ""
    var panjang = 9
    
    for(var i = 1; i <= jumlahKode; i++){
      for (var j = 1; j <= panjang; j++){
        if (j == Math.ceil(panjang/2)) {
          kodeAcak += "-"
        }
        else kodeAcak += kode.charAt(Math.floor(Math.random() * (kode.length)));
      }
      kodeAcak += "\n"
    }
    console.log(kodeAcak)
    }
    
    generate(2)
    