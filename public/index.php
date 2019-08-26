<?php

require_once __DIR__ . '/../vendor/autoload.php';
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Campaign;
use FacebookAds\Object\Fields\CampaignFields;

$app_id = "{your-app-id}";
$app_secret = "{your-appsecret}";
$access_token = "{your-access-token}";
$account_id = "act_{your-adaccout-id}";

Api::init($app_id, $app_secret, $access_token);

$account = new AdAccount($account_id);
$cursor = $account->getCampaigns();

// Loop over objects
foreach ($cursor as $campaign) {
  echo $campaign->{CampaignFields::NAME}.PHP_EOL;
}
