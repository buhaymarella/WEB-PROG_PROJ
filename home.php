<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Home Page</title>
</head>
<body>
    <header class="header__main-container d-flex flex-column flex-sm-row container-fluid header">
        <!-- header logo -->
        <div class="header__logo-container container d-flex flex-column flex-sm-row p-3 pb-1">
            <div class="img__logo-container flex-shrink-0 mb-3 mb-sm-0 d-flex justify-content-center align-items-center">
                <img src="images/logo.png" class="img__logo" alt="">
            </div>
            <div class="head__txt-container flex-grow-1 ms-3 p-3">
                <p class="header__up-txt fs-6 text-white custom-line-height">
                    Republic of the Philippines
                </p>
                <p class="header__mid-txt fs-4 text-white custom-line-height">
                    DEPARTMENT OF ENVIRONMENT AND NATURAL RESOURCES
                </p>
                <hr class="text-white">
                <p class="header__bot-txt fs-6 text-white custom-line-height">
                    KAGAWARAN NG KAYAMANAN AT LIKAS NA YAMAN
                </p>
            </div>
        </div>
    </header>
    <nav class="header__nav-container container-fluid nav-bar p-2"> <!-- Main Nav -->
                <ul class="container d-flex flex-row gap-4 pt-2">
                        <li class="nav-item">
                            <a href="index.html" class="nav__link text-white text-decoration-none">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav__link text-white text-decoration-none">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.html" class="nav__link text-white text-decoration-none">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="signup.html"class="nav__link text-white text-decoration-none" >Register</a>
                        </li>
            </ul>
    </nav><br>
    <nav class="container sec__nav-container p-1">
        <div class="row mt-3">
            <div class="col-sm-2 mb-3">
                <a href="draft_pg.html" class="nav-link text-white mx-2">
                    <div class="d-flex flex-column align-items-center">
                    <img src="images/drafts.png" alt="draft" style="width: 20%;">
                    <span>Draft</span>
                    </div>
                </a>
                </div>
                <div class="col-sm-2 mb-3">
                <a href="#" class="nav-link text-white mx-2">
                    <div class="d-flex flex-column align-items-center">
                    <img src="images/notification.png" alt="notification" style="width: 20%;">
                    <span>Notification</span>
                    </div>
                </a>
                </div>
                <div class="col-sm-2 mb-3">
                <a href="#" class="nav-link text-white mx-2">
                    <div class="d-flex flex-column align-items-center">
                    <img src="images/profile.png" alt="profile" style="width: 20%;">
                    <span>Profile</span>
                    </div>
                </a>
                </div>
                <div class="col-sm-2 mb-3">
                <a href="permit_pg.html" class="nav-link text-white mx-2">
                    <div class="d-flex flex-column align-items-center">
                    <img src="images/permit.png" alt="permit" style="width: 20%;">
                    <span>Permit</span>
                    </div>
                </a>
            </div>
        </div>
    </nav>
    <main class="body__main-container container" style="border-radius:9px; border: 1px solid #b7b7b7; width:65%;margin: 2rem 20%;">
        <div class="mb-lg-5 p-lg-5">
            <div class="img__logo-container">
                <img src="images/logo.png" alt="" class="logo img-responsive">
            </div>
            <div class="text-lg-center pb-3 pt-4">
                <p class="display-2 text-center welcome-text">WELCOME!</p>
                <p class="display-5 text-center">
                    <?php
                    $name ="Marella";
                    echo"$name";
                    ?>
                </p>
            </div>
            <div class=" row text-white d-flex justify-content-center mt-2 p-5 pb-0">
                <button type="submit" class="btn  btn-primary p-3 mb-3 m-5 btn__permit text-center text-white" id="btn-sub">
                    Apply for New Permit
                </button>
                <button type="button" class="btn btn-outline-success p-3 btn__permit-two" id="btn-draft">
                    Apply for Permit Renewal
                </button>
            </div>
        </div>
        <table class="table table-triped-columns">
                    <thead> 
                        <tr style="background-color: #B2DFDB">
                            <th scope="col" class="p-3">Type of Application</th>
                            <th scope="col" class="p-3 text-start">Date Issued</th>
                            <th scope="col" class="p-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chainsaw Registration Permit</td>
                            <td>23/06/23- 10:05</td>
                            <td class="row gap-4">
                                <button class="btn btn-success col" id="btn-edit" >Edit</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chainsaw Registration Permit</td>
                            <td>23/06/23- 10:05</td>
                            <td class="row gap-4">
                                <button class="btn btn-success col" id="btn-edit" >Edit</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chainsaw Registration Permit</td>
                            <td>23/06/23- 10:05</td>
                            <td class="row gap-4">
                                <button class="btn btn-success col" id="btn-edit" >Edit</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chainsaw Registration Permit</td>
                            <td>23/06/23- 10:05</td>
                            <td class="row gap-4">
                                <button class="btn btn-success col" id="btn-edit" >Edit</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
    </main>
    
</body>
</html>