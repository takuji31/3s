<h2>Study</h2>

<a href="/studies/add">追加</a>
<table>
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>date</th>
			<th>description</th>
			<th>created</th>
			<th>updated</th>
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
            <td><?= $text->truncate($study['description'],20,array('ending'=>'...')) ?></td>
            <td><?= $study['created'] ?></td>
            <td><?= $study['updated'] ?></td>
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
