<?php
 function roomAvailability($roomId, $bookings, $startDate, $endDate) {
  $filteredBookings = array_filter($bookings, function($booking) use ($roomId, $startDate, $endDate) {
    $bookingCheckIn = strtotime($booking['checkIn']);
    $bookingCheckOut = strtotime($booking['checkOut']);
    $startDateTimestamp = strtotime($startDate);
    $endDateTimestamp = strtotime($endDate);

    return (
      $booking['room'] === $roomId &&
      (($bookingCheckIn >= $startDateTimestamp && $bookingCheckIn <= $endDateTimestamp) ||
        ($bookingCheckOut >= $startDateTimestamp && $bookingCheckOut <= $endDateTimestamp) ||
        ($bookingCheckIn <= $startDateTimestamp && $bookingCheckOut >= $endDateTimestamp))
    );
  });

  return array_values($filteredBookings);
}