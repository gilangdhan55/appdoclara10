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
                        <form action="{{ route('edit.store') }}" method="POST" >
                            @csrf
                            <div class="form-group row mb-3">
                                <label class="col-sm-2 col-form-label" for="no_kartu">Phone No</label>
                                <div class="col-sm-10">
                                    <input type="text" id="no_kartu" class="form-control phone-mask"
                                        placeholder="658 799 8941" aria-label="658 799 8941"
                                        aria-describedby="no_kartu">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-2 col-form-label" for="alamat">Message</label>
                                <div class="col-sm-10">
                                    <textarea id="alamat" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"
                                        aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Basic with Icons -->

        </div>
    </div>
@endsection
