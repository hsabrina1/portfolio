<!DOCTYPE html>
<html lang="fr">

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
    <!-- <header> -->
        <!-- <?php include '_header.php'; ?> -->
    <!-- </header> -->

    <!-- Image de fond -->
    <section>
        <img src="./Assets/Images/imagedefond.jpg" alt="Image de fond" class="img-fluid w-100">
        <div class="container text-center">
            <h1 class="display-4 mt-4">Sabrina Hadi</h1>
            <p>Développeuse web</p>
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
                        <a class="nav-link active" href="#about">À propos de moi</a>
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

    <!-- Section À propos -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>À propos de moi</h2>
                    <p class="lead">Développeuse web passionnée, spécialisée dans la création de sites web réactifs et fonctionnels. J’ai une expérience solide en HTML, CSS, JavaScript et PHP, ce qui me permet de réaliser des projets complets et robustes.</p>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/profile.jpg" alt="Sabrina Hadi" class="img-fluid rounded-circle">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Compétences -->
    <section id="skills" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Mes compétences</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="skill">
                        <i class="bi bi-code-slash fs-1"></i>
                        <h3>HTML & CSS</h3>
                        <p>Création de pages web attractives et adaptées à tout type d’appareil.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill">
                        <i class="bi bi-file-code fs-1"></i>
                        <h3>JavaScript</h3>
                        <p>Ajout d’interactivité et dynamisme aux sites pour une meilleure expérience utilisateur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill">
                        <i class="bi bi-server fs-1"></i>
                        <h3>PHP & MySQL</h3>
                        <p>Développement backend et gestion de bases de données pour des sites fonctionnels et sécurisés.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projets -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="text-center">Mes projets</h2>
            <div class="row">
                <!-- Projet 1 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="assets/images/project1.jpg" class="card-img-top" alt="Projet 1">
                        <div class="card-body">
                            <h5 class="card-title">Projet Un</h5>
                            <p class="card-text">Ce projet met en avant une interface utilisateur réactive avec une gestion optimale des données côté serveur.</p>
                            <a href="#" class="btn btn-primary">Voir le projet</a>
                        </div>
                    </div>
                </div>
                <!-- Projet 2 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="assets/images/project2.jpg" class="card-img-top" alt="Projet 2">
                        <div class="card-body">
                            <h5 class="card-title">Projet Deux</h5>
                            <p class="card-text">Un site e-commerce complet avec des fonctionnalités de gestion de panier et de paiement sécurisé.</p>
                            <a href="#" class="btn btn-primary">Voir le projet</a>
                        </div>
                    </div>
                </div>
                <!-- Projet 3 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="assets/images/project3.jpg" class="card-img-top" alt="Projet 3">
                        <div class="card-body">
                            <h5 class="card-title">Projet Trois</h5>
                            <p class="card-text">Une application web dynamique permettant de gérer des événements en temps réel.</p>
                            <a href="#" class="btn btn-primary">Voir le projet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Contactez-moi</h2>
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
                        <button type="submit" class="btn btn-primary w-100">Envoyer le message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Sabrina Hadi. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
