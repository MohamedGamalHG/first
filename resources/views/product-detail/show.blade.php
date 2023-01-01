@extends('layouts.app')

@section('template_title')
    {{ $productDetail->name ?? 'Show Product Detail' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Product Detail</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('product-details.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $productDetail->name }}
                        </div>
                        <div class="form-group">
                            <strong>Details:</strong>
                            {{ $productDetail->details }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
