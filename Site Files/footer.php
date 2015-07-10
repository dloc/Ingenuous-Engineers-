<?php
// This file should be included at the end of all pages
// All JS scripts should be on footer of pages
?>

<div id="footer">
    <span id="copy">&copy;</span>
    <?php
        $start_year = 2015;
        if (date("Y") == $start_year) {
            echo $start_year;
        }
        else {
            echo $start_year; ?>
    <span> - </span>
    <?php
            echo date("Y");
        }
    ?>
    <span>GoJupiter.com ~ All rights reserved.</span>
</div>

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>