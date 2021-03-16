<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>A Simple Page with CKEditor 4</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor/ckeditor.js"></script>
      <script src="ckeditor/ckfinder.js"></script>
    </head>
    <body>
        <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor 4.
            </textarea>
            <script>
                 var editor = CKEDITOR.replace('editor1', {
                        extraPlugins: ['codemirror', 'maximize']
                    });
                    CKFinder.setupCKEditor(editor);
            </script>
        </form>
    </body>
</html>
