@extends('layout.index')
@section('title', 'Add New Pasien')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Pasien</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        {{-- <h5 class="mb-0">Basic Layout</h5> --}}
                        {{-- <small class="text-muted float-end">Default label</small> --}}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('add.store') }}" method="POST">
                            @csrf
                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namapasien" name="namapasien"
                                        placeholder="Nama Pasien">
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="no_kartu">Nomor Kartu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"  name="no_kartu" id="no_kartu"
                                        placeholder="Nomor Kartu">
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="basic-default-email" class="form-control"
                                            placeholder="john.doe" aria-label="john.doe"
                                            aria-describedby="basic-default-email2">
                                        <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                    </div>
                                    <div class="form-text">You can use letters, numbers &amp; periods</div>
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="no_hp">Phone No</label>
                                <div class="col-sm-10">
                                    <input type="text" name="no_hp" id="no_hp" class="form-control phone-mask"
                                        placeholder="Nomor Handphone" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" id="alamat" class="form-control phone-mask"
                                        placeholder="Alamat">
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Send</button></div>
                            </div>
                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
                                <div class="col-sm-10">
                                    <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"
                                        aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                                </div>
                            </div>
                            
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
            <!-- Basic with Icons -->

        </div>
    </div>
@endsection
