<div class="modal-container">
		<div class="modal-login-overlay">
			<div class="modal-login" data-target="form-popup">
			
				<div class="modal-content">
					
					<div class="modal-body">
						<div class="modal-btns">
									<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
										<ul class="list-reset list-btn">
											<li class="resp-tab-item btn-login-wrap" aria-controls="tab_item-0"><span class="btn btn-reset btn--login">Авторизация</span></li>
											<li class="resp-tab-item btn-login-wrap" aria-controls="tab_item-1"><span class="btn btn-reset btn--login">Регистрация</span></li>
										</ul>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="facts">
											
												<div class="register">
													<?php get_template_part( '/woocommerce/includes/parts/wc-form', 'login');?>
												</div>
											</div>
										</div>
										<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="facts">
											
												<div class="register">
													<?php get_template_part( '/woocommerce/includes/parts/wc-form', 'register');?>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							
							
						
					</div>
				</div>
			</div>
		</div>
</div>