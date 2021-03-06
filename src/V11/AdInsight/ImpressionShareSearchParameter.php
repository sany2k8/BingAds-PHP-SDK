<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The impression share search parameter filter that you can include when requesting keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784410(v=msads.110).aspx ImpressionShareSearchParameter Data Object
     */
    final class ImpressionShareSearchParameter extends SearchParameter
    {
        /**
         * The maximum impression share that you want for keyword ideas.
         * @var double
         */
        public $Maximum;
        public $Minimum;
    }

}
