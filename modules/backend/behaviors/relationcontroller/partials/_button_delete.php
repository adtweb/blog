<?php if ($relationViewMode == 'single') { ?>
    <button
        class="btn btn-sm btn-secondary wn-icon-trash-o"
        data-request="onRelationButtonDelete"
        data-request-confirm="<?= e(trans('backend::lang.relation.delete_confirm')) ?>"
        data-request-success="$.wn.relationBehavior.changed('<?= e($relationField) ?>', 'deleted')"
        data-stripe-load-indicator>
        <?= e(trans($text)) ?>
    </button>
<?php } else { ?>
    <button
        class="btn btn-sm btn-secondary wn-icon-trash-o"
        onclick="$(this).data('request-data', {
            checked: $('#<?= $this->relationGetId('view') ?> .control-list').listWidget('getChecked')
        })"
        disabled="disabled"
        data-request="onRelationButtonDelete"
        data-request-confirm="<?= e(trans('backend::lang.relation.delete_confirm')) ?>"
        data-request-success="$.wn.relationBehavior.changed('<?= e($relationField) ?>', 'deleted')"
        data-trigger-action="enable"
        data-trigger="#<?= $this->relationGetId('view') ?> .control-list input[type=checkbox]"
        data-trigger-condition="checked"
        data-stripe-load-indicator>
        <?= e(trans($text)) ?>
    </button>
<?php } ?>
