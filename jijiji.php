<?php
// mensaje de amor
$mensaje = "Eres el sol que ilumina mi vida.";
$nombre = "Mi Peque"; // Cambia esto por el nombre de tu novia
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ateti</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #ffcccc, #ff99cc); /* Degradado de color rosa */
            color: #333; /* Color del texto */
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            overflow: hidden; /* Evita barras de desplazamiento */
        }

        h1 {
            font-size: 4rem;
            animation: fadeIn 2s; /* Animación de entrada */
        }

        p {
            font-size: 1.5rem;
            margin: 20px;
            animation: slideIn 2s; /* Animación de entrada */
        }

        .corazon {
            font-size: 5rem;
            animation: beat 1s infinite; /* Animación de latido */
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes beat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
        }

        .btn {
            background-color: #ff4d94;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 15px 30px;
            font-size: 1.5rem;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 20px;
            animation: bounce 1.5s infinite; /* Animación de rebote */
        }

        .btn:hover {
            background-color: #ff1a75;
            transform: scale(1.1);
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>
    <h1>¡Hola, <?php echo $nombre; ?>!</h1>
    <p><?php echo $mensaje; ?></p>
    <div class="corazon">❤️</div>
    <button class="btn" onclick="alert('Tamooo, ' + '<?php echo $nombre; ?>!')">¡Dame un Beso Muakaaa!</button>
</body>
</html>
