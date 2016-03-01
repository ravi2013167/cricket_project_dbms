<?php include 'head.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Buttons
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">Buttons</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-edit"></i>

              <h3 class="box-title">Buttons</h3>
            </div>
            <div class="box-body pad table-responsive">
              <p>Various types of buttons. Using the base class <code>.btn</code></p>
              <table class="table table-bordered text-center">
                <tr>
                  <th>Normal</th>
                  <th>Large <code>.btn-lg</code></th>
                  <th>Small <code>.btn-sm</code></th>
                  <th>X-Small <code>.btn-xs</code></th>
                  <th>Flat <code>.btn-flat</code></th>
                  <th>Disabled <code>.disabled</code></th>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-block btn-default">Default</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-default btn-lg">Default</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-default btn-sm">Default</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-default btn-xs">Default</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-default btn-flat">Default</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-default disabled">Default</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-block btn-primary">Primary</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-primary btn-sm">Primary</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-primary btn-xs">Primary</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-primary btn-flat">Primary</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-primary disabled">Primary</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-block btn-success">Success</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-success btn-lg">Success</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-success btn-sm">Success</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-success btn-xs">Success</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-success btn-flat">Success</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-success disabled">Success</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-block btn-info">Info</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-info btn-lg">Info</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-info btn-sm">Info</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-info btn-xs">Info</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-info btn-flat">Info</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-info disabled">Info</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-block btn-danger">Danger</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-danger btn-lg">Danger</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-danger btn-sm">Danger</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-danger btn-xs">Danger</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-danger btn-flat">Danger</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-danger disabled">Danger</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-block btn-warning">Warning</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-warning btn-lg">Warning</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-warning btn-sm">Warning</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-warning btn-xs">Warning</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-warning btn-flat">Warning</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-warning disabled">Warning</button>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- ./row -->
      <div class="row">
        <div class="col-md-6">
          <!-- Block buttons -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Block Buttons</h3>
            </div>
            <div class="box-body">
              <button type="button" class="btn btn-default btn-block">.btn-block</button>
              <button type="button" class="btn btn-default btn-block btn-flat">.btn-block .btn-flat</button>
              <button type="button" class="btn btn-default btn-block btn-sm">.btn-block .btn-sm</button>
            </div>
          </div>
          <!-- /.box -->

          <!-- Horizontal grouping -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Horizontal Button Group</h3>
            </div>
            <div class="box-body table-responsive pad">
              <p>
                Horizontal button groups are easy to create with bootstrap. Just add your buttons
                inside <code>&lt;div class="btn-group"&gt;&lt;/div&gt;</code>
              </p>

              <table class="table table-bordered">
                <tr>
                  <th>Button</th>
                  <th>Icons</th>
                  <th>Flat</th>
                  <th>Dropdown</th>
                </tr>
                <!-- Default -->
                <tr>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">Left</button>
                      <button type="button" class="btn btn-default">Middle</button>
                      <button type="button" class="btn btn-default">Right</button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-default"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-default"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">1</button>
                      <button type="button" class="btn btn-default">2</button>

                      <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- ./default -->
                <!-- Info -->
                <tr>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info">Left</button>
                      <button type="button" class="btn btn-info">Middle</button>
                      <button type="button" class="btn btn-info">Right</button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-info"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-info"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info">1</button>
                      <button type="button" class="btn btn-info">2</button>

                      <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /. info -->
                <!-- /.danger -->
                <tr>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger">Left</button>
                      <button type="button" class="btn btn-danger">Middle</button>
                      <button type="button" class="btn btn-danger">Right</button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger">1</button>
                      <button type="button" class="btn btn-danger">2</button>

                      <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /.danger -->
                <!-- warning -->
                <tr>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning">Left</button>
                      <button type="button" class="btn btn-warning">Middle</button>
                      <button type="button" class="btn btn-warning">Right</button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-warning"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-warning"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning">1</button>
                      <button type="button" class="btn btn-warning">2</button>

                      <div class="btn-group">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /.warning -->
                <!-- success -->
                <tr>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-success">Left</button>
                      <button type="button" class="btn btn-success">Middle</button>
                      <button type="button" class="btn btn-success">Right</button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-success"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-success"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-success"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-success">1</button>
                      <button type="button" class="btn btn-success">2</button>

                      <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /.success -->
              </table>
            </div>
          </div>
          <!-- /.box -->

          <!-- split buttons box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Split buttons</h3>
            </div>
            <div class="box-body">
              <!-- Split button -->
              <p>Normal split buttons:</p>

              <div class="margin">
                <div class="btn-group">
                  <button type="button" class="btn btn-default">Action</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-info">Action</button>
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-danger">Action</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-success">Action</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-warning">Action</button>
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
              <!-- flat split buttons -->
              <p>Flat split buttons:</p>

              <div class="margin">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-flat">Action</button>
                  <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-info btn-flat">Action</button>
                  <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-danger btn-flat">Action</button>
                  <button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-flat">Action</button>
                  <button type="button" class="btn btn-success btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-warning btn-flat">Action</button>
                  <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- end split buttons box -->

        </div>
        <!-- /.col -->
        <div class="col-md-6">
          
          <!-- Vertical grouping -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Vertical Button Group</h3>
            </div>
            <div class="box-body table-responsive pad">

              <p>
                Vertical button groups are easy to create with bootstrap. Just add your buttons
                inside <code>&lt;div class="btn-group-vertical"&gt;&lt;/div&gt;</code>
              </p>

              <table class="table table-bordered">
                <tr>
                  <th>Button</th>
                  <th>Icons</th>
                  <th>Flat</th>
                  <th>Dropdown</th>
                </tr>
                <!-- Default -->
                <tr>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default">Top</button>
                      <button type="button" class="btn btn-default">Middle</button>
                      <button type="button" class="btn btn-default">Bottom</button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-default"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-default"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-default btn-flat"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default">1</button>
                      <button type="button" class="btn btn-default">2</button>

                      <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- ./default -->
                <!-- Info -->
                <tr>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-info">Top</button>
                      <button type="button" class="btn btn-info">Middle</button>
                      <button type="button" class="btn btn-info">Bottom</button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-info"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-info"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-info">1</button>
                      <button type="button" class="btn btn-info">2</button>

                      <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /. info -->
                <!-- /.danger -->
                <tr>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-danger">Top</button>
                      <button type="button" class="btn btn-danger">Middle</button>
                      <button type="button" class="btn btn-danger">Bottom</button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-danger"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-danger">1</button>
                      <button type="button" class="btn btn-danger">2</button>

                      <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /.danger -->
                <!-- warning -->
                <tr>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-warning">Top</button>
                      <button type="button" class="btn btn-warning">Middle</button>
                      <button type="button" class="btn btn-warning">Bottom</button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-warning"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-warning"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-warning"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-warning">1</button>
                      <button type="button" class="btn btn-warning">2</button>

                      <div class="btn-group">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /.warning -->
                <!-- success -->
                <tr>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-success">Top</button>
                      <button type="button" class="btn btn-success">Middle</button>
                      <button type="button" class="btn btn-success">Bottom</button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-success"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-success"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-success"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-left"></i></button>
                      <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-center"></i></button>
                      <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-right"></i></button>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-success">1</button>
                      <button type="button" class="btn btn-success">2</button>

                      <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /.success -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /. row -->
    </section>
    <!-- /.content -->
  </div>
  <?php include 'foot.php';?>