<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <form id="cart-form"> <!-- Form to manage the selected items -->
                <div class="owl-menu-item owl-carousel">

                    @foreach($data as $item)
                    <div class="item">
                        <div style="background-image: url('/foodimage/{{$item->image}}');" class='card'>
                            <div class="price"><h6>{{$item->price}}</h6></div>
                            <div class='info'>
                                <h1 class='title'>{{$item->title}}</h1>
                                <p class='description'>{{$item->description}}</p>
                                <div class="main-text-button">
                                    <button class="scroll-to-section"><a href="#reservation">Add <i class="fa fa-angle-down"></i></a></button>
                                    <label>
                                        <input type="checkbox" name="selected_items[]" value="{{$item->id}}">
                                        Add to Cart
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach

                </div>
                <br>
                <br><br><br><br><br><br>
                <button type="submit" class="submit-button">Submit</button> <!-- Submit button to proceed to payment page -->
            </form>
        </div>
    </div>
</section>
