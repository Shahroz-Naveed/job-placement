@extends('layout.main')
@section('main-section')
@push('title')
<title>Temporal Detail</title>
<h1 class="text-center">
    <u>Temporal Detail</u>
</h1>
<hr>
    <div class="container">
        <form class="form-group" action="" method="">
            @csrf
        <div class="row">
          {{-- Matric Details --}}
            <h4>Secondary School Education Detail(Matric/A-Level)</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "matric-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "matric-subjects" class="form-control"  value=""  placeholder="Percentage..."required >
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "matric-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4 mt-4">
                    <label for="">Name Of Board/University</label>
                    <select name="matric-board" style="width:100px;" required >
                    <option value=""></option>
                    <option value="">Bahawalpur Board</option>
                    <option value="">D.G.Khan Board</option>
                    <option value="">Faisalabad Board</option>
                    <option value="">Gujranwala Board</option>
                    <option value="">Lahore Board</option>
                    <option value="">Multan Board</option>
                    <option value="">Rawalpindi Board</option>
                    <option value="">Sargodha Board</option>
                    <option value="">Federal Board(FBISE) </option>
                    <option value="">Other</option>
                    </select>
            </div>
            <div class="col-md-4">
                <label for="">In case of other Board/institute write name here</label>
                <input type="text" name = "matric-other-name" class="form-control"  value=""  placeholder="Other Institution Name"  required >
            </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "matric-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
            {{-- Higher Secondary school Details --}}
            <h4>Higher Seondary School Education Detail(Intermediate/O-Level)</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "higher-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "higher-subjects" class="form-control"  value=""  placeholder="Percentage..." required >
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "higher-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4 mt-4">
                <label for="">Name Of Board/University</label>
                <select name="inter-board" style="width:100px;" required >
                <option value=""></option>
                <option value="">Bahawalpur Board</option>
                <option value="">D.G.Khan Board</option>
                <option value="">Faisalabad Board</option>
                <option value="">Gujranwala Board</option>
                <option value="">Lahore Board</option>
                <option value="">Multan Board</option>
                <option value="">Rawalpindi Board</option>
                <option value="">Sargodha Board</option>
                <option value="">Federal Board(FBISE) </option>
                <option value="">Other</option>
                </select>
        </div>
        <div class="col-md-4">
            <label for="">In case of other Board/institute write name here</label>
            <input type="text" name = "inter-other-name" class="form-control"  value=""  placeholder="Other Institution Name"required>
        </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "higher-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
            {{-- Bachelor educational detail --}}
            <h4>Bachelor Education Detail(14 Year Education)</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "ba-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "ba-subjects" class="form-control"  value=""  placeholder="Percentage..."required >
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "ba-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4 mt-4">
                
                <label for="">Name Of Board/University</label>
                <select name="ba-board" style="width:100px;" required >
                <option value=""></option>
                <option value="">Bahawalpur Board</option>
                <option value="">D.G.Khan Board</option>
                <option value="">Faisalabad Board</option>
                <option value="">Gujranwala Board</option>
                <option value="">Lahore Board</option>
                <option value="">Multan Board</option>
                <option value="">Rawalpindi Board</option>
                <option value="">Sargodha Board</option>
                <option value="">Federal Board(FBISE) </option>
                <option value="">NUST ISLAMABAD</option>
                <option value="">Quaid-i-Azam University ISLAMABAD</option>
                <option value=""> Pakistan Institute of Engineering and Applied Sciences	ISLAMABAD</option>
                <option value=""> Allama Iqbal Open University</option>
                <option value=""> Riphah International University</option>
                <option value=""> COMSATS University</option>
                <option value=""> National University of Computer and Emerging Sciences</option>
                <option value="">University of Balochistan	</option>
                <option value="">National University of Technology ISLAMABAD</option>
                <option value="">Lasbela University of Agriculture, Water and Marine Sciences	 </option>
                <option value=""> University of Engineering and Technology, Peshawar</option>
                <option value=""> Government College University, Lahore </option>
                <option value=""> Government College University, Faisalabad</option>
                <option value=""> University of the Punjab</option>
                <option value="">University of Engineering and Technology, Lahore</option>
                <option value="">National Textile University , Faisalabad </option>
                <option value="">Shah Abdul Latif University</option>
                <option value=""> Hyderabad Institute of Arts, Science and Technology</option>
                <option value="">University of Sindh </option>
                <option value="">University of Karachi </option>
                
                <option value="">Other</option>
                
                </select>
        </div>
        <div class="col-md-4">
            <label for="">In case of other Board/institute write name here</label>
            <input type="text" name = "ba-other-name" class="form-control"  value=""  placeholder="Other Institution Name" required>
        </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "ba-date" class="form-control"  value=""  placeholder="Date Of completion..." required >
            </div>
            {{-- Masters Educational Detail --}}
            <h4>Master/BS(Hons) Education Detail(16 Year Education)</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "bs-percentage" class="form-control"  value=""  placeholder="Percentage..." >
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "bs-subjects" class="form-control"  value=""  placeholder="Percentage..." >
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "bs-inst-name" class="form-control"  value=""  placeholder="Institution Name" >
            </div>
            <div class="col-md-4 mt-4">
                <label for="">Name Of Board/University</label>
                <select name="bs-board" style="width:100px;"  >
                <option value=""></option>
                <option value="">NUST ISLAMABAD</option>
                <option value="">Quaid-i-Azam University ISLAMABAD</option>
                <option value=""> Pakistan Institute of Engineering and Applied Sciences	ISLAMABAD</option>
                <option value=""> Allama Iqbal Open University</option>
                <option value=""> Riphah International University</option>
                <option value=""> COMSATS University</option>
                <option value=""> National University of Computer and Emerging Sciences</option>
                <option value="">University of Balochistan	</option>
                <option value="">National University of Technology ISLAMABAD</option>
                <option value="">Lasbela University of Agriculture, Water and Marine Sciences	 </option>
                <option value=""> University of Engineering and Technology, Peshawar</option>
                <option value=""> Government College University, Lahore </option>
                <option value=""> Government College University, Faisalabad</option>
                <option value=""> University of the Punjab</option>
                <option value="">University of Engineering and Technology, Lahore</option>
                <option value="">National Textile University , Faisalabad </option>
                <option value="">Shah Abdul Latif University</option>
                <option value=""> Hyderabad Institute of Arts, Science and Technology</option>
                <option value="">University of Sindh </option>
                <option value="">University of Karachi </option>
                
                <option value="">Other</option>
                
                </select>
        </div>
        <div class="col-md-4">
            <label for="">In case of other Board/institute write name here</label>
            <input type="text" name = "bs-other-name" class="form-control"  value=""  placeholder="Other Institution Name" >
        </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "bs-date" class="form-control"  value=""  placeholder="Date Of completion..." >
            </div>
            {{-- M-phil or MS Education Details --}}
            <h4>MPhil/MS Education Detail</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "ms-percentage" class="form-control"  value=""  placeholder="Percentage..." >
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "ms-subjects" class="form-control"  value=""  placeholder="Percentage..." >
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "ms-inst-name" class="form-control"  value=""  placeholder="Institution Name" >
            </div>
            <div class="col-md-4 mt-4">
                <label for="">Name Of Board/University</label>
                <select name="ms-board" style="width:100px;"  >
                <option value=""></option>
                <option value="">NUST ISLAMABAD</option>
                <option value="">Quaid-i-Azam University ISLAMABAD</option>
                <option value=""> Pakistan Institute of Engineering and Applied Sciences	ISLAMABAD</option>
                <option value=""> Allama Iqbal Open University</option>
                <option value=""> Riphah International University</option>
                <option value=""> COMSATS University</option>
                <option value=""> National University of Computer and Emerging Sciences</option>
                <option value="">University of Balochistan	</option>
                <option value="">National University of Technology ISLAMABAD</option>
                <option value=""> Lasbela University of Agriculture, Water and Marine Sciences	 </option>
                <option value=""> University of Engineering and Technology, Peshawar</option>
                <option value=""> Government College University, Lahore </option>
                <option value=""> Government College University, Faisalabad</option>
                <option value=""> University of the Punjab</option>
                <option value="">University of Engineering and Technology, Lahore</option>
                <option value="">National Textile University , Faisalabad </option>
                <option value="">Shah Abdul Latif University</option>
                <option value=""> Hyderabad Institute of Arts, Science and Technology</option>
                <option value="">University of Sindh </option>
                <option value="">University of Karachi </option>
                
                <option value="">Other</option>
                
                </select>
        </div>
        <div class="col-md-4">
            <label for="">In case of other Board/institute write name here</label>
            <input type="text" name = "ms-other-name" class="form-control"  value=""  placeholder="Other Institution Name" >
        </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "ms-date" class="form-control"  value=""  placeholder="Date Of completion..." >
            </div>
            {{-- PHD Education Detail --}}
            <h4>PHD Education Detail</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "phd-percentage" class="form-control"  value=""  placeholder="Percentage..." >
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "phd-subjects" class="form-control"  value=""  placeholder="Percentage..." >
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "phd-inst-name" class="form-control"  value=""  placeholder="Institution Name" >
            </div>
            <div class="col-md-4 mt-4">
                <label for="">Name Of Board/University</label>
                <select name="phd-board" style="width:100px;" >
                <option value=""></option>
                <option value="">NUST ISLAMABAD</option>
                <option value="">Quaid-i-Azam University ISLAMABAD</option>
                <option value=""> Pakistan Institute of Engineering and Applied Sciences	ISLAMABAD</option>
                <option value=""> Allama Iqbal Open University</option>
                <option value=""> Riphah International University</option>
                <option value=""> COMSATS University</option>
                <option value=""> National University of Computer and Emerging Sciences</option>
                <option value="">University of Balochistan	</option>
                <option value="">National University of Technology ISLAMABAD</option>
                <option value="">Lasbela University of Agriculture, Water and Marine Sciences	 </option>
                <option value=""> University of Engineering and Technology, Peshawar</option>
                <option value=""> Government College University, Lahore </option>
                <option value=""> Government College University, Faisalabad</option>
                <option value=""> University of the Punjab</option>
                <option value="">University of Engineering and Technology, Lahore</option>
                <option value="">National Textile University , Faisalabad </option>
                <option value="">Shah Abdul Latif University</option>
                <option value=""> Hyderabad Institute of Arts, Science and Technology</option>
                <option value="">University of Sindh </option>
                <option value="">University of Karachi </option>
                
                <option value="">Other</option>
                
                </select>
        </div>
        <div class="col-md-4">
            <label for="">In case of other Board/institute write name here</label>
            <input type="text" name = "phd-other-name" class="form-control"  value=""  placeholder="Other Institution Name">

        </div>
        <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "phd-date" class="form-control"  value=""  placeholder="Date Of completion..." >
        </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-dark mt-3 mb-4">Previous</button>
            <button class="btn btn-success mt-3 mb-4">Next</button>
        </div>
        </div>
        </form>
        </div>
        
@endsection