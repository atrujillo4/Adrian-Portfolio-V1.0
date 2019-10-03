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
        <a class="navbar-brand" href="#home">Mr. A</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="navbar-nav">
                <ul class="nav navbar-nav ml-auto">
                    <a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#home">Home</a>
                    <a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#about">About</a>
                    <a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#work">Work</a>
                    <a class="nav-item nav-link" data-toggle="collapse" data-target=".navbar-collapse.show" href="#projects">Projects</a>
                </ul>
                
            </div>
        </div>
    </nav>

    <div id="home">
    </div>

    <!-- About -->
    <div class="row justify-content-center my-row" id="about" style="padding-top:70px">
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 my col">
            <div class="about-me">
                <h1 class="title">About me</h1>
                <div id="about-me-desc">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices orci a dolor aliquet sodales. Nulla id suscipit tortor. Sed porttitor velit quis velit viverra pellentesque. Aliquam interdum mi gravida augue interdum facilisis. Nunc non pharetra nibh. Cras euismod, augue id porta laoreet, risus nibh rutrum dui, a pharetra magna purus tincidunt mauris. Nunc cursus, dui sit amet vehicula dapibus, enim massa convallis risus, non scelerisque augue justo in nisl. Cras vitae tellus aliquam, egestas tortor a, porta metus. Praesent consequat nulla pharetra, euismod massa a, sodales turpis. Pellentesque rhoncus nec diam in congue. Nulla fermentum enim quis lacinia lacinia. Duis convallis massa nisl. Donec ut velit in eros iaculis dictum a nec est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc blandit, ligula at cursus faucibus, neque sapien maximus felis, nec euismod diam ligula in eros. Aliquam volutpat lectus a venenatis tincidunt.
                    </p> 
                    <p>
                        Pellentesque maximus erat ac metus molestie scelerisque. In dignissim, purus suscipit mattis accumsan, leo enim condimentum mauris, ac eleifend libero elit sed massa. Proin ut quam non sapien condimentum scelerisque sed a nisl. In dignissim velit nec ante sagittis suscipit. Pellentesque in turpis sed urna sollicitudin aliquam vitae ac odio. Aenean id finibus mi. Praesent a eleifend metus, vitae imperdiet magna. Quisque tristique lorem tincidunt, iaculis urna sit amet, tempor metus. Sed iaculis quis nisi quis hendrerit. Ut convallis tortor ut laoreet faucibus. Praesent commodo nulla risus, eu commodo ligula lacinia vitae. Proin fermentum cursus erat, a euismod neque dapibus vitae. Vestibulum vel fermentum mauris.
                    </p>
                </div>
           </div>    
        </div>
    </div>
    

    <!-- Work -->
    <div class="row justify-content-center my-row" id="work" style="padding-top:70px">
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 my col">
            <div class="work">
                <h1 class="title">Work</h1>

                    <div class="jobs">
                        <p>
                            <h3>Substitute Teacher</h3>
                            <ul>
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
                        </p>
                        <p>
                            <h3>Teacher</h3>
                            <ul>
                                <li>
                                    Implemented creative curricula utilizing cooperative and collaborative learning.
                                </li>
                                <li>
                                    In charge of ensuring a positive learning environment for students.
                                </li>
                                <li>
                                    watch movies
                                </li>
                            </ul>
                        </p>
                        <p>
                            <h3>Academic Tutor</h3>
                            <ul>
                                <li>
                                    Meet with students one-on-one or in small groups to provide academic support and academic advising.
                                </li>
                                <li>
                                    Assist students in improving study skills necessary for improving acamdeic perfermance.
                                </li>
                            </ul>
                        </p>
                    </div>


                    

            </div>
        </div>
    </div>

    <!-- Projects -->
    <div class="row justify-content-center my-row" id="projects" style="padding-top:70px">
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


</body>

<footer>
    <p>Adrian Trujillo, Copyright &copy; 2019</p>
</footer>