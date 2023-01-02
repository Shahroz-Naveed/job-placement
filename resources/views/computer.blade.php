@extends('layout.main')
@section('main-section')
@push('title')
<title>Computer-Details</title>
<h1 class="text-center">
   <u>Computer</u></h1>
   <hr>
   <div class="container">
      <form class="form-group" action="" method="">
            @csrf
          <div class="row">
               <h4>Computer-Skills</h4>
            <div class="col-md-4">
               <input type="checkbox"  name="comp1" value="">
               <label for="">MS Office Suit</label><br>
               <input type="checkbox" name="comp2" value="">
               <label for="">Presentation software</label><br>
               <input type="checkbox"  name="comp3" value="">
               <label for="">Spreadsheet</label><br>
               <input type="checkbox"  name="comp4" value="">
               <label for="">Operating System</label><br>
               <input type="checkbox" name="comp5" value="">
               <label for="">Accounting Software</label><br>
               <input type="checkbox" name="comp6" value="">
               <label for="">Graphic Designing</label>
            </div>
            <div class="container mt-12">
               <button class="btn btn-dark mb-5">Previous</button>
               <button class="btn btn-success mb-5">Next</button>
           </div>
          </div>
      </form>
   </div>
   
@endsection