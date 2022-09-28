const defaultOptions = {};
export default class Tab {
    constructor(selector) {
        this.selectors = document.querySelectorAll(`[data-rs="${selector}"]`);
        this.init();
    }

    init = () => {
        this.selectors.forEach((button, key) => {
            button.onclick = () => {
                this.selectors.forEach((buttonCheck, index) => {
                    if (key != index) {
                        buttonCheck.classList.remove("show-tab");
                    }
                });
                const id = button.dataset.rsTarget.slice(1);
                this.hideTab(id);
                this.showTab(id);
                button.classList.add("show-tab");
            };
        });
    };

    showTab = (id) => {
        const tab = document.querySelector(`[id="${id}"]`);
        if (tab.classList.contains("hidden")) {
            tab.classList.remove("hidden");
        }
    };

    hideTab = (id) => {
        console.log(
            document.querySelectorAll(`[data-rs-tab]:not([id="${id}"])`)
        );
        document
            .querySelectorAll(`[data-rs-tab]:not([id="${id}"])`)
            .forEach((tab) => {
                if (!tab.classList.contains("hide")) {
                    tab.classList.add("hidden");
                }
            });
    };
}
