<?php include_once ("connect.php"); ?>
<?php
    $ticketID = @$_GET['token'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking Ticket Generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="Ticket.css">
</head>
<body>
<?php
        $sql = "SELECT `id`, `token`, `busID`, `seatID` FROM `bookseats` WHERE `token`='$ticketID'";
        $query = mysqli_query($conn, $sql);
        $seatsID = mysqli_num_rows($query);
        $rows = mysqli_fetch_assoc($query);
        $ticketNo = $rows['token'];
        $busID = $rows['busID'];
        $sql2 = "SELECT * FROM `avabus` WHERE `id`='$busID'";
        $query2 = mysqli_query($conn, $sql2);
        $rowss = mysqli_fetch_assoc($query2);
        $busPrice = $rowss['price'];
        $total = $busPrice * $seatsID;
        $from_loc = $rowss['from_loc'];
        $to_loc = $rowss['to_loc'];
        
    ?>
    <div class="ticket-container">
        <div class="ticket-header">
            <div class="ticket-logo">
                <img src="./img/bus-ticket-logo.png" alt="Bus Logo">
            </div>
            <div class="ticket-details">
                <p class="ticket-title">Bus Booking Ticket</p>
                <p class="ticket-id">Ticket ID: <?=$ticketID?> Seats : <?=$seatsID?><br /></p>
            </div>
        </div>
        <div class="ticket-content">
            <form id="ticketForm">
                <div class="ticket-item">
                    <label for="from">From:</label>
                    <?=$from_loc?>
                </div>
                <div class="ticket-item">
                    <label for="to">To:</label>
                    <?=$to_loc?>
                </div>
                <div class="ticket-item">
                    <label for="busType">Bus Type:</label>
                    <select id="busType" name="busType" required>
                        <option value="AC">AC</option>
                        <option value="Non-AC">Non-AC</option>
                    </select>
                </div>
                <button type="button" id="selectSeatBtn" class="ticket-btn">Total : <?=$total?></button>
            </form>
        </div>
        <div class="ticket-footer">
            <p class="ticket-note">Please carry a valid ID proof and this ticket while traveling.</p>
            <button type="button" id="generateQRBtn" class="ticket-btn">Generate QR Code</button>
            <button type="button" id="downloadPdfBtn" class="ticket-btn">Download PDF</button>
        </div>
    </div>
</body>
</html>
