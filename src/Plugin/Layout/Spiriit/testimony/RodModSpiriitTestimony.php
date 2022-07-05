<?php

namespace Drupal\rod_mod\Plugin\Layout\Spiriit\testimony;

use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 * this section comes from spiriit.com . it's its testimony section
 * 
 * @Layout(
 *  id = "spiriit_testimony_section_layout",
 *  label = @Translation("Spiriit testimony section"),
 *  category = @Translation("rod_mod"),
 *  path = "layouts/sections/spiriit",
 *  template = "rod-mod-testimony-section",
 *  library = "rod_mod/rod-mod-testimony-section",
 *  default_region = "small_desc",
 *  regions = {
 *      "section_title" = {
 *          "label" = @Translation("set the section title")
 *      },
 *      "testimony_intro" = {
 *          "label" = @Translation("set the testimony question")
 *      },
 *      "testimony" = {
 *          "label" = @Translation("set the testimony content")
 *      },
 *      "lutin_name" = {
 *          "label" = @Translation("set lutin name")
 *      },
 *      "lutin_role" = {
 *          "label" = @Translation("set lutin role")
 *      }
 *  }
 * )
 */

 class RodModSpiriitTestimony extends FormatageModelsSection
 {
    /**
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */

     public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $style_group_manager){
        parent:: __construct($configuration, $plugin_id, $plugin_definition, $style_group_manager);
        
     }
 }