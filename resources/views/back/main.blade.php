<!DOCTYPE html>
<html lang="en">

<head>
    <title>پنل مدیریت | بلاگ دادنو</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{url('/js/main.js')}}"></script>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{url('/back/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('/back/assets/css/rtl.css')}}">

    {{-- <link rel="stylesheet" href='{{ url('/css/chosen.css') }}'> --}}
    {{-- <script src='{{ url('/js/tiny.js') }}'></script> --}}
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"></script>
    <script>
      var editor_config = {
        path_absolute : "/",
        selector: 'textarea.my-editor',
        relative_urls: false,
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table directionality",
          "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        file_picker_callback : function(callback, value, meta) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
    
          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
          if (meta.filetype == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }
    
          tinyMCE.activeEditor.windowManager.openUrl({
            url : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no",
            onMessage: (api, message) => {
              callback(message.content);
            }
          });
        }
      };
    
      tinymce.init(editor_config);
    </script>
    

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    @yield('main')

    <script src="{{url('/back/assets/js/vendor-all.min.js')}}"></script>
    <script src="{{url('/back/assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{url('/back/assets/js/ripple.js')}}"></script>
    <script src="{{url('/back/assets/js/pcoded.min.js')}}"></script>
    <script src='{{ url('/js/chosen.js') }}' type="text/javascript"></script>
    <script src='{{ url('/js/init.js') }}' type="text/javascript" charset="utf-8"></script>
	@stack('chart-add')
    <script src="{{url('/back/assets/js/pages/chart-apex.js')}}"></script>
    {{-- <script>
      {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!};
    var route_prefix ="{{url(config('lfm.url_prefix',config('lfm.prefix')))}}";
    $('lfm').filemanager('image', {prefix: route_prefix});
    </script> --}}

    <script>
      var route_prefix = "/laravel-filemanager";
      {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
      $('#lfm').filemanager('image', {prefix: route_prefix});
    </script>

</body>

</html>