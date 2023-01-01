@extends('layouts.app')

@section('template_title')
    Update Product Detail
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Product Detail</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('product-details.update', $productDetail->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('product-detail.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
