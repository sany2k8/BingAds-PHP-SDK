<?php
// Generated on 6/7/2017 5:53:08 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the GeoLocationPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dn743762(v=msads.90).aspx GeoLocationPerformanceReportColumn Value Set
     * 
     * @used-by GeoLocationPerformanceReportRequest
     */
    final class GeoLocationPerformanceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The country used to deliver the ad. */
        const Country = 'Country';

        /** The state used to deliver the ad. */
        const State = 'State';

        /** The metro area used to deliver the ad. */
        const MetroArea = 'MetroArea';

        /** The city used to deliver the ad. */
        const City = 'City';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** The ad distribution attribute of an ad group. */
        const AdDistribution = 'AdDistribution';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The radius target bid name. */
        const ProximityTargetLocation = 'ProximityTargetLocation';

        /** The radius of a radius target bid. */
        const Radius = 'Radius';

        /** The ad group language. */
        const Language = 'Language';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The operating system of the device reported in the DeviceType column. */
        const DeviceOS = 'DeviceOS';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The location type used to deliver ads. */
        const LocationType = 'LocationType';

        /** The most specific location used to deliver ads. */
        const MostSpecificLocation = 'MostSpecificLocation';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';
    }

}
