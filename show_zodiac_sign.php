<?php include('layouts/header.php'); ?>

<?php

$data_nascimento = $_POST['data_nascimento'] ?? null;
$signos = simplexml_load_file("signos.xml");

$signo_encontrado = null;

if ($data_nascimento) {

    // transforma a data do usuário em timestamp (fixando ano)
    $data_ts = strtotime("2000-" . date("m-d", strtotime($data_nascimento)));

    foreach ($signos->signo as $signo) {

        list($diaInicio, $mesInicio) = explode("/", $signo->dataInicio);
        list($diaFim, $mesFim) = explode("/", $signo->dataFim);

        $inicio_ts = strtotime("2000-$mesInicio-$diaInicio");
        $fim_ts = strtotime("2000-$mesFim-$diaFim");

        if ($inicio_ts <= $fim_ts) {
            if ($data_ts >= $inicio_ts && $data_ts <= $fim_ts) {
                $signo_encontrado = $signo;
                break;
            }
        } else {
            // caso especial: atravessa o ano (Capricórnio)
            if ($data_ts >= $inicio_ts || $data_ts <= $fim_ts) {
                $signo_encontrado = $signo;
                break;
            }
        }
    }
}

?>

<body class="d-flex align-items-center justify-content-center">

<div class="container d-flex justify-content-center">
  <div class="card-custom result-box col-md-6">

    <?php if ($signo_encontrado): ?>

        <h1><?= $signo_encontrado->signoNome ?></h1>
        <p><?= $signo_encontrado->descricao ?></p>

    <?php else: ?>

        <p>Signo não encontrado.</p>

    <?php endif; ?>

    <a href="index.php" class="btn btn-secondary">Voltar</a>

  </div>
</div>

</body>