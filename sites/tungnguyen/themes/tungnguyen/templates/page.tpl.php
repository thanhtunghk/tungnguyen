<!--header start-->
<header class="head-section">
	<div class="navbar navbar-default navbar-static-top container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-target=".navbar-collapse"
				data-toggle="collapse" type="button">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">Blog's <span>TungNguyen</span>
			</a>
		</div>

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown"><a class="dropdown-toggle"
					data-close-others="false" data-delay="0" data-hover="dropdown"
					data-toggle="dropdown" href="index.html">Home <i
						class="fa fa-angle-down"></i>
				</a>

					<ul class="dropdown-menu">
						<li><a href="index.html">Home Parallax</a>
						</li>

						<li><a href="index1.html">Home Seq-slider1</a>
						</li>

						<li><a href="index2.html">Home Seq-slider2</a>
						</li>

					</ul>
				</li>

				<li class="dropdown"><a class="dropdown-toggle"
					data-close-others="false" data-delay="0" data-hover="dropdown"
					data-toggle="dropdown" href="#">Feature <i class="fa fa-angle-down"></i>
				</a>

					<ul class="dropdown-menu">
						<li><a href="typography.html">Typography</a>
						</li>

						<li><a href="button.html">Buttons</a>
						</li>

						<li><a href="form.html">Form</a>
						</li>

						<li><a href="table.html">Table</a>
						</li>

						<li class="dropdown-submenu"><a href="#" tabindex="-1">More
								options</a>

							<ul class="dropdown-menu">
								<li><a href="#" tabindex="-1">Second level</a>
								</li>

								<li class="dropdown-submenu"><a href="#">Even More..</a>

									<ul class="dropdown-menu">
										<li><a href="#">3rd level</a>
										</li>

										<li><a href="#">3rd level</a>
										</li>
									</ul>
								</li>

								<li><a href="#">Second level</a>
								</li>

								<li><a href="#">Second level</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="dropdown"><a class="dropdown-toggle"
					data-close-others="false" data-delay="0" data-hover="dropdown"
					data-toggle="dropdown" href="#">Pages <i class="fa fa-angle-down"></i>
				</a>

					<ul class="dropdown-menu">
						<li><a href="about.html">About</a>
						</li>

						<li><a href="404.html">404 page</a>
						</li>

						<li><a href="career.html">career</a>
						</li>

						<li><a href="login.html">Login</a>
						</li>

						<li><a href="registration.html">Registration</a>
						</li>

						<li><a href="faq.html">FAQ</a>
						</li>

						<li class="dropdown-submenu"><a href="#" tabindex="-1">Pricing
								table</a>

							<ul class="dropdown-menu">
								<li class="dropdown-submenu"></li>

								<li><a href="price-table-one.html">Pricing table one</a>
								</li>

								<li><a href="price-table-two.html">Pricing table two</a>
								</li>
							</ul>
						</li>

						<li><a href="service.html">Service</a>
						</li>

						<li><a href="terms.html">Terms & Condition</a>
						</li>

						<li><a href="privacy.html">Privacy policy</a>
						</li>
					</ul>
				</li>

				<li class="dropdown"><a class="dropdown-toggle"
					data-close-others="false" data-delay="0" data-hover="dropdown"
					data-toggle="dropdown" href="#">Portfolio <i
						class="fa fa-angle-down"></i>
				</a>

					<ul class="dropdown-menu">
						<li><a href="portfolio-3-col.html">Portfolio 3 column</a>
						</li>

						<li><a href="portfolio-4-col.html">Portfolio 4 column</a>
						</li>

						<li><a href="portfolio-single-image.html">Portfolio Single Image</a>
						</li>

						<li><a href="portfolio-single-video.html">Portfolio Single Video</a>
						</li>
					</ul>
				</li>

				<li class="dropdown"><a class="dropdown-toggle"
					data-close-others="false" data-delay="0" data-hover="dropdown"
					data-toggle="dropdown" href="#">Blog <i class="fa fa-angle-down"></i>
				</a>

					<ul class="dropdown-menu">
						<li><a href="blog.html">Blog</a>
						</li>

						<li><a href="blog-two-col.html">Blog two column</a>
						</li>

						<li><a href="blog-detail.html">Blog Single Image</a>
						</li>

						<li><a href="blog-detail-video.html">Blog single video</a>
						</li>
					</ul>
				</li>

				<li><a href="contact.html">Contact</a>
				</li>

				<li><input class="form-control search" placeholder=" Search"
					type="text"></li>
			</ul>
		</div>
	</div>
