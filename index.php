<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design Bootstrap</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="css/app.css"> -->
        <link rel="stylesheet" href="css/compiled.min.css">
        <link rel="stylesheet" href="style.css">
        <style type="text/css">
        </style>
    </head>

    <body class="fixed-sn light-blue-skin">
	
        <?php
		
            include('navbar.php');
        ?>

        <script type="text/javascript" src="js/compiled.min.js"></script>
        <script>
            // SideNav Button Initialization 
            $(".button-collapse").sideNav(); // SideNav Scrollbar Initialization
            var sideNavScrollbar = document.querySelector('.custom-scrollbar');
            Ps.initialize(sideNavScrollbar);
        </script>
    </body>

</html>