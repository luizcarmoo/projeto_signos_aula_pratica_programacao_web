<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php include('./layouts/header.php'); ?>
  
  <title>Projeto aula prática Programação Web - Luiz Carmo | 37687121</title>
</head>

<body>
<canvas id="stars"></canvas>
  <div class="card-custom">
    <div class="zodiac-image">
      <img src="./assets/images/zodiac.png" alt="Zodíaco">
    </div>
    <h1>Descubra seu signo</h1>
    <p class="subtitle">
      Informe sua data de nascimento e descubra seu signo do zodíaco.
    </p>
    <form method="POST" action="show_zodiac_sign.php">
      
      <div style="margin-bottom: 15px; text-align: left;">
        <label class="mt-14">Data de nascimento</label>
        <input type="date" name="data_nascimento" required>
      </div>

      <button type="submit" class="btn btn-primary">
        Descobrir signo
      </button>

    </form>

  </div>
<script>
const canvas = document.getElementById("stars");
const ctx = canvas.getContext("2d");

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}

resizeCanvas();

let stars = [];

function initStars() {
    stars = [];
    for (let i = 0; i < 120; i++) {
        stars.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            radius: Math.random() * 1.5,
            speed: Math.random() * 0.3
        });
    }
}

initStars();

function drawStars() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    ctx.fillStyle = "rgba(255,255,255,0.8)";
    ctx.shadowBlur = 8;
    ctx.shadowColor = "white";

    stars.forEach(star => {
        ctx.beginPath();
        ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
        ctx.fill();

        star.y += star.speed;

        if (star.y > canvas.height) {
            star.y = 0;
            star.x = Math.random() * canvas.width;
        }
    });

    requestAnimationFrame(drawStars);
}

drawStars();

window.addEventListener("resize", () => {
    resizeCanvas();
    initStars();
});
</script>
</body>
</html>