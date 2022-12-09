<?php
class ACLandingConfig {
    const API_URL = 'https://api.adcombo.com/api/v2/order/create/';
    const API_KEY = '79618bba9af43e81c25fd453c8fa131f';
    const LOG_ENABLED = true;        // Log orders to orderlog.php
    const GEOIP_ENABLED = true;      // Enable GeoIP detection
    const DETECT_MOBILE = true;      // Enable mobile browser detection
    const API_URL_PAYMENT_REDIRECT = '';
    const API_URL_PAYMENT_KEY = '';
    const API_BROKER_URL = '';
    const TEST_LEAD = false;
    // Pixel code. Multiline PHP variable.
    const PIXEL_CODE = <<<EOV
<!-- Taboola Pixel Code -->
<script>
    _tfa.push({notify: 'event', name: 'make_purchase', id: 1509526});
</script>
<!-- End of Taboola Pixel Code -->
EOV;
//     This is EXAMPLE of custom parameters. They will we added to order regardless of URL arguments\macros.
//     You can use them with "clean" links and add specific parameters to order. They will NOT OVERWRITE link args.
    const CUSTOM_PARAMS = array(
       'subacc' => 'taboola',
       'subacc2' => '',
       'subacc3' => '',
       'subacc4' => '',
    );
}
?>