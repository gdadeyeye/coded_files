function getArraySum(a){
    var total=0;
    for(var i in a) { 
        total += a[i];
    }
    return total;
  }
  var payChecks = [123,155,134, 205, 105]; 
  var weeklyPay= getArraySum(payChecks); //sums up to 722
