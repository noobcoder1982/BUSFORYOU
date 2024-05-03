<html>
    <head>
    <link rel="stylesheet" href="Check.css">
        <title>Check</title>
    </head>
    <body>
    <?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "project";
    
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }


    $from=$_POST['from'];
    $to=$_POST['to'];
    $date=$_POST['date'];
    $destination;
    if($from=="Baramunda" && $to=="Gohiria"){
        $destination="25Min";
    }
    else if($from=="Baramunda" && $to=="Khordha"){
        $destination="30min";
    }
    else if($from=="Baramunda" && $to=="Patrapada"){
        $destination="15min";
    }
    else if($from=="Khandagiri" && $to=="Patrapada"){
        $destination="10min";
    }
    else if($from=="Khandagiri" && $to=="Gohiria"){
        $destination="15min";
    }
    else if($from=="Khandagiri" && $to=="Khordha"){
        $destination="20min";
    }
    else if($from=="Patrapada" && $to=="Gohiria"){
        $destination="8min";
    }
    else if($from=="Patrapada" && $to=="Khordha"){
        $destination="15min";
    }
    else{
        $destination="0min";
    }


    $sql = "INSERT INTO search (Source, Destination, Date) VALUES ('$from', '$to', '$date')";
    $sql2="SELECT Source from search where Source='$from'";
    $sql3="SELECT Destination from search where Destination='$to'";
    $sql4="SELECT Date from search where Date='$date'";
    $sql5="SELECT name from bus";
    $sql6="SELECT stime from bus";
    $sql7="SELECT dtime from bus";


    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);
    $result4 = mysqli_query($conn, $sql4);
    $result5 = mysqli_query($conn, $sql5);
    $result6 = mysqli_query($conn, $sql6);
    $result7 = mysqli_query($conn, $sql7);
    
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }
    
    //echo "Registration successful";
    
    //mysqli_close($conn);
    ?>
    
    <div class="container">
            <div class="row1">
                <?php
                   $row1=mysqli_fetch_assoc($result2);
                   $row2=mysqli_fetch_assoc($result3); 
                   $row3=mysqli_fetch_assoc($result4); 
                ?>
                    <h2 style="color:Blue;">   <?php echo $row1['Source'] ?> to <?php echo $row2['Destination']?>       <?php echo $row3['Date']?>  <h2>   
                    <p></p>
                <?php   
                ?>

            </div >
            <div class="row2">
                <table style="width:100%">
                    <tr>
                        <td>Bus Name</td>
                        <td>Source Time</td>
                        <td>Destination Time</td>
                    </tr>
                    <?php
                   $row4=mysqli_fetch_assoc($result5);
                   $row5=mysqli_fetch_assoc($result6); 
                   $row6=mysqli_fetch_assoc($result7); 
                ?>
                    <tr>
                        <td><?php echo $row4['name'] ?></td>
                        <td><?php echo $row5['stime'] ?></td>
                        <td><?php echo $destination ?></td>
                        <td><button type="button" onclick="location.href='seatbooking.html'">seatbooking</button></td>
                    </tr>
                <?php   
                ?>
                </table>
            
            
            </div>
        </div>
 </body>
