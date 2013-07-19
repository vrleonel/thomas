<?
add_filter( 'use_default_gallery_style', '__return_false' );

/* Post Thumbnail */
add_theme_support( 'post-thumbnails' );

/* Add Menus */
add_theme_support('menus');

register_nav_menu('main-menu','Main Menu');
register_nav_menu('social-menu','Social Menu');

function posts_link_attributes_1() {
    return 'class="prev-post"';
}
function posts_link_attributes_2() {
    return 'class="next-post"';
}

/**********************************************
* Cria uma url de acordo com o root           *
***********************************************/
function make_href_root_relative($input) {
    return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}

/*
function root_relative_permalinks($input) {
    return make_href_root_relative($input);
}
add_filter( 'the_permalink', 'root_relative_permalinks' );

*/


/* Menu */
$main_menu_args = array(
  'theme_location'  => 'main-menu',
  'container'       => 'div',
  'menu_id'         => 'main-menu',
  'menu_class'      => 'left',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''
);

$social_menu_args = array(
  'theme_location'  => 'social-menu',
  'container'       => 'div',
  'menu_id'         => 'social-menu',
  'menu_class'      => 'right social-links',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''
);



function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}





/**
 *  Install Add-ons
 *
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *
 *  All fields must be included during the 'acf/register_fields' action.
 *  Other types of Add-ons (like the options page) can be included outside of this action.
 *
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme as outlined in the terms and conditions.
 *  However, they are NOT to be included in a premium / free plugin.
 *  For more information, please read http://www.advancedcustomfields.com/terms-conditions/
 */

// Fields
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
  //include_once('add-ons/acf-repeater/repeater.php');
  //include_once('add-ons/acf-gallery/gallery.php');
  //include_once('add-ons/acf-flexible-content/flexible-content.php');
}

// Options Page
//include_once( 'add-ons/acf-options-page/acf-options-page.php' );


