@extends('layouts.app')

@section('content')
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Company</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Company</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="modal fade" id="ajaxModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalHeading"></h4>
                </div>
                <div class="modal-body">
                    <form method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data" id="companyForm">
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>

                        <input type="hidden" name="company_id" id="company_id" value="">
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="" placeholder="Enter Company Name" required>
                            <div class="valid-feedback">
                              
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Name" value="" required>
                            <div class="valid-feedback">
                              
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" name="logo" class="form-control" id="logo" value="" required>
                            <img name="logo_id" id="logo_id" width="50" height="50">
                            <div class="valid-feedback">
                              
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="website" class="form-label">Website</label>
                            <input type="text" name="website" class="form-control" id="website" placeholder="Enter Website Link" value="" required>
                            <div class="valid-feedback">
                              
                            </div>
                      </div>

                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>
@endsection