<?php

namespace Drupal\rod_mod\Plugin\Layout\Spiriit\Teasers;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;


/**
 * This teaser comes from spirrit.com. it's its services teasers
 * 
 * @Layout(
 *  id = "spiriit_services_teaser",
 *  label = @Translation("rod_mod Spiriit Services Teaser"),
 *  category = @Translation("rod_mod"),
 *  path = "layouts/teasers/spiriit",
 *  template = "rod-mod-services-teaser",
 *  library = "rod_mod/rod-mod-spiriit-services-teaser",
 *  default_region = "Content",
 *  regions = {
 *      "service_title" = {
 *          "label" = @Translation("set the service name")
 *      },
 *      "service_desc" = {
 *          "label" = @Translation("set some sample of service")
 *      },
 *      "more_link" = {
 *          "label" = @Translation("set the link that leads to this services brand")
 *      },
 *      "service_img" = {
 *          "label" = @Translation("set a service picture") 
 *      }
 *  }
 * )
 */

 class RodModSpiriitServicesTeaser extends FormatageModelsTeasers{
    /**
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */

     public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $style_group_manager){
        parent::__construct($configuration, $plugin_id, $plugin_definition, $style_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'rod_mod') . "/icones/teasers/spiriitservice.jpeg");
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
                    'title' => 'services teaser form editor',
                    'loader' => 'static'
                ],
                'fields' => [
                    'service_title' => [
                        'text_html' => [
                            'label' => 'definir le nom du service',
                            'value' => ''
                        ]
                    ],
                    'service_desc' => [
                        'text_html' => [
                            'label' => 'definir les services qui y decoule',
                            'value' => ''
                        ]
                    ],
                    'more_link' => [
                        'text_html' => [
                            'label' => 'definir un lien pour en voir plus',
                            'value' => ''
                        ]
                    ],
                    'service_img' => [
                        'img_bg' => [
                            'label' => 'definr une image descriptive pour le service',
                            'fids' => []
                        ]
                    ]
                ]
            ]
        ];
      }
 }