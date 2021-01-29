{{-- Call project modals --}}
@include('modals.kent-techie')
@include('modals.marvin-sport-shoe')
@include('modals.coreho')

<div class="row mb-3">
    <div class="col-md-4">
        <div class="card box-shadow">
            <img class="card-img-top project_img_v2-01" src="/images/project_img/retro2.png"
                alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <button  type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#kent-techie">View Details</button>
                    <small class="d-inline-block mb-2 text-success">Complete!</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card box-shadow">
            <img class="card-img-top project_img_v2-02" src="/images/project_img/sport_shoes.jpg" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <button  type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#marvin_sport_shoe">View Details</button>
                    <small class="d-inline-block mb-2 text-danger">W.I.P</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card box-shadow">
            <img class="card-img-top project_img_v2-03" src="/images/project_img/coreho.jpg" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <button  type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#coreho">View Details</button>
                    <small class="d-inline-block mb-2 text-danger">W.I.P</small>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card box-shadow">
            <img class="card-img-top project_img_v2-04" src="/images/sample_img/200x200.png"
                alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- <button type="button" class="btn btn-sm btn-outline-primary">View Details</button> --}}
                    <small class="d-inline-block mb-2 text-secondary">There's no project to view.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card box-shadow">
            <img class="card-img-top project_img_v2-05" src="/images/sample_img/200x200.png" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- <button type="button" class="btn btn-sm btn-outline-primary">View Details</button> --}}
                    <small class="d-inline-block mb-2 text-secondary">There's no project to view.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card box-shadow">
            <img class="card-img-top project_img_v2-06" src="/images/sample_img/200x200.png" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- <button type="button" class="btn btn-sm btn-outline-primary">View Details</button> --}}
                    <small class="d-inline-block mb-2 text-secondary">There's no project to view.</small>
                </div>
            </div>
        </div>
    </div>
</div>