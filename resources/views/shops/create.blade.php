@extends('wishlist.index')

@section('content')


<div class="section-title-4 text-center">
    <h2 style="color:#383838">Verify Account to Sell</h2>
</div>

<div class="register-area ptb-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form action="{{ route('shops.store') }}" method="POST">
                                @csrf
                                <input type="text" name="name" placeholder="Shop Name">
                                <textarea rows="3" for="description" name="description" placeholder="Description"></textarea>
                                <div class="button-box">

                                    <button type="submit" class="default-btn floatright ">Submit Shop</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
