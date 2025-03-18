<div>
    <h1>Learn Localization in laravel</h1>
    <label>Choose language</label>

    <ul>
        <li>
            <a href="{{url('/setland/en')}}">English</a> <br>
            <a href="{{url('/setland/hi')}}">Hindi</a><br>
            <a href="{{url('/setland/ko')}}">Korean</a><br>
        </li>
    </ul>

    <h2>{{__('welcome.heading1')}}</h2>
    <h3>{{__('welcome.heading2')}}</h3>
    <a href="{{url('home')}}">{{__('welcome.Home')}}</a> <br>  
    <a href="{{url('about')}}">{{__('welcome.AboutUs')}}</a><br>
    <a href="{{url('service')}}">{{__('welcome.Service')}}</a><br>
    <a href="{{url('contact')}}">{{__('welcome.Contactus')}}</a>


    <h3>{{__("welcome.intro",["name"=>"Sharwan Kumawat"])}}</h3>
</div>