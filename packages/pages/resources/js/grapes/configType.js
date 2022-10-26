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

    editor.DomComponents.addType("input", {
        isComponent: (el) => el.tagName == "INPUT",
        model: {
            defaults: {
                traits: [
                    // Strings are automatically converted to text types
                    "name", // Same as: { type: 'text', name: 'name' }
                    "placeholder",
                    {
                        type: "select", // Type of the trait
                        label: "Type", // The label you will see in Settings
                        name: "type", // The name of the attribute/property to use on component
                        options: [
                            { id: "text", name: "Text" },
                            { id: "email", name: "Email" },
                            { id: "password", name: "Password" },
                            { id: "number", name: "Number" },
                        ],
                    },
                    {
                        type: "checkbox",
                        name: "required",
                    },
                ],
            },
        },
    });
};
