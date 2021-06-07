@extends('frontend.layout.master')
@section('content')

    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home    </a></li>
                <li class="active">Contact</li>
            </ol><!-- Block  Breadcrumb-->

            <h2 class="page-heading">
                <span class="page-heading-title2">Contact Us</span>
            </h2>

            <div class="page-content" id="contact">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="page-subheading">CONTACT FORM</h3>
                        <form class="forms-sample" method="POST" action="{{ route('contactus.store') }}">
                            @csrf()
                        <div class="contact-form-box">
                            <div class="form-selector">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control input-sm @error('name') is-invalid @enderror" id="name" placeholder="Enter Name" value="{{ old('name') }}">
                                    @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-selector">
                                <label>Email address</label>
                                <input type="text" id="email" class="form-control input-sm @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-selector">
                                <label>Contact</label>
                                <input type="text" id="contactno" class="form-control input-sm @error('contact') is-invalid @enderror" name="contact" placeholder="Enter Contact" value="{{ old('contact') }}">
                                @error('contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-selector">
                                <label>Message</label>
                                <textarea id="message" rows="10" class="form-control input-sm @error('message') is-invalid @enderror" name="message" placeholder="Enter Message" value="{{ old('message') }}"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-selector">
                                <button type="submit" class="btn" id="btn-send-contact">Send</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div id="contact_form_map" class="col-xs-12 col-sm-6">
                        <h3 class="page-subheading">Information</h3>
                        <br>
                        <ul class="store_info">
                            @php $address= \App\Models\HomeSetting::where('key', 'address')->where('status', '1')->first(); @endphp
                            <li><i class="fa fa-home"></i><span>{{$address->value}}</span></li>
                            @php $phone= \App\Models\HomeSetting::where('key', 'phone')->where('status', '1')->first(); @endphp
                            <li><i class="fa fa-phone"></i><span>{{$phone->value}}</span></li>
                            @php $email= \App\Models\HomeSetting::where('key', 'email')->where('status', '1')->first(); @endphp
                            <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:%73%75%70%70%6f%72%74@%6b%75%74%65%74%68%65%6d%65.%63%6f%6d">{{$email->value}}</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </main><!-- end MAIN -->

@endsection

@section('page_css')
    <link rel="stylesheet" href="{{asset('admin-assets/css/plugins/toastr.css')}}" />
@endsection
@section('page_script')
    <script src="{{ asset('admin-assets/js/plugins/toastr.min.js') }}"></script>
@endsection
