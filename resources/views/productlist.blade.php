@extends('layouts.master')
<!-- header -->
@section('title', 'services')
<!-- //banner -->
@section('content')
<!-- services -->
	<div class="services">
		<div class="container">
			<ol class="breadcrumb breadco">
				<li><a href="#">Home</a></li>
				<li class="active">產品列表</li>
			</ol>
			<table>
				<form action="{{route('prosearch')}}" method="post">
					<tr>
						<td><input type="text" name="name"></td>
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
						<td><input type="submit" name="Search" value="Search"></td>
					</tr>
				</form>
			</table>
			<div class="services-overview">
				<h3>產品列表</h3>
				<div class="services-overview-grids">
					@foreach($product as $product)
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="{{env('BACKEND_URL') . $product->picture}}" alt=" " class="img-responsive" />
							<div class="services-overview-gd">
								<h4>商品名稱：{{$product->name}}</h4>
								<h4>商品類別：{{$product->C_name}}</h4>
								<h4>商品價格：{{$product->price}}$</h4>
								<a href="{{route('prodetail',$product->id)}}" class="btn btn-success">觀看產品詳細資訊</a>
								<ul class="social-icons">
									<li><a href="#" class="p"></a></li>
									<li><a href="#" class="in"></a></li>
									<li><a href="#" class="v"></a></li>
									<li><a href="#" class="facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //services -->
<!--footer-->

<!--//footer-->
@endsection
