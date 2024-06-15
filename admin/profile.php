<?php 

include 'backend.php';
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Team-one-B4-Team-Styles.css">
    <link rel="stylesheet" href="assets/css/Team-one-B4.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: linear-gradient(rgba(0,0,0,0.18), rgba(1,20,4,0.68)), url(&quot;assets/img/about_1.jpg&quot;), #006b54;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><img src="./<?php echo $Plogo; ?>"></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-size: 10px;"><?php echo $Pname; ?></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bar-chart-line" style="margin-right: 18px;">
                                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"></path>
                            </svg><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-badge" style="margin-right: 18px;">
                                <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"></path>
                            </svg><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bookshelf" style="padding-right: 0px;margin-right: 19px;">
                                <path d="M2.5 0a.5.5 0 0 1 .5.5V2h10V.5a.5.5 0 0 1 1 0v15a.5.5 0 0 1-1 0V15H3v.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zM3 14h10v-3H3v3zm0-4h10V7H3v3zm0-4h10V3H3v3z"></path>
                            </svg><span>Blogs</span></a><a class="nav-link" href="gallery.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-image-alt" style="margin-right: 18px;">
                                <path d="M7 2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zm4.225 4.053a.5.5 0 0 0-.577.093l-3.71 4.71-2.66-2.772a.5.5 0 0 0-.63.062L.002 13v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4.5l-4.777-3.947z"></path>
                            </svg><span>Gallery</span></a><a class="nav-link" href="events.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-slash-minus" style="margin-right: 18px;">
                                <path fill-rule="evenodd" d="m1.854 14.854 13-13a.5.5 0 0 0-.708-.708l-13 13a.5.5 0 0 0 .708.708ZM4 1a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 4 1Zm5 11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5A.5.5 0 0 1 9 12Z"></path>
                            </svg><span>Events</span></a><a class="nav-link" href="others.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-journal-plus" style="margin-right: 18px;">
                                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"></path>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"></path>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"></path>
                            </svg><span>Other</span></a><a class="nav-link" href="team.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people" style="margin-right: 18px;">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"></path>
                            </svg><span>Team</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
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
                    <h3 class="text-dark mb-4">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">

                                <form id="updateLogo" enctype="multipart/form-data">
                                    <div class="card-body text-center shadow">
                                        <img class="rounded-circle mb-3 mt-4" src="./<?php echo htmlspecialchars($Plogo); ?>" width="160" height="160">
                                        <p>Logo</p>
                                        <div class="mb-3">
                                            <input type="file" id="logo" name="logo" required>
                                            <button class="btn btn-primary btn-sm" type="submit">Change Logo</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Website Settings</p>
                                        </div>
                                        <div class="card-body">

                                            <form id="updateDetailsFormOne">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="name"><strong>Name</strong></label>
                                                            <input class="form-control" type="text" id="name" placeholder="<?php echo $Pname; ?>" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="email"><strong>Email Address</strong></label>
                                                            <input class="form-control" type="email" id="email" placeholder="<?php echo $Pemail; ?>" name="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="phone1"><strong>Phone Number 1</strong></label>
                                                            <input class="form-control" type="text" id="phone1" placeholder="<?php echo $Pphone1; ?>" name="phone1">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="phone2"><strong>Phone Number 2</strong></label>
                                                            <input class="form-control" type="text" id="phone2" placeholder="<?php echo $Pphone2; ?>" name="phone2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="facebook"><strong>Facebook</strong></label>
                                                            <input class="form-control" type="text" id="facebook" placeholder="<?php echo $Pfacebook; ?>" name="facebook">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="instagram"><strong>Instagram</strong></label>
                                                            <input class="form-control" type="text" id="instagram" placeholder="<?php echo $Pinstagram; ?>" name="instagram">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="twitter"><strong>Twitter</strong></label>
                                                            <input class="form-control" type="text" id="twitter" placeholder="<?php echo $Ptwitter; ?>" name="twitter">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="linkedin"><strong>LinkedIn</strong></label>
                                                            <input class="form-control" type="text" id="linkedin" placeholder="<?php echo $Plinkedin; ?>" name="linkedin">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <button class="btn btn-primary btn-sm" type="submit">Save Settings</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Contact Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form id="addressUpdate">
                                                <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="<?php echo $Paddress; ?>" name="address"></div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Other Settings</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form id="profileFormOne">
                                        <div class="mb-3">
                                            <label class="form-label" for="mision"><strong>Mission</strong></label>
                                            <textarea placeholder="<?php echo $Pmision; ?>" class="form-control" id="mision" rows="4" name="mision"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="vision"><strong>Vision</strong></label>
                                            <textarea placeholder="<?php echo $Pvision; ?>" class="form-control" id="vision" rows="4" name="vision"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="moto"><strong>Motto</strong></label>
                                            <textarea placeholder="<?php echo $Pmoto; ?>" class="form-control" id="moto" rows="4" name="moto"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="short_about"><strong>Short About you</strong></label>
                                            <textarea placeholder="<?php echo $Pshort_about; ?>" class="form-control" id="short_about" rows="4" name="short_about"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit" onclick='alert("Updated");'>Save Settings</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <section class="home-team" style="margin-top: 0px;padding-top: 3px;">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col col-md-8">
                                            <div class="sectionTitle text-center">
                                                <h2>All important images</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                         <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img">
                                                    <img class="img-fluid img-full loaded" src="../<?php echo $Pmission_vission_moto_image;?>" alt="Team one">
                                                </div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong>Mission Vision Moto Image</strong></h6>
                                                    <button class="btn btn-primary change-btn" data-img-id="mission_vission_moto_image">Change</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="../<?php echo $Psecond_image_home;?>" alt="Team one"></div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong><span style="font-style: normal !important; color: rgb(0, 0, 0);">second image home</span></strong></h6><button class="btn btn-primary change-btn" data-img-id="second_image_home">Change</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="../<?php echo $Pcarousel1;?>" alt="Team one"></div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong><span style="font-style: normal !important; color: rgb(0, 0, 0);">carousel 1 image</span></strong></h6><button class="btn btn-primary change-btn" data-img-id="carousel1">Change</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="../<?php echo $Pcarousel2;?>" alt="Team one"></div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong><span style="font-style: normal !important; color: rgb(0, 0, 0);">carousel 2&nbsp;image</span></strong></h6><button class="btn btn-primary change-btn" data-img-id="carousel2">Change</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="../<?php echo $Pcarousel3;?>" alt="Team one"></div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong><span style="font-style: normal !important; color: rgb(0, 0, 0);">carousel 3&nbsp;image</span></strong></h6><button class="btn btn-primary change-btn" data-img-id="carousel3">Change</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="../<?php echo $Pservice_image;?>" alt="Team one"></div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong><span style="font-style: normal !important; color: rgb(0, 0, 0);">service image</span></strong></h6><button class="btn btn-primary change-btn" data-img-id="service_image">Change</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="../<?php echo $Pevents_image;?>" alt="Team one"></div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong><span style="font-style: normal !important; color: rgb(0, 0, 0); background-color: var(--bs-table-bg);">events&nbsp;</span><span style="font-style: normal !important; color: rgb(0, 0, 0);">image</span></strong></h6><button class="btn btn-primary change-btn" data-img-id="events_image">Change</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="../<?php echo $Pabout_image;?>" alt="Team one"></div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong><span style="font-style: normal !important; color: rgb(0, 0, 0);">about&nbsp;image</span></strong></h6><button class="btn btn-primary change-btn" data-img-id="about_image">Change</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="../<?php echo $Pgallery_image;?>" alt="Team one"></div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong><span style="font-style: normal !important; color: rgb(0, 0, 0);">gallery&nbsp;image</span></strong></h6><button class="btn btn-primary change-btn" data-img-id="gallery_image">Change</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="../<?php echo $Pblog_image;?>" alt="Team one"></div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong><span style="font-style: normal !important; color: rgb(0, 0, 0);">Blog image</span></strong></h6><button class="btn btn-primary change-btn" data-img-id="blog_image">Change</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-style2 team-card">
                                                <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="../<?php echo $Pcontact_image;?>" alt="Team one"></div>
                                                <div class="card-block">
                                                    <h6 class="card-title"><strong><span style="font-style: normal !important; color: rgb(0, 0, 0);">Contact image</span></strong></h6><button class="btn btn-primary change-btn" data-img-id="contact_image">Change</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script type="text/javascript">
    

        $(document).ready(function() {
            // Handle image change button clicks
            $('.change-btn').on('click', function() {
                const imgId = $(this).data('img-id');

                Swal.fire({
                    title: 'Change Image',
                    html: '<input type="file" id="fileInput" class="swal2-input">',
                    showCancelButton: true,
                    confirmButtonText: 'Upload',
                    preConfirm: () => {
                        const file = Swal.getPopup().querySelector('#fileInput').files[0];
                        if (!file) {
                            Swal.showValidationMessage('Please select a file');
                        }
                        return file;
                    }
                }).then(result => {
                    if (result.isConfirmed) {
                        const file = result.value;
                        const formData = new FormData();
                        formData.append('file', file);
                        formData.append('imgId', imgId);

                        fetch('upload.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire('Success', 'Image updated successfully', 'success');
                                // Update the image src on the page
                                var imgElement = document.querySelector(`img[data-img-id="${imgId}"]`);
                                imgElement.src = data.newImagePath; // Use the new image path directly
                            } else {
                                Swal.fire('Error', data.error || 'Failed to update image', 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire('Success', 'Image updated, refresh page', 'success');
                        });
                    }
                });
            });

            // Handle profile update form submission
            $('#updateDetailsFormOne').on('submit', function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: 'update_profile1.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Error!',
                            text: 'There was an error processing your request.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });

             // Handle profile update form submission 222
            $('#addressUpdate').on('submit', function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: 'addressUpdate.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Error!',
                            text: 'There was an error processing your request.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });

                $('#updateLogo').on('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(this); // Use FormData to handle file uploads

                $.ajax({
                    url: 'updateLogo.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    processData: false, // Prevent jQuery from automatically transforming the data into a query string
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                location.reload(); // Reload the page to update the logo
                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Error!',
                            text: 'There was an error processing your request.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
 

    </script>
    <script type="text/javascript" src="update_profile.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>