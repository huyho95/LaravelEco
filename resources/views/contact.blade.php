@extends('layouts.app')
@section('content')
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="container-inner">
							<ul>
								<li class="home">
									<a href="">Home</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Liên hệ</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div class="main-contact-area">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="contact-us-area">
							<!-- google-map-area start -->
                            <div id="map" style="width:500px;height:500px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1727595952752!2d108.21499331416976!3d16.056522444044887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c907a96cdb%3A0x249cc594854ecc12!2zMzE1IEhvw6BuZyBEaeG7h3U!5e0!3m2!1svi!2s!4v1560271484796!5m2!1svi!2s" width="1170px" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
							<!-- google-map-area end -->
							<!-- contact us form start -->
							<div class="contact-us-form">
								<div class="contact-form">
									<span class="legend">Mời bạn điền thông tin liên hệ</span>
									<form action="" method="post">
										<div class="form-top">
											@csrf
											<div class="form-group col-sm-10">
												<label>Họ tên <sup>*</sup></label>
												<input type="text" name="c_name" class="form-control" required>
											</div>

											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Email <sup>*</sup></label>
												<input type="email" name="c_email" class="form-control" required>
											</div>
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Tiêu đề <sup>*</sup></label>
												<input type="text" name="c_title" class="form-control" required>
											</div>

											<div class="form-group col-sm-12 col-md-12 col-lg-10">
												<label>Nội dung <sup>*</sup></label>
												<textarea class="yourmessage" name="c_content" required></textarea>
											</div>
										</div>
										<div class="submit-form form-group col-sm-12 submit-review" style="text-align: center">
											<button type="submit" class="btn btn-success" style="font-size: 18px;display: inline-block ">Gửi thông tin</button>
										</div>
									</form>
								</div>
							</div>
							<!-- contact us form end -->
						</div>
					</div>
				</div>
			</div>
		</div>
@stop
