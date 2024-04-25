@auth
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Applicants details</title>
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">



    
  <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="/adminHome">
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="nav-item"><a href="/adminHome"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href="/newjob"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Add New Job</span></a>
          </li>
          <li class="active nav-item"><a href="/applicants"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Applicants</span></a>
          </li>
        </ul>
      </div>
      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" >Logout</button>
    </form>
      <div class="navigation-background"></div>
    </div>


    <div class="app-content content">
      <div class="content-wrapper">
        
        <div class="content-body"><!-- Line Awesome section start -->
        <div class="card-content collapse show">
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Job Title</th>
								<th scope="col">Email</th>
                <th scope="col">Experience</th>
                <th scope="col">Qualification</th>
                <th scope="col">Status</th>
                <th scope="col">Change Status</th>
							</tr>
						</thead>
						<tbody>
            
            @foreach($applications as $application)
    <tr>
        <th scope="row">{{ $loop->index + 1 }}</th>
        
        <td>{{ optional($application->user)->name }}</td>
        <td>{{ optional($application->job)->title }}</td>
        <td>{{ optional($application->user)->email }}</td>
        <td>{{ optional($application->user)->experience }}</td>
        <td>{{ optional($application->user)->qualification }}</td>
        <td>
    @php
        $text = '';
        if ($application->status == 0) {
            $text = 'PENDING';
        } elseif ($application->status == 1) {
            $text = 'ACCEPTED';
        } else {
            $text = 'DECLINED';
        }
    @endphp
    {{ $text }}
</td>

<td>
<form action="/changestatus/{{$application->id}}" method="POST">
    @csrf
    @method('PUT') {{-- Use the PUT method for updating --}}
    <select name="status" id="status">
        <option value="0">PENDING</option>
        <option value="1">ACCEPT</option>
        <option value="2">DENY</option>
    </select>
    <button type="submit">Change</button>
</form>


    </tr>
@endforeach


						</tbody>
					</table>
				</div>
			</div>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        
      </div>
    </footer>

  </body>
</html>
@else

return redirect('/loginpage');

@endauth