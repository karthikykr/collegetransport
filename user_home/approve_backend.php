<?php
    include('../db.php');

    session_start();
    $role=$_SESSION['role'];

    // Handle booking status updates
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking_id'], $_POST['action'])) {
        $booking_id = $_POST['booking_id'];
        $action = $_POST['action'];

            echo $booking_id;

        if($role=='director'){
            $new_status = ($action === 'approve') ? 'd_approved' : 'd_rejected';
        }else if($role=='assistant director'){
            $new_status = ($action === 'approve') ? 'a_d_approved' : 'a_d_rejected';
        }elseif($role=='principal'){
            $new_status = ($action === 'approve') ? 'p_approved' : 'p_rejected';
        }else if($role=='hod'){
            $new_status = ($action === 'approve') ? 'hod_approved' : 'hod_rejected';
        }else{
            echo"designation not selected";
        }
        $stmt = $conn->prepare("UPDATE bookings SET booking_status = ? WHERE id = ?");
        $stmt->bind_param("si", $new_status, $booking_id);

        if ($stmt->execute()) {
            echo "<script>alert('Booking status updated successfully.');
            location.href='approval.php';
            </script>";
        } else {
            echo "<script>alert('unable to update booking status');
            location.href='approval.php';
            </script>";
        }
        $stmt->close();
    }

    ?>