<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Visão Geral</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./main.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="https://bernii.github.io/gauge.js/dist/gauge.min.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <?php require 'menu-superior.html';?>
        </div>
        <div class="ui-theme-settings">
            <div class="theme-settings__inner">
                <div class="scrollbar-container">

                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class=""></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                    </button>
                    </span>
                </div>


                <div class="scrollbar-sidebar">
                    <?php require 'menu-lateral.html';?>
                </div>

            </div>

            <div class="app-main__outer">
                <div class="app-main__inner">

                    <div class="app-page-title">
                        <?php require 'menu.html';?>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-center">
                                            <div class="card-header"></div>
                                        </div>
                                        <div class="widget-content-center">
                                            <div class="widget-numbers text-danger">
                                            <div class="widget-content-wrapper">
                                                                    <div class="text-muted pr-2 fsize-1">    CONSULTAR PERFIS</div>
                                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-center">
                                            <div class="card-header"></div>
                                        </div>
                                        <div class="widget-content-center">
                                            <div class="widget-numbers text-danger"></div>
                                            <div class="widget-content-wrapper">
                                                                    <div class="text-muted pr-2 fsize-1"><b>   CONSULTAR RELATÓRIO</b></div>
                                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-center">
                                            <div class="card-header"></div>
                                        </div>
                                        <div class="widget-content-center">
                                            <div class="widget-numbers text-danger"></div>
                                            </div>
                                                                <div class="widget-content-wrapper">
                                                                    <div class="text-muted pr-2 fsize-1"><b>   CONSULTAR EMPRESA  </b></div>
                                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                                                        <div class="widget-content">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left pr-2 fsize-1">
                                                                        <div class="widget-numbers mt-0 fsize-3 text-danger">50%</div>
                                                                    </div>
                                                                    <div class="widget-content-right w-100">
                                                                        <div class="progress-bar-xs progress">
                                                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="130" style="width: 50%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left fsize-1">
                                                                    <div class="text-muted opacity-6">Crítico</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                                                        <div class="widget-content">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left pr-2 fsize-1">
                                                                        <div class="widget-numbers mt-0 fsize-3 text-secondary">85%</div>
                                                                    </div>
                                                                    <div class="widget-content-right w-100">
                                                                        <div class="progress-bar-xs progress">
                                                                            <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="130" style="width: 85%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left fsize-1">
                                                                    <div class="text-muted opacity-6">Abaixo do Esperado</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                                                        <div class="widget-content">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left pr-2 fsize-1">
                                                                        <div class="widget-numbers mt-0 fsize-3 text-warning">100%</div>
                                                                    </div>
                                                                    <div class="widget-content-right w-100">
                                                                        <div class="progress-bar-xs progress">
                                                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="130" style="width: 100%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left fsize-1">
                                                                    <div class="text-muted opacity-6">Atenção</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                                        <div class="widget-content">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left pr-2 fsize-1">
                                                                        <div class="widget-numbers mt-0 fsize-3 text-success">160%</div>
                                                                    </div>
                                                                    <div class="widget-content-right w-100">
                                                                        <div class="progress-bar-xs progress">
                                                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="130" aria-valuemin="0" aria-valuemax="130" style="width: 130%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left fsize-1">
                                                                    <div class="text-muted opacity-6">Excelente</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    <div class="" align="center">
                                            <canvas id="p1" width="500" height="300" ></canvas>  
                                       

                                        <script>
                                              
                                            
                                            var opts = {
                                            angle: 0.15, // The span of the gauge arc
                                            lineWidth: 0.44, // The line thickness
                                            radiusScale: 1, // Relative radius
                                            staticLabels: {
                                                font: "32px sans-serif",  // Specifies font
                                                labels: [0, 50, 85, 100, 160],  // Print labels at these values
                                                color: "#000000",  // Optional: Label text color
                                            },
                                            staticZones: [
                                            {strokeStyle: "#F03E3E", min: 0, max: 50}, // Red from 100 to 130
                                            {strokeStyle: "#808080", min: 50, max: 85}, // Yellow
                                            {strokeStyle: "#eead2d", min: 85, max: 100}, // Green
                                            {strokeStyle: "#30B32D", min: 100, max: 160}, // Yellow
                                            ],
                                            pointer: {
                                                length: 0.6, // // Relative to gauge radius
                                                strokeWidth: 0.035, // The thickness
                                                color: '#000000' // Fill color
                                            },
                                            limitMax: false,     // If false, max value increases automatically if value > maxValue
                                            limitMin: false,     // If true, the min value of the gauge will be fixed
                                            colorStart: '#6FADCF',   // Colors
                                            colorStop: '#8FC0DA',    // just experiment with them
                                            strokeColor: '#E0E0E0',  // to see which ones work best for you
                                            generateGradient: true,
                                            highDpiSupport: true,     // High resolution support
                                            
                                            };
                                            var target = document.getElementById('p1'); // your canvas element
                                            var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
                                            gauge.maxValue = 160; // set max gauge value
                                            gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
                                            gauge.animationSpeed = 32; // set animation speed (32 is default value)
                                            gauge.set('50'); // set actual value

                                        </script>
                                    </div>    


                </div>


            </div>

        </div>

    </div>


    </div>


    <script type="text/javascript" src="./js/main.js"></script>



</body>

</html>