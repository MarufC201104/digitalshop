<x-frontendTheme.theme_master>
    <div class="container">

        <!--MAIN SLIDE-->
        <x-frontendTheme.home.slider/>

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('ui/frontendTheme/assets/images/home-1-banner-1.jpg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('ui/frontendTheme/assets/images/home-1-banner-2.jpg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
        </div>

        <!--On Sale-->
        <x-frontendTheme.home.sale/>

        <!--Latest Products-->
        <x-frontendTheme.home.latest-product/>

        <!--Product Categories-->

        <x-frontendTheme.home.product_categories/>
    </div>
</x-frontendTheme.theme_master>