</header>
<!--header end-->

<!--breadcrumbs start-->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-4">
				<h1>Blog</h1>
			</div>
			<div class="col-lg-8 col-sm-8">
				<ol class="breadcrumb pull-right">
					<li><a href="#"> Home </a>
					</li>
					<li><a href="#"> Blog </a>
					</li>
					<li class="active">Blog</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!--breadcrumbs end-->

<!--container start-->
<div class="container">
	<div class="row">
		<!--blog start-->
		<div class="col-lg-9 ">
			<?php if ($page['content']) : ?>
				<?php print render($page['content']); ?>
			<?php endif; ?>
		</div>

		<div class="col-lg-3">
			<div class="blog-side-item">
				<div class="search-row">
					<input type="text" class="form-control" placeholder="Search here">
				</div>
				<div class="category">
					<h3>Categories</h3>
					<ul class="list-unstyled">
						<li><a href="javascript:;"> <i class="fa fa-angle-right pr-10"> </i>
								Animals
						</a>
						</li>
						<li><a href="javascript:;"> <i class="fa fa-angle-right pr-10"> </i>
								Landscape
						</a>
						</li>
						<li><a href="javascript:;"> <i class="fa fa-angle-right pr-10"> </i>
								Portait
						</a>
						</li>
						<li><a href="javascript:;"> <i class="fa fa-angle-right pr-10"> </i>
								Wild Life
						</a>
						</li>
						<li><a href="javascript:;"> <i class="fa fa-angle-right pr-10"> </i>
								Video
						</a>
						</li>
					</ul>
				</div>

				<div class="blog-post">
					<h3>Latest Blog Post</h3>
					<div class="media">
						<a class="pull-left" href="javascript:;"> <img class=" "
							src="img/blog/blog-thumb-1.jpg" alt="">
						</a>
						<div class="media-body">
							<h5 class="media-heading">
								<a href="javascript:;"> 02 May 2014 </a>
							</h5>
							<p>Donec id elit non mi porta gravida at eget metus amet int</p>
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="javascript:;"> <img class=" "
							src="img/blog/blog-thumb-2.jpg" alt="">
						</a>
						<div class="media-body">
							<h5 class="media-heading">
								<a href="javascript:;"> 02 May 2014 </a>
							</h5>
							<p>Donec id elit non mi porta gravida at eget metus amet int</p>
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="javascript:;"> <img class=" "
							src="img/blog/blog-thumb-3.jpg" alt="">
						</a>
						<div class="media-body">
							<h5 class="media-heading">
								<a href="javascript:;"> 02 May 2014 </a>
							</h5>
							<p>Donec id elit non mi porta gravida at eget metus amet int</p>
						</div>
					</div>
				</div>

				<div class="tags">
					<h3>Tags</h3>
					<ul class="tag">
						<li><a href="#"> <i class="fa fa-tags pr-5"> </i> flat
						</a>
						</li>
						<li><a href="#"> <i class="fa fa-tags pr-5"> </i> clean
						</a>
						</li>
						<li><a href="#"> <i class="fa fa-tags pr-5"> </i> admin
						</a>
						</li>
						<li><a href="#"> <i class="fa fa-tags pr-5"> </i> UI
						</a>
						</li>
						<li><a href="#"> <i class="fa fa-tags pr-5"> </i> responsive
						</a>
						</li>
						<li><a href="#"> <i class="fa fa-tags pr-5"> </i> Web Design
						</a>
						</li>
						<li><a href="#"> <i class="fa fa-tags pr-5"> </i> UIX
						</a>
						</li>
						<li><a href="#"> <i class="fa fa-tags pr-5"> </i> Blog
						</a>
						</li>
						<li><a href="#"> <i class="fa fa-tags pr-5"> </i> flat Admin
						</a>
						</li>
						<li><a href="#"> <i class="fa fa-tags pr-5"> </i> Dashboard
						</a>
						</li>
					</ul>
				</div>


				<div class="archive">
					<h3>Archive</h3>
					<ul class="list-unstyled">
						<li><a href="javascript:;"> <i
								class="fa fa-angle-double-right pr-10"> </i> May 2014
						</a>
						</li>
						<li><a href="javascript:;"> <i
								class="fa fa-angle-double-right pr-10"> </i> April 2014
						</a>
						</li>
						<li><a href="javascript:;"> <i
								class="fa fa-angle-double-right pr-10"> </i> March 2014
						</a>
						</li>
						<li><a href="javascript:;"> <i
								class="fa fa-angle-double-right pr-10"> </i> February 2014
						</a>
						</li>
						<li><a href="javascript:;"> <i
								class="fa fa-angle-double-right pr-10"> </i> January 2014
						</a>
						</li>
					</ul>
				</div>


			</div>
		</div>

		<!--blog end-->
	</div>

