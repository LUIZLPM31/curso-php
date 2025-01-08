<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineLoca - Perfil</title>
</head>
<body>
  <header>
    <div class="logo-container">
      <img src="imagem-logo.jpg.jpeg" alt="Logo da Empresa" class="logo">
    </div>
    <h1>CineLoca</h1>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="perfil.html">Perfil</a></li>
        <li><a href="favoritos.html">Favoritos</a></li>
      </ul>
    </nav>
  </header>

  <section class="user-profile">
    <h2>Bem-vindo ao seu Perfil</h2>

    <!-- Exibe as informações do perfil -->
    <div class="profile-info">
      <div class="profile-image">
        <img src="foto-perfil.jpg" alt="Foto do Usuário" id="profile-pic">
        <button id="edit-photo-btn">Alterar Foto</button>
      </div>
      <div class="profile-details">
        <h3 id="profile-name">Nome do Usuário</h3>
        <p id="profile-email">Email: usuario@cineloca.com</p>
        <p>Avaliações feitas: 5</p>
      </div>
    </div>

    <!-- Formulário de Edição (inicialmente escondido) -->
    <div id="edit-form" class="edit-form" style="display: none;">
      <h3>Editar Perfil</h3>
      <form id="profile-edit-form">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="Nome do Usuário" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="usuario@cineloca.com" required><br><br>

        <label for="photo">Foto de Perfil:</label>
        <input type="file" id="photo" name="photo" accept="image/*"><br><br>

        <button type="button" id="save-changes-btn">Salvar Alterações</button>
        <button type="button" id="cancel-edit-btn">Cancelar</button>
      </form>
    </div>

    <button id="edit-profile-btn">Editar Perfil</button>
  </section>

  <footer>
    <p>&copy; 2024 CineLoca</p>
  </footer>

  <script src="script.js"></script>

  <style>
   body {
  background-image: url("https://wallpapers.com/images/hd/ufo-pictures-1re5vol0pb5pmfch.webp");  
  font-family: Arial, sans-serif;
  background-color: #cc1515;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh; 
  flex-direction: column; 
}


header {
  background-image: url("https://wallpapers.com/images/hd/ufo-pictures-1re5vol0pb5pmfch.webp");    
  background-color: #0c0b0b;
  color: #fff;
  padding: 40px 20px;
  text-align: center;
  margin-bottom: 30px;
  width: 100%;
  box-sizing: border-box;
}


.logo-container {
  text-align: center;
  margin-top: 20px; 
}

.logo {
  max-width: 150px; 
  height: auto;
}


header h1 {
  font-size: 2.5rem;
  margin-top: 10px;
}


nav ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: center;
}

nav ul li {
  margin: 0 30px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  font-size: 1.2rem;
  padding: 10px 15px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

nav ul li a:hover {
  background-color: #0c0b0b;
}


section.user-profile {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  width: 80%;
  max-width: 800px;
  margin-bottom: 20px;
}


.profile-info {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
}


.profile-image {
  position: relative;
}

.profile-image img {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 15px;
}

.profile-details h3 {
  font-size: 1.5rem;
  margin-bottom: 10px;
}


.edit-form {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 500px; 
  margin-top: 20px;
  text-align: left;
}

.edit-form input[type="text"],
.edit-form input[type="email"],
.edit-form input[type="file"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button {
  background-color: #0c0b0b;
  color: #fff;
  border: none;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin: 10px;
}

button:hover {
  background-color: #444;
}


#cancel-edit-btn {
  background-color: #cc1515;
}

#cancel-edit-btn:hover {
  background-color: #a10f0f;
}


#edit-form {
  display: none;
}


footer {
  background-color: #0f0f0f;
  color: #fff;
  text-align: center;
  padding: 10px;
  position: relative;
  width: 100%;
  bottom: 0;
}


.movie-list .movies {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: center; 
}


.movie-card {
  background-color: #fff;
  border-radius: 8px;
  padding: 20px;
  text-align: center;
  width: 200px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin: 10px;
}


.movie-card img {
  width: 100%;
  border-radius: 8px;
}


.movie-rating {
  display: flex;
  justify-content: center;
  gap: 5px;
  font-size: 24px;
  cursor: pointer;
}

.movie-rating .star {
  color: #ccc; 
  transition: color 0.3s ease;
}


.movie-rating .star:hover,
.movie-rating .star.hover {
  color: #f39c12; 
}


.movie-rating .star.filled {
  color: #f39c12; 
}


.movie-card:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}

.favorite-btn {
  margin-top: 10px;
  padding: 10px 20px;
  background-color: #cc1515;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.favorite-btn:hover {
  background-color: #a40e0e;
}

#favorite-movies {
  list-style: none;
  padding: 0;
}

#favorite-movies li {
  background-color: #fff;
  padding: 10px;
  margin: 5px;
  border-radius: 5px;
} 
h2 {
    color:#fff;

} 
  </style>
</body>
</html>
