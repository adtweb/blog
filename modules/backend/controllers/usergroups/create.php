<?php Block::put('breadcrumb') ?>
    <ul>
        <li><a href="<?= Backend::url('backend/users') ?>"><?= e(trans('backend::lang.user.menu_label')) ?></a></li>
        <li><a href="<?= Backend::url('backend/usergroups') ?>"><?= e(trans('backend::lang.user.group.menu_label')) ?></a></li>
        <li><?= e(trans($this->pageTitle)) ?></li>
    </ul>
<?php Block::endPut() ?>

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
                    data-browser-validate
                    data-hotkey="ctrl+s, cmd+s"
                    data-load-indicator="<?= e(trans('backend::lang.form.creating')) ?>"
                    class="btn btn-primary">
                    <?= e(trans('backend::lang.form.create')) ?>
                </button>
                <button
                    type="button"
                    data-request="onSave"
                    data-browser-validate
                    data-request-data="close:1"
                    data-hotkey="ctrl+s, cmd+s"
                    data-load-indicator="<?= e(trans('backend::lang.form.creating')) ?>"
                    class="btn btn-default">
                    <?= e(trans('backend::lang.form.create_and_close')) ?>
                </button>
            </div>
        </div>

    <?= Form::close() ?>

<?php } else { ?>
    <p class="flash-message static error"><?= e(trans($this->fatalError)) ?></p>
    <p><a href="<?= Backend::url('backend/usergroups') ?>" class="btn btn-default"><?= e(trans('backend::lang.user.group.return')) ?></a></p>
<?php } ?>
