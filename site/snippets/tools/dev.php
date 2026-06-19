<div
    aria-label="Press 'G' to show grid"
    x-data="{
        showGrid: Alpine.$persist(false),
        cols: 0,
        columns() {
            this.cols = parseInt(getComputedStyle($el.querySelector('#dev-grids')).getPropertyValue('--dev-columns')) ?? 8
        }
    }"
    x-init="columns()"
    id="dev-tools"
    class="dev-vertical"
    x-on:keyup.window="
        if ($event.keyCode === 71) {
            showGrid = ! showGrid
        }
    "
    x-on:resize.window="columns()"
>
    <div
        id="dev-grids"
        x-show="showGrid"
        style="display: none"
    >
        <div class="dev-grid dev-grid-spacing">
            <template x-for="i in cols">
                <div class="dev-grid-spacing-item"></div>
            </template>
        </div>
    </div>
</div>

