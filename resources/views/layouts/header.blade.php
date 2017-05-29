<header>
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="dropdown currency-dropdown pull-left">
						<span>Currency : </span>
						<button class="currency-button btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<span>GBP</span>
							<i class="fa fa-angle-down" aria-hidden="true"></i>
						</button>					
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="#">RUB</a></li>
							<li><a href="#">DOL</a></li>
							<li><a href="#">UAH</a></li>
						</ul>
					</div>
					<div class="action-buttns pull-right">						
						@if (Auth::guest())
							<a class="btn btn-default" href="{{ route('register') }}">Register</a>
							<a class="btn btn-default" href="{{ route('login') }}">Sign in</a>
                        @else
                            <a href="#" style="margin-right: 20px;">
                                Your account
                            </a>
                            <a href="{{ route('logout') }}" style="margin-right: 20px;" 
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>                
							<button class="btn btn-default basket">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i> 
								<span>empty</span> 
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</button>
						@endif
					</div>					
				</div>								
			</div>
		</div>
	</div>
	<div class="header-nav">
		<div class="container">
			<div class="row">
				<div class="logo col-lg-2">
					<span>Senchenko</span>
				</div>
				<div class="nav-block col-lg-8">
					<ul class="nav nav-pills pull-right">
						<li>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<b>Mens</b>
							<p class="dropdown-pointer"><i class="fa fa-angle-down" aria-hidden="true"></i></p>
							</a>
				            <ul class="dropdown-menu">
				            	<div class="col-lg-12">
						            <div class="row">
							            <div class="col-lg-6">
								            <ul class="multi-column-dropdown">
								            	<li class="dropdown-header">Casuals</li>
									            <li><a href="#">Jackets</a></li>
									            <li><a href="#">Hoodies & Sweatshirts</a></li>
									            <li><a href="#">Polo Shirts</a></li>
									            <li><a href="#">Sportswear</a></li>
									            <li><a href="#">Trousers & Chinos</a></li>
									            <li><a href="#">T-Shirts</a></li>
								            </ul>
							            </div>
							            <div class="col-lg-6">
								            <ul class="multi-column-dropdown">
									            <li class="dropdown-header">Formal</li>
									            <li><a href="#">Jackets</a></li>
									            <li><a href="#">Shirts</a></li>
									            <li><a href="#">Suits</a></li>
									            <li><a href="#">Trousers</a></li>
								            </ul>
							            </div>
							            <div  class="nav-banner pull-left">
							            	<p>
								            	<b>Autumn sale!</b>
								            	<br>
												up to 50% off
								            </p>
							            </div>							            
						            </div>
					            </div>
				            </ul>
				        </li>   						
						<li>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<b>Woomens</b>
							<p class="dropdown-pointer"><i class="fa fa-angle-down" aria-hidden="true"></i></p>
							</a>
				            <ul class="dropdown-menu">
				            	<div class="col-lg-12">				            						            	
						            <div class="row">
							            <div class="col-lg-6">
								            <ul class="multi-column-dropdown">
								            	<li class="dropdown-header">Casuals</li>
									            <li><a href="#">Jackets</a></li>
									            <li><a href="#">Hoodies & Sweatshirts</a></li>
									            <li><a href="#">Polo Shirts</a></li>
									            <li><a href="#">Sportswear</a></li>
									            <li><a href="#">Trousers & Chinos</a></li>
									            <li><a href="#">T-Shirts</a></li>
								            </ul>
							            </div>
							            <div class="col-lg-6">
								            <ul class="multi-column-dropdown">
									            <li class="dropdown-header">Formal</li>
									            <li><a href="#">Jackets</a></li>
									            <li><a href="#">Shirts</a></li>
									            <li><a href="#">Suits</a></li>
									            <li><a href="#">Trousers</a></li>
								            </ul>
							            </div>
							            <div  class="nav-banner pull-left">
							            	<p>
								            	<b>Autumn sale!</b>
								            	<br>
												up to 50% off
								            </p>
								        </div>	
						            </div>
					            </div>
				            </ul>
				        </li>
						<li class="brand-nav"><a href="#"><b>The brand</b></a></li>
						<li class="stores-nav"><a href="#"><b>Local Stores</b></a></li>
						<li>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<b>Look Book</b>
							<p class="dropdown-pointer"><i class="fa fa-angle-down" aria-hidden="true"></i></p>
							</a>
				            <ul class="dropdown-menu">
				            	<div class="col-lg-12">				            						            	
						            <div class="row">
							            <div class="col-lg-6">
								            <ul class="multi-column-dropdown">
								            	<li class="dropdown-header">Casuals</li>
									            <li><a href="#">Jackets</a></li>
									            <li><a href="#">Hoodies & Sweatshirts</a></li>
									            <li><a href="#">Polo Shirts</a></li>
									            <li><a href="#">Sportswear</a></li>
									            <li><a href="#">Trousers & Chinos</a></li>
									            <li><a href="#">T-Shirts</a></li>
								            </ul>
							            </div>
							            <div class="col-lg-6">
								            <ul class="multi-column-dropdown">
									            <li class="dropdown-header">Formal</li>
									            <li><a href="#">Jackets</a></li>
									            <li><a href="#">Shirts</a></li>
									            <li><a href="#">Suits</a></li>
									            <li><a href="#">Trousers</a></li>
								            </ul>
							            </div>
							            <div  class="nav-banner pull-left">
							            	<p>
								            	<b>Autumn sale!</b>
								            	<br>
												up to 50% off
								            </p>
								        </div>	
						            </div>
						        </div>
				            </ul>
				        </li>
					</ul>							
				</div>	
				<div class="search col-lg-2">
						<input type="text" name="search" placeholder="Search..">
						<i class="fa fa-search" aria-hidden="true"></i>
				</div>				
			</div>
		</div>		
	</div>
</header>
<script
	  src="https://code.jquery.com/jquery-3.1.1.js"
	  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
	  crossorigin="anonymous">
	</script>	