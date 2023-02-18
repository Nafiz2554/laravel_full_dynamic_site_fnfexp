@extends('admin.admin_master')
@section('admin_content')

    <div class="row-fluid">

        <div class="widget blue span5" onTablet="span6" onDesktop="span5">

            <h2><span class="glyphicons globe"><i></i></span> Demographics</h2>

            <hr>

            <div class="content">

                <div class="verticalChart">

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>37%</span>
                            </div>

                        </div>

                        <div class="title">US</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>16%</span>
                            </div>

                        </div>

                        <div class="title">PL</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>12%</span>
                            </div>

                        </div>

                        <div class="title">GB</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>9%</span>
                            </div>

                        </div>

                        <div class="title">DE</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>7%</span>
                            </div>

                        </div>

                        <div class="title">NL</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>6%</span>
                            </div>

                        </div>

                        <div class="title">CA</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>5%</span>
                            </div>

                        </div>

                        <div class="title">FI</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>4%</span>
                            </div>

                        </div>

                        <div class="title">RU</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>3%</span>
                            </div>

                        </div>

                        <div class="title">AU</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>1%</span>
                            </div>

                        </div>

                        <div class="title">N/A</div>

                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>

        </div>


        <div class="widget yellow span4 noMargin" onTablet="span12" onDesktop="span4">
            <h2><span class="glyphicons fire"><i></i></span> Server Load</h2>
            <hr>
            <div class="content">
                <div id="serverLoad2" style="height:224px;"></div>
            </div>
        </div>

    </div>


    </div>
    <!--/.fluid-container-->


@endsection
