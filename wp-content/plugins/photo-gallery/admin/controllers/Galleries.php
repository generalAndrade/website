<?php

class GalleriesController_bwg {
  /**
   * @var $model
   */
  private $model;
  /**
   * @var $view
   */
  private $view;
  /**
   * @var string $page
   */
  private $page;
  /**
   * @var int $items_per_page
   */
  private $items_per_page = 20;
  /**
   * @var array $actions
   */
  private $actions = array();
  private $image_actions = array();

  public function __construct() {
	// Allowed upload mime_types.
	add_filter('upload_mimes', array(BWG(), 'allowed_upload_mime_types'), 10, 2);
    $this->model = new GalleriesModel_bwg();
    $this->view = new GalleriesView_bwg();
    $this->page = WDWLibrary::get('page');

    $this->actions = array(
      'publish' => array(
        'title' => __('Publish', BWG()->prefix),
        'bulk_action' => __('published', BWG()->prefix),
      ),
      'unpublish' => array(
        'title' => __('Unpublish', BWG()->prefix),
        'bulk_action' => __('unpublished', BWG()->prefix),
      ),
      'delete' => array(
        'title' => __('Delete', BWG()->prefix),
        'bulk_action' => __('deleted', BWG()->prefix),
      ),
    );

    $this->image_actions = array(
      'image_resize' => array(
        'title' => __('Resize', BWG()->prefix),
        'bulk_action' => __('resized', BWG()->prefix),
      ),
      'image_recreate_thumbnail' => array(
        'title' => __('Recreate thumbnail', BWG()->prefix),
        'bulk_action' => __('recreated', BWG()->prefix),
      ),
      'image_rotate_left' => array(
        'title' => __('Rotate left', BWG()->prefix),
        'bulk_action' => __('rotated left', BWG()->prefix),
      ),
      'image_rotate_right' => array(
        'title' => __('Rotate right', BWG()->prefix),
        'bulk_action' => __('rotated right', BWG()->prefix),
      ),
      'image_set_watermark' => array(
        'title' => __('Set watermark', BWG()->prefix),
        'bulk_action' => __('edited', BWG()->prefix),
      ),
      'image_reset' => array(
        'title' => __('Reset', BWG()->prefix),
        'bulk_action' => __('reset', BWG()->prefix),
      ),
      'image_edit' => array(
        'title' => __('Edit info', BWG()->prefix),
        'bulk_action' => __('edited', BWG()->prefix),
      ),
      'image_add_tag' => array(
        'title' => __('Add tag', BWG()->prefix),
        'bulk_action' => __('edited', BWG()->prefix),
      ),
      'image_publish' => array(
        'title' => __('Publish', BWG()->prefix),
        'bulk_action' => __('published', BWG()->prefix),
      ),
      'image_unpublish' => array(
        'title' => __('Unpublish', BWG()->prefix),
        'bulk_action' => __('unpublished', BWG()->prefix),
      ),
      'image_delete' => array(
        'title' => __('Delete', BWG()->prefix),
        'bulk_action' => __('deleted', BWG()->prefix),
      ),
    );
    if ( function_exists('BWGEC') ) {
      $this->image_actions['set_image_pricelist'] = array(
        'title' => __('Add pricelist', BWG()->prefix),
        'bulk_action' => __('edited', BWG()->prefix),
      );
      $this->image_actions['remove_pricelist_all'] = array(
        'title' => __('Remove pricelist', BWG()->prefix),
        'bulk_action' => __('edited', BWG()->prefix),
      );
    }

    $user = get_current_user_id();
    $screen = get_current_screen();
    $option = $screen->get_option('per_page', 'option');
    $this->items_per_page = get_user_meta($user, $option, TRUE);

    if ( empty ($this->items_per_page) || $this->items_per_page < 1 ) {
      $this->items_per_page = $screen->get_option('per_page', 'default');
    }
  }

  /**
   * Execute.
   */
  public function execute() {
    $task = WDWLibrary::get('task');
    $id = (int) WDWLibrary::get('current_id', 0);
    if ( method_exists($this, $task) ) {
      if ( $task != 'edit' && $task != 'display' ) {
        check_admin_referer(BWG()->nonce, BWG()->nonce);
      }
      $action = WDWLibrary::get('bulk_action', -1);
      $image_action = WDWLibrary::get('image_bulk_action', -1);
      if ( $action != -1 ) {
        $this->bulk_action($action);
      }
      elseif ( $image_action != -1 ) {
        $this->image_bulk_action($image_action);
      }
      else {
        $this->$task($id);
      }
    }
    else {
      $this->display();
    }
  }

