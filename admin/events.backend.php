<?php
$servername = "localhost";
$username = "u289533873_faith";
$password = "Mannersmakesaman1722*";
$dbname = "u289533873_kumitengo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function uploadImage($imageFile) {
    $target_dir = "./../images/data/events/";
    $target_file = $target_dir . date("YmdHis") . '_yesss' . basename($imageFile["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($imageFile["tmp_name"]);
    if($check === false) {
        return false;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        return false;
    }

    // Check file size
    if ($imageFile["size"] > 500000) { // 500KB
        return false;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        return false;
    }

    if (move_uploaded_file($imageFile["tmp_name"], $target_file)) {
        return $target_file;
    } else {
        return false;
    }
}

// Handle requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'add') {
        $name = $_POST['eventName'];
        $field = $_POST['eventField'];
        $main_text = $_POST['eventDetails'];
        $datemade = date('Y-m-d');

        $image1 = uploadImage($_FILES['eventImage1']);
        $image2 = uploadImage($_FILES['eventImage2']);
        $image3 = uploadImage($_FILES['eventImage3']);

        $sql = "INSERT INTO events (name, field, main_text, image1, image2, image3, datemade) VALUES ('$name', '$field', '$main_text', '$image1', '$image2', '$image3', '$datemade')";
        if ($conn->query($sql) === TRUE) {
            echo "Event added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if ($_POST['action'] === 'delete') {
        $id = $_POST['id'];
        $sql = "DELETE FROM events WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Event deleted successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    if ($_POST['action'] === 'update') {
        $id = $_POST['id'];
        $name = $_POST['eventName'];
        $field = $_POST['eventField'];
        $details = $_POST['eventDetails'];

        $sql = "UPDATE events SET name='$name', field='$field', main_text='$details' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Event updated successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['action'] === 'fetch') {
        $sql = "SELECT * FROM events";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td><img src='{$row['image1']}' width='auto' height='100px'></td>
                    <td>{$row['name']}</td>
                    <td>{$row['datemade']}</td>
                    <td>
                        <button class='btn btn-primary btn-edit' data-id='{$row['id']}'>Edit</button>
                        <button class='btn btn-danger btn-delete' data-id='{$row['id']}'>Delete</button>
                    </td>
                  </tr>";
        }
    }

    if ($_GET['action'] === 'get') {
        $id = $_GET['id'];
        $sql = "SELECT * FROM events WHERE id=$id";
        $result = $conn->query($sql);
        echo json_encode($result->fetch_assoc());
    }
}

$conn->close();
?>
