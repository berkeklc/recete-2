<!DOCTYPE html>
<html lang="<?php echo $this->language ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $this->site->get('metaTitle') ?></title>
    <meta name="description" content="<?php echo $this->site->get('metaDescription') ?>">
    <meta name="keywords" content="<?php echo $this->site->get('metaKeywords') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo base_url('/') ?>"/>

    <link rel="canonical" href="<?php echo current_url() ?>"/>
    <?php if ($ogType = $this->site->get('ogType')): ?>
        <meta property="og:type" content="<?php echo $ogType ?>"/>
    <?php endif; ?>
    <?php if ($ogTitle = $this->site->get('ogTitle')): ?>
        <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle) ?>"/>
    <?php endif; ?>
    <?php if ($ogDescription = $this->site->get('ogDescription')): ?>
        <meta property="og:description" content="<?php echo htmlspecialchars($ogDescription) ?>"/>
    <?php endif; ?>
    <?php if ($ogImage = $this->site->get('ogImage')): ?>
        <meta property="og:image" content="<?php echo base_url('/') . $ogImage ?>"/>
    <?php endif; ?>
    <meta property="og:url" content="<?php echo current_url() ?>"/>
</head>
<body style="background: #eff2f6;">
<header></header>
<?php $this->view($view); ?>
<footer></footer>
</body>
</html>