export const event = (editor) => {
    // editor.on("component:selected", function (model) {
    //     const tb = model.get("toolbar");
    //     if (
    //         !tb.find((item) => {
    //             return (
    //                 item?.label == '<i class="fa-solid fa-crop-simple"></i>' ||
    //                 item?.label == '<i class="fa-solid fa-crop"></i>'
    //             );
    //         })
    //     ) {
    //         const dragmodeToolbar = {
    //             attributes: {
    //                 title: "Kéo thả tự do",
    //             },
    //             label:
    //                 model.get("dmode") == "absolute"
    //                     ? '<i class="fa-solid fa-crop"></i>'
    //                     : '<i class="fa-solid fa-crop-simple"></i>',
    //             command: (editor) => {
    //                 const setDragmode = model.get("dmode") == "absolute";
    //                 model.set("dmode", setDragmode ? "" : "absolute");
    //                 const button = document.querySelector(
    //                     setDragmode
    //                         ? ".gjs-toolbar-item .fa-crop"
    //                         : ".gjs-toolbar-item .fa-crop-simple"
    //                 );
    //                 if (setDragmode) {
    //                     button.classList.remove("fa-crop");
    //                     button.classList.add("fa-crop-simple");
    //                 } else {
    //                     button.classList.remove("fa-crop-simple");
    //                     button.classList.add("fa-crop");
    //                 }
    //             },
    //         };
    //         tb.push(dragmodeToolbar);
    //     }
    // });

    // editor.on("component:deselected", function (model) {
    //     let tb = model.get("toolbar");
    //     model.set("toolbar", tb.slice(0, 4));
    // });

    editor.on("block:drag:stop", function (model) {
        if (model != null) {
            const el =
                typeof model == "object" &&
                Array.from(model).find(
                    (item) => item?.attributes?.tagName == "script"
                );
            if (el) {
                el.setAttributes({
                    defer: "",
                });
            }
        }
    });
};
