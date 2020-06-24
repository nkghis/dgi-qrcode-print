<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

{{--        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

        <!-- Styles -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .v {
                transform: rotate(90deg);
            }
        </style>
    </head>
    <body>
        <div>

           {{-- <div class="flex-center position-ref full-height">--}}
            <div class="container">
                <div class="col-xl-6 order-xl-1 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <strong><h4>Liste des 10 derniers intervalles d'imprimé.</h4></strong>
                    </div>
                    <div class="card-body ">
                        <table class="table table-dark table-sm">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-center">Debut</th>
                                <th class="text-center" >Fin</th>
                                <th class="text-center" >Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($histoires as $h)
                            <tr>
                                <th >{{$h->id}}</th>
                                <td class="text-center">{{$h->debut}}</td>
                                <td class="text-center">{{$h->fin}}</td>
                                <td class="text-center"> {{ Carbon\Carbon::parse($h->created_at)->format('d-m-Y h:i:s') }}</td>
                            </tr>
                            @endforeach
                            {{--<tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>


            </div>
       {{-- </div>--}}
    </body>
</html>
