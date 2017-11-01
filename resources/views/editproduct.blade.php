@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Product</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/products/edit/{{ $id }}">
                            <input type="hidden" name="_method" value="PATCH">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Product Name</label>

                                <div class="col-md-6">
                                    <input id="name" class="form-control" name="name"  value="{{$name}}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                                <label for="brand" class="col-md-4 control-label">Brand</label>

                                <div class="col-md-6">
                                    <input id="brand" class="form-control" name="brand" value="{{$brand}}" autofocus>

                                    @if ($errors->has('brand'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('brand') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                                <label for="picture" class="col-md-4 control-label">Picture Link</label>

                                <div class="col-md-6">
                                    <input id="picture" class="form-control" name="picture" value="{{$picture}}" autofocus>

                                    @if ($errors->has('picture'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('picture') }}</strong>
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
