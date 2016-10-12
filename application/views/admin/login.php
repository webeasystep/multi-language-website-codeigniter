<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?= $this->option->get("admin_panel_title"); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="كلمات البحث مفصولة بفاصلة" />
        <meta name="description" content="وصف مختصر للموقع" />
        <link rel="shortcut icon" href="<?= base_url(); ?>global/admin//images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" title="style" media="screen" href="<?= base_url(); ?>global/admin//css/style.css" />
        <link rel="stylesheet" type="text/css" title="style" media="screen" href="<?= base_url(); ?>global/admin//css/jquery.hoverscroll.css" />
        <link rel="stylesheet" type="text/css" title="style" media="screen" href="<?= base_url(); ?>global/admin//css/jquery.cleditor.css" />
        <!--[if IE]><link rel="stylesheet" type="text/css" media="screen" href="<?= base_url(); ?>global/admin//css/ie.css" /><![endif]-->
        <!--[if lte IE 7]>
            <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url(); ?>global/admin//css/ie7.css" />
            <script type="text/javascript">
                /*Load jQuery if not already loaded*/ if(typeof jQuery == 'undefined'){ document.write("<script type=\"text/javascript\"   src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js\"></"+"script>"); var __noconflict = true; }
                var IE6UPDATE_OPTIONS = {icons_path: "images/ie6update/"}
            </script>
            <script type="text/javascript" src="<?= base_url(); ?>global/admin//js/ie6update.js"></script>
        <![endif]-->

    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
        <script type="text/javascript" src="<?= base_url(); ?>global/admin//js/jquery.1.4.2.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>global/admin//js/clearinput.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>global/admin//js/jquery.easyTooltip.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>global/admin//js/jquery.tablesorter.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>global/admin//js/jquery.hoverscroll.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>global/admin//js/jquery.tabbed.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>global/admin//js/jquery-ui-1.8.18.blind.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>global/admin//js/jquery.cleditor.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>global/admin//js/cms.init.js"></script> <!-- All jquery plugins initialization & tweaks here -->
    </head>
    <body>
        <div id="loginPage">
            <img src="<?= base_url(); ?>global/site/images/logo.png" alt="" class="logo"/>
            <!-- Login Start -->
            <div class="login boxStyle">
                
                <form method="post" action="<?php echo base_url(); ?>admin/admin">
                    <fieldset class="form">
                        <legend>&nbsp;</legend>
                        <?= $this->template->flash_msg(); ?>

                        <?= validation_errors(); ?>                        
                        <p><input type="hidden" name="token" value="<?= $token ?>" id="token" /></p>
                        <input id="name" class="textBox rnd5 clear-input" name="username" value="اسم المستخدم" />
                        <input id="password" type="password" name="password" class="textBox rnd5 clear-input" value="كلمة المرور" />                        
                        <br />
                        <br />
                        <div class="center">                            
                            <input id="submit" type="submit" value="دخول" class="button inlineBlock sml rnd5 drkTextShadow" />
                        </div>
                    </fieldset>
                </form>
            </div><!-- Login End -->
        </div>
    </body>
</html>