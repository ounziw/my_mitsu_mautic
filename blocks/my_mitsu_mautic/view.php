<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php

$c = Page::getCurrentPage();
if ($c->isEditMode()) { ?>
    <div class="ccm-edit-mode-disabled-item"><?php  echo t('My Mitsu Mautic Block is disabled in edit mode.')?></div>
<?php  } else {?>
    <?php if ($firepoint && $mauticurl) :?>
    <script>
    $(function() {
        $('<?php echo h($firepoint);?>').click(function (e) {
            var imgsrc = '<?php echo h($mauticurl);?>' + '/mtracking.gif?page_url=' + encodeURIComponent(window.location.href);
<?php if ($urlend) :?>
            var imgsrc = imgsrc + encodeURIComponent('<?php echo h($urlend);?>');
<?php endif; // $urlend ?>
<?php if ($firstname) :?>
            var firstname = $('<?php echo h($firstname);?>').val();
            var imgsrc = imgsrc + '&firstname=' + encodeURIComponent(firstname);
<?php endif; // $firstname ?>
<?php if ($lastname) :?>
            var lastname = $('<?php echo h($lastname);?>').val();
            var imgsrc = imgsrc + '&lastname=' + encodeURIComponent(lastname);
<?php endif; // $lastname ?>
<?php if ($email) :?>
            var mail = $('<?php echo h($email);?>').val();
            var imgsrc = imgsrc + '&email=' + encodeURIComponent(mail);
<?php endif; // $email ?>
            var mauticimg = $('<img id="mauticimg">');
            mauticimg.attr('src', imgsrc);
            mauticimg.attr("width", 1).attr("height", 1).css("display", "none");
            mauticimg.appendTo('body');
        });
    });
    </script>
        <?php endif; // $firepoint ?>
<?php  }
