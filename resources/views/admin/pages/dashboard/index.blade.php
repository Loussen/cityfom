@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                    <div class="btn-group">
                        <button type="button" class="btn bg-indigo-400 legitRipple"><i class="icon-stack2 mr-2"></i> New report</button>
                        <button type="button" class="btn bg-indigo-400 dropdown-toggle legitRipple legitRipple-empty" data-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">Actions</div>
                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View reports</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit reports</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                            <div class="dropdown-header">Export</div>
                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to PDF</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to CSV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content pt-0">

            <!-- Main charts -->
            <div class="row">
                <div class="col-xl-7">

                    <!-- Traffic sources -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Traffic sources</h6>
                            <div class="header-elements">
                                <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                                    <label class="form-check-label">
                                        Live update:
                                        <input type="checkbox" class="form-input-switchery" checked="" data-fouc="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(100, 189, 99); border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 10px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 18px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="card-body py-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3 legitRipple">
                                            <i class="icon-plus3"></i>
                                        </a>
                                        <div>
                                            <div class="font-weight-semibold">New visitors</div>
                                            <span class="text-muted">2,349 avg</span>
                                        </div>
                                    </div>
                                    <div class="w-75 mx-auto mb-3" id="new-visitors"><svg width="154.2375030517578" height="35"><g transform="translate(0,0)" width="154.2375030517578"><defs><clipPath id="load-clip-new-visitors"><rect class="load-clip" width="154.2375030517578" height="35"></rect></clipPath></defs><g clip-path="url(#load-clip-new-visitors)"><path d="M-5.93221165583684,19.166666666666668L-4.943509713197366,16.38888888888889C-3.954807770557893,13.61111111111111,-1.9774038852789464,8.055555555555554,0,7.777777777777775C1.9774038852789464,7.499999999999998,3.954807770557893,12.499999999999998,5.93221165583684,13.472222222222221C7.909615541115786,14.444444444444443,9.887019426394732,11.388888888888888,11.864423311673677,11.11111111111111C13.841827196952625,10.833333333333332,15.819231082231571,13.33333333333333,17.796634967510517,13.749999999999998C19.774038852789463,14.166666666666664,21.75144273806841,12.499999999999998,23.728846623347355,12.63888888888889C25.706250508626304,12.777777777777777,27.68365439390525,14.722222222222221,29.661058279184193,13.61111111111111C31.638462164463142,12.499999999999998,33.61586604974209,8.333333333333332,35.593269935021034,8.055555555555554C37.57067382029998,7.777777777777776,39.548077705578926,11.388888888888888,41.52548159085787,14.027777777777779C43.50288547613682,16.666666666666664,45.480289361415764,18.333333333333332,47.45769324669471,18.055555555555554C49.435097131973656,17.77777777777778,51.412501017252595,15.555555555555555,53.38990490253154,15.416666666666666C55.36730878781049,15.277777777777779,57.34471267308944,17.22222222222222,59.322116558368386,17.63888888888889C61.29952044364734,18.055555555555557,63.276924328926285,16.944444444444443,65.25432821420523,16.111111111111107C67.23173209948418,15.277777777777775,69.20913598476312,14.72222222222222,71.18653987004207,14.444444444444443C73.16394375532101,14.166666666666664,75.14134764059996,14.166666666666664,77.1187515258789,12.22222222222222C79.09615541115785,10.277777777777775,81.0735592964368,6.388888888888886,83.05096318171574,5.83333333333333C85.02836706699469,5.277777777777775,87.00577095227364,8.055555555555554,88.98317483755258,11.666666666666664C90.96057872283153,15.277777777777777,92.93798260811047,19.72222222222222,94.91538649338943,20.138888888888886C96.89279037866837,20.555555555555557,98.8701942639473,16.944444444444443,100.84759814922624,15.833333333333334C102.82500203450519,14.722222222222221,104.80240591978414,16.11111111111111,106.77980980506308,17.63888888888889C108.75721369034203,19.166666666666664,110.73461757562097,20.833333333333332,112.71202146089992,19.02777777777778C114.68942534617887,17.22222222222222,116.66682923145783,11.944444444444443,118.64423311673677,9.583333333333332C120.62163700201572,7.222222222222221,122.59904088729468,7.777777777777777,124.57644477257361,8.888888888888888C126.55384865785257,10,128.5312525431315,11.666666666666666,130.50865642841046,13.055555555555557C132.4860603136894,14.444444444444445,134.46346419896832,15.555555555555555,136.44086808424728,13.888888888888888C138.41827196952622,12.222222222222221,140.39567585480518,7.777777777777778,142.3730797400841,6.666666666666666C144.3504836253631,5.555555555555555,146.32788751064203,7.777777777777777,148.305291395921,9.722222222222221C150.28269528119992,11.666666666666664,152.26009916647888,13.333333333333332,154.2375030517578,15.972222222222221C156.21490693703674,18.61111111111111,158.1923108223157,22.22222222222222,160.16971470759466,20.97222222222222C162.1471185928736,19.72222222222222,164.12452247815253,13.61111111111111,165.11322442079202,10.555555555555554L166.1019263634315,7.499999999999999" class="d3-line d3-line-strong" style="stroke: rgb(38, 166, 154); opacity: 1;" transform="translate(-5.932211875915527,0)"></path></g></g></svg></div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3 legitRipple">
                                            <i class="icon-watch2"></i>
                                        </a>
                                        <div>
                                            <div class="font-weight-semibold">New sessions</div>
                                            <span class="text-muted">08:20 avg</span>
                                        </div>
                                    </div>
                                    <div class="w-75 mx-auto mb-3" id="new-sessions"><svg width="154.2375030517578" height="35"><g transform="translate(0,0)" width="154.2375030517578"><defs><clipPath id="load-clip-new-sessions"><rect class="load-clip" width="154.2375030517578" height="35"></rect></clipPath></defs><g clip-path="url(#load-clip-new-sessions)"><path d="M-5.93221165583684,25L-4.943509713197366,21.249999999999996C-3.954807770557893,17.499999999999996,-1.9774038852789464,9.999999999999996,0,6.944444444444441C1.9774038852789464,3.8888888888888866,3.954807770557893,5.277777777777776,5.93221165583684,5.694444444444443C7.909615541115786,6.111111111111111,9.887019426394732,5.555555555555555,11.864423311673677,8.055555555555555C13.841827196952625,10.555555555555557,15.819231082231571,16.111111111111114,17.796634967510517,17.916666666666668C19.774038852789463,19.72222222222222,21.75144273806841,17.77777777777778,23.728846623347355,16.527777777777775C25.706250508626304,15.277777777777775,27.68365439390525,14.72222222222222,29.661058279184193,14.305555555555554C31.638462164463142,13.888888888888888,33.61586604974209,13.61111111111111,35.593269935021034,12.63888888888889C37.57067382029998,11.666666666666666,39.548077705578926,10,41.52548159085787,12.083333333333332C43.50288547613682,14.166666666666664,45.480289361415764,20,47.45769324669471,19.72222222222222C49.435097131973656,19.444444444444443,51.412501017252595,13.055555555555554,53.38990490253154,10.277777777777779C55.36730878781049,7.499999999999999,57.34471267308944,8.333333333333332,59.322116558368386,7.499999999999999C61.29952044364734,6.666666666666666,63.276924328926285,4.166666666666666,65.25432821420523,5.972222222222221C67.23173209948418,7.777777777777777,69.20913598476312,13.888888888888888,71.18653987004207,16.38888888888889C73.16394375532101,18.888888888888886,75.14134764059996,17.77777777777778,77.1187515258789,15.138888888888888C79.09615541115785,12.499999999999998,81.0735592964368,8.333333333333332,83.05096318171574,7.083333333333331C85.02836706699469,5.833333333333331,87.00577095227364,7.499999999999998,88.98317483755258,10.138888888888888C90.96057872283153,12.777777777777777,92.93798260811047,16.388888888888886,94.91538649338943,16.38888888888889C96.89279037866837,16.388888888888886,98.8701942639473,12.777777777777777,100.84759814922624,13.472222222222221C102.82500203450519,14.166666666666666,104.80240591978414,19.166666666666664,106.77980980506308,19.166666666666668C108.75721369034203,19.166666666666664,110.73461757562097,14.166666666666666,112.71202146089992,14.027777777777779C114.68942534617887,13.888888888888888,116.66682923145783,18.611111111111107,118.64423311673677,19.86111111111111C120.62163700201572,21.111111111111107,122.59904088729468,18.888888888888886,124.57644477257361,17.5C126.55384865785257,16.11111111111111,128.5312525431315,15.555555555555555,130.50865642841046,14.305555555555557C132.4860603136894,13.055555555555555,134.46346419896832,11.11111111111111,136.44086808424728,9.305555555555555C138.41827196952622,7.499999999999998,140.39567585480518,5.833333333333331,142.3730797400841,5.555555555555554C144.3504836253631,5.277777777777775,146.32788751064203,6.3888888888888875,148.305291395921,6.805555555555554C150.28269528119992,7.222222222222221,152.26009916647888,6.944444444444443,154.2375030517578,8.055555555555554C156.21490693703674,9.166666666666664,158.1923108223157,11.666666666666664,160.16971470759466,10.97222222222222C162.1471185928736,10.277777777777775,164.12452247815253,6.388888888888886,165.11322442079202,4.444444444444441L166.1019263634315,2.4999999999999973" class="d3-line d3-line-strong" style="stroke: rgb(255, 112, 67); opacity: 1;" transform="translate(-5.932211875915527,0)"></path></g></g></svg></div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3 legitRipple">
                                            <i class="icon-people"></i>
                                        </a>
                                        <div>
                                            <div class="font-weight-semibold">Total online</div>
                                            <span class="text-muted"><span class="badge badge-mark border-success mr-2"></span> 5,378 avg</span>
                                        </div>
                                    </div>
                                    <div class="w-75 mx-auto mb-3" id="total-online"><svg width="154.2375030517578" height="35"><g transform="translate(0,0)" width="154.2375030517578"><defs><clipPath id="load-clip-total-online"><rect class="load-clip" width="154.2375030517578" height="35"></rect></clipPath></defs><g clip-path="url(#load-clip-total-online)"><path d="M-5.93221165583684,17.5L-4.943509713197366,17.36111111111111C-3.954807770557893,17.22222222222222,-1.9774038852789464,16.944444444444443,0,14.86111111111111C1.9774038852789464,12.777777777777777,3.954807770557893,8.88888888888889,5.93221165583684,7.499999999999999C7.909615541115786,6.111111111111111,9.887019426394732,7.222222222222221,11.864423311673677,8.194444444444443C13.841827196952625,9.166666666666664,15.819231082231571,9.999999999999998,17.796634967510517,12.916666666666666C19.774038852789463,15.833333333333332,21.75144273806841,20.833333333333332,23.728846623347355,21.38888888888889C25.706250508626304,21.944444444444443,27.68365439390525,18.055555555555554,29.661058279184193,16.527777777777775C31.638462164463142,14.999999999999998,33.61586604974209,15.833333333333332,35.593269935021034,13.75C37.57067382029998,11.666666666666666,39.548077705578926,6.666666666666666,41.52548159085787,8.055555555555555C43.50288547613682,9.444444444444443,45.480289361415764,17.22222222222222,47.45769324669471,20.555555555555554C49.435097131973656,23.888888888888886,51.412501017252595,22.77777777777778,53.38990490253154,20.972222222222225C55.36730878781049,19.166666666666668,57.34471267308944,16.666666666666664,59.322116558368386,14.027777777777775C61.29952044364734,11.388888888888888,63.276924328926285,8.61111111111111,65.25432821420523,8.333333333333332C67.23173209948418,8.055555555555555,69.20913598476312,10.277777777777779,71.18653987004207,12.63888888888889C73.16394375532101,15,75.14134764059996,17.5,77.1187515258789,18.47222222222222C79.09615541115785,19.444444444444443,81.0735592964368,18.888888888888886,83.05096318171574,18.888888888888886C85.02836706699469,18.888888888888886,87.00577095227364,19.444444444444443,88.98317483755258,18.33333333333333C90.96057872283153,17.22222222222222,92.93798260811047,14.444444444444445,94.91538649338943,12.222222222222221C96.89279037866837,10,98.8701942639473,8.333333333333332,100.84759814922624,9.166666666666666C102.82500203450519,10,104.80240591978414,13.333333333333332,106.77980980506308,14.722222222222221C108.75721369034203,16.11111111111111,110.73461757562097,15.555555555555555,112.71202146089992,15.694444444444445C114.68942534617887,15.833333333333332,116.66682923145783,16.666666666666664,118.64423311673677,17.5C120.62163700201572,18.333333333333332,122.59904088729468,19.166666666666664,124.57644477257361,17.083333333333332C126.55384865785257,14.999999999999998,128.5312525431315,10,130.50865642841046,8.88888888888889C132.4860603136894,7.777777777777778,134.46346419896832,10.555555555555555,136.44086808424728,13.75C138.41827196952622,16.944444444444443,140.39567585480518,20.555555555555557,142.3730797400841,22.638888888888886C144.3504836253631,24.72222222222222,146.32788751064203,25.27777777777778,148.305291395921,24.72222222222222C150.28269528119992,24.166666666666664,152.26009916647888,22.5,154.2375030517578,20.97222222222222C156.21490693703674,19.444444444444443,158.1923108223157,18.055555555555554,160.16971470759466,15.555555555555554C162.1471185928736,13.055555555555555,164.12452247815253,9.444444444444443,165.11322442079202,7.638888888888888L166.1019263634315,5.833333333333333" class="d3-line d3-line-strong" style="stroke: rgb(92, 107, 192); opacity: 1;" transform="translate(-5.932211875915527,0)"></path></g></g></svg></div>
                                </div>
                            </div>
                        </div>

                        <div class="chart position-relative" id="traffic-sources"><div class="d3-tip e" style="display: none;"></div><svg width="697.0250244140625" height="340"><g transform="translate(50,5)" width="697.0250244140625"></g></svg></div>
                    </div>
                    <!-- /traffic sources -->

                </div>

                <div class="col-xl-5">

                    <!-- Sales stats -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Sales statistics</h6>
                            <div class="header-elements">
                                <select class="form-control custom-select" id="select_date">
                                    <option value="val1">June, 29 - July, 5</option>
                                    <option value="val2">June, 22 - June 28</option>
                                    <option value="val3" selected="">June, 15 - June, 21</option>
                                    <option value="val4">June, 8 - June, 14</option>
                                </select>
                            </div>
                        </div>

                        <div class="card-body py-0">
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <h5 class="font-weight-semibold mb-0">5,689</h5>
                                        <span class="text-muted font-size-sm">new orders</span>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="mb-3">
                                        <h5 class="font-weight-semibold mb-0">32,568</h5>
                                        <span class="text-muted font-size-sm">this month</span>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="mb-3">
                                        <h5 class="font-weight-semibold mb-0">$23,464</h5>
                                        <span class="text-muted font-size-sm">expected profit</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chart mb-2" id="app_sales"><svg width="492.1625061035156" height="255"><g transform="translate(50,5)"></g></svg></div>
                        <div class="chart" id="monthly-sales-stats"><svg width="492.1625061035156" height="100"><g transform="translate(35,20)"></g></svg></div>
                    </div>
                    <!-- /sales stats -->

                </div>
            </div>
            <!-- /main charts -->


            <!-- Dashboard content -->
            <div class="row">
                <div class="col-xl-8">

                    <!-- Marketing campaigns -->
                    <div class="card">
                        <div class="card-header header-elements-sm-inline">
                            <h6 class="card-title">Marketing campaigns</h6>
                            <div class="header-elements">
                                <span class="badge bg-success badge-pill">28 active</span>
                                <div class="list-icons ml-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                            <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                            <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                            <div class="d-flex align-items-center mb-3 mb-sm-0">
                                <div id="campaigns-donut"><svg width="42" height="42"><g transform="translate(21,21)"><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M1.1634144591899855e-15,19A19,19 0 0,1 -14.050144241469582,12.790365389381929L-7.025072120734791,6.3951826946909645A9.5,9.5 0 0,0 5.817072295949927e-16,9.5Z" style="fill: rgb(102, 187, 106);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M-14.050144241469582,12.790365389381929A19,19 0 0,1 0.6493373977393208,-18.988900993577726L0.3246686988696604,-9.494450496788863A9.5,9.5 0 0,0 -7.025072120734791,6.3951826946909645Z" style="fill: rgb(149, 117, 205);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M0.6493373977393208,-18.988900993577726A19,19 0 0,1 5.817072295949928e-15,19L2.908536147974964e-15,9.5A9.5,9.5 0 0,0 0.3246686988696604,-9.494450496788863Z" style="fill: rgb(255, 112, 67);"></path></g></g></svg></div>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">38,289 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+16.2%)</span></h5>
                                    <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">May 12, 12:30 am</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3 mb-sm-0">
                                <div id="campaign-status-pie"><svg width="42" height="42"><g transform="translate(21,21)"><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M1.1634144591899855e-15,19A19,19 0 0,1 -10.035763324841723,-16.133302652828462L-5.017881662420861,-8.066651326414231A9.5,9.5 0 0,0 5.817072295949927e-16,9.5Z" style="fill: rgb(41, 182, 246);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M-10.035763324841723,-16.133302652828462A19,19 0 0,1 17.35205039879773,-7.739919053684189L8.676025199398865,-3.8699595268420945A9.5,9.5 0 0,0 -5.017881662420861,-8.066651326414231Z" style="fill: rgb(239, 83, 80);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M17.35205039879773,-7.739919053684189A19,19 0 0,1 14.540850859600345,12.229622082421841L7.270425429800173,6.1148110412109205A9.5,9.5 0 0,0 8.676025199398865,-3.8699595268420945Z" style="fill: rgb(129, 199, 132);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M14.540850859600345,12.229622082421841A19,19 0 0,1 5.817072295949928e-15,19L2.908536147974964e-15,9.5A9.5,9.5 0 0,0 7.270425429800173,6.1148110412109205Z" style="fill: rgb(153, 153, 153);"></path></g></g></svg></div>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">2,458 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-4.9%)</span></h5>
                                    <span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">Jun 4, 4:00 am</span>
                                </div>
                            </div>

                            <div>
                                <a href="#" class="btn bg-indigo-300 legitRipple"><i class="icon-statistics mr-2"></i> View report</a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th>Campaign</th>
                                    <th>Client</th>
                                    <th>Changes</th>
                                    <th>Budget</th>
                                    <th>Status</th>
                                    <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-active table-border-double">
                                    <td colspan="5">Today</td>
                                    <td class="text-right">
                                        <span class="progress-meter" id="today-progress" data-progress="30"><svg width="20" height="20"><g transform="translate(10,10)"><g class="progress-meter"><path d="M0,8A8,8 0 1,1 0,-8A8,8 0 1,1 0,8Z" style="fill: none; stroke: rgb(121, 134, 203); stroke-width: 1.5;"></path><path d="M4.898587196589413e-16,-8A8,8 0 0,1 7.608452130361228,2.472135954999579L0,0Z" style="fill: rgb(121, 134, 203);"></path></g></g></svg></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="{{asset("admin/global_assets/images/brands/facebook.png")}}" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Facebook</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-blue mr-1"></span>
                                                    02:00 - 03:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Mintlime</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.43%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$5,489</h6></td>
                                    <td><span class="badge bg-blue">Active</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/brands/youtube.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Youtube videos</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-danger mr-1"></span>
                                                    13:00 - 14:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">CDsoft</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 3.12%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$2,592</h6></td>
                                    <td><span class="badge bg-danger">Closed</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/brands/spotify.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Spotify ads</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-grey-400 mr-1"></span>
                                                    10:00 - 11:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Diligence</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> - 8.02%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$1,268</h6></td>
                                    <td><span class="badge bg-grey-400">On hold</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/brands/twitter.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Twitter ads</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-grey-400 mr-1"></span>
                                                    04:00 - 05:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Deluxe</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.78%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$7,467</h6></td>
                                    <td><span class="badge bg-grey-400">On hold</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table-active table-border-double">
                                    <td colspan="5">Yesterday</td>
                                    <td class="text-right">
                                        <span class="progress-meter" id="yesterday-progress" data-progress="65"><svg width="20" height="20"><g transform="translate(10,10)"><g class="progress-meter"><path d="M0,8A8,8 0 1,1 0,-8A8,8 0 1,1 0,8Z" style="fill: none; stroke: rgb(121, 134, 203); stroke-width: 1.5;"></path><path d="M4.898587196589413e-16,-8A8,8 0 1,1 -6.472135954999579,4.702282018339786L0,0Z" style="fill: rgb(121, 134, 203);"></path></g></g></svg></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/brands/bing.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Bing campaign</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-success mr-1"></span>
                                                    15:00 - 16:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Metrics</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> - 5.78%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$970</h6></td>
                                    <td><span class="badge bg-success-400">Pending</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/brands/amazon.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Amazon ads</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-danger mr-1"></span>
                                                    18:00 - 19:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Blueish</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 6.79%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$1,540</h6></td>
                                    <td><span class="badge bg-blue">Active</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/brands/dribbble.png" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Dribbble ads</a>
                                                <div class="text-muted font-size-sm">
                                                    <span class="badge badge-mark border-blue mr-1"></span>
                                                    20:00 - 21:00
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Teamable</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> 9.83%</span></td>
                                    <td><h6 class="font-weight-semibold mb-0">$8,350</h6></td>
                                    <td><span class="badge bg-danger">Closed</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /marketing campaigns -->


                    <!-- Quick stats boxes -->
                    <div class="row">
                        <div class="col-lg-4">

                            <!-- Members online -->
                            <div class="card bg-teal-400">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">3,450</h3>
                                        <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
                                    </div>

                                    <div>
                                        Members online
                                        <div class="font-size-sm opacity-75">489 avg</div>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div id="members-online"><svg width="233.15000915527344" height="50"><g width="233.15000915527344"><rect class="d3-random-bars" width="6.716255407765078" x="2.878395174756462" height="47.5" y="2.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="12.473045757278001" height="42.5" y="7.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="22.067696339799543" height="37.5" y="12.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="31.662346922321085" height="37.5" y="12.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="41.25699750484262" height="45" y="5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="50.85164808736416" height="25" y="25" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="60.44629866988571" height="42.5" y="7.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="70.04094925240724" height="27.500000000000004" y="22.499999999999996" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="79.63559983492878" height="27.500000000000004" y="22.499999999999996" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="89.23025041745032" height="35" y="15" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="98.82490099997186" height="37.5" y="12.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="108.4195515824934" height="32.5" y="17.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="118.01420216501495" height="42.5" y="7.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="127.60885274753649" height="30" y="20" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="137.20350333005803" height="30" y="20" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="146.79815391257955" height="40" y="10" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="156.3928044951011" height="40" y="10" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="165.98745507762266" height="32.5" y="17.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="175.58210566014418" height="50" y="0" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="185.17675624266573" height="42.5" y="7.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="194.77140682518726" height="47.5" y="2.5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="204.3660574077088" height="45" y="5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="213.96070799023033" height="45" y="5" style="fill: rgba(255, 255, 255, 0.5);"></rect><rect class="d3-random-bars" width="6.716255407765078" x="223.55535857275189" height="47.5" y="2.5" style="fill: rgba(255, 255, 255, 0.5);"></rect></g></svg></div>
                                </div>
                            </div>
                            <!-- /members online -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Current server load -->
                            <div class="card bg-pink-400">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">49.4%</h3>
                                        <div class="list-icons ml-auto">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        Current server load
                                        <div class="font-size-sm opacity-75">34.6% avg</div>
                                    </div>
                                </div>

                                <div id="server-load"><svg width="253.15000915527344" height="50"><g transform="translate(0,0)" width="253.15000915527344"><defs><clipPath id="load-clip-server-load"><rect class="load-clip" width="253.15000915527344" height="50"></rect></clipPath></defs><g clip-path="url(#load-clip-server-load)"><path d="M-9.736538813664364,23.666666666666668L-8.113782344720303,25.888888888888886C-6.491025875776242,28.11111111111111,-3.245512937888121,32.55555555555556,0,28.55555555555555C3.245512937888121,24.555555555555554,6.491025875776242,12.11111111111111,9.736538813664364,9.88888888888889C12.982051751552484,7.666666666666668,16.227564689440605,15.666666666666668,19.473077627328728,18.77777777777778C22.71859056521685,21.88888888888889,25.96410350310497,20.111111111111114,29.20961644099309,20.111111111111114C32.45512937888121,20.111111111111114,35.70064231676933,21.88888888888889,38.946155254657455,21.888888888888893C42.19166819254558,21.88888888888889,45.43718113043369,20.111111111111114,48.68269406832182,19C51.92820700620994,17.88888888888889,55.17371994409806,17.444444444444443,58.41923288198618,16.11111111111111C61.6647458198743,14.777777777777775,64.91025875776242,12.555555555555554,68.15577169565054,12.11111111111111C71.40128463353867,11.666666666666664,74.64679757142679,12.999999999999996,77.89231050931491,16.555555555555554C81.13782344720303,20.11111111111111,84.38333638509114,25.888888888888893,87.62884932297928,28.555555555555557C90.87436226086739,31.222222222222225,94.11987519875551,30.77777777777778,97.36538813664365,31.22222222222222C100.61090107453175,31.666666666666664,103.85641401241988,33,107.10192695030801,29.444444444444443C110.34743988819612,25.88888888888889,113.59295282608424,17.444444444444443,116.83846576397237,14.777777777777777C120.08397870186047,12.11111111111111,123.3294916397486,15.222222222222223,126.5750045776367,19.444444444444446C129.82051751552484,23.666666666666668,133.06603045341296,29,136.3115433913011,28.555555555555557C139.5570563291892,28.11111111111111,142.8025692670773,21.88888888888889,146.04808220496543,18.555555555555557C149.29359514285355,15.222222222222221,152.5391080807417,14.777777777777775,155.78462101862982,12.111111111111109C159.03013395651794,9.444444444444443,162.27564689440604,4.555555555555555,165.5211598322942,4.555555555555555C168.76667277018228,4.555555555555555,172.0121857080704,9.444444444444443,175.2576986459585,14.555555555555554C178.50321158384665,19.666666666666664,181.74872452173477,25,184.99423745962292,27.444444444444443C188.23975039751102,29.888888888888886,191.48526333539914,29.444444444444443,194.73077627328723,24.999999999999996C197.97628921117538,20.555555555555554,201.2218021490635,12.111111111111107,204.46731508695166,9.666666666666664C207.71282802483975,7.222222222222218,210.95834096272787,10.777777777777775,214.20385390061597,15.444444444444443C217.4493668385041,20.11111111111111,220.6948797763922,25.888888888888893,223.94039271428034,27.888888888888893C227.18590565216846,29.888888888888893,230.43141859005658,28.11111111111111,233.6769315279447,26.555555555555554C236.92244446583283,24.999999999999996,240.16795740372095,23.666666666666664,243.41347034160904,21.666666666666664C246.6589832794972,19.666666666666664,249.90449621738532,16.999999999999996,253.1500091552734,16.777777777777775C256.39552209316156,16.555555555555554,259.6410350310497,18.77777777777778,262.8865479689378,17.88888888888889C266.1320609068259,17,269.37757384471405,13,271.0003303136581,11L272.6230867826022,9L272.6230867826022,50L271.0003303136581,49.999999999999986C269.37757384471405,49.99999999999999,266.1320609068259,49.99999999999999,262.8865479689378,49.999999999999986C259.6410350310497,49.99999999999999,256.39552209316156,49.99999999999999,253.1500091552734,49.999999999999986C249.90449621738532,49.99999999999999,246.6589832794972,49.99999999999999,243.41347034160907,49.999999999999986C240.16795740372095,49.99999999999999,236.92244446583283,49.99999999999999,233.6769315279447,49.999999999999986C230.43141859005658,49.99999999999999,227.18590565216846,49.99999999999999,223.94039271428034,49.999999999999986C220.6948797763922,49.99999999999999,217.4493668385041,49.99999999999999,214.20385390061597,49.999999999999986C210.95834096272787,49.99999999999999,207.71282802483975,49.99999999999999,204.46731508695166,49.999999999999986C201.2218021490635,49.99999999999999,197.97628921117538,49.99999999999999,194.73077627328723,49.999999999999986C191.48526333539914,49.99999999999999,188.23975039751102,49.99999999999999,184.99423745962292,49.999999999999986C181.74872452173477,49.99999999999999,178.50321158384665,49.99999999999999,175.2576986459585,49.999999999999986C172.0121857080704,49.99999999999999,168.76667277018228,49.99999999999999,165.5211598322942,49.999999999999986C162.27564689440604,49.99999999999999,159.03013395651794,49.99999999999999,155.78462101862982,49.999999999999986C152.5391080807417,49.99999999999999,149.29359514285355,49.99999999999999,146.04808220496543,49.999999999999986C142.8025692670773,49.99999999999999,139.5570563291892,49.99999999999999,136.3115433913011,49.999999999999986C133.06603045341296,49.99999999999999,129.82051751552484,49.99999999999999,126.57500457763672,49.999999999999986C123.3294916397486,49.99999999999999,120.08397870186047,49.99999999999999,116.83846576397235,49.999999999999986C113.59295282608424,49.99999999999999,110.34743988819612,49.99999999999999,107.10192695030801,49.999999999999986C103.85641401241988,49.99999999999999,100.61090107453175,49.99999999999999,97.36538813664365,49.999999999999986C94.11987519875551,49.99999999999999,90.87436226086739,49.99999999999999,87.62884932297928,49.999999999999986C84.38333638509114,49.99999999999999,81.13782344720303,49.99999999999999,77.89231050931491,49.999999999999986C74.64679757142679,49.99999999999999,71.40128463353867,49.99999999999999,68.15577169565054,49.999999999999986C64.91025875776242,49.99999999999999,61.6647458198743,49.99999999999999,58.419232881986176,49.999999999999986C55.17371994409806,49.99999999999999,51.92820700620994,49.99999999999999,48.68269406832182,49.999999999999986C45.43718113043369,49.99999999999999,42.19166819254558,49.99999999999999,38.946155254657455,49.999999999999986C35.70064231676933,49.99999999999999,32.45512937888121,49.99999999999999,29.20961644099309,49.999999999999986C25.96410350310497,49.99999999999999,22.71859056521685,49.99999999999999,19.473077627328728,49.999999999999986C16.227564689440605,49.99999999999999,12.982051751552484,49.99999999999999,9.736538813664364,49.999999999999986C6.491025875776242,49.99999999999999,3.245512937888121,49.99999999999999,0,49.999999999999986C-3.245512937888121,49.99999999999999,-6.491025875776242,49.99999999999999,-8.113782344720303,49.999999999999986L-9.736538813664364,50Z" class="d3-area" style="fill: rgba(255, 255, 255, 0.5); opacity: 1;" transform="translate(-9.736538887023926,0)"></path></g></g></svg></div>
                            </div>
                            <!-- /current server load -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Today's revenue -->
                            <div class="card bg-blue-400">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">$18,390</h3>
                                        <div class="list-icons ml-auto">
                                            <a class="list-icons-item" data-action="reload"></a>
                                        </div>
                                    </div>

                                    <div>
                                        Today's revenue
                                        <div class="font-size-sm opacity-75">$37,578 avg</div>
                                    </div>
                                </div>

                                <div id="today-revenue"><svg width="253.15000915527344" height="50"><g transform="translate(0,0)" width="253.15000915527344"><defs><clipPath id="clip-line-small"><rect class="clip" width="253.15000915527344" height="50"></rect></clipPath></defs><path d="M20,8.46153846153846L55.525001525878906,25.76923076923077L91.05000305175781,5L126.57500457763672,15.384615384615383L162.1000061035156,5L197.62500762939456,36.15384615384615L233.15000915527344,8.46153846153846" clip-path="url(#clip-line-small)" class="d3-line d3-line-medium" style="stroke: rgb(255, 255, 255);"></path><g><line class="d3-line-guides" x1="20" y1="50" x2="20" y2="8.46153846153846" style="stroke: rgba(255, 255, 255, 0.3); stroke-dasharray: 4, 2; shape-rendering: crispedges;"></line><line class="d3-line-guides" x1="55.525001525878906" y1="50" x2="55.525001525878906" y2="25.76923076923077" style="stroke: rgba(255, 255, 255, 0.3); stroke-dasharray: 4, 2; shape-rendering: crispedges;"></line><line class="d3-line-guides" x1="91.05000305175781" y1="50" x2="91.05000305175781" y2="5" style="stroke: rgba(255, 255, 255, 0.3); stroke-dasharray: 4, 2; shape-rendering: crispedges;"></line><line class="d3-line-guides" x1="126.57500457763672" y1="50" x2="126.57500457763672" y2="15.384615384615383" style="stroke: rgba(255, 255, 255, 0.3); stroke-dasharray: 4, 2; shape-rendering: crispedges;"></line><line class="d3-line-guides" x1="162.1000061035156" y1="50" x2="162.1000061035156" y2="5" style="stroke: rgba(255, 255, 255, 0.3); stroke-dasharray: 4, 2; shape-rendering: crispedges;"></line><line class="d3-line-guides" x1="197.62500762939456" y1="50" x2="197.62500762939456" y2="36.15384615384615" style="stroke: rgba(255, 255, 255, 0.3); stroke-dasharray: 4, 2; shape-rendering: crispedges;"></line><line class="d3-line-guides" x1="233.15000915527344" y1="50" x2="233.15000915527344" y2="8.46153846153846" style="stroke: rgba(255, 255, 255, 0.3); stroke-dasharray: 4, 2; shape-rendering: crispedges;"></line></g><g><circle class="d3-line-circle d3-line-circle-medium" cx="20" cy="8.46153846153846" r="3" style="stroke: rgb(255, 255, 255); fill: rgb(255, 255, 255); opacity: 1;"></circle><circle class="d3-line-circle d3-line-circle-medium" cx="55.525001525878906" cy="25.76923076923077" r="3" style="stroke: rgb(255, 255, 255); fill: rgb(255, 255, 255); opacity: 1;"></circle><circle class="d3-line-circle d3-line-circle-medium" cx="91.05000305175781" cy="5" r="3" style="stroke: rgb(255, 255, 255); fill: rgb(255, 255, 255); opacity: 1;"></circle><circle class="d3-line-circle d3-line-circle-medium" cx="126.57500457763672" cy="15.384615384615383" r="3" style="stroke: rgb(255, 255, 255); fill: rgb(255, 255, 255); opacity: 1;"></circle><circle class="d3-line-circle d3-line-circle-medium" cx="162.1000061035156" cy="5" r="3" style="stroke: rgb(255, 255, 255); fill: rgb(255, 255, 255); opacity: 1;"></circle><circle class="d3-line-circle d3-line-circle-medium" cx="197.62500762939456" cy="36.15384615384615" r="3" style="stroke: rgb(255, 255, 255); fill: rgb(255, 255, 255); opacity: 1;"></circle><circle class="d3-line-circle d3-line-circle-medium" cx="233.15000915527344" cy="8.46153846153846" r="3" style="stroke: rgb(255, 255, 255); fill: rgb(255, 255, 255); opacity: 1;"></circle></g></g></svg></div>
                            </div>
                            <!-- /today's revenue -->

                        </div>
                    </div>
                    <!-- /quick stats boxes -->


                    <!-- Support tickets -->
                    <div class="card">
                        <div class="card-header header-elements-sm-inline">
                            <h6 class="card-title">Support tickets</h6>
                            <div class="header-elements">
                                <a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
                                    <i class="icon-calendar3 mr-2"></i>
                                    <span>March 6 - April 4</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                <div id="tickets-status"><svg width="42" height="42"><g transform="translate(21,21)"><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M1.1634144591899855e-15,19A19,19 0 0,1 -12.326087772183463,-14.459168725498339L-6.163043886091732,-7.229584362749169A9.5,9.5 0 0,0 5.817072295949927e-16,9.5Z" style="fill: rgb(41, 182, 246);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M-12.326087772183463,-14.459168725498339A19,19 0 0,1 14.331188229058796,-12.474656065130077L7.165594114529398,-6.237328032565038A9.5,9.5 0 0,0 -6.163043886091732,-7.229584362749169Z" style="fill: rgb(102, 187, 106);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M14.331188229058796,-12.474656065130077A19,19 0 0,1 5.817072295949928e-15,19L2.908536147974964e-15,9.5A9.5,9.5 0 0,0 7.165594114529398,-6.237328032565038Z" style="fill: rgb(239, 83, 80);"></path></g></g></svg></div>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">14,327 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+2.9%)</span></h5>
                                    <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Jun 16, 10:00 am</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon legitRipple">
                                    <i class="icon-alarm-add"></i>
                                </a>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">1,132</h5>
                                    <span class="text-muted">total tickets</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon legitRipple">
                                    <i class="icon-spinner11"></i>
                                </a>
                                <div class="ml-3">
                                    <h5 class="font-weight-semibold mb-0">06:25:00</h5>
                                    <span class="text-muted">response time</span>
                                </div>
                            </div>

                            <div>
                                <a href="#" class="btn bg-teal-400 legitRipple"><i class="icon-statistics mr-2"></i> Report</a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th style="width: 50px">Due</th>
                                    <th style="width: 300px;">User</th>
                                    <th>Description</th>
                                    <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-active table-border-double">
                                    <td colspan="3">Active tickets</td>
                                    <td class="text-right">
                                        <span class="badge bg-blue badge-pill">24</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="mb-0">12</h6>
                                        <div class="font-size-sm text-muted line-height-1">hours</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-teal-400 rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">A</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Annabelle Doney</a>
                                                <div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span> Active</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default">
                                            <div class="font-weight-semibold">[#1183] Workaround for OS X selects printing bug</div>
                                            <span class="text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="mb-0">16</h6>
                                        <div class="font-size-sm text-muted line-height-1">hours</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="{{asset("admin/global_assets/images/placeholders/placeholder.jpg")}}" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Chris Macintyre</a>
                                                <div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span> Active</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default">
                                            <div class="font-weight-semibold">[#1249] Vertically center carousel controls</div>
                                            <span class="text-muted">Try any carousel control and reduce the screen width below...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="mb-0">20</h6>
                                        <div class="font-size-sm text-muted line-height-1">hours</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-blue rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">R</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Robert Hauber</a>
                                                <div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span> Active</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default">
                                            <div class="font-weight-semibold">[#1254] Inaccurate small pagination height</div>
                                            <span class="text-muted">The height of pagination elements is not consistent with...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="mb-0">40</h6>
                                        <div class="font-size-sm text-muted line-height-1">hours</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-warning-400 rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">R</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Robert Hauber</a>
                                                <div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span> Active</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default">
                                            <div class="font-weight-semibold">[#1184] Round grid column gutter operations</div>
                                            <span class="text-muted">Left rounds up, right rounds down. should keep everything...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table-active table-border-double">
                                    <td colspan="3">Resolved tickets</td>
                                    <td class="text-right">
                                        <span class="badge bg-success badge-pill">42</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-checkmark3 text-success"></i>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">A</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Alan Macedo</a>
                                                <div class="text-muted font-size-sm"><span class="badge badge-mark border-success mr-1"></span> Resolved</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default">
                                            <div>[#1046] Avoid some unnecessary HTML string</div>
                                            <span class="text-muted">Rather than building a string of HTML and then parsing it...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-checkmark3 text-success"></i>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-pink-400 rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">B</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Brett Castellano</a>
                                                <div class="text-muted font-size-sm"><span class="badge badge-mark border-success mr-1"></span> Resolved</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default">
                                            <div>[#1038] Update json configuration</div>
                                            <span class="text-muted">The <code>files</code> property is necessary to override the files property...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-checkmark3 text-success"></i>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Roxanne Forbes</a>
                                                <div class="text-muted font-size-sm"><span class="badge badge-mark border-success mr-1"></span> Resolved</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default">
                                            <div>[#1034] Tooltip multiple event</div>
                                            <span class="text-muted">Fix behavior when using tooltips and popovers that are...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table-active table-border-double">
                                    <td colspan="3">Closed tickets</td>
                                    <td class="text-right">
                                        <span class="badge bg-danger badge-pill">37</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-cross2 text-danger-400"></i>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold">Mitchell Sitkin</a>
                                                <div class="text-muted font-size-sm"><span class="badge badge-mark border-danger mr-1"></span> Closed</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default">
                                            <div>[#1040] Account for static form controls in form group</div>
                                            <span class="text-muted">Resizes control label's font-size and account for the standard...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-spinner11 text-grey"></i> Reopen issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-cross2 text-danger"></i>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-brown-400 rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">K</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Katleen Jensen</a>
                                                <div class="text-muted font-size-sm"><span class="badge badge-mark border-danger mr-1"></span> Closed</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default">
                                            <div>[#1038] Proper sizing of form control feedback</div>
                                            <span class="text-muted">Feedback icon sizing inside a larger/smaller form-group...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-spinner11 text-grey"></i> Reopen issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /support tickets -->


                    <!-- Latest posts -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Latest posts</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                                        <div class="mr-sm-3 mb-2 mb-sm-0">
                                            <div class="card-img-actions">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
                                                    <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media-body">
                                            <h6 class="media-title"><a href="#">Up unpacked friendly</a></h6>
                                            <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                <li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
                                            </ul>
                                            The him father parish looked has sooner. Attachment frequently terminated son hello...
                                        </div>
                                    </div>

                                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                                        <div class="mr-sm-3 mb-2 mb-sm-0">
                                            <div class="card-img-actions">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
                                                    <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media-body">
                                            <h6 class="media-title"><a href="#">It allowance prevailed</a></h6>
                                            <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                <li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
                                            </ul>
                                            Alteration literature to or an sympathize mr imprudence. Of is ferrars subject enjoyed...
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                                        <div class="mr-sm-3 mb-2 mb-sm-0">
                                            <div class="card-img-actions">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
                                                    <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media-body">
                                            <h6 class="media-title"><a href="#">Case read they must</a></h6>
                                            <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                <li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
                                            </ul>
                                            On it differed repeated wandered required in. Then girl neat why yet knew rose spot...
                                        </div>
                                    </div>

                                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                                        <div class="mr-sm-3 mb-2 mb-sm-0">
                                            <div class="card-img-actions">
                                                <a href="#">
                                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
                                                    <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media-body">
                                            <h6 class="media-title"><a href="#">Too carriage attended</a></h6>
                                            <ul class="list-inline list-inline-dotted text-muted mb-2">
                                                <li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
                                            </ul>
                                            Marianne or husbands if at stronger ye. Considered is as middletons uncommonly...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /latest posts -->

                </div>

                <div class="col-xl-4">

                    <!-- Progress counters -->
                    <div class="row">
                        <div class="col-sm-6">

                            <!-- Available hours -->
                            <div class="card text-center">
                                <div class="card-body">

                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="hours-available-progress"><svg width="76" height="76"><g transform="translate(38,38)"><path class="d3-progress-background" d="M0,38A38,38 0 1,1 0,-38A38,38 0 1,1 0,38M0,36A36,36 0 1,0 0,-36A36,36 0 1,0 0,36Z" style="fill: rgb(240, 98, 146); opacity: 0.2;"></path><path class="d3-progress-foreground" filter="url(#blur)" d="M2.326828918379971e-15,-38A38,38 0 1,1 -34.38342799370878,16.179613079472677L-32.57377388877674,15.328054496342538A36,36 0 1,0 2.204364238465236e-15,-36Z" style="fill: rgb(240, 98, 146); stroke: rgb(240, 98, 146);"></path><path class="d3-progress-front" d="M2.326828918379971e-15,-38A38,38 0 1,1 -34.38342799370878,16.179613079472677L-32.57377388877674,15.328054496342538A36,36 0 1,0 2.204364238465236e-15,-36Z" style="fill: rgb(240, 98, 146); fill-opacity: 1;"></path></g></svg><h2 class="pt-1 mt-2 mb-1">68%</h2><i class="icon-watch text-pink-400 counter-icon" style="top: 22px"></i><div>Hours available</div><div class="font-size-sm text-muted mb-3">64% average</div></div>
                                    <!-- /progress counter -->


                                    <!-- Bars -->
                                    <div id="hours-available-bars"><svg width="144.8625030517578" height="40"><g width="144.8625030517578"><rect class="d3-random-bars" width="4.1729939150712125" x="1.7884259636019484" height="22" y="18" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="7.74984584227511" height="40" y="0" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="13.711265720948271" height="34" y="6" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="19.67268559962143" height="22" y="18" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="25.634105478294593" height="30" y="10" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="31.595525356967755" height="28" y="12" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="37.55694523564091" height="38" y="2" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="43.51836511431407" height="28" y="12" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="49.479784992987234" height="34" y="6" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="55.441204871660396" height="30" y="10" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="61.40262475033356" height="36" y="4" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="67.36404462900673" height="36" y="4" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="73.32546450767988" height="40" y="0" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="79.28688438635305" height="26" y="14" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="85.2483042650262" height="20" y="20" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="91.20972414369938" height="34" y="6" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="97.17114402237253" height="24" y="16" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="103.13256390104569" height="36" y="4" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="109.09398377971885" height="20" y="20" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="115.05540365839201" height="38" y="2" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="121.01682353706518" height="26" y="14" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="126.97824341573833" height="30" y="10" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="132.9396632944115" height="26" y="14" style="fill: rgb(236, 64, 122);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="138.90108317308466" height="36" y="4" style="fill: rgb(236, 64, 122);"></rect></g></svg></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /available hours -->

                        </div>

                        <div class="col-sm-6">

                            <!-- Productivity goal -->
                            <div class="card text-center">
                                <div class="card-body">

                                    <!-- Progress counter -->
                                    <div class="svg-center position-relative" id="goal-progress"><svg width="76" height="76"><g transform="translate(38,38)"><path class="d3-progress-background" d="M0,38A38,38 0 1,1 0,-38A38,38 0 1,1 0,38M0,36A36,36 0 1,0 0,-36A36,36 0 1,0 0,36Z" style="fill: rgb(92, 107, 192); opacity: 0.2;"></path><path class="d3-progress-foreground" filter="url(#blur)" d="M2.326828918379971e-15,-38A38,38 0 1,1 -34.3834279937087,-16.179613079472855L-32.573773888776664,-15.328054496342704A36,36 0 1,0 2.204364238465236e-15,-36Z" style="fill: rgb(92, 107, 192); stroke: rgb(92, 107, 192);"></path><path class="d3-progress-front" d="M2.326828918379971e-15,-38A38,38 0 1,1 -34.3834279937087,-16.179613079472855L-32.573773888776664,-15.328054496342704A36,36 0 1,0 2.204364238465236e-15,-36Z" style="fill: rgb(92, 107, 192); fill-opacity: 1;"></path></g></svg><h2 class="pt-1 mt-2 mb-1">82%</h2><i class="icon-trophy3 text-indigo-400 counter-icon" style="top: 22px"></i><div>Productivity goal</div><div class="font-size-sm text-muted mb-3">87% average</div></div>
                                    <!-- /progress counter -->

                                    <!-- Bars -->
                                    <div id="goal-bars"><svg width="144.8625030517578" height="40"><g width="144.8625030517578"><rect class="d3-random-bars" width="4.1729939150712125" x="1.7884259636019484" height="34" y="6" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="7.74984584227511" height="34" y="6" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="13.711265720948271" height="34" y="6" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="19.67268559962143" height="20" y="20" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="25.634105478294593" height="36" y="4" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="31.595525356967755" height="40" y="0" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="37.55694523564091" height="40" y="0" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="43.51836511431407" height="36" y="4" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="49.479784992987234" height="28" y="12" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="55.441204871660396" height="38" y="2" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="61.40262475033356" height="38" y="2" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="67.36404462900673" height="30" y="10" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="73.32546450767988" height="22" y="18" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="79.28688438635305" height="38" y="2" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="85.2483042650262" height="36" y="4" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="91.20972414369938" height="34" y="6" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="97.17114402237253" height="24" y="16" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="103.13256390104569" height="22" y="18" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="109.09398377971885" height="24" y="16" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="115.05540365839201" height="38" y="2" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="121.01682353706518" height="28" y="12" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="126.97824341573833" height="32" y="8" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="132.9396632944115" height="28" y="12" style="fill: rgb(92, 107, 192);"></rect><rect class="d3-random-bars" width="4.1729939150712125" x="138.90108317308466" height="40" y="0" style="fill: rgb(92, 107, 192);"></rect></g></svg></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /productivity goal -->

                        </div>
                    </div>
                    <!-- /progress counters -->


                    <!-- Daily sales -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Daily sales stats</h6>
                            <div class="header-elements">
                                <span class="font-weight-bold text-danger-600 ml-2">$4,378</span>
                                <div class="list-icons ml-3">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                            <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                            <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="chart" id="sales-heatmap"></div>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th class="w-100">Application</th>
                                    <th>Time</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-primary-400 rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">S</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Sigma application</a>
                                                <div class="text-muted font-size-sm"><i class="icon-checkmark3 font-size-sm mr-1"></i> New order</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">06:28 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">$49.90</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">A</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Alpha application</a>
                                                <div class="text-muted font-size-sm"><i class="icon-spinner11 font-size-sm mr-1"></i> Renewal</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">04:52 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">$90.50</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-indigo-400 rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">D</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Delta application</a>
                                                <div class="text-muted font-size-sm"><i class="icon-lifebuoy font-size-sm mr-1"></i> Support</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">01:26 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">$60.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">O</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Omega application</a>
                                                <div class="text-muted font-size-sm"><i class="icon-lifebuoy font-size-sm mr-1"></i> Support</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">11:46 am</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">$55.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3">
                                                <a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm legitRipple">
                                                    <span class="letter-icon">A</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-default font-weight-semibold letter-icon-title">Alpha application</a>
                                                <div class="text-muted font-size-sm"><i class="icon-spinner11 font-size-sm mr-2"></i> Renewal</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-size-sm">10:29 am</span>
                                    </td>
                                    <td>
                                        <h6 class="font-weight-semibold mb-0">$90.50</h6>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /daily sales -->


                    <!-- My messages -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">My messages</h6>
                            <div class="header-elements">
                                <span><i class="icon-history text-warning mr-2"></i> Jul 7, 10:30</span>
                                <span class="badge bg-success align-self-start ml-3">Online</span>
                            </div>
                        </div>

                        <!-- Numbers -->
                        <div class="card-body py-0">
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <h5 class="font-weight-semibold mb-0">2,345</h5>
                                        <span class="text-muted font-size-sm">this week</span>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="mb-3">
                                        <h5 class="font-weight-semibold mb-0">3,568</h5>
                                        <span class="text-muted font-size-sm">this month</span>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="mb-3">
                                        <h5 class="font-weight-semibold mb-0">32,693</h5>
                                        <span class="text-muted font-size-sm">all messages</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /numbers -->


                        <!-- Area chart -->
                        <div id="messages-stats"><svg width="389.7250061035156" height="40"><g transform="translate(0,0)"></g></svg></div>
                        <!-- /area chart -->


                        <!-- Tabs -->
                        <ul class="nav nav-tabs nav-tabs-solid nav-justified bg-indigo-400 border-x-0 border-bottom-0 border-top-indigo-300 mb-0">
                            <li class="nav-item">
                                <a href="#messages-tue" class="nav-link font-size-sm text-uppercase active" data-toggle="tab">
                                    Tuesday
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#messages-mon" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
                                    Monday
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#messages-fri" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
                                    Friday
                                </a>
                            </li>
                        </ul>
                        <!-- /tabs -->


                        <!-- Tabs content -->
                        <div class="tab-content card-body">
                            <div class="tab-pane active fade show" id="messages-tue">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="mr-3 position-relative">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                            <span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">8</span>
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">James Alexander</a>
                                                <span class="font-size-sm text-muted">14:58</span>
                                            </div>

                                            The constitutionally inventoried precariously...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3 position-relative">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                            <span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">6</span>
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Margo Baker</a>
                                                <span class="font-size-sm text-muted">12:16</span>
                                            </div>

                                            Pinched a well more moral chose goodness...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Jeremy Victorino</a>
                                                <span class="font-size-sm text-muted">09:48</span>
                                            </div>

                                            Pert thickly mischievous clung frowned well...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Beatrix Diaz</a>
                                                <span class="font-size-sm text-muted">05:54</span>
                                            </div>

                                            Nightingale taped hello bucolic fussily cardinal...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Richard Vango</a>
                                                <span class="font-size-sm text-muted">01:43</span>
                                            </div>

                                            Amidst roadrunner distantly pompously where...
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="messages-mon">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Isak Temes</a>
                                                <span class="font-size-sm text-muted">Tue, 19:58</span>
                                            </div>

                                            Reasonable palpably rankly expressly grimy...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Vittorio Cosgrove</a>
                                                <span class="font-size-sm text-muted">Tue, 16:35</span>
                                            </div>

                                            Arguably therefore more unexplainable fumed...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Hilary Talaugon</a>
                                                <span class="font-size-sm text-muted">Tue, 12:16</span>
                                            </div>

                                            Nicely unlike porpoise a kookaburra past more...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Bobbie Seber</a>
                                                <span class="font-size-sm text-muted">Tue, 09:20</span>
                                            </div>

                                            Before visual vigilantly fortuitous tortoise...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Walther Laws</a>
                                                <span class="font-size-sm text-muted">Tue, 03:29</span>
                                            </div>

                                            Far affecting more leered unerringly dishonest...
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="messages-fri">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Owen Stretch</a>
                                                <span class="font-size-sm text-muted">Mon, 18:12</span>
                                            </div>

                                            Tardy rattlesnake seal raptly earthworm...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Jenilee Mcnair</a>
                                                <span class="font-size-sm text-muted">Mon, 14:03</span>
                                            </div>

                                            Since hello dear pushed amid darn trite...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Alaster Jain</a>
                                                <span class="font-size-sm text-muted">Mon, 13:59</span>
                                            </div>

                                            Dachshund cardinal dear next jeepers well...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Sigfrid Thisted</a>
                                                <span class="font-size-sm text-muted">Mon, 09:26</span>
                                            </div>

                                            Lighted wolf yikes less lemur crud grunted...
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="#">Sherilyn Mckee</a>
                                                <span class="font-size-sm text-muted">Mon, 06:38</span>
                                            </div>

                                            Less unicorn a however careless husky...
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /tabs content -->

                    </div>
                    <!-- /my messages -->


                    <!-- Daily financials -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Daily financials</h6>
                            <div class="header-elements">
                                <div class="form-check form-check-inline form-check-right form-check-switchery form-check-switchery-sm">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-input-switchery" id="realtime" checked="" data-fouc="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(100, 189, 99); border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 10px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 18px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                        Realtime
                                    </label>
                                </div>
                                <span class="badge bg-danger-400 badge-pill">+86</span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="chart mb-3" id="bullets"></div>

                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon legitRipple"><i class="icon-statistics"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Stats for July, 6: <span class="font-weight-semibold">1938</span> orders, <span class="font-weight-semibold text-danger">$4220</span> revenue
                                        <div class="text-muted">2 hours ago</div>
                                    </div>

                                    <div class="ml-3 align-self-center">
                                        <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon legitRipple"><i class="icon-checkmark3"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Invoices <a href="#">#4732</a> and <a href="#">#4734</a> have been paid
                                        <div class="text-muted">Dec 18, 18:36</div>
                                    </div>

                                    <div class="ml-3 align-self-center">
                                        <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon legitRipple"><i class="icon-alignment-unalign"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Affiliate commission for June has been paid
                                        <div class="text-muted">36 minutes ago</div>
                                    </div>

                                    <div class="ml-3 align-self-center">
                                        <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon legitRipple"><i class="icon-spinner11"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Order <a href="#">#37745</a> from July, 1st has been refunded
                                        <div class="text-muted">4 minutes ago</div>
                                    </div>

                                    <div class="ml-3 align-self-center">
                                        <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon legitRipple"><i class="icon-redo2"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Invoice <a href="#">#4769</a> has been sent to <a href="#">Robert Smith</a>
                                        <div class="text-muted">Dec 12, 05:46</div>
                                    </div>

                                    <div class="ml-3 align-self-center">
                                        <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /daily financials -->

                </div>
            </div>
            <!-- /dashboard content -->

        </div>
        <!-- /content area -->

    </div>
@endsection
