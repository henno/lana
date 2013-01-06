<h2><?=$group->name?></h2>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Kood</th>
        <th>Nimi</th>
    </tr>
    </thead>
    <tbody>

    <?foreach ($group->members->find_all() as $user): ?>

    <tr>
        <td><?=$user->id?></td>
        <td>
            <?=$user->name?>
        </td>
    </tr>

        <? endforeach?>

    </tbody>
</table>