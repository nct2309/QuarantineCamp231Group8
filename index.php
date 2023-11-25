<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Quarantine Camp</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            $PATH = $_SERVER["DOCUMENT_ROOT"] . "/DB"; // original root: /qc
            include_once($PATH . "/components/navbar.php");
        ?>
        <div class="container-fluid">
            <?php
                if (!empty($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    header("Location: /DB/index.php?page=home"); // original path: /qc/index.php?page=home
                }
                if (file_exists($PATH . "/pages/$page.php")) {
                    include_once( $PATH . "/pages/$page.php");
                } else {
                    include_once( $PATH . "/pages/404.php");
                }
            ?>
        </div>
    </body>
</html>