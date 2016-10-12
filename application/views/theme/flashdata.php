<?php if($flash_msg = $this->session->flashdata('notice_msg')): ?>
<p class='notice information'><?=$flash_msg?></p>
<?php elseif($flash_msg = $this->session->flashdata('success_msg')): ?>
<p class='notice succeed'><?=$flash_msg?></p>
<?php elseif($flash_msg = $this->session->flashdata('error_msg')): ?>
<p class="notice error"><?=$flash_msg?></p>
<?php elseif($flash_msg = $this->session->flashdata('attention_msg')): ?>
<p class="notice attention"><?=$flash_msg?></p>
<?php elseif($flash_msg = $this->session->flashdata('site_msg')): ?>
<p class="success" style="margin:auto;"><?=$flash_msg?></p>
<?php endif ?>

