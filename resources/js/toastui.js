import { Editor } from "@toast-ui/editor";

window.initToastUiEditor = function(id, initialValue = '') {
    const editor = new Editor({
        el: document.querySelector(`#${id}`),
        initialEditType: 'wysiwyg',
        initialValue: initialValue,
    });

    return editor;
}