<?php if (! $this->fatalError) { ?>

    <?= Form::open(['class' => 'layout']) ?>

        <div class="layout-row">
            <?= $this->formRender() ?>
        </div>

        <div class="form-buttons">
            <div class="loading-indicator-container">
                <button
                    type="submit"
                    data-request="onSave"
                    data-request-data="redirect:0"
                    data-hotkey="ctrl+s, cmd+s"
                    data-load-indicator="<?= e(trans('backend::lang.form.saving')) ?>"
                    class="btn btn-primary">
                    <?= e(trans('backend::lang.form.save')) ?>
                </button>
                <button
                    type="button"
                    data-request="onSave"
                    data-request-data="close:1"
                    data-hotkey="ctrl+enter, cmd+enter"
                    data-load-indicator="<?= e(trans('backend::lang.form.saving')) ?>"
                    class="btn btn-default">
                    <?= e(trans('backend::lang.form.save_and_close')) ?>
                </button>
                <span class="btn-text">
                    <?= e(trans('backend::lang.form.or')) ?> <a href="<?= Backend::url('system/settings') ?>"><?= e(trans('backend::lang.form.cancel')) ?></a>
                </span>

                <button
                    type="button"
                    class="btn btn-danger pull-right"
                    data-request="onResetDefault"
                    data-load-indicator="<?= e(trans('backend::lang.form.resetting')) ?>"
                    data-request-confirm="<?= e(trans('backend::lang.form.action_confirm')) ?>">
                    <?= e(trans('backend::lang.form.reset_default')) ?>
                </button>
            </div>
        </div>
    <?= Form::close() ?>

<?php } else { ?>
    <p class="flash-message static error"><?= e(trans($this->fatalError)) ?></p>
    <p><a href="<?= $parentLink ?>" class="btn btn-default"><?= e(trans('system::lang.settings.return')) ?></a></p>
<?php } ?>
