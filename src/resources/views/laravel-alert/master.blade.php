<script src="/laravel-alert/assets/js/pnotify.min.js"></script>
<link rel="stylesheet" type="text/css" href="/laravel-alert/assets/css/pnotify.css">
<script>
    var stack_bottom_right = {"dir1": "up", "dir2": "left", "firstpos1": 25, "firstpos2": 25};
    @if (session()->has('alert'))
    $(function () {
        var opts = {
            stack: stack_bottom_right,
            title: '{{ session('alert')->title }}',
            text: '{{ session('alert')->text }}',
            addclass: 'stack-bottom-right alert alert-styled-left {{ session('alert')->class }}',
            type: '{{ session('alert')->type }}'
        };
        new PNotify(opts);
    });
    @endif
</script>
