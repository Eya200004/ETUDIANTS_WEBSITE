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
    color: black;
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
  padding: 150px 40px;
  clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
  display: flex;
  justify-content: center;
  align-items: center;
}

.hero-content {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  width: 100%;
  gap: 40px;
}

.hero-text {
  flex: 1 1 500px;
}

.hero-text h1 {
  font-size: 3rem;
  margin-bottom: 50px;
  margin-right: 30px;
}

.hero-text p {
  font-size: 1.3rem;
  margin-bottom: 30px;
  color: #585758ff; 
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
}

.hero-buttons {
 justify-content: center;
}

.button {
  display: inline-block;
  background: white;
  color: #6C63FF;
  padding: 12px 25px;
  border-radius: 8px;
  font-weight: bold;
  transition: all 0.3s ease;
}

.button:hover {
  background: #f5f3ff;
  transform: translateY(-3px);
}


.hero-slider {
  position: relative;
  width: 400px;
  height: 400px;
  overflow: hidden;
  border-radius: 50%;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.hero-slider img {
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  top: 0;
  left: 0;
  opacity: 0;
  animation: fade 24s infinite ease-in-out;
}

@keyframes fade {
  0% { opacity: 0; }
  5% { opacity: 1; }   
  25% { opacity: 1; }  
  30% { opacity: 0; }  
  100% { opacity: 0; } 
}


.hero-slider img:nth-child(1) { animation-delay: 0s; }
.hero-slider img:nth-child(2) { animation-delay: 6s; }
.hero-slider img:nth-child(3) { animation-delay: 12s; }
.hero-slider img:nth-child(4) { animation-delay: 18s; }

@media (max-width: 900px) {
  .hero-slider {
    width: 280px;
    height: 280px;
  }
}


/* about */
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
            <li><a href="index.php">Accueil</a></li>
            <li><a href="pages/cours.php">Cours</a></li>
            <li><a href="pages/exercice.php">Exercices</a></li>
            <li><a href="pages/chatbot.py">Chatbot</a></li>
        </ul>
    </nav>
</header>
</body>
