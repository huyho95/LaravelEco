<form action="" method='POST' enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class='row'>
        <div class='col-sm-8 col-sm-offset-2'>
        <div class="form-group">
          <label for="name">Meta Title:</label>
          <input type="text" class="form-control"  placeholder="Meta Title" value="{{ old('c_title',isset($contact->c_title) ? $contact->c_title : '') }}" name="c_title">
          @if($errors->has('c_title'))
              <span class="error-text">
                {{$errors->first('c_title')}}
              </span>
            @endif  
      </div>
      
      <div class="form-group">
        <label for="name">Họ và tên:</label>
        <input name="c_name" id="" class="form-control" cols="30" rows="3" placeholder="Tên khách hàng" value="{{ old('c_name',isset($contact->c_name) ? $contact->c_name : '') }}">
            @if($errors->has('c_name'))
              <span class="error-text">
                {{$errors->first('c_name')}}
              </span>
            @endif  
      </div>

      <div class="form-group">
        <label for="name">Email:</label>
        <input name="c_email" id="" value="{{ old('c_email',isset($contact->c_email) ? $contact->c_email : '') }}" class="form-control" cols="30" rows="3" placeholder="Email">
            @if($errors->has('c_email'))
              <span class="error-text">
                {{$errors->first('c_email')}}
              </span>
             @endif  
      </div>

      <div class="form-group">
        <label for="name">Nội dung:</label>
        <textarea name="c_content" id="" class="form-control" cols="30" rows="3" placeholder="Nội dung">{{ old('c_content',isset($contact->c_content) ? $contact->c_content : '') }}</textarea>
            @if($errors->has('c_content'))
              <span class="error-text">
                {{$errors->first('c_content')}}
              </span>
             @endif  
      </div>
      <button type="submit" class="btn btn-success">Lưu thông tin</button>  
    </div>
</form>