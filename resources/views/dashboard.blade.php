@extends('layouts.app-dashboard')

@section('content')

    <!-- Content area -->
    <div class="content">

        <!-- Main charts -->
        <div class="row">
            <div class="col-lg-5">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Sales statistics</h6>
                        <div class="heading-elements">
                            <form class="heading-form" action="#">
                                <div class="form-group">
                                    <select class="change-date select-sm" id="select_date" style="display: none;">
                                        <optgroup label="<i class='icon-watch pull-right'></i> Time period">
                                            <option value="val1">Mar, 01 - Mar, 31</option>
                                            <option value="val2">Apr 01 - Apr 30</option>
                                            <option value="val3" selected="selected">May, 01 - May, 12</option>
                                        </optgroup>
                                    </select><div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-link text-semibold" data-toggle="dropdown" title="June, 15 - June, 21"><span class="multiselect-selected-text"><span class="status-mark border-warning position-left"></span>June, 15 - June, 21</span> <b class="caret"></b></button><ul class="multiselect-container dropdown-menu pull-right"><li class="multiselect-item multiselect-group"><label><i class="icon-watch pull-right"></i> Time period</label></li><li><a tabindex="0"><label class="radio"><div class="choice"><span><input type="radio" value="val1"></span></div> June, 29 - July, 5</label></a></li><li><a tabindex="0"><label class="radio"><div class="choice"><span><input type="radio" value="val2"></span></div> June, 22 - June 28</label></a></li><li class="active"><a tabindex="0"><label class="radio"><div class="choice"><span class="checked"><input type="radio" value="val3"></span></div> June, 15 - June, 21</label></a></li><li><a tabindex="0"><label class="radio"><div class="choice"><span><input type="radio" value="val4"></span></div> June, 8 - June, 14</label></a></li></ul></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"><i class="icon-calendar5 position-left text-slate"></i> 5,689</h5>
                                    <span class="text-muted text-size-small">orders weekly</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"><i class="icon-calendar52 position-left text-slate"></i> 32,568</h5>
                                    <span class="text-muted text-size-small">orders monthly</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"><i class="icon-cash3 position-left text-slate"></i> $23,464</h5>
                                    <span class="text-muted text-size-small">average revenue</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-group-sm" id="app_sales"></div>
                    <div id="monthly-sales-stats"></div>
                </div>
            </div>
            <!-- Quick stats boxes -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Members online -->
                    <div class="col-md-4 panel bg-teal-400">
                        <div class="panel-body">
                            <div class="heading-elements">
                                <span class="heading-text badge bg-teal-800">+53,6%</span>
                            </div>

                            <h3 class="no-margin">3,450</h3>
                            Members online
                            <div class="text-muted text-size-small">489 avg</div>
                        </div>

                        <div class="container-fluid">
                            <div id="members-online"></div>
                        </div>
                    </div>
                    <!-- Today's revenue -->
                    <div class="col-md-4 panel bg-blue-400">
                        <div class="panel-body">
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="reload"></a></li>
                                </ul>
                            </div>

                            <h3 class="no-margin">$18,390</h3>
                            Today's revenue
                            <div class="text-muted text-size-small">$37,578 avg</div>
                        </div>

                        <div id="today-revenue"></div>
                    </div>
                    <!-- /today's revenue -->
                    <!-- /members online -->
                </div>
            </div>
        </div>
        <!-- /main charts -->
    </div>

@endsection