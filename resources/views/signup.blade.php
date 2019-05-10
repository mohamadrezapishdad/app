<!DOCTYPE html>
<html lang="en">

<head>
    @include('material_partials.heads')
</head>

<body class="signup-page sidebar-collapse">
<!-- Extra details for Live View on GitHub Pages -->
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="../../../https@www.googletagmanager.com/ns.html@id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
@include('material_partials.header')


<div class="page-header header-filter" filter-color="purple" style="background-image: url('{{asset('assets/img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <div class="card card-signup">
                    <h2 class="card-title text-center">Register</h2>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="info info-horizontal">
                                    <div class="icon icon-rose">
                                        <i class="material-icons">timeline</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Marketing</h4>
                                        <p class="description">
                                            We've created the marketing campaign of the website. It was a very interesting collaboration.
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">code</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Fully Coded in HTML5</h4>
                                        <p class="description">
                                            We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-info">
                                        <i class="material-icons">group</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Built Audience</h4>
                                        <p class="description">
                                            There is also a Fully Customizable CMS Admin Dashboard for this product.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mr-auto">
                                <div class="social text-center">
                                    <button class="btn btn-just-icon btn-round btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-facebook">
                                        <i class="fa fa-facebook"> </i>
                                    </button>
                                    <h4> or be classical </h4>
                                </div>
                                <form class="form" method="POST" action="{{route('register')}}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="material-icons">face</i>
                                                </span>
                                            </div>
                                            <input name="name" type="text" class="form-control" placeholder="{{ __('Name') }}" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="material-icons">face</i>
                                                </span>
                                            </div>
                                            <input name="username" type="text" class="form-control" placeholder="{{ __('Username') }}" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="material-icons">mail</i>
                                                </span>
                                            </div>
                                            <input name="email" type="text" class="form-control" placeholder="{{ __('Email Address') }}" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input name="password" type="password" placeholder="{{ __('Password') }}" required  class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input name="password_confirmation" type="password" placeholder="{{ __('Retype Password') }}" required  class="form-control" required autocomplete="new-password" />
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input name="agree_to _terms" class="form-check-input" type="checkbox" value="" checked>
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                            I agree to the
                                            <a href="#something">terms and conditions</a>.
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-primary btn-round" value="Get Started" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="../../../https@www.creative-tim.com/default.htm">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="../../../https@creative-tim.com/presentation">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="../../../blog.creative-tim.com/default.htm">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="../../../https@www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="../../../https@www.creative-tim.com/default.htm" target="_blank">Creative Tim</a> for a better web.
            </div>
        </div>
    </footer>
</div>


@include('material_partials.scripts')
<!--ipt>
  $(document).ready(function() {


    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-46172202-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();

    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }

  });
</scri-->
<noscript>
    <img height="1" width="1" style="display:none" src="../../../https@www.facebook.com/tr@id=111649226022273&ev=PageView&noscript=1" />
</noscript>
</body>

</html>
