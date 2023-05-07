@extends('layouts.home')

@section('title', 'F.A.Q | D3-Ecommerce')

@section('content')
<style>
.color-hover:hover {
border-color: #263238 !important;
background-color: #ECEFF1 ;
}

.color-hover:hover h4 {
color: #263238 !important;
}

.color-hover:hover i {
color: #263238 !important;
}



.zoom:hover a {
transform: scale(1.4);
}
.zoom:hover {
border-color: red !important;
z-index: 1;
}
.muted-hover:hover span {
color: white
}
</style>
<section class="my-5">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="border border-secondary rounded-3 text-center color-hover">
                <div class="py-3">
                    <div>
                        <i class="fas fa-briefcase fa-3x mb-3"></i>
                    </div>
                    <h4 class="mb-0">Work</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="border border-secondary rounded-3 text-center color-hover">
                <div class="py-3">
                    <div>
                        <i class="fas fa-heart fa-3x mb-3"></i>
                    </div>
                    <h4 class="mb-0">Health</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="border border-secondary rounded-3 text-center color-hover">
                <div class="py-3">
                    <div>
                        <i class="fas fa-mountain fa-3x mb-3"></i>
                    </div>
                    <h4 class="mb-0">Vacation</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="border border-secondary rounded-3 text-center color-hover">
                <div class="py-3">
                    <div>
                        <i class="fas fa-gift fa-3x mb-3"></i>
                    </div>
                    <h4 class="mb-0">Gift</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="border border-secondary rounded-3 text-center color-hover">
                <div class="py-3">
                    <div>
                        <i class="fas fa-calendar-alt fa-3x mb-3"></i>
                    </div>
                    <h4 class="mb-0">Meeting</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="border border-secondary rounded-3 text-center color-hover">
                <div class="py-3">
                    <div>
                        <i class="fas fa-lightbulb fa-3x mb-3"></i>
                    </div>
                    <h4 class="mb-0">Ideas</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="border border-secondary rounded-3 text-center color-hover">
                <div class="py-3">
                    <div>
                        <i class="fas fa-cookie fa-3x mb-3"></i>
                    </div>
                    <h4 class="mb-0">Cooking</h4>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-4">
            <div class="border border-secondary rounded-3 text-center color-hover">
                <div class="py-3">
                    <div>
                        <i class="fas fa-file-invoice-dollar fa-3x mb-3"></i>
                    </div>
                    <h4 class="mb-0">Payment</h4>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="my-5">
<style>
    .zoom:hover a {
        transform: scale(1.4);
    }
    .zoom:hover {
        border-color: red !important;
        z-index: 1;
    }
    .muted-hover:hover span {
        /* color: white */
    }
</style>
<div class="container d-flex justify-content-center">
    <div class="text-center my-5" style="width: 600px">
        <div class="bg-dark text-white px-2 px-sm-4 py-5 w-100">
            <div class="mx-5">
                <h3 class="pb-4"> Helpful Articles</h3>
                <div class="my-4">
                    <div class="d-flex justify-content-evenly flex-column flex-sm-row">
                        <div class="d-flex justify-content-center mb-2 mb-sm-0">
                        <span class="pb-1 border-bottom border-danger">Most popular</span>
                        </div>
                        <div class="muted-hover pb-1" style="color: #a9a9a9">
                            <span>Most recent</span>
                        </div>
                    </div>
                </div>
                <ul class="list-unstyled">
                    <li class="link list-group-item py-4 zoom border-bottom border-top border-white" style="top:   px"><a class="d-flex justify-content-center" href="#" style=" color: #b00808"><span>Article #1</span></a></li>
                    <li class="link list-group-item py-4 zoom border-bottom border-top border-white" style="top: -1px"><a class="d-flex justify-content-center" href="#" style=" color: #b00808"><span>Article #2</span></a></li>
                    <li class="link list-group-item py-4 zoom border-bottom border-top border-white" style="top: -2px"><a class="d-flex justify-content-center" href="#" style=" color: #b00808"><span>Article #3</span></a></li>
                    <li class="link list-group-item py-4 zoom border-bottom border-top border-white" style="top: -3px"><a class="d-flex justify-content-center" href="#" style=" color: #b00808"><span>Article #4</span></a></li>
                    </ul>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
