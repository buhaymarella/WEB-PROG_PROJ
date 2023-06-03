<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Chainsaw Maintenance Page</title>
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
        <div class="container section-body pb-0 p-5 pt-1">
            <div class="section-container mb-3" >
            <table class="table table-triped-columns table-bordered border-success text-center">
                    <thead> 
                        <tr>
                            <div class="container sec__nav-container pt-0 pb-4" style="background-color: var(--primary-color); margin-bottom: -3%;">
                                    <h2 class="h2 text-white mt-4 mb-0 p-5 px-3 py-4">Chainsaw Store Maintenance</h2>
                            </div>
                        </tr>
                        <tr style="background-color: #B2DFDB; color: var(--primary-color);">
                            <th scope="col" class="p-3">Name of Store</th>
                            <th scope="col" class="p-3">Owner</th>
                            <th scope="col" class="p-3 text-center">Address</th>
                            <th scope="col" class="p-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chainsaw Store name</td>
                            <td>Owner Name</td>
                            <td>Street 1, Marinduque</td>
                            <td  class="text-center">
                                <button class="btn btn-success col" id="btn-edit" >Edit Store</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chainsaw Store name</td>
                            <td>Owner Name</td>
                            <td>Street 1, Marinduque</td>
                            <td colspan="2" class="text-center">
                                <button class="btn btn-success col" id="btn-edit" >Edit Store</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chainsaw Store name</td>
                            <td>Owner Name</td>
                            <td>Street 1, Marinduque</td>
                            <td colspan="2" class="text-center">
                                <button class="btn btn-success col" id="btn-edit" >Edit Store</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chainsaw Store name</td>
                            <td>Owner Name</td>
                            <td>Street 1, Marinduque</td>
                            <td colspan="2" class="text-center">
                                <button class="btn btn-success col" id="btn-edit" >Edit Store</button>
                                <button class="btn btn-danger col" id="btn-del">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button class="btn btn-success text-center mb-5 mt-0 ">+ Add Store</button>
        </div>
</body>
</html>