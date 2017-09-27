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

                            <div class="form-group{{ $errors->has('productName') ? ' has-error' : '' }}">
                                <label for="productName" class="col-md-4 control-label">Product Name</label>

                                <div class="col-md-6">
                                    <input id="productName" class="form-control" name="productName" required autofocus>

                                    @if ($errors->has('productName'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('productName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('productBrand') ? ' has-error' : '' }}">
                                <label for="productBrand" class="col-md-4 control-label">Brand</label>

                                <div class="col-md-6">
                                    <input id="productBrand" class="form-control" name="productBrand" autofocus>

                                    @if ($errors->has('productBrand'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('productBrand') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('productPictureUrl') ? ' has-error' : '' }}">
                                <label for="productPictureUrl" class="col-md-4 control-label">Picture Link</label>

                                <div class="col-md-6">
                                    <input id="productPictureUrl" class="form-control" name="productPictureUrl" autofocus>

                                    @if ($errors->has('productPictureUrl'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('productPictureUrl') }}</strong>
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
