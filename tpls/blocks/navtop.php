<?php
/**
* @package   T3 Blank
* @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
* @license   GNU General Public License version 2 or later; see LICENSE.txt
*/
defined('_JEXEC') or die;
?>
			<?php if ($this->countModules('navtop')) : ?>
				<div class="container">
			<!-- NAV HELPER -->
			<nav class="t3-navtop <?php $this->_c('navtop') ?>">
					<jdoc:include type="modules" name="<?php $this->_p('navtop') ?>" />
			</nav>
			</div>
			<!-- //NAV HELPER -->
			<?php endif ?>