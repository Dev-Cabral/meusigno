<?php include('layouts/header.php'); ?>

<div class="container mt-5">
    <h1 style="color: black;">Qual é o seu signo?</h1>

    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
        <div class="mb-5">
            <label for="data_nascimento" class="form-label">Informe sua data de nascimento</label> <br>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <div class="text-center">
    <button type="submit" class="btn" style="background-color:rgb(255, 0, 157); color: white; border-radius: 25px; mt-5">Ver meu signo</button>
</div>

    </form>
</div>

<?php include('layouts/footer.php'); ?>