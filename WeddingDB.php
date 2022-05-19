<?php 
$errors = [];
$data = [];
if (empty($_POST['DoW'])) {
  $errors['DoW'] = 'Original Date is required.';
}

if (empty($_POST['CateringGrade'])) {
  $errors['CateringGrade'] = 'CateringGrade is required.';
}

if (empty($_POST['PartySize'])) {
  $errors['PartySize'] = 'PartySize is required.';
}
if (empty($_POST['DoWE'])) {
  $errors['DoWE'] = 'Final Date is required.';
}
if ((ctype_digit($_POST['PartySize']) == false) and !empty($_POST['PartySize'])) {
  $errors['PartySize'] = 'PartySize is must be a number.';
}

if ((ctype_digit($_POST['CateringGrade']) == false) and !empty($_POST['CateringGrade'])) {
  $errors['CateringGrade'] = 'CateringGrade is must be a number.';
}

if ($_POST['DoWE'] < $_POST['DoW']) {
  $errors['DoW'] = 'Date from must be before the end date';
  $errors['DoWE'] = 'Date to must be after the start date';
}

if (!empty($errors)) {
  $data['success'] = false;
  $data['errors'] = $errors;
} else {
  $servername = "sci-mysql";
  $username = "coa123wuser";
  $password = "grt64dkh!@2FD";
  $dbname = "coa123wdb";
  $PartySize = $_POST["PartySize"];
  $CateringGrade = $_POST["CateringGrade"];
  $conn = new mysqli($servername, $username, $password,$dbname);
  $stmt = $conn->prepare("SELECT catering.grade,catering.cost,venue_booking.venue_id,venue.name,venue.capacity,venue.weekend_price,venue.licensed,venue.weekday_price,venue_booking.booking_date FROM catering INNER JOIN venue INNER JOIN venue_booking ON catering.venue_id = venue.venue_id AND catering.venue_id = venue_booking.venue_id AND catering.grade = $CateringGrade AND venue.capacity >= $PartySize AND venue_booking.booking_date >= ? AND venue_booking.booking_date <= ? GROUP by catering.grade,catering.cost,venue_booking.venue_id,venue_booking.booking_date UNION
  SELECT catering.grade,catering.cost,venue_booking.venue_id,venue.name,venue.capacity,venue.weekend_price,venue.licensed,venue.weekday_price,COUNT(venue_booking.booking_date) AS 'bookings' FROM catering INNER JOIN venue INNER JOIN venue_booking ON catering.venue_id = venue.venue_id AND venue_booking.venue_id AND catering.venue_id = venue_booking.venue_id AND catering.grade = $CateringGrade AND venue.capacity >= $PartySize GROUP by catering.grade,catering.cost,venue_booking.venue_id;");
  $stmt->bind_param("ss", $_POST["DoW"],$_POST["DoWE"]);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($conn->connect_error) {
    exit("Connection failed: " . mysqli_connect_error());
    }
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
  $stmt->close();
  $conn->close();
}
echo json_encode($data);
?>

