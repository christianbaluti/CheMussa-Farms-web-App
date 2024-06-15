<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Team-one-B4-Team-Styles.css">
    <link rel="stylesheet" href="assets/css/Team-one-B4.css">
    <!-- Include Quill stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Include jQuery and SweetAlert -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">
    <?php
    // Database connection
    $servername = "localhost";
    $username = "u289533873_faith";
    $password = "Mannersmakesaman1722*";
    $dbname = "u289533873_kumitengo";
    
    include 'backend.php';


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch blog data
    $sql = "SELECT id, name, author, field, description, main_text, image, DATE_FORMAT(datemade, '%Y/%m/%d') AS date_made FROM blog";
    $result = $conn->query($sql);
    ?>

    <div id="wrapper">
        <?php include 'navbar.php'; ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Admin</span><img class="border rounded-circle img-profile" src="assets/img/logo.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="login.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav> 
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Blogs</h3>
                    <!-- Add New Blog Button in the header or wherever appropriate -->
                    <button id="newBlogBtn" class="btn btn-primary mb-4">New Blog</button>

                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">New blog</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form id="blogForm" enctype="multipart/form-data">
                                        <input type="hidden" id="blogId" name="blogId">
                                        <img id="blogImage" width="auto" height="200" src="assets/img/aboutimage.jpg" alt="Blog Image">
                                        <button class="btn btn-primary" type="button" id="insertImageBtn" style="margin-left: 131px;">Insert image</button>
                                        <input type="file" id="imageInput" name="imageInput" style="display: none;">
                                        <div class="mb-3">
                                            <label class="form-label" for="name" style="margin-top: 29px;"><strong>Name</strong></label>
                                            <input class="form-control" type="text" id="name" placeholder="Enter name" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="author" style="margin-top: 29px;"><strong>Author</strong></label>
                                            <input class="form-control" type="text" id="author" placeholder="Enter author" name="author" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="field" style="margin-top: 29px;"><strong>Field</strong></label>
                                            <input class="form-control" type="text" id="field" placeholder="Enter field" name="field" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="description"><strong>Description</strong></label>
                                            <textarea class="form-control" id="description" rows="4" name="description" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="blog"><strong>Blog</strong></label>
                                            <div id="main_text" style="height: 200px;"></div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit">Save Settings</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Blog</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date Made</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $image = $row['image'];

                                                echo "<tr>";
                                                echo "<td><img class='rounded-circle me-2' width='30' height='30' src='" . $image . "' alt='Avatar'>" . htmlspecialchars($row['name']) . "</td>";
                                                echo "<td>" . htmlspecialchars($row['date_made']) . "</td>";
                                                echo "<td style='padding-left: 0px;margin-left: 9px;padding-right: 0px;margin-right: 34px;'>
                                                    <button class='btn btn-primary delete-btn' data-id='" . $row['id'] . "' type='button' style='margin-left: 0px;background: var(--bs-red);'>Delete</button>
                                                    <button class='btn btn-primary edit-btn' data-id='" . $row['id'] . "' type='button' style='margin-left: 0px;background: var(--bs-green);'>Edit</button>
                                                    </td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='3'>No records found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Dreamcode 2024</span></div>
                </div>
            </footer>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <!-- Include Quill.js -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        $(document).ready(function() {
            var quill = new Quill('#main_text', {
                theme: 'snow'
            });

            $('#insertImageBtn').click(function() {
                $('#imageInput').click();
            });

            $('#imageInput').change(function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blogImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

            $('#newBlogBtn').click(function() {
                $('#blogForm')[0].reset();
                $('#blogId').val('');
                quill.root.innerHTML = '';
                $('#blogImage').attr('src', 'assets/img/aboutimage.jpg');
            });

            $('#blogForm').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                formData.append('main_text', quill.root.innerHTML);

                $.ajax({
                    url: $('#blogId').val() ? 'blog.update.php' : 'blog.post.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Blog post saved successfully.',
                        }).then(() => {
                            location.reload();
                        });
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'There was an error saving your blog post.',
                        });
                    }
                });
            });

            $('.delete-btn').click(function() {
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: 'blog.delete.php',
                            type: 'POST',
                            data: { id: id },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your blog post has been deleted.',
                                    'success'
                                ).then(() => {
                                    location.reload();
                                });
                            },
                            error: function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: 'There was an error deleting your blog post.',
                                });
                            }
                        });
                    }
                });
            });

            $('.edit-btn').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    url: 'blog.fetch.php',
                    type: 'GET',
                    data: { id: id },
                    success: function(response) {
                        var data = JSON.parse(response);
                        $('#blogId').val(data.id);
                        $('#name').val(data.name);
                        $('#date').val(data.date_made);
                        $('#author').val(data.author);
                        $('#field').val(data.field);
                        $('#description').val(data.description);
                        quill.root.innerHTML = data.main_text;
                        $('#blogImage').attr('src', data.image);
                        $('html, body').animate({
                            scrollTop: $('#blogForm').offset().top
                        }, 1000);
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'There was an error fetching your blog post.',
                        });
                    }
                });
            });
        });

    </script>
</body>

</html>
