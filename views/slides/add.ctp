<?= $form->create('Slide') ?>
    <?= $form->hidden('study_id',array('value'=>$study_id)); ?>
<table>
    <tr>
        <td>Title</td>
        <td><?= $form->input('title') ?></td>
    </tr>
    <tr>
        <td>Body</td>
        <td><?= $form->input('body') ?></td>
    </tr>
    <tr>
        <td>Page</td>
        <td><?= $form->input('page') ?></td>
    </tr>
</table>


<?= $form->end('Add') ?>
