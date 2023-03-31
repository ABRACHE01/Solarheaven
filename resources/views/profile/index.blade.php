
@extends('layouts.app')
@section('content')

      <div class="container rounded bg-white mt-5 mb-5 ">
      <div class="row">


          <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
              <span> 
                
                @if (Auth::user()->role_id == 1)
                <a href="{{ route('home.index') }}" class="btn btn btn-primary ">
                  <i class="fa fa-home"></i>
              </a>
                @endif
                {{-- {{dd(Auth::user()->role_id)}} --}}
                @if (Auth::user()->role_id == 2)
                <a href="{{ route('user') }}" class="btn btn btn-primary ">
                  <i class="fa fa-home"></i>
              </a>
                @endif      
          </span>

            <div>
              <div class="d-flex justify-content-center mb-4">
               <img id="preview" src="{{ $user->image ? asset('images/usersImages/'.$user->image): asset('staticpictures/user.png') }}" class="rounded-circle mt-5" width="170" height="auto"   alt="Profile Image">
              </div>
              <span class="font-weight-bold">{{$user->name}}</span><span class="text-black-50"> {{$user->email}} </span>
              <div class="d-flex justify-content-center">
                  <div class="btn  btn-primary">
                      <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                  </div>
              </div>
          </div>
            </div>
          </div>
          <div class="col-md-9 border-right">
            
              <div class="p-3 py-5">
                
                @if($message= Session::get('success')) 
                <div class="alert alert-success" role="alert">
                {{$message}}
                </div>
                @endif
              <form action="{{route('profile.destroy',$user->id)}}"  method="POST">
                    @csrf                         
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                   </form>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="text-right font-weight-bold">Settings</h4> 
                  </div>
                 
                  <form  action="{{ route('profile.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
          
                  <div class="form-group">
                    <label class="labels">FullName</label><input type="text" name="fullname" class="form-control " placeholder="name" value="{{$user->name}}" >
                  </div>
                  <div class="form-group">
                      <div class=""><label class="labels">Email ID</label><input type="text" class="form-control " name="email"  placeholder="enter email id" value="{{$user->email}}" ></div>
                  </div>
                <div class="form-group ">
                    <label for="newpassword">New Password</label>
                    <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="If you wanted to change password">
                    @if ($errors->has('newpassword'))
                        <small class="form-text text-danger">{{ $errors->first('newpassword') }}</small>
                    @endif
                </div>
                {{-- <div class="form-group ">
                    <label for="password_confirmation">Confirm New Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="conferme password">
                    @if ($errors->has('password_confirmation'))
                        <small class="form-text text-danger">{{ $errors->first('password_confirmation') }}</small>
                    @endif
                </div> --}}
                <div class="form-group ">
                  <p class="h5 p-2">"Any change require entering the <span class="h3 text-danger"> password </span> "</p>
                  <label for="password">Current Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Confirming with the old password" >
                  @if ($errors->has('password'))
                      <small class="form-text text-danger">{{ $errors->first('password') }}</small>
                  @endif
              </div>
              <input type="file"  name="image"  class="form-control d-none" id="customFile2" />
              <div class="mt-5 text-center"><button class="btn btn-primary profile-button"  name="Save"  type="sybmit" >Save Profile</button>      
              </div>
                  </form>
                 
              </div>
          </div>
      </div>
  </div>
  </div>
  </div>


  <script>
    const fileInput = document.querySelector('#customFile2');
const preview = document.querySelector('#preview');

fileInput.addEventListener('change', function () {
  const file = this.files[0];

  if (!file.type.startsWith('image/')) {
    alert('Please select an image file');
    return;
  }

  const reader = new FileReader();

  reader.addEventListener('load', function () {
    preview.src = reader.result;
  });

  reader.readAsDataURL(file);
});
  </script>


@endsection