@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Catalog</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="products table">
                        <tr>
                            <td>
                                <strong>Thumbnail</strong>
                            </td>
                            <td>
                                <strong>Product</strong>
                            </td>
                            <td>
                                <strong>Brand</strong>
                            </td>
                            <td>
                                <strong>Added By</strong>
                            </td>
                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    @if (! is_null( $product->picture ))
                                        <a href="{{ $product->picture }}" target="_blank">
                                            <img src="{{ $product->picture }}" class="img-thumbnail">
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    {{ $product->name }}
                                </td>
                                <td>
                                    {{ $product->brand }}
                                </td>
                                <td>
                                    {{ $product->user->fullName() }}
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
