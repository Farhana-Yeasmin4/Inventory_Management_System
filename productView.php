<!DOCTYPE html>
<html>
<head>
    <title> Admin - User</title>
    <link rel="stylesheet" type="text/css" href="prdview.css">
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
                                <a href="dash.php">Dashbord</a>
                            </li>
                            <li class="menuAction">
                                <a href="productView.php">Product</a>
                                <div class="nav">
                                    <ul class="subM">
                                        <li class="menuAction">
                                            <a href="productView.php"> View Product</a>
                                        </li>
                                        <li>
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
                                    <a href="userview.php">User</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dash_content_container">
                    <div class="dash_topNav">
                        <a href="productView.php">Products </a>
                        <a href="login.php" id="logoutBtn">Log-out</a>
                    </div>
                    <div class="dash_content">
                        <div class="dash_content_main">
                            <div class="productform">
                                <h2>List of Products</h2>
                                
                                
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Buy price</th>
                                            <th>Sell Price</th>
                                            <th>Created By</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                include 'dbcon.php';
                                $sql_show = "SELECT ID, Product_Name, Quantity, Buy_Price, Sell_price, Created_By, Created_At, Updated_At from Product";
                                $res = $conn->query($sql_show);
                                    foreach($res as $row)    
                                    {
                                        echo"<tr>";
                                            echo"<td>".$row['ID']."</td>";
                                            echo"<td>".$row['Product_Name']."</td>";
                                            echo"<td>".$row['Quantity']."</td>";
                                            echo"<td>".$row['Buy_Price']."</td>";
                                            echo"<td>".$row['Sell_price']."</td>";
                                            echo"<td>".$row['Created_By']."</td>";
                                            echo"<td>".$row['Created_At']."</td>";
                                            echo"<td>".$row['Updated_At']."</td>" ;
                                        echo"</tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>   
                    </div>  
                    </div>
        </div>                  
</body>
</html>