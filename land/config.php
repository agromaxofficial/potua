<?php
class ACLandingConfig {
    const API_URL = 'https://api.adcombo.com/api/v2/order/create/';
    const API_KEY = 'c0247a826607259b534b707978c0c24b';
    const LOG_ENABLED = true;        // Log orders to orderlog.php
    const GEOIP_ENABLED = true;      // Enable GeoIP detection
    const DETECT_MOBILE = true;      // Enable mobile browser detection
    // Pixel code. Multiline PHP variable.
    const PIXEL_CODE = <<<EOV
<!-- Empty pixel code -->
EOV;
	const CUSTOM_PARAMS = 'subacc';
}
?>