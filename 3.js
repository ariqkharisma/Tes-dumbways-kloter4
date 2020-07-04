function cetak_gambar(num) {
    if (num % 2 == 0) {
      var str = '';
      for (i = 1; i <= num; i++) {
        for (j = 1;j <= num; j++) {        
          if (i == 1 || i== Math.max(num)) {
            str += "+ "
          }
          else {
            if (j == (num/2) - 1 || j == (num/2) + 2 ) {
              str += "+ "
            }
            else {
              str += "= "
            }
            
          }
        }
      str += '\n'
      }
    }
    else str = "Angka Harus Genap"
  
    console.log(str)
  }
  
  cetak_gambar(8)