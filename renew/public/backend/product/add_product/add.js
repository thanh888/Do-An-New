$(function () {
  $(".tags-select").select2({
    tags: true,
    tokenSeparators: [',']
  })
  $(".select2_init").select2({
    placehoder: "Chon danh muc",
    allowClear: true
  });

  let editor_config = {
    path_absolute: "/",
    selector: "textarea.tynimce_editor_init",
    plugins: [
      "image imagetool",
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    automatic_uploads: true,
    file_picker_types: 'image',

    file_picker_callback: function (callback, value, meta) {
      let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      let type = 'image' === meta.filetype ? 'Images' : 'Files',
          url  = '/laravel-filemanager?editor=tinymce5&type=' + type;

      tinymce.activeEditor.windowManager.openUrl({
          url : url,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          onMessage: (api, message) => {
              callback(message.content);
          }
      });
  }
    
  };

tinymce.init(editor_config);
  // tinymce.init({
  //   selector: 'textarea.tynimce_editor_init',
  //   plugins: 'image code',
  //   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",

  //   /* enable title field in the Image dialog*/
  //   image_title: true,
  //   /* enable automatic uploads of images represented by blob or data URIs*/
  //   automatic_uploads: true,
  //   /*
  //     URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
  //     images_upload_url: 'postAcceptor.php',
  //     here we add custom filepicker only to Image dialog
  //   */
  //   file_picker_types: 'image',
  //   /* and here's our custom image picker*/
  //   file_picker_callback: function (cb, value, meta) {
  //     var input = document.createElement('input');
  //     input.setAttribute('type', 'file');
  //     input.setAttribute('accept', 'image/*');

  //     input.onchange = function () {
  //       var file = this.files[0];

  //       var reader = new FileReader();
  //       reader.onload = function () {
  //         /*
  //           Note: Now we need to register the blob in TinyMCEs image blob
  //           registry. In the next release this part hopefully won't be
  //           necessary, as we are looking to handle it internally.
  //         */
  //         var id = 'blobid' + (new Date()).getTime();
  //         var blobCache = tinymce.activeEditor.editorUpload.blobCache;
  //         var base64 = reader.result.split(',')[1];
  //         var blobInfo = blobCache.create(id, file, base64);
  //         blobCache.add(blobInfo);

  //         /* call the callback and populate the Title field with the file name */
  //         cb(blobInfo.blobUri(), { title: file.name });
  //       };
  //       reader.readAsDataURL(file);
  //     };

  //     input.click();
  //   },
  //   content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
  // });

})