  /**
   * Display.
   */
  public function display() {
    // Set params for view.
    $params = array();
    $params['page'] = $this->page;
    $params['page_title'] = __('Galleries', BWG()->prefix);
    $params['actions'] = $this->actions;
    $params['order'] = WDWLibrary::get('order', 'asc');
    $params['orderby'] = WDWLibrary::get('orderby', 'name');
    // To prevent SQL injections.
    $params['order'] = ($params['order'] == 'desc') ? 'desc' : 'asc';
    if ( !in_array($params['orderby'], array( 'name', 'author' )) ) {
      $params['orderby'] = 'id';
    }
    $params['items_per_page'] = $this->items_per_page;
    $page = (int) WDWLibrary::get('paged', 1);
    $page_num = $page ? ($page - 1) * $params['items_per_page'] : 0;
    $params['page_num'] = $page_num;
    $params['search'] = WDWLibrary::get('s', '');

    $params['total'] = $this->model->total($params);
    $params['rows'] = $this->model->get_rows_data($params);

    $url_arg = array();
    $page_url = add_query_arg(array(
                                'page' => $this->page,
                                BWG()->nonce => wp_create_nonce(BWG()->nonce),
                              ), admin_url('admin.php'));

    $page_url = add_query_arg($url_arg, $page_url);
    $params['page_url'] = $page_url;

    // Delete images without gallery.
    $this->model->delete_unknown_images();

    $this->view->display($params);
  }

  /**
   * Bulk actions.
   *
   * @param $task
   */
  public function bulk_action($task) {
    $message = 0;
    $successfully_updated = 0;
    $url_arg = array('page' => $this->page,'task' => 'display');

    $check = WDWLibrary::get('check', '');
    $all = WDWLibrary::get('check_all_items', '');
    $all = ($all == 'on' ? TRUE : FALSE);

    if ( method_exists($this, $task) ) {
      if ( $all ) {
        $message = $this->$task(0, TRUE, TRUE);
        $url_arg['message'] = $message;
      }
      else {
        if ( $check ) {
          foreach ( $check as $form_id => $item ) {
            $message = $this->$task($form_id, TRUE);
            if ( $message != 2 ) {
              // Increase successfully updated items count, if action doesn't failed.
              $successfully_updated++;
            }
          }
        }
        if ( $successfully_updated ) {
          $message = sprintf(_n('%s item successfully %s.', '%s items successfully %s.', $successfully_updated, BWG()->prefix), $successfully_updated, $this->actions[$task]['bulk_action']);
        }
        $key = ($message === 2 ? 'message' : 'msg');
        $url_arg[$key] = $message;
      }
    }

    WDWLibrary::redirect(add_query_arg($url_arg, admin_url('admin.php')));
  }

  /**
   * Delete.
   *
   * @param      $id
   * @param bool $bulk
   * @param bool $all
   *
   * @return int
   */
  public function delete( $id, $bulk = FALSE, $all = FALSE ) {
    $message = $this->model->delete($id, $all);

    if ( $bulk ) {
      return $message;
    }

    WDWLibrary::redirect(add_query_arg(array(
                                         'page' => $this->page,
                                         'task' => 'display',
                                         'message' => $message,
                                       ), admin_url('admin.php')));
  }

  /**
   * Publish.
   *
   * @param $id
   * @param bool $bulk
   * @param bool $all
   *
   * @return int
   */
  public function publish( $id, $bulk = FALSE, $all = FALSE ) {
    global $wpdb;
    $where = ($all ? '' : ' WHERE id=' . $id);
    $updated = $wpdb->query('UPDATE `' . $wpdb->prefix . 'bwg_gallery` SET published=1' . $where);

    if ( $updated !== FALSE ) {
      $message = 9;
    }
    else {
      $message = 2;
    }

    if ( $bulk ) {
      return $message;
    }
    else {
      WDWLibrary::redirect(add_query_arg(array(
                                           'page' => $this->page,
                                           'task' => 'display',
                                           'message' => $message,
                                         ), admin_url('admin.php')));
    }
  }

