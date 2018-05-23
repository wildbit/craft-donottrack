<?php
/**
 * Do Not Track plugin for Craft CMS
 *
 * Do Not Track Variable
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
    public function isEnabled()
    {
        return craft()->doNotTrack->isEnabled();
    }
}