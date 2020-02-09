<form action="" method='POST' enctype="multipart/form-data">
{{ csrf_field() }}
<div class='row'>
  <div class='col-sm-8 col-sm-offset-2'>
    <div class="form-group">
      <label for="name">Họ và tên:</label>
      <input name="name" id="" class="form-control" cols="30" rows="3" placeholder="Tên khách hàng" value="{{ old('name',isset($user->name) ? $user->name : '') }}">
          @if($errors->has('name'))
            <span class="error-text">
              {{$errors->first('name')}}
            </span>
          @endif
    </div>

    <div class="form-group">
      <label for="name">Email:</label>
      <input name="email" id="" value="{{ old('email',isset($user->email) ? $user->email : '') }}" class="form-control" cols="30" rows="3" placeholder="Email">
          @if($errors->has('email'))
            <span class="error-text">
              {{$errors->first('email')}}
            </span>
            @endif
    </div>
    <div class="form-group">
      <label for="name">Số điện thoại:</label>
      <input type="text" class="form-control"  placeholder="Số điện thoại" value="{{ old('phone',isset($user->phone) ? $user->phone : '') }}" name="phone">
      @if($errors->has('phone'))
          <span class="error-text">
            {{$errors->first('phone')}}
          </span>
      @endif
    </div>

    <div class="form-group">
      <img id="out_img" src="{{ asset('/images/no_image.jpg') }}" alt="" style="width: 100%;height: 300px">
    </div>

    <div class="form-group">
      <label for="name">Hình ảnh:</label>
      <input type="file" id="input_img" name="avatar" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Lưu thông tin</button>
  </div>
</div>
</form>
