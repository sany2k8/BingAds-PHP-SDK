<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the criteria to use to filter the Bing Shopping product search query performance report data.
     * @link http://msdn.microsoft.com/en-us/library/mt783265(v=msads.110).aspx ProductSearchQueryPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AdStatusReportFilter
     * @uses AdTypeReportFilter
     * @uses CampaignStatusReportFilter
     * @used-by ProductSearchQueryPerformanceReportRequest
     */
    final class ProductSearchQueryPerformanceReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the ad group status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will include data for ads that have the specified status value.
         * @var AdStatusReportFilter
         */
        public $AdStatus;

        /**
         * The report will include data for only the specified ad types.
         * @var AdTypeReportFilter
         */
        public $AdType;

        /**
         * The report will include data for campaigns that have the specified status value.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * If the value of this element is set to true, search terms that had one or more ad impressions but resulted in zero clicks in the specified time duration will be excluded from the report.
         * @var boolean
         */
        public $ExcludeZeroClicks;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;

        /**
         * The report will include data for only the specified search query strings.
         * @var string[]
         */
        public $SearchQueries;
    }

}
