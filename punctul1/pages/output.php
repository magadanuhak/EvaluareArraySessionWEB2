<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Numar</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $numbers = $_SESSION['numbers'];
        $numbers = rsort($numbers);

    foreach($numbers as $number) { ?>
        <tr>
            <th scope="row"><?=$number?></th>
        </tr>
    <? } ?>
    </tbody>
</table>