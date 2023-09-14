<div class="card bg-primary bg-opacity-10 mb-3">
    <div class="row g-0">
        <div class="col-md-6 bg-primary">
            <% if $PrimaryImage %>
                <img src="$PrimaryImage.Fill(700,520).URL" class="img-fluid rounded-start" alt="$Title">
            <% end_if %>
        </div>
        <div class="col-md-6">
            <div class="card-body d-flex flex-column justify-content-between h-100">
                <div class="mb-3">
                    <h2 class="card-title">$Title</h2>
                    <p class="card-text"><small class="text-muted"><% if $Doors %>$Doors Door <% end_if %>$Type • Added $Created.Ago</small></p>
                    <p class="card-text">$Overview</p>
                </div>
                <% if not $Top.IsEnquiry && $Top.DisplayForm %>
                    <p class="mb-0"><a href="$EnquiryLink" class="btn btn-primary" style="float:none">Check Availability</a></p>
                <% end_if %>
            </div>
        </div>
    </div>
</div>