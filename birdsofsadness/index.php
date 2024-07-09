<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Owner Graal</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/x-icon" href="./img/logo.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;700&display=swap" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <style>
        .modal-content {
            background-color: black;
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.445);
            border: 1px solid white;
        }

        span {
            color: purple;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.445);
            font-weight: 600;
            font-style: italic;
        }

        .card {
            background: none;
        }

        * {
            font-family: "Kanit", sans-serif;
            font-weight: 300;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: black;
        }

        h1 {
            font-size: 46px;
        }

        a {
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            /* Bold for headers */
            color: white;
            text-decoration: none;
        }

        #button {
            border: 1px solid whitesmoke;
            color: white;
            transition: transform 0.3s;
            border-radius: 20px;
        }

        #button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(91, 4, 131, 0.205);
            background-color: rgba(79, 8, 107, 0.336);
        }

        #top-header {
            background-image:
                url(img/bg.jpg);
            background-size: cover;
            background-position: center;
            height: 120vh;
        }

        #social-links {
            background: none;
            border: 1px solid white;
            border-radius: 5px;
            padding: 20px;
            transition: transform 0.3s;
        }

        #social-links:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(79, 8, 107, 0.336);
            text-shadow: 0 4px 8px rgba(255, 255, 255, 0.336);
            background-color: rgba(79, 8, 107, 0.336);
        }

        #social-links i {
            font-size: x-large;
        }

        #service-card {
            background: none;
           border: none;
            height: 100%;
            padding: 20px;
            
        }

        .carousel-inner {
            height: 100%;
            /* Set your desired height here */
            border-radius: 5px;
        }

        .carousel-inner img {
            height: 300px;
            width: auto;
            object-fit: cover;
        }

        nav {
            background: none;
            margin-bottom: -10%;
        }

        #service-header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.377),
                    rgba(0, 0, 0, 0.438)), url(img/bg2.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
        }
        #front-img{
            width: 60%;
        }

        @media (min-width: 320px) and (max-width: 767px) {
            p {
                font-size: small;
            }

            h1 {
                font-size: 36px;
            }

            h2 {
                font-size: 30px;
            }

            #front-img {
                width: 48%;
            }

            #top-header {
                background-image:
                    url(img/mobilebg.jpg);
                background-size: cover;
                height: 90vh;
                margin-bottom: -20%;
            }

            .navbar {
                background: black;
                margin-bottom: -23%;
                border-bottom: 2px solid purple;
                box-shadow: 0 4px 12px rgba(84, 14, 112, 0.438);
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                position: sticky;
               
                top: 0;
                width: 100%;
                
                z-index: 1000;
            }

            #service-header {
                background-image: linear-gradient(rgba(0, 0, 0, 0.377),
                        rgba(0, 0, 0, 0.438)), url(img/mobilebg2.jpg);
                background-position: center;
                background-size: cover;
                height: 100vh;
                margin-bottom: 60%;
            }


        }

        @media (min-width: 768px) and (max-width: 990px) {
            .navbar {
                background: black;
               width: 100%;
                border-bottom: 2px solid purple;
                box-shadow: 0 4px 12px rgba(84, 14, 112, 0.438);
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                position: fixed;
                top: 0;
                z-index: 1000;
            }
            #service-header {
                
                margin-bottom: 5%;
            }
        }
    </style>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-between" >
        <a class="navbar-brand" href="#"><img src="img/logo.png"  width="40" alt="" /><b><i>Birds Of Sadness</i></b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#top-header">Nav1<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#about">Nav2<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#service-header">Nav3 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="btn " id="button" href="#contactus">Join Us! <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    

    <div class="container-fluid" id="top-header">
        <br /><br /><br />
        <br /><br /><br />
        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-light" style="margin-top: 20%">
                        WELCOME TO <span>BLADE OF SADNESS</span>
                    </h1>
                    <h2 class="text-light">Founder: Sho & Chow </h2>

                </div>
                <div class="col-md-6">
                    <div class="card border-0" style="background: none">
                        <center>
                            <img src="img/logo.png" id="front-img" class="border-0" width="75%" height="100%"  alt="Logo" />
                            
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />

    <div class="container mt-5 mb-3 py-5" id="about">
        <h2 class="text-light"><u>Heading Title</u></h2>
        <p></p>
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card border-0 text-center" style="background: none">
                    <img src="img/about.jpg" class="card-img" width="80%"/>
                </div>
            </div>
            <div class="col-md-6 mt-3 mb-3">
                <h3 class="text-light">Blade OF Sadness</h3>
                <p class="text-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum maxime vel, ducimus temporibus accusamus, animi, reprehenderit eveniet molestiae nemo aliquid quas dolor placeat ipsa ut blanditiis vero! Mollitia, perferendis vel.
                </p>
                <br>
                <p class="text-light">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, unde. Consectetur, debitis impedit quia iste eveniet harum saepe numquam perferendis quos ad labore ex similique consequatur iusto officiis sunt? Amet!
                </p>

            </div>
        </div>
    </div>
    <br />
    <br>

    <div class="container-fluid py-5" id="service-header">
        <div class="container mt-3 mb-3">
            <h2 class="text-light"><u>Heading Title</u></h2>
            <p></p>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="card" id="service-card">
                        <h3 class="text-light">Title</h3>
                        <p class="text-light">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis numquam dolore officia incidunt cupiditate, iure veniam consequuntur optio recusandae maiores ullam aperiam placeat voluptate ipsum fugit modi fuga labore neque!
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card" id="service-card">
                        <h3 class="text-light">Title</h3>
                        <p class="text-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore hic harum tempora, perspiciatis magni quisquam aliquid doloribus laboriosam saepe enim vel nisi id repellat blanditiis neque sapiente fugit eum facere.
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="text-light mt-5"><u>Heading Title</u></h2>
            <p class="text-light"></p>
            <div class="row">
                <div class="col-md-4 mt-2 text-center">
                    <div class="card p-3" id="social-links" data-toggle="modal" data-target="#personalLayout">
                        <i class="fas fa-users d-block text-light fa-3x"></i>
                        <p class="text-light mt-2">Members</p>
                    </div>
                </div>
                <div class="col-md-4 mt-2 text-center">
                    <div class="card  p-3" id="social-links" data-toggle="modal" data-target="#guildLayout">
                        <i class="fas fa-flag d-block text-light fa-3x"></i>
                        <p class="text-light mt-2">Events</p>
                    </div>
                </div>

                <div class="col-md-4 mt-2 text-center">
                    <div class="card  p-3" id="social-links" data-toggle="modal" data-target="#othersLayout">
                        <i class="fas fa-list d-block text-light fa-3x"></i>
                        <p class="text-light mt-2">Others</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="conatiner mt-3 mb-3">
        <h2 class="text-center text-light">NOTE:</h2>
        <p class="text-light text-center">
            This website serves for gaming-related purposes only.
        </p>
        <p class="text-center text-light">
            We are actively recruiting new members for our guild. Join us to be part of an exciting and dynamic community.
        </p>
        
    </div>
    <br />

    <div class="container-fluid">
        <footer class="text-white mt-5 py-5" id="contactus">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-4">
                        <h5>About Me</h5>

                        <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde accusamus commodi suscipit minus. In mollitia consequuntur eligendi amet? Minus quam quis blanditiis eum optio facilis corrupti eveniet delectus recusandae impedit!</p>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <center><img src="img/logo2.jpg" width="60%" /></center>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Contact</h5>
                        <p>
                            <strong>Email:</strong> <br />
                            <strong>IGN:</strong> Owner
                        </p>
                        <div>
                            <a href="#" class="text-white mr-3" data-toggle="modal" data-target="#socialModal"><i class="fab fa-facebook-f" data></i></a>
                            <a href="#" class="text-white mr-3" data-toggle="modal" data-target="#socialModal"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white mr-3" data-toggle="modal" data-target="#socialModal"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white" data-toggle="modal" data-target="#socialModal"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2">
                <div class="container text-center">
                    <small>&copy; 2024 Owner Graal. All rights reserved.</small>
                </div>
            </div>
        </footer>
    </div>


    <div class="modal fade" id="guildModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-light" id="exampleModalLabel">
                        Guild
                    </h5>
                </div>
                <div class="modal-body text-light text-center">Not member of a guild.s</div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn" id="button" style="border: 1px solid rgb(255, 255, 255); color: white" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!---LAYOPUTs-->
    <div class="modal fade" id="guildLayout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-light" id="exampleModalLabel">
                        Guild
                    </h5>
                </div>
                <div class="modal-body text-light text-center">Not Available</div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn" id="button" style="border: 1px solid rgb(255, 255, 255); color: white" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="personalLayout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-light" id="exampleModalLabel">
                        Personal
                    </h5>
                </div>
                <div class="modal-body text-light text-center">Not Available</div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn" id="button" style="border: 1px solid rgb(255, 255, 255); color: white" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="othersLayout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-light" id="exampleModalLabel">
                        Others
                    </h5>
                </div>
                <div class="modal-body text-light text-center">Base on customer</div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn" id="button" style="border: 1px solid rgb(255, 255, 255); color: white" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="socialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 1px solid white;">
                    <h5 class="modal-title text-light" id="exampleModalLabel">
                        Social Media Links
                    </h5>
                </div>
                <div class="modal-body text-light d-block text-center">
                    <h5>LinkedIn <i class="fab fa-linkedin"></i></h5>
                    <a href="#" class="nav-link">NO LINK PROVIDED</a>
                    <hr />
                    <h5>Twitter | X <i class="fab fa-twitter"></i></h5>
                    <a href="#" class="nav-link">NO LINK PROVIDED</a>
                    <hr />
                    <h5>Instagram <i class="fab fa-instagram"></i></h5>
                    <a href="#" class="nav-link">NO LINK PROVIDED</a>
                    <hr />
                    <h5>Facebook <i class="fab fa-facebook"></i></h5>
                    <a href="#" class="nav-link">NO LINK PROVIDED</a>

                </div>

                <div class="modal-footer border-0">
                    <button type="button" class="btn" id="button" style="border: 1px solid rgb(255, 255, 255); color: white" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!---->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>