
<?php
include 'connect.php';
include 'header.php';
$id=$_GET['updateid'];



$sql="SELECT * FROM table23 WHERE id=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);


$ticketnumber=$row['ticketnumber'];
$invno=$row['invno'];
$company=$row['company'];
$fullname=$row['fullname'];
$destination=$row['destination'];
$issuedate=$row['issuedate'];
$fare=$row['fare'];
$ar=$row['ar'];
$ap=$row['ap'];
$vendor=$row['vendor'];
$shalomcom=$row['shalomcom'];
$bank=$row['bank'];

if(isset($_POST['submit'])){
   
    $ticketnumber=$_POST['ticketnumber'];
    $invno=$_POST['invno'];
    $company=$_POST['company'];
    $fullname=$_POST['fullname'];
    $destination=$_POST['destination'];
    $issuedate=date('Y-m-d', strtotime($_POST['issuedate']));
    $fare=$_POST['fare'];
    $ar=$_POST['ar'];
    $ap=$_POST['ap'];
    $vendor=$_POST['vendor'];
    $bank=$_POST['bank'];

$sql="UPDATE table23 SET ticketnumber='$ticketnumber', invno='$invno',company='$company',fullname='$fullname',destination='$destination',issuedate='$issuedate',fare='$fare',ar='$ar',ap='$ap',vendor='$vendor',bank='$bank' WHERE id=$id";

$result=mysqli_query($connect,$sql);

if($result){
 
  header('location:index.php');
}else{

  die(mysqli_error($connect));
}


}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My friends</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
      <style>

		h2
		{

			text-align: center;
			color: darkblue;
			font-family: 'Times New Roman', Times, serif;
			margin-top: 30px;
			text-decoration: underline;
			font-weight: bold;
		}


    body

{

  background-image: url("bg.jpg");
  background-size: cover;
  background-repeat: none;
 
}
	  </style> 

  <body>

  <h2>Update A Customer</h2>
  <div class="container my-5">

<form method="POST">


        <div class="mb-3">
        <label >Ticket Number</label>
        <input type="text" class="form-control" placeholder="Ticket Number" name="ticketnumber" value=<?php echo $ticketnumber;?>>

        </div>

        <div class="mb-3">
        <label >Invoice#</label>
        <input type="text" class="form-control" placeholder="Invoice Number" name="invno"  value=<?php echo $invno;?>>
        </div>

        <div class="mb-3">
        <label >Company</label>
        <input type="text" class="form-control" placeholder="Company" name="company" value=<?php echo $company;?>>
        </div>

        

        <div class="mb-3">
        <label >Passanger's Name</label>
        <input type="text" class="form-control" placeholder="Full Name" name="fullname" value=<?php echo $fullname;?>>

        </div>

        
        <div class="mb-3">
        <label >Destination</label>
        <input type="text" class="form-control" placeholder="Destination" name="destination" value=<?php echo $destination;?>>

        </div>

        
        <div class="form-group mb-3">
                            <label for="">Issue Date</label>
                            <input type="date" name="issuedate" class="form-control"value=<?php echo $issuedate;?> />
          </div>




         
        <div class="mb-3">
        <label >Fare</label>
        <input type="text" class="form-control" placeholder="Fare" name="fare"value=<?php echo $fare;?>>

        </div>

        <div class="mb-3">
        <label >A/R</label>
        <input type="text" class="form-control" placeholder="Account Receivable" name="ar"value=<?php echo $ar;?>>

        </div>

         
        <div class="mb-3">
        <label >A/P</label>
        <input type="text" class="form-control" placeholder="Account Payable" name="ap"value=<?php echo $ap;?>>

        </div>
        
        <div class="from-group mb-3">
                                <label for="">Vendor</label>
                                <select name="vendor" class="form-control">
                                    <option value="">--Select a Vendor--</option>
                                    <option value="Bader Airlines ">Bader Airlines</option>
                                    <option value="Dawe Emede">Dawe Emede</option>
                                    <option value="Ethiopian Airlines">Ethiopian Airlines</option>
                                    <option value="Fly Dubai">Fly Dubai</option>
                                    <option value="Four Winds ">Four Winds</option>
                                    <option value="Jezeera Airlines">Jezeera Airlines</option>

                                </select>
                            </div>

        
        
        <div class="from-group mb-3">
                            <label for="">Bank</label>
                            <select name="bank" class="form-control"value=<?php echo $bank;?>>
                                <option value="">--Select a Bank--</option>
                                <option value="Abisinia Bank">Abisinia Bank</option>
                                <option value="Awash Bank">Awash Bank</option>
                                <option value="Birhan Bank">Birhan Bank</option>
                                <option value="Commercial Bank">Commercial Bank</option>
                                <option value="Dashen Bank">Dashen Bank</option>
                                <option value="Nib Bank">Nib Bank</option>
                                <option value="Oromia cooperative Bank">Oromia cooperative Bank</option>
                                <option value="Oromia international Bank">Oromia international Bank</option>
                                <option value="United Bank">United Bank</option>
                                <option value="Zemen Bank">Zemen Bank</option>

                            </select>
                        </div>

        





        <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>


</div>
  </body>
</html>