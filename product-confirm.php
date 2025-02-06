
<!DOCTYPE html>
<html>
<head>
    <title> Admin - Dashbord</title>
    <link rel="stylesheet" type="text/css" href="prdadd.css">
</head>
<body>
     <div id="dashMain">
                    <div class="dashslide">
                            <h3 class="dashlogo">IMS</h3>

                            <div class="dashslide_user">
                                <img src="admin.png" alt="Admin_image">
                                <span>Admin</span>
                            </div>

                            <div class="dashslide_menu">
                                    <ul class="dashmenu_list">
                                            <li>
                                                <a href="dash.php">DashBoard</a>
                                            </li>
                                            <li class="menuAction">
                                                <a href="productView.php">Product</a>
                                                <div class="nav">
                                                    <ul class="subM">
                                                        <li>
                                                            <a href="productView.php"> View Product</a>
                                                        </li>
                                                        <li class="menuAction">
                                                            <a href="productadd.html"> Add Product</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="">Suppliers</a>
                                            </li>
                                            <li>
                                                <a href="">Order</a>
                                            </li>
                                            <li>
                                                <a href="">Report</a>
                                            </li>
                                            <li>
                                                    <a href="userview.php"> User </a>
                                            </li>
                                    </ul>
                            </div>
                    </div>
                    <div class="dash_content_container">
                        <div class="dash_topNav">
                            <a href="productadd.html">Product Add</a>
                            <a href="login.php" id="logoutBtn">Log-out</a>
                        </div>
                        <div class="dash_content">
                                <div class="dash_content_main">
                                        <div class="productform">
                                        

                                        <h3> <b>Product is added succesfully!!</b></h3>
<?php
include 'dbcon.php';

$product_name = $_POST['prdname'];
$created_by = $_POST['crtby'];
$quantity = $_POST['qnty'];
$buyprice = $_POST['buyprice'];
$sellprice = $_POST['sellprice'];

/*echo "product name is ".$product_name;
echo "created by  ".$created_by;
echo "quantity is ".$quantity;
echo "buy price is ".$buyprice;
echo "sale price is ".$sellprice;
*/


//create database
/*$sql = "CREATE DATABASE IMS";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
*/
//create table
/*$sql = "CREATE TABLE Product (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Product_Name VARCHAR(30) NOT NULL,
    Quantity INT(30) NOT NULL,
    Buy_Price INT(50) NOT NULL,
    Sell_Price INT(50) NOT NULL,
    Created_By VARCHAR(30) NOT NULL,
    Created_At TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    Updated_At TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table Product created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
*/

//inserting data
$sql_inst = "INSERT INTO Product VALUES('','$product_name','$quantity','$buyprice','$sellprice','$created_by','','')";
$conn->query($sql_inst);
?>

                                           
                                        </div>    
                                </div>
                        </div>
                    </div>
     </div>

</body> 

</html>

