<?php
    include('../session.php');
    include('../db.php');
  

    // Handle booking status updates
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking_id'], $_POST['action'])) {
        $booking_id = $_POST['booking_id'];
        $action = $_POST['action'];
        $reason=$_POST['reason'];
        $vehicle=$_POST['vehicle'];

        if($role=='transport'){
            $new_status = ($action === 'approve') ? 't_approved' : 't_rejected';
        }else if($role=='director'){
            $new_status = ($action === 'approve') ? 'd_approved' : 'd_rejected';
        }else if($role=='assistant director'){
            $new_status = ($action === 'approve') ? 'a_d_approved' : 'a_d_rejected';
        }else if($role=='principal'){
            $new_status = ($action === 'approve') ? 'p_approved' : 'p_rejected';
        }else if($role=='hod'){
            $new_status = ($action === 'approve') ? 'hod_approved' : 'hod_rejected';
        }else{
            echo"designation not selected";
        }
        $stmt = $conn->prepare("UPDATE bookings SET booking_status = ?,reason = ? WHERE id = ?");
        $stmt->bind_param("ssi", $new_status,$reason, $booking_id);

        if ($stmt->execute()) {
            echo "<script>alert('Booking status updated successfully.')</script>";
              if($role==='transport'){
                $_SESSION['book_id'] = $booking_id;
                $_SESSION['vehicle']=$vehicle;
               echo("<script> location.href='../transport/transport_approval.php'</script>");
               exit;
              }
             echo("<script>location.href='approval.php'</script>");
        
        } else {
            echo "<script>alert('unable to update booking status');
            location.href='approval.php';
            </script>";
        }
        $stmt->close();
    }

    ?>