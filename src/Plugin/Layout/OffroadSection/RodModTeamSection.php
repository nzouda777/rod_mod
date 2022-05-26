<?php

namespace Drupal\rod_mod\Plugin\Layout\OffroadSection;

use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 * Offroad Team Section
 *
 * @Layout(
 *   id = "rod_mod_team_section",
 *   label = @Translation("offroad team section"),
 *   category = @Translation("rod_mod"),
 *   path = "layouts/sections",
 *   template = "rod-mod-team-section",
 *   library = "rod_mod/rod-mod-team-section",
 *   default_region = "slide_section",
 *   regions = {
 *      "slider_section" = {
 *          "label" = @Translation("add a slider")
 *      },
 *      "description_section" = {
 *          "label" = @Translation("add a description")
 *      },
 *      "single_user_img" = {
 *          "label" = @Translation("add user image")
 *      },
 *      "single_user_info" = {
 *          "label" = @Translation("set user info")
 *      },
 *      "company_name" = {
 *          "label" = @Translation("set the company name")
 *      },
 *      "company_description" = {
 *          "label" = @Translation("set company description")
 *      }
 *  }
 * )
 *
 *
 */
class RodModTeamSection extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'formatage_models') . "/icones/sections/rod-mod-team-section.png");
  }
  
}
