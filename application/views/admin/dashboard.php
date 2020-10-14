<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">Dashboard</div>
    </div>
    <ol class="breadcrumb page-breadcrumb">
        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i
                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">Dahsboard</li>
    </ol>
    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i
            class="fa fa-angle-down"></i><input type="hidden" name="datestart"/><input type="hidden" name="endstart"/>
    </div>
    <div class="clearfix"></div>
</div>
<div class="page-content">
    <div id="tab-general">
        <div id="sum_box" class="row mbl">
            <div class="col-sm-6 col-md-3">
                <div class="panel profit db mbm">
                    <div class="panel-body"><p class="icon"><i class="icon fa fa-shopping-cart"></i></p><h4
                            class="value"><span data-counter="" data-start="10" data-end="50" data-step="1"
                                                data-duration="0"></span><span>$</span></h4>
                        <p class="description">Profit description</p>
                        <div class="progress progress-sm mbn">
                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 80%;" class="progress-bar progress-bar-success"><span
                                    class="sr-only">80% Complete (success)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="panel income db mbm">
                    <div class="panel-body"><p class="icon"><i class="icon fa fa-money"></i></p><h4
                            class="value"><span>215</span><span>$</span></h4>
                        <p class="description">Income detail</p>
                        <div class="progress progress-sm mbn">
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 60%;" class="progress-bar progress-bar-info"><span
                                    class="sr-only">60% Complete (success)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="panel profit db mbm">
                    <div class="panel-body"><p class="icon"><i class="icon fa fa-shopping-cart"></i></p><h4
                            class="value"><span data-counter="" data-start="10" data-end="50" data-step="1"
                                                data-duration="0"></span><span>$</span></h4>
                        <p class="description">Profit description</p>
                        <div class="progress progress-sm mbn">
                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 80%;" class="progress-bar progress-bar-success"><span
                                    class="sr-only">80% Complete (success)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="panel income db mbm">
                    <div class="panel-body"><p class="icon"><i class="icon fa fa-money"></i></p><h4
                            class="value"><span>215</span><span>$</span></h4>
                        <p class="description">Income detail</p>
                        <div class="progress progress-sm mbn">
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 60%;" class="progress-bar progress-bar-info"><span
                                    class="sr-only">60% Complete (success)</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#dashboard').addClass('active');
    });
</script>