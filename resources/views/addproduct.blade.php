@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Product</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/products/index">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('productname') ? ' has-error' : '' }}">
                                <label for="productname" class="col-md-4 control-label">Product Name</label>

                                <div class="col-md-6">
                                    <input id="productname" class="form-control" name="productname" required autofocus>

                                    @if ($errors->has('productname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('productname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('productbrand') ? ' has-error' : '' }}">
                                <label for="productbrand" class="col-md-4 control-label">Brand</label>

                                <div class="col-md-6">
                                    <input id="productbrand" class="form-control" name="productbrand" autofocus>

                                    @if ($errors->has('productbrand'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('productbrand') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('productpictureurl') ? ' has-error' : '' }}">
                                <label for="productpictureurl" class="col-md-4 control-label">Picture Link</label>

                                <div class="col-md-6">
                                    <input id="productpictureurl" class="form-control" name="productpictureurl" autofocus>

                                    @if ($errors->has('productpictureurl'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('productpictureurl') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
