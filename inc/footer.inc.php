<?php
/**
 * Created by PhpStorm.
 * User: Delbert
 * Date: 15/10/17
 * Time: 下午7:51
 */
?>

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//lib.sinaapp.com/js/jquery/2.0.3/jquery-2.0.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//lib.sinaapp.com/js/bootstrap/v3.0.0/js/bootstrap.min.js"></script>
    <script>
        /*!
         * IE10 viewport hack for Surface/desktop Windows 8 bug
         * Copyright 2014-2015 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         */

        // See the Getting Started docs for more information:
        // http://getbootstrap.com/getting-started/#support-ie10-width

        (function () {
            'use strict';

            if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style')
                msViewportStyle.appendChild(
                    document.createTextNode(
                        '@-ms-viewport{width:auto!important}'
                    )
                )
                document.querySelector('head').appendChild(msViewportStyle)
            }

        })();
    </script>
  </body>
</html>