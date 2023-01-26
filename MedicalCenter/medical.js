const s = new Date();
document.getElementById("date").innerHTML = s;

function medical(){
var d = document.getElementById("health");
if (d.value == "Atenolol"){
    // var displaytext = d.options[d.selectedIndex].text;
const record = ["SEUYT65RTEF","500","30","B770034","06/05/2018","04/12/2019","2","dizziness","Place Dispensary","Less than 20%","No","Use water, no Alcohol","P9589454","646564"];

document.getElementById("demo").value= record[0];
document.getElementById("demo1").value= record[1];
document.getElementById("demo2").value= record[2];
document.getElementById("demoX").value= record[3];
document.getElementById("demo3").value= record[4];
document.getElementById("demo4").value= record[5];
document.getElementById("demo5").value= record[6];
document.getElementById("demo6").value= record[7];
document.getElementById("demo7").value= record[8];
document.getElementById("demo8").value= record[9];
document.getElementById("demo9").value= record[10];
document.getElementById("demo10").value= record[11];
document.getElementById("demo11").value= record[12];
document.getElementById("demo12").value= record[13];

}else if(d.value =="Simvastatin"){
    const record =["CTGFYHGFTRE45DS57","200","25","T567900","07/06/2019","06/07/2020","2","dizziness","Place Dispensery","less than 10%","No","Use water, avoid alcohol","S6765009","897654"];
    document.getElementById("demo").value= record[0];
    document.getElementById("demo1").value= record[1];
    document.getElementById("demo2").value= record[2];
    document.getElementById("demoX").value= record[3];
    document.getElementById("demo3").value= record[4];
    document.getElementById("demo4").value= record[5];
    document.getElementById("demo5").value= record[6];
    document.getElementById("demo6").value= record[7];
    document.getElementById("demo7").value= record[8];
    document.getElementById("demo8").value= record[9];
    document.getElementById("demo9").value= record[10];
    document.getElementById("demo10").value= record[11];
    document.getElementById("demo11").value= record[12];
    document.getElementById("demo12").value= record[13];

}else if(d.value=="Lisinopril-Hydrochlorothiazide"){
    const record =["HUYJYRUFDGH4567634","150","35","T567500","07/06/2017","08/10/2019","2","Dizziness","Place Dispensery","Less than 50%","No","Use Water, avoid alcohol","B5098007","563609"];
    document.getElementById("demo").value= record[0];
    document.getElementById("demo1").value= record[1];
    document.getElementById("demo2").value= record[2];
    document.getElementById("demoX").value= record[3];
    document.getElementById("demo3").value= record[4];
    document.getElementById("demo4").value= record[5];
    document.getElementById("demo5").value= record[6];
    document.getElementById("demo6").value= record[7];
    document.getElementById("demo7").value= record[8];
    document.getElementById("demo8").value= record[9];
    document.getElementById("demo9").value= record[10];
    document.getElementById("demo10").value= record[11];
    document.getElementById("demo11").value= record[12];
    document.getElementById("demo12").value= record[13];

}else if(d.value=="Furosemide"){
    const record =["AWSDEFRGTRDE123","250","15","R567511","05/06/2015","08/25/2021","2","Dizziness","Place Dispensery","Less than 60%","No","Use Water, avoid alcohol","B5018508","383501"];
    document.getElementById("demo").value= record[0];
    document.getElementById("demo1").value= record[1];
    document.getElementById("demo2").value= record[2];
    document.getElementById("demoX").value= record[3];
    document.getElementById("demo3").value= record[4];
    document.getElementById("demo4").value= record[5];
    document.getElementById("demo5").value= record[6];
    document.getElementById("demo6").value= record[7];
    document.getElementById("demo7").value= record[8];
    document.getElementById("demo8").value= record[9];
    document.getElementById("demo9").value= record[10];
    document.getElementById("demo10").value= record[11];
    document.getElementById("demo11").value= record[12];
    document.getElementById("demo12").value= record[13];

}else if(d.value=="Propranolol"){
    const record =["HYJUNBGVDFTRE36521","100","25","P567612","07/06/2019","09/15/2021","1","Slight Dizziness","Place Dispensery","Less than 10%","No","Use Water, avoid alcohol","B511850","384250"];
    document.getElementById("demo").value= record[0];
    document.getElementById("demo1").value= record[1];
    document.getElementById("demo2").value= record[2];
    document.getElementById("demoX").value= record[3];
    document.getElementById("demo3").value= record[4];
    document.getElementById("demo4").value= record[5];
    document.getElementById("demo5").value= record[6];
    document.getElementById("demo6").value= record[7];
    document.getElementById("demo7").value= record[8];
    document.getElementById("demo8").value= record[9];
    document.getElementById("demo9").value= record[10];
    document.getElementById("demo10").value= record[11];
    document.getElementById("demo11").value= record[12];
    document.getElementById("demo12").value= record[13];
}
}

//function printDiv(divName){
    //var printContents = document.getElementById(divName).innerHTML;
    //var originalContents = document.body.innerHTML;
    //document.body.innerHTML = printContents;
    //window.print();
    //document.body.innerHTML = originalContents;
//}

    function printDiv(divName){
       var printContents = document.getElementById(divName).innerHTML;
       var Contents = (document.getElementById('demo13').value +" "+document.getElementById('demo14').value+""+document.getElementById('demo15').value+""+document.getElementById('demo1').value);
        w =window.open();
        w.document.write(Contents);
        w.document.write(printContents);
      // w.document.write(document.getElementById('demo13').value);
        w.print();
        w.close();
    }


  function display(pulse){
      var medicine = document.getElementById("health");
      var patient_name = document.getElementById("demo13");
      var DOB = document.getElementById("demo14");
      var address = document.getElementById("demo15");
      
      document.getElementById("position1").innerHTML = medicine.value;
      document.getElementById("position2").innerHTML = patient_name.value;
      document.getElementById("position3").innerHTML = address.value;
      document.getElementById("position4").innerHTML = DOB.value;    
  }

