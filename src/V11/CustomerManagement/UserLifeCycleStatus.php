<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the possible status values of a user.
     * @link http://msdn.microsoft.com/en-us/library/ee704179(v=msads.110).aspx UserLifeCycleStatus Value Set
     * 
     * @used-by User
     * @used-by GetUsersInfoRequest
     */
    final class UserLifeCycleStatus
    {
        /** The user is a new user who has not been activated. */
        const Pending = 'Pending';

        /** The user is active. */
        const Active = 'Active';

        /** Reserved for internal use. */
        const Inactive = 'Inactive';

        /** Reserved for internal use. */
        const Deleted = 'Deleted';
    }

}
