<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('_grapes/plugins/grapesjs/css/grapes.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{ mix('_grapes/css/app.css') }}">
    <script src="{{ mix('_grapes/js/root.js') }}" type="module"></script>
</head>

<body data-id="{-currentItem.id-}">
    <div id="navbar" class="sidenav show bg-[#2e3037] fixed !top-[41px] z-[100] flex h-[100vh] w-[15%] translate-x-[-100%] flex-col scrollbar-hide overflow-scroll overflow-x-hidden border-r border-r-black shadow-md transition-all duration-200">
        <nav class="navbar navbar-custom navbar-light sticky top-0 z-[1000] flex items-center justify-between bg-white px-3 py-2">
            <span class="navbar-brand  h3 logo mb-0 p-2 font-bold text-black">{-currentItem.name-}</span>
            <a class="text-green-500" href="/{-currentItem.slug-}" title="Xem trang" target="_blank"><i class="fa-solid fa-up-right-from-square"></i></a>
        </nav>
        <div class="action-block">
            <div class="flex sticky top-12 z-10" roles="tablist">
                <button class="show-tab w-full p-3 text-white bg-[#2e3037] outline-none hover:bg-blue-400" data-rs="tab" data-rs-target="#block">
                    <i class="fa-solid fa-cubes"></i>
                </button>
                <button class="w-full p-3 text-white outline-none bg-[#2e3037] hover:bg-blue-400" data-rs="tab" data-rs-target="#layer">
                    <i class="fa-solid fa-layer-group"></i>
                </button>
                <button class="w-full p-3 text-white outline-none bg-[#2e3037] hover:bg-blue-400" data-rs="tab" data-rs-target="#style">
                    <i class="fa-solid fa-palette"></i>
                </button>
            </div>
            <div>
                <div id="block" data-rs-tab>
                    <div id="blocks"></div>
                </div>
                <div class="hidden" data-rs-tab id="layer">
                    <div id="layers"></div>
                </div>
                <div class="hidden" data-rs-tab id="style">
                    <div class="panel_classes"></div>
                    <div id="trait"></div>
                    <div id="styles"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content">
        <nav class="navbar navbar-custom navbar-light bg-[#2e3037] sticky top-0 z-[1000] p-0">
            <div class="container-fluid">
                <div class="panel__show_styles"></div>
                <div class="panel__devices"></div>
                <div class="panel__basic-actions"></div>
            </div>
        </nav>
        <div id="editor">
        </div>
    </div>
</body>

</html>
