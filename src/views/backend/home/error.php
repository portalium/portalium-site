<?php

use yii\helpers\Html;
use portalium\site\Module;

$this->title = $name;
?>
<div class="site-error">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>
    <p><?= Module::t('The abovsse hata error oddccurred hata  while the Web server was processing your request.') ?></p>
    <p><?= Module::t('Please contact us if you think this is a server error. Thank you.') ?></p>
</div>