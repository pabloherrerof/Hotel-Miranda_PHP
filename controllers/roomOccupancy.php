<?php
function roomAvailability($roomId, $bookings, $startDate, $endDate) {
    return array_filter($bookings, function($booking) use ($roomId, $startDate, $endDate) {
      return (
        $booking['room'] === $roomId &&
        (
          (strtotime($booking['checkIn']) >= strtotime($startDate) &&
          strtotime($booking['checkIn']) <= strtotime($endDate)) ||
          (strtotime($booking['checkOut']) >= strtotime($startDate) &&
          strtotime($booking['checkOut']) <= strtotime($endDate)) ||
          (strtotime($booking['checkIn']) <= strtotime($startDate) &&
          strtotime($booking['checkOut']) >= strtotime($endDate))
        )
      );
    });
  }
  