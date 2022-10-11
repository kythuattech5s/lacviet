import tinyMCE from "./../../../../scripts/assets/plugins/tinymce/tinymce.min";
import "./../../../../scripts/assets/plugins/tinymce/themes/silver/theme.min";
import "./../../../../scripts/assets/plugins/tinymce/plugins/image/plugin.min";
import "./../../../../scripts/assets/plugins/tinymce/plugins/textcolor/plugin.min";
import "./../../../../scripts/assets/plugins/tinymce/plugins/paste/plugin.min";
import "./../../../../scripts/assets/plugins/tinymce/plugins/autoresize/plugin.min";
import "./../../../../scripts/assets/plugins/tinymce/plugins/colorpicker/plugin.min";
import "./../../../../scripts/assets/plugins/tinymce/plugins/template/plugin.min";
import "./../../../../scripts/assets/plugins/tinymce/icons/default/icons.min";

const TINY = (() => {
    var load = (selector) => {
        tinyMCE.init({
            selector: selector,
            theme: "silver",
            menubar: false,
            statusbar: true,
            min_height: 300,
            max_height: 300,
            resize: false,
            toolbar: true,
            base_url: window.location.origin + "/assets/plugins/tinymce/",
            content_css:
                window.location.origin +
                "/assets/plugins/tinymce/skins/content/default/content.min.css",
            plugins: "image paste autoresize",
            paste_preprocess: function (plugin, args) {
                args.content = args.content;
                // .replace(/<img[^>]*>/gi, "")
                // .replace(/<\/?a[^>]*>/g, "");
            },
            toolbar:
                "undo redo | styleselect | forecolor backcolor | bold italic | image | alignleft aligncenter alignright alignjustify | outdent indent",
            images_file_types: "jpg,png,svg,jpeg,webp,gif",
            images_upload_credentials: true,
            images_upload_url: "shop/upload-image-post",
            images_upload_handler: handleUploadFile,
            image_title: true,
            toolbar_location: "top",
            setup: setupOption,
        });
    };

    var handleUploadFile = (blobInfo, success, failure, progress) => {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open("POST", "/upload-image-content");
        xhr.setRequestHeader("X-Requested-With", "xmlhttprequest");
        xhr.upload.onprogress = function (e) {
            progress((e.loaded / e.total) * 100);
        };
        xhr.onload = function () {
            var json;
            if (xhr.status === 403) {
                failure("HTTP Error: " + xhr.status, { remove: true });
                return;
            }
            if (xhr.status < 200 || xhr.status >= 300) {
                failure("HTTP Error: " + xhr.status);
                return;
            }
            json = JSON.parse(xhr.responseText);
            if (!json || typeof json.message != "string") {
                failure("Invalid JSON: " + xhr.responseText);
                return;
            }
            success(json.message);
        };

        xhr.onerror = function () {
            failure(
                "Image upload failed due to a XHR Transport error. Code: " +
                    xhr.status
            );
        };

        formData = new FormData();
        formData.append(
            "_token",
            document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content")
        );
        formData.append("file", blobInfo.blob(), blobInfo.filename());
        try {
            xhr.send(formData);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    var response = JSON.parse(xhr.responseText);
                    if (xhr.status === 200) {
                        var img = response.message;
                    } else {
                        console.log(response.message);
                    }
                }
            };
        } catch (err) {
            failure(err);
        }
    };

    var setupOption = (editor) => {
        editor.on("input", function (e) {
            tinyMCE.triggerSave();
        });

        editor.on("keyup", function (e) {
            tinyMCE.triggerSave();
        });

        editor.on("change", function (e) {
            tinyMCE.triggerSave();
        });
    };

    return {
        init: (selector) => {
            load(selector);
        },
    };
})();

window.addEventListener("DOMContentLoaded", function () {
    TINY.init("#comment");
});
export default TINY;
