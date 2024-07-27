

@if (session('status'))



<section class="padding-top">
    <div class="container">
        <div class="row">
            <div class="latest-update col-md-12 no-padding">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            </div>

        </div>
    </div>
</section>

@endif