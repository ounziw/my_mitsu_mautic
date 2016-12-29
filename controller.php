<?php 
namespace Concrete\Package\MyMitsuMautic;

use BlockType;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends \Concrete\Core\Package\Package {

    protected $pkgHandle = 'my_mitsu_mautic';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '0.9';

    public function getPackageDescription() {
        return t("When visitors do some action, this addon sends to the information to the Mautic, a marketing automation service.");
    }

    public function getPackageName() {
        return t("My Mitsu Mautic");
    }

    public function install() {
        $pkg = parent::install();
        BlockType::installBlockType('my_mitsu_mautic', $pkg);
    }

}