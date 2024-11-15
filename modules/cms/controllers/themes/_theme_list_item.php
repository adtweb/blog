<?php
$author = $theme->getConfigValue('author');
?>

<div class="layout-cell min-height theme-thumbnail">
    <div class="thumbnail-container"><img src="<?= $theme->getPreviewImageUrl() ?>" alt="" /></div>
</div>
<div class="layout-cell min-height theme-description">
    <h3><?= e($theme->getConfigValue('name', $theme->getDirName())) ?></h3>
    <?php if (strlen($author)) { ?>
        <p class="author"><?= trans('cms::lang.theme.by_author', ['name' => '<a href="'.e($theme->getConfigValue('homepage', '#')).'">'.e($author).'</a>']) ?></p>
    <?php } ?>
    <p class="description">
        <?= e($theme->getConfigValue('description', 'The theme description is not provided.')) ?>
    </p>
    <div class="controls">

        <?php if ($theme->isActiveTheme()) { ?>
            <button
                type="submit"
                disabled
                class="btn btn-secondary btn-disabled">
                <i class="icon-star"></i>
                <?= e(trans('cms::lang.theme.active_button')) ?>
            </button>
        <?php } else { ?>
            <button
                type="submit"
                data-request="onSetActiveTheme"
                data-request-data="theme: '<?= e($theme->getDirName()) ?>'"
                data-stripe-load-indicator
                class="btn btn-primary">
                <i class="icon-check"></i>
                <?= e(trans('cms::lang.theme.activate_button')) ?>
            </button>
        <?php } ?>
        <?php if ($theme->hasCustomData()) { ?>
            <a
                href="<?= Backend::url('cms/themeoptions/update/'.$theme->getDirName()) ?>"
                class="btn btn-secondary<?= $theme->isActiveTheme() === false ? ' disabled' : '' ?>">
                <i class="icon-paint-brush"></i>
                <?= e(trans('cms::lang.theme.customize_button')) ?>
            </a>
        <?php } ?>
        <div class="dropdown">
            <button
                data-toggle="dropdown"
                class="btn btn-secondary">
                <i class="icon-wrench"></i>
                <?= e(trans('cms::lang.theme.manage_button')) ?>
            </button>
            <ul class="dropdown-menu" role="menu" data-dropdown-title="<?= e(trans('cms::lang.theme.manage_title')) ?>">
                <li role="presentation">
                    <a
                        role="menuitem"
                        tabindex="-1"
                        data-control="popup"
                        data-size="huge"
                        data-handler="onLoadFieldsForm"
                        data-request-data="theme: '<?= e($theme->getDirName()) ?>'"
                        href="javascript:;"
                        class="wn-icon-pencil">
                        <?= e(trans('cms::lang.theme.edit_properties_button')) ?>
                    </a>
                </li>
                <li role="presentation">
                    <a
                        role="menuitem"
                        tabindex="-1"
                        data-control="popup"
                        data-handler="onLoadDuplicateForm"
                        data-request-data="theme: '<?= e($theme->getDirName()) ?>'"
                        href="javascript:;"
                        class="wn-icon-copy">
                        <?= e(trans('cms::lang.theme.duplicate_button')) ?>

                    </a>
                </li>
                <li role="presentation">
                    <a
                        role="menuitem"
                        tabindex="-1"
                        data-control="popup"
                        data-handler="onLoadImportForm"
                        data-request-data="theme: '<?= e($theme->getDirName()) ?>'"
                        href="javascript:;"
                        class="wn-icon-upload">
                        <?= e(trans('cms::lang.theme.import_button')) ?>
                    </a>
                </li>
                <li role="presentation">
                    <a
                        role="menuitem"
                        tabindex="-1"
                        data-control="popup"
                        data-handler="onLoadExportForm"
                        data-request-data="theme: '<?= e($theme->getDirName()) ?>'"
                        href="javascript:;"
                        class="wn-icon-download">
                        <?= e(trans('cms::lang.theme.export_button')) ?>
                    </a>
                </li>
                <?php if (! $theme->isActiveTheme()) { ?>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation">
                        <a
                            role="menuitem"
                            tabindex="-1"
                            data-request="onDelete"
                            data-request-confirm="<?= e(trans('cms::lang.theme.delete_confirm')) ?>"
                            data-request-data="theme: '<?= e($theme->getDirName()) ?>'"
                            href="javascript:;"
                            class="wn-icon-trash">
                            <?= e(trans('cms::lang.theme.delete_button')) ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
