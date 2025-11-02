<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Plateforme Étudiants+</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #F9F7F1;
      color: #1F2937;
      line-height: 1.6;
    }

    header {
      background: #f1ede1ff;
      color: #5C4633;
      padding: 20px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      top: 0;
      z-index: 100;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      border-bottom: 3px solid #8C6D5C;

    }

    header .logo{
      font-size: 1.8rem;
      font-weight: bold;
      color: #A67C52;
    }

    nav ul{
      list-style: none;
      display: flex;
      gap: 30px;
    }

    nav ul li a{
      color: #5C4633;
      font-weight: 500;
      padding: 5px 10px;
      border-radius: 5px;
      transition: 0.3s;
    }

    nav ul li a:hover{
      background: #E9E2D0;
   
    }

    .button{
      display: inline-block;
      margin: 10px 5px;
      padding: 12px 25px;
      background-color: #8C6D5C;
      color: white;
      border-radius: 30px;
      font-weight: 500;
      transition: 0.3s;
    }

    .button:hover{
      background-color: #6E5345;
    }

  
    section {
      padding: 100px 20px;
      text-align: center;
      position: relative;
    }

    section h2 {
      color: #8C6D5C;
      margin-bottom: 30px;
      font-size: 2.5rem;
    }

    section p {
      max-width: 800px;
      margin: 0 auto 40px auto;
      font-size: 1.2rem;
      color: #5C4633;
    }

    .hero {
      background: linear-gradient(135deg, #E9E2D0, #DCC9A6);
      color: #5C4633;
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

    .hero-text h1{
      font-size: 3rem;
      margin-bottom: 50px;
      color: #8C6D5C;
    }
    .hero-text{ 
      flex: 1 1 500px;
     }

    .hero-text p{
      font-size: 1.3rem;
      margin-bottom: 30px;
      color: #5C4633;
      font-family: 'Raleway', sans-serif;
      font-weight: 400;
    }

    .button {
      display: inline-block;
      background: #8C6D5C;
      color: #fff;
      padding: 12px 25px;
      border-radius: 8px;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .button:hover {
      background: #6E5345;
      transform: translateY(-3px);
    }
    .hero-slider {
      position: relative;
      width: 400px;
      height: 400px;
      overflow: hidden;
      border-radius: 50%;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
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

      0%,
      30%,
      100% {
        opacity: 0;
      }

      5%,
      25% {
        opacity: 1;
      }
    }

    .hero-slider img:nth-child(1) {
      animation-delay: 0s;
    }

    .hero-slider img:nth-child(2) {
      animation-delay: 6s;
    }

    .hero-slider img:nth-child(3) {
      animation-delay: 12s;
    }

    .hero-slider img:nth-child(4) {
      animation-delay: 18s;
    }

    @media (max-width: 900px) {
      .hero-slider {
        width: 280px;
        height: 280px;
      }
    }


    .about{
      background: #F9F7F1;
    }

    .courses-preview{
      background: #F2F2EB;
    }

    .cards-container{
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 25px;
    }

    .card{
      background: #FFFFFF;
      border-radius: 20px;
      padding: 25px;
      width: 300px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover{
      transform: translateY(-10px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .card h3{
      color: #8C6D5C;
      margin-bottom: 15px;
      font-size: 1.3rem;
    }

    .card p{
      font-size: 0.95rem;
      color: #5C4633;
    }

    footer{
      background: #f1ede1ff;
      color: #5C4633;
      text-align: center;
      padding: 40px;
      font-size: 1rem;
      box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.05);
      border-top: 3px solid #8C6D5C;
    }
  </style>

</head>

<body>
  <header>
    <div class="logo">🎓 Étudiants+</div>
    <nav>
      <ul>
        <li><a href="/learning_website_project/index.php">Accueil</a></li>
        <li><a href="/learning_website_project/chatbot.php">Chatbot</a></li>

      </ul>
    </nav>

  </header>
</body>