</div>
<!--container end-->

<!--footer start-->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-3 address wow fadeInUp"
				data-wow-duration="2s" data-wow-delay=".1s">
				<h1>contact info</h1>
				<address>
					<p>
						<i class="fa fa-home pr-10"> </i> Address: No.XXXXXX street
					</p>
					<p>
						<i class="fa fa-globe pr-10"> </i> Mars city, Country
					</p>
					<p>
						<i class="fa fa-mobile pr-10"> </i> Mobile : (123) 456-7890
					</p>
					<p>
						<i class="fa fa-phone pr-10"> </i> Phone : (123) 456-7890
					</p>
					<p>
						<i class="fa fa-envelope pr-10"> </i> Email : <a
							href="javascript:;"> support@example.com </a>
					</p>
				</address>
			</div>
			<div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s"
				data-wow-delay=".3s">
				<h1>latest tweet</h1>
				<div id="owl-slide">
					<div class="tweet-box">
						<i class="fa fa-twitter"> </i> <em> Please follow <a
							href="javascript:;"> @example </a> for all future updates of us!
							<a href="javascript:;"> twitter.com/acme </a>
						</em>
					</div>
					<div class="tweet-box">
						<i class="fa fa-twitter"> </i> <em> Please follow <a
							href="javascript:;"> @example </a> for all future updates of us!
							<a href="javascript:;"> twitter.com/acme </a>
						</em>
					</div>
					<div class="tweet-box">
						<i class="fa fa-twitter"> </i> <em> Please follow <a
							href="javascript:;"> @example </a> for all future updates of us!
							<a href="javascript:;"> twitter.com/acme </a>
						</em>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-3">
				<div class="page-footer wow fadeInUp" data-wow-duration="2s"
					data-wow-delay=".5s">
					<h1>Our Company</h1>
					<ul class="page-footer-list">

						<li><i class="fa fa-angle-right"> </i> <a href="about.html"> About
								Us </a>
						</li>
						<li><i class="fa fa-angle-right"> </i> <a href="faq.html"> Support
						</a>
						</li>
						<li><i class="fa fa-angle-right"> </i> <a href="service.html">
								Service </a>
						</li>
						<li><i class="fa fa-angle-right"> </i> <a
							href="privacy-policy.html"> Privacy Policy </a>
						</li>
						<li><i class="fa fa-angle-right"> </i> <a href="career.html"> We
								are Hiring </a>
						</li>
						<li><i class="fa fa-angle-right"> </i> <a href="terms.html"> Term
								& condition </a>
						</li>

					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-3">

				<div class="text-footer wow fadeInUp" data-wow-duration="2s"
					data-wow-delay=".7s">
					<h1>Text Widget</h1>
					<p>This is a text widget.Lorem ipsum dolor sit amet. This is a text
						widget.Lorem ipsum dolor sit amet</p>
				</div>
			</div>

		</div>

	</div>
</footer>
<!-- footer end -->
<!--small footer start -->
<footer class="footer-small">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6 pull-right">
				<ul class="social-link-footer list-unstyled">
					<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a
						href="#"><i class="fa fa-facebook"></i> </a></li>
					<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a
						href="#"><i class="fa fa-google-plus"></i> </a></li>
					<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a
						href="#"><i class="fa fa-dribbble"></i> </a></li>
					<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a
						href="#"><i class="fa fa-linkedin"></i> </a></li>
					<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a
						href="#"><i class="fa fa-twitter"></i> </a></li>
					<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a
						href="#"><i class="fa fa-skype"></i> </a></li>
					<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a
						href="#"><i class="fa fa-github"></i> </a></li>
					<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a
						href="#"><i class="fa fa-youtube"></i> </a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="copyright">
					<p>&copy; Copyright - Acme Theme by cosmic.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--small footer end-->
