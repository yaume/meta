<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.meta
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Output as HTML5
$this->setHtml5(true);
JHtml::_('stylesheet', 'meta.css', array('version' => 'auto', 'relative' => true));
?>
<!DOCTYPE html>
<html>

<head>
    <jdoc:include type="head" />
   

</head>

<body>
    <header class="container">
        <jdoc:include type="modules" name="position-0" style="none" />
        <jdoc:include type="modules" name="position-1" style="none" />
    </header>
    <main>
        <jdoc:include type="message" />
        <jdoc:include type="component" />
    </main>
    <footer class="container">
        <jdoc:include type="modules" name="position-14" />
    </footer>
</body>

</html>