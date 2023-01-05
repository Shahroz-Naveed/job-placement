@extends('layout.main')
@section('main-section')
@push('title')
<title>Computer-Details</title>
<h1 class="text-center">
   <u>Computer</u></h1>
   <hr>
   <div class="container">
      <form class="form-group" action="{{url('/')}}/computer" method="POST">
            @csrf
          <div class="row">
               <h4>Computer-Skills</h4>
            <div class="col-md-4">
               <input type="checkbox"  name="comp-skills[]" value="MS Office Suit">
               <label for="">MS Office Suit</label><br>
               <input type="checkbox" name="comp-skills[]" value="Presentation software">
               <label for="">Presentation software</label><br>
               <input type="checkbox"  name="comp-skills[]" value="Spreadsheet">
               <label for="">Spreadsheet</label><br>
               <input type="checkbox"  name="comp-skills[]" value="Operating System">
               <label for="">Operating System</label><br>
               <input type="checkbox" name="comp-skills[]" value="Accounting Software">
               <label for="">Accounting Software</label><br>
               <input type="checkbox" name="comp-skills[]" value="Graphic Designing">
               <label for="">Graphic Designing</label>

            </div>
            <div class="container mt-12">
               <button class="btn btn-dark mb-5">Previous</button>
               <button class="btn btn-success mb-5">Next</button>
               <br>
               
           </div>
          </div>
      </form>
   </div>
   
@endsection