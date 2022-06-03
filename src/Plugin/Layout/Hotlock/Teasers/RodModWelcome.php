<?php

namespace Drupal\rod_mod\Plugin\Layout\Hotlock\Teasers;

use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 * Welcome Teaser
 * 
 *  @Layout(
 *    id = "rod_mod_welcome_teaser",
 *    label = @Translation("Welcome Teaser"),
 *    category = @Translation("rod_mod"),
 *    path = "layouts/sections/hotlock",
 *    template = "rod-mod-welcome",
 *    library = "rod_mod/rod-mod-welcome",
 *    default_region = "whole teaser",
 *    regions = {
 *      "welcome_words" = {
 *          "label" = @Translation("set welcome words")
 *      },
 *      "welcome_img" = {
 *          "label" = @Translation("set welcome pictures")
 *      }
 *    }
 *  )
 */

class RodModWelcome extends FormatageModelsTeasers{
    
    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct( array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager)
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->stylesGroupManager = $styles_group_manager;
    }
}
?>