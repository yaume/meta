<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="search<?php echo $moduleclass_sfx ?> oe-custom-search-form col-xs-12" id="searchForm">
    <form action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-inline">
        <div class="search-box" id="searchBox">
            <?php
            $output = '';
            $output .= '<input name="searchword" id="mod-search-searchword" maxlength="' . $maxlength . '"  class="search-input search-query form-control" type="text" size="' . $width . '"  placeholder="Start typing..."/>';

            if ($button) :
                if ($imagebutton) :
                    $btn_output = ' <input type="image" value="' . $button_text . '" class="button" src="' . $img . '" onclick="this.form.searchword.focus();"/>';
                else :
                    $btn_output = ' <button class="button btn btn-primary" onclick="this.form.searchword.focus();">' . $button_text . '</button>';
                endif;

                switch ($button_pos) :
                    case 'top' :
                        $output = $btn_output . '<br />' . $output;
                        break;

                    case 'bottom' :
                        $output .= '<br />' . $btn_output;
                        break;

                    case 'right' :
                        $output .= $btn_output;
                        break;

                    case 'left' :
                    default :
                        $output = $btn_output . $output;
                        break;
                endswitch;

            endif;

            echo $output;
            ?>
            <a href="javascript:" class="fa search-close" data-toggle-active="#searchForm">&times;</a>
        </div>
        <input type="hidden" name="task" value="search"/>
        <input type="hidden" name="option" value="com_search"/>
        <input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>"/>
    </form>
</div>
