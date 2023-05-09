@extends('layouts.admin.app')

@section('content')
  <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <div class="col-xl">
          
          <a href="{{ route('prisonerCreate') }}" type="button" class="btn btn-md btn-primary" style="color: white;">Tambah Data</a>
          <br>
          <br>

          <div class="card">
            <h5 class="card-header">Daftar Narapidana</h5>
            <div class="card-body">
              <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Jenis Kelamin</th>
                      <th>Agama</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>5206051312950001</td>
                      <td>Jamaludin</td>
                      <td>13/12/1995</td>
                      <td>DESA MARIA KEC WAWO KAB BIMA</td>
                      <td> LAKI - LAKI</td>
                      <td>ISLAM</td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('prisonerDetail', 1) }}"
                              ><i class="bx bx-eyes me-1"></i> Detail</a
                            >
                            <a class="dropdown-item" href="{{ route('prisonerEdit', 1) }}"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>5206051312950001</td>
                      <td>Jamaludin</td>
                      <td>13/12/1995</td>
                      <td>DESA MARIA KEC WAWO KAB BIMA</td>
                      <td> LAKI - LAKI</td>
                      <td>ISLAM</td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>5206051312950001</td>
                      <td>Jamaludin</td>
                      <td>13/12/1995</td>
                      <td>DESA MARIA KEC WAWO KAB BIMA</td>
                      <td> LAKI - LAKI</td>
                      <td>ISLAM</td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>5206051312950001</td>
                      <td>Jamaludin</td>
                      <td>13/12/1995</td>
                      <td>DESA MARIA KEC WAWO KAB BIMA</td>
                      <td> LAKI - LAKI</td>
                      <td>ISLAM</td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    {{-- <tr>
                      <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                      <td>Barry Hunter</td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Lilian Fuller"
                          >
                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sophia Wilkerson"
                          >
                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Christina Parker"
                          >
                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                          </li>
                        </ul>
                      </td>
                      <td><span class="badge bg-label-success me-1">Completed</span></td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                      <td>Trevor Baker</td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Lilian Fuller"
                          >
                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sophia Wilkerson"
                          >
                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Christina Parker"
                          >
                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                          </li>
                        </ul>
                      </td>
                      <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                      </td>
                      <td>Jerry Milton</td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Lilian Fuller"
                          >
                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sophia Wilkerson"
                          >
                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Christina Parker"
                          >
                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                          </li>
                        </ul>
                      </td>
                      <td><span class="badge bg-label-warning me-1">Pending</span></td>
                      <td>
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                              ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr> --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection