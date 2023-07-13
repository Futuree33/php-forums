<?php
require "./backend/autoload.php";

$controller = new Controllers\Forum();
?>

<!doctype html>
<html lang="en">
<head>
    <?php require "./backend/components/head.php" ?>
</head>
<body>
<?php require "./backend/components/header.php" ?>

<div style="margin-top: 20px;" class="padding-wrapper">
    <div class="dark-section">
        <h1>
            V3rmillion
            <span style="font-size: .9rem; font-weight: normal">
                >
            </span>
            <span style="font-weight: normal">
                <?php echo htmlentities($controller->currentCategory) ?>
            </span>
        </h1>

        <h1 style="padding: 5px 20px;">
            <?php echo htmlentities($controller->currentForum) ?>
        </h1>
    </div>
</div>
</body>
</html>
