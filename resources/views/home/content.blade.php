            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <!-- prinr_r($saldo); -->
                                @if($saldo!=null)
                                <h2 class="m-b-5 font-strong">{{$saldo['saldo_update']}}</h2>
                                @else
                                <h2 class="m-b-5 font-strong"></h2>
                                @endif
                                <div class="m-b-5">CURRENT BALANCE</div><i class="ti-shopping-cart widget-stat-icon"></i>
                                @if($saldo!=null)
                                   @if($saldo['saldo_update'] > 0)     
                                        <div><i class="fa fa-level-up m-r-5"></i></div>
                                   @else
                                        <div><i class="fa fa-level-down m-r-5"></i></div>
                                   @endif  
                                @else
                                <div><i class="m-r-5"></i></div>           
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                @if($saldo!=null)
                                <h2 class="m-b-5 font-strong">Rp. {{$saldo['total_pengeluaran']}}</h2>
                                @else
                                <h2 class="m-b-5 font-strong"></h2>
                                @endif
                                <div class="m-b-5">TOTAL OUTCOME</div><i class="fa fa-money widget-stat-icon"></i>
                                @if($saldo!=null)
                                   @if($saldo['total_pengeluaran'] > $saldo['total_pemasukan'])     
                                        <div><i class="fa fa-level-up m-r-5"></i></div>
                                   @else
                                        <div><i class="fa fa-level-down m-r-5"></i></div>
                                   @endif  
                                @else
                                <div><i class="m-r-5"></i></div>           
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                @if($saldo!=null)
                                <h2 class="m-b-5 font-strong">Rp. {{$saldo['total_pemasukan']}}</h2>
                                @else
                                <h2 class="m-b-5 font-strong"></h2>
                                @endif
                                <div class="m-b-5">TOTAL INCOME</div><i class="fa fa-money widget-stat-icon"></i>
                                @if($saldo!=null)
                                   @if($saldo['total_pemasukan'] > $saldo['total_pengeluaran'])     
                                        <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                                   @else
                                        <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                                   @endif        
                                @else
                                <div><i class="m-r-5"></i><small></small></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="flexbox mb-4">
                                    <div>
                                        <h3 class="m-0">Statistics</h3>
                                        <div>Kondisi Keuangan mu</div>
                                    </div>
                                    <div class="d-inline-flex">
                                        <div class="px-3" style="border-right: 1px solid rgba(0,0,0,.1);">
                                            <div class="text-muted">WEEKLY INCOME</div>
                                            <div>
                                                @if($saldo!=null)
                                                <span class="h2 m-0">Rp. {{$total_pemasukan_perminggu}}</span>
                                                @else
                                                <span class="h2 m-0"></span>
                                                @endif
                                                <!-- <span class="text-success ml-2"><i class="fa fa-level-up"></i> +25%</span> -->
                                            </div>
                                        </div>
                                        <div class="px-3">
                                            <div class="text-muted">WEEKLY OUTCOME</div>
                                            <div>
                                                 @if($saldo!=null)
                                                <span class="h2 m-0">Rp. {{$total_pengeluaran_perminggu}}</span>
                                                @else
                                                <span class="h2 m-0"></span>
                                                @endif
                                                <!-- <span class="text-warning ml-2"><i class="fa fa-level-down"></i> -12%</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <canvas id="bar_chart" style="height:260px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Statistics</div>
                            </div>
                            <div class="ibox-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <canvas id="doughnut_chart" style="height:160px;"></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="m-b-20 text-success"><i class="fa fa-circle-o m-r-10"></i>Desktop 52%</div>
                                        <div class="m-b-20 text-info"><i class="fa fa-circle-o m-r-10"></i>Tablet 27%</div>
                                        <div class="m-b-20 text-warning"><i class="fa fa-circle-o m-r-10"></i>Mobile 21%</div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-divider list-group-full">
                                    <li class="list-group-item">Chrome
                                        <span class="float-right text-success"><i class="fa fa-caret-up"></i> 24%</span>
                                    </li>
                                    <li class="list-group-item">Firefox
                                        <span class="float-right text-success"><i class="fa fa-caret-up"></i> 12%</span>
                                    </li>
                                    <li class="list-group-item">Opera
                                        <span class="float-right text-danger"><i class="fa fa-caret-down"></i> 4%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                </div>
                <style>
                    .visitors-table tbody tr td:last-child {
                        display: flex;
                        align-items: center;
                    }

                    .visitors-table .progress {
                        flex: 1;
                    }

                    .visitors-table .progress-parcent {
                        text-align: right;
                        margin-left: 10px;
                    }
                </style>
            </div>
<script type="text/javascript">
    var charts = document.getElementById().getContext('2d');

    var curve = new Chart(charts,{
        type:curve,
        data:{
            labels:[<?php $labels?>],
            datasets:[{
                    label:'saldo perminggu',
                    data:[<?php $data?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]      
        }
    });

</script>            