<?php

    namespace Drupal\rod_mod\Plugin\Layout\Hotlock\Sections;
    
    use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
    use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

    /**
     *  services sertions from hotlock.axiomtheme.com
     * 
     * @Layout(
     *   id = "rod_mod_services_section",
     *   label = @Translation("Our Services section"),
     *   category = @Translation("rod_mod"),
     *   path = "layouts/sections/hotlock",
     *   template = "rod-mod-services",
     *   library = "rod_mod/rod-mod-services-section",
     *   default_region = "img_descriptor",
     *   regions = {
     *      "service_title" = {
     *          "label" = @Translation("set service title")
     *      },
     *      "service_picture" = {
     *          "label" = @Translation("add servie's picture")
     *      },
     *      "service_description" = {
     *          "label" = @Translation("add a descrptive text to the service")
     *      }
     *   }
     * )
     */

class RodModServices extends FormatageModelsSection {
         /**
          * {@inheritdoc}
          *@see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
          */
          public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager){
              parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
              $this->pluginDefinition->set('icon', drupal_get_path('module', 'rod_mod') );
          }
}
?>