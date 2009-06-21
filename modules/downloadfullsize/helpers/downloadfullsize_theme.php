<<<<<<< HEAD:modules/downloadfullsize/helpers/downloadfullsize_theme.php
<?php defined("SYSPATH") or die("No direct script access.");/**
=======
<?php defined("SYSPATH") or die("No direct script access.");
/**
>>>>>>> gallery3-contrib/master:modules/downloadfullsize/helpers/downloadfullsize_theme.php
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2009 Bharat Mediratta
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */
class downloadfullsize_theme {
  static function sidebar_blocks($theme) {
<<<<<<< HEAD:modules/downloadfullsize/helpers/downloadfullsize_theme.php
    if ($theme->item()->is_photo()) {
      if (access::can("view_full", $theme->item)) {
        if (module::get_var("downloadfullsize", "tButton")) {
          $block = new Block();
          $block->css_id = "gDownloadFullsize";
          $block->title = t("Download");
          $block->content = new View("downloadfullsize_block.html");

          $block->content->item = ORM::factory("item", 1);

          return $block;
        }
      }
    }
  }  
=======
    $item = $theme->item();
    if ($item && $item->is_photo() && access::can("view_full", $item)) {
      if (module::get_var("downloadfullsize", "tButton")) {
        $block = new Block();
        $block->css_id = "gDownloadFullsize";
        $block->title = t("Download");
        $block->content = new View("downloadfullsize_block.html");

        $block->content->item = ORM::factory("item", 1);

        return $block;
      }
    }
  }
>>>>>>> gallery3-contrib/master:modules/downloadfullsize/helpers/downloadfullsize_theme.php
}