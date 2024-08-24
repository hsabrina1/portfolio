<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Sabrina Hadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Header -->
    <header>
        <?php include '_header.php'; ?>
    </header>

    <!-- Image de fond -->
    <section>
        <img src="./Assets/Images/imagedefond.png" alt="Image de fond" class="img-fluid w-100">
        <div class="container text-center">
            <h1 class="display-4 mt-4">Sabrina HADI</h1>
            <p> Développeur web </p>
        </div>
    </section>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Sabrina Hadi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">A propos de moi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>A propos de moi</h2>
                    <p class="lead">I am a passionate web developer with experience in building and maintaining responsive websites. My expertise is in HTML, CSS, JavaScript, and PHP.</p>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/profile.jpg" alt="Sabrina Hadi" class="img-fluid rounded-circle">
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Mes compétences</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="skill">
                        <i class="bi bi-code-slash fs-1"></i>
                        <h3>HTML & CSS</h3>
                        <p>Expert in crafting beautiful and responsive web pages.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill">
                        <i class="bi bi-file-code fs-1"></i>
                        <h3>JavaScript</h3>
                        <p>Proficient in adding interactivity to websites with JS.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill">
                        <i class="bi bi-server fs-1"></i>
                        <h3>PHP & MySQL</h3>
                        <p>Experience in backend development and database management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="text-center">Mes Projets</h2>
            <div class="row">
                <!-- Project 1 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="assets/images/project1.jpg" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Project One</h5>
                            <p class="card-text">A description of the project goes here. Highlight key features or technologies used.</p>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="assets/images/project2.jpg" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Project Two</h5>
                            <p class="card-text">A description of the project goes here. Highlight key features or technologies used.</p>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="assets/images/project3.jpg" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Project Three</h5>
                            <p class="card-text">A description of the project goes here. Highlight key features or technologies used.</p>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Contact Moi</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Envoi du Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Sabrina Hadi. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>










