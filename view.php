<?php

include 'connection.php';


?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Register Details</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker").datepicker(
                        {dateFormat: 'yy-mm-dd'}
                );
                $("#datepicker2").datepicker(
                        {dateFormat: 'yy-mm-dd'}
                );

            });
        </script>
        <style>
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
            }

            th {
                text-align: left;
                padding: 8px;
                background-color: green;
                color:white;
            }
            td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}
        </style>
    </head>
    <body style="background-color:#edf1f2">
        <div class="row" >
            <div class="col-md-12" style="background-color:#3c4759;height:60px">
          <!-- <a href="logout.php" > <input style="float: right;margin-right: 15px" type="button" value="Logout" class=" btn btn-danger-dark"></a> 
           <a href="home.php" > <input style="float: left;margin-left: 15px"  type="button" value="Back" class="btn btn-success"></a>  -->   
                <a href="home.php"><img src="b.png" style="width:55px;height:60px;float:left;clear:right"></a> 
                <a href="logout.php"><img src="log.png" style="width:60px;height:60px;float:right"></a> 
            </div></div>
        <label style="margin-top: 20px">SELECT DATE</label><br><br>
        <form method="POST">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label>FROM</label>
                            <input type="text" placeholder="From" class="form-control" id="datepicker" name="from" autocomplete="off"  ><br>
                        </div>
                        <div class="col-md-3">
                            <label>TO</label>
                            <input type="text" placeholder="To" class="form-control" id="datepicker2" name="to" autocomplete="off"  ><br>
                        </div>
                        <br>
<div class="col-md-3" style="margin-top:25px">
                            <input type="submit" name="submit">
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $from = $_POST['from'];
                $to = $_POST['to'];

               if(empty($from)){
                $obj = new MyConn();
                    $obj->connect();
                    $stl = $obj->conn->query("SELECT * FROM register1 ")->fetchAll(PDO::FETCH_ASSOC);
                    //print_r($stl);
                    $obj->disconnect();
               }else{
                    $obj = new MyConn();
                    $obj->connect();
                    $stl = $obj->conn->query("SELECT * FROM register1 WHERE date(uploadedTime) BETWEEN '$from' AND '$to'")->fetchAll(PDO::FETCH_ASSOC);
                    //print_r($stl);
               $obj->disconnect();}
                    $total_count = Count($stl);
               
                // print_r($total_count);
                echo '<h4><center>COUNT : ' . $total_count . ' </center></h4>';
                echo '<div class="row"><div class="col-md-12" style="overflow-x:auto;">';
                echo'<table class="table table-bordered" style="background-color:white;border-collapse: collapse">
    <thead>
      <tr>
      <th>sno</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Event</th>
        <th>WorkShop</th>
        <th>Registered</th>
       
      </tr>
    </thead><tbody>';
                foreach ($stl as $sri) {
                    //$deviceID = $sri['deviceID'];
                    $sno=$sri['sno'];
                    $name = $sri['name'];
                    $email = $sri['email'];
                    $mobile = $sri['mobile'];
                    $event = $sri['event'];
                    $workshop = $sri['workshop'];
                    $uploadedTime = $sri['uploadedTime'];
                    //$userid = $sri['userid'];
                    echo '  
                   <tr>
                   <td>' . $sno . '</td>
                     <td>' . $name . '</td>
                       <td>' . $mobile . '</td>
                        <td>' . $email . '</td>
                        <td>' . $event . '</td>
                             <td>'.$workshop.'</td>
                <td>'.$uploadedTime.'</td>
                        </tr>';
                }
                echo '</tbody>
                         </table>';
                echo' </div> </div>';
            }
            ?>
        </form>
    </body>
</html>