<div class="ratting-form-wrapper">
    <span>Add a Review</span>
    <p>Required fields are marked <span>*</span></p>
    <div class="ratting-form">
        <form method="POST" action="{{route('storeReview')}}">
            @csrf
            <div class="row">
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <div class="col-lg-6 col-md-6">
                    <div class="rating-form-style mb-20">
                        <label>Name <span>*</span></label>
                        <input type="text" name="author" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rating-form-style mb-20">
                        <label>Rating <span>*</span></label>
                        <select name="rating" required>
                            <option value="5">5 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="2">2 Stars</option>
                            <option value="1">1 Star</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="rating-form-style mb-20">
                        <label>Your review <span>*</span></label>
                        <textarea name="body" required></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-submit">
                        <input type="submit" value="Submit">
                    </div>
                </div>

                @if (isset($error))
                    <div class="col-sm-12">
                        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                        $error
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>