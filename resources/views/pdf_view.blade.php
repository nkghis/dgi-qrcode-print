<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ $title }}</title>
    <style>
        /*p.v {
            writing-mode: vertical-lr;
            transform: rotate(90deg);
            text-orientation: sideways;
            text-align:right;
            text-orientation: sideways;
            margin: 1rem;
        }*/

        /*.classname h5{position:relative; left:-20%; -webkit-transform:  rotate(90deg);-moz-transform:  rotate(90deg);-o-transform:  rotate(90deg);writing-mode: rl-tb;}
        .v {
            transform: rotate(90deg);
            writing-mode:vertical-rl

        }*/
        .rotate-text {
            float:right;
            font-size: 14px;
            /*font-weight: bold;*/
            writing-mode: vertical-rl;
            display: inline-block;
            -webkit-transform:  rotate(90deg);

        }

        .orientation {
            text-orientation: upright;
        }
    </style>
</head>
<body>


{{--@for($i =6001 ; $i<= 6010; $i++)--}}
@for($i =$debut ; $i<= $fin; $i++)
    <div style="break-after:page">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        {{--<div class="classname">
            <h5 >2003</h5>
        </div>--}}

        {{--<div class="row"><p  class="rotate-text">{{ $i }}</p></div>--}}
        <div class="row"><p  class="rotate-text">{{ str_pad($i,7,'0',STR_PAD_LEFT) }}</p></div>

        <br>
        <br>
        <br>



        <div class="row" style="float: right">

            <img  src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(120)->generate(str_pad($i,7,'0',STR_PAD_LEFT))) }} ">
        </div>



    </div>

@endfor

{{--<div style="page-break-after:always">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

        --}}{{--<div class="classname">
            <h5 >2003</h5>
        </div>--}}{{--

    <div class="row"><p  class="rotate-text">1233</p></div>

    <br>
    <br>
    <br>

        <div class="row" style="float: right">

            <img  src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(100)->generate('2001')) }} ">
        </div>



</div>
<div style="page-break-after:always">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    --}}{{--<div class="classname">
        <h5 >2003</h5>
    </div>--}}{{--

    <div class="row"><p  class="rotate-text">2002</p></div>

    <br>
    <br>
    <br>

    <div class="row" style="float: right">

        <img  src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(100)->generate('2002')) }} ">
    </div>



</div>--}}
</body>

</html>
