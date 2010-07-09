<h2>Study</h2>

<?= $this->Session->flash() ?>

<a href="/studies/add">追加</a>
<table>
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>date</th>
			<th>created</th>
			<th>updated</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
    <tbody>
        <? foreach($studies as $data){
            $study = $data['Study'];
        ?>
    	<tr>
            <td><?= $study['id'] ?></td>
            <td><?= $html->link($study['name'],'/studies/show/'.$study['rid']) ?></td>
            <td><?= $study['date'] ?></td>
            <td><?= $study['created'] ?></td>
            <td><?= $study['updated'] ?></td>
            <td>
                <?= $html->link('編集','/studies/edit/'.$study['rid']) ?>
                <?= $html->link('削除','/studies/delete/'.$study['rid'],array(),'本当に削除しちゃってもいいですか…？') ?>
            </td>
		</tr>
        <? }
            if(!count($studies)){
        ?>
        <tr>
        	<td colspan="6">No Study</td>
        </tr>
        <? } ?>
    </tbody>
</table>
