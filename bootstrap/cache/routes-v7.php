<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/share-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.shareReport',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zDGQ20RGFbAyNhTD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/pages/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SMlq0YNLrs4UHZwT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/pages/detailBySlug' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eCCxkAYXQCvRPXBn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/pages/detailByLangAndSlug' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DhY4D4dCbB7Iv8IA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bjtu9ec0SQ1xri8o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gzbSUpSXF8AiHH2H',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/socialLogin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::spyXDMzUb9BzjrIG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/verifyAccount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::02DdOWnQvv56sEi3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/resendOtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lI4Y5ElIwh0ka7MW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/forgotPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7DQkGD7AnaHQjmIQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/verifyOtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aVeF3zGjIsw1Iq65',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/resetPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LUNhV61InvfwUkQl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/categories/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C4Lw8Tuw6pL1cAfZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/stores/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZdBHDxs1rOGymJBp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/stores/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZpaWM86jsI8Ouvta',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6dR9R4cv1XHWc2Mr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/changePassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0LXnzclC1Z2Xln68',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/updateProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jjWouQeq0vpngu4P',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/removeSearchFilter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DFopGU9Hg7x2iZLQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bTWH1h5gTPSuxvzi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/coupons/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9YzeVnWkuQp6kw7E',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/coupons/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U5FecbqNI8S8KHrV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/coupons/updateRedeem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L9mTec1k3PaP69mx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/offers/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PvNCUZjSijEqRlLO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/offers/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yhlXdx5uBSlmokKx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/contactus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cu1vivGVrEwoY80h',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/favourite/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3L7H6NugfgsHQRD4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/favourite/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qdyjD0Bzna7L1RLG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/ratingReview/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nl4zpzOmeS9TdUZk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/ratingReview/allByStoreId' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p5DpYAGWPLRBvhkN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/ratingReview/allByUserId' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ilSj5r304QSdY8ee',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/ratingReview/likeReview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::obgrrt3lPcK4e1o0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/report/typeList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z6y27o2soMTihDPt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/report/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ceqd2gTOaqiDfitj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/channels/allByStoreId' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::95LIqzypCXffmODU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/channels/allByChannelId' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aceeVJXTwMgeZj6y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/channels/postDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BdYSThMUVcFykRXs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications/updateSetting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dyeeYoVS68mySX0T',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications/getSetting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eW0s9PhsERXXdM75',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9BsGTbokaCFk1Znq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uc0yRR2RZtqZIbvz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications/read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9wShdbGNztP7U6RE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications/reportStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vfFVOAVfY7OyxRUU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications/allByUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V8Qi84kAMTDgqsji',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/loyalty/myPoints' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b7OGQv7gtyNn9WOV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/loyalty/myPointsHistory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sm4cwaXLY8JWkSrA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v2/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5TDenNC7LSTforzX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminLogin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'adminLoginPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminLogout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cmsLogin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cmsLoginPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cmsLogout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadminLogin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadminLoginPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadminLogout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cms_users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cms_users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleRole' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.destroyMultipleRole',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeCategoryStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.changeCategoryStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeCategoryFilterType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.changeCategoryFilterType',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.destroyMultipleCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/filterMultipleCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.filterMultipleCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.statusMultipleCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/coupon/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeCouponStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.changeCouponStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleCoupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.destroyMultipleCoupon',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleCoupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.statusMultipleCoupon',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating_review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating_review/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeRatingReviewStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.changeRatingReviewStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleRatingReview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.destroyMultipleRatingReview',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleRatingReview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.statusMultipleRatingReview',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyImage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.destroyImage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cms_pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cms_pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeCmsPageStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_pages.changeCmsPageStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleCmsPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_pages.statusMultipleCmsPage',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_notification.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_notification.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report_notification/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_notification.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_store.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_store.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report_store/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_store.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeReportStoreStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_store.changeReportStoreStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleReportStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_store.destroyMultipleReportStore',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleReportStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_store.statusMultipleReportStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report_type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeReportTypeStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_type.changeReportTypeStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleReportType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_type.destroyMultipleReportType',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleReportType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_type.statusMultipleReportType',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/channel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/channel/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeChannelStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel.changeChannelStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleChannel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel.destroyMultipleChannel',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleChannel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel.statusMultipleChannel',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/channel_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/channel_post/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeChannelPostStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.changeChannelPostStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleChannelPost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.destroyMultipleChannelPost',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleChannelPost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.statusMultipleChannelPost',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/channelCategoryFilter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.channelCategoryFilter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email_templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email_templates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email_templates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email_templates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email_templates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeEmailTemplateStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email_templates.changeEmailTemplateStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleEmailTemplate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email_templates.statusMultipleEmailTemplate',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general_message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_message.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_message.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general_message/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_message.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeGeneralMessageStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_message.changeGeneralMessageStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleGeneralMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_message.destroyMultipleGeneralMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleGeneralMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_message.statusMultipleGeneralMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/loyalty_message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_message.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_message.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/loyalty_message/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_message.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeLoyaltyMessageStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_message.changeLoyaltyMessageStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleLoyaltyMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_message.destroyMultipleLoyaltyMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleLoyaltyMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_message.statusMultipleLoyaltyMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/loyalty_point' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_point.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_point.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/loyalty_point/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_point.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleLoyaltyPoint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_point.destroyMultipleLoyaltyPoint',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pointHistory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_point.pointHistory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/configs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.configs.configs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/configStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.configs.configStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/passwordStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.passwordStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/profileStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.profileStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeStoreStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.changeStoreStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeStorePartnerType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.changeStorePartnerType',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeStoreVerification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.changeStoreVerification',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.destroyMultipleStore',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/typeMultipleStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.typeMultipleStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.statusMultipleStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyStoreImage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.destroyStoreImage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/app_users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app_users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app_users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/app_users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app_users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeAppUserStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app_users.changeAppUserStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleAppUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app_users.destroyMultipleAppUser',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleAppUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app_users.statusMultipleAppUser',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeCmsUserStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_users.changeCmsUserStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/destroyMultipleCmsUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_users.destroyMultipleCmsUser',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statusMultipleCmsUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_users.statusMultipleCmsUser',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ckeditor_upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ckeditor.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/cms_users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/cms_users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleRole' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.roles.destroyMultipleRole',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeCategoryStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.changeCategoryStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeCategoryFilterType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.changeCategoryFilterType',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.destroyMultipleCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/filterMultipleCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.filterMultipleCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.statusMultipleCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.coupon.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.coupon.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/coupon/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.coupon.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeCouponStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.coupon.changeCouponStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleCoupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.coupon.destroyMultipleCoupon',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleCoupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.coupon.statusMultipleCoupon',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/rating_review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/rating_review/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeRatingReviewStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.changeRatingReviewStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleRatingReview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.destroyMultipleRatingReview',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleRatingReview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.statusMultipleRatingReview',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyImage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.destroyImage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/cms_pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/cms_pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeCmsPageStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_pages.changeCmsPageStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleCmsPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_pages.statusMultipleCmsPage',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/report_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_notification.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_notification.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/report_notification/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_notification.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/report_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_store.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_store.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/report_store/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_store.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeReportStoreStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_store.changeReportStoreStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleReportStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_store.destroyMultipleReportStore',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleReportStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_store.statusMultipleReportStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/report_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/report_type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeReportTypeStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_type.changeReportTypeStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleReportType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_type.destroyMultipleReportType',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleReportType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_type.statusMultipleReportType',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/channel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/channel/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeChannelStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel.changeChannelStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleChannel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel.destroyMultipleChannel',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleChannel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel.statusMultipleChannel',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/channel_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/channel_post/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeChannelPostStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.changeChannelPostStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleChannelPost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.destroyMultipleChannelPost',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleChannelPost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.statusMultipleChannelPost',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/channelCategoryFilter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.channelCategoryFilter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/email_templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.email_templates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.email_templates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/email_templates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.email_templates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeEmailTemplateStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.email_templates.changeEmailTemplateStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleEmailTemplate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.email_templates.statusMultipleEmailTemplate',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/general_message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.general_message.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.general_message.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/general_message/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.general_message.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeGeneralMessageStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.general_message.changeGeneralMessageStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleGeneralMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.general_message.destroyMultipleGeneralMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleGeneralMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.general_message.statusMultipleGeneralMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/loyalty_message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_message.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_message.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/loyalty_message/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_message.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeLoyaltyMessageStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_message.changeLoyaltyMessageStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleLoyaltyMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_message.destroyMultipleLoyaltyMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleLoyaltyMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_message.statusMultipleLoyaltyMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/loyalty_point' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_point.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_point.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/loyalty_point/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_point.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleLoyaltyPoint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_point.destroyMultipleLoyaltyPoint',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/pointHistory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_point.pointHistory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/settings/configs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.configs.configs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/settings/configStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.configs.configStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/settings/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.password.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/settings/passwordStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.password.passwordStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/settings/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.profile.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/settings/profileStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.profile.profileStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/store/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeStoreStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.changeStoreStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeStorePartnerType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.changeStorePartnerType',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeStoreVerification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.changeStoreVerification',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.destroyMultipleStore',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/typeMultipleStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.typeMultipleStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.statusMultipleStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyStoreImage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.destroyStoreImage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/app_users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.app_users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.app_users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/app_users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.app_users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeAppUserStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.app_users.changeAppUserStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleAppUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.app_users.destroyMultipleAppUser',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleAppUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.app_users.statusMultipleAppUser',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/changeCmsUserStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_users.changeCmsUserStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/destroyMultipleCmsUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_users.destroyMultipleCmsUser',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/statusMultipleCmsUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_users.statusMultipleCmsUser',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cms/ckeditor_upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.ckeditor.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/cms_users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/cms_users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleRole' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.roles.destroyMultipleRole',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeCategoryStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.changeCategoryStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeCategoryFilterType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.changeCategoryFilterType',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.destroyMultipleCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/filterMultipleCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.filterMultipleCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.statusMultipleCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.coupon.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.coupon.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/coupon/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.coupon.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeCouponStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.coupon.changeCouponStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleCoupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.coupon.destroyMultipleCoupon',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleCoupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.coupon.statusMultipleCoupon',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/rating_review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/rating_review/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeRatingReviewStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.changeRatingReviewStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleRatingReview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.destroyMultipleRatingReview',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleRatingReview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.statusMultipleRatingReview',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyImage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.destroyImage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/cms_pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/cms_pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeCmsPageStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_pages.changeCmsPageStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleCmsPage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_pages.statusMultipleCmsPage',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/report_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_notification.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_notification.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/report_notification/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_notification.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/report_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_store.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_store.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/report_store/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_store.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeReportStoreStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_store.changeReportStoreStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleReportStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_store.destroyMultipleReportStore',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleReportStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_store.statusMultipleReportStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/report_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/report_type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeReportTypeStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_type.changeReportTypeStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleReportType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_type.destroyMultipleReportType',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleReportType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_type.statusMultipleReportType',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/channel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/channel/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeChannelStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel.changeChannelStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleChannel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel.destroyMultipleChannel',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleChannel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel.statusMultipleChannel',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/channel_post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/channel_post/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeChannelPostStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.changeChannelPostStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleChannelPost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.destroyMultipleChannelPost',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleChannelPost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.statusMultipleChannelPost',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/channelCategoryFilter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.channelCategoryFilter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/email_templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.email_templates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.email_templates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/email_templates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.email_templates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeEmailTemplateStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.email_templates.changeEmailTemplateStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleEmailTemplate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.email_templates.statusMultipleEmailTemplate',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/general_message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.general_message.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.general_message.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/general_message/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.general_message.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeGeneralMessageStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.general_message.changeGeneralMessageStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleGeneralMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.general_message.destroyMultipleGeneralMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleGeneralMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.general_message.statusMultipleGeneralMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/loyalty_message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_message.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_message.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/loyalty_message/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_message.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeLoyaltyMessageStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_message.changeLoyaltyMessageStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleLoyaltyMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_message.destroyMultipleLoyaltyMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleLoyaltyMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_message.statusMultipleLoyaltyMessage',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/loyalty_point' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_point.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_point.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/loyalty_point/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_point.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleLoyaltyPoint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_point.destroyMultipleLoyaltyPoint',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/pointHistory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_point.pointHistory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/settings/configs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.configs.configs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/settings/configStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.configs.configStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/settings/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.password.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/settings/passwordStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.password.passwordStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/settings/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.profile.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/settings/profileStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.profile.profileStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/store/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeStoreStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.changeStoreStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeStorePartnerType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.changeStorePartnerType',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeStoreVerification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.changeStoreVerification',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.destroyMultipleStore',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/typeMultipleStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.typeMultipleStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.statusMultipleStore',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyStoreImage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.destroyStoreImage',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/app_users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.app_users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.app_users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/app_users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.app_users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeAppUserStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.app_users.changeAppUserStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleAppUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.app_users.destroyMultipleAppUser',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleAppUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.app_users.statusMultipleAppUser',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/changeCmsUserStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_users.changeCmsUserStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/destroyMultipleCmsUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_users.destroyMultipleCmsUser',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/statusMultipleCmsUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_users.statusMultipleCmsUser',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/ckeditor_upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.ckeditor.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IcKbo4kG6jWOk6v0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_(?|debugbar/c(?|lockwork/([^/]++)(*:42)|ache/([^/]++)(?:/([^/]++))?(*:76))|ignition/s(?|cripts/([^/]++)(*:112)|tyles/([^/]++)(*:134)))|/c(?|aptcha(?|/api(?:/([^/]++))?(*:176)|(?:/([^/]++))?(*:198))|ms/(?|c(?|ms_(?|users/([^/]++)(?|(*:240)|/edit(*:253)|(*:261))|pages/([^/]++)(?|(*:287)|/edit(*:300)|(*:308)))|ategory/([^/]++)(?|(*:337)|/edit(*:350)|(*:358))|oupon/([^/]++)(?|(*:384)|/edit(*:397)|(*:405))|hannel(?|/([^/]++)(?|(*:435)|/edit(*:448)|(*:456))|_post/([^/]++)(?|(*:482)|/edit(*:495)|(*:503))))|r(?|oles/([^/]++)(?|(*:534)|/edit(*:547)|(*:555))|ating_review/([^/]++)(?|(*:588)|/edit(*:601)|(*:609))|eport_(?|notification/([^/]++)(?|(*:651)|/edit(*:664)|(*:672))|store/([^/]++)(?|(*:698)|/edit(*:711)|(*:719))|type/([^/]++)(?|(*:744)|/edit(*:757)|(*:765))))|email_templates/([^/]++)(?|(*:803)|/edit(*:816)|(*:824))|general_message/([^/]++)(?|(*:860)|/edit(*:873)|(*:881))|loyalty_(?|message/([^/]++)(?|(*:920)|/edit(*:933)|(*:941))|point/([^/]++)(?|(*:967)|/edit(*:980)|(*:988)))|store/([^/]++)(?|(*:1015)|/edit(*:1029)|(*:1038))|app_users/([^/]++)(?|(*:1069)|/edit(*:1083)|(*:1092))))|/oauth/(?|tokens/([^/]++)(*:1129)|clients/([^/]++)(?|(*:1157))|personal\\-access\\-tokens/([^/]++)(*:1200))|/admin/(?|c(?|ms_(?|users/([^/]++)(?|(*:1247)|/edit(*:1261)|(*:1270))|pages/([^/]++)(?|(*:1297)|/edit(*:1311)|(*:1320)))|ategory/([^/]++)(?|(*:1350)|/edit(*:1364)|(*:1373))|oupon/([^/]++)(?|(*:1400)|/edit(*:1414)|(*:1423))|hannel(?|/([^/]++)(?|(*:1454)|/edit(*:1468)|(*:1477))|_post/([^/]++)(?|(*:1504)|/edit(*:1518)|(*:1527))))|r(?|oles/([^/]++)(?|(*:1559)|/edit(*:1573)|(*:1582))|ating_review/([^/]++)(?|(*:1616)|/edit(*:1630)|(*:1639))|eport_(?|notification/([^/]++)(?|(*:1682)|/edit(*:1696)|(*:1705))|store/([^/]++)(?|(*:1732)|/edit(*:1746)|(*:1755))|type/([^/]++)(?|(*:1781)|/edit(*:1795)|(*:1804))))|email_templates/([^/]++)(?|(*:1843)|/edit(*:1857)|(*:1866))|general_message/([^/]++)(?|(*:1903)|/edit(*:1917)|(*:1926))|loyalty_(?|message/([^/]++)(?|(*:1966)|/edit(*:1980)|(*:1989))|point/([^/]++)(?|(*:2016)|/edit(*:2030)|(*:2039)))|store/([^/]++)(?|(*:2067)|/edit(*:2081)|(*:2090))|app_users/([^/]++)(?|(*:2121)|/edit(*:2135)|(*:2144)))|/subadmin/(?|c(?|ms_(?|users/([^/]++)(?|(*:2195)|/edit(*:2209)|(*:2218))|pages/([^/]++)(?|(*:2245)|/edit(*:2259)|(*:2268)))|ategory/([^/]++)(?|(*:2298)|/edit(*:2312)|(*:2321))|oupon/([^/]++)(?|(*:2348)|/edit(*:2362)|(*:2371))|hannel(?|/([^/]++)(?|(*:2402)|/edit(*:2416)|(*:2425))|_post/([^/]++)(?|(*:2452)|/edit(*:2466)|(*:2475))))|r(?|oles/([^/]++)(?|(*:2507)|/edit(*:2521)|(*:2530))|ating_review/([^/]++)(?|(*:2564)|/edit(*:2578)|(*:2587))|eport_(?|notification/([^/]++)(?|(*:2630)|/edit(*:2644)|(*:2653))|store/([^/]++)(?|(*:2680)|/edit(*:2694)|(*:2703))|type/([^/]++)(?|(*:2729)|/edit(*:2743)|(*:2752))))|email_templates/([^/]++)(?|(*:2791)|/edit(*:2805)|(*:2814))|general_message/([^/]++)(?|(*:2851)|/edit(*:2865)|(*:2874))|loyalty_(?|message/([^/]++)(?|(*:2914)|/edit(*:2928)|(*:2937))|point/([^/]++)(?|(*:2964)|/edit(*:2978)|(*:2987)))|store/([^/]++)(?|(*:3015)|/edit(*:3029)|(*:3038))|app_users/([^/]++)(?|(*:3069)|/edit(*:3083)|(*:3092))))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.scripts',
          ),
          1 => 
          array (
            0 => 'script',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.styles',
          ),
          1 => 
          array (
            0 => 'style',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2FaifxsoHwWEHzC3',
            'config' => NULL,
          ),
          1 => 
          array (
            0 => 'config',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jzhoWBX6xARtz1j1',
            'config' => NULL,
          ),
          1 => 
          array (
            0 => 'config',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_users.show',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      253 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_users.edit',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_users.update',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_users.destroy',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_pages.show',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_pages.edit',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_pages.update',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.cms_pages.destroy',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.category.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.coupon.show',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.coupon.edit',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      405 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.coupon.update',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.coupon.destroy',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel.show',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel.edit',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel.update',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel.destroy',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.show',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.edit',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.update',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.channel_post.destroy',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      588 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.show',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      601 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.edit',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.update',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.rating_review.destroy',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_notification.show',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_notification.edit',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_notification.update',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_notification.destroy',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_store.show',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_store.edit',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_store.update',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_store.destroy',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_type.show',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_type.edit',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_type.update',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.report_type.destroy',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      803 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.email_templates.show',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.email_templates.edit',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      824 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.email_templates.update',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.email_templates.destroy',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.general_message.show',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      873 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.general_message.edit',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.general_message.update',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.general_message.destroy',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_message.show',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_message.edit',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_message.update',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_message.destroy',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_point.show',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_point.edit',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_point.update',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.loyalty_point.destroy',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.show',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.edit',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.update',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.store.destroy',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1069 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.app_users.show',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.app_users.edit',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1092 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.app_users.update',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cms.app_users.destroy',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_users.show',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_users.edit',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_users.update',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_users.destroy',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_pages.show',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_pages.edit',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_pages.update',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cms_pages.destroy',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1364 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.show',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.edit',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.update',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.coupon.destroy',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel.show',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel.edit',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel.update',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel.destroy',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1504 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.show',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1518 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.edit',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.update',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.channel_post.destroy',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1559 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1616 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.show',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.edit',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.update',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rating_review.destroy',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_notification.show',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_notification.edit',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_notification.update',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_notification.destroy',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1732 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_store.show',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1746 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_store.edit',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_store.update',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_store.destroy',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_type.show',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_type.edit',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_type.update',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report_type.destroy',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1843 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email_templates.show',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email_templates.edit',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email_templates.update',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.email_templates.destroy',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_message.show',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_message.edit',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1926 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_message.update',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general_message.destroy',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_message.show',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_message.edit',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_message.update',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_message.destroy',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2016 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_point.show',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2030 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_point.edit',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_point.update',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loyalty_point.destroy',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.show',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2081 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.edit',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.update',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store.destroy',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app_users.show',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app_users.edit',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app_users.update',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.app_users.destroy',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_users.show',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_users.edit',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_users.update',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_users.destroy',
          ),
          1 => 
          array (
            0 => 'cms_user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_pages.show',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_pages.edit',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_pages.update',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.cms_pages.destroy',
          ),
          1 => 
          array (
            0 => 'cms_page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.category.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.coupon.show',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.coupon.edit',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.coupon.update',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.coupon.destroy',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2402 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel.show',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel.edit',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel.update',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel.destroy',
          ),
          1 => 
          array (
            0 => 'channel',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.show',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.edit',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.update',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.channel_post.destroy',
          ),
          1 => 
          array (
            0 => 'channel_post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.show',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.edit',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.update',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.rating_review.destroy',
          ),
          1 => 
          array (
            0 => 'rating_review',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_notification.show',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_notification.edit',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_notification.update',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_notification.destroy',
          ),
          1 => 
          array (
            0 => 'report_notification',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_store.show',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_store.edit',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_store.update',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_store.destroy',
          ),
          1 => 
          array (
            0 => 'report_store',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_type.show',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_type.edit',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_type.update',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.report_type.destroy',
          ),
          1 => 
          array (
            0 => 'report_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.email_templates.show',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.email_templates.edit',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.email_templates.update',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.email_templates.destroy',
          ),
          1 => 
          array (
            0 => 'email_template',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2851 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.general_message.show',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.general_message.edit',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.general_message.update',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.general_message.destroy',
          ),
          1 => 
          array (
            0 => 'general_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_message.show',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_message.edit',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_message.update',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_message.destroy',
          ),
          1 => 
          array (
            0 => 'loyalty_message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_point.show',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_point.edit',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_point.update',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.loyalty_point.destroy',
          ),
          1 => 
          array (
            0 => 'loyalty_point',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.show',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.edit',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.update',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.store.destroy',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3069 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.app_users.show',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.app_users.edit',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3092 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.app_users.update',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subadmin.app_users.destroy',
          ),
          1 => 
          array (
            0 => 'app_user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableRunnableSolutions',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ignition.shareReport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/share-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableShareButton',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController',
        'as' => 'ignition.shareReport',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ignition.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/scripts/{script}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController',
        'as' => 'ignition.scripts',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ignition.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/styles/{style}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\StyleController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\StyleController',
        'as' => 'ignition.styles',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2FaifxsoHwWEHzC3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'captcha/api/{config?}',
      'action' => 
      array (
        'uses' => '\\Mews\\Captcha\\CaptchaController@getCaptchaApi',
        'controller' => '\\Mews\\Captcha\\CaptchaController@getCaptchaApi',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::2FaifxsoHwWEHzC3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jzhoWBX6xARtz1j1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'captcha/{config?}',
      'action' => 
      array (
        'uses' => '\\Mews\\Captcha\\CaptchaController@getCaptcha',
        'controller' => '\\Mews\\Captcha\\CaptchaController@getCaptcha',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::jzhoWBX6xARtz1j1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zDGQ20RGFbAyNhTD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/clear-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":484:{@XLHHxm70E0fIofibXxF9aFvFperwNSUkyHZvfdY5Ngo=.a:5:{s:3:"use";a:0:{}s:8:"function";s:274:"function() {
    $exitCode = \\Illuminate\\Support\\Facades\\Artisan::call(\'cache:clear\');
    $exitCode = \\Illuminate\\Support\\Facades\\Artisan::call(\'config:cache\');
    $exitCode = \\Illuminate\\Support\\Facades\\Artisan::call(\'route:cache\');
    return \'DONE\'; //Return anything
}";s:5:"scope";s:34:"App\\Providers\\RouteServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000002a7e0f79000000006bb37ffa";}}',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::zDGQ20RGFbAyNhTD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SMlq0YNLrs4UHZwT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/pages/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PagesController@all',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PagesController@all',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::SMlq0YNLrs4UHZwT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eCCxkAYXQCvRPXBn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/pages/detailBySlug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PagesController@detailBySlug',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PagesController@detailBySlug',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::eCCxkAYXQCvRPXBn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DhY4D4dCbB7Iv8IA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/pages/detailByLangAndSlug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PagesController@detailByLangAndSlug',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PagesController@detailByLangAndSlug',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::DhY4D4dCbB7Iv8IA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bjtu9ec0SQ1xri8o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@login',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::bjtu9ec0SQ1xri8o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gzbSUpSXF8AiHH2H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@register',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@register',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::gzbSUpSXF8AiHH2H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::spyXDMzUb9BzjrIG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/socialLogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@socialLogin',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@socialLogin',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::spyXDMzUb9BzjrIG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::02DdOWnQvv56sEi3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/verifyAccount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@verifyAccount',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@verifyAccount',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::02DdOWnQvv56sEi3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lI4Y5ElIwh0ka7MW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/resendOtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@resendOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@resendOtp',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::lI4Y5ElIwh0ka7MW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7DQkGD7AnaHQjmIQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/forgotPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@forgotPassword',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7DQkGD7AnaHQjmIQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aVeF3zGjIsw1Iq65' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/verifyOtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@verifyOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@verifyOtp',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::aVeF3zGjIsw1Iq65',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LUNhV61InvfwUkQl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/resetPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@resetPassword',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::LUNhV61InvfwUkQl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::C4Lw8Tuw6pL1cAfZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/categories/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@all',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CategoryController@all',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::C4Lw8Tuw6pL1cAfZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZdBHDxs1rOGymJBp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/stores/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StoreController@all',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StoreController@all',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ZdBHDxs1rOGymJBp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZpaWM86jsI8Ouvta' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/stores/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StoreController@detail',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StoreController@detail',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ZpaWM86jsI8Ouvta',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6dR9R4cv1XHWc2Mr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@detail',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@detail',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6dR9R4cv1XHWc2Mr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0LXnzclC1Z2Xln68' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/changePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@changePassword',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::0LXnzclC1Z2Xln68',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jjWouQeq0vpngu4P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/updateProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@updateProfile',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::jjWouQeq0vpngu4P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DFopGU9Hg7x2iZLQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/removeSearchFilter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@removeSearchFilter',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@removeSearchFilter',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::DFopGU9Hg7x2iZLQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bTWH1h5gTPSuxvzi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@logout',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::bTWH1h5gTPSuxvzi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9YzeVnWkuQp6kw7E' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/coupons/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CouponsController@all',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CouponsController@all',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::9YzeVnWkuQp6kw7E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::U5FecbqNI8S8KHrV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/coupons/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CouponsController@detail',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CouponsController@detail',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::U5FecbqNI8S8KHrV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::L9mTec1k3PaP69mx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/coupons/updateRedeem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CouponsController@updateRedeem',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CouponsController@updateRedeem',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::L9mTec1k3PaP69mx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PvNCUZjSijEqRlLO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/offers/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\OffersController@all',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\OffersController@all',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::PvNCUZjSijEqRlLO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yhlXdx5uBSlmokKx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/offers/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\OffersController@detail',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\OffersController@detail',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::yhlXdx5uBSlmokKx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cu1vivGVrEwoY80h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/contactus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ContactUsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ContactUsController@index',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::cu1vivGVrEwoY80h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3L7H6NugfgsHQRD4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/favourite/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FavouriteController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FavouriteController@store',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::3L7H6NugfgsHQRD4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qdyjD0Bzna7L1RLG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/favourite/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FavouriteController@allByUserId',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FavouriteController@allByUserId',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::qdyjD0Bzna7L1RLG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Nl4zpzOmeS9TdUZk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/ratingReview/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\RatingReviewController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\RatingReviewController@store',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Nl4zpzOmeS9TdUZk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p5DpYAGWPLRBvhkN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/ratingReview/allByStoreId',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\RatingReviewController@allByStoreId',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\RatingReviewController@allByStoreId',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::p5DpYAGWPLRBvhkN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ilSj5r304QSdY8ee' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/ratingReview/allByUserId',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\RatingReviewController@allByUserId',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\RatingReviewController@allByUserId',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ilSj5r304QSdY8ee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::obgrrt3lPcK4e1o0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/ratingReview/likeReview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\RatingReviewController@likeReview',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\RatingReviewController@likeReview',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::obgrrt3lPcK4e1o0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::z6y27o2soMTihDPt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/report/typeList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportController@typeList',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportController@typeList',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::z6y27o2soMTihDPt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ceqd2gTOaqiDfitj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/report/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ReportController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ReportController@store',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Ceqd2gTOaqiDfitj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::95LIqzypCXffmODU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/channels/allByStoreId',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ChannelsController@allByStoreId',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ChannelsController@allByStoreId',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::95LIqzypCXffmODU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aceeVJXTwMgeZj6y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/channels/allByChannelId',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ChannelsPostsController@allByChannelId',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ChannelsPostsController@allByChannelId',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::aceeVJXTwMgeZj6y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BdYSThMUVcFykRXs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/channels/postDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ChannelsPostsController@detail',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ChannelsPostsController@detail',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::BdYSThMUVcFykRXs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dyeeYoVS68mySX0T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications/updateSetting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@updateSetting',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@updateSetting',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dyeeYoVS68mySX0T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eW0s9PhsERXXdM75' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications/getSetting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@getSetting',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@getSetting',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::eW0s9PhsERXXdM75',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9BsGTbokaCFk1Znq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@remove',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@remove',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::9BsGTbokaCFk1Znq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Uc0yRR2RZtqZIbvz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@count',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@count',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Uc0yRR2RZtqZIbvz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9wShdbGNztP7U6RE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications/read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@read',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@read',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::9wShdbGNztP7U6RE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vfFVOAVfY7OyxRUU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications/reportStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@reportStore',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@reportStore',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::vfFVOAVfY7OyxRUU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::V8Qi84kAMTDgqsji' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications/allByUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@allByUser',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationsController@allByUser',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::V8Qi84kAMTDgqsji',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::b7OGQv7gtyNn9WOV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/loyalty/myPoints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LoyaltyController@myPoints',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LoyaltyController@myPoints',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::b7OGQv7gtyNn9WOV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Sm4cwaXLY8JWkSrA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/loyalty/myPointsHistory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v1',
          2 => 'auth:api_version',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\LoyaltyController@myPointsHistory',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\LoyaltyController@myPointsHistory',
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Sm4cwaXLY8JWkSrA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5TDenNC7LSTforzX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v2/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api_version:v2',
          2 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":286:{@aP/sX22BEPR9Le/kNdOqiHjnHJ6vhh1TOoxZowdXH0s=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:34:"App\\Providers\\RouteServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000002a7e0f85000000006bb37ffa";}}',
        'namespace' => 'App\\Http\\Controllers\\Api\\V2',
        'prefix' => 'api/v2',
        'where' => 
        array (
        ),
        'as' => 'generated::5TDenNC7LSTforzX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'adminLogin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@getLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@getLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'adminLogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'adminLoginPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@postLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@postLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'adminLoginPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'adminLogout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'adminLogout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cmsLogin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@getLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@getLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cmsLogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cmsLoginPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@postLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@postLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cmsLoginPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cmsLogout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cmsLogout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadminLogin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@getLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@getLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'subadminLogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadminLoginPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@postLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@postLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'subadminLoginPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadminLogout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\AdminAuthController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'subadminLogout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_users.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms_users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_users.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cms_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_users.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms_users/{cms_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_users.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms_users/{cms_user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_users.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/cms_users/{cms_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_users.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/cms_users/{cms_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_users.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.roles.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.roles.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.roles.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.roles.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.roles.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.roles.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.destroyMultipleRole' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleRole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@destroyMultipleRole',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@destroyMultipleRole',
        'as' => 'admin.roles.destroyMultipleRole',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@dashboard',
        'as' => 'admin.dashboard',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.category.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.category.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.category.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.category.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.category.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.category.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.category.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.changeCategoryStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeCategoryStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryStatus',
        'as' => 'admin.category.changeCategoryStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.changeCategoryFilterType' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeCategoryFilterType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryFilterType',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryFilterType',
        'as' => 'admin.category.changeCategoryFilterType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.destroyMultipleCategory' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroyMultipleCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroyMultipleCategory',
        'as' => 'admin.category.destroyMultipleCategory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.filterMultipleCategory' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/filterMultipleCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@filterMultipleCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@filterMultipleCategory',
        'as' => 'admin.category.filterMultipleCategory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.category.statusMultipleCategory' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@statusMultipleCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@statusMultipleCategory',
        'as' => 'admin.category.statusMultipleCategory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.coupon.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.coupon.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.coupon.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.coupon.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/{coupon}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.coupon.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.coupon.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.coupon.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.changeCouponStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeCouponStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@changeCouponStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@changeCouponStatus',
        'as' => 'admin.coupon.changeCouponStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.destroyMultipleCoupon' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleCoupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@destroyMultipleCoupon',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@destroyMultipleCoupon',
        'as' => 'admin.coupon.destroyMultipleCoupon',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.coupon.statusMultipleCoupon' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleCoupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@statusMultipleCoupon',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@statusMultipleCoupon',
        'as' => 'admin.coupon.statusMultipleCoupon',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating_review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.rating_review.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating_review/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.rating_review.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/rating_review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.rating_review.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating_review/{rating_review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.rating_review.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating_review/{rating_review}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.rating_review.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/rating_review/{rating_review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.rating_review.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/rating_review/{rating_review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.rating_review.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.changeRatingReviewStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeRatingReviewStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@changeRatingReviewStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@changeRatingReviewStatus',
        'as' => 'admin.rating_review.changeRatingReviewStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.destroyMultipleRatingReview' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleRatingReview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyMultipleRatingReview',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyMultipleRatingReview',
        'as' => 'admin.rating_review.destroyMultipleRatingReview',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.statusMultipleRatingReview' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleRatingReview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@statusMultipleRatingReview',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@statusMultipleRatingReview',
        'as' => 'admin.rating_review.statusMultipleRatingReview',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rating_review.destroyImage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyImage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyImage',
        'as' => 'admin.rating_review.destroyImage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms_pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_pages.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms_pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_pages.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cms_pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_pages.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms_pages/{cms_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_pages.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cms_pages/{cms_page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_pages.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/cms_pages/{cms_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_pages.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/cms_pages/{cms_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.cms_pages.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_pages.changeCmsPageStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeCmsPageStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@changeCmsPageStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@changeCmsPageStatus',
        'as' => 'admin.cms_pages.changeCmsPageStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_pages.statusMultipleCmsPage' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleCmsPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@statusMultipleCmsPage',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@statusMultipleCmsPage',
        'as' => 'admin.cms_pages.statusMultipleCmsPage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_notification.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_notification.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_notification.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_notification/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_notification.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_notification.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/report_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_notification.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_notification.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_notification/{report_notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_notification.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_notification.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_notification/{report_notification}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_notification.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_notification.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/report_notification/{report_notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_notification.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_notification.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/report_notification/{report_notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_notification.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_store.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_store.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_store.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_store/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_store.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_store.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/report_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_store.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_store.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_store/{report_store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_store.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_store.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_store/{report_store}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_store.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_store.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/report_store/{report_store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_store.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_store.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/report_store/{report_store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_store.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_store.changeReportStoreStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeReportStoreStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@changeReportStoreStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@changeReportStoreStatus',
        'as' => 'admin.report_store.changeReportStoreStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_store.destroyMultipleReportStore' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleReportStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroyMultipleReportStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroyMultipleReportStore',
        'as' => 'admin.report_store.destroyMultipleReportStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_store.statusMultipleReportStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleReportStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@statusMultipleReportStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@statusMultipleReportStore',
        'as' => 'admin.report_store.statusMultipleReportStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_type.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_type.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/report_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_type.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_type/{report_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_type.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/report_type/{report_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_type.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/report_type/{report_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_type.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/report_type/{report_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.report_type.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_type.changeReportTypeStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeReportTypeStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@changeReportTypeStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@changeReportTypeStatus',
        'as' => 'admin.report_type.changeReportTypeStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_type.destroyMultipleReportType' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleReportType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroyMultipleReportType',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroyMultipleReportType',
        'as' => 'admin.report_type.destroyMultipleReportType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.report_type.statusMultipleReportType' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleReportType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@statusMultipleReportType',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@statusMultipleReportType',
        'as' => 'admin.report_type.statusMultipleReportType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channel/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/channel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channel/{channel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channel/{channel}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/channel/{channel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/channel/{channel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel.changeChannelStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeChannelStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@changeChannelStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@changeChannelStatus',
        'as' => 'admin.channel.changeChannelStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel.destroyMultipleChannel' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleChannel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroyMultipleChannel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroyMultipleChannel',
        'as' => 'admin.channel.destroyMultipleChannel',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel.statusMultipleChannel' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleChannel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@statusMultipleChannel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@statusMultipleChannel',
        'as' => 'admin.channel.statusMultipleChannel',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channel_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel_post.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channel_post/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel_post.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/channel_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel_post.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channel_post/{channel_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel_post.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channel_post/{channel_post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel_post.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/channel_post/{channel_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel_post.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/channel_post/{channel_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.channel_post.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.changeChannelPostStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeChannelPostStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@changeChannelPostStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@changeChannelPostStatus',
        'as' => 'admin.channel_post.changeChannelPostStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.destroyMultipleChannelPost' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleChannelPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroyMultipleChannelPost',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroyMultipleChannelPost',
        'as' => 'admin.channel_post.destroyMultipleChannelPost',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.statusMultipleChannelPost' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleChannelPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@statusMultipleChannelPost',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@statusMultipleChannelPost',
        'as' => 'admin.channel_post.statusMultipleChannelPost',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.channel_post.channelCategoryFilter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/channelCategoryFilter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@channelCategoryFilter',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@channelCategoryFilter',
        'as' => 'admin.channel_post.channelCategoryFilter',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email_templates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email_templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.email_templates.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email_templates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email_templates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.email_templates.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email_templates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/email_templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.email_templates.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email_templates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email_templates/{email_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.email_templates.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email_templates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email_templates/{email_template}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.email_templates.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email_templates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/email_templates/{email_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.email_templates.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email_templates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/email_templates/{email_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.email_templates.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email_templates.changeEmailTemplateStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeEmailTemplateStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@changeEmailTemplateStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@changeEmailTemplateStatus',
        'as' => 'admin.email_templates.changeEmailTemplateStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.email_templates.statusMultipleEmailTemplate' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleEmailTemplate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@statusMultipleEmailTemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@statusMultipleEmailTemplate',
        'as' => 'admin.email_templates.statusMultipleEmailTemplate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_message.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.general_message.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_message.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general_message/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.general_message.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_message.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.general_message.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_message.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general_message/{general_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.general_message.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_message.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general_message/{general_message}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.general_message.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_message.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/general_message/{general_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.general_message.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_message.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/general_message/{general_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.general_message.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_message.changeGeneralMessageStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeGeneralMessageStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@changeGeneralMessageStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@changeGeneralMessageStatus',
        'as' => 'admin.general_message.changeGeneralMessageStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_message.destroyMultipleGeneralMessage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleGeneralMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroyMultipleGeneralMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroyMultipleGeneralMessage',
        'as' => 'admin.general_message.destroyMultipleGeneralMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.general_message.statusMultipleGeneralMessage' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleGeneralMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@statusMultipleGeneralMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@statusMultipleGeneralMessage',
        'as' => 'admin.general_message.statusMultipleGeneralMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_message.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/loyalty_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_message.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_message.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/loyalty_message/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_message.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_message.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/loyalty_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_message.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_message.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/loyalty_message/{loyalty_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_message.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_message.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/loyalty_message/{loyalty_message}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_message.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_message.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/loyalty_message/{loyalty_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_message.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_message.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/loyalty_message/{loyalty_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_message.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_message.changeLoyaltyMessageStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeLoyaltyMessageStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@changeLoyaltyMessageStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@changeLoyaltyMessageStatus',
        'as' => 'admin.loyalty_message.changeLoyaltyMessageStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_message.destroyMultipleLoyaltyMessage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleLoyaltyMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroyMultipleLoyaltyMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroyMultipleLoyaltyMessage',
        'as' => 'admin.loyalty_message.destroyMultipleLoyaltyMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_message.statusMultipleLoyaltyMessage' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleLoyaltyMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@statusMultipleLoyaltyMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@statusMultipleLoyaltyMessage',
        'as' => 'admin.loyalty_message.statusMultipleLoyaltyMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_point.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/loyalty_point',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_point.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_point.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/loyalty_point/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_point.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_point.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/loyalty_point',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_point.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_point.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/loyalty_point/{loyalty_point}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_point.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_point.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/loyalty_point/{loyalty_point}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_point.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_point.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/loyalty_point/{loyalty_point}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_point.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_point.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/loyalty_point/{loyalty_point}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.loyalty_point.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_point.destroyMultipleLoyaltyPoint' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleLoyaltyPoint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroyMultipleLoyaltyPoint',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroyMultipleLoyaltyPoint',
        'as' => 'admin.loyalty_point.destroyMultipleLoyaltyPoint',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loyalty_point.pointHistory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pointHistory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@pointHistory',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@pointHistory',
        'as' => 'admin.loyalty_point.pointHistory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.configs.configs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@configs',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@configs',
        'as' => 'admin.configs.configs',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.configs.configStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/configStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@configStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@configStore',
        'as' => 'admin.configs.configStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.password.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@password',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@password',
        'as' => 'admin.password.password',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.password.passwordStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/passwordStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@passwordStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@passwordStore',
        'as' => 'admin.password.passwordStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.profile.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@profile',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@profile',
        'as' => 'admin.profile.profile',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.profile.profileStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/profileStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@profileStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@profileStore',
        'as' => 'admin.profile.profileStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.store.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/store/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.store.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.store.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.store.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/store/{store}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.store.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.store.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.store.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.changeStoreStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeStoreStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreStatus',
        'as' => 'admin.store.changeStoreStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.changeStorePartnerType' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeStorePartnerType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStorePartnerType',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStorePartnerType',
        'as' => 'admin.store.changeStorePartnerType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.changeStoreVerification' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeStoreVerification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreVerification',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreVerification',
        'as' => 'admin.store.changeStoreVerification',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.destroyMultipleStore' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyMultipleStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyMultipleStore',
        'as' => 'admin.store.destroyMultipleStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.typeMultipleStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/typeMultipleStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@typeMultipleStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@typeMultipleStore',
        'as' => 'admin.store.typeMultipleStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.statusMultipleStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@statusMultipleStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@statusMultipleStore',
        'as' => 'admin.store.statusMultipleStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.store.destroyStoreImage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyStoreImage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyStoreImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyStoreImage',
        'as' => 'admin.store.destroyStoreImage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.app_users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/app_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.app_users.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.app_users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/app_users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.app_users.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.app_users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/app_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.app_users.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.app_users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/app_users/{app_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.app_users.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.app_users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/app_users/{app_user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.app_users.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.app_users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/app_users/{app_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.app_users.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.app_users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/app_users/{app_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'admin.app_users.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.app_users.changeAppUserStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeAppUserStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@changeAppUserStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@changeAppUserStatus',
        'as' => 'admin.app_users.changeAppUserStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.app_users.destroyMultipleAppUser' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleAppUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroyMultipleAppUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroyMultipleAppUser',
        'as' => 'admin.app_users.destroyMultipleAppUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.app_users.statusMultipleAppUser' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleAppUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@statusMultipleAppUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@statusMultipleAppUser',
        'as' => 'admin.app_users.statusMultipleAppUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_users.changeCmsUserStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/changeCmsUserStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@changeCmsUserStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@changeCmsUserStatus',
        'as' => 'admin.cms_users.changeCmsUserStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_users.destroyMultipleCmsUser' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/destroyMultipleCmsUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroyMultipleCmsUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroyMultipleCmsUser',
        'as' => 'admin.cms_users.destroyMultipleCmsUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cms_users.statusMultipleCmsUser' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/statusMultipleCmsUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@statusMultipleCmsUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@statusMultipleCmsUser',
        'as' => 'admin.cms_users.statusMultipleCmsUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.ckeditor.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ckeditor_upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CkeditorController@upload',
        'controller' => 'App\\Http\\Controllers\\Admin\\CkeditorController@upload',
        'as' => 'admin.ckeditor.upload',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/cms_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_users.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/cms_users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_users.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/cms_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_users.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/cms_users/{cms_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_users.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/cms_users/{cms_user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_users.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/cms_users/{cms_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_users.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/cms_users/{cms_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_users.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.roles.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.roles.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.roles.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.roles.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.roles.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.roles.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.roles.destroyMultipleRole' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleRole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@destroyMultipleRole',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@destroyMultipleRole',
        'as' => 'cms.roles.destroyMultipleRole',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@dashboard',
        'as' => 'cms.dashboard',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.category.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.category.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.category.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.category.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/category/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.category.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.category.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.category.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.changeCategoryStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeCategoryStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryStatus',
        'as' => 'cms.category.changeCategoryStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.changeCategoryFilterType' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeCategoryFilterType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryFilterType',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryFilterType',
        'as' => 'cms.category.changeCategoryFilterType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.destroyMultipleCategory' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroyMultipleCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroyMultipleCategory',
        'as' => 'cms.category.destroyMultipleCategory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.filterMultipleCategory' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/filterMultipleCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@filterMultipleCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@filterMultipleCategory',
        'as' => 'cms.category.filterMultipleCategory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.category.statusMultipleCategory' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@statusMultipleCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@statusMultipleCategory',
        'as' => 'cms.category.statusMultipleCategory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.coupon.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.coupon.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.coupon.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/coupon/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.coupon.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.coupon.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.coupon.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.coupon.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.coupon.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.coupon.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/coupon/{coupon}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.coupon.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.coupon.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.coupon.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.coupon.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.coupon.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.coupon.changeCouponStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeCouponStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@changeCouponStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@changeCouponStatus',
        'as' => 'cms.coupon.changeCouponStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.coupon.destroyMultipleCoupon' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleCoupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@destroyMultipleCoupon',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@destroyMultipleCoupon',
        'as' => 'cms.coupon.destroyMultipleCoupon',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.coupon.statusMultipleCoupon' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleCoupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@statusMultipleCoupon',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@statusMultipleCoupon',
        'as' => 'cms.coupon.statusMultipleCoupon',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/rating_review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.rating_review.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/rating_review/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.rating_review.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/rating_review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.rating_review.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/rating_review/{rating_review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.rating_review.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/rating_review/{rating_review}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.rating_review.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/rating_review/{rating_review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.rating_review.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/rating_review/{rating_review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.rating_review.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.changeRatingReviewStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeRatingReviewStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@changeRatingReviewStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@changeRatingReviewStatus',
        'as' => 'cms.rating_review.changeRatingReviewStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.destroyMultipleRatingReview' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleRatingReview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyMultipleRatingReview',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyMultipleRatingReview',
        'as' => 'cms.rating_review.destroyMultipleRatingReview',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.statusMultipleRatingReview' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleRatingReview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@statusMultipleRatingReview',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@statusMultipleRatingReview',
        'as' => 'cms.rating_review.statusMultipleRatingReview',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.rating_review.destroyImage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyImage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyImage',
        'as' => 'cms.rating_review.destroyImage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/cms_pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_pages.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/cms_pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_pages.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/cms_pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_pages.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/cms_pages/{cms_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_pages.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/cms_pages/{cms_page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_pages.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/cms_pages/{cms_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_pages.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/cms_pages/{cms_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.cms_pages.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_pages.changeCmsPageStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeCmsPageStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@changeCmsPageStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@changeCmsPageStatus',
        'as' => 'cms.cms_pages.changeCmsPageStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_pages.statusMultipleCmsPage' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleCmsPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@statusMultipleCmsPage',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@statusMultipleCmsPage',
        'as' => 'cms.cms_pages.statusMultipleCmsPage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_notification.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_notification.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_notification.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_notification/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_notification.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_notification.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/report_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_notification.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_notification.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_notification/{report_notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_notification.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_notification.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_notification/{report_notification}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_notification.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_notification.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/report_notification/{report_notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_notification.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_notification.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/report_notification/{report_notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_notification.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_store.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_store.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_store.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_store/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_store.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_store.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/report_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_store.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_store.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_store/{report_store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_store.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_store.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_store/{report_store}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_store.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_store.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/report_store/{report_store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_store.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_store.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/report_store/{report_store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_store.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_store.changeReportStoreStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeReportStoreStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@changeReportStoreStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@changeReportStoreStatus',
        'as' => 'cms.report_store.changeReportStoreStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_store.destroyMultipleReportStore' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleReportStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroyMultipleReportStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroyMultipleReportStore',
        'as' => 'cms.report_store.destroyMultipleReportStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_store.statusMultipleReportStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleReportStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@statusMultipleReportStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@statusMultipleReportStore',
        'as' => 'cms.report_store.statusMultipleReportStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_type.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_type.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/report_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_type.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_type/{report_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_type.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/report_type/{report_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_type.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/report_type/{report_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_type.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/report_type/{report_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.report_type.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_type.changeReportTypeStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeReportTypeStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@changeReportTypeStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@changeReportTypeStatus',
        'as' => 'cms.report_type.changeReportTypeStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_type.destroyMultipleReportType' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleReportType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroyMultipleReportType',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroyMultipleReportType',
        'as' => 'cms.report_type.destroyMultipleReportType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.report_type.statusMultipleReportType' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleReportType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@statusMultipleReportType',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@statusMultipleReportType',
        'as' => 'cms.report_type.statusMultipleReportType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/channel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/channel/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/channel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/channel/{channel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/channel/{channel}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/channel/{channel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/channel/{channel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel.changeChannelStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeChannelStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@changeChannelStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@changeChannelStatus',
        'as' => 'cms.channel.changeChannelStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel.destroyMultipleChannel' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleChannel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroyMultipleChannel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroyMultipleChannel',
        'as' => 'cms.channel.destroyMultipleChannel',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel.statusMultipleChannel' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleChannel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@statusMultipleChannel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@statusMultipleChannel',
        'as' => 'cms.channel.statusMultipleChannel',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/channel_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel_post.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/channel_post/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel_post.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/channel_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel_post.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/channel_post/{channel_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel_post.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/channel_post/{channel_post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel_post.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/channel_post/{channel_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel_post.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/channel_post/{channel_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.channel_post.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.changeChannelPostStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeChannelPostStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@changeChannelPostStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@changeChannelPostStatus',
        'as' => 'cms.channel_post.changeChannelPostStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.destroyMultipleChannelPost' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleChannelPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroyMultipleChannelPost',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroyMultipleChannelPost',
        'as' => 'cms.channel_post.destroyMultipleChannelPost',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.statusMultipleChannelPost' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleChannelPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@statusMultipleChannelPost',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@statusMultipleChannelPost',
        'as' => 'cms.channel_post.statusMultipleChannelPost',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.channel_post.channelCategoryFilter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/channelCategoryFilter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@channelCategoryFilter',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@channelCategoryFilter',
        'as' => 'cms.channel_post.channelCategoryFilter',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.email_templates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/email_templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.email_templates.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.email_templates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/email_templates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.email_templates.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.email_templates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/email_templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.email_templates.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.email_templates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/email_templates/{email_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.email_templates.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.email_templates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/email_templates/{email_template}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.email_templates.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.email_templates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/email_templates/{email_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.email_templates.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.email_templates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/email_templates/{email_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.email_templates.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.email_templates.changeEmailTemplateStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeEmailTemplateStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@changeEmailTemplateStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@changeEmailTemplateStatus',
        'as' => 'cms.email_templates.changeEmailTemplateStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.email_templates.statusMultipleEmailTemplate' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleEmailTemplate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@statusMultipleEmailTemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@statusMultipleEmailTemplate',
        'as' => 'cms.email_templates.statusMultipleEmailTemplate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.general_message.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/general_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.general_message.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.general_message.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/general_message/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.general_message.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.general_message.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/general_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.general_message.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.general_message.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/general_message/{general_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.general_message.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.general_message.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/general_message/{general_message}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.general_message.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.general_message.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/general_message/{general_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.general_message.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.general_message.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/general_message/{general_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.general_message.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.general_message.changeGeneralMessageStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeGeneralMessageStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@changeGeneralMessageStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@changeGeneralMessageStatus',
        'as' => 'cms.general_message.changeGeneralMessageStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.general_message.destroyMultipleGeneralMessage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleGeneralMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroyMultipleGeneralMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroyMultipleGeneralMessage',
        'as' => 'cms.general_message.destroyMultipleGeneralMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.general_message.statusMultipleGeneralMessage' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleGeneralMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@statusMultipleGeneralMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@statusMultipleGeneralMessage',
        'as' => 'cms.general_message.statusMultipleGeneralMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_message.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/loyalty_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_message.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_message.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/loyalty_message/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_message.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_message.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/loyalty_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_message.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_message.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/loyalty_message/{loyalty_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_message.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_message.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/loyalty_message/{loyalty_message}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_message.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_message.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/loyalty_message/{loyalty_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_message.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_message.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/loyalty_message/{loyalty_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_message.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_message.changeLoyaltyMessageStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeLoyaltyMessageStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@changeLoyaltyMessageStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@changeLoyaltyMessageStatus',
        'as' => 'cms.loyalty_message.changeLoyaltyMessageStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_message.destroyMultipleLoyaltyMessage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleLoyaltyMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroyMultipleLoyaltyMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroyMultipleLoyaltyMessage',
        'as' => 'cms.loyalty_message.destroyMultipleLoyaltyMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_message.statusMultipleLoyaltyMessage' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleLoyaltyMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@statusMultipleLoyaltyMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@statusMultipleLoyaltyMessage',
        'as' => 'cms.loyalty_message.statusMultipleLoyaltyMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_point.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/loyalty_point',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_point.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_point.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/loyalty_point/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_point.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_point.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/loyalty_point',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_point.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_point.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/loyalty_point/{loyalty_point}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_point.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_point.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/loyalty_point/{loyalty_point}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_point.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_point.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/loyalty_point/{loyalty_point}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_point.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_point.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/loyalty_point/{loyalty_point}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.loyalty_point.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_point.destroyMultipleLoyaltyPoint' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleLoyaltyPoint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroyMultipleLoyaltyPoint',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroyMultipleLoyaltyPoint',
        'as' => 'cms.loyalty_point.destroyMultipleLoyaltyPoint',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.loyalty_point.pointHistory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/pointHistory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@pointHistory',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@pointHistory',
        'as' => 'cms.loyalty_point.pointHistory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.configs.configs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/settings/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@configs',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@configs',
        'as' => 'cms.configs.configs',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.configs.configStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/settings/configStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@configStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@configStore',
        'as' => 'cms.configs.configStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.password.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/settings/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@password',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@password',
        'as' => 'cms.password.password',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.password.passwordStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/settings/passwordStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@passwordStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@passwordStore',
        'as' => 'cms.password.passwordStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.profile.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/settings/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@profile',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@profile',
        'as' => 'cms.profile.profile',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.profile.profileStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/settings/profileStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@profileStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@profileStore',
        'as' => 'cms.profile.profileStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.store.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/store/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.store.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.store.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.store.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/store/{store}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.store.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.store.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.store.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.changeStoreStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeStoreStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreStatus',
        'as' => 'cms.store.changeStoreStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.changeStorePartnerType' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeStorePartnerType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStorePartnerType',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStorePartnerType',
        'as' => 'cms.store.changeStorePartnerType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.changeStoreVerification' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeStoreVerification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreVerification',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreVerification',
        'as' => 'cms.store.changeStoreVerification',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.destroyMultipleStore' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyMultipleStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyMultipleStore',
        'as' => 'cms.store.destroyMultipleStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.typeMultipleStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/typeMultipleStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@typeMultipleStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@typeMultipleStore',
        'as' => 'cms.store.typeMultipleStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.statusMultipleStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@statusMultipleStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@statusMultipleStore',
        'as' => 'cms.store.statusMultipleStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.store.destroyStoreImage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyStoreImage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyStoreImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyStoreImage',
        'as' => 'cms.store.destroyStoreImage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.app_users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/app_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.app_users.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.app_users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/app_users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.app_users.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.app_users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/app_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.app_users.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.app_users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/app_users/{app_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.app_users.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.app_users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cms/app_users/{app_user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.app_users.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.app_users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cms/app_users/{app_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.app_users.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.app_users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/app_users/{app_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'cms.app_users.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.app_users.changeAppUserStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeAppUserStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@changeAppUserStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@changeAppUserStatus',
        'as' => 'cms.app_users.changeAppUserStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.app_users.destroyMultipleAppUser' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleAppUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroyMultipleAppUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroyMultipleAppUser',
        'as' => 'cms.app_users.destroyMultipleAppUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.app_users.statusMultipleAppUser' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleAppUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@statusMultipleAppUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@statusMultipleAppUser',
        'as' => 'cms.app_users.statusMultipleAppUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_users.changeCmsUserStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/changeCmsUserStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@changeCmsUserStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@changeCmsUserStatus',
        'as' => 'cms.cms_users.changeCmsUserStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_users.destroyMultipleCmsUser' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cms/destroyMultipleCmsUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroyMultipleCmsUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroyMultipleCmsUser',
        'as' => 'cms.cms_users.destroyMultipleCmsUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.cms_users.statusMultipleCmsUser' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'cms/statusMultipleCmsUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@statusMultipleCmsUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@statusMultipleCmsUser',
        'as' => 'cms.cms_users.statusMultipleCmsUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cms.ckeditor.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cms/ckeditor_upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CkeditorController@upload',
        'controller' => 'App\\Http\\Controllers\\Admin\\CkeditorController@upload',
        'as' => 'cms.ckeditor.upload',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/cms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/cms_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_users.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/cms_users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_users.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/cms_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_users.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/cms_users/{cms_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_users.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/cms_users/{cms_user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_users.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/cms_users/{cms_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_users.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/cms_users/{cms_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_users.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.roles.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.roles.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.roles.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.roles.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.roles.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.roles.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.roles.destroyMultipleRole' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleRole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@destroyMultipleRole',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@destroyMultipleRole',
        'as' => 'subadmin.roles.destroyMultipleRole',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@dashboard',
        'as' => 'subadmin.dashboard',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.category.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.category.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.category.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.category.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/category/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.category.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.category.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.category.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.changeCategoryStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeCategoryStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryStatus',
        'as' => 'subadmin.category.changeCategoryStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.changeCategoryFilterType' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeCategoryFilterType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryFilterType',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@changeCategoryFilterType',
        'as' => 'subadmin.category.changeCategoryFilterType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.destroyMultipleCategory' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroyMultipleCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroyMultipleCategory',
        'as' => 'subadmin.category.destroyMultipleCategory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.filterMultipleCategory' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/filterMultipleCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@filterMultipleCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@filterMultipleCategory',
        'as' => 'subadmin.category.filterMultipleCategory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.category.statusMultipleCategory' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@statusMultipleCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@statusMultipleCategory',
        'as' => 'subadmin.category.statusMultipleCategory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.coupon.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.coupon.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.coupon.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/coupon/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.coupon.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.coupon.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.coupon.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.coupon.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.coupon.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.coupon.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/coupon/{coupon}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.coupon.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.coupon.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.coupon.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.coupon.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/coupon/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.coupon.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.coupon.changeCouponStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeCouponStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@changeCouponStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@changeCouponStatus',
        'as' => 'subadmin.coupon.changeCouponStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.coupon.destroyMultipleCoupon' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleCoupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@destroyMultipleCoupon',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@destroyMultipleCoupon',
        'as' => 'subadmin.coupon.destroyMultipleCoupon',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.coupon.statusMultipleCoupon' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleCoupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CouponController@statusMultipleCoupon',
        'controller' => 'App\\Http\\Controllers\\Admin\\CouponController@statusMultipleCoupon',
        'as' => 'subadmin.coupon.statusMultipleCoupon',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/rating_review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.rating_review.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/rating_review/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.rating_review.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/rating_review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.rating_review.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/rating_review/{rating_review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.rating_review.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/rating_review/{rating_review}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.rating_review.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/rating_review/{rating_review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.rating_review.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/rating_review/{rating_review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.rating_review.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.changeRatingReviewStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeRatingReviewStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@changeRatingReviewStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@changeRatingReviewStatus',
        'as' => 'subadmin.rating_review.changeRatingReviewStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.destroyMultipleRatingReview' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleRatingReview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyMultipleRatingReview',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyMultipleRatingReview',
        'as' => 'subadmin.rating_review.destroyMultipleRatingReview',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.statusMultipleRatingReview' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleRatingReview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@statusMultipleRatingReview',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@statusMultipleRatingReview',
        'as' => 'subadmin.rating_review.statusMultipleRatingReview',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.rating_review.destroyImage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyImage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\RatingReviewController@destroyImage',
        'as' => 'subadmin.rating_review.destroyImage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/cms_pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_pages.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/cms_pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_pages.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/cms_pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_pages.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/cms_pages/{cms_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_pages.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/cms_pages/{cms_page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_pages.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/cms_pages/{cms_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_pages.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/cms_pages/{cms_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.cms_pages.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_pages.changeCmsPageStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeCmsPageStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@changeCmsPageStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@changeCmsPageStatus',
        'as' => 'subadmin.cms_pages.changeCmsPageStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_pages.statusMultipleCmsPage' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleCmsPage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@statusMultipleCmsPage',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsPagesController@statusMultipleCmsPage',
        'as' => 'subadmin.cms_pages.statusMultipleCmsPage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_notification.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_notification.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_notification.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_notification/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_notification.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_notification.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/report_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_notification.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_notification.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_notification/{report_notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_notification.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_notification.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_notification/{report_notification}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_notification.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_notification.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/report_notification/{report_notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_notification.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_notification.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/report_notification/{report_notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_notification.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportNotificationController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_store.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_store.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_store.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_store/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_store.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_store.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/report_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_store.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_store.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_store/{report_store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_store.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_store.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_store/{report_store}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_store.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_store.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/report_store/{report_store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_store.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_store.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/report_store/{report_store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_store.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_store.changeReportStoreStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeReportStoreStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@changeReportStoreStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@changeReportStoreStatus',
        'as' => 'subadmin.report_store.changeReportStoreStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_store.destroyMultipleReportStore' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleReportStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroyMultipleReportStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@destroyMultipleReportStore',
        'as' => 'subadmin.report_store.destroyMultipleReportStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_store.statusMultipleReportStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleReportStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@statusMultipleReportStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportStoreController@statusMultipleReportStore',
        'as' => 'subadmin.report_store.statusMultipleReportStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_type.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_type.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/report_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_type.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_type/{report_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_type.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/report_type/{report_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_type.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/report_type/{report_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_type.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/report_type/{report_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.report_type.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_type.changeReportTypeStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeReportTypeStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@changeReportTypeStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@changeReportTypeStatus',
        'as' => 'subadmin.report_type.changeReportTypeStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_type.destroyMultipleReportType' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleReportType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroyMultipleReportType',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@destroyMultipleReportType',
        'as' => 'subadmin.report_type.destroyMultipleReportType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.report_type.statusMultipleReportType' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleReportType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@statusMultipleReportType',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportTypeController@statusMultipleReportType',
        'as' => 'subadmin.report_type.statusMultipleReportType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/channel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/channel/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/channel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/channel/{channel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/channel/{channel}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/channel/{channel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/channel/{channel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel.changeChannelStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeChannelStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@changeChannelStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@changeChannelStatus',
        'as' => 'subadmin.channel.changeChannelStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel.destroyMultipleChannel' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleChannel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroyMultipleChannel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@destroyMultipleChannel',
        'as' => 'subadmin.channel.destroyMultipleChannel',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel.statusMultipleChannel' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleChannel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelController@statusMultipleChannel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelController@statusMultipleChannel',
        'as' => 'subadmin.channel.statusMultipleChannel',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/channel_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel_post.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/channel_post/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel_post.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/channel_post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel_post.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/channel_post/{channel_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel_post.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/channel_post/{channel_post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel_post.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/channel_post/{channel_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel_post.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/channel_post/{channel_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.channel_post.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.changeChannelPostStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeChannelPostStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@changeChannelPostStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@changeChannelPostStatus',
        'as' => 'subadmin.channel_post.changeChannelPostStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.destroyMultipleChannelPost' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleChannelPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroyMultipleChannelPost',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@destroyMultipleChannelPost',
        'as' => 'subadmin.channel_post.destroyMultipleChannelPost',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.statusMultipleChannelPost' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleChannelPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@statusMultipleChannelPost',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@statusMultipleChannelPost',
        'as' => 'subadmin.channel_post.statusMultipleChannelPost',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.channel_post.channelCategoryFilter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/channelCategoryFilter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@channelCategoryFilter',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChannelPostController@channelCategoryFilter',
        'as' => 'subadmin.channel_post.channelCategoryFilter',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.email_templates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/email_templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.email_templates.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.email_templates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/email_templates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.email_templates.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.email_templates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/email_templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.email_templates.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.email_templates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/email_templates/{email_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.email_templates.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.email_templates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/email_templates/{email_template}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.email_templates.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.email_templates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/email_templates/{email_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.email_templates.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.email_templates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/email_templates/{email_template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.email_templates.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.email_templates.changeEmailTemplateStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeEmailTemplateStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@changeEmailTemplateStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@changeEmailTemplateStatus',
        'as' => 'subadmin.email_templates.changeEmailTemplateStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.email_templates.statusMultipleEmailTemplate' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleEmailTemplate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@statusMultipleEmailTemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailTemplatesController@statusMultipleEmailTemplate',
        'as' => 'subadmin.email_templates.statusMultipleEmailTemplate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.general_message.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/general_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.general_message.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.general_message.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/general_message/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.general_message.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.general_message.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/general_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.general_message.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.general_message.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/general_message/{general_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.general_message.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.general_message.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/general_message/{general_message}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.general_message.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.general_message.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/general_message/{general_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.general_message.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.general_message.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/general_message/{general_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.general_message.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.general_message.changeGeneralMessageStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeGeneralMessageStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@changeGeneralMessageStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@changeGeneralMessageStatus',
        'as' => 'subadmin.general_message.changeGeneralMessageStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.general_message.destroyMultipleGeneralMessage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleGeneralMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroyMultipleGeneralMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@destroyMultipleGeneralMessage',
        'as' => 'subadmin.general_message.destroyMultipleGeneralMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.general_message.statusMultipleGeneralMessage' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleGeneralMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@statusMultipleGeneralMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralMessageController@statusMultipleGeneralMessage',
        'as' => 'subadmin.general_message.statusMultipleGeneralMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_message.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/loyalty_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_message.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_message.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/loyalty_message/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_message.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_message.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/loyalty_message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_message.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_message.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/loyalty_message/{loyalty_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_message.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_message.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/loyalty_message/{loyalty_message}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_message.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_message.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/loyalty_message/{loyalty_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_message.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_message.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/loyalty_message/{loyalty_message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_message.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_message.changeLoyaltyMessageStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeLoyaltyMessageStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@changeLoyaltyMessageStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@changeLoyaltyMessageStatus',
        'as' => 'subadmin.loyalty_message.changeLoyaltyMessageStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_message.destroyMultipleLoyaltyMessage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleLoyaltyMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroyMultipleLoyaltyMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@destroyMultipleLoyaltyMessage',
        'as' => 'subadmin.loyalty_message.destroyMultipleLoyaltyMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_message.statusMultipleLoyaltyMessage' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleLoyaltyMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@statusMultipleLoyaltyMessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyMessageController@statusMultipleLoyaltyMessage',
        'as' => 'subadmin.loyalty_message.statusMultipleLoyaltyMessage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_point.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/loyalty_point',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_point.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_point.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/loyalty_point/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_point.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_point.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/loyalty_point',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_point.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_point.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/loyalty_point/{loyalty_point}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_point.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_point.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/loyalty_point/{loyalty_point}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_point.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_point.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/loyalty_point/{loyalty_point}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_point.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_point.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/loyalty_point/{loyalty_point}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.loyalty_point.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_point.destroyMultipleLoyaltyPoint' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleLoyaltyPoint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroyMultipleLoyaltyPoint',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@destroyMultipleLoyaltyPoint',
        'as' => 'subadmin.loyalty_point.destroyMultipleLoyaltyPoint',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.loyalty_point.pointHistory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/pointHistory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@pointHistory',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoyaltyPointController@pointHistory',
        'as' => 'subadmin.loyalty_point.pointHistory',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.configs.configs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/settings/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@configs',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@configs',
        'as' => 'subadmin.configs.configs',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.configs.configStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/settings/configStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@configStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@configStore',
        'as' => 'subadmin.configs.configStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.password.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/settings/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@password',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@password',
        'as' => 'subadmin.password.password',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.password.passwordStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/settings/passwordStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@passwordStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@passwordStore',
        'as' => 'subadmin.password.passwordStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.profile.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/settings/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@profile',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@profile',
        'as' => 'subadmin.profile.profile',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.profile.profileStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/settings/profileStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@profileStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@profileStore',
        'as' => 'subadmin.profile.profileStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.store.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/store/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.store.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.store.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.store.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/store/{store}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.store.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.store.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.store.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.changeStoreStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeStoreStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreStatus',
        'as' => 'subadmin.store.changeStoreStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.changeStorePartnerType' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeStorePartnerType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStorePartnerType',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStorePartnerType',
        'as' => 'subadmin.store.changeStorePartnerType',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.changeStoreVerification' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeStoreVerification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreVerification',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@changeStoreVerification',
        'as' => 'subadmin.store.changeStoreVerification',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.destroyMultipleStore' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyMultipleStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyMultipleStore',
        'as' => 'subadmin.store.destroyMultipleStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.typeMultipleStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/typeMultipleStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@typeMultipleStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@typeMultipleStore',
        'as' => 'subadmin.store.typeMultipleStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.statusMultipleStore' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@statusMultipleStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@statusMultipleStore',
        'as' => 'subadmin.store.statusMultipleStore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.store.destroyStoreImage' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyStoreImage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyStoreImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@destroyStoreImage',
        'as' => 'subadmin.store.destroyStoreImage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.app_users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/app_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.app_users.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.app_users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/app_users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.app_users.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.app_users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/app_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.app_users.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.app_users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/app_users/{app_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.app_users.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.app_users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/app_users/{app_user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.app_users.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.app_users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'subadmin/app_users/{app_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.app_users.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.app_users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/app_users/{app_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'as' => 'subadmin.app_users.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.app_users.changeAppUserStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeAppUserStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@changeAppUserStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@changeAppUserStatus',
        'as' => 'subadmin.app_users.changeAppUserStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.app_users.destroyMultipleAppUser' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleAppUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroyMultipleAppUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@destroyMultipleAppUser',
        'as' => 'subadmin.app_users.destroyMultipleAppUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.app_users.statusMultipleAppUser' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleAppUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppUsersController@statusMultipleAppUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppUsersController@statusMultipleAppUser',
        'as' => 'subadmin.app_users.statusMultipleAppUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_users.changeCmsUserStatus' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/changeCmsUserStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@changeCmsUserStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@changeCmsUserStatus',
        'as' => 'subadmin.cms_users.changeCmsUserStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_users.destroyMultipleCmsUser' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'subadmin/destroyMultipleCmsUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroyMultipleCmsUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@destroyMultipleCmsUser',
        'as' => 'subadmin.cms_users.destroyMultipleCmsUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.cms_users.statusMultipleCmsUser' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'subadmin/statusMultipleCmsUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@statusMultipleCmsUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\CmsUsersController@statusMultipleCmsUser',
        'as' => 'subadmin.cms_users.statusMultipleCmsUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'subadmin.ckeditor.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/ckeditor_upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminauth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CkeditorController@upload',
        'controller' => 'App\\Http\\Controllers\\Admin\\CkeditorController@upload',
        'as' => 'subadmin.ckeditor.upload',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/subadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IcKbo4kG6jWOk6v0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@2MEp5O9niZXPc5XDpxtCxD60yJWHupNURtvW2o4DrlU=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000002a7e097a000000006bb37ffa";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IcKbo4kG6jWOk6v0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
