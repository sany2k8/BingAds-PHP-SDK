<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible user-determined status values of a conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759554(v=msads.110).aspx ConversionGoalStatus Value Set
     * 
     * @used-by ConversionGoal
     */
    final class ConversionGoalStatus
    {
        /** The conversion goal is active. */
        const Active = 'Active';

        /** The conversion goal is paused. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

}
