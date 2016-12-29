<?php 
namespace Concrete\Package\MyMitsuMautic\Block\MyMitsuMautic;

use \Concrete\Core\Block\BlockController;
use Core;
class Controller extends BlockController {

    protected $btTable = 'btMyMitsuMautic';
    protected $btInterfaceWidth = '500';
    protected $btInterfaceHeight = '600';
    protected $btDefaultSet = 'form';
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = false;
    protected $btCacheBlockOutputLifetime = 0; //until manually updated or cleared

    public function getBlockTypeDescription()
    {
        return t("When visitors do some action, this addon sends to the information to the Mautic, a marketing automation service.");
    }

    public function getBlockTypeName()
    {
        return t("My Mitsu Mautic");
    }

    public function registerViewAssets($outputContent = '')
    {
        $this->requireAsset('javascript', 'jquery');
    }
    
    public function view()
    {
        if ($this->validate_id_class($this->firepoint)) {
            $this->set('firepoint', $this->firepoint);
        }
        if ($this->validate_id_class($this->urlend)) {
            $this->set('urlend', $this->urlend);
        }
        if ($this->validate_id_class($this->firstname)) {
            $this->set('firstname', $this->firstname);
        }
        if ($this->validate_id_class($this->lastname)) {
            $this->set('lastname', $this->lastname);
        }
        if ($this->validate_id_class($this->email)) {
            $this->set('email', $this->email);
        }
        if(filter_var($this->mauticurl, FILTER_VALIDATE_URL)) {
            $this->set('mauticurl', $this->mauticurl);
        }

    }

    public function validate_id_class($input) {
        $start = substr($input,0,1);
        $item = substr($input,1);
        $allowed_string_attr = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
        if (strlen($start) === strspn($start,'#.') && strlen($item) === strspn($item,$allowed_string_attr) ) {
            return true;
        } else {
            return false;
        }
    }
    
    public function validate($args)
    {
        $e = Core::make('helper/validation/error');

        if(!$this->validate_id_class($args['firepoint'])) {
            $e->add(t('firepointは、先頭が # または . で、二文字目以降は英数字で、指定してください。'));
        }
        if(!$this->validate_id_class($args['urlend'])) {
            $e->add(t('urlendは、先頭が # または . で、二文字目以降は英数字で、指定してください。'));
        }
        if(!$this->validate_id_class($args['firstname'])) {
            $e->add(t('firstnameは、先頭が # または . で、二文字目以降は英数字で、指定してください。'));
        }
        if(!$this->validate_id_class($args['lastname'])) {
            $e->add(t('lastnameは、先頭が # または . で、二文字目以降は英数字で、指定してください。'));
        }
        if(!$this->validate_id_class($args['email'])) {
            $e->add(t('emailは、先頭が # または . で、二文字目以降は英数字で、指定してください。'));
        }
        if(!filter_var($args['mauticurl'], FILTER_VALIDATE_URL)) {
            $e->add(t('mauticurl はURLで指定してください。'));
        }
        return $e;
    }
}
