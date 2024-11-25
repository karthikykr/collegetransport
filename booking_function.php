<?php
function updateBookingStatus($conn, $booking_id, $new_status) {
    $stmt = $conn->prepare("UPDATE bookings SET booking_status = ? WHERE id = ?");
    $stmt->bind_param("si", $new_status, $booking_id);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

function getPendingBookings($conn, $current_role) {
    $stmt = $conn->prepare("SELECT * FROM bookings WHERE booking_status = ? AND current_approver = ?");
    $pending_status = 'pending';
    $stmt->bind_param("ss", $pending_status, $current_role);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result;
}
?>
