<!DOCTYPE html>
<html>
<head>
    <title><?php echo Theme::get('title'); ?></title>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php echo Theme::get('keywords'); ?>">
    <meta name="description" content="<?php echo Theme::get('description'); ?>">
    <?php echo Theme::asset()->styles(); ?>
    <?php echo Theme::asset()->scripts(); ?>
</head>
<body>
<div id="container">
    <div id="content">
        <?php echo Theme::partial('header'); ?>
        <div class="row">
            <div class="large-12 columns">
                <?php echo Theme::content(); ?>
            </div>
        </div>
    </div>
</div>
<?php echo Theme::partial('footer'); ?>

<?php echo Theme::asset()->container('footer')->scripts(); ?>
</body>
</html>