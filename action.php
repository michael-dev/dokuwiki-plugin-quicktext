<?php
/**
 * Action Component for the Quicktext Plugin
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Michael Braun <michael-dev@fami-braun.de>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');

class action_plugin_quicktext extends DokuWiki_Action_Plugin {

    /**
     * register the eventhandlers
     *
     * @author Andreas Gohr <andi@splitbrain.org>
     */
    function register(&$controller){
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'handle_toolbar', array ());
    }

    function handle_toolbar(&$event, $param) {
        $items = Array();
        for ($i=0; $this->getConf('name'.$i) != ''; $i++) {
          $items[] = array(
                    'type'   => 'insert',
                    'title'  => $this->getConf('name'.$i),
                    'icon'   => $this->getConf('icon'.$i),
                    'insert' => $this->getConf('value'.$i),
                    'block'  => true
                );
        }
        $event->data[] = array (
            'type' => 'picker',
            'title' => $this->getLang('picker'),
            'icon' => $this->getConf('icon'),
            'list' => $items
        );

    }
}

