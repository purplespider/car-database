
<div id="main-content" tabindex="-1" class="container mt-5">
	<div class="row justify-content-center">
		<article class="col-md-9">
			
			<% if $Message %>
				<div class="alert alert-success" role="alert">
					<p class="mb-0">$Message</p>
				</div>
			<% end_if %>
		
			<div class="typography">$Content</div>

			<% if $AvailableVehicles %>
				<% loop $AvailableVehicles %>
					<% include PurpleSpider/CarDatabase/VehicleCard IsEnquiry=$Top.IsEnquiry, DisplayForm=$Top.DisplayForm %>
				<% end_loop %>
			<% else %>
				<div class="alert alert-danger" role="alert">
					<p class="mb-0">Sorry, no vehicles are available at the moment.</p>
				</div>
			<% end_if %>
			$Form
		</article>
	</div>
</div>