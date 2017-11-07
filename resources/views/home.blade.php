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
                            <th></th>
                            <th>
                                <strong>Thumbnail</strong>
                            </th>
                            <th>
                                <strong>Product</strong>
                            </th>
                            <th class="table-brand">
                                <strong>Brand</strong>
                            </th>
                            <th class="table-buttons"></th>
                        </tr>
                        @foreach ($products as $product)
                            <form name="{{ $product->id  }}">
                                <tr class="table-parent">
                                    <td class="table-number">
                                        <input type="number" class="form-control-static number-input table-child" min="0">
                                    </td>
                                    <td class="table-thumbnail">
                                        <div class="table-child-vertical">
                                            @if (! is_null( $product->picture ))
                                                <a href="{{ $product->picture }}" target="_blank">
                                                    <img src="{{ $product->picture }}" class="img-thumbnail">
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <p class="table-child">{{ $product->name }}</p>
                                    </td>
                                    <td>
                                        <p class="table-child">{{ $product->brand }}</p>
                                    </td>
                                    <td>
                                        <div class="table-child-vertical table-buttons">
                                            <div class="inline-div">
                                                <a href="{{ url('/products/edit/' . $product->id) }}" class="btn button-color">
                                                    Edit
                                                </a>
                                            </div>
                                            <div class="inline-div">
                                            </div>
                                            <div class="inline-div">
                                                <a href="#" class="btn button-color">
                                                    Save
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </form>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
