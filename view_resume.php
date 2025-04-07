<?php
include 'db_connect.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate parameters
if (!isset($_GET['id']) || !isset($_GET['resume'])) {
    die("Invalid request.");
}

$id = intval($_GET['id']);
$resume_requested = basename($_GET['resume']); // only filename, avoid directory traversal

// Fetch from DB
$stmt = $conn->prepare("SELECT resume FROM apply_jobs WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $stored_resume = basename($row['resume']); // avoid path tricks
    $resume_path = $row['resume'];

    // Match resume name with what's in the URL for extra validation
    if ($resume_requested === $stored_resume && file_exists($resume_path)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $stored_resume . '"');
        readfile($resume_path);
        exit;
    } else {
        echo "Resume not found or mismatch.";
    }
} else {
    echo "Application not found.";
}
?>
