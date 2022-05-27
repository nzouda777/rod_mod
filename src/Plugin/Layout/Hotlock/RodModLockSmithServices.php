<?php

    namespace Drupal\rod_mod\Plugin\Layout\Hotlock;
    
    use Drupal\formatage_models\src\Plugin\Layout\Sections\FormatageModelsSection;
    use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

    /**
     * Locksmithing services sertions from hotlock.axiomtheme.com
     * 
     * @Layout(
     *   id = "rod_mod_locksmithing_services_section",
     *   label = @Translation("Locksmithing Services section"),
     *   category = @Translation("rod_mod"),
     *   path = "layouts/sections",
     *   template = "rod-mod-locksmithing-services",
     *   library = "rod_mod/rod-mod-locksmithing-services-section",
     *   default_region = "img_descriptor",
     *   regions = {
     *      "section_title" = {
     *          "label" = @Translation("set title's section")
     *      },
     *      "descriptive_picture" = {
     *          "label" = @Translation("add a descrptive picture")
     *      },
     *      "descriptive_text" = {
     *          "label" = @Translation("add a descrptive text to the section")
     *      }
     *   }
     * )
     */

class RodModLockSmithServices extends FormatageMection {
         /**
          * {@inheritdoc}
          *@see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
          */
          public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager){
              parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
              $this->pluginDefinition->set('icon', drupal_get_path('module', 'rod_mod') . "/icones/sections/locksmithservices.png");
          }
}
?>