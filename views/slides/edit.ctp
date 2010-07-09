<?= $form->create('Slide',array('action'=>'edit')) ?>
    <?= $form->input('id',array('type'=>'hidden')) ?>
    <?= $form->input('study_id',array('type'=>'hidden')) ?>
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


<?= $form->end('Edit') ?>
