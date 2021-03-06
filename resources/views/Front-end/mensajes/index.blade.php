@extends('front-end.template')

@section('head')

    @parent

    <link type="text/css" rel="stylesheet" href="{{ asset('css/settings.css') }}" />

@stop

@section('content')

<section class="block mt-3">
    <div class="container">
        <div class="row">

            @if (session()->has('flash'))
                
            <div class="container">
                <div class="alert alert-success">{{ session('flash') }}</div>
            </div>
            
            @endif


            <div class="col-md-12">
                <div class="heading4">
                    <h2>Enviar mensaje</h2>
                    <span>Que cabezal buscas aca puedes enviarnos mensaje con tus dudad y con gusto responderemos a la brevedad</span>
                </div>
 
                <div class="contact-page-sec">
                    <div class="row">
                        <div class="col-md-6 column">
                            <div class="contact-form">
                                <form action="{{ route('enviarmensaje') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <i class="fa fa-user"></i>
                                            <input type="text" name="recipient_id" value="{{ $users->id }}" class="hidden">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <i class="fa fa-at"></i>
                                            <input type="text" name="email" value="{{ $users->email }}" class="hidden">
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <i class="fa fa-truck fa-lg"></i>
                                            <input type="text" name="nCabezal"  placeholder="Que cabezal buscas ?">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <i class="fa fa-pencil"></i>
                                            <textarea name="text" placeholder="Escribe tu mensaje"></textarea>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <button class="flat-btn" type="submit">ENVIAR</button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 column">
                            <div class="contact-details">
                                <div class="contact-infos">
                                    <ul>
                                        <li>
                                            <span><i class="fa fa-phone"></i> Address</span>
                                            <p>765 Shuttle Swift Area <br>at New Born Road </p>
                                        </li>
                                        <li>
                                            <span><i class="fa fa-fax"></i> Fax/Email</span>
                                            <p>674-46-7-0,   234-8-987 <br>hello@email.com</p>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="social-btns">
                                    <li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a title="" href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a title="" href="#"><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810658868!2d-0.24168151926400253!3d51.5287718408995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2s!4v1452621215004"></iframe>
                            </div>
                        </div>
                    </div>
            </div>
        
        </div>
    </div>
    </div>
</section>



@endsection()
