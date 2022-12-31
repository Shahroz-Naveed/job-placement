@extends('layout.main')
@section('main-section')
@push('title')
<title>Acedemic-Details</title>
<h1 class="text-center">
    <u>Academic Detail</u>
</h1>
<hr>
    <div class="container">
        <form class="form-group" action="" method="">
            @csrf
        <div class="row">
            <h4>Haifz-ul-Quran Course Detail</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
              <input type="number" name = "hifz-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
              <input type="text" name = "hifz-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
              <input type="date" name = "hifz-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
        {{-- Jamia-Details --}}
        <h4 class = "container mt-3">Aalim Course Detail</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
              <input type="number" name = "jamia-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
              <input type="text" name = "jamia-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
              <input type="date" name = "jamia-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
        {{-- Takhasus Specialization Details --}}
        <h4 class = "container mt-3">Takhasus/Specialization Detail</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
              <input type="number" name = "special-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
              <input type="text" name = "special-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
              <input type="date" name = "special-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
        
            <div class="container mt-3">
                <button class="btn btn-success">Previous</button>
                <button class="btn btn-success">Next</button>
            </div>

        </div>
        </div>
@endsection