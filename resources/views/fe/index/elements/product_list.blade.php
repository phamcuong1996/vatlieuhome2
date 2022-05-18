<div class="row">
    @foreach ($productByCategory as $product)
        <div class="col-12 col-sm-6 col-md-3 bg-ranger">
            <div class="card" >
                <a href="{{ route('fe.products.detail', $product->id) }}"><img style="width: 250px;height: 250px" src="{{ $product->image}}" class="card-img-top">
                </a>
                <div class="card-body" style="text-align: center">
                    <h2 href="" class="card-content" >{{ $product->name }}</h2>
                    <h5 class="card-text" style="text-decoration: line-through">{{ number_format($product->price) }} </h5>
                    <div class="star" style="color: yellow">
                        <form>
                            <label class="fas fa-star"></label>
                            <label class="fas fa-star"></label>
                            <label class="fas fa-star"></label>
                            <label class="fas fa-star"></label>
                            <label class="fas fa-star"></label>
                        </form>
                    </div>
                    <h5 class="card-text" style="color: red">{{ number_format($product->original_price) }}</h5>
                    <a href="#" class="btn btn-warning product-card">Thêm Giỏ Hàng</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
