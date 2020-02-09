@extends('user.layout')
@section('content')
    
    <h1 class="page-header">Cập nhật mật khẩu</h1>
    <div class="row">
        <div class="col-sm-12">
            <form action="" method="POST">
                @csrf
                <div class="form-group" style="position: relative;">
                    <label for="email">Mật khẩu cũ:</label>
                    <input type="password" class="form-control"  placeholder="******" name="password_old" value="">
                    <a href="javascript:;void(0)"><i style="position: absolute;top: 60%;right: 15px;color: #333;" class="fa fa-eye"></i></a>
                    @if($errors->has('password_old'))
                        <span class="error-text">
                            {{$errors->first('password_old')}}
                        </span>
                    @endif  
                </div>

                <div class="form-group" style="position: relative;">
                    <label for="email">Mật khẩu mới:</label>
                    <input type="password" class="form-control"  placeholder="******" name="password" value="">
                    <a href="javascript:;void(0)" ><i style="position: absolute;top: 60%;right: 15px;color: #333;" class="fa fa-eye"></i></a>
                    @if($errors->has('password'))
                        <span class="error-text">
                            {{$errors->first('password')}}
                        </span>
                    @endif 
                </div>

                <div class="form-group" style="position: relative;">
                    <label for="email">Nhập lại mật khẩu mới:</label>
                    <input type="password" class="form-control"  placeholder="******" name="password_confirm" value="">
                    <a href="javascript:;void(0)"><i style="position: absolute;top: 60%;right: 15px;color: #333;" class="fa fa-eye"></i></a>
                    @if($errors->has('password_confirm'))
                        <span class="error-text">
                            {{$errors->first('password_confirm')}}
                        </span>
                    @endif 
                </div>
                
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật</button>
            </form>
        </div>
    </div>
    
@stop
@section('script')
    <script>
        $(function(){
            $(".form-group a").click(function(){
                let $this = $(this);

                if ($this.hasClass('active'))
                {
                    $this.parents('.form-group').find('input').attr('type','password')
                    $this.removeClass('active');
                }else
                {
                    $this.parents('.form-group').find('input').attr('type','text')
                    $this.addClass('active')
                }
            });
                
        });
    </script>
@stop
