@extends('layouts.app')

@section('content')
    @if($errors->any())
        <script type="text/javascript">
            swal({
                title: 'پیام سیستم',
                text: "{{ $errors->first()  }}",
                type: 'error',
                showConfirmButton: true,
                timer: 5000
            });
        </script>
    @endif
    <form method="POST" class="form-horizontal m-t-20" action="{{ route('login') }}">
        @csrf
        <div class="form-group ">
            <div class="col-xs-12">
                <input id="email" type="email" class="form-control" name="email" autofocus>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <input id="password" type="password" class="form-control" name="password">
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12">
                <div class="checkbox checkbox-custom">
                    <input id="checkbox-signup" type="checkbox">
                    <label for="checkbox-signup">
                        مرا به خاطر بسپار
                    </label>
                </div>

            </div>
        </div>

        <div class="form-group text-center m-t-30">
            <div class="col-xs-12">
                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                    ورود
                </button>
            </div>
        </div>

        <div class="form-group m-t-30 m-b-0">
            <div class="col-sm-12">
                <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> آیا رمز خود را
                    فراموش کرده اید؟</a>
            </div>
        </div>
    </form>

@endsection
