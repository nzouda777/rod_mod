<?php


namespace Drupal\rod_mod\Plugin\Layout\OffroadSection;

use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Offroad Team Section 
 * 
 * @Layout(
 * 
 *  id = "OffroadSection",
 *  label = @Translation("offroad team section"),
 *  category = @Translation("offroad section"),
 *  path = "layouts/offroadSection",
 *  template = "offroad-team-section",
 *  library = "sections/offroad-team-section",
 *  default_region = "slide_section",
 *  regions = {
 *      "slider_section" = {
 *          "label" = @Translation("add a slider")
 *      },
 *      "description_section" = { 
 *          "label" = @Translation("add a description")
 *      },
 *      "single_user_img" = {
 *          "label" = @Translation("add user image")
 *      },
 *      "single_user_info" = {
 *          "label" = @Translation("set user info")
 *      },
 *      "company_name" = {
 *          "label" = @Translation("set the company name")
 *      },
 *      "company_description" = {
 *          "label" = @Translation("set company description")
 *      }
 * }
 *  
 * )
 */


    class RodModTeamSection extends FormatageModelsSection {

    }
?>