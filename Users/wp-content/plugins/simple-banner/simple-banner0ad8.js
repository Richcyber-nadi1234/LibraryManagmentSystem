jQuery(document).ready(function ($) {
    // Banner text is set to "" if disabled so this extra `!scriptParams.disabled_on_current_page` is unnecessary,
    // Leaving in for potential backwards compatibility issues, revisit when testing is done.
    var simpleBannerVisible = !scriptParams.pro_version_enabled || (scriptParams.pro_version_enabled && !scriptParams.disabled_on_current_page);
    if (scriptParams.simple_banner_text != "") {
        if (simpleBannerVisible) {
            if (!scriptParams.wp_body_open || !scriptParams.wp_body_open_enabled) {
                var closeButton = scriptParams.close_button_enabled ? '<button id="simple-banner-close-button" class="simple-banner-button">&#x2715;</button>' : '';
                $('<div id="simple-banner" class="simple-banner"><div class="simple-banner-text"><span>' 
                    + scriptParams.simple_banner_text 
                    + '</span></div>' + closeButton + '</div>')
                .prependTo('body');
            }

            var bodyPaddingLeft = $('body').css('padding-left')
            var bodyPaddingRight = $('body').css('padding-right')

            if (bodyPaddingLeft != "0px") {
                $('head').append('<style type="text/css" media="screen">.simple-banner{margin-left:-' + bodyPaddingLeft + ';padding-left:' + bodyPaddingLeft + ';}</style>');
            }
            if (bodyPaddingRight != "0px") {
                $('head').append('<style type="text/css" media="screen">.simple-banner{margin-right:-' + bodyPaddingRight + ';padding-right:' + bodyPaddingRight + ';}</style>');
            }
        }

        // Add scrolling class
        window.onscroll = function() {scrollClass()};
        function scrollClass() {
            var scroll = document.documentElement.scrollTop;

            if (scroll > $("#simple-banner").height()) {
                $("#simple-banner").addClass("simple-banner-scrolling");
            } else {
                $("#simple-banner").removeClass("simple-banner-scrolling");
            }
        }
    }

    
    // Add close button function to close button and close if cookie found
    function closeBanner() {
        if (!scriptParams.keep_site_custom_css && document.getElementById('simple-banner-site-custom-css')) document.getElementById('simple-banner-site-custom-css').remove();
        if (!scriptParams.keep_site_custom_js && document.getElementById('simple-banner-site-custom-js')) document.getElementById('simple-banner-site-custom-js').remove();
        if (document.getElementById('simple-banner-header-margin')) document.getElementById('simple-banner-header-margin').remove();
        if (document.getElementById('simple-banner-header-padding')) document.getElementById('simple-banner-header-padding').remove();
        if (document.getElementById('simple-banner')) document.getElementById('simple-banner').remove();
    }
    
    if (simpleBannerVisible) {
        var sbCookie = "simplebannerclosed";
        if (scriptParams.close_button_enabled){
            if (getCookie(sbCookie) === "true") {
                closeBanner();
            } else {
                var expiration = parseInt(scriptParams.close_button_expiration) || 30;
                document.getElementById("simple-banner-close-button").onclick = function() {
                    closeBanner();
                    setCookie(sbCookie, "true", expiration);
                };
            }

            
        } else {
            // disable cookie if it exists
            if (getCookie(sbCookie) === "true") {
                document.cookie = "simplebannerclosed=true; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            }
        }
    }

    // Cookie Getter/Setter
    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    // Debug Mode
    // Console log all variables
    if (scriptParams.pro_version_enabled && scriptParams.debug_mode) {
        console.log(scriptParams);
    }
});
