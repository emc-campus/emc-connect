<?php

/**
 * @file
 * template.php
 */

/*
 * Navigation
 */

function emc_connect_menu_tree__secondary(&$variables) {
  return '<ul class="menu nav navbar-nav pull-right secondary">' . $variables['tree'] . '</ul>';
}

/*function emc_connect_menu_tree__menu_career_center(&$variables) {
  return '<ul class="menu nav list-unstyled career-center">' . $variables['tree'] . '</ul>';
}*/