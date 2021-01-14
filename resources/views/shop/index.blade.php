@extends('layouts.master')

@section('title')
    Shops
@endsection

@section('sidebar')
    @include('layouts.sidebar-1')    
@endsection

@section('content')

<div class="head px-3 px-md-5 py-5" style="margin-bottom: 0px;">            
    <div>
        <span class="path">Mane page / </span>
        <span class="current-path">Shop </span>
    </div>
</div>

{{-- Article Section --}}
<section class="w-100 shop-section">
    <div class="w-100 p-3 px-md-5 d-block">
         <div class="mb-50">
            <h3 class="title size-lg">Shop</h3>        
            <span class="subtitle">products designed in-house by GIA</span>
         </div>
         <div class="body">
             <div class="tab mb-50">
                <ul class="tab-bar mb-50">
                    <li class="active"><a href="#" class="tab-item" data-t-id="allproducts" >All products</a></li>
                    <li><a href="#" class="tab-item" data-t-id="popular" >Popular</a></li>
                    <li><a href="#" class="tab-item" data-t-id="t_shirts" >T-Shirts</a></li>
                    <li><a href="#" class="tab-item" data-t-id="bags" >Bags</a></li>
                    <li><a href="#" class="tab-item" data-t-id="accessories" >Accessories</a></li>
                </ul>
                <div class="tab-content">
                    {{-- tab all product --}}
                    <div class="tab-pane" id="allproducts" style="display: block;">
                        <div class="row product-list">
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/1.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/2.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp"  style="animation-delay: .4s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/3.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .8s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/4.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/3.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/2.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .4s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/4.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .6s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/1.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                        </div>                    
                    </div>
                    {{-- End tab all product --}}
                    {{-- tab popular --}}
                    <div class="tab-pane" id="popular">
                        <div class="row product-list">
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/1.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/2.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp"  style="animation-delay: .4s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/3.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .8s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/4.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/3.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/2.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .4s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/4.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .6s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/1.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                        </div>
                          
                    </div>
                    {{-- End tab popular --}}

                    {{-- tab T-shirts --}}
                    <div class="tab-pane" id="t_shirts">
                        <div class="row product-list">
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/1.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/2.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp"  style="animation-delay: .4s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/3.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .8s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/4.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/3.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/2.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .4s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/4.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .6s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/1.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                        </div>
                          
                    </div>
                    {{-- End tab T-shirts --}}

                    {{-- tab bags --}}
                    <div class="tab-pane" id="bags">
                        <div class="row product-list">
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/1.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/2.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp"  style="animation-delay: .4s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/3.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .8s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/4.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/3.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/2.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .4s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/4.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .6s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/1.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                        </div>
                          
                    </div>
                    {{-- End tab bags --}}

                     {{-- tab accessories --}}
                     <div class="tab-pane" id="accessories">
                        <div class="row product-list">
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/1.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/2.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp"  style="animation-delay: .4s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/3.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .8s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/4.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/3.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .2s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/2.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .4s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/4.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                            {{-- product --}}
                            <div class="col-md-3 mb-3 wow animated fadeInUp" style="animation-delay: .6s;">
                                <div class="product">
                                <div class="item-img">
                                    <img src="{{ asset('img/concept/product/1.png') }}" alt="">
                                </div>
                                <p class="summary">G.IA T-Shirt unisex</p>
                                <h4 class="price">$69</h4>
                                </div>
                            </div>
                            {{-- end product --}}
                        </div>
                          
                    </div>
                    {{-- End tab accessories --}}
                </div>
                {{-- loading --}}
                <div class="loading">
                    <div class="item-loading">
                        <div class="item-logo">
                            <i>
                                <svg width="46" height="25" viewBox="0 0 46 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M46.0001 9.73365L44.7295 10.9957L41.3768 14.3485H39.8666V17.9626L37.6016 20.2276C37.6016 20.2276 35.5098 22.5667 34.6684 23.0618C34.6684 23.0618 35.3614 22.4181 35.6586 21.1311C35.9557 19.844 36.2033 16.9724 36.2033 16.9724V14.3485H30.8007C31.9435 15.2726 33.0553 16.1906 33.5792 16.694C34.526 17.6036 34.3591 18.4825 34.3591 18.4825C34.3591 18.4825 33.5688 18.8877 33.3936 20.3884C33.2153 21.9148 32.8491 23.0618 32.8491 23.0618C33.1645 20.5388 28.9859 17.3737 26.6057 15.5707L26.4627 15.4624C24.1112 13.6802 23.987 12.3683 24.3338 11.4771C24.6805 10.5859 27.0071 8.01165 27.0071 8.01165C27.2486 7.88772 26.8028 8.54387 26.8028 8.54387C26.0789 9.76904 26.7658 11.1058 28.2648 12.3125C28.3967 12.4186 28.5395 12.5334 28.6903 12.6541V4.17488L32.3384 1.34017L32.3477 1.3281H41.1042C42.5616 1.3281 43.8425 0.375122 43.8425 0.375122L42.4751 1.73355L39.8666 4.34191V10.6851H43.3394C44.7641 10.6524 46.0001 9.73365 46.0001 9.73365ZM32.3539 10.6111L32.2797 10.6851V10.6852H36.2033V4.99176H32.3539V10.6111ZM19.8289 14.8949C19.8407 14.9629 19.8289 15.0299 19.7987 15.0868L19.7526 15.1519L18.5841 16.8074L18.5849 16.8089L18.3419 17.1505L18.2854 17.2305L18.2851 17.2303L18.0465 17.566C18.0465 17.566 18.0776 17.1446 17.7801 16.8737L16.204 15.7614L16.1452 15.7199C16.0961 15.6758 16.0616 15.6159 16.0496 15.5464C16.0376 15.4768 16.05 15.4088 16.0816 15.3509L16.123 15.2921L17.5923 13.2108L17.5937 13.2118L17.8357 12.8714C17.8357 12.8714 17.7994 13.357 18.173 13.6207L19.6707 14.678L19.7362 14.7242C19.7838 14.7677 19.8173 14.8268 19.8289 14.8949ZM15.7173 19.9679V10.7619L19.1828 7.8014H12.8583C12.4065 7.8014 12.3756 7.4857 12.3756 7.4857L12.0565 7.8014H12.0538L11.7246 8.12937L11.7237 8.13029L9.0319 10.813C9.0319 10.813 8.86072 10.9945 8.93181 11.2143C9.00949 11.454 9.28148 11.465 9.28148 11.465H14.7139L12.0537 13.5318V17.8648C11.3409 17.5121 8.22181 15.9596 6.45976 14.9119C6.23586 14.7789 6.01246 14.651 5.79306 14.5253L5.79304 14.5253L5.79302 14.5253C5.48454 14.3487 5.18399 14.1766 4.90113 14.0012L8.29128 10.6111V4.99195H13.5205C13.8454 4.99195 14.2446 4.99195 13.9846 5.71279C13.7247 6.43374 13.4833 7.56004 13.4833 7.56004C15.3932 3.54063 18.8737 1.06136 19.3209 0.754194C19.3373 0.743591 19.3532 0.732806 19.3687 0.721836C19.3687 0.721836 19.3522 0.732694 19.3209 0.754194C18.6179 1.21013 17.1283 1.32839 17.1283 1.32839H8.2928L8.29128 1.33042V1.32839L4.62762 4.17496V7.98679C3.88639 8.68542 1.28787 11.1793 0.71641 12.344C0.0480958 13.7051 0.196565 15.7347 4.10788 17.938C4.96333 18.4199 5.81758 18.8366 6.63386 19.2348L6.63391 19.2349C9.54978 20.6573 11.9811 21.8435 12.2521 24.9185C12.2521 24.9185 12.5744 24.1551 12.7048 23.4869C13.0089 21.9277 15.7173 19.9679 15.7173 19.9679ZM3.10541 10.5677C3.10541 10.5677 3.23521 10.0508 3.966 9.23904C3.9958 9.20608 4.09919 9.09923 4.21711 8.97737L4.21714 8.97734L4.2172 8.97727C4.37538 8.8138 4.55967 8.62335 4.62752 8.54801V13.8266C3.46299 13.0577 2.68941 12.1805 3.10541 10.5677ZM23.9545 17.4165V18.3313C24.093 20.0881 25.7652 20.8942 28.0683 21.1852C28.0683 21.1852 22.4876 21.3298 21.8485 21.0119C20.9681 20.5745 20.1351 19.761 20.2261 16.3709L20.2098 4.90952C20.2004 4.74309 20.1948 4.58267 20.1895 4.42852C20.1456 3.15899 20.1165 2.31525 18.0628 2.05544C18.0628 2.05544 21.6768 1.91092 22.3158 2.22896C22.3569 2.24937 22.3981 2.26938 22.4393 2.28939C23.1278 2.62379 23.8125 2.95638 23.9407 5.13283L23.9545 17.2268C23.9545 17.2268 23.9575 17.3547 23.9545 17.4165Z" fill="black"/>
                                </svg>
                            </i>     
                        </div>               
                        <i class="item-border-text">
                            <svg width="131" height="129" viewBox="0 0 131 129" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M46.739 126.623L49.6992 117.105L50.8489 117.463L47.8886 126.981L46.739 126.623Z" fill="black"/>
                                <path d="M34.2832 117.506C33.3668 117.706 32.4619 117.492 31.5685 116.864C30.675 116.236 30.1706 115.477 30.0553 114.586C29.94 113.695 30.2258 112.76 30.9127 111.783C31.6157 110.783 32.4113 110.178 33.2994 109.97C34.1875 109.761 35.0821 109.973 35.9831 110.606C36.8842 111.24 37.3974 112.011 37.5226 112.92C37.6478 113.83 37.367 114.773 36.6801 115.751C35.9986 116.72 35.1996 117.305 34.2832 117.506ZM31.254 114.487C31.2872 115.138 31.5902 115.664 32.1629 116.067C32.7356 116.469 33.3376 116.579 33.9687 116.395C34.5999 116.211 35.1623 115.768 35.656 115.065C36.1658 114.34 36.4015 113.655 36.3629 113.012C36.3113 112.371 35.9877 111.842 35.3921 111.423C34.8194 111.021 34.2278 110.913 33.6173 111.1C32.9991 111.281 32.4351 111.735 31.9253 112.46C31.4316 113.163 31.2078 113.838 31.254 114.487Z" fill="black"/>
                                <path d="M18.5074 94.5693L19.2736 94.0529C19.4867 94.2019 19.6766 94.4003 19.8436 94.648C20.2244 95.2129 20.1259 95.7014 19.5481 96.1133C20.5636 96.2506 21.3686 96.7603 21.9633 97.6426C22.3597 98.2308 22.5244 98.8008 22.4573 99.3525C22.385 99.8965 22.0857 100.346 21.5594 100.701C20.4913 101.42 19.391 101.132 18.2584 99.8358C17.5944 99.0678 17.1949 98.6336 17.0597 98.5333C16.7791 98.3173 16.4839 98.2968 16.1741 98.4718C16.1225 98.4954 16.0695 98.5254 16.0154 98.5619C15.3575 99.0053 15.3337 99.6798 15.9441 100.585C16.2571 101.05 16.5911 101.337 16.9463 101.446C17.2938 101.561 17.6999 101.495 18.1646 101.25L18.814 102.213C18.1612 102.631 17.5081 102.739 16.8548 102.538C16.2014 102.337 15.6139 101.849 15.0923 101.075C14.5237 100.231 14.2947 99.4741 14.4052 98.8031C14.4403 98.588 14.5376 98.3817 14.6971 98.1842C14.8566 97.9866 14.9996 97.8397 15.1259 97.7432C15.2445 97.652 15.4315 97.5204 15.6869 97.3482C15.9888 97.1448 16.4429 96.85 17.0493 96.4638C17.6479 96.0828 18.0943 95.7932 18.3884 95.595C18.6051 95.4489 18.7416 95.3175 18.798 95.2007C18.8414 95.0814 18.8109 94.9444 18.7066 94.7896C18.6648 94.7277 18.5985 94.6543 18.5074 94.5693ZM17.2576 97.7247C17.3587 97.7578 17.4547 97.8001 17.5455 97.8514C17.6364 97.9027 17.7352 97.9824 17.8419 98.0906C17.9433 98.1911 18.0174 98.2593 18.0642 98.2953C18.098 98.3288 18.1813 98.4189 18.3141 98.5658C18.4391 98.7179 18.5042 98.7978 18.5095 98.8056C18.7021 99.0246 18.8323 99.1677 18.8999 99.2346C18.9546 99.2991 19.0795 99.4175 19.2745 99.59C19.4643 99.7547 19.6227 99.8561 19.7497 99.8943C19.8768 99.9325 20.0386 99.9472 20.2353 99.9384C20.4191 99.9272 20.6038 99.8589 20.7896 99.7337C21.0991 99.5251 21.2725 99.2563 21.3097 98.9273C21.3416 98.5906 21.2324 98.2365 20.982 97.865C20.6638 97.3929 20.2402 97.065 19.7112 96.8813C19.1822 96.6976 18.7281 96.7336 18.3488 96.9892L17.2576 97.7247Z" fill="black"/>
                                <path d="M2.44037 78.5699L12.1506 76.3176L12.4037 77.4087L11.3672 77.6491C12.2888 77.9048 12.8772 78.5827 13.1323 79.6829C13.3643 80.683 13.217 81.5555 12.6903 82.3004C12.1525 83.0384 11.3108 83.5402 10.1652 83.8059C9.10142 84.0526 8.15623 83.9844 7.32962 83.6013C6.49181 83.2112 5.9527 82.4978 5.7123 81.4614C5.47822 80.4522 5.68189 79.5953 6.3233 78.8908L2.70924 79.7291L2.44037 78.5699ZM6.67307 81.0804C6.82702 81.7441 7.19027 82.2156 7.76282 82.4948C8.33326 82.7649 9.03217 82.804 9.85954 82.6121C10.7142 82.4138 11.3507 82.0602 11.7692 81.5512C12.1765 81.0351 12.3032 80.4453 12.1492 79.7815C11.9932 79.1087 11.6299 78.6373 11.0595 78.3672C10.4799 78.0992 9.75829 78.0654 8.89455 78.2657C8.12173 78.445 7.51838 78.7765 7.08449 79.2604C6.6394 79.7373 6.50226 80.344 6.67307 81.0804Z" fill="black"/>
                                <path d="M1.20748 60.4827L2.65845 60.6036L2.55847 61.8034L1.1075 61.6825L1.20748 60.4827ZM3.94201 60.7106L11.1411 61.3105L11.0411 62.5103L3.84202 61.9104L3.94201 60.7106Z" fill="black"/>
                                <path d="M6.85532 45.6699L7.89514 46.0861C7.30255 45.2055 7.20045 44.28 7.58884 43.3095C7.9044 42.521 8.33951 42.0366 8.89415 41.8565C9.44359 41.6642 10.1169 41.7276 10.9141 42.0466L15.3724 43.8308L14.9302 44.9356L10.9789 43.3543C10.6496 43.2225 10.3888 43.1332 10.1964 43.0864C9.99884 43.0274 9.77873 42.9996 9.53609 43.0031C9.28478 43.003 9.06986 43.0879 8.89131 43.2577C8.71277 43.4276 8.55761 43.6771 8.42583 44.0064C7.91607 45.2802 8.46706 46.2396 10.0788 46.8846L13.5882 48.289L13.1461 49.3938L6.43918 46.7098L6.85532 45.6699Z" fill="black"/>
                                <path d="M20.6823 22.8646L25.4127 27.2347C25.872 27.659 26.2029 28.0092 26.4054 28.2852C26.6147 28.5675 26.7689 28.8751 26.8679 29.208C27.1514 30.1941 26.8276 31.1911 25.8966 32.1989C25.3455 32.7953 24.7566 33.1852 24.1298 33.3685C23.5099 33.5582 22.8906 33.4308 22.272 32.9863L23.0985 32.0917C23.783 32.5335 24.499 32.35 25.2463 31.541C25.7467 30.9994 25.9706 30.482 25.918 29.9887C25.8718 29.4885 25.5499 28.9498 24.9525 28.3724L24.3141 27.7636C24.6482 28.6949 24.4511 29.5547 23.7227 30.3431C23.0641 31.0561 22.295 31.4003 21.4156 31.3756C20.5425 31.3442 19.6946 30.9484 18.872 30.1884C18.0973 29.4727 17.6289 28.6525 17.4668 27.7276C17.2978 26.7964 17.5585 25.9572 18.2488 25.2099C18.5908 24.8397 18.9737 24.5835 19.3974 24.4412C19.8274 24.2921 20.2658 24.2714 20.7126 24.3792L19.9413 23.6667L20.6823 22.8646ZM19.0478 25.8718C18.6108 26.3448 18.4507 26.8895 18.5676 27.5057C18.6839 28.1087 19.0643 28.7079 19.7088 29.3033C20.2915 29.8416 20.8909 30.1349 21.5071 30.1831C22.1164 30.2251 22.6364 30.0129 23.067 29.5468C23.5167 29.06 23.6831 28.5085 23.5663 27.8923C23.4557 27.2692 23.0782 26.66 22.4338 26.0647C21.8305 25.5073 21.2311 25.214 20.6355 25.1848C20.0394 25.1423 19.5101 25.3713 19.0478 25.8718Z" fill="black"/>
                                <path d="M50.3504 4.35972L49.0097 5.26207L50.2236 6.24588L49.7752 6.79796L48.5064 5.77067L47.9472 7.27829L47.2447 7.02863L47.8046 5.57873L46.2341 5.44134L46.29 4.71738L47.8811 4.87829L47.4791 3.34823L48.2102 3.1561L48.6123 4.68616L49.9052 3.7674L50.3504 4.35972Z" fill="black"/>
                                <path d="M80.0361 2.77125L77.6334 12.4454L76.4649 12.1551L78.8676 2.48104L80.0361 2.77125Z" fill="black"/>
                                <path d="M93.0011 11.1507C93.9043 10.8977 94.8201 11.0586 95.7485 11.6336C96.6769 12.2085 97.2245 12.9374 97.3914 13.8202C97.5582 14.703 97.3272 15.6522 96.6982 16.6679C96.0544 17.7073 95.2953 18.357 94.4208 18.6168C93.5463 18.8767 92.6409 18.7167 91.7046 18.1368C90.7682 17.5569 90.2112 16.8167 90.0333 15.9162C89.8555 15.0156 90.0811 14.0575 90.7101 13.0418C91.3342 12.0341 92.0979 11.4037 93.0011 11.1507ZM96.2004 13.9883C96.1295 13.3406 95.7964 12.8324 95.2013 12.4639C94.6062 12.0953 93.9989 12.0212 93.3795 12.2414C92.7601 12.4616 92.2244 12.9367 91.7723 13.6667C91.3054 14.4205 91.1099 15.1173 91.1858 15.7571C91.2745 16.3939 91.6283 16.9039 92.2472 17.2872C92.8423 17.6557 93.4392 17.729 94.0378 17.5069C94.6444 17.2897 95.1811 16.8042 95.6479 16.0504C96.1 15.3204 96.2842 14.633 96.2004 13.9883Z" fill="black"/>
                                <path d="M110.081 33.1323L109.346 33.6923C109.125 33.5559 108.924 33.3689 108.743 33.1313C108.33 32.5894 108.4 32.0961 108.953 31.6513C107.931 31.5732 107.098 31.1111 106.453 30.2648C106.023 29.7006 105.825 29.1411 105.86 28.5865C105.901 28.0392 106.174 27.5732 106.678 27.1886C107.703 26.4079 108.818 26.6318 110.024 27.8602C110.732 28.5884 111.156 28.9986 111.296 29.0909C111.589 29.2902 111.885 29.2936 112.184 29.1009C112.234 29.0744 112.285 29.0413 112.337 29.0017C112.968 28.5209 112.953 27.8461 112.291 26.9776C111.952 26.5322 111.601 26.2651 111.24 26.1764C110.887 26.082 110.485 26.171 110.036 26.4432L109.331 25.519C109.959 25.0643 110.605 24.9184 111.268 25.0814C111.932 25.2443 112.547 25.6969 113.113 26.4393C113.73 27.2485 114.002 27.9912 113.931 28.6675C113.908 28.8842 113.823 29.0958 113.675 29.3023C113.527 29.5087 113.393 29.6638 113.273 29.7674C113.16 29.8653 112.981 30.0076 112.736 30.1943C112.446 30.4149 112.01 30.7356 111.427 31.1563C110.851 31.5714 110.423 31.8864 110.141 32.1014C109.933 32.2598 109.804 32.3989 109.755 32.5188C109.718 32.6404 109.757 32.7754 109.87 32.9239C109.915 32.9833 109.985 33.0527 110.081 33.1323ZM111.146 29.9096C111.043 29.8824 110.945 29.8458 110.851 29.7999C110.757 29.7539 110.654 29.6801 110.541 29.5783C110.434 29.4839 110.356 29.4201 110.307 29.3868C110.272 29.3554 110.183 29.2702 110.042 29.1313C109.909 28.9867 109.839 28.9107 109.833 28.9033C109.628 28.6958 109.49 28.5605 109.419 28.4976C109.36 28.4365 109.229 28.3255 109.024 28.1646C108.825 28.0112 108.661 27.9191 108.532 27.8884C108.403 27.8576 108.24 27.8524 108.045 27.8725C107.862 27.8945 107.681 27.9733 107.503 28.1091C107.206 28.3354 107.049 28.6138 107.031 28.9443C107.018 29.2823 107.148 29.6294 107.42 29.9858C107.765 30.4386 108.207 30.7414 108.745 30.894C109.284 31.0467 109.735 30.9845 110.099 30.7073L111.146 29.9096Z" fill="black"/>
                                <path d="M127.05 48.1718L117.487 50.984L117.171 49.9095L118.192 49.6093C117.257 49.4076 116.631 48.7649 116.312 47.6815C116.022 46.6965 116.119 45.8169 116.601 45.0427C117.095 44.2748 117.906 43.7249 119.035 43.3931C120.082 43.0851 121.03 43.0983 121.877 43.4328C122.736 43.7736 123.316 44.4544 123.616 45.4752C123.908 46.4691 123.755 47.3363 123.155 48.0768L126.715 47.0302L127.05 48.1718ZM122.679 45.9112C122.487 45.2576 122.097 44.808 121.509 44.5625C120.924 44.326 120.224 44.3276 119.409 44.5672C118.567 44.8147 117.952 45.2047 117.564 45.7372C117.188 46.276 117.095 46.8722 117.288 47.5259C117.483 48.1885 117.873 48.6381 118.458 48.8746C119.052 49.1085 119.774 49.1003 120.625 48.8502C121.386 48.6264 121.969 48.2603 122.374 47.7521C122.791 47.2501 122.892 46.6365 122.679 45.9112Z" fill="black"/>
                                <path d="M129.332 66.1568L127.877 66.1203L127.907 64.9167L129.362 64.9532L129.332 66.1568ZM126.589 66.0881L119.367 65.9071L119.398 64.7035L126.619 64.8845L126.589 66.0881Z" fill="black"/>
                                <path d="M124.554 81.2725L123.491 80.9174C124.134 81.7621 124.29 82.6801 123.958 83.6715C123.689 84.477 123.283 84.9858 122.74 85.1979C122.202 85.4217 121.526 85.3976 120.712 85.1254L116.158 83.603L116.535 82.4744L120.571 83.8236C120.908 83.9361 121.173 84.0101 121.368 84.0457C121.569 84.0931 121.79 84.108 122.032 84.0905C122.283 84.0759 122.493 83.9787 122.661 83.7988C122.829 83.6189 122.97 83.3608 123.082 83.0244C123.517 81.7232 122.911 80.7974 121.265 80.247L117.68 79.0487L118.057 77.9201L124.909 80.2102L124.554 81.2725Z" fill="black"/>
                                <path d="M112.074 104.842L107.098 100.754C106.615 100.357 106.264 100.027 106.046 99.7632C105.821 99.4935 105.649 99.1953 105.531 98.8687C105.191 97.9007 105.456 96.8867 106.327 95.8265C106.842 95.1991 107.408 94.7757 108.023 94.5563C108.631 94.3309 109.256 94.4222 109.9 94.8299L109.126 95.7711C108.417 95.3697 107.713 95.5945 107.014 96.4455C106.546 97.0153 106.353 97.5448 106.434 98.0342C106.509 98.5308 106.862 99.05 107.492 99.5917L108.164 100.162C107.777 99.2521 107.923 98.3823 108.605 97.5529C109.221 96.8029 109.969 96.4147 110.848 96.3882C111.722 96.3689 112.591 96.7148 113.456 97.4257C114.271 98.0952 114.787 98.8869 115.002 99.8008C115.225 100.721 115.013 101.574 114.367 102.36C114.048 102.749 113.68 103.027 113.266 103.194C112.845 103.368 112.408 103.414 111.956 103.332L112.767 103.999L112.074 104.842ZM113.531 101.745C113.94 101.248 114.068 100.695 113.916 100.086C113.765 99.491 113.35 98.9149 112.672 98.358C112.059 97.8544 111.444 97.5964 110.826 97.584C110.215 97.5775 109.708 97.8195 109.306 98.3099C108.885 98.8219 108.751 99.3821 108.903 99.9905C109.05 100.606 109.462 101.192 110.14 101.749C110.775 102.271 111.39 102.529 111.986 102.523C112.584 102.531 113.099 102.272 113.531 101.745Z" fill="black"/>
                                <path d="M83.529 125.038L84.815 124.06L83.5461 123.148L83.9617 122.571L85.2879 123.523L85.7587 121.985L86.4745 122.194L85.9997 123.674L87.5755 123.72L87.5618 124.446L85.964 124.377L86.4542 125.882L85.7354 126.116L85.2452 124.612L84.0078 125.604L83.529 125.038Z" fill="black"/>
                            </svg> 
                        </i>                   
                    </div>
                </div>
                {{-- End loading --}}  
             </div>
         </div>
    </div>
</section>
{{-- End Article Section --}}
@endsection

@section('script')
<script>
    $(document).on('click', '.item-img', () => {
        location.href = "/shop/details";
    });  
</script>    
@endsection

@section('footer')
  @include('layouts.footer-1')    
@endsection