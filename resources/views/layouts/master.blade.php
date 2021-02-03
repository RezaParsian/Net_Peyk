<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME")}}</title>
    <link rel="stylesheet" href="{{asset("app.css")}}">
    <link rel="stylesheet" href="{{asset("/font-awesome/css/font-awesome.min.css")}}">
    @yield('ex-css')
</head>

<body class="rtl">

    @include('layouts.navbar')

    @include('layouts.modal')

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mr-auto mt-5 rouded">
                    <div class="row p-2 justify-content-center mx-1">
                        <div class="col-12">
                            <h1 class="display-6">@yield('title')</h1>
                        </div>
                        {{-- body of panel --}}
                        @yield('body')
                        {{-- end of body of panel --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset("app.js")}}?id=123"></script>
    @yield('ex-js')
</body>

</html>
