<?php if ($flash_msg = $this->session->flashdata('notice_msg')) { ?>    
    <div class="form"><p class="notice attention rnd3"><a href="javascript:void(0)" class="close"></a><b><?= $flash_msg ?></b></p></div>
<?php } ?>
<?php if ($flash_msg = $this->session->flashdata('success_msg')) { ?>
    <div class="form"><p class="notice succeed rnd3"><a href="javascript:void(0)" class="close"></a><b><?= $flash_msg ?></b></p></div>    
<?php } ?>
<?php if ($flash_msg = $this->session->flashdata('error_msg')) { ?>    
    <div class="form"><p class="notice error rnd3"><a href="javascript:void(0)" class="close"></a><b><?= $flash_msg ?></b></p></div>
<?php } ?>
<?php if ($flash_msg = $this->session->flashdata('attention_msg')) { ?>    
    <p class="block boxStyle notice attention"><a href="javascript:void(0)" class="close"></a><b>تنبيه!</b><?= $flash_msg ?><p>
<?php } ?>
<?php if ($flash_msg = $this->session->flashdata('info_msg')) { ?>
    <div class="form"><p class="notice information rnd3"><a href="javascript:void(0)" class="close"></a><b><?= $flash_msg ?></b></p></div>
<?php } ?>
<?php if ($flash_msg = $this->session->flashdata('site_msg')) { ?>
    <div class="success" style="margin:auto;"><?= $flash_msg ?></div>
<?php } ?>

