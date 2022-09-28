const id = document.body.dataset.id;
export default {
    // Prefix identifier that will be used inside storing and loading
    // @deprecated
    id: id,

    // Default storage type. Available: local | remote
    type: "remote",

    // Enable/Disable autosaving
    autosave: true,

    // Enable/Disable autoload of data on editor init
    autoload: true,
    storeHtml: true,
    storeCss: true,
    storeComponents: false,
    storeStyles: false,

    /**
     * In case the `remote` storage is selected, and this options is enabled, the project
     * will be stored on the `local` storage in case the remote one fails.
     * The local data are cleared on every sucessful remote save. When the remote storage
     * fails (eg. network issue) and the editor is reloaded, a dialog with the possibility to
     * recovery previous data will be shown.
     * @example
     * // Enable recovery with default confirm dialog
     * recovery: true,
     * // Enable recovery with a custom dialog
     * recovery: (accept, cancel, editor) => {
     *   confirm('Recover data?') ? accept() : cancel();
     * },
     */
    recovery: false,

    // If autosave enabled, indicates how many steps (general changes to structure)
    // need to be done before save. Useful with remoteStorage to reduce remote calls
    stepsBeforeSave: 1,

    /**
     * Callback triggered before the store call (can be asynchronous).
     * This can be used to enrich the project data to store.
     */
    onStore: (data) => data,

    /**
     * Callback triggered after the load call (can be asynchronous).
     */
    onLoad: (data) => data,

    // Default storage options
    options: {
        local: {
            key: "gjsProject",

            // If enabled, checks if browser supports LocalStorage
            checkLocal: true,
        },
        remote: {
            // Custom headers
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": document
                    .querySelector("meta[name='csrf-token']")
                    .getAttribute("content"),
            },

            // Endpoint URL where to store data project
            urlStore: `/gp/save-page/${id}`,

            // Endpoint URL where to load data project
            urlLoad: `/gp/load-page/${id}`,

            // set contentType paramater of $.ajax
            // true: application/json; charset=utf-8'
            // false: 'x-www-form-urlencoded'
            contentTypeJson: true,

            // Pass custom options to fetch API (remote storage)
            // You can pass a simple object: { someOption: 'someValue' }
            // or a function which returns and object to add:
            // currentOpts => {
            //  return currentOpts.method === 'POST' ?  { method: 'PATCH' } : {};
            // }
            fetchOptions: "",

            credentials: "include",

            /**
             * The remote storage sends the project data as a body of the request.
             * You can use this method to update the body before the store call in order to align
             * with your API requirements.
             */
            onStore: (data, editor) => {
                const pagesHtml = editor.Pages.getAll().map((page) => {
                    const component = page.getMainComponent();
                    return {
                        html: editor.getHtml({ component }),
                        css: editor.getCss({ component }),
                    };
                });
                return { id: id, data, pagesHtml };
            },

            /**
             * The remote storage loads the project data directly from the request response.
             * You can use this method to properly extract the project data from the response.
             */
            onLoad: (result) => result,
        },
    },
};
