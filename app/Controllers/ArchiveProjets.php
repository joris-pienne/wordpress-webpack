<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchiveProjets extends Controller
{
  public function post_projs() {

      $args = array(
              'post_type' => 'projets',
              'numberposts' => -1,
          );

          return get_posts($args);
  }
}
