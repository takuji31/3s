<h2>ログイン</h2>

<?= $form->create('User') ?>
<table>
	<tr>
		<td><?= $form->input('username') ?></td>
	</tr>
	<tr>
		<td><?= $form->input('password') ?></td>
	</tr>
	<tr>
		<td><?= $form->submit('ログイン') ?></td>
	</tr>
</table>
<?= $form->end() ?>
