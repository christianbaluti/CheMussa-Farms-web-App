    <div id="wrapper">
        <?php include 'other.nav.top.php'; ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'other.nav.bottom.php';; ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Others</h3>
                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">About on about page</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <form id="aboutForm" enctype="multipart/form-data">
                                        <img id="aboutImage" width="auto" height="200" src="./../images/data/placeholder.png">
                                        <button class="btn btn-primary" type="button" id="insertImageBtn" style="margin-left: 131px;" <?php if ($checkdata) echo 'disabled'; ?>>Insert image</button>
                                        <input type="file" id="imageInput" name="imageInput" style="display: none;" <?php if ($checkdata) echo 'disabled'; ?> required>

                                        <div class="mb-3">
                                            <label class="form-label" for="statement1" style="margin-top: 29px;"><strong>Statement 1</strong></label>
                                            <input class="form-control" type="text" id="statement1" placeholder="Enter Statement" name="sentence1" <?php if ($checkdata) echo 'disabled'; ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="title" style="margin-top: 29px;"><strong>Title</strong></label>
                                            <input class="form-control" type="text" id="title" placeholder="Enter Title" name="title" <?php if ($checkdata) echo 'disabled'; ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="subTitle" style="margin-top: 29px;"><strong>subTitle</strong></label>
                                            <input class="form-control" type="text" id="subTitle" placeholder="Enter subTitle" name="subtitle" <?php if ($checkdata) echo 'disabled'; ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="details" style="margin-top: 29px;"><strong>Details</strong></label>
                                            <textarea rows="3" class="form-control" id="details" placeholder="Enter Details" name="details" <?php if ($checkdata) echo 'disabled'; ?> required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit" <?php if ($checkdata) echo 'disabled'; ?>>Save Settings</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">About on about page</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Sub Title</th>
                                                <th>Image</th>
                                            </tr>
                                    </thead>
                                    <tbody id="aboutTableBody">
                                        <?php
                                        // SQL query to fetch all data from About_about_page table
                                        $sql = "SELECT * FROM about_about_page";

                                        try {
                                            // Prepare and execute the query
                                            $stmt = $pdo->query($sql);

                                            // Fetch all the results
                                            $aboutPages = $stmt->fetchAll();

                                            // Iterate through the results and assign them to variables
                                            foreach ($aboutPages as $row) {
                                                $id = $row['id'];
                                                $sentence1 = $row['sentence1'];
                                                $main_image = $row['main_image'];
                                                $title = $row['title'];
                                                $subtitle = $row['subtitle'];
                                                $main_text = $row['main_text'];

                                                echo '<tr data-id="'.$id.'" data-sentence1="'.$sentence1.'" data-title="'.$title.'" data-subtitle="'.$subtitle.'" data-maintext="'.$main_text.'" data-mainimage="'.$main_image.'">
                                                    <td>'.$title.'</td>
                                                    <td>'.$subtitle.'</td>
                                                    <td><img src="'.$main_image.'" width="auto" height="100px"></td>
                                                    <td>
                                                        <button class="btn btn-primary edit-btn" type="button" style="background: var(--bs-success);">Edit</button>
                                                    </td>
                                                </tr>';
                                            }
                                        } catch (\PDOException $e) {
                                            // Handle query error
                                            echo 'Query failed: ' . $e->getMessage();
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><br>

                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">About on home page</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form id="aboutHomeForm" enctype="multipart/form-data">
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="name" style="margin-top: 29px;"><strong>Name</strong></label>
                                            <input class="form-control" type="text" id="name" placeholder="Enter name" name="name" <?php if ($checkdata2) echo 'disabled'; ?> required>
                                        </div>
                                        <input type="text" name="id" id="id" value="" hidden>
                                        <div class="mb-3">
                                            <label class="form-label" for="second_text" style="margin-top: 29px;"><strong>Text</strong></label>
                                            <input class="form-control" type="text" id="second_text" placeholder="Enter second text" name="second_text" <?php if ($checkdata2) echo 'disabled'; ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="paragraph" style="margin-top: 29px;"><strong>paragraph</strong></label>
                                            <textarea rows="3" class="form-control" id="paragraph" placeholder="Enter paragraph" name="paragraph" <?php if ($checkdata2) echo 'disabled'; ?> required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit" <?php if ($checkdata) echo 'disabled'; ?>>Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"><strong>About on home page</strong></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Paragraph</th>
                                            <th>Name</th>
                                            <th>Second text</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    // SQL query to fetch all data from About_about_page table
                                    $sql = "SELECT * FROM about_home_page_image";

                                    try {
                                        // Prepare and execute the query
                                        $stmt = $pdo->query($sql);

                                        // Fetch all the results
                                        $aboutPages = $stmt->fetchAll();

                                        // Iterate through the results and assign them to variables
                                        foreach ($aboutPages as $row) {
                                            $id = $row['id'];
                                            $name = htmlspecialchars($row['name']); // Escape HTML attribute
                                            $second_text = htmlspecialchars($row['second_text']); // Escape HTML attribute
                                            $paragraph = htmlspecialchars($row['paragraph']); // Escape HTML attribute

                                            echo '<tr data-id="'.$id.'" data-name="'.$name.'" data-second_text="'.$second_text.'" data-paragraph="'.$paragraph.'">
                                                <td>'.$name.'</td>
                                                <td>'.$second_text.'</td>
                                                <td>'.$paragraph.'</td>
                                                <td>
                                                    <button class="btn btn-primary edit2-btn" type="button" style="background: var(--bs-success);">Edit</button>
                                                </td>
                                            </tr>';
                                        }
                                    } catch (\PDOException $e) {
                                        // Handle query error
                                        echo 'Query failed: ' . $e->getMessage();
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">About statements on about page</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form id="aboutStatementForm" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label" for="statement22" style="margin-top: 29px;"><strong>Statement</strong></label>
                                            <input class="form-control" type="text" id="statement22" placeholder="Enter statement" name="statement22" <?php if ($checkdata3) echo 'disabled'; ?> required>
                                        </div>
                                        <input type="text" name="id22" id="id22" value="" hidden>
                                        <div class="mb-3">
                                            <label class="form-label" for="italized_text22" style="margin-top: 29px;"><strong>Text</strong></label>
                                            <input class="form-control" type="text" id="italized_text22" placeholder="Enter second text" name="italized_text22" <?php if ($checkdata3) echo 'disabled'; ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="main_text22" style="margin-top: 29px;"><strong>Paragraph</strong></label>
                                            <textarea rows="3" class="form-control" id="main_text22" placeholder="Enter main text" name="main_text22" <?php if ($checkdata3) echo 'disabled'; ?> required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit" <?php if ($checkdata3) echo 'disabled'; ?>>Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"><strong>About statements on about page</strong></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Statement</th>
                                            <th>Second Text</th>
                                            <th>Main Text</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    // SQL query to fetch all data from about_statements_about_page table
                                    $sql = "SELECT * FROM about_statements_about_page";

                                    try {
                                        // Prepare and execute the query
                                        $stmt = $pdo->query($sql);

                                        // Fetch all the results
                                        $aboutPages = $stmt->fetchAll();

                                        // Iterate through the results and assign them to variables
                                        foreach ($aboutPages as $row) {
                                            $id22 = $row['id'];
                                            $statement22 = htmlspecialchars($row['statement1']);
                                            $italized_text22 = htmlspecialchars($row['italized_text']);
                                            $main_text22 = htmlspecialchars($row['main_text']);

                                            echo '<tr data-id22="'.$id22.'" data-statement22="'.$statement22.'" data-italized_text22="'.$italized_text22.'" data-main_text22="'.$main_text22.'">
                                                <td>'.$statement22.'</td>
                                                <td>'.$italized_text22.'</td>
                                                <td>'.$main_text22.'</td>
                                                <td>
                                                    <button class="btn btn-primary edit3-btn" type="button" style="background: var(--bs-success);">Edit</button>
                                                </td>
                                            </tr>';
                                        }
                                    } catch (\PDOException $e) {
                                        // Handle query error
                                        echo 'Query failed: ' . $e->getMessage();
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

                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">3 paragraphs on home page</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form id="theParagraph" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label" for="name222" style="margin-top: 29px;"><strong>Statement</strong></label>
                                            <input class="form-control" type="text" id="name222" placeholder="Enter statement" name="name222" <?php if ($checkdata4) echo 'disabled'; ?> required>
                                        </div>
                                        <input type="text" name="id222" id="id222" value="" hidden>
                                        <div class="mb-3">
                                            <label class="form-label" for="main_text222" style="margin-top: 29px;"><strong>Paragraph</strong></label>
                                            <textarea rows="3" class="form-control" id="main_text222" placeholder="Enter main text" name="main_text222" <?php if ($checkdata4) echo 'disabled'; ?> required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit" <?php if ($checkdata4) echo 'disabled'; ?>>Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"><strong>3 paragraphs on home</strong></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Paragraph</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    // SQL query to fetch all data from home_3_paragraphs table
                                    $sql = "SELECT * FROM home_3_paragraphs";

                                    try {
                                        // Prepare and execute the query
                                        $stmt = $pdo->query($sql);

                                        // Fetch all the results
                                        $aboutPages = $stmt->fetchAll();

                                        // Iterate through the results and assign them to variables
                                        foreach ($aboutPages as $row) {
                                            $id222 = $row['id'];
                                            $name222 = htmlspecialchars($row['name']);
                                            $main_text222 = htmlspecialchars($row['main_text']);

                                            echo '<tr data-id222="'.$id222.'" data-name222="'.$name222.'" data-main_text222="'.$main_text222.'">
                                                <td>'.$name222.'</td>
                                                <td>'.$main_text222.'</td>
                                                <td>
                                                    <button class="btn btn-primary edit4-btn" type="button" style="background: var(--bs-success);">Edit</button>
                                                </td>
                                            </tr>';
                                        }
                                    } catch (\PDOException $e) {
                                        // Handle query error
                                        echo 'Query failed: ' . $e->getMessage();
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

                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">3 services on services page</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form id="service1" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label" for="name2222" style="margin-top: 29px;"><strong>Statement</strong></label>
                                            <input class="form-control" type="text" id="name2222" placeholder="Enter statement" name="name2222" <?php if ($checkdata5) echo 'disabled'; ?> required>
                                        </div>
                                        <input type="text" name="id2222" id="id2222" value="" hidden>
                                        <div class="mb-3">
                                            <label class="form-label" for="main_text2222" style="margin-top: 29px;"><strong>Paragraph</strong></label>
                                            <textarea rows="3" class="form-control" id="main_text2222" placeholder="Enter main text" name="main_text2222" <?php if ($checkdata5) echo 'disabled'; ?> required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit" <?php if ($checkdata5) echo 'disabled'; ?>>Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"><strong>3 services on services page</strong></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Paragraph</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    // SQL query to fetch all data from service_service_page_3 table
                                    $sql = "SELECT * FROM service_service_page_3";

                                    try {
                                        // Prepare and execute the query
                                        $stmt = $pdo->query($sql);

                                        // Fetch all the results
                                        $aboutPages = $stmt->fetchAll();

                                        // Iterate through the results and assign them to variables
                                        foreach ($aboutPages as $row) {
                                            $id2222 = $row['id'];
                                            $name2222 = htmlspecialchars($row['name']);
                                            $main_text2222 = htmlspecialchars($row['main_text']);

                                            echo '<tr data-id2222="'.$id2222.'" data-name2222="'.$name2222.'" data-main_text2222="'.$main_text2222.'">
                                                <td>'.$name2222.'</td>
                                                <td>'.$main_text2222.'</td>
                                                <td>
                                                    <button class="btn btn-primary edit5-btn" type="button" style="background: var(--bs-success);">Edit</button>
                                                </td>
                                            </tr>';
                                        }
                                    } catch (\PDOException $e) {
                                        // Handle query error
                                        echo 'Query failed: ' . $e->getMessage();
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

                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">4 services on services page</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form id="service2" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label" for="name22222" style="margin-top: 29px;"><strong>Statement</strong></label>
                                            <input class="form-control" type="text" id="name22222" placeholder="Enter statement" name="name22222" <?php if ($checkdata6) echo 'disabled'; ?> required>
                                        </div>
                                        <input type="text" name="id22222" id="id22222" value="" hidden>
                                        <div class="mb-3">
                                            <label class="form-label" for="main_text22222" style="margin-top: 29px;"><strong>Paragraph</strong></label>
                                            <textarea rows="3" class="form-control" id="main_text22222" placeholder="Enter main text" name="main_text22222" <?php if ($checkdata6) echo 'disabled'; ?> required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit" <?php if ($checkdata6) echo 'disabled'; ?>>Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"><strong>4 services on services page</strong></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Paragraph</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    // SQL query to fetch all data from service_service_page_3 table
                                    $sql = "SELECT * FROM service_service_page_4";

                                    try {
                                        // Prepare and execute the query
                                        $stmt = $pdo->query($sql);

                                        // Fetch all the results
                                        $aboutPages = $stmt->fetchAll();

                                        // Iterate through the results and assign them to variables
                                        foreach ($aboutPages as $row) {
                                            $id22222 = $row['id'];
                                            $name22222 = htmlspecialchars($row['name']);
                                            $main_text22222 = htmlspecialchars($row['main_text']);

                                            echo '<tr data-id22222="'.$id22222.'" data-name22222="'.$name22222.'" data-main_text22222="'.$main_text22222.'">
                                                <td>'.$name22222.'</td>
                                                <td>'.$main_text22222.'</td>
                                                <td>
                                                    <button class="btn btn-primary edit6-btn" type="button" style="background: var(--bs-success);">Edit</button>
                                                </td>
                                            </tr>';
                                        }
                                    } catch (\PDOException $e) {
                                        // Handle query error
                                        echo 'Query failed: ' . $e->getMessage();
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

                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">1 services on services page</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form id="service3" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label" for="name222222" style="margin-top: 29px;"><strong>Statement</strong></label>
                                            <input class="form-control" type="text" id="name222222" placeholder="Enter statement" name="name222222" <?php if ($checkdata7) echo 'disabled'; ?> required>
                                        </div>
                                        <input type="text" name="id222222" id="id222222" value="" hidden>
                                        <div class="mb-3">
                                            <label class="form-label" for="main_text222222" style="margin-top: 29px;"><strong>Paragraph</strong></label>
                                            <textarea rows="3" class="form-control" id="main_text222222" placeholder="Enter main text" name="main_text222222" <?php if ($checkdata7) echo 'disabled'; ?> required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit" <?php if ($checkdata7) echo 'disabled'; ?>>Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"><strong>1 services on services page</strong></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Paragraph</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    // SQL query to fetch all data from service_service_page_3 table
                                    $sql = "SELECT * FROM service_service_page_1";

                                    try {
                                        // Prepare and execute the query
                                        $stmt = $pdo->query($sql);

                                        // Fetch all the results
                                        $aboutPages = $stmt->fetchAll();

                                        // Iterate through the results and assign them to variables
                                        foreach ($aboutPages as $row) {
                                            $id222222 = $row['id'];
                                            $name222222 = htmlspecialchars($row['name']);
                                            $main_text222222 = htmlspecialchars($row['main_text']);

                                            echo '<tr data-id222222="'.$id222222.'" data-name222222="'.$name222222.'" data-main_text222222="'.$main_text222222.'">
                                                <td>'.$name222222.'</td>
                                                <td>'.$main_text222222.'</td>
                                                <td>
                                                    <button class="btn btn-primary edit7-btn" type="button" style="background: var(--bs-success);">Edit</button>
                                                </td>
                                            </tr>';
                                        }
                                    } catch (\PDOException $e) {
                                        // Handle query error
                                        echo 'Query failed: ' . $e->getMessage();
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

                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Video with a service on services page</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form id="service4" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label" for="name2222222" style="margin-top: 29px;"><strong>Name</strong></label>
                                            <input class="form-control" type="text" id="name2222222" placeholder="Enter statement" name="name2222222" <?php if ($checkdata8) echo 'disabled'; ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="iframe2222222" style="margin-top: 29px;"><strong>video Link from vimeo</strong></label>
                                            <input class="form-control" type="text" id="iframe2222222" placeholder="Enter video vimeo link" name="iframe2222222" <?php if ($checkdata8) echo 'disabled'; ?> required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="italized_text2222222" style="margin-top: 29px;"><strong>Description</strong></label>
                                            <input class="form-control" type="text" id="italized_text2222222" placeholder="Enter short sentence description" name="italized_text2222222" <?php if ($checkdata8) echo 'disabled'; ?> required>
                                        </div>
                                        <input type="text" name="id2222222" id="id2222222" value="" hidden>
                                        <div class="mb-3">
                                            <label class="form-label" for="main_text2222222" style="margin-top: 29px;"><strong>Paragraph</strong></label>
                                            <textarea rows="3" class="form-control" id="main_text2222222" placeholder="Enter main text" name="main_text2222222" <?php if ($checkdata8) echo 'disabled'; ?> required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit" <?php if ($checkdata8) echo 'disabled'; ?>>Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"><strong>Video with a service on services page</strong></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Video</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    // SQL query to fetch all data from service_service_page_video table
                                    $sql = "SELECT * FROM service_service_page_video";

                                    try {
                                        // Prepare and execute the query
                                        $stmt = $pdo->query($sql);

                                        // Fetch all the results
                                        $aboutPages = $stmt->fetchAll();

                                        // Iterate through the results and assign them to variables
                                        foreach ($aboutPages as $row) {
                                            $id2222222 = $row['id'];
                                            $name2222222 = htmlspecialchars($row['name']);
                                            $iframe2222222 = htmlspecialchars($row['iframe']);
                                            $italized_text2222222 = htmlspecialchars($row['italized_text']);
                                            $main_text2222222 = htmlspecialchars($row['main_text']);

                                            echo '<tr data-id2222222="'.$id2222222.'" data-name2222222="'.$name2222222.'" data-iframe2222222="'.$iframe2222222.'" data-italized_text2222222="'.$italized_text2222222.'" data-main_text2222222="'.$main_text2222222.'">
                                                <td>'.$name2222222.'</td>
                                                <td>'.$iframe2222222.'</td>
                                                <td>
                                                    <button class="btn btn-primary edit8-btn" type="button" style="background: var(--bs-success);">Edit</button>
                                                </td>
                                            </tr>';
                                        }
                                    } catch (\PDOException $e) {
                                        // Handle query error
                                        echo 'Query failed: ' . $e->getMessage();
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
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>