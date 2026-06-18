<?php

$env = $kirby->option('sr.env');

?>
<?php if ($env == 'dev') : ?>
<div
    x-data="{
        showGrid: Alpine.$persist(false),
    }"
    id="dev-tools"
    class="dev-vertical"
    @keyup.window="
        if ($event.keyCode == 71) {
            showGrid = ! showGrid
        }
    "
>
    <div
        id="dev-grids"
        x-show="showGrid"
        style="display: none"
    >
        <div class="dev-grid dev-grid-spacing">
            <template x-for="i in 9">
                <div class="dev-grid-spacing-item"></div>
            </template>
        </div>
    </div>
</div>
<?php endif ?>
