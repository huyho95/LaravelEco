@foreach($products as $product)
										<div class="col-lg-4 col-md-4 col-sm-4">
											<div class="two-product">
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}">
															<img class="primary-image" src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="" />
															<img class="secondary-image" src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">{{ number_format($product->pro_price,0,',','.') }} đ</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}">{{ $product->pro_name }}</a></h2>
														<p>{{ $product->pro_description }}</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
                                        </div>
                                        @endforeach