/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_home',
    'title' => 'Home',
    'fields' => array (
      array (
        'key' => 'field_15',
        'label' => 'Title',
        'name' => 'title_home',
        'type' => 'text',
        'default_value' => 'WELCOME',
        'formatting' => 'html',
      ),
      array (
        'key' => 'field_5155b373b828e',
        'label' => 'Text Home',
        'name' => 'text_home',
        'type' => 'wysiwyg',
        'default_value' => '<p>
          Oct. 13th — <br>
          <strong>“Origins of Solitude” Exhibition</strong>
      </p>
      <p>
          at Nepenthes New York <br>
          307 West 38th St. New York, NY 10018 <br>
          212 643 9540
      </p>',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_14',
        'label' => 'Link',
        'name' => 'link_home',
        'type' => 'page_link',
        'post_type' => array (
          0 => '',
        ),
        'allow_null' => 0,
        'multiple' => 0,
      ),
    ),
    'location' => array (
      'rules' => array (
        array (
          'param' => 'page',
          'operator' => '==',
          'value' => get_ID_by_slug('home'), // ID '95'
          'order_no' => 0,
        ),
      ),
      'allorany' => 'all',
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
        0 => 'the_content',
        1 => 'excerpt',
        2 => 'custom_fields',
        3 => 'revisions',
        4 => 'slug',
        5 => 'featured_image',
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_information',
    'title' => 'Information',
    'fields' => array (
      array (
        'key' => 'field_18',
        'label' => 'Description Text',
        'name' => 'description_text',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_30',
        'label' => 'Adress',
        'name' => 'adress',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_4',
        'label' => 'Description image',
        'name' => 'description_image',
        'type' => 'image',
        'save_format' => 'url',
        'preview_size' => 'medium',
      ),
      array (
        'key' => 'field_5',
        'label' => 'Article 1',
        'name' => 'article_1',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_6',
        'label' => 'Article 2',
        'name' => 'article_2',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_22',
        'label' => 'Aside Articles',
        'name' => 'aside_articles',
        'type' => 'textarea',
        'default_value' => '',
        'formatting' => 'html',
      ),
      array (
        'key' => 'field_16',
        'label' => 'Article Ico 1',
        'name' => 'article_ico_1',
        'type' => 'image',
        'save_format' => 'url',
        'preview_size' => 'full',
      ),
      array (
        'key' => 'field_17',
        'label' => 'Article Ico 2',
        'name' => 'article_ico_2',
        'type' => 'image',
        'save_format' => 'url',
        'preview_size' => 'full',
      ),
      array (
        'key' => 'field_5168ae09730d0',
        'label' => 'Article Ico 3',
        'name' => 'article_ico_3',
        'type' => 'image',
        'save_format' => 'url',
        'preview_size' => 'full',
      ),
      array (
        'key' => 'field_5168ae32730d1',
        'label' => 'Aside Article 1',
        'name' => 'aside_article_1',
        'type' => 'wysiwyg',
        'default_value' => '<h5>Shirt And Destroy</h5>
          <p>I’ve been creating and selling t-shirts with some friends and little more description of this.<br>
            <a href="#">shirtsanddestroy.com/thomashooper</a>
          </p>',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_5168ae4d730d2',
        'label' => 'Aside Article 2',
        'name' => 'aside_article_2',
        'type' => 'wysiwyg',
        'default_value' => '<h5>Shirt And Destroy</h5>
          <p>I’ve been creating and selling t-shirts with some friends and little more description of this.<br>
            <a href="#">shirtsanddestroy.com/thomashooper</a>
          </p>',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_5168aeb8730d3',
        'label' => 'Aside Article 3',
        'name' => 'aside_article_3',
        'type' => 'wysiwyg',
        'default_value' => '<h5>Shirt And Destroy</h5>
          <p>I’ve been creating and selling t-shirts with some friends and little more description of this.<br>
            <a href="#">shirtsanddestroy.com/thomashooper</a>
          </p>',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
    ),
    'location' => array (
      'rules' => array (
        array (
          'param' => 'page',
          'operator' => '==',
          'value' => get_ID_by_slug('information'), // '5'
          'order_no' => 0,
        ),
      ),
      'allorany' => 'all',
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
        0 => 'the_content',
        1 => 'excerpt',
        2 => 'custom_fields',
        3 => 'discussion',
        4 => 'comments',
        5 => 'featured_image',
        6 => 'categories',
        7 => 'tags',
        8 => 'send-trackbacks',
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_shop',
    'title' => 'Shop',
    'fields' => array (
      array (
        'key' => 'field_29',
        'label' => 'Article 1',
        'name' => 'article_1',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_24',
        'label' => 'Aside 1',
        'name' => 'aside_1',
        'type' => 'image',
        'save_format' => 'url',
        'preview_size' => 'full',
      ),
      array (
        'key' => 'field_25',
        'label' => 'Article 2',
        'name' => 'article_2',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_26',
        'label' => 'Aside 2',
        'name' => 'aside_2',
        'type' => 'image',
        'save_format' => 'url',
        'preview_size' => 'full',
      ),
      array (
        'key' => 'field_27',
        'label' => 'Article 3',
        'name' => 'article_3',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_28',
        'label' => 'Aside 3',
        'name' => 'aside_3',
        'type' => 'image',
        'save_format' => 'url',
        'preview_size' => 'full',
      ),
    ),
    'location' => array (
      'rules' => array (
        array (
          'param' => 'page',
          'operator' => '==',
          'value' => get_ID_by_slug('11'), //  '11'
          'order_no' => 0,
        ),
      ),
      'allorany' => 'all',
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
        0 => 'the_content',
        1 => 'excerpt',
        2 => 'custom_fields',
        3 => 'discussion',
        4 => 'comments',
        5 => 'featured_image',
        6 => 'categories',
        7 => 'tags',
      ),
    ),
    'menu_order' => 0,
  ));
}

?>
