@extends('layouts.master')

@section('title', 'داشبورد')

@section('body')
    <div class="row container-fluid p-0">
        <div class="col-md p-0 rounded mr-1 bg-info">
            <div class="row">
                <div class="col">
                    <div class="col text-white">
                        <h1>50%</h1>
                    </div>
                    <div class="col text-white small">
                        یچیزی
                    </div>
                </div>
                <div class="col-5">
                    <i class="fa fa-twitter box-icon fa-4x text-muted"></i>
                </div>
            </div>
            <div class="col px-3 m-0 turbid text-center small text-white">
                <i class="fa fa-arrow-circle-right"></i>
                4
            </div>
        </div>
        <div class="col-md p-0 rounded mr-1 bg-success">
            <div class="row">
                <div class="col">
                    <div class="col text-white">
                        <h1>50%</h1>
                    </div>
                    <div class="col text-white small">
                        یچیزی
                    </div>
                </div>
                <div class="col-5">
                    <i class="fa fa-firefox box-icon fa-4x text-muted"></i>
                </div>
            </div>
            <div class="col px-3 m-0 turbid text-center small text-white">
                <i class="fa fa-arrow-circle-right"></i>
                3
            </div>
        </div>
        <div class="col-md p-0 rounded mr-1 bg-warning">
            <div class="row">
                <div class="col">
                    <div class="col text-white">
                        <h1>50%</h1>
                    </div>
                    <div class="col text-white small">
                        یچیزی
                    </div>
                </div>
                <div class="col-5">
                    <i class="fa fa-chrome box-icon fa-4x text-muted"></i>
                </div>
            </div>
            <div class="col px-3 m-0 turbid text-center small text-white">
                <i class="fa fa-arrow-circle-right"></i>
                2
            </div>
        </div>
        <div class="col-md p-0 rounded mr-1 bg-danger">
            <div class="row">
                <div class="col">
                    <div class="col text-white">
                        <h1>50%</h1>
                    </div>
                    <div class="col text-white small">
                        یچیزی
                    </div>
                </div>
                <div class="col-5">
                    <i class="fa fa-github box-icon fa-4x text-muted"></i>
                </div>
            </div>
            <div class="col px-3 m-0 turbid text-center small text-white">
                <i class="fa fa-arrow-circle-right"></i>

            </div>
        </div>
    </div>

    <div id="app"></div>
@endsection

@section('ex-css')
    <link rel="stylesheet" href="https://cdn.map.ir/web-sdk/1.4.2/css/mapp.min.css">
    <link rel="stylesheet" href="https://cdn.map.ir/web-sdk/1.4.2/css/fa/style.css">
    <style>
        @charset "utf-8";

        #app {
            width: 100vw;
            height: 100vh;
        }

        .nav-item:hover {
            border-radius: 5px;
            background-color: #444444;
        }

        .fa {
            color: #ffffff;
        }

        .nav-item:hover .fa {
            color: #000;
        }

        * {
            -webkit-touch-callout: unset;
            /* iOS Safari */
            -webkit-user-select: unset;
            /* Safari */
            -khtml-user-select: unset;
            /* Konqueror HTML */
            -moz-user-select: unset;
            /* Firefox */
            -ms-user-select: unset;
            /* Internet Explorer/Edge */
            user-select: unset;
            transition: all 0.5s;
        }

    </style>
@endsection

@section('ex-js')
    <script type="text/javascript" src="https://cdn.map.ir/web-sdk/1.4.2/js/mapp.env.js"></script>
    <script type="text/javascript" src="https://cdn.map.ir/web-sdk/1.4.2/js/mapp.min.js"></script>
    <script>
        var app = null;
        $(document).ready(function() {
            app = new Mapp({
                element: '#app',
                presets: {
                    latlng: {
                        lat: 32,
                        lng: 52,
                    },
                    zoom: 6,
                },
                apiKey: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdmYzA5MDdkZjUyYjgwMWEyOTk5Y2UxM2ZmMzJhMTIxNjQ4M2VhNzIyODZmNTE2Y2JlNjdlZjZmYjgwNjkxZGE2Yzc4YmFiNGNmYjQzYzJhIn0.eyJhdWQiOiIxMjIxNSIsImp0aSI6IjdmYzA5MDdkZjUyYjgwMWEyOTk5Y2UxM2ZmMzJhMTIxNjQ4M2VhNzIyODZmNTE2Y2JlNjdlZjZmYjgwNjkxZGE2Yzc4YmFiNGNmYjQzYzJhIiwiaWF0IjoxNjA5NzczMjI1LCJuYmYiOjE2MDk3NzMyMjUsImV4cCI6MTYxMjI3ODgyNSwic3ViIjoiIiwic2NvcGVzIjpbImJhc2ljIl19.Bpv3ExHW89xF3lGiiodsD3vX7tESfU3qazhkT_pYObTjhqycX--atVwjDKW8G-ksAm-Wklgmv34RvpB8gRuFw8_Op8QUecbHcUjyCQYQDNoTCHFdEvIy0uQbn7maSSq50LCKYWxfYsVg4KmukSeyraMEG30Zws129VxgEOhho3hqn2LjSmn80niDoWZnSF74QvYgpoRBSSt_hLndge7fL7yZuFNxr84nVL0FXUsmWFUI6L2y1jiwTbknP55u2rrZdZaT1CF3V2UoVGcQn0ImCC1FGkpCt-SSMRCnYrHEetwCcr2tEHp-yhN3r-T2LSQx4BJF52-Av5MVfDbkh6QhpQ'
            });
            app.addLayers();
            app.addFullscreen();
            app.addZoomControls();
            app.addMarker({
                name: 'Rp_Marker',
                latlng: {
                    lat: 37.375,
                    lng: 49.759,
                },
                popup: {
                    title: {
                        html: 'Basic Marker Title',
                    },
                    description: {
                        html: 'Basic marker description',
                    },
                    open: true,
                },
            });
        });

    </script>
@endsection
