<?php

    namespace Drupal\rod_mod\Plugin\Layout\Hotlock\Teasers;

    use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;
    use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

    /**
     *  Products section
     * 
     *  @Layout(
     *    id = "rod_mod_team_teaser",
     *    label = @Translation("Hotlock Team Teaser"),
     *    category = @Translation("rod_mod"),
     *    path = "layouts/sections/hotlock",
     *    template = "rod-mod-team",
     *    library = "rod_mod/rod-mod-team",
     *    default_region = "team_handler",
     *    regions = {
     *      "lutin_img" = {
     *          "label" = @Translation("Set lutin image")
     *      },
     *      "lutin_name" = {
     *          "label" = @Translation("Set lutin name")
     *      },
     *      "lutin_role" = {
     *          "label" = @Translation("Set lutin role")
     *      }
     *    }
     *  )
     */

    class  RodModTeam extends FormatageModelsTeasers{
    
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