
<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" connecttent="IE=edge">
    <meta name="viewport" connecttent="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <title>Shalom Travel</title>

</head>

<style>

   

body

{

  background-image: url('bg.jpg');
  background-size: cover;
  background-repeat: none;
  margin: 0;
    padding: 0;
    width: 100%; 
  
 
}


tr

{
font-size: 12px;
text-align: center;
font-family: 'Times New Roman', Times, serif;
color:black;

}
th{

    font-size: 10px;
    font-family: 'Times New Roman', Times, serif;
    color:brown;
    text-align:center;
   
}

td{

    font-size: 10px;
    font-family: 'Times New Roman', Times, serif;
 
    text-align:center;
   

}





#footer td{

    color:brown;
    font-size:11px;
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
    
}


#container {


font-family: 'Times New Roman', Times, serif;


}


</style> 
<body>






<div class="container">


<button onclick="window.print();" class="btn btn-danger">PRINT</button>
<button class="btn btn-dark my-5 "><a href="index.php" class="text-light">Search Record</a></button>

</div>

</div>
    <div class="container">
        <button class="btn btn-success my-5 btn-sm"><a href="create.php" class="text-light">ADD A CUSTOMER</a></button>


        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Ticket Number</th>
                    <th scope="col">Invoice#</th>
                    <th scope="col">Company</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Issue Date</th>
                    <th scope="col">Fare</th>
                    <th scope="col">A/R</th>
                    <th scope="col">A/P</th>
                    <th scope="col">Shalom Comm</th>
                    <th scope="col">Vendor</th>
                    <th scope="col">Bank</th>
                    <th scope="col" > Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include 'connect.php';
$sql = "SELECT  
id,ticketnumber,invno,company,fullname,destination,issuedate,fare,ar,ap,SUM(ar-ap) AS shalomcom,vendor, 
bank FROM table23
GROUP BY id";
                
               
                
                $result=mysqli_query($connect,$sql);

                if($result){

                    
                    

                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                            $ticketnumber=$row['ticketnumber'];
                            $invno=$row['invno'];
                            $company=$row['company'];
                            $fullname=$row['fullname'];
                            $destination=$row['destination'];
                            $issuedate=$row['issuedate'];
                            $fare=$row['fare'];
                            $ar=$row['ar'];
                            $ap=$row['ap'];
                            $shalomcom=$row['shalomcom'];
                            $vendor=$row['vendor'];
                            $bank=$row['bank'];
                          
                           
                          

                            echo ' <tr>
                            <td scope="row">'.$ticketnumber.'</td>
                            <td> '.$invno.'</td>
                            <td>'.$company.'</td>
                            <td>'.$fullname.'</td>
                            <td>'.$destination.'</td>
                            <td>'.$issuedate.'</td>
                            <td>'.$fare.'</td>
                            <td>'.$ar.'</td>
                            <td>'.$ap.'</td>
                            <td>'.$shalomcom.'</td>
                            <td>'.$vendor.'</td>
                            <td>'.$bank.'</td> 
                           
                            
                            

                            <td >
                             <button class="btn btn-primary btn-xs "><a href="edit.php?updateid='.$id.'" class="text-light">Update</a></button>
                            
                            <button class="btn btn-danger btn-xs " ><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                           </td>

                        </tr>';


                    }
                }
                
                
                ?>

               



            </tbody>

<tfoot id="footer">


<?php
		$total_qty=0;
        $total_qty1=0;
        $total_qty2=0;
      
 
		
		$query=$connect->query("SELECT SUM(ar-ap) AS shalomcom,sum(ar) AS artotal,sum(ap) AS aptotal FROM table23");
		while($row=$query->fetch_array()) {
	?>
				
	<?php 
			$total_qty = $row['shalomcom'];
            $total_qty2 = $row['aptotal'];
            $total_qty1 = $row['artotal'];
           
         
		}
?>
	<tr>
		<td>TOTAL</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $total_qty1; ?></td>
        <td><?php echo $total_qty2; ?></td> 
        <td><?php echo $total_qty; ?></td>
        
       
 
	</tr>




</tfoot>

            
        </table> 

        

    <div class="connecttainer">
        <button class="btn btn-danger my-5"><a href="logout.php" class="text-light">Log Out</a></button>

    </div>
</body>

</html>