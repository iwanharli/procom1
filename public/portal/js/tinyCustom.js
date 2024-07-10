function tinymce_setup_callback(editor) {
    tinymce.init({
        menubar: true,
        selector: 'textarea.richTextBox',
        height: 1000,
        // width : 100,
        plugins: 'link image code table lists',
        // toolbar: 'styleselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table | code',
        // toolbar: [
        //     {
        //         name: 'history', items: ['undo', 'redo']
        //     },
        //     {
        //         name: 'styles', items: ['styleselect']
        //     },
        //     {
        //         name: 'formatting', items: ['bold', 'italic', 'underline']
        //     },
        //     {
        //         name: 'color', items: ['forecolor', 'backcolor']
        //     },
        //     {
        //         name: 'alignment', items: ['alignleft', 'aligncenter', 'alignright', 'alignjustify']
        //     },
        //     {
        //         name: 'indentation', items: ['bullist', 'numlist', 'outdent', 'indent']
        //     },
        //     {
        //         name: 'additional', items: ['link', 'image', 'table', 'code']
        //     }
        // ],
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        toolbar_sticky: true,
        // tinycomments_mode: 'embedded',
        // tinycomments_author: 'BABI',
        // toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
}