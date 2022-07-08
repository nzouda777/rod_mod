<?php

namespace Drupal\rod_mod\Plugin\Layout\Spiriit\expertise;


use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 * this section comes from spiriit.com . it's its testimony section
 * 
 * @Layout(
 *  id = "spiriit_expertise_section_layout",
 *  label = @Translation(" rod_mod Spiriit expertise section"),
 *  category = @Translation("rod_mod"),
 *  path = "layouts/sections/spiriit",
 *  template = "rod-mod-expertise-section",
 *  library = "rod_mod/rod-mod-expertise-section",
 *  default_region = "small_desc",
 *  regions = {
 *      "section_title" = {
 *          "label" = @Translation("set the section name")
 *      },
 *      "title" = {
 *          "label" = @Translation("set title")
 *      },
 *      "small_desc" = {
 *          "label" = @Translation("set a small desc")
 *      },
 *      "lutin_img" = {
 *          "label" = @Translation("set a descriptive picture")
 *      },
 *  }
 * )
 */

 class RodModSpiriitExpertise extends FormatageModelsSection
 {
    /**
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */

     public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $style_group_manager){
        parent:: __construct($configuration, $plugin_id, $plugin_definition, $style_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'rod_mod') . "/icones/sections/spiriitexpertise.jpeg");
        
     }
     /**
      * {@inheritdoc}
      * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
      */

      public function build(array $regions){
         //to make auto-generated mehod stub
          $build = parent::build($regions);
          FormatageModelsThemes::formatSettingValues($build);

          return $build;
      }
      /**
       * {@inheritdoc}
       */
      public function defaultConfiguration(){
         return parent::defaultConfiguration() + [
            'css' => '',
            'Content' => [
               'builder-form' => true,
               'info' => [
                  'title' => 'expertise form section editor',
                  'loader' => 'static'
               ],
               'fields' => [
                  "section_title" => [
                     'text_html' => [
                        'label' => 'nom de la section',
                        'value' => ''
                     ]
                  ],
                  "title" => [
                     'text_html' => [
                        'label' => 'titre de la section',
                        'value' => ''
                     ]
                  ],
                  "small_desc" => [
                     'text_html' => [
                        'label' => 'ecrire une description pour la section',
                        'value' => ''
                     ]
                  ],
                  "lutin_img" => [
                     'img_bg' => [
                        'label' => 'ajouter une image ',
                        'fids' => []
                     ]
                  ]
               ]
            ]
         ];
      }
 }