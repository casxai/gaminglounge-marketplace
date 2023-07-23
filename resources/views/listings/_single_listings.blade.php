<div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="{{ route('listings.show', $listing) }}">
                @php
                    $images = json_decode($listing->images, true);
                @endphp
                @if (!empty($images[0]))
                    <img src="{{ asset('storage/' . $images[0]) }}" alt="">
                @else
                    <p>No image available</p>
                @endif
            </a>

            <div class="product-action-right">

                <a class="animate-top" title="Add To Favorite" href="{{ route('favorite.add', $listing->id) }}">
                    <i class="pe-7s-like"></i>
                </a>

            </div>
        </div>
        <div class="product-content-4 text-center">

            <h4 style="margin: -10px;"><a href="{{ route('listings.show', $listing) }}">{{ $listing->game_name }}</a></h4>
            <span></span>
            <span>
                @php
                    $descriptionWords = str_word_count(strip_tags($listing->description), 1);
                    $shortDescription = implode(' ', array_slice($descriptionWords, 0, 15));
                @endphp

                {!! $shortDescription !!} @if (count($descriptionWords) > 10)... @endif

            </span>

            <h4 style="margin: 10px;">${{ $listing->price }}</h4>

            <span></span>
                    <a class="cart-btn btn-hover" href="{{ route('listings.show', $listing) }}">view details</a>
        </div>
    </div>
</div>
