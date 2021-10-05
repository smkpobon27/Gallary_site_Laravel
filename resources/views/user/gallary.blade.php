@extends('user.app')

@section('main-content')
    <div class="container">
        <!-- ======= Portfolio Section ======= -->
        <section id="gallary" class="portfolio" style="margin-top:100px;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>View Our Image Store</h2>
                    <a href="/image/upload" type="button" class="btn btn-danger">Upload Image</a>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-9 d-flex justify-content-start">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($categories as $category)
                                <li data-filter=".filter-{{ $category->name }}">
                                    {{ ucfirst($category->name) }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-end ">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-public">Public</li>
                            <li data-filter=".filter-private">Private</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($images as $image)
                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-{{ $image->category->name }} filter-{{ $image->privacy == 1 ? 'public' : 'private' }}">
                            <div class="portfolio-wrap">
                                <img src="{{ asset(Storage::disk('local')->url($image->image_url)) }}" class="img-fluid"
                                    alt="" width="300" height="400" />
                                <div class="portfolio-info">
                                    <h4>{{ $image->title }}</h4>
                                    <p>{{ ucfirst($image->category->name) }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ asset(Storage::disk('local')->url($image->image_url)) }}"
                                            data-gall="portfolioGallery" class="venobox" title="{{ $image->title }}"><i
                                                class="bx bx-plus"></i></a>
                                        <a href="user/portfolio-details/{{ $image->user->id }}"
                                            title="Click for Uploader details info"><i class="bx bx-link"></i>Posted By</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->
    </div>
@endsection
