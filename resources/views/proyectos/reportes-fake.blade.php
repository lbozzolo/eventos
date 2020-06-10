@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card grid-margin">

                <div class="row">
                    <div class="col-lg-9 col-md-7 col-sm-6">
                        <div class="card-body">
                            <h2>
                                <span class="text-dark">{!! $item->nombre !!}</span>
                                <span class="text-warning"> / Reportes</span>
                            </h2>
                            <p>{!! ($item->descripcion)? $item->descripcion : '' !!}</p>
                            <button title="Finalizar Evento" type="button" data-toggle="modal" data-target="#finalizar" class="btn btn-danger mb-1">Marcar como Finalizado</button>
                            <a href="" class="btn btn-outline-dark mb-1">Volver</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <div class="card-body">
                            <strong>Fecha del evento</strong> <br>
                            {!! $item->fecha !!}, {!! $item->hora !!} hs <br>
                            <small>estado</small>
                            <span class="text-success">ACTIVO</span>
                            <br><br>
                            <small class="" style="border: 1px solid limegreen; padding: 5px 10px">
                                en vivo <i class="mdi mdi-circle text-success"></i>
                            </small>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-lg-6">


            <div class="card grid-margin">
                <div class="card-body">

                    <div class="row">
                        <div class="col-8">
                            <a href="{!! route('proyectos.inscripciones', $item->id) !!}">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="icon-holder bg-primary text-white py-1 px-3 rounded mr-2">
                                        <i class="mdi mdi-account mdi-24px text-white"></i>
                                    </div>
                                    <h3 class="font-weight-semibold mb-0 text-black">
                                        378 inscriptos
                                    </h3>

                                </div>
                            </a>
                            <div class="d-flex align-items-center mb-2">
                                <div class="icon-holder bg-success text-white py-1 px-3 rounded mr-2">
                                    <i class="mdi mdi-account mdi-24px"></i>
                                </div>
                                <h3 class="font-weight-semibold mb-0" id="conectadosDiv">
                                    245 conectados
                                </h3>
                            </div>
                            <p>Tiempo real</p>
                        </div>
                        <div class="col-lg-4">
                            <canvas id="conectados"
                                    data-total="378"
                                    data-connected="245"
                                    data-percentage="64.8">
                            </canvas>
                            <p class="text-center">Conectados</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card grid-margin">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <small class="float-right" style="border: 1px solid limegreen; padding: 5px 10px">
                                en vivo <i class="mdi mdi-circle text-success"></i>
                            </small>
                            <h4 class="text-primary">Asistentes durante el evento</h4>
                            <canvas id="online_timeline"></canvas>
                            <p class="text-center pt-3 mb-0 pb-0" style="border-top: 1px solid lightgray">
                                {!! $item->fecha !!}<br>
                                <small class="text-center text-gray">Actualizado cada 5 minutos</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-6">

            <div class="card grid-margin">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="text-primary">Resumen</h4>
                            <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <td colspan="2">

                                            Se inscribieron 378 personas entre el
                                            12-4-2020 y el 28-5-2020


                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Asistieron 341
                                    </td>
                                    <td>
                                        <span class="font-weight-semibold">90,2 %</span>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 90.2%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                @if($item->totalAsistentes() != 0)
                                    <tr>
                                        <td>
                                            El pico máximo fue a las
                                            {!! $item->reportes->sortByDesc('cantidad_online')->first()->created_at->format('H:i') !!} hs
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">{!! $item->porcentajePicoUsuariosOnline() !!} %</span>
                                            ({!! ($item->picoUsuariosOnline() > 1)? $item->picoUsuariosOnline().' usuarios' : '1 usuario' !!} online)
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: {!! $item->porcentajePicoUsuariosOnline() !!}%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>
                                        Se ha visualizado
                                        84 veces en diferido
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        Se realizaron 123 consultas
                                    </td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card grid-margin">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="text-primary">Inscriptos por país</h4>

                            <canvas id="paises"></canvas>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('js')

    <script>

        // window.setTimeout(function(){
        //     location.reload()
        // },15000);

        loadConnectedUsers();

        function loadConnectedUsers(inscriptos, conectados, porcentaje){

            var info = $('#conectados');
            info.total = info.attr('data-total');
            info.connected = info.attr('data-connected');
            info.percentage = info.attr('data-percentage');

            var total, value, percentage;

            // console.log('inscriptos: ' + inscriptos);
            // console.log('conectados: ' + conectados);
            // console.log('porcentaje: ' + porcentaje);

            if(inscriptos && conectados && porcentaje){
                total = inscriptos;
                value = conectados;
                percentage = porcentaje;
            } else {
                total = info.total;
                value = info.connected;
                percentage = info.percentage;
            }

            var data = {
                labels: [
                    "Conectados",
                ],
                datasets: [
                    {
                        data: [value, total-value],
                        backgroundColor: [
                            "#00ce68",
                            "gray"
                        ],
                        hoverBackgroundColor: [
                            "lightgreen",
                            "lightgray"
                        ],
                        hoverBorderColor: [
                            "#00ce68",
                            "gray"
                        ]
                    }]
            };

            var myChart = new Chart(document.getElementById('conectados'), {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    legend: {
                        display: false
                    },
                    title: {
                        display: false,
                        text: percentage + '%'
                    },
                    cutoutPercentage: 80,
                    tooltips: {
                        filter: function(item, data) {
                            var label = data.labels[item.index];
                            if (label) return item;
                        }
                    }
                }
            });

            textCenter(percentage);

            function textCenter(val) {

                Chart.pluginService.register({
                    beforeDraw: function(chart) {
                        var width = chart.chart.width,
                            height = chart.chart.height,
                            ctx = chart.chart.ctx;

                        ctx.restore();
                        var fontSize = (height / 114).toFixed(2);
                        ctx.font = fontSize + "em sans-serif";
                        ctx.textBaseline = "middle";

                        var text = chart.options.title.text,
                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                            textY = height / 2;

                        ctx.fillText(text, textX, textY);
                        ctx.save();
                    }
                });
            }

        }


        // ================================================================================================
        // Gráfico de países
        // ================================================================================================


        var paises = <?php echo json_encode($item2->usersByCountryName()) ?>;
        var cantidades = <?php echo json_encode($item2->usersByCountryAmount()) ?>;

        // console.log(cantidades);

        var dataPaises = {
            datasets: [{
                data: cantidades,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: paises
        };

        var randomColorPlugin = {
            // We affect the `beforeUpdate` event
            beforeUpdate: function(chart)
            {
                var backgroundColor = [];
                var borderColor = [];

                // For every data we have ...
                for (var i = 0; i < chart.config.data.datasets[0].data.length; i++) {

                    // We generate a random color
                    var color = "rgba(" + Math.floor(Math.random() * 255) + "," + Math.floor(Math.random() * 255) + "," + Math.floor(Math.random() * 255) + ",";

                    // We push this new color to both background and border color arrays
                    // .. a lighter color is used for the background
                    backgroundColor.push(color + "0.2)");
                    borderColor.push(color + "1)");
                }

                // console.log(color);
                // We update the chart bars color properties
                chart.config.data.datasets[0].backgroundColor = backgroundColor;
                chart.config.data.datasets[0].borderColor = borderColor;
            }

        };

        Chart.pluginService.register(randomColorPlugin);

        var paisesChart = new Chart(document.getElementById('paises'), {
            data: dataPaises,
            type: 'horizontalBar',
            options: {
                legend : {
                    display: false
                },
                gridLines : {
                    lineWidth: 0.5
                },
                tooltips: {
                    enable: false,
                    titleFontSize: 1
                },
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            stepValue: 1,
                            beginAtZero: true,
                            userCallback: function(label, index, labels) {
                                // when the floored value is the same as the value we have a whole number
                                if (Math.floor(label) === label) {
                                    return label;
                                }

                            },
                        }
                    }]
                }
            }
        });


        // ================================================================================================
        // Gráfico de online-timeline
        // ================================================================================================


        function loadOnlineTimeline(users, timestamps){

            var usersOnline = <?php echo json_encode($item->usersOnlineThroughTime()) ?>;
            var timestampsOnline = <?php echo json_encode($item->timestampsThroughTime()) ?>;


            if(users && timestamps){
                usersOnline = users;
                timestampsOnline = timestamps;
            }

            var dataOnlineTimeline = {
                datasets: [{
                    data: usersOnline,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                }],
                labels: timestampsOnline
            };


            var timelineChart = new Chart(document.getElementById('online_timeline'), {
                data: dataOnlineTimeline,
                type: 'line',
                options: {
                    animation: false,
                    legend : {
                        display: false
                    },
                    gridLines : {
                        lineWidth: 0.5
                    },
                    tooltips: {
                        enable: false,
                        titleFontSize: 1
                    },
                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {
                                stepValue: 1,
                                beginAtZero: true,
                                userCallback: function(label, index, labels) {
                                    // when the floored value is the same as the value we have a whole number
                                    if (Math.floor(label) === label) {
                                        return label;
                                    }

                                },
                            }
                        }]
                    }
                }
            });

        }

        loadOnlineTimeline();

        setInterval(function()
        {
            var fetch = true;
            var url = '{!! route('proyectos.get.online.timeline') !!}';
            $.ajax(
                {
                    type : 'get',
                    url : url,
                    dataType : 'json',
                    data : {
                        'proyecto_id': '{!! $item->id !!}',
                        'fetch' : fetch
                    },
                    success : function(data) {
                        loadOnlineTimeline(data.users, data.timestamps);
                    },
                });

        }, 300000000);



        // ================================================================================================
        // SetInterval de usuarios online
        // ================================================================================================


        setInterval(function()
        {
            var fetch = true;
            var url = '{!! route('proyectos.get.connected') !!}';
            $.ajax(
                {
                    type : 'get',
                    url : url,
                    dataType : 'json',
                    data : {
                        'proyecto_id': '{!! $item->id !!}',
                        'fetch' : fetch
                    },
                    success : function(data) {

                        if(data.conectados === 1){
                            conectados = data.conectados + ' conectado';
                        } else {
                            conectados = data.conectados + ' conectados';
                        }

                        $('#conectadosDiv').html('');
                        $('#conectadosDiv').html(conectados);

                        loadConnectedUsers(data.inscriptos, data.conectados, data.porcentaje);

                    },
                });

        }, 10000000);


    </script>


@endsection