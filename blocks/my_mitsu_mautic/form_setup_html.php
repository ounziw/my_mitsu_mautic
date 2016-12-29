<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label('firepoint', t('アクションを実行する要素(ID/class)'))?>
    <?php echo $form->text('firepoint', $firepoint); ?>
</div>

<div class="form-group">
    <?php echo $form->label('mauticurl', t('mauticのURL'))?>
    <?php echo $form->text('mauticurl', $mauticurl); ?>
</div>

<div class="form-group">
    <?php echo $form->label('urlend', t('URLの末尾に付けるアルファベット'))?>
    <?php echo $form->text('urlend', $urlend); ?>
</div>

<div class="form-group">
    <p><?php echo t('mauticに送るデータ');?></p>
    <?php echo $form->label('firstname', t('firstname要素(ID/class)'))?>
    <?php echo $form->text('firstname', $firstname); ?>
    <?php echo $form->label('lastname', t('lastname要素(ID/class)'))?>
    <?php echo $form->text('lastname', $lastname); ?>
    <?php echo $form->label('email', t('email要素(ID/class)'))?>
    <?php echo $form->text('email', $email); ?>
</div>
