<div class="contact-sidebar">
	<div class="contact-sidebar-header">
		<i data-feather="search"></i>
		<div class="search-form">
			<input type="search" class="form-control" placeholder="Search contacts">
		</div>
		<a href="#modalNewContact" class="btn btn-xs btn-icon btn-primary" data-toggle="modal">
			<span data-toggle="tooltip" title="Add New Contact"><i data-feather="user-plus"></i></span>
		</a><!-- contact-add -->
	</div><!-- contact-sidebar-header -->
	<div class="contact-sidebar-body">
		<div class="tab-content">
			<div id="tabContact" class="tab-pane fade active show">
				<div class="pd-y-20 pd-x-10 contact-list">
					@foreach(['A', 'B','D','E'] as $letter)
						<label id="contact{{ $letter }}" class="contact-list-divider">{{ $letter }}</label>
						@for($i=1; $i<=25; $i++)
							<div class="media">
								<div class="avatar avatar-sm avatar-online"><span
											class="avatar-initial rounded-circle bg-indigo">{{ $letter }}</span></div>
								<div class="media-body mg-l-10">
									<h6 class="tx-16 mg-b-3 font-weight-bold">Invoice{{ (23000+$i) }}
										<span
												class="d-inline-block badge text-white float-right badge-success">Paid</span>
									</h6>
									<span class="tx-14">Date: {{ date('M, Y') }}</span>
								</div><!-- media-body -->
								<nav>
									<a href=""><i data-feather="star"></i></a>
									<a href=""><i data-feather="edit-2"></i></a>
								</nav>
							</div><!-- media -->
						@endfor
					@endforeach
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><span
									class="avatar-initial rounded-circle bg-indigo">B</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-16 mg-b-3 font-weight-bold">Invoice002300<span
										class="d-inline-block float-right text-success">2306656</span></h6>
							<span class="tx-14">Date: 12/02/2012</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<label id="contactB" class="contact-list-divider">B</label>
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500"
						                                                 class="rounded-circle" alt=""></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Brenda Aceron</h6>
							<span class="tx-12">brenda@aceron.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><span
									class="avatar-initial rounded-circle bg-indigo">B</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Brandibelle Yap</h6>
							<span class="tx-12">byap@urmail.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><span
									class="avatar-initial rounded-circle bg-gray-800">B</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Brejette Bunggay</h6>
							<span class="tx-12">+1-234-567-890</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<label id="contactC" class="contact-list-divider">C</label>
					
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500"
						                                                 class="rounded-circle" alt=""></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Camille Audrey</h6>
							<span class="tx-12">+1-234-567-890</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500"
						                                                 class="rounded-circle" alt=""></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Christine Lerio</h6>
							<span class="tx-12">+1-234-567-890</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					
					<label id="contactD" class="contact-list-divider">D</label>
					
					<div class="media">
						<div class="avatar avatar-sm avatar-offline"><span
									class="avatar-initial rounded-circle bg-primary">D</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Daniel Calinawan</h6>
							<span class="tx-12">daniel@youremail.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					
					<label id="contactE" class="contact-list-divider">E</label>
					
					<div class="media">
						<div class="avatar avatar-sm avatar-offline"><span
									class="avatar-initial rounded-circle bg-success">E</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
							<span class="tx-12">+63929-123-4567</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><span
									class="avatar-initial rounded-circle bg-gray-700">E</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Elena Salubre</h6>
							<span class="tx-12">e.salubre@myemail.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
				</div><!-- contact-list -->
			</div><!-- tab-pane -->
			<div id="tabPhoneCall" class="tab-pane fade">
				<div class="pd-y-20 pd-x-10 contact-list">
					<label class="contact-list-divider">Recently Contacted</label>
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500"
						                                                 class="rounded-circle" alt=""></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Camille Audrey</h6>
							<span class="tx-12">+1-234-567-890</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-offline"><span
									class="avatar-initial rounded-circle bg-success">E</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
							<span class="tx-12">+63929-123-4567</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
				</div><!-- contact-list -->
			</div><!-- tab-pane -->
			<div id="tabFavorites" class="tab-pane fade">
				<div class="pd-y-20 pd-x-10 contact-list">
					<label class="contact-list-divider">My Favorites</label>
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500"
						                                                 class="rounded-circle" alt=""></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Archie Cantones</h6>
							<span class="tx-12">archie@cantones.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500"
						                                                 class="rounded-circle" alt=""></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Brenda Aceron</h6>
							<span class="tx-12">brenda@aceron.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><span
									class="avatar-initial rounded-circle bg-indigo">B</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Brandibelle Yap</h6>
							<span class="tx-12">byap@urmail.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500"
						                                                 class="rounded-circle" alt=""></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Camille Audrey</h6>
							<span class="tx-12">+1-234-567-890</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-offline"><span
									class="avatar-initial rounded-circle bg-success">E</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
							<span class="tx-12">+63929-123-4567</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
				</div><!-- contact-list -->
			</div><!-- tab-pane -->
			<div id="tabTags" class="tab-pane fade">
				<div class="pd-y-20 pd-x-10 contact-list">
					<label class="contact-list-divider">My Family</label>
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><span
									class="avatar-initial rounded-circle bg-gray-700">A</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Abigail Johnson</h6>
							<span class="tx-12">+1-234-567-890</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500"
						                                                 class="rounded-circle" alt=""></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Archie Cantones</h6>
							<span class="tx-12">archie@cantones.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<label class="contact-list-divider">My Friends</label>
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><span
									class="avatar-initial rounded-circle bg-primary">a</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Allan Rey Palban</h6>
							<span class="tx-12">allanr@palban.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-offline"><span
									class="avatar-initial rounded-circle bg-primary">D</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Daniel Calinawan</h6>
							<span class="tx-12">daniel@youremail.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<div class="media">
						<div class="avatar avatar-sm avatar-offline"><span
									class="avatar-initial rounded-circle bg-success">E</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
							<span class="tx-12">+63929-123-4567</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
					<label class="contact-list-divider">My Officemates</label>
					<div class="media">
						<div class="avatar avatar-sm avatar-online"><span
									class="avatar-initial rounded-circle bg-gray-700">E</span></div>
						<div class="media-body mg-l-10">
							<h6 class="tx-13 mg-b-3">Elena Salubre</h6>
							<span class="tx-12">e.salubre@myemail.com</span>
						</div><!-- media-body -->
						<nav>
							<a href=""><i data-feather="star"></i></a>
							<a href=""><i data-feather="edit-2"></i></a>
						</nav>
					</div><!-- media -->
				</div><!-- contact-list -->
			</div><!-- tab-pane -->
			<div id="tabExport" class="tab-pane fade">
				<div class="pd-y-25 pd-x-20">
					<h6 class="tx-12 tx-semibold tx-spacing-1 tx-uppercase">Export Contacts</h6>
					<p class="tx-13 tx-color-03 mg-b-20">You can export your contacts and import them into other email
						apps.</p>
					<div class="form-group">
						<label class="tx-13">Which contacts do you want to export?</label>
						<select class="custom-select tx-13">
							<option value="1" selected>All Contacts</option>
							<option value="2">My Favorites</option>
							<option value="3">My Family</option>
							<option value="4">My Friends</option>
							<option value="4">My Officemates</option>
						</select>
					</div><!-- form-group -->
					<button class="btn btn-sm btn-primary">Export</button>
				</div>
			</div><!-- tab-pane -->
		</div><!-- tab-content -->
	</div><!-- contact-sidebar-body -->
</div>

