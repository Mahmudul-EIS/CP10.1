<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('head') ?>
</head>
<body>
    <?= $this->element('header') ?>
    <div class="container">
        <?= $this->Flash->render() ?>
    </div>
    <?= $this->fetch('content') ?>
    <?= $this->element('footer') ?>
</body>
</html>