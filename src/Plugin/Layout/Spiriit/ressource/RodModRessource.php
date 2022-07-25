<?php
namespace Drupal\rod_mod\Plugin\Layout\Spiriit\ressource;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 * this is the ressource section layout of spiriit
 * 
 * @Layout(
 *  id = "spiriit_ressource_section_layout",
 *  label = @Translation("Rod_Mod Spiriit Ressource Section"),
 *  category = @Translation("rod_mod"),
 *  path = "layouts/sections/spiriit",
 *  template = "rod-mod-ressource-section",
 *  library = "rod_mod/rod-mod-spiriit-ressource-section",
 *  default_region = "Content",
 *  regions = {
 *      "section_name" = {
 *          "label" = @Translation("set the section name")
 *      },
 *      "section_title" = {
 *          "label" = @Translation("set section title")
 *      },
 *      "say_more_btn" = {
 *          "label" = @Translation("set a link to allow user to say something")
 *      },
 *      "card_link" =  {
 *          "label" = @Translation("set links that lead to other content")
 *      },
 *      "content_link" = {
 *          "label" = @Translation("set a content which is a link to the full content")
 *      },
 *      "post_date" = {
 *          "label" = @Translation("set the date of the post")
 *      },
 *      "lutin_name" = {
 *          "label" = @Translation("set the author name")
 *      }
 *  }
 * )
 */

 class RodModRessource extends FormatageModelsSection{
    /**
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */

    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $style_group_manager){
        parent:: __construct($configuration, $plugin_id, $plugin_definition, $style_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'rod_mod') . "/icones/sections/spiriitressource.jpeg");
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
                    'title' => 'ressource layout form editor',
                    'loader' => 'static'
                ],
                'fields' => [
                    'section_name' => [
                        'text_html' => [
                           'label' => 'nom de la section',
                           'value' =>''
                        ]
                     ],
                     'section_title' => [
                        'text_html' => [
                           'label' => 'nom de la section',
                           'value' =>''
                        ]
                     ],
                     'say_more_btn' => [
                        'text_html' => [
                           'label' => 'configurer un boutoun permetant a un utilisateur de dire quelque chose',
                           'value' =>''
                        ]
                     ],
                     'card_link' => [
                        'text_html' => [
                           'label' => 'configurer les liens du header de la carte',
                           'value' =>''
                        ]
                     ],
                     'content_link' => [
                        'text_html' => [
                           'label' => 'configurer le titre de la carte qui est un lien vers le contenu',
                           'value' =>''
                        ]
                     ],
                     'post_date' => [
                        'text_html' => [
                           'label' => 'date de publication de cet article',
                           'value' =>''
                        ]
                     ],
                     'lutin_name' => [
                        'text_html' => [
                           'label' => 'nom de \'auteur de l\'article',
                           'value' =>''
                        ]
                     ],
                ]
            ]
        ];
      }
 }