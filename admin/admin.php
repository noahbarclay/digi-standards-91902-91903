<?php include("permissions.php");?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin │ Pix Prints</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../images/logo.png">

    <title>Admin │ Pix Prints</title>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
  </head>

  <body>
  <?php include("navbar.php");?>
  
      <!-- Header Section-->
      <section class="bg-white py-5">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
           
            <!-- Pie Chart-->
            <div class="col-lg-3 col-md-6">
              <div class="card shadow-0">
                <h2 class="h3 fw-normal">Project Beta progress</h2>
                <p class="text-sm text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="pie-chart">
                  <canvas id="pieChart" style="width: 300px; height: 300px; max-width: 100%"> </canvas>
                </div>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12">
              <div class="card shadow-0">
                <h2 class="h3 fw-normal">Sales marketing report</h2>
                <p class="text-sm text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet officiis</p>
                <canvas id="lineCahrt"></canvas>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Statistics Section-->
      <section class="py-5">
        <div class="container-fluid">
          <div class="row align-items-stretch gy-4">
            <div class="col-lg-4">
              <!-- Income-->
              <div class="card text-center h-100 mb-0">
                <div class="card-body">
                  <svg class="svg-icon svg-icon-big svg-icon-light mb-4 text-muted">
                    <use xlink:href="#sales-up-1"> </use>
                  </svg>
                  <p class="text-gray-700 display-6">126,418</p>
                  <p class="text-primary h2 fw-bold">All Income</p>
                  <p class="text-xs text-gray-600 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- Monthly Usage-->
              <div class="card h-100 mb-0">
                <div class="card-body">
                  <h2 class="h3 fw-normal mb-4">Monthly Usage</h2>
                  <div class="row align-items-center mb-3 gx-lg-5">
                    <div class="col-lg-6">
                      <table class="w-100">
                        <tbody>
                          <tr>
                            <td>
                              <div class="position-relative mx-auto" style="max-width: 120px">
                                <canvas class="mx-auto" id="monthlyProgress" width="150" height="150"></canvas>
                                <p class="h3 text-primary fw-normal position-absolute top-50 start-50 translate-middle text-center m-0">80%</p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-lg-6 border-start">
                      <p class="fw-bold h2 text-primary">80.56 Gb</p>
                      <p class="text-xs fw-light text-gray-500 mb-0">Current Plan</p>
                      <p class="text-gray-500">100 Gb Monthly</p>
                    </div>
                  </div>
                  <p class="text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- User Activity-->
              <div class="card h-100 mb-0">
                <div class="card-body">
                  <h2 class="h3 fw-normal mb-4">User Activity</h2>
                  <p class="display-6">210</p>
                  <h3 class="h4 fw-normal">Social Users</h3>
                  <div class="progress rounded-0 mb-3">
                    <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="text-start">
                      <p class="h5 fw-normal mb-2">Pages Visits</p>
                      <p class="fw-bold text-xl text-primary mb-0">230</p>
                    </div>
                    <div class="text-end">
                      <p class="h5 fw-normal mb-2">New Visits</p>
                      <p class="fw-bold text-xl text-primary mb-0">73.4%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Updates Section -->
      <section class="mb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <!-- Recent Updates Widget          -->
              <div class="card">
                <div class="card-header border-bottom">
                  <h2 class="h5 fw-normal mb-0"><a class="card-collapse-link text-dark d-block" data-bs-toggle="collapse" href="#updates-box" aria-expanded="true">News Updates</a></h2>
                </div>
                <div class="card-body p-0">
                  <div class="collapse show" id="updates-box" role="tabpanel">
                    <ul class="list-unstyled">
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between bg-light">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between bg-light">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between bg-light">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                      <!-- Item-->
                      <div class="p-3 d-flex justify-content-between">
                        <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          <div class="ms-3">
                            <h5 class="fw-normal text-gray-600 mb-1">Lorem ipsum dolor sit amet.</h5>
                            <p class="mb-0 text-xs text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                          </div>
                        </div>
                        <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500 fw-bold">24</strong><small class="d-block lh-1 text-gray-500">Jan</small></div>
                      </div>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Recent Updates Widget End-->
            </div>
            <div class="col-lg-4 col-md-6">
              <!-- Daily Feed Widget-->
              <div class="card">
                <div class="card-header border-bottom">
                  <h2 class="h5 fw-normal mb-0"><a class="card-collapse-link text-dark d-block" data-bs-toggle="collapse" href="#feeds-box" aria-expanded="true">Your daily Feeds
                      <div class="badge bg-primary position-absolute end-0 me-4">10 messages</div></a></h2>
                </div>
                <div class="card-body-0">
                  <div class="collapse show" id="feeds-box" role="tabpanel">
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/avatar-5.jpg" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Aria Smith</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Posted a new blog</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/avatar-2.jpg" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Frank Williams</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Posted a new blog</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                            <div class="d-flex"><a class="btn btn-xs btn-dark py-1 m-1" href="#!"><i class="fas fa-thumbs-up me-1"></i>Like</a><a class="btn btn-xs btn-dark py-1 m-1" href="#!"><i class="fas fa-heart me-1"> </i>Love  </a></div>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/avatar-3.jpg" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Ashley Wood</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Posted a new blog</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3 border-bottom border-gray-200">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/avatar-1.jpg" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Jason Doe</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Posted a new blog</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                      <div class="mt-3 ms-5 ps-3">
                        <div class="bg-light p-3 shadow-sm"><small class="text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Over the years.</small></div>
                        <div class="text-end mt-2"><a class="btn btn-xs btn-dark py-1" href="#!"><i class="fas fa-thumbs-up me-1"></i>Like</a></div>
                      </div>
                    </div>
                    <!-- Item-->
                    <div class="p-3">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex"><a class="flex-shrink-0" href="#!"><img class="img-fluid rounded-circle" src="img/avatar-6.jpg" alt="person" width="50"></a>
                          <div class="ms-3">
                            <h5 class="fw-normal">Sam Martinez</h5>
                            <p class="mb-0 text-xs text-gray-600 lh-1">Posted a new blog</p><small class="text-gray-600 fw-light">Today 5:60 pm - 12.06.2014</small>
                          </div>
                        </div>
                        <div class="text-end"><small class="text-gray-500">5min ago</small></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Daily Feed Widget End-->
            </div>
            <div class="col-lg-4 col-md-6">
              <!-- Recent Activities Widget      -->
              <div class="card">
                <div class="card-header border-bottom">
                  <h2 class="h5 fw-normal mb-0"><a class="card-collapse-link text-dark d-block" data-bs-toggle="collapse" href="#activities-box" aria-expanded="true">Recent Activities</a></h2>
                </div>
                <div class="card-body p-0">
                  <div class="collapse show" id="activities-box" role="tabpanel">
                    <div class="row g-0 border-bottom border-gray-200">
                      <div class="col-sm-4 col-3 text-end">
                        <ul class="list-inline mb-0">
                          <li>
                            <div class="d-inline-block p-2 bg-light"><i class="far fa-clock fa-fw"></i></div>
                          </li>
                          <li class="me-2"><span class="small text-gray-500">6:00 am</span></li>
                          <li class="me-2"><span class="small text-info lh-1 d-block">6 hours ago</span></li>
                        </ul>
                      </div>
                      <div class="col-sm-8 col-9 border-start border-gray-200 p-3">
                        <h5 class="fw-normal">Meeting</h5>
                        <p class="small mb-0 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         </p>
                      </div>
                    </div>
                    <div class="row g-0 border-bottom border-gray-200">
                      <div class="col-sm-4 col-3 text-end">
                        <ul class="list-inline mb-0">
                          <li>
                            <div class="d-inline-block p-2 bg-light"><i class="far fa-clock fa-fw"></i></div>
                          </li>
                          <li class="me-2"><span class="small text-gray-500">6:00 am</span></li>
                          <li class="me-2"><span class="small text-info lh-1 d-block">6 hours ago</span></li>
                        </ul>
                      </div>
                      <div class="col-sm-8 col-9 border-start border-gray-200 p-3">
                        <h5 class="fw-normal">Meeting</h5>
                        <p class="small mb-0 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         </p>
                      </div>
                    </div>
                    <div class="row g-0 border-bottom border-gray-200">
                      <div class="col-sm-4 col-3 text-end">
                        <ul class="list-inline mb-0">
                          <li>
                            <div class="d-inline-block p-2 bg-light"><i class="far fa-clock fa-fw"></i></div>
                          </li>
                          <li class="me-2"><span class="small text-gray-500">6:00 am</span></li>
                          <li class="me-2"><span class="small text-info lh-1 d-block">6 hours ago</span></li>
                        </ul>
                      </div>
                      <div class="col-sm-8 col-9 border-start border-gray-200 p-3">
                        <h5 class="fw-normal">Meeting</h5>
                        <p class="small mb-0 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         </p>
                      </div>
                    </div>
                    <div class="row g-0 border-bottom border-gray-200">
                      <div class="col-sm-4 col-3 text-end">
                        <ul class="list-inline mb-0">
                          <li>
                            <div class="d-inline-block p-2 bg-light"><i class="far fa-clock fa-fw"></i></div>
                          </li>
                          <li class="me-2"><span class="small text-gray-500">6:00 am</span></li>
                          <li class="me-2"><span class="small text-info lh-1 d-block">6 hours ago</span></li>
                        </ul>
                      </div>
                      <div class="col-sm-8 col-9 border-start border-gray-200 p-3">
                        <h5 class="fw-normal">Meeting</h5>
                        <p class="small mb-0 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         </p>
                      </div>
                    </div>
                    <div class="row g-0">
                      <div class="col-sm-4 col-3 text-end">
                        <ul class="list-inline mb-0">
                          <li>
                            <div class="d-inline-block p-2 bg-light"><i class="far fa-clock fa-fw"></i></div>
                          </li>
                          <li class="me-2"><span class="small text-gray-500">6:00 am</span></li>
                          <li class="me-2"><span class="small text-info lh-1 d-block">6 hours ago</span></li>
                        </ul>
                      </div>
                      <div class="col-sm-8 col-9 border-start border-gray-200 p-3">
                        <h5 class="fw-normal">Meeting</h5>
                        <p class="small mb-0 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="main-footer w-100 position-absolute bottom-0 start-0 py-2" style="background: #222">
        <div class="container-fluid">
          <div class="row text-center gy-3">
            <div class="col-sm-6 text-sm-start">
              <p class="mb-0 text-sm text-gray-600">Your company &copy; 2017-2021</p>
            </div>
            <div class="col-sm-6 text-sm-end">
              <p class="mb-0 text-sm text-gray-600">Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>