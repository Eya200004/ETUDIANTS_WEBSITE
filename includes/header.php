<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Plateforme Étudiants</title>
<style>
* { margin:0; padding:0; box-sizing:border-box; }

body {
    font-family: 'Poppins', sans-serif;
    background-color: #fff;
    color: #333;
    line-height: 1.6;
}

/*Header*/
header {
    background: linear-gradient(90deg, #6C63FF, #8C7BFF);
    color: white;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    top:0;
    z-index: 100;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

header .logo { font-size: 1.8rem; font-weight: bold; }

nav ul { list-style: none; display: flex; gap: 30px; }
nav ul li a {
    color: white;
    font-weight: 500;
    padding: 5px 10px;
    border-radius: 5px;
    transition: 0.3s;
}
nav ul li a:hover { background: rgba(255,255,255,0.2); }

/*Boutton*/
.button {
    display: inline-block;
    margin: 10px 5px;
    padding: 12px 25px;
    background-color: #6C63FF;
    color: white;
    border-radius: 30px;
    font-weight: 500;
    transition: 0.3s;
}
.button:hover { background-color: #4E46B4; }

/*Sections*/
section {
    padding: 100px 20px;
    text-align: center;
    position: relative;
}

section h2 { color: #6C63FF; margin-bottom: 30px; font-size: 2.5rem; }

section p { max-width: 800px; margin: 0 auto 40px auto; font-size: 1.2rem; color: #555; }

/*HERO */
.hero {
    background: linear-gradient(135deg, #8C7BFF, #6C63FF);
    color: white;
    padding: 200px 20px;
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
}

.hero h1 { font-size: 3rem; margin-bottom: 20px; }
.hero p { font-size: 1.5rem; margin-bottom: 40px; }

.about {
    background: #fff;
}

.courses-preview {
    background: #F2F2FF;
}

.cards-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
}

.card {
    background: white;
    border-radius: 20px;
    padding: 25px;
    width: 300px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}
.card h3 { color: #6C63FF; margin-bottom: 15px; font-size: 1.3rem; }
.card p { font-size: 0.95rem; color: #555; }

.chatbot-section { background:#fff; }

/* footer */
footer {
    background: linear-gradient(90deg, #6C63FF, #8C7BFF);
    color: white;
    text-align: center;
    padding: 40px;
    font-size: 0.9rem;
}
</style>
</head>
<body>
<header>
    <div class="logo">🎓 Étudiants+</div>
    <nav>
        <ul>
            <li><a href="/index.php">Accueil</a></li>
            <li><a href="/pages/cours.php">Cours</a></li>
            <li><a href="/pages/exercice.php">Exercices</a></li>
            <li><a href="/pages/chatbot.py">Chatbot</a></li>
        </ul>
    </nav>
</header>
