<div class="row mt-5">
    <div class="col-md-5">
        <div class="card">
            <div class="p-3">
                <img src="{{ asset('safety_assets/img/blog/blog-1.png') }}" class="card-img-top" alt="Blog post">
            </div>
            <div class="card-body">
                <h5 class="card-title">Free safety program seasion 2021-2022</h5>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. text of the printing and typesetting industry.</p>

                <div class="d-flex">
                    <div class="">
                        <img src="{{ asset('safety_assets/img/users/1.png') }}" alt="Success icon">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p>By <b>Admin</b>, 01 January 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 mt-5 mt-md-0">
        @foreach ($blogs as $blog)
            <div class="d-flex mb-4">
                <div>
                    <img width="160px" src="{{ asset('safety_assets/img/blog') }}/{{ $blog->image }}" alt="Success icon">
                </div>
                <div class="flex-grow-1 ms-3 align-self-center content">
                    <h6>{{ $blog->title }}</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. text of the printing and typesetting industry.</p>
                    <a class="small-btn" href="{{ route('blog.details', $blog->slug ) }}">@lang('home.read_more')</a>
                </div>
            </div>
        @endforeach
        @empty($blog)
            <span class="text-danger">Nothing show any Blogs..</span>
        @endempty
    </div>
</div>