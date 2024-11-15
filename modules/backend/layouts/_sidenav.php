<?php
$context = BackendMenu::getContext();
$contextSidenav = BackendMenu::getContextSidenavPartial($context->owner, $context->mainMenuCode);
?>
<?php if (! $contextSidenav) { ?>
    <?php
        $sideMenuItems = BackendMenu::listSideMenuItems();
    ?>
    <?php if ($sideMenuItems) { ?>
        <div class="layout-cell layout-sidenav-container">
            <div class="layout-relative">
                <nav
                    id="layout-sidenav"
                    class="layout-sidenav bg-p"
                    data-active-class="active"
                    data-control="sidenav">
                    <ul class="nav">
                        <?php foreach ($sideMenuItems as $sideItemCode => $item) { ?>
                            <li
                                class="<?= BackendMenu::isSideMenuItemActive($item) ? 'active' : null ?>"
                                <?= Html::attributes($item->attributes) ?>
                            >
                                <a href="<?= $item->url ?>">
                                    <span class="nav-icon">
                                        <?php if ($item->iconSvg) { ?>
                                            <img class="svg-icon" src="<?= Url::asset($item->iconSvg) ?>">
                                        <?php } ?>

                                        <i class="<?= $item->iconSvg ? 'svg-replace' : null ?> <?= $item->icon ?>"></i>
                                    </span>
                                    <span class="nav-label">
                                        <?= e(trans($item->label)) ?>
                                    </span>
                                </a>
                                <span
                                    class="counter <?= $item->counter === null ? 'empty' : null ?>"
                                    data-menu-id="<?= e($context->mainMenuCode.'/'.$sideItemCode) ?>"
                                    <?php if ($item->counterLabel) { ?>
                                        title="<?= e(trans($item->counterLabel)) ?>"
                                    <?php } ?>
                                >
                                    <?= e($item->counter) ?>
                                </span>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    <?php } ?>
<?php } else { ?>
    <?= $this->makePartial($contextSidenav) ?>
<?php } ?>
