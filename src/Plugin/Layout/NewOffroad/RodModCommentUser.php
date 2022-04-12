<?php

namespace Drupal\rod_mod\Plugin\Layout\NewOffroad;


use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 * New Offroad Team User Comment Section
 * 
 * @Layout(
 *  id = "rod_mod_user_comment_section",
 *  label = @Translation("Offroad user comment section"),
 *  category = @Translation("rod_mod"),
 *  path = "layouts/sections/teasers",
 *  template = "rod-mod-comment-user",
 *  library = "rod_mod/rod-mod-comment-user",
 *  regions = {
 *      "profession" = {
 *          "label" = @Translation("add user profession")
 *      },
 *      "single_user_img" = {
 *          "label" = @Translation("add user image")
 *      },
 *      "comment" = {
 *          "label" = @Translation("user comment")
 *      },
 *      "single_user_info" = {
 *          "label" = @Translation("set user info")
 *      }
 * 
 *  }
 * ) 
 */

class RodModCommentUser extends FormatageModelsTeasers {
  
    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
      // TODO Auto-generated method stub
      parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
      $this->pluginDefinition->set('icon', drupal_get_path('module', 'rod_mod') . "/icones/sections/offroad.png");
    }
    
  }
  
?>