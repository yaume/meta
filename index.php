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
// Load template framework 
include_once JPATH_THEMES . '/' . $this->template . '/lib/head.php';
?>
<!DOCTYPE html>
<html>

<head>
    <jdoc:include type="head" />


</head>

<body>
    <header class="header fixed-top">
        <div class="container">
            <div class="row">
                <div class="logo col-12 col-md-2 col-lg-3">
                    <a href="http://www.meta.mc/">
                        <img src="templates/meta/img/meta.png" alt="META MONACO - ART GALLERY">
                    </a>
                </div>
                <div class="menu col-12 col-md-10 col-lg-9">
                    <jdoc:include type="modules" name="position-0" />
                    <div class="clearfix header-extra">
                        <jdoc:include type="modules" name="position-1" />
                    </div>
                </div>
            <jdoc:include type="modules" name="position-2" />
            </div>
        </div>
    </header>
    <main>
        <jdoc:include type="message" />
        <jdoc:include type="component" />
    </main>
    <footer class="fixed-bottom">
        <div class="container">
            <div class="row">
                <jdoc:include type="modules" name="position-14" />
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>