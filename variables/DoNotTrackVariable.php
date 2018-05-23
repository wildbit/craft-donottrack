<?php
/**
 * Do Not Track plugin for Craft CMS
 *
 * Do Not Track Variable
 *
 * --snip--
 * Craft allows plugins to provide their own template variables, accessible from the {{ craft }} global variable
 * (e.g. {{ craft.pluginName }}).
 *
 * https://craftcms.com/docs/plugins/variables
 * --snip--
 *
 * @author    Matt West
 * @copyright Copyright (c) 2018 Wildbit, LLC
 * @link      https://wildbit.com
 * @package   DoNotTrack
 * @since     1.0.0
 */

namespace Craft;

class DoNotTrackVariable
{
    /**
     * Whatever you want to output to a Twig template can go into a Variable method. You can have as many variable
     * functions as you want.  From any Twig template, call it like this:
     *
     *     {{ craft.doNotTrack.exampleVariable }}
     * 
     */
    public function isEnabled()
    {
        return craft()->doNotTrack->isEnabled();
    }
}