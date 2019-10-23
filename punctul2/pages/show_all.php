<?php
    if(isset($_GET['remove'])){
        $myArr->remove($_GET['remove'])
    }
 ?>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Numar</th>
        <td>Vizuslizeaza Singur</td>
        <td>Sterge</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($myArr->show_all() as $id => $number) { ?>
    <tr>
        <th scope="row"><?=$number?></th>
        <td><a href="?page=show_single&id=<?=$id?>">Vezi</a></td>
        <td><a href="?page=show_all&remove=<?=$id?>">Sterge</a></td>
    </tr>
    <? } ?>
    </tbody>
</table>