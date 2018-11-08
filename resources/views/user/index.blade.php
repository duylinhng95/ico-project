@extends('user.layout', ['user' => $user, 'brand' => $brand, 'brandName' => $brandName])
@section('header')
Hello and Welcome to Ytrade.co!
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    @foreach($dashboards as $k => $d)
				  	@if($k == 0)
				    <div class="item active" style="margin: auto; width:100%;">
				      	@foreach($d as $ds)
					      <img src="{{asset('/page/images/user/dashboard')}}/{{$ds['url']}}" class="img-fluid col-md-6" alt="{{$ds['name']}}">
				      	@endforeach
				    </div>
				    @else
					    <div class="item" style="margin: auto;">
				    	@foreach($d as $ds)
					     <img src="{{asset('/page/images/user/dashboard')}}/{{$ds['url']}}" class="img-fluid col-md-6" alt="{{$ds['name']}}">
				      	@endforeach
					    </div>					    
				    @endif
			    @endforeach
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="fas fa-angle-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="fas fa-angle-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<p>
						Dear Ytrade investors,
						<br><br>
						Thank you for being interested in our ICO project. Since we have built up this website, we have been received many advice, opinions as well as criticism. This is honestly very important for us to thrive our best to serve you in a better way with better strategies.
						<br><br>
						Let us introduce a bit about our project.
						<br><br>
						1. Ytrade means You trade, this is a friendly-user exchange where our traders will have a great experience about a revolutionary cryptocurrency exchange where all the best features come, one of the newest revolutions is copy-trading automation. It comes along with dividend distribution, lifetime referral bonus, mining through trading, and repurchase tokens.. etc.
						<br><br>
						2. We have deeply analyzed the market situation to limit the inflation may be happening, we use a part of trading fee commission to repurchase the tokens in the market and burn it at the end of every month, this is crucial. Also, we will release the core teams tokens gradually in 5 years, this is our long-term vision and responsibility. 
						<br><br>
						3. Fiat currency now is not supported by our exchange, however. We will update it in our beta.
						<br><br>
						4. Ytrade has a really good-bonding partnership with many community leaders as well as to many legit projects.
						<br><br>
						5. Pre-signed listings with other projects are the very first legit works in which we wanted to show our honesty and thrive to Ytrade Community. 
						<br><br>
						6. We have also been listed in many leading ICO rating agencies such as ICObench, ICOmarks, ICOholders, Token Markets and many more.
						<br><br>
						7. Ytrade.co got an international permission for a currency exchange to work in all markets. We tried to obtain legal business in other nations.
						<br><br>
						8. Our project has now appeared to a tremendous number of newspaper and media across the world
						<br><br>
						9. The team Ytrade.co with our representative will officially take part in many other blockchains submits and fintech events.
						<br><br>
						10. The team Ytrade.co has not decided yet when we start our ICO crowdfunding. We still are in the progress to focus on the project first, then we move to the token sale.
						<br><br>
						11. Ytrade Exchange will get started with low cap and price per unit, with our outstanding and revolutionary features. These are the keys to achieve our goal and milestones.
						<br><br>
						11. Ytrade has a 24/7 online support, firstly we focus on telegram community to help them reach our what they are concerned and wondering about the project.
						<br><br>
						The Ytrade project has now been reviewed by many top influencers and reviewers, this is our honor to be mentioned and discussed worldwide. The core team has begun the idea in the very first months of 2018, we gathered together to discuss the current market and how it can be different in mid-term and long-term vision. We aim to create a very friendly platform - digital trading asset exchange for our traders, special with our strategies, initial investors will have massive benefits
						<br><br>
						The core team consists of many gifted developers, experts, marketing consultants who have been working at Alibaba, ZhongAn, Google, Saxo Bank, CMC Markets, Qudian, Ant Financial and other influencers in the market. Now we have built up a good team of 32 members with 4 key core members who are in charge of the success of the project.
						<br><br>
						Thank you for being with us.
						<br><br>
						The Ytrade.co team.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection