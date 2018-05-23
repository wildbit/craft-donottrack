<?php
/**
 * Do Not Track plugin for Craft CMS
 *
 * DoNotTrack Service
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
    public function isEnabled()
    {
        return (isset($_SERVER['HTTP_DNT']) && $_SERVER['HTTP_DNT'] == 1);
    }
}