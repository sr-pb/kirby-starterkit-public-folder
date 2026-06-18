import LogColor from './log-color';

const Dispatch = {
    /**
     *
     * @param {string} event
     * @param {object} detail
     */
    e: function (event, detail = {}) {
        console.log(`%c🔔 ${event}`, LogColor.greenText, detail);
        window.dispatchEvent(
            new CustomEvent(event, {
                detail: detail
            })
        )
    }

}

export { Dispatch }
