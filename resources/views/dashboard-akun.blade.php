@extends('layouts.main')

@section('container')
<div class="container-fluid py-4">
    <div class="px-3 my-4">
      <h2 class="text-white">hola Pratama</h2>
      <h6 class="text-white" style="width: 60%">
        This is your profile page. You can see the progress you’ve made with
        your work and manage your projects or assigned tasks
      </h6>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="card shadow-lg">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0 text-md font-weight-bolder text-uppercase">
                Edit Profile
              </p>
              <button
                class="btn btn-sm ms-auto text-white"
                style="background-color: #2196f3"
              >
                Save
              </button>
            </div>
          </div>
          <div class="card-body">
            <p class="text-sm font-weight-bolder">User Information</p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label"
                    >Username</label
                  >
                  <input
                    class="form-control"
                    type="text"
                    value="Pratama"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label"
                    >Email address</label
                  >
                  <input
                    class="form-control"
                    type="email"
                    value="wijayapratama@gmail.com"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label"
                    >First name</label
                  >
                  <input class="form-control" type="text" value="Wijaya" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label"
                    >Last name</label
                  >
                  <input class="form-control" type="text" value="Pratama" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile shadow-lg">
          <img
            src="../assets/img/bg-profile.png"
            alt="Image placeholder"
            class="card-img-top"
          />
          <div class="row justify-content-center">
            <div class="col-4 col-lg-4 order-lg-2">
              <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                <a href="javascript:;">
                  <img
                    src="../assets/img/rama.png"
                    class="rounded-circle img-fluid border border-2 border-white"
                  />
                </a>
              </div>
            </div>
          </div>
          <div
            class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3"
          ></div>
          <div class="card-body pt-0">
            <div class="text-center">
              <h5>Wijaya Pratama</h5>
                <p class="text-muted">wijayapratama@gmail.com</p>
              <div class="h6 font-weight-300">
                <i class="ni location_pin mr-2"></i>Owner
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
