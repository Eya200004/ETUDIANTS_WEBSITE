<?php include("includes/header.php"); ?>

<section class="hero">
    <h1>Bienvenue sur la Plateforme Étudiants </h1>
    <p>Apprenez à votre rythme, pratiquez vos compétences et discutez avec notre chatbot intelligent.</p>
    <a href="pages/cours.php" class="button">Voir les cours</a>
    <a href="pages/exercice.php" class="button">Faire des exercices</a>
    <a href="pages/chatbot.py" class="button">Parler au Chatbot</a>
</section>

<section class="about">
    <h2>À propos de nous</h2>
    <p>Notre plateforme propose un environnement complet pour les étudiants : cours interactifs, exercices pratiques et un chatbot intelligent pour répondre à vos questions rapidement.</p>
</section>

<section class="courses-preview">
    <h2>Nos Cours 📚</h2>
    <div class="cards-container">
        <div class="card">
            <h3>Introduction à Python</h3>
            <p>Bases de Python pour la Data Science : variables, boucles, fonctions.</p>
        </div>
        <div class="card">
            <h3>Manipulation de données avec Pandas</h3>
            <p>Apprenez à nettoyer et analyser vos datasets avec Pandas.</p>
        </div>
        <div class="card">
            <h3>Visualisation avec Matplotlib</h3>
            <p>Créez des graphiques clairs et impactants pour vos données.</p>
        </div>
        <div class="card">
            <h3>Analyse de données avec Numpy</h3>
            <p>Utilisez Numpy pour le calcul scientifique et les tableaux multidimensionnels.</p>
        </div>
        <div class="card">
            <h3>Data Cleaning et Préparation</h3>
            <p>Techniques pour préparer vos données pour l’analyse.</p>
        </div>
        <div class="card">
            <h3>Introduction au Machine Learning</h3>
            <p>Concepts de base du ML et création d’un modèle simple.</p>
        </div>
    </div>
</section>


<section class="chatbot-section">
    <h2>Notre Chatbot 🤖</h2>
    <p>Posez vos questions et obtenez des réponses instantanées pour vous aider à apprendre plus efficacement.</p>
    <a href="pages/chatbot.py" class="button">Essayer le Chatbot</a>
</section>

<?php include("includes/footer.php"); ?>
