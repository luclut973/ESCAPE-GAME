<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape the Matrix</title>
    <style>
        body {
            background-color: black;
            color: #00ff00;
            font-family: 'Courier New', monospace;
            text-align: center;
            overflow: hidden;
        }
        .matrix {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: black;
            z-index: -1;
        }
        .glitch {
            font-size: 60px;
            font-weight: bold;
            text-transform: uppercase;
            animation: glitch 0.8s infinite;
        }
        @keyframes glitch {
            0% { text-shadow: 4px 4px red; }
            25% { text-shadow: -4px -4px cyan; }
            50% { text-shadow: 4px -4px lime; }
            75% { text-shadow: -4px 4px yellow; }
            100% { text-shadow: 4px 4px red; }
        }
        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 80%;
            margin: 50px auto;
        }
        .section {
            padding: 50px;
            background: rgba(0, 0, 0, 0.9);
            border: 3px solid #00ff00;
            box-shadow: 0 0 20px #00ff00;
            font-size: 22px;
            text-align: center;
            transition: transform 0.3s;
        }
        .section:hover {
            transform: scale(1.1);
            box-shadow: 0 0 30px red;
        }
        .links {
            margin-top: 50px;
        }
        .links a {
            color: #00ff00;
            text-decoration: none;
            font-size: 24px;
            display: inline-block;
            margin: 20px;
            padding: 10px 20px;
            border: 2px solid #00ff00;
            transition: all 0.3s;
        }
        .links a:hover {
            color: red;
            background: #00ff00;
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <canvas class="matrix"></canvas>
    <h1 class="glitch">Escape the Matrix</h1>
    <div class="container">
        <div class="section">Step 1: Trouver l'Image Pour Valider le challenge_1.</div>
        <div class="section">Step 2: Code secrets.</div>
        <div class="section">Step 3: Marche Froide.</div>
        <div class="section">Step 4: Enter the final key and escape.</div>
        <div class="section">Step 5: submerger dans le monde reélle!!.</div>
    </div>
    <div class="links">
        <a href="challenge1.html">Image Cachée</a>
        <a href="challenge2.html">Code secrets</a>
        <a href="challenge3.html">Marche Froide</a>
        <a href="challenge5.html">Google </a>
        <a href="kali.php">Terminal</a>

    </div>

    <script>
        const canvas = document.querySelector('.matrix');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        const letters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        const fontSize = 18;
        const columns = canvas.width / fontSize;
        const drops = Array(Math.floor(columns)).fill(1);

        function drawMatrix() {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.1)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = '#00ff00';
            ctx.font = `${fontSize}px monospace`;
            for (let i = 0; i < drops.length; i++) {
                const text = letters[Math.floor(Math.random() * letters.length)];
                ctx.fillText(text, i * fontSize, drops[i] * fontSize);
                if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }
        setInterval(drawMatrix, 200);
    </script>
</body>
</html>
