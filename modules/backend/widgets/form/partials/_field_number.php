<!-- Number -->
<?php if ($this->previewMode) { ?>
    <span class="form-control"><?= isset($field->value) ? e($field->value) : '&nbsp;' ?></span>
<?php } else { ?>
    <?php
        $min = isset($field->config['min']) ? $field->config['min'] : false;
    $max = isset($field->config['max']) ? $field->config['max'] : false;
    $step = isset($field->config['step']) ? $field->config['step'] : 'any';
    ?>

    <input
        type="number"
        step="<?= $step ?>"
        name="<?= $field->getName() ?>"
        id="<?= $field->getId() ?>"
        value="<?= e($field->value) ?>"
        placeholder="<?= e(trans($field->placeholder)) ?>"
        class="form-control"
        autocomplete="off"
        <?= $min !== false ? 'min="'.$min.'"' : ''; ?>
        <?= $max !== false ? 'max="'.$max.'"' : ''; ?>
        <?= $field->hasAttribute('pattern') ? '' : 'pattern="-?\d+(\.\d+)?"' ?>
        <?= $field->hasAttribute('maxlength') ? '' : 'maxlength="255"' ?>
        <?= $field->getAttributes() ?>
    />
<?php } ?>
