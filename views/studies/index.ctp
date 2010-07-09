<h2>勉強会一覧</h2>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>名前</th>
			<th>作った人</th>
			<th>開催日時</th>
			<th>概要</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
    <tbody>
        <? foreach($studies as $data){
            $study = $data['Study'];
            $user = $data['User'];
        ?>
    	<tr>
            <td><?= $study['id'] ?></td>
            <td><?= $study['name'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $study['date'] ?></td>
            <td><?= $text->truncate($study['description'],20,array('ending'=>'...')) ?></td>
            <td><?= $html->link('表示','/slides/show/'.$study['rid'],array('class' => 'blank')) ?></td>
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
