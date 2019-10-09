<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Adrian Trujillo Portfolio</title>
    
    <script src="scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
        
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();
        
                    // Store hash
                    var hash = this.hash;
        
                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
        
                // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: light red">
        <a class="navbar-brand" href="#home" style="color: white">Adrian Trujillo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="navbar-nav">
                <ul class="nav navbar-nav ml-auto mx-auto text-center" data-toggle="collapse">
                    <a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#home" style="color: white">Home</a>
                    <a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#about" style="color: white">About</a>
                    <a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#work" style="color: white">Work</a>
                    <a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#projects" style="color: white">Projects</a>
                    <a class="resume-button" href="docs/Trujillo-Resume.pdf" target="_blank"><button>Resume</button></a>
                </ul>
                
            </div>
        </div>
    </nav>

    <div id="home">
    </div>

<!-- 
    To Do List:
        add contact me form 
-->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/software.jpeg" alt="First slide">
                <div class="center">Software Engineer</div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/grad.jpg" alt="Second slide">
                <div class="center">First Generation College Graduate</div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/problem-solver.jpg" alt="Third slide">
                <div class="center">Problem Solver</div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- About -->
    <div class="row justify-content-center my-row" id="about" style="padding-top:60px">
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 my col">
            <div class="about-me">
                <h1 class="title">About me</h1>
                <div id="about-me-box">
                    <div id="about-me-desc">  
                        <span id="me">
                            <img id="photo" src="img/me.jpg"> 
                        </span>
                        <span id="about-me-text">
                            <p>  
                                My name is Adrian, a software developer that is fascinated by technology. 
                                I first gained an interest in coding when I took an elective class at a local community college. 
                                I instantly fell in love with the idea that coding is limited by the imagination.
                                With a Bachelor's degree in Computer Science and an Associate's degree in Mathetics education is the most important thing to me.
                            </p>
                        </span>
                                
                    </div>
                </div>
                
           </div>    
        </div>
    </div>
    

    <!-- Work -->
    <div class="row justify-content-center my-row" id="work" style="padding-top:50px">
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 my col">
            <div class="work">
                <h1 class="title">Work</h1>

                    <div class="jobs">
                        <div class="job-box">
                            <h3 id="job-title">Substitute Teacher</h3>
                            <p id="job-location">Monterey County</p>
                            <p id="job-duration">Jan 2019 - PRESENT</p>
                            <ul class="job-desc">
                                <li>
                                    Followed and taught lesson plans assigned by permanent teacher for students in high school. 
                                </li>
                                <li>
                                    Encouraged participation and provided individual instruction as necessary.
                                </li>
                                <li>
                                    Monitored class activities while maintaining a clean, safe and educational environment.
                                </li>
                            </ul>
                        </div>
                        <div class="job-box">
                            <h3 id="job-title">Teacher</h3>
                            <p id="job-location">Salinas High School</p>
                            <p id="job-duration">Summer 2019</p>
                            <ul class="job-desc">
                                <li>
                                    Implemented creative curricula utilizing cooperative and collaborative learning.
                                </li>
                                <li>
                                    In charge of ensuring a positive learning environment for students.
                                </li>
                            </ul>
                        </div>
                        <div class="job-box">
                            <h3 id="job-title">Academic Tutor</h3>
                            <p id="job-location">GEAR UP - CSU Monterey Bay</p>
                            <p id="job-duration">2016 - 2019</p>
                            <ul class="job-desc">
                                <li>
                                    Met with students one-on-one or in small groups to provide academic support and academic advising.
                                </li>
                                <li>
                                    Assisted students in improving study skills necessary for improving acamdeic perfermance.
                                </li>
                            </ul>
                        </div>
                    </div>


                    

            </div>
        </div>
    </div>

    <!-- Projects -->
    <div class="row justify-content-center my-row" id="projects" style="padding-top:50px">
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 my col">
            <div class="projects">
                <h1 class="title">Projects</h1>
                
                <div class="project-names" id="project1">
                    <p>
                        <h3 id="subtitle">Anomaly Detection for Dynamic Graphs <a href="https://github.com/spencer-ortega/DynamicGraph-AnomalyDetection" class="fa fa-github"></a></h3>
                    </p> 
                    <p class="website-desc">
                        Developed a Python module that ingested dynamic graph data while utilizing an algorithm to visualize anomalies with a network graph model.
                    </p> 
                </div>
                
                <div class="project-names" id="project2" style="padding-top: 30px;">
                    <p>
                        <h3 id="subtitle">Online Audio Editor <a href="https://github.com/ChristopherLeeWilliams/OnlineAudioEditor" class="fa fa-github"></a></h3>
                    </p>
                    <p class="website-desc">
                        An online audio editor that uses Python and Flask. Allows users to manipulate an uploaded audio file.
                    </p>
                </div>

                <div class="project-names" id="project3" style="padding-top: 30px;">
                    <p>
                        <h3 id="subtitle">ATWSN Invitational <a href="https://github.com/atrujillo4/atwsnInvitational" class="fa fa-github"></a> <a href="https://atwsninvitational.herokuapp.com" class="fa fa-external-link"></a></h3>
                    </p>
                    <p class="website-desc">
                        Players are able to signup for a local gaming tournament using a form. Player and team data is stored in a database using Firebase. Information from in-game store is retrieved and displayed implementing an API.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Still need to add scipt to form -->
    <!-- Contact Me Form -->
    <div class="contact-me-wrapper">
        <h2>Contact Me</h2>
        <div id="error-message">

        </div>
        <form id="contact-form" onsubmit="return validation()">
            <div class="input-field">
                <input type="text" placeholder="Name" id="name">
            </div>
            <div class="input-field">
                <input type="text" placeholder="Subject" id="subject">
            </div>
            <div class="input-field">
                <input type="email" placeholder="Email" id="email">
            </div>
            <div class="input-field">
                <textarea placeholder="message" id="message"></textarea>
            </div>
            
            <button id="button">submit</button>
            
        </form>
    </div>


</body>

<footer>
    <p>Adrian Trujillo, Copyright &copy; 2019</p>
    <a href="https://github.com/atrujillo4" class="fa fa-github"></a>
    <a href="https://www.linkedin.com/in/adrian-trujillo-31ab77160/" class="fa fa-linkedin-square"></a>
</footer>