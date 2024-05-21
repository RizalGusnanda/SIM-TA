

@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header" style="border-radius: 0px 0px 10px 10px;">
            <h1 class="text-head-sim">Informasi Dosen</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12" id="alertContainer">
                    @include('layouts.alert')
                </div>
            </div>

        </div>
    </section>
@endsection
@push('customStyle')
    
@endpush
@push('customScript')
@endpush
