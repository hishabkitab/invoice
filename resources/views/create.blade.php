@extends('invoice::layouts.master')

@push('style')

@endpush

@push('css')
	{!!  Html::style('css/pages/contacts.css') !!}
@endpush

@push('appMenus')
	<a href="" id="contactContentHide" class="burger-menu d-none"><i data-feather="arrow-left"></i></a>
@endpush

@section('content')
	<div class="contact-wrapper">
	@include('invoice::layouts.navleft')
	<!-- contact-navleft -->
	
	@include('invoice::layouts.sidebar')
	<!-- contact-sidebar -->
		
		<div class="contact-content">
			<div class="contact-content-header">
				<nav class="nav">
					<a href="#contactInformation" class="nav-link active" data-toggle="tab">Contact
						Info<span>rmation</span></a>
					<a href="#contactLogs" class="nav-link" data-toggle="tab"><span>Call &amp; Message </span>Logs</a>
				</nav>
				<a href="" id="contactOptions" class="text-secondary mg-l-auto d-xl-none"><i
							data-feather="more-horizontal"></i></a>
			</div><!-- contact-content-header -->
			
			<div class="contact-content-body">
				<div class="tab-content">
					
					<div id="contactInformation" class="tab-pane show active pd-20 pd-xl-25">
						<div class="content tx-13">
							<div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
								<div class="row">
									<div class="col-sm-6">
										<label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Billed
											From</label>
										<h6 class="tx-15 mg-b-10">ThemePixels, Inc.</h6>
										<p class="mg-b-0">201 Something St., Something Town, YT 242, Country 6546</p>
										<p class="mg-b-0">Tel No: 324 445-4544</p>
										<p class="mg-b-0">Email: youremail@companyname.com</p>
									</div><!-- col -->
									<div class="col-sm-6 tx-right d-none d-md-block">
										<label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Invoice
											Number</label>
										<h1 class="tx-normal tx-color-04 mg-b-10 tx-spacing--2">#DF032AZ00022</h1>
									</div><!-- col -->
									<div class="col-sm-6 col-lg-8 mg-t-40 mg-sm-t-0 mg-md-t-40">
										<label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Billed
											To</label>
										<h6 class="tx-15 mg-b-10">Juan Dela Cruz</h6>
										<p class="mg-b-0">4033 Patterson Road, Staten Island, NY 10301</p>
										<p class="mg-b-0">Tel No: 324 445-4544</p>
										<p class="mg-b-0">Email: youremail@companyname.com</p>
									</div><!-- col -->
									<div class="col-sm-6 col-lg-4 mg-t-40">
										<label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Invoice
											Information</label>
										<ul class="list-unstyled lh-7">
											<li class="d-flex justify-content-between">
												<span>Invoice Number</span>
												<span>DF032AZ00022</span>
											</li>
											<li class="d-flex justify-content-between">
												<span>Product ID</span>
												<span>32334300</span>
											</li>
											<li class="d-flex justify-content-between">
												<span>Issue Date</span>
												<span>January 20, 2019</span>
											</li>
											<li class="d-flex justify-content-between">
												<span>Due Date</span>
												<span>April 21, 2019</span>
											</li>
										</ul>
									</div><!-- col -->
								</div><!-- row -->
								
								<div class="table-responsive mg-t-40">
									<table class="table table-invoice bd-b">
										<thead>
										<tr>
											<th class="wd-20p">Type</th>
											<th class="wd-40p d-none d-sm-table-cell">Description</th>
											<th class="tx-center">QNTY</th>
											<th class="tx-right">Unit Price</th>
											<th class="tx-right">Amount</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td class="tx-nowrap">Website Design</td>
											<td class="d-none d-sm-table-cell tx-color-03">Sed ut perspiciatis unde
												omnis iste natus error sit voluptatem accusantium doloremque laudantium,
												totam rem aperiam...
											</td>
											<td class="tx-center">2</td>
											<td class="tx-right">$150.00</td>
											<td class="tx-right">$300.00</td>
										</tr>
										<tr>
											<td class="tx-nowrap">Firefox Plugin</td>
											<td class="d-none d-sm-table-cell tx-color-03">At vero eos et accusamus et
												iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
												deleniti atque...
											</td>
											<td class="tx-center">1</td>
											<td class="tx-right">$1,200.00</td>
											<td class="tx-right">$1,200.00</td>
										</tr>
										<tr>
											<td class="tx-nowrap">iPhone App</td>
											<td class="d-none d-sm-table-cell tx-color-03">Et harum quidem rerum facilis
												est et expedita distinctio
											</td>
											<td class="tx-center">2</td>
											<td class="tx-right">$850.00</td>
											<td class="tx-right">$1,700.00</td>
										</tr>
										<tr>
											<td class="tx-nowrap">Android App</td>
											<td class="d-none d-sm-table-cell tx-color-03">Neque porro quisquam est, qui
												dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
												non numquam eius modi tempora incidunt ut
											</td>
											<td class="tx-center">3</td>
											<td class="tx-right">$850.00</td>
											<td class="tx-right">$2,550.00</td>
										</tr>
										</tbody>
									</table>
								</div>
								
								<div class="row justify-content-between">
									<div class="col-sm-6 col-lg-6 order-2 order-sm-0 mg-t-40 mg-sm-t-0">
										<label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Notes</label>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
											doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
											veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
									</div><!-- col -->
									<div class="col-sm-6 col-lg-4 order-1 order-sm-0">
										<ul class="list-unstyled lh-7 pd-r-10">
											<li class="d-flex justify-content-between">
												<span>Sub-Total</span>
												<span>$5,750.00</span>
											</li>
											<li class="d-flex justify-content-between">
												<span>Tax (5%)</span>
												<span>$287.50</span>
											</li>
											<li class="d-flex justify-content-between">
												<span>Discount</span>
												<span>-$50.00</span>
											</li>
											<li class="d-flex justify-content-between">
												<strong>Total Due</strong>
												<strong>$5,987.50</strong>
											</li>
										</ul>
										
										<button class="btn btn-block btn-primary">Pay Now</button>
									</div><!-- col -->
								</div><!-- row -->
							</div><!-- container -->
						</div><!-- content -->
					
					</div>
					<div id="contactLogs" class="tab-pane pd-20 pd-xl-25">
						<div class="d-flex align-items-center justify-content-between mg-b-30">
							<h6 class="tx-15 mg-b-0">Call &amp; Message Logs</h6>
							<a href="#" class="btn btn-sm btn-white d-flex align-items-center"><i
										class="icon ion-md-time mg-r-5 tx-16 lh--9"></i> Clear History</a>
						</div>
					</div><!-- tab-pane -->
				</div><!-- tab-content -->
			</div><!-- contact-content-body -->
			
			<div class="contact-content-sidebar">
				<div class="clearfix mg-b-25">
					<div id="contactAvatar" class="pos-relative float-left">
						<div class="avatar avatar-xl"><span class="avatar-initial rounded-circle bg-gray-700 tx-normal">A</span>
						</div>
						<a href="" class="contact-edit-photo" data-toggle="tooltip" title="Upload Photo"><i
									data-feather="edit-2"></i></a>
					</div>
				</div>
				<h5 id="contactName" class="tx-18 tx-xl-20 mg-b-5">Abigail Johnson</h5>
				<p class="tx-13 tx-lg-12 tx-xl-13 tx-color-03 mg-b-20">President &amp; CEO - ThemePixels, Inc.</p>
				<nav class="contact-call-nav mg-b-20">
					<a href="#" class="nav-call" data-toggle="tooltip" title="Make a Phone Call"><i
								data-feather="phone"></i></a>
					<a href="#" class="nav-video" data-toggle="tooltip" title="Make a Video Call"><i
								data-feather="video"></i></a>
					<a href="#" class="nav-msg" data-toggle="tooltip" title="Send Message"><i
								data-feather="message-square"></i></a>
				</nav><!-- contact-call-nav -->
				
				<label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Biography</label>
				<p class="tx-13 mg-b-0">Gambler, Tea Drinker, Ultimate Piggie, Replacement President of a Major Soft
					Drink Manufacturer. When I give out candies, I give people the flavour I don't like. </p>
				
				<hr class="mg-y-20">
				
				<label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-15">Options</label>
				<nav class="nav flex-column contact-content-nav mg-b-25">
					<a href="" class="nav-link"><i data-feather="share"></i> Share this Contact</a>
					<a href="" class="nav-link"><i data-feather="star"></i> Add to Favorites</a>
					<a href="" class="nav-link"><i data-feather="slash"></i> Block this Contact</a>
				</nav>
			
			</div><!-- contact-content-sidebar -->
		</div>
		<!-- contact-content -->
	
	</div><!-- contact-wrapper -->
	
	
	<div class="modal fade effect-scale" id="modalNewContact" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body pd-20 pd-sm-30">
					<button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					
					<h5 class="tx-18 tx-sm-20 mg-b-20">Create New Contact</h5>
					<p class="tx-13 tx-color-03 mg-b-30">You can add more information than what you see here, such as
						address and birthday by clicking <span class="tx-color-02">Add More Fields</span> button below
						to bring up more options.</p>
					
					<div class="d-sm-flex">
						<div class="mg-sm-r-30">
							<div class="pos-relative d-inline-block mg-b-20">
								<div class="avatar avatar-xxl"><span
											class="avatar-initial rounded-circle bg-gray-700 tx-normal"><i
												class="icon ion-md-person"></i></span></div>
								<a href="" class="contact-edit-photo"><i data-feather="edit-2"></i></a>
							</div>
						</div><!-- col -->
						<div class="flex-fill">
							<h6 class="mg-b-10">Personal Information</h6>
							<div class="form-group mg-b-10">
								<input type="text" class="form-control" placeholder="Firstname">
							</div><!-- form-group -->
							<div class="form-group mg-b-10">
								<input type="text" class="form-control" placeholder="Lastname">
							</div><!-- form-group -->
							
							<h6 class="mg-t-20 mg-b-10">Contact Information</h6>
							
							<div class="form-group mg-b-10">
								<input type="text" class="form-control" placeholder="Phone number">
							</div><!-- form-group -->
							<div class="form-group mg-b-10">
								<input type="email" class="form-control" placeholder="Email address">
							</div><!-- form-group -->
							
							<h6 class="mg-t-20 mg-b-10">Notes</h6>
							<textarea class="form-control" rows="2" placeholder="Add notes"></textarea>
						</div><!-- col -->
					</div>
				</div>
				<div class="modal-footer">
					<div class="wd-100p d-flex flex-column flex-sm-row justify-content-end">
						<div class="dropup mg-b-15 mg-sm-b-0 mg-sm-r-auto">
							<button type="button" class="btn btn-block bd bd-gray-300" data-toggle="dropdown">Add More
								Fields <i class="icon ion-ios-arrow-up mg-l-5"></i></button>
							<div class="dropdown-menu tx-13">
								<a href="" class="dropdown-item">Email</a>
								<a href="" class="dropdown-item">Phone</a>
								<a href="" class="dropdown-item">Address</a>
								<a href="" class="dropdown-item">Custom</a>
							</div><!-- dropdown-menu -->
						</div>
						<button type="button" class="btn btn-primary mg-b-5 mg-sm-b-0">Save Contact</button>
						<button type="button" class="btn btn-secondary mg-sm-l-5" data-dismiss="modal">Discard</button>
					</div>
				</div><!-- modal-footer -->
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	
	<div class="modal fade effect-scale" id="modalEditContact" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body pd-20 pd-sm-30">
					<button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					
					<h5 class="tx-18 tx-sm-20 mg-b-20">Edit Contact</h5>
					<p class="tx-13 tx-color-03 mg-b-30">You can add more information than what you see here, such as
						address and birthday by clicking <span class="tx-color-02">Add More Fields</span> button below
						to bring up more options.</p>
					
					<div class="d-sm-flex">
						<div class="mg-sm-r-30">
							<div class="pos-relative d-inline-block mg-b-20">
								<div class="avatar avatar-xxl"><span
											class="avatar-initial rounded-circle bg-gray-700 tx-normal">A</span></div>
								<a href="" class="contact-edit-photo"><i data-feather="edit-2"></i></a>
							</div>
						</div><!-- col -->
						<div class="flex-fill">
							<h6 class="mg-b-10">Personal Information</h6>
							<div class="form-group mg-b-10">
								<input type="text" class="form-control" placeholder="Firstname" value="Abigail">
							</div><!-- form-group -->
							<div class="form-group mg-b-10">
								<input type="text" class="form-control" placeholder="Lastname" value="Johnson">
							</div><!-- form-group -->
							
							<h6 class="mg-t-20 mg-b-10">Contact Information</h6>
							
							<div class="form-group mg-b-10">
								<input type="text" class="form-control" placeholder="Phone number"
								       value="+1 234 567 8910">
							</div><!-- form-group -->
							<div class="form-group mg-b-10">
								<input type="email" class="form-control" placeholder="Email address"
								       value="me@themepixels.me">
							</div><!-- form-group -->
							
							<h6 class="mg-t-20 mg-b-10">Notes</h6>
							<textarea class="form-control" rows="2" placeholder="Add notes"></textarea>
						</div><!-- col -->
					</div>
				</div>
				<div class="modal-footer">
					<div class="wd-100p d-flex flex-column flex-sm-row justify-content-end">
						<div class="dropup mg-b-15 mg-sm-b-0 mg-sm-r-auto">
							<button type="button" class="btn btn-block bd bd-gray-300" data-toggle="dropdown">Add More
								Fields <i class="icon ion-ios-arrow-up mg-l-5"></i></button>
							<div class="dropdown-menu tx-13">
								<a href="" class="dropdown-item">Email</a>
								<a href="" class="dropdown-item">Phone</a>
								<a href="" class="dropdown-item">Address</a>
								<a href="" class="dropdown-item">Custom</a>
							</div><!-- dropdown-menu -->
						</div>
						<button type="button" class="btn btn-primary mg-b-5 mg-sm-b-0">Save Changes</button>
						<button type="button" class="btn btn-secondary mg-sm-l-5" data-dismiss="modal">Cancel</button>
					</div>
				</div><!-- modal-footer -->
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	
	<div class="modal fade effect-scale" id="modalDeleteContact" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title">Delete Contact</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="mg-b-0">Do you really want to delete this contact?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary">Continue Delete</button>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('script')

@endpush

@push('js')
	<script>
        $(function () {
            window.darkMode = function () {
                $('.btn-white').addClass('btn-dark').removeClass('btn-white');
            }

            window.lightMode = function () {
                $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
            }

            /*            var hasMode = Cookies.get('df-mode');
                        if(hasMode === 'dark') {
                            darkMode();
                        } else {
                            lightMode();
                        }*/
        });
	</script>
@endpush
