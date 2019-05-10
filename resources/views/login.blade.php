<!DOCTYPE html>
<html lang="en">

<head>
    @include('material_partials.heads')
</head>

<body class="login-page sidebar-collapse">
<!-- Extra details for Live View on GitHub Pages -->
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="../../../https@www.googletagmanager.com/ns.html@id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

@include('material_partials.header')


<div class="page-header header-filter"
     style="background-image: url('{{asset('assets/img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card card-login card-hidden">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">{{ __('Login') }}</h4>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <p class="card-description text-center">Or Be Classical</p>
                            <span class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">face</i>
                                        </span>
                                    </div>
                                    <input name="email" type="text" class="form-control" placeholder="{{ __('Email') }}">
                                </div>
                            </span>
                            <span class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
                                </div>
                            </span>
                        </div>
                        <div class="card-footer justify-content-center">
                            <input type="submit" class="btn btn-rose btn-link btn-lg" value="Lets Go">
                        </div>
                    </div>
                </form>
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
                </script>
                , made with <i class="material-icons">favorite</i> by
                <a href="../../../https@www.creative-tim.com/default.htm" target="_blank">Creative Tim</a> for a better
                web.
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
    <img height="1" width="1" style="display:none"
         src="../../../https@www.facebook.com/tr@id=111649226022273&ev=PageView&noscript=1"/>
</noscript>
</body>

</html>