  /**
   * Unpublish.
   *
   * @param $id
   * @param bool $bulk
   * @param bool $all
   *
   * @return int
   */
  public function unpublish( $id, $bulk = FALSE, $all = FALSE ) {
    global $wpdb;
    $where = ($all ? '' : ' WHERE id=' . $id);
    $updated = $wpdb->query('UPDATE `' . $wpdb->prefix . 'bwg_gallery` SET published=0' . $where);

    if ( $updated !== FALSE ) {
      $message = 10;
    }
    else {
      $message = 2;
    }

    if ( $bulk ) {
      return $message;
    }
    else {
      WDWLibrary::redirect(add_query_arg(array(
                                           'page' => $this->page,
                                           'task' => 'display',
                                           'message' => $message,
                                         ), admin_url('admin.php')));
    }
  }

  /**
   * Add/Edit.
   *
   * @param int $id
   * @param array $message
   */
  public function edit( $id = 0, $message = array() ) {
    $row = $this->model->get_row_data($id);
    if ( $id && empty($row->slug) ) {
      WDWLibrary::redirect(add_query_arg(array(
                                           'page' => $this->page,
                                           'task' => 'display',
                                         ), admin_url('admin.php')));
    }
    // Set params for view.
    $params = array();
    $params['id'] = $id;
    $params['row'] = $row;
    $params['form_action'] = add_query_arg(array(
                                             'page' => $this->page,
                                             'current_id' => $id,
                                             BWG()->nonce => wp_create_nonce($this->page),
                                           ), admin_url('admin.php'));
    $params['add_preview_image_action'] = add_query_arg(array(
                                                          'action' => 'addImages',
                                                          'width' => '800',
                                                          'height' => '550',
                                                          'extensions' => 'jpg,jpeg,png,gif',
                                                          'callback' => 'bwg_add_preview_image',
                                                          BWG()->nonce => wp_create_nonce('addImages'),
                                                          'TB_iframe' => '1',
                                                        ), admin_url('admin-ajax.php'));
    $params['add_images_action'] = add_query_arg(array(
                                                   'action' => 'addImages',
                                                   'width' => '800',
                                                   'height' => '550',
                                                   'extensions' => 'jpg,jpeg,png,gif',
                                                   'callback' => 'bwg_add_image',
                                                   BWG()->nonce => wp_create_nonce('addImages'),
                                                   'TB_iframe' => '1',
                                                 ), admin_url('admin-ajax.php'));
    $params['add_tags_action'] = add_query_arg(array(
                                                 'action' => 'addTags_' . BWG()->prefix,
                                                 'width' => '785',
                                                 'height' => '550',
                                                 BWG()->nonce => wp_create_nonce('addTags_' . BWG()->prefix),
                                               ), admin_url('admin-ajax.php'));
    $params['preview_action'] = WDWLibrary::get_custom_post_permalink(array(
                                                                        'slug' => $params['row']->slug,
                                                                        'post_type' => 'gallery',
                                                                      ));
    $params['shortcode_id'] = WDWLibrary::get_shortcode_id( array('slug' => $params['row']->slug, 'post_type' => 'gallery' ));
    $params['instagram_post_gallery'] = $params['row']->gallery_type == 'instagram_post' ? TRUE : FALSE;
    $params['facebook_post_gallery'] = (!$params['instagram_post_gallery']) ? ($params['row']->gallery_type == 'facebook_post' ? TRUE : FALSE) : FALSE;
    $params['gallery_type'] = ($params['row']->gallery_type == 'instagram' || $params['row']->gallery_type == 'instagram_post') ? 'instagram' : (($params['row']->gallery_type == 'facebook_post' || $params['row']->gallery_type == 'facebook') ? 'facebook' : '');

    // Image display params.
    $params['actions'] = $this->image_actions;
    $params['page_url'] = $params['form_action'];
    $params['order'] = 'asc';
    $params['orderby'] = 'order';
    $params['items_per_page'] = $this->items_per_page;
    $page = (int) WDWLibrary::get('paged', 1);
    $page_num = $page ? ($page - 1) * $params['items_per_page'] : 0;
    $params['page_num'] = $page_num;
    $params['search'] = WDWLibrary::get('s', '');
    $params['message'] = $message;

    $params['total'] = $this->model->image_total($id, $params);
    $params['rows'] = $this->model->get_image_rows_data($id, $params);
    $params['pager'] = 0;
    $params['facebook_embed'] = $this->get_facebook_embed();
	  $this->view->edit( $params );
  }

  /**
   * Save.
   *
   * @param $id
   */
  public function save( $id, $all = FALSE ) {
    // Save gallery and images.
    $data = $this->model->save();
    $message = array('gallery_message' => $data['saved'], 'image_message' => '');

    $ajax_task = WDWLibrary::get('ajax_task', '');
    if ( $ajax_task != '' ) {
      if ( method_exists($this->model, $ajax_task) ) {
        $image_id = WDWLibrary::get('image_current_id', 0);
        $message['image_message'] = $this->model->$ajax_task($image_id, $all);
      }
    }

    $this->edit($data['id'], $message);
  }

  /**
   * Bulk actions for images.
   *
   * @param $image_action
   */
  public function image_bulk_action($image_action) {
    // Save gallery and images.
    $data = $this->model->save();

    $message = array();
    $successfully_updated = 0;

    $check = WDWLibrary::get('check', '');
    $all = WDWLibrary::get('check_all_items', FALSE);

    if ( method_exists($this->model, $image_action) ) {
      if ( $all ) {
        $message['image_message'] = $this->model->$image_action(0, TRUE);
      }
      else {
        if ( $check ) {
          foreach ( $check as $image_id ) {
            if ( strpos($image_id, 'pr_') === FALSE ) {
              $message['image_message'] = $this->model->$image_action($image_id);
              if ( $message['image_message'] == 6 ) {
                // Action set watermark with none watermark type.
                break;
              }
              elseif ( $message['image_message'] != 2 ) {
                // Increase successfully updated items count, if action doesn't failed.
                $successfully_updated++;
              }
            }
          }
        }
        if ( $successfully_updated ) {
          $message['image_message'] = sprintf(_n('%s item successfully %s.', '%s items successfully %s.', $successfully_updated, BWG()->prefix), $successfully_updated, $this->image_actions[$image_action]['bulk_action']);
        }
      }
    }

    $this->edit($data['id'], $message);
  }

  // ToDo: remove
  public function save_old() {

    $msg = __("Item Succesfully Saved.", BWG()->prefix);
    if ( function_exists('BWGEC') ) {
      $not_set_items = $this->check_pricelist();
      if ( empty($not_set_items) === FALSE ) {
        $msg .= __(" Selected pricelist item longest dimension greater than some original images dimensions.", BWG()->prefix);
      }
    }
    echo WDWLibrary::message($msg, 'wd_updated');
    $this->display();
  }

  public function check_pricelist() {
    global $wpdb;
    $gallery_id = isset($_POST['current_id']) ? $_POST['current_id'] : 0;
    $not_set_items = array();
    if ( $gallery_id ) {
      $rows = $wpdb->get_results('SELECT T_IMAGES.thumb_url, T_PRICELISTS.item_longest_dimension, T_IMAGES.id FROM ' . $wpdb->prefix . 'bwg_image AS T_IMAGES LEFT JOIN ( SELECT  MAX(item_longest_dimension) AS item_longest_dimension, pricelist_id FROM ' . $wpdb->prefix . 'wdpg_ecommerce_pricelist_items AS T_PRICELIST_ITEMS LEFT JOIN ' . $wpdb->prefix . 'wdpg_ecommerce_pricelists AS T_PRICELISTS ON T_PRICELIST_ITEMS.pricelist_id = T_PRICELISTS.id  WHERE  T_PRICELISTS.sections LIKE "%downloads%" GROUP BY pricelist_id) AS T_PRICELISTS ON T_IMAGES.pricelist_id = T_PRICELISTS.pricelist_id WHERE T_IMAGES.gallery_id="' . $gallery_id . '"');
      foreach ( $rows as $row ) {
        if ( $row->item_longest_dimension ) {
          $file_path = str_replace("thumb", ".original", htmlspecialchars_decode(ABSPATH . BWG()->upload_dir . $row->thumb_url, ENT_COMPAT | ENT_QUOTES));
          list($img_width) = @getimagesize(htmlspecialchars_decode($file_path, ENT_COMPAT | ENT_QUOTES));
          if ( $row->item_longest_dimension > $img_width ) {
            $not_set_items[] = $row->id;
          }
        }
      }
    }
    if ( empty($not_set_items) == FALSE ) {
      echo "<input type='hidden' id='not_set_items' value='" . implode(",", $not_set_items) . "'>";
    }

    return $not_set_items;
  }

  private function get_facebook_embed() {
    if ( has_filter('init_display_facebook_gallery_embed_bwg') ) {
      $data = apply_filters('init_display_facebook_gallery_embed_bwg', array(),  array() );
      return $data;
    }
  }
}