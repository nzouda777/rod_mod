<?php


namespace Drupal\rod_mod\Plugin\Layout\Hotlock\Footer;

    
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 *  Hotlock Footer Layout
 * 
 * @Layout(
 *   id = "rod_mod_footer_section",
 *   label = @Translation("Hotlock Footer"),
 *   category = @Translation("rod_mod"),
 *   path = "layouts/sections/hotlock",
 *   template = "rod-mod-footer",
 *   library = "rod_mod/rod-mod-footer",
 *   default_region = "whole_footer",
 *   regions = {
 *      "company_logo" = {
 *          "label" = @Translation("set company logo")
 *      },
 *      "company_addr" = {
 *          "label" = @Translation("set company address")
 *      },
 *      "company_mail" = {
 *          "label" = @Translation("set company email")
 *      },
 *      "company_phone" = {
 *          "label" = @Translation("set company phone number")
 *      },
 *      "link_A" = {
 *          "label" = @Translation("set about us link")
 *      },
 *      "link_B" = {
 *          "label" = @Translation("set SERVICES link")
 *      },
 *      "link_C" = {
 *          "label" = @Translation("set PRIVACY us link")
 *      },
 *      "link_D" = {
 *          "label" = @Translation("set TERMS OF USE link")
 *      },
 *      "link_E" = {
 *          "label" = @Translation("set HOME link")
 *      },
 *      "link_F" = {
 *          "label" = @Translation("set BLOG link")
 *      },
 *      "link_G" = {
 *          "label" = @Translation("set CONTQCTS link")
 *      }
 *   }
 * )
 */

 class RodModFooter extends FormatageModelsSection {
     /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'formatage_models') );
 }
 }
?>