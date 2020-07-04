function cek(arr,text) {
    let string = "";
  
    for (let i = 0; i < arr.length; i++) {
      if (text.includes(arr[i])) {
        string += `${arr[i]} => true \n`;
      } else {
        string += `${arr[i]} => false \n`;
      }
    }
  
    return string;
  };
  
  const dataKey = ["out", "stand", "king", "and"];
  const word = "outstanding";
  
  console.log(cek(dataKey, word));
  