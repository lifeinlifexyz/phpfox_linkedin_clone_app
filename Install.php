<?php

namespace Apps\CM_Linked_Fox;

use Core\App;

/**
 * Class Install
 * @author  Neil J. <neil@phpfox.com>
 * @version 4.6.0
 * @package Apps\CM_Linked_Fox
 */
class Install extends App\App
{
    public $vendor = '<a href="//codemake.org" target="_blank">codemake.org</a> - See all our products <a href="//store.phpfox.com/techie/u/ecodemaster" target=_new>HERE</a> - contact us at => support@codemake.org';
    public $store_id = '2088';
    private $_app_phrases = [

    ];

    protected function setId()
    {
        $this->id = 'CM_Linked_Fox';
    }

    protected function setAlias()
    {}

    protected function setName()
    {
        $this->name = 'LinkedIn Clone Template App';
    }

    protected function setVersion()
    {
        $this->version = '4.1.0';
    }

    protected function setSupportVersion()
    {
        $this->start_support_version = '4.6.0';
        $this->end_support_version = '4.9.0';
    }

    protected function setSettings()
    {
        $this->settings = [
            'cm_linked_fox_enabled' => [
                'info' => 'Linked Fox Enabled',
                'type' => 'input:radio',
                'value' => '1',
                'js_variable' => '1',
            ],
            'cm_linked_fox_menu_type' => [
                'info' => 'Menu Type',
                'type' => 'select',
                'options' => [
                    'horizontal' => _p('Horizontal'),
                    'vertical' => _p('Vertical'),
                ],
                'value' => 'vertical',
                'js_variable' => '1',
            ]
        ];
    }

    protected function setUserGroupSettings()
    {
    }

    protected function setComponent()
    {
    }

    protected function setComponentBlock()
    {
    }

    protected function setPhrase()
    {
        $this->phrase = $this->_app_phrases;
    }

    protected function setOthers()
    {
$this->_publisher = 'Codemake Software';
        	$this->_publisher_url = 'https://codemake.org/';
    }
}
