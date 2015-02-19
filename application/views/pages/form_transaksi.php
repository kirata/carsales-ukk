<section class="main-content">

                <header class="header navbar bg-default">
                    <ul class="nav navbar-nav nav-tabs">
                        <li class="active">
                            <a href="#elements" data-toggle="tab">Form Elements</a>
                        </li>
                        <li>
                            <a href="#validation" data-toggle="tab">Validation</a>
                        </li>
                        <li>
                            <a href="#advanced" data-toggle="tab">Input Masks</a>
                        </li>
                    </ul>
                </header>

                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content ">
                                <section class="tab-pane active" id="elements">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <section class="panel">
                                                <header class="panel-heading">Basic Form Elements</header>
                                                <div class="panel-body">
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">Check me out
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-lg-6">
                                            <section class="panel">
                                                <header class="panel-heading">Horizontal Form</header>
                                                <div class="panel-body">

                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                                <p class="help-block no-margin">Example block-level help text here.</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox">Remember me
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <button type="submit" class="btn btn-default">Sign in</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <section class="panel">
                                                <header class="panel-heading">Inline Form</header>
                                                <div class="panel-body">
                                                    <form class="form-inline" role="form">
                                                        <div class="form-group">
                                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">Remember me
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-default">Sign in</button>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <section class="panel">
                                                <header class="panel-heading">Form Controls</header>
                                                <div class="panel-body">
                                                    <form class="form-horizontal bordered-group" role="form">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Default</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Help text</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control">
                                                                <p class="help-block">Example block-level help text here.</p>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Rounded</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control input-rounded">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Placeholder</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="Placeholder">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Focused input</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" id="focusedInput" type="text" value="This is focused">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Disabled input</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" placeholder="Disabled input here" disabled="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">File input</label>
                                                            <div class="col-sm-10">
                                                                <input type="file">
                                                                <p class="help-block">Example block-level help text here.</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Textarea</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Static control</label>
                                                            <div class="col-sm-10">
                                                                <p class="form-control-static">email@example.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                                            </div>
                                                        </div>



                                                        <div class="form-group has-success has-feedback">
                                                            <label class="control-label col-sm-2" for="inputSuccess2">Input with success</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputSuccess2">
                                                                <span class="fa fa-check form-control-feedback"></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group has-warning has-feedback">
                                                            <label class="control-label col-sm-2" for="inputWarning2">Input with warning</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputWarning2">
                                                                <span class="fa fa-exclamation-triangle form-control-feedback"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group has-error has-feedback">
                                                            <label class="control-label col-sm-2" for="inputError2">Input with error</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputError2">
                                                                <span class="fa fa-times form-control-feedback"></span>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Checkboxes</label>
                                                            <div class="col-sm-10">



                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox">Unchecked</label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" checked="">Checked</label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" disabled="">Disabled Unchecked</label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" disabled="" checked="">Disabled Checked</label>
                                                                </div>
                                                            </div>


                                                        </div>


                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Radio boxes</label>

                                                            <div class="col-sm-10">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio">Unchecked</label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" disabled="">Disabled radio</label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" disabled="" checked="">Disabled selected</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-2 control-label">Custom checkbox</label>
                                                            <div class="col-sm-10">



                                                                <label class="checkbox checkbox-custom">
                                                                    <input type="checkbox" checked="checked">
                                                                    <i class="checkbox"></i>Custom: Checked Enabled</label>
                                                                <label class="checkbox checkbox-custom">
                                                                    <input type="checkbox" id="chk1">
                                                                    <i class="checkbox"></i>Custom: Unchecked Enabled</label>
                                                                <label class="checkbox checkbox-custom">
                                                                    <input type="checkbox" checked="checked" disabled="disabled">
                                                                    <i class="checkbox"></i>Custom: Checked Disabled</label>
                                                                <label class="checkbox checkbox-custom">
                                                                    <input type="checkbox" disabled="disabled">
                                                                    <i class="checkbox"></i>Custom: Unchecked Disabled</label>

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-2 control-label">Switch</label>
                                                            <div class="col-sm-10">

                                                                <input type="checkbox" class="js-switch-blue" />
                                                                <input type="checkbox" class="js-switch-pink" checked />
                                                                <input type="checkbox" class="js-switch-green" checked />
                                                                <input type="checkbox" class="js-switch-red" />

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-2 control-label">Custom radio</label>
                                                            <div class="col-sm-10">

                                                                <label class="radio radio-custom">
                                                                    <input type="radio" name="radio1a" checked="checked">
                                                                    <i class="radio"></i>Custom: Checked Enabled</label>
                                                                <label class="radio radio-custom">
                                                                    <input type="radio" name="radio1a" id="radio1">
                                                                    <i class="radio"></i>Custom: Unchecked Enabled</label>
                                                                <label class="radio radio-custom">
                                                                    <input type="radio" name="radio1b" checked="checked" disabled="disabled">
                                                                    <i class="radio"></i>Custom: Checked Disabled</label>
                                                                <label class="radio radio-custom">
                                                                    <input type="radio" name="radio1b" disabled="disabled">
                                                                    <i class="radio"></i>Custom: Unchecked Disabled</label>
                                                                <label class="radio radio-custom highlight">
                                                                    <input type="radio" name="radio1c" checked="checked">
                                                                    <i class="radio"></i>Custom: Checked Enabled w/Highlight</label>
                                                                <label class="radio radio-custom highlight">
                                                                    <input type="radio" name="radio1c">
                                                                    <i class="radio"></i>Custom: Checked Disabled w/Highlight</label>

                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Input Select</label>

                                                            <div class="col-sm-10">


                                                                <select class="form-control selectpicker" data-style="btn-primary">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>


                                                                <h6>Multiple select</h6>

                                                                <select multiple="" class="form-control">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>


                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Height Sizing</label>
                                                            <div class="col-sm-10">

                                                                <input class="form-control mg-b-md input-lg" type="text" placeholder=".input-lg">

                                                                <input class="form-control mg-b-md" type="text" placeholder="Default input">

                                                                <input class="form-control mg-b-md input-sm" type="text" placeholder=".input-sm">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Select Sizing</label>

                                                            <div class="col-sm-10">
                                                                <div class="mg-b-md">
                                                                    <select class="form-control input-lg"></select>
                                                                </div>

                                                                <div class="mg-b-md">
                                                                    <select class="form-control"></select>
                                                                </div>
                                                                <div class="mg-b-md">
                                                                    <select class="form-control input-sm"></select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Column Sizing</label>

                                                            <div class="col-sm-10">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <input type="text" class="form-control" placeholder=".col-xs-2">
                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                        <input type="text" class="form-control" placeholder=".col-xs-3">
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        <input type="text" class="form-control" placeholder=".col-xs-4">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Input Groups</label>

                                                            <div class="col-sm-10">

                                                                <div class="input-group mg-b-md">
                                                                    <span class="input-group-addon">@</span>
                                                                    <input type="text" class="form-control" placeholder="Username">
                                                                </div>

                                                                <div class="input-group mg-b-md">
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-addon">.00</span>
                                                                </div>

                                                                <div class="input-group mg-b-md">
                                                                    <span class="input-group-addon">$</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-addon">.00</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Input Groups</label>

                                                            <div class="col-sm-10">
                                                                <div class="input-group input-group-lg mg-b-md">
                                                                    <span class="input-group-addon">@</span>
                                                                    <input type="text" class="form-control" placeholder="Username">
                                                                </div>

                                                                <div class="input-group mg-b-md">
                                                                    <span class="input-group-addon">@</span>
                                                                    <input type="text" class="form-control" placeholder="Username">
                                                                </div>

                                                                <div class="input-group input-group-sm mg-b-md">
                                                                    <span class="input-group-addon">@</span>
                                                                    <input type="text" class="form-control" placeholder="Username">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Checkboxes and radio addons</label>
                                                            <div class="col-sm-10">

                                                                <div class="input-group mg-b-md">
                                                                    <span class="input-group-addon">
                                                                        <input type="checkbox">
                                                                    </span>
                                                                    <input type="text" class="form-control">
                                                                </div>

                                                                <div class="input-group mg-b-md">
                                                                    <span class="input-group-addon">
                                                                        <input type="radio">
                                                                    </span>
                                                                    <input type="text" class="form-control">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Button addons</label>
                                                            <div class="col-sm-10">
                                                                <div class="input-group mg-b-md">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-white" type="button">Go!</button>
                                                                    </span>
                                                                    <input type="text" class="form-control">
                                                                </div>

                                                                <div class="input-group mg-b-md">
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-white" type="button">Go!</button>
                                                                    </span>
                                                                </div>

                                                                <div class="input-group mg-b-md">
                                                                    <div class="input-group-btn">
                                                                        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action
                                                                            <span class="caret"></span>
                                                                        </button>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a href="javascript:;">Action</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">Another action</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">Something else here</a>
                                                                            </li>
                                                                            <li class="divider"></li>
                                                                            <li>
                                                                                <a href="javascript:;">Separated link</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- /btn-group -->
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <!-- /input-group -->

                                                                <div class="input-group mg-b-md">
                                                                    <input type="text" class="form-control">
                                                                    <div class="input-group-btn">
                                                                        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action
                                                                            <span class="caret"></span>
                                                                        </button>
                                                                        <ul class="dropdown-menu pull-right">
                                                                            <li>
                                                                                <a href="javascript:;">Action</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">Another action</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">Something else here</a>
                                                                            </li>
                                                                            <li class="divider"></li>
                                                                            <li>
                                                                                <a href="javascript:;">Separated link</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- /btn-group -->
                                                                </div>
                                                                <!-- /input-group -->

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Segmented buttons</label>
                                                            <div class="col-sm-10">

                                                                <div class="input-group mg-b-md">
                                                                    <div class="input-group-btn">
                                                                        <button type="button" class="btn btn-white" tabindex="-1">Action</button>
                                                                        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                                                            <span class="caret"></span>
                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                        </button>
                                                                        <ul class="dropdown-menu" role="menu">
                                                                            <li>
                                                                                <a href="javascript:;">Action</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">Another action</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">Something else here</a>
                                                                            </li>
                                                                            <li class="divider"></li>
                                                                            <li>
                                                                                <a href="javascript:;">Separated link</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <input type="text" class="form-control">
                                                                </div>

                                                                <div class="input-group mg-b-md">
                                                                    <input type="text" class="form-control">
                                                                    <div class="input-group-btn">
                                                                        <button type="button" class="btn btn-white" tabindex="-1">Action</button>
                                                                        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                                                            <span class="caret"></span>
                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                        </button>
                                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                                            <li>
                                                                                <a href="javascript:;">Action</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">Another action</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">Something else here</a>
                                                                            </li>
                                                                            <li class="divider"></li>
                                                                            <li>
                                                                                <a href="javascript:;">Separated link</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Slider</label>
                                                            <div class="sliders col-sm-10">
                                                                <div class="slider-default">
                                                                    <input type="text" data-slider-value="1" value="1">
                                                                </div>

                                                                <div class="slider-primary">
                                                                    <input type="text" data-slider-value="2" value="2">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Datepicker</label>
                                                            <div class="col-sm-3">

                                                                <div class="input-group mg-b-md input-append date datepicker" data-date="12-02-2013" data-date-format="dd-mm-yyyy">
                                                                    <input type="text" class="form-control" value="12-02-2013">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-white add-on" type="button">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Timepicker</label>
                                                            <div class="col-sm-10">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control timepicker">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-color current-time" type="button">Current time</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Spinner</label>
                                                            <div class="col-sm-10">

                                                                <div id="ex-spinner" class="spinner input-group">
                                                                    <input type="text" class="form-control spinner-input">

                                                                    <div class="spinner-buttons input-group-btn  btn-group btn-group-vertical">
                                                                        <button type="button" class="btn btn-default spinner-up">
                                                                            <i class="fa fa-angle-up"></i>
                                                                        </button>
                                                                        <button type="button" class="btn btn-default spinner-down">
                                                                            <i class="fa fa-angle-down"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Pillbox</label>
                                                            <div class="col-sm-10">

                                                                <div id="pillbox" class="pillbox">
                                                                    <ul>
                                                                        <li class="bg-default" data-value="foo">Item 1</li>
                                                                        <li class="bg-success">Item 2</li>
                                                                        <li class="bg-warning">Item 3</li>
                                                                        <li class="bg-danger">Item 4</li>
                                                                        <li class="bg-info">Item 5</li>
                                                                        <li class="bg-success">Item 6</li>
                                                                        <li class="bg-default">Item 7</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">WYSIWYG</label>
                                                            <div class="col-sm-10">
                                                                <div id="alerts"></div>
                                                                <div class="btn-toolbar mg-b" data-role="editor-toolbar" data-target="#editor">
                                                                    <div class="btn-group">
                                                                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font">
                                                                            <i class="fa fa-font"></i>
                                                                            <b class="caret"></b>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                        </ul>
                                                                    </div>
                                                                    <div class="btn-group">
                                                                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Size">
                                                                            <i class="fa fa-text-height"></i>&nbsp;
                                                                            <b class="caret"></b>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li>
                                                                                <a data-edit="fontSize 5">
                                                                                    <span class="h2">Huge</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-edit="fontSize 3">
                                                                                    <span class="h4">Normal</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-edit="fontSize 1">
                                                                                    <span class="h6">Small</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="btn-group">
                                                                        <a class="btn btn-default btn-sm" data-edit="bold" title="Bold (Ctrl/Cmd+B)">
                                                                            <i class="fa fa-bold"></i>
                                                                        </a>
                                                                        <a class="btn btn-default btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)">
                                                                            <i class="fa fa-italic"></i>
                                                                        </a>
                                                                        <a class="btn btn-default btn-sm" data-edit="strikethrough" title="Strikethrough">
                                                                            <i class="fa fa-strikethrough"></i>
                                                                        </a>
                                                                        <a class="btn btn-default btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)">
                                                                            <i class="fa fa-underline"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="btn-group">
                                                                        <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="Bullet list">
                                                                            <i class="fa fa-list-ul"></i>
                                                                        </a>
                                                                        <a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="Number list">
                                                                            <i class="fa fa-list-ol"></i>
                                                                        </a>
                                                                        <a class="btn btn-default btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)">
                                                                            <i class="fa fa-dedent"></i>
                                                                        </a>
                                                                        <a class="btn btn-default btn-sm" data-edit="indent" title="Indent (Tab)">
                                                                            <i class="fa fa-indent"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="btn-group">
                                                                        <a class="btn btn-default btn-sm" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)">
                                                                            <i class="fa fa-align-left"></i>
                                                                        </a>
                                                                        <a class="btn btn-default btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)">
                                                                            <i class="fa fa-align-center"></i>
                                                                        </a>
                                                                        <a class="btn btn-default btn-sm" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)">
                                                                            <i class="fa fa-align-right"></i>
                                                                        </a>
                                                                        <a class="btn btn-default btn-sm" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)">
                                                                            <i class="fa fa-align-justify"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="btn-group">
                                                                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Hyperlink">
                                                                            <i class="fa fa-link"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu input-append">
                                                                            <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                                                            <button class="btn btn-default btn-sm" type="button">Add</button>
                                                                        </div>
                                                                        <a class="btn btn-default btn-sm" data-edit="unlink" title="Remove Hyperlink">
                                                                            <i class="fa fa-cut"></i>
                                                                        </a>

                                                                    </div>

                                                                    <div class="btn-group pull-left">
                                                                        <a class="btn btn-default btn-sm" title="Insert picture (or just drag & drop)" id="pictureBtn">
                                                                            <i class="fa fa-picture-o"></i>
                                                                        </a>
                                                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                                                    </div>
                                                                    <div class="btn-group">
                                                                        <a class="btn btn-default btn-sm" data-edit="undo" title="Undo (Ctrl/Cmd+Z)">
                                                                            <i class="fa fa-undo"></i>
                                                                        </a>
                                                                        <a class="btn btn-default btn-sm" data-edit="redo" title="Redo (Ctrl/Cmd+Y)">
                                                                            <i class="fa fa-repeat"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="editor" class="form-control" contenteditable="true" style="overflow:scroll; height:100px">
                                                                    Go ahead&hellip;
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">DropZone File Upload</div>
                                                <div class="panel-body no-padding">
                                                    <form action="http://cameo.nyasha.me/file-upload" class="dropzone col-sm-12 ">
                                                        <div class="fallback">
                                                            <input name="file" type="file" multiple />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="panel panel-color">
                                                <div class="panel-body no-padding">
                                                    <div id="wizard" class="wizard">
                                                        <ul class="steps">
                                                            <li data-target="#step1" class="active">
                                                                <span class="badge badge-info">1</span>Step 1
                                                            </li>
                                                            <li data-target="#step2">
                                                                <span class="badge">2</span>Step 2
                                                            </li>
                                                            <li data-target="#step3">
                                                                <span class="badge">3</span>Step 3
                                                            </li>
                                                        </ul>
                                                        <div class="actions btn-group">
                                                            <button class="btn btn-white btn-sm btn-prev">
                                                                <i class="fa fa-angle-left"></i>
                                                            </button>
                                                            <button class="btn btn-white btn-sm btn-next">
                                                                <i class="fa fa-angle-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="step-content">
                                                        <div class="step-pane active" id="step1">This is step 1</div>
                                                        <div class="step-pane" id="step2">This is step 2</div>
                                                        <div class="step-pane" id="step3">This is step 3</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>

                                <section class="tab-pane" id="validation">
                                    <form role="form" class="form-horizontal parsley-form" data-parsley-validate>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">First name</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="firstname" data-parsley-required="true" data-parsley-trigger="change" placeholder="First Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Last name</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="lastname" data-parsley-required="true" data-parsley-trigger="change" placeholder="Last Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Country</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="country" data-parsley-required="true" data-parsley-trigger="change" placeholder="Country">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">State/Province</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="state" data-parsley-required="true" data-parsley-trigger="change" placeholder="State/Province">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">City</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="city" data-parsley-required="true" data-parsley-trigger="change" placeholder="City">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Zipcode</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="zipcode" data-parsley-type="alphanum" data-parsley-required="true" data-parsley-trigger="change" placeholder="P6B6L4">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Home phone</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="phone" data-parsley-type="digits" data-rangelength="[11,20]" data-parsley-required="true" data-parsley-trigger="change" placeholder="18005551234">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Mobile phone</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="mobilephone" data-parsley-type="digits" data-rangelength="[11,20]" data-parsley-required="true" data-parsley-trigger="change" placeholder="18005551234">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="email" data-parsley-type="email" data-parsley-required="true" data-parsley-trigger="change" placeholder="hello@nyasha.me">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Website</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="website" data-parsley-type="url" data-parsley-required="true" data-parsley-trigger="change" placeholder="http://nyasha.me/">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"></label>
                                            <div class="col-sm-4">
                                                <button class="btn btn-primary btn-parsley">Submit</button>
                                            </div>
                                        </div>



                                    </form>
                                </section>
                                <section class="tab-pane" id="advanced">


                                    <form role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="date" class="col-sm-3 control-label">Date</label>
                                            <div class="col-sm-4">
                                                <input id="date" value="1231" type="text" class="form-control" placeholder="99/99/9999" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone" class="col-sm-3 control-label">Phone</label>
                                            <div class="col-sm-4">
                                                <input id="phone" type="text" class="form-control" placeholder="(999) 999-9999" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="phoneExt" class="col-sm-3 control-label">Phone + Ext</label>
                                            <div class="col-sm-4">
                                                <input id="phoneExt" type="text" class="form-control" placeholder="(999) 999-9999? x99999" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="iphone" class="col-sm-3 control-label">Int'l Phone</label>
                                            <div class="col-sm-4">
                                                <input id="iphone" type="text" class="form-control" placeholder="+33 999 999 999" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tin" class="col-sm-3 control-label">Tax ID</label>
                                            <div class="col-sm-4">
                                                <input id="tin" type="text" class="form-control" placeholder="99-9999999" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="ssn" class="col-sm-3 control-label">SSN</label>
                                            <div class="col-sm-4">
                                                <input id="ssn" type="text" class="form-control" placeholder="999-99-9999" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="product" class="col-sm-3 control-label">Product Key</label>
                                            <div class="col-sm-4">
                                                <input id="product" type="text" class="form-control" placeholder="a*-999-a999" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="eyescript" class="col-sm-3 control-label">Eye Script</label>
                                            <div class="col-sm-4">
                                                <input id="eyescript" type="text" class="form-control" placeholder="~9.99 ~9.99 999" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="po" class="col-sm-3 control-label">Purchase Order</label>
                                            <div class="col-sm-4">
                                                <input id="po" type="text" class="form-control" placeholder="aaa-999-***" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="pct" class="col-sm-3 control-label">Percent</label>
                                            <div class="col-sm-4">
                                                <input id="pct" type="text" class="form-control" placeholder="99%" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="phoneAutoclearFalse" class="col-sm-3 control-label">Phone (autoclear=false)</label>
                                            <div class="col-sm-4">
                                                <input id="phoneAutoclearFalse" type="text" class="form-control" placeholder="(999) 999-9999" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="phoneExtAutoclearFalse" class="col-sm-3 control-label">Phone + Ext (autoclear=false)</label>
                                            <div class="col-sm-4">
                                                <input id="phoneExtAutoclearFalse" type="text" class="form-control" placeholder="(999) 999-9999? x99999" />
                                            </div>
                                        </div>

                                    </form>

                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->

            </section>