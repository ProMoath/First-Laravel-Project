<!--================ Start Footer Area =================-->
<footer class="footer-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                        magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" id="">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <form  novalidate="true" action={{route('subscribe/store')}}
                              method="post" class="form-inline">
                            @csrf

                            <div class="d-flex flex-row">

                                <input class="form-control" name="email" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                       required="" type="email" value="{{old('email')}}">
                                <button type="submit" class="but"><span class="lnr lnr-arrow-right"></span></button>
                                <style>
                                    .but{
-webkit-text-size-adjust: 100%;-webkit-tap-highlight-color: transparent;--blue: #007bff;--indigo: #6610f2;--purple: #6f42c1;--pink: #e83e8c;--red: #dc3545;--orange: #fd7e14;--yellow: #ffc107;--green: #28a745;--teal: #20c997;--cyan: #17a2b8;--white: #fff;--gray: #6c757d;--gray-dark: #343a40;--primary: #007bff;--secondary: #6c757d;--success: #28a745;--info: #17a2b8;--warning: #ffc107;--danger: #dc3545;--light: #f8f9fa;--dark: #343a40;--breakpoint-xs: 0;--breakpoint-sm: 576px;--breakpoint-md: 768px;--breakpoint-lg: 992px;--breakpoint-xl: 1200px;--font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;box-sizing: border-box;margin: 0;font-family: inherit;overflow: visible;text-transform: none;-webkit-appearance: button;display: inline-block;font-weight: 400;text-align: center;white-space: nowrap;vertical-align: middle;user-select: none;font-size: 1rem;line-height: 1.5;transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;background: #ff9907;color: #222;border-radius: 0;border-top-left-radius: 0px;border-bottom-left-radius: 0px;padding: 6px 12px;border: 0;cursor: pointer;
}
                                </style>
{{--                                <div style="position: absolute; left: -5000px;">--}}
{{--                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">--}}
{{--                                </div>--}}

                                <!-- <div class="col-lg-4 col-md-4">
                                      <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                    </div>  -->
                            </div>
                                @error('email')<span class="text-danger">{{$message}}</span>  @enderror
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="{{asset('assest')}}/img/instagram/i1.jpg" alt=""></li>
                        <li><img src="{{asset('assest')}}/img/instagram/i2.jpg" alt=""></li>
                        <li><img src="{{asset('assest')}}/img/instagram/i3.jpg" alt=""></li>
                        <li><img src="{{asset('assest')}}/img/instagram/i4.jpg" alt=""></li>
                        <li><img src="{{asset('assest')}}/img/instagram/i5.jpg" alt=""></li>
                        <li><img src="{{asset('assest')}}/img/instagram/i6.jpg" alt=""></li>
                        <li><img src="{{asset('assest')}}/img/instagram/i7.jpg" alt=""></li>
                        <li><img src="{{asset('assest')}}/img/instagram/i8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-behance"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>
</footer>
