<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

if (!Configure::read('debug')):
  throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$banner = Configure::read('Event.lanes.banner');

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<div style="padding-top: 50px;"></div>
<div style="opacity: 1; " id="home">
  <img src="<?= $banner['src'] ?>" alt="">
  <div class="container">
    <div class="row">

    </div>
  </div>
</div>
