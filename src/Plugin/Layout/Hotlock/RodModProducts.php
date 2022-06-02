<?php

    namespace Drupal\rod_mod\Plugin\Layout\Hotlock;

    use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
    use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

    /**
     *  Products section
     * 
     *  @Layout(
     *    id = "rod_mod_products_section",
     *    label = @Translation("Product Section"),
     *    category = @Translation("rod_mod"),
     *    path = "layouts/sections/hotlock",
     *    template = "rod-mod-products",
     *    library = "rod_mod/rod-mod-products",
     *    default_region = "product_handler",
     *    regions = {
     *      "product_img" = {
     *          "label" = @Translation("Set Produt image")
     *      },
     *      "product_title" = {
     *          "label" = @Translation("Set product title")
     *      },
     *      "product_amount" = {
     *          "label" = @Translation("Set product amount")
     *      }
     *    }
     *  )
     */

    class  RodModProducts extends FormatageModelsSection{
        /**
          * {@inheritdoc} 
          * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:: __construct()
        */
        public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $style_group_manager){
            parent::__construct($configuration, $plugin_id, $plugin_definition, $style_group_manager);
            $this->pluginDefinition->set('icon', drupal_get_path('module', 'rod_mod') . "/icones/sections/products.png");
        }
    }
?>