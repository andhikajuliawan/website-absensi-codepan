@extends('layouts.main')

@section('container')
<div class="container-fluid py-4">
    <div class="row mx-3 bg-white px-2 py-4" style="border-radius: 10px">
      <div class="col">
        <p class="fw-bold fs-4 text-dark">List Karyawan</p>
      </div>
      <div class="col text-end">
        <a href="/DBlistadd"
          ><button
            type="button"
            class="btn btn-primary"
            style="background-color: #2196f3"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-plus-lg"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"
              />
            </svg>
            Add
          </button></a
        >
      </div>
      <div class="table-responsive">
        <table class="table px-3">
          <thead class="fs-6">
            <tr>
              <th scope="col" class="text-sm font-weight-bolder">
                Employess
              </th>
              <th
                scope="col"
                class="text-center text-sm font-weight-bolder"
              >
                Position
              </th>
              <th
                scope="col"
                class="text-center text-sm font-weight-bolder"
              >
                Action
              </th>
            </tr>
          </thead>
          <tbody class="table align-middle">
            <tr>
              <th scope="row" style="width: 50%">
                <div class="row">
                  <div class="d-flex">
                    <div>
                      <img
                        src="../assets/img/team-3.jpg"
                        alt="picture-img"
                        class="avatar avatar-sm me-3"
                      />
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">John Michael</h6>
                      <p class="text-xs text-secondary mb-0">
                        john@creative-tim.com
                      </p>
                    </div>
                  </div>
                </div>
              </th>
              <td class="text-center">
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Owner</h6>
                  <p class="text-xs text-secondary mb-0">Organizer</p>
                </div>
              </td>
              <td class="text-center text-sm">
                <div class="col">
                    <a href="/DBlistedit" class="text-center text-sm" >Edit</a>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row" style="width: 50%">
                <div class="row">
                  <div class="d-flex">
                    <div>
                      <img
                        src="../assets/img/team-3.jpg"
                        alt="picture-img"
                        class="avatar avatar-sm me-3"
                      />
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">John Michael</h6>
                      <p class="text-xs text-secondary mb-0">
                        john@creative-tim.com
                      </p>
                    </div>
                  </div>
                </div>
              </th>
              <td class="text-center">
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Owner</h6>
                  <p class="text-xs text-secondary mb-0">Organizer</p>
                </div>
              </td>
              <td class="text-center text-sm">
                <div class="col">
                    <a href="/DBlistedit" class="text-center text-sm" >Edit</a>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row" style="width: 50%">
                <div class="row">
                  <div class="d-flex">
                    <div>
                      <img
                        src="../assets/img/team-3.jpg"
                        alt="picture-img"
                        class="avatar avatar-sm me-3"
                      />
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">John Michael</h6>
                      <p class="text-xs text-secondary mb-0">
                        john@creative-tim.com
                      </p>
                    </div>
                  </div>
                </div>
              </th>
              <td class="text-center">
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Owner</h6>
                  <p class="text-xs text-secondary mb-0">Organizer</p>
                </div>
              </td>
              <td class="text-center text-sm">
                <div class="col">
                    <a href="/DBlistedit" class="text-center text-sm" >Edit</a>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row" style="width: 50%">
                <div class="row">
                  <div class="d-flex">
                    <div>
                      <img
                        src="../assets/img/team-3.jpg"
                        alt="picture-img"
                        class="avatar avatar-sm me-3"
                      />
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">John Michael</h6>
                      <p class="text-xs text-secondary mb-0">
                        john@creative-tim.com
                      </p>
                    </div>
                  </div>
                </div>
              </th>
              <td class="text-center">
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Owner</h6>
                  <p class="text-xs text-secondary mb-0">Organizer</p>
                </div>
              </td>
              <td class="text-center text-sm">
                <div class="col">
                    <a href="/DBlistedit" class="text-center text-sm" >Edit</a>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row" style="width: 50%">
                <div class="row">
                  <div class="d-flex">
                    <div>
                      <img
                        src="{{'assets/img/team-3.jpg'}}"
                        alt="picture-img"
                        class="avatar avatar-sm me-3"
                      />
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">John Michael</h6>
                      <p class="text-xs text-secondary mb-0">
                        john@creative-tim.com
                      </p>
                    </div>
                  </div>
                </div>
              </th>
              <td class="text-center">
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Owner</h6>
                  <p class="text-xs text-secondary mb-0">Organizer</p>
                </div>
              </td>
              <td class="text-center text-sm">
                <div class="col">
                    <a href="/DBlistedit" class="text-center text-sm" >Edit</a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
