<?php
    if(isset($_POST['number'])) {
        if (!isset($_SESSION['numbers'])) {
            $_SESSION['numbers'] = array();
        }
        array_push($_SESSION['numbers'], $_POST['number']);
    }
?>
<form>
    <div class="form-group" method="POST">
        <label for="exampleInputEmail1">ENumar</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introdu numar">
    </div>


    <button type="submit" class="btn btn-primary">Adauga Numar</button>
</form>
