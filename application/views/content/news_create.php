<div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="active"><a class="btn btn-primary" href="<?= base_url() ?>news/create">Add news/post</a></li>
            <li><a class="btn btn-success" href="<?= base_url() ?>news">News list</a></li>
        </ul>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-2 main">
        <h1 class="page-header">Add File</h1>

        <form enctype="multipart/form-data" method="post" action="<?= current_url() ?>">

            <div class="form-group">
                <label for="lang" class="control-label">language</label>
                <select class="textBox sml rnd5" name="ne_lang">
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="es">Spanish</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-control-label" for="ne_desc"><?= lang('ne_title') ?></label>
                <input id="ne_title"  class="form-control" type="text" name="ne_title" value="<?= set_value('ne_title') ?>" />
                <p class="text-red"><?= form_error('ne_title'); ?></p>
            </div>

            <div class="form-group">
                <label class="form-control-label" for="ne_desc"><?= lang('ne_desc') ?></label>
                 <textarea  name="ne_desc" class="form-control" id="new_desc"><?= set_value('ne_desc') ?> </textarea>
                <p class="text-red"><?= form_error('ne_desc'); ?></p>
            </div>

            <div class="form-group">
                <input  id="file" class="form-control" type="file" name="files"  />
                <p class="text-red"><?= form_error('files'); ?></p>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">save</button>
            </div>


        </form>
    </div>
</div>


