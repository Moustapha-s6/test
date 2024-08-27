@extends('Back.index')
@section('contenu')
<div class="page-content-wrapper">
          <!-- start page content-->
         <div class="page-content">

             <!--start breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Forms</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Validations</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-outline-primary">Settings</button>
                  <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">   <span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">  <a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>    <a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->


            <div class="row">
              <div class="col-xl-12 mx-auto">
                <h6 class="mb-0 text-uppercase">Formulaire de vente</h6>
                <hr/>
                <div class="card">
                  <div class="card-body">
                    <div class="p-4 border rounded">
                         @if(session()->has('message'))
                        <div class="alert alert-icon alert-success">
                            <em class="icon ni ni-alert-circle"></em>
                                {{session('message')}}
                            </div>
                                @endif
                                @if($errors->any())
                                @foreach ($errors->all() as $error)
                            <div class="alert alert-icon alert-danger">
                                <em class="icon ni ni-alert-circle"></em>
                                {{$error}}
                            </div>
                                @endforeach
                                @endif
                      <form action="{{route('vente.update', $vente->id)}}" method="post" enctype="multipart/form-data"  class="row g-3 needs-validation"  >
                         @csrf
                         @method('put')
                        <div class="col-md-12">
                          <label for="validationCustom01" class="form-label">Reference</label>
                          <input type="text" class="form-control" id="validationCustom01" required name="reference" value="{{$vente-> reference}}">
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-12">
                          <label for="validationCustom02" class="form-label">Article</label>
                          <input type="text" class="form-control" id="validationCustom02" required name="article" value="{{$vente-> article}}">
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-12">
                          <label for="validationCustom01" class="form-label">Prix Unitaire</label>
                          <input type="text" class="form-control" id="validationCustom01" required name="prix_unitaire" value="{{$vente-> prix_unitaire}}">
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                       
                        <div class="col-md-12">
                          <label for="validationCustom01" class="form-label">Quantite</label>
                          <input type="text" class="form-control" id="validationCustom01"required name="quantite" value="{{$vente-> quantite}}">
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary">Submit form</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <!--end row-->


          </div>
          <!-- end page content-->
         </div>


@endsection