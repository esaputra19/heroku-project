@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
	<section class="main-content">
		<div class="container">
			<h1>Top Gainers</h1>
			<br>
			<br>

			<div class="row">
				<div class="col-sm-4">
					<div class="leaderboard-card">
						<div class="leaderboard-card__top">
							<h3 class="text-center">$1,051</h3>
						</div>
						<div class="leaderboard-card__body">
							<div class="text-center">
								<img src="img/user2.jpg" class="circle-img mb-2" alt="User Img">
								<h5 class="mb-0">Sandeep Sandy</h5>
								<p class="text-muted mb-0">@sandeep</p>
								<hr>
								<div class="d-flex justify-content-between align-items-center">
									<span><i class="fa fa-map-marker"></i> Bangalore</span>
									<button class="btn btn-outline-success btn-sm">Congratulate</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="leaderboard-card leaderboard-card--first">
						<div class="leaderboard-card__top">
							<h3 class="text-center">$1,254</h3>
						</div>
						<div class="leaderboard-card__body">
							<div class="text-center">
								<img src="img/user1.jpg" class="circle-img mb-2" alt="User Img">
								<h5 class="mb-0">Kiran Acharya</h5>
								<p class="text-muted mb-0">@kiranacharyaa</p>
								<hr>
								<div class="d-flex justify-content-between align-items-center">
									<span><i class="fa fa-map-marker"></i> Bangalore</span>
									<button class="btn btn-outline-success btn-sm">Congratulate</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="leaderboard-card">
						<div class="leaderboard-card__top">
							<h3 class="text-center">$1,012</h3>
						</div>
						<div class="leaderboard-card__body">
							<div class="text-center">
								<img src="img/user3.jpg" class="circle-img mb-2" alt="User Img">
								<h5 class="mb-0">John doe</h5>
								<p class="text-muted mb-0">@johndoe</p>
								<hr>
								<div class="d-flex justify-content-between align-items-center">
									<span><i class="fa fa-map-marker"></i> Bangalore</span>
									<button class="btn btn-outline-success btn-sm">Congratulate</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<h4>All Users</h4>

			<table class="table">
				<thead>
					<tr>
						<th>User</th>
						<th>Status</th>
						<th>Location</th>
						<th>Email</th>
						<th>Congratulate</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="img/user1.jpg" class="circle-img circle-img--small mr-2" alt="User Img">
								<div class="user-info__basic">
									<h5 class="mb-0">Kiran Acharya</h5>
									<p class="text-muted mb-0">@kiranacharyaa</p>
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1">$1,253</h4><small class="text-success"><i class="fa fa-arrow-up"></i>5%</small>
							</div>
						</td>
						<td>Bangalore</td>
						<td>kiran@kiranmail.com</td>
						<td>
							<button class="btn btn-success btn-sm">Congratulate</button>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="img/user2.jpg" class="circle-img circle-img--small mr-2" alt="User Img">
								<div class="user-info__basic">
									<h5 class="mb-0">Sandeep Sandy</h5>
									<p class="text-muted mb-0">@sandeep</p>
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1">$1,051</h4><small class="text-success"><i class="fa fa-arrow-up"></i>5%</small>
							</div>
						</td>
						<td>Bangalore</td>
						<td>sandeep@sandeepmail.com</td>
						<td>
							<button class="btn btn-success btn-sm">Congratulate</button>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="img/user3.jpg" class="circle-img circle-img--small mr-2" alt="User Img">
								<div class="user-info__basic">
									<h5 class="mb-0">John Doe</h5>
									<p class="text-muted mb-0">@johndoe</p>
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1">$1,012</h4><small class="text-success"><i class="fa fa-arrow-up"></i>5%</small>
							</div>
						</td>
						<td>Bangalore</td>
						<td>kiran@kiranmail.com</td>
						<td>
							<button class="btn btn-success btn-sm">Congratulate</button>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="img/user4.jpg" class="circle-img circle-img--small mr-2" alt="User Img">
								<div class="user-info__basic">
									<h5 class="mb-0">John Noakes</h5>
									<p class="text-muted mb-0">@johnnoakes</p>
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1">$986</h4><small class="text-success"><i class="fa fa-arrow-up"></i>5%</small>
							</div>
						</td>
						<td>Bangalore</td>
						<td>kiran@kiranmail.com</td>
						<td>
							<button class="btn btn-success btn-sm">Congratulate</button>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="img/user5.jpg" class="circle-img circle-img--small mr-2" alt="User Img">
								<div class="user-info__basic">
									<h5 class="mb-0">Tom harry</h5>
									<p class="text-muted mb-0">@tomharry</p>
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1">$951</h4><small class="text-success"><i class="fa fa-arrow-up"></i>5%</small>
							</div>
						</td>
						<td>Bangalore</td>
						<td>kiran@kiranmail.com</td>
						<td>
							<button class="btn btn-success btn-sm">Congratulate</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
</body>
@endsection

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
