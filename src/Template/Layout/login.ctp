<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('login-head') ?>
</head>
<body>
<div class="container">
    <?= $this->Flash->render() ?>
</div>
<?= $this->fetch('content') ?>
<?= $this->element('footer') ?>
</body>
</html>