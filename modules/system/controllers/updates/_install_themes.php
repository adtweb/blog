<div>

    <!-- Search -->
    <form
        role="form"
        id="installThemesForm"
        data-handler="onInstallTheme"
        onsubmit="$.wn.installProcess.searchSubmit(this); return false">
        <div class="product-search">
            <input
                name="code"
                id="themeSearchInput"
                class="product-search-input search-input-lg typeahead"
                placeholder="<?= e(trans('system::lang.themes.search')) ?>"
                data-search-type="themes"
                />
            <i class="icon icon-search"></i>
            <i class="icon loading" style="display: none"></i>
        </div>
    </form>

    <div class="row">

        <div class="col-md-7">

            <!-- Installed themes -->
            <div id="themeList"
                class="product-list-manager"
                data-handler="onGetInstalledThemes"
                data-view="product/theme">

                <h4 class="section-header">
                    <a href="<?= Backend::url('cms/themes') ?>"><?= e(trans('system::lang.themes.installed')) ?></a>
                    <small>(<span class="product-counter"><?= count($installedThemes) ?></span>)</small>
                </h4>

                <?php if (! count($installedThemes)) { ?>
                    <div class="product-list-empty">
                        <p><?= e(trans('system::lang.themes.no_themes')) ?></p>
                    </div>
                <?php } else { ?>
                    <ul class="product-list theme-list">
                        <?php foreach ($installedThemes as $theme) { ?>

                            <li data-code="<?= $theme['code'] ?>">
                                <div class="image">
                                    <img src="<?= $theme['image'] ?>" alt="">
                                </div>
                                <div class="details">
                                    <h4><?= $theme['name'] ?></h4>
                                    <p><?= e(trans('cms::lang.theme.by_author', ['name' => $theme['author']])) ?></p>
                                </div>
                                <button
                                    type="button"
                                    class="close"
                                    aria-hidden="true"
                                    data-request="onRemoveTheme"
                                    data-request-data="code: '<?= $theme['dirName'] ?>'"
                                    data-request-confirm="<?= e(trans('system::lang.themes.remove_confirm')) ?>"
                                    data-stripe-load-indicator>
                                    &times;
                                </button>
                            </li>

                        <?php } ?>
                    </ul>
                <?php } ?>

            </div>

        </div>
        <div class="col-md-5">

            <!-- Recommended extras -->
            <div class="suggested-products-container">
                <h4 class="section-header"><?= e(trans('system::lang.themes.recommended')) ?></h4>
                <div class="scroll-panel">
                    <div
                        id="suggestedThemes"
                        class="suggested-products suggested-themes"
                        data-handler="onGetPopularThemes"
                        data-view="theme/suggestion"></div>
                </div>
            </div>

        </div>

    </div>

</div>

<script type="text/template" data-partial="theme/suggestion">
    <div class="product">
        <a
            data-control="popup"
            data-handler="onInstallTheme"
            data-request-data="code: '{{code}}'"
            href="javascript:;">
            <div class="image"><img src="{{image}}" alt=""></div>
            <div class="details">
                <h5 class="text-overflow">{{code}}</h5>
                <p>{{description}}</p>
            </div>
        </a>
    </div>
</script>
