<?php 
$conn = mysqli_connect('localhost','root','','hospital_management');
 
if(!$conn)
{
	die(mysqli_error());
}
 
if(isset($_POST['Presciption']))
{
	$textareaValue = trim($_POST['msg']);
	$postRef 	= $_POST['text'];
	$postTab	= $_POST['text1'];
	$postDose	= $_POST['text2'];
	$postNoTab	= $_POST['text3'];
	$LOT      = $_POST['text4'];
	$IssueDate      = $_POST['text5'];
	$ExpireDate      = $_POST['text6'];
	$DailyDose      = $_POST['text7'];
	$PossibleEffect      = $_POST['text8'];
	$FurtherInfo      = $_POST['text9'];
	$StorageAdvice      = $_POST['text10'];
	$Driving     = $_POST['text11'];
	$Medication      = $_POST['text12'];
	
	$sql = "insert into prescription (Reference,Tablets,Dose,NumberOfTablet,LOT,IssueDate,ExpirationDate,DailyDose,PossibleSideEffect,FurtherInformation,StorageAdvice,DrivingUsingMachine,HoeToUSeMedication) values ('".$postRef."','".$postTab."','".$postDose."','".$postNoTab."','".$LOT."','".$IssueDate."','".$ExpireDate."','".$DailyDose."','".$PossibleEffect."','".$FurtherInfo."','".$StorageAdvice."','".$Driving."','".$Medication."')";
	$rs = mysqli_query($conn, $sql);
	$affectedRows = mysqli_affected_rows($conn);
	
	if($affectedRows == 1)
	{
		$successMsg = "Record has been saved successfully";
	}
	
}
?>





<!Doctype html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Medical Center</title>
                <style>
                    table.hospital{
                        position: absolute;
                        bottom: 275px;
                        right: 435px;
                    }
                    table.medicine{
                        left: 185px;
                        position: absolute;
                    }
                    .header {
                        text-align: center;
                        font-size: 15px;
                        background-color: tomato;
                        } 
                    input[type="submit"] {
                        padding: 9px;
                        width: 10em;
                        height:3em;
                        }
                    .focus{
                        position: sticky;
                        bottom: 150px;
                        right: -100px;
                        }
                    .doctor{
                        position: sticky;
                        bottom: 190px;
                        left: 235px;
                        }
                        
                        .Patient{
                            position: sticky;
                            bottom: 229px;
                            left: 370px;
                        }
                        .appoint{
                            position: sticky;
                            bottom: 200px;
                            left: 235px; 
                        }
                        .Print{
                            position: sticky;
                            bottom: 229px;
                            left: 370px;
                        }
                    
                        .clear{
                            position: sticky;
                            bottom: 170px;
                            left: 505px;  
                        }
                    div.nested{
                        top: 50px;
                        position:relative;
                    }
                    h1{
                        color: bisque;
                    }
                    h2{
                        color: azure;
                    }
                </style>
        </head>

        <body>
          <div class="header">
            <h1>Hospital Management System</h1>
            <h2>Patient Presciption</h2>
            <p id="date"></p>
          </div>

            <script>
                const d = new Date();
                document.getElementById("date").innerHTML = d;
            function medical(){
                var d = document.getElementById("health");
                if (d.value == "Atenolol"){
                    // var displaytext = d.options[d.selectedIndex].text;
                const record = ["SEUYT65RTEFGEDJH","500","30","B770034","06/05/2018","04/12/2019","2","dizziness","Place Dispensary","Less than 20%","No","Use water, no Alcohol","P9589454","646564"];
               
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
        </script>
        
        <form action="form1.php" method="POST">
            <table class="medicine">
                <tr>
                    <td>Name of Tablets</td>
                    <td><select id="health" name="method" onchange="medical();">
                        <option></option>
                        <option>Atenolol</option>
                        <option>Simvastatin</option>
                        <option>Lisinopril-Hydrochlorothiazide</option>
                        <option>Furosemide</option>
                        <option>Propranolol</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Reference No</td>
                    <td><input type="text" name="text" id="demo"  required></td>  
                </tr>

                <tr>
                    <td>Dose (mg)</td>
                    <td><input type="text" name="text1" id="demo1"  required></td>  
                </tr>

                <tr>
                    <td>Number of Tablets</td>
                    <td><input type="text" name="text2" id="demo2"  required></td>  
                </tr>

                <tr>
                    <td>LOT</td>
                    <td><input type="text" name="text3" id="demoX"  required></td>  
                </tr>

                <tr>
                    <td>Issue Date:</td>
                    <td><input type="text" name="text4" id="demo3"  required></td>  
                </tr>

                <tr>
                    <td>Expiration Date:</td>
                    <td><input type="text" name="text5" id="demo4"  required></td>  
                </tr>

                <tr>
                    <td>Daily Dose</td>
                    <td><input type="text" name="text6" id="demo5"  required></td>  
                </tr>

                <tr>
                    <td>Possible Side Effects</td>
                    <td><input type="text" name="text7" id="demo6"  required></td>  
                </tr>
            </table>

            <table class="hospital">
                <tr>
                    <td>Further Information</td>
                    <td><input type="text" name="text8" id="demo7"  required></td>  
                </tr>

                <tr>
                    <td>Storage Advice</td>
                    <td><input type="text" name="text9" id="demo8"  required></td>  
                </tr>

                <tr>
                    <td>Driving and Using Machine</td>
                    <td><input type="text" name="text10" id="demo9"  required></td>  
                </tr>

                <tr>
                    <td>How to use Medication</td>
                    <td><input type="text" name="text11" id="demo10"  required></td>  
                </tr>

                <tr>
                    <td>Patient ID</td>
                    <td><input type="text" name="text12" id="demo11"  required></td>  
                </tr>

                <tr>
                    <td>NHS Number:</td>
                    <td><input type="text" name="text13" id="demo12"  required></td>  
                </tr>

                <tr>
                    <td>Patient Name:</td>
                    <td><input type="text" name="text14" id="demo13"  required></td>  
                </tr>

                <tr>
                    <td>Date of Birth</td>
                    <td><input type="text" name="text15" id="demo14"  required></td>  
                </tr>

                <tr>
                    <td>Patient Address</td>
                    <td><input type="text" name="text16" id="demo15"  required></td>  
                </tr> 
            </table>
        </form>
        <div class="nested">
            <div class="focus">
                <input type ="submit" value="Presciption">
            </div>

            <div class="doctor">
                <input type ="submit" value="Doctor">
            </div>

            <div class="Patient">
                <input type ="submit" value="Patient">
            </div>

            <div class="appoint">
                <input type ="submit" value="Appointment">
            </div>

            <div class="Print">
                <input type ="submit" value="Print">
            </div>

            <div class="update">
                <input type ="submit" value="Update">
            </div>
        </div>
        </body>
    </html>