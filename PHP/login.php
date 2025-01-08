<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineLoca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url(https://wallpapers.com/images/featured/movie-9pvmdtvz4cb0xl37.jpg);
        }
        .login-container {
            background: #000000;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .logo {
            width: 100px;
            margin-bottom: 20px;
        }
        h1 {
            margin-bottom: 20px;
            color: #f5f1f1;
        }
        input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 50%;
            padding: 10px;
            background-color: #ca1b1b;
            color: rgb(255, 251, 251);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
        }
        button:hover {
            background-color: #9b3a3a;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="imagem-logo.jpg.jpeg" alt="Logo" class="logo">
        <h1>CineLoca</h1>
        <form id="loginForm">
            <input type="text" id="username" placeholder="Usuário" required>
            <input type="password" id="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
    <script>
        const loginForm = document.getElementById('loginForm');

        loginForm.addEventListener('submit', (event) => {
            event.preventDefault(); 
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username === 'admin' && password === '12345') {
                alert('Login realizado com sucesso!');
                window.location.href = 'principal.php';
            } else {
                alert('Usuário ou senha inválidos.');
            }
        });
    </script>
</body>
</html>

