<?php
/**
 * Options for the quicktext plugin
 *
 * @author Michael Braun <michael-dev@fami-braun.de>
 */

$meta['icon']     = array('string');

for ($i=0; $i < 100; $i++) {
  $meta['name'.$i]     = array('string');
  $meta['value'.$i]    = array('string');
  $meta['icon'.$i]     = array('string');
}

