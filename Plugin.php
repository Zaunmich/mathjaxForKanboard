<?php

namespace Kanboard\Plugin\mathjaxForKanboard;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        // get Mathjax from CDN
        $this->setContentSecurityPolicy(array('script-src' => "'self' https://cdn.jsdelivr.net/"));
        $this->hook->on('template:layout:js', array('template' => 'plugins/mathjaxForKanboard/Assets/js/load-mathjax.js'));

        //HELPER
        $this->helper->register('text', '\Kanboard\Plugin\mathjaxForKanboard\Helper\HelperTextHelper');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'mathjaxForKanboard';
    }

    public function getPluginDescription()
    {
        return t('This Pluging adds MathJax capabilities to the Kanboard');
    }

    public function getPluginAuthor()
    {
        return 'Michael Zauner';
    }

    public function getPluginVersion()
    {
        return '1.1.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Zaunmich/mathjaxForKanboard';
    }
}

