<?php
$host = 'localhost';
$db = 'u289533873_kumitengo';
$user = 'u289533873_faith';
$pass = 'Mannersmakesaman1722*';
$charset = 'utf8mb4';

    $servername = "localhost";
$username = "u289533873_faith";
$password = "Mannersmakesaman1722*";
$dbname = "u289533873_kumitengo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header('Content-Type: application/json');

$request_method = $_SERVER["REQUEST_METHOD"];

switch ($request_method) {
    case 'GET':
        if (!empty($_GET["id"])) {
            $id = intval($_GET["id"]);
            get_member($id);
        } else {
            get_members();
        }
        break;
    case 'POST':
        if (!empty($_POST["id"])) {
            update_member(intval($_POST["id"]));
        } else {
            insert_member();
        }
        break;
    case 'DELETE':
        $id = intval($_GET["id"]);
        delete_member($id);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

function get_members()
{
    global $conn;
    $query = "SELECT * FROM team_about_page";
    $response = array();
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        $response[] = $row;
    }
    echo json_encode($response);
}

function get_member($id)
{
    global $conn;
    $query = "SELECT * FROM team_about_page WHERE id=$id";
    $response = array();
    $result = $conn->query($query);
    if ($row = $result->fetch_assoc()) {
        $response = $row;
    }
    echo json_encode($response);
}

function insert_member()
{
    global $conn;
    $name = $conn->real_escape_string($_POST["name"]);
    $position = $conn->real_escape_string($_POST["position"]);
    $twitter = $conn->real_escape_string($_POST["twitter"]);
    $linkedin = $conn->real_escape_string($_POST["linkedin"]);
    $facebook = $conn->real_escape_string($_POST["facebook"]);
    $instagram = $conn->real_escape_string($_POST["instagram"]);
    $statement = $conn->real_escape_string($_POST["statement"]);
    $image_path = upload_image();

    $query = "INSERT INTO team_about_page (name, position, statement, facebook, instagram, twitter, linkedin, image) VALUES ('$name', '$position', '$statement', '$facebook', '$instagram', '$twitter','$linkedin',  '$image_path')";

    if ($conn->query($query)) {
        $response = array(
            'status' => 1,
            'status_message' => 'Member added successfully.'
        );
    } else {
        $response = array(
            'status' => 0,
            'status_message' => 'Member addition failed. ' . $conn->error
        );
    }
    echo json_encode($response);
}

function update_member($id)
{
    global $conn;
    $name = $conn->real_escape_string($_POST["name"]);
    $position = $conn->real_escape_string($_POST["position"]);
    $twitter = $conn->real_escape_string($_POST["twitter"]);
    $linkedin = $conn->real_escape_string($_POST["linkedin"]);
    $facebook = $conn->real_escape_string($_POST["facebook"]);
    $instagram = $conn->real_escape_string($_POST["instagram"]);
    $statement = $conn->real_escape_string($_POST["statement"]);
    $image_path = upload_image($id);

    $query = "UPDATE team_about_page SET name='$name', position='$position', statement='$statement', facebook='$facebook', instagram='$instagram', twitter='$twitter', linkedin='$linkedin',  image='$image_path' WHERE id=$id";

    if ($conn->query($query)) {
        $response = array(
            'status' => 1,
            'status_message' => 'Member updated successfully.'
        );
    } else {
        $response = array(
            'status' => 0,
            'status_message' => 'Member update failed. ' . $conn->error
        );
    }
    echo json_encode($response);
}

function delete_member($id)
{
    global $conn;
    $query = "DELETE FROM team_about_page WHERE id=$id";
    if ($conn->query($query)) {
        $response = array(
            'status' => 1,
            'status_message' => 'Member deleted successfully.'
        );
    } else {
        $response = array(
            'status' => 0,
            'status_message' => 'Member deletion failed. ' . $conn->error
        );
    }
    echo json_encode($response);
}

function upload_image($id = null)
{   
    $randomNumber = rand(100000, 999999);
    $unique = 'image' . $randomNumber;

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = './../images/data/team/';
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $file_name = $unique . basename($_FILES['image']['name']);
        $target_file = $upload_dir . $file_name;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            return $target_file;
        }
    } else if ($id) {
        global $conn;
        $query = "SELECT image FROM team_about_page WHERE id=$id";
        $result = $conn->query($query);
        if ($row = $result->fetch_assoc()) {
            return $row['image'];
        }
    }
    return './../images/data/placeholder.png';
}

$conn->close();
?>