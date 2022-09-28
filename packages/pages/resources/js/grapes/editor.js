import grapesjs from "grapesjs";
import storageManager from "./storageManager";
import blockManager from "./block";
import layerManager from "./layer";
import styleManager from "./style";
import panelConfig from "./panelConfig";
import traitManager from "./trait";
import { buttonElement } from "./buttonAction";
import { event } from "./event.js";
import { configType } from "./configType.js";
const pulicPath = "/_grapes/assets/";
const escapeName = (name) => {
    return name;
};
const initEditor = async () => {
    const id = document.body.dataset.id;
    const res = await fetch("/gp/get-block");
    const data = await res.json();
    const arrayBlock = await data.map((block) => {
        const image = JSON.parse(block.media);
        return {
            id: block.tag,
            category: block.category,
            label: block.label,
            activate: block.activate == 1,
            content: block.content,
            select: block.select == 1,
            media: `
                <div class="mx-auto text-center">
                    ${
                        image != null
                            ? `<img src="/${
                                  image.path + image.file_name
                              }" alt="${block.label}" />`
                            : `<img src="/admin/images/noimage.png" alt="${block.label}" />`
                    }
                </div>
            `,
        };
    });
    const resPage = await fetch(`/gp/get-data-page/${id}`);
    const dataPage = await resPage.json();
    const styles =
        (await dataPage.styles) != null
            ? dataPage.styles.split("\r\n").map((item) => {
                  return pulicPath + item;
              })
            : [];
    const scripts =
        (await dataPage.scripts) != null
            ? dataPage.scripts.split("\r\n").map((item) => {
                  return pulicPath + item;
              })
            : [];
    blockManager.blocks = [...blockManager.blocks, ...arrayBlock];

    const editor = grapesjs.init({
        autorender: true,
        headless: false,
        container: "#editor",
        width: "100%",
        height: "10000px",
        storageManager: storageManager,
        showOffsets: 1,
        avoidInlineStyle: 1,
        //Cấu hình ở đây
        selectorManager: { escapeName },
        blockManager: blockManager,
        layerManager: layerManager,
        styleManager: styleManager,
        traitManager: traitManager,
        panels: panelConfig,
        jsInHtml: true,
        allowScripts: 1,
        deviceManager: {
            devices: [
                {
                    name: "Desktop",
                    width: "",
                    widthMedia: "1920px",
                },
                {
                    name: "Mobile",
                    width: "375px",
                    widthMedia: "480px",
                },
            ],
        },
        canvas: {
            styles: styles,
            scripts: scripts,
        },
    });
    buttonElement(editor);
    event(editor);
    configType(editor);
};
initEditor();
export default initEditor;
