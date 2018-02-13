<div class="header">
	<div class="wrap">
		<div class="logo">
			<a href="{{ route('site.index') }}"><img src="{{ asset('images/logo.jpg') }}" title="pinbal" /></a>
		</div>
		<div class="nav-icon">
			 <a href="#" class="right_bt" id="activator"><span> </span> </a>
		</div>
		 <div class="box" id="box">
			 <div class="box_content">        					                         
				<div class="box_content_center">
				 	<div class="form_content">
						<div class="menu_box_list">
							<ul>
								<li><a href="{{ route('site.index') }}"><span>Home</span></a></li>
								<li><a href="{{ route('site.about') }}"><span>About</span></a></li>
								<div class="clear"> </div>
							</ul>
						</div>
						<a class="boxclose" id="boxclose"> <span> </span></a>
					</div>                                  
				</div> 	
			</div> 
		</div>       	  
		<div class="top-searchbar">
			<form method="get" action="#">
				<input type="text" name="q" placeholder="Cari judul artikel disini.." />
				<input type="submit" value="" />
			</form>
		</div>
		
		<div class="userinfo">
			<div class="user">
				<ul>
					<li><a href="#"><img src="{{ asset('images/user-pic.png') }}" title="user-name" /><span>Admin</span></a></li>
				</ul>
			</div>
		</div>
		
		<div class="clear"> </div>
	</div>
</div>