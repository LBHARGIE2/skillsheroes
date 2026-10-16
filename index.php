<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamDestinations</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <img src="assets/images/logo-dream-destinations.png" alt="DreamDestinations logo" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#Bestemmingen">Bestemmingen</a></li>
                <li><a href="#Aanbiedingen">Aanbiedingen</a></li>
                <li><a href="#over-ons">Over ons</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Ontdek de wereld met DreamDestinations</h1>
            <p>De mooiste bestemmingen wereldwijd. Voor iedere reiziger de perfecte reis.</p>
            <a href="#bestemmingen" class="bekijk">Bekijk bestemmingen</a>
        </div>
        

    </section>

    <main id="bestemmingen" class="grid-container">
        <!-- de kaartjes zijn geladen in app.js -->
    </main>


    <footer>
        <section class="about">
            <h2>DreamDestinations</h2>
            <p>De mooiste bestemmingen wereldwijd. Voor iedere reiziger de perfecte reis.</p>
        </section>
        <p>
            © <?php echo date("Y"); ?> DreamDestinations.
        </p>
    </footer>

    <script src="assets/js/app.js"></script>
</body>

</html>