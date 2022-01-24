<?php
    $CurCountry = $_SERVER['REQUEST_URI'];
    $CurCountry=explode('/',$CurCountry);
    $CurCountry=end($CurCountry);
    $CurCountry=str_replace("%20"," ",$CurCountry);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('/frontend/css/page2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/page2.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <title>Statistique</title>
</head>
<body>
    <header class="site-header"> 
        @yield('header')
    </header>

    <main>
        @yield('banner')
        <div class="barre"> 
            @yield('barre')
        </div>

        <div class="container"> 
            <div class="item">
                <div class="itemTop">
                    Tendances cumulatives de propagation
                </div>
                <div class="itemBot">
                    @yield('graph2')
                </div>
            </div>
            <div class="item">
                <div class="itemTop">
                    Tendances quotidiennes de propagation
                </div>
                <div class="itemBot">
                    @yield('graph1')
                </div>
            </div>
            
        </div>

        <div >
            @if ($CurCountry=='Global')
                <div class="table_title">
                    Statistique par pays
                </div>
                @yield('table')
            @else
                
                    @yield('news')
                
            @endif
            
        </div>
        <div style="height: 1px"></div>
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>