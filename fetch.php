




<?php

//fetch.php
//$connect = new mysqli('localhost','root','','folder');
$connect = new PDO("mysql:host=db4free.net;dbname=shalomdb", "shalom", "@Jerry304870");

$column = array('ticketnumber','invno', 'company', 'fullname','destination','issuedate','fare','ar','ap','vendor','shalomcom','bank');
//$column = array ("SELECT id,ticketnumber,invno,company,fullname,destination,issuedate,fare,ar,ap,SUM(ar-ap) AS shalomcom,vendor,bank FROM table23 GROUP BY id");


$sql = '
SELECT * FROM table23 
WHERE ticketnumber LIKE "%' . $_POST["search"]["value"] . '%" 
OR company LIKE "%' . $_POST["search"]["value"] . '%" 
OR issuedate LIKE "%' . $_POST["search"]["value"] . '%" 
OR fullname LIKE "%' . $_POST["search"]["value"] . '%"
OR vendor LIKE "%' . $_POST["search"]["value"] . '%"



';




if (isset($_POST["order"])) {
    $sql .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $sql .= 'ORDER BY id DESC ';
}

$sql1 = '';

if ($_POST["length"] != -1) {
    $sql1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($sql);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($sql . $sql1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$total_order = 0;
$test_order = 0;
$test=0;

foreach ($result as $row) {
    $sub_array = array();
    $sub_array[] = $row["ticketnumber"];
    $sub_array[] = $row["invno"];
    $sub_array[] = $row["company"];
    $sub_array[] = $row["fullname"];
    $sub_array[] = $row["destination"];
    $sub_array[] = $row["issuedate"];
    $sub_array[] = $row["fare"];
    $sub_array[] = $row["ar"];
    $sub_array[] = $row["ap"];  
    $sub_array[] = $row["shalomcom"];
    $sub_array[] = $row["vendor"];
    $sub_array[] = $row["bank"];

    $total_order = $total_order + floatval($row["ar"]);
    $test_order = $test_order + floatval($row["ap"]);
    $test= $test + floatval($row["shalomcom"]);

   
   
    $data[] = $sub_array;
}

function count_all_data($connect)
{
    $sql = "SELECT * FROM table23";
    $statement = $connect->prepare($sql);
    $statement->execute();
    return $statement->rowCount();
}

$output = array(
    'draw'    => intval($_POST["draw"]),
    'recordsTotal'  => count_all_data($connect),
    'recordsFiltered' => $number_filter_row,
    'data'    => $data,
    'total'    => number_format($total_order, 2),
    'testtotal'    => number_format($test_order, 2),
    'totals'    => number_format($test, 2)
    
 
);

echo json_encode($output);
