<div class="product-area pt-90 pb-95">
    <div class="container">
        <div class="section-title-3 text-center mb-50">
            <h2>Related products</h2>
        </div>
        <div class="related-product-active owl-carousel">
        @foreach ($relatedProducts as $relatedProduct)
            <div class="product-style pb-50">

                    <div class="product-wrapper">
                        <div class="product-img">

                            <a href="{{ route('listings.show', $relatedProduct) }}">
                                @php
                                    $images = json_decode($relatedProduct->images, true);
                                @endphp
                                @if (!empty($images[0]))
                                    <img src="{{ asset('storage/' . $images[0]) }}" alt="">
                                @endif
                            </a>
                            <span>hot</span>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist"
                                    href="{{ route('favorite.add', $relatedProduct->id) }}">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal"
                                    data-target="#exampleModal"
                                    href="{{ route('listings.show', $relatedProduct->id) }}">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="{{ route('listings.show', $relatedProduct) }}">{{ $relatedProduct->game_name }}</a>
                        </h4>
                        <span>${{ $relatedProduct->price }}</span>
                    </div>
                </div>
                @endforeach
            </div>

    </div>
</div>

