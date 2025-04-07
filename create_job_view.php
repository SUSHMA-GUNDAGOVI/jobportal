<?php
// Database connection
include 'db_connect.php';

$id = isset($_GET['id']) ? $_GET['id'] : ''; // Get client ID dynamically
$sql = "SELECT * FROM jobs WHERE id = '$id'";  
$res = mysqli_query($conn, $sql);

if ($res && mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .card-custom {
            background: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 25px;
            position: relative;
        }
        .header-title {
            font-size: 22px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
            border-bottom: 2px solid rgb(1, 10, 20);
            padding-bottom: 10px;
        }
        .detail-row {
            display: flex;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            font-weight: bold;
            color: #555;
            min-width: 150px;
            margin-right: 10px;
        }
        .detail-value {
            flex: 1;
            color: #222;
        }
        .breadcrumb-custom {
            background: none;
            padding-left: 0;
        }
        .back-btn {
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
        }
        .back-btn:hover {
            text-decoration: underline;
        }
        .close-btn-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
        .close-btn {
            background: #dc3545;
            color: #fff;
            border: none;
            padding: 8px 16px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .close-btn:hover {
            background: #c82333;
        }
        .card-custom {
    background: #ffffff;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 25px;
    position: relative;
    margin-top: -20px; /* Move the card slightly upwards */
}

    </style>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <a href="#">
                        <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables
                    </a>
                </li>
            </ol>
        </nav>

    <div class="container mt-4">

        <div class="card card-custom">
            <div class="header-title">Customer Details</div>
            <div class="row">
                <div class="col-md-6">
                <div class="detail-row"><span class="detail-label">Job Title:</span> <span class="detail-value"><?= htmlspecialchars($row['title1']) ?></span></div>
                <div class="detail-row"><span class="detail-label">Description:</span> <span class="detail-value"><?= htmlspecialchars($row['description']) ?></span></div>
                    <div class="detail-row"><span class="detail-label">Salary:</span> <span class="detail-value"><?= htmlspecialchars($row['salary']) ?></span></div>
                    <div class="detail-row"><span class="detail-label">Duration:</span> <span class="detail-value"><?= htmlspecialchars($row['duration']) ?></span></div>
                    <div class="detail-row"><span class="detail-label">Shift:</span> <span class="detail-value"><?= htmlspecialchars($row['shift']) ?></span></div>
                    <div class="detail-row"><span class="detail-label">Location:</span> <span class="detail-value"><?= htmlspecialchars($row['location']) ?></span></div>
                    <div class="detail-row"><span class="detail-label">Posted Date:</span> <span class="detail-value"><?= htmlspecialchars($row['posted_date']) ?></span></div>
                    
                </div>
                
            </div>

            <!-- Close button at the bottom-right -->
            <div class="close-btn-container">
                <button class="close-btn" onclick="window.location.href='./index.php?page=create_job_list'">Close</button>
            </div>
        </div>
    </div>

    <?php
} else {
    echo "<div class='container mt-4'><p class='alert alert-warning'>No data found for the selected client.</p></div>";
}
?>
