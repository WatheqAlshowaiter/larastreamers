<?php

use App\Services\Twitter\OAuthTwitter;
use App\Services\Twitter\TwitterException;

it('throws exception when Twitter replies with error', function () {
    // Act - Write tweet without permissions
    app(OAuthTwitter::class)->tweet('test');
})->throws(TwitterException::class);
