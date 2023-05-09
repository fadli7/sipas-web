@extends('layouts.admin.app')

@section('content')
  <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Basic Layout</h5>
              {{-- <small class="text-muted float-end">Default label</small> --}}
            </div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">NIK</label>
                  <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Nama</label>
                  <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="basic-default-fullname" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Alamat</label>
                  <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Jenis Kelamin</label>
                  <select id="defaultSelect" class="form-select">
                    <option disabled selected>--- Silahkan di pilih ---</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Agama</label>
                  <select id="defaultSelect" class="form-select">
                    <option disabled selected>--- Silahkan di pilih ---</option>
                    <option value="1">Islam</option>
                    <option value="2">Kristen</option>
                    <option value="2">Katholik</option>
                    <option value="2">Budha</option>
                    <option value="2">Hindu</option>
                  </select>
                </div>

                {{-- <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Company</label>
                  <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-email">Email</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      id="basic-default-email"
                      class="form-control"
                      placeholder="john.doe"
                      aria-label="john.doe"
                      aria-describedby="basic-default-email2"
                    />
                    <span class="input-group-text" id="basic-default-email2">@example.com</span>
                  </div>
                  <div class="form-text">You can use letters, numbers & periods</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-phone">Phone No</label>
                  <input
                    type="text"
                    id="basic-default-phone"
                    class="form-control phone-mask"
                    placeholder="658 799 8941"
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-message">Message</label>
                  <textarea
                    id="basic-default-message"
                    class="form-control"
                    placeholder="Hi, Do you have a moment to talk Joe?"
                  ></textarea>
                </div> --}}
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection