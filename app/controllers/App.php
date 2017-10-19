<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return pll__('Latest Posts', 'fair-funding');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(pll__('Search Results for %s', 'fair-funding'), get_search_query());
        }
        if (is_404()) {
            return pll__('Not Found', 'fair-funding');
        }
        return get_the_title();
    }

    public static function getPermalinkInLanguage($slug)
    {
      $page = get_page_by_path($slug);
      $pageInCurrentLanguage = pll_get_post($page->ID);
      $permalink = get_permalink($pageInCurrentLanguage);

      return $permalink;
    }
}
