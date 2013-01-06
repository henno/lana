<h1>Rühmade nimekiri</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Rühma ID</th>
        <th>Rühma nimi</th>
    </tr>
    </thead>
    <tbody>

    <?foreach ($groups as $group): ?>

    <tr>
        <td><?=$group->id?></td>
        <td>
            <a href="<?=URL::base()?>groups/view/<?=$group->id?>">
                <?=$group->name?>
            </a>
        </td>
    </tr>

        <? endforeach?>

    </tbody>
</table>

<a href="<?=URL::base()?>groups/add">
    Lisa uus grupp
</a>