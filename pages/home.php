<h1>Welcome to homepage, <?php if (isset($_SESSION["authenticated"])) echo $_COOKIE["user"]; else echo 'user'?>!</h1>
<?php if (!isset($_SESSION["authenticated"])) echo '<p class="text-center p-2">You have to login to use the application.<p>'?>

<?php if (isset($_SESSION["authenticated"]))
    echo '
        <div class="container-fluid">
        </div>
    ';
?>

<div class="container-fluid border border-dark rounded p-5 m-5" id="dashboard">
    <div class="row">
        <h3 class="title text-center p-2">Dashboard</h3>
        <p class="description text-center">Please choose one of the following service:</p>
    </div>
    <div class="row">
        <div class="col-3">
            <button class="btn btn-primary" onclick="window.location.href='/qc/index.php?page=search_patient'">Search</button>
        </div>
        <div class="col-3">
            <button class="btn btn-primary" onclick="window.location.href='/qc/index.php?page=insert_patient'">Insert</button>
        </div>
    </div>
</div>