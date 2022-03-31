<?php


namespace Drupal\sections\Plugin\Layout\OffroadSection;

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
 *      }
 * }
 *  
 * )
 */


    class TeamSection extends FormatageModelsSection {

    }
?>