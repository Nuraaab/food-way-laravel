<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-shopping-cart fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Order</p>
                    <h6 class="mb-0">{{$order}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-users fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total User</p>
                    <h6 class="mb-0">{{$user}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-folder fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Category</p>
                    <h6 class="mb-0">{{$category}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-comments fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Comments</p>
                    <h6 class="mb-0">{{$comments}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>