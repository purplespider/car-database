<div id="main-content" tabindex="-1" class="container mt-5">
	<div class="row justify-content-center">
		<article class="col-md-8">
			<% if $Vehicle %>

				<% with $Vehicle %>
					<% include PurpleSpider/CarDatabase/VehicleCard IsEnquiry=$Top.IsEnquiry, DisplayForm=$Top.DisplayForm %>
				<% end_with %>
					
				<div class="card bg-primary bg-opacity-10 mb-3 mt-5" style="max-width: 30rem; margin:auto">
					<div class="card-body">
						<h2>Enquiry Form</h2>
						$EnquiryForm
					</div>
				</div>
			<% end_if %>

		</article>
	</div>
</div>