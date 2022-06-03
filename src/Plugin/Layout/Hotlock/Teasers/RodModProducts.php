<?php

    namespace Drupal\rod_mod\Plugin\Layout\Hotlock\Teasers;

    use Drupal\formatage_models\Plugin\Layout\Products\ProductTeaser;
    use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

    /**
     *  Products section
     * 
     *  @Layout(
     *    id = "rod_mod_products_section",
     *    label = @Translation("Product Teaser"),
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

    class  RodModProducts extends ProductTeaser{
        /**
          * {@inheritdoc} 
          * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:: __construct()
        */
        public function __construct(array $configuration, $plugin_id, $plugin_definition)
        {
            // TODO Auto-generated method stub
            parent::__construct($configuration, $plugin_id, $plugin_definition);
            $this->pluginDefinition->set('icon', drupal_get_path('module', 'formatage_models') . "/icones/formatage-models-product-teaser.png");
        }
    }
?>