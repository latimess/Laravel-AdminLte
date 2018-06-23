
<!DOCTYPE html>

<html lang="en">

    <head>
    <meta charset="UTF-8">
    <title> AdminLTE 2 with Laravel - 	Home
 </title>
  
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <script>
        //See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
        window.trans = {"auth":{"failed":"These credentials do not match our records.","throttle":"Too many login attempts. Please try again in :seconds seconds."},"pagination":{"previous":"&laquo; Previous","next":"Next &raquo;"},"passwords":{"password":"Passwords must be at least six characters and match the confirmation.","reset":"Your password has been reset!","sent":"We have e-mailed your password reset link!","token":"This password reset token is invalid.","user":"We can't find a user with that e-mail address."},"validation":{"accepted":"The :attribute must be accepted.","active_url":"The :attribute is not a valid URL.","after":"The :attribute must be a date after :date.","after_or_equal":"The :attribute must be a date after or equal to :date.","alpha":"The :attribute may only contain letters.","alpha_dash":"The :attribute may only contain letters, numbers, and dashes.","alpha_num":"The :attribute may only contain letters and numbers.","array":"The :attribute must be an array.","before":"The :attribute must be a date before :date.","before_or_equal":"The :attribute must be a date before or equal to :date.","between":{"numeric":"The :attribute must be between :min and :max.","file":"The :attribute must be between :min and :max kilobytes.","string":"The :attribute must be between :min and :max characters.","array":"The :attribute must have between :min and :max items."},"boolean":"The :attribute field must be true or false.","confirmed":"The :attribute confirmation does not match.","date":"The :attribute is not a valid date.","date_format":"The :attribute does not match the format :format.","different":"The :attribute and :other must be different.","digits":"The :attribute must be :digits digits.","digits_between":"The :attribute must be between :min and :max digits.","dimensions":"The :attribute has invalid image dimensions.","distinct":"The :attribute field has a duplicate value.","email":"The :attribute must be a valid email address.","exists":"The selected :attribute is invalid.","file":"The :attribute must be a file.","filled":"The :attribute field must have a value.","image":"The :attribute must be an image.","in":"The selected :attribute is invalid.","in_array":"The :attribute field does not exist in :other.","integer":"The :attribute must be an integer.","ip":"The :attribute must be a valid IP address.","ipv4":"The :attribute must be a valid IPv4 address.","ipv6":"The :attribute must be a valid IPv6 address.","json":"The :attribute must be a valid JSON string.","max":{"numeric":"The :attribute may not be greater than :max.","file":"The :attribute may not be greater than :max kilobytes.","string":"The :attribute may not be greater than :max characters.","array":"The :attribute may not have more than :max items."},"mimes":"The :attribute must be a file of type: :values.","mimetypes":"The :attribute must be a file of type: :values.","min":{"numeric":"The :attribute must be at least :min.","file":"The :attribute must be at least :min kilobytes.","string":"The :attribute must be at least :min characters.","array":"The :attribute must have at least :min items."},"not_in":"The selected :attribute is invalid.","not_regex":"The :attribute format is invalid.","numeric":"The :attribute must be a number.","present":"The :attribute field must be present.","regex":"The :attribute format is invalid.","required":"The :attribute field is required.","required_if":"The :attribute field is required when :other is :value.","required_unless":"The :attribute field is required unless :other is in :values.","required_with":"The :attribute field is required when :values is present.","required_with_all":"The :attribute field is required when :values is present.","required_without":"The :attribute field is required when :values is not present.","required_without_all":"The :attribute field is required when none of :values are present.","same":"The :attribute and :other must match.","size":{"numeric":"The :attribute must be :size.","file":"The :attribute must be :size kilobytes.","string":"The :attribute must be :size characters.","array":"The :attribute must contain :size items."},"string":"The :attribute must be a string.","timezone":"The :attribute must be a valid zone.","unique":"The :attribute has already been taken.","uploaded":"The :attribute failed to upload.","url":"The :attribute format is invalid.","custom":{"attribute-name":{"rule-name":"custom-message"}},"attributes":[]},"adminlte_lang_message":{"logged":"You are logged in!","someproblems":"There were some problems with your input.","siginsession":"Sign in to start your session","remember":"Remember Me","buttonsign":"Sign In","forgotpassword":"I forgot my password","registermember":"Register a new membership","terms":"I agree to the terms","conditions":"Terms and conditions","register":"Register","login":"Login","membership":"I already have a membership","passwordclickreset":"Click here to reset your password:","signGithub":"Sign in using Github","signFacebook":"Sign in using Facebook","signTwitter":"Sign in using Twitter","signGoogle+":"Sign in using Google+","signLinkedin":"Sign in using Linkedin","sendpassword":"Send Password Reset Link","passwordreset":"Reset password","pagenotfound":"Page not found","404error":"404 Error Page","notfindpage":"We could not find the page you were looking for.","mainwhile":"Meanwhile, you may","returndashboard":"return to dashboard","usingsearch":"or try using the search form.","search":"Search","servererror":"Server Error","500error":"500 Error Page","somethingwrong":"Something went wrong.","wewillwork":"We will work on fixing that right away.","serviceunavailable":"Service unavailable","503error":"503 Error Page","level":"Level","here":"Here","recentactivity":"Recent Activity","descriptionpackage":"A Laravel 5 package that switchs default Laravel scaffolding\/boilerplate to AdminLTE template","createdby":"Created by","seecode":"See code at","online":"Online","home":"Home","header":"HEADER","anotherlink":"Another Link","multilevel":"Multilevel","linklevel2":"Link in level2","birthday":"Langdon's Birthday","birthdaydate":"Will be 23 on April 24th","progress":"Tasks Progress","customtemplate":"Custom Template Design","statstab":"Stats Tab Content","generalset":"General Settings","reportpanel":"Report panel usage","checked":"checked","informationsettings":"Some information about this general settings option","togglenav":"Toggle navigation","tabmessages":"You have 4 messages","supteam":"Support Team","awesometheme":"Why not buy a new awesome theme?","allmessages":"See All Messages","notifications":"You have 10 notifications","newmembers":"5 new members joined today","viewall":"View all","tasks":"You have 9 tasks","alltasks":"View all tasks","desbuttons":"Design some buttons","complete":"Complete","membersince":"Member since","followers":"Followers","sales":"Sales","friends":"Friends","profile":"Profile","signout":"Sign out","landingdescription":"Laravel 5 package that switchs default Laravel scaffolding\/boilerplate to AdminLTE template with Bootstrap 3.0 and Pratt Landing page","landingdescriptionpratt":"Acacha AdminLTE Laravel package template Landing page - Using Pratt","description":"Description","showcase":"Showcase","contact":"Contact","laravelpackage":"5 package that switchs default Laravel","to":"to","templatewith":"template with","and":"and","gedstarted":"Get Started!","amazing":"Amazing admin template","basedadminlte":"Based on adminlte bootstrap theme","awesomepackaged":"Awesome packaged...","by":"by","at":"at","readytouse":"ready to use with Laravel!","designed":"Designed To Excel","community":"Community","see":"See","githubproject":"Github project","post":"post","issues":"issues","pullrequests":"Pull requests","schedule":"Schedule","monitoring":"Monitoring","whatnew":"What's New?","features":"Some Features","design":"First Class Design","retina":"Retina Ready Theme","support":"Awesome Support","responsive":"Responsive Design","screenshots":"Some Screenshots","address":"Address","dropus":"Drop Us A Line","yourname":"Your Name","emailaddress":"Email Address","enteremail":"Enter Email","yourtext":"Your Text","submit":"SUBMIT","email":"Email","username":"Username","password":"Password","retypepassword":"Retype password","fullname":"Full Name","registererror":"Error registering!","loginerror":"Error loging!","loggedin":"Logged in!","entering":"Entering...","registered":"User Registered!"}}    </script>
