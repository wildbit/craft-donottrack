<?php
/**
 * Do Not Track plugin for Craft CMS
 *
 * DoNotTrack Service
 *
 * --snip--
 * All of your plugin’s business logic should go in services, including saving data, retrieving data, etc. They
 * provide APIs that your controllers, template variables, and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 * --snip--
 *
 * @author    Matt West
 * @copyright Copyright (c) 2018 Wildbit, LLC
 * @link      https://wildbit.com
 * @package   DoNotTrack
 * @since     1.0.0
 */

namespace Craft;

class DoNotTrackService extends BaseApplicationComponent
{
    /**
     * This function can literally be anything you want, and you can have as many service functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     craft()->doNotTrack->isEnabled()
     */
    public function isEnabled()
    {
        return (isset($_SERVER['HTTP_DNT']) && $_SERVER['HTTP_DNT'] == 1);
    }

}