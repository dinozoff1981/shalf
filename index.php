
<?php

include 'header.php';
?>



<html>

<head>
  <title>shalomtravel
</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>

body

{

  background-image: url('bg.jpg');
  background-size: cover;
  background-repeat: none;
 
}

th{

font-size:12px;
text-align:center;
color:brown;
font-weight:bold;
}

td{

font-size:12px;
text-align:center;
}


button{


color:darkgreen;
font-weight:bold;
font-size:13px;


}



</style>
<body>




  <div class="container box">

    <br>
    <br>

    <div class="container">
        <button class="btn btn-success my-5 btn-lg"><a href="home.php" class="text-light">HOME</a></button>
</div>



    <div class="table-responsive">
      <table id="order_data" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Ticket Number</th>
            <th>Invoice #</th>
            <th>Company</th>
            <th>Passanger</th>
            <th>Destination</th>
            <th>Issue Date</th>
            <th>Fare</th>
            <th>Account Receivable</th>
            <th>Account Payable</th>
            <th>Shalom Comm</th>
            <th>Vendor</th>
            <th>Bank</th>
          </tr>
        </thead>
        <tbody></tbody>
        <tfoot>
          <tr>
            <th colspan="0">Total</th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
            <th id="total_order"></th>
            <th id="test_order"></th>
            <th id="test"></th>
          
            
           
          </tr>
        </tfoot>
      </table>
      <br />
      <br />
      <br />
    </div>
  </div>
</body>

</html>



<script type="text/javascript" language="javascript">
  $(document).ready(function() {

    var dataTable = $('#order_data').DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],
      "ajax": {
        url: "fetch.php",
        type: "POST"
      },
      drawCallback: function(settings) {
        $('#total_order').html(settings.json.total);
        $('#test_order').html(settings.json.testtotal);
        $('#test').html(settings.json.totals);
       
      }
    });



  });
</script>