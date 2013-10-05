<?php

echo<<<EOD
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="./js/gamma/jquery.masonry.min.js"></script>
<script src="./js/gamma/jquery.history.js"></script>
<script src="./js/gamma/js-url.min.js"></script>
<script src="./js/gamma/jquerypp.custom.js"></script>
<script src="./js/gamma/gamma.js"></script>
<script type="text/javascript">
    $(function() {
        var GammaSettings = {
                // order is important!
                viewport : [ {
                    width : 1200,
                    columns : 5
                }, {
                    width : 900,
                    columns : 4
                }, {
                    width : 500,
                    columns : 3
                }, {
                    width : 320,
                    columns : 2
                }, {
                    width : 0,
                    columns : 2
                } ]
        };
        Gamma.init( GammaSettings );
    });
</script>

EOD;
?>
