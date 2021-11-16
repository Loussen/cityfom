<?php

    return [
        'pagination_count'                  => 50,
        'status'                            => [1 => 'Enable', 2 => 'Disable'],
        'filter_type'                       => [1 => 'Yes', 2 => 'No'],
        'loyalty_message_type'              => [1 => 'Collect', 2 => 'Exchange'],
        'rating_review_status'              => [1 => 'Accept', 2 => 'Pending', 3 => 'Reject'],
        'report_status'                     => [1 => 'Not reviewed', 2 => 'Under review', 3 => 'Closed'],
        'langs'                             => ['en', 'az', 'ru', 'es'],
        'login_types'                       => [1 => 'facebook_id', 2 => 'twitter_id', 3 => 'google_id', 4 => 'apple_id'],
        'enable'                            => 1,
        'disable'                           => 2,
        'paginate_count_api'                => 10,
        'channel_offer_id'                  => 3,
        'channel_product_id'                => 1,
        'rating_sort'                       => ['date','rate_desc','rate_asc','like_desc'],
        'partner_type'                      => [1 => 'Partner', 2 => 'Ordinary'],
        'store_type'                        => [1 => 'Admin', 2 => 'CMS'],
        'store_verification'                => [1 => 'Verified', 2 => 'Not Verified'],
        'weekdays'                          => [1 => 'MONDAY', 2 => 'TUESDAY', 3 => 'WEDNESDAY', 4 => 'THURSDAY', 5 => 'FRIDAY', 6 => 'SATURDAY', 7 => 'SUNDAY'],
        'minimum_distance'                  => 100,
        'api_key'                           => 'duTpd3dgCfaKIXJjAa6IR2az5EpPr6iF',
        'admin_prefix'                      => ['admin','cms','subadmin']
//        'module_name'                       => Request()->route()->getPrefix()
    ]

?>
