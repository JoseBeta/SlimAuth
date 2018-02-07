<?php

/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */
// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return array(
    "base_url" => "http://localhost:8080/hybridauth.php",
    "providers" => array(
        "Google" => array(
            "enabled" => true,
            "keys" => array("id" => "1039414581619-afdipb3bhi2kjb3k5dgd09d6doie2tnb.apps.googleusercontent.com ", "secret" => "vlEmxkCG3xN43h4G9Dn2hQfK"),
        ),
        "Facebook" => array(
            "enabled" => true,
            "keys" => array("id" => "143871072962876", "secret" => "f2ea6b17ad499cefa0c741a8536208da"),
            "trustForwarded" => false,
        ),
        "Twitter" => array(
            "enabled" => true,
            "keys" => array("key" => "66J36mqBgNzAKAX8TzcjqrI7y", "secret" => "ywdrClwSonzTSYQGfFLPBrunbiZQ7LDsRlp2qjUuNQoRZAcdF1"),
            "includeEmail" => true,
        ),
    ),
    // If you want to enable logging, set 'debug_mode' to true.
    // You can also set it to
    // - "error" To log only error messages. Useful in production
    // - "info" To log info and error messages (ignore debug messages)
    "debug_mode" => false,
    // Path to file writable by the web server. Required if 'debug_mode' is not false
    "debug_file" => "",
);
