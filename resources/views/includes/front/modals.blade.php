<div id="quickview-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="modal-product">
								<div class="product-images">
									<div class="main-image images">
										<img alt="product" id="modal_productImageLink"  src="img/product/sp2.jpg">
									</div>
								</div><!-- .product-images -->
								
								<div class="product-info">
									<h1 id="modal_productName">Cras neque metus</h1>
									<div class="price-box">
										<p class="price"><span class="special-price"><span class="amount" id="modal_productPrice">$155.00</span></span></p>
									</div>
									<a id="modal_productLink" href="single-product.html" class="see-all">نمایش جزئیات کالا</a>
									<div class="quick-add-to-cart">
										<form method="post" class="cart">
											<div class="add-to-box add-to-box2">
											<div class="add-to-cart">
												<div class="input-content">
													<label for="qty">Qty:</label>
													<input type="button" value="-" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" class="qty-decrease">
													<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
													<input type="button" value="+" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" class="qty-increase">
												</div>
												
												<button id="modal_productAddToCartBtn" class="addItemToCart btn" type="button" product_id="" item="" price="" data-dismiss="modal"><i class="fa fa-shopping-cart"></i> <span>افزودن به سبد خرید</span></button>
											</div>
										</div>
										</form>
									</div>
									<div id="modal_productDetail" class="quick-desc">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
									</div>
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">به اشتراک بگذارید</h3>
											<ul class="social-icons">
												<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fab fa-facebook"></i></a></li>
												<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fab fa-twitter"></i></a></li>
												<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fab fa-pinterest"></i></a></li>
												<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fab fa-google-plus"></i></a></li>
												<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fab fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- .product-info -->
							</div><!-- .modal-product -->
						</div><!-- .modal-body -->
					</div><!-- .modal-content -->
				</div><!-- .modal-dialog -->
			</div><!-- END Modal -->
        </div><!-- END QUICKVIEW PRODUCT -->
        





        <div id="quickview-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="removeFromCartModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						
						<div class="modal-body">
							<div class="modal-product">
																
								<div class="product-info">
									<h1>آیا مایل به حذف کالا از سبد خرید هستید؟</h1>
                                    
                                    <button class="btn" id="confirmDelectFromCart" type="button" value='{{route("cart.removeFromCart")}}' data-dismiss="modal"><span>حذف کالا</span></button>
									<button class="btn" type="button" data-dismiss="modal"><span>بازگشت</span></button>
                                   

								</div><!-- .product-info -->
							</div><!-- .modal-product -->
						</div><!-- .modal-body -->
					</div><!-- .modal-content -->
				</div><!-- .modal-dialog -->
			</div><!-- END Modal -->
		</div><!-- END QUICKVIEW PRODUCT -->
     