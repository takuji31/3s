<h2><?= $study['name'] ?>(<?= $study['date'] ?>)</h2>
<h3><?= $study['description'] ?></h3>

Slides
<br />
<?= $html->link('Add','/slides/add/'.$study['rid']) ?><br />
<?= $html->link('Start','/slides/show/'.$study['rid'],array('class'=>'blank')) ?>


<table>
    <tr>
        <th>page</th>
        <th>title</th>
        <th>body</th>
        <th>&nbsp;</th>
    </tr>
    <? foreach ($slides as $slide){ ?>
    <tr>
        <td><?= $slide['page'] ?> </td>
        <td><?= $slide['title'] ?> </td>
        <td><?= strip_tags($text->truncate($slide['body'],40,array('ending'=>'...'))) ?> </td>
        <td><?= $html->link('Edit','/slides/edit/'.$slide['rid']) ?> </td>
    </tr>
    <? }
        if(!count($slides)){
    ?>
        <td colspan="4">No Slide</td>
    <? } ?>
</table
