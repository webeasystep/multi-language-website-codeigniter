<div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="active"><a class="btn btn-primary" href="<?= base_url() ?>news/create">Add news/post</a></li>
            <li><a class="btn btn-success" href="<?= base_url() ?>news">News List</a></li>
        </ul>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-2 main">
        <h1 class="page-header">Edit news</h1>

        <form enctype="multipart/form-data" method="post" action="<?= current_url() ?>">
            <div class="form-group">
                <label for="lang" class="control-label">language</label>
                <select class="textBox sml rnd5" name="ne_lang">
                    <option value="en" <?php if ($news->ne_lang == "en") echo "selected='selected'";?> > English</option>
                    <option value="fr" <?php if ($news->ne_lang == "fr") echo "selected='selected'";?>  >French</option>
                    <option value="es" <?php if ($news->ne_lang == "es") echo "selected='selected'";?>  >Spanish</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ne_title"><?= lang('ne_title'); ?></label>
                <input id="ne_title"  class="form-control" type="text" name="ne_title" value="<?= set_value('ne_title',$news->ne_title) ?>" />
                <p class="text-red"><?= form_error('ne_title'); ?></p>
            </div>

            <div class="form-group">
                <label for="ne_desc"><?= lang('ne_desc'); ?></label>
                 <textarea  name="ne_desc" class="form-control" id="new_desc"
                    placeholder="Add Desc"><?= set_value('ne_desc', $news->ne_desc) ?></textarea>
                <p class="text-red"><?= form_error('ne_desc'); ?></p>
            </div>

            <div class="form-group">
                <input  id="file" class="form-control" type="file" name="files" />
                <p class="text-red"><?= form_error('files'); ?></p>
            </div>

            <p>
                <?php if ($news->ne_img != "" && file_exists(PUBPATH . "global/uploads/" . $news->ne_img)) { ?>
                    <img src="<?= base_url(); ?>global/uploads/<?= $news->ne_img; ?>" width="160" height="130" />
                <?php } else { ?>
                    <img src="<?= base_url(); ?>global/admin/images/noImage.jpg" width="160" height="130" />
                <?php } ?>
            </p>


            <div class="box-footer">
                <button type="submit" class="btn btn-primary">save</button>
            </div>


        </form>
    </div>
</div>

