export const configType = (editor) => {
    editor.DomComponents.addType("image", {
        model: {
            defaults: {
                traits: [
                    {
                        name: "src",
                        placeholder: "Vui lòng nhập",
                    },
                    {
                        name: "title",
                        placeholder: "Vui lòng nhập",
                    },
                    {
                        name: "alt",
                        placeholder: "Vui lòng nhập",
                    },
                ],
            },
        },
    });
};
