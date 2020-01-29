<?php require_once __DIR__ . '/../hm/connect.php';

header("Content-Type:application/json");
$connection = DB();


// select all and search
$sql = "SELECT * from users WHERE Firstname LIKE '%". $_GET['search']."%' ";
$rows = array();
$result = mysqli_query($connection, $sql);



// $row = $result -> fetch_assoc();
// $rows = $row;

//         echo json_encode($rows);

while ($row = $result->fetch_assoc()) {

    $rows[] = $row;
    $a['data'] = $rows;
}

// print_r($a);

echo json_encode($a);


// SEARCH 

// if (isset($_GET['search'])){
//     $sql = "SELECT * from users WHERE Firstname LIKE \'%'.$_GET['search'].'%\'
//             OR Lastname LIKE \'%'.$_GET['search'].'%\'" ;
// }

// output gonna response to index.php 
// $output = '';
// $sql1 = "SELECT * from users WHERE id LIKE '%". $_GET['search']."%' ";

// $result1 = mysqli_query($connection, $sql1);

// //  
// $output.="<h4 align='center'>Search Result</h4>";
// if(mysqli_num_rows($result1)>0){
// $output.="<table class='table table-bordered'>
//     <tr>
//         <th>ID</th>
//         <th>Firstname</th>
//         <th>Lastname</th>
//         <th>Email</th>
//         <th>MobileNo</th>
//         <th>Address</th>
//     </tr>";
//     while ($row = $result1->fetch_assoc()) {
//             $output.="<tr>
//             <td>".$row["id"]."</td>
//             <td>".$row["Firstname"]."</td>
//             <td>".$row["Lastname"]."</td>
//             <td>".$row["Email"]."</td>
//             <td>".$row["MobileNo"]."</td>
//             <td>".$row["Address"]."</td>
//             </tr>";
//     }
//     $output.="</table>";
//     echo $output;
// }else{
//     echo "No result Check ur code";
// }





// PAGINATION !!
// $page = $_GET('page');
