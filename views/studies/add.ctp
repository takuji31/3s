<?= $form->create('Study') ?>
<table>
	<tr>
		<td>name</td>
        <td><?= $form->input('name') ?></td>
    </tr>
    <tr>
		<td>date</td>
        <td><?= $form->input('date') ?></td>
    </tr>
    <tr>
		<td>description</td>
        <td><?= $form->input('description') ?></td>
    </tr>
</table>
<?= $form->end('追加') ?>
