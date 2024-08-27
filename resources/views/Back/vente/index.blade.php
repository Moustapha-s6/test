@extends('Back.index')
@section('contenu')
 <div class="page-content-wrapper">
          <!-- start page content-->
         <div class="page-content">

          <!--start breadcrumb-->
          <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                </ol>
              </nav>
            </div>
            <div class="ms-auto">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Settings</button>
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">    <a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>  <a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">DataTable Vente</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Reference</th>
                                        <th>Montant Total</th>
                                       
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventes as $vente)
                                    <tr onclick="window.location='{{ route('vente.edit', $vente->id) }}';" style="cursor: pointer;">
                                        <td>{{ $vente->created_at->format('d-m-Y H:i') }}</td>
                                        <td>{{ $vente-> reference}}</td>
                                        <td>{{ $vente-> montant_total}}</td>
                                           <td class="text-right">
                                        
                                            <a href="javascript:;" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                              title="" data-bs-original-title="Edit info" aria-label="Edit">
                                              <ion-icon name="pencil-sharp"></ion-icon>
                                            </a>
                                                   
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                         <th>Date</th>
                                        <th>Reference</th>
                                        <th>Montant Total</th>
                                      
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
             

          </div>

@endsection
