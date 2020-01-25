function findHighestProfit(dataSahamPtX){
    if (dataSahamPtX[0]){
    var mostProfit = 0;
    var length = dataSahamPtX.length;
    
    for(i = 0; i < length-1;i++){
          for (j=i+1;j<length;j++){
              var profit = dataSahamPtX[j]-dataSahamPtX[i];
                
                if(profit>mostProfit){
                  mostProfit = profit;
              }
                
          }
    }
        
    if (mostProfit > 0){
        return mostProfit;
    }else{
      return "Tidak bisa mendapatkan profit pada hari-hari ini";
    }
    }else{
        return "Input Harus Array";
    }
  }
  
  
  
  
  
  console.log(findHighestProfit([10, 2, 11, 20, 3, 5]));
 
  console.log(findHighestProfit([33, 29, 11, 3]));
