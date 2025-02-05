<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Prezentācija</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .slide { display: none; padding: 50px; }
        .active { display: block; }
        button { margin-top: 20px; padding: 10px 20px; }
    </style>
</head>
<body>
    <div class="slide active">
        <h1>SQL – Strukturētā Datu Vaicājumu Valoda</h1>
        <p>SQL (Structured Query Language) ir valoda, kas tiek izmantota datu bāzu pārvaldībai.</p>
    </div>
    <div class="slide">
        <h2>Pamata SQL komandas</h2>
        <ul>
            <li><b>SELECT</b> – Datu izgūšana</li>
            <li><b>INSERT</b> – Jaunu ierakstu pievienošana</li>
            <li><b>UPDATE</b> – Esošu ierakstu atjaunināšana</li>
            <li><b>DELETE</b> – Ierakstu dzēšana</li>
        </ul>
    </div>
    <div class="slide">
        <h2>SQL Piemērs</h2>
        <pre>
SELECT * FROM klienti
WHERE vecums > 30;
        </pre>
    </div>
    <button onclick="nextSlide()">Nākamais</button>
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }
    </script>
</body>
</html>
