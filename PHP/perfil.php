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
        <li><a href="principal.php">Home</a></li>
        <li><a href="perfil.php">Perfil</a></li>
      </ul>
    </nav>
  </header>

  <section class="user-profile">
    <h2>Bem-vindo ao seu Perfil</h2>

    <!-- Exibe as informações do perfil -->
    <div class="profile-info">
      <div class="profile-image">
        <img src="foto-perfil.jpg" alt="Foto do Usuário" id="profile-pic">
            </div>
            <div class="profile-details">
        <h3 id="profile-name">Nome do Usuário</h3>
        <p id="profile-email">Email: usuario@cineloca.com</p>
       
    </div>

    <!-- Formulário de Edição (inicialmente escondido) -->
    <div id="edit-form" class="edit-form" style="display: none;">
      <h3>Editar Perfil</h3>
      <form id="profile-edit-form">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="" required><br><br>

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

  <script >
    document.getElementById('edit-profile-btn').addEventListener('click', function() {
  
  document.getElementById('edit-form').style.display = 'block';
  document.getElementById('edit-profile-btn').style.display = 'none';  
});

document.getElementById('cancel-edit-btn').addEventListener('click', function() {
  
  document.getElementById('edit-form').style.display = 'none';
  document.getElementById('edit-profile-btn').style.display = 'block';  
});
    
document.getElementById('save-changes-btn').addEventListener('click', function() {
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const photo = document.getElementById('photo').files[0];  

 
  document.getElementById('profile-name').textContent = name;
  document.getElementById('profile-email').textContent = 'Email: ' + email;

  
  if (photo) {
    const reader = new FileReader();
    reader.onload = function(e) {
      document.getElementById('profile-pic').src = e.target.result;
    };
    reader.readAsDataURL(photo);
  }

  
  document.getElementById('edit-form').style.display = 'none';
  document.getElementById('edit-profile-btn').style.display = 'block'; 
});


const Sequelize = require('sequelize')
const sequelize = new Sequelize('crud', 'root', '', {
  host: "localhost",
  dialect: "mysql"
});
  </script>

  <style>
   body {
  background-image: url("https://wallpapers.com/images/hd/ufo-pictures-1re5vol0pb5pmfch.webp");  
  font-family: Arial, sans-serif;
  background-color: #cc1515;
  margin: 0;
  padding: 10;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 50vh; 
  flex-direction: column; 
  size-adjust: auto;
}


header {
   
  background-color: rgb(0, 1, 1, 0.5);
  color: #fff;
  padding: 20px 20px;
  text-align: center;
  margin-bottom: 30px;
  width: 100%;
  box-sizing: border-box;
}


.logo-container {
  text-align: center;
  margin-top: 10px; 
}

.logo {
  max-width: 90px; 
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
  color: #fff;
}
.profile-details{
  color: #fff;
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
   background-color: rgb(0, 1, 1, 0.5);
  color: #fff;
  text-align: center;
  padding: 5px;
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
