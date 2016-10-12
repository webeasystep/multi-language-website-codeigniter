<h2>News Table</h2>
<div class="alert alert-info">
    <strong><?= lang('Demo') ?></strong></div>
<div class="table-responsive">
<table class="table">
    <thead>
    <tr>
        <th><?= lang('ne_title') ?></th>
        <th><?= lang('ne_desc') ?></th>
        <th><?= lang('ne_img') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($news as $n) : ?>
    <tr>
        <td><a href="<?= base_url() ?>news/show_one/<?= $n['ne_id']; ?>"><?= $n['ne_title']; ?></a></td>
        <td><?= implode(' ', array_slice(explode(' ', $n['ne_desc']), 0, 15));; ?></td>
        <td><img src="<?php echo base_url(); ?>global/uploads/<?= $n['ne_img']; ?>"/>
        </td>
    </tr>
    </tbody>
    <?php endforeach ?>
</table>
</div>