</head>



<body class="skin-blue sidebar-mini">
<div id="app" v-cloak>
    <div class="wrapper">

    <!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="https://demo.adminlte.acacha.org/home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE Laravel</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image -->
                                            <img src="http://www.gravatar.com/avatar/4d43ddfa39c301d6beec7519ef699be5.jpg?s=80&amp;d=mm&amp;r=g" class="img-circle" alt="User Image"/>
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li><!-- end message -->
                            </ul><!-- /.menu -->
                        </li>
                        <li class="footer"><a href="#">c</a></li>
                    </ul>
                </li><!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li><!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            You have 9 tasks
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>
                                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu" id="user_menu" style="max-width: 280px;white-space: nowrap;">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="max-width: 280px;white-space: nowrap;overflow: hidden;overflow-text: ellipsis">
                            <!-- The user image in the navbar-->
                            <img src="http://www.gravatar.com/avatar/4d43ddfa39c301d6beec7519ef699be5.jpg?s=80&amp;d=mm&amp;r=g" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs" data-toggle="tooltip" title="lati">lati</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="http://www.gravatar.com/avatar/4d43ddfa39c301d6beec7519ef699be5.jpg?s=80&amp;d=mm&amp;r=g" class="img-circle" alt="User Image" />
                                <p>
                                    <span data-toggle="tooltip" title="lati">lati</span>
                                    <small>Login Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="https://demo.adminlte.acacha.org/user/profile" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="https://demo.adminlte.acacha.org/logout" class="btn btn-default btn-flat" id="logout"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Sign out
                                    </a>

                                    <form id="logout-form" action="https://demo.adminlte.acacha.org/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="ZcxRUWmwG6k0AJ8L17GKNlX8X2f0YHNPfuCya01D">
                                        <input type="submit" value="logout" style="display: none;">
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </li>
                
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

    <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                <div class="pull-left image">
                    <img src="http://www.gravatar.com/avatar/4d43ddfa39c301d6beec7519ef699be5.jpg?s=80&amp;d=mm&amp;r=g" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>lati</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul data-widget="tree" class="sidebar-menu"><li class="header">HEADER</li><li class="active"><a href="https://demo.adminlte.acacha.org/home"><i class="fa fa-home"></i><span>Home</span></a></li><li><a href="http://www.acacha.org"><i class="fa fa-link"></i><span>Another link</span></a></li><li class="header">Acacha Adminlte</li><li class="header">SECONDARY MENU</li><li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu"><li><a href="/link1">Link1</a></li><li><a href="/link2">Link2</a></li><li><a href="http://www.google.com">Google</a></li><li class="treeview"><a href="#"><span>Multilevel 2</span> <i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu"><li><a href="/link21">Link21</a></li><li><a href="/link22">Link22</a></li><li><a href="http://www.google.com">Google</a></li></ul></li></ul></li></ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Page Header here        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
</section>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						You are logged in!. Start creating your amazing application!
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href='javascript::;'>
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon&#039;s Birthday</h4>
                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href='javascript::;'>
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->

        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked />
                    </label>
                    <p>
                        Some information about this general settings option
                    </p>
                </div><!-- /.form-group -->
            </form>
        </div><!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar

<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>
    <!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        <a href="https://github.com/acacha/adminlte-laravel"></a><b>admin-lte-laravel</b></a>. A Laravel 5 package that switchs default Laravel scaffolding/boilerplate to AdminLTE template
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="http://acacha.org">Acacha.org</a>.</strong> Created by <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a>. See code at <a href="https://github.com/acacha/adminlte-laravel">Github</a>
</footer>

</div><!-- ./wrapper -->
</div>
  
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
