@extends('layouts.safetyapp')
@section('title', 'Blog Details')
@section('body')
    <section class="management-page py-5">
        <div class="container clearfix">
            <div class="row">
                <div class="col text-left section-heading">
                    <h4>{{ $single_blog->title }}</h4>
                </div>
            </div>
            <div class="row pb-0 py-5">
                <div class="col-md-6 align-self-center">
                    <img class="img-fluid w-100" src="{{ asset('safety_assets/img/blog') }}/{{ $single_blog->image }}" alt="management">
                </div>
                <div class="col-md-6 align-self-center section-heading mt-5">
                    @foreach ($blogs as $blog)
                        <div class="d-flex mb-4">
                            <div>
                                <img width="160px" src="{{ asset('safety_assets/img/blog') }}/{{ $blog->image }}" alt="Success icon">
                            </div>
                            <div class="flex-grow-1 ms-3 align-self-center content">
                                <h6>{{ $blog->title }}</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. text of the printing and typesetting industry.</p>
                                <a class="small-btn" href="{{ route('blog.details', $blog->slug ) }}">Read More</a>
                            </div>
                        </div>
                    @endforeach
                    @empty($blog)
                        <span class="text-danger">Nothing show any Blogs..</span>
                    @endempty
                </div>
            </div>
            <div class="row py-md-2">
                <div class="col-sm-12 mt-5">
                    <div class="content">
                        {!! $single_blog->